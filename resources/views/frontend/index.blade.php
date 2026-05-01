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

        17+ Years Building Software Excellence
      </span>

      <!-- HEADING -->
      <h2 
        data-aos="fade-up"
        data-aos-delay="200"
        class="mt-4 sm:mt-5 text-2xl xs:text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[3.5rem] 
        font-bold leading-tight text-gray-900">

        Building Powerful 
        <br class="hidden sm:block">


        <span class="text-[#FD5528]">
          Software & Digital Platforms
        </span>
      </h2>
      
      <h1 data-aos="fade-up"
        data-aos-delay="400" class="mt-4 sm:mt-5 text-xs xs:text-sm sm:text-base md:text-lg 
        leading-relaxed text-gray-600">
         Web Development Company in Kanpur Building Powerful Software
    </h1>

      <!-- DESCRIPTION -->
      <p 
        data-aos="fade-up"
        data-aos-delay="300"
        class="mt-4 sm:mt-5 text-xs xs:text-sm sm:text-base md:text-lg 
        leading-relaxed text-gray-600">
      Backend Coders India is a trusted web development company in Kanpur, India helping startups, SMEs, enterprises, and international brands build high-performance websites, custom software, SaaS platforms, mobile apps, APIs, AI-powered solutions, and digital marketing systems.
      </p>

      <!-- BUTTONS -->
      <div 
        data-aos="fade-up"
        data-aos-delay="400"
        class="mt-6 sm:mt-7 flex flex-col sm:flex-row gap-3 sm:gap-4 
        justify-center lg:justify-start">

        <a href="#contact"
          class="w-full sm:w-auto inline-flex items-center justify-center 
          rounded-lg bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110 transition-all duration-300 px-5 sm:px-6 py-2.5 sm:py-3 text-xs sm:text-sm font-semibold text-white 
          shadow-md  hover:bg-orange-600 hover:shadow-lg">

          Start Your Project
        </a>

        <a href="{{ route('frontend.project') }}"
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

          <img src="{{asset('assets/images/backend_coders_split_1.png')}}" alt="video"
            class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105">

          <video autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
            <source src="{{asset('assets/images/1.mp4')}}"  type="video/mp4">
          </video>

        </div>

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group -translate-y-4 sm:-translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_2.png')}}" alt="video"
            class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105">

          <video autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
            <source src="{{asset('assets/images/2.mp4')}}" type="video/mp4">
          </video>

        </div>

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group translate-y-4 sm:translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_3.png')}}" alt="video"
            class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105">

          <video autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
            <source src="{{asset('assets/images/3.mp4')}}" type="video/mp4">
          </video>

        </div>

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group -translate-y-4 sm:-translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_4.png')}}" alt="video"
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

<!-- WORLD MAP VISUAL -->



<section class="relative overflow-hidden bg-white py-12 sm:py-16 lg:py-12">
  <!-- 🔥 Heading -->
