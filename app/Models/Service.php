<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'icon',
        'icon_image',
        'badge_text',
        'subtitle',
        'summary',
        'details',
        'highlights',
        'technologies',
        'cta_label',
        'cta_url',
        'priority',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'highlights' => 'array',
        'technologies' => 'array',
    ];
}
