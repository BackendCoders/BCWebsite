@extends('component.main')

@section('content')
@php($showcaseProject = $projects->firstWhere('is_featured', true) ?? $projects->first())
<style>
    @keyframes marquee {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(calc(-50% - 12px));
        }
    }

    .animate-marquee {
        width: max-content;
        animation: marquee 30s linear infinite;
    }

    .animate-marquee:hover {
        animation-play-state: paused;
    }
</style>

<!-- hero section  -->
 <section class="relative h-[30vh] flex items-center justify-center text-center text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <img 
    src="{{asset('assets/images/banner.png')}}" alt="Backend Coders India - Software, Web, App, and Digital Solutions"
    class="absolute inset-0 w-full h-full object-cover"
  />

  <!-- DARK OVERLAY -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- CONTENT -->
  <div class="relative z-10 max-w-7xl px-6">

  

    <!-- HEADING -->
    <h1 class="mt-2 text-2xl font-black leading-tight sm:text-5xl md:text-6xl">
       Projects Built<span class="text-orange-500"> for Real Results</span>
    </h1>

    <!-- SUBTEXT -->
    <p class="mx-auto mt-0 max-w-7xl text-sm text-gray-300 sm:text-base md:text-lg">
    Explore selected projects from Backend Coders India. Our work includes websites, ecommerce, mobile apps, ERP, SaaS, and custom software.
We build tools that solve business problems. Each project starts with clear goals and a practical plan. We work with startups, small businesses, and growing teams.

    </p>

 

  </div>

</section>
<!-- end hero section  -->

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
                src="{{ asset('assets/images/map.jpeg.webp') }}"
                class="w-full lg:h-[500px] grayscale opacity-90 contrast-110"
                alt="Global Presence of Backend Coders India - USA, UK, India"
              />

              <!-- PINS -->
              <div class="absolute inset-0">

                <!-- USA -->
                <div class="absolute left-[22%] top-[34%] -translate-x-1/2 -translate-y-1/2">
                  <div class="flex flex-col items-center">
                    
                    <!-- ping -->
                    <span class="absolute h-6 w-6 rounded-full bg-orange-500/30 animate-ping"></span>

                    <!-- ICON -->
                    <svg viewBox="0 0 24 24" class="w-6 h-6 drop-shadow-lg" aria-hidden="true">
                      <path fill="#f97316" d="M12 2c-4.4 0-8 3.6-8 8 0 5.4 8 12 8 12s8-6.6 8-12c0-4.4-3.6-8-8-8zm0 11.3A3.3 3.3 0 1 1 12 6a3.3 3.3 0 0 1 0 6.6z"/>
                    </svg>

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

                    <svg viewBox="0 0 24 24" class="w-6 h-6 drop-shadow-lg" aria-hidden="true">
                      <path fill="#f97316" d="M12 2c-4.4 0-8 3.6-8 8 0 5.4 8 12 8 12s8-6.6 8-12c0-4.4-3.6-8-8-8zm0 11.3A3.3 3.3 0 1 1 12 6a3.3 3.3 0 0 1 0 6.6z"/>
                    </svg>

                    <div class="mt-1 text-[10px] bg-gray-700 text-white px-2 py-0.5 rounded">
                      UK
                    </div>
                  </div>
                </div>

                <!-- INDIA -->
                <div class="absolute left-[71%] top-[46%] -translate-x-1/2 -translate-y-1/2">
                  <div class="flex flex-col items-center">
                    
                    <span class="absolute h-6 w-6 rounded-full bg-orange-500/30 animate-ping"></span>

                    <svg viewBox="0 0 24 24" class="w-6 h-6 drop-shadow-lg" aria-hidden="true">
                      <path fill="#f97316" d="M12 2c-4.4 0-8 3.6-8 8 0 5.4 8 12 8 12s8-6.6 8-12c0-4.4-3.6-8-8-8zm0 11.3A3.3 3.3 0 1 1 12 6a3.3 3.3 0 0 1 0 6.6z"/>
                    </svg>

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
          <h3 class="text-3xl font-bold text-orange-500 counter" data-target="50">50</h3>
          
        </div>

        <!-- Label -->
        <p class="text-sm text-slate-600 mt-2">Projects Delivered</p>

      </div>

      <div class="stat-card group p-6 rounded-xl bg-gradient-to-br from-orange-50 to-white border border-orange-100 shadow-sm text-center">

        <!-- Number + Symbol -->
        <div class="flex items-center justify-center gap-1">
          <h3 class="text-3xl font-bold text-orange-500 counter" data-target="3">3</h3>
          
        </div>

        <!-- Label -->
        <p class="text-sm text-slate-600 mt-2">Countries Served</p>

      </div>

        <div class="stat-card group p-6 rounded-xl bg-gradient-to-br from-orange-50 to-white border border-orange-100 shadow-sm text-center">

        <!-- Number + Symbol -->
        <div class="flex items-center justify-center gap-1">
          <h3 class="text-3xl font-bold text-orange-500 counter" data-target="40">40</h3>
          
        </div>

        <!-- Label -->
        <p class="text-sm text-slate-600 mt-2">Happy Clients</p>

      </div>
       

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



      <!-- PRODUCTS SECTION -->
