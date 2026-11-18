<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplyPublicPageCacheHeaders
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Never publicly cache non-GET, non-200, ajax, json, authenticated, or sensitive requests
        if (! $request->isMethod('GET')
            || $response->getStatusCode() !== 200
            || $request->expectsJson()
            || $request->ajax()
            || $request->user() !== null
            || $this->isSensitiveOrTransactionalPath($request)
            || ! str_starts_with(strtolower((string) $response->headers->get('Content-Type')), 'text/html')
            || ($request->hasSession() && ($request->session()->has('errors') || $request->session()->has('status') || $request->session()->has('success')))) {

            // For sensitive, transactional, auth, or admin requests, ensure no-store private caching
            if ($request->user() !== null || $this->isSensitiveOrTransactionalPath($request) || ! $request->isMethod('GET')) {
                $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, private');
                $response->headers->set('Pragma', 'no-cache');
            }

            return $response;
        }

        // Only allow public edge caching on verified public, anonymous GET pages
        // max-age=60 (browser 1m), s-maxage=300 (CDN edge 5m), stale-while-revalidate=600
        $response->headers->set('Cache-Control', 'public, max-age=60, s-maxage=300, stale-while-revalidate=600');

        return $response;
    }

    /**
     * Check if the requested path is sensitive, authenticated, or transactional.
     */
    protected function isSensitiveOrTransactionalPath(Request $request): bool
    {
        return $request->is(
            'admin*',
            'dashboard*',
            'login*',
            'register*',
            'forgot-password*',
            'reset-password*',
            'password*',
            'api*',
            'till*',
            'layaway*',
            'payment*',
            'checkout*',
            'cart*',
            'order*',
            'livewire*',
            'profile*'
        );
    }
}
