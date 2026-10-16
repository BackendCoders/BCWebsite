<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Extract base64 images from blogs
        $blogs = DB::table('blogs')->get();
        $directory = public_path('assets/images/blog');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        foreach ($blogs as $blog) {
            $content = (string) $blog->content;
            $updated = false;

            if (preg_match_all('/src=["\'](data:image\/([^;]+);base64,([^"\']+))["\']/i', $content, $matches)) {
                foreach ($matches[0] as $index => $fullMatch) {
                    $extension = strtolower($matches[2][$index]);
                    if ($extension === 'jpeg') {
                        $extension = 'jpg';
                    }
                    $base64Data = $matches[3][$index];
                    $imageData = base64_decode($base64Data);

                    if ($imageData === false) {
                        continue;
                    }

                    $slug = $blog->slug ?: 'blog-' . $blog->id;
                    $filename = $slug . '-' . ($index + 1) . '-' . Str::random(6) . '.' . $extension;
                    $filepath = $directory . '/' . $filename;

                    file_put_contents($filepath, $imageData);

                    $url = asset('assets/images/blog/' . $filename);
                    $content = str_replace($matches[1][$index], $url, $content);
                    $updated = true;
                }
            }

            $imageField = (string) ($blog->image ?? '');
            $newImageField = $imageField;
            if (str_starts_with($imageField, 'data:image/') && preg_match('/^data:image\/([^;]+);base64,(.+)$/i', $imageField, $matches)) {
                $extension = strtolower($matches[1]);
                if ($extension === 'jpeg') {
                    $extension = 'jpg';
                }
                $imageData = base64_decode($matches[2]);

                if ($imageData !== false) {
                    $slug = $blog->slug ?: 'blog-' . $blog->id;
                    $filename = $slug . '-feature-' . Str::random(6) . '.' . $extension;
                    $filepath = $directory . '/' . $filename;

                    file_put_contents($filepath, $imageData);
                    $newImageField = 'assets/images/blog/' . $filename;
                    $updated = true;
                }
            }

            if ($updated) {
                DB::table('blogs')->where('id', $blog->id)->update([
                    'content' => $content,
                    'image' => $newImageField,
                    'updated_at' => now(),
                ]);
            }
        }

        // 2. Fix internal redirecting links in database tables
        $replacements = [
            '/page/seo-services' => '/seo',
            'https://backendcodersindia.com/page/seo-services' => 'https://backendcodersindia.com/seo',
            '/page/website-development-company-kanpur' => '/page/website-design-development',
            'https://backendcodersindia.com/page/website-development-company-kanpur' => 'https://backendcodersindia.com/page/website-design-development',
            '/blog/small-business-india' => '/blog/how-seo-services-in-kanpur-help-businesses-grow-online',
            'https://backendcodersindia.com/blog/small-business-india' => 'https://backendcodersindia.com/blog/how-seo-services-in-kanpur-help-businesses-grow-online',
            '/blog/7-best-website-development-companies-in-kanpur-2026-comparison' => '/blog/how-to-choose-a-website-development-company-in-kanpur',
            'https://backendcodersindia.com/blog/7-best-website-development-companies-in-kanpur-2026-comparison' => 'https://backendcodersindia.com/blog/how-to-choose-a-website-development-company-in-kanpur',
            '/blog/website-development-company-in-kanpur-build-a-website-that-drives-real-business-growth' => '/blog/how-to-choose-a-website-development-company-in-kanpur',
            'https://backendcodersindia.com/blog/website-development-company-in-kanpur-build-a-website-that-drives-real-business-growth' => 'https://backendcodersindia.com/blog/how-to-choose-a-website-development-company-in-kanpur',
            '/page/software-digital-marketing-company-in-kanpur' => '/about',
            '/page/about-backend-coders-software-digital-marketing-company-in-kanpur' => '/about',
            '/seo-services-kanpur' => '/seo',
            '/seo-company-kanpur' => '/seo',
            '/services' => '/service',
            'https://backendcodersindia.com/services' => 'https://backendcodersindia.com/service',
        ];

        $tablesAndColumns = [
            'blogs' => ['content', 'excerpt'],
            'section_items' => ['description', 'extra', 'link'],
            'menu_items' => ['link'],
            'pages' => ['meta_description'],
            'sections' => ['content', 'description'],
        ];

        foreach ($tablesAndColumns as $table => $columns) {
            if (! DB::getSchemaBuilder()->hasTable($table)) {
                continue;
            }

            foreach (DB::table($table)->get() as $row) {
                $updates = [];
                foreach ($columns as $column) {
                    if (isset($row->{$column}) && is_string($row->{$column})) {
                        $value = $row->{$column};
                        $newValue = $value;

                        foreach ($replacements as $oldLink => $newLink) {
                            $newValue = preg_replace('~' . preg_quote($oldLink, '~') . '(?=[\s\'"<>#?]|$)~i', $newLink, $newValue);
                        }

                        if ($newValue !== $value) {
                            $updates[$column] = $newValue;
                        }
                    }
                }

                if ($updates !== []) {
                    if (property_exists($row, 'updated_at') || isset($row->updated_at)) {
                        $updates['updated_at'] = now();
                    }
                    DB::table($table)->where('id', $row->id)->update($updates);
                }
            }
        }
    }

    public function down(): void
    {
        // No destructive rollback needed for link hygiene and image extraction.
    }
};
