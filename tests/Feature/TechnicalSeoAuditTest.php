<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TechnicalSeoAuditTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Finding 1: Social Media Service Page Canonical and Redirect Chain
     * URL: /page/social-media-management
     */
    public function test_social_media_service_page_returns_200_with_self_canonical_and_index(): void
    {
        $response = $this->get('/page/social-media-management');

        $response->assertStatus(200);
        $content = $response->getContent();

        // Must contain self-referencing canonical, not redirect or point to /seo-services-kanpur or homepage
        $this->assertStringContainsString(
            '<link rel="canonical" href="https://backendcodersindia.com/page/social-media-management">',
            $content
        );
        $this->assertStringContainsString('Social Media', $content);

        // Friendly alias /social-media-management should 301 redirect to /page/social-media-management
        $aliasResponse = $this->get('/social-media-management');
        $aliasResponse->assertStatus(301);
        $aliasResponse->assertRedirect(route('frontend.page', ['slug' => 'social-media-management']));

        // /seo-services-kanpur must 301 redirect to /seo (not homepage)
        $seoResponse = $this->get('/seo-services-kanpur');
        $seoResponse->assertStatus(301);
        $seoResponse->assertRedirect(route('frontend.seo'));
    }

    /**
     * Finding 2: Thin Software Digital Marketing Page
     * URL: /page/software-digital-marketing-company-in-kanpur
     */
    public function test_thin_software_digital_marketing_page_redirects_301_to_about(): void
    {
        $response = $this->get('/page/software-digital-marketing-company-in-kanpur');

        $response->assertStatus(301);
        $response->assertRedirect(route('frontend.about'));
    }

    /**
     * Finding 3: Old "7 Best" Blog URL Redirects to Renamed Post (not homepage)
     * URL: /blog/7-best-website-development-companies-in-kanpur-2026-comparison
     */
    public function test_old_7_best_blog_url_redirects_301_to_equivalent_article(): void
    {
        $response = $this->get('/blog/7-best-website-development-companies-in-kanpur-2026-comparison');

        $response->assertStatus(301);
        $response->assertRedirect(route('frontend.blog-detail', ['slug' => 'how-to-choose-a-website-development-company-in-kanpur']));
    }

    /**
     * Finding 4: Robots.txt allows GPTBot and provides clean directives
     */
    public function test_robots_txt_allows_gptbot_and_references_sitemap(): void
    {
        $response = $this->get('/robots.txt');

        $response->assertStatus(200);
        $content = file_get_contents(public_path('robots.txt'));

        $this->assertStringContainsString('User-agent: GPTBot', $content);
        $this->assertStringContainsString('Allow: /', $content);
        $this->assertStringContainsString('Disallow: /admin', $content);
        $this->assertStringContainsString('Sitemap: https://backendcodersindia.com/sitemap.xml', $content);
    }

    /**
     * Finding 5: Blog posts do not embed Base64 image data
     */
    public function test_blog_posts_do_not_contain_embedded_base64_images(): void
    {
        // Test that content formatter decodes and converts base64 image data to files
        $dummyBase64Png = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==';
        $formatted = app(\App\Services\BlogContentFormatter::class)->format(
            '<p>Test paragraph with <img src="' . $dummyBase64Png . '" alt="sample"></p>',
            'Test Post'
        );

        $this->assertStringNotContainsString('data:image/', $formatted['content']);
        $this->assertStringContainsString('/assets/images/blog/', $formatted['content']);

        // Assert any database blogs don't have base64
        $blogs = Blog::where('is_published', 1)->get();
        foreach ($blogs as $blog) {
            $this->assertStringNotContainsString('data:image/', (string) $blog->content);
            $this->assertStringNotContainsString('data:image/', (string) $blog->image);
        }
    }

    /**
     * Finding 6: Internal Links point directly to canonical destinations
     */
    public function test_internal_redirects_are_resolved_in_sitemaps_and_routes(): void
    {
        // /page/seo-services 301 redirects to /seo
        $response = $this->get('/page/seo-services');
        $response->assertStatus(301);
        $response->assertRedirect(route('frontend.seo'));

        // /blog/small-business-india 301 redirects to renamed slug
        $blogResponse = $this->get('/blog/small-business-india');
        $blogResponse->assertStatus(301);
        $blogResponse->assertRedirect(route('frontend.blog-detail', ['slug' => 'how-seo-services-in-kanpur-help-businesses-grow-online']));

        // Dynamic sitemap must contain canonical social media page and canonical blog post, without redirecting blog
        $sitemapResponse = $this->get('/sitemap.xml');
        $sitemapResponse->assertStatus(200);
        $sitemapContent = $sitemapResponse->getContent();
        $this->assertStringContainsString('/page/social-media-management', $sitemapContent);
        $this->assertStringContainsString('/blog/how-seo-services-in-kanpur-help-businesses-grow-online', $sitemapContent);
        $this->assertStringNotContainsString('/blog/small-business-india', $sitemapContent);

        // Static sitemap file must have canonical social media page and no small-business-india
        $staticSitemap = file_get_contents(public_path('sitemap.xml'));
        $this->assertStringContainsString('https://backendcodersindia.com/page/social-media-management', $staticSitemap);
        $this->assertStringContainsString('https://backendcodersindia.com/blog/how-seo-services-in-kanpur-help-businesses-grow-online', $staticSitemap);
        $this->assertStringNotContainsString('/blog/small-business-india', $staticSitemap);
    }

    /**
     * Finding 7: /services public access vs auth access
     */
    public function test_services_public_guest_receives_301_to_service_page_not_login(): void
    {
        // Guest user visiting /services must NOT be sent to /login
        $response = $this->get('/services');

        $response->assertStatus(301);
        $response->assertRedirect(route('frontend.service'));
    }

    public function test_services_authenticated_user_accesses_admin_service_index(): void
    {
        $user = User::first();
        if (! $user) {
            $user = User::factory()->create(['role' => 'admin']);
        }

        $response = $this->actingAs($user)->get('/services');

        // Admin index returns 200
        $response->assertStatus(200);
    }

    /**
     * Finding 8: X-Powered-By is removed from responses
     */
    public function test_x_powered_by_header_is_stripped_from_http_responses(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $this->assertFalse(
            $response->headers->has('X-Powered-By'),
            'X-Powered-By header must not be exposed in HTTP responses'
        );
        $this->assertFalse(
            $response->headers->has('x-powered-by'),
            'x-powered-by header must not be exposed in HTTP responses'
        );

        // Verify .user.ini contains expose_php = Off
        $this->assertFileExists(public_path('.user.ini'));
        $userIniContent = file_get_contents(public_path('.user.ini'));
        $this->assertStringContainsString('expose_php = Off', $userIniContent);
    }

    /**
     * Finding 9: Sitemap URLs contain valid lastmod timestamps
     */
    public function test_sitemap_urls_have_valid_lastmod_timestamps(): void
    {
        $response = $this->get('/sitemap.xml');
        $response->assertStatus(200);

        $xml = simplexml_load_string($response->getContent());
        $this->assertNotEmpty($xml->url);

        foreach ($xml->url as $urlEntry) {
            $loc = (string) $urlEntry->loc;
            $this->assertNotEmpty($loc, 'Every sitemap entry must have a non-empty loc');
            $this->assertNotEmpty((string) $urlEntry->lastmod, "Sitemap URL {$loc} must have a valid lastmod element");

            // Verify W3C / ISO 8601 date parsing
            $parsedDate = \Carbon\Carbon::parse((string) $urlEntry->lastmod);
            $this->assertNotNull($parsedDate, "lastmod for {$loc} must be a valid date");
            $this->assertLessThanOrEqual(
                now()->addMinute()->timestamp,
                $parsedDate->timestamp,
                "lastmod for {$loc} must not be in the future"
            );
        }
    }

    /**
     * Finding 10: Homepage sitemap URL matches trailing-slash format of canonical homepage URL
     */
    public function test_homepage_sitemap_url_and_canonical_tag_are_consistent(): void
    {
        // 1. Check homepage HTML response for canonical tag
        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $homeContent = $homeResponse->getContent();

        $this->assertMatchesRegularExpression(
            '/<link\s+rel="canonical"\s+href="https:\/\/backendcodersindia\.com\/"\s*>/i',
            $homeContent,
            'Homepage canonical tag must end with a trailing slash (https://backendcodersindia.com/)'
        );

        // 2. Check dynamic sitemap has matching trailing-slash root loc
        $sitemapResponse = $this->get('/sitemap.xml');
        $sitemapResponse->assertStatus(200);
        $sitemapContent = $sitemapResponse->getContent();

        $expectedLoc = rtrim(url('/'), '/') . '/';
        $this->assertStringContainsString(
            "<loc>{$expectedLoc}</loc>",
            $sitemapContent,
            "Sitemap homepage loc must match trailing-slash format: <loc>{$expectedLoc}</loc>"
        );

        // Ensure no non-trailing slash root URL entry exists
        $nonTrailingLoc = rtrim(url('/'), '/');
        $this->assertStringNotContainsString(
            "<loc>{$nonTrailingLoc}</loc>",
            $sitemapContent,
            "Sitemap must not contain duplicate or mismatched non-trailing slash root loc: <loc>{$nonTrailingLoc}</loc>"
        );

        // 3. Static sitemap also matches
        $staticSitemap = file_get_contents(public_path('sitemap.xml'));
        $this->assertStringContainsString('<loc>https://backendcodersindia.com/</loc>', $staticSitemap);
    }

    /**
     * Finding 11: Demo broken link mitigation and /currentDemo.url redirect
     */
    public function test_demo_broken_link_mitigation_and_current_demo_url_redirect(): void
    {
        // /currentDemo.url must 301 redirect to /demo
        $response = $this->get('/currentDemo.url');
        $response->assertStatus(301);
        $response->assertRedirect(route('frontend.demo'));

        // /demo HTML must contain safe fallback href and valid markup
        $demoResponse = $this->get('/demo');
        $demoResponse->assertStatus(200);
        $demoContent = $demoResponse->getContent();
        $this->assertStringContainsString('href="' . route('frontend.demo') . '"', $demoContent);
    }

    /**
     * Finding 12: Blog category validation returns 404 for nonexistent category
     */
    public function test_blog_category_validation_returns_404_for_nonexistent_category(): void
    {
        // Nonexistent category ID 99999 must return 404
        $response404 = $this->get('/blog?category=99999');
        $response404->assertStatus(404);

        // Invalid non-numeric category must return 404
        $responseInvalid = $this->get('/blog?category=invalid_id');
        $responseInvalid->assertStatus(404);

        // Valid category returns 200
        $category = \App\Models\Category::first() ?? \App\Models\Category::create(['name' => 'Technology', 'slug' => 'technology']);
        $response200 = $this->get('/blog?category=' . $category->id);
        $response200->assertStatus(200);
    }

    /**
     * Finding 13: Blog pagination canonical tag and page validation
     */
    public function test_blog_pagination_canonical_and_page_validation(): void
    {
        // Invalid page parameter returns 404
        $responseInvalidPage = $this->get('/blog?page=-1');
        $responseInvalidPage->assertStatus(404);

        // Base blog page canonical is /blog
        $responseBase = $this->get('/blog');
        $responseBase->assertStatus(200);
        $expectedBase = url('/blog');
        $this->assertMatchesRegularExpression(
            '/<link\s+rel="canonical"\s+href="(' . preg_quote($expectedBase, '/') . '|https:\/\/backendcodersindia\.com\/blog)"\s*>/i',
            $responseBase->getContent()
        );

        // Ensure at least 7 published blogs exist to test page 2 (perPage = 6)
        $category = \App\Models\Category::first() ?? \App\Models\Category::create(['name' => 'Technology', 'slug' => 'technology']);
        while (\App\Models\Blog::where('is_published', 1)->count() < 7) {
            \App\Models\Blog::create([
                'title' => 'Sample Blog Post ' . uniqid(),
                'slug' => 'sample-blog-post-' . uniqid(),
                'category_id' => $category->id,
                'content' => 'Sample content for testing pagination canonical.',
                'is_published' => 1,
                'published_at' => now(),
            ]);
        }

        // Page 2 canonical retains ?page=2
        $responsePage2 = $this->get('/blog?page=2');
        $responsePage2->assertStatus(200);
        $expectedPage2 = url('/blog') . '?page=2';
        $this->assertMatchesRegularExpression(
            '/<link\s+rel="canonical"\s+href="(' . preg_quote($expectedPage2, '/') . '|https:\/\/backendcodersindia\.com\/blog\?page=2)"\s*>/i',
            $responsePage2->getContent()
        );
    }

    /**
     * Finding 14: Public page cache headers and private data protection
     */
    public function test_public_page_cache_headers_and_security_controls(): void
    {
        // Anonymous GET on public home page receives s-maxage=300 for CDN caching
        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $cacheControl = (string) $homeResponse->headers->get('Cache-Control');
        $this->assertStringContainsString('s-maxage=300', $cacheControl);

        // Public blog page also receives s-maxage=300
        $blogResponse = $this->get('/blog');
        $blogResponse->assertStatus(200);
        $this->assertStringContainsString('s-maxage=300', (string) $blogResponse->headers->get('Cache-Control'));

        // Authenticated admin or sensitive route must NOT receive public shared caching
        $user = User::first() ?? User::factory()->create(['role' => 'admin']);
        $authResponse = $this->actingAs($user)->get('/dashboard');
        $authCacheControl = (string) $authResponse->headers->get('Cache-Control');
        $this->assertStringNotContainsString('public', $authCacheControl);
        $this->assertStringContainsString('no-store', $authCacheControl);
    }

    /**
     * Finding 15: Favicon markup validity and non-zero favicon.ico
     */
    public function test_favicon_markup_and_favicon_ico_file(): void
    {
        // 1. Check HTML for clean favicon markup without invalid alt or class attributes on <link>
        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $content = $homeResponse->getContent();

        $this->assertStringContainsString('rel="icon"', $content);
        $this->assertStringNotContainsString('alt="web development company in Kanpur"', $content);

        // 2. Check public/favicon.ico exists and has positive file size
        $faviconPath = public_path('favicon.ico');
        $this->assertFileExists($faviconPath);
        $this->assertGreaterThan(0, filesize($faviconPath), 'favicon.ico must not be a 0-byte file');
    }

    /**
     * Finding 16: Footer internal links to /service, /team, and /owner
     */
    public function test_footer_internal_links_to_services_team_and_owner(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString(route('frontend.service'), $content);
        $this->assertStringContainsString(route('frontend.team'), $content);
        $this->assertStringContainsString(route('frontend.owner'), $content);
    }

    /**
     * Verify that meta-ads and content-marketing pages render properly without redirect loops
     */
    public function test_meta_ads_and_content_marketing_pages_do_not_redirect_loop(): void
    {
        // 1. Alias /meta-ads redirects to canonical /page/meta-ads
        $metaAlias = $this->get('/meta-ads');
        $metaAlias->assertStatus(301);
        $metaAlias->assertRedirect(route('frontend.page', ['slug' => 'meta-ads']));

        // 2. Canonical /page/meta-ads renders successfully (200 OK)
        $metaPage = $this->get('/page/meta-ads');
        $metaPage->assertStatus(200);

        // 3. Alias /content-marketing redirects to canonical /page/content-marketing
        $contentAlias = $this->get('/content-marketing');
        $contentAlias->assertStatus(301);
        $contentAlias->assertRedirect(route('frontend.page', ['slug' => 'content-marketing']));

        // 4. Canonical /page/content-marketing renders successfully (200 OK)
        $contentPage = $this->get('/page/content-marketing');
        $contentPage->assertStatus(200);
    }
}


