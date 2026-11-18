<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CoreWebVitalsAndPerformanceTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test that no opaque site preloader overlay is rendered in HTML.
     */
    public function test_site_preloader_overlay_is_removed(): void
    {
        $urls = ['/', '/about', '/page/website-design-development', '/service'];

        foreach ($urls as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $response->assertDontSee('id="site-preloader"', false);
            $response->assertDontSee('dismissSitePreloader', false);
        }
    }

    /**
     * Test that above-the-fold hero/LCP images are preloaded with fetchpriority="high".
     */
    public function test_lcp_images_are_preloaded(): void
    {
        // Homepage
        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $homeResponse->assertSee('rel="preload" as="image"', false);
        $homeResponse->assertSee('backend_coders_split_1(1)_compressed.webp', false);
        $homeResponse->assertSee('fetchpriority="high"', false);

        // About page
        $aboutResponse = $this->get('/about');
        $aboutResponse->assertStatus(200);
        $aboutResponse->assertSee('rel="preload" as="image"', false);
        $aboutResponse->assertSee('banner.png', false);
        $aboutResponse->assertSee('fetchpriority="high"', false);

        // Service subpage
        $servicePageResponse = $this->get('/page/website-design-development');
        $servicePageResponse->assertStatus(200);
        $servicePageResponse->assertSee('rel="preload" as="image"', false);
        $servicePageResponse->assertSee('fetchpriority="high"', false);
    }

    /**
     * Test that gtag.js script is deferred while dataLayer and gtag are immediately available.
     */
    public function test_analytics_and_gtag_loading_strategy(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        // Synchronous tracking queue exists
        $response->assertSee('window.dataLayer = window.dataLayer || [];', false);
        $response->assertSee('function gtag(){dataLayer.push(arguments);}', false);
        $response->assertSee("gtag('config', 'G-T5Y8JWD332');", false);

        // External heavy script is NOT loaded directly as a render-blocking synchronous tag
        $response->assertDontSee('<script async src="https://www.googletagmanager.com/gtag/js?id=G-T5Y8JWD332"></script>', false);
        $response->assertSee('requestIdleCallback', false);
        $response->assertSee('loadGtag', false);

        // Old dangling GTM iframe noscript is removed
        $response->assertDontSee('GTM-WLWCJJ7N', false);
    }

    /**
     * Test that target pages have 0 external hotlinked icons from icons8, jsdelivr, or simpleicons.
     */
    public function test_no_external_hotlinked_icons_on_target_pages(): void
    {
        $urls = ['/', '/page/website-design-development', '/about', '/service'];

        foreach ($urls as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $content = $response->getContent();

            preg_match_all('/https?:\/\/[^"\'\s>]+(?:icons8|jsdelivr|simpleicons)[^"\'\s>]*/i', $content, $matches);
            $this->assertEmpty(
                $matches[0],
                "Found unexpected external icon URLs on $url: " . implode(', ', array_unique($matches[0]))
            );
        }
    }

    /**
     * Test that local icon assets exist on disk.
     */
    public function test_local_icon_assets_exist(): void
    {
        $assets = [
            'assets/icons/home/custom-web-apps.png',
            'assets/icons/home/website-design.png',
            'assets/icons/home/saas-product.png',
            'assets/icons/home/erp-crm.png',
            'assets/icons/home/ecommerce.png',
            'assets/icons/home/mobile-apps.png',
            'assets/icons/home/cloud-devops.png',
            'assets/icons/home/seo-marketing.png',
            'assets/icons/home/mvp-startups.png',
            'assets/icons/about/saas.png',
            'assets/icons/about/erp.png',
            'assets/icons/about/pos.png',
            'assets/icons/about/ecommerce.png',
            'assets/icons/about/custom-web.png',
            'assets/icons/about/mission.png',
            'assets/icons/about/vision.png',
            'assets/icons/about/value-excellence.png',
            'assets/icons/about/check-bullet.png',
            'assets/icons/tech/laravel.svg',
            'assets/icons/tech/react.svg',
            'assets/icons/tech/nodejs.svg',
            'assets/icons/tech/dotnetcore.svg',
            'assets/icons/tech/mongodb.svg',
            'assets/icons/tech/nextjs.svg',
        ];

        foreach ($assets as $asset) {
            $this->assertFileExists(public_path($asset), "Asset $asset does not exist in public path.");
        }
    }
}
