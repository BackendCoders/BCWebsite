@extends('component.main')
@section('content')

<!-- HERO -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
        Grow Your Business with <br>
        <span class="text-[#FD5528]">Local SEO Services</span>
      </h1>

      <p class="mt-6 text-gray-600">
        Get discovered by customers near you with our powerful Local SEO strategies. We help your business rank higher in local searches, Google Maps, and nearby results.
      </p>

      <p class="mt-4 text-gray-600">
        From Google Business Profile optimization to local citations and reviews, we ensure your business stands out in your local market.
      </p>

      <a href="{{ route('frontend.contact') }}"
        class="inline-block mt-6 bg-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:bg-orange-600 transition">
        Get Free Local SEO Audit
      </a>
    </div>

    <div>
      <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d"
        class="rounded-2xl shadow-lg w-full object-cover">
    </div>

  </div>
</section>

<!-- ABOUT -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold text-gray-900">
      Result-Driven <span class="text-[#FD5528]">Local SEO Services</span>
    </h2>

    <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
      Our Local SEO services are designed to improve your visibility in local search results and attract nearby customers.
      We optimize your business listings, manage local citations, and improve your online reputation to drive more traffic and leads.
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
            <img src="https://img.icons8.com/?size=100&id=7880&format=png&color=ffffff" class="h-14 w-14" />
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
            <img src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" class="h-14 w-14" />
          </div>
          <h3 class="text-xl font-semibold">Local Keyword Optimization</h3>
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
            <img src="https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff" class="h-14 w-14" />
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
            <img src="https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff" class="h-14 w-14" />
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
            <img src="https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff" class="h-14 w-14" />
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
            <img src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" class="h-14 w-14" />
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


<!-- CTA -->
<section class="bg-[#FD5528] py-16 text-center text-white">
  <div class="max-w-3xl mx-auto px-6">

    <h2 class="text-3xl font-bold">
      Ready to Dominate Local Search?
    </h2>

    <p class="mt-4">
      Improve your local visibility and attract more customers with our expert Local SEO services.
    </p>

    <a href="{{ route('frontend.contact') }}"
      class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
      Start Local SEO Today
    </a>

  </div>
</section>

@endsection