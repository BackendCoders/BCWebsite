<?php

namespace Tests\Unit;

use App\Models\Blog;
use PHPUnit\Framework\TestCase;

class BlogContentTest extends TestCase
{
    public function test_it_adds_ids_to_headings_and_builds_toc_from_content(): void
    {
        $blog = new Blog([
            'content' => '<h2>Why Every Business Needs a Website</h2><p>Content here.</p><h3>What Makes It Great</h3><p>More content.</p>',
        ]);

        $processedContent = $blog->processed_content;

        $this->assertStringContainsString('id="why-every-business-needs-a-website"', $processedContent);
        $this->assertStringContainsString('id="what-makes-it-great"', $processedContent);
        $this->assertStringContainsString('scroll-mt-24', $processedContent);
        $this->assertSame([
            [
                'title' => 'Why Every Business Needs a Website',
                'anchor' => 'why-every-business-needs-a-website',
            ],
            [
                'title' => 'What Makes It Great',
                'anchor' => 'what-makes-it-great',
            ],
        ], $blog->table_of_contents_items);
    }
}
