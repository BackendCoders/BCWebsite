<?php

namespace App\Services;

use Illuminate\Support\Str;

class BlogContentFormatter
{
    public function format(string $rawContent, string $title, ?string $metaKeywords = null): array
    {
        $content = trim($rawContent);
        // Strip any accidental XML declaration or empty editor paragraph
        $content = preg_replace('/<\?xml[^>]*\?>/i', '', $content);
        $content = trim($content);

        if ($content === '<p><br></p>' || $content === '') {
            $content = '';
        }

        $keywords = $this->extractKeywords($title, $metaKeywords);

        if ($content === '') {
            return [
                'content' => '',
                'table_of_contents' => [],
                'faqs' => $this->buildFaqs($title, []),
            ];
        }

        $html = $this->normalizeEditorHtml($content, $title);
        $headings = $this->extractHeadingsFromContent($html);

        return [
            'content' => $html,
            'table_of_contents' => $headings,
            'faqs' => $this->buildFaqs($title, $keywords),
        ];
    }

    private function normalizeEditorHtml(string $rawContent, string $title = 'blog'): string
    {
        $clean = trim($rawContent);
        $clean = preg_replace('/<\?xml[^>]*\?>/i', '', $clean);
        $clean = trim($clean);

        if ($clean === '') {
            return '';
        }

        $dom = new \DOMDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $clean, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        // Convert editor-inserted H1 to H2 so the page only has one H1 tag
        $bodyH1s = [];
        foreach ($dom->getElementsByTagName('h1') as $heading) {
            $bodyH1s[] = $heading;
        }

        foreach ($bodyH1s as $heading) {
            if (trim($heading->textContent) === '') {
                $heading->parentNode?->removeChild($heading);
                continue;
            }

            $h2 = $dom->createElement('h2');
            foreach (iterator_to_array($heading->attributes) as $attribute) {
                $h2->setAttribute($attribute->name, $attribute->value);
            }
            while ($heading->firstChild) {
                $h2->appendChild($heading->firstChild);
            }
            $heading->parentNode?->replaceChild($h2, $heading);
        }

        // Add IDs and scroll-mt-24 to H2 and H3 for Table of Contents links
        $usedAnchors = [];
        foreach (['h2', 'h3'] as $tagName) {
            $nodes = [];
            foreach ($dom->getElementsByTagName($tagName) as $node) {
                $nodes[] = $node;
            }

            foreach ($nodes as $node) {
                $text = trim($node->textContent);
                if ($text === '') {
                    continue;
                }

                $anchor = Str::slug($text) ?: 'section';
                $baseAnchor = $anchor;
                $counter = 2;

                while (in_array($anchor, $usedAnchors, true)) {
                    $anchor = $baseAnchor . '-' . $counter;
                    $counter++;
                }

                $usedAnchors[] = $anchor;
                $node->setAttribute('id', $anchor);

                $existingClasses = array_filter(explode(' ', (string) $node->getAttribute('class')));
                $classes = array_values(array_unique(array_merge($existingClasses, ['scroll-mt-24'])));
                $node->setAttribute('class', implode(' ', $classes));
            }
        }

        // Extract embedded base64 images to physical files
        foreach ($dom->getElementsByTagName('img') as $img) {
            $src = $img->getAttribute('src');
            if (str_starts_with($src, 'data:image/')) {
                if (preg_match('/^data:image\/([^;]+);base64,(.+)$/i', $src, $matches)) {
                    $extension = strtolower($matches[1]);
                    if ($extension === 'jpeg') {
                        $extension = 'jpg';
                    }
                    $imageData = base64_decode($matches[2]);
                    if ($imageData !== false) {
                        $directory = public_path('assets/images/blog');
                        if (! is_dir($directory)) {
                            mkdir($directory, 0755, true);
                        }
                        $filename = 'editor-' . Str::slug(Str::limit($title, 25, '')) . '-' . time() . '-' . Str::random(5) . '.' . $extension;
                        file_put_contents($directory . '/' . $filename, $imageData);
                        $img->setAttribute('src', asset('assets/images/blog/' . $filename));
                    }
                }
            }
        }

        // Save HTML cleanly without prepending XML declarations
        $html = '';
        $body = $dom->getElementsByTagName('body')->item(0);

        if ($body) {
            foreach ($body->childNodes as $child) {
                $html .= $dom->saveHTML($child);
            }
        } else {
            foreach ($dom->childNodes as $child) {
                if ($child->nodeType === XML_PI_NODE) {
                    continue;
                }
                $html .= $dom->saveHTML($child);
            }
        }

        $html = preg_replace('/<\?xml[^>]*\?>/i', '', $html);

        return trim($html);
    }

    private function buildFaqs(string $title, array $keywords): array
    {
        $topic = trim(Str::title(str_replace(['-', '_'], ' ', $title)));

        return [
            ['question' => 'What services does ' . $topic . ' include?', 'answer' => 'We build websites that are fast, responsive, SEO-friendly, and designed to help businesses convert visitors into customers.'],
            ['question' => 'How long does it take to build a website?', 'answer' => 'Most business websites are completed within a few weeks, depending on the scope, design requirements, and integrations involved.'],
            ['question' => 'Will my website be optimized for search engines?', 'answer' => 'Yes. Every project is structured with technical SEO, helpful content, mobile-friendly layouts, and clear information architecture.'],
            ['question' => 'Can you redesign an existing website?', 'answer' => 'Absolutely. We can modernize old websites with better performance, stronger UX, and a more conversion-focused structure.'],
            ['question' => 'Do you offer ongoing support after launch?', 'answer' => 'Yes. We provide maintenance, updates, security monitoring, and improvements to keep your website performing well over time.'],
        ];
    }

    private function extractKeywords(string $title, ?string $metaKeywords): array
    {
        $keywords = [];
        $titleKeywords = preg_split('/[\s,]+/', Str::lower($title)) ?: [];

        foreach ($titleKeywords as $keyword) {
            $keyword = trim($keyword);
            if ($keyword !== '' && strlen($keyword) > 2) {
                $keywords[] = $keyword;
            }
        }

        foreach (explode(',', (string) $metaKeywords) as $keyword) {
            $keyword = trim($keyword);
            if ($keyword !== '' && strlen($keyword) > 2) {
                $keywords[] = Str::lower($keyword);
            }
        }

        return array_values(array_unique($keywords));
    }

    private function extractHeadingsFromContent(string $content): array
    {
        $clean = trim($content);
        $clean = preg_replace('/<\?xml[^>]*\?>/i', '', $clean);

        if ($clean === '') {
            return [];
        }

        $dom = new \DOMDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $clean, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $headings = [];
        $usedAnchors = [];

        foreach (['h2', 'h3'] as $tagName) {
            foreach ($dom->getElementsByTagName($tagName) as $node) {
                $title = trim($node->textContent);

                if ($title === '') {
                    continue;
                }

                $anchor = $node->getAttribute('id') ?: (Str::slug($title) ?: 'section');
                $baseAnchor = $anchor;
                $counter = 2;

                while (in_array($anchor, $usedAnchors, true)) {
                    $anchor = $baseAnchor . '-' . $counter;
                    $counter++;
                }

                $usedAnchors[] = $anchor;

                $headings[] = [
                    'title' => $title,
                    'anchor' => $anchor,
                ];
            }
        }

        return $headings;
    }
}
