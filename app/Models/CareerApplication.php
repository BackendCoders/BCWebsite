<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'position',
        'about',
        'resume',
        'visitor_id',
        'ip_address',
        'status',
    ];

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
