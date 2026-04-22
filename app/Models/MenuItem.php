<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'title',
        'page_id',
        'parent_id',
        'order',
        'type',        // ✅ ADD THIS
        'icon',        // ✅ ADD THIS
        'is_active'
    ];

 public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
