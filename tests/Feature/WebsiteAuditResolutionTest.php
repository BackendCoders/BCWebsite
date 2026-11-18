<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebsiteAuditResolutionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test Issue 1: Author Experience Consistency & Credentials.
     */
    public function test_author_page_has_consistent_experience_and_verified_credentials(): void
    {
        $response = $this->get('/owner');

        $response->assertStatus(200);
        
        // Assert no conflicting 20+ years claim remains
        $response->assertDontSee('20+ Years');
        $response->assertDontSee('20+ years');

        // Assert 10+ years is used consistently
        $response->assertSee('10+ Years of Hands-on Experience');

        // Assert verified LinkedIn link is present
        $response->assertSee('https://www.linkedin.com/in/ravindra-verma-55801a210/');

        // Assert verifiable case studies are referenced
        $response->assertSee('/project/seo-audit-lead-generation-and-agency-workflow-software');
        $response->assertSee('/project/marley-moves-logistics-transport-platform');
    }

    /**
     * Test Issue 2: Verifiable Case Studies.
     */
    public function test_verified_case_studies_exist_and_render_correctly(): void
    {
        $caseStudies = [
            'seo-audit-lead-generation-and-agency-workflow-software' => 'SEO Rocket Pro',
            'marley-moves-logistics-transport-platform' => 'Marley Moves',
            'pulse-events-management-ticketing-portal' => 'Pulse Events',
        ];

        foreach ($caseStudies as $slug => $expectedText) {
            $response = $this->get('/project/' . $slug);
            $response->assertStatus(200);
            $response->assertSee($expectedText);
            $response->assertSee('Architectural Stack');
            $response->assertSee('"@type":"BreadcrumbList"', false);
            $response->assertSee('Discuss Your Requirements');
        }
    }

    /**
     * Test Issue 3 & 4: Sourced Statistics in Blog Posts & Readability.
     */
    public function test_blog_posts_have_reliable_sources_and_no_unsubstantiated_claims(): void
    {
        // Custom web app blog
        $response = $this->get('/blog/custom-web-application-development-company-in-india-build-smarter-software-for-business-growth');
        $response->assertStatus(200);
        
        // Should not have the unsupported "90% of websites fail" claim
        $response->assertDontSee('90% of websites fail');
        
        // Should have Statcounter source citation for mobile traffic
        $response->assertSee('Statcounter GlobalStats');
        $response->assertSee('https://gs.statcounter.com/');

        // Kanpur SEO blog
        $responseKanpur = $this->get('/blog/how-seo-services-in-kanpur-help-businesses-grow-online');
        $responseKanpur->assertStatus(200);
        $responseKanpur->assertSee('Statcounter GlobalStats');
        $responseKanpur->assertSee('Google Search Central');

        // Startup cost blog
        $responseCost = $this->get('/blog/how-much-does-website-development-cost-for-startups-in-india-2026-guide');
        $responseCost->assertStatus(200);
        $responseCost->assertSee('AWS Pricing Calculator');
    }

    /**
     * Test Core Pages Readability & Rendering (Service and About).
     */
    public function test_core_pages_render_with_accessible_structure(): void
    {
        $serviceResponse = $this->get('/service');
        $serviceResponse->assertStatus(200);
        $serviceResponse->assertSee('Website Design & Development', false);
        $serviceResponse->assertSee('API Development');

        $aboutResponse = $this->get('/about');
        $aboutResponse->assertStatus(200);
        $aboutResponse->assertSee('About Backend');
        $aboutResponse->assertSee('Coders India');
    }

    /**
     * Test AEO Service Pages, Answer-First Content, and Indian Pricing Standards.
     */
    public function test_aeo_service_pages_and_ai_readiness(): void
    {
        // Create page model for SQLite in-memory test environment
        \App\Models\Page::create([
            'title' => 'Website Design & Development Company in Kanpur',
            'slug' => 'website-design-development',
            'meta_title' => 'Website Design & Development Company in Kanpur',
            'meta_description' => 'Custom website design and development services in Kanpur.',
            'status' => 'published',
        ]);

        // 1. Core Service Page Check: Website Design Development
        $response = $this->get('/page/website-design-development');
        $response->assertStatus(200);
        $response->assertSee('Direct Service Overview');
        $response->assertSee('How Much Does Website Design &amp; Development Cost in Kanpur?', false);
        $response->assertSee('₹7,999');
        $response->assertSee('Local Kanpur &amp; Regional Business Advantage', false);
        $response->assertSee('Frequently Asked Questions About', false);
        $response->assertDontSee('captcha_correct');

        // 2. SEO Page Check
        $seoResponse = $this->get('/seo');
        $seoResponse->assertStatus(200);
        $seoResponse->assertSee('How Do Professional SEO Services in Kanpur Drive Sustainable Growth?');
        $seoResponse->assertSee('₹7,999');
        $seoResponse->assertSee('Frequently Asked SEO Questions');

        // 3. Verify llms.txt & ai-catalog.json presence and validity
        $this->assertFileExists(public_path('llms.txt'));
        $llmsContent = file_get_contents(public_path('llms.txt'));
        $this->assertStringContainsString('Backend Coders India', $llmsContent);
        $this->assertStringContainsString('Kanpur, Uttar Pradesh', $llmsContent);
        $this->assertStringContainsString('+91 9140092133', $llmsContent);
        $this->assertStringContainsString('https://backendcodersindia.com/seo', $llmsContent);

        $this->assertFileExists(public_path('ai-catalog.json'));
        $aiCatalogContent = file_get_contents(public_path('ai-catalog.json'));
        $this->assertStringContainsString('Backend Coders India', $aiCatalogContent);
    }

    /**
     * Test Issue: Team Page Interactive Functionality & Modals.
     */
    public function test_team_page_renders_with_functional_modals_and_filters(): void
    {
        $response = $this->get('/team');
        $response->assertStatus(200);

        // Assert all 6 member modal keys exist
        $members = ['nupur', 'utkarsh', 'arvind', 'adarsh', 'kajal', 'arambhi'];
        foreach ($members as $key) {
            $response->assertSee("openMemberModal('{$key}')", false);
            $response->assertSee("{$key}: {", false);
        }

        // Assert member modal and lightbox containers exist
        $response->assertSee('id="memberModal"', false);
        $response->assertSee('id="modalContainer"', false);
        $response->assertSee('id="albumLightbox"', false);
        $response->assertSee('id="lightboxContainer"', false);

        // Assert team and album filter buttons exist
        $response->assertSee("filterTeam('all', this)", false);
        $response->assertSee("filterAlbums('all', this)", false);
    }
}


