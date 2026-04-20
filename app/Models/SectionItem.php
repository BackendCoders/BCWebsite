<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionItem extends Model
{

    protected $fillable = [
        'section_id',
        'title',
        'description',
        'image',
        'extra',
        'order'
    ];
}
