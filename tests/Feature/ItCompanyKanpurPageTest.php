<?php

namespace Tests\Feature;

use App\Models\Page;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ItCompanyKanpurPageTest extends TestCase
{
    use RefreshDatabase;

    protected string $slug = 'it-company-in-kanpur-web-software-digital-services-backend-coders-india';

    public function test_target_page_loads_with_status_200_and_correct_seo_fields(): void
    {
        $response = $this->get('/page/' . $this->slug);

        $response->assertStatus(200);

        // SEO Title
        $response->assertSee('IT Company in Kanpur | Web, Software &amp; Digital Services – Backend Coders India', false);

        // Single H1
        $response->assertSee('IT Company in Kanpur for Web, Software & Digital Business Solutions');

        // Meta Description
        $response->assertSee('Looking for an IT company in Kanpur? Backend Coders India provides website development, custom software, SEO and digital marketing services for businesses.');

        // Canonical URL
        $response->assertSee('https://backendcodersindia.com/page/' . $this->slug);
    }

    public function test_target_page_displays_all_13_sections_and_key_content(): void
    {
        $response = $this->get('/page/' . $this->slug);

        $response->assertStatus(200);

        // Section 1: Hero
        $response->assertSee('IT Services for Growing Businesses');
        $response->assertSee('Discuss Your Project');
        $response->assertSee('Explore Our Services');

        // Section 2: About
        $response->assertSee('About Backend Coders India');
        $response->assertSee('Ravindra Verma, Founder & CEO', false);
        $response->assertSee('11/42, Krishna Nagar, Kanpur, UP 208007');

        // Section 3: IT Services
        $response->assertSee('IT Services in Kanpur for Different Business Needs');
        $response->assertSee('Website Design and Development');
        $response->assertSee('Custom Software and Web Applications');
        $response->assertSee('Search Engine Optimisation (SEO)');
        $response->assertSee('Digital Marketing');
        $response->assertSee('Mobile App Development');
        $response->assertSee('ERP, POS and Business Software');

        // Section 4: Who We Work With
        $response->assertSee('Technology Solutions for Different Business Requirements');
        $response->assertSee('Retail and Trading Businesses');
        $response->assertSee('Manufacturing and Distribution');

        // Section 5: Why Consider BCI
        $response->assertSee('Choosing an IT Company in Kanpur for Your Business');
        $response->assertSee('Requirement-Focused Planning');
        $response->assertSee('Evidence-Based Evaluation');

        // Section 6: Our Project Process
        $response->assertSee('How We Approach a New Project');
        $response->assertSee('Step 1 — Understand Your Requirements');
        $response->assertSee('Step 5 — Test and Handover');

        // Section 7: Portfolio
        $response->assertSee('Explore Our Work');
        $response->assertSee('Marley Moves Logistics &amp; Transport Platform', false);

        // Section 8: Leadership & Team
        $response->assertSee('Meet the People Behind Backend Coders India');
        $response->assertSee('Leadership &amp; Technical Team', false);

        // Section 9: Office and Contact
        $response->assertSee('Connect With Backend Coders India in Kanpur');
        $response->assertSee('Office Address');
        $response->assertSee('+91 914 0092 133');

        // Section 10: Credentials
        $response->assertSee('Our Company Credentials');

        // Section 11: Careers
        $response->assertSee('Working at BCI');
        $response->assertSee('Explore Careers');

        // Section 12: FAQs
        $response->assertSee('Frequently Asked Questions About IT Companies in Kanpur');
        $response->assertSee('What services does Backend Coders India offer?');
        $response->assertSee('How do I choose the right IT company in Kanpur?');

        // Section 13: Final CTA
        $response->assertSee('Looking for an IT Company in Kanpur for Your Next Project?');
    }

    public function test_target_page_can_be_managed_via_admin_dashboard(): void
    {
        $admin = User::factory()->create([
            'role' => 'admin',
        ]);

        $page = Page::where('slug', $this->slug)->first();
        $this->assertNotNull($page, 'Target page record must exist');

        // Admin can view /pages list and see this page
        $listResponse = $this->actingAs($admin)->get(route('pages.index'));
        $listResponse->assertStatus(200);
        $listResponse->assertSee($page->title);
        $listResponse->assertSee($this->slug);

        // Admin can view the edit form for this page
        $editResponse = $this->actingAs($admin)->get(route('pages.edit', $page->id));
        $editResponse->assertStatus(200);
        $editResponse->assertSee($page->title);
        $editResponse->assertSee('Frequently Asked Questions About IT Companies in Kanpur');

        // Admin can update page SEO settings and changes persist
        $originalTitle = $page->title;
        $updatedTitle = $originalTitle . ' - Verified Update';

        $updateResponse = $this->actingAs($admin)->put(route('pages.update', $page->id), [
            'title' => $updatedTitle,
            'slug' => $page->slug,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'canonical_url' => $page->canonical_url,
            'meta_keywords' => $page->meta_keywords,
            'is_index' => 1,
            'type' => 'software_development',
        ]);

        $updateResponse->assertRedirect(route('pages.index'));

        $page->refresh();
        $this->assertEquals($updatedTitle, $page->title);

        // Revert cleanly
        $page->title = $originalTitle;
        $page->save();

        $page->refresh();
        $this->assertEquals($originalTitle, $page->title);
    }
}
