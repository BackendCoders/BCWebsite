<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImageAuditTest extends TestCase
{
    use RefreshDatabase;
    private function auditPage(string $url, string $label)
    {
        $response = $this->get($url);
        $this->assertEquals(200, $response->getStatusCode(), "Failed to get $url");
        $html = $response->getContent();

        preg_match_all('/<img\b([^>]*)>/i', $html, $matches);
        $total = count($matches[0]);
        
        $eager = 0;
        $lazy = 0;
        $noLoading = 0;
        $missingDims = 0;
        $emptyAlt = 0;
        $missingAlt = 0;
        $highPriority = 0;
        $seoServicesAlt = 0;
        $multiAlts = 0;
        
        $tagDetails = [];

        foreach ($matches[0] as $i => $tag) {
            $attrs = $matches[1][$i];

            preg_match('/src=["\']([^"\']+)["\']/i', $attrs, $srcMatch);
            $src = $srcMatch[1] ?? 'unknown';

            // Loading
            if (preg_match('/loading=["\']lazy["\']/i', $attrs)) {
                $lazy++;
            } elseif (preg_match('/loading=["\']eager["\']/i', $attrs)) {
                $eager++;
            } else {
                $noLoading++;
            }

            // Dimensions
            $hasWidth = (bool) preg_match('/width=["\']\d+["\']/i', $attrs);
            $hasHeight = (bool) preg_match('/height=["\']\d+["\']/i', $attrs);
            if (!$hasWidth || !$hasHeight) {
                $missingDims++;
            }

            // Alt
            preg_match_all('/alt=["\']([^"\']*)["\']/i', $attrs, $altMatches);
            if (count($altMatches[0]) > 1) {
                $multiAlts++;
            }
            if (empty($altMatches[0])) {
                $missingAlt++;
            } else {
                $altVal = trim($altMatches[1][0]);
                if ($altVal === '') {
                    $emptyAlt++;
                }
            }

            if (stripos($attrs, 'alt="SEO Services"') !== false) {
                $seoServicesAlt++;
            }

            if (stripos($attrs, 'fetchpriority="high"') !== false) {
                $highPriority++;
            }

            $tagDetails[] = [
                'tag' => $tag,
                'src' => $src,
                'hasWidth' => $hasWidth,
                'hasHeight' => $hasHeight,
                'loading' => preg_match('/loading=["\']([^"\']+)["\']/i', $attrs, $m) ? $m[1] : 'none',
                'alts' => $altMatches[1] ?? [],
            ];
        }

        echo "\n=== AUDIT RESULTS FOR: $label ($url) ===\n";
        echo "Total images: $total\n";
        echo "Eager: $eager, Lazy: $lazy, No loading attribute: $noLoading\n";
        echo "Effectively eager: " . ($eager + $noLoading) . " of $total\n";
        echo "Missing width/height: $missingDims of $total (" . ($total ? round($missingDims / $total * 100) : 0) . "%)\n";
        echo "Empty alt: $emptyAlt, Missing alt: $missingAlt, Multiple alt attributes: $multiAlts\n";
        echo "fetchpriority='high' count: $highPriority\n";
        echo "alt='SEO Services' count: $seoServicesAlt\n";

        echo "--- ALL IMAGES FOR $label ---\n";
        foreach ($tagDetails as $idx => $item) {
            $num = $idx + 1;
            $w = preg_match('/width=["\']([^"\']+)["\']/i', $item['tag'], $wM) ? $wM[1] : 'MISS';
            $h = preg_match('/height=["\']([^"\']+)["\']/i', $item['tag'], $hM) ? $hM[1] : 'MISS';
            $fp = preg_match('/fetchpriority=["\']([^"\']+)["\']/i', $item['tag'], $pM) ? $pM[1] : 'none';
            $altStr = implode(' | ', $item['alts']);
            echo sprintf("[%2d] load=%-12s dims=%-11s fp=%-5s src=%s\n     alt=%s\n",
                $num, $item['loading'], "{$w}x{$h}", $fp, $item['src'], substr($altStr, 0, 90)
            );
        }

        return [
            'total' => $total,
            'eager' => $eager,
            'lazy' => $lazy,
            'noLoading' => $noLoading,
            'missingDims' => $missingDims,
            'emptyAlt' => $emptyAlt,
            'missingAlt' => $missingAlt,
            'highPriority' => $highPriority,
            'tagDetails' => $tagDetails,
        ];
    }

    public function test_audit_homepage()
    {
        $this->auditPage('/', 'Homepage');
        $this->assertTrue(true);
    }

    public function test_audit_about_page()
    {
        $this->auditPage('/about', 'About Page');
        $this->assertTrue(true);
    }

    public function test_audit_service_page()
    {
        $this->auditPage('/service', 'Service Page');
        $this->assertTrue(true);
    }

    public function test_audit_blog_page()
    {
        $this->auditPage('/blog', 'Blog Page');
        $this->assertTrue(true);
    }

    public function test_audit_project_page()
    {
        $this->auditPage('/project', 'Project Page');
        $this->assertTrue(true);
    }

    public function test_audit_blog_detail_page()
    {
        $blog = \App\Models\Blog::create([
            'title' => 'Building Fast Laravel Web Applications in 2026',
            'slug' => 'building-fast-laravel-web-applications',
            'excerpt' => 'A comprehensive guide on performance and image SEO.',
            'content' => '<p>Content with <img src="/assets/images/about.webp" alt=""> inline test.</p>',
            'image' => 'assets/images/custom.webp',
            'is_published' => 1,
            'is_featured' => 1,
            'author_name' => 'Ravindra Verma',
        ]);

        $this->auditPage('/blog/' . $blog->slug, 'Blog Detail Page');
        $this->assertTrue(true);
    }
}