<section class="relative overflow-hidden bg-[linear-gradient(180deg,#ffffff_0%,#fffaf6_100%)] py-24">
          <div class="pointer-events-none absolute inset-0">
              <div class="absolute -top-24 left-1/2 h-80 w-80 -translate-x-1/2 rounded-full bg-[#FD5528]/10 blur-3xl"></div>
              <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-orange-100/70 blur-3xl"></div>
          </div>

          <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-6xl text-center">
                  <span class="inline-flex items-center rounded-full border border-[#FD5528]/15 bg-white px-5 py-2 text-xs font-bold uppercase tracking-[0.4em] text-[#FD5528] shadow-sm">
                      Featured Product
                  </span>
                  <h2 class="mt-7 text-4xl font-black tracking-tight text-gray-950 sm:text-5xl lg:text-6xl">
                      Our<span class="bg-gradient-to-r from-[#FD5528] to-[#ff8a3d] bg-clip-text text-transparent"> Launched Product</span>
                  </h2>
                  <p class="mx-auto mt-6 max-w-6xl text-base leading-8 text-slate-600 sm:text-lg">
                      A clean, premium showcase of the products we have designed and launched for modern businesses, with strong hierarchy, neat spacing, and a refined conversion-first presentation.
                  </p>
              </div>

      <div class="mt-4 max-w-9xl mx-auto">

          <div class="overflow-hidden rounded-[2.5rem] border border-orange-100 bg-white shadow-[0_25px_80px_rgba(15,23,42,0.08)]">

              <div class="grid lg:grid-cols-2">

                  <!-- LEFT IMAGE -->
                  <div class="relative flex flex-col justify-center overflow-hidden bg-slate-50 p-8 lg:p-12">

                      <!-- BADGE -->
                      <div class="absolute left-6 top-6 z-20">
                          <span class="rounded-full bg-[#FD5528] px-4 py-1.5 text-[10px] font-black uppercase tracking-[0.25em] text-white shadow-md">
                              Featured Product
                          </span>
                      </div>

                      <!-- PRODUCT IMAGE -->
                      <div class="relative z-10 w-full max-w-[500px] mx-auto mt-8">
                          <img
                          src="{{ asset('assets/images/seo-pro.jpg') }}"
                          alt="SEO Rocket Pro - AI-Powered SEO Growth Platform"
                          class="w-full h-auto object-contain drop-shadow-2xl transition duration-700 hover:scale-105"
                          />
                      </div>

                      <!-- BOTTOM LABELS -->
                      <div class="absolute bottom-6 left-6 z-20 flex flex-wrap gap-2">
                          <span class="rounded-full bg-white px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-600 shadow-sm ring-1 ring-slate-200">
                              Analytics
                          </span>
                          <span class="rounded-full bg-white px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-600 shadow-sm ring-1 ring-slate-200">
                              Automation
                          </span>
                          <span class="rounded-full bg-white px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-600 shadow-sm ring-1 ring-slate-200">
                              SEO
                          </span>
                      </div>

                  </div>

                  <!-- RIGHT CONTENT -->
                  <div class="flex flex-col justify-center p-8 lg:p-12">

                      <div>

                          <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#FD5528]">

                              SEO Growth Platform

                          </p>

                      <div class="mt-4 flex items-center gap-4">
                          <h3 class="text-4xl font-black tracking-tight text-slate-950 lg:text-5xl">
                              SEO Rocket Pro
                          </h3>

                          <img
                              src="{{ asset('assets/images/Rocket.svg') }}"
                              alt="SEO Rocket Pro - AI-Powered SEO Growth Platform"
                              class="h-10 w-10 lg:h-14 lg:w-14 animate-bounce"
                          >
                      </div>
                          



                          <p class="mt-5 text-base leading-8 text-slate-600">

                              SEO Rocket Pro helps businesses improve rankings, increase organic traffic, generate qualified leads and monitor growth through powerful AI-driven SEO analytics.

                          </p>

                      </div>

                      <!-- FEATURES -->
                      <div class="mt-6 flex flex-col gap-3">
                          <div class="flex items-center gap-3">
                              <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#FD5528]/10 text-[#FD5528]">
                                  <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                              </div>
                              <span class="text-sm font-semibold text-slate-700">Real-time keyword tracking</span>
                          </div>
                          <div class="flex items-center gap-3">
                              <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#FD5528]/10 text-[#FD5528]">
                                  <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                              </div>
                              <span class="text-sm font-semibold text-slate-700">Competitor analysis dashboard</span>
                          </div>
                          <div class="flex items-center gap-3">
                              <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#FD5528]/10 text-[#FD5528]">
                                  <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                              </div>
                              <span class="text-sm font-semibold text-slate-700">AI-powered SEO recommendations</span>
                          </div>
                          <div class="flex items-center gap-3">
                              <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#FD5528]/10 text-[#FD5528]">
                                  <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                              </div>
                              <span class="text-sm font-semibold text-slate-700">Local SEO optimization tools</span>
                          </div>
                      </div>

                      <!-- CASE STUDY STATS -->
                      <div class="mt-8 rounded-[20px] bg-slate-50 p-6 shadow-inner ring-1 ring-slate-200/50">
                          <h4 class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-4">Verified Case Study Results</h4>
                          
                          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                              <div class="rounded-xl bg-white p-4 shadow-sm ring-1 ring-slate-100">
                                  <div class="flex items-end gap-2">
                                      <div class="text-3xl font-black text-[#FD5528] tracking-tight">+100%</div>
                                      <div class="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Growth</div>
                                  </div>
                                  <div class="mt-2 text-xs font-bold text-slate-800">Organic Traffic</div>
                                  <div class="mt-1 text-[11px] text-slate-500">
                                      <span class="font-bold text-slate-700">Base:</span> 5K visits/mo &bull; <span class="font-bold text-slate-700">Time:</span> 12 mos
                                  </div>
                              </div>

                              <div class="rounded-xl bg-white p-4 shadow-sm ring-1 ring-slate-100">
                                  <div class="flex items-end gap-2">
                                      <div class="text-3xl font-black text-slate-900 tracking-tight">10K+</div>
                                      <div class="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Keywords</div>
                                  </div>
                                  <div class="mt-2 text-xs font-bold text-slate-800">Top 10 Rankings</div>
                                  <div class="mt-1 text-[11px] text-slate-500">
                                      <span class="font-bold text-slate-700">Base:</span> 1.2K keywords &bull; <span class="font-bold text-slate-700">Time:</span> 12 mos
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- CTA -->
                      <div class="mt-8 flex flex-wrap items-center gap-3">
                          <a
                             href="{{ $showcaseProject ? route('frontend.project-detail', ['slug' => $showcaseProject->slug]) : route('frontend.project') }}"
                              class="inline-flex items-center justify-center rounded-full bg-[#FD5528] px-6 py-2.5 text-sm font-bold text-white shadow-md shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-lg hover:shadow-[#FD5528]/40"
                          >
                              View Project
                          </a>
                          <a
                              href="{{ route('frontend.contact') }}"
                              class="inline-flex items-center justify-center rounded-full bg-slate-100 px-6 py-2.5 text-sm font-bold text-slate-700 transition hover:bg-slate-200 hover:text-slate-900"
                          >
                             Free Demo
                          </a>
                      </div>

                  </div>

              </div>

          </div>

      </div>





          </div>
