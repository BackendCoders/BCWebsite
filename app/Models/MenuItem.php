<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public const TYPE_DIGITAL = 'digital';
    public const TYPE_SOFTWARE = 'software';

    protected $fillable = [
        'title',
        'page_id',
        'parent_id',
        'order',
        'type',
        'icon',
        'is_active'
    ];

public function getTypeLabelAttribute()
{
    return match($this->type) {
        self::TYPE_DIGITAL => 'Digital Marketing',
        self::TYPE_SOFTWARE => 'Software Development',
        default => 'Unknown',
    };
}
    //  Relation with Page
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    //  Parent Menu (for submenu)
    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    //  Child Menu (for submenu)
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->orderBy('order');
    }
}


