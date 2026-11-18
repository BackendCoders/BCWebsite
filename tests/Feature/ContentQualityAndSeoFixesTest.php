<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContentQualityAndSeoFixesTest extends TestCase
{
    use RefreshDatabase;

    public function test_case_study_has_genuine_story_and_no_placeholder_faqs(): void
    {
        $response = $this->get('/project/seo-audit-lead-generation-and-agency-workflow-software');

        $response->assertStatus(200);

        // Ensure placeholder FAQ text is absent
        $response->assertDontSee('Sunt cupidatat omnis');
        $response->assertDontSee('Provident sint moll');

        // Ensure invalid FAQPage schema is absent from case studies
        $response->assertDontSee('"@type":"FAQPage"', false);
        $response->assertDontSee('"@type": "FAQPage"', false);

        // Ensure genuine case study sections are present
        $response->assertSee('1. Client Context &amp; Project Background', false);
        $response->assertSee('2. The Business Problem', false);
        $response->assertSee('3. Implemented Solution', false);
        $response->assertSee('4. Architecture &amp; Technical Approach', false);
        $response->assertSee('5. Verified Outcomes', false);
        $response->assertSee('6. Lessons Learned', false);

        // Ensure client metadata is distinct from industry and status
        $response->assertSee('Backend Coders India (Proprietary SaaS)');
        $response->assertSee('Agency Workflow &amp; SEO Automation', false);
        $response->assertSee('Live Deployed Platform');
    }

    public function test_google_ads_page_has_no_erp_content_and_has_complete_features(): void
    {
        $response = $this->get('/page/ppc-ads-google-ads');

        $response->assertStatus(200);

        // No ERP or POS copy
        $response->assertDontSee('ERP and POS Software for Better Efficiency and Control');

        // Relevant PPC content
        $response->assertSee('Google Search Ads');
        $response->assertSee('Display Advertising');
        $response->assertSee('Remarketing Ads');
        $response->assertSee('Structured Campaign Planning &amp; Budget Management', false);
        $response->assertSee('Conversion Tracking');
        $response->assertSee('Transparent Reporting');

        // Practical Kanpur example
        $response->assertSee('B2B &amp; Manufacturing Lead Generation in Kanpur', false);

        // Working enquiry form
        $response->assertSee('data-contact-form');
        $response->assertSee('https://backendcodersindia.com/page/ppc-ads-google-ads');
    }

    public function test_local_seo_page_has_complete_h1_and_no_typos(): void
    {
        $response = $this->get('/page/local-seo');

        $response->assertStatus(200);

        // Complete H1
        $response->assertSee('Local SEO Services That Improve Online Visibility');

        // Fixed keyword ranking heading
        $response->assertSee('Local Keyword Ranking Services');
        $response->assertDontSee('>cal Keyword Ranking');

        // Practical local sections and FAQs
        $response->assertSee('How Local Search Works for Regional Businesses');
        $response->assertSee('Local SEO Common Questions');
        $response->assertSee('data-contact-form');
    }

    public function test_blog_small_business_india_redirects_and_listing_has_no_dummy_posts(): void
    {
        $response = $this->get('/blog/small-business-india');
        $response->assertRedirect('/blog/how-seo-services-in-kanpur-help-businesses-grow-online');

        $listingResponse = $this->get('/blog');
        $listingResponse->assertStatus(200);
        $listingResponse->assertDontSee('Aspernatur sit id co');
    }

    public function test_packages_page_has_package_faqs_and_organic_link_acquisition(): void
    {
        $response = $this->get('/packages');

        $response->assertStatus(200);

        // No microservices / Kafka FAQs
        $response->assertDontSee('We architect microservices, apply caching strategies');
        $response->assertDontSee('Redis, Kafka, Azure, AWS');

        // Package relevant FAQs present
        $response->assertSee('What is included in each package scope?');
        $response->assertSee('How do you handle link acquisition in SEO packages?');
        $response->assertSee('Can I upgrade, downgrade, or customize my plan?');

        // Backlinks reframed around organic outreach and digital PR
        $response->assertSee('Foundational Local Citations &amp; Directory Links', false);
        $response->assertSee('Targeted Industry Outreach &amp; Editorial Link Acquisition', false);
        $response->assertSee('Authoritative Digital PR &amp; Industry Content Outreach', false);
        $response->assertDontSee('25+ High-Quality Backlinks');
        $response->assertDontSee('50+ High-Quality Backlinks');
        $response->assertDontSee('100+ High-Authority Backlinks');
    }

    public function test_projects_page_has_substantiated_capabilities(): void
    {
        $response = $this->get('/project');

        $response->assertStatus(200);

        // Unverified claims removed
        $response->assertDontSee('+100%');
        $response->assertDontSee('Base:</span> 5K visits/mo', false);

        // Substantiated capabilities present
        $response->assertSee('Delivered Platform Capabilities');
        $response->assertSee('Consolidated Toolset');
        $response->assertSee('Automated Audit Crawls');
    }

    public function test_blog_author_attribution_and_person_schema(): void
    {
        Blog::updateOrCreate(
            ['slug' => 'how-to-choose-a-website-development-company-in-kanpur'],
            [
                'title' => 'How to Choose a Web Development Company in Kanpur: 10-Point Checklist',
                'excerpt' => 'Evaluating web developers in Kanpur? Use this practical 10-point checklist.',
                'content' => '<p>Evaluating web development companies in Kanpur requires careful review of code ownership and technology.</p>',
                'meta_title' => 'How to Choose a Web Development Company in Kanpur: 10-Point Checklist | Backend Coders India',
                'meta_description' => 'A practical 10-point checklist for evaluating web development companies in Kanpur.',
                'is_published' => true,
            ]
        );

        $response = $this->get('/blog/how-to-choose-a-website-development-company-in-kanpur');

        $response->assertStatus(200);

        // Author pill and link to owner
        $response->assertSee('Ravindra Verma');
        $response->assertSee(route('frontend.owner'));

        // Author bio box
        $response->assertSee('About the Author');
        $response->assertSee('Founder &amp; Lead Architect', false);

        // Person schema in JSON-LD
        $response->assertSee('"@type": "Person"', false);
        $response->assertDontSee('@@context', false);
    }
}
