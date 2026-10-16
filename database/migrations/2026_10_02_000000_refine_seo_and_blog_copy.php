<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $seoPage = DB::table('pages')->where('slug', 'seo-services')->first(['id']);

        if ($seoPage) {
            $sections = DB::table('sections')->where('page_id', $seoPage->id)->get(['id', 'title', 'content']);

            foreach ($sections as $section) {
                $updates = [];
                if (is_string($section->title)) {
                    $updates['title'] = $this->refineCopy($section->title);
                }
                if (is_string($section->content)) {
                    $updates['content'] = $this->refineJsonOrText($section->content);
                }
                if ($updates !== []) {
                    $updates['updated_at'] = now();
                    DB::table('sections')->where('id', $section->id)->update($updates);
                }
            }

            $items = DB::table('section_items')
                ->where('page_id', $seoPage->id)
                ->get(['id', 'title', 'description', 'extra']);

            foreach ($items as $item) {
                $updates = [];
                if (is_string($item->title)) {
                    $updates['title'] = $this->refineCopy($item->title);
                }
                if (is_string($item->description)) {
                    $updates['description'] = $this->refineCopy($item->description);
                }
                if (is_string($item->extra)) {
                    $updates['extra'] = $this->refineJsonOrText($item->extra);
                }
                if ($updates !== []) {
                    $updates['updated_at'] = now();
                    DB::table('section_items')->where('id', $item->id)->update($updates);
                }
            }
        }

        $blogs = DB::table('blogs')->get(['id', 'slug', 'title', 'excerpt', 'content', 'meta_title', 'meta_description']);
        foreach ($blogs as $blog) {
            $updates = [];
            foreach (['title', 'excerpt', 'content', 'meta_title', 'meta_description'] as $field) {
                if (! is_string($blog->{$field})) {
                    continue;
                }

                $value = str_ireplace(
                    ['business website development India', 'web design agency Kanpur'],
                    ['business website development in India', 'web design agency in Kanpur'],
                    $blog->{$field}
                );

                if ($blog->{$field} !== $value) {
                    $updates[$field] = $value;
                }
            }

            if (str_contains((string) $blog->slug, 'website-development-cost')) {
                $content = $updates['content'] ?? $blog->content;
                $normalizedContent = is_string($content)
                    ? preg_replace('/(?:Rs\.?\s*|₹\s*)1,500,000/iu', 'Rs. 15,00,000', $content)
                    : $content;

                if (is_string($normalizedContent) && $normalizedContent !== $content) {
                    $updates['content'] = $normalizedContent;
                }
            }

            if ($updates !== []) {
                $updates['updated_at'] = now();
                DB::table('blogs')->where('id', $blog->id)->update($updates);
            }
        }
    }

    private function refineCopy(string $copy): string
    {
        return str_ireplace(
            [
                'an best SEO agency',
                'affordable SEO services in Kanpur',
                'technical SEO services in India',
                'an SEO company for lead generation',
                'On-Page SEO',
                'Off-Page SEO',
                'Technical SEO',
                'Local SEO',
                'E-commerce SEO',
                'SEO Insights',
                'SEO Audit',
                'Free SEO Consultation',
                'SEO services',
                'SEO company',
                'SEO agency',
                'SEO experts',
                'SEO strategies',
                'SEO strategy',
                'SEO performance',
                'SEO techniques',
                'business website development India',
                'web design agency Kanpur',
            ],
            [
                'a leading search marketing agency',
                'search support shaped around your budget',
                'technical site improvements for Indian businesses',
                'a team focused on generating qualified enquiries',
                'On-page search optimization',
                'Off-page search optimization',
                'Technical site optimization',
                'Local search optimization',
                'E-commerce search optimization',
                'Search insights',
                'Site audit',
                'Free Search Consultation',
                'organic search support',
                'search marketing team',
                'search marketing agency',
                'search specialists',
                'organic growth plans',
                'organic search plan',
                'organic search performance',
                'search optimization techniques',
                'business website development in India',
                'web design agency in Kanpur',
            ],
            $copy
        );
    }

    private function refineJsonOrText(string $value): string
    {
        $decoded = json_decode($value, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            $refined = $this->refineNestedValues($decoded);

            return json_encode($refined, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?: $value;
        }

        return $this->refineCopy($value);
    }

    private function refineNestedValues(mixed $value): mixed
    {
        if (is_string($value)) {
            return $this->refineCopy($value);
        }

        if (is_array($value)) {
            foreach ($value as $key => $nested) {
                $value[$key] = $this->refineNestedValues($nested);
            }
        }

        return $value;
    }

    public function down(): void
    {
        // Copy edits are intentionally not rolled back to avoid restoring keyword-stuffed text.
    }
};
