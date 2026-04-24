<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    // ✅ Constants (correct)
    const TYPE_DIGITAL = 'digital_marketing';
    const TYPE_SOFTWARE = 'software_development';

    // ✅ Fillable (good)
    protected $fillable = [
        'title',
        'page_id',
        'parent_id',
        'order',
        'type',
        'icon',
        'is_active'
    ];

    // ✅ Dynamic Types
    public static function getTypes()
    {
        return [
            self::TYPE_DIGITAL => 'Digital Marketing',
            self::TYPE_SOFTWARE => 'Software Development',
        ];
    }

    // ✅ Label Accessor (FIXED for NULL case)
    public function getTypeLabelAttribute()
    {
        if (!$this->type) {
            return 'No Type';
        }

        return self::getTypes()[$this->type] ?? 'Unknown';
    }

    // ✅ Scope (VERY USEFUL for frontend menu)
    public function scopeDigital($query)
    {
        return $query->where('type', self::TYPE_DIGITAL);
    }

    public function scopeSoftware($query)
    {
        return $query->where('type', self::TYPE_SOFTWARE);
    }

    // ✅ Relations

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->orderBy('order');
    }
}