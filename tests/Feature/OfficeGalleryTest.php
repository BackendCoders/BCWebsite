<?php

namespace Tests\Feature;

use App\Models\OfficeImage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OfficeGalleryTest extends TestCase
{
    use RefreshDatabase;

    public function test_office_gallery_page_loads_with_workspace_events_and_people_sections(): void
    {
        OfficeImage::create([
            'title' => 'Main Engineering Hall',
            'caption' => 'Staging workstation in Kanpur office',
            'alt_text' => 'Kanpur developer desk at Backend Coders India',
            'image_path' => 'assets/images/office.jpg',
            'category' => 'Workspace & Infrastructure',
            'order' => 1,
            'is_featured' => true,
            'is_published' => true,
        ]);

        OfficeImage::create([
            'title' => 'Office Festival & Ethnic Day Celebration',
            'caption' => 'Team celebrations at Kanpur office',
            'alt_text' => 'Festival celebration with Backend Coders team',
            'image_path' => 'assets/images/team.jpg',
            'category' => 'Company Activities',
            'order' => 2,
            'is_featured' => true,
            'is_published' => true,
        ]);

        OfficeImage::create([
            'title' => 'Ravindra Verma – Founder & CEO',
            'caption' => 'Founder and CEO',
            'alt_text' => 'Ravindra Verma Founder and CEO',
            'image_path' => 'assets/images/ceo.webp',
            'category' => 'Team & People',
            'order' => 3,
            'is_featured' => false,
            'is_published' => true,
        ]);

        $response = $this->get('/office-gallery');

        $response->assertStatus(200);
        $response->assertSee('Life at Backend Coders India');
        $response->assertSee('Our Workspace &amp; Engineering Labs', false);
        $response->assertSee('Team Events, Celebrations &amp; Fun Activities', false);
        $response->assertSee('People &amp; Leadership Culture', false);
        $response->assertSee('galleryLightbox');
        $response->assertSee('gallery-card');
        $response->assertSee('assets/images/office.jpg');
        $response->assertSee('assets/images/team.jpg');
        $response->assertSee('assets/images/ceo.webp');
    }

    public function test_office_gallery_contains_valid_json_ld_schema(): void
    {
        OfficeImage::create([
            'title' => 'Sprint Room',
            'caption' => 'Sprint meeting area',
            'alt_text' => 'Sprint room in Kanpur',
            'image_path' => 'assets/images/team.jpg',
            'category' => 'Meeting & Collaboration',
            'order' => 1,
            'is_published' => true,
        ]);

        $response = $this->get('/office-gallery');

        $content = $response->getContent();
        preg_match_all('/<script type="application\/ld\+json">(.*?)<\/script>/s', $content, $matches);

        $this->assertNotEmpty($matches[1]);

        $foundBreadcrumb = false;
        $foundImageGallery = false;

        foreach ($matches[1] as $jsonString) {
            $data = json_decode(trim($jsonString), true);
            $this->assertNotNull($data, 'JSON-LD schema must be valid JSON: ' . $jsonString);

            $type = $data['@type'] ?? null;
            if ($type === 'BreadcrumbList') {
                $foundBreadcrumb = true;
            }
            if ($type === 'ImageGallery') {
                $foundImageGallery = true;
                $this->assertNotEmpty($data['image']);
            }
        }

        $this->assertTrue($foundBreadcrumb, 'BreadcrumbList schema missing');
        $this->assertTrue($foundImageGallery, 'ImageGallery schema missing');
    }

    public function test_office_gallery_works_gracefully_even_when_database_table_is_empty_or_missing(): void
    {
        // Drop the office_images table to simulate production environment before migrations run
        \Illuminate\Support\Facades\Schema::dropIfExists('office_images');

        $response = $this->get('/office-gallery');

        $response->assertStatus(200);
        $response->assertSee('Life at Backend Coders India');
        $response->assertSee('Our Workspace &amp; Engineering Labs', false);
        $response->assertSee('Team Events, Celebrations &amp; Fun Activities', false);
        $response->assertSee('People &amp; Leadership Culture', false);
        $response->assertSee('galleryLightbox');
    }

    public function test_guest_cannot_access_admin_office_gallery(): void
    {
        $response = $this->get('/office-images');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_admin_can_manage_office_images(): void
    {
        $admin = User::factory()->create([
            'role' => 'admin',
        ]);

        $response = $this->actingAs($admin)->get('/office-images');
        $response->assertStatus(200);
        $response->assertSee('Office Gallery CMS');

        // Store new image
        $createResponse = $this->actingAs($admin)->post('/office-images', [
            'title' => 'New Kanpur Lab Photo',
            'caption' => 'A high tech desk configuration',
            'alt_text' => 'New Kanpur Lab Workstation',
            'category' => 'Workspace & Infrastructure',
            'order' => 5,
            'manual_path' => 'assets/images/work-space.jpg',
            'is_published' => 1,
        ]);

        $createResponse->assertRedirect('/office-images');
        $this->assertDatabaseHas('office_images', [
            'title' => 'New Kanpur Lab Photo',
            'category' => 'Workspace & Infrastructure',
        ]);

        $image = OfficeImage::where('title', 'New Kanpur Lab Photo')->first();

        // Update image
        $updateResponse = $this->actingAs($admin)->put("/office-images/{$image->id}", [
            'title' => 'Updated Kanpur Lab Photo',
            'caption' => 'Updated caption',
            'alt_text' => 'Updated alt',
            'category' => 'Office Interior',
            'order' => 1,
            'manual_path' => 'assets/images/office.jpg',
            'is_published' => 1,
        ]);

        $updateResponse->assertRedirect('/office-images');
        $this->assertDatabaseHas('office_images', [
            'id' => $image->id,
            'title' => 'Updated Kanpur Lab Photo',
            'category' => 'Office Interior',
        ]);

        // Delete image
        $deleteResponse = $this->actingAs($admin)->delete("/office-images/{$image->id}");
        $deleteResponse->assertRedirect('/office-images');
        $this->assertDatabaseMissing('office_images', [
            'id' => $image->id,
        ]);
    }
}
