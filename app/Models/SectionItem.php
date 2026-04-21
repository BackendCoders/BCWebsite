<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionItem extends Model
{

    protected $fillable = [
        'page_id',
        'section_id',
        'type',
        'title',
        'description',
        'image',
        'extra',
        'order'
    ];

    protected $casts = [
        'extra' => 'array',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
