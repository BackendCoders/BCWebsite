@extends('component.main')

@section('content')
@php
    $pageTitle = 'Software Company in Kanpur | Custom Software & Web Applications';
    $pageDescription = 'Leading custom software company in Kanpur. Backend Coders India engineers custom web applications, ERP/POS systems, mobile apps, SaaS platforms, and secure APIs.';
    $canonicalUrl = 'https://backendcodersindia.com/software-company-kanpur';

    $webPageSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        '@id' => 'https://backendcodersindia.com/software-company-kanpur#webpage',
        'url' => $canonicalUrl,
        'name' => $pageTitle,
        'description' => $pageDescription,
        'isPartOf' => [
            '@type' => 'WebSite',
            '@id' => 'https://backendcodersindia.com/#website',
        ],
        'about' => [
            '@id' => 'https://backendcodersindia.com/software-company-kanpur#service',
        ],
    ];

    $serviceSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => 'https://backendcodersindia.com/software-company-kanpur#service',
        'name' => 'Custom Software Development Services in Kanpur',
        'serviceType' => 'Software Engineering & Web Application Development',
        'description' => 'Custom software engineering, enterprise web applications, ERP/POS systems, mobile apps, and SaaS platforms engineered with clean Laravel and MySQL architecture.',
        'url' => $canonicalUrl,
        'provider' => [
            '@type' => 'Organization',
            '@id' => 'https://backendcodersindia.com/#organization',
            'name' => 'Backend Coders India',
            'url' => 'https://backendcodersindia.com',
        ],
        'areaServed' => [
            ['@type' => 'City', 'name' => 'Kanpur'],
            ['@type' => 'State', 'name' => 'Uttar Pradesh'],
            ['@type' => 'Country', 'name' => 'India'],
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Software Engineering Offerings',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Custom Web Application Development',
                        'description' => 'Scalable enterprise portals, role-based workflows, and workflow automation built on Laravel 12 and MySQL.',
                        'url' => 'https://backendcodersindia.com/page/custom-web-applications',
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'ERP & POS Systems',
                        'description' => 'GST-compliant billing, multi-warehouse inventory tracking, and supply chain software for Kanpur manufacturers.',
                        'url' => 'https://backendcodersindia.com/page/erp-pos-software',
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Mobile Application Development',
                        'description' => 'High-performance Android and iOS mobile applications with secure offline caching and real-time APIs.',
                        'url' => 'https://backendcodersindia.com/page/mobile-app-development',
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'SaaS Platform Engineering',
                        'description' => 'Multi-tenant cloud architecture, automated customer onboarding, and subscription billing engines.',
                        'url' => 'https://backendcodersindia.com/page/saas-development',
                    ],
                ],
            ],
        ],
    ];

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
                'name' => 'Software Company in Kanpur',
                'item' => $canonicalUrl,
            ],
        ],
    ];
@endphp

