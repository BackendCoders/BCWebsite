@extends('component.main')
@section('content')


<!-- HERO -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
        Rank Higher with a Leading <br>
        <span class="text-[#FD5528]">SEO Company in India</span>
      </h1>

      <p class="mt-6 text-gray-600">
        In today’s competitive digital landscape, ranking on Google is not optional—it’s essential. As a trusted SEO company in India, we help businesses increase their online visibility, drive organic traffic, and generate consistent leads through result-driven SEO strategies.
      </p>

      <p class="mt-4 text-gray-600">
        From startups to enterprises, our SEO experts craft customized strategies including keyword research, technical optimization, content marketing, and link building to ensure long-term growth and higher search engine rankings.
      </p>

      <a href="{{ route('frontend.contact') }}"
        class="inline-block mt-6 bg-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:bg-orange-600 transition">
        Get Free SEO Consultation
      </a>
    </div>

    <div>
      <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71"
        class="rounded-2xl shadow-lg w-full object-cover">
    </div>

  </div>
</section> 

@php $hero = \App\Models\Hero::latest()->first(); @endphp

@if($hero)

<section class="py-16">

<h1>{{ $hero->title }}</h1>

<p>{{ $hero->description }}</p>

@if($hero->image)
<img src="{{ asset('storage/'.$hero->image) }}" width="400">
@endif

<a href="{{ $hero->button_url }}"
   target="{{ $hero->button_target }}">

   {{ $hero->button_text }}

</a>

</section>

@endif


<!-- ABOUT -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold text-gray-900">
      Data-Driven <span class="text-[#FD5528]">SEO Services in India</span>
    </h2>

    <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
      Our SEO services in India are designed to improve your website’s visibility on search engines like Google and Bing. We focus on increasing organic traffic, improving keyword rankings, and maximizing ROI through proven white-hat SEO techniques.

      Whether you need local SEO, eCommerce SEO, or enterprise SEO, our strategies are tailored to meet your business goals and target audience.
    </p>

  </div>
</section>


<!-- SERVICES -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

    



<article data-aos="fade-up" data-aos-delay="100"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">

  <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      On-Site Optimization
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" alt="On Page SEO" class="h-14 w-14" />
    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">
      On-Page SEO
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600 group-hover:text-gray-900">
      Improve your website’s search engine visibility by optimizing meta tags, headings, content structure, internal linking, and keyword placement for better rankings and user experience.
    </p>

    <!-- TAGS -->
    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Keywords</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Meta Tags</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Content</span>
    </div>

  </div>
</article>


<article data-aos="fade-up" data-aos-delay="120"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">

  <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Authority Building
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img src="https://img.icons8.com/?size=100&id=86127&format=png&color=ffffff" alt="Off Page SEO" class="h-14 w-14" />
    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">
      Off-Page SEO
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600 group-hover:text-gray-900">
      Strengthen your website’s authority with high-quality backlinks, brand mentions, and strategic link-building techniques that improve domain trust and search engine rankings.
    </p>

    <!-- TAGS -->
    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Backlinks</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Authority</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Brand Signals</span>
    </div>

  </div>
</article>

<article data-aos="fade-up" data-aos-delay="140"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">

  <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Site Performance
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img src="https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff" alt="Technical SEO" class="h-14 w-14" />
    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">
      Technical SEO
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600 group-hover:text-gray-900">
      Enhance your website’s performance with advanced technical SEO, including site speed optimization, mobile responsiveness, structured data, crawlability, and indexing improvements for higher search rankings.
    </p>

    <!-- TAGS -->
    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Speed</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Indexing</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Crawlability</span>
    </div>

  </div>
</article>

<article data-aos="fade-up" data-aos-delay="160"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">

  <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Local Visibility
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img src="https://img.icons8.com/?size=100&id=7880&format=png&color=ffffff" alt="Local SEO" class="h-14 w-14" />
    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">
      Local SEO
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600 group-hover:text-gray-900">
      Improve your visibility in local search results and Google Maps with optimized business listings, local keywords, and review management to attract nearby customers and drive more conversions.
    </p>

    <!-- TAGS -->
    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Google Maps</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Local Search</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Reviews</span>
    </div>

  </div>
</article>

<article data-aos="fade-up" data-aos-delay="180"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">

  <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      Online Store Growth
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img src="https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff" alt="Ecommerce SEO" class="h-14 w-14" />
    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">
      E-commerce SEO
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600 group-hover:text-gray-900">
      Boost your online store visibility with optimized product pages, category structures, and keyword-rich content designed to increase organic traffic, improve rankings, and drive higher sales conversions.
    </p>

    <!-- TAGS -->
    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Products</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Categories</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Sales</span>
    </div>

  </div>
</article>

<article data-aos="fade-up" data-aos-delay="200"
  class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">

  <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>

  <div class="relative z-10 flex flex-col items-center text-center space-y-4">

    <!-- LABEL -->
    <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
      SEO Insights
    </span>

    <!-- ICON -->
    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
      <img src="https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff" alt="SEO Audit" class="h-14 w-14" />
    </div>

    <!-- TITLE -->
    <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">
      SEO Audit & Strategy
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-sm text-gray-600 group-hover:text-gray-900">
      Analyze your website performance with comprehensive SEO audits, competitor research, and data-driven insights to uncover growth opportunities and build effective long-term SEO strategies.
    </p>

    <!-- TAGS -->
    <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Audit</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Strategy</span>
      <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Analysis</span>
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
      What We Do to <span class="text-[#FD5528]">Improve Your SEO Performance</span>
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Keyword Research</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Website Audit</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Content Optimization</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Technical Improvements</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Link Building</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Competitor Analysis</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">On-Page Optimization</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Off-Page SEO</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Performance Tracking</div>

    </div>

  </div>
</section>


<!-- CTA -->
<section class="bg-[#FD5528] py-16 text-center text-white">
  <div class="max-w-3xl mx-auto px-6">

    <h2 class="text-3xl font-bold">
      Ready to Rank #1 on Google?
    </h2>

    <p class="mt-4">
      Partner with a top SEO company in India and grow your business with powerful, data-driven SEO strategies that deliver long-term results.
    </p>

    <a href="{{ route('frontend.contact') }}"
      class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
      Start Your SEO Journey
    </a>

  </div>
</section>

@php $hero = $page->sections->where('type','hero')->first(); @endphp

@if($hero && $hero->items->count())

<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
        {!! $hero->items[0]->title !!}
      </h1>

      <p class="mt-6 text-gray-600">
        {{ $hero->items[0]->description }}
      </p>

      <p class="mt-4 text-gray-600">
        {{ $hero->items[0]->extra['sub_text'] ?? '' }}
      </p>

      <a href="{{ route('frontend.contact') }}"
        class="inline-block mt-6 bg-[#FD5528] text-white px-6 py-3 rounded-xl">
        {{ $hero->items[0]->extra['button'] ?? 'Get Started' }}
      </a>
    </div>

    <div>
      <img src="{{ asset('storage/'.$hero->items[0]->image) }}"
        class="rounded-2xl shadow-lg w-full object-cover">
    </div>

  </div>
</section>

@endif

@endsection