<div class="text-center mb-4">

  <!-- Eyebrow Badge -->
    <!-- BADGE -->
      <span 
    
      data-aos="fade-up"
      class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.35em] 
         text-[#FD5528] relative px-5 py-2 my-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">

        Global Network
      </span>

  <!-- Main Heading -->
  <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
    Our 
    <span class="bg-gradient-to-r from-orange-500 to-orange-600 bg-clip-text text-transparent">
      Global Presence
    </span>
  </h2>

  <!-- Subtext -->
  <p class="mt-4 text-slate-600 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">
    Delivering reliable digital solutions across key global markets with 
    <span class="font-medium text-slate-800">precision, trust, and scalability.</span>
  </p>

</div>
    </div>

  <div class="relative max-w-5xl mx-auto px-4">

    <div class="relative rounded-xl overflow-hidden border border-slate-200 shadow-lg">

      <!-- MAP -->
      <div class="relative w-full">

        <!-- MAP IMAGE -->
        <img 
          src="{{ asset('assets/images/map.jpeg') }}" alt="map"
          class="w-full lg:h-[500px] grayscale opacity-90 contrast-110 contrast-110 pointer-events-none select-none"
          alt="World Map"
        />

        <!-- PINS -->
        <div class="absolute inset-0">

          <!-- USA -->
          <div class="absolute left-[22%] top-[34%] -translate-x-1/2 -translate-y-1/2">
            <div class="flex flex-col items-center">
              
              <!-- ping -->
              <span class="absolute h-6 w-6 rounded-full bg-orange-500/30 animate-ping"></span>

              <!-- ICON -->
              <img 
                src="https://img.icons8.com/fluency/48/marker.png" alt="marker"
                class="w-6 h-6 drop-shadow-lg"
              />

              <!-- LABEL -->
              <div class="mt-1 text-[10px] bg-gray-700 text-white px-2 py-0.5 rounded">
                USA
              </div>
            </div>
          </div>

          <!-- UK -->
          <div class="absolute left-[48%] top-[28%] -translate-x-1/2 -translate-y-1/2">
            <div class="flex flex-col items-center">
              
              <span class="absolute h-6 w-6 rounded-full bg-orange-500/30 animate-ping"></span>

              <img 
                src="https://img.icons8.com/fluency/48/marker.png" alt="marker"
                class="w-6 h-6 drop-shadow-lg"
              />

              <div class="mt-1 text-[10px] bg-gray-700 text-white px-2 py-0.5 rounded">
                UK
              </div>
            </div>
          </div>

          <!-- INDIA -->
          <div class="absolute left-[71%] top-[46%] -translate-x-1/2 -translate-y-1/2">
            <div class="flex flex-col items-center">
              
              <span class="absolute h-6 w-6 rounded-full bg-orange-500/30 animate-ping"></span>

              <img 
                src="https://img.icons8.com/fluency/48/marker.png" alt="marker"
                class="w-6 h-6 drop-shadow-lg"
              />

              <div class="mt-1 text-[10px] bg-gray-700 text-white px-2 py-0.5 rounded">
                India
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

 



<!-- 📊 STATS -->
<div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-6 text-center mt-14">

  <!-- CARD -->
 <div class="stat-card group p-6 rounded-xl bg-gradient-to-br from-orange-50 to-white border border-orange-100 shadow-sm text-center">

  <!-- Number + Symbol -->
  <div class="flex items-center justify-center gap-1">
    <h3 class="text-3xl font-bold text-orange-500 counter" data-target="50">0</h3>
    <span class="text-3xl font-bold text-orange-500">+</span>
  </div>

  <!-- Label -->
  <p class="text-sm text-slate-600 mt-2">Projects Delivered</p>

</div>

<div class="stat-card group p-6 rounded-xl bg-gradient-to-br from-orange-50 to-white border border-orange-100 shadow-sm text-center">

  <!-- Number + Symbol -->
  <div class="flex items-center justify-center gap-1">
    <h3 class="text-3xl font-bold text-orange-500 counter" data-target="3">0</h3>
    <span class="text-3xl font-bold text-orange-500">+</span>
  </div>

  <!-- Label -->
  <p class="text-sm text-slate-600 mt-2">Countries Served</p>

</div>

  <!-- <div class="stat-card group p-6 rounded-xl bg-gradient-to-br from-orange-50 to-white border border-orange-100 shadow-sm">
    <div class="text-2xl mb-2">🌍</div>
    <h3 class="text-3xl font-bold text-orange-500 counter" data-target="3">3+</h3>
    <p class="text-sm text-slate-600 mt-1">Countries Served</p>
  </div> -->

  <div class="stat-card group p-6 rounded-xl bg-gradient-to-br from-orange-50 to-white border border-orange-100 shadow-sm text-center">

  <!-- Number + Symbol -->
  <div class="flex items-center justify-center gap-1">
    <h3 class="text-3xl font-bold text-orange-500 counter" data-target="100">0</h3>
    <span class="text-3xl font-bold text-orange-500">+</span>
  </div>

  <!-- Label -->
  <p class="text-sm text-slate-600 mt-2">Client Satisfaction</p>

</div>
  <!-- <div class="stat-card group p-6 rounded-xl bg-gradient-to-br from-orange-50 to-white border border-orange-100 shadow-sm">
    <div class="text-2xl mb-2">⭐</div>
    <h3 class="text-3xl font-bold text-orange-500 counter" data-target="100">100%</h3>
    <p class="text-sm text-slate-600 mt-1">Client Satisfaction</p>
  </div> -->

</div>


<!-- 🚀 CTA -->
<div class="text-center my-6">

  <a href="{{ route('frontend.contact') }}"
     class="relative inline-flex items-center gap-2 px-8 py-3 font-semibold text-white rounded-xl 
            bg-gradient-to-r from-orange-500 to-orange-600 
            shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

    Work With Us

  </a>



</div>
</section>

<!-- {{-- prjects --}} -->


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
                End-to-End Software Development, SEO & Digital Marketing Services in Kanpur
            </h2>

            <p class="mt-4 text-gray-600 sm:text-lg"
            data-aos="fade-up" data-aos-delay="200">
                As a trusted software development company in Kanpur, Backend Coders India offers complete technology and growth solutions from idea validation to design, development, deployment, SEO, marketing, and long-term support. We help businesses in India and international markets build secure, scalable, and conversion-focused digital products.
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
                            <img src="https://img.icons8.com/?size=100&id=DCkAZ79sIYhT&format=png&color=ffffff"  alt="Custom web app" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Custom Web Applications</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">We build secure and scalable custom web applications tailored to your business workflows, customer journeys, and growth goals. Our solutions are performance-focused, easy to maintain, and designed for long-term value.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Scalable</span>
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
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">We create responsive, modern, and SEO-friendly websites for businesses in Kanpur, across India, and for international clients. Our websites are built to load fast, look professional, and convert visitors into leads and customers.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Responsive</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">SEO Friendly</span>
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
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">We develop cloud-based SaaS products with secure architecture, smooth user experience, automation features, and scalable backend systems for startups and growing businesses.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Cloud Ready</span>
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
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">We build ERP and POS software that helps businesses manage inventory, billing, reporting, payments, and operations through one reliable digital platform.</p>
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
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">We create eCommerce websites and online store platforms with secure checkout, product management, payment integration, mobile optimization, and conversion-focused design.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Secure</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Fast Checkout</span>
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
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">We build Android and cross-platform mobile apps with intuitive design, strong API connectivity, and scalable performance for startups and businesses.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Smooth UI</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Cross Platform</span>
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
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">We create secure and integration-ready APIs for mobile apps, web apps, SaaS products, enterprise systems, and third-party platforms, making your software faster and more connected.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">REST API</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Web Hooks</span>
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
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">We help businesses increase visibility on Google with on-page SEO, local SEO, technical SEO, content strategy, and growth-focused digital marketing services tailored for Kanpur, India, and international markets.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Analytics</span>
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Lead Growth</span>
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
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">We help founders validate ideas quickly through lean MVP development, rapid iteration, and scalable technical foundations that support future product growth.</p>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                            <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">Rapid Launch</span>
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

  <div class="max-w-7xl mx-auto px-6">

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
        Predictable Software Delivery Process
      </h2>
      <p class="text-gray-500 mt-3 max-w-xl mx-auto">
        We follow a structured and transparent delivery process that keeps every website, software product, SaaS platform, AI solution, and marketing initiative aligned with your goals, timelines, quality expectations, and business outcomes.
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
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition     ">
            01
          </div>

          <!-- TEXT -->
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Discovery
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Understand business objectives, target audience, project scope, and technology requirements.
            </p>
          </div>

        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition ] ">
            02
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              UI / UX
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Design intuitive user flows and interfaces for better usability, engagement and product experience.
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition ] ">
            03
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Development
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Build scalable, secure, and high-performance software using modern technologies.
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition ] ">
            04
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Testing
            </h3>
            <p class="text-sm text-gray-500 mt-1">
             Test application for performance, usability, responsiveness, and functionality before launch.
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition ">
            05
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Deployment
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Deploy production-ready websites, apps, and software platforms with proper optimization.
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition ">
            06
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Support
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Provide continuous maintenance, updates, improvements, and technical support.
            </p>
          </div>
        </div>

      </div>

    </div>

  </div>