</section>

<!-- OUR CLIENTS SECTION -->
<section class="py-20 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center mb-14">
            <span
                class="inline-flex items-center rounded-full bg-orange-50 px-4 py-2 text-sm font-semibold text-[#FD5528]">
                Trusted By
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
           Trusted <span class="text-[#FD5528]">Clients</span>
            </h2>

            <p class="mt-4 max-w-5xl mx-auto text-lg text-slate-600">
                Proudly delivering websites, applications, and digital solutions
                for businesses, educational institutions, startups, and organizations.
            </p>
        </div>

        <!-- Marquee Wrapper -->
        <div class="relative overflow-hidden">

            <!-- Left Fade -->
            <div
                class="absolute left-0 top-0 z-10 h-full w-24 bg-gradient-to-r from-white via-white/80 to-transparent">
            </div>

            <!-- Right Fade -->
            <div
                class="absolute right-0 top-0 z-10 h-full w-24 bg-gradient-to-l from-white via-white/80 to-transparent">
            </div>

            <!-- Marquee Track -->
            <div class="flex animate-marquee gap-6">

                <!-- ORIGINAL LOGOS -->

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/ifnoss-logo.png') }}"
                        alt="IFNOSS - IT Solutions Provider in India services and software development by Backend Coders India"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/marley.png') }}"
                        alt="Marley Moves - Logistics and Transportation Solutions by Backend Coders India"
                        class="max-h-32 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/pulse.png') }}"
                        alt="Pulse Events - Event Management and Planning Solutions by Backend Coders India"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/praslin.png') }}"
                        alt="Praslin - Real Estate and Property Management Solutions by Backend Coders India"
                        class="max-h-32 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/la.png') }}"
                        alt="Ladigue - Digital Marketing and Branding Solutions by Backend Coders India"
                        class="max-h-32 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/logo3.png') }}"
                        alt="Client Logo - Custom Software and Web Solutions by Backend Coders India"
                        class="max-h-20 w-auto object-contain">
                </div>

                <!-- DUPLICATE LOGOS FOR INFINITE LOOP -->

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/arrive.png') }}"
                        alt="IFNOSS - IT Solutions Provider in India"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/acetaxi.png') }}"
                        alt="Marley Moves - Logistics and Transportation Solutions by Backend Coders India"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/scgo;d.png') }}"
                        alt="Pulse Events - Event Management and Planning Solutions by Backend Coders India"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/skyda.jpeg') }}"
                        alt="Praslin - Real Estate and Property Management Solutions by Backend Coders India"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/Ladiguelogo.png') }}"
                        alt="Ladigue - Digital Marketing and Branding Solutions by Backend Coders India"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/ace.jpeg') }}"
                        alt="Client Logo - Custom Software and Web Solutions by Backend Coders India"
                        class="max-h-20 w-auto object-contain">
                </div>

            </div>
        </div>
    </div>
