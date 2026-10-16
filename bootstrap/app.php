<?php

use App\Http\Middleware\EnsureAdminRole;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->trustProxies(
            headers: \Illuminate\Http\Request::HEADER_X_FORWARDED_FOR
                | \Illuminate\Http\Request::HEADER_X_FORWARDED_PROTO,
        );

        $middleware->web(prepend: [
            \App\Http\Middleware\StripPoweredByHeader::class,
        ], append: [
            \App\Http\Middleware\EnsureVisitorId::class,
            \App\Http\Middleware\TrackSiteVisit::class,
        ]);

        $middleware->encryptCookies(except: [
            'bc_visitor_id',
            'visitor_id',
        ]);

        $middleware->alias([
            'admin.role' => App\Http\Middleware\EnsureAdminRole::class,
            'admin.api' => App\Http\Middleware\VerifyAdminApiKey::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (
            NotFoundHttpException $exception,
            Request $request
        ) {
            if ($request->expectsJson() || $request->is('api/*')) {
                return null;
            }

        // Let 404s return genuine 404 status instead of soft-404 redirecting to homepage
        return null;
        });
    })->create();
