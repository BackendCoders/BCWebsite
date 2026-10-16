<?php

namespace App\Http\Middleware;

use App\Models\SiteVisit;
use App\Services\VisitorTrackingService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class TrackSiteVisit
{
    public function __construct(private readonly VisitorTrackingService $tracking)
    {
    }

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! $request->isMethod('GET')
            || $request->expectsJson()
            || $request->ajax()
            || $request->user()
            || $response->getStatusCode() < 200
            || $response->getStatusCode() >= 300
            || ! str_starts_with(strtolower((string) $response->headers->get('Content-Type')), 'text/html')) {
            return $response;
        }

        try {
            $context = $this->tracking->context($request);
            $path = '/'.ltrim($request->path(), '/');
            $bucketSeconds = config('tracking.visit_deduplication_minutes', 30) * 60;
            $bucket = intdiv(now()->timestamp, max(60, $bucketSeconds));
            $visitKey = hash('sha256', $context['visitor_id']."\0".$path."\0".$bucket);

            SiteVisit::query()->insertOrIgnore([
                'visit_key' => $visitKey,
                'visitor_id' => $context['visitor_id'],
                'ip_address' => $context['ip_address'],
                'path' => mb_substr($path, 0, 1024),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (Throwable $exception) {
            Log::warning('Page visit tracking failed; the page response was returned normally.', [
                'exception' => $exception::class,
            ]);
        }

        return $response;
    }
}
