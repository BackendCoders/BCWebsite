@extends('component.main')
@section('content')
@php
    $technologies = $project->technologies_array;
    $completedAt = $project->completed_at;
    $liveUrl = $project->live_url;
    $faqItems = $project->faq_items;

    $breadcrumbSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Projects',
                'item' => route('frontend.project'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => $project->title,
                'item' => url()->current(),
            ],
        ],
    ];

    $faqSchema = null;
    if (!empty($faqItems)) {
        $faqSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(function ($item) {
                return [
                    '@type' => 'Question',
                    'name' => $item['question'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $item['answer'],
                    ],
                ];
            }, $faqItems),
        ];
    }
@endphp

<main class="overflow-hidden bg-slate-50 text-slate-900 antialiased selection:bg-[#FD5528]/20 selection:text-slate-900">
    <script type="application/ld+json">{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @if($faqSchema)
        <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endif

    {{-- HERO SECTION --}}
    <section class="relative isolate overflow-hidden bg-slate-950 text-white border-b border-slate-900">
        <div class="absolute inset-0 z-0 h-full w-full opacity-10 mix-blend-luminosity pointer-events-none filter saturate-100 scale-105">
            <img src="{{ $project->getImageUrl() }}" alt="{{ $project->title }}" class="h-full w-full object-cover object-center">
        </div>
        
        <div class="absolute inset-0 z-10 bg-[radial-gradient(circle_at_85%_15%,_rgba(253,85,40,0.2)_0%,_transparent_50%),linear-gradient(to_right,_rgba(2,6,23,1)_40%,_rgba(2,6,23,0.85)_70%,_rgba(2,6,23,0.6)_100%),linear-gradient(to_bottom,_transparent,_rgba(2,6,23,0.95))]"></div>

        <div class="relative z-20 mx-auto grid max-w-7xl items-center gap-12 px-6 py-16 lg:grid-cols-2 lg:px-8 lg:py-24">
            {{-- LEFT CONTENT --}}
            <div class="flex flex-col items-start">
                <nav aria-label="Breadcrumb" class="mb-4">
                    <ol class="flex items-center gap-2 text-xs font-semibold text-slate-400">
                        <li><a href="{{ route('frontend.index') }}" class="hover:text-white transition">Home</a></li>
                        <li aria-hidden="true">/</li>
                        <li><a href="{{ route('frontend.project') }}" class="hover:text-white transition">Projects</a></li>
                        <li aria-hidden="true">/</li>
                        <li class="text-orange-400 truncate max-w-xs" aria-current="page">{{ $project->title }}</li>
                    </ol>
                </nav>

                <span class="inline-flex items-center rounded-full border border-[#FD5528]/30 bg-[#FD5528]/10 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-[#FD5528]">
                    {{ $project->category ?? 'Case Study' }}
                </span>

                <h1 class="mt-4 max-w-3xl text-3xl font-black leading-tight text-white sm:text-4xl lg:text-5xl">
                    {{ $project->title }}
                </h1>

                <p class="mt-5 max-w-2xl text-base leading-relaxed text-slate-300 sm:text-lg">
                    {{ $project->description }}
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    @if($liveUrl)
                        <a href="{{ $liveUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-bold text-white shadow-xl shadow-[#FD5528]/30 transition hover:-translate-y-0.5 hover:bg-[#e94c20]">
                            Visit Live Project
                        </a>
                    @endif

                    <a href="{{ route('frontend.contact') }}" class="inline-flex items-center rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-bold text-white shadow-xl shadow-[#FD5528]/30 transition hover:-translate-y-0.5 hover:bg-[#e94c20]">
                        Discuss Your Requirements
                    </a>

                    <a href="{{ route('frontend.project') }}" class="inline-flex items-center rounded-xl border border-slate-700 bg-slate-900/40 px-6 py-3 text-sm font-bold text-white backdrop-blur-sm transition hover:border-[#FD5528]">
                        View All Projects
                    </a>
                </div>
            </div>

            {{-- RIGHT IMAGE --}}
            <div class="relative">
                <div class="absolute -inset-4 rounded-3xl bg-gradient-to-r from-[#FD5528]/20 via-orange-300/10 to-transparent blur-2xl"></div>
                <div class="relative overflow-hidden rounded-2xl border border-slate-800 bg-slate-900 p-2 shadow-2xl">
                    <img src="{{ $project->getImageUrl() }}" alt="{{ $project->title }}" class="w-full h-auto rounded-xl object-contain max-h-[500px]">
                </div>
            </div>
        </div>
    </section>

    {{-- METADATA BAR --}}
    <section class="bg-white py-6 border-b border-slate-200/80 shadow-sm relative z-30">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                <div class="rounded-xl border border-slate-200 bg-slate-50/70 p-4">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">Client</span>
                    <span class="text-sm sm:text-base font-bold text-slate-800 truncate block mt-1">{{ $project->client_name ?: 'Internal Product' }}</span>
                </div>
                <div class="rounded-xl border border-slate-200 bg-slate-50/70 p-4">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">Industry</span>
                    <span class="text-sm sm:text-base font-bold text-slate-800 truncate block mt-1">{{ $project->category ?? 'Software Solutions' }}</span>
                </div>
                <div class="rounded-xl border border-slate-200 bg-slate-50/70 p-4">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">Status</span>
                    <span class="text-sm sm:text-base font-bold text-[#FD5528] block mt-1">{{ $project->status ?? 'Delivered' }}</span>
                </div>
                <div class="rounded-xl border border-slate-200 bg-slate-50/70 p-4">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block">Technology Core</span>
                    <span class="text-sm sm:text-base font-bold text-slate-800 truncate block mt-1">Laravel &bull; MySQL &bull; APIs</span>
                </div>
            </div>
        </div>
    </section>

    {{-- DYNAMIC CASE STUDY BODY ACCORDING TO PROJECT --}}
    @if(str_contains($project->slug, 'marley-moves'))
        {{-- MARLEY MOVES CASE STUDY --}}
        <section class="bg-white py-16 border-b border-slate-200/60 shadow-sm relative z-30">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mb-12 text-center">
                    <span class="inline-flex rounded-full bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">
                        Delivered Platform Capabilities
                    </span>
                    <h2 class="mt-4 text-3xl lg:text-4xl font-bold text-slate-900">
                        Custom Logistics &amp; Fleet Management Engine
                    </h2>
                    <p class="mt-4 max-w-3xl mx-auto text-slate-600">
                        Engineered to eliminate manual booking bottlenecks, calculate distance-accurate quotes automatically, and coordinate fleet dispatch.
                    </p>
                </div>

                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Interactive Quote Calculator</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Customers select relocation inventory, pickup/drop locations, and receive dynamic estimate breakdowns instantly.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Route &amp; Mileage Matrix</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Integrates Google Maps API to calculate exact road distance and estimated transit duration between postal codes.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Vehicle Capacity Allocation</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Automatically suggests suitable van sizes based on customer cubic-volume selections to prevent under-allocation.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Centralized Dispatch Dashboard</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Operations staff view upcoming relocation jobs, assign available drivers, and update status in real time.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Automated Client Notifications</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Sends transactional email and SMS confirmations with scheduled booking windows and inventory summaries.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Mobile Responsive Flow</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Optimized for mobile customers requesting emergency or scheduled moves on phones and tablets.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="max-w-3xl">
                    <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.25em] text-[#FD5528]">Project Story</p>
                    <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
                        From manual spreadsheet quotes to an automated booking pipeline.
                    </h2>
                    <p class="mt-5 text-base sm:text-lg leading-relaxed text-slate-600">
                        Marley Moves required an efficient digital system to handle customer quote inquiries and coordinate logistics dispatch without prolonged back-and-forth phone calls.
                    </p>
                </div>

                <div class="mt-12 max-w-4xl space-y-6">
                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">The Problem &amp; Business Requirement</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            Manual quoting caused noticeable drop-offs during high-traffic inquiry periods. Estimating relocation jobs over phone calls led to inaccurate load assessments, vehicle mismatch, and administrative dispatch bottlenecks across multiple regional routes.
                        </p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">Architecture &amp; Technical Approach</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            Backend Coders India developed a clean Laravel web application powered by a normalized MySQL schema. Alpine.js provides reactive client-side volume calculation without full-page reloads, while Google Maps API services verify address validation and route distances.
                        </p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">Verified Technical Outcomes</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            The platform centralized 100% of online inquiry records, removed manual quoting calculation delays, and gave operations staff an organized visual schedule for vehicle fleet dispatching.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    @elseif(str_contains($project->slug, 'pulse-events'))
        {{-- PULSE EVENTS CASE STUDY --}}
        <section class="bg-white py-16 border-b border-slate-200/60 shadow-sm relative z-30">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mb-12 text-center">
                    <span class="inline-flex rounded-full bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">
                        Delivered Platform Capabilities
                    </span>
                    <h2 class="mt-4 text-3xl lg:text-4xl font-bold text-slate-900">
                        Event Registration &amp; Ticketing Portal
                    </h2>
                    <p class="mt-4 max-w-3xl mx-auto text-slate-600">
                        A modern registration portal supporting multi-tiered ticket sales, session agenda schedules, and automated pass delivery.
                    </p>
                </div>

                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Multi-Tiered Ticket Sales</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Supports early-bird, VIP, and group packages with automated price adjustments based on sales volume and dates.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Real-Time Inventory Lock</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Session reservation logic locks available seats during the checkout window to prevent accidental double-bookings.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Instant Digital Passes</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Generates branded PDF and QR-coded mobile passes sent immediately upon successful payment verification.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Stripe Payment Gateway</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">PCI-compliant card processing with secure webhook handling for instant transaction verification.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Speaker &amp; Agenda Directory</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Structured session agendas with speaker profiles, track filtering, and schedule bookmarking.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Organizer Check-In Console</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">On-site attendance dashboard to scan QR passes, monitor check-in numbers, and export attendee manifests.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="max-w-3xl">
                    <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.25em] text-[#FD5528]">Project Story</p>
                    <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
                        From scattered event registrations to a seamless digital box office.
                    </h2>
                    <p class="mt-5 text-base sm:text-lg leading-relaxed text-slate-600">
                        Pulse Events required an integrated ticketing platform capable of handling concurrent registration surges without system slow-downs.
                    </p>
                </div>

                <div class="mt-12 max-w-4xl space-y-6">
                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">The Problem &amp; Business Requirement</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            Relying on generic third-party ticketing tools incurred excessive transaction commissions and offered minimal customization over attendee data collection and event branding.
                        </p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">Architecture &amp; Technical Approach</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            The solution was built using Laravel 11, TailwindCSS, and Alpine.js. Database transactions guarantee seat reservation integrity during simultaneous checkouts, and asynchronous queues manage PDF pass generation.
                        </p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">Verified Technical Outcomes</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            The custom ticketing engine provided zero double-booking errors, delivered instant digital passes to attendee mobile devices, and lowered ticketing software overhead fees.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    @else
        {{-- SEO ROCKET PRO (AND DEFAULT PROJECT LAYOUT) --}}
        <section class="bg-white py-16 border-b border-slate-200/60 shadow-sm relative z-30">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mb-12 text-center">
                    <span class="inline-flex rounded-full bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">
                        Core Product Capabilities
                    </span>
                    <h2 class="mt-4 text-3xl lg:text-4xl font-bold text-slate-900">
                        Everything Agencies Need In One Platform
                    </h2>
                    <p class="mt-4 max-w-3xl mx-auto text-slate-600">
                        Streamline SEO audits, lead generation, reporting, and CRM workflows with a centralized platform designed for digital agencies and growth teams.
                    </p>
                </div>

                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Website Audit &amp; SEO Analysis</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Run technical SEO audits, website health checks, and performance reviews to identify issues, opportunities, and optimization areas.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Lead Generation &amp; Scraping</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Discover new business opportunities, collect prospect data, and build targeted outreach lists faster.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Prospect Qualification</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Analyze website quality, SEO condition, and digital gaps before outreach to focus on qualified prospects.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">SEO Reporting Dashboard</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Present performance summaries, audit insights, and actionable recommendations through clear reports.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">CRM Lead Management</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Organize leads, manage sales pipelines, track outreach activities, and monitor conversion stages.</p>
                    </div>
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">
                        <h3 class="text-lg font-bold text-slate-900">Agency Workflow Efficiency</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Reduce tool switching and improve productivity by managing audits, reporting, prospecting, and CRM workflows in one place.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="max-w-3xl">
                    <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.25em] text-[#FD5528]">Case Study</p>
                    <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
                        Consolidating Agency Audits and Lead Pipelines into a Unified Platform
                    </h2>
                    <p class="mt-5 text-base sm:text-lg leading-relaxed text-slate-600">
                        A detailed breakdown of how Backend Coders India designed, engineered, and deployed SEO Rocket Pro as a proprietary SaaS system to eliminate tool fragmentation and streamline client delivery.
                    </p>
                </div>

                <div class="mt-12 max-w-4xl space-y-6">
                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">1. Client Context &amp; Project Background</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            SEO Rocket Pro was conceptualized and engineered by Backend Coders India as an in-house proprietary platform. Growing digital agencies and independent consultants often face fragmented operational stacks, having to juggle separate paid tools for technical site auditing, prospect scraping, reporting decks, and outreach tracking.
                        </p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">2. The Business Problem</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            Running client audits manually took up to 45 minutes per prospect, requiring data exports across disparate web tools, spreadsheet reformatting, and manual compilation into presentation decks. Furthermore, recurring per-seat monthly subscriptions created excessive software overhead while failing to integrate lead pipeline data directly with technical site findings.
                        </p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">3. Implemented Solution</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            Backend Coders India developed a full-featured web application that centralizes all four critical workflows into a single interface: automated multi-point technical SEO audits (indexing, HTTP status codes, metadata, Core Web Vitals signals), structured prospect lead scraping with contact enrichment, branded exportable client audit reports, and a streamlined lead pipeline CRM.
                        </p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">4. Architecture &amp; Technical Approach</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            The platform leverages Laravel 11/12 with a normalized MySQL database structure. To prevent timeout bottlenecks during heavy website crawling, audit extraction tasks run asynchronously via background Redis/database queues with strict rate-limiting. A responsive UI built with TailwindCSS and Alpine.js provides snappy, interactive filtering across thousands of audit data points without full-page reloads.
                        </p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">5. Verified Outcomes</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            The platform successfully consolidated 4 separate third-party software subscriptions into one centralized operational workspace. Automated site crawling reduced client audit preparation time from 45 minutes of manual compilation to under 3 minutes per audit, while eliminating recurring external seat licensing fees for in-house staff.
                        </p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-slate-50/60 p-6 sm:p-8">
                        <h3 class="text-lg font-bold text-slate-900">6. Lessons Learned</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-600">
                            Reliable crawling of external third-party websites requires proactive HTTP retry mechanisms, user-agent rotation, and polite concurrency throttling to prevent target server rate-limiting. Storing structured JSON payloads for audit results alongside normalized relational tables delivered optimal query performance for rapid dashboard rendering.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- STACK ARCHITECTURE --}}
    <section class="bg-slate-950 py-16 text-white border-y border-slate-800">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">
                <div class="max-w-xl">
                    <span class="text-xs font-bold uppercase tracking-wider text-orange-400">Technical Foundation</span>
                    <h3 class="mt-2 text-2xl font-bold tracking-tight text-white sm:text-3xl">Architectural Stack</h3>
                    <p class="mt-3 text-sm text-slate-400 leading-relaxed">
                        Engineered with clean separation of concerns, secure data storage, and accessible frontend interfaces.
                    </p>
                </div>

                <div class="flex flex-wrap gap-2.5 max-w-xl">
                    @forelse($technologies as $tech)
                        <span class="rounded-lg border border-slate-800 bg-slate-900 px-4 py-2 text-xs sm:text-sm font-semibold text-slate-200 shadow-sm">
                            {{ $tech }}
                        </span>
                    @empty
                        <span class="rounded-lg border border-slate-800 bg-slate-900 px-4 py-2 text-xs sm:text-sm font-semibold text-slate-200">Laravel</span>
                        <span class="rounded-lg border border-slate-800 bg-slate-900 px-4 py-2 text-xs sm:text-sm font-semibold text-slate-200">MySQL</span>
                        <span class="rounded-lg border border-slate-800 bg-slate-900 px-4 py-2 text-xs sm:text-sm font-semibold text-slate-200">TailwindCSS</span>
                        <span class="rounded-lg border border-slate-800 bg-slate-900 px-4 py-2 text-xs sm:text-sm font-semibold text-slate-200">Alpine.js</span>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    {{-- FAQS (IF AVAILABLE) --}}
    @if(!empty($faqItems))
        <section class="bg-slate-50 py-16 border-b border-slate-200">
            <div class="mx-auto max-w-4xl px-6 lg:px-8">
                <div class="text-center mb-10">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#FD5528]">Project Details</span>
                    <h3 class="mt-2 text-2xl font-black text-slate-900 sm:text-3xl">Frequently Asked Questions</h3>
                </div>

                <div class="space-y-4">
                    @foreach($faqItems as $faq)
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <h4 class="text-base font-bold text-slate-900">{{ $faq['question'] }}</h4>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $faq['answer'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- RELATED PROJECTS --}}
    @if($relatedProjects->isNotEmpty())
        <section class="bg-white py-16 border-b border-slate-200">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-6 mb-12">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.25em] text-[#FD5528]">Portfolio Exploration</p>
                        <h3 class="mt-2 text-2xl font-black tracking-tight text-slate-900 sm:text-3xl">More Delivered Case Studies</h3>
                    </div>
                    <a href="{{ route('frontend.project') }}" class="shrink-0 text-sm font-bold text-slate-600 hover:text-[#FD5528] border border-slate-200 bg-slate-50 rounded-lg px-5 py-2.5 transition shadow-sm">
                        Browse All Projects &rarr;
                    </a>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($relatedProjects as $relatedProject)
                        <article class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                            <div class="relative h-48 overflow-hidden bg-slate-100">
                                <img src="{{ $relatedProject->getImageUrl() }}" alt="{{ $relatedProject->title }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                <div class="absolute left-4 top-4 rounded-md bg-white/95 px-2.5 py-1 text-[11px] font-bold text-[#FD5528] uppercase shadow-sm border border-slate-100">
                                    {{ $relatedProject->category ?? 'Project' }}
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 p-6">
                                <h4 class="text-base font-bold text-slate-900 tracking-tight line-clamp-1 group-hover:text-[#FD5528] transition">
                                    {{ $relatedProject->title }}
                                </h4>
                                <p class="mt-2.5 text-xs sm:text-sm leading-relaxed text-slate-500 line-clamp-2">
                                    {{ $relatedProject->description }}
                                </p>
                                <div class="mt-5 pt-4 border-t border-slate-100">
                                    <a href="{{ route('frontend.project-detail', ['slug' => $relatedProject->slug]) }}" class="inline-flex items-center justify-center w-full rounded-xl bg-slate-900 py-2.5 text-xs sm:text-sm font-bold text-white transition hover:bg-[#FD5528]">
                                        View Case Study
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- CTA SECTION --}}
    <section class="relative overflow-hidden bg-gradient-to-r from-[#FD5528] via-[#ff6a3d] to-[#FD5528] py-16 text-white text-center">
        <div class="relative mx-auto max-w-4xl px-6">
            <h2 class="text-3xl font-black leading-tight sm:text-4xl lg:text-5xl">
                Ready to Build a Solution for Your Business?
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-base sm:text-lg leading-relaxed text-white/90">
                Whether you need custom software, an operational platform, or an intuitive web application like {{ $project->title }}, Backend Coders India is ready to help your team succeed.
            </p>
            <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="{{ route('frontend.contact') }}" class="inline-flex items-center justify-center rounded-xl bg-white px-8 py-3.5 text-sm font-bold text-[#FD5528] shadow-xl transition duration-300 hover:-translate-y-0.5 hover:shadow-2xl">
                    Discuss Your Project
                </a>
                <a href="{{ route('frontend.project') }}" class="inline-flex items-center justify-center rounded-xl border border-white/40 bg-white/10 px-8 py-3.5 text-sm font-bold text-white backdrop-blur transition hover:bg-white/20">
                    View More Projects
                </a>
            </div>
        </div>
    </section>
</main>
@endsection