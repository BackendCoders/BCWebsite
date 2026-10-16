@extends('component.main')
@section('content')

@php
    $homepageBlogs = $homepageBlogs ?? collect();
    $homepageBlogDate = function (string $slug, string $fallback) use ($homepageBlogs): string {
        $blog = $homepageBlogs->get($slug);
        return optional($blog?->published_at ?? $blog?->created_at)->format('d M, Y') ?: $fallback;
    };
@endphp


<main class="flex-1">
      <!-- HERO SECTION -->
<section id="hero" class="relative overflow-hidden bg-white px-4 py-14 sm:px-6 sm:py-16 md:py-20 lg:px-8 lg:py-24">

  <div class="max-w-[1400px] mx-auto grid items-center gap-10 md:gap-14 lg:gap-16 lg:grid-cols-2">

    <!-- LEFT CONTENT -->
    <div class="w-full max-w-xl mx-auto lg:mx-0 text-center lg:text-left">

   
      <!-- HEADING -->
      <h1
      class="mt-4 sm:mt-5 text-2xl xs:text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[3.5rem] 
        font-bold leading-tight text-gray-900">

       Web Development & Digital Marketing 
     


        <span class="text-[#FD5528]">
         Company in Kanpur
        </span>
      </h1>
      

    <h2 class="inline-block text-xs sm:text-sm font-semibold uppercase tracking-[0.2em] my-4
         text-[#FD5528] relative px-3 py-2 rounded-full 
         bg-white/60 backdrop-blur-md 
         shadow-[0_8px_20px_rgba(0,0,0,0.08)] 
         border border-white/40
         before:absolute before:inset-0 before:rounded-full 
         before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30 
         before:-z-10">
      Software, Web & SEO Experience for Startups, SMEs & Global Brands
    </h2>

      <!-- DESCRIPTION -->
      <p 
        class="mt-4 sm:mt-5 text-xs xs:text-sm sm:text-base md:text-lg 
        leading-relaxed text-gray-600">
    
      Backend Coders India is a Kanpur-based web development and digital marketing company helping startups, SMEs, and enterprises across India — and clients in the USA and UK — build
      high-performance websites, custom software, SaaS platforms, and SEO and digital marketing campaigns. Our team partners with businesses that want measurable growth, not just delivery.

      </p>

      <!-- BUTTONS -->
      <div 
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
    <div class="relative w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-full mx-auto">

      <div class="grid grid-cols-2 gap-3 sm:gap-4 md:gap-5">

        <!-- CARD -->
      <div class="relative overflow-hidden rounded-xl group video-card translate-y-4 sm:translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_1.webp.webp')}}" width="300"
    height="195" alt="IT team working on backend development and coding solutions" title="Backend Development Team at Work"
            fetchpriority="high" loading="eager" decoding="async"
            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

          <video muted loop playsinline preload="none" aria-label="Backend developers coding and building scalable IT solutions" title="Backend Developers in Action"
            class="absolute inset-0 w-full h-full object-cover opacity-0 transition duration-500">
            <source data-src="{{asset('assets/images/1(1).mp4')}}" type="video/mp4">
          </video>

        </div>

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group video-card -translate-y-4 sm:-translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_2.webp.webp')}}"  width="300"
    height="195" alt="Software developers collaborating on web application development and system architecture" title="Web Application Development Team"
            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

          <video muted loop playsinline preload="none" aria-label="Developers building scalable web applications and backend systems" title="Software Development in Progress"
            class="absolute inset-0 w-full h-full object-cover opacity-0 transition duration-500">
            <source data-src="{{asset('assets/images/2 (1).mp4')}}" type="video/mp4">
          </video>

        </div>

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group video-card translate-y-4 sm:translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_3.webp.webp')}}"  width="300"
    height="195"   alt="IT engineers managing cloud infrastructure and deploying scalable applications"
    title="Cloud Infrastructure and DevOps Engineering"
            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

          <video muted loop playsinline preload="none" aria-label="DevOps engineers deploying applications and managing cloud servers" title="DevOps and Cloud Management in Action"
            class="absolute inset-0 w-full h-full object-cover opacity-0 transition duration-500">
            <source data-src="{{asset('assets/images/3 (1).mp4')}}" type="video/mp4">
          </video>

        </div>

        <!-- CARD -->
        <div class="relative overflow-hidden rounded-xl group video-card -translate-y-4 sm:-translate-y-6">

          <img src="{{asset('assets/images/backend_coders_split_4.webp.webp')}}"  width="300"
    height="195" alt="IT professionals providing technical support and maintenance services" title="Technical Support and Maintenance Team"
            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

          <video muted loop playsinline preload="none" aria-label="IT professionals providing technical support and maintenance services" title="Technical Support and Maintenance"
            class="absolute inset-0 w-full h-full object-cover opacity-0 transition duration-500">
            <source data-src="{{asset('assets/images/4 (1).mp4')}}" type="video/mp4">
          </video>

        </div>

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
<h2
  style="
    font-size: clamp(34px, 5vw, 60px);
    font-weight: 900;
    line-height: 1.05;
    letter-spacing: -0.03em;
    color: #0f172a;
    margin: 0;
  "
>

  Our

  <span
    style="
      position: relative;
      display: inline-block;
      background: linear-gradient(90deg, #FD5528 0%, #ff7b54 50%, #FD5529 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      color: transparent;
    "
  >

    Global Presence

    <span
      style="
        position: absolute;
        left: 0;
        bottom: -8px;
        width: 100%;
        height: 10px;
        background: linear-gradient(90deg, rgba(253,85,40,0.20), rgba(253,85,41,0.20));
        filter: blur(10px);
        border-radius: 999px;
        z-index: -1;
      "
    ></span>

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
          src="{{ asset('assets/images/map-1x.webp') }}" alt="Serve service internationally from kanpur"   width="1568"
    height="1003"
          class="w-full lg:h-[500px] grayscale opacity-90 contrast-110 pointer-events-none select-none"
          style="aspect-ratio: 1568 / 1003;"
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
                src="{{asset('assets/icons/address.png')}}" alt="United States service location"
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
                src="{{asset('assets/icons/address.png')}}" alt="United Kingdom service location"
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
                src="{{asset('assets/icons/address.png')}}" alt="India service location"
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

  <!-- CARD: PROJECTS DELIVERED -->
  <div class="stat-card group p-6 rounded-2xl bg-gradient-to-br from-orange-50 via-white to-white border border-orange-100 shadow-sm text-center transition-all duration-300 hover:shadow-md hover:-translate-y-1 hover:border-orange-200">
    <div class="flex items-center justify-center gap-0.5">
      <h3 class="text-3xl font-bold text-orange-500 counter" data-target="50">50+</h3>
    </div>
    <p class="text-sm font-semibold text-slate-800 mt-2">Projects Delivered</p>
    <p class="text-xs text-slate-500 mt-1">Web, apps & custom software</p>
  </div>

  <!-- CARD: HAPPY CLIENTS -->
  <div class="stat-card group p-6 rounded-2xl bg-gradient-to-br from-orange-50 via-white to-white border border-orange-100 shadow-sm text-center transition-all duration-300 hover:shadow-md hover:-translate-y-1 hover:border-orange-200">
    <div class="flex items-center justify-center gap-0.5">
      <h3 class="text-3xl font-bold text-orange-500 counter" data-target="40">40+</h3>
    </div>
    <p class="text-sm font-semibold text-slate-800 mt-2">Happy Clients</p>
    <p class="text-xs text-slate-500 mt-1">Startups, SMEs & enterprises</p>
  </div>

  <!-- CARD: COUNTRIES SERVED -->
  <div class="stat-card group p-6 rounded-2xl bg-gradient-to-br from-orange-50 via-white to-white border border-orange-100 shadow-sm text-center transition-all duration-300 hover:shadow-md hover:-translate-y-1 hover:border-orange-200">
    <div class="flex items-center justify-center gap-0.5">
      <h3 class="text-3xl font-bold text-orange-500 counter" data-target="3">3+</h3>
    </div>
    <p class="text-sm font-semibold text-slate-800 mt-2">Countries Served</p>
    <p class="text-xs text-slate-500 mt-1">India, UK & international</p>
  </div>

</div>


<!-- 🚀 CTA -->
<div style="text-align:center; margin:40px 0 20px;">

  <a
    href="{{ route('frontend.contact') }}"
    style="
      position: relative;
      display: inline-flex;
      align-items: center;
      gap: 12px;
      padding: 16px 34px;
      border-radius: 16px;
      background: linear-gradient(135deg, #FD5528 0%, #ff7b54 100%);
      color: #ffffff;
      font-size: 16px;
      font-weight: 700;
      text-decoration: none;
      box-shadow: 0 15px 35px rgba(253,85,40,0.28);
      transition: all 0.35s ease;
      overflow: hidden;
      letter-spacing: 0.02em;
    "
    onmouseover="
      this.style.transform='translateY(-4px) scale(1.03)';
      this.style.boxShadow='0 25px 55px rgba(253,85,40,0.38)';
    "
    onmouseout="
      this.style.transform='translateY(0px) scale(1)';
      this.style.boxShadow='0 15px 35px rgba(253,85,40,0.28)';
    "
  >

    <span
      style="
        position:absolute;
        inset:0;
        background: linear-gradient(120deg, rgba(255,255,255,0.18), transparent);
        transform: skewX(-25deg) translateX(-120%);
        transition: 0.7s;
      "
    ></span>

    <span style="position:relative; z-index:2;">
      Work With Us
    </span>

    <span
      style="
        position:relative;
        z-index:2;
        font-size:18px;
        transition: transform 0.3s ease;
      "
    >
      
    </span>

  </a>

</div>
</section>




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
               Backend Coders India provides software development, SEO, and digital marketing services for businesses in Kanpur, across India, and international markets. We help brands build scalable digital products and support long-term growth.
            </p>

        </div>

        <div class="mt-6 grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-3">

          
              <!-- card-0 -->
       <div class="flip-card" data-aos="fade-up" data-aos-delay="100">

        <div class="flip-card-inner">

                  <!-- FRONT SIDE -->
                  <article
                      class="absolute inset-0 overflow-hidden rounded-[1.75rem] border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-4 shadow-[0_25px_60px_rgba(0,0,0,0.1)] text-gray-900"
                      style="backface-visibility:hidden;">

                      <div class="flex h-full flex-col items-center justify-center text-center">

                          <span class="mb-2 text-sm md:text-[0.6rem] font-semibold uppercase md:tracking-[0.4em] text-[#FD5528]">
                              Bespoke Web
                          </span>

                          <div class="flex h-12 w-12 md:h-24 md:w-24 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-xl">

                              <img
                                  src="https://img.icons8.com/?size=100&id=DCkAZ79sIYhT&format=png&color=ffffff"
                                 alt="Custom web application development by Backend Coders India"
                                  class="h-12 w-12 md:h-24 md:w-24">

                          </div>

                          <h3 class="mt-4 text md:text-2xl font-bold text-gray-900">
                              Custom Web Applications
                          </h3>

                      </div>

                  </article>

                  <!-- BACK SIDE -->
               <article
              class="flip-back bg-gradient-to-br from-[#b00000] via-[#FD5528] to-[#fb813b] text-white shadow-[0_25px_60px_rgba(0,0,0,.15)] p-4 md:p-6 lg:p-8">

              <div class="flex h-full flex-col justify-center text-center">

                  <div class="text-base sm:text-lg lg:text-2xl font-bold leading-tight">

                      Custom Web Applications

                  </div>

                  <p class="md:mt-3 text-xs sm:text-sm lg:text-base leading-5 sm:leading-6 lg:leading-7 text-white/90 max-w-[320px] mx-auto">

                      We build secure custom web applications designed for your workflows,
                      users, and long-term business growth.

                  </p>

                  <div class="hidden md:block lg:block flex-wrap justify-center gap-2 mt-5">

                      <span class="rounded-full border border-white/30 bg-white/10 px-3 py-1 text-[10px] lg:text-[32px] md:text-xs lg:text-sm font-semibold backdrop-blur">

                          Scalable

                      </span>

                      <span class="rounded-full border border-white/30 bg-white/10 px-3 py-1 text-[10px] lg:text-[32px] md:text-xs lg:text-sm font-semibold backdrop-blur">

                          Performance

                      </span>

                      <span class="rounded-full border border-white/30 bg-white/10 px-3 py-1 text-[10px] lg:text-[32px] md:text-xs lg:text-sm font-semibold backdrop-blur">

                          Secure

                      </span>

                  </div>

                  <div>
                    <a href="https://backendcodersindia.com/page/custom-web-applications" aria-label="Explore Custom Web Application Development Services"
                      class="mt-5 inline-flex items-center justify-center rounded-xl bg-white px-5 py-2.5 text-xs sm:text-sm font-semibold text-[#FD5528] shadow-lg transition-all duration-300 hover:bg-orange-50 hover:text-[#b00000] hover:scale-105 hover:shadow-xl">
                        Explore Custom Web Applications
                    </a>
                  </div>

              </div>

              </article>

              </div>

          </div>


    <!-- Card 1 -->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">

        <div class="flip-card-inner">

            <!-- FRONT -->
            <article class="flip-front border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-8 shadow-[0_25px_60px_rgba(0,0,0,0.1)]">

                <div class="flex h-full flex-col items-center justify-center text-center">

                    <span class="text-sm md:text-[0.65rem] font-semibold uppercase md:tracking-[0.4em] text-[#FD5528]">
                        Design & Build
                    </span>

                    <div class="mt-2 md:mt-5 flex h-12 w-12 md:h-24 md:w-24 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-xl">

                        <img
                            src="https://img.icons8.com/?size=100&id=8Y6ohiJ337rc&format=png&color=ffffff"
                           alt="Website design and development by Backend Coders India"
                            class="h-12 w-12 md:h-24 md:w-24 p-2">

                    </div>

                    <h3 class="mt-2 md:mt-6 text-sm md:text-2xl font-bold text-slate-900">
                       Website Design & Development
                    </h3>

                </div>

            </article>

            <!-- BACK -->
            <article class="flip-back bg-gradient-to-br from-[#b00000] via-[#FD5528] to-[#fb813b] p-6 text-white shadow-[0_25px_60px_rgba(0,0,0,0.15)]">

                <div class="flex h-full flex-col justify-center text-center">

                    <div class="mt-3 text-center text-sm md:text-xl font-bold">
                        Website Design & Development
                    </div>

                    <p class="md:mt-2 text-center text-sm md:text-base md:leading-7 text-white/90">
                   We create responsive, SEO-friendly websites that load fast and support better conversions.

                    </p>

                    <div class="hidden md:block lg:block flex-wrap justify-center gap-2 mt-5">

                        <span class="rounded-full border border-white/30 bg-white/10 px-3 py-1 text-[10px] lg:text-[32px] md:text-xs lg:text-sm font-semibold backdrop-blur">
                       SEO Friendly
                        </span>

                        <span class="rounded-full border border-white/30 bg-white/10 px-3 py-1 text-[11px] lg:text-[32px] md:text-xs lg:text-sm font-semibold backdrop-blur">
                          Responsive

                        </span>

                    </div>
                       <div>
                    <a href="https://backendcodersindia.com/page/website-design-development" aria-label="Explore Website Design and Development Services"
                      class="mt-2 inline-flex items-center justify-center rounded-xl bg-white px-5 py-2 text-xs sm:text-sm font-semibold text-[#FD5528] shadow-lg transition-all duration-300 hover:bg-orange-50 hover:text-[#b00000] hover:scale-105 hover:shadow-xl">
                        Explore Website Design & Development
                    </a>
                  </div>

                </div>

            </article>

        </div>

    </div>

        <!-- Card 2-->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">

        <div class="flip-card-inner">

            <!-- FRONT -->
            <article class="flip-front border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-8 shadow-[0_25px_60px_rgba(0,0,0,0.1)]">

                <div class="flex h-full flex-col items-center justify-center text-center">

                    <span class=" text-sm md:text-[0.65rem] font-semibold uppercase md:tracking-[0.4em] text-[#FD5528]">
                       SaaS Platforms
                    </span>

                    <div class="md:mt-5 flex h-12 w-12  md:h-24 md:w-24 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-xl">

                        <img
                            src="https://img.icons8.com/?size=100&id=k8TSihyFk2cJ&format=png&color=ffffff"
                            alt="SaaS development by Backend Coders India"
                            class="h-12 w-12 md:h-24 md:w-24 p-2">

                    </div>

                    <h3 class="md:mt-6 text-sm md:text-2xl font-bold text-slate-900">
                       SaaS Development
                    </h3>

                </div>

            </article>

            <!-- BACK -->
            <article class="flip-back bg-gradient-to-br from-[#b00000] via-[#FD5528] to-[#fb813b] p-6 text-white shadow-[0_25px_60px_rgba(0,0,0,0.15)]">

                <div class="flex h-full flex-col justify-center text-center">

                    <div class="mt-5 text-center text-sm md:text-xl font-bold">
                        SaaS Development
                    </div>

                    <p class="md:mt-4 text-center text-sm md:leading-7 text-white/90">
                     We develop cloud-based SaaS products with scalable systems and smooth user experience.

                    </p>

                    <div class="hidden md:block lg:block flex-wrap justify-center gap-2 mt-5">

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                      Cloud Ready

                        </span>

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                       Manage OPS
                        </span>

                    </div>

                       <div>
                    <a href="https://backendcodersindia.com/page/saas-development" aria-label="Explore SaaS Product Development Services"
                      class="mt-2 inline-flex items-center justify-center rounded-xl bg-white px-5 py-2 text-xs sm:text-sm font-semibold text-[#FD5528] shadow-lg transition-all duration-300 hover:bg-orange-50 hover:text-[#b00000] hover:scale-105 hover:shadow-xl">
                        Explore SaaS Development
                    </a>
                  </div>

                </div>

            </article>

        </div>

    </div>

       <!-- Card 3-->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">
        <div class="flip-card-inner">

            <!-- FRONT -->
            <article class="flip-front border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-8 shadow-[0_25px_60px_rgba(0,0,0,0.1)]">

                <div class="flex h-full flex-col items-center justify-center text-center">

                    <span class="text-sm md:text-[0.65rem] font-semibold uppercase md:tracking-[0.4em] text-[#FD5528]">
                   Enterprise Core
                    </span>

                    <div class="md:mt-5 flex h-12 w-12 md:h-24 md:w-24 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-xl">

                        <img
                            src="https://img.icons8.com/?size=100&id=Rk5rrSlqrNZO&format=png&color=ffffff"
                            alt="Enterprise Core software by Backend Coders India"
                            class="h-12 w-12 md:h-24 md:w-24 p-2">

                    </div>

                    <h3 class="md:mt-6 text-sm md:text-2xl font-bold text-slate-900">
                      ERP & POS Software
                    </h3>

                </div>

            </article>

            <!-- BACK -->
            <article class="flip-back bg-gradient-to-br from-[#b00000] via-[#FD5528] to-[#fb813b] p-6 text-white shadow-[0_25px_60px_rgba(0,0,0,0.15)]">

                <div class="flex h-full flex-col justify-center text-center">

                    <div class="mt-5 text-center text-sm md:text-xl font-bold">
                      ERP & POS Software
                    </div>

                    <p class="md:mt-4 text-center text-sm md:leading-7 text-white/90">
                  We build ERP and POS software for billing, inventory, reporting, and operations management.
                    </p>

                    <div class="hidden md:block lg:block flex-wrap justify-center gap-2 mt-5">

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                          Real-Time


                        </span>

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                          Proactive
                        </span>

                    </div>

                       <div>
                    <a href="https://backendcodersindia.com/page/erp-pos-software" aria-label="Explore ERP and POS Software Solutions"
                      class="mt-2 inline-flex items-center justify-center rounded-xl bg-white px-5 py-2 text-xs sm:text-sm font-semibold text-[#FD5528] shadow-lg transition-all duration-300 hover:bg-orange-50 hover:text-[#b00000] hover:scale-105 hover:shadow-xl">
                        Explore ERP & POS Software
                    </a>
                  </div>
                </div>

            </article>

        </div>

    </div>

            
    <!-- Card 4-->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">
        <div class="flip-card-inner">

            <!-- FRONT -->
            <article class="flip-front border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-8 shadow-[0_25px_60px_rgba(0,0,0,0.1)]">

                <div class="flex h-full flex-col items-center justify-center text-center">

                    <span class="text-sm md:text-[0.65rem] font-semibold uppercase md:tracking-[0.4em] text-[#FD5528]">
                   Commerce Pulse
                    </span>

                    <div class="md:mt-5 flex h-12 w-12 md:h-24 md:w-24 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-xl">

                        <img
                            src="https://img.icons8.com/?size=100&id=8OxFnElAJgpE&format=png&color=ffffff"
                            alt="E-commerce Development by Backend Coders India"
                            class="h-12 w-12 md:h-24 md:w-24 p-2">

                    </div>

                    <h3 class="md:mt-6 text-sm md:text-2xl font-bold text-slate-900">
                     E-commerce Development
                    </h3>

                </div>

            </article>

            <!-- BACK -->
            <article class="flip-back bg-gradient-to-br from-[#b00000] via-[#FD5528] to-[#fb813b] p-6 text-white shadow-[0_25px_60px_rgba(0,0,0,0.15)]">

                <div class="flex h-full flex-col justify-center text-center">
                    <div class="mt-5 text-center text-sm md:text-xl font-bold">
                      E-commerce Development
                    </div>

                    <p class="md:mt-4 text-center text-sm md:leading-7 text-white/90">
                        We create eCommerce websites with secure, mobile optimization and product management.
                    </p>

                    <div class="hidden md:block lg:block flex-wrap justify-center gap-2 mt-5">

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                         Secure

                        </span>

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                    Fast Checkout
                        </span>

                    </div>

                       <div>
                    <a href="https://backendcodersindia.com/page/ecommerce-development"
                      class="mt-2 inline-flex items-center justify-center rounded-xl bg-white px-5 py-2 text-xs sm:text-sm font-semibold text-[#FD5528] shadow-lg transition-all duration-300 hover:bg-orange-50 hover:text-[#b00000] hover:scale-105 hover:shadow-xl"
                      aria-label="Explore E-Commerce Development Solutions">
                        Explore E-Commerce Development
                    </a>
                  </div>
                </div>

            </article>

        </div>

    </div>
            

          <!-- Card 5-->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">
        <div class="flip-card-inner">

            <!-- FRONT -->
            <article class="flip-front border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-8 shadow-[0_25px_60px_rgba(0,0,0,0.1)]">

                <div class="flex h-full flex-col items-center justify-center text-center">

                    <span class="text-sm md:text-[0.65rem] font-semibold uppercase md:tracking-[0.4em] text-[#FD5528]">
                   Mobile Pulse
                    </span>

                    <div class="md:mt-5 flex h-12 w-12  md:h-24 md:w-24 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-xl">

                        <img
                            src="https://img.icons8.com/?size=100&id=67475&format=png&color=ffffff"
                            alt="Mobile App Development by Backend Coders India"
                            class="h-12 w-12 md:h-24 md:w-24 p-2">

                    </div>

                    <h3 class="md:mt-6 text-sm md:text-2xl font-bold text-slate-900">
                     Mobile App Development
                    </h3>

                </div>

            </article>

            <!-- BACK -->
            <article class="flip-back bg-gradient-to-br from-[#b00000] via-[#FD5528] to-[#fb813b] p-6 text-white shadow-[0_25px_60px_rgba(0,0,0,0.15)]">

                <div class="flex h-full flex-col justify-center text-center">

                    <div class="mt-5 text-center text-sm md:text-xl font-bold">
                      Mobile App Development
                    </div>

                    <p class="md:mt-4 text-center text-sm md:leading-7 text-white/90">
               We build Android and cross-platform mobile apps with smooth design and scalable performance.
                    </p>

                    <div class="hidden md:block lg:block flex-wrap justify-center gap-2 mt-5">

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                          Smooth UI

                        </span>

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                          Cross Platform
                        </span>

                    </div>

                       <div>
                    <a href="https://backendcodersindia.com/page/mobile-app-development" aria-label="Explore Mobile Application Development Services"
                      class="mt-2 inline-flex items-center justify-center rounded-xl bg-white px-5 py-2 text-xs sm:text-sm font-semibold text-[#FD5528] shadow-lg transition-all duration-300 hover:bg-orange-50 hover:text-[#b00000] hover:scale-105 hover:shadow-xl">
                        Explore Mobile App Development
                    </a>
                  </div>

                </div>

            </article>

        </div>

    </div>
                      
        <!-- Card 5-->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">
        <div class="flip-card-inner">

            <!-- FRONT -->
            <article class="flip-front border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-8 shadow-[0_25px_60px_rgba(0,0,0,0.1)]">

                <div class="flex h-full flex-col items-center justify-center text-center">

                    <span class="text-sm md:text-[0.65rem] font-semibold uppercase md:tracking-[0.4em] text-[#FD5528]">
                  API Layer
                    </span>

                    <div class="md:mt-5 flex h-12 w-12 md:h-24 md:w-24 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-xl">

                        <img
                            src="https://img.icons8.com/?size=100&id=6kPR2dlup5KK&format=png&color=ffffff"
                            alt="API Development by Backend Coders India"
                            class="h-12 w-12 md:h-24 md:w-24 p-2">

                    </div>

                    <h3 class="md:mt-6 text-sm md:text-2xl font-bold text-slate-900">
                     API Development
                    </h3>

                </div>

            </article>

            <!-- BACK -->
            <article class="flip-back bg-gradient-to-br from-[#b00000] via-[#FD5528] to-[#fb813b] p-6 text-white shadow-[0_25px_60px_rgba(0,0,0,0.15)]">

                <div class="flex h-full flex-col justify-center text-center">

                    <div class="mt-5 text-center text-sm md:text-xl font-bold">
                     API Development
                    </div>

                    <p class="md:mt-4 text-center text-sm md:leading-7 text-white/90">
                 We create secure APIs for apps, SaaS platforms, and third-party integrations.
                    </p>

                    <div class="hidden md:block lg:block flex-wrap justify-center gap-2 mt-5">

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                       REST API

                        </span>

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                          Web Hooks
                        </span>
                    </div>

                       <div>
                    <a href="https://backendcodersindia.com/page/api-development" aria-label="Explore API Architecture and Integration Services"
                      class="mt-2 inline-flex items-center justify-center rounded-xl bg-white px-5 py-2 text-xs sm:text-sm font-semibold text-[#FD5528] shadow-lg transition-all duration-300 hover:bg-orange-50 hover:text-[#b00000] hover:scale-105 hover:shadow-xl">
                        Explore API Development
                    </a>
                  </div>

                </div>

            </article>

        </div>

    </div>

            <!-- Card 6-->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">
        <div class="flip-card-inner">

            <!-- FRONT -->
            <article class="flip-front border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-8 shadow-[0_25px_60px_rgba(0,0,0,0.1)]">

                <div class="flex h-full flex-col items-center justify-center text-center">

                    <span class="text-sm md:text-[0.65rem] font-semibold uppercase md:tracking-[0.4em] text-[#FD5528]">
                Growth Duo
                    </span>

                    <div class="md:mt-5 flex h-12 w-12 md:h-24 md:w-24 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-xl">

                        <img
                            src="https://img.icons8.com/?size=100&id=103102&format=png&color=ffffff"
                            alt="Growth Duo by Backend Coders India"
                            class="h-12 w-12 md:h-24 md:w-24 p-2">

                    </div>

                    <h3 class="md:mt-6 text-sm md:text-2xl font-bold text-slate-900">
                    Digital Marketing & SEO
                    </h3>

                </div>

            </article>

            <!-- BACK -->
            <article class="flip-back bg-gradient-to-br from-[#b00000] via-[#FD5528] to-[#fb813b] p-6 text-white shadow-[0_25px_60px_rgba(0,0,0,0.15)]">

                <div class="flex h-full flex-col justify-center text-center">

                    <div class="mt-4 text-center text-sm md:text-xl font-bold">
                     Digital Marketing & SEO
                    </div>

                    <p class="md:mt-5 text-center text-sm md:leading-7 text-white/90">
                        We help businesses grow visibility through SEO, content, and digital marketing strategies.
                    </p>

                    <div class="hidden md:block lg:block flex-wrap justify-center gap-2 mt-5">

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                        Analytics
                        </span>

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                       Lead Growth

                        </span>
                    </div>

                       <div>
                    <a href="{{ route('frontend.seo') }}" aria-label="Explore SEO and Digital Marketing Services"
                      class="mt-2 inline-flex items-center justify-center rounded-xl bg-white px-5 py-2 text-xs sm:text-sm font-semibold text-[#FD5528] shadow-lg transition-all duration-300 hover:bg-orange-50 hover:text-[#b00000] hover:scale-105 hover:shadow-xl">
                        Explore SEO & Digital Marketing
                    </a>
                  </div>

                </div>

            </article>

    </div>

 


    </div>

              <!-- Card 7-->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">
        <div class="flip-card-inner">

            <!-- FRONT -->
            <article class="flip-front border border-[#FD5528]/30 bg-gradient-to-b from-white via-white to-orange-50 p-8 shadow-[0_25px_60px_rgba(0,0,0,0.1)]">

                <div class="flex h-full flex-col items-center justify-center text-center">

                    <span class="text-sm md:text-[0.65rem] font-semibold uppercase md:tracking-[0.4em] text-[#FD5528]">
               Startup Sprint
                    </span>

                    <div class="md:mt-5 flex h-12 w-12 md:h-24 md:w-24 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-xl">

                        <img
                            src="https://img.icons8.com/?size=100&id=KR7IxBJfODTv&format=png&color=ffffff"
                            alt="Startup Sprint by Backend Coders India"
                            class="h-12 w-12 md:h-24 md:w-24 p-2">

                    </div>

                    <h3 class="md:mt-6 text-sm md:text-2xl font-bold text-slate-900">
                  Startup MVP Development
                    </h3>

                </div>

            </article>

            <!-- BACK -->
            <article class="flip-back bg-gradient-to-br from-[#b00000] via-[#FD5528] to-[#fb813b] p-6 text-white shadow-[0_25px_60px_rgba(0,0,0,0.15)]">

                <div class="flex h-full flex-col justify-center text-center">
                    <div class="mt-5 text-center text-sm md:text-xl font-bold">
                    Startup MVP Development
                    </div>

                    <p class="md:mt-4 text-center text-sm md:leading-7 text-white/90">
       We help founders launch MVPs quickly with lean development and scalable foundations.
                    </p>

                    <div class="hidden md:block lg:block flex-wrap justify-center gap-2 mt-5">

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                        Rapid Launch
                        </span>

                        <span class="rounded-full border border-white/30 px-3 py-1 text-[11px]">
                       Validated
                        </span>
                    </div>

                       <div>
                    <a href="https://backendcodersindia.com/page/startup-mvp-development" aria-label="Explore Startup MVP Engineering and Launch Services"
                      class="mt-2 inline-flex items-center justify-center rounded-xl bg-white px-5 py-2 text-xs sm:text-sm font-semibold text-[#FD5528] shadow-lg transition-all duration-300 hover:bg-orange-50 hover:text-[#b00000] hover:scale-105 hover:shadow-xl">
                        Explore Startup MVP Development
                    </a>
                  </div>

                </div>

            </article>

        </div>

    </div>

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
       We follow a clear and structured process that keeps every project aligned with your goals, timeline, and quality expectations.
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
Understand goals, audience, scope, and technical needs.
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
             Design user-friendly flows and interfaces.
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
              Build secure, scalable, and high-performance solutions.
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
             Test performance, usability, and functionality before launch.
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
              Launch optimized websites, apps, and software platforms.
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
              Provide updates, maintenance, and technical support.
            </p>
          </div>
        </div>

      </div>

    </div>

  </div>

</section>


<!-- BLOG -->


   <section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="inline-flex items-center px-4 py-1 rounded-full bg-orange-100 text-orange-600 text-sm font-semibold">
                Latest Insights
            </span>

            <h2 class="mt-4 text-4xl md:text-5xl font-bold text-gray-900">
                Latest Blogs &
                <span class="text-orange-500">Industry News</span>
            </h2>

            <p class="mt-5 text-lg text-gray-600 leading-relaxed">
                Discover expert articles on Web Development, SEO, Digital Marketing,
                Custom Software, Mobile Apps, AI and Business Growth.
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-2">

                <article
                class="group overflow-hidden rounded-3xl bg-white shadow-lg transition duration-500 hover:-translate-y-2 hover:shadow-2xl">

                <a href="https://backendcodersindia.com/blog/custom-web-application-development-company-in-india-build-smarter-software-for-business-growth">
                    <div class="relative h-64 overflow-hidden">

                        <img
                            src="{{ asset('assets/images/blogcus.png') }}"
                            alt="Custom Software Development"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                        <span
                            class="absolute left-5 bottom-5 bg-black text-white px-4 py-2 rounded-full text-xs font-semibold">
                            CUSTOM SOFTWARE
                        </span>

                        <span
                            class="absolute right-5 bottom-5 bg-white/90 backdrop-blur px-4 py-2 rounded-full text-sm font-semibold text-gray-700">
                            {{ $homepageBlogDate('custom-web-application-development-company-in-india-build-smarter-software-for-business-growth', '09 Jul, 2026') }}
                        </span>

                    </div>
                </a>

                <div class="p-7">

                    <h3 class="text-2xl font-bold leading-tight text-gray-900 group-hover:text-orange-500 transition">
                        <a href="https://backendcodersindia.com/blog/custom-web-application-development-company-in-india-build-smarter-software-for-business-growth">
                            Build a custom application around your workflows, integrations, and business goals. This guide explains what to plan before development begins.
                        </a>
                    </h3>

                    <p class="mt-4 text-gray-600 leading-8 line-clamp-3">
                        Build a custom application around your workflows, integrations, and business goals. This guide explains what to plan before development begins.
                    </p>

                    <div class="mt-2 flex items-center justify-end border-t pt-2">
                        <a
                            href="https://backendcodersindia.com/blog/custom-web-application-development-company-in-india-build-smarter-software-for-business-growth"
                            class="font-semibold text-orange-500 hover:text-orange-600 transition">
                            Read More →
                        </a>

                    </div>

                </div>

            </article>

            <!-- Third Card -->

            <article
                class="group overflow-hidden rounded-3xl bg-white shadow-lg transition duration-500 hover:-translate-y-2 hover:shadow-2xl">

                <a href="https://backendcodersindia.com/blog/how-much-does-website-development-cost-for-startups-in-india-2026-guide">
                    <div class="relative h-64 overflow-hidden">

                        <img
                            src="{{ asset('assets/images/blogweb.webp') }}"
                            alt="SEO Services"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                        <span
                            class="absolute left-5 bottom-5 bg-black text-white px-4 py-2 rounded-full text-xs font-semibold">
                            WEBSITE DEVELOPMENT
                        </span>

                        <span
                            class="absolute right-5 bottom-5 bg-white/90 backdrop-blur px-4 py-2 rounded-full text-sm font-semibold text-gray-700">
                            {{ $homepageBlogDate('how-much-does-website-development-cost-for-startups-in-india-2026-guide', '05 Jul, 2026') }}
                        </span>

                    </div>
                </a>

                <div class="p-7">

                    <h3 class="text-2xl font-bold leading-tight text-gray-900 group-hover:text-orange-500 transition">
                        <a href="https://backendcodersindia.com/blog/how-much-does-website-development-cost-for-startups-in-india-2026-guide">
                          How Much Does Website Development Cost for Startups in India? (2026 Guide)
                        </a>
                    </h3>

                    <p class="mt-4 text-gray-600 leading-8 line-clamp-3">
                        Compare website project scopes, understand what affects an estimate, and plan for hosting, maintenance, and search-ready foundations.
                    </p>

                    <div class="mt-2 flex items-center justify-end border-t pt-2">
                        <a
                            href="https://backendcodersindia.com/blog/how-much-does-website-development-cost-for-startups-in-india-2026-guide"
                            class="font-semibold text-orange-500 hover:text-orange-600 transition">
                            Read More →
                        </a>

                    </div>

                </div>

            </article>

        </div>

        <!-- Button -->
        <div class="text-center mt-6">

            <a
                href="{{ route('frontend.blog') }}"
                class="inline-flex items-center gap-3 rounded-full border-2 border-orange-500 text-orange-600 px-8 py-4 font-semibold hover:text-white transition hover:bg-orange-600 shadow-lg hover:shadow-xl">
                View All Blogs
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>

        </div>

    </div>
</section>

<!-- END BLOG -->

<!--{{-- faq --}} -->
<section class="relative overflow-hidden bg-gradient-to-br from-white via-slate-50 to-slate-100 py-16 sm:py-20 lg:py-24 px-4 sm:px-6">

  <div class="max-w-6xl lg:max-w-7xl mx-auto relative z-10">

    <!-- Heading -->
    <div class="text-center mb-10 sm:mb-14">
      <h2 
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
      </h2>

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
    src="/assets/images/faq-1x.webp"
    srcset="
        /assets/images/faq-1x.webp 560w,
        /assets/images/faq-1x.webp 768w,
        /assets/images/faq-1x.webp 1200w
    "
    sizes="(max-width:768px) 100vw, 560px"
    width="560"
    height="373"
    alt="FAQ Illustration for Backend Coders India"
    loading="lazy"
    decoding="async"
    class="rounded-2xl shadow-2xl w-full h-[360px] object-cover">
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
<style>
  .testimonials-swiper .swiper-pagination {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
  }

  .testimonials-swiper .swiper-pagination-bullet {
    width: 0.7rem;
    height: 0.7rem;
    background: #fd5528;
    opacity: 0.35;
    transition: all 0.3s ease;
  }

  .testimonials-swiper .swiper-pagination-bullet-active {
    opacity: 1;
    transform: scale(1.15);
    box-shadow: 0 0 0 4px rgba(253, 85, 40, 0.16);
  }

  .testimonials-swiper .swiper-button-next::after,
  .testimonials-swiper .swiper-button-prev::after {
    content: none;
  }

  .testimonials-swiper .testimonial-card {
    min-height: 24rem;
    justify-content: space-between;
  }

  .testimonials-swiper .review-text {
    min-height: 5.25rem;
    line-height: 1.7;
  }
</style>

<section class="relative overflow-hidden bg-white px-6 py-20 sm:py-24 lg:py-28">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,_#FD5528,_transparent_60%)]"></div>

    <div class="relative mx-auto max-w-7xl text-center">
      <h2
        data-aos="fade-up"
        class="inline-block rounded-full border border-white/40 bg-white/60 px-5 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528] shadow-[0_8px_20px_rgba(0,0,0,0.08)] backdrop-blur-md before:absolute before:inset-0 before:-z-10 before:rounded-full before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30"
      >
        Testimonials
      </h2>

      <h2 class="mt-6 text-3xl font-bold text-black md:text-5xl">
        What Our <span class="text-[#FD5528]">Clients Say</span>
      </h2>

      <p class="mx-auto mt-4 max-w-3xl text-base leading-relaxed text-slate-600 sm:text-lg">
        Our clients trust Backend Coders India for clear communication, reliable delivery, thoughtful architecture, and measurable business growth.
      </p>

      <div class="testimonials-swiper swiper mt-14 overflow-hidden sm:mt-16">
        <div class="swiper-wrapper gap-2">
          @if(false) {{-- Omitted until this review has a verifiable public source link. --}}
          <div class="swiper-slide h-auto">
            <article class="testimonial-card flex h-full flex-col rounded-[28px] border border-gray-100 bg-white p-6 text-left shadow-[0_20px_60px_rgba(15,23,42,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_70px_rgba(253,85,40,0.16)] sm:p-7">
              <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                  <div class="relative">
                    <img src="{{ asset('assets/images/client1-d-84.webp') }}" alt="Dashawn Robinson testimonial for Backend Coders India" class="h-12 w-12 rounded-full object-cover" />
                    <span class="absolute -bottom-1 -right-1 rounded-full bg-green-500 px-1 text-[10px] text-white">✔</span>
                  </div>
                  <div>
                    <h3 class="text-sm font-semibold text-gray-900">Dashawn Robinson</h3>
                    <p class="text-xs text-gray-500">June 6, 2025</p>
                  </div>
                </div>
                <a href="https://www.upwork.com/freelancers/~0116b8c17b9610ea4e" target="_blank" rel="noopener noreferrer" aria-label="View Backend Coders India on Upwork">
                  <img src="{{ asset('assets/icons/upwork.png') }}" alt="Upwork client review" class="h-8 w-8 opacity-80" />
                </a>
              </div>

              <div class="mt-4 flex items-center gap-1 text-yellow-400">
                <span class="text-lg">★★★★★</span>
              </div>

              <p class="review-text mt-4 text-sm leading-relaxed text-slate-700"
                data-full="Freelancer was extremely communicative, skilled, prompt and professional. Their work exceeded my expectation. I’d definitely hire them again and refer them to my colleagues."
                data-short="Freelancer was extremely communicative, skilled, prompt and professional. Their work exceeded my expectation. I’d definitely hire them again and refer them to my colleagues.">
                Freelancer was extremely communicative, skilled, prompt and professional. Their work exceeded my expectation. I’d definitely hire them again and refer them to my colleagues.
              </p>
            

              <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4 text-xs text-gray-500">
                <span class="rounded-full bg-gray-100 px-2.5 py-1 text-orange-500">United States</span>
                <span class="font-semibold text-orange-700">CEO</span>
              </div>
            </article>
          </div>
          @endif

            <div class="swiper-slide h-auto">
            <article class="testimonial-card flex h-full flex-col rounded-[28px] border border-gray-100 bg-white p-6 text-left shadow-[0_20px_60px_rgba(15,23,42,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_70px_rgba(253,85,40,0.16)] sm:p-7">
              <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                  <div class="relative">
                    <img src="{{ asset('assets/images/google1.png') }}" alt="vishwanath pratap singh Yadav testimonial for Backend Coders India" class="h-12 w-12 rounded-full object-cover" />
                    <span class="absolute -bottom-1 -right-1 rounded-full bg-green-500 px-1 text-[10px] text-white">✔</span>
                  </div>
                  <div>
                    <h3 class="text-sm font-semibold text-gray-900">vishwanath pratap singh Yadav</h3>
                    <p class="text-xs text-gray-500">jan 15, 2025</p>
                  </div>
                </div>
                <img src="{{ asset('assets/icons/google.png') }}" alt="Google translation for Backend Coders India" class="h-8 w-8 opacity-80" />
              </div>

              <div class="mt-4 flex items-center gap-1 text-yellow-400">
                <span class="text-lg">★★★★★</span>
              </div>

              <p class="review-text mt-4 text-sm leading-relaxed text-slate-700"
                data-full="Ravindra went above and beyond fixing major issues left by a previous developer, saving the project with top-notch skills, great attitude, and reliability."
                data-short="Ravindra went above and beyond fixing major issues left by a previous developer, saving the project with top-notch skills, great attitude, and reliability.">
         “Excellent experience with Backend Coders India. Their team was professional, responsive, technically strong, and delivered quality results on time. Highly recommended for reliable IT solutions.”
              </p>
            

              <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4 text-xs text-gray-500">
                <span class="rounded-full bg-gray-100 px-2.5 py-1 text-orange-500">India</span>
                <span class="font-medium text-orange-500">CEO</span>
              </div>
            </article>
          </div>

          <div class="swiper-slide h-auto">
            <article class="testimonial-card flex h-full flex-col rounded-[28px] border border-gray-100 bg-white p-6 text-left shadow-[0_20px_60px_rgba(15,23,42,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_70px_rgba(253,85,40,0.16)] sm:p-7">
              <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                  <div class="relative">
                    <img src="{{ asset('assets/images/client-mj-84.webp') }}" alt="Minwoon Jung testimonial for Backend Coders India" class="h-12 w-12 rounded-full object-cover" />
                    <span class="absolute -bottom-1 -right-1 rounded-full bg-green-500 px-1 text-[10px] text-white">✔</span>
                  </div>
                  <div>
                    <h3 class="text-sm font-semibold text-gray-900">Minwoon Jung</h3>
                    <p class="text-xs text-gray-500">May 5, 2025</p>
                  </div>
                </div>
                <a href="https://www.upwork.com/freelancers/~0116b8c17b9610ea4e" target="_blank" rel="noopener noreferrer" aria-label="View Backend Coders India on Upwork">
                  <img src="{{ asset('assets/icons/upwork.png') }}" alt="Upwork client review" class="h-8 w-8 opacity-80" />
                </a>
              </div>

              <div class="mt-4 flex items-center gap-1 text-yellow-400">
                <span class="text-lg">★★★★★</span>
              </div>

              <p class="review-text mt-4 text-sm leading-relaxed text-slate-700"
                data-full="Ravindra went above and beyond fixing major issues left by a previous developer, saving the project with top-notch skills, great attitude, and reliability."
                data-short="Ravindra went above and beyond fixing major issues left by a previous developer, saving the project with top-notch skills, great attitude, and reliability.">
                Ravindra went above and beyond fixing major issues left by a previous developer, saving the project with top-notch skills, great attitude, and reliability.
              </p>
            

              <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4 text-xs text-gray-500">
                <span class="rounded-full bg-gray-100 px-2.5 py-1 text-orange-500">United States</span>
                <span class="font-medium text-orange-500">CEO</span>
              </div>
            </article>
          </div>

          <div class="swiper-slide h-auto">
            <article class="testimonial-card flex h-full flex-col rounded-[28px] border border-gray-100 bg-white p-6 text-left shadow-[0_20px_60px_rgba(15,23,42,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_70px_rgba(253,85,40,0.16)] sm:p-7">
              <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                  <div class="relative">
                    <img src="{{ asset('assets/images/client-p-84.webp') }}" alt="Peter Farrell testimonial for Backend Coders India" class="h-12 w-12 rounded-full object-cover" />
                    <span class="absolute -bottom-1 -right-1 rounded-full bg-green-500 px-1 text-[10px] text-white">✔</span>
                  </div>
                  <div>
                    <h3 class="text-sm font-semibold text-gray-900">Peter Farrell</h3>
                    <p class="text-xs text-gray-500">May 5, 2025</p>
                  </div>
                </div>
                <a href="https://www.upwork.com/freelancers/~0116b8c17b9610ea4e" target="_blank" rel="noopener noreferrer" aria-label="View Backend Coders India on Upwork">
                  <img src="{{ asset('assets/icons/upwork.png') }}" alt="Upwork client review" class="h-8 w-8 opacity-80" />
                </a>
              </div>

              <div class="mt-4 flex items-center gap-1 text-yellow-400">
                <span class="text-lg">★★★★★</span>
              </div>

              <p class="review-text mt-4 text-sm leading-relaxed text-slate-700"
                data-full="Very pleased with the work provided, understood my requirements and delivered on time. Highly recommended."
                data-short="Very pleased with the work provided, understood my requirements and delivered on time. Highly recommended.">
                Very pleased with the work provided, understood my requirements and delivered on time. Highly recommended.
              </p>
            

              <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4 text-xs text-gray-500">
                <span class="rounded-full bg-gray-100 px-2.5 py-1 text-orange-500">United Kingdom</span>
                <span class="font-medium text-orange-500">Director</span>
              </div>
            </article>
          </div>

          <div class="swiper-slide h-auto">
            <article class="testimonial-card flex h-full flex-col rounded-[28px] border border-gray-100 bg-white p-6 text-left shadow-[0_20px_60px_rgba(15,23,42,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_70px_rgba(253,85,40,0.16)] sm:p-7">
              <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                  <div class="relative">
                    <img src="{{ asset('assets/images/client-v-84.webp') }}" alt="Veera Linga testimonial for Backend Coders India" class="h-12 w-12 rounded-full object-cover" />
                    <span class="absolute -bottom-1 -right-1 rounded-full bg-green-500 px-1 text-[10px] text-white">✔</span>
                  </div>
                  <div>
                    <h3 class="text-sm font-semibold text-gray-900">Veera Linga</h3>
                    <p class="text-xs text-gray-500">May 5, 2025</p>
                  </div>
                </div>
                <a href="https://www.upwork.com/freelancers/~0116b8c17b9610ea4e" target="_blank" rel="noopener noreferrer" aria-label="View Backend Coders India on Upwork">
                  <img src="{{ asset('assets/icons/upwork.png') }}" alt="Upwork client review" class="h-8 w-8 opacity-80" />
                </a>
              </div>

              <div class="mt-4 flex items-center gap-1 text-yellow-400">
                <span class="text-lg">★★★★★</span>
              </div>

              <p class="review-text mt-4 text-sm leading-relaxed text-slate-700"
                data-full="Ravindra delivered a visually appealing, responsive, and highly functional website with top-notch skills, great communication, flexibility, and strong post-launch support, highly recommended."
                data-short="Ravindra delivered a visually appealing, responsive, and highly functional website with top-notch skills, great communication, flexibility, and strong post-launch support, highly recommended.">
                Ravindra delivered a visually appealing, responsive, and highly functional website with top-notch skills, great communication, flexibility, and strong post-launch support, highly recommended.
              </p>
            

              <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4 text-xs text-gray-500">
                <span class="rounded-full bg-gray-100 px-2.5 py-1 text-orange-500">United States</span>
                <span class="font-medium text-orange-500">Director</span>
              </div>
            </article>
          </div>
        </div>

        <div class="mt-8 flex items-center justify-center gap-3">
          <button type="button" class="swiper-button-prev group inline-flex h-12 w-12 items-center justify-center rounded-full border border-[#FD5528]/20 bg-gradient-to-br from-white to-orange-50 text-[#FD5528] shadow-[0_10px_24px_rgba(253,85,40,0.12)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#FD5528] hover:text-white hover:shadow-[0_14px_30px_rgba(253,85,40,0.24)]" aria-label="Previous testimonial">
            <svg class="h-5 w-5 text-[#FD5528] transition group-hover:-translate-x-0.5 group-hover:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M15 18l-6-6 6-6"/>
            </svg>
          </button>
          <div class="swiper-pagination !static"></div>
          <button type="button" class="swiper-button-next group inline-flex h-12 w-12 items-center justify-center rounded-full border border-[#FD5528]/20 bg-gradient-to-br from-white to-orange-50 text-[#FD5528] shadow-[0_10px_24px_rgba(253,85,40,0.12)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#FD5528] hover:text-white hover:shadow-[0_14px_30px_rgba(253,85,40,0.24)]" aria-label="Next testimonial">
            <svg class="h-5 w-5 text-[#FD5528] transition group-hover:translate-x-0.5 group-hover:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 18l6-6-6-6"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
</section>

<!-- WHY KANPUR BUSINESSES CHOOSE US -->
<section id="why-kanpur-businesses"
  class="relative overflow-hidden bg-white px-4 py-10 sm:px-3 sm:py-6 md:py-10 lg:px-8 lg:py-12">

  <!-- BACKGROUND DECORATION -->
  <div
    class="pointer-events-none absolute -right-32 top-10 h-72 w-72 rounded-full
    bg-[#FD5528]/5 blur-3xl">
  </div>

  <div
    class="pointer-events-none absolute -left-32 bottom-0 h-72 w-72 rounded-full
    bg-orange-200/20 blur-3xl">
  </div>


  <div class="relative mx-auto max-w-[1400px]">
<!-- SECTION HEADER -->
<div class="mx-auto max-w-4xl text-center">


  <!-- MAIN HEADING -->
  <h2
    class="mx-auto mt-2 max-w-4xl
    text-3xl font-bold leading-[1.1]
    tracking-tight text-black
    sm:mt-6 sm:text-4xl
    md:text-5xl
    lg:text-[3.5rem]"
  >
    Why Kanpur
    <span class="text-[#FD5528]">
      Businesses Choose Us
    </span>
  </h2>


  <!-- SUPPORTING HEADING -->
  <h2
    class="mx-auto mt-4 max-w-3xl
    text-base font-medium leading-relaxed
    text-black
    sm:mt-5 sm:text-lg
    md:text-xl
    lg:text-2xl"
  >
    Kanpur's Trusted Partner for
    <span class="font-semibold text-gray-800">
      Web Development, Software & Digital Marketing
    </span>
  </h2>

</div>

    <!-- CONTENT AREA -->
    <div class="mt-10 sm:mt-12 lg:mt-16">

      <div
        class="relative overflow-hidden rounded-3xl
        border border-gray-100
        bg-gradient-to-br from-gray-50 via-white to-orange-50/30
        p-5
        shadow-[0_20px_60px_rgba(15,23,42,0.06)]
        sm:p-8
        md:p-10
        lg:p-12">

        <!-- TOP ACCENT -->
        <div
          class="absolute left-0 top-0 h-1 w-full
          bg-gradient-to-r from-[#FD5528] via-[#fbb03b] to-transparent">
        </div>


        <!-- DECORATIVE SHAPE -->
        <div
          class="pointer-events-none absolute -right-24 -top-24
          h-64 w-64 rounded-full
          bg-[#FD5528]/5 blur-3xl">
        </div>


        <div class="relative grid gap-4 lg:grid-cols-1">

      


          <!-- RIGHT CONTENT -->
          <div class="space-y-6">

            <!-- PARAGRAPH 1 -->
            <div
              class="rounded-2xl border border-gray-100 bg-white/80
              p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]
              backdrop-blur-sm
              sm:p-6">

              <p
                class="text-sm leading-7 text-gray-600
                sm:text-base sm:leading-8">

                Businesses looking for
                <a
                  href="{{ route('frontend.seo') }}"
                  class="font-semibold text-[#FD5528]
                  decoration-[#FD5528]/30 
                  transition-colors duration-200
                  hover:text-orange-600 hover:decoration-[#FD5528]">
                  digital marketing support
                </a>
                that also accounts for their software needs, or
                <a
                  href="https://backendcodersindia.com/page/website-design-development"
                  class="font-semibold text-[#FD5528]
                   decoration-[#FD5528]/30 
                  transition-colors duration-200
                  hover:text-orange-600 hover:decoration-[#FD5528]">
                  web development services
                </a>
                that can scale with their business can find both services at
                Backend Coders India. Based in Krishna Nagar, Kanpur, the team
                works locally and with clients across Delhi NCR,
                Lucknow, Pune, Mumbai, and internationally.

              </p>

            </div>


            <!-- PARAGRAPH 2 -->
            <div
              class="rounded-2xl border border-gray-100 bg-white/80
              p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]
              backdrop-blur-sm
              sm:p-6">

              <p
                class="text-sm leading-7 text-gray-600
                sm:text-base sm:leading-8">

                The team develops
                <a
                  href="https://backendcodersindia.com/page/custom-web-applications"
                  class="font-semibold text-[#FD5528]
                   decoration-[#FD5528]/30 
                  transition-colors duration-200
                  hover:text-orange-600 hover:decoration-[#FD5528]">
                  custom web applications
                </a>,
                along with SaaS platforms, ERP and POS
                systems, and mobile apps for businesses that have outgrown
                off-the-shelf tools. It also provides
                <a
                  href="https://backendcodersindia.com/page/local-seo"
                  class="font-semibold text-[#FD5528]
                 decoration-[#FD5528]/30 
                  transition-colors duration-200
                  hover:text-orange-600 hover:decoration-[#FD5528]">
                  search optimization services
                </a>,
                that includes technical site audits, local visibility, and content planning based on customer questions.

              </p>

            </div>


            <!-- PARAGRAPH 3 -->
            <div
              class="rounded-2xl border border-gray-100 bg-white/80
              p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)]
              backdrop-blur-sm
              sm:p-6">

              <p
                class="text-sm leading-7 text-gray-600
                sm:text-base sm:leading-8">

                Whether you are launching a brand with a
                <strong class="font-semibold text-[#FD5528]
                   decoration-[#FD5528]/30 
                  transition-colors duration-200
                  hover:text-orange-600 hover:decoration-[#FD5528]">
                  website
                </strong>
                , seeking
                <strong class="font-semibold text-[#FD5528]
                  decoration-[#FD5528]/30 
                  transition-colors duration-200
                  hover:text-orange-600 hover:decoration-[#FD5528]">
                  ongoing technical support
                </strong>
                , or a development partner for a
                <strong class="font-semibold text-[#FD5528]
                  decoration-[#FD5528]/30 
                  transition-colors duration-200
                  hover:text-orange-600 hover:decoration-[#FD5528]">
                  SaaS development
                </strong>
                or
                <strong class="font-semibold text-[#FD5528]
                 decoration-[#FD5528]/30 
                  transition-colors duration-200
                  hover:text-orange-600 hover:decoration-[#FD5528]">
                  mobile app development
                </strong>
                project that spans India and international markets, our team
                handles strategy, design, development, and growth end-to-end.

              </p>

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
       <h2
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

    </h2>

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
