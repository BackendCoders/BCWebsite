<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_renders_solvable_captcha_without_exposed_answer(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('id="captchaQuestion"', false);
        $response->assertSee('What is ', false);
        $response->assertSee('Reload challenge', false);
        // Ensure the answer is NEVER exposed in client HTML
        $response->assertDontSee('name="captcha_correct"', false);
        $response->assertDontSee('id="captchaCorrect"', false);
        $response->assertDontSee('<div class="mb-2 font-bold text-gray-600" id="captchaQuestion">' . "\n" . '            Loading...', false);

        // Ensure session was populated with server-side challenge
        $this->assertTrue(session()->has('contact_captcha'));
        $this->assertNotEmpty(session('contact_captcha.answer'));
    }

    public function test_packages_page_renders_solvable_captcha_without_exposed_answer(): void
    {
        $response = $this->get('/packages');

        $response->assertStatus(200);
        $response->assertSee('id="captchaQuestion"', false);
        $response->assertSee('What is ', false);
        $response->assertSee('Reload challenge', false);
        // Ensure the answer is NEVER exposed in client HTML
        $response->assertDontSee('name="captcha_correct"', false);
        $response->assertDontSee('id="captchaCorrect"', false);

        // Ensure session was populated with server-side challenge
        $this->assertTrue(session()->has('contact_captcha'));
        $this->assertNotEmpty(session('contact_captcha.answer'));
    }

    public function test_captcha_refresh_endpoint_returns_question_only_without_exposing_answer(): void
    {
        $response = $this->getJson('/captcha/refresh');

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
        ]);
        $response->assertJsonStructure([
            'success',
            'question',
        ]);
        // The answer must NEVER be returned in JSON response
        $this->assertArrayNotHasKey('answer', $response->json());
        $this->assertArrayNotHasKey('captcha_correct', $response->json());
        $this->assertStringStartsWith('What is ', $response->json('question'));

        // Verify session challenge matches question
        $this->assertTrue(session()->has('contact_captcha'));
    }

    public function test_successful_contact_form_submission_with_session_challenge(): void
    {
        // 1. Visit /contact to initialize session challenge
        $this->get('/contact');
        $expectedAnswer = session('contact_captcha.answer');

        // 2. Submit valid answer without passing any captcha_correct hidden field
        $response = $this->post('/contact', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'phone' => '+91 98765 43210',
            'message' => 'Hello from contact test',
            'captcha' => $expectedAnswer,
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
        $this->withSession([
            'contact_captcha' => [
                'answer' => '12',
                'expires_at' => now()->addMinutes(15)->timestamp,
            ],
        ]);

        $response = $this->post('/contact', [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane.doe@example.com',
            'phone' => '+91 98765 43210',
            'message' => 'Wrong captcha test',
            'captcha' => '999',
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

    public function test_expired_captcha_challenge_is_rejected(): void
    {
        $this->withSession([
            'contact_captcha' => [
                'answer' => '12',
                'expires_at' => now()->subMinute()->timestamp, // Expired in the past
            ],
        ]);

        $response = $this->post('/contact', [
            'first_name' => 'Expired',
            'last_name' => 'User',
            'email' => 'expired@example.com',
            'phone' => '+91 98765 43210',
            'message' => 'Expired challenge test',
            'captcha' => '12',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('error');
        $this->assertStringContainsString('expired', session('error'));
    }

    public function test_one_time_validation_prevents_replay_attacks(): void
    {
        // 1. Set valid challenge
        $this->withSession([
            'contact_captcha' => [
                'answer' => '14',
                'expires_at' => now()->addMinutes(15)->timestamp,
            ],
        ]);

        // First submission succeeds
        $firstResponse = $this->post('/contact', [
            'first_name' => 'First',
            'last_name' => 'Submit',
            'email' => 'first@example.com',
            'phone' => '+91 98765 43210',
            'message' => 'First attempt',
            'captcha' => '14',
        ]);
        $firstResponse->assertSessionHas('success');

        // Second submission using the same answer without refreshing fails because session is cleared
        $replayResponse = $this->post('/contact', [
            'first_name' => 'Replay',
            'last_name' => 'Bot',
            'email' => 'replay@example.com',
            'phone' => '+91 98765 43210',
            'message' => 'Replay attempt',
            'captcha' => '14',
        ]);
        $replayResponse->assertSessionHas('error');
    }

    public function test_async_contact_form_submission_returns_json_confirmation(): void
    {
        $this->withSession([
            'contact_captcha' => [
                'answer' => '15',
                'expires_at' => now()->addMinutes(15)->timestamp,
            ],
        ]);

        $response = $this->postJson('/contact', [
            'first_name' => 'Alice',
            'last_name' => 'Engineer',
            'email' => 'alice@example.com',
            'phone' => '+91 98765 43212',
            'message' => 'Async inquiry test',
            'captcha' => '15',
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
        $this->withSession([
            'contact_captcha' => [
                'answer' => '15',
                'expires_at' => now()->addMinutes(15)->timestamp,
            ],
        ]);

        $response = $this->postJson('/contact', [
            'first_name' => 'Bob',
            'last_name' => 'Builder',
            'email' => 'bob@example.com',
            'phone' => '+91 98765 43213',
            'message' => 'Async wrong captcha test',
            'captcha' => '1',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'success' => false,
        ]);
        $this->assertStringContainsString('Next steps', $response->json('message'));
        $this->assertArrayHasKey('new_question', $response->json());
    }
}
