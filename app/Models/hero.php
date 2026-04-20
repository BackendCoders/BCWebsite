<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hero extends Model
{
   
    protected $fillable = [
        'title',
        'description',
        'image',
        'button_text',
        'button_url',
        'button_target'
    ];
}

