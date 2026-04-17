<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
   
    protected $fillable = [
        'service_id',
        'hero_title',
        'hero_description',
        'hero_image',
        'about_title',
        'about_description',
        'content',
        'highlights',
        'features',
        'cta_title',
        'cta_description',
        'cta_button_text',
    ];

    protected $casts = [
        'highlights' => 'array',
        'features' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

