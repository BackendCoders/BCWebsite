<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
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
