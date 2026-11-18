@extends('component.main')

@php
    $seoBreadcrumbSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => 'https://backendcodersindia.com',
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'SEO Services Kanpur',
                'item' => 'https://backendcodersindia.com/seo',
            ],
        ],
    ];

    $seoServiceSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => 'https://backendcodersindia.com/seo#service',
        'name' => 'Search Engine Optimization (SEO) Services',
        'serviceType' => 'Search Engine Optimization',
        'description' => 'Comprehensive SEO services in Kanpur including technical site audits, on-page keyword optimization, Google Business Profile local ranking, and high-quality link outreach.',
        'url' => 'https://backendcodersindia.com/seo',
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
            'description' => 'Basic SEO package starting at ₹7,999/month for local business visibility in Kanpur.',
            'url' => 'https://backendcodersindia.com/packages',
        ],
    ];

    $seoFaqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'Do you offer ranking guarantees? (Do you guarantee first-page rankings?)',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. No ethical SEO agency guarantees specific search rankings or a #1 position on Google because search engines control their own ranking algorithms. Results depend on competition, website health, technical condition, search intent, and consistent implementation. We focus on transparent white-hat practices, fixing technical blockers, creating helpful content, and delivering measurable organic growth with verifiable monthly reporting.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How long does SEO take to show results?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'SEO timelines vary depending on your domain age, technical website health, market competition, and content quality. Foundational fixes and local search visibility typically show initial momentum within 60 to 90 days, while competitive commercial queries and broad industry terms usually require 3 to 6 months of steady content publishing and authoritative link acquisition.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How much do SEO services cost in Kanpur?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Our monthly SEO packages in Kanpur start at ₹7,999/month for the Basic SEO Plan (local business visibility, foundational citations, 5 target keywords, and monthly reporting). More competitive business expansion plans are ₹11,999/month, and premium enterprise campaigns are ₹15,999/month. Complete package inclusions are published on our pricing packages page.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Do you provide local SEO services?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes. We provide dedicated local search engine optimization for Kanpur and Uttar Pradesh businesses, including Google Business Profile optimization, local citation cleanup, Google Maps 3-Pack ranking strategy, and localized service landing pages. Visit our dedicated Local SEO services in Kanpur page for comprehensive details.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'What is the difference between Local SEO and National SEO?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Local SEO targets geographic searches in Kanpur and Uttar Pradesh (such as Google Maps 3-Pack and localized service terms). National SEO targets pan-India commercial queries without location modifiers, requiring deeper topical clusters and broader digital PR.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How do you acquire backlinks for our website?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We adhere strictly to Google Search Essentials. We acquire links through legitimate industry citations, guest editorial outreach, and valuable data-driven resources. We do not use automated link farms, paid private blog networks (PBNs), or spammy techniques that risk search penalties.',
                ],
            ],
        ],
    ];
@endphp

