@extends('component.main')
@section('content')

@php
    $adsBreadcrumb = [
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
                'name' => 'Services',
                'item' => route('frontend.service'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => 'Google Ads & PPC Management',
                'item' => 'https://backendcodersindia.com/page/ppc-ads-google-ads',
            ],
        ],
    ];

    $adsService = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => 'https://backendcodersindia.com/page/ppc-ads-google-ads#service',
        'name' => 'Google Ads & PPC Management Services in Kanpur',
        'serviceType' => 'PPC & Search Advertising',
        'description' => 'Targeted Google Search ads, display campaigns, remarketing, and negative keyword optimization designed to generate qualified customer leads with transparent conversion tracking.',
        'url' => 'https://backendcodersindia.com/page/ppc-ads-google-ads',
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
            'price' => '6999',
            'priceCurrency' => 'INR',
            'priceSpecification' => [
                '@type' => 'UnitPriceSpecification',
                'price' => '6999',
                'priceCurrency' => 'INR',
                'unitCode' => 'MON',
                'billingDuration' => 1,
            ],
            'description' => 'Basic Digital Marketing & Paid Ads Plan with dedicated lead landing page, conversion setup, and monthly reporting.',
            'url' => 'https://backendcodersindia.com/packages',
        ],
    ];

    $adsFaqs = [
        [
            'question' => 'How much does Google Ads management cost for Kanpur businesses?',
            'answer' => 'Our monthly Google Ads management fee starts at ₹6,999/month for starter local campaigns with ad budgets up to ₹30,000, and ₹14,999/month for growth campaigns targeting multi-channel search and remarketing. Direct ad spend is paid directly to Google from your billing card.',
        ],
        [
            'question' => 'How quickly do Google Ads campaigns produce qualified business inquiries?',
            'answer' => 'Unlike organic search which builds over several months, Google Search Ads start displaying to high-intent searchers within hours of campaign review and approval. Most campaigns generate their initial qualified clicks and lead inquiries during the first few days of active bidding.',
        ],
        [
            'question' => 'How do negative keywords save my advertising budget from click waste?',
            'answer' => 'Negative keywords prevent your ads from triggering on irrelevant searches such as "jobs", "salary", "free download", "wholesale suppliers" (when you sell retail), or consumer retail searches (when you manufacture B2B equipment). We proactively build exclusion lists with 300+ commercial negatives.',
        ],
        [
            'question' => 'Can you track incoming phone calls and WhatsApp chats from Google Ads?',
            'answer' => 'Yes. We implement comprehensive conversion tracking using Google Tag Manager (GTM) and GA4. We track phone number clicks, WhatsApp chat initiations, contact form submissions, and Google Call Extension dials so every inquiry is attributed to specific keywords.',
        ],
        [
            'question' => 'What is the recommended minimum ad budget for local Google Ads in Kanpur?',
            'answer' => 'For single-category local businesses in Kanpur (such as specialized dental clinics, home interior contractors, or local coaching institutes), we recommend starting with a daily ad budget of ₹500 to ₹1,000 (₹15,000 to ₹30,000/month). This provides sufficient click volume for meaningful conversion data.',
        ],
    ];

    $adsFaqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(function ($faq) {
            return [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer'],
                ],
            ];
        }, $adsFaqs),
    ];
@endphp

