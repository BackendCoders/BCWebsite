@extends('component.main')
@section('content')

<!-- HERO -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
        Drive Instant Leads with Expert <br>
        <span class="text-[#FD5528]">PPC & Google Ads Services</span>
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
      <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71"
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
      <img src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" class="h-14 w-14" />
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
      <img src="https://img.icons8.com/?size=100&id=86127&format=png&color=ffffff" class="h-14 w-14" />
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
      <img src="https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff" class="h-14 w-14" />
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
      <img src="https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff" class="h-14 w-14" />
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
      <img src="https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff" class="h-14 w-14" />
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

<!-- CTA -->
<section class="bg-[#FD5528] py-16 text-center text-white">
  <div class="max-w-3xl mx-auto px-6">

    <h2 class="text-3xl font-bold">
      Ready to Scale with Google Ads?
    </h2>

    <p class="mt-4">
      Launch high-performing PPC campaigns and generate instant leads with our expert Google Ads management services.
    </p>

    <a href="{{ route('frontend.contact') }}"
      class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
      Start Your PPC Campaign
    </a>

  </div>
</section>

@endsection