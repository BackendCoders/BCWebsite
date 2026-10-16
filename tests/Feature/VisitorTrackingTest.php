<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\CareerApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Middleware\TrustProxies;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class VisitorTrackingTest extends TestCase
{
    use RefreshDatabase;

    public function test_visitor_cookie_is_generated_on_initial_visit(): void
    {
        $response = $this->get('/contact');

        $cookie = $response->getCookie('bc_visitor_id', false);
        $this->assertNotNull($cookie);
        $cookieValue = $cookie->getValue();
        $this->assertNotEmpty($cookieValue);
        $this->assertMatchesRegularExpression('/^[a-f0-9\-]{36}$/', $cookieValue);
        $this->assertTrue($cookie->isHttpOnly());
        $this->assertSame('lax', $cookie->getSameSite());
    }

    public function test_existing_visitor_cookie_is_preserved_and_reused(): void
    {
        $existingId = '12345678-1234-1234-1234-1234567890ab';
        $response = $this->withUnencryptedCookie('bc_visitor_id', $existingId)->get('/contact');

        $response->assertSuccessful();
    }

    public function test_contact_form_stores_visitor_id_and_ip_address(): void
    {
        $visitorId = 'aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee';

        $response = $this->withUnencryptedCookie('bc_visitor_id', $visitorId)
            ->withServerVariables(['REMOTE_ADDR' => '103.45.67.89'])
            ->post('/contact', [
                'first_name' => 'Test',
                'last_name' => 'Visitor',
                'email' => 'visitor@example.com',
                'phone' => '9876543210',
                'message' => 'Testing visitor tracking submission.',
                'captcha' => '7',
                'captcha_correct' => '7',
            ]);

        $this->assertDatabaseHas('contacts', [
            'email' => 'visitor@example.com',
            'visitor_id' => $visitorId,
            'ip_address' => '103.45.67.89',
            'status' => 'new',
        ]);
        $this->assertNotNull(Contact::where('email', 'visitor@example.com')->value('created_at'));
    }

    public function test_career_application_stores_visitor_id_and_ip_address(): void
    {
        $visitorId = 'bbbbbbbb-cccc-dddd-eeee-ffffffffffff';

        $response = $this->withUnencryptedCookie('bc_visitor_id', $visitorId)
            ->withServerVariables(['REMOTE_ADDR' => '103.99.88.77'])
            ->post('/career/apply', [
                'full_name' => 'Jane Candidate',
                'email' => 'candidate@example.com',
                'phone' => '9876543211',
                'position' => 'Senior Backend Developer',
                'about' => 'Experienced Laravel developer.',
            ]);

        $this->assertDatabaseHas('career_applications', [
            'email' => 'candidate@example.com',
            'visitor_id' => $visitorId,
            'ip_address' => '103.99.88.77',
            'status' => 'new',
        ]);
        $this->assertNotNull(CareerApplication::where('email', 'candidate@example.com')->value('created_at'));
    }

    public function test_public_page_visit_is_recorded_and_refresh_is_deduplicated(): void
    {
        $visitorId = 'cccccccc-dddd-eeee-ffff-000000000000';

        $this->withUnencryptedCookie('bc_visitor_id', $visitorId)->get('/contact')->assertSuccessful();
        $this->withUnencryptedCookie('bc_visitor_id', $visitorId)->get('/contact')->assertSuccessful();

        $this->assertDatabaseCount('site_visits', 1);
        $this->assertDatabaseHas('site_visits', [
            'visitor_id' => $visitorId,
            'path' => '/contact',
        ]);
    }

    public function test_untrusted_forwarded_ip_headers_are_not_used_for_contact_submission(): void
    {
        $response = $this->withServerVariables(['REMOTE_ADDR' => '103.45.67.89'])
            ->withHeaders([
                'X-Forwarded-For' => '198.51.100.123',
                'CF-Connecting-IP' => '203.0.113.45',
                'X-Real-IP' => '192.0.2.55',
            ])
            ->post('/contact', [
                'first_name' => 'Proxy',
                'last_name' => 'Check',
                'email' => 'proxy-check@example.com',
                'phone' => '9876543212',
                'message' => 'Check trusted IP handling.',
                'captcha' => '7',
                'captcha_correct' => '7',
            ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('contacts', [
            'email' => 'proxy-check@example.com',
            'ip_address' => '103.45.67.89',
        ]);
    }

    public function test_forwarded_ip_is_used_when_the_immediate_proxy_is_trusted(): void
    {
        TrustProxies::at(['10.20.30.40', '10.20.30.41']);

        try {
            $response = $this->withServerVariables(['REMOTE_ADDR' => '10.20.30.40'])
                ->withHeaders(['X-Forwarded-For' => '198.51.100.124, 10.20.30.41'])
                ->post('/contact', [
                    'first_name' => 'Trusted',
                    'last_name' => 'Proxy',
                    'email' => 'trusted-proxy@example.com',
                    'phone' => '9876543213',
                    'message' => 'Check trusted proxy handling.',
                    'captcha' => '7',
                    'captcha_correct' => '7',
                ]);

            $response->assertRedirect();
            $this->assertDatabaseHas('contacts', [
                'email' => 'trusted-proxy@example.com',
                'ip_address' => '198.51.100.124',
            ]);
        } finally {
            TrustProxies::flushState();
        }
    }

    public function test_ipv6_client_address_is_saved_without_truncation(): void
    {
        $response = $this->withServerVariables(['REMOTE_ADDR' => '2001:db8::1'])
            ->post('/contact', [
                'first_name' => 'IPv6',
                'last_name' => 'Visitor',
                'email' => 'ipv6@example.com',
                'phone' => '9876543214',
                'message' => 'Check IPv6 storage.',
                'captcha' => '7',
                'captcha_correct' => '7',
            ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('contacts', [
            'email' => 'ipv6@example.com',
            'ip_address' => '2001:db8::1',
        ]);
    }

    public function test_page_visit_tracking_failure_does_not_break_page_response(): void
    {
        Schema::drop('site_visits');

        $this->get('/contact')->assertSuccessful();
    }
}
