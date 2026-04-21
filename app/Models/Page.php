<?php

namespace App\Models;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

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

    public function sections()
    {
        return $this->hasMany(Section::class)->orderBy('order');
    }
}

