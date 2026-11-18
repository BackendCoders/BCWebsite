<?php

namespace App\Services;

use App\Support\UserAgentParser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class VisitorTrackingService
{
    /**
     * Resolve the client IP address with full support for trusted proxies,
     * Hostinger CDN, Cloudflare edge, IPv4 and IPv6.
     */
    public function resolveClientIp(Request $request): ?string
    {
        $ip = $request->ip();

        // If Laravel/Symfony trusted proxy resolution returned a valid public IP, use it
        if ($this->isValidPublicIp($ip)) {
            return $ip;
        }

        // Behind reverse proxies / Hostinger CDN / Cloudflare edge:
        // Hostinger CDN terminates SSL at the edge and sets CF-Connecting-IP or X-Real-IP.
        // If $request->ip() is null, loopback, or private proxy address, check edge headers.
        $edgeHeaders = [
            $request->header('CF-Connecting-IP'),
            $request->header('X-Real-IP'),
        ];

        foreach ($edgeHeaders as $rawHeader) {
            if (is_string($rawHeader)) {
                $candidate = trim(explode(',', $rawHeader)[0]);
                if (filter_var($candidate, FILTER_VALIDATE_IP)) {
                    return $candidate;
                }
            }
        }

        // Check X-Forwarded-For leftmost entry if available
        $forwardedFor = $request->header('X-Forwarded-For');
        if (is_string($forwardedFor)) {
            $parts = explode(',', $forwardedFor);
            $clientPart = trim($parts[0] ?? '');
            if (filter_var($clientPart, FILTER_VALIDATE_IP)) {
                return $clientPart;
            }
        }

        // In local/testing environments, loopback/private IPs are valid
        if (is_string($ip) && filter_var($ip, FILTER_VALIDATE_IP)) {
            return $ip;
        }

        return null;
    }

    /**
     * Check if the string is a valid non-private, non-reserved public IP.
     */
    protected function isValidPublicIp(?string $ip): bool
    {
        if (! is_string($ip) || $ip === '') {
            return false;
        }

        return (bool) filter_var(
            $ip,
            FILTER_VALIDATE_IP,
            FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE
        );
    }

    /**
     * Resolve the existing first-party visitor identifier without inventing fake values.
     */
    public function resolveVisitorId(Request $request): ?string
    {
        $cookieName = config('tracking.visitor_cookie.name', 'bc_visitor_id');

        $candidates = [
            $request->attributes->get('visitor_id'),
            $request->cookie($cookieName),
            $request->cookie('visitor_id'),
            $request->input('visitor_id'),
        ];

        foreach ($candidates as $candidate) {
            if (is_string($candidate)) {
                $candidate = trim($candidate);
                // Validate format: UUID (36 chars) or alphanumeric tracking token (10-64 chars)
                if (preg_match('/^[a-zA-Z0-9\-_]{10,64}$/', $candidate)) {
                    return $candidate;
                }
            }
        }

        return null;
    }

    /**
     * Resolve visitor context containing IP, visitor identifier, and device telemetry.
     */
    public function context(Request $request): array
    {
        $visitorId = $this->resolveVisitorId($request);
        $ipAddress = $this->resolveClientIp($request);
        $userAgent = $request->userAgent();
        $parsedAgent = UserAgentParser::parse($userAgent);

        $referrer = $request->input('referrer') ?? $request->header('referer');
        if (is_string($referrer)) {
            $referrer = Str::limit(trim($referrer), 500, '');
        } else {
            $referrer = null;
        }

        $landingPage = $request->input('landing_page') ?? $request->fullUrl();
        if (is_string($landingPage)) {
            $landingPage = Str::limit(trim($landingPage), 500, '');
        } else {
            $landingPage = null;
        }

        $consentStatus = $visitorId ? 'captured' : 'not_available';

        return [
            'visitor_id' => $visitorId,
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent ? Str::limit($userAgent, 500, '') : null,
            'browser' => $parsedAgent['browser'] ?? null,
            'os' => $parsedAgent['os'] ?? null,
            'device_type' => $parsedAgent['device_type'] ?? null,
            'referrer' => $referrer,
            'landing_page' => $landingPage,
            'consent_status' => $consentStatus,
            'session_id' => session()->isStarted() ? session()->getId() : null,
        ];
    }

    /**
     * Add tracking metadata fields dynamically based on table column availability.
     */
    public function submissionMetadata(Request $request, string $table): array
    {
        $context = $this->context($request);
        $metadata = [];

        $fieldMap = [
            'visitor_id' => $context['visitor_id'],
            'ip_address' => $context['ip_address'],
            'user_agent' => $context['user_agent'],
            'browser' => $context['browser'],
            'os' => $context['os'],
            'device_type' => $context['device_type'],
            'referrer' => $context['referrer'],
            'landing_page' => $context['landing_page'],
            'consent_status' => $context['consent_status'],
            'session_id' => $context['session_id'],
            'status' => 'new',
        ];

        foreach ($fieldMap as $column => $value) {
            if (Schema::hasColumn($table, $column)) {
                $metadata[$column] = $value;
            }
        }

        // Record diagnostic technical telemetry in production logs
        Log::info("Form submission telemetry recorded for table [{$table}]", [
            'visitor_id' => $context['visitor_id'] ?? 'unavailable',
            'ip_detected' => $context['ip_address'] ?? 'unavailable',
            'browser' => $context['browser'] ?? 'unknown',
            'os' => $context['os'] ?? 'unknown',
            'device_type' => $context['device_type'] ?? 'unknown',
            'has_cookie' => ! empty($request->cookie(config('tracking.visitor_cookie.name', 'bc_visitor_id'))),
        ]);

        return $metadata;
    }
}
