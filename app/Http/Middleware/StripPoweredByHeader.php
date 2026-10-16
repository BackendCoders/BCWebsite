<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StripPoweredByHeader
{
    public function handle(Request $request, Closure $next): Response
    {
        if (function_exists('header_remove')) {
            @header_remove('X-Powered-By');
            @header_remove('x-powered-by');
        }

        $response = $next($request);

        $response->headers->remove('X-Powered-By');
        $response->headers->remove('x-powered-by');

        return $response;
    }
}
