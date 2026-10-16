<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FixInternalLinks extends Command
{
    protected $signature = 'links:fix-internal';
    protected $description = 'Fix internal links that point to redirecting URLs (Low priority fix)';

    public function handle()
    {
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
            'sections' => ['content', 'description']
        ];

        $totalReplacements = 0;

        foreach ($tablesAndColumns as $table => $columns) {
            if (!DB::getSchemaBuilder()->hasTable($table)) {
                continue;
            }
            
            foreach (DB::table($table)->get() as $row) {
                $updates = [];
                foreach ($columns as $column) {
                    if (isset($row->{$column}) && is_string($row->{$column})) {
                        $value = $row->{$column};
                        $newValue = $value;
                        
                        foreach ($replacements as $oldLink => $newLink) {
                            // Only replace if it's the exact URL path, not a substring of something longer
                            // E.g. we want to replace /page/seo-services but not /page/seo-services-new
                            $newValue = preg_replace('~' . preg_quote($oldLink, '~') . '(?=[\s\'"<>#?]|$)~i', $newLink, $newValue);
                        }
                        
                        if ($newValue !== $value) {
                            $updates[$column] = $newValue;
                        }
                    }
                }
                
                if (!empty($updates)) {
                    // updated_at may not exist on all tables
                    if (property_exists($row, 'updated_at') || isset($row->updated_at)) {
                        $updates['updated_at'] = now();
                    }
                    DB::table($table)->where('id', $row->id)->update($updates);
                    $totalReplacements++;
                    $this->info("Updated {$table} record ID {$row->id}");
                }
            }
        }

        $this->info("Process completed. Updated $totalReplacements records containing redirecting links.");
    }
}
