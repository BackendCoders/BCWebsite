<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class EnsureVisitorId
{
    /**
     * Cookie name for non-sensitive visitor tracking identifier.
     */
    public const COOKIE_NAME = 'bc_visitor_id';

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cookieName = config('tracking.visitor_cookie.name', self::COOKIE_NAME);
        $rawCookie = $request->cookie($cookieName)
            ?? $request->cookie('visitor_id')
            ?? $request->cookies->get(self::COOKIE_NAME)
            ?? $request->cookies->get('visitor_id');

        $hasExistingCookie = false;
        $visitorId = null;

        if (is_string($rawCookie) && preg_match('/^[a-zA-Z0-9\-_]{10,64}$/', trim($rawCookie))) {
            $visitorId = trim($rawCookie);
            $hasExistingCookie = true;
        } elseif ($request->filled('visitor_id') && preg_match('/^[a-zA-Z0-9\-_]{10,64}$/', trim($request->input('visitor_id')))) {
            $visitorId = trim($request->input('visitor_id'));
        } elseif ($request->isMethod('GET')) {
            // Establish first-party visitor session on standard page views
            $visitorId = (string) Str::uuid();
        }

        if ($visitorId) {
            $request->attributes->set('visitor_id', $visitorId);
            $request->cookies->set($cookieName, $visitorId);
        }

        /** @var Response $response */
        $response = $next($request);

        // Attach cookie to response if newly created or missing from request
        if ($visitorId && (! $hasExistingCookie || ! $request->hasCookie($cookieName))) {
            $isHttps = $request->isSecure()
                || app()->environment('production')
                || strtolower((string) $request->header('X-Forwarded-Proto')) === 'https';

            $response->headers->setCookie(
                cookie(
                    name: $cookieName,
                    value: $visitorId,
                    minutes: config('tracking.visitor_cookie.lifetime_days', 365) * 60 * 24,
                    path: '/',
                    domain: config('tracking.visitor_cookie.domain'),
                    secure: $isHttps,
                    httpOnly: false,
                    raw: false,
                    sameSite: 'lax'
                )
            );
        }

        return $response;
    }
}