@push('head')
    <script type="application/ld+json">{!! json_encode($adsBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($adsService, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($adsFaqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

<!-- HERO -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
        Drive Instant Leads with Expert <br>
        <span class="text-[#FD5528]">PPC & Google Ads Services in Kanpur</span>
      </h1>

      <p class="mt-6 text-gray-600">
        Get immediate visibility and high-quality leads with our expert PPC and Google Ads services. We create data-driven ad campaigns that maximize ROI, reduce cost-per-click, and deliver measurable business growth.
      </p>

      <p class="mt-4 text-gray-600">
        From search ads to display and remarketing campaigns, our PPC specialists ensure your ads reach the right audience at the right time—turning clicks into conversions.
      </p>

      <a href="{{ route('frontend.contact') }}"
        class="inline-block mt-6 bg-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:bg-orange-600 transition">
        Get Free PPC Consultation
      </a>
    </div>

    <div>
      <img alt="" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71"
        class="rounded-2xl shadow-lg w-full object-cover">
    </div>

  </div>
</section>

<!-- ABOUT -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold text-gray-900">
      Result-Driven <span class="text-[#FD5528]">PPC Advertising Services</span>
    </h2>

    <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
      Our PPC services are designed to generate instant traffic, qualified leads, and higher conversions. We manage Google Ads campaigns with precision—focusing on keyword targeting, audience segmentation, ad copy optimization, and performance tracking.
      Whether you're a startup or enterprise, we tailor campaigns to meet your business goals and maximize return on ad spend (ROAS).
    </p>

  </div>
</section>

<!-- SERVICES -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

<!-- SERVICE CARDS (PPC / GOOGLE ADS) -->

<article data-aos="fade-up" data-aos-delay="100"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">

  <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 group-hover:backdrop-blur-[24px]"></div>

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Search Advertising
    </span>

    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img alt="" src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">Google Search Ads</h3>

    <p class="text-sm text-gray-600">
      Appear at the top of Google search results and capture high-intent users actively searching for your services.
    </p>

    <div class="flex flex-wrap justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Keywords</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Bidding</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Conversions</span>
    </div>

  </div>
</article>


<!-- DISPLAY ADS -->
<article data-aos="fade-up" data-aos-delay="120"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Brand Awareness
    </span>

    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
      <img alt="" src="https://img.icons8.com/?size=100&id=86127&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">Display Advertising</h3>

    <p class="text-sm text-gray-600">
      Reach your audience across millions of websites with visually engaging display ads that build brand awareness.
    </p>

    <div class="flex flex-wrap justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border px-3 py-1">Banners</span>
      <span class="rounded-full border px-3 py-1">Reach</span>
      <span class="rounded-full border px-3 py-1">Awareness</span>
    </div>

  </div>
</article>


<!-- REMARKETING -->
<article data-aos="fade-up" data-aos-delay="140"
  class="ggroup relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">

  <div class="relative z-10 text-center space-y-4">

    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Retargeting Strategy
    </span>

    <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
      <img alt="" src="https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">Remarketing Ads</h3>

    <p class="text-sm text-gray-600">
      Re-engage visitors who didn’t convert and bring them back with targeted remarketing campaigns.
    </p>

    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Retargeting</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Audience</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Conversion</span>
    </div>

  </div>
</article>


<!-- video ADS -->
<article data-aos="fade-up" data-aos-delay="180"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">

  <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 group-hover:backdrop-blur-[24px]"></div>

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Video Advertising
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img src="https://img.icons8.com/?size=100&id=85375&format=png&color=FFFFFF" alt="YouTube Ads" class="h-14 w-14" />
    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">
      YouTube Advertising
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600 group-hover:text-gray-900">
      Promote your brand with engaging video ads and reach millions of potential customers on YouTube. We create high-performing campaigns that drive awareness, engagement, and conversions.
    </p>

    <!-- TAGS -->
    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Video Ads</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Engagement</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Reach</span>
    </div>

  </div>
</article>


<!-- SHOPPING ADS -->
<article data-aos="fade-up" data-aos-delay="180"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">

  <div class="text-center space-y-4">

    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      E-commerce Ads
    </span>

    <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
      <img alt="" src="https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">Google Shopping Ads</h3>

    <p class="text-sm text-gray-600">
      Promote your products directly in search results and increase sales with optimized shopping campaigns.
    </p>

    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Products</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Sales</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">ROI</span>
    </div>

  </div>
</article>


<!-- PPC STRATEGY -->
<article data-aos="fade-up" data-aos-delay="200"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">

  <div class="text-center space-y-4">

    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Campaign Strategy
    </span>

    <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
      <img alt="" src="https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">PPC Campaign Management</h3>

    <p class="text-sm text-gray-600">
      We manage and optimize your campaigns using data-driven strategies to maximize ROI and performance.
    </p>

    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Strategy</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Optimization</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Analytics</span>
    </div>

  </div>
</article>
    

    </div>

  </div>
</section>

<!-- FEATURES -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">
      What We Do to <span class="text-[#FD5528]">Maximize Your Ad Performance</span>
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Keyword Research</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Ad Copy Creation</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Campaign Setup</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Bid Management</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Audience Targeting</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">A/B Testing</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Conversion Tracking</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Landing Page Optimization</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Performance Reporting</div>

    </div>

  </div>
</section>

<!-- CAMPAIGN PLANNING, BUDGETING & MEASUREMENT -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">Process &amp; Governance</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-3 sm:text-4xl">
        Structured Campaign Planning &amp; Budget Management
      </h2>
      <p class="mt-4 text-gray-600">
        Every rupee invested in Google Ads should produce measurable commercial impact. We enforce rigorous financial and operational safeguards on every account we manage.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="rounded-2xl border border-gray-200 bg-gray-50/60 p-6 shadow-sm">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-4">01</div>
        <h3 class="text-lg font-bold text-gray-900">Campaign Planning</h3>
        <p class="mt-2.5 text-sm text-gray-600 leading-relaxed">
          In-depth search query analysis, competitor ad dissection, audience persona mapping, and landing page alignment before spend begins.
        </p>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-gray-50/60 p-6 shadow-sm">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-4">02</div>
        <h3 class="text-lg font-bold text-gray-900">Budget Management</h3>
        <p class="mt-2.5 text-sm text-gray-600 leading-relaxed">
          Pacing controls, daily budget thresholds, automated bid adjustments, and aggressive negative keyword lists to prevent click waste.
        </p>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-gray-50/60 p-6 shadow-sm">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-4">03</div>
        <h3 class="text-lg font-bold text-gray-900">Conversion Tracking</h3>
        <p class="mt-2.5 text-sm text-gray-600 leading-relaxed">
          Google Tag Manager, GA4 event modeling, form submit triggers, WhatsApp click tracking, and call recording integration for full funnel attribution.
        </p>
      </div>

      <div class="rounded-2xl border border-gray-200 bg-gray-50/60 p-6 shadow-sm">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-4">04</div>
        <h3 class="text-lg font-bold text-gray-900">Transparent Reporting</h3>
        <p class="mt-2.5 text-sm text-gray-600 leading-relaxed">
          Weekly and monthly dashboard reviews showing exact cost-per-click (CPC), cost-per-acquisition (CPA), return on ad spend (ROAS), and search term reports.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- REGIONAL EXAMPLE -->
<section class="py-16 bg-slate-900 text-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <span class="inline-flex rounded-full bg-orange-500/20 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-orange-400">
          Practical Regional Example
        </span>
        <h3 class="text-2xl sm:text-3xl font-bold mt-4 leading-snug">
          B2B &amp; Manufacturing Lead Generation in Kanpur
        </h3>
        <p class="mt-4 text-slate-300 text-sm sm:text-base leading-relaxed">
          For Kanpur-based manufacturers and wholesale suppliers (such as industrial packaging, leather goods, and agricultural processing equipment), consumer search intent can easily drain marketing budgets if campaigns are not tightly geo-fenced.
        </p>
        <ul class="mt-6 space-y-3 text-sm text-slate-300">
          <li class="flex items-start gap-3">
            <span class="text-[#FD5528] font-bold">✓</span>
            <span><strong>Negative Keyword Sculpting:</strong> Filtering out retail terms ("buy 1 piece", "cheap online", "tutorial") so ads only trigger for commercial bulk queries.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#FD5528] font-bold">✓</span>
            <span><strong>High-Intent Search Terms:</strong> Bidding specifically on intent terms like "industrial supplier in Uttar Pradesh" or "custom commercial equipment manufacturer".</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#FD5528] font-bold">✓</span>
            <span><strong>Direct Phone &amp; Inquiry Tracking:</strong> Routing regional buyers directly to WhatsApp business numbers and trackable inquiry forms.</span>
          </li>
        </ul>
      </div>

      <div class="rounded-2xl border border-slate-800 bg-slate-950 p-6 sm:p-8 shadow-2xl">
        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">Account Health Blueprint</h4>
        <div class="mt-6 space-y-4">
          <div class="rounded-xl border border-slate-800 bg-slate-900 p-4">
            <div class="flex justify-between items-center text-sm">
              <span class="text-slate-300">Target Search Impression Share</span>
              <span class="font-bold text-orange-400">> 75%</span>
            </div>
          </div>
          <div class="rounded-xl border border-slate-800 bg-slate-900 p-4">
            <div class="flex justify-between items-center text-sm">
              <span class="text-slate-300">Negative Keyword Filter Coverage</span>
              <span class="font-bold text-emerald-400">500+ Qualified Exclusions</span>
            </div>
          </div>
          <div class="rounded-xl border border-slate-800 bg-slate-900 p-4">
            <div class="flex justify-between items-center text-sm">
              <span class="text-slate-300">Conversion Attribution Setup</span>
              <span class="font-bold text-white">GA4 + GTM Server Side</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- QUALITY SCORE & CONVERSION ARCHITECTURE -->
<section class="py-20 bg-slate-50 border-t border-slate-200">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">Higher Quality Score = Lower Cost Per Click</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-3 sm:text-4xl">
        Our Scientific Google Ads Optimization Framework
      </h2>
      <p class="mt-4 text-gray-600 leading-relaxed">
        Google doesn't just sell ad positions to the highest bidder—they reward ads that provide the most relevant answers to user intent. By lifting your Quality Score from 5/10 to 8/10+, we help you achieve top positions at a 30% to 50% discount compared to competitors.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl p-7 border border-slate-200 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-5">
            01
          </div>
          <h3 class="text-lg font-bold text-slate-900">High-Intent Keyword Architecture</h3>
          <p class="mt-3 text-sm text-slate-600 leading-relaxed">
            We isolate high-commercial intent terms using Single-Theme Ad Groups (STAGs). We separate exact-match transactional queries from broad discovery phrases to eliminate budget bleed and ensure strict relevance between search term, ad copy, and destination page.
          </p>
        </div>
        <ul class="mt-6 pt-5 border-t border-slate-100 space-y-2 text-xs text-slate-700">
          <li class="flex items-center gap-2">✓ Intent classification (Informational vs Commercial)</li>
          <li class="flex items-center gap-2">✓ Dynamic keyword insertion &amp; customized ad assets</li>
          <li class="flex items-center gap-2">✓ Proactive weekly negative keyword pruning</li>
        </ul>
      </div>

      <div class="bg-white rounded-2xl p-7 border border-slate-200 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-5">
            02
          </div>
          <h3 class="text-lg font-bold text-slate-900">Landing Page Experience &amp; Speed</h3>
          <p class="mt-3 text-sm text-slate-600 leading-relaxed">
            Sending paid ad traffic to a generic homepage destroys conversion rates. We design lightweight, mobile-first landing pages optimized for sub-2-second loading, clear call-to-actions, trust proofs, and zero distractions to drive visitor engagement directly into phone calls or form leads.
          </p>
        </div>
        <ul class="mt-6 pt-5 border-t border-slate-100 space-y-2 text-xs text-slate-700">
          <li class="flex items-center gap-2">✓ Mobile-responsive layout built for quick thumb actions</li>
          <li class="flex items-center gap-2">✓ Click-to-call &amp; direct WhatsApp business triggers</li>
          <li class="flex items-center gap-2">✓ Content consistency matching ad copy headlines</li>
        </ul>
      </div>

      <div class="bg-white rounded-2xl p-7 border border-slate-200 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-[#FD5528] font-bold text-lg mb-5">
            03
          </div>
          <h3 class="text-lg font-bold text-slate-900">Server-Side Tracking &amp; GTM Attribution</h3>
          <p class="mt-3 text-sm text-slate-600 leading-relaxed">
            Data accuracy is the foundation of smart bidding. We configure Google Tag Manager and Google Analytics 4 with Enhanced Conversions, capturing lead form completions, phone extension dials, and WhatsApp chat initiations so Google's machine learning optimizes bids around real customers.
          </p>
        </div>
        <ul class="mt-6 pt-5 border-t border-slate-100 space-y-2 text-xs text-slate-700">
          <li class="flex items-center gap-2">✓ Enhanced conversions for offline and lead tracking</li>
          <li class="flex items-center gap-2">✓ Call duration qualification (filtering spam calls)</li>
          <li class="flex items-center gap-2">✓ Return on ad spend (ROAS) and CPA transparent auditing</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- LOCAL KANPUR INDUSTRY APPLICATIONS -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">Local Kanpur Market Expertise</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-3 sm:text-4xl">
        Google Ads Strategies Tailored to Kanpur Businesses
      </h2>
      <p class="mt-4 text-gray-600 leading-relaxed">
        Consumer search behavior in Kanpur requires hyper-localized targeting. Whether you operate in industrial corridors or bustling commercial hubs, our geo-fenced PPC setups prevent wasted clicks outside your service radius.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="p-6 rounded-2xl border border-slate-200 bg-orange-50/30 shadow-sm">
        <h3 class="text-base font-bold text-slate-900">Clinics &amp; Diagnostics</h3>
        <p class="mt-1 text-xs text-[#FD5528] font-semibold">Swaroop Nagar, Kakadeo &amp; Kidwai Nagar</p>
        <p class="mt-3 text-xs text-slate-600 leading-relaxed">
          Geo-targeted call-only campaigns targeting urgent local searches like "emergency dental clinic Kanpur" or "MRI test near me", routing urgent patients immediately to your front desk.
        </p>
      </div>

      <div class="p-6 rounded-2xl border border-slate-200 bg-orange-50/30 shadow-sm">
        <h3 class="text-base font-bold text-slate-900">Coaching &amp; Institutes</h3>
        <p class="mt-1 text-xs text-[#FD5528] font-semibold">Kakadeo, Civil Lines &amp; Ashok Nagar</p>
        <p class="mt-3 text-xs text-slate-600 leading-relaxed">
          Seasonal high-volume search campaigns for JEE, NEET, and UPSC coaching. We manage negative keywords to prevent student job searches and capture high-intent parent inquiries.
        </p>
      </div>

      <div class="p-6 rounded-2xl border border-slate-200 bg-orange-50/30 shadow-sm">
        <h3 class="text-base font-bold text-slate-900">Real Estate &amp; Plots</h3>
        <p class="mt-1 text-xs text-[#FD5528] font-semibold">Kanpur-Lucknow Highway &amp; Ganga Barrage</p>
        <p class="mt-3 text-xs text-slate-600 leading-relaxed">
          High-ticket lead generation capturing buyers and investors searching for commercial plots, villas, and township projects with strict income and demographic filters.
        </p>
      </div>

      <div class="p-6 rounded-2xl border border-slate-200 bg-orange-50/30 shadow-sm">
        <h3 class="text-base font-bold text-slate-900">B2B Manufacturers</h3>
        <p class="mt-1 text-xs text-[#FD5528] font-semibold">Panki, Dada Nagar &amp; Fazalganj</p>
        <p class="mt-3 text-xs text-slate-600 leading-relaxed">
          Pan-India search and remarketing campaigns targeting bulk distributors, government tenders, and corporate procurement heads seeking dependable industrial manufacturing partners.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- PRICING & PACKAGES -->
<section class="py-20 bg-slate-900 text-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-orange-400">Clear &amp; Transparent Investment</span>
      <h2 class="text-3xl font-bold mt-3 sm:text-4xl text-white">
        Google Ads Management Pricing &amp; Plans
      </h2>
      <p class="mt-4 text-slate-400 leading-relaxed">
        No hidden fees or locked contracts. You maintain 100% direct ownership of your Google Ads account, credit card billing, and conversion data.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="rounded-3xl border border-slate-800 bg-slate-950 p-8 flex flex-col justify-between">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Starter Local PPC</span>
          <div class="mt-4 flex items-baseline gap-2">
            <span class="text-3xl font-black text-white">₹6,999</span>
            <span class="text-xs text-slate-400">/ month + ad spend</span>
          </div>
          <p class="mt-4 text-xs text-slate-400 leading-relaxed">
            Ideal for single-location Kanpur retail stores, local doctors, or specialty service providers seeking daily phone calls.
          </p>
          <ul class="mt-6 space-y-3 text-xs text-slate-300">
            <li class="flex items-center gap-2">✓ Monthly ad budget up to ₹30,000</li>
            <li class="flex items-center gap-2">✓ Google Search &amp; Call-Only Ads</li>
            <li class="flex items-center gap-2">✓ 150+ Negative keyword exclusions</li>
            <li class="flex items-center gap-2">✓ GTM &amp; Phone call conversion setup</li>
            <li class="flex items-center gap-2">✓ Monthly performance report</li>
          </ul>
        </div>
        <div class="mt-8 pt-6 border-t border-slate-800">
          <a href="#contact" class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-slate-800 hover:bg-slate-700 transition">Get Started</a>
        </div>
      </div>

      <div class="rounded-3xl border-2 border-[#FD5528] bg-slate-950 p-8 flex flex-col justify-between relative shadow-2xl">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-[#FD5528] px-4 py-1 text-[10px] font-bold uppercase tracking-widest text-white">
          Most Popular
        </div>
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-orange-400">Growth Lead Generation</span>
          <div class="mt-4 flex items-baseline gap-2">
            <span class="text-3xl font-black text-white">₹14,999</span>
            <span class="text-xs text-slate-400">/ month + ad spend</span>
          </div>
          <p class="mt-4 text-xs text-slate-400 leading-relaxed">
            For competitive regional businesses, multi-branch clinics, real estate firms, and institutes requiring multi-ad groups and remarketing.
          </p>
          <ul class="mt-6 space-y-3 text-xs text-slate-300">
            <li class="flex items-center gap-2">✓ Monthly ad budget up to ₹1,00,000</li>
            <li class="flex items-center gap-2">✓ Google Search + Display + Remarketing</li>
            <li class="flex items-center gap-2">✓ Dedicated landing page wireframe &amp; optimization</li>
            <li class="flex items-center gap-2">✓ A/B testing ad copies &amp; extensions</li>
            <li class="flex items-center gap-2">✓ Bi-weekly optimization &amp; KPI reviews</li>
          </ul>
        </div>
        <div class="mt-8 pt-6 border-t border-slate-800">
          <a href="#contact" class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-[#FD5528] hover:bg-[#e94c20] transition">Select Growth Plan</a>
        </div>
      </div>

      <div class="rounded-3xl border border-slate-800 bg-slate-950 p-8 flex flex-col justify-between">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Custom Enterprise &amp; B2B</span>
          <div class="mt-4 flex items-baseline gap-2">
            <span class="text-3xl font-black text-white">Custom</span>
            <span class="text-xs text-slate-400">tailored SLA</span>
          </div>
          <p class="mt-4 text-xs text-slate-400 leading-relaxed">
            For national manufacturers, ecommerce brands, and multi-city operations with scaling monthly ad budgets above ₹1,00,000.
          </p>
          <ul class="mt-6 space-y-3 text-xs text-slate-300">
            <li class="flex items-center gap-2">✓ Scaled ad spend across Google &amp; YouTube</li>
            <li class="flex items-center gap-2">✓ Full CRM lead attribution integration</li>
            <li class="flex items-center gap-2">✓ Competitor bidding counter-strategies</li>
            <li class="flex items-center gap-2">✓ Dedicated Senior PPC account strategist</li>
            <li class="flex items-center gap-2">✓ Weekly performance steering sprint</li>
          </ul>
        </div>
        <div class="mt-8 pt-6 border-t border-slate-800">
          <a href="#contact" class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-slate-800 hover:bg-slate-700 transition">Discuss Enterprise Plan</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FREQUENTLY ASKED QUESTIONS -->
<section class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">Got Questions?</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-3 sm:text-4xl">
        Google Ads &amp; PPC Management FAQs
      </h2>
      <p class="mt-4 text-gray-600">
        Direct answers to common questions about advertising costs, campaign setups, and lead generation in Kanpur.
      </p>
    </div>

    <div class="space-y-6">
      @foreach($adsFaqs as $faq)
        <div class="rounded-2xl border border-slate-200 bg-slate-50/50 p-6 shadow-sm">
          <h3 class="text-base font-bold text-slate-900 flex items-start gap-3">
            <span class="text-[#FD5528] font-bold">Q.</span>
            <span>{{ $faq['question'] }}</span>
          </h3>
          <p class="mt-3 text-sm text-slate-600 leading-relaxed pl-6">
            {{ $faq['answer'] }}
          </p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- CONTACT ENQUIRY FORM -->
<section id="contact" class="bg-[#F9FAFB] py-20 px-6 relative overflow-hidden">
  <div class="max-w-4xl mx-auto">
    <div class="text-center max-w-2xl mx-auto mb-12">
      <span class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528] px-5 py-2 rounded-full bg-white/80 border border-orange-200/50 shadow-sm">
        Start Your Campaign
      </span>
      <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mt-4">
        Request a PPC &amp; Google Ads Consultation
      </h2>
      <p class="mt-3 text-slate-600 text-sm sm:text-base">
        Connect with our certified Google Ads specialists for an account audit or a fresh campaign strategy tailored to your budget.
      </p>
    </div>

    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-xl p-4 sm:p-8">
      @include('frontend.form')
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bg-[#FD5528] py-16 text-center text-white">
  <div class="max-w-3xl mx-auto px-6">
    <h2 class="text-3xl font-bold">
      Ready to Scale with Google Ads?
    </h2>
    <p class="mt-4 text-white/90">
      Launch high-performing PPC campaigns and generate instant leads with our expert Google Ads management services.
    </p>
    <a href="#contact"
      class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition shadow-lg">
      Get Free PPC Audit
    </a>
  </div>
</section>

@endsection