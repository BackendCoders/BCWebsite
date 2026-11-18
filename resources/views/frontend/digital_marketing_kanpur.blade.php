@extends('component.main')

@section('content')
@php
    $pageTitle = $page->meta_title ?: 'Digital Marketing Agency in Kanpur | SEO, Ads & Social – Backend Coders India';
    $pageDescription = $page->meta_description ?: 'Kanpur digital marketing agency for SEO, Google Ads, Meta Ads and social media. Transparent monthly plans from ₹7,999. Free 30-min audit. Call today.';
    $canonicalUrl = $page->canonical_url ?: 'https://backendcodersindia.com/digital-marketing-agency-kanpur';
    $pageHeading = $page->title ?: 'Digital Marketing Agency in Kanpur That Tracks Leads, Not Likes';

    $webPageSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        '@id' => 'https://backendcodersindia.com/digital-marketing-agency-kanpur#webpage',
        'url' => $canonicalUrl,
        'name' => $pageTitle,
        'description' => $pageDescription,
        'isPartOf' => [
            '@type' => 'WebSite',
            '@id' => 'https://backendcodersindia.com/#website',
        ],
        'about' => [
            '@id' => 'https://backendcodersindia.com/digital-marketing-agency-kanpur#service',
        ],
    ];

    $serviceSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => 'https://backendcodersindia.com/digital-marketing-agency-kanpur#service',
        'name' => 'Digital Marketing Services in Kanpur',
        'serviceType' => 'Digital Marketing & Growth Optimization',
        'description' => 'Comprehensive digital marketing in Kanpur including Search Engine Optimization (SEO), Google Ads, PPC, and Social Media Marketing for measurable ROI.',
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
        'offers' => [
            '@type' => 'Offer',
            'price' => '7999',
            'priceCurrency' => 'INR',
            'priceSpecification' => [
                '@type' => 'UnitPriceSpecification',
                'price' => '7999',
                'priceCurrency' => 'INR',
                'unitCode' => 'MON',
                'billingDuration' => 1,
            ],
            'description' => 'Digital marketing packages starting at ₹7,999/month for foundational Local SEO and Google Maps optimization.',
            'url' => 'https://backendcodersindia.com/packages',
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Digital Marketing Services',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Search Engine Optimization (SEO)',
                        'description' => 'Organic search visibility, on-page SEO, technical audits, and local map rankings in Kanpur.',
                        'url' => 'https://backendcodersindia.com/seo',
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Google Ads & PPC Management',
                        'description' => 'Targeted search ads, display remarketing, negative keyword sculpting, and conversion tracking.',
                        'url' => 'https://backendcodersindia.com/page/google-ads',
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Social Media Marketing (SMM)',
                        'description' => 'B2B LinkedIn growth, Meta lead campaigns, brand positioning, and social creatives.',
                        'url' => 'https://backendcodersindia.com/page/social-media-management',
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
                'name' => 'Digital Marketing Agency in Kanpur',
                'item' => $canonicalUrl,
            ],
        ],
    ];

    $faqList = [
        [
            'q' => 'How much does digital marketing cost per month in Kanpur?',
            'a' => 'Our verified digital marketing retainers start at ₹7,999/month for foundational Local SEO and Google Maps optimization, ₹11,999/month for Standard SEO & content marketing, and custom tiers for managed Google & Meta paid advertising with no long-term lock-ins.',
        ],
        [
            'q' => 'How soon can I expect digital marketing results?',
            'a' => 'Google Ads and Meta paid campaigns can begin driving targeted visitor traffic and potential enquiries quickly once campaigns are reviewed and active. Local SEO and Google Maps visibility typically show steady organic progress over 60 to 90 days as citation consistency and profile relevance build.',
        ],
        [
            'q' => 'Do you work with small shops and local businesses?',
            'a' => 'Yes. We work directly with single-location retail stores, regional healthcare clinics, wholesale distributors, and emerging service businesses across Kanpur seeking verified local customer inquiries.',
        ],
        [
            'q' => 'Do you provide Hindi reports or Hindi-language support?',
            'a' => 'Yes. Our Kanpur-based team provides consultation, strategy discussions, and performance reporting summaries in both Hindi and English for clear, transparent communication.',
        ],
        [
            'q' => 'Is there a contract or lock-in period?',
            'a' => 'No. We work on flexible monthly billing cycles. You can adjust, scale, or pause your campaigns with 30 days notice after the initial setup phase.',
        ],
        [
            'q' => 'Will I own my advertising accounts?',
            'a' => 'Yes, 100%. All Google Ads and Meta Business Manager accounts are owned directly by your business. Backend Coders India operates as an authorized agency partner with full transparency.',
        ],
        [
            'q' => 'Which digital marketing services are suitable for my business?',
            'a' => 'Local service businesses, clinics, and retail benefit most from Local SEO and Google Business Profile optimization. B2B manufacturers and educational coaching centers succeed with Google Search Ads and SEO topical authority.',
        ],
        [
            'q' => 'How do you measure campaign performance?',
            'a' => 'We configure Google Tag Manager and GA4 to measure actionable outcomes: submitted inquiry forms, verified phone call clicks, and direct WhatsApp conversations rather than superficial vanity impressions.',
        ],
        [
            'q' => 'Kanpur mein SEO services se business ko kya fayda hota hai?',
            'a' => 'Local SEO aapke Kanpur business ko Google Maps aur search results ke top par laata hai jab aas-paas ke customers immediate services search karte hain. Iska sabse bada fayda ye hai ki aapko daily Google Ads par paise kharch kiye bina verified call enquiries, shop visits aur WhatsApp leads milti hain.',
        ],
        [
            'q' => 'Kanpur mein digital marketing agency choose karte waqt kin baaton ka dhyan rakhna chahiye?',
            'a' => 'Agency select karte waqt 3 critical checks karein: (1) Fake ranking guarantee se bachein (Google algorithm koi control nahi karta), (2) Monthly deliverables aur transparent analytics reporting mangiye (impressions ke bajaye genuine phone calls aur leads track honi chahiye), aur (3) Verified local case studies aur code ownership check karein.',
        ],
        [
            'q' => 'Do you build custom software, web applications, or ERPs alongside marketing?',
            'a' => 'Yes. Backend Coders India is also a full-service software engineering firm. If your business needs custom internal workflow portals, billing ERPs, or mobile apps, explore our <a href="' . route('frontend.software_company_kanpur') . '" class="font-semibold text-[#FD5528] underline">software company in Kanpur</a> services.',
        ],
    ];

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(function ($faq) {
            return [
                '@type' => 'Question',
                'name' => $faq['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => strip_tags($faq['a']),
                ],
            ];
        }, $faqList),
    ];
