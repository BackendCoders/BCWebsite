<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    public function test_header_navigation_labels_match_destinations(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Portfolio correctly links to /project
        $response->assertSee('<a href="http://localhost/project"', false);
        $response->assertSee('Portfolio', false);

        // Process correctly links to /process
        $response->assertSee('<a href="http://localhost/process"', false);
        $response->assertSee('Process', false);

        // Live Demos correctly links to /demo
        $response->assertSee('<a href="http://localhost/demo"', false);
        $response->assertSee('Live Demos', false);

        // Careers correctly links to /career
        $response->assertSee('<a href="http://localhost/career"', false);
        $response->assertSee('Careers', false);

        // Ensure broken/mismatched links are gone
        $content = $response->getContent();
        
        // "Case Studies" should not link to /process
        $this->assertFalse(
            (bool) preg_match('/<a[^>]+href="[^"]*\/process"[^>]*>\s*Case Studies\s*<\/a>/i', $content),
            'Navigation must not link "Case Studies" to /process'
        );

        // "Portfolio" should not link to /demo
        $this->assertFalse(
            (bool) preg_match('/<a[^>]+href="[^"]*\/demo"[^>]*>\s*Portfolio\s*<\/a>/i', $content),
            'Navigation must not link "Portfolio" to /demo'
        );

        // "Insights" should not link to /career
        $this->assertFalse(
            (bool) preg_match('/<a[^>]+href="[^"]*\/career"[^>]*>\s*Insights\s*<\/a>/i', $content),
            'Navigation must not link "Insights" to /career'
        );
    }

    public function test_desktop_and_mobile_menus_have_identical_labels_and_destinations(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $content = $response->getContent();

        // Extract desktop navigation links
        preg_match('/<nav class="hidden[^>]*>(.*?)<\/nav>/s', $content, $desktopNavMatch);
        $this->assertNotEmpty($desktopNavMatch, 'Desktop nav element must exist');

        // Extract mobile navigation drawer links
        preg_match('/<div id="mobile-menu"[^>]*>(.*?)<\/div>\s*<\/header>/s', $content, $mobileNavMatch);
        $this->assertNotEmpty($mobileNavMatch, 'Mobile menu element must exist');

        $expectedNavItems = [
            'Overview' => 'http://localhost',
            'Company' => 'http://localhost/about',
            'Portfolio' => 'http://localhost/project',
            'Process' => 'http://localhost/process',
            'Live Demos' => 'http://localhost/demo',
            'Blog' => 'http://localhost/blog',
            'Packages' => 'http://localhost/packages',
            'Careers' => 'http://localhost/career',
            'Contact' => 'http://localhost/contact',
        ];

        foreach ($expectedNavItems as $label => $url) {
            // Assert present in desktop
            $this->assertTrue(
                (bool) preg_match('/<a[^>]+href="' . preg_quote($url, '/') . '"[^>]*>\s*' . preg_quote($label, '/') . '\s*<\/a>/i', $desktopNavMatch[1]),
                "Desktop menu missing item '$label' linking to '$url'"
            );

            // Assert present in mobile
            $this->assertTrue(
                (bool) preg_match('/<a[^>]+href="' . preg_quote($url, '/') . '"[^>]*>\s*' . preg_quote($label, '/') . '\s*<\/a>/i', $mobileNavMatch[1]),
                "Mobile menu missing item '$label' linking to '$url'"
            );
        }

        // Neither menu contains "Case Studies" or "Insights"
        $this->assertStringNotContainsString('Case Studies', $desktopNavMatch[1]);
        $this->assertStringNotContainsString('Case Studies', $mobileNavMatch[1]);
        $this->assertStringNotContainsString('Insights', $desktopNavMatch[1]);
        $this->assertStringNotContainsString('Insights', $mobileNavMatch[1]);
    }

    public function test_navigation_route_aliases_redirect_correctly(): void
    {
        $this->get('/portfolio')->assertRedirect('/project');
        $this->get('/case-studies')->assertRedirect('/project');
        $this->get('/insights')->assertRedirect('/blog');
        $this->get('/careers')->assertRedirect('/career');
        $this->get('/demos')->assertRedirect('/demo');
    }
}
