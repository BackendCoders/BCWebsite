<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class OfficeImage extends Model
{
    use HasFactory;

    public const CATEGORIES = [
        'Workspace & Infrastructure',
        'Office Interior',
        'Team & People',
        'Meeting & Collaboration',
        'Work Environment',
        'Company Activities',
    ];

    protected $fillable = [
        'title',
        'caption',
        'alt_text',
        'image_path',
        'category',
        'order',
        'is_featured',
        'is_published',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'order' => 'integer',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('id', 'desc');
    }

    public function getImageUrlAttribute(): string
    {
        if (empty($this->image_path)) {
            return asset('assets/images/office.jpg');
        }

        if (str_starts_with($this->image_path, 'http://') || str_starts_with($this->image_path, 'https://')) {
            return $this->image_path;
        }

        if (str_starts_with($this->image_path, 'assets/')) {
            return asset($this->image_path);
        }

        if (str_starts_with($this->image_path, 'storage/')) {
            return asset($this->image_path);
        }

        if (Storage::disk('public')->exists($this->image_path)) {
            return Storage::disk('public')->url($this->image_path);
        }

        return asset($this->image_path);
    }
}

