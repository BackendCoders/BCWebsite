<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Blog;
use Illuminate\Support\Str;

class ExtractBase64Images extends Command
{
    protected $signature = 'blog:extract-base64';
    protected $description = 'Extracts base64 images from blog posts and saves them as files to fix Medium recommendation.';

    public function handle()
    {
        $blogs = Blog::all();
        $this->info("Scanning " . $blogs->count() . " blog posts for base64 images...");
        
        $count = 0;

        foreach ($blogs as $blog) {
            $content = $blog->content;
            $updated = false;
            
            if (is_string($content) && preg_match_all('/src=["\'](data:image\/([^;]+);base64,([^"\']+))["\']/i', $content, $matches)) {
                $this->info("Found " . count($matches[0]) . " base64 images in content of: {$blog->slug}");
                
                foreach ($matches[0] as $index => $fullMatch) {
                    $extension = strtolower($matches[2][$index]);
                    if ($extension === 'jpeg') $extension = 'jpg';
                    $base64Data = $matches[3][$index];
                    $imageData = base64_decode($base64Data);
                    
                    if ($imageData === false) {
                        $this->error("Failed to decode base64 image $index in {$blog->slug}");
                        continue;
                    }
                    
                    $filename = $blog->slug . '-' . ($index + 1) . '-' . Str::random(5) . '.' . $extension;
                    $directory = public_path('assets/images/blog');
                    $filepath = $directory . '/' . $filename;
                    
                    if (!is_dir($directory)) {
                        mkdir($directory, 0755, true);
                    }
                    
                    file_put_contents($filepath, $imageData);
                    
                    $url = asset('assets/images/blog/' . $filename);
                    $content = str_replace($matches[1][$index], $url, $content);
                    
                    $this->info("Saved image to: $filepath");
                }
                
                $blog->content = $content;
                $updated = true;
            }
            
            if (is_string($blog->image) && strpos($blog->image, 'data:image/') === 0) {
                if (preg_match('/^data:image\/([^;]+);base64,(.+)$/i', $blog->image, $matches)) {
                    $extension = strtolower($matches[1]);
                    if ($extension === 'jpeg') $extension = 'jpg';
                    $imageData = base64_decode($matches[2]);
                    
                    if ($imageData !== false) {
                        $filename = $blog->slug . '-feature-' . Str::random(5) . '.' . $extension;
                        $directory = public_path('assets/images/blog');
                        $filepath = $directory . '/' . $filename;
                        
                        if (!is_dir($directory)) {
                            mkdir($directory, 0755, true);
                        }
                        
                        file_put_contents($filepath, $imageData);
                        
                        $blog->image = 'assets/images/blog/' . $filename;
                        $updated = true;
                        $this->info("Replaced featured image for: {$blog->slug}");
                    }
                }
            }
            
            if ($updated) {
                $blog->save();
                $count++;
                $this->info("Updated blog: {$blog->slug}");
            }
        }
        
        $this->info("Process completed. Updated $count blogs.");
    }
}
