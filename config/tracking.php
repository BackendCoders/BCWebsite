<?php

return [
    // Record one page visit per visitor and path within this rolling bucket.
    'visit_deduplication_minutes' => max(1, (int) env('VISIT_DEDUPLICATION_MINUTES', 30)),

    'visitor_cookie' => [
        'name' => 'bc_visitor_id',
        'domain' => env('TRACKING_COOKIE_DOMAIN'),
        'lifetime_days' => max(1, (int) env('TRACKING_COOKIE_LIFETIME_DAYS', 365)),
    ],
];
