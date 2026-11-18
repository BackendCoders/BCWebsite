<?php

namespace Tests\Feature;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OnPageSeoAndLocalLandingPagesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test Requirement 1: Digital Marketing Agency in Kanpur Landing Page.
     */
    public function test_digital_marketing_landing_page_renders_with_seo_and_schema(): void
    {
        $response = $this->get('/digital-marketing-agency-kanpur');

        $response->assertStatus(200);

        $content = $response->getContent();

        // Title and Meta
        $this->assertStringContainsString('Digital Marketing Agency in Kanpur | SEO, Ads &amp; Social – Backend Coders India', $content);
        $this->assertStringContainsString('<link rel="canonical" href="https://backendcodersindia.com/digital-marketing-agency-kanpur">', $content);
        $this->assertStringContainsString('name="description"', $content);
        $this->assertStringContainsString('Kanpur', $content);

        // H1 Heading
        $this->assertMatchesRegularExpression('/<h1[^>]*>[\s\S]*?Digital Marketing Agency in Kanpur That Tracks Leads, Not Likes[\s\S]*?<\/h1>/i', $content);

        // Verified Services & Packages
        $this->assertStringContainsString('Search Engine Optimization (SEO)', $content);
        $this->assertStringContainsString('Google Ads &amp; Paid Search (PPC)', $content);
        $this->assertStringContainsString('Social Media Marketing (SMM)', $content);
        $this->assertStringContainsString('₹7,999', $content);
        $this->assertStringContainsString('₹11,999', $content);

        // Working contact form & inquiry hooks
        $this->assertStringContainsString('data-contact-form', $content);
        $this->assertStringContainsString('inquiry', strtolower($content));

        // Schema JSON-LD
        $this->assertStringContainsString('"@type": "ProfessionalService"', $content);
        $this->assertStringContainsString('"@type": "BreadcrumbList"', $content);
        $this->assertStringContainsString('"@type": "FAQPage"', $content);
        $this->assertStringContainsString('https://backendcodersindia.com/digital-marketing-agency-kanpur', $content);

        // Internal Links
        $this->assertStringContainsString(route('frontend.seo'), $content);
        $this->assertStringContainsString(route('frontend.page', 'local-seo'), $content);
        $this->assertStringContainsString(route('frontend.software_company_kanpur'), $content);

        // Homepage internal link with exact anchor text
        $homeResponse = $this->get('/');
        $homeResponse->assertSee('Digital Marketing Agency in Kanpur', false);
        $homeResponse->assertSee(route('frontend.digital_marketing_kanpur'), false);
    }

    /**
     * Test Requirement 1: Software Company in Kanpur Landing Page.
     */
    public function test_software_company_landing_page_renders_with_seo_and_schema(): void
    {
        $response = $this->get('/software-company-kanpur');

        $response->assertStatus(200);

        $content = $response->getContent();

        // Title and Meta
        $this->assertStringContainsString('Software Company in Kanpur | Custom Software &amp; Web Applications', $content);
        $this->assertStringContainsString('<link rel="canonical" href="https://backendcodersindia.com/software-company-kanpur">', $content);
        $this->assertStringContainsString('name="description"', $content);

        // H1 Heading
        $this->assertMatchesRegularExpression('/<h1[^>]*>[\s\S]*?Custom[\s\S]*?Software Company[\s\S]*?in Kanpur[\s\S]*?<\/h1>/i', $content);

        // Engineering Capabilities & Tech Stack
        $this->assertStringContainsString('Custom Web Applications', $content);
        $this->assertStringContainsString('ERP &amp; POS Software Systems', $content);
        $this->assertStringContainsString('Laravel 12', $content);
        $this->assertStringContainsString('PHP 8.2+', $content);
        $this->assertStringContainsString('MySQL', $content);

        // Founder and Case Studies
        $this->assertStringContainsString('Ravindra Verma', $content);
        $this->assertStringContainsString(route('frontend.owner'), $content);
        $this->assertStringContainsString('SEO Rocket Pro', $content);
        $this->assertStringContainsString('Marley Moves', $content);

        // Working contact form
        $this->assertStringContainsString('data-contact-form', $content);

        // Schema JSON-LD
        $this->assertStringContainsString('"@type": "ProfessionalService"', $content);
        $this->assertStringContainsString('"@type": "BreadcrumbList"', $content);
        $this->assertStringContainsString('https://backendcodersindia.com/software-company-kanpur', $content);

        // Contextual Internal Links
        $this->assertStringContainsString(route('frontend.page', 'custom-web-applications'), $content);
        $this->assertStringContainsString(route('frontend.digital_marketing_kanpur'), $content);
    }

    /**
     * Test Requirement 2: /seo Title, Jump Links, and FAQs.
     */
    public function test_seo_page_title_pricing_and_same_page_jump_links(): void
    {
        $response = $this->get('/seo');

        $response->assertStatus(200);

        $content = $response->getContent();

        // Accurate concise title (matches updated prompt or previous version)
        $this->assertTrue(
            str_contains($content, 'SEO Company in Kanpur | SEO Services That Bring Leads – Backend Coders India') ||
            str_contains($content, 'SEO Company in Kanpur | SEO Services from ₹7,999/mo')
        );

        // Section links point to valid IDs on the same page
        $expectedSections = [
            'overview',
            'about-seo',
            'services',
            'process',
            'packages',
            'faqs',
            'contact',
        ];

        foreach ($expectedSections as $secId) {
            $this->assertStringContainsString('href="#' . $secId . '"', $content);
            $this->assertStringContainsString('id="' . $secId . '"', $content);
        }

        // Pricing section and FAQs
        $this->assertStringContainsString('₹7,999', $content);
        $this->assertStringContainsString('data-contact-form', $content);
        $this->assertStringContainsString('How much do SEO services cost in Kanpur?', $content);
        $this->assertStringContainsString('How long does it take before we see organic search improvements?', $content);
        $this->assertStringContainsString('Do you offer ranking guarantees?', $content);
    }

    /**
     * Test Requirement 2: Service Pages Return 200 with Proper Titles and H1s.
     */
    public function test_service_pages_return_200_with_proper_metadata(): void
    {
        $servicePages = [
            'website-design-development' => 'Website Design & Development Company in Kanpur',
            'mobile-app-development' => 'Mobile App Development Company in Kanpur | Android & iOS',
            'erp-pos-software' => 'ERP & POS Software Development',
            'custom-web-applications' => 'Custom Web Application Development',
            'saas-development' => 'SaaS Application Development',
            'ecommerce-development' => 'E-Commerce Website Development',
            'api-development' => 'API Development & Systems Integration',
            'startup-mvp-development' => 'Startup MVP Development',
        ];

        foreach ($servicePages as $slug => $expectedSnippet) {
            $response = $this->get('/page/' . $slug);
            $response->assertStatus(200);
            $this->assertStringContainsString($expectedSnippet, $response->getContent());
            $this->assertStringContainsString('<link rel="canonical" href="https://backendcodersindia.com/page/' . $slug . '">', $response->getContent());
        }
    }

    /**
     * Test Requirement 2: Clean Titles, Meta Descriptions, and Descriptive H1s.
     */
    public function test_title_meta_and_h1_cleanup(): void
    {
        // /about concise title
        $aboutResponse = $this->get('/about');
        $aboutResponse->assertStatus(200);
        $this->assertStringContainsString('<title>About Us | Software &amp; Web Development Company Kanpur</title>', $aboutResponse->getContent());

        // /service descriptive H1
        $serviceResponse = $this->get('/service');
        $serviceResponse->assertStatus(200);
        $this->assertMatchesRegularExpression('/<h1[^>]*>[\s\S]*?Professional Web &amp; Custom[\s\S]*?Software Services[\s\S]*?<\/h1>/i', $serviceResponse->getContent());
        $this->assertStringNotContainsString('Our Services</h1>', $serviceResponse->getContent());

        // /packages descriptive H1
        $packagesResponse = $this->get('/packages');
        $packagesResponse->assertStatus(200);
        $this->assertMatchesRegularExpression('/<h1[^>]*>[\s\S]*?Tailored Web Development[\s\S]*?Digital Growth Packages[\s\S]*?<\/h1>/i', $packagesResponse->getContent());
        $this->assertStringNotContainsString('Our Packages</h1>', $packagesResponse->getContent());

        // /blog meta description focuses on engineering and search insights
        $blogResponse = $this->get('/blog');
        $blogResponse->assertStatus(200);
        $this->assertStringContainsString('Read the latest technology insights', $blogResponse->getContent());
        $this->assertStringNotContainsString('trusted web development company in Kanpur, India delivering custom software', $blogResponse->getContent());
    }

    /**
     * Test Requirement 3: Cannibalization Resolution for Kanpur SEO Blog.
     */
    public function test_seo_blog_is_retargeted_to_informational_evaluation_guide(): void
    {
        $response = $this->get('/blog/how-seo-services-in-kanpur-help-businesses-grow-online');

        $response->assertStatus(200);

        $content = $response->getContent();

        // Informational title and heading
        $this->assertStringContainsString('How to Choose an SEO Company in Kanpur', $content);
        $this->assertStringContainsString('Evaluation Guide', $content);

        // Contextual links to commercial /seo and /digital-marketing-agency-kanpur
        $this->assertStringContainsString(route('frontend.seo'), $content);
        $this->assertStringContainsString(route('frontend.digital_marketing_kanpur'), $content);
    }

    /**
     * Test Requirement 4: Blog Detail has Related Guides & Services Internal Linking.
     */
    public function test_blog_detail_includes_related_guides_and_services(): void
    {
        $response = $this->get('/blog/how-seo-services-in-kanpur-help-businesses-grow-online');

        $response->assertStatus(200);

        $content = $response->getContent();

        $this->assertStringContainsString('Related Services &amp; Implementation Guides', $content);
        $this->assertStringContainsString(route('frontend.seo'), $content);
        $this->assertStringContainsString(route('frontend.digital_marketing_kanpur'), $content);
        $this->assertStringContainsString(route('frontend.software_company_kanpur'), $content);
        $this->assertStringContainsString(route('frontend.packages'), $content);
    }

    /**
     * Test Requirement 5: Sitemap Inclusion for Both New Landing Pages.
     */
    public function test_both_landing_pages_are_present_in_dynamic_and_static_sitemaps(): void
    {
        // Dynamic sitemap
        $response = $this->get('/sitemap.xml');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString('/digital-marketing-agency-kanpur', $content);
        $this->assertStringContainsString('/software-company-kanpur', $content);

        // Static sitemap file
        $staticSitemap = file_get_contents(public_path('sitemap.xml'));
        $this->assertStringContainsString('https://backendcodersindia.com/digital-marketing-agency-kanpur', $staticSitemap);
        $this->assertStringContainsString('https://backendcodersindia.com/software-company-kanpur', $staticSitemap);
    }

    public function test_digital_marketing_page_is_dynamically_editable_through_cms(): void
    {
        $page = \App\Models\Page::firstOrCreate(
            ['slug' => 'digital-marketing-agency-kanpur'],
            [
                'title' => 'Digital Marketing Agency in Kanpur That Tracks Leads, Not Likes',
                'meta_title' => 'Digital Marketing Agency in Kanpur | SEO, Ads & Social – Backend Coders India',
                'meta_description' => 'Kanpur digital marketing agency for SEO, Google Ads, Meta Ads and social media. Transparent monthly plans from ₹7,999. Free 30-min audit. Call today.',
                'canonical_url' => 'https://backendcodersindia.com/digital-marketing-agency-kanpur',
                'is_index' => true,
            ]
        );

        // Update in CMS
        $page->update([
            'title' => 'Custom CMS Head: ROI Growth in Kanpur',
            'meta_title' => 'Custom Meta Title from Admin Dashboard',
            'meta_description' => 'Custom meta description updated by administrator via CMS.',
        ]);

        $response = $this->get('/digital-marketing-agency-kanpur');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString('Custom CMS Head: ROI Growth in Kanpur', $content);
        $this->assertStringContainsString('Custom Meta Title from Admin Dashboard', $content);
        $this->assertStringContainsString('Custom meta description updated by administrator via CMS.', $content);

        // Test draft protection: when is_index is 0, guest gets 404, admin gets 200
        $page->update(['is_index' => false]);
        $guestResponse = $this->get('/digital-marketing-agency-kanpur');
        $guestResponse->assertStatus(404);

        $admin = \App\Models\User::factory()->create();
        $authResponse = $this->actingAs($admin)->get('/digital-marketing-agency-kanpur');
        $authResponse->assertStatus(200);
    }

    public function test_seo_page_is_dynamically_editable_through_cms(): void
    {
        $page = \App\Models\Page::firstOrCreate(
            ['slug' => 'seo'],
            [
                'title' => 'Build Sustainable <br><span class="text-[#FD5528]">Organic Search Visibility</span>',
                'meta_title' => 'SEO Company in Kanpur | SEO Services That Bring Leads – Backend Coders India',
                'meta_description' => 'Professional SEO company in Kanpur. We provide technical site audits, on-page keyword optimization, local SEO, and ethical link outreach to drive organic leads. Plans from ₹7,999/mo.',
                'canonical_url' => 'https://backendcodersindia.com/seo',
                'is_index' => true,
            ]
        );

        // Update in CMS
        $page->update([
            'title' => 'Custom SEO Headline From Admin CMS',
            'meta_title' => 'Custom SEO Title From Admin CMS',
            'meta_description' => 'Custom SEO meta description updated via admin dashboard.',
        ]);

        $response = $this->get('/seo');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString('Custom SEO Headline From Admin CMS', $content);
        $this->assertStringContainsString('Custom SEO Title From Admin CMS', $content);
        $this->assertStringContainsString('Custom SEO meta description updated via admin dashboard.', $content);

        // Test draft protection: when is_index is 0, guest gets 404, admin gets 200
        $page->update(['is_index' => false]);
        $guestResponse = $this->get('/seo');
        $guestResponse->assertStatus(404);

        $admin = \App\Models\User::factory()->create();
        $authResponse = $this->actingAs($admin)->get('/seo');
        $authResponse->assertStatus(200);

        // Restore for other tests
        $page->update([
            'title' => 'Build Sustainable <br><span class="text-[#FD5528]">Organic Search Visibility</span>',
            'meta_title' => 'SEO Company in Kanpur | SEO Services That Bring Leads – Backend Coders India',
            'meta_description' => 'Professional SEO company in Kanpur. We provide technical site audits, on-page keyword optimization, local SEO, and ethical link outreach to drive organic leads. Plans from ₹7,999/mo.',
            'is_index' => true,
        ]);
    }
}
