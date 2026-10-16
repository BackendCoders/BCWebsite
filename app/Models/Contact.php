<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
        'visitor_id',
        'ip_address',
        'status',
    ];

    /**
     * Get the full name attribute.
     */
    public function getFullNameAttribute(): string
    {
        $fullName = trim($this->first_name . ' ' . $this->last_name);
        return $fullName !== '' ? $fullName : ($this->first_name ?? 'Anonymous');
    }

    /**
     * Count total submissions associated with this visitor ID.
     */
    public function getVisitorTotalSubmissionsAttribute(): int
    {
        if (empty($this->visitor_id)) {
            return 1;
        }

        $contactCount = Contact::where('visitor_id', $this->visitor_id)->count();
        $appCount = CareerApplication::where('visitor_id', $this->visitor_id)->count();

        return $contactCount + $appCount;
    }
}