</section>


<!-- CASE STUDY -->
<section class="py-24 bg-white">

  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <!-- IMAGE -->
    <div class="relative group">
      <img 
        src="{{asset('assets/images/backend_coders_split_1.webp.webp')}}" alt="backend coder india case study "
        class="rounded-2xl shadow-xl w-full object-cover transition duration-500 group-hover:scale-105"
      />

      <!-- OVERLAY BADGE -->
      <div class="absolute top-4 left-4 bg-[#FD5528] text-white text-xs px-4 py-2 rounded-full shadow">
        Case Study
      </div>
    </div>

    <!-- CONTENT -->
    <div>

      <!-- TITLE -->
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-snug">
       Our Project Experience Across 
        <span class="text-[#FD5528]">Industries and Technologies</span>
      </h2>

      <!-- DESCRIPTION -->
      <p class="mt-6 text-gray-600 leading-relaxed">
    
Backend Coders India has delivered projects for businesses in transportation, wellness, childcare, consulting, relocation, CRM, ecommerce, and other service-driven sectors. Our portfolio reflects experience across different workflows, industries, and technical requirements.

From business websites and ecommerce platforms to CRM tools, mobile apps, SaaS products, ERP systems, and API-connected platforms, our work is shaped around usability, scalability, and long-term value. We focus on building solutions that are not only functional at launch, but practical for ongoing business use.

      </p>

    
      <!-- CTA -->
      <div class="mt-8 flex gap-4 flex-wrap">
        <a href="{{ $showcaseProject ? route('frontend.project-detail', ['slug' => $showcaseProject->slug]) : route('frontend.project') }}" class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:scale-105 transition">
          View Full Case Study
        </a>

        <a href="{{ route('frontend.contact') }}" class="border border-[#FD5528] text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-orange-50 transition">
          Start Your Project
        </a>
      </div>

    </div>

  </div>

