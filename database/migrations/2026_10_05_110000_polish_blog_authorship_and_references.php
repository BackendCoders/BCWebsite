<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('blogs')->get(['id', 'slug', 'title', 'excerpt', 'content'])->each(function ($blog) {
            $slug = (string) $blog->slug;
            $excerpt = (string) ($blog->excerpt ?? '');
            $content = (string) ($blog->content ?? '');
            $changed = false;
            $excerpt = preg_replace('/([.!?])(?=[A-Z])/u', '$1 ', $excerpt) ?? $excerpt;
            $content = str_ireplace(['widely recognized as the best', 'widely recognized'], ['described by the company as', ''], $content);
            $content = str_ireplace(
                ['high-intent business website development India', 'business website development India', 'web design agency Kanpur'],
                ['website development costs in India', 'website development services in India', 'web design agency in Kanpur'],
                $content
            );

            if (str_contains($slug, 'custom-web-application-development')) {
                $excerpt = 'Learn how to scope a custom web application around real workflows, integrations, users, and long-term maintenance.';
                $content = preg_replace('~<h2\b[^>]*>\s*(?:&nbsp;|<br\s*/?>)?\s*</h2>~i', '', $content) ?? $content;
                $content = str_ireplace(
                    ['business website development India', 'web design agency Kanpur'],
                    ['website development services in India', 'web design agency in Kanpur'],
                    $content
                );
                $content = $this->appendReferences($content, [
                    ['Google Search guidance for developers', 'https://developers.google.com/search/docs/fundamentals/get-started-developers'],
                    ['Google Search Engine Optimization Starter Guide', 'https://developers.google.com/search/docs/fundamentals/seo-starter-guide'],
                    ['W3C Web Content Accessibility Guidelines', 'https://www.w3.org/WAI/standards-guidelines/wcag/'],
                ]);
                $changed = true;
            }

            if (str_contains($slug, 'website-development-cost')) {
                $excerpt = 'Compare website project scopes, understand what affects an estimate, and plan for hosting, maintenance, and search-ready foundations.';
                $content = str_ireplace(
                    ['high-intent business website development India', 'business website development India', 'web design agency Kanpur'],
                    ['website development costs in India', 'website development services in India', 'web design agency in Kanpur'],
                    $content
                );
                $content = preg_replace(
                    '~High-performance cloud instances[^<]*?(?:uptime|appropriately)\.~isu',
                    'Cloud hosting costs vary by provider, region, resource selection, traffic, backups, and support. Estimate a configuration for your expected workload with the provider before setting an annual budget.',
                    $content
                ) ?? $content;
                $content = $this->appendReferences($content, [
                    ['AWS Pricing Calculator guide', 'https://docs.aws.amazon.com/pricing-calculator/latest/userguide/getting-started.html'],
                    ['DigitalOcean Droplet pricing', 'https://docs.digitalocean.com/products/droplets/details/pricing/'],
                    ['Google Cloud Pricing Calculator', 'https://cloud.google.com/products/calculator'],
                    ['Google Search Engine Optimization Starter Guide', 'https://developers.google.com/search/docs/fundamentals/seo-starter-guide'],
                ]);
                $changed = true;
            }

            $content = preg_replace('/([.!?])(?=[A-Z])/u', '$1 ', $content) ?? $content;
            if ($content !== (string) ($blog->content ?? '') || $excerpt !== (string) ($blog->excerpt ?? '')) $changed = true;
            if ($changed) {
                DB::table('blogs')->where('id', $blog->id)->update([
                    'excerpt' => $excerpt,
                    'content' => $content,
                    'updated_at' => now(),
                ]);
            }
        });
    }

    private function appendReferences(string $content, array $references): string
    {
        if (stripos($content, 'Further reading') !== false) {
            return $content;
        }

        $items = collect($references)->map(fn (array $reference) => '<li><a href="'.$reference[1].'" target="_blank" rel="noopener noreferrer">'.$reference[0].'</a></li>')->implode('');

        return $content.'<h2>Further reading</h2><p>These primary sources explain relevant technical guidance and help estimate provider-specific costs; estimates depend on the configuration and usage you choose.</p><ul>'.$items.'</ul>';
    }

    public function down(): void
    {
        // Editorial corrections and citations are intentionally retained.
    }
};
