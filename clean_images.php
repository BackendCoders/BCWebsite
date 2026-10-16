<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

foreach (App\Models\Project::all() as $p) {
    if (strpos($p->content, 'data:image') !== false) {
        echo "Project {$p->id} ({$p->title}) has base64 image\n";
        // Let's strip out the base64 image or just show what it is.
        // We will remove all <img> tags that have data:image
        $newContent = preg_replace('/<img[^>]+src="data:image[^>]+>/i', '', $p->content);
        $p->content = $newContent;
        $p->save();
        echo "Cleaned Project {$p->id}\n";
    }
}
foreach (App\Models\Blog::all() as $b) {
    if (strpos($b->content, 'data:image') !== false) {
        echo "Blog {$b->id} ({$b->title}) has base64 image\n";
        $newContent = preg_replace('/<img[^>]+src="data:image[^>]+>/i', '', $b->content);
        $b->content = $newContent;
        $b->save();
        echo "Cleaned Blog {$b->id}\n";
    }
}