@endphp

@push('head')
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/banner.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ asset('assets/images/banner.png') }}">

    <script type="application/ld+json">
{!! json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
    <script type="application/ld+json">
{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
    <script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
    <script type="application/ld+json">
{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

<main class="bg-white">

    {{-- SECTION A: HERO --}}
    <section class="relative overflow-hidden bg-[linear-gradient(135deg,#fff7f2_0%,#ffffff_45%,#fff1eb_100%)] py-16 text-slate-900 sm:py-20 lg:py-24" aria-label="Hero Section">
        <div class="pointer-events-none absolute inset-0 opacity-50" aria-hidden="true">
            <div class="absolute -top-20 right-0 h-80 w-80 rounded-full bg-orange-200/40 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-80 w-80 rounded-full bg-[#FD5528]/15 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6">
            <div class="grid items-center gap-12 lg:grid-cols-12">
                <div class="lg:col-span-7">
                    <div class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-[#FD5528] mb-6 shadow-sm">
                        <span class="inline-block h-2 w-2 rounded-full bg-[#FD5528] animate-pulse"></span>
                        Top-Tier Digital Marketing in Kanpur
                    </div>

                    <h1 class="text-4xl font-extrabold tracking-tight text-slate-950 sm:text-5xl lg:text-6xl leading-[1.15]">
                        {{ $pageHeading }}
                    </h1>

                    <p class="mt-6 max-w-2xl text-base leading-relaxed text-slate-600 sm:text-lg">
                        We help manufacturers, retail enterprises, healthcare providers, and local service brands in Kanpur acquire qualified customer inquiries. By combining technical SEO, Google Ads, social media marketing, and conversion-focused landing pages, we build predictable client acquisition engines focused on measurable ROI.
                    </p>

                    {{-- Hero CTAs: Primary (Call Now), Secondary (WhatsApp Us), Tertiary (Request a Free Audit) --}}
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a href="tel:+919140092133" class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#FD5528] px-7 py-3.5 text-base font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.28)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]" id="hero-call-now-btn">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>Call Now: +91 914 0092 133</span>
                        </a>

                        <a href="https://wa.me/919140092133" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 rounded-2xl border border-emerald-500 bg-emerald-50 px-6 py-3.5 text-base font-semibold text-emerald-800 shadow-sm transition hover:-translate-y-0.5 hover:bg-emerald-100" id="hero-whatsapp-btn">
                            <img src="{{ asset('assets/icons/whatsapp.png') }}" class="w-5 h-5" alt="WhatsApp">
                            <span>WhatsApp Us</span>
                        </a>

                        <a href="#contact" class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-6 py-3.5 text-base font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-[#FD5528] hover:text-[#FD5528]" id="hero-audit-btn">
                            Request a Free Audit
                        </a>
                    </div>

                    <div class="mt-5 flex items-center gap-2 text-xs text-slate-500">
                        <span class="inline-block h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        <span>Looking for digital marketing jobs or SEO internships in Kanpur? Visit our <a href="{{ route('frontend.career') }}" class="text-[#FD5528] font-semibold underline hover:text-orange-600">Careers page</a>.</span>
                    </div>

                    {{-- Local Highlights --}}
                    <div class="mt-10 grid grid-cols-3 gap-4 border-t border-slate-200/80 pt-6">
                        <div>
                            <p class="text-2xl font-bold text-slate-900">₹7,999<span class="text-xs text-[#FD5528] font-normal">/mo</span></p>
                            <p class="text-xs text-slate-500 font-medium mt-0.5">Starter SEO Pricing</p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-slate-900">100%</p>
                            <p class="text-xs text-slate-500 font-medium mt-0.5">White-Hat Outreach</p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-slate-900">Weekly</p>
                            <p class="text-xs text-slate-500 font-medium mt-0.5">Transparent Analytics</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="relative mx-auto max-w-md rounded-3xl border border-orange-100 bg-white p-6 shadow-2xl lg:max-w-none">
                        <div class="absolute -top-3 -right-3 rounded-full bg-slate-900 px-3 py-1 text-xs font-semibold text-white shadow">
                            Kanpur Local Expertise
                        </div>
                        <h2 class="text-lg font-bold text-slate-900 mb-2">Request Free Marketing Audit</h2>
                        <p class="text-xs text-slate-500 mb-5">Analyze your Google rankings, search visibility, and competitor gap in Kanpur.</p>
                        <a href="#contact" class="block w-full text-center rounded-xl bg-gradient-to-r from-[#FD5528] to-orange-500 py-3 text-sm font-semibold text-white shadow transition hover:opacity-95">
                            Claim Free 30-Min Audit
                        </a>
                        <ul class="mt-5 space-y-2.5 text-xs text-slate-600 border-t border-slate-100 pt-4">
                            <li class="flex items-center gap-2">
                                <span class="text-[#FD5528]">✔</span> Local Map Pack &amp; GBP Health Check
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FD5528]">✔</span> Competitor Keyword &amp; Backlink Gap
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FD5528]">✔</span> Conversion Tracking &amp; Website Speed Review
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION B: WHO WE HELP IN KANPUR --}}
    <section class="py-16 sm:py-20 bg-slate-50 border-y border-slate-200/70" aria-label="Target Industries">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <p class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Tailored Regional Solutions</p>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                    Who We Help in Kanpur
                </h2>
                <p class="mt-4 text-base text-slate-600 leading-relaxed">
                    We engineer localized search, paid acquisition, and inbound funnels for key commercial sectors across Kanpur. Target industries include:
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-xl mb-4">
                        01
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Leather &amp; Textile Businesses</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        For manufacturers and tanneries in Jajmau, Panki, and Dada Nagar, we target commercial B2B buyers across India, the Middle East, and Europe with technical SEO, Google Search ads, and catalog landing pages.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-xl mb-4">
                        02
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Coaching &amp; Education Providers</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        In hubs like Kakadeo, Geeta Nagar, and Swaroop Nagar, we drive student inquiries and batch enrollments through geo-targeted Google Ads, local map presence, and seasonal Meta student acquisition funnels.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-xl mb-4">
                        03
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Clinics &amp; Healthcare Businesses</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        For multi-specialty clinics, dental practices, and diagnostics in Swaroop Nagar and Sarvodaya Nagar, we implement focused local SEO strategies designed to improve Google Maps visibility and attract genuine patient inquiries from nearby localities.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-xl mb-4">
                        04
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Retail &amp; Showrooms</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        For retailers in Naveen Market, Gumti No. 5, and P-Road, we capture active shoppers searching for verified local stores, festival promotions, and directions via Google Maps.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-xl mb-4">
                        05
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Real Estate &amp; Construction</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        For developers and property advisors across Kanpur's growth corridors, we run targeted lead generation campaigns on Meta and Google Search that filter out tire-kickers and deliver serious property inquiries.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-xl mb-4">
                        06
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Local B2B &amp; Service Brands</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        From logistics providers to accounting and commercial legal firms in Civil Lines, we eliminate wasted ad budget with precision radius fencing and verified call tracking.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION C: DIGITAL MARKETING SERVICES --}}
    <section id="services" class="py-16 sm:py-24 bg-white" aria-label="Services Grid">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Specialized Expertise</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                    Comprehensive Digital Marketing Services in Kanpur
                </h2>
                <p class="mt-4 text-base text-slate-600">
                    We deliver transparent, end-to-end digital marketing solutions built around verified return on investment.
                </p>
            </div>

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                {{-- Service 1: SEO --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Search Engine Optimization (SEO)</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Comprehensive keyword research, technical crawl fixes, content architecture, and organic link building designed to rank your website for high-value commercial searches in Kanpur and nationwide.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ Core Web Vitals &amp; PageSpeed optimization</li>
                            <li>✔ White-hat editorial outreach &amp; digital PR</li>
                            <li>✔ Commercial keyword intent targeting</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ route('frontend.seo') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore SEO Services &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 2: Google Ads / PPC --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Google Ads &amp; Paid Search (PPC)</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Instant high-intent buyer acquisition through Google Search ads, local service ads, and display remarketing. We prevent wasted budget through negative keyword sculpting and conversion tracking.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ Dedicated high-converting landing pages</li>
                            <li>✔ GA4 event &amp; phone call tracking integration</li>
                            <li>✔ Continuous Quality Score &amp; bid optimization</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ url('/page/ppc-ads-google-ads') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore Google Ads Services &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 3: Meta Ads --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Meta Ads (Facebook &amp; Instagram)</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Hyper-targeted Meta lead generation campaigns, dynamic product ads, and visual remarketing funnels engineered to convert Kanpur audiences on mobile feeds and WhatsApp.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ Custom audience retargeting via Meta Pixel</li>
                            <li>✔ Direct WhatsApp &amp; instant lead form campaigns</li>
                            <li>✔ Creative ad copy &amp; split testing</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ route('frontend.page', ['slug' => 'meta-ads']) }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore Meta Ads &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 4: Social Media Marketing --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Social Media Marketing (SMM)</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Build authentic brand reputation and engagement across LinkedIn, Instagram, and Facebook. Strategic content calendars, professional brand storytelling, and proactive audience interaction.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ B2B LinkedIn thought leadership</li>
                            <li>✔ Consistent weekly content scheduling</li>
                            <li>✔ Community management &amp; brand positioning</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ url('/page/social-media-management') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore Social Media Services &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 5: Local SEO & Google 3-Pack --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Local SEO &amp; Google Maps (GBP)</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            Strengthen regional Google Maps presence across Kanpur. We optimize your Google Business Profile, enforce NAP consistency across relevant local directories, and establish genuine customer review workflows.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ Google Business Profile verification &amp; category mapping</li>
                            <li>✔ Local Kanpur directory citation building</li>
                            <li>✔ Review acquisition workflow &amp; schema tags</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ url('/page/local-seo') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            Explore Local SEO Services &rarr;
                        </a>
                    </div>
                </div>

                {{-- Service 6: Packages & Pricing --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] mb-6">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Transparent Monthly Plans</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                            View all published SEO, marketing, and web development packages with clear deliverables, honest prices starting from ₹7,999/month, and zero hidden retainer clauses.
                        </p>
                        <ul class="mt-5 space-y-2 text-xs text-slate-700">
                            <li>✔ Transparent monthly pricing breakdown</li>
                            <li>✔ Flexible tiers for startups and enterprises</li>
                            <li>✔ Dedicated campaign reporting</li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100">
                        <a href="{{ route('frontend.packages') }}" class="inline-flex items-center text-sm font-semibold text-[#FD5528] hover:underline">
                            View All Pricing Packages &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION D: REPORTING & MEASUREMENT --}}
    <section class="py-16 sm:py-20 bg-slate-900 text-white" aria-label="Measurement Framework">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Accountability &amp; Analytics</span>
                <h2 class="mt-2 text-3xl font-bold sm:text-4xl">How We Measure Marketing Performance</h2>
                <p class="mt-4 text-base text-slate-300">
                    We evaluate campaign performance using concrete business metrics rather than superficial vanity impressions.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <div class="text-[#FD5528] font-bold text-sm uppercase tracking-wider mb-2">Metric 01</div>
                    <h3 class="text-lg font-bold text-white">Verified Customer Inquiries</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Tracking qualified contact form submissions, dynamic phone inquiries, and WhatsApp chat starts with full source attribution.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <div class="text-[#FD5528] font-bold text-sm uppercase tracking-wider mb-2">Metric 02</div>
                    <h3 class="text-lg font-bold text-white">Cost Per Lead (CPL)</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Evaluating ad spend against qualified leads to ensure your customer acquisition cost remains sustainable and profitable.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <div class="text-[#FD5528] font-bold text-sm uppercase tracking-wider mb-2">Metric 03</div>
                    <h3 class="text-lg font-bold text-white">Landing Page Conversion Rate</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Continuous A/B testing of headlines, form lengths, and mobile CTA buttons to maximize visitor-to-inquiry ratios.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <div class="text-[#FD5528] font-bold text-sm uppercase tracking-wider mb-2">Metric 04</div>
                    <h3 class="text-lg font-bold text-white">Commercial Keyword Movement</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Tracking verified ranking shifts in Google Search Console for high-intent Kanpur buyer terms week over week.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <div class="text-[#FD5528] font-bold text-sm uppercase tracking-wider mb-2">Metric 05</div>
                    <h3 class="text-lg font-bold text-white">Google Maps Calls &amp; Direction Clicks</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Auditing Google Business Profile analytics to track real phone calls and in-store navigation requests generated organically.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-800 bg-slate-800/60 p-6">
                    <div class="text-[#FD5528] font-bold text-sm uppercase tracking-wider mb-2">Metric 06</div>
                    <h3 class="text-lg font-bold text-white">Transparent Monthly Reports</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                        Direct video reviews and PDF summaries detailing work performed, spend allocation, conversion figures, and next-month priorities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION E: LOCAL CASE STUDY & METHODOLOGY --}}
    <section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200" aria-label="Methodology & Proof">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Demonstrated Approach</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                    Kanpur B2B Growth Methodology
                </h2>
                <p class="mt-4 text-base text-slate-600">
                    How we transform unstructured ad spend into verified commercial inquiries.
                </p>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <span class="inline-block rounded-full bg-emerald-100 px-3 py-1 text-[0.65rem] font-bold text-emerald-800 mb-4">
                        Strategy Focus
                    </span>
                    <h3 class="text-lg font-bold text-slate-900">Negative Keyword Sculpting</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Eliminating wasted clicks from informational student queries and retail searches, focusing 100% of the client ad budget on wholesale, commercial, and enterprise buyers.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <span class="inline-block rounded-full bg-emerald-100 px-3 py-1 text-[0.65rem] font-bold text-emerald-800 mb-4">
                        Conversion Focus
                    </span>
                    <h3 class="text-lg font-bold text-slate-900">Fast Mobile Landing Funnels</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Replacing slow WordPress templates with clean HTML5/Tailwind landing pages loading under 1.2 seconds on mobile devices, immediately lifting form completions.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <span class="inline-block rounded-full bg-slate-100 px-3 py-1 text-[0.65rem] font-bold text-slate-700 mb-4">
                        Live Showcases
                    </span>
                    <h3 class="text-lg font-bold text-slate-900">Verified Client Case Studies</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Explore our verified client platforms (such as Marley Moves logistics and SEO Rocket Pro automation) along with interactive UX prototypes in our live portfolio.
                    </p>
                    <a href="{{ route('frontend.demo') }}" class="mt-4 inline-block text-xs font-semibold text-[#FD5528] hover:underline">
                        Explore Live Work &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION F: PRICING TIERS --}}
    <section class="py-16 sm:py-20 bg-white border-t border-slate-200" aria-label="Pricing Packages">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Transparent Investment</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                    Verified Digital Marketing Packages
                </h2>
                <p class="mt-4 text-base text-slate-600">
                    Honest, predictable monthly pricing with zero hidden retainer lock-ins.
                </p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-3">
                {{-- Starter Tier --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Starter SEO</span>
                        <h3 class="mt-2 text-xl font-bold text-slate-900">Local SEO Plan</h3>
                        <p class="mt-2 text-xs text-slate-500">Perfect for single-location clinics, showrooms, and local professionals.</p>
                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-slate-950">₹7,999</span>
                            <span class="text-sm font-medium text-slate-500">/month</span>
                        </div>
                        <ul class="space-y-3 text-xs text-slate-700">
                            <li>✔ 5 Target Keywords (Kanpur Local Intent)</li>
                            <li>✔ Google Business Profile Audit &amp; Optimization</li>
                            <li>✔ 15 Verified Local Business Citations (Justdial, IndiaMART)</li>
                            <li>✔ On-Page Technical Fixes &amp; Meta Tags</li>
                            <li>✔ Monthly Performance &amp; Call Impression Report</li>
                        </ul>
                    </div>
                    <a href="{{ route('frontend.packages') }}" class="mt-8 block text-center rounded-xl border border-slate-300 py-3 text-sm font-semibold text-slate-700 hover:border-[#FD5528] hover:text-[#FD5528] transition">
                        View Plan Details
                    </a>
                </div>

                {{-- Growth Tier --}}
                <div class="rounded-3xl border-2 border-[#FD5528] p-8 shadow-xl bg-orange-50/20 relative flex flex-col justify-between">
                    <span class="absolute -top-3 right-6 rounded-full bg-[#FD5528] px-3 py-1 text-[0.65rem] font-bold uppercase tracking-wider text-white shadow">
                        Most Popular
                    </span>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Growth Engine</span>
                        <h3 class="mt-2 text-xl font-bold text-slate-900">Standard SEO &amp; Local</h3>
                        <p class="mt-2 text-xs text-slate-500">Comprehensive local SEO + content marketing for growing brands.</p>
                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-slate-950">₹11,999</span>
                            <span class="text-sm font-medium text-slate-500">/month</span>
                        </div>
                        <ul class="space-y-3 text-xs text-slate-700">
                            <li>✔ 10–15 Targeted Commercial Keywords</li>
                            <li>✔ Editorial Outreach &amp; High-Authority Mentions</li>
                            <li>✔ Google Business Profile Management &amp; Map Optimization</li>
                            <li>✔ 4–6 Strategic Blog Posts / Month</li>
                            <li>✔ Bi-Weekly Reporting &amp; Strategy Reviews</li>
                        </ul>
                    </div>
                    <a href="{{ route('frontend.packages') }}" class="mt-8 block text-center rounded-xl bg-[#FD5528] py-3 text-sm font-semibold text-white shadow hover:bg-orange-600 transition">
                        Select Standard Plan
                    </a>
                </div>

                {{-- Custom Tier --}}
                <div class="rounded-3xl border border-slate-200 p-8 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Full-Funnel Growth</span>
                        <h3 class="mt-2 text-xl font-bold text-slate-900">Custom Ads &amp; Marketing</h3>
                        <p class="mt-2 text-xs text-slate-500">Managed Google Ads, Meta PPC, and full-scale lead funnels.</p>
                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-slate-950">Custom</span>
                            <span class="text-sm font-medium text-slate-500">/scope</span>
                        </div>
                        <ul class="space-y-3 text-xs text-slate-700">
                            <li>✔ Managed Search &amp; Display Ad Campaigns</li>
                            <li>✔ Negative Keyword Sculpting &amp; Quality Score Focus</li>
                            <li>✔ Conversion Rate Optimization (CRO) on Landing Pages</li>
                            <li>✔ Dedicated Campaign Manager</li>
                            <li>✔ Full Multi-Channel Analytics Dashboard</li>
                        </ul>
                    </div>
                    <a href="#contact" class="mt-8 block text-center rounded-xl border border-slate-300 py-3 text-sm font-semibold text-slate-700 hover:border-[#FD5528] hover:text-[#FD5528] transition">
                        Request Custom Proposal
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION G: 6-STEP MARKETING PROCESS --}}
    <section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200" aria-label="Our Process">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Methodology</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">Our 6-Step Marketing Delivery Process</h2>
                <p class="mt-4 text-base text-slate-600">
                    A structured, transparent workflow adapted to your actual business goals.
                </p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 01</span>
                    <h3 class="mt-2 text-lg font-bold text-slate-900">Initial Consultation &amp; Goals</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        We clarify your target customer personas, monthly inquiry expectations, and primary business objectives.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 02</span>
                    <h3 class="mt-2 text-lg font-bold text-slate-900">Website &amp; Campaign Assessment</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        We perform technical crawl audits, check existing Google Business Profile status, and evaluate competitor gaps.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 03</span>
                    <h3 class="mt-2 text-lg font-bold text-slate-900">Strategy &amp; Channel Selection</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        We select the optimal channel mix (Local SEO, Google Ads, <a href="{{ route('frontend.page', ['slug' => 'meta-ads']) }}" class="text-[#FD5528] hover:underline font-medium">Meta Ads</a>, or <a href="{{ route('frontend.page', ['slug' => 'content-marketing']) }}" class="text-[#FD5528] hover:underline font-medium">Content Marketing</a>) based on verified ROI potential.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 04</span>
                    <h3 class="mt-2 text-lg font-bold text-slate-900">Campaign Implementation</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        We roll out on-page optimization, build directory citations, launch ad creatives, and configure GA4 event tracking.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 05</span>
                    <h3 class="mt-2 text-lg font-bold text-slate-900">Measurement &amp; Optimization</h3>
                    <p class="mt-2 text-xs text-slate-400 leading-relaxed text-slate-600">
                        Ongoing weekly review of search queries, negative keyword additions, ad bid tuning, and conversion funnel improvements.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Step 06</span>
                    <h3 class="mt-2 text-lg font-bold text-slate-900">Periodic Reporting &amp; Scaling</h3>
                    <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                        Transparent monthly reports detailing inquiries, call counts, search ranking progress, and next-month growth roadmap.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION H: REAL TEAM --}}
    <section class="py-16 sm:py-20 bg-white border-t border-slate-200" aria-label="Leadership & Team">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Our Experts</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">Meet the Team Behind Your Growth</h2>
                <p class="mt-4 text-base text-slate-600">
                    Real software engineers, technical SEOs, and campaign architects based in Kanpur.
                </p>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 max-w-4xl mx-auto">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm text-center">
                    <div class="mx-auto h-24 w-24 rounded-full bg-orange-100 flex items-center justify-center text-[#FD5528] font-bold text-2xl mb-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="Ravindra Verma" class="h-full w-full object-cover" onerror="this.style.display='none'">
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Ravindra Verma</h3>
                    <p class="text-xs font-semibold text-[#FD5528] mt-1">Founder &amp; CEO</p>
                    <p class="mt-3 text-xs text-slate-600 leading-relaxed">
                        Directs technology strategy, full-stack architecture, and technical SEO delivery for regional and international enterprise clients.
                    </p>
                    <a href="{{ route('frontend.owner') }}" class="mt-4 inline-block text-xs font-semibold text-[#FD5528] hover:underline">
                        View Leadership Profile &rarr;
                    </a>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm text-center">
                    <div class="mx-auto h-24 w-24 rounded-full bg-slate-100 flex items-center justify-center text-slate-700 font-bold text-xl mb-4">
                        BCI
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Campaign &amp; SEO Architects</h3>
                    <p class="text-xs font-semibold text-[#FD5528] mt-1">Growth &amp; Analytics Team</p>
                    <p class="mt-3 text-xs text-slate-600 leading-relaxed">
                        Specialists in Google Search Ads, negative keyword sculpting, Google Business Profile management, and GA4 event tracking.
                    </p>
                    <a href="{{ route('frontend.team') }}" class="mt-4 inline-block text-xs font-semibold text-[#FD5528] hover:underline">
                        Meet the Full Team &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION I: KANPUR LOCATION & NAP --}}
    <section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200" aria-label="Location and Contact Information">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid items-center gap-12 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Physical Presence</span>
                    <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                        Our Kanpur Office
                    </h2>
                    <p class="mt-4 text-base text-slate-600 leading-relaxed">
                        We are physically located in Kanpur. You can visit our office, discuss campaign strategy in person, or schedule a virtual consultation.
                    </p>

                    <div class="mt-8 space-y-4 text-sm text-slate-700">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#FD5528] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <div>
                                <span class="font-bold text-slate-900">Office Address:</span>
                                <p class="mt-0.5 text-slate-600">11/42, Krishna Nagar, Kanpur, Uttar Pradesh 208007</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#FD5528] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <div>
                                <span class="font-bold text-slate-900">Phone:</span>
                                <p class="mt-0.5"><a href="tel:+919140092133" class="text-slate-600 hover:text-[#FD5528]">+91 914 0092 133</a></p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#FD5528] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <div>
                                <span class="font-bold text-slate-900">Email:</span>
                                <p class="mt-0.5"><a href="mailto:info@backendcodersindia.com" class="text-slate-600 hover:text-[#FD5528]">info@backendcodersindia.com</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="https://maps.google.com/?q=26.420444,80.372306" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-semibold text-[#FD5528] hover:underline">
                            <span>Open in Google Maps (26.420444, 80.372306)</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="overflow-hidden rounded-3xl border border-slate-200 shadow-lg">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.585250328905!2d80.36973107593673!3d26.436034176934145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c470005a3962b%3A0xe965c4013470b1cb!2sBackend%20Coders%20India%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1713500000000!5m2!1sen!2sin"
                            width="100%"
                            height="350"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Backend Coders India Location in Kanpur">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION J: FAQS --}}
    <section class="py-16 sm:py-20 bg-white border-t border-slate-200" aria-label="Frequently Asked Questions">
        <div class="mx-auto max-w-4xl px-6">
            <div class="text-center">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Common Queries</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">Frequently Asked Questions</h2>
                <p class="mt-3 text-sm text-slate-600">Practical answers for Kanpur business owners considering digital marketing.</p>
            </div>

            <div class="mt-10 space-y-4">
                @foreach ($faqList as $faq)
                    <div class="rounded-2xl border border-slate-200 p-6">
                        <h3 class="text-base font-bold text-slate-900">{{ $faq['q'] }}</h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            {!! $faq['a'] !!}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION K: FINAL CONVERSION & INQUIRY FORM --}}
    <section id="contact" class="py-16 sm:py-24 bg-gradient-to-b from-slate-50 to-white border-t border-slate-200" aria-label="Contact Section">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center mb-12">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Start Growing Online</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                    Get in Touch with Our Kanpur Marketing Team
                </h2>
                <p class="mt-3 text-base text-slate-600">
                    Tell us about your business goals. We will review your current website, analyze competitors in your industry, and propose a transparent growth plan.
                </p>

                {{-- Three Clearly Accessible Conversion Options: Call Now, WhatsApp Us, Request a Free Audit --}}
                <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                    <a href="tel:+919140092133" class="inline-flex items-center gap-2 rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-semibold text-white shadow transition hover:bg-orange-600" id="final-call-btn">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>Call: +91 914 0092 133</span>
                    </a>

                    <a href="https://wa.me/919140092133" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-xl border border-emerald-500 bg-white px-6 py-3 text-sm font-semibold text-emerald-700 shadow-sm transition hover:bg-emerald-50" id="final-whatsapp-btn">
                        <img src="{{ asset('assets/icons/whatsapp.png') }}" class="w-4 h-4" alt="WhatsApp">
                        <span>WhatsApp Chat</span>
                    </a>

                    <a href="#contact-form-container" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]" id="final-form-jump-btn">
                        <span>Fill Audit Form</span>
                    </a>
                </div>
            </div>

            <div class="mx-auto max-w-4xl" id="contact-form-container">
                @include('frontend.form')
            </div>
        </div>
    </section>

</main>
@endsection
