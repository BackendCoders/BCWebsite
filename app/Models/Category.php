<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
    'name',
    'slug',
    'description'
    ];

    // ✅ AUTO SLUG GENERATION
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($category) {
            if (empty($category->slug) && !empty($category->name)) {
                $category->slug = static::uniqueSlug($category->name, $category->id);
            }
        });
    }

    public static function uniqueSlug(string $name, ?int $ignoreId = null): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $index = 1;

        while (static::where('slug', $slug)
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $base . '-' . $index;
            $index++;
        }

        return $slug;
    }
}