@push('head')
    <script type="application/ld+json">{!! json_encode($seoBreadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($seoServiceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($seoFaqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

@section('content')
@php
    $sections = $page?->sections ?? collect();
    $heroSection = $sections->firstWhere('type', 'hero');
    $heroItem = $heroSection?->items?->first();
    $aboutSection = $sections->firstWhere(fn ($section) => in_array(\Illuminate\Support\Str::lower((string) $section->type), ['about', 'content', 'text']));
    $aboutItem = $aboutSection?->items?->first();
    $servicesSection = $sections->firstWhere(fn ($section) => in_array(\Illuminate\Support\Str::lower((string) $section->type), ['services', 'cards']));
    $featuresSection = $sections->firstWhere(fn ($section) => in_array(\Illuminate\Support\Str::lower((string) $section->type), ['features', 'faq']));
    $reportSection = $sections->firstWhere(fn ($section) => in_array(\Illuminate\Support\Str::lower((string) $section->type), ['report', 'monthly_report']));
    $checklistSection = $sections->firstWhere(fn ($section) => in_array(\Illuminate\Support\Str::lower((string) $section->type), ['checklist', 'audit_checklist']));
    $ctaSection = $sections->firstWhere(fn ($section) => \Illuminate\Support\Str::lower((string) $section->type) === 'cta');

    $mediaUrl = function ($path) {
        if (! $path) {
            return asset('assets/images/banner.png');
        }

        $path = trim(str_replace('\\', '/', (string) $path));

        if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://', '//'])) {
            return $path;
        }

        $path = ltrim($path, '/');

        if (\Illuminate\Support\Str::startsWith($path, 'public/')) {
            $path = \Illuminate\Support\Str::after($path, 'public/');
        }

        $storagePath = \Illuminate\Support\Str::startsWith($path, 'storage/')
            ? \Illuminate\Support\Str::after($path, 'storage/')
            : $path;

        if (\Illuminate\Support\Facades\Storage::disk('public')->exists($storagePath)) {
            return route('media.file', ['path' => $storagePath]);
        }

        if (file_exists(public_path($path))) {
            return asset($path);
        }

        return asset('assets/images/banner.png');
    };

    $defaultHero = [
        'title' => 'SEO Company in Kanpur – <span class="text-[#FD5528]">Professional SEO Services</span> That Generate Leads',
        'description_1' => 'Search engine optimization (SEO) improves a website\'s organic visibility across Google and AI search engines through technical crawlability fixes, keyword-mapped content, and authoritative signals. Backend Coders India delivers managed monthly SEO for Kanpur and regional Indian businesses, helping local service firms, manufacturers, and ecommerce brands earn qualified organic inquiries without paying for continuous ad clicks.',
        'description_2' => 'Plans include keyword research, technical site improvements, helpful content production, and monthly progress reviews. Fixed monthly packages start at ₹7,999/month; search positions and lead volumes are not guaranteed.',
        'button_text' => 'Get a Free SEO Audit',
        'button_url' => '#contact',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71',
    ];

    $defaultAbout = [
        'title' => 'How Do Professional SEO Services in Kanpur Drive Sustainable Growth?',
        'description' => 'We analyze how potential customers search for your products and identify practical improvements across website code, information architecture, and content clarity. By focusing on verified technical fixes and high-intent regional keywords, we help Kanpur businesses build durable search authority across Uttar Pradesh and national Indian markets.',
    ];

    $defaultServices = [
        ['label' => 'On-Site Optimization', 'icon' => 'https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff', 'title' => 'On-page search optimization', 'description' => 'Improve how people and search engines understand your pages through clear titles, headings, useful content, and internal links.', 'tags' => ['Page titles', 'Content', 'Links']],
        ['label' => 'Authority Building', 'icon' => 'https://img.icons8.com/?size=100&id=86127&format=png&color=ffffff', 'title' => 'Off-page search optimization', 'description' => 'Build credibility through relevant mentions, useful partnerships, and links earned from appropriate sources.', 'tags' => ['Mentions', 'Partnerships', 'Links']],
        ['label' => 'Site Performance', 'icon' => 'https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff', 'title' => 'Technical site optimization', 'description' => 'Address site speed, mobile usability, structured data, crawlability, and indexing issues that affect discovery and use.', 'tags' => ['Speed', 'Indexing', 'Usability']],
        ['label' => 'Local Visibility', 'icon' => 'https://img.icons8.com/?size=100&id=7880&format=png&color=ffffff', 'title' => 'Local search optimization', 'description' => 'Keep business details accurate, make location information easy to find, and help nearby customers understand your services.', 'tags' => ['Business details', 'Locations', 'Reviews']],
        ['label' => 'Online Store Growth', 'icon' => 'https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff', 'title' => 'E-commerce search optimization', 'description' => 'Improve product and category pages with clear information architecture, useful descriptions, and accessible navigation.', 'tags' => ['Products', 'Categories', 'Navigation']],
        ['label' => 'Search Insights', 'icon' => 'https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff', 'title' => 'Site Audit & Strategy', 'description' => 'Review site performance, competing results, and search data to identify useful next steps and build a maintainable plan.', 'tags' => ['Audit', 'Strategy', 'Analysis']],
    ];

    $defaultFeatures = [
        'Keyword Research & Search Intent Mapping',
        'Technical Site & Core Web Vitals Audit',
        'Helpful Content Optimization & Structure',
        'Crawlability & Indexing Improvements',
        'Ethical White-Hat Outreach & Mentions',
        'Kanpur Local Competitor Gap Analysis',
        'Structured Data & Schema Implementation',
        'Google Business Profile Integration',
        'Transparent Monthly Reporting & Analytics',
    ];

    $defaultCta = [
        'title' => 'Build an Organic Search Strategy That Supports Growth',
        'description' => 'Work with an experienced SEO team on a practical strategy for technical health, useful content, and sustainable search visibility.',
        'button_text' => 'Start Your SEO Journey',
        'button_url' => '#contact',
    ];

    // Preserved and enhanced sticky jump section anchors
    $sectionAnchors = collect([
        ['id' => 'overview', 'label' => 'Overview'],
        ['id' => 'about-seo', 'label' => 'Why SEO'],
        ['id' => 'services', 'label' => 'Core Services'],
        ['id' => 'sample-report', 'label' => 'Sample Report'],
        ['id' => 'audit-checklist', 'label' => 'Audit Checklist'],
        ['id' => 'seo-vs-local', 'label' => 'SEO vs Local SEO'],
        ['id' => 'process', 'label' => 'Process & Workflow'],
        ['id' => 'packages', 'label' => 'Pricing Packages'],
        ['id' => 'faqs', 'label' => 'Common FAQs'],
        ['id' => 'contact', 'label' => 'Free SEO Audit'],
    ]);
@endphp

<main class="bg-white">
    @auth
        <section class="border-b border-slate-200 bg-slate-50/80">
            <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">CMS Links</p>
                    <h2 class="mt-1 text-lg font-semibold text-slate-900">Manage SEO page</h2>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('pages.index') }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">All Pages</a>
                    <a href="{{ route('pages.create') }}" class="rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-orange-600">Create Page</a>
                    @if($page?->exists)
                        <a href="{{ route('pages.edit', $page->id) }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">Edit This Page</a>
                    @endif
                </div>
            </div>
        </section>
    @endauth

    {{-- STICKY JUMP TO SECTION NAVIGATION BAR (ALL 10 VALID ANCHORS) --}}
    <section class="border-b border-slate-200 bg-white/95 sticky top-0 z-20 shadow-sm backdrop-blur-md">
        <div class="mx-auto max-w-7xl px-6 py-3.5">
            <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                <span class="text-xs font-bold uppercase tracking-[0.25em] text-slate-400 mr-1">Jump to section</span>
                @foreach($sectionAnchors as $anchor)
                    <a href="#{{ $anchor['id'] }}" class="rounded-full border border-slate-200 bg-slate-50/80 px-3.5 py-1.5 text-xs font-semibold text-slate-700 transition hover:border-[#FD5528] hover:bg-orange-50 hover:text-[#FD5528]">
                        {{ $anchor['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 1. OVERVIEW / HERO SECTION --}}
    <section id="overview" class="bg-white py-16 scroll-mt-16">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-6 lg:grid-cols-2 lg:items-center">
            <div>
                <div class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-3.5 py-1 text-xs font-semibold text-[#FD5528] mb-4">
                    SEO Company in Kanpur • Plans from ₹7,999/mo
                </div>
                <h1 class="text-4xl font-bold leading-tight text-gray-900 sm:text-5xl">
                    {!! $page?->title ?: ($heroItem?->title ?: $defaultHero['title']) !!}
                </h1>

                @if($heroItem?->description || $defaultHero['description_1'])
                    <div class="mt-6 text-gray-600 space-y-3 leading-relaxed">
                        {!! $heroItem?->description ?: $defaultHero['description_1'] !!}
                    </div>
                @endif

                @if(data_get($heroItem, 'extra.sub_text', $defaultHero['description_2']))
                    <div class="mt-4 text-gray-600 space-y-3 leading-relaxed">
                        {!! data_get($heroItem, 'extra.sub_text', $defaultHero['description_2']) !!}
                    </div>
                @endif

                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="#contact"
                        class="inline-block rounded-xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-lg shadow-orange-200 transition hover:bg-orange-600">
                        {{ data_get($heroItem, 'extra.button', data_get($heroItem, 'extra.button_text', $defaultHero['button_text'])) }}
                    </a>
                    <a href="#packages"
                        class="inline-block rounded-xl border border-slate-300 bg-white px-6 py-3 font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">
                        View Monthly Packages
                    </a>
                </div>
            </div>

            <div>
                <img
                    src="{{ $heroItem?->image ? $mediaUrl($heroItem->image) : $defaultHero['image'] }}"
                    alt="{{ strip_tags((string) ($heroItem?->title ?: 'SEO Company in Kanpur')) }}"
                    class="w-full rounded-2xl object-cover shadow-lg"
                >
            </div>
        </div>
    </section>

    {{-- 2. ABOUT SEO SECTION (SECTION A) --}}
    <section id="about-seo" class="bg-gray-50 py-16 scroll-mt-16 border-t border-slate-200/80">
        <div class="mx-auto max-w-7xl px-6 text-center">
            <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Why Search Optimization</span>
            <h2 class="mt-2 text-3xl font-bold text-gray-900">
                {!! $aboutItem?->title ?: $defaultAbout['title'] !!}
            </h2>

            @if($aboutItem?->description || $defaultAbout['description'])
                <div class="mx-auto mt-4 max-w-3xl text-gray-600 space-y-3 leading-relaxed">
                    {!! $aboutItem?->description ?: $defaultAbout['description'] !!}
                </div>
            @endif
        </div>
    </section>

    {{-- 3. CORE SERVICES SECTION --}}
    <section id="services" class="bg-white py-16 scroll-mt-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center mb-12">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Capabilities</span>
                <h2 class="mt-2 text-3xl font-bold text-gray-900">
                    What Specific Capabilities Are Included in Our SEO Campaigns?
                </h2>
                <p class="mt-3 text-sm text-gray-600">Tailored optimization covering technical code, helpful content, and local authority without artificial ranking guarantees.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach(($servicesSection?->items ?? collect())->isNotEmpty() ? $servicesSection->items : collect($defaultServices) as $service)
                    @php
                        $serviceExtra = data_get($service, 'extra', []);
                        $serviceLabel = data_get($service, 'label', data_get($serviceExtra, 'label'));
                        $serviceIcon = data_get($service, 'image', data_get($serviceExtra, 'icon'));
                        $serviceTitle = data_get($service, 'title');
                        $serviceDescription = data_get($service, 'description');
                        $serviceTags = data_get($serviceExtra, 'tags', data_get($service, 'tags', []));
                    @endphp
                    <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
                        <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 group-hover:backdrop-blur-[24px]"></div>
                        <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                            @if($serviceLabel)
                                <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">{{ $serviceLabel }}</span>
                            @endif
                            <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
                                @if($serviceIcon)
                                    <img src="{{ $mediaUrl($serviceIcon) }}" class="h-14 w-14" alt="{{ strip_tags((string) $serviceTitle) }}">
                                @else
                                    <span class="text-2xl font-bold text-white">{{ strtoupper(mb_substr(strip_tags((string) $serviceTitle), 0, 1)) }}</span>
                                @endif
                            </div>
                            <h3 class="text-xl font-semibold">{{ strip_tags((string) $serviceTitle) }}</h3>
                            @if($serviceDescription)
                                <div class="text-sm text-gray-600 leading-relaxed">
                                    {!! $serviceDescription !!}
                                </div>
                            @endif
                            @if(is_array($serviceTags) && count($serviceTags))
                                <div class="flex flex-wrap justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                                    @foreach($serviceTags as $tag)
                                        <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION B — SAMPLE MONTHLY SEO REPORT --}}
    <section id="sample-report" class="bg-gray-50 py-16 scroll-mt-16 border-t border-slate-200">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center mb-12">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-orange-100 px-3.5 py-1 text-xs font-bold uppercase tracking-wider text-[#FD5528]">
                    Illustrative Sample Report
                </span>
                <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">
                    What Does a Monthly SEO Performance Report Look Like?
                </h2>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Every month, clients receive transparent documentation detailing organic search visibility trends, technical fixes, verified keyword progress, and upcoming planned focus areas. Below is an illustrative demonstration report showing our standard review structure.
                </p>
                <div class="mt-3 inline-block rounded-lg bg-amber-50 border border-amber-200 px-4 py-2 text-xs font-medium text-amber-800">
                    <strong>Notice:</strong> This is an illustrative sample using fictional demonstration data for format preview. It does not represent individual client results or reveal confidential client information.
                </div>
            </div>

            <!-- Dashboard Card Container -->
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl">
                <!-- Report Header Bar -->
                <div class="flex flex-col gap-4 border-b border-slate-200 bg-slate-900 px-6 py-5 text-white sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                            <span class="text-xs font-semibold uppercase tracking-widest text-emerald-400">Monthly Performance Review</span>
                        </div>
                        <h3 class="mt-1 text-lg font-bold">Client Demonstration Report • Organic Search Audit</h3>
                    </div>
                    <div class="flex items-center gap-3 text-xs text-slate-300">
                        <span class="rounded-lg bg-white/10 px-3 py-1.5 font-medium">Reporting Period: 01 Oct 2026 – 31 Oct 2026</span>
                        <span class="rounded-lg bg-[#FD5528]/20 text-[#FD5528] px-3 py-1.5 font-bold border border-[#FD5528]/30">Kanpur Regional Scope</span>
                    </div>
                </div>

                <!-- KPI Metrics Grid -->
                <div class="grid grid-cols-2 gap-4 p-6 sm:grid-cols-4 border-b border-slate-100 bg-slate-50/50">
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-4 shadow-xs">
                        <span class="text-xs font-medium text-slate-500">Organic Clicks</span>
                        <div class="mt-1 flex items-baseline gap-2">
                            <span class="text-2xl font-black text-slate-900">4,820</span>
                            <span class="text-xs font-semibold text-emerald-600">+18.4%</span>
                        </div>
                        <span class="mt-1 block text-[11px] text-slate-400">Google Search Console</span>
                    </div>
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-4 shadow-xs">
                        <span class="text-xs font-medium text-slate-500">Search Impressions</span>
                        <div class="mt-1 flex items-baseline gap-2">
                            <span class="text-2xl font-black text-slate-900">118.4K</span>
                            <span class="text-xs font-semibold text-emerald-600">+24.1%</span>
                        </div>
                        <span class="mt-1 block text-[11px] text-slate-400">Regional &amp; Pan-India</span>
                    </div>
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-4 shadow-xs">
                        <span class="text-xs font-medium text-slate-500">Average Search CTR</span>
                        <div class="mt-1 flex items-baseline gap-2">
                            <span class="text-2xl font-black text-slate-900">4.07%</span>
                            <span class="text-xs font-semibold text-emerald-600">+0.4%</span>
                        </div>
                        <span class="mt-1 block text-[11px] text-slate-400">Search Snippet Optimization</span>
                    </div>
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-4 shadow-xs">
                        <span class="text-xs font-medium text-slate-500">Tracked Enquiries</span>
                        <div class="mt-1 flex items-baseline gap-2">
                            <span class="text-2xl font-black text-slate-900">42</span>
                            <span class="text-xs font-semibold text-emerald-600">+11</span>
                        </div>
                        <span class="mt-1 block text-[11px] text-slate-400">Forms &amp; Verified Calls</span>
                    </div>
                </div>

                <!-- 2-Column Detail: Technical Fixes & Keyword Progress -->
                <div class="grid grid-cols-1 gap-6 p-6 lg:grid-cols-2">
                    <!-- Column 1: Technical & Content Fixes Completed -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50/60 p-5">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wide">Tasks Completed in Reporting Period</h4>
                            <span class="text-xs font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">All Verified</span>
                        </div>
                        <ul class="space-y-3 text-xs text-slate-700">
                            <li class="flex items-start gap-2.5">
                                <span class="h-4 w-4 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">✓</span>
                                <div>
                                    <strong class="font-semibold text-slate-900">Resolved 14 Canonical Inconsistencies:</strong> Fixed conflicting HTTP vs HTTPS URL variations and eliminated self-canonical loops.
                                </div>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="h-4 w-4 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">✓</span>
                                <div>
                                    <strong class="font-semibold text-slate-900">Core Web Vitals LCP Optimization:</strong> Preloaded primary hero banner assets and optimized WebP images, reducing mobile LCP from 3.8s to 1.8s.
                                </div>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="h-4 w-4 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">✓</span>
                                <div>
                                    <strong class="font-semibold text-slate-900">On-Page Content Architecture:</strong> Updated 3 core regional landing pages with search-intent mapped H2/H3 headers and Schema.org FAQ markup.
                                </div>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="h-4 w-4 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">✓</span>
                                <div>
                                    <strong class="font-semibold text-slate-900">Internal Link Clean-up:</strong> Resolved 8 broken internal links and removed 301 redirect hops from main navigation.
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Column 2: Sample Search Console Queries & Next Month Plan -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50/60 p-5">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wide">Next Month's Planned Work</h4>
                            <span class="text-xs font-semibold text-[#FD5528] bg-orange-100 px-2 py-0.5 rounded-full">Roadmap Priority</span>
                        </div>
                        <ul class="space-y-3 text-xs text-slate-700">
                            <li class="flex items-start gap-2.5">
                                <span class="h-4 w-4 rounded-full bg-orange-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">&rarr;</span>
                                <div>
                                    <strong class="font-semibold text-slate-900">Google Business Profile Audit:</strong> Verify Name-Address-Phone (NAP) consistency across verified regional trade directories and local portals.
                                </div>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="h-4 w-4 rounded-full bg-orange-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">&rarr;</span>
                                <div>
                                    <strong class="font-semibold text-slate-900">Helpful Content Cluster:</strong> Draft and publish 2 in-depth commercial buyer guides targeting Kanpur manufacturing and distribution inquiries.
                                </div>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="h-4 w-4 rounded-full bg-orange-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">&rarr;</span>
                                <div>
                                    <strong class="font-semibold text-slate-900">Conversion Event Calibration:</strong> Refine Google Tag Manager GA4 form engagement triggers to isolate verified business phone enquiries.
                                </div>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="h-4 w-4 rounded-full bg-orange-500 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">&rarr;</span>
                                <div>
                                    <strong class="font-semibold text-slate-900">Structured Data Expansion:</strong> Add JSON-LD Product &amp; Service schema across secondary offerings.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Summary Bar -->
                <div class="border-t border-slate-100 bg-slate-50 px-6 py-4 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-600 gap-2">
                    <span>Generated by Backend Coders India Analytics &amp; Reporting Suite</span>
                    <a href="#contact" class="font-semibold text-[#FD5528] hover:underline">Request a Free Audit for Your Domain &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION C — SEO AUDIT CHECKLIST --}}
    <section id="audit-checklist" class="bg-white py-16 scroll-mt-16 border-t border-slate-200">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center mb-12">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Technical Diligence</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-900 sm:text-4xl">
                    Comprehensive 10-Point SEO Audit Checklist
                </h2>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Before making changes or publishing content, we evaluate the 10 foundational pillars of search health. This checklist outlines the exact technical and structural criteria evaluated during our client audits.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                @php
                    $auditChecklist = [
                        [
                            'num' => '01',
                            'title' => 'Crawlability & Indexation Status',
                            'desc' => 'We check server response codes (200, 301, 404, 500), XML sitemap validity, Googlebot crawl budget, and verify that all key commercial landing pages are indexed without unneeded crawl blocks.',
                            'tag' => 'Core Architecture',
                        ],
                        [
                            'num' => '02',
                            'title' => 'Robots.txt & Meta Directives',
                            'desc' => 'We inspect robots.txt syntax, disallow rules, and page-level noindex/nofollow headers to make sure search engine crawlers can access public assets and APIs without exposing private endpoints.',
                            'tag' => 'Crawl Directives',
                        ],
                        [
                            'num' => '03',
                            'title' => 'Canonical Tags & Redirect Architecture',
                            'desc' => 'We check self-referencing canonical URLs, eliminate duplicate protocol versions (HTTP vs. HTTPS and non-www vs. www), and resolve multi-hop 301 redirect chains.',
                            'tag' => 'URL Hygiene',
                        ],
                        [
                            'num' => '04',
                            'title' => 'Page Titles, Meta Descriptions & Search Snippets',
                            'desc' => 'We review length limits, CTR keyword positioning, unique per-page metadata, and clear value propositions tailored to Kanpur and target national commercial queries.',
                            'tag' => 'Search Snippets',
                        ],
                        [
                            'num' => '05',
                            'title' => 'Heading Hierarchy & Content Search Intent',
                            'desc' => 'We ensure exactly one semantic H1 tag per page, followed by logical H2/H3 sub-sections that answer search intent with factual evidence and helpful service information.',
                            'tag' => 'On-Page Content',
                        ],
                        [
                            'num' => '06',
                            'title' => 'Internal Linking & Broken Link Detection',
                            'desc' => 'We audit site-wide internal link distribution, eliminate dead 404 links, ensure no orphan pages exist, and apply descriptive contextual anchor text across related services.',
                            'tag' => 'Link Flow',
                        ],
                        [
                            'num' => '07',
                            'title' => 'Mobile Usability & Core Web Vitals',
                            'desc' => 'We evaluate real user metrics for Largest Contentful Paint (LCP), Cumulative Layout Shift (CLS), and Interaction to Next Paint (INP) to guarantee fast loading across smartphones.',
                            'tag' => 'Performance',
                        ],
                        [
                            'num' => '08',
                            'title' => 'Image Optimization, Dimensions & WebP Formats',
                            'desc' => 'We check for modern WebP compression, explicit width and height dimensions to prevent content reflows, and descriptive image alt tags for accessibility and image search.',
                            'tag' => 'Media Health',
                        ],
                        [
                            'num' => '09',
                            'title' => 'Structured Data & Schema.org Validation',
                            'desc' => 'We implement and validate JSON-LD structured data including Organization, Service, BreadcrumbList, and FAQPage schemas against Google Rich Results test specifications.',
                            'tag' => 'Schema & Entities',
                        ],
                        [
                            'num' => '10',
                            'title' => 'Local SEO Signals & Conversion Tracking',
                            'desc' => 'We verify Google Business Profile address accuracy, local Kanpur citations, and configure Google Tag Manager / GA4 to track click-to-call, WhatsApp clicks, and form submissions.',
                            'tag' => 'Measurement',
                        ],
                    ];
                @endphp

                @foreach($auditChecklist as $item)
                    <div class="flex gap-4 rounded-2xl border border-slate-200/90 bg-white p-6 shadow-sm hover:shadow-md hover:border-[#FD5528]/40 transition duration-300">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-[#FD5528] to-orange-600 text-sm font-black text-white shadow-sm">
                            {{ $item['num'] }}
                        </div>
                        <div>
                            <div class="flex flex-wrap items-center gap-2">
                                <h3 class="text-base font-bold text-slate-900">{{ $item['title'] }}</h3>
                                <span class="rounded-full bg-slate-100 px-2.5 py-0.5 text-[10px] font-semibold text-slate-600 border border-slate-200">{{ $item['tag'] }}</span>
                            </div>
                            <p class="mt-2 text-xs sm:text-sm text-slate-600 leading-relaxed">
                                {{ $item['desc'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION D — DIFFERENCE BETWEEN SEO AND LOCAL SEO --}}
    <section id="seo-vs-local" class="bg-gray-50 py-16 scroll-mt-16 border-t border-slate-200">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center mb-12">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Strategy Distinction</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-900 sm:text-4xl">
                    What Is the Difference Between Organic SEO and Local SEO?
                </h2>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    While both strategies improve visibility on Google, they address fundamentally different search behaviors, geographic scopes, and technical requirements.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2">
                <!-- Card 1: Organic SEO -->
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full bg-blue-50 px-3 py-1 text-xs font-bold text-blue-700 mb-4 border border-blue-200">
                            Broad Search Engine Optimization (SEO)
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Organic SEO</h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            Improving a website's organic visibility across Google search results for relevant commercial and informational queries, regardless of the searcher's physical proximity.
                        </p>

                        <div class="mt-6 space-y-3.5 text-xs sm:text-sm text-slate-700">
                            <div class="flex items-start gap-2.5">
                                <span class="text-[#FD5528] font-bold text-base">&bull;</span>
                                <div><strong class="font-semibold text-slate-900">Geographic Scope:</strong> State-wide, pan-India, and international markets without geographic boundaries.</div>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="text-[#FD5528] font-bold text-base">&bull;</span>
                                <div><strong class="font-semibold text-slate-900">Search Engine Surfaces:</strong> Traditional blue organic links, rich snippets, Google discover, and AI answer engines.</div>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="text-[#FD5528] font-bold text-base">&bull;</span>
                                <div><strong class="font-semibold text-slate-900">Core Drivers:</strong> Deep topical authority, comprehensive content hubs, technical crawlability, and earned editorial links.</div>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="text-[#FD5528] font-bold text-base">&bull;</span>
                                <div><strong class="font-semibold text-slate-900">Best Suited For:</strong> SaaS platforms, e-commerce stores, manufacturing exporters, and B2B services serving national markets.</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-slate-100">
                        <span class="text-xs font-semibold text-slate-500">Focus: Topical authority &amp; national commercial queries</span>
                    </div>
                </div>

                <!-- Card 2: Local SEO -->
                <div class="rounded-3xl border-2 border-[#FD5528]/80 bg-gradient-to-b from-white via-orange-50/20 to-orange-50/40 p-8 shadow-md flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full bg-orange-100 px-3 py-1 text-xs font-bold text-[#FD5528] mb-4 border border-orange-200">
                            Geographic Proximity Optimization
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Local SEO</h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            Improving discovery for location-specific searches and regional discovery surfaces, including Google Maps, Google Business Profile, and localized search queries.
                        </p>

                        <div class="mt-6 space-y-3.5 text-xs sm:text-sm text-slate-700">
                            <div class="flex items-start gap-2.5">
                                <span class="text-[#FD5528] font-bold text-base">&bull;</span>
                                <div><strong class="font-semibold text-slate-900">Geographic Scope:</strong> Highly focused on Kanpur, Unnao, Lucknow, and specific service territories across Uttar Pradesh.</div>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="text-[#FD5528] font-bold text-base">&bull;</span>
                                <div><strong class="font-semibold text-slate-900">Search Engine Surfaces:</strong> Google Maps Local 3-Pack, localized mobile search results, and Google Business Profile panels.</div>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="text-[#FD5528] font-bold text-base">&bull;</span>
                                <div><strong class="font-semibold text-slate-900">Core Drivers:</strong> Verified Google Business Profile signals, Name-Address-Phone (NAP) consistency, and authentic client reviews.</div>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="text-[#FD5528] font-bold text-base">&bull;</span>
                                <div><strong class="font-semibold text-slate-900">Best Suited For:</strong> Local service providers, professional clinics, physical retail shops, regional contractors, and local distributors.</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-orange-200/60">
                        <a href="{{ route('frontend.page', ['slug' => 'local-seo']) }}" class="inline-flex items-center gap-2 text-sm font-bold text-[#FD5528] hover:text-orange-700 transition">
                            <span>Explore dedicated Local SEO services in Kanpur</span>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION E — PROCESS & DELIVERABLES SECTION --}}
    <section id="process" class="bg-white py-16 scroll-mt-16 border-t border-slate-200">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center mb-12">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Our Methodology</span>
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                    What Strategic Steps <span class="text-[#FD5528]">Drive Higher Organic Search Rankings?</span>
                </h2>
                <p class="mt-3 text-sm text-gray-600">
                    A structured 6-step workflow designed for sustainable search equity, crawl reliability, and transparent reporting.
                </p>
            </div>

            @php
                $seoWorkflowSteps = [
                    [
                        'step' => 'Step 1',
                        'title' => 'Initial Website & Business Assessment',
                        'desc' => 'We audit your existing search visibility, crawl health, Google Search Console performance data, and understand your actual commercial services and target customers.',
                    ],
                    [
                        'step' => 'Step 2',
                        'title' => 'Keyword & Competitor Research',
                        'desc' => 'We identify high-intent search queries used by buyers in Kanpur and target markets, mapping commercial keywords to specific landing pages while evaluating local competitor gaps.',
                    ],
                    [
                        'step' => 'Step 3',
                        'title' => 'Technical & On-Page SEO Review',
                        'desc' => 'We resolve technical crawl blockers, robots.txt issues, canonical conflicts, schema markup gaps, and optimize page titles, headings, and internal linking structures.',
                    ],
                    [
                        'step' => 'Step 4',
                        'title' => 'Prioritized Implementation',
                        'desc' => 'We execute website improvements systematically: fixing high-impact code errors first, followed by content enhancements, structured data, and local citation cleanups.',
                    ],
                    [
                        'step' => 'Step 5',
                        'title' => 'Performance Measurement',
                        'desc' => 'We configure Google Tag Manager and GA4 conversion events to monitor organic impressions, click-through rates, verified phone calls, and lead form submissions accurately.',
                    ],
                    [
                        'step' => 'Step 6',
                        'title' => 'Reporting & Ongoing Improvements',
                        'desc' => 'We deliver comprehensive monthly performance reviews detailing organic progress, technical health, and prioritized action items for the upcoming cycle.',
                    ],
                ];
            @endphp

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($seoWorkflowSteps as $ws)
                    <div class="p-6 bg-slate-50 border border-slate-200/80 rounded-2xl shadow-xs transition duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:border-[#FD5528]/40">
                        <span class="inline-block rounded-md bg-[#FD5528] px-2.5 py-0.5 text-[11px] font-bold uppercase tracking-wider text-white">{{ $ws['step'] }}</span>
                        <div class="mt-3 font-bold text-base text-gray-900">{{ $ws['title'] }}</div>
                        <div class="mt-2 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            {{ $ws['desc'] }}
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Ethical Assurance Note -->
            <div class="mt-10 mx-auto max-w-3xl rounded-2xl bg-amber-50 border border-amber-200 p-5 text-center text-xs text-amber-900 leading-relaxed">
                <strong>Our Commitment to Ethical Practices:</strong> Search engine algorithms update continually. We do not promise fixed rankings, guaranteed leads, or specific positions within a fixed timeframe. Our focus is delivering verifiable technical health, high-intent helpful content, and transparent communication.
            </div>
        </div>
    </section>

    {{-- 5. PRICING PACKAGES SECTION --}}
    <section id="packages" class="bg-gray-50 py-16 scroll-mt-16 border-t border-slate-200">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center mb-12">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Transparent Investment</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-900 sm:text-4xl">
                    How Much Do Monthly SEO Packages Cost in Kanpur?
                </h2>
                <p class="mt-3 text-sm text-slate-600">Fixed monthly plans with verified deliverables and white-hat outreach. Synchronized with our official pricing.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Starter Growth</span>
                        <h3 class="mt-2 text-xl font-bold text-slate-900">Basic SEO Plan</h3>
                        <p class="mt-2 text-xs text-slate-500">Ideal for local Kanpur businesses targeting regional queries.</p>
                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-slate-950">₹7,999</span>
                            <span class="text-sm font-medium text-slate-500">/monthly</span>
                        </div>
                        <ul class="space-y-3 text-xs text-slate-700">
                            <li>✔ Keyword Research (5 Target Keywords)</li>
                            <li>✔ Foundational Local Citations &amp; Directory Links</li>
                            <li>✔ On-Page SEO &amp; Meta Tags Optimization</li>
                            <li>✔ Basic Technical SEO &amp; Crawlability Fixes</li>
                            <li>✔ Weekly &amp; Monthly Performance Reports</li>
                        </ul>
                    </div>
                    <a href="{{ route('frontend.packages') }}" class="mt-8 block text-center rounded-xl border border-slate-300 py-3 text-sm font-semibold text-slate-700 hover:border-[#FD5528] hover:text-[#FD5528] transition">
                        View Plan In Packages
                    </a>
                </div>

                <div class="rounded-3xl border-2 border-[#FD5528] p-8 shadow-xl bg-orange-50/20 relative flex flex-col justify-between">
                    <span class="absolute -top-3 right-6 rounded-full bg-[#FD5528] px-3 py-1 text-[0.65rem] font-bold uppercase tracking-wider text-white shadow">
                        Recommended
                    </span>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Business Expansion</span>
                        <h3 class="mt-2 text-xl font-bold text-slate-900">Standard SEO Plan</h3>
                        <p class="mt-2 text-xs text-slate-500">Comprehensive local and national ranking strategy.</p>
                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-slate-950">₹11,999</span>
                            <span class="text-sm font-medium text-slate-500">/monthly</span>
                        </div>
                        <ul class="space-y-3 text-xs text-slate-700">
                            <li>✔ Keyword Research (10–15 Keywords)</li>
                            <li>✔ Targeted Editorial Outreach &amp; High-Authority Mentions</li>
                            <li>✔ Google Business Profile &amp; Map Optimization</li>
                            <li>✔ 4–6 Strategic Blog Articles / Month</li>
                            <li>✔ Bi-Weekly Performance &amp; Traffic Reviews</li>
                        </ul>
                    </div>
                    <a href="{{ route('frontend.packages') }}" class="mt-8 block text-center rounded-xl bg-[#FD5528] py-3 text-sm font-semibold text-white shadow hover:bg-orange-600 transition">
                        Select Standard Plan
                    </a>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">High Competition</span>
                        <h3 class="mt-2 text-xl font-bold text-slate-900">Premium SEO Plan</h3>
                        <p class="mt-2 text-xs text-slate-500">For enterprise niches, pan-India SaaS, and ecommerce.</p>
                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-slate-950">₹15,999</span>
                            <span class="text-sm font-medium text-slate-500">/monthly</span>
                        </div>
                        <ul class="space-y-3 text-xs text-slate-700">
                            <li>✔ Keyword Research (20–25+ Keywords)</li>
                            <li>✔ Authoritative Digital PR &amp; Industry Content Outreach</li>
                            <li>✔ Complete On-Page + Technical Speed Architecture</li>
                            <li>✔ In-Depth Competitor Gap &amp; Content Clusters</li>
                            <li>✔ Priority Strategy Consultations</li>
                        </ul>
                    </div>
                    <a href="{{ route('frontend.packages') }}" class="mt-8 block text-center rounded-xl border border-slate-300 py-3 text-sm font-semibold text-slate-700 hover:border-[#FD5528] hover:text-[#FD5528] transition">
                        View Plan In Packages
                    </a>
                </div>
            </div>

            {{-- COMPARISON TABLE: SEO VS PAID ADS --}}
            <div class="mt-16 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
                <div class="bg-slate-50 px-6 py-5 border-b border-slate-200 text-center sm:text-left">
                    <h3 class="text-lg font-bold text-slate-900">Comparison: Organic SEO vs. Paid Advertising (Google &amp; Meta Ads)</h3>
                    <p class="text-xs text-slate-600 mt-1">Understanding the trade-offs between organic discovery and paid campaigns helps you allocate capital effectively.</p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs sm:text-sm text-slate-700">
                        <thead class="bg-slate-100 text-xs uppercase text-slate-900 font-semibold">
                            <tr>
                                <th class="px-6 py-4">Decision Factor</th>
                                <th class="px-6 py-4 text-[#FD5528]">Organic Search (SEO)</th>
                                <th class="px-6 py-4 text-slate-600">Paid Ads (Google / Meta PPC)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50">
                                <td class="px-6 py-4 font-semibold text-slate-900">Cost Structure</td>
                                <td class="px-6 py-4">Fixed monthly retainer (starting ₹7,999/mo). Zero per-click costs.</td>
                                <td class="px-6 py-4">Continuous cost-per-click (CPC) budget + agency management fees.</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="px-6 py-4 font-semibold text-slate-900">Speed to Momentum</td>
                                <td class="px-6 py-4">60 to 90 days for initial local traction; 3–6 months for competitive terms.</td>
                                <td class="px-6 py-4">Immediate traffic within 24–48 hours of campaign launch.</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="px-6 py-4 font-semibold text-slate-900">Long-Term Asset Value</td>
                                <td class="px-6 py-4 text-emerald-800 font-medium">Permanent digital equity; content and links keep delivering traffic after work is done.</td>
                                <td class="px-6 py-4 text-slate-500">Zero residual equity; lead volume drops to zero immediately when budget stops.</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="px-6 py-4 font-semibold text-slate-900">Conversion Intent</td>
                                <td class="px-6 py-4">High intent: users actively searching for answers and local service providers.</td>
                                <td class="px-6 py-4">High intent on search PPC; interruptive intent on social feeds.</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="px-6 py-4 font-semibold text-slate-900">Best Strategy Fit</td>
                                <td class="px-6 py-4">Sustainable brand authority, high organic trust, and low long-term acquisition cost.</td>
                                <td class="px-6 py-4">Rapid product validation, seasonal offers, and immediate demand capture.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    {{-- 6. COMMON FAQS SECTION --}}
    <section id="faqs" class="bg-white py-16 scroll-mt-16 border-t border-slate-200">
        <div class="mx-auto max-w-4xl px-6">
            <div class="text-center mb-10">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Honest Answers</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-900">Frequently Asked SEO Questions</h2>
                <p class="mt-2 text-sm text-slate-600">Practical details on timelines, methodology, costs, and measurement.</p>
            </div>

            <div class="space-y-4">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-xs">
                    <h3 class="text-base font-bold text-slate-900">Do you offer ranking guarantees? (Do you guarantee first-page rankings?)</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        No. No ethical SEO agency guarantees specific search rankings or a #1 position on Google because search engines control their own ranking algorithms. Results depend on competition, website health, technical condition, search intent, and consistent implementation. We focus on transparent white-hat practices, fixing technical blockers, creating helpful content, and delivering measurable organic growth with verifiable monthly reporting.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-xs">
                    <h3 class="text-base font-bold text-slate-900">How long does it take before we see organic search improvements?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        SEO timelines vary depending on your domain age, technical website health, market competition, and content quality. Foundational fixes and local search visibility typically show initial momentum within 60 to 90 days, while competitive commercial queries and broad industry terms usually require 3 to 6 months of steady content publishing and authoritative link acquisition.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-xs">
                    <h3 class="text-base font-bold text-slate-900">How much do SEO services cost in Kanpur?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Our monthly SEO packages in Kanpur start at ₹7,999/month for the Basic SEO Plan (local business visibility, foundational citations, 5 target keywords, and monthly reporting). More competitive business expansion plans are ₹11,999/month, and premium enterprise campaigns are ₹15,999/month. Complete package inclusions are published on our <a href="{{ route('frontend.packages') }}" class="text-[#FD5528] font-semibold hover:underline">packages page</a>.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-xs">
                    <h3 class="text-base font-bold text-slate-900">Do you provide local SEO services?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Yes. We provide dedicated local search engine optimization for Kanpur and Uttar Pradesh businesses, including Google Business Profile optimization, local citation cleanup, Google Maps 3-Pack ranking strategy, and localized service landing pages. Visit our dedicated <a href="{{ route('frontend.page', ['slug' => 'local-seo']) }}" class="text-[#FD5528] font-semibold hover:underline">Local SEO services in Kanpur</a> page for comprehensive details.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-xs">
                    <h3 class="text-base font-bold text-slate-900">What is the difference between Local SEO and National SEO?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Local SEO targets geographic searches in Kanpur and Uttar Pradesh (such as Google Maps 3-Pack and localized service terms). National SEO targets pan-India commercial queries without location modifiers, requiring deeper topical clusters and broader digital PR.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-xs">
                    <h3 class="text-base font-bold text-slate-900">How do you acquire backlinks for our website?</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        We adhere strictly to Google Search Essentials. We acquire links through legitimate industry citations, guest editorial outreach, and valuable data-driven resources. We do not use automated link farms, paid private blog networks (PBNs), or spammy techniques that risk search penalties.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- 7. CONTACT & FREE AUDIT CONSULTATION SECTION --}}
    <section id="contact" class="py-16 sm:py-24 bg-gradient-to-b from-slate-50 to-white border-t border-slate-200 scroll-mt-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center mb-12">
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Request Audit</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-900 sm:text-4xl">
                    Get Your Free SEO Audit &amp; Consultation
                </h2>
                <p class="mt-3 text-base text-slate-600">
                    Share your website URL. Our technical SEO team will review your current crawl status, competitor gap in Kanpur, and outline an actionable improvement plan.
                </p>

                <!-- Quick Direct Call & WhatsApp Contact Options -->
                <div class="mt-6 flex flex-wrap items-center justify-center gap-4 text-xs font-semibold">
                    <a href="tel:+919140092133" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2 text-slate-800 shadow-xs hover:border-[#FD5528] hover:text-[#FD5528] transition">
                        <span>📞 Call Us: +91 914 0092 133</span>
                    </a>
                    <a href="https://wa.me/919140092133?text=Hi%20Backend%20Coders,%20I%20would%20like%20to%20request%20a%20free%20SEO%20audit." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-xl border border-emerald-300 bg-emerald-50 px-4 py-2 text-emerald-800 shadow-xs hover:bg-emerald-100 transition">
                        <span>💬 Chat on WhatsApp</span>
                    </a>
                </div>
            </div>

            <div class="mx-auto max-w-4xl">
                @include('frontend.form')
            </div>
        </div>
    </section>
</main>
@endsection
