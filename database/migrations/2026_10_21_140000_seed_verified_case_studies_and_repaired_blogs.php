<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Seed or Update Verified Real Projects
        // Project 1: SEO Rocket Pro
        $seoProject = DB::table('projects')->where('id', 2)->first();
        $seoProjectData = [
            'title' => 'SEO Audit, Lead Generation, and Agency Workflow Software',
            'client_name' => 'Backend Coders India (Proprietary SaaS)',
            'category' => 'Agency Workflow & SEO Automation',
            'status' => 'Live Deployed Platform',
            'technologies' => 'Laravel, MySQL, Alpine.js, TailwindCSS, REST APIs',
            'description' => 'A centralized SEO audit and prospect qualification SaaS platform built for digital marketing agencies, SEO professionals, consultants, and growth teams.',
            'image' => 'assets/images/seo-pro.jpg',
            'meta_title' => 'SEO Rocket Pro | Agency Workflow & SEO Audit Software | Backend Coders India',
            'meta_description' => 'Explore how Backend Coders India built SEO Rocket Pro, an all-in-one platform combining automated website audits, prospect qualification, and CRM outreach workflows.',
            'is_featured' => true,
            'completed_at' => '2026-03-15',
            'updated_at' => now(),
        ];
        if ($seoProject) {
            DB::table('projects')->where('id', 2)->update($seoProjectData);
        } else {
            DB::table('projects')->insert(array_merge(['id' => 2, 'created_at' => now()], $seoProjectData));
        }

        // Project 2: Marley Moves
        $marleyExists = DB::table('projects')->where('title', 'like', '%Marley Moves%')->exists();
        if (!$marleyExists) {
            DB::table('projects')->insert([
                'title' => 'Marley Moves Logistics & Transport Platform',
                'client_name' => 'Marley Moves',
                'category' => 'Logistics & Fleet Transport',
                'status' => 'Delivered',
                'technologies' => 'Laravel, MySQL, Alpine.js, TailwindCSS, Google Maps API',
                'live_url' => null,
                'description' => 'A custom logistics quotation and fleet dispatch management platform engineered for Marley Moves. The system features an interactive relocation estimate calculator, vehicle allocation workflows, dynamic booking calendars, and automated customer dispatch notifications.',
                'image' => 'assets/images/marley.jpeg',
                'meta_title' => 'Marley Moves Case Study | Logistics & Transport Platform | Backend Coders India',
                'meta_description' => 'Explore how Backend Coders India built a custom logistics booking platform and fleet quotation workflow for Marley Moves with Laravel and Alpine.js.',
                'meta_keywords' => 'logistics software development, transport platform, custom web application, Laravel fleet management',
                'faqs' => json_encode([
                    [
                        'question' => 'What core business challenges did Marley Moves face?',
                        'answer' => 'Manual phone and email quotation processes resulted in delayed response times, inaccurate move cost estimates, and disjointed vehicle dispatch tracking across client relocation jobs.',
                    ],
                    [
                        'question' => 'What technologies were used to deliver the platform?',
                        'answer' => 'Backend Coders India implemented the system using Laravel, MySQL, Alpine.js, TailwindCSS, and route distance calculation APIs.',
                    ],
                    [
                        'question' => 'What were the verified outcomes of the project?',
                        'answer' => 'The delivered platform centralized customer quote intake, eliminated manual dispatch spreadsheets, and provided an automated quotation pipeline for relocation bookings.',
                    ],
                ]),
                'is_featured' => true,
                'completed_at' => '2025-11-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Project 3: Pulse Events
        $pulseExists = DB::table('projects')->where('title', 'like', '%Pulse Events%')->exists();
        if (!$pulseExists) {
            DB::table('projects')->insert([
                'title' => 'Pulse Events Management & Ticketing Portal',
                'client_name' => 'Pulse Events',
                'category' => 'Event Management & Ticketing',
                'status' => 'Delivered',
                'technologies' => 'Laravel, MySQL, Alpine.js, TailwindCSS, Stripe Payments',
                'live_url' => null,
                'description' => 'A scalable event registration and multi-tiered ticketing platform developed for Pulse Events. The portal manages attendee registration, tiered ticket pricing, session agendas, digital pass generation, and real-time inventory tracking.',
                'image' => 'assets/images/pulse-event.jpeg',
                'meta_title' => 'Pulse Events Case Study | Event Ticketing Platform | Backend Coders India',
                'meta_description' => 'Discover how Backend Coders India built an online ticketing and attendee registration portal for Pulse Events using Laravel, TailwindCSS, and Stripe.',
                'meta_keywords' => 'event ticketing software, event registration portal, custom web development, Laravel event system',
                'faqs' => json_encode([
                    [
                        'question' => 'What business problem did the Pulse Events portal solve?',
                        'answer' => 'Event organizers required a unified digital channel for ticket sales, attendee check-in pass delivery, and live seat inventory visibility across multi-track events.',
                    ],
                    [
                        'question' => 'How was secure ticket booking handled?',
                        'answer' => 'The portal integrated Stripe payments with automated webhook processing to guarantee immediate digital pass generation upon verified checkout.',
                    ],
                    [
                        'question' => 'What technical outcomes were delivered?',
                        'answer' => 'The solution provided automated booking confirmations, eliminated duplicate registrations, and offered a responsive organizer dashboard for check-in monitoring.',
                    ],
                ]),
                'is_featured' => true,
                'completed_at' => '2026-01-28',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 2. Update Blog 3 (How SEO Services in Kanpur Help Businesses Grow Online)
        $seoBlogContent = <<<'HTML'
<p>In today's digital world, having a website is only the first step. Customers search online every day to find local services, compare products, and read reviews before making a call or visiting a shop.</p>

<p>According to <a href="https://gs.statcounter.com/search-engine-market-share/all/india" target="_blank" rel="noopener noreferrer">Statcounter GlobalStats</a>, Google handles over 95% of all searches in India. Search engine optimization (SEO) helps your website show up in organic search results so more local customers find your business.</p>

<h2>Why Search Visibility Helps Kanpur Businesses</h2>
<p>Kanpur has many active businesses in manufacturing, education, healthcare, trade, and professional services. As more buyers search online, local firms need a reliable way to stand out.</p>

<p>Good SEO helps your business:</p>
<ul>
<li>Reach people who are actively looking for the services you offer.</li>
<li>Get calls and emails from serious buyers ready to hire.</li>
<li>Make your website faster, cleaner, and easier to use on phones.</li>
<li>Build real trust with buyers without paying for every ad click.</li>
</ul>

<h2>Five Core Parts of Effective SEO</h2>

<h3>1. Practical Keyword Research</h3>
<p>Keyword research shows the exact terms buyers type into Google. Choose clear phrases that match your real services and city, such as web design or software in Kanpur. Use these words naturally in your headings and text. Avoid repeating the same words over and over, which makes text hard to read.</p>

<h3>2. Fast and Clean Website Code</h3>
<p>Your website must load quickly and work smoothly on all devices. As Google explains in its <a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide" target="_blank" rel="noopener noreferrer">Search Central SEO Starter Guide</a>, clean page titles, short URLs, and mobile-ready layouts help search bots understand and rank your content.</p>

<h3>3. Helpful Content for Real People</h3>
<p>Search engines reward pages that answer user questions clearly. Write simple guides, show verified project examples, and explain what your business does without complicated jargon.</p>

<h3>4. Local Map and Business Profiles</h3>
<p>For companies serving a local area, map presence is vital. Set up and verify your Google Business Profile. Keep your business name, street address, and phone number consistent across the web. Ask happy clients for genuine reviews to build credibility.</p>

<h3>5. Genuine Links and Mentions</h3>
<p>Links from reputable websites tell search engines that your company is trustworthy. Earn mentions through real business partnerships, local directories, and useful community content. Stay away from fake link packages that can hurt your site.</p>

<h2>What to Expect from Search Optimization</h2>
<p>SEO takes patience and steady work. Most websites begin seeing solid traffic gains after three to six months of regular updates. Avoid agencies that promise instant top rankings, since Google updates its ranking rules frequently.</p>

<h2>Official Search Resources</h2>
<ul>
<li><a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide" target="_blank" rel="noopener noreferrer">Google Search Central: SEO Starter Guide</a></li>
<li><a href="https://developers.google.com/search/docs/fundamentals/creating-helpful-content" target="_blank" rel="noopener noreferrer">Google Search Central: Creating Helpful Content</a></li>
<li><a href="https://gs.statcounter.com/search-engine-market-share/all/india" target="_blank" rel="noopener noreferrer">Statcounter GlobalStats: Search Engine Share in India</a></li>
</ul>
HTML;

        $seoBlog = DB::table('blogs')->where('id', 3)->orWhere('slug', 'how-seo-services-in-kanpur-help-businesses-grow-online')->first();
        if ($seoBlog) {
            DB::table('blogs')->where('id', $seoBlog->id)->update([
                'title' => 'How to Choose an SEO Company in Kanpur: Practical Evaluation Guide',
                'slug' => 'how-seo-services-in-kanpur-help-businesses-grow-online',
                'content' => $seoBlogContent,
                'excerpt' => 'Evaluating SEO agencies in Kanpur? Use this practical evaluation guide covering technical audits, white-hat link acquisition, reporting metrics, and local map rankings.',
                'meta_title' => 'How to Choose an SEO Company in Kanpur | Evaluation Guide',
                'meta_description' => 'A practical evaluation guide for hiring an SEO company in Kanpur. Compare deliverables, reporting metrics, organic link acquisition, and white-hat practices.',
                'image' => 'assets/images/seo.png',
                'is_published' => true,
                'updated_at' => now(),
            ]);
        } else {
            DB::table('blogs')->insert([
                'id' => 3,
                'title' => 'How to Choose an SEO Company in Kanpur: Practical Evaluation Guide',
                'slug' => 'how-seo-services-in-kanpur-help-businesses-grow-online',
                'content' => $seoBlogContent,
                'excerpt' => 'Evaluating SEO agencies in Kanpur? Use this practical evaluation guide covering technical audits, white-hat link acquisition, reporting metrics, and local map rankings.',
                'meta_title' => 'How to Choose an SEO Company in Kanpur | Evaluation Guide',
                'meta_description' => 'A practical evaluation guide for hiring an SEO company in Kanpur. Compare deliverables, reporting metrics, organic link acquisition, and white-hat practices.',
                'image' => 'assets/images/seo.png',
                'is_published' => true,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 3. Seed / Update Custom Web Application Blog Post
        $customBlogSlug = 'custom-web-application-development-company-in-india-build-smarter-software-for-business-growth';
        $customBlogContent = <<<'HTML'
<p>A custom web application helps your team handle everyday work in one place. It also gives your customers a simple, reliable way to use your services. Successful software begins by understanding the business problem you need to solve.</p>

<h2>Plan Around Real Daily Tasks</h2>
<p>Start by listing the steps your staff and customers take today. Talk directly with the people who do this work. Look for delays, repeated data entry, and manual steps that cause mistakes.</p>
<p>Choose one primary goal for your first version. For example, your app might help dispatchers track deliveries or let clients book appointments online. A single clear goal keeps your budget focused and makes development faster.</p>

<h2>Choose Core Features for Launch</h2>
<p>List who will use the application and what each person needs to accomplish. A team member may need to update customer records. A customer may only need to check their order status. Give each user group access only to the screens they need.</p>
<p>Keep your initial release focused on essential features. Build the primary workflows, core data tables, and automatic email or text notifications first. Save secondary ideas for future updates after you gather user feedback.</p>

<h2>Design for Mobile and Desktop Users</h2>
<p>According to <a href="https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/india" target="_blank" rel="noopener noreferrer">Statcounter GlobalStats (2025–2026 dataset)</a>, mobile devices account for over 70% of web traffic in India. Because of this, business web applications must offer responsive, touch-friendly layouts for staff in the field as well as users on desktop computers.</p>
<p>Use clear buttons, legible typography, and straightforward forms. Test the interface with people who will use it daily. Real feedback shows where users hesitate or make errors before you deploy to production.</p>

<h2>Connect With Existing Business Tools</h2>
<p>Most business web applications need to share information with systems you already use. Common integrations include payment gateways, accounting software, CRM systems, and inventory databases.</p>
<p>Document these tools early in the project. Check whether they offer secure REST APIs or webhooks, and define which application owns each piece of data to prevent record conflicts.</p>

<h2>Avoid Common Software Project Pitfalls</h2>
<p>Industry research shows that custom software projects often fail to deliver expected business value. This rarely happens because of coding defects. Instead, projects struggle when teams attempt to build too many complex features at once without user validation.</p>
<p>You can protect your investment by starting with a small pilot group of users. Address early feedback promptly, maintain regular database backups, and agree on who handles software maintenance after launch.</p>

<h2>Helpful Technical Resources</h2>
<p>Explore these official resources on web standards, search discovery, and accessibility:</p>
<ul>
<li><a href="https://developers.google.com/search/docs/fundamentals/get-started-developers" target="_blank" rel="noopener noreferrer">Google Search Central Developer Guidance</a></li>
<li><a href="https://www.w3.org/WAI/standards-guidelines/wcag/" target="_blank" rel="noopener noreferrer">W3C Web Content Accessibility Guidelines (WCAG)</a></li>
<li><a href="https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/india" target="_blank" rel="noopener noreferrer">Statcounter GlobalStats: Platform Market Share India</a></li>
</ul>
HTML;

        $customBlog = DB::table('blogs')->where('slug', $customBlogSlug)->first();
        if ($customBlog) {
            DB::table('blogs')->where('id', $customBlog->id)->update([
                'title' => 'Custom Web Application Development in India: A Practical Planning Guide',
                'content' => $customBlogContent,
                'excerpt' => 'Plan a custom web application around real workflows, clear user needs, mobile-first design, and long-term maintenance.',
                'meta_title' => 'Custom Web Application Development in India: Planning Guide | Backend Coders India',
                'meta_description' => 'Learn how to plan and build custom web applications in India. A practical guide covering user workflows, mobile responsiveness, APIs, and project scope.',
                'is_published' => true,
                'updated_at' => now(),
            ]);
        } else {
            DB::table('blogs')->insert([
                'title' => 'Custom Web Application Development in India: A Practical Planning Guide',
                'slug' => $customBlogSlug,
                'content' => $customBlogContent,
                'excerpt' => 'Plan a custom web application around real workflows, clear user needs, mobile-first design, and long-term maintenance.',
                'meta_title' => 'Custom Web Application Development in India: Planning Guide | Backend Coders India',
                'meta_description' => 'Learn how to plan and build custom web applications in India. A practical guide covering user workflows, mobile responsiveness, APIs, and project scope.',
                'image' => 'assets/images/custom.png',
                'is_published' => true,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 4. Seed / Update Website Development Cost Blog Post
        $costBlogSlug = 'how-much-does-website-development-cost-for-startups-in-india-2026-guide';
        $costBlogContent = <<<'HTML'
<p>Planning a new website budget is one of the first major decisions for any startup or growing company in India. Understanding what drives development costs helps you avoid surprise fees and invest where it matters most.</p>

<h2>Key Factors That Influence Website Cost</h2>
<p>Website costs vary depending on scope, architecture, and long-term requirements. The main cost drivers include:</p>
<ul>
<li><strong>Design Scope:</strong> Clean custom designs built for your exact brand versus pre-made theme configurations.</li>
<li><strong>Custom Functionality:</strong> Dynamic customer dashboards, booking calculators, user accounts, and payment flows.</li>
<li><strong>Third-Party Integrations:</strong> Connecting CRMs, payment gateways (Razorpay, Stripe), SMS notifications, and internal databases.</li>
<li><strong>Ongoing Infrastructure:</strong> Cloud hosting, SSL certificates, automated database backups, and scheduled software updates.</li>
</ul>

<h2>Avoid Unrealistic Estimates and Hidden Expenses</h2>
<p>Many businesses get caught off guard by rock-bottom quotes that omit critical deliverables. Always verify what is included in your proposal before signing:</p>
<ul>
<li>Full source code ownership and access to version control repositories.</li>
<li>Mobile responsiveness verified across iOS and Android browsers.</li>
<li>Basic on-page SEO setup (clean URLs, heading hierarchy, and meta tags).</li>
<li>Post-launch warranty and bug-fix support.</li>
</ul>

<h2>Official Cloud and Developer Pricing Tools</h2>
<p>When budgeting for hosting and cloud infrastructure, consult official provider calculators directly:</p>
<ul>
<li><a href="https://docs.aws.amazon.com/pricing-calculator/latest/userguide/getting-started.html" target="_blank" rel="noopener noreferrer">AWS Pricing Calculator Documentation</a></li>
<li><a href="https://docs.digitalocean.com/products/droplets/details/pricing/" target="_blank" rel="noopener noreferrer">DigitalOcean Droplet Pricing Guide</a></li>
<li><a href="https://cloud.google.com/products/calculator" target="_blank" rel="noopener noreferrer">Google Cloud Architecture Pricing Calculator</a></li>
<li><a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide" target="_blank" rel="noopener noreferrer">Google Search Central SEO Starter Guide</a></li>
</ul>
HTML;

        $costBlog = DB::table('blogs')->where('slug', $costBlogSlug)->first();
        if ($costBlog) {
            DB::table('blogs')->where('id', $costBlog->id)->update([
                'title' => 'How Much Does Website Development Cost for Startups in India? 2026 Guide',
                'content' => $costBlogContent,
                'excerpt' => 'A transparent guide to website development costs in India. Compare project scopes, understand key price drivers, and plan for hosting and maintenance.',
                'meta_title' => 'Website Development Cost for Startups in India: 2026 Guide | Backend Coders India',
                'meta_description' => 'What does a business website cost in India? Compare custom web development scopes, understand hosting and integration costs, and avoid hidden fees.',
                'is_published' => true,
                'updated_at' => now(),
            ]);
        } else {
            DB::table('blogs')->insert([
                'title' => 'How Much Does Website Development Cost for Startups in India? 2026 Guide',
                'slug' => $costBlogSlug,
                'content' => $costBlogContent,
                'excerpt' => 'A transparent guide to website development costs in India. Compare project scopes, understand key price drivers, and plan for hosting and maintenance.',
                'meta_title' => 'Website Development Cost for Startups in India: 2026 Guide | Backend Coders India',
                'meta_description' => 'What does a business website cost in India? Compare custom web development scopes, understand hosting and integration costs, and avoid hidden fees.',
                'image' => 'assets/images/best.png',
                'is_published' => true,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        // Safe down migration: retain content integrity
    }
};
