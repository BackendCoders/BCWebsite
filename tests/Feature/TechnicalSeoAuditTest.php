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

        // Dynamic sitemap must contain canonical social media page
        $sitemapResponse = $this->get('/sitemap.xml');
        $sitemapResponse->assertStatus(200);
        $sitemapContent = $sitemapResponse->getContent();
        $this->assertStringContainsString('/page/social-media-management', $sitemapContent);

        // Static sitemap file must have canonical social media page and no small-business-india
        $staticSitemap = file_get_contents(public_path('sitemap.xml'));
        $this->assertStringContainsString('https://backendcodersindia.com/page/social-media-management', $staticSitemap);
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
}
