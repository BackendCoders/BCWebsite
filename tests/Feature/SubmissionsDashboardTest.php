<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\CareerApplication;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubmissionsDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_submissions_dashboard_and_filter(): void
    {
        $admin = User::factory()->create([
            'role' => 'admin',
        ]);

        $visitorId1 = '11111111-2222-3333-4444-555555555555';
        $visitorId2 = '99999999-8888-7777-6666-555555555555';

        $contact = Contact::create([
            'first_name' => 'Alice',
            'last_name' => 'Smith',
            'email' => 'alice@example.com',
            'phone' => '1234567890',
            'message' => 'First message',
            'visitor_id' => $visitorId1,
            'ip_address' => '192.168.1.100',
            'status' => 'new',
        ]);

        $application = CareerApplication::create([
            'full_name' => 'Bob Developer',
            'email' => 'bob@example.com',
            'phone' => '9876543210',
            'position' => 'Full Stack Engineer',
            'about' => 'Bio',
            'visitor_id' => $visitorId1, // Same visitor submitted both contact and career!
            'ip_address' => '192.168.1.101',
            'status' => 'new',
        ]);

        $otherContact = Contact::create([
            'first_name' => 'Charlie',
            'last_name' => 'Brown',
            'email' => 'charlie@example.com',
            'phone' => '5555555555',
            'message' => 'Other enquiry',
            'visitor_id' => $visitorId2,
            'ip_address' => '10.0.0.50',
            'status' => 'new',
        ]);

        // Unauthenticated access redirects to login
        $this->get('/submissions')->assertRedirect('/login');

        // Authenticated admin access
        $response = $this->actingAs($admin)->get('/submissions');
        $response->assertSuccessful();
        $response->assertSee('Alice Smith');
        $response->assertSee('Bob Developer');
        $response->assertSee('Charlie Brown');
        $response->assertSee('192.168.1.100');
        $response->assertSee('2 submissions'); // Count for visitorId1

        // Filter by visitor_id
        $filterVisitor = $this->actingAs($admin)->get('/submissions?visitor_id=' . $visitorId1);
        $filterVisitor->assertSuccessful();
        $filterVisitor->assertSee('Alice Smith');
        $filterVisitor->assertSee('Bob Developer');
        $filterVisitor->assertDontSee('Charlie Brown');

        // Filter by IP address
        $filterIp = $this->actingAs($admin)->get('/submissions?ip_address=10.0.0.50');
        $filterIp->assertSuccessful();
        $filterIp->assertSee('Charlie Brown');
        $filterIp->assertDontSee('Alice Smith');

        // Filter by form_type = career
        $filterFormType = $this->actingAs($admin)->get('/submissions?form_type=career');
        $filterFormType->assertSuccessful();
        $filterFormType->assertSee('Bob Developer');
        $filterFormType->assertDontSee('Alice Smith');
        $filterFormType->assertDontSee('Charlie Brown');
    }
}