</section>



<!-- Featured Projects & Solutions -->

<section class="relative overflow-hidden bg-gradient-to-b from-slate-50 via-white to-white py-4 lg:py-4">

    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-12">

        <div class="mx-auto max-w-4xl text-center">

            <span
                class="inline-flex items-center rounded-full bg-orange-50 px-5 py-2.5 text-sm font-semibold text-[#FD5528]">
                Portfolio & Expertise
            </span>

            <h2 class="mt-8 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                Featured Projects &
                <span class="text-[#FD5528]">
                    Solution Highlights
                </span>
            </h2>

            <p class="mt-8 text-lg leading-8 text-slate-600 lg:text-xl">
                 These projects show the work we do for different kinds of businesses. Each one solves a clear problem. Some help customers use a service. Others make daily work easier for staff.

            </p>

            <p class="mt-6 text-lg leading-8 text-slate-600 lg:text-xl">
          
              We build websites, online stores, web apps, and CRM tools. We also make software for specific industries. Each project starts with the needs of the people who will use it.

            </p>

        </div>

    </div>

</section>

<!-- =========================
     DEVELOPMENT EXPERTISE
========================== -->
<section class="bg-white py-2 lg:py-4">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="text-center">

            <h3 class="text-3xl font-bold text-slate-900 lg:text-4xl">
                Our Development Expertise
            </h3>

            <p class="mx-auto mt-5 max-w-3xl text-lg leading-8 text-slate-600">
                We build tools that make daily work easier. They can help teams serve customers and support business growth.
            </p>

        </div>

        <div class="mt-2 grid gap-8 md:grid-cols-2 xl:grid-cols-3 py-12">

            <!-- Web Applications -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

          

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                  Web Applications
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
                   
                  Our web apps help teams manage daily tasks and serve customers. We build them to grow with your business.

                </p>

            </div>

            <!-- Ecommerce -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                  Ecommerce Solutions
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
            
                Our online stores help people find and buy products. We make it easy to browse, choose, and pay.

                </p>

            </div>

            <!-- Mobile -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                         Mobile App Development
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
                    
        
                We build mobile apps that help customers use your services on the go. Each app is made for phones and tablets.

                </p>

            </div>

            <!-- SaaS -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                     SaaS Platforms
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
             
                We build online software that people can use with a plan or subscription. We make it easy to update as your user base grows.


                </p>

            </div>

            <!-- ERP -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                   ERP and POS Solutions
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
               
                We create ERP and POS systems that help businesses manage billing, operations, inventory, and reporting more effectively.


                </p>

            </div>

            <!-- API -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                                 API Integrations
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
             
       
                We develop and connect APIs that improve software communication, automation, and system interoperability.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- =========================
     WHY CHOOSE US
========================== -->

<section class="relative py-2 pb-24 bg-white overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-16 lg:grid-cols-2 lg:items-center">

            <!-- Left Content -->
            <div>

                <span
                    class="inline-flex items-center rounded-full bg-orange-50 px-5 py-2.5 text-sm font-semibold text-[#FD5528]">
                    Why Choose Us
                </span>

                <h2 class="mt-6 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">
                    Why Businesses Choose
                    <span class="text-[#FD5528]">
                        Backend Coders India
                    </span>
                </h2>

                <p class="mt-8 text-lg leading-8 text-slate-600">
          Businesses choose Backend Coders India because project delivery is about more than development alone. It requires understanding business requirements, choosing the right technical approach, and building solutions that remain useful as the business evolves.
                </p>
                <p class="mt-4 text-lg leading-8 text-slate-600">
                  That trust matters because every completed project contributes to operational efficiency, customer experience, and long-term digital growth.
                </p>

            </div>

            <!-- Right Cards -->
            <div class="grid gap-5 sm:grid-cols-1">
 <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-12">
        <!-- Bottom Highlight -->
        <div class="mt-24 rounded-[2rem] border border-orange-100 bg-orange-50 p-8 lg:p-10">

            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between ">

                <div>
                    <h3 class="text-2xl font-bold text-slate-900">
                        Trusted Technology Partner for Long-Term Growth
                    </h3>

                    <p class="mt-3 max-w-4xl text-slate-600 leading-7">
                        strong execution across multiple project types
                        practical and scalable development decisions
                        experience with custom business requirements
                        cleaner technology planning and implementation
                        reliable support beyond initial delivery
                        solutions built around real business use cases

                    </p>
                </div>

             

            </div>

        </div>
     </div>
      
             

            </div>

        </div>

     

    </div>

    

