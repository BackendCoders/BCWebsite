@extends('component.main')
@section('content')

<!-- HERO -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
      Drive High-Converting Leads with <br>
        <span class="text-[#FD5528]">Meta Ads (Facebook & Instagram)</span>
      </h1>

      <p class="mt-6 text-gray-600">
        Boost your business with powerful Meta Ads campaigns across Facebook and Instagram. We create highly targeted ad strategies that increase brand awareness, generate quality leads, and maximize your return on ad spend.
      </p>

      <p class="mt-4 text-gray-600">
         From audience targeting to creative ad design and campaign optimization, we ensure your ads reach the right audience and deliver measurable results.
      </p>

      <a href="{{ route('frontend.contact') }}"
        class="inline-block mt-6 bg-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:bg-orange-600 transition">
       Get Free Meta Ads Consultation
      </a>
    </div>

    <div>
      <img src="https://images.unsplash.com/photo-1689439518156-3659596b5c6c?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        class="rounded-2xl shadow-lg w-full object-cover">
    </div>

  </div>
</section>

<!-- ABOUT -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold text-gray-900">
      Performance-Driven<span class="text-[#FD5528]">Meta Ads Services</span>
    </h2>

    <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
      Our Meta Ads services focus on delivering real business results through Facebook and Instagram advertising. We design and manage campaigns that target the right audience, optimize ad creatives, and continuously improve performance.
  Whether your goal is lead generation, brand awareness, or sales growth, we ensure maximum ROI with data-driven strategies.
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
      Lead Generation
    </span>

    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">FACEBOOK LEAD ADS</h3>

    <p class="text-sm text-gray-600">
       Capture high-quality leads directly from Facebook with optimized lead forms and targeted campaigns designed to increase conversions.
    </p>

    <div class="flex flex-wrap justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Leads</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Forms</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Conversions</span>
    </div>

  </div>
</article>


<!-- DISPLAY ADS -->
<article data-aos="fade-up" data-aos-delay="120"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Social Engagement
    </span>

    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
      <img src="https://img.icons8.com/?size=100&id=86127&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">Instagram Advertising</h3>

    <p class="text-sm text-gray-600">
   Reach and engage your audience with visually appealing Instagram ads that boost brand awareness and drive meaningful interactions.
    </p>

    <div class="flex flex-wrap justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border px-3 py-1">Reels</span>
      <span class="rounded-full border px-3 py-1">Stories</span>
      <span class="rounded-full border px-3 py-1">Engagement</span>
    </div>

  </div>
</article>


<!-- REMARKETING -->
<article data-aos="fade-up" data-aos-delay="140"
  class="ggroup relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">

  <div class="relative z-10 text-center space-y-4">

    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Audience Retargeting
    </span>

    <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
      <img src="https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">Meta Retargeting Ads</h3>

    <p class="text-sm text-gray-600">
     Re-engage users who interacted with your brand and turn them into customers with highly targeted retargeting campaigns.
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
     Video Marketing
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img src="https://img.icons8.com/?size=100&id=85375&format=png&color=FFFFFF" alt="YouTube Ads" class="h-14 w-14" />
    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">
      Facebook & Instagram Video Ads
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600 group-hover:text-gray-900">
     Promote your brand using engaging video content across Facebook and Instagram to increase reach, engagement, and conversions.
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
    E-commerce Growth
    </span>

    <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
      <img src="https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">Meta Shopping Ads</h3>

    <p class="text-sm text-gray-600">
       Boost your online store sales with dynamic product ads that showcase your products to the right audience.
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
     Campaign Optimization
    </span>

    <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
      <img src="https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff" class="h-14 w-14" />
    </div>

    <h3 class="text-xl font-semibold">Meta Ads Management</h3>

    <p class="text-sm text-gray-600">
     We create and optimize Facebook & Instagram ad campaigns using data-driven strategies to maximize ROI and reduce ad spend waste.
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

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Audience Targeting  </div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Ad Creative Design </div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Campaign Setup  </div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Budget Optimization </div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">A/B Testing  </div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">A/B Testing</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Conversion Tracking</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Retargeting Campaigns</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Performance Reporting</div>

    </div>

  </div>
</section>

<!-- CTA -->
<section class="bg-[#FD5528] py-16 text-center text-white">
  <div class="max-w-3xl mx-auto px-6">

    <h2 class="text-3xl font-bold">
      Ready to Scale with Meta Ads?
    </h2>

    <p class="mt-4">
      Launch high-performing Facebook & Instagram ad campaigns and grow your business with expert Meta Ads management.
    </p>

    <a href="{{ route('frontend.contact') }}"
      class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
      Start Your Meta Ads Campaign
    </a>

  </div>
</section>

@endsection
