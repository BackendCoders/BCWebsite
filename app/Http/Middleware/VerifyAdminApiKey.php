<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyAdminApiKey
{
    public function handle(Request $request, Closure $next): Response
    {
        $configuredKey = config('admin.api_key');

        if (! $configuredKey || $request->header('X-ADMIN-API-KEY') !== $configuredKey) {
            return response()->json([
                'message' => 'Invalid API credentials.',
            ], 401);
        }

        return $next($request);
    }
}
