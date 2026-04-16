<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'title',
        'employment_type',
        'work_mode',
        'experience',
        'description',
        'cta_label',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
