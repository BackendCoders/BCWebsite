# Blog Images Deployment Setup Guide

## Problem

Blog images are visible locally but not on the live server. This is typically caused by a missing storage symlink.

## Solution Overview

We've implemented a robust image URL helper (`getImageUrl()`) in the Blog model that works on both local and production environments. However, you still need to ensure proper file storage setup on your live server.

## Required Steps on Live Server

### 1. Create Storage Symlink (REQUIRED)

This is the most important step. Run this command on your live server:

```bash
php artisan storage:link
```

This creates a symbolic link from `public/storage` → `storage/app/public`, allowing direct web access to stored images.

**What it does:**

- Creates `public/storage` symlink pointing to `storage/app/public`
- Enables URLs like `/storage/blogs/image.jpg` to work

### 2. Verify Storage Directory Permissions

Ensure the storage directory is writable:

```bash
chmod -R 775 storage/app/public
chmod -R 755 storage
```

### 3. Update Environment Variables

Make sure your `.env` file on the live server has the correct `APP_URL`:

```env
APP_URL=https://yourdomain.com
# or
APP_URL=http://yourdomain.com
```

Do NOT use `http://localhost` on production!

### 4. Verify Files Exist

SSH into your server and check if files exist:

```bash
ls -la storage/app/public/blogs/
```

You should see your blog image files there.

## How the Fix Works

The new `getImageUrl()` method in the Blog model:

1. **First Attempt**: Uses Storage disk to generate URL (most reliable if symlink exists)
2. **Second Attempt**: Falls back to direct file system check and generates URL via `url()` helper
3. **Final Fallback**: Returns default banner image if file not found

This multi-layered approach ensures images display regardless of configuration.

## Testing Checklist

- [ ] Run `php artisan storage:link` on live server
- [ ] Update APP_URL in .env to your domain
- [ ] Verify `storage/app/public/blogs/` directory exists and contains images
- [ ] Check `public/storage` symlink exists: `ls -l public/storage`
- [ ] Visit a blog post page and verify images load
- [ ] Check browser console for 404 errors
- [ ] Test with different browsers/devices

## Database Check (Optional)

If images still don't appear, verify the image paths in the database:

```bash
php artisan tinker
>>> Blog::where('image', '!=', null)->limit(3)->get(['id', 'title', 'image'])->toArray()
```

Images should have paths like: `blogs/filename.jpg` (not full URLs)

## Common Issues and Fixes

### Issue: Images still not showing

- Verify symlink: `ls -l public/storage` should show `storage -> ../storage/app/public`
- Check file exists: `test -f storage/app/public/blogs/filename.jpg && echo "exists" || echo "missing"`
- Check permissions: `stat storage/app/public/blogs/`

### Issue: "File not found" errors

- Verify APP_URL is correct
- Ensure storage directory is readable by web server user
- Check nginx/apache is serving public directory correctly

### Issue: Images work in admin but not frontend

- Check that both routes use the same Blog model
- Ensure cache is cleared: `php artisan cache:clear`

## Nginx Configuration (if needed)

Make sure Nginx knows about the storage symlink:

```nginx
location /storage {
    alias /var/www/yourapp/storage/app/public;
    expires 30d;
    add_header Cache-Control "public, immutable";
}
```

## Apache Configuration (if needed)

Ensure `.htaccess` allows symlink access or add:

```apache
<Directory /var/www/yourapp/public>
    Options FollowSymLinks
    AllowOverride All
</Directory>
```

## Automatic Deployment

If using a deployment tool (Laravel Forge, Envoyer, etc.):

Add to your deploy script AFTER code is deployed:

```bash
# Navigate to app directory
cd /var/www/yourapp

# Create storage symlink
php artisan storage:link

# Set permissions
chmod -R 775 storage
chmod -R 755 storage/app/public
```

## References

- [Laravel Storage Documentation](https://laravel.com/docs/filesystem)
- [Laravel Deployment Guide](https://laravel.com/docs/deployment)
