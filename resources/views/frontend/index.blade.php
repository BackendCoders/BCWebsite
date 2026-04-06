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
{{-- end cient sectin --}}

{{-- prjects --}}
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">

    <div class="text-center mb-12 space-y-3">
      <p class="text-[11px] uppercase tracking-[0.5em] text-[#FD5528]">Recently Completed Projects</p>
      <h2 class="text-4xl sm:text-5xl font-bold text-gray-900">
         Completed<span class="text-[#F44918]"> Projects</span>
      </h2>
      <p class="text-sm text-gray-500 max-w-3xl mx-auto">
        Live deployments that blend backend reliability, thoughtful UI, and measurable outcomes for our partners.
      </p>
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-10">
      <button class="tab active" data-tab="all" type="button">All</button>
      <button class="tab" data-tab="web" type="button">Web Apps</button>
      <button class="tab" data-tab="saas" type="button">SaaS</button>
      <button class="tab" data-tab="ecommerce" type="button">E-commerce</button>
      <button class="tab" data-tab="crm" type="button">CRM</button>
    </div>

    @php
      $projects = [
        [
          'title' => 'Ace Taxis UK',
          'desc' => 'Cab booking & dispatch system serving hundreds of drivers with live tracking and automated payroll.',
          'image' => 'https://backendcodersindia.com/assets/images/company-icons/page1.png',
          'type' => 'web',
          'tags' => ['Node.js', 'MongoDB', 'REST API'],
          'date' => 'Jan 2025',
          'metric' => '+650 drivers onboarded',
        ],
        [
          'title' => 'Tanning Salon System',
          'desc' => 'Full salon management stack that syncs booking, memberships, and service automation for a UK beauty studio.',
          'image' => 'https://backendcodersindia.com/assets/images/company-icons/1.png',
          'type' => 'saas',
          'tags' => ['Node.js', 'MongoDB', 'REST API'],
          'date' => 'Jan 2025',
          'metric' => '+28% bookings',
        ],
        [
          'title' => 'Skydatech Technology',
          'desc' => 'IT consulting hub with enterprise project tracking, analytics, and partner collaboration workflows.',
          'image' => 'https://backendcodersindia.com/assets/images/testemonials/skydatech.png',
          'type' => 'web',
          'tags' => ['Node.js', 'MongoDB', 'REST API'],
          'date' => 'Jan 2025',
          'metric' => '47ms avg response time',
        ],
        [
          'title' => 'Alberta ChildCare',
          'desc' => 'Education portal coordinating schedules, parent updates, and classroom intelligence.',
          'image' => 'https://backendcodersindia.com/assets/images/company-icons/childcare.png',
          'type' => 'web',
          'tags' => ['Node.js', 'MongoDB', 'REST API'],
          'date' => 'Jan 2025',
          'metric' => '24x7 monitoring',
        ],
        [
          'title' => 'Marley Moves',
          'desc' => 'Logistics control center for international relocations with live tracking and concierge reporting.',
          'image' => 'https://backendcodersindia.com/assets/images/testemonials/marley.png',
          'type' => 'web',
          'tags' => ['Node.js', 'MongoDB', 'REST API'],
          'date' => 'Jan 2025',
          'metric' => '+41% throughput',
        ],
        [
          'title' => 'ER Data Solutions',
          'desc' => 'CRM workspace featuring Power BI dashboards, forecasting, and stakeholder collaboration.',
          'image' => 'https://backendcodersindia.com/assets/images/testemonials/er.png',
          'type' => 'crm',
          'tags' => ['Node.js', 'MongoDB', 'REST API'],
          'date' => 'Jan 2025',
          'metric' => '+31% forecast accuracy',
        ],
        
      ];
    @endphp

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

      @foreach($projects as $project)
        <article class="project {{ $project['type'] }} relative overflow-hidden rounded-[32px] border border-white/70 bg-white shadow-[0_25px_60px_rgba(15,23,42,0.08)] transition duration-500 hover:-translate-y-1 hover:shadow-[0_35px_80px_rgba(253,85,40,0.2)] group" data-aos="fade-up">
          <div class="relative overflow-hidden rounded-[28px] h-52">
            <img src="{{ asset($project['image']) }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
            <span class="absolute top-4 left-4 rounded-full bg-[#0F8C4A] px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.3em] text-white shadow-lg">
              Live
            </span>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center justify-between text-[11px] uppercase tracking-[0.35em] text-gray-500">
              <span>{{ ucfirst($project['type']) }}</span>
              <span class="text-[#FC5124] font-semibold">{{ $project['date'] }}</span>
            </div>
            <h3 class="text-2xl font-semibold text-gray-900">
              {{ $project['title'] }}
            </h3>
            <p class="text-sm text-gray-600 leading-relaxed">
              {{ $project['desc'] }}
            </p>
            <div class="flex flex-wrap gap-2">
              @foreach($project['tags'] as $tag)
                <span class="rounded-full bg-orange-100 px-3 py-1 text-[11px] font-semibold text-[#FC5124] shadow-sm">
                  {{ $tag }}
                </span>
              @endforeach
            </div>
            <div class="flex items-center justify-between text-xs text-gray-500">
              <span>{{ $project['metric'] }}</span>
              <a href="#" class="text-[#FC5124] font-semibold hover:underline">
                View
              </a>
            </div>
          </div>
        </article>
      @endforeach

    </div>

      <!-- Bottom Button -->
    <div class="text-center mt-12">
      <a href="#"
         class="inline-block bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white px-6 py-3 rounded-full font-semibold shadow hover:bg-orange-600 transition">
        View All Projects
      </a>
    </div>

  </div>
