<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'client_name',
        'category',
        'status',
        'technologies',
        'live_url',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'faqs',
        'is_featured',
        'completed_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'completed_at' => 'date',
        'faqs' => 'array',
    ];

    public function getSlugAttribute(): string
    {
        return Str::slug((string) $this->title);
    }

    public function getTechnologiesArrayAttribute(): array
    {
        return collect(explode(',', (string) $this->technologies))
            ->map(fn ($technology) => trim($technology))
            ->filter()
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
        $source = trim(strip_tags((string) ($this->description ?: '')));

        return max(1, (int) ceil(str_word_count($source) / 200));
    }

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
            $mimeType = Storage::disk('public')->mimeType($path) ?: 'image/jpeg';
            $contents = Storage::disk('public')->get($path);

            if ($contents !== false && $contents !== null) {
                return 'data:' . $mimeType . ';base64,' . base64_encode($contents);
            }
        }

        if (file_exists(public_path('storage/' . $path))) {
            return asset('storage/' . $path);
        }

        if (file_exists(public_path($path))) {
            return asset($path);
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
}
