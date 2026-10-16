<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_published',
        'published_at',
        'is_featured',
        'table_of_contents',
        'faqs',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'table_of_contents' => 'array',
        'faqs' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getTableOfContentsItemsAttribute(): array
    {
        $manualItems = collect($this->table_of_contents ?? [])
            ->filter()
            ->map(function ($item, $index) {
                if (is_string($item)) {
                    $title = trim($item);

                    return [
                        'title' => $title,
                        'anchor' => Str::slug($title) ?: 'section-'.($index + 1),
                    ];
                }

                $title = trim((string) data_get($item, 'title', data_get($item, 'text', '')));

                return [
                    'title' => $title ?: 'Section '.($index + 1),
                    'anchor' => data_get($item, 'anchor') ?: (Str::slug($title) ?: 'section-'.($index + 1)),
                ];
            })
            ->filter(fn ($item) => filled($item['title']))
            ->values()
            ->all();

        if (! empty($manualItems)) {
            return $manualItems;
        }

        return collect($this->extractHeadingsFromContent((string) $this->content))
            ->map(function (array $heading, int $index) {
                return [
                    'title' => $heading['title'],
                    'anchor' => $heading['anchor'],
                ];
            })
            ->values()
            ->all();
    }

    public function getSeoKeywordsAttribute(): array
    {
        $keywords = collect(explode(',', (string) $this->meta_keywords))
            ->map(fn ($keyword) => trim($keyword))
            ->filter()
            ->values();

        if ($keywords->isNotEmpty()) {
            return $keywords->all();
        }

        $fallbackSource = collect([
            (string) $this->title,
            (string) ($this->category?->name ?? ''),
            (string) $this->excerpt,
            strip_tags((string) $this->content),
        ])->implode(' ');

        if (trim($fallbackSource) === '') {
            return [];
        }

        $stopWords = [
            'a', 'an', 'and', 'are', 'as', 'at', 'be', 'by', 'for', 'from',
            'how', 'in', 'is', 'it', 'of', 'on', 'or', 'our', 'the', 'to',
            'we', 'what', 'when', 'where', 'which', 'with', 'your',
        ];

        return collect(preg_split('/[\s,]+/', Str::lower($fallbackSource)) ?: [])
            ->map(fn ($keyword) => trim(preg_replace('/[^a-z0-9\-]/i', '', $keyword)))
            ->filter(fn ($keyword) => $keyword !== '' && strlen($keyword) > 2)
            ->reject(fn ($keyword) => in_array($keyword, $stopWords, true))
            ->unique()
            ->take(8)
            ->values()
            ->all();
    }

    public function getProcessedContentAttribute(): ?string
    {
        $content = (string) ($this->content ?: '');

        if (trim($content) === '') {
            return null;
        }

        $dom = new \DOMDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        // The article title is rendered by the page template. Normalize any
        // editor-inserted H1s in the body so each page has only one H1.
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

        $headings = ['h2', 'h3'];
        $usedAnchors = [];

        foreach ($headings as $tagName) {
            $nodes = $dom->getElementsByTagName($tagName);
            $headingNodes = [];

            foreach ($nodes as $node) {
                $headingNodes[] = $node;
            }

            foreach ($headingNodes as $node) {
                $text = trim($node->textContent);

                if ($text === '') {
                    continue;
                }

                $anchor = Str::slug($text) ?: 'section';
                $baseAnchor = $anchor;
                $counter = 2;

                while (in_array($anchor, $usedAnchors, true)) {
                    $anchor = $baseAnchor.'-'.$counter;
                    $counter++;
                }

                $usedAnchors[] = $anchor;
                $node->setAttribute('id', $anchor);

                $existingClasses = array_filter(explode(' ', (string) $node->getAttribute('class')));
                $classes = array_values(array_unique(array_merge($existingClasses, ['scroll-mt-24'])));
                $node->setAttribute('class', implode(' ', $classes));
            }
        }

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

        return trim($html) ?: null;
    }

    public function getRenderedContentAttribute(): ?string
    {
        $content = (string) ($this->content ?: '');
        $content = preg_replace('/<\?xml[^>]*\?>/i', '', $content);

        return trim($content) === '' ? null : trim($content);
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

                $anchor = Str::slug($title) ?: 'section';
                $baseAnchor = $anchor;
                $counter = 2;

                while (in_array($anchor, $usedAnchors, true)) {
                    $anchor = $baseAnchor.'-'.$counter;
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

    public function getFaqItemsAttribute(): array
    {
        return collect($this->faqs ?? [])
            ->filter()
            ->map(function ($item) {
                if (is_string($item)) {
                    return [
                        'question' => trim($item),
                        'answer' => '',
                    ];
                }

                return [
                    'question' => trim((string) data_get($item, 'question', '')),
                    'answer' => (string) data_get($item, 'answer', ''),
                ];
            })
            ->filter(fn ($item) => filled($item['question']))
            ->values()
            ->all();
    }

    public function getReadingTimeAttribute(): int
    {
        $source = trim(strip_tags((string) ($this->content ?: $this->excerpt ?: '')));

        return max(1, (int) ceil(str_word_count($source) / 200));
    }

    /**
     * Get the image URL for this blog post.
     * Works reliably on both local and production environments.
     */
    public function getImageUrl(): string
    {
        if (! $this->image) {
            return asset('assets/images/banner.png');
        }

        $path = $this->normalizeImagePath($this->image);

        if (Str::startsWith($path, ['http://', 'https://', '//', 'data:'])) {
            return $path;
        }

        if (Storage::disk('public')->exists($path)) {
            return route('blogs.image', ['path' => $path]);
        }

        $publicPath = public_path($path);
        if (file_exists($publicPath)) {
            return asset($path);
        }

        $storagePublicPath = public_path('storage/' . $path);
        if (file_exists($storagePublicPath)) {
            return asset('storage/' . $path);
        }

        return asset('assets/images/banner.png');
    }

    private function normalizeImagePath(string $path): string
    {
        $path = trim(str_replace('\\', '/', $path));
        $path = ltrim($path, '/');

        if (Str::startsWith($path, 'public/')) {
            return Str::after($path, 'public/');
        }

        if (Str::startsWith($path, 'storage/')) {
            return Str::after($path, 'storage/');
        }

        return $path;
    }

    // ✅ AUTO SLUG GENERATION
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($blog) {
            if (empty($blog->slug) && !empty($blog->title)) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }
}
