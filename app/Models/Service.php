<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'service_category_id',
        'title',
        'slug',
        'duration',
        'price',
        'summary',
        'details',
        'status',
        'priority',
        'metadata',
        'starts_at',
        'ends_at',
    ];

    protected $casts = [
        'status' => 'boolean',
        'priority' => 'integer',
        'price' => 'decimal:2',
        'metadata' => 'array',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function scopeSearch($query, ?string $term)
    {
        if (! $term) {
            return $query;
        }

        return $query->where('title', 'like', '%'.$term.'%')
            ->orWhere('summary', 'like', '%'.$term.'%');
    }
}
