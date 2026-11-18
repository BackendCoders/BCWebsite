<?php

use App\Models\Project;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Ensure SEO Rocket Pro has clean, verified technical FAQs (replace any placeholder text)
        $seoProject = Project::where('title', 'like', '%SEO Audit, Lead Generation%')->first();
        if ($seoProject) {
            $seoProject->update([
                'status' => 'Live Deployed Platform',
                'live_url' => 'https://seorocketpro.com/',
                'faqs' => [
                    [
                        'question' => 'What core capabilities does the SEO Rocket Pro platform provide?',
                        'answer' => 'SEO Rocket Pro delivers automated website audit crawls, real-time keyword tracking, competitive intelligence analysis, and automated prospect qualification reports exported in under 3 minutes.',
                    ],
                    [
                        'question' => 'What architecture powers SEO Rocket Pro?',
                        'answer' => 'The platform is engineered using Laravel, MySQL, Alpine.js, TailwindCSS, and asynchronous background queue workers to evaluate technical SEO health signals without manual spreadsheet compilation.',
                    ],
                    [
                        'question' => 'Is SEO Rocket Pro an active production software platform?',
                        'answer' => 'Yes. SEO Rocket Pro is a proprietary SaaS product designed, developed, and deployed by Backend Coders India, live and accessible at https://seorocketpro.com/.',
                    ],
                ],
            ]);
            // 4. Ensure Kanpur SEO page has restored H1 and titles
        $seoPage = \App\Models\Page::where('slug', 'seo')->first();
        if ($seoPage) {
            $seoPage->update([
                'title' => 'SEO Company in Kanpur – <span class="text-[#FD5528]">Professional SEO Services</span> That Generate Leads',
                'meta_title' => 'SEO Company in Kanpur | Professional SEO Services That Generate Leads',
            ]);
        }
    }

        // 2. Ensure Marley Moves Logistics & Transport Platform exists
        Project::firstOrCreate(
            ['title' => 'Marley Moves Logistics & Transport Platform'],
            [
                'client_name' => 'Marley Moves',
                'category' => 'Logistics & Fleet Transport',
                'status' => 'Delivered',
                'technologies' => 'Laravel, MySQL, Alpine.js, TailwindCSS, Google Maps API',
                'live_url' => null,
                'description' => 'A custom logistics quotation and fleet dispatch management platform engineered for Marley Moves. The system features an interactive relocation estimate calculator, vehicle allocation workflows, dynamic booking calendars, and automated customer dispatch notifications.',
                'image' => 'assets/images/marley.jpeg',
                'is_featured' => true,
                'completed_at' => '2025-11-20',
                'meta_title' => 'Marley Moves Case Study | Logistics & Transport Platform | Backend Coders India',
                'meta_description' => 'Explore how Backend Coders India built a custom logistics booking platform and fleet quotation workflow for Marley Moves with Laravel and Alpine.js.',
                'meta_keywords' => 'logistics software development, transport platform, custom web application, Laravel fleet management',
                'faqs' => [
                    ['question' => 'What core business challenges did Marley Moves face?', 'answer' => 'Manual phone and email quotation processes resulted in delayed response times, inaccurate move cost estimates, and disjointed vehicle dispatch tracking across client relocation jobs.'],
                    ['question' => 'What technologies were used to deliver the platform?', 'answer' => 'Backend Coders India implemented the system using Laravel, MySQL, Alpine.js, TailwindCSS, and route distance calculation APIs.'],
                    ['question' => 'What were the verified outcomes of the project?', 'answer' => 'The delivered platform centralized customer quote intake, eliminated manual dispatch spreadsheets, and provided an automated quotation pipeline for relocation bookings.'],
                ],
            ]
        );

        // 3. Ensure Pulse Events Management & Ticketing Portal exists
        Project::firstOrCreate(
            ['title' => 'Pulse Events Management & Ticketing Portal'],
            [
                'client_name' => 'Pulse Events',
                'category' => 'Event Management & Ticketing',
                'status' => 'Delivered',
                'technologies' => 'Laravel, MySQL, Alpine.js, TailwindCSS, Stripe Payments',
                'live_url' => null,
                'description' => 'A scalable event registration and multi-tiered ticketing platform developed for Pulse Events. The portal manages attendee registration, tiered ticket pricing, session agendas, digital pass generation, and real-time inventory tracking.',
                'image' => 'assets/images/pulse-event.jpeg',
                'is_featured' => true,
                'completed_at' => '2026-01-28',
                'meta_title' => 'Pulse Events Case Study | Event Ticketing Platform | Backend Coders India',
                'meta_description' => 'Discover how Backend Coders India built an online ticketing and attendee registration portal for Pulse Events using Laravel, TailwindCSS, and Stripe.',
                'meta_keywords' => 'event ticketing software, event registration portal, custom web development, Laravel event system',
                'faqs' => [
                    ['question' => 'What business problem did the Pulse Events portal solve?', 'answer' => 'Event organizers required a unified digital channel for ticket sales, attendee check-in pass delivery, and live seat inventory visibility across multi-track events.'],
                    ['question' => 'How was secure ticket booking handled?', 'answer' => 'The portal integrated Stripe payments with automated webhook processing to guarantee immediate digital pass generation upon verified checkout.'],
                    ['question' => 'What technical outcomes were delivered?', 'answer' => 'The solution provided automated booking confirmations, eliminated duplicate registrations, and offered a responsive organizer dashboard for check-in monitoring.'],
                ],
            ]
        );
        // 4. Ensure Kanpur SEO page has restored H1 and titles
        $seoPage = \App\Models\Page::where('slug', 'seo')->first();
        if ($seoPage) {
            $seoPage->update([
                'title' => 'SEO Company in Kanpur – <span class="text-[#FD5528]">Professional SEO Services</span> That Generate Leads',
                'meta_title' => 'SEO Company in Kanpur | Professional SEO Services That Generate Leads',
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Safe to preserve
    }
};
