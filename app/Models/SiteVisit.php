<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteVisit extends Model
{
    protected $fillable = [
        'visit_key',
        'visitor_id',
        'ip_address',
        'path',
    ];
}
