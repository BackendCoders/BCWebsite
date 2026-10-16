<?php

namespace Tests\Unit;

use App\Services\BlogContentFormatter;
use Tests\TestCase;

class BlogContentFormatterTest extends TestCase
{
    public function test_it_formats_content_without_xml_declaration(): void
    {
        $formatter = new BlogContentFormatter();
        $res = $formatter->format('<h2>My Section</h2><p class="ql-align-center">Hello world</p>', 'My Section');

        $this->assertStringNotContainsString('<?xml', $res['content']);
        $this->assertStringContainsString('id="my-section"', $res['content']);
        $this->assertStringContainsString('class="ql-align-center"', $res['content']);
        $this->assertCount(1, $res['table_of_contents']);
        $this->assertSame('My Section', $res['table_of_contents'][0]['title']);
    }
}
