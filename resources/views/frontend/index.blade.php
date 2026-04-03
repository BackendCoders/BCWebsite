@extends('component.main')
@section('content')

<main class="flex-1">
      <!-- HERO SECTION -->
<section id="hero" class="relative overflow-hidden bg-white px-4 sm:px-6 lg:px-8 py-14 sm:py-16 md:py-20 lg:py-24">

  <div class="max-w-[1400px] mx-auto grid items-center gap-10 md:gap-14 lg:gap-16 lg:grid-cols-2">

    <!-- LEFT CONTENT -->
    <div class="w-full max-w-xl mx-auto lg:mx-0 text-center lg:text-left">

      <!-- BADGE -->
      <span 
    
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

        17+ Years Building Software
      </span>

      <!-- HEADING -->
      <h1 
        data-aos="fade-up"
        data-aos-delay="200"
        class="mt-4 sm:mt-5 text-2xl xs:text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[3.5rem] 
        font-bold leading-tight text-gray-900">

        Building Powerful 
        <br class="hidden sm:block">

        <span class="text-[#FD5528]">
          Software & Digital Platforms
        </span>
      </h1>

      <!-- DESCRIPTION -->
      <p 
        data-aos="fade-up"
        data-aos-delay="300"
        class="mt-4 sm:mt-5 text-xs xs:text-sm sm:text-base md:text-lg 
        leading-relaxed text-gray-600">

        We are a multidisciplinary team of developers, designers, and strategists 
        crafting scalable technology solutions for startups and enterprises worldwide.
      </p>

      <!-- BUTTONS -->
      <div 
        data-aos="fade-up"
        data-aos-delay="400"
        class="mt-6 sm:mt-7 flex flex-col sm:flex-row gap-3 sm:gap-4 
        justify-center lg:justify-start">

        <a href="#contact"
          class="w-full sm:w-auto inline-flex items-center justify-center 
          rounded-lg bg-gradient-to-r from-[#FD5528] to-[#fbb03b] px-5 sm:px-6 py-2.5 sm:py-3 text-xs sm:text-sm font-semibold text-white 
          shadow-md transition hover:bg-orange-600 hover:shadow-lg">

          Start Your Project
        </a>

        <a href="#portfolio"
          class="w-full sm:w-auto inline-flex items-center justify-center 
          rounded-lg border border-gray-300 px-5 sm:px-6 py-2.5 sm:py-3 text-xs sm:text-sm font-semibold text-gray-700 
          transition hover:border-[#FD5528] hover:text-[#FD5528]">

          View Our Work
        </a>

      </div>

    </div>

    <!-- RIGHT IMAGE GRID -->
    <div 
      data-aos="zoom-in"
      data-aos-delay="300"
      class="relative w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-full mx-auto">

      <div class="grid grid-cols-2 gap-3 sm:gap-4 md:gap-5">

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group translate-y-4 sm:translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_1.png')}}"
            class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105">

          <video autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
            <source src="{{asset('assets/images/1.mp4')}}" type="video/mp4">
          </video>

        </div>

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group -translate-y-4 sm:-translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_2.png')}}"
            class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105">

          <video autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
            <source src="{{asset('assets/images/2.mp4')}}" type="video/mp4">
          </video>

        </div>

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group translate-y-4 sm:translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_3.png')}}"
            class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105">

          <video autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
            <source src="{{asset('assets/images/3.mp4')}}" type="video/mp4">
          </video>

        </div>

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group -translate-y-4 sm:-translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_4.png')}}"
            class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105">

          <video autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
            <source src="{{asset('assets/images/4.mp4')}}" type="video/mp4">
          </video>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- END HERO SECTIOPN -->

<!-- WHO WE ARE-->
<section id="who-we-are" class="bg-[#F9FAFB] px-4 sm:px-6 md:px-10 lg:px-16 xl:px-20 py-14 sm:py-16 md:py-20 lg:py-24 relative overflow-hidden">

  <!-- GLOW -->
  <div class="absolute top-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#FD5528]/10 blur-[100px] rounded-full"></div>
  <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-orange-200/30 blur-[100px] rounded-full"></div>

  <div class="max-w-[1400px] mx-auto text-center relative z-10">

      <!-- BADGE -->
      <span 
    
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

      Who We Are
    </span>

    <!-- HEADING -->
    <h2 
      class="mt-5 text-2xl xs:text-3xl sm:text-4xl md:text-5xl lg:text-6xl 
      font-bold text-gray-900 leading-tight"
      data-aos="fade-up"
      data-aos-delay="100">

      Backend 
      <span class="text-[#FD5528]">Coders</span> 
      India
    </h2>

    <!-- DESCRIPTION -->
    <p 
      class="mx-auto mt-4 sm:mt-6 max-w-3xl 
      text-xs xs:text-sm sm:text-base md:text-lg 
      leading-relaxed text-gray-600"
      data-aos="fade-up"
      data-aos-delay="200">

      Backend Coders India is a boutique technology studio crafting high-performance
      web, mobile, and SaaS platforms for startups and enterprises that demand
      scalability, security, and modern digital experiences.
    </p>

    <!-- SERVICES -->
    <div class="mt-10 sm:mt-12 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-4 md:gap-5">

      <!-- CARD -->
      <div class="service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in">
        <img src="https://img.icons8.com/?size=100&id=2169&format=png&color=fd5528" class="mx-auto mb-2">
        <p class="text-sm font-semibold text-gray-900 tracking-tight">SaaS Platforms</p>
      </div>

      <div class="service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in" data-aos-delay="100">
        <img src="https://img.icons8.com/?size=100&id=XZzsxYpJLV3S&format=png&color=fd5528" class="mx-auto mb-2">
        <p class="text-sm font-semibold text-gray-900 tracking-tight">ERP Systems</p>
      </div>

      <div class="service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in" data-aos-delay="200">
        <img src="https://img.icons8.com/?size=100&id=3578&format=png&color=fd5528" class="mx-auto mb-2">
        <p class="text-sm font-semibold text-gray-900 tracking-tight">POS Systems</p>
      </div>

      <div class="service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in" data-aos-delay="300">
        <img src="https://img.icons8.com/?size=100&id=XkroSDpLASWA&format=png&color=fd5528" class="mx-auto mb-2">
        <p class="text-sm font-semibold text-gray-900 tracking-tight">E-commerce</p>
      </div>

      <div class="service-card transition duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(253,85,40,0.15)]" data-aos="zoom-in" data-aos-delay="400">
        <img src="https://img.icons8.com/?size=100&id=vJuSkDSbjZgp&format=png&color=fd5528" class="mx-auto mb-2">
        <p class="text-sm font-semibold text-gray-900 tracking-tight">Custom Web Apps</p>
      </div>

    </div>



  </div>

</section>
<!-- END WHO WE ARE -->

<!-- SERVICE -->
<section id="services" class="relative overflow-hidden bg-white px-6 py-16 sm:py-20 lg:py-24">

    <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-[#FD5528]/10 to-transparent pointer-events-none"></div>
    <div class="absolute right-0 top-1/4 hidden w-64 h-64 rounded-full bg-[#FD5528]/10 blur-3xl lg:block"></div>
    <div class="absolute left-0 bottom-0 hidden w-72 h-72 rounded-full bg-orange-200/25 blur-3xl lg:block"></div>

    <div class="relative max-w-7xl mx-auto">

        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto">
  <!-- BADGE -->
      <span 
    
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

          Services
    </span>

            <h2 class="mt-6 text-3xl font-bold text-gray-900 md:text-4xl"
            data-aos="fade-up" data-aos-delay="100">
                End-to-end Software Development
            </h2>

            <p class="mt-4 text-gray-600 sm:text-lg"
            data-aos="fade-up" data-aos-delay="200">
                We take your idea from discovery through delivery with a transparent,
                milestone-driven approach.
            </p>

        </div>

        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <article data-aos="fade-up" data-aos-delay="100"
                    class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
                    <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Bespoke Web</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
hover:from-[#fb813b] hover:to-[#b00000]  shadow-inner">
                            <img src="https://img.icons8.com/?size=100&id=DCkAZ79sIYhT&format=png&color=ffffff" alt="Custom web app" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Custom Web Applications</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Scalable platforms with modern stacks, measurable KPIs, and performance-first code.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Iterative</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Performance</span>
                        </div>
                    </div>
                </article>

                <article data-aos="fade-up" data-aos-delay="120"
                    class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
                    <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Design & Build</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
hover:from-[#fb813b] hover:to-[#b00000] shadow-inner">
                            <img src="https://img.icons8.com/?size=100&id=8Y6ohiJ337rc&format=png&color=ffffff" alt="Design icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Website Design & Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Responsive, brand-complete websites that load fast and stay SEO-friendly.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Pixel Perfect</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">SEO Focus</span>
                        </div>
                    </div>
                </article>

                <article data-aos="fade-up" data-aos-delay="140"
                    class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
                    <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">SaaS Forces</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
hover:from-[#fb813b] hover:to-[#b00000] shadow-inner">
                            <img src="https://img.icons8.com/?size=100&id=k8TSihyFk2cJ&format=png&color=ffffff" alt="SaaS icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">SaaS Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Multi-tenant platforms engineered for reliability, governance, and scale.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Elastic</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Managed Ops</span>
                        </div>
                    </div>
                </article>

                <article data-aos="fade-up" data-aos-delay="160"
                    class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
                    <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Enterprise Core</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
hover:from-[#fb813b] hover:to-[#b00000] shadow-inner">
                            <img src="https://img.icons8.com/?size=100&id=Rk5rrSlqrNZO&format=png&color=ffffff" alt="ERP icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">ERP & POS Software</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Operational grade systems that align inventory, payments, and teams.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Real-time</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Proactive</span>
                        </div>
                    </div>
                </article>

                <article data-aos="fade-up" data-aos-delay="180"
                    class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
                    <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Commerce Pulse</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
hover:from-[#fb813b] hover:to-[#b00000] shadow-inner">
                            <img src="https://img.icons8.com/?size=100&id=8OxFnElAJgpE&format=png&color=ffffff" alt="Commerce icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">E-commerce Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Conversion-led storefronts with secure payments and real-time analytics.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Secure</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Fast</span>
                        </div>
                    </div>
                </article>

                <article data-aos="fade-up" data-aos-delay="200"
                    class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
                    <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Mobile Pulse</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
hover:from-[#fb813b] hover:to-[#b00000] shadow-inner">
                            <img src="https://img.icons8.com/?size=100&id=67475&format=png&color=ffffff" alt="Mobile icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Mobile App Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Cross-platform experiences with native polish, motion, and accessible flows.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Smooth UI</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Native Feel</span>
                        </div>
                    </div>
                </article>

                <article data-aos="fade-up" data-aos-delay="220"
                    class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
                    <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">API Layer</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
hover:from-[#fb813b] hover:to-[#b00000] shadow-inner">
                            <img src="https://img.icons8.com/?size=100&id=6kPR2dlup5KK&format=png&color=ffffff" alt="API icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">API Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Secure REST endpoints, clean contracts, and integration-ready tooling.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">REST</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Webhooks</span>
                        </div>
                    </div>
                </article>

                <article data-aos="fade-up" data-aos-delay="240"
                    class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
                    <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Growth Duo</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
hover:from-[#fb813b] hover:to-[#b00000] shadow-inner">
                            <img src="https://img.icons8.com/?size=100&id=103102&format=png&color=ffffff" alt="Marketing icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Digital Marketing & SEO</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Data-backed marketing that grows traffic, leads, and conversions.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Analytics</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Growth</span>
                        </div>
                    </div>
                </article>

                <article data-aos="fade-up" data-aos-delay="260"
                    class="group relative overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-7 shadow-[0_25px_60px_rgba(0,0,0,0.1)] transition duration-500 hover:-translate-y-2 hover:shadow-[#da8871] hover:bg-white/10 hover:backdrop-blur-[18px] text-gray-900">
                    <div class="pointer-events-none absolute inset-0 rounded-[1.75rem] bg-gradient-to-br from-[#FD5528]/15 via-white/40 to-white/10 opacity-0 transition duration-500 group-hover:opacity-80 backdrop-blur-[0px] group-hover:backdrop-blur-[24px]"></div>
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">Startup Sprint</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
hover:from-[#fb813b] hover:to-[#b00000] shadow-inner">
                            <img src="https://img.icons8.com/?size=100&id=KR7IxBJfODTv&format=png&color=ffffff" alt="MVP icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Startup MVP Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Rapid prototyping with user testing, guided learnings, and clear success metrics.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Rapid</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Validated</span>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </div>
</section>
<!-- END SERVICE SECTION -->

<!-- TECHNOLOGIES -->
<section id="technologies" class="bg-[#F9FAFB] px-6 py-16 sm:py-20 lg:py-24">

  <div class="max-w-7xl mx-auto">

    <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <p
        data-aos="fade-up"
        class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528] relative px-5 py-2 rounded-full bg-white/70 backdrop-blur-md shadow-[0_8px_20px_rgba(0,0,0,0.08)] border border-white/40 before:absolute before:inset-0 before:rounded-full before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 before:-z-10"
      >
        Development Expertise
      </p>

      <h2 class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl" data-aos="fade-up" data-aos-delay="100">
        Technologies We Love
      </h2>

      <p class="mt-4 text-sm sm:text-base text-gray-600" data-aos="fade-up" data-aos-delay="200">
        A modern stack for scalable apps, polished interfaces, and reliable cloud delivery.
      </p>
    </div>

    <div class="grid gap-8 lg:grid-cols-[0.95fr_1.05fr] items-stretch">

      <div class="rounded-[2rem] border border-white/80 bg-white/95 p-8 shadow-[0_30px_80px_rgba(253,85,40,0.12)]" data-aos="fade-right" data-aos-delay="300">
        <span class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">
          Core expertise
        </span>

        <h3 class="mt-6 text-2xl sm:text-3xl fontffffffbold text-gray-900">
          Build faster with proven tools
        </h3>

        <p class="mt-4 text-gray-600 leading-relaxed">
          We combine backend power, frontend polish, and cloud infrastructure to deliver fast, secure, and scalable digital products.
        </p>

        <div class="mt-10 grid gap-4 sm:grid-cols-2">
          <div class="rounded-3xl border border-gray-200 bg-[#FFF7F0] p-5">
            <p class="font-semibold text-gray-900">Backend & APIs</p>
            <p class="mt-2 text-sm text-gray-600">.NET Core, Node.js, Laravel</p>
          </div>
          <div class="rounded-3xl border border-gray-200 bg-[#EFF7FF] p-5">
            <p class="font-semibold text-gray-900">Frontend</p>
            <p class="mt-2 text-sm text-gray-600">React, Next.js, TypeScript</p>
          </div>
          <div class="rounded-3xl border border-gray-200 bg-[#EFFCF5] p-5">
            <p class="font-semibold text-gray-900">Cloud & Data</p>
            <p class="mt-2 text-sm text-gray-600">AWS, Firebase, MongoDB, SQL Server</p>
          </div>
          <div class="rounded-3xl border border-gray-200 bg-[#FFF5F7] p-5">
            <p class="font-semibold text-gray-900">Delivery</p>
            <p class="mt-2 text-sm text-gray-600">SaaS, eCommerce, enterprise-grade products</p>
          </div>
        </div>
      </div>

      <div class="rounded-[2rem] bg-white border border-gray-200 shadow-xl overflow-hidden" data-aos="fade-left" data-aos-delay="400">
        <div class="p-6 sm:p-8 bg-gradient-to-br from-white via-[#FFF6F0] to-[#FFF2ED]">
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
              <span class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Tech gallery</span>
              <h3 class="mt-3 text-2xl font-bold text-gray-900">Loved by product teams</h3>
            </div>
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">
              Responsive layout
            </span>
          </div>

          <!-- <div class="mt-8 grid gap-4 grid-cols-2 sm:grid-cols-3 xl:grid-cols-4">
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition  hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dotnetcore/dotnetcore-original.svg" class="w-12 h-12" alt="Dotnet Core">
              <span class="text-sm font-semibold text-gray-900">.NET Core</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-12 h-12" alt="React">
              <span class="text-sm font-semibold text-gray-900">React</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-12 h-12" alt="Node.js">
              <span class="text-sm font-semibold text-gray-900">Node.js</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" class="w-12 h-12" alt="MongoDB">
              <span class="text-sm font-semibold text-gray-900">MERN</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" class="w-12 h-12" alt="WordPress">
              <span class="text-sm font-semibold text-gray-900">WordPress</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.simpleicons.org/spotify/1DB954" class="w-12 h-12" alt="Shopify">
              <span class="text-sm font-semibold text-gray-900">Shopify</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-12 h-12" alt="Laravel">
              <span class="text-sm font-semibold text-gray-900">Laravel</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftsqlserver/microsoftsqlserver-plain.svg" class="w-12 h-12" alt="SQL Server">
              <span class="text-sm font-semibold text-gray-900">SQL Server</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" class="w-12 h-12" alt="Firebase">
              <span class="text-sm font-semibold text-gray-900">Firebase</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" class="w-12 h-12" alt="AWS">
              <span class="text-sm font-semibold text-gray-900">AWS</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" class="w-12 h-12" alt="TypeScript">
              <span class="text-sm font-semibold text-gray-900">TypeScript</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" class="w-12 h-12 bg-white p-1 rounded" alt="Next.js">
              <span class="text-sm font-semibold text-gray-900">Next.js</span>
            </div>
          </div> -->
           <div class="mt-8 grid gap-4 grid-cols-3 sm:grid-cols-3 xl:grid-cols-4">
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition  hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dotnetcore/dotnetcore-original.svg" class="w-12 h-12" alt="Dotnet Core">
              <span class="text-sm font-semibold text-gray-900">.NET Core</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-12 h-12" alt="React">
              <span class="text-sm font-semibold text-gray-900">React</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-12 h-12" alt="Node.js">
              <span class="text-sm font-semibold text-gray-900">Node.js</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" class="w-12 h-12" alt="MongoDB">
              <span class="text-sm font-semibold text-gray-900">MERN</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" class="w-12 h-12" alt="WordPress">
              <span class="text-sm font-semibold text-gray-900">WordPress</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.simpleicons.org/spotify/1DB954" class="w-12 h-12" alt="Shopify">
              <span class="text-sm font-semibold text-gray-900">Shopify</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-12 h-12" alt="Laravel">
              <span class="text-sm font-semibold text-gray-900">Laravel</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftsqlserver/microsoftsqlserver-plain.svg" class="w-12 h-12" alt="SQL Server">
              <span class="text-sm font-semibold text-gray-900">SQL Server</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" class="w-12 h-12" alt="Firebase">
              <span class="text-sm font-semibold text-gray-900">Firebase</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" class="w-12 h-12" alt="AWS">
              <span class="text-sm font-semibold text-gray-900">AWS</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" class="w-12 h-12" alt="TypeScript">
              <span class="text-sm font-semibold text-gray-900">TypeScript</span>
            </div>
            <div class="flex flex-col items-center gap-3 rounded-3xl border border-gray-200 bg-[#F9FAFB] p-5 text-center transition hover:-translate-y-1 hover:border-[#FD5528] hover:bg-white">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" class="w-12 h-12 bg-white p-1 rounded" alt="Next.js">
              <span class="text-sm font-semibold text-gray-900">Next.js</span>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END TECHNOLOGIES -->

<!-- process-directions -->
<section class="relative overflow-hidden py-16 sm:py-20 lg:py-24 bg-[#F9FAFB]">

  <div class="max-w-9xl lg:mx-24 mx-auto px-6">

    <!-- Heading -->
    <div class="text-center md:mb-16">
         <p 
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

         Process

    </p>
    
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">
        Predictable Delivery
      </h2>
      <p class="text-gray-500 mt-3 max-w-xl mx-auto">
        Structured milestones that keep your project moving forward.
      </p>
    </div>

    <div class="relative">

      <!-- 🔴 MOBILE LINE (BEHIND CONTENT) -->
      <div class="absolute left-6 top-0 h-full border-l-2 border-dashed border-[#FD5528]/30 z-0 lg:hidden"></div>

      <!-- 🔴 DESKTOP LINE -->
      <div class="hidden lg:block absolute top-6 left-0 w-full border-t-2 border-dashed border-[#FD5528]/40"></div>

      <!-- STEPS -->
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-y-12 relative z-10">

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">

          <!-- CIRCLE -->
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition bg-gradient-to-r 
hover:from-[#fb813b] hover:to-[#b00000] group-hover:text-white">
            01
          </div>

          <!-- TEXT -->
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Discovery
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Understanding goals & defining scope
            </p>
          </div>

        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition group-hover:bg-gradient-to-r 
hover:from-[#fb813b] hover:to-[#b00000] group-hover:text-white">
            02
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              UI / UX
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Designing intuitive experiences
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition group-hover:bg-gradient-to-r 
hover:from-[#fb813b] hover:to-[#b00000] group-hover:text-white">
            03
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Development
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Building scalable applications
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition group-hover:bg-gradient-to-r 
hover:from-[#fb813b] hover:to-[#b00000] group-hover:text-white">
            04
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Testing
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Ensuring quality & performance
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition group-hover:bg-gradient-to-r 
hover:from-[#fb813b] hover:to-[#b00000] group-hover:text-white">
            05
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Deployment
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Launching production-ready apps
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition group-hover:bg-gradient-to-r 
hover:from-[#fb813b] hover:to-[#b00000] group-hover:text-white">
            06
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Support
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Continuous improvements
            </p>
          </div>
        </div>

      </div>

    </div>

  </div>

</section>
<!-- pr -->


<section class="bg-[#F9FAFB] py-16 sm:py-20 lg:py-24 px-6">
  <div class="max-w-9xl lg:mx-24 mx-auto text-center mb-16 items-center">
        <!-- Heading -->
            <p 
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

          Why Choose Us

    </p>
      <!-- <p class="text-sm uppercase tracking-widest text-[#FD5528] font-semibold">
        Why Choose Us
      </p> -->

      <h2 class="mt-4 text-3xl md:text-4xl font-bold text-gray-900">
        Built for long-term partnerships
      </h2>
      
      <span class="mt-4 my-2 text-gray-600 max-w-lg text-center">
        We deliver scalable, reliable, and future-ready solutions tailored to your business growth.
      </span>


    </div>
  <div class="max-w-9xl lg:mx-24 mx-auto grid lg:grid-cols-2 gap-16 items-center">
  
 <!-- LEFT CONTENT -->
    <div class="relative">

      <img 
        src="{{asset('assets/images/choose-us.png')}}"
        alt="Team working"
        class="rounded-2xl shadow-xl w-full h-full object-cover"
      >

   
    </div>

       <!-- RIGHT IMAGE -->
    <div>

    

      <!-- FEATURES GRID -->
      <div class="mt-10 grid sm:grid-cols-2 gap-6">

    
        <!-- ITEM -->
        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
                  <img src="https://img.icons8.com/?size=100&id=DCkAZ79sIYhT&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">17+ Years Experience</h3>
            <p class="text-xs text-gray-600 mt-1">Reliable, high-quality solutions across industries.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
             <img src="https://img.icons8.com/?size=100&id=124222&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Dedicated Teams</h3>
            <p class="text-xs text-gray-600 mt-1">Experts focused exclusively on your project.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
             <img src="https://img.icons8.com/?size=100&id=5TJlel7-79RU&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Scalable Architecture</h3>
            <p class="text-xs text-gray-600 mt-1">Systems built to grow with your business.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
            <img src="https://img.icons8.com/?size=100&id=68443&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Agile & Transparent</h3>
            <p class="text-xs text-gray-600 mt-1">Clear communication and faster delivery.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
               <img src="https://img.icons8.com/?size=100&id=117533&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Startup-Friendly Pricing</h3>
            <p class="text-xs text-gray-600 mt-1">Flexible pricing for growing businesses.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
             <img src="https://img.icons8.com/?size=100&id=neBRkBaejCVJ&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Long-Term Support</h3>
            <p class="text-xs text-gray-600 mt-1">Continuous maintenance and updates.</p>
          </div>
        </div>

      </div>

    </div>


   

  </div>

</section>

<!-- serve industry -->
<section id="industries" class="bg-white px-6 py-16 sm:py-20 lg:py-24">

  <div class="max-w-9xl lg:mx-24 mx-auto text-center">
       <p 
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

          Industries

    </p>
  

    <h2 class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl"
    data-aos="fade-up" data-aos-delay="100">
      Industries We Serve
    </h2>

    <div class="mt-16 grid gap-6 grid-cols-2 sm:grid-cols-2 md:grid-cols-4">

      <div data-aos="zoom-in"
      class="rounded-xl border border-gray-200 bg-gray-50 py-8 font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
      <div class="flex justify-center">
        <img src="https://img.icons8.com/?size=100&id=DF91YUQKnsfO&format=png&color=FD5528" alt="">
      </div> 
      Retail
      </div>

      <div data-aos="zoom-in" data-aos-delay="100"
      class="rounded-xl border border-gray-200 bg-gray-50 py-8 font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
        <div class="flex justify-center">
        <img src="https://img.icons8.com/?size=100&id=rgaIU6UFSNfF&format=png&color=FD5528" alt="">
      </div> 
      Healthcare
      </div>

      <div data-aos="zoom-in" data-aos-delay="200"
      class="rounded-xl border border-gray-200 bg-gray-50 py-8 font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
         <div class="flex justify-center">
        <img src="https://img.icons8.com/?size=100&id=HjX5BJw6tvqD&format=png&color=FD5528" alt="">
      </div> 
      Education
      </div>

      <div data-aos="zoom-in" data-aos-delay="300"
      class="rounded-xl border border-gray-200 bg-gray-50 py-8 font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
        <div class="flex justify-center">
        <img src="https://img.icons8.com/?size=100&id=sHsQ1Kl1HHOx&format=png&color=FD5528" alt="">
      </div> 
      Logistics
      </div>

      <div data-aos="zoom-in" data-aos-delay="400"
      class="rounded-xl border border-gray-200 bg-gray-50 py-8 font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
         <div class="flex justify-center">
        <img src="https://img.icons8.com/?size=100&id=115007&format=png&color=FD5528" alt="">
      </div> 
      Hospitality
      </div>

      <div data-aos="zoom-in" data-aos-delay="500"
      class="rounded-xl border border-gray-200 bg-gray-50 py-8 font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
        <div class="flex justify-center">
        <img src="https://img.icons8.com/?size=100&id=KR7IxBJfODTv&format=png&color=FD5528" alt="">
      </div> 
      Startups
      </div>

      <div data-aos="zoom-in" data-aos-delay="600"
      class="rounded-xl border border-gray-200 bg-gray-50 py-8 font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
        <div class="flex justify-center">
        <img src="https://img.icons8.com/?size=100&id=8OxFnElAJgpE&format=png&color=FD5528" alt="">
      </div> 
      E-commerce
      </div>

      <div data-aos="zoom-in" data-aos-delay="700"
      class="rounded-xl border border-gray-200 bg-gray-50 py-8 font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
         <div class="flex justify-center">
        <img src="https://img.icons8.com/?size=100&id=Av3axTNxQaRs&format=png&color=FD5528" alt="">
      </div> 
      Enterprise
      </div>

    </div>

  </div>

</section>
<!-- END SERVE INDUSTRY -->

<!-- BLOG -->
<section id="blog" class="bg-white px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">

  <div class="max-w-9xl lg:mx-24 mx-auto">

    <!-- HEADER -->
    <div class="text-center max-w-2xl mx-auto">

     <p 
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

          Blog

    </p>
      <!-- <p class="text-[10px] sm:text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
        Blog
      </p> -->

      <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
        Insights & Updates
      </h2>

      <p class="mt-3 text-sm sm:text-base text-gray-500">
        Stay updated with our latest insights on development, design, and scalable systems.
      </p>

    </div>

    <!-- GRID -->
    <div class="mt-10 sm:mt-12 lg:mt-16 grid gap-6 sm:gap-8 grid-cols-1 md:grid-cols-2">

      <!-- CARD -->
      <article 
        data-aos="fade-up"
        class="group rounded-2xl border border-gray-200 bg-white p-5 sm:p-6 lg:p-7 
               shadow-sm transition duration-300 
               hover:shadow-lg hover:shadow-[#FD5528]/20 
               hover:-translate-y-1">

        <p class="text-[10px] sm:text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
          Build
        </p>

        <h3 class="mt-3 text-lg sm:text-xl font-semibold text-gray-900 leading-snug group-hover:text-[#FD5528] transition">
          Navigating Multi-Tenant SaaS Architecture
        </h3>

        <p class="mt-3 text-sm sm:text-base text-gray-600">
          How we layer identity, data models, and CI/CD to launch scalable SaaS platforms.
        </p>

        <!-- CTA -->
        <div class="mt-4 flex items-center text-sm font-medium text-[#FD5528] opacity-0 group-hover:opacity-100 transition">
          Read More →
        </div>

      </article>

      <!-- CARD -->
      <article 
        data-aos="fade-up"
        data-aos-delay="150"
        class="group rounded-2xl border border-gray-200 bg-white p-5 sm:p-6 lg:p-7 
               shadow-sm transition duration-300 
               hover:shadow-lg hover:shadow-[#FD5528]/20 
               hover:-translate-y-1">

        <p class="text-[10px] sm:text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
          Design
        </p>

        <h3 class="mt-3 text-lg sm:text-xl font-semibold text-gray-900 leading-snug group-hover:text-[#FD5528] transition">
          Design Systems for Unpredictable Growth
        </h3>

        <p class="mt-3 text-sm sm:text-base text-gray-600">
          Crafting component libraries that balance design quality with developer efficiency.
        </p>

        <!-- CTA -->
        <div class="mt-4 flex items-center text-sm font-medium text-[#FD5528] opacity-0 group-hover:opacity-100 transition">
          Read More →
        </div>

      </article>

    </div>

  </div>

</section>
<!-- END BLOG -->

<!-- clients -->
 <section class="relative py-32 px-6 overflow-hidden">

  <!-- BACKGROUND -->
  <div class="absolute inset-0 bg-gray-100"></div>

  <div class="relative max-w-7xl mx-auto text-center">

    <!-- HEADER -->
    <p class="inline-block text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528] px-5 py-2 rounded-full 
      bg-white/5 backdrop-blur-md border border-white/10">
      Trusted Clients
    </p>

    <h2 class="mt-6 text-3xl md:text-5xl font-bold text-black">
      Brands That Trust Us
    </h2>

    <!-- MARQUEE WRAPPER -->
    <div class="mt-14 overflow-hidden group">

      <div class="flex w-max animate-marquee gap-12 flex-nowrap group-hover:[animation-play-state:paused]">

        <!-- ORIGINAL SET -->
        <div class="logo"> <img src="{{asset('assets/logos/ifnoss.jpeg')}}"> </div>
        <div class="logo"> <img src="{{asset('assets/logos/ace.jpeg')}}"> </div>
        <div class="logo"> <img src="{{asset('assets/logos/arrive.jpeg')}}"> </div>
        <div class="logo"> <img src="{{asset('assets/logos/ladigue.jpeg')}}"> </div>
        <div class="logo"> <img src="{{asset('assets/logos/marley.jpeg')}}"> </div>

        <!-- DUPLICATE SET (IMPORTANT) -->
        <div class="logo"> <img src="{{asset('assets/logos/matchbly.jpeg')}}"> </div>
        <div class="logo"> <img src="{{asset('assets/logos/praslin.jpg')}}"> </div>
        <div class="logo"> <img src="{{asset('assets/logos/pulse-event.jpeg')}}"> </div>
        <div class="logo"> <img src="{{asset('assets/logos/skyda.jpeg')}}"> </div>
        <div class="logo"> <img src="{{asset('assets/logos/ifnoss.jpeg')}}"> </div>

      </div>

    </div>

  </div>
</section>

<section class="bg-[#F9FAFB] py-16 sm:py-20 lg:py-24 px-4 sm:px-6">

  <div class="max-w-9xl lg:mx-24 mx-auto">

    <!-- Heading -->
    <div class="text-center mb-12 sm:mb-16">
       <p 
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

          FAQ

    </p>
      <!-- <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
        FAQ
      </p> -->

      <h2 class="mt-4 text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">
        Frequently Asked Questions
      </h2>

      <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-sm sm:text-base">
        Everything you need to know about working with Backend Coders.
      </p>
    </div>

    <!-- GRID -->
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

      <!-- LEFT IMAGE (TOP ON MOBILE) -->
      <div class="order-1 lg:order-2 relative">
        <img 
          src="{{asset('assets/images/faq.png')}}"
          alt="FAQ Illustration"
          class="rounded-2xl shadow-xl w-full h-full object-cover"
        >
      </div>

      <!-- FAQ LIST -->
      <div class="order-2 lg:order-1 space-y-4">

        <!-- ITEM -->
        <details class="group bg-white border border-gray-200 rounded-xl p-5 shadow-sm open:shadow-md transition duration-300">
          <summary class="flex justify-between items-center cursor-pointer list-none">
            <span class="font-medium text-gray-900 text-sm sm:text-base">
              What services do you offer?
            </span>
            <span class="text-[#FD5528] text-xl transition-transform duration-300 group-open:rotate-45">
              +
            </span>
          </summary>
          <p class="mt-3 text-sm text-gray-500 leading-relaxed">
            We specialize in backend development, API design, cloud infrastructure, database architecture, and scalable enterprise applications.
          </p>
        </details>

        <!-- ITEM -->
        <details class="group bg-white border border-gray-200 rounded-xl p-5 shadow-sm open:shadow-md transition duration-300">
          <summary class="flex justify-between items-center cursor-pointer list-none">
            <span class="font-medium text-gray-900 text-sm sm:text-base">
              Which technologies do you work with?
            </span>
            <span class="text-[#FD5528] text-xl transition-transform duration-300 group-open:rotate-45">
              +
            </span>
          </summary>
          <p class="mt-3 text-sm text-gray-500 leading-relaxed">
            We work with .NET Core, Node.js, Laravel, SQL Server, Redis, Azure, AWS, and modern DevOps tools.
          </p>
        </details>

        <!-- ITEM -->
        <details class="group bg-white border border-gray-200 rounded-xl p-5 shadow-sm open:shadow-md transition duration-300">
          <summary class="flex justify-between items-center cursor-pointer list-none">
            <span class="font-medium text-gray-900 text-sm sm:text-base">
              Do you provide dedicated development teams?
            </span>
            <span class="text-[#FD5528] text-xl transition-transform duration-300 group-open:rotate-45">
              +
            </span>
          </summary>
          <p class="mt-3 text-sm text-gray-500 leading-relaxed">
            Yes, we offer dedicated developers and full teams who work exclusively on your project.
          </p>
        </details>

        <!-- ITEM -->
        <details class="group bg-white border border-gray-200 rounded-xl p-5 shadow-sm open:shadow-md transition duration-300">
          <summary class="flex justify-between items-center cursor-pointer list-none">
            <span class="font-medium text-gray-900 text-sm sm:text-base">
              How do you ensure scalability and performance?
            </span>
            <span class="text-[#FD5528] text-xl transition-transform duration-300 group-open:rotate-45">
              +
            </span>
          </summary>
          <p class="mt-3 text-sm text-gray-500 leading-relaxed">
            We design systems with microservices, caching, load balancing, and optimized database structures.
          </p>
        </details>

        <!-- ITEM -->
        <details class="group bg-white border border-gray-200 rounded-xl p-5 shadow-sm open:shadow-md transition duration-300">
          <summary class="flex justify-between items-center cursor-pointer list-none">
            <span class="font-medium text-gray-900 text-sm sm:text-base">
              What is your development process?
            </span>
            <span class="text-[#FD5528] text-xl transition-transform duration-300 group-open:rotate-45">
              +
            </span>
          </summary>
          <p class="mt-3 text-sm text-gray-500 leading-relaxed">
            We follow an agile process including planning, design, development, testing, deployment, and continuous support.
          </p>
        </details>

        <!-- ITEM -->
        <details class="group bg-white border border-gray-200 rounded-xl p-5 shadow-sm open:shadow-md transition duration-300">
          <summary class="flex justify-between items-center cursor-pointer list-none">
            <span class="font-medium text-gray-900 text-sm sm:text-base">
              Do you provide post-launch support?
            </span>
            <span class="text-[#FD5528] text-xl transition-transform duration-300 group-open:rotate-45">
              +
            </span>
          </summary>
          <p class="mt-3 text-sm text-gray-500 leading-relaxed">
            Yes, we provide long-term maintenance, monitoring, updates, and scaling support.
          </p>
        </details>

      </div>

    </div>

  </div>

</section>
<!-- contact section -->
<section id="contact" class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24 px-6">

  <div class="pointer-events-none absolute inset-0 opacity-60">
    <div class="absolute -top-20 left-8 h-44 w-44 rounded-full bg-[#FD5528]/20 blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-8 right-10 h-60 w-60 rounded-full bg-[#0D0D0D]/10 blur-[140px]"></div>
    <div class="absolute top-1/2 left-0 h-32 w-32 -translate-y-1/2 rounded-full bg-[#FD5528]/10 blur-2xl"></div>
  </div>

  <div class="relative max-w-9xl lg:mx-24 mx-auto">

    <!-- Heading -->
    <div class="text-center mb-12 sm:mb-16">
       <p 
      data-aos="fade-up"
      class="inline-flex items-center justify-center text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 rounded-full 
         bg-white/70 backdrop-blur-lg 
         shadow-[0_8px_30px_rgba(253,85,40,0.18)]
         border border-[#FD5528]/20
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/40 before:to-orange-200/30 
         before:-z-10">

          Contact Us

    </p>

    <h1 class="text-4xl text-[#0D0D0D] md:text-5xl font-bold mb-4 mt-4" data-aos="fade-up">
      Get in Touch
    </h1>

    <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
      Have a project in mind or need backend solutions?  
      Our team at <span class="text-[#FC5124] font-semibold">Backend Coders</span> builds scalable systems with transparency and velocity.
    </p>

    </div>

    <!-- Main Layout -->
    <div class=" flex justify-center items-center gap-10 lg:gap-16 flex-col lg:flex-row">

  

      <!-- RIGHT SIDE FORM -->
      <div class="order-1 lg:order-2 relative bg-white p-8 rounded-[36px] shadow-[0_40px_90px_rgba(15,23,42,0.18)] border border-[#f1f1f1] overflow-hidden">

        <div class="absolute -top-10 -right-10 h-32 w-32 bg-gradient-to-br from-[#FD5528]/20 to-transparent blur-3xl opacity-80"></div>
        <div class="absolute bottom-6 left-6 h-20 w-20 bg-gradient-to-br from-[#0D0D0D]/10 to-transparent blur-3xl"></div>

        <div class="relative mb-6">
          <h2 class="text-2xl font-semibold text-gray-900">
            Contact Us
          </h2>
          <p class="text-sm text-gray-500 mt-1">
            Fill out the form and we’ll get back to you shortly.
          </p>
        </div>

        <form class="relative space-y-6">

          <div class="grid sm:grid-cols-2 gap-4">
            <input type="text" placeholder="First Name"
              class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">

            <input type="text" placeholder="Last Name"
              class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">
          </div>

          <input type="email" placeholder="Email Address"
            class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">

          <input type="text" placeholder="Subject"
            class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">

          <textarea rows="4" placeholder="Your Message"
            class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200"></textarea>

          <button type="submit"
            class="w-full bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white py-3 rounded-2xl font-semibold shadow-[0_20px_45px_rgba(253,85,40,0.4)] transition duration-200 hover:shadow-[0_25px_60px_rgba(253,85,40,0.5)]">
            Send Message
          </button>

        </form>

      </div>

    </div>

  </div>

</section>
<!-- END contact section -->

</main>



@endsection

