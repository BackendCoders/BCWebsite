<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmailLinksTest extends TestCase
{
    use RefreshDatabase;

    public function test_header_and_footer_have_valid_mailto_links_and_visible_email(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $content = $response->getContent();

        // Header email link
        $this->assertMatchesRegularExpression(
            '/<a[^>]+href="mailto:info@backendcodersindia\.com"[^>]*id="email-link"/i',
            $content,
            'Header email link must have href="mailto:info@backendcodersindia.com"'
        );

        // Header email text is visible in HTML
        $response->assertSee('<span id="email" class="select-text font-medium cursor-pointer">info@backendcodersindia.com</span>', false);

        // Footer email link
        $this->assertMatchesRegularExpression(
            '/<a[^>]+href="mailto:info@backendcodersindia\.com"[^>]*id="footer-email-link"/i',
            $content,
            'Footer email link must have href="mailto:info@backendcodersindia.com"'
        );

        // Footer email text is visible in HTML
        $response->assertSee('<span id="footer-email" class="select-text leading-relaxed font-medium">info@backendcodersindia.com</span>', false);

        // Footer copy button is present
        $response->assertSee('id="copy-email-btn"', false);
        $response->assertSee('Copy', false);

        // Ensure no href="#" on email links
        $this->assertFalse(
            (bool) preg_match('/<a[^>]+href="#"[^>]*id="(email-link|footer-email-link)"/i', $content),
            'Email links must not have href="#"'
        );

        // Ensure no pointer-events:none on email spans
        $this->assertFalse(
            (bool) preg_match('/<span[^>]+id="(email|footer-email)"[^>]*pointer-events\s*:\s*none/i', $content),
            'Email address text must not be disabled with pointer-events:none'
        );
    }
}