</section>
{{-- prjects --}}





<!-- SERVICE -->
<section id="services" class="relative overflow-hidden bg-white   px-6 py-16 sm:py-20 lg:py-24">

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
          hover:from-[#fb813b] hover:to-[#b00000]     group-hover:text-white">
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



<!-- serve industry -->
{{-- <section id="industries" class="bg-white px-6 py-16 sm:py-20 lg:py-24">

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

</section> --}}
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


{{-- faq --}}
<section class="relative overflow-hidden bg-gradient-to-br from-white via-slate-50 to-slate-100 py-16 sm:py-20 lg:py-24 px-4 sm:px-6">

  <div class="max-w-6xl lg:max-w-7xl mx-auto relative z-10">

    <!-- Heading -->
    <div class="text-center mb-10 sm:mb-14">
      <p 
        data-aos="fade-up"
        class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
          text-[#FD5528] relative px-5 py-2 rounded-full 
          bg-white/70 backdrop-blur-md 
          shadow-[0_15px_35px_rgba(253,85,40,0.25)] 
          border border-white/60
          before:absolute before:inset-0 before:rounded-full 
          before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
          before:-z-10">
        FAQ
      </p>

      <h2 class="mt-5 text-3xl sm:text-4xl md:text-5xl font-bold text-slate-900">
        Frequently Asked Questions
      </h2>

      <p class="mt-4 text-slate-500 max-w-3xl mx-auto text-base sm:text-lg">
        Everything you need to know about partnering with Backend Coders — transparency, headcount, and support wrapped in a confident delivery process.
      </p>
    </div>

    <!-- Stats -->
    {{-- <div class="mb-10 grid sm:grid-cols-3 gap-4">
      <div class="bg-white/90 border border-white shadow-lg rounded-2xl px-6 py-4 text-center backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Teams</p>
        <p class="mt-2 text-2xl font-semibold text-slate-900">40+</p>
        <p class="text-xs text-slate-500">Dedicated squads on standby</p>
      </div>
      <div class="bg-white/90 border border-white shadow-lg rounded-2xl px-6 py-4 text-center backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Projects</p>
        <p class="mt-2 text-2xl font-semibold text-slate-900">200+</p>
        <p class="text-xs text-slate-500">Enterprise-grade rollouts</p>
      </div>
      <div class="bg-white/90 border border-white shadow-lg rounded-2xl px-6 py-4 text-center backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Coverage</p>
        <p class="mt-2 text-2xl font-semibold text-slate-900">24/7</p>
        <p class="text-xs text-slate-500">Monitoring + support windows</p>
      </div>
    </div> --}}

    <!-- GRID -->
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start">

      <!-- LEFT IMAGE -->
      <div class="order-1 lg:order-2 relative rounded-[32px] bg-gradient-to-br from-[#FFEDD5] via-white to-[#FEE2E2] p-6 shadow-[0_25px_60px_rgba(253,85,40,0.25)]">
        <div class="absolute inset-x-4 top-4 h-2 rounded-full bg-gradient-to-r from-[#FD5528]/60 to-orange-200/70 blur-3xl opacity-70"></div>
        <img 
          src="{{asset('assets/images/faq.png')}}"
          alt="FAQ Illustration"
          class="rounded-2xl shadow-2xl w-full h-[360px] object-cover relative z-10"
        >
      </div>

      <!-- FAQ LIST -->
      <div class="order-2 lg:order-1 space-y-4">

        @php
          $faqs = [
            ['title' => 'What services do you offer?', 'description' => 'Backend engineering, API design, cloud architecture, automation, and enterprise-grade solutions that keep scaling teams aligned.'],
            ['title' => 'Which technologies do you work with?', 'description' => '.NET Core, Node.js, Laravel, Go, SQL Server, PostgreSQL, Redis, Kafka, Azure, AWS, and modern DevOps pipelines.'],
            ['title' => 'Do you provide dedicated development teams?', 'description' => 'Yes, our specialists embed within your product organization with dedicated project leads and sprint reporting.'],
            ['title' => 'How do you ensure scalability and performance?', 'description' => 'We architect microservices, apply caching strategies, optimize storage, and add observability to catch regressions early.'],
            ['title' => 'What is your development process?', 'description' => 'We follow a structured agile cadence: discovery, roadmap, sprint-based delivery, QA, deployment, and post-launch retrospectives.'],
            ['title' => 'Do you provide post-launch support?', 'description' => 'Long-term maintenance, 24/7 monitoring, release planning, and scaling support are included in every retainer plan.'],
          ];
        @endphp

        @foreach ($faqs as $faq)
          <details class="group bg-white border border-gray-200 rounded-2xl p-5 shadow-sm open:shadow-md transition duration-300">
            <summary class="flex justify-between items-center cursor-pointer list-none">
              <span class="font-medium text-slate-900 text-base md:text-lg">
                {{ $faq['title'] }}
              </span>
              <span class="text-[#FD5528] text-2xl transition-transform duration-300 group-open:rotate-45">
                +
              </span>
            </summary>
            <p class="mt-3 text-sm text-slate-500 leading-relaxed">
              {{ $faq['description'] }}
            </p>
          </details>
        @endforeach

       

      </div>

    </div>

  </div>

  <div class="pointer-events-none absolute inset-0 opacity-50">
    <div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-[#FD5528]/5 to-transparent"></div>
    <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-[#0F172A]/5 to-transparent"></div>
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

<!-- CTA SECTION -->
<section class="bg-[#FC5124] text-white py-16 text-center">
  <h2 class="text-3xl font-bold mb-4">
    Have a Project in Mind?
  </h2>
  <p class="text-gray-300 mb-6">
    Let’s build, discuss your project idea in detail. What’s next?
  </p>

  <div class="flex justify-center gap-4">
    <a href="#contact"
     class="bg-white text-[#FC5124] px-6 py-3 rounded-lg font-semibold ">
    Contact Us
  </a>
    <a href="#contact"
     class="bg-white text-[#FC5124] px-6 py-3 rounded-lg font-semibold ">
     Let's chat on Whatsapp
  </a>
  </div>
</section>

</main>



@endsection
