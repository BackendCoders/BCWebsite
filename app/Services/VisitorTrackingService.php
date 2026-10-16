<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Throwable;

class VisitorTrackingService
{
    /**
     * Resolve the anonymous visitor identifier and authoritative client IP.
     * The IP comes from Symfony/Laravel's trusted-proxy-aware request handling.
     */
    public function context(Request $request): array
    {
        $visitorId = $request->attributes->get('visitor_id')
            ?? $request->cookie(config('tracking.visitor_cookie.name', 'bc_visitor_id'))
            ?? $request->cookie('visitor_id');

        if (! is_string($visitorId) || ! preg_match('/^[a-zA-Z0-9\-_]{10,64}$/', trim($visitorId))) {
            $visitorId = (string) Str::uuid();
        } else {
            $visitorId = trim($visitorId);
        }

        $ipAddress = $request->ip();

        if (! is_string($ipAddress) || filter_var($ipAddress, FILTER_VALIDATE_IP) === false) {
            $ipAddress = null;
        }

        return [
            'visitor_id' => $visitorId,
            'ip_address' => $ipAddress,
        ];
    }

    /**
     * Add optional tracking fields only when the deployed table supports them.
     * Schema lookup errors must never prevent the primary form submission.
     */
    public function submissionMetadata(Request $request, string $table): array
    {
        $context = $this->context($request);

        // Deployments may receive the application code before the tracking
        // migration has been run. Only include columns that actually exist.
        $metadata = [];

        foreach ([
            'visitor_id' => $context['visitor_id'],
            'ip_address' => $context['ip_address'],
            'status' => 'new',
        ] as $column => $value) {
            if (Schema::hasColumn($table, $column)) {
                $metadata[$column] = $value;
            }
        }

        return $metadata;
    }
}
