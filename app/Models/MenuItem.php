<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    const TYPE_DIGITAL = 'digital_marketing';
    const TYPE_SOFTWARE = 'software_development';

    protected $fillable = [
        'title',
        'page_id',
        'parent_id',
        'order',
        'type',
        'icon',
        'is_active',
    ];

    public static function getTypes()
    {
        return [
            self::TYPE_DIGITAL => 'Digital Marketing',
            self::TYPE_SOFTWARE => 'Software Development',
        ];
    }

    public static function normalizeType(?string $type): ?string
    {
        if (blank($type)) {
            return null;
        }

        $value = strtolower(trim((string) $type));

        if (in_array($value, [self::TYPE_DIGITAL, 'digital marketing'], true)) {
            return self::TYPE_DIGITAL;
        }

        if (in_array($value, [self::TYPE_SOFTWARE, 'software development'], true)) {
            return self::TYPE_SOFTWARE;
        }

        return null;
    }

    public function getTypeLabelAttribute()
    {
        if (!$this->type) {
            return 'No Type';
        }

        return self::getTypes()[self::normalizeType($this->type) ?? $this->type] ?? 'Unknown';
    }

    public function scopeDigital($query)
    {
        return $query->whereIn('type', [self::TYPE_DIGITAL, 'Digital Marketing']);
    }

    public function scopeSoftware($query)
    {
        return $query->whereIn('type', [self::TYPE_SOFTWARE, 'Software Development']);
    }

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
