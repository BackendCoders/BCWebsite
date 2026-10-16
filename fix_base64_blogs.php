<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Blog;
use Illuminate\Support\Str;

$blogs = Blog::all();

foreach ($blogs as $blog) {
    $updated = false;
    
    // Check 'image' column
    if (strpos($blog->image, 'data:image/') === 0) {
        echo "Found base64 in image column for blog: {$blog->slug}\n";
        preg_match('/^data:image\/([^;]+);base64,(.+)$/', $blog->image, $matches);
        if (!empty($matches)) {
            $extension = $matches[1];
            if ($extension == 'jpeg') $extension = 'jpg';
            $imageData = base64_decode($matches[2]);
            
            $filename = $blog->slug . '-feature-' . Str::random(5) . '.' . $extension;
            $filepath = public_path('assets/images/blog/' . $filename);
            
            if (!is_dir(public_path('assets/images/blog'))) {
                mkdir(public_path('assets/images/blog'), 0777, true);
            }
            
            file_put_contents($filepath, $imageData);
            $blog->image = 'assets/images/blog/' . $filename;
            $updated = true;
            echo "Replaced image column and saved to " . $filepath . "\n";
        }
    }
    
    // Check 'content' column
    $content = $blog->content;
    preg_match_all('/data:image\/([^;]+);base64,([^"\'\s]+)/', $content, $matches);
    
    if (!empty($matches[0])) {
        echo "Found " . count($matches[0]) . " base64 images in content for blog: {$blog->slug}\n";
        
        foreach ($matches[0] as $index => $fullMatch) {
            $extension = $matches[1][$index];
            if ($extension == 'jpeg') $extension = 'jpg';
            $base64Data = $matches[2][$index];
            $imageData = base64_decode($base64Data);
            
            $filename = $blog->slug . '-' . ($index + 1) . '-' . Str::random(5) . '.' . $extension;
            $filepath = public_path('assets/images/blog/' . $filename);
            
            if (!is_dir(public_path('assets/images/blog'))) {
                mkdir(public_path('assets/images/blog'), 0777, true);
            }
            
            file_put_contents($filepath, $imageData);
            
            $url = asset('assets/images/blog/' . $filename);
            
            $content = str_replace($fullMatch, $url, $content);
            echo "Replaced content image " . ($index + 1) . " and saved to " . $filepath . "\n";
        }
        
        $blog->content = $content;
        $updated = true;
    }
    
    if ($updated) {
        $blog->save();
        echo "Updated blog: {$blog->slug}\n\n";
    }
}