</section>
<!-- pr -->

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
        Insights, Updates & Technology Expertise
      </h2>

      <p class="mt-3 text-sm sm:text-base text-gray-500">
       Stay updated with our latest insights on web development, software architecture, SaaS growth, UI/UX, mobile apps, SEO, digital marketing, AI solutions, and scalable systems for modern businesses in India and across global markets.
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
          How to Build Scalable SaaS Products for Growing Businesses
        </h3>

        <p class="mt-3 text-sm sm:text-base text-gray-600">
         Learn how architecture, user experience, pricing logic, and deployment strategy shape successful SaaS platforms.
        </p>

        <!-- CTA -->
        <div class="mt-4 flex items-center text-sm font-medium text-[#FD5528] opacity-0 group-hover:opacity-100 transition">
          <a href="{{ route('frontend.blog') }}" class="underline">
            Read More →
          </a>
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
          Why Businesses in Kanpur Need SEO-Friendly Websites in 2026
        </h3>

        <p class="mt-3 text-sm sm:text-base text-gray-600">
          Discover how local SEO, mobile performance, and content structure help businesses rank better and generate more leads.
        </p>

        <!-- CTA -->
        <div class="mt-4 flex items-center text-sm font-medium text-[#FD5528] opacity-0 group-hover:opacity-100 transition">
          <a href="{{ route('frontend.blog') }}" class="underline">
            Read More →
          </a>
        </div>

      </article>

    </div>

  </div>

