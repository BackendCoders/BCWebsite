<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Section;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'canonical_url',
        'meta_keywords',
        'is_index',
    ];

    protected $casts = [
        'is_index' => 'boolean',
    ];

    // 🔗 Sections (already correct)
    public function sections()
    {
        return $this->hasMany(Section::class)->orderBy('order');
    }

    // 🔗 Menu relation
    public function menuItem()
    {
        return $this->hasOne(MenuItem::class);
    }

    // ✅ AUTO SLUG GENERATION (VERY IMPORTANT)
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($page) {
            $page->slug = Str::slug($page->slug);
        });
    }
}