@extends('component.main')

@section('content')
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
    src="{{asset('assets/images/banner.png')}}"
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
    Explore selected work from Backend Coders India across software, web, ecommerce, mobile, ERP, SaaS, and custom digital solutions.
We partner with startups, SMEs, and growing businesses to deliver technology solutions that solve operational challenges, support business growth, and improve digital performance. Each project reflects practical thinking, technical capability, and a focus on building systems that work in real business environments.

    </p>

 

  </div>

</section>
<!-- end hero section  -->

<section class="relative overflow-hidden bg-white py-12 sm:py-16 lg:py-12">
        <!-- ðŸ”¥ Heading -->
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
                      src="https://img.icons8.com/fluency/48/marker.png"
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
                      src="https://img.icons8.com/fluency/48/marker.png"
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
                      src="https://img.icons8.com/fluency/48/marker.png"
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

      



      <!-- ðŸ“Š STATS -->
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
          <div class="text-2xl mb-2">ðŸŒ</div>
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
          <div class="text-2xl mb-2">â­</div>
          <h3 class="text-3xl font-bold text-orange-500 counter" data-target="100">100%</h3>
          <p class="text-sm text-slate-600 mt-1">Client Satisfaction</p>
        </div> -->

      </div>


      <!-- ðŸš€ CTA -->
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
                  <div class="relative overflow-hidden bg-slate-100">

                      <!-- BADGE -->
                      <div class="absolute left-6 top-6 z-20">

                          <span class="rounded-full bg-[#FD5528] px-4 py-2 text-xs font-bold uppercase tracking-[0.3em] text-white shadow-lg">

                              Featured Product

                          </span>

                      </div>

                      <!-- PRODUCT IMAGE -->
                    <div class="h-[600px] w-[800px] pt-24">
                          <img
                          src="{{ asset('assets/images/seo-pro.jpg') }}"
                          alt="SEO Rocket Pro"
                          class="h-full min-h-[500px] w-full object-cover transition duration-700 hover:scale-105"
                      >
                    </div>

                      <!-- OVERLAY -->
                      <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>

                      <!-- BOTTOM LABELS -->
                      <div class="absolute bottom-6 left-6 flex flex-wrap gap-3">

                          <span class="rounded-full bg-white/15 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-white backdrop-blur">

                              Analytics

                          </span>

                          <span class="rounded-full bg-white/15 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-white backdrop-blur">

                              Automation

                          </span>

                          <span class="rounded-full bg-white/15 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-white backdrop-blur">

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

                          <h3 class="mt-4 text-4xl font-black tracking-tight text-slate-950 lg:text-5xl">

                              SEO Rocket Pro

                          </h3>

                          <p class="mt-5 text-base leading-8 text-slate-600">

                              SEO Rocket Pro helps businesses improve rankings, increase organic traffic, generate qualified leads and monitor growth through powerful AI-driven SEO analytics.

                          </p>

                      </div>

                      <!-- FEATURES -->
                      <div class="mt-4 grid gap-2">

                          <div class="flex items-center gap-3">

                              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#FD5528]/10">

                                  ✓

                              </div>

                              <span class="font-medium text-slate-700">

                                  Real-time keyword tracking

                              </span>

                          </div>

                          <div class="flex items-center gap-3">

                              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#FD5528]/10">

                                  ✓

                              </div>

                              <span class="font-medium text-slate-700">

                                  Competitor analysis dashboard

                              </span>

                          </div>

                          <div class="flex items-center gap-3">

                              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#FD5528]/10">

                                  ✓

                              </div>

                              <span class="font-medium text-slate-700">

                                  AI-powered SEO recommendations

                              </span>

                          </div>

                          <div class="flex items-center gap-2">

                              <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#FD5528]/10">

                                  ✓

                              </div>

                              <span class="font-medium text-slate-700">

                                  Local SEO optimization tools

                              </span>

                          </div>

                      </div>

                      <!-- STATS -->
                      <div class="mt-4 grid grid-cols-3 gap-4">

                          <div class="rounded-2xl bg-orange-50 p-3 text-center">

                              <div class="text-xl font-black text-[#FD5528]">

                                  +100%

                              </div>

                              <div class="mt-1 text-xs text-slate-600">

                                  Growth

                              </div>

                          </div>

                          <div class="rounded-2xl border border-slate-200 p-3 text-center">

                              <div class="text-xl font-black text-slate-900">

                                  10K+

                              </div>

                              <div class="mt-1 text-xs text-slate-600">

                                  Keywords

                              </div>

                          </div>

                          <div class="rounded-2xl border border-slate-200 p-3 text-center">

                              <div class="text-xl font-black text-slate-900">

                                  AI

                              </div>

                              <div class="mt-1 text-xs text-slate-600">

                                  Engine

                              </div>

                          </div>

                      </div>

                      <!-- CTA -->
                      <div class="mt-4 flex flex-wrap gap-4">

                          <a
                              href="{{ route('frontend.project-detail',['slug'=>'seo-rocket-pro']) }}"
                              class="inline-flex items-center justify-center rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#e94c20]"
                          >

                              View Product

                          </a>

                          <a
                              href="{{ route('frontend.contact') }}"
                              class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]"
                          >

                              Request Demo

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
                Our Clients
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
                        alt="IFNOSS"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/marley-logo.png') }}"
                        alt="Marley Moves"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/logo-pulse.png') }}"
                        alt="Pulse Events"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/logo-praslin.png') }}"
                        alt="Praslin"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/logo-ladigue.png') }}"
                        alt="Ladigue"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/logo3.png') }}"
                        alt="Client Logo"
                        class="max-h-20 w-auto object-contain">
                </div>

                <!-- DUPLICATE LOGOS FOR INFINITE LOOP -->

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/ifnoss-logo.png') }}"
                        alt="IFNOSS"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/marley-logo.png') }}"
                        alt="Marley Moves"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/logo-pulse.png') }}"
                        alt="Pulse Events"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/logo-praslin.png') }}"
                        alt="Praslin"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/logo-ladigue.png') }}"
                        alt="Ladigue"
                        class="max-h-20 w-auto object-contain">
                </div>

                <div
                    class="flex h-32 w-64 shrink-0 items-center justify-center rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('assets/images/logo3.png') }}"
                        alt="Client Logo"
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
        src="{{asset('assets/images/backend_coders_split_1.webp.webp')}}"
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
        <a href="{{ route('frontend.project-detail', ['slug' => 'seo-rocket-pro']) }}" class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:scale-105 transition">
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
<!-- =========================
     FEATURED PROJECTS SECTION
