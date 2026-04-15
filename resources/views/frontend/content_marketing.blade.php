@extends('component.main')
@section('content')

<!-- HERO -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
        Build Authority & Drive Growth with <br>
        <span class="text-[#FD5528]">Content Marketing</span>
      </h1>

      <p class="mt-6 text-gray-600">
        Attract, engage, and convert your audience with powerful content marketing strategies. We create high-quality content that builds trust and drives long-term business growth.
      </p>

      <p class="mt-4 text-gray-600">
        From blogs to social media and website content, we help you connect with your audience and turn content into conversions.
      </p>

      <a href="{{ route('frontend.contact') }}"
        class="inline-block mt-6 bg-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:bg-orange-600 transition">
        Get Free Content Strategy
      </a>
    </div>

    <div>
      <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7"
        class="rounded-2xl shadow-lg w-full object-cover">
    </div>

  </div>
</section>

<!-- ABOUT -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold text-gray-900">
      Result-Driven <span class="text-[#FD5528]">Content Marketing Services</span>
    </h2>

    <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
      Our content marketing services focus on delivering valuable and engaging content that attracts your audience, builds trust, and generates leads.
      We help brands grow through strategic storytelling and data-driven content.
    </p>

  </div>
</section>

<!-- SERVICES -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- BLOG CONTENT -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Content Creation</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">Blog & Article Writing</h3>

          <p class="text-sm text-gray-600">
            Create SEO-optimized blogs that drive organic traffic and establish your authority.
          </p>

          <div class="flex flex-wrap justify-center gap-3 text-xs text-[#FD5528]">
            <span class="border px-3 py-1 rounded-full">Blogs</span>
            <span class="border px-3 py-1 rounded-full">SEO</span>
            <span class="border px-3 py-1 rounded-full">Traffic</span>
          </div>
        </div>
      </article>


      <!-- SOCIAL CONTENT -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Social Content</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=86127&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">Social Media Content</h3>

          <p class="text-sm text-gray-600">
            Engage your audience with creative and consistent content across social platforms.
          </p>

          <div class="flex flex-wrap justify-center gap-3 text-xs text-[#FD5528]">
            <span class="border px-3 py-1 rounded-full">Posts</span>
            <span class="border px-3 py-1 rounded-full">Engagement</span>
            <span class="border px-3 py-1 rounded-full">Branding</span>
          </div>
        </div>
      </article>


      <!-- STRATEGY -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Planning</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">Content Strategy</h3>

          <p class="text-sm text-gray-600">
            Build a data-driven content plan aligned with your business goals.
          </p>

          <div class="flex flex-wrap justify-center gap-3 text-xs text-[#FD5528]">
            <span class="border px-3 py-1 rounded-full">Planning</span>
            <span class="border px-3 py-1 rounded-full">Research</span>
            <span class="border px-3 py-1 rounded-full">Growth</span>
          </div>
        </div>
      </article>


      <!-- VIDEO -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Video Marketing</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=85375&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">Video Content</h3>

          <p class="text-sm text-gray-600">
            Create engaging videos to boost reach, engagement, and conversions.
          </p>

          <div class="flex flex-wrap justify-center gap-3 text-xs text-[#FD5528]">
            <span class="border px-3 py-1 rounded-full">Video</span>
            <span class="border px-3 py-1 rounded-full">Reach</span>
            <span class="border px-3 py-1 rounded-full">Engagement</span>
          </div>
        </div>
      </article>


      <!-- WEBSITE CONTENT -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Website Content</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">Website & Landing Content</h3>

          <p class="text-sm text-gray-600">
            Convert visitors with compelling website and landing page content.
          </p>

          <div class="flex flex-wrap justify-center gap-3 text-xs text-[#FD5528]">
            <span class="border px-3 py-1 rounded-full">Copywriting</span>
            <span class="border px-3 py-1 rounded-full">Conversion</span>
            <span class="border px-3 py-1 rounded-full">UX</span>
          </div>
        </div>
      </article>


      <!-- OPTIMIZATION -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">
        <div class="text-center space-y-4">
          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Optimization</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">Content Optimization</h3>

          <p class="text-sm text-gray-600">
            Improve performance with SEO optimization and content analytics.
          </p>

          <div class="flex flex-wrap justify-center gap-3 text-xs text-[#FD5528]">
            <span class="border px-3 py-1 rounded-full">SEO</span>
            <span class="border px-3 py-1 rounded-full">Optimization</span>
            <span class="border px-3 py-1 rounded-full">Analytics</span>
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
      What We Do to <span class="text-[#FD5528]">Maximize Your Content Performance</span>
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Content Strategy</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Keyword Research</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">SEO Optimization</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Content Creation</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Distribution</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Audience Engagement</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Performance Tracking</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Lead Generation</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Analytics</div>

    </div>

  </div>
</section>

<!-- CTA -->
<section class="bg-[#FD5528] py-16 text-center text-white">
  <div class="max-w-3xl mx-auto px-6">

    <h2 class="text-3xl font-bold">
      Ready to Grow with Content Marketing?
    </h2>

    <p class="mt-4">
      Build your brand and generate leads with expert content marketing strategies.
    </p>

    <a href="{{ route('frontend.contact') }}"
      class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
      Start Your Content Strategy
    </a>

  </div>
</section>

@endsection