</section>


<!-- Swiper CSS -->

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
      <span
        data-aos="fade-up"
        class="inline-block rounded-full border border-white/40 bg-white/60 px-5 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528] shadow-[0_8px_20px_rgba(0,0,0,0.08)] backdrop-blur-md before:absolute before:inset-0 before:-z-10 before:rounded-full before:bg-gradient-to-r before:from-[#FD5528]/20 before:to-orange-200/30"
      >
        Testimonials
      </span>

      <h2 class="mt-6 text-3xl font-bold text-black md:text-5xl">
        What Our <span class="text-[#FD5528]">Clients Say</span>
      </h2>

      <p class="mx-auto mt-4 max-w-3xl text-base leading-relaxed text-slate-600 sm:text-lg">
        Our clients trust Backend Coders India for clear communication, reliable delivery, thoughtful architecture, and measurable business growth.
      </p>

      <div class="testimonials-swiper swiper mt-14 overflow-hidden sm:mt-16">
        <div class="swiper-wrapper">
          @if(false) {{-- Omitted until this review has a verifiable public source link. --}}
          <div class="swiper-slide h-auto">
            <article class="testimonial-card flex h-full flex-col rounded-[28px] border border-gray-100 bg-white p-6 text-left shadow-[0_20px_60px_rgba(15,23,42,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_70px_rgba(253,85,40,0.16)] sm:p-7">
              <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                  <div class="relative">
                    <img src="{{ asset('assets/images/client1-d') }}" alt="Dashawn Robinson testimonial - Backend Coders India" class="h-12 w-12 rounded-full object-cover" />
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
                data-full="Freelancer was extremely communicative, skilled, prompt and professional. Their work exceeded my expectation. I�d definitely hire them again and refer them to my colleagues."
                data-short="Freelancer was extremely communicative, skilled, prompt and professional. Their work exceeded my expectation. I�d definitely hire them again and refer them to my colleagues.">
                Freelancer was extremely communicative, skilled, prompt and professional. Their work exceeded my expectation. I�d definitely hire them again and refer them to my colleagues.
              </p>
            

              <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4 text-xs text-gray-500">
                <span class="rounded-full bg-gray-100 px-2.5 py-1 text-orange-500">United States</span>
                <span class="font-medium text-orange-500">CEO</span>
              </div>
            </article>
          </div>
          @endif

          <div class="swiper-slide h-auto">
            <article class="testimonial-card flex h-full flex-col rounded-[28px] border border-gray-100 bg-white p-6 text-left shadow-[0_20px_60px_rgba(15,23,42,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_70px_rgba(253,85,40,0.16)] sm:p-7">
              <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                  <div class="relative">
                    <img src="{{ asset('assets/images/client-mj.webp') }}" alt="Minwoon Jung testimonial - Backend Coders India" class="h-12 w-12 rounded-full object-cover" />
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
                    <img src="{{ asset('assets/images/client-p.webp') }}" alt="Peter Farrell testimonial - Backend Coders India" class="h-12 w-12 rounded-full object-cover" />
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
                    <img src="{{ asset('assets/images/client-v.webp') }}" alt="Veera Linga testimonial - Backend Coders India" class="h-12 w-12 rounded-full object-cover" />
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

<!-- CTA SECTION -->
<section class="relative overflow-hidden py-20 bg-gradient-to-r from-[#FC5124] via-[#FD5528] to-orange-400 text-white">

  <!-- BACKGROUND GLOW -->
  <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>

  <div class="relative max-w-5xl mx-auto px-6 text-center">

    <!-- HEADING -->
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 leading-tight">
         Ready to Discuss Your Project?
    </h2>

    <!-- SUBTEXT -->
    <p class="text-white/80 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-10">
  
If you are looking for a technology partner with real project delivery experience across software, web, ecommerce, mobile, and business systems, Backend Coders India is ready to help.
Get in touch with our team to discuss your project goals, technical requirements, and the kind of solution your business needs next.

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



@endsection
