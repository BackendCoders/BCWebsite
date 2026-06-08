<?php

namespace Tests\Feature;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class BlogImageTest extends TestCase
{
    use RefreshDatabase;

    public function test_blog_image_route_serves_uploaded_files_without_storage_symlink(): void
    {
        Storage::fake('public');
        Storage::disk('public')->put('blogs/test-image.jpg', 'fake-image-bytes');

        $blog = Blog::create([
            'title' => 'Live image test',
            'slug' => 'live-image-test',
            'image' => 'blogs/test-image.jpg',
            'is_published' => true,
            'published_at' => now(),
        ]);

        $this->assertTrue(Str::contains($blog->getImageUrl(), '/blog-images/blogs/test-image.jpg'));

        $response = $this->get($blog->getImageUrl());

        $response->assertOk();
        $response->assertHeader('Cache-Control', 'immutable, max-age=31536000, public');
    }
}
