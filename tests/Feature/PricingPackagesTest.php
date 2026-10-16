<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PricingPackagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_pricing_page_renders_unambiguous_billing_terms(): void
    {
        $response = $this->get('/packages');

        $response->assertStatus(200);

        // Web Development billing terms (One-Time)
        $response->assertSee('One-Time Project • Fixed Price');
        $response->assertSee('₹ 7,999/- <span class="text-base font-semibold text-orange-600 ml-1">One-Time</span>', false);
        $response->assertSee('₹ 15,999/- <span class="text-base font-semibold text-orange-100 ml-1">One-Time</span>', false);
        $response->assertSee('₹ 24,999/- <span class="text-base font-semibold text-orange-600 ml-1">One-Time</span>', false);

        // Design & SMM billing terms (Monthly)
        $response->assertSee('Monthly Retainer • Weekly Scheduled Delivery');
        $response->assertSee('₹ 2,999/- <span class="text-base font-semibold text-orange-600 ml-1">/ Month</span>', false);
        $response->assertSee('₹ 5,999/- <span class="text-base font-semibold text-orange-100 ml-1">/ Month</span>', false);
        $response->assertSee('₹ 9,999/- <span class="text-base font-semibold text-orange-600 ml-1">/ Month</span>', false);

        // CRM / SaaS billing terms (Monthly)
        $response->assertSee('₹ 4,999/- <span class="text-base font-normal text-black">Monthly</span>', false);
        $response->assertSee('₹ 7,999/- <span class="text-base font-normal text-white">Monthly</span>', false);
        $response->assertSee('₹ 13,999/- <span class="text-base font-normal text-black">Monthly</span>', false);

        // App Development billing terms (One-Time)
        $response->assertSee('₹ 19,999/- <span class="text-base font-normal text-black">One-Time</span>', false);
        $response->assertSee('₹ 39,999/- <span class="text-base font-normal text-white">One-Time</span>', false);
        $response->assertSee('₹ 69,999/- <span class="text-base font-normal text-black">One-Time</span>', false);
    }

    public function test_crm_and_app_pricing_sections_match_clean_seo_layout(): void
    {
        $response = $this->get('/packages');
        $response->assertStatus(200);

        // CRM Section Elements
        $response->assertSee('BASIC CRM PLAN (Starter Automation)');
        $response->assertSee('STANDARD CRM PLAN (Business Automation)');
        $response->assertSee('PREMIUM CRM / SAAS PLAN (Advanced Automation & Scaling)', false);
        $response->assertSee('Lead Management Dashboard');
        $response->assertSee('Basic CRM Setup (Contacts + Leads)');
        $response->assertSee('Multi-stage Lead Pipeline');
        $response->assertSee('Custom CRM / SaaS Dashboard');

        // Mobile App Section Elements
        $response->assertSee('BASIC APP PLAN (Starter App)');
        $response->assertSee('STANDARD APP PLAN (Business App)');
        $response->assertSee('PREMIUM APP PLAN (Custom Enterprise App)');
        $response->assertSee('Android App (Single Platform)');
        $response->assertSee('Android + iOS App (Cross Platform - Flutter/React Native)', false);
        $response->assertSee('Fully Custom Android + iOS App');

        // Verify tabs are present
        $this->assertStringContainsString('data-content="saas"', $response->getContent());
        $this->assertStringContainsString('data-content="app"', $response->getContent());
    }
}
