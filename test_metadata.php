<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$tracking = app(App\Services\VisitorTrackingService::class);
$request = request();
$metadata = $tracking->submissionMetadata($request, 'contacts');

print_r($metadata);
