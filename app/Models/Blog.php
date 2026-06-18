<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_published',
        'published_at',
        'is_featured',
        'table_of_contents',
        'faqs',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'table_of_contents' => 'array',
        'faqs' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getTableOfContentsItemsAttribute(): array
    {
        return collect($this->table_of_contents ?? [])
            ->filter()
            ->map(function ($item, $index) {
                if (is_string($item)) {
                    $title = trim($item);

                    return [
                        'title' => $title,
                        'anchor' => Str::slug($title) ?: 'section-'.($index + 1),
                    ];
                }

                $title = trim((string) data_get($item, 'title', data_get($item, 'text', '')));

                return [
                    'title' => $title ?: 'Section '.($index + 1),
                    'anchor' => data_get($item, 'anchor') ?: (Str::slug($title) ?: 'section-'.($index + 1)),
                ];
            })
            ->values()
            ->all();
    }

    public function getFaqItemsAttribute(): array
    {
        return collect($this->faqs ?? [])
            ->filter()
            ->map(function ($item) {
                if (is_string($item)) {
                    return [
                        'question' => trim($item),
                        'answer' => '',
                    ];
                }

                return [
                    'question' => trim((string) data_get($item, 'question', '')),
                    'answer' => (string) data_get($item, 'answer', ''),
                ];
            })
            ->filter(fn ($item) => filled($item['question']))
            ->values()
            ->all();
    }

    public function getReadingTimeAttribute(): int
    {
        $source = trim(strip_tags((string) ($this->content ?: $this->excerpt ?: '')));

        return max(1, (int) ceil(str_word_count($source) / 200));
    }

    /**
     * Get the image URL for this blog post.
     * Works reliably on both local and production environments.
     */
    public function getImageUrl(): string
    {
        if (! $this->image) {
            return asset('assets/images/banner.png');
        }

        $path = $this->normalizeImagePath($this->image);

        if (Str::startsWith($path, ['http://', 'https://', '//', 'data:'])) {
            return $path;
        }

        if (Storage::disk('public')->exists($path)) {
            return route('blogs.image', ['path' => $path]);
        }

        $publicPath = public_path($path);
        if (file_exists($publicPath)) {
            return asset($path);
        }

        $storagePublicPath = public_path('storage/' . $path);
        if (file_exists($storagePublicPath)) {
            return asset('storage/' . $path);
        }

        return asset('assets/images/banner.png');
    }

    private function normalizeImagePath(string $path): string
    {
        $path = trim(str_replace('\\', '/', $path));
        $path = ltrim($path, '/');

        if (Str::startsWith($path, 'public/')) {
            return Str::after($path, 'public/');
        }

        if (Str::startsWith($path, 'storage/')) {
            return Str::after($path, 'storage/');
        }

        return $path;
    }

    // ✅ AUTO SLUG GENERATION
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($blog) {
            if (empty($blog->slug) && !empty($blog->title)) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }
}
