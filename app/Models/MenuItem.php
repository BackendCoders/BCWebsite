<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model


{


 const TYPE_DIGITAL = 'digital_marketing';
    const TYPE_SOFTWARE = 'software_development';

    public static function getTypes()
    {
        return [
            self::TYPE_DIGITAL => 'Digital Marketing',
            self::TYPE_SOFTWARE => 'Software Development',
        ];
    }

    public function getTypeLabelAttribute()
    {
        return self::getTypes()[$this->type] ?? 'Unknown';
    }

    protected $fillable = [
        'title',
        'page_id',
        'parent_id',
        'order',
        'type',
        'icon',
        'is_active'
    ];

    
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
