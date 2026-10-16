<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$projects = App\Models\Project::all();
echo "Found " . count($projects) . " projects\n";
foreach ($projects as $p) {
    if (preg_match('/data:image/i', $p->content)) {
        echo "Project {$p->id} has data:image in content\n";
    }
    if (preg_match('/data:image/i', $p->description)) {
        echo "Project {$p->id} has data:image in description\n";
    }
}

$blogs = App\Models\Blog::all();
echo "Found " . count($blogs) . " blogs\n";
foreach ($blogs as $b) {
    if (preg_match('/data:image/i', $b->content)) {
        echo "Blog {$b->id} has data:image in content\n";
    }
}
