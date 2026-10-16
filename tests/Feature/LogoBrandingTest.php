<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoBrandingTest extends TestCase
{
    use RefreshDatabase;

    public function test_logo_has_proper_branding_alt_text_and_no_loading_alt(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Header logo has proper alt text
        $response->assertSee('alt="Backend Coders India"', false);

        // Preloader logo does not say Loading...
        $response->assertDontSee('alt="Loading..."', false);
    }

    public function test_logo_images_are_accessible_and_valid(): void
    {
        $this->assertTrue(file_exists(public_path('assets/images/bc_bg_logo_101x40.png')));
        $this->assertTrue(file_exists(public_path('assets/images/bci_icon.png')));

        $this->assertNotEmpty(getimagesize(public_path('assets/images/bc_bg_logo_101x40.png')));
        $this->assertNotEmpty(getimagesize(public_path('assets/images/bci_icon.png')));
    }
}
