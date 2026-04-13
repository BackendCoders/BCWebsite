<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
protected $fillable = [
    'category_id',
    'title',
    'slug',
    'excerpt',
    'content',
    'thumbnail',
    'read_time',
    'published_at',
    'is_featured',
    'status'
];

public function category()
{
    return $this->belongsTo(Category::class);
}
}
