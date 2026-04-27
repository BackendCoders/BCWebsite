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
                $category->slug = Str::slug($category->name);
            }
        });
    }
}

