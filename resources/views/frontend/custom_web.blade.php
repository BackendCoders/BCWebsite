@extends('component.main')
@section('content')

<!-- HERO -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <div>
      <h1 class="text-4xl font-bold leading-tight text-gray-900">
        Build Powerful Solutions with <br>
        <span class="text-[#FD5528]">Custom Web Applications</span>
      </h1>

      <p class="mt-6 text-gray-600">
        We design and develop scalable custom web applications tailored to your business needs. From startups to enterprises, we build secure, high-performance solutions that drive efficiency and growth.
      </p>

      <p class="mt-4 text-gray-600">
        Whether it's a dashboard, CRM, SaaS platform, or enterprise system, our team ensures seamless functionality, modern UI, and optimized performance.
      </p>

      <a href="{{ route('frontend.contact') }}"
        class="inline-block mt-6 bg-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:bg-orange-600 transition">
        Get Free Consultation
      </a>
    </div>

    <div>
      <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c"
        class="rounded-2xl shadow-lg w-full object-cover">
    </div>

  </div>
</section>

<!-- ABOUT -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold text-gray-900">
      Tailored <span class="text-[#FD5528]">Web Application Development</span>
    </h2>

    <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
      Our custom web application services focus on building secure, scalable, and user-friendly solutions. We turn your ideas into powerful applications with modern technologies and best development practices.
    </p>

  </div>
</section>

<!-- SERVICES -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- CARD -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] text-gray-900">

        <!-- HOVER OVERLAY -->
        <div class="absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/10 via-white/40 to-white/10 opacity-0 group-hover:opacity-100 transition duration-500"></div>

        <div class="relative z-10 text-center space-y-4">

          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Development</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
            <img src="https://img.icons8.com/?size=100&id=11668&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">Custom Web App Development</h3>

          <p class="text-sm text-gray-600">
            Build scalable and secure applications tailored to your business workflows and requirements.
          </p>

          <div class="flex flex-wrap justify-center gap-3 text-xs text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Custom</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Scalable</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Secure</span>
          </div>

        </div>
      </article>


      <!-- UI/UX -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871]">

        <div class="absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/10 opacity-0 group-hover:opacity-100 transition"></div>

        <div class="relative z-10 text-center space-y-4">

          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Design</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=86127&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">UI/UX Design</h3>

          <p class="text-sm text-gray-600">
            Create modern, intuitive, and user-friendly interfaces for seamless user experiences.
          </p>

          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">UX</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">UI</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Design</span>
          </div>

        </div>
      </article>


      <!-- API -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow transition duration-500 hover:-translate-y-2">

        <div class="relative z-10 text-center space-y-4">

          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Integration</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=59873&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">API Integration</h3>

          <p class="text-sm text-gray-600">
            Seamlessly integrate third-party APIs and services to extend your application's functionality.
          </p>

          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">API</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Integration</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Automation</span>
          </div>

        </div>
      </article>


      <!-- SAAS -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow transition duration-500 hover:-translate-y-2">

        <div class="text-center space-y-4">

          <span class="text-xs uppercase tracking-widest text-[#FD5528]">SaaS</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=85375&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">SaaS Development</h3>

          <p class="text-sm text-gray-600">
            Build scalable SaaS platforms with multi-user architecture and subscription-based models.
          </p>

          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Cloud</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">SaaS</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Scalable</span>
          </div>

        </div>
      </article>


      <!-- CRM -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow transition duration-500 hover:-translate-y-2">

        <div class="text-center space-y-4">

          <span class="text-xs uppercase tracking-widest text-[#FD5528]">CRM / ERP</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=85467&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">CRM & ERP Systems</h3>

          <p class="text-sm text-gray-600">
            Streamline business operations with powerful CRM and ERP solutions tailored to your workflow.
          </p>

          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">CRM</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">ERP</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Automation</span>
          </div>

        </div>
      </article>


      <!-- SUPPORT -->
      <article class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow transition duration-500 hover:-translate-y-2">

        <div class="text-center space-y-4">

          <span class="text-xs uppercase tracking-widest text-[#FD5528]">Support</span>

          <div class="flex h-20 w-20 mx-auto items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b]">
            <img src="https://img.icons8.com/?size=100&id=110249&format=png&color=ffffff" class="h-14 w-14" />
          </div>

          <h3 class="text-xl font-semibold">Maintenance & Support</h3>

          <p class="text-sm text-gray-600">
            Ensure smooth performance with regular updates, monitoring, and technical support.
          </p>

          <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Support</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Updates</span>
            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Monitoring</span>
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
      What We Deliver in <span class="text-[#FD5528]">Custom Web Applications</span>
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Scalable Architecture</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Secure Development</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Responsive Design</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">API Integrations</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Cloud Deployment</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Performance Optimization</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">User-Friendly Interface</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Testing & QA</div>
      <div class="p-5 bg-white rounded-xl shadow text-center service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">Ongoing Support</div>

    </div>

  </div>
</section>

<!-- CTA -->
<section class="bg-[#FD5528] py-16 text-center text-white">
  <div class="max-w-3xl mx-auto px-6">

    <h2 class="text-3xl font-bold">
      Ready to Build Your Custom Web App?
    </h2>

    <p class="mt-4">
      Transform your ideas into powerful digital solutions with our expert development team.
    </p>

    <a href="{{ route('frontend.contact') }}"
      class="inline-block mt-6 bg-white text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
      Start Your Project
    </a>

  </div>
</section>

@endsection