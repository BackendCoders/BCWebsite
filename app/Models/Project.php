<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        'is_featured',
        'completed_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'completed_at' => 'date',
    ];
}