========================== -->
<section class="relative overflow-hidden bg-gradient-to-b from-slate-50 via-white to-white py-32 lg:py-40">

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
                 This portfolio showcases a range of successful client projects built for different business models, user needs, and operational goals. Each project represents a different type of challenge, from customer-facing digital experiences to internal business systems and custom software workflows.

            </p>

            <p class="mt-6 text-lg leading-8 text-slate-600 lg:text-xl">
          
              Our project work highlights the diversity of solutions we deliver, including digital product development, web application builds, ecommerce solutions, CRM systems, and industry-specific software implementations.

            </p>

        </div>

    </div>

</section>

<!-- =========================
     DEVELOPMENT EXPERTISE
========================== -->
<section class="bg-white py-12 lg:py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="text-center">

            <h3 class="text-3xl font-bold text-slate-900 lg:text-4xl">
                Our Development Expertise
            </h3>

            <p class="mx-auto mt-5 max-w-3xl text-lg leading-8 text-slate-600">
                We help businesses build technology solutions that improve operations,
                customer engagement, scalability, and long-term growth.
            </p>

        </div>

        <div class="mt-20 grid gap-8 md:grid-cols-2 xl:grid-cols-3 py-12">

            <!-- Web Applications -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

          

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                  Web Applications
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
                   
                  We build web applications that support business workflows, customer interaction, and scalable digital operations.

                </p>

            </div>

            <!-- Ecommerce -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                  Ecommerce Solutions
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
            
                   Our ecommerce projects are designed to improve online selling, product presentation, and customer buying experience.

                </p>

            </div>

            <!-- Mobile -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                         Mobile App Development
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
                    
        
                We develop mobile solutions for businesses that need better accessibility, engagement, and user convenience across devices.

                </p>

            </div>

            <!-- SaaS -->
            <div
                class="group rounded-[28px] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#FD5528] hover:shadow-xl">

                <h4 class="mt-7 text-xl font-bold text-slate-900">
                     SaaS Platforms
                </h4>

                <p class="mt-4 leading-8 text-slate-600">
             
                Our SaaS experience includes scalable software products built for subscription models, platform growth, and long-term usability.


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
<!-- Why Businesses Choose Backend Coders India -->
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
                  <img src="{{ asset('assets/images/client1-d') }}"
                      class="w-12 h-12 rounded-full object-cover">

                  <!-- VERIFIED BADGE -->
                  <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">âœ”</span>
                </div>

                <div>
                  <h4 class="font-semibold text-gray-900 text-sm">Dashawn Robinson</h4>
                  <p class="text-xs text-gray-500">June 6, 2025</p>
                </div>
              </div>

              <!-- GOOGLE LOGO -->
          <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Upwork_Logo.svg"
              class="w-12 opacity-80">
            </div>

            <!-- STARS -->
            <div class="flex items-center gap-1 mb-3">
              <span class="text-yellow-400 text-lg">⭐⭐⭐⭐⭐</span>
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
                  <img src="{{ asset('assets/images/client-mj.jpg') }}"
                      class="w-12 h-12 rounded-full object-cover">

                  <!-- VERIFIED BADGE -->
                  <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">âœ”</span>
                </div>

                <div>
                  <h4 class="font-semibold text-gray-900 text-sm">Minwoon Jung </h4>
                  <p class="text-xs text-gray-500">May 5, 2025</p>
                </div>
              </div>

              <!-- GOOGLE LOGO -->
              <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Upwork_Logo.svg"
                  class="w-12 opacity-80">
            </div>

            <!-- STARS -->
            <div class="flex items-center gap-1 mb-3">
              <span class="text-yellow-400 text-lg">⭐⭐⭐⭐⭐</span>
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
                        <img src="{{ asset('assets/images/client-p.jpg') }}"
                            class="w-12 h-12 rounded-full object-cover">

                        <!-- VERIFIED BADGE -->
                        <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">âœ”</span>
                      </div>

                      <div>
                        <h4 class="font-semibold text-gray-900 text-sm">Peter Farrell </h4>
                        <p class="text-xs text-gray-500">May 5, 2025</p>
                      </div>
                    </div>

                    <!-- GOOGLE LOGO -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Upwork_Logo.svg"
                        class="w-12 opacity-80">
                  </div>

                  <!-- STARS -->
                  <div class="flex items-center gap-1 mb-3">
                    <span class="text-yellow-400 text-lg">⭐⭐⭐⭐⭐</span>
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
                        <img src="{{ asset('assets/images/client-v.jpg') }}"
                            class="w-12 h-12 rounded-full object-cover">

                        <!-- VERIFIED BADGE -->
                        <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">âœ”</span>
                      </div>

                      <div>
                        <h4 class="font-semibold text-gray-900 text-sm">Veera Linga</h4>
                        <p class="text-xs text-gray-500">May 5, 2025</p>
                      </div>
                    </div>

                    <!-- GOOGLE LOGO -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Upwork_Logo.svg"
                        class="w-12 opacity-80">
                  </div>

                  <!-- STARS -->
                  <div class="flex items-center gap-1 mb-3">
                    <span class="text-yellow-400 text-lg">⭐⭐⭐⭐⭐</span>
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
        <span class="ml-2 transition group-hover:translate-x-1">â†’</span>
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