@push('head')
    <script type="application/ld+json">
{!! json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
    <script type="application/ld+json">
{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
    <script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

<main class="bg-white">

    {{-- HERO SECTION --}}
    <section class="relative overflow-hidden bg-[linear-gradient(135deg,#020617_0%,#0f172a_50%,#1e1b4b_100%)] py-16 text-white sm:py-20 lg:py-24" aria-label="Hero Section">
        <div class="pointer-events-none absolute inset-0 opacity-40" aria-hidden="true">
            <div class="absolute -top-24 right-0 h-96 w-96 rounded-full bg-[#FD5528]/20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-96 w-96 rounded-full bg-blue-600/15 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6">
            <div class="grid items-center gap-12 lg:grid-cols-12">
                <div class="lg:col-span-7">
                    <div class="inline-flex items-center gap-2 rounded-full border border-slate-700 bg-slate-800/80 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-orange-400 mb-6 shadow-sm">
                        <span class="inline-block h-2 w-2 rounded-full bg-[#FD5528] animate-pulse"></span>
                        Kanpur Software Engineering Team
                    </div>

                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl leading-[1.15]">
                        Custom <span class="bg-gradient-to-r from-orange-400 via-[#FD5528] to-orange-500 bg-clip-text text-transparent">Software Company</span> in Kanpur
                    </h1>

                    <p class="mt-6 max-w-2xl text-base leading-relaxed text-slate-300 sm:text-lg">
                        Backend Coders India is a custom software development company and IT company in Kanpur. We engineer custom web applications, ERP and POS software, mobile applications, and scalable SaaS platforms. We build secure, maintainable software tailored to the exact workflows of Kanpur manufacturers, logistics operators, distributors, and fast-growing Indian enterprises.
                    </p>

                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-7 py-3.5 text-base font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.35)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]">
                            Discuss Your Project
                        </a>
                        <a href="#capabilities" class="inline-flex items-center justify-center rounded-2xl border border-slate-700 bg-slate-800/70 px-7 py-3.5 text-base font-semibold text-slate-200 shadow-sm transition hover:-translate-y-0.5 hover:border-[#FD5528] hover:text-white">
                            View Engineering Scope
                        </a>
                    </div>

                    <div class="mt-5 flex items-center gap-2 text-xs text-slate-400">
                        <span class="inline-block h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                        <span>Looking for IT jobs or developer internships in Kanpur? Explore open positions on our <a href="{{ route('frontend.career') }}" class="text-[#FD5528] font-semibold underline hover:text-orange-400">Careers page</a>.</span>
                    </div>

                    {{-- Technical Trust Metrics --}}
                    <div class="mt-10 grid grid-cols-3 gap-4 border-t border-slate-800 pt-6">
                        <div>
                            <p class="text-2xl font-bold text-white">100%</p>
                            <p class="text-xs text-slate-400 font-medium mt-0.5">IP &amp; Code Ownership</p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-white">10+ Yrs</p>
                            <p class="text-xs text-slate-400 font-medium mt-0.5">Architect Experience</p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-white">Laravel 12</p>
                            <p class="text-xs text-slate-400 font-medium mt-0.5">Modern Architecture</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="rounded-3xl border border-slate-800 bg-slate-900/90 p-7 shadow-2xl backdrop-blur-sm">
                        <div class="flex items-center justify-between pb-4 border-b border-slate-800">
                            <span class="text-xs font-semibold uppercase tracking-wider text-orange-400">Software Architecture</span>
                            <span class="rounded-full bg-emerald-950 px-2.5 py-0.5 text-[0.65rem] font-bold text-emerald-400 border border-emerald-800">Production Ready</span>
                        </div>
                        <div class="mt-5 space-y-4 text-xs">
                            <div class="flex items-start gap-3">
                                <span class="rounded bg-slate-800 px-2 py-1 font-mono text-[#FD5528]">Backend</span>
                                <p class="text-slate-300">PHP 8.2+, Laravel 12, RESTful APIs, Redis Cache</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="rounded bg-slate-800 px-2 py-1 font-mono text-blue-400">Database</span>
                                <p class="text-slate-300">MySQL, PostgreSQL, Normalized Schemas, Automated Backups</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="rounded bg-slate-800 px-2 py-1 font-mono text-emerald-400">Frontend</span>
                                <p class="text-slate-300">Alpine.js, Tailwind CSS, Vue.js, Responsive Mobile UI</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="rounded bg-slate-800 px-2 py-1 font-mono text-purple-400">Integrations</span>
                                <p class="text-slate-300">Payment Gateways, GST Invoicing, WhatsApp Business API</p>
                            </div>
                        </div>
                        <div class="mt-6 pt-5 border-t border-slate-800">
                            <a href="#contact" class="block w-full text-center rounded-xl bg-gradient-to-r from-[#FD5528] to-orange-500 py-3 text-sm font-semibold text-white shadow transition hover:opacity-95">
                                Book Technical Feasibility Call
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY KANPUR BUSINESSES NEED CUSTOM SOFTWARE --}}
    <section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Why Custom Development</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                    Why Generic Software Fails Growing Kanpur Businesses
                </h2>
                <p class="mt-4 text-base text-slate-600 leading-relaxed">
                    Most companies in Kanpur attempt to run operations on rigid off-the-shelf software or error-prone Excel spreadsheets. As your order volumes, staff headcount, and customer demands grow, disconnected tools create operational bottlenecks.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-xl mb-4">
                        01
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Custom Industrial Workflows</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Manufacturing processes in Kanpur (textiles, tanneries, plastic molding, packaging) involve multi-stage job orders, raw material wastage formulas, and vendor subcontracting that SaaS tools rarely support.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-xl mb-4">
                        02
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Zero Recurring License Fees</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Commercial SaaS charges expensive per-user monthly subscription fees. With custom software developed by Backend Coders India, you own 100% of the code with zero per-seat user fees.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-xl mb-4">
                        03
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Strict Data Privacy &amp; Security</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Your customer records, margins, supplier quotes, and internal ledgers remain on your private database instance with role-based permissions rather than shared public cloud tenancy.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CORE SOFTWARE DEVELOPMENT SERVICES --}}
    <section id="capabilities" class="py-16 sm:py-24 bg-white">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Core Capabilities</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                    Software Development Services in Kanpur
                </h2>
                <p class="mt-4 text-base text-slate-600">
                    Engineered for high performance, clean maintainability, and predictable business scale.
                </p>
            </div>

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                {{-- Service 1: Custom Web Apps --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Custom Web Applications</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Bespoke web applications built for business automation, internal operations, customer portals, and partner extranets. Built with clean Laravel architecture for rapid performance.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ Granular role-based access control (RBAC)</li>
                            <li>✔ Dynamic report generation &amp; PDF exports</li>
                            <li>✔ Secure audit logging &amp; database transactions</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ url('/page/custom-web-applications') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore Custom Web Apps &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 2: ERP & POS --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">ERP &amp; POS Software Systems</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Tailored enterprise resource planning and point-of-sale systems for retail chains, distributors, and factory floors across Kanpur. Centralize billing, multi-store inventory, and ledger audits.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ GST-compliant invoicing &amp; thermal print integration</li>
                            <li>✔ Real-time multi-warehouse stock replenishment</li>
                            <li>✔ Barcode scanner &amp; weighing scale connectivity</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ url('/page/erp-pos-software') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore ERP &amp; POS Software &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 3: Mobile Apps --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Mobile Application Development</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Native and cross-platform mobile apps for Android and iOS. Whether you need field agent tracking, delivery driver apps, customer booking portals, or business management on the go.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ Offline-first database caching &amp; sync</li>
                            <li>✔ Push notifications &amp; geo-location GPS tracking</li>
                            <li>✔ Smooth Play Store &amp; App Store deployment</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ url('/page/mobile-app-development') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore Mobile App Dev &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 4: SaaS Platforms --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">SaaS Platform Engineering</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Turn your digital business model into a scalable Software-as-a-Service product. We architect multi-tenant database isolation, automated tenant provisioning, and recurring payment subscriptions.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ Multi-tenant database schema architecture</li>
                            <li>✔ Automated Stripe &amp; Razorpay subscription billing</li>
                            <li>✔ Admin analytics &amp; tenant activity monitors</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ url('/page/saas-development') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore SaaS Development &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 5: API Integration --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">API Development &amp; Integrations</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Connect your disparate software systems. We engineer robust RESTful APIs, webhook receivers, and third-party integrations with WhatsApp Business, logistics providers, and payment gateways.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ REST &amp; JSON-API compliance with documentation</li>
                            <li>✔ Rate limiting &amp; OAuth2 token authentication</li>
                            <li>✔ Asynchronous Redis background job queues</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ url('/page/api-development') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore API Services &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 6: Web Development --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">E-Commerce Platforms &amp; Stores</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Scalable custom ecommerce solutions for brands outgrowing standard templates. Custom cart workflows, distributor wholesale portals, and high-volume order processing.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ Custom checkout funnels &amp; order management</li>
                            <li>✔ High-concurrency database optimizations</li>
                            <li>✔ Integrated payment &amp; courier dispatch APIs</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ url('/page/ecommerce-development') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore E-Commerce Dev &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 5-PHASE ENGINEERING LIFECYCLE --}}
    <section class="py-16 sm:py-20 bg-slate-900 text-white">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Process &amp; Governance</span>
                <h2 class="mt-2 text-3xl font-bold sm:text-4xl">Our 5-Phase Software Engineering Lifecycle</h2>
                <p class="mt-4 text-base text-slate-300">
                    How we take software from initial technical discovery to verified production deployment.
                </p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-5">
                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 01</span>
                    <h3 class="mt-2 text-base font-bold text-white">Discovery &amp; Scoping</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        We map your user journeys, identify edge cases, and define exact functional requirements and project milestones.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 02</span>
                    <h3 class="mt-2 text-base font-bold text-white">Schema &amp; API Architecture</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Database normalization, indexing strategy, security models, and RESTful API endpoints are designed prior to writing code.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 03</span>
                    <h3 class="mt-2 text-base font-bold text-white">Iterative Sprints</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Features are developed in 2-week agile sprints with working staging builds shared for stakeholder feedback.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 04</span>
                    <h3 class="mt-2 text-base font-bold text-white">Automated QA &amp; Testing</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Rigorous unit, integration, and user acceptance testing designed to safeguard transaction integrity and reduce data exposure risks.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 05</span>
                    <h3 class="mt-2 text-base font-bold text-white">Deployment &amp; IP Handover</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Production deployment on your cloud server with automated backups, monitoring, full source code handover, and SLA support.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- VERIFIED PROJECTS & PROOF --}}
    <section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Delivered Platforms</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                    Verified Software Case Studies
                </h2>
                <p class="mt-4 text-base text-slate-600">
                    Real architectural challenges solved with documented technical results.
                </p>
            </div>

            <div class="mt-12 max-w-2xl mx-auto">
                <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                        <span class="text-xs font-semibold text-slate-500">SaaS Architecture</span>
                        <span class="rounded bg-orange-100 px-2 py-0.5 text-[0.65rem] font-bold text-[#FD5528]">Internal Platform</span>
                    </div>
                    <h3 class="mt-4 text-lg font-bold text-slate-900">SEO Rocket Pro SaaS</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Automated site audit engine built with Laravel and Redis queues that crawls websites, flags technical regressions, and exports client qualification reports in under 3 minutes.
                    </p>
                    <a href="{{ url('/project/seo-audit-lead-generation-and-agency-workflow-software') }}" class="mt-5 inline-block text-xs font-semibold text-[#FD5528] hover:underline">
                        View Architecture Case Study &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- KANPUR SOFTWARE FAQS --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="mx-auto max-w-4xl px-6">
            <div class="text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Engineering Questions</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">Frequently Asked Questions</h2>
                <p class="mt-3 text-sm text-slate-600">Common technical, legal, and operational inquiries from our Kanpur software clients.</p>
            </div>

            <div class="mt-10 space-y-4">
                <div class="rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900">Do we own the full source code and Intellectual Property (IP)?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Yes. Upon completion and final settlement, 100% of the custom source code, database architectures, and associated intellectual property rights are formally transferred to your business. You receive full Git repository access with complete deployment documentation.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900">How long does custom software development take?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Development timelines depend on scope. A targeted internal workflow tool or custom ERP module typically takes 4 to 8 weeks, while an enterprise-scale SaaS or complex multi-store POS platform takes 10 to 16 weeks. We break every project into two-week milestone deliverables so you can test working software early.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900">Can your team migrate our existing Excel spreadsheets or legacy database?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Yes. Data migration is a standard part of our engineering process. We write custom database ETL (Extract, Transform, Load) scripts to sanitize, validate, and import your existing customer lists, inventory balances, and historic ledgers into the new database without downtime.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900">What happens after the software goes live?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        We provide a post-launch warranty period covering any bug resolution and system tuning. Beyond launch, we offer dedicated Service Level Agreement (SLA) maintenance packages covering server monitoring, security patches, regular backups, and feature iterations.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900">Where is your engineering team located?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Our core engineering and architecture leadership is headquartered in Kanpur, Uttar Pradesh, led by founder Ravindra Verma (<a href="{{ route('frontend.owner') }}" class="text-[#FD5528] underline">view founder profile</a>). We provide on-site meetings for local Kanpur businesses as well as online coordination for national clients.
                    </p>
                </div>

                <div class="rounded-2xl border border-orange-200 bg-orange-50/40 p-6">
                    <h3 class="text-base font-bold text-slate-900">Do you offer digital marketing and customer acquisition for launched software?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Yes. For custom software platforms, web apps, and ecommerce businesses needing qualified users, our team provides dedicated SEO, Google Ads, and multi-channel acquisition. Learn more about our <a href="{{ route('frontend.digital_marketing_kanpur') }}" class="font-semibold text-[#FD5528] underline">digital marketing agency in Kanpur</a> services.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900">Business ke liye billing ya POS software kaise choose karein?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Retail, manufacturing ya distribution business ke liye software choose karte waqt 4 baatein zaroor check karein: (1) GST compliance aur automatic tax invoice generation, (2) Offline billing capability agar internet slow ya disconnect ho, (3) Real-time multi-counter aur stock synchronization, aur (4) One-time investment vs recurring fees. Hamari custom billing software mein 100% code ownership milti hai bina kisi monthly per-user license fee ke.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900">Kanpur mein custom software development company ke sath project kaise start karein?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Project shuru karne ke liye pehle technical discovery call hoti hai jisme aapke business workflow, daily bottlenecks aur reporting needs samjhi jaati hain. Iske baad detailed scope document aur milestones freeze hote hain. Local Kanpur businesses ke liye on-site meetings bhi available hain, aur project start hone par Git repository aur staging URL par live progress share ki jaati hai.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT / INQUIRY FORM --}}
    <section id="contact" class="py-16 sm:py-24 bg-gradient-to-b from-slate-50 to-white border-t border-slate-200">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center mb-12">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Software Engineering Inquiries</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                    Discuss Your Software Requirements
                </h2>
                <p class="mt-3 text-base text-slate-600">
                    Share your requirements with our engineering team in Kanpur. We will evaluate technical feasibility, estimate timeline and investment, and outline an architectural approach.
                </p>
            </div>

            <div class="mx-auto max-w-4xl">
                @include('frontend.form')
            </div>
        </div>
    </section>

</main>
@endsection
