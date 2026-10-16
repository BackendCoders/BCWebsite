<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$blogs = App\Models\Blog::all();
foreach ($blogs as $b) {
    echo "Blog {$b->id} ({$b->title}):\n";
    echo "Image: " . substr($b->image, 0, 100) . "\n";
    if (strpos($b->image, 'base64') !== false || strpos($b->image, 'data:image') !== false) {
        echo "Found base64 in image column!\n";
        $b->image = 'assets/images/banner.png';
        $b->save();
        echo "Cleaned Blog {$b->id} image column.\n";
    }
}
$projects = App\Models\Project::all();
foreach ($projects as $p) {
    if (strpos($p->image, 'base64') !== false || strpos($p->image, 'data:image') !== false) {
        echo "Project {$p->id} has base64 in image column!\n";
        $p->image = 'assets/images/banner.png';
        $p->save();
        echo "Cleaned Project {$p->id} image column.\n";
    }
}
