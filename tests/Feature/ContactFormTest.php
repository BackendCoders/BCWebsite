<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;
    public function test_contact_page_renders_solvable_captcha_without_loading_placeholder(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('id="captchaQuestion"', false);
        $response->assertSee('What is ', false);
        $response->assertSee('Reload challenge', false);
        $response->assertSee('name="captcha_correct"', false);
        $response->assertDontSee('<div class="mb-2 font-bold text-gray-600" id="captchaQuestion">' . "\n" . '            Loading...', false);
    }

    public function test_packages_page_renders_solvable_captcha_without_loading_placeholder(): void
    {
        $response = $this->get('/packages');

        $response->assertStatus(200);
        $response->assertSee('id="captchaQuestion"', false);
        $response->assertSee('What is ', false);
        $response->assertSee('Reload challenge', false);
        $response->assertSee('name="captcha_correct"', false);
    }

    public function test_successful_contact_form_submission(): void
    {
        $response = $this->post('/contact', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'phone' => '9876543210',
            'message' => 'Hello from contact test',
            'captcha' => '12',
            'captcha_correct' => '12',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');
        $this->assertStringContainsString("Thanks! We'll reply within 24 hours.", session('success'));
        $this->assertDatabaseHas('contacts', [
            'email' => 'john.doe@example.com',
            'first_name' => 'John',
        ]);

        // Follow up to verify confirmation banner renders in view
        $followUp = $this->withSession(['success' => session('success')])->get('/contact');
        $followUp->assertSee("Inquiry Received!");
        $followUp->assertSee("Thanks! We&#039;ll reply within 24 hours.", false);
        $followUp->assertSee('id="contact-feedback"', false);
    }

    public function test_failed_captcha_submission_redirects_with_error(): void
    {
        $response = $this->post('/contact', [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane.doe@example.com',
            'phone' => '9876543210',
            'message' => 'Wrong captcha test',
            'captcha' => '999',
            'captcha_correct' => '12',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('error');
        $this->assertStringContainsString('Verification failed', session('error'));
        $this->assertStringContainsString('Next steps', session('error'));

        // Follow up to verify error banner renders in view with next steps
        $followUp = $this->withSession(['error' => session('error')])->get('/contact');
        $followUp->assertSee("Submission Failed");
        $followUp->assertSee("Verification failed: Incorrect math answer");
        $followUp->assertSee("Next steps");
    }

    public function test_async_contact_form_submission_returns_json_confirmation(): void
    {
        $response = $this->postJson('/contact', [
            'first_name' => 'Alice',
            'last_name' => 'Engineer',
            'email' => 'alice@example.com',
            'phone' => '9876543212',
            'message' => 'Async inquiry test',
            'captcha' => '15',
            'captcha_correct' => '15',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
        ]);
        $response->assertJsonFragment([
            'message' => "Thanks! We'll reply within 24 hours. Your inquiry has been received by our team.",
        ]);
    }

    public function test_async_failed_captcha_returns_json_error_with_next_steps(): void
    {
        $response = $this->postJson('/contact', [
            'first_name' => 'Bob',
            'last_name' => 'Builder',
            'email' => 'bob@example.com',
            'phone' => '9876543213',
            'message' => 'Async wrong captcha test',
            'captcha' => '1',
            'captcha_correct' => '15',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'success' => false,
        ]);
        $this->assertStringContainsString('Next steps', $response->json('message'));
    }
}
