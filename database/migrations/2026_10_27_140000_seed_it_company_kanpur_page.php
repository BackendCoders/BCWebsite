<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Page;
use App\Models\MenuItem;
use App\Models\Section;
use App\Models\SectionItem;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $targetSlug = 'it-company-in-kanpur-web-software-digital-services-backend-coders-india';

        $page = Page::firstOrCreate(
            ['slug' => $targetSlug],
            [
                'title' => 'IT Company in Kanpur for Web, Software & Digital Business Solutions',
                'meta_title' => 'IT Company in Kanpur | Web, Software & Digital Services – Backend Coders India',
                'meta_description' => 'Looking for an IT company in Kanpur? Backend Coders India provides website development, custom software, SEO and digital marketing services for businesses.',
                'canonical_url' => 'https://backendcodersindia.com/page/' . $targetSlug,
                'meta_keywords' => 'IT company in Kanpur, best IT company in Kanpur, IT services Kanpur, IT solutions in Kanpur, software development company in Kanpur, website development company in Kanpur, digital marketing services in Kanpur',
                'is_index' => true,
            ]
        );

        if (Schema::hasTable('menu_items') && $page) {
            MenuItem::firstOrCreate(
                ['page_id' => $page->id],
                [
                    'title' => 'IT Company in Kanpur',
                    'type' => MenuItem::TYPE_SOFTWARE,
                    'order' => (MenuItem::max('order') ?? 0) + 1,
                    'is_active' => 1,
                ]
            );
        }

        // Populate sections if not already present for this page
        if ($page && $page->sections()->count() === 0) {
            // Section 1: Hero
            $heroSection = Section::create([
                'page_id' => $page->id,
                'type' => 'hero',
                'title' => 'IT Company in Kanpur for Web, Software & Digital Business Solutions',
                'order' => 1,
            ]);

            SectionItem::create([
                'page_id' => $page->id,
                'section_id' => $heroSection->id,
                'type' => 'hero_item',
                'title' => 'IT Company in Kanpur for Web, Software & Digital Business Solutions',
                'description' => '<p>Looking for an IT company in Kanpur to build your website, streamline business operations, or improve your online presence? Backend Coders India helps businesses explore practical technology solutions based on their goals, workflows, and growth plans.</p><p class="mt-4">From website development and custom software to search engine optimisation and digital marketing, our services help businesses establish a stronger digital foundation and manage their online operations more effectively.</p><p class="mt-4">Whether you are launching a new business, upgrading an existing website, or looking to automate repetitive tasks, we can discuss your requirements and identify a suitable approach.</p>',
                'image' => 'assets/images/banner_bci.png',
                'extra' => [
                    'eyebrow' => 'IT Services for Growing Businesses',
                    'sub_text' => 'Website & web app development • Custom software • SEO & digital marketing • Solutions tailored to project requirements',
                    'button' => 'Discuss Your Project',
                    'button_url' => route('frontend.contact'),
                    'secondary_button' => 'Explore Our Services',
                    'secondary_button_url' => '#services',
                ],
                'order' => 1,
            ]);

            // Section 2: About Backend Coders India
            $aboutSection = Section::create([
                'page_id' => $page->id,
                'type' => 'about',
                'title' => 'About Backend Coders India',
                'order' => 2,
            ]);

            SectionItem::create([
                'page_id' => $page->id,
                'section_id' => $aboutSection->id,
                'type' => 'about_item',
                'title' => 'About Backend Coders India',
                'description' => '<p>Backend Coders India is a technology and digital services company serving businesses that need support with website development, software solutions, and online growth.</p><p class="mt-4">Our approach begins with understanding the client\'s requirements, existing systems, target customers, and business objectives. Based on those needs, we help identify the appropriate services and a practical implementation plan.</p><p class="mt-4">We aim to make technology decisions easier for business owners by explaining the scope of work, expected deliverables, and relevant next steps before a project begins.</p><div class="mt-6 rounded-2xl border border-slate-200 bg-slate-50 p-5 space-y-2 text-sm text-slate-700"><p><strong>Founder & Leadership:</strong> Ravindra Verma, Founder & CEO</p><p><strong>Office Location:</strong> 11/42, Krishna Nagar, Kanpur, UP 208007</p><p><strong>Business Contact:</strong> +91 91400 92133 | info@backendcodersindia.com</p></div>',
                'image' => 'assets/images/banner.png',
                'extra' => [
                    'button_text' => 'Learn More About Our Company',
                    'button_url' => '/about',
                ],
                'order' => 1,
            ]);

            // Section 3: IT Services in Kanpur
            $servicesSection = Section::create([
                'page_id' => $page->id,
                'type' => 'services',
                'title' => 'IT Services in Kanpur for Different Business Needs',
                'order' => 3,
            ]);

            $serviceItems = [
                [
                    'title' => 'Website Design and Development',
                    'description' => 'Build a professional website that explains your services, helps customers find important information, and supports enquiries across desktop and mobile devices. Suitable for businesses launching a new website or improving an existing digital presence.<div class="mt-4"><a href="/page/website-design-development" class="font-semibold text-[#FD5528] hover:underline">Website Design and Development Services in Kanpur &rarr;</a></div>',
                    'extra' => ['label' => 'Web Design', 'tags' => ['Websites', 'Responsive', 'Laravel']],
                ],
                [
                    'title' => 'Custom Software and Web Applications',
                    'description' => 'Explore custom software when standard tools do not fit your business processes. A project can begin with requirements analysis and a review of the workflows that need to be supported.<div class="mt-4"><a href="/software-company-kanpur" class="font-semibold text-[#FD5528] hover:underline">Custom Software Development &rarr;</a></div>',
                    'extra' => ['label' => 'Custom Software', 'tags' => ['Workflows', 'Automation', 'Web Apps']],
                ],
                [
                    'title' => 'Search Engine Optimisation (SEO)',
                    'description' => 'Improve the discoverability of your website through technical SEO, on-page improvements, relevant content, and search-focused website optimisation. SEO work should be aligned with your industry, target locations, competition, and business goals. Search rankings and lead volumes cannot be guaranteed.<div class="mt-4"><a href="/seo" class="font-semibold text-[#FD5528] hover:underline">SEO Services in Kanpur &rarr;</a></div>',
                    'extra' => ['label' => 'SEO Services', 'tags' => ['Technical SEO', 'On-Page', 'Local Search']],
                ],
                [
                    'title' => 'Digital Marketing',
                    'description' => 'Plan digital marketing activities around your audience, services, and business objectives. The right combination may include organic search, paid advertising, and other relevant channels.<div class="mt-4"><a href="/digital-marketing-agency-kanpur" class="font-semibold text-[#FD5528] hover:underline">Digital Marketing Agency in Kanpur &rarr;</a></div>',
                    'extra' => ['label' => 'Marketing', 'tags' => ['Organic Search', 'Paid Ads', 'Channels']],
                ],
                [
                    'title' => 'Mobile App Development',
                    'description' => 'Discuss your app idea, target users, essential features, and technical requirements before deciding on a suitable development approach.<div class="mt-4"><a href="/page/mobile-app-development" class="font-semibold text-[#FD5528] hover:underline">Mobile App Development Services &rarr;</a></div>',
                    'extra' => ['label' => 'Mobile Apps', 'tags' => ['Android', 'iOS', 'Flutter']],
                ],
                [
                    'title' => 'ERP, POS and Business Software',
                    'description' => 'Explore software solutions for suitable business workflows such as billing, point-of-sale operations, inventory management, and other operational requirements. Specific modules and integrations should be confirmed during project discovery.<div class="mt-4"><a href="/page/erp-pos-software" class="font-semibold text-[#FD5528] hover:underline">ERP and POS Software Solutions &rarr;</a></div>',
                    'extra' => ['label' => 'Enterprise', 'tags' => ['GST Billing', 'Inventory', 'POS']],
                ],
            ];

            foreach ($serviceItems as $idx => $sItem) {
                SectionItem::create([
                    'page_id' => $page->id,
                    'section_id' => $servicesSection->id,
                    'type' => 'service_item',
                    'title' => $sItem['title'],
                    'description' => $sItem['description'],
                    'extra' => $sItem['extra'],
                    'order' => $idx + 1,
                ]);
            }

            // Section 4: Who We Work With
            $whoSection = Section::create([
                'page_id' => $page->id,
                'type' => 'cards',
                'title' => 'Technology Solutions for Different Business Requirements',
                'order' => 4,
            ]);

            $whoItems = [
                ['title' => 'Retail and Trading Businesses', 'desc' => 'Websites, product catalogues, and relevant billing or POS requirements.', 'label' => 'Retail'],
                ['title' => 'Manufacturing and Distribution', 'desc' => 'Workflow analysis, business software, and suitable inventory-related requirements.', 'label' => 'Industrial'],
                ['title' => 'Professional Service Providers', 'desc' => 'Service websites, enquiry forms, and online visibility.', 'label' => 'Services'],
                ['title' => 'Education and Coaching Businesses', 'desc' => 'Informational websites, enquiry management, and relevant digital marketing.', 'label' => 'Education'],
                ['title' => 'Growing Small & Mid-Sized Businesses', 'desc' => 'Website improvements, custom applications, and digital growth planning.', 'label' => 'SMBs'],
                ['title' => 'Established Businesses', 'desc' => 'Enhancements to existing websites, applications, or business processes.', 'label' => 'Enterprise'],
            ];

            foreach ($whoItems as $idx => $wItem) {
                SectionItem::create([
                    'page_id' => $page->id,
                    'section_id' => $whoSection->id,
                    'type' => 'card_item',
                    'title' => $wItem['title'],
                    'description' => $wItem['desc'],
                    'extra' => ['label' => $wItem['label']],
                    'order' => $idx + 1,
                ]);
            }

            // Section 5: Why Consider Backend Coders India?
            $whySection = Section::create([
                'page_id' => $page->id,
                'type' => 'features',
                'title' => 'Choosing an IT Company in Kanpur for Your Business',
                'order' => 5,
            ]);

            $whyItems = [
                ['title' => 'Requirement-Focused Planning', 'desc' => 'Explain your business problem before choosing a technology.', 'label' => 'Planning'],
                ['title' => 'Clear Project Scope', 'desc' => 'Understand what is included, what is excluded, and which deliverables are expected.', 'label' => 'Clarity'],
                ['title' => 'Relevant Service Options', 'desc' => 'Explore website development, software, SEO, or digital marketing according to your actual needs.', 'label' => 'Solutions'],
                ['title' => 'Transparent Discussions', 'desc' => 'Ask about pricing, timelines, responsibilities, and dependencies before work begins.', 'label' => 'Trust'],
                ['title' => 'Evidence-Based Evaluation', 'desc' => 'Review genuine portfolio projects, references, and case studies relevant to your requirements.', 'label' => 'Evidence'],
            ];

            foreach ($whyItems as $idx => $yItem) {
                SectionItem::create([
                    'page_id' => $page->id,
                    'section_id' => $whySection->id,
                    'type' => 'feature_item',
                    'title' => $yItem['title'],
                    'description' => $yItem['desc'],
                    'extra' => ['label' => $yItem['label']],
                    'order' => $idx + 1,
                ]);
            }

            // Section 6: Our Project Process
            $processSection = Section::create([
                'page_id' => $page->id,
                'type' => 'process',
                'title' => 'How We Approach a New Project',
                'order' => 6,
            ]);

            $processSteps = [
                ['title' => 'Step 1 — Understand Your Requirements', 'desc' => 'We discuss your business, intended users, current challenges, desired features, and project objectives.'],
                ['title' => 'Step 2 — Define the Scope', 'desc' => 'We identify the proposed deliverables, key functionality, dependencies, and information needed before implementation.'],
                ['title' => 'Step 3 — Plan the Solution', 'desc' => 'The technology, design approach, and implementation plan are selected according to the approved requirements.'],
                ['title' => 'Step 4 — Develop and Review', 'desc' => 'Work progresses against the agreed scope, with review points to check functionality and alignment with the requirements.'],
                ['title' => 'Step 5 — Test and Handover', 'desc' => 'The completed work is reviewed and tested according to the project scope before handover. Any ongoing maintenance or support arrangements should be agreed separately.'],
            ];

            foreach ($processSteps as $idx => $step) {
                SectionItem::create([
                    'page_id' => $page->id,
                    'section_id' => $processSection->id,
                    'type' => 'process_item',
                    'title' => $step['title'],
                    'description' => $step['desc'],
                    'order' => $idx + 1,
                ]);
            }

            // Section 7: Portfolio, Clients and Case Studies
            $portfolioSection = Section::create([
                'page_id' => $page->id,
                'type' => 'cards',
                'title' => 'Explore Our Work',
                'order' => 7,
            ]);

            $caseStudies = [
                [
                    'title' => 'Marley Moves Logistics & Transport Platform',
                    'desc' => '<strong>Client:</strong> Marley Moves<br><strong>Requirement:</strong> Digital transport booking, dispatch workflow, and fleet operations.<br><strong>Solution:</strong> Custom responsive web platform with order tracking, driver dispatch, and automated GST invoice billing.<br><strong>Technology:</strong> Laravel, PHP, REST APIs, MySQL.<div class="mt-4"><a href="/project" class="font-semibold text-[#FD5528] hover:underline">View Portfolio &rarr;</a></div>',
                    'label' => 'Logistics Platform',
                ],
                [
                    'title' => 'Pulse Events Management & Ticketing Portal',
                    'desc' => '<strong>Client:</strong> Pulse Events<br><strong>Requirement:</strong> High-volume event registration, online ticket sales, and QR attendance.<br><strong>Solution:</strong> High-concurrency ticketing portal with Razorpay payment gateway and real-time QR scanner validation.<br><strong>Technology:</strong> Laravel, JavaScript, Tailwind CSS, Razorpay.<div class="mt-4"><a href="/project" class="font-semibold text-[#FD5528] hover:underline">View Portfolio &rarr;</a></div>',
                    'label' => 'Ticketing Portal',
                ],
                [
                    'title' => 'SEO Audit, Rank Tracker & Agency SaaS',
                    'desc' => '<strong>Client:</strong> Backend Coders India (Proprietary SaaS)<br><strong>Requirement:</strong> Automated SEO audit tool, keyword rank tracking, and client lead generation.<br><strong>Solution:</strong> Multi-tenant SaaS with website crawl engine, on-page scorecards, and automated client audit reports.<br><strong>Technology:</strong> Laravel, Vue.js, Tailwind CSS, MySQL.<div class="mt-4"><a href="/project" class="font-semibold text-[#FD5528] hover:underline">View Portfolio &rarr;</a></div>',
                    'label' => 'SaaS Platform',
                ],
            ];

            foreach ($caseStudies as $idx => $cs) {
                SectionItem::create([
                    'page_id' => $page->id,
                    'section_id' => $portfolioSection->id,
                    'type' => 'case_study_item',
                    'title' => $cs['title'],
                    'description' => $cs['desc'],
                    'extra' => ['label' => $cs['label']],
                    'order' => $idx + 1,
                ]);
            }

            // Section 8: Leadership and Team
            $teamSection = Section::create([
                'page_id' => $page->id,
                'type' => 'about',
                'title' => 'Meet the People Behind Backend Coders India',
                'order' => 8,
            ]);

            SectionItem::create([
                'page_id' => $page->id,
                'section_id' => $teamSection->id,
                'type' => 'team_item',
                'title' => 'Leadership & Technical Team',
                'description' => '<p>People and expertise are important when choosing a technology partner. Learn more about the leadership and team responsible for the company\'s work.</p><div class="mt-4 p-4 rounded-xl border border-slate-200 bg-slate-50"><p class="font-bold text-slate-900">Ravindra Verma</p><p class="text-xs font-semibold text-[#FD5528] uppercase tracking-wider">Founder & CEO</p><p class="mt-2 text-sm text-slate-600">Leading Backend Coders India with a vision for dependable software engineering, transparent project planning, and practical digital growth solutions for Kanpur and regional businesses.</p></div>',
                'image' => 'assets/images/ceo.png',
                'extra' => [
                    'button_text' => 'Meet Our Team',
                    'button_url' => '/owner',
                ],
                'order' => 1,
            ]);

            // Section 9: Office and Business Identity
            $officeSection = Section::create([
                'page_id' => $page->id,
                'type' => 'cards',
                'title' => 'Connect With Backend Coders India in Kanpur',
                'order' => 9,
            ]);

            $officeDetails = [
                [
                    'title' => 'Office Address',
                    'desc' => '<p class="text-slate-700">11/42, Krishna Nagar, Kanpur, UP 208007</p><div class="mt-3"><a href="/contact" class="font-semibold text-[#FD5528] hover:underline">View Location Details &rarr;</a></div>',
                    'label' => 'Kanpur Office',
                ],
                [
                    'title' => 'Business Phone',
                    'desc' => '<p><a href="tel:+919140092133" class="text-slate-900 font-semibold hover:text-[#FD5528]">+91 914 0092 133</a></p><p class="mt-2 text-xs text-slate-500">Call to discuss website or software requirements.</p>',
                    'label' => 'Telephone',
                ],
                [
                    'title' => 'Business Email',
                    'desc' => '<p><a href="mailto:info@backendcodersindia.com" class="text-slate-900 font-semibold hover:text-[#FD5528]">info@backendcodersindia.com</a></p><p class="mt-2 text-xs text-slate-500">Send requirements and RFP inquiries.</p>',
                    'label' => 'Email',
                ],
            ];

            foreach ($officeDetails as $idx => $od) {
                SectionItem::create([
                    'page_id' => $page->id,
                    'section_id' => $officeSection->id,
                    'type' => 'office_item',
                    'title' => $od['title'],
                    'description' => $od['desc'],
                    'extra' => ['label' => $od['label']],
                    'order' => $idx + 1,
                ]);
            }

            // Section 10: Company Credentials and Recognition
            $credentialsSection = Section::create([
                'page_id' => $page->id,
                'type' => 'content',
                'title' => 'Our Company Credentials',
                'order' => 10,
            ]);

            SectionItem::create([
                'page_id' => $page->id,
                'section_id' => $credentialsSection->id,
                'type' => 'credentials_item',
                'title' => 'Our Company Credentials',
                'description' => '<p>When evaluating an IT services provider, buyers may want to understand the company\'s legal identity, professional background, and relevant recognition.</p><p class="mt-4">Backend Coders India operates as a professional technology and digital solutions provider based in Kanpur, Uttar Pradesh. We maintain an evidence-based approach to every client engagement, with verified portfolio deliverables, transparent scope definitions, and full source code handover upon completion.</p><p class="mt-4">All projects are delivered with clear milestone schedules, direct repository access, and dedicated local technical support.</p>',
                'order' => 1,
            ]);

            // Section 11: Working at BCI
            $careerSection = Section::create([
                'page_id' => $page->id,
                'type' => 'about',
                'title' => 'Working at BCI',
                'order' => 11,
            ]);

            SectionItem::create([
                'page_id' => $page->id,
                'section_id' => $careerSection->id,
                'type' => 'career_item',
                'title' => 'Working at BCI',
                'description' => '<p>Interested in working with Backend Coders India? Visit our careers page to explore available opportunities and learn how to apply.</p><p class="mt-4">Whether you are looking for a suitable development role or exploring future opportunities, use the careers page for current vacancy information and application details.</p>',
                'image' => 'assets/images/banner_bci.png',
                'extra' => [
                    'button_text' => 'Explore Careers',
                    'button_url' => '/career',
                ],
                'order' => 1,
            ]);

            // Section 12: Frequently Asked Questions
            $faqSection = Section::create([
                'page_id' => $page->id,
                'type' => 'faq',
                'title' => 'Frequently Asked Questions About IT Companies in Kanpur',
                'order' => 12,
            ]);

            $faqs = [
                [
                    'q' => 'What services does Backend Coders India offer?',
                    'a' => 'Backend Coders India offers website development, software-related services, SEO, and digital marketing options. The exact services suitable for a project depend on the business requirements and the currently available service scope.',
                ],
                [
                    'q' => 'How do I choose the right IT company in Kanpur?',
                    'a' => 'Review the company\'s relevant projects, technical capabilities, communication process, project scope, pricing, and references. Ask for a clear explanation of deliverables before making a decision.',
                ],
                [
                    'q' => 'Does Backend Coders India provide website development services in Kanpur?',
                    'a' => 'You can explore the company\'s website design and development service page to review the available services and discuss your website requirements.',
                ],
                [
                    'q' => 'Can I discuss a custom software project?',
                    'a' => 'Yes, you can contact the company to explain the workflow or business problem you want to address. The feasibility, scope, and suitable technical approach should be confirmed after reviewing your requirements.',
                ],
                [
                    'q' => 'Does Backend Coders India provide SEO and digital marketing?',
                    'a' => 'SEO and digital marketing services can be explored through the relevant service pages. The recommended approach depends on your website, target audience, business goals, and competition.',
                ],
                [
                    'q' => 'How much do IT services cost in Kanpur?',
                    'a' => 'Pricing depends on the type of service, project scope, features, integrations, and ongoing requirements. Review the available packages or request a discussion for a project-specific estimate. <a href="/packages" class="text-[#FD5528] font-semibold hover:underline">View Packages &rarr;</a>',
                ],
                [
                    'q' => 'How long does a website or software project take?',
                    'a' => 'The timeline depends on the requirements, complexity, content readiness, integrations, and review process. A realistic estimate should be provided after the scope has been discussed.',
                ],
                [
                    'q' => 'How can I apply for a job at Backend Coders India?',
                    'a' => 'Visit the careers page at <a href="/career" class="text-[#FD5528] font-semibold hover:underline">/career</a> to review available opportunities and follow the stated application process.',
                ],
            ];

            foreach ($faqs as $idx => $faq) {
                SectionItem::create([
                    'page_id' => $page->id,
                    'section_id' => $faqSection->id,
                    'type' => 'faq_item',
                    'title' => $faq['q'],
                    'description' => $faq['a'],
                    'order' => $idx + 1,
                ]);
            }

            // Section 13: Final Call to Action
            $ctaSection = Section::create([
                'page_id' => $page->id,
                'type' => 'cta',
                'title' => 'Looking for an IT Company in Kanpur for Your Next Project?',
                'order' => 13,
            ]);

            SectionItem::create([
                'page_id' => $page->id,
                'section_id' => $ctaSection->id,
                'type' => 'cta_item',
                'title' => 'Looking for an IT Company in Kanpur for Your Next Project?',
                'description' => 'Tell us what you want to build, improve, or automate. Share your business requirements, and start a conversation about the available website development, software, SEO, or digital marketing options.',
                'extra' => [
                    'button_text' => 'Discuss Your Project',
                    'button_url' => route('frontend.contact'),
                    'link_text' => 'Discuss Your Project',
                ],
                'order' => 1,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $targetSlug = 'it-company-in-kanpur-web-software-digital-services-backend-coders-india';
        $page = Page::where('slug', $targetSlug)->first();

        if ($page) {
            if (Schema::hasTable('menu_items')) {
                MenuItem::where('page_id', $page->id)->delete();
            }
            if (Schema::hasTable('section_items')) {
                SectionItem::where('page_id', $page->id)->delete();
            }
            if (Schema::hasTable('sections')) {
                Section::where('page_id', $page->id)->delete();
            }
            $page->delete();
        }
    }
};
