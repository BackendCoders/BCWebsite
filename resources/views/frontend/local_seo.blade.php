@extends('component.main')
@section('content')

@php
    $localSeoBreadcrumb = [
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
                'name' => 'Local SEO Services',
                'item' => 'https://backendcodersindia.com/page/local-seo',
            ],
        ],
    ];

    $localSeoService = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => 'https://backendcodersindia.com/page/local-seo#service',
        'name' => 'Local SEO & Google Maps Optimization Services',
        'serviceType' => 'Local Search Engine Optimization',
        'description' => 'Improve local search presence, Google Maps 3-Pack rankings, local citation consistency, and customer review velocity across Kanpur and regional target markets.',
        'url' => 'https://backendcodersindia.com/page/local-seo',
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
            'description' => 'Basic Local SEO Plan with Google Business Profile optimization, 5 local keywords, citations, and monthly tracking.',
            'url' => 'https://backendcodersindia.com/packages',
        ],
    ];
@endphp

@push('head')
    <script type="application/ld+json">{!! json_encode($localSeoBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($localSeoService, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

<!-- HERO -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
        Grow Your Business with <br>
        <span class="text-[#FD5528]">Local SEO Services in Kanpur</span> That Improve Online Visibility
      </h1>

      <p class="mt-6 text-gray-700 leading-relaxed text-base sm:text-lg">
        Local SEO connects brick-and-mortar stores, healthcare clinics, and regional service providers with nearby buyers actively searching Google Maps and localized web queries. Backend Coders India configures verified Google Business Profiles, builds consistent Kanpur business directory citations, and optimizes localized website content so your business appears when regional customers seek immediate local services.
      </p>

      <p class="mt-4 text-gray-600 text-sm">
        From NAP (Name, Address, Phone) consistency across Justdial and IndiaMART to localized on-page schema, our Kanpur SEO team ensures your business profile earns sustainable local discovery starting at ₹7,999/month.
      </p>

      <div class="mt-8 flex flex-wrap items-center gap-4">
        <a href="#contact"
          class="inline-block bg-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:bg-orange-600 transition">
          Get Free Local SEO Audit
        </a>
        <a href="{{ route('frontend.packages') }}"
          class="inline-block border border-slate-300 bg-white text-slate-700 px-6 py-3 rounded-xl font-semibold shadow-sm hover:border-[#FD5528] hover:text-[#FD5528] transition">
          View Monthly Packages
        </a>
      </div>
    </div>

    <div>
      <img alt="Local SEO Services in Kanpur" src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d"
        class="rounded-2xl shadow-lg w-full object-cover">
    </div>

  </div>
</section>

<!-- ABOUT -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold text-gray-900">
      How Does Local SEO Help <span class="text-[#FD5528]">Kanpur Businesses Attract High-Intent Buyers?</span>
    </h2>

    <p class="mt-4 text-gray-600 max-w-3xl mx-auto leading-relaxed">
      Over 70% of local smartphone searches lead to in-store visits or direct phone inquiries within 24 hours. We optimize your Google Business Profile categories, eliminate conflicting directory listings, and structure your service area pages so nearby customers find accurate hours, genuine reviews, and direct contact details without friction.
    </p>

  </div>
</section>

<!-- SERVICES -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- GOOGLE BUSINESS -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase text-[#FD5528]">Business Profile</span>
          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img alt="" src="https://img.icons8.com/?size=100&id=7880&format=png&color=ffffff" class="h-14 w-14" />
          </div>
          <h3 class="text-xl font-semibold">Google Business Profile</h3>
          <p class="text-sm text-gray-600">
            Optimize your Google Business Profile to appear in local searches and Google Maps.
          </p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Maps</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Listings</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Visibility</span>
          </div>
        </div>
      </article>

      <!-- LOCAL KEYWORDS -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase text-[#FD5528]">Keyword Targeting</span>
          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img alt="" src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" class="h-14 w-14" />
          </div>
          <h3 class="text-xl font-semibold">Local Keyword Ranking Services</h3>
          <p class="text-sm text-gray-600">
            Target location-based keywords to rank higher for searches in your area.
          </p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Local SEO</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Keywords</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Ranking</span>
          </div>
        </div>
      </article>

      <!-- CITATIONS -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase text-[#FD5528]">Citations</span>
          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img alt="" src="https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff" class="h-14 w-14" />
          </div>
          <h3 class="text-xl font-semibold">Local Citations</h3>
          <p class="text-sm text-gray-600">
            Build consistent business listings across directories to improve trust and rankings.
          </p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Directories</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Listings</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Trust</span>
          </div>
        </div>
      </article>

      <!-- REVIEWS -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase text-[#FD5528]">Reputation</span>
          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img alt="" src="https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff" class="h-14 w-14" />
          </div>
          <h3 class="text-xl font-semibold">Review Management</h3>
          <p class="text-sm text-gray-600">
            Manage and improve customer reviews to boost credibility and conversions.
          </p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Reviews</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Ratings</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Trust</span>
          </div>
        </div>
      </article>

      <!-- ON PAGE -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase text-[#FD5528]">On Page SEO</span>
          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img alt="" src="https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff" class="h-14 w-14" />
          </div>
          <h3 class="text-xl font-semibold">Local On-Page SEO</h3>
          <p class="text-sm text-gray-600">
            Optimize your website content for local keywords and better search rankings.
          </p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Content</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">SEO</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">UX</span>
          </div>
        </div>
      </article>

      <!-- TRACKING -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase text-[#FD5528]">Analytics</span>
          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img alt="" src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" class="h-14 w-14" />
          </div>
          <h3 class="text-xl font-semibold">Local SEO Tracking</h3>
          <p class="text-sm text-gray-600">
            Track performance and optimize campaigns using data-driven insights.
          </p>
          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Tracking</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Reports</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Insights</span>
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
      What We Do to <span class="text-[#FD5528]">Boost Your Local Search Visibility</span>
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        Google Business Profile Optimization
      </div>

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        Local Keyword Research
      </div>

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        Google Maps Ranking
      </div>

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        Local Citations & Directory Listings
      </div>

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        Review & Reputation Management
      </div>

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        On-Page Local SEO Optimization
      </div>

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        NAP Consistency Management
      </div>

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        Local SEO Tracking & Analytics
      </div>

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        Mobile & Voice Search Optimization
      </div>

    </div>

  </div>
</section>


<!-- LOCAL SEO PROCESS & PRACTICAL KANPUR APPLICATION -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">How Local Search Works for Regional Businesses</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-3 sm:text-4xl">
        What Steps Are Required to Rank in the Google Maps Local 3-Pack?
      </h2>
      <p class="mt-4 text-gray-600">
        Local search intent is highly specific. When customers search for services in Kanpur (such as specialized healthcare, commercial transport, retail stores, or legal advice), Google prioritizes proximity, prominence, and verifiable business profile signals.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="rounded-2xl border border-gray-200 bg-gray-50/70 p-6">
        <h3 class="text-lg font-bold text-slate-900">Google Business Profile Health</h3>
        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
          Accurate category mapping, primary and secondary service tags, authentic customer photo uploads, and regular business updates to maintain Map Pack relevance.
        </p>
      </div>
      <div class="rounded-2xl border border-gray-200 bg-gray-50/70 p-6">
        <h3 class="text-lg font-bold text-slate-900">NAP Consistency</h3>
        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
          Standardizing Name, Address, and Phone details across high-authority regional directories (Justdial, IndiaMART, Sulekha) to eliminate contradictory location signals.
        </p>
      </div>
      <div class="rounded-2xl border border-gray-200 bg-gray-50/70 p-6">
        <h3 class="text-lg font-bold text-slate-900">Localized Landing Pages</h3>
        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
          Building dedicated service pages for specific geographic hubs (such as Civil Lines, Swaroop Nagar, or Panki) with clear directions, landmarks, and service areas.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- LOCAL SEO PRICING & PACKAGES -->
<section class="py-16 bg-slate-50 border-t border-gray-200">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">Transparent Pricing</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-2 sm:text-4xl">
        How Much Does Local SEO Cost for Kanpur Businesses?
      </h2>
      <p class="mt-3 text-sm text-gray-600">
        Predictable monthly retainers engineered for verified local discovery without long-term lock-ins.
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm flex flex-col justify-between">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Local Starter</span>
          <h3 class="mt-2 text-xl font-bold text-slate-900">Google Map Pack Starter Plan</h3>
          <p class="mt-2 text-xs text-slate-500">Perfect for single-location clinics, showrooms, and local professionals.</p>
          <div class="my-6">
            <span class="text-4xl font-extrabold text-slate-950">₹7,999</span>
            <span class="text-sm font-medium text-slate-500">/monthly</span>
          </div>
          <ul class="space-y-3 text-xs text-slate-700">
            <li>✔ Google Business Profile Audit &amp; Optimization</li>
            <li>✔ 15 Verified Local Business Citations (Justdial, IndiaMART)</li>
            <li>✔ Local Schema &amp; Geo-Tagging Implementation</li>
            <li>✔ 5 Local Target Keyword Trackers</li>
            <li>✔ Monthly Google Maps Impression &amp; Call Reports</li>
          </ul>
        </div>
        <a href="{{ route('frontend.packages') }}" class="mt-8 block text-center rounded-xl border border-slate-300 py-3 text-sm font-semibold text-slate-700 hover:border-[#FD5528] hover:text-[#FD5528] transition">
          View Plan in Packages
        </a>
      </div>

      <div class="rounded-3xl border-2 border-[#FD5528] bg-white p-8 shadow-xl relative flex flex-col justify-between">
        <span class="absolute -top-3 right-6 rounded-full bg-[#FD5528] px-3 py-1 text-[0.65rem] font-bold uppercase tracking-wider text-white shadow">
          Recommended
        </span>
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-[#FD5528]">Market Leader</span>
          <h3 class="mt-2 text-xl font-bold text-slate-900">Regional Growth &amp; Review Plan</h3>
          <p class="mt-2 text-xs text-slate-500">For multi-branch retailers, manufacturers, and competitive service businesses.</p>
          <div class="my-6">
            <span class="text-4xl font-extrabold text-slate-950">₹11,999</span>
            <span class="text-sm font-medium text-slate-500">/monthly</span>
          </div>
          <ul class="space-y-3 text-xs text-slate-700">
            <li>✔ Everything in Starter Plan</li>
            <li>✔ 30+ Authoritative Regional &amp; Niche Citations</li>
            <li>✔ Customer Review Generation Strategy &amp; Templates</li>
            <li>✔ 4 Local Community &amp; Service Blog Posts / Month</li>
            <li>✔ Local Competitor Proximity Gap Analysis</li>
          </ul>
        </div>
        <a href="#contact" class="mt-8 block text-center rounded-xl bg-[#FD5528] py-3 text-sm font-semibold text-white shadow hover:bg-orange-600 transition">
          Enquire About Growth Plan
        </a>
      </div>
    </div>
  </div>
</section>

<!-- LOCAL SEO FAQS -->
<section class="py-16 bg-white border-t border-gray-200">
  <div class="max-w-4xl mx-auto px-6">
    <div class="text-center mb-10">
      <span class="text-xs font-bold uppercase tracking-[0.3em] text-[#FD5528]">Local SEO Common Questions</span>
      <h2 class="text-3xl font-bold text-gray-900 mt-2">Frequently Asked Questions About Local SEO</h2>
    </div>

    <div class="space-y-4">
      <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
        <h3 class="text-base font-bold text-gray-900">How long does it take to see Google Map Pack improvements?</h3>
        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Most verified profiles see improved visibility within 4 to 8 weeks after correcting NAP inconsistencies, optimizing business categories, and acquiring initial genuine customer reviews.
        </p>
      </div>
      <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
        <h3 class="text-base font-bold text-gray-900">Can you guarantee the #1 spot on Google Maps?</h3>
        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          No reputable agency can guarantee #1 placement because Google algorithms calculate local rankings dynamically based on searcher proximity, device location, and continuous competitor activity. We focus on verified optimization practices that maximize organic prominence.
        </p>
      </div>
      <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
        <h3 class="text-base font-bold text-gray-900">Do I need a physical office address in Kanpur?</h3>
        <p class="mt-2 text-sm text-gray-600 leading-relaxed">
          Yes. Google requires a legitimate, verifiable physical address to create and verify a Google Business Profile. For service-area businesses that travel to customers, the address can be hidden while serving designated geographic boundaries.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT ENQUIRY FORM -->
<section id="contact" class="bg-[#F9FAFB] py-20 px-6 relative overflow-hidden border-t border-gray-200">
  <div class="max-w-4xl mx-auto">
    <div class="text-center max-w-2xl mx-auto mb-12">
      <span class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528] px-5 py-2 rounded-full bg-white/80 border border-orange-200/50 shadow-sm">
        Connect With Us
      </span>
      <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mt-4">
        Request a Local SEO Audit
      </h2>
      <p class="mt-3 text-slate-600 text-sm sm:text-base">
        Get a thorough review of your Google Business Profile, citation consistency, and local search visibility.
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
      Improve Your Local Search Visibility
    </h2>
    <p class="mt-4 text-white/90">
      Build a verified, credible search presence that brings nearby customers directly to your business.
    </p>
    <a href="#contact"
      class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition shadow-lg">
      Claim Free Local SEO Consultation
    </a>
  </div>
</section>

@endsection