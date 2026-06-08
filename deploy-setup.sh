#!/bin/bash
# Quick deployment setup script for blog images on live server
# Run this once after deploying to production

echo "🚀 Setting up blog image storage for production..."

# Step 1: Create storage symlink
echo "📁 Creating storage symlink..."
php artisan storage:link

# Step 2: Set permissions
echo "🔐 Setting storage permissions..."
chmod -R 775 storage/app/public
chmod -R 755 storage

# Step 3: Verify symlink
echo "✅ Verifying symlink..."
if [ -L public/storage ]; then
    echo "✓ Symlink created successfully!"
else
    echo "✗ Symlink creation failed. Create manually: ln -s ../storage/app/public public/storage"
fi

# Step 4: Check if images exist
echo ""
echo "📸 Checking for blog images..."
if [ -d "storage/app/public/blogs" ]; then
    count=$(ls -1 storage/app/public/blogs 2>/dev/null | wc -l)
    echo "✓ Found $count images in storage/app/public/blogs"
else
    echo "⚠️  blogs directory not found, creating it..."
    mkdir -p storage/app/public/blogs
    chmod 775 storage/app/public/blogs
fi

# Step 5: Verify APP_URL
echo ""
echo "🌐 Checking APP_URL configuration..."
if grep -q "APP_URL" .env; then
    app_url=$(grep "^APP_URL=" .env | cut -d'=' -f2)
    echo "✓ APP_URL is set to: $app_url"
    if echo "$app_url" | grep -q "localhost"; then
        echo "⚠️  WARNING: APP_URL contains 'localhost'. Update to your domain!"
    fi
else
    echo "⚠️  APP_URL not found in .env"
fi

echo ""
echo "✅ Deployment setup complete!"
echo ""
echo "📋 Manual checks to perform:"
echo "  1. Visit a blog page: yourdomain.com/blog/[slug]"
echo "  2. Check browser console for 404 errors"
echo "  3. Inspect image URL in browser DevTools"
echo ""
