<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StructuredDataAndEntitySchemaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 1. Test Sitewide Organization and WebSite Entity in @graph.
     */
    public function test_sitewide_graph_has_consolidated_organization_and_website(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $content = $response->getContent();

        // Must have valid @context and @graph
        $this->assertStringContainsString('"@context": "https://schema.org"', $content);
        $this->assertStringNotContainsString('"@@context"', $content);

        // Canonical IDs
        $this->assertStringContainsString('"@id": "https://backendcodersindia.com/#organization"', $content);
        $this->assertStringContainsString('"@id": "https://backendcodersindia.com/#website"', $content);
        $this->assertStringContainsString('"name": "Backend Coders India"', $content);

        // Reconciled Coordinates and Price Range
        $this->assertStringContainsString('"latitude": 26.4204', $content);
        $this->assertStringContainsString('"longitude": 80.3723', $content);
        $this->assertStringContainsString('"priceRange": "₹₹"', $content);
        $this->assertStringNotContainsString('"priceRange": "$$"', $content);

        // Verified Location and Contact Details
        $this->assertStringContainsString('11/42, Krishna Nagar', $content);
        $this->assertStringContainsString('Kanpur', $content);
        $this->assertStringContainsString('208007', $content);
        $this->assertStringContainsString('+91 914 0092 133', $content);
        $this->assertStringContainsString('info@backendcodersindia.com', $content);

        // Founder Person entity with consistent @id
        $this->assertStringContainsString('"@id": "https://backendcodersindia.com/owner#ravindra-verma"', $content);
        $this->assertStringContainsString('"name": "Ravindra Verma"', $content);
    }

    /**
     * 2. Test Case Study FAQ and Placeholder Removal.
     */
    public function test_case_study_has_no_placeholder_faqs_or_invalid_faq_schema(): void
    {
        $response = $this->get('/project/seo-audit-lead-generation-and-agency-workflow-software');
        $response->assertStatus(200);

        $content = $response->getContent();

        // No placeholder Latin strings
        $this->assertStringNotContainsString('Sunt cupidatat omnis', $content);
        $this->assertStringNotContainsString('Provident sint moll', $content);

        // No FAQPage schema on this case study
        $this->assertStringNotContainsString('"@type": "FAQPage"', $content);
        $this->assertStringNotContainsString('"@type":"FAQPage"', $content);

        // Has valid BreadcrumbList
        $this->assertStringContainsString('BreadcrumbList', $content);
    }

    /**
     * 3. Test BlogPosting Author Markup and Relationships.
     */
    public function test_blog_posting_author_markup_links_to_owner_person_entity(): void
    {
        $user = User::factory()->create([
            'name' => 'Ravindra Verma',
        ]);

        $blog = Blog::firstOrCreate(
            ['slug' => 'how-to-choose-a-website-development-company-in-kanpur'],
            [
                'title' => 'How to Choose a Website Development Company in Kanpur',
                'content' => '<p>Detailed article content on choosing a web development company in Kanpur.</p>',
                'is_published' => 1,
                'published_at' => now(),
                'meta_title' => 'Guide to Choosing a Web Development Company in Kanpur',
                'meta_description' => 'Practical checklist for evaluating website development agencies in Kanpur.',
            ]
        );
        $blog->update(['is_published' => 1]);

        $response = $this->get('/blog/' . $blog->slug);
        $response->assertStatus(200);

        $content = $response->getContent();

        // Author is Person node linking to /owner#ravindra-verma
        $this->assertStringContainsString('"@type": "Person"', $content);
        $this->assertStringContainsString('"@id": "https://backendcodersindia.com/owner#ravindra-verma"', $content);
        $this->assertStringContainsString('https://backendcodersindia.com/owner', $content);

        // worksFor links to canonical Organization entity
        $this->assertStringContainsString('"@id": "https://backendcodersindia.com/#organization"', $content);

        // Publisher is Organization
        $this->assertStringContainsString('"publisher": {', $content);
    }

    /**
     * 4. Test Service JSON-LD Schema on /page/* and Standalone Service Pages.
     */
    public function test_service_pages_have_valid_service_schema_and_truthful_pricing(): void
    {
        // A. Website Design & Development with published ₹7,999 starting price
        $response = $this->get('/page/website-design-development');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString('"@type": "Service"', $content);
        $this->assertStringContainsString('"@id": "https://backendcodersindia.com/page/website-design-development#service"', $content);
        $this->assertStringContainsString('"@id": "https://backendcodersindia.com/#organization"', $content);
        $this->assertStringContainsString('"price": "7999"', $content);
        $this->assertStringContainsString('"priceCurrency": "INR"', $content);

        // B. Mobile App Development with published ₹19,999 starting price
        $response = $this->get('/page/mobile-app-development');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString('"@type": "Service"', $content);
        $this->assertStringContainsString('"price": "19999"', $content);
        $this->assertStringContainsString('"priceCurrency": "INR"', $content);

        // C. Custom Web Applications (bespoke scope, no invented price)
        $response = $this->get('/page/custom-web-applications');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString('"@type": "Service"', $content);
        $this->assertStringContainsString('"@id": "https://backendcodersindia.com/page/custom-web-applications#service"', $content);
        // Ensure no fake/fabricated generic price was attached
        $this->assertStringNotContainsString('"price": "7999"', $content);
        $this->assertStringNotContainsString('"price": "19999"', $content);

        // D. Local SEO page
        $response = $this->get('/page/local-seo');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString('"@type": "Service"', $content);
        $this->assertStringContainsString('"price": "7999"', $content);
        $this->assertStringContainsString('Kanpur', $content);

        // E. PPC Ads page
        $response = $this->get('/page/ppc-ads-google-ads');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString('"@type": "Service"', $content);
        $this->assertStringContainsString('"price": "6999"', $content);

        // F. SEO Services page (/seo)
        $response = $this->get('/seo');
        $response->assertStatus(200);
        $content = $response->getContent();

        $this->assertStringContainsString('"@type": "Service"', $content);
        $this->assertStringContainsString('"@id": "https://backendcodersindia.com/seo#service"', $content);
        $this->assertStringContainsString('"price": "7999"', $content);
    }

    /**
     * 5. Test BreadcrumbList Schema on Core Public Pages.
     */
    public function test_breadcrumb_list_schema_present_on_all_core_public_pages(): void
    {
        $pages = [
            '/about',
            '/team',
            '/owner',
            '/packages',
            '/contact',
            '/service',
            '/blog',
            '/project',
            '/process',
            '/seo',
            '/page/website-design-development',
            '/page/local-seo',
        ];

        foreach ($pages as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $content = $response->getContent();

            $this->assertTrue(
                str_contains($content, '"@type": "BreadcrumbList"') || str_contains($content, '"@type":"BreadcrumbList"'),
                "Page [{$url}] is missing valid BreadcrumbList JSON-LD."
            );
        }
    }

    /**
     * 6. Test Location and Coordinate Consistency Across Business Schema and Contact Page.
     */
    public function test_location_and_coordinate_consistency(): void
    {
        // Contact page
        $contactResponse = $this->get('/contact');
        $contactResponse->assertStatus(200);
        $contactContent = $contactResponse->getContent();

        // Contact page map iframe contains verified coordinates
        $this->assertStringContainsString('26.420444', $contactContent);
        $this->assertStringContainsString('80.372306', $contactContent);

        // Contact page has Breadcrumbs
        $this->assertStringContainsString('"@type": "BreadcrumbList"', $contactContent);

        // Local landing pages
        $landingPages = [
            '/software-company-kanpur',
            '/digital-marketing-agency-kanpur',
        ];

        foreach ($landingPages as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $content = $response->getContent();

            $this->assertStringContainsString('26.4204', $content);
            $this->assertStringContainsString('80.3723', $content);
            $this->assertStringContainsString('+91 914 0092 133', $content);
            $this->assertStringContainsString('11/42, Krishna Nagar', $content);
            $this->assertStringContainsString('"@id": "https://backendcodersindia.com/#organization"', $content);
        }
    }
}
