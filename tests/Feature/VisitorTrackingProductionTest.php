<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class VisitorTrackingProductionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Set up CAPTCHA session helper for tests.
     */
    protected function withCaptcha(string $answer = '7'): array
    {
        return [
            'contact_captcha' => [
                'answer' => $answer,
                'expires_at' => now()->addMinutes(15)->timestamp,
            ],
        ];
    }

    /**
     * Test A: Standard contact form submission captures visitor ID and client IP.
     */
    public function test_contact_form_captures_visitor_id_and_ip(): void
    {
        $visitorId = (string) Str::uuid();

        $response = $this->withSession($this->withCaptcha('9'))
            ->withUnencryptedCookie('bc_visitor_id', $visitorId)
            ->withServerVariables([
                'REMOTE_ADDR' => '203.0.113.45',
                'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/130.0.0.0 Safari/537.36',
                'HTTP_REFERER' => 'https://google.com/',
            ])
            ->post('/contact', [
                'first_name' => 'Aditya',
                'last_name' => 'Sharma',
                'email' => 'aditya@example.com',
                'phone' => '+91 98765 43210',
                'message' => 'Interested in enterprise custom software.',
                'captcha' => '9',
                'landing_page' => 'https://backendcodersindia.com/contact',
            ]);

        $response->assertSessionHas('success');

        $contact = Contact::where('email', 'aditya@example.com')->latest('id')->first();
        $this->assertNotNull($contact);
        $this->assertSame($visitorId, $contact->visitor_id);
        $this->assertSame('203.0.113.45', $contact->ip_address);
        $this->assertSame('Chrome 130', $contact->browser);
        $this->assertSame('Windows 10/11', $contact->os);
        $this->assertSame('Desktop', $contact->device_type);
        $this->assertSame('https://google.com/', $contact->referrer);
    }

    /**
     * Test B: Edge case - Cookies disabled / no tracking cookie.
     * Must NOT invent a fake identifier. Must capture IP and succeed without failure.
     */
    public function test_contact_form_handles_disabled_cookies_gracefully(): void
    {
        $response = $this->withSession($this->withCaptcha('11'))
            ->withServerVariables([
                'REMOTE_ADDR' => '198.51.100.22',
                'HTTP_USER_AGENT' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.1 Mobile/15E148 Safari/604.1',
            ])
            ->postJson('/contact', [
                'first_name' => 'Private',
                'last_name' => 'User',
                'email' => 'private@example.com',
                'phone' => '+91 91234 56789',
                'message' => 'Inquiry from Safari private browsing.',
                'captcha' => '11',
            ]);

        $response->assertOk();
        $response->assertJson(['success' => true]);

        $contact = Contact::where('email', 'private@example.com')->latest('id')->first();
        $this->assertNotNull($contact);
        $this->assertNull($contact->visitor_id); // No fake ID invented
        $this->assertSame('198.51.100.22', $contact->ip_address);
        $this->assertSame('Mobile', $contact->device_type);
        $this->assertSame('iOS 18.1', $contact->os);
        $this->assertSame('Safari 18', $contact->browser);
    }

    /**
     * Test C: Edge case - Reverse proxy / Hostinger CDN edge headers (CF-Connecting-IP, X-Forwarded-For).
     */
    public function test_ip_detection_behind_hostinger_cdn_and_cloudflare(): void
    {
        $response = $this->withSession($this->withCaptcha('8'))
            ->withServerVariables([
                'REMOTE_ADDR' => '172.68.10.5', // Internal CDN edge node IP
                'HTTP_CF_CONNECTING_IP' => '103.21.244.15', // Real client IP from edge
                'HTTP_X_FORWARDED_FOR' => '103.21.244.15, 172.68.10.5',
                'HTTP_X_FORWARDED_PROTO' => 'https',
            ])
            ->postJson('/contact', [
                'first_name' => 'Cloudflare',
                'last_name' => 'Visitor',
                'email' => 'cf@example.com',
                'phone' => '+91 99887 76655',
                'message' => 'Testing edge proxy IP detection.',
                'captcha' => '8',
            ]);

        $response->assertOk();

        $contact = Contact::where('email', 'cf@example.com')->latest('id')->first();
        $this->assertNotNull($contact);
        $this->assertSame('103.21.244.15', $contact->ip_address);
    }

    /**
     * Test D: Edge case - IPv6 client address support.
     */
    public function test_ipv6_client_address_support(): void
    {
        $ipv6 = '2001:db8:85a3::8a2e:370:7334';

        $response = $this->withSession($this->withCaptcha('14'))
            ->withServerVariables([
                'REMOTE_ADDR' => $ipv6,
                'HTTP_CF_CONNECTING_IP' => $ipv6,
                'HTTP_X_FORWARDED_PROTO' => 'https',
            ])
            ->postJson('/contact', [
                'first_name' => 'IPv6',
                'last_name' => 'Tester',
                'email' => 'ipv6@example.com',
                'phone' => '+91 91122 33445',
                'message' => 'Testing pure IPv6 connection.',
                'captcha' => '14',
            ]);

        $response->assertOk();

        $contact = Contact::where('email', 'ipv6@example.com')->latest('id')->first();
        $this->assertNotNull($contact);
        $this->assertSame($ipv6, $contact->ip_address);
    }

    /**
     * Test E: Admin visitor tracking display renders properly with telemetry values.
     */
    public function test_admin_contact_detail_view_renders_telemetry_card(): void
    {
        $user = User::factory()->create(['role' => 'admin']);

        $contact = Contact::create([
            'first_name' => 'Rahul',
            'last_name' => 'Verma',
            'email' => 'rahul@example.com',
            'phone' => '+91 98765 00000',
            'message' => 'Admin telemetry test message.',
            'visitor_id' => 'test-visitor-uuid-1234',
            'ip_address' => '203.0.113.195',
            'browser' => 'Chrome 130',
            'os' => 'Windows 10/11',
            'device_type' => 'Desktop',
            'referrer' => 'https://backendcodersindia.com/services',
            'landing_page' => 'https://backendcodersindia.com/contact',
            'consent_status' => 'captured',
            'status' => 'new',
        ]);

        $response = $this->actingAs($user)->get(route('contacts.show', $contact));
        $response->assertOk();
        $response->assertSee('VISITOR TRACKING');
        $response->assertSee('test-visitor-uuid-1234');
        $response->assertSee('203.0.113.195');
        $response->assertSee('Chrome 130');
        $response->assertSee('Windows 10/11');
        $response->assertSee('Desktop');
        $response->assertSee('Captured');
    }
}