</section>
<!-- END BLOG -->


<!-- 
{{-- faq --}} -->
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
       Everything you need to know about partnering with Backend Coders India for website development, custom software, SaaS, mobile apps, SEO, digital marketing, and AI-powered business solutions.
      </p>
    </div>

   
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

        <div class="max-w-6xl mx-auto px-4 grid gap-6 lg:grid-cols-1">

    <!-- COLUMN -->
    <div class="space-y-4">

      <!-- ITEM -->
      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-1" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            What services do you offer?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-1" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
          We offer website design and development, custom web applications, SaaS development, ERP and POS software, eCommerce development, mobile app development, API development, SEO services, digital marketing, startup MVP development, and AI-powered software solutions.
        </div>
      </div>

      <!-- ITEM -->
      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-2" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            Which technologies do you work with?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-2" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
            We work with modern frontend and backend technologies, databases, APIs, cloud services, automation tools, and scalable software stacks based on your project requirements and growth goals.
        </div>
      </div>

    </div>

    <!-- COLUMN -->
    <div class="space-y-4">

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-3" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            Do you provide dedicated development teams?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-3" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
         Yes, we provide dedicated developers and project-focused teams for startups, agencies, enterprises, and international clients that need reliable long-term development support.
        </div>
      </div>

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-4" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            How do you ensure scalability and performance?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-4" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
        We use clean architecture, optimized databases, secure APIs, strong testing practices, performance monitoring, and scalable deployment strategies to ensure your software performs reliably as your business grows.
        </div>
      </div>

    </div>

    <!-- COLUMN -->
    <div class="space-y-4">

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-5" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            What is your development process?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-5" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
     Our process includes discovery, planning, UI/UX, development, testing, deployment, SEO refinement, and support to deliver structured and high-quality digital solutions.
        </div>
      </div>

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-6" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
            Do you offer AI development services in Kanpur?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-6" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
          Yes, Backend Coders India provides AI chatbot development, AI workflow automation, custom AI integrations, and AI-powered application development for businesses in Kanpur, across India, and for international Market.
        </div>
      </div>

    </div>

  </div>

       

      </div>

    </div>

  </div>

  <div class="pointer-events-none absolute inset-0 opacity-50">
    <div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-[#FD5528]/5 to-transparent"></div>
    <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-[#0F172A]/5 to-transparent"></div>
  </div>

</section>

<!-- Swiper CSS -->


<!-- testimonial -->
<section class="relative py-28 px-6 overflow-hidden">

  <!-- BACKGROUND GLOW -->
  <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,_#FD5528,_transparent_60%)]"></div>

  <div class="relative max-w-6xl mx-auto text-center">


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

         Testimonials
      </span>
    <!-- BADGE -->
    <!-- <span class="inline-block text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528] px-5 py-2 rounded-full bg-white shadow">
      Testimonials
    </span> -->

    <!-- TITLE -->
    <h2 class="mt-6 text-3xl md:text-5xl font-bold text-black">
      What Our <span class="text-[#FD5528]">Clients Say</span>
    </h2>
    <p> Our clients trust Backend Coders India for clear communication, reliable development, scalable architecture, SEO growth, and digital solutions that create measurable business impact.</p>

    <!-- SWIPER -->
    <div class="swiper mt-16">

      <div class="swiper-wrapper">

        <!-- SLIDE -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 p-6 max-w-md border border-gray-100">

            <!-- HEADER -->
            <div class="flex items-center justify-between mb-4">

              <!-- USER -->
              <div class="flex items-center gap-3">
                <div class="relative">
                  <img src="{{ asset('assets/images/client1-d') }}" alt="client"
                      class="w-12 h-12 rounded-full object-cover">

                  <!-- VERIFIED BADGE -->
                  <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
                </div>

                <div>
                  <h4 class="font-semibold text-gray-900 text-sm">Dashawn Robinson</h4>
                  <p class="text-xs text-gray-500">June 6, 2025</p>
                </div>
              </div>

              <!-- GOOGLE LOGO -->
          <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Upwork_Logo.svg" alt="logo"
              class="w-12 opacity-80">
            </div>

            <!-- STARS -->
            <div class="flex items-center gap-1 mb-3">
              <span class="text-yellow-400 text-lg">★★★★★</span>
            </div>

            <!-- REVIEW TEXT -->
            <p class="text-gray-700 text-start text-sm leading-relaxed mb-2 line-clamp-2 review-text">
            Freelancer was extremely communicative, skilled, prompt and professional. Their work exceeded my expectation. I'd definitely hire them again and refer them to my colleagues
            </p>
            <button class="read-more-btn text-[#FD5528] text-xs font-medium mb-4">
    Read More
</button>

            <!-- FOOTER -->
            <div class="flex items-center justify-between text-xs text-gray-400">

              <!-- CATEGORY -->
              <span class="bg-gray-100 px-2 py-1 rounded-full text-orange-500">
                United States
              </span>

              <!-- ACTION -->
              <button class="flex items-center gap-1 text-orange-500 hover:text-[#FD5528] transition">
                CEO
              </button>

            </div>

          </div>
        </div>

        <!-- SLIDE -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 p-6 max-w-md border border-gray-100">

            <!-- HEADER -->
            <div class="flex items-center justify-between mb-4">

              <!-- USER -->
              <div class="flex items-center gap-3">
                <div class="relative">
                  <img src="{{ asset('assets/images/client-mj.jpg') }}" alt="client"
                      class="w-12 h-12 rounded-full object-cover">

                  <!-- VERIFIED BADGE -->
                  <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
                </div>

                <div>
                  <h4 class="font-semibold text-gray-900 text-sm">Minwoon Jung </h4>
                  <p class="text-xs text-gray-500">May 5, 2025</p>
                </div>
              </div>

              <!-- GOOGLE LOGO -->
              <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Upwork_Logo.svg" alt="logo"
                  class="w-12 opacity-80">
            </div>

            <!-- STARS -->
            <div class="flex items-center gap-1 mb-3">
              <span class="text-yellow-400 text-lg">★★★★★</span>
            </div>

            <!-- REVIEW TEXT -->
            <p class="text-gray-700 text-start text-sm leading-relaxed mb-2 line-clamp-2 review-text">
         Ravindra went above and beyond fixing major issues left by a previous developer, saving the project with top-notch skills, great attitude, and reliability.
            </p>
            <button class="read-more-btn text-[#FD5528] text-xs font-medium mb-4">
    Read More
</button>

            <!-- FOOTER -->
            <div class="flex items-center justify-between text-xs text-gray-400">

              <!-- CATEGORY -->
              <span class="bg-gray-100 px-2 py-1 rounded-full text-orange-500">
                United States
              </span>

              <!-- ACTION -->
              <button class="flex items-center gap-1 text-orange-500 hover:text-[#FD5528] transition">
               Ceo
              </button>

            </div>

          </div>
        </div>

        <!-- SLIDE -->
      <div class="swiper-slide">
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 p-6 max-w-md border border-gray-100">

                  <!-- HEADER -->
                  <div class="flex items-center justify-between mb-4">

                    <!-- USER -->
                    <div class="flex items-center gap-3">
                      <div class="relative">
                        <img src="{{ asset('assets/images/client-p.jpg') }}" alt="client"
                            class="w-12 h-12 rounded-full object-cover">

                        <!-- VERIFIED BADGE -->
                        <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
                      </div>

                      <div>
                        <h4 class="font-semibold text-gray-900 text-sm">Peter Farrell </h4>
                        <p class="text-xs text-gray-500">May 5, 2025</p>
                      </div>
                    </div>

                    <!-- GOOGLE LOGO -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Upwork_Logo.svg" alt="logo"
                        class="w-12 opacity-80">
                  </div>

                  <!-- STARS -->
                  <div class="flex items-center gap-1 mb-3">
                    <span class="text-yellow-400 text-lg">★★★★★</span>
                  </div>

                  <!-- REVIEW TEXT -->
                  <p class="text-gray-700 text-start text-sm leading-relaxed mb-2 line-clamp-2 review-text">
                "Very pleased with the work provided, understood my requirements and delivered on time. Highly recommended."
                  </p>
                  <button class="read-more-btn text-[#FD5528] text-xs font-medium mb-4">
    Read More
</button>

                  <!-- FOOTER -->
                  <div class="flex items-center justify-between text-xs text-gray-400">

                    <!-- CATEGORY -->
                    <span class="bg-gray-100 px-2 py-1 rounded-full text-orange-500">
                      United kingdom
                    </span>

                    <!-- ACTION -->
                    <button class="flex items-center gap-1 text-orange-500 hover:text-[#FD5528] transition">
                      Director
                    </button>

                  </div>

                </div>
      </div>


         <!-- SLIDE -->
      <div class="swiper-slide">
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 p-6 max-w-md border border-gray-100">

                  <!-- HEADER -->
                  <div class="flex items-center justify-between mb-4">

                    <!-- USER -->
                    <div class="flex items-center gap-3">
                      <div class="relative">
                        <img src="{{ asset('assets/images/client-v.jpg') }}" alt="client"
                            class="w-12 h-12 rounded-full object-cover">

                        <!-- VERIFIED BADGE -->
                        <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
                      </div>

                      <div>
                        <h4 class="font-semibold text-gray-900 text-sm">Veera Linga</h4>
                        <p class="text-xs text-gray-500">May 5, 2025</p>
                      </div>
                    </div>

                    <!-- GOOGLE LOGO -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Upwork_Logo.svg" alt="logo"
                        class="w-12 opacity-80">
                  </div>

                  <!-- STARS -->
                  <div class="flex items-center gap-1 mb-3">
                    <span class="text-yellow-400 text-lg">★★★★★</span>
                  </div>

                  <!-- REVIEW TEXT -->
                  <p class="text-gray-700 text-start text-sm leading-relaxed mb-2 line-clamp-2 review-text">
           Ravindra delivered a visually appealing, responsive, and highly functional website with top-notch skills, great communication, flexibility, and strong post-launch support, highly recommended.
                  </p>
                    <button class="read-more-btn text-[#FD5528] text-xs font-medium mb-4">
    Read More
</button>

                  <!-- FOOTER -->
                  <div class="flex items-center justify-between text-xs text-gray-400">

                    <!-- CATEGORY -->
                    <span class="bg-gray-100 px-2 py-1 rounded-full text-orange-500">
                      United States
                    </span>

                    <!-- ACTION -->
                    <button class="flex items-center gap-1 text-orange-500 hover:text-[#FD5528] transition">
                      Director
                    </button>

                  </div>

                </div>
      </div>

         
       </div>

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

    <h3 class="text-4xl text-[#0D0D0D] md:text-5xl font-bold mb-4 mt-4" data-aos="fade-up">
      Get in Touch
    </h3>

    
    
    <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
     
      Have a project in mind or need backend-driven digital solutions? <span class="text-[#FC5124] font-semibold"> Backend Coders India </span> helps businesses in Kanpur, Uttar Pradesh, across India, and international markets build websites, software systems, SaaS products, eCommerce platforms, mobile apps, APIs, SEO campaigns, digital marketing systems, and AI-powered solutions.
    </p>

    </div>

    <!-- Main Layout -->
    <div class=" flex justify-center items-center gap-10 lg:gap-16 flex-col lg:flex-row">

  

      <!-- RIGHT SIDE FORM -->
      <div class="order-1 lg:order-2 relative bg-white p-8 rounded-[36px] shadow-[0_40px_90px_rgba(15,23,42,0.18)] border border-[#f1f1f1] overflow-hidden">

        <div class="absolute -top-10 -right-10 h-32 w-32 bg-gradient-to-br from-[#FD5528]/20 to-transparent blur-3xl opacity-80"></div>
        <div class="absolute bottom-6 left-6 h-20 w-20 bg-gradient-to-br from-[#0D0D0D]/10 to-transparent blur-3xl"></div>

        <div class="relative mb-6">
          <h2 class="text-2xl text-center font-semibold text-gray-900">
            Contact Us
          </h2>
          <p class="text-sm text-gray-500 text-center mt-1 ">
             Fill out the form and our team will get back to you shortly to discuss your project requirements. 
          </p>
        </div>

        @include('frontend.form')
        <!-- <form class="relative space-y-6">

          <div class="grid sm:grid-cols-2 gap-4">
            <input type="text" placeholder="First Name"
              class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">

            <input type="text" placeholder="Last Name"
              class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">
          </div>

          <input type="email" placeholder="Email Address"
            class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">

          <input type="text" placeholder="Phone"
            class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200">

          <textarea rows="4" placeholder="Your Message"
            class="w-full px-4 py-3 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#FD5528]/40 transition duration-200"></textarea>

        <div class="relative flex justify-center">
            <button type="submit"
            class="max-w-md bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] hover:scale-110  text-white py-3 px-4 rounded-2xl font-semibold shadow-[0_20px_45px_rgba(253,85,40,0.4)] transition duration-200 hover:shadow-[0_25px_60px_rgba(253,85,40,0.5)]">
            Send Message
          </button>
        </div>

        </form> -->

      </div>

    </div>

  </div>

</section>
<!-- END contact section -->


<!-- CTA SECTION -->
<section class="relative overflow-hidden py-20 bg-gradient-to-r from-[#FC5124] via-[#FD5528] to-orange-400 text-white">

  <!-- BACKGROUND GLOW -->
  <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>

  <div class="relative max-w-5xl mx-auto px-6 text-center">

    <!-- HEADING -->
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 leading-tight">
      Have a Project in Mind?
    </h2>

    <!-- SUBTEXT -->
    <p class="text-white/80 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-10">
     Let’s build a high-performance website, scalable software product, SaaS platform, SEO growth system, or AI-powered solution tailored to your business goals.
    </p>

    <!-- BUTTONS -->
    <div class="flex flex-col sm:flex-row justify-center gap-4">

      <!-- PRIMARY BUTTON -->
      <a href="{{ route('frontend.contact') }}"
         class="group inline-flex items-center justify-center bg-white text-[#FC5124] px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

        Contact Us

        <!-- ARROW -->
        <span class="ml-2 transition group-hover:translate-x-1">→</span>
      </a>

      <!-- WHATSAPP BUTTON -->
      <a href="https://wa.me/+919140092133" target="_blank"
         class="group inline-flex items-center justify-center border border-white/40 px-6 py-3 rounded-xl font-semibold backdrop-blur-md hover:bg-white/10 hover:scale-105 transition duration-300">

       
        Let's Chat on WhatsApp
      </a>

    </div>

  </div>

</section>

</main>
@endsection
