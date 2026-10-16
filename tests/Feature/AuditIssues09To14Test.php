<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuditIssues09To14Test extends TestCase
{
    use RefreshDatabase;

    /**
     * Issue 09: Contact Form Phone Guidance & International Support.
     */
    public function test_contact_form_renders_phone_placeholder_and_helper_text(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('placeholder="+91 98765 43210"', false);
        $response->assertSee('Include your country code, e.g. +91 for India.', false);
    }

    public function test_packages_modal_renders_phone_placeholder_and_helper_text(): void
    {
        $response = $this->get('/packages');

        $response->assertStatus(200);
        $response->assertSee('id="pkg_phone"', false);
        $response->assertSee('placeholder="+91 98765 43210"', false);
        $response->assertSee('Include your country code, e.g. +91 for India.', false);
    }

    public function test_contact_submission_accepts_valid_indian_number(): void
    {
        $payload = [
            'first_name' => 'Rahul',
            'last_name' => 'Sharma',
            'email' => 'rahul@example.com',
            'phone' => '+91 98765 43210',
            'message' => 'Looking for a new Laravel website.',
            'captcha' => '12',
            'captcha_correct' => '12',
        ];

        $response = $this->post('/contact', $payload);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('contacts', [
            'email' => 'rahul@example.com',
            'phone' => '+91 98765 43210',
        ]);
    }

    public function test_contact_submission_accepts_valid_international_number(): void
    {
        $payload = [
            'first_name' => 'John',
            'last_name' => 'Smith',
            'email' => 'john.smith@example.co.uk',
            'phone' => '+44 7911 123456',
            'message' => 'International eCommerce inquiry from the UK.',
            'captcha' => '15',
            'captcha_correct' => '15',
        ];

        $response = $this->post('/contact', $payload);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('contacts', [
            'email' => 'john.smith@example.co.uk',
            'phone' => '+44 7911 123456',
        ]);
    }

    public function test_contact_submission_rejects_invalid_phone_format(): void
    {
        $payload = [
            'first_name' => 'Alex',
            'last_name' => 'Jones',
            'email' => 'alex@example.com',
            'phone' => 'abc-not-a-number',
            'message' => 'Testing phone validation.',
            'captcha' => '8',
            'captcha_correct' => '8',
        ];

        $response = $this->post('/contact', $payload);

        $response->assertSessionHasErrors(['phone']);
    }

    /**
     * Issue 10: Improve Social Proof Without Fabricating Claims.
     */
    public function test_homepage_renders_verified_social_proof_statistics_with_context(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('data-target="50"', false);
        $response->assertSee('Projects Delivered', false);
        $response->assertSee('Web, apps & custom software', false);

        $response->assertSee('data-target="40"', false);
        $response->assertSee('Happy Clients', false);
        $response->assertSee('Startups, SMEs & enterprises', false);

        $response->assertSee('data-target="3"', false);
        $response->assertSee('Countries Served', false);
        $response->assertSee('India, UK & international', false);
    }

    /**
     * Issue 11: Duplicate SEO Service URLs (301 Redirect & Canonical URL).
     */
    public function test_seo_canonical_route_returns_200_with_canonical_tag(): void
    {
        $response = $this->get('/seo');

        $response->assertStatus(200);
        $response->assertSee('<link rel="canonical" href="'.url('/seo').'">', false);
    }

    public function test_page_seo_services_redirects_301_to_canonical_seo_route(): void
    {
        $response = $this->get('/page/seo-services');

        $response->assertStatus(301);
        $response->assertRedirect(route('frontend.seo'));
    }

    public function test_page_seo_services_preserves_query_parameters_on_redirect(): void
    {
        $response = $this->get('/page/seo-services?ref=google&campaign=summer');

        $response->assertStatus(301);
        $response->assertRedirect(route('frontend.seo', ['ref' => 'google', 'campaign' => 'summer']));
    }

    /**
     * Issue 12: Broken Packages Page Contact CTA.
     */
    public function test_packages_page_contact_cta_links_to_contact_route(): void
    {
        $response = $this->get('/packages');

        $response->assertStatus(200);
        $contactUrl = route('frontend.contact');
        $response->assertSee('href="'.$contactUrl.'"', false);
    }

    /**
     * Issue 13: Public-Facing Copy and Formatting.
     */
    public function test_homepage_copy_corrections_are_applied(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertDontSee('SaaS Forces', false);
        $response->assertSee('SaaS Platforms', false);
        $response->assertDontSee('secure ,mobile', false);
        $response->assertSee('secure, mobile', false);
        $response->assertSee('API Development', false);
    }

    public function test_software_development_and_services_pages_replace_saas_forces(): void
    {
        $serviceResponse = $this->get('/service');
        $serviceResponse->assertStatus(200);
        $serviceResponse->assertDontSee('SaaS Forces', false);
        $serviceResponse->assertSee('SaaS Platforms', false);

        $softwareDevelopmentView = view('frontend.software_development')->render();
        $this->assertStringNotContainsString('SaaS Forces', $softwareDevelopmentView);
        $this->assertStringContainsString('SaaS Platforms', $softwareDevelopmentView);
    }

    /**
     * Issue 14: Duplicate Features in Pricing Plans.
     */
    public function test_pricing_plans_do_not_contain_duplicate_features(): void
    {
        $response = $this->get('/packages');
        $response->assertStatus(200);

        $html = $response->getContent();

        // Standard Web Plan: should have "Free Support (Monthly)" and not standalone duplicate "Free Support"
        $this->assertStringNotContainsString('✔</span> Free Support</li>', $html);
        $this->assertStringContainsString('✔</span> Free Support (Monthly)', $html);

        // Basic SEO Plan: Meta Tags Optimization should only appear once in the basic SEO card
        preg_match('/<!-- basic\s*-->.*?(?=<!-- STANDARD PLAN)/s', $html, $matches);
        if (!empty($matches[0])) {
            $basicSeoCard = $matches[0];
            $metaCount = substr_count($basicSeoCard, 'Meta Tags Optimization');
            $this->assertEquals(1, $metaCount, 'Basic SEO card must only contain "Meta Tags Optimization" once.');
            $reportingCount = substr_count($basicSeoCard, 'Reporting') + substr_count($basicSeoCard, 'Performance Report');
            $this->assertEquals(1, $reportingCount, 'Basic SEO card must only contain reporting feature once.');
        }
    }
}
