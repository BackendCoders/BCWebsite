@extends('component.main')

@php
    $teamBreadcrumb = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Our Team',
                'item' => 'https://backendcodersindia.com/team',
            ],
        ],
    ];

    $teamWebPage = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        '@id' => 'https://backendcodersindia.com/team#webpage',
        'url' => 'https://backendcodersindia.com/team',
        'name' => 'Our Team & Culture | Backend Coders India',
        'description' => 'Meet the engineers, designers, and digital strategists at Backend Coders India in Kanpur.',
        'isPartOf' => [
            '@type' => 'WebSite',
            '@id' => 'https://backendcodersindia.com/#website',
        ],
    ];
@endphp

@push('head')
    <script type="application/ld+json">{!! json_encode($teamBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($teamWebPage, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

@section('content')

<!-- =========================================================
     OUR CULTURE & TEAM PAGE - BACKEND CODERS INDIA
========================================================= -->
<main class="bg-[#fafafa] text-slate-900 antialiased selection:bg-[#FD5528] selection:text-white font-sans overflow-hidden">

    <!-- =====================================================
         1. HERO BANNER - CINEMATIC BRAND SECTION
    ====================================================== -->
    <section
        aria-labelledby="hero-heading"
        class="relative isolate flex min-h-[480px] lg:min-h-[540px] w-full items-center overflow-hidden text-white"
        style="background-color: #101114 !important;"
    >
        <!-- Background Team Banner Image with Multi-stop Gradient Blend -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
            <img
                src="{{ asset('assets/images/banner-team.png') }}"
                alt="Backend Coders Team Banner"
                fetchpriority="high"
                decoding="async"
                class="h-full w-full object-cover object-[70%_center] lg:object-center opacity-40 scale-100 transition-transform duration-1000"
            />

            <!-- Dark gradient overlays for guaranteed text legibility -->
            <div class="absolute inset-0 bg-gradient-to-r from-[#0d0e11] via-[#0d0e11]/90 via-[52%] to-transparent"></div>
            <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-[#0c0d10] to-transparent"></div>
            <div class="absolute inset-x-0 top-0 h-24 bg-gradient-to-b from-[#0d0e11]/80 to-transparent"></div>
        </div>

        <!-- Orange Ambient Decorative Curved Ring on Left -->
        <div class="pointer-events-none absolute -left-28 top-1/2 z-10 hidden h-[620px] w-64 -translate-y-1/2 xl:block" aria-hidden="true">
            <div class="absolute inset-0 rounded-r-full border-r-2 border-[#FD5528]/40"></div>
            <div class="absolute inset-y-16 left-4 right-12 rounded-r-full border-r border-[#FD5528]/20"></div>
            <div class="absolute left-0 top-1/2 h-64 w-64 -translate-y-1/2 rounded-full bg-[#FD5528]/15 blur-[90px]"></div>
        </div>

        <!-- Ambient Right Glow -->
        <div class="pointer-events-none absolute right-0 top-1/4 z-10 h-80 w-80 rounded-full bg-[#FD5528]/10 blur-[120px]" aria-hidden="true"></div>

        <!-- Main Content Container -->
        <div class="relative z-20 mx-auto w-full max-w-7xl px-5 py-14 sm:px-8 sm:py-20 lg:px-12 lg:py-24">
            <div class="max-w-3xl">
                
                <!-- Glassmorphic Content Card -->
                <div
                    class="rounded-3xl border border-white/10 p-8 sm:p-10 lg:p-12 shadow-2xl shadow-black/60 backdrop-blur-xl"
                    style="background-color: rgba(10, 11, 13, 0.88) !important;"
                    data-aos="fade-right"
                    data-aos-duration="900"
                >
                    <!-- Tagline -->
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center gap-1.5 rounded-full border border-[#FD5528]/40 bg-[#FD5528]/10 px-3.5 py-1 text-[11px] font-bold uppercase tracking-[0.2em] text-[#FD5528] backdrop-blur-md">
                            <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528] animate-pulse"></span>
                            Backend Coders Culture
                        </span>
                    </div>

                    <p class="mt-4 text-xs font-bold uppercase tracking-[0.25em] text-zinc-400">
                        Ideas <span class="mx-2 text-[#FD5528]">|</span> Technology <span class="mx-2 text-[#FD5528]">|</span> Impact
                    </p>

                    <!-- Main Heading -->
                    <h1
                        id="hero-heading"
                        class="mt-3 text-4xl font-black leading-[1.08] tracking-tight sm:text-5xl lg:text-6xl text-white"
                    >
                        Our People.
                        <span class="mt-1 block text-transparent bg-clip-text bg-gradient-to-r from-[#FD5528] via-[#ff7b54] to-[#FD5528]">
                            Our Culture.
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="mt-4 max-w-2xl text-sm sm:text-base lg:text-lg leading-relaxed text-zinc-300">
                        Our engineers and designers work together to build digital products. We share ideas, learn from each project, and improve our work as a team.
                    </p>

                    <!-- CTAs -->
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a
                            href="{{ route('frontend.career') }}"
                            class="group inline-flex min-h-[48px] items-center justify-center gap-2.5 rounded-xl bg-[#FD5528] px-7 py-3 text-sm font-bold text-white shadow-lg shadow-[#FD5528]/25 transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#E0451A] hover:shadow-xl hover:shadow-[#FD5528]/40 focus:outline-none focus:ring-2 focus:ring-[#FD5528] focus:ring-offset-2 focus:ring-offset-[#101114]"
                        >
                            <span>Join Our Team</span>
                            <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>

                        <a
                            href="#team-showcase"
                            class="inline-flex min-h-[48px] items-center justify-center rounded-xl border border-white/15 bg-white/[0.06] px-7 py-3 text-sm font-bold text-white backdrop-blur-md transition-all duration-200 hover:-translate-y-0.5 hover:border-white/30 hover:bg-white/[0.12] focus:outline-none focus:ring-2 focus:ring-white/30 focus:ring-offset-2 focus:ring-offset-[#101114]"
                        >
                            Meet The Team
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- =========================================================
         2. EXECUTIVE LEADERSHIP SECTION (FOUNDER & DIRECTOR)
         (Light Theme, Premium White Cards, Crisp Typography & Symmetrical Framing)
    ========================================================= -->
    <section id="leadership" class="relative overflow-hidden bg-white py-20 sm:py-24 border-b border-slate-200">
        
        <!-- Subtle Ambient Background Glows -->
        <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
            <div class="absolute -left-28 top-10 h-[450px] w-[450px] rounded-full bg-orange-100/50 blur-[130px]"></div>
            <div class="absolute -right-28 bottom-0 h-[450px] w-[450px] rounded-full bg-slate-100/70 blur-[130px]"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="mx-auto max-w-3xl text-center mb-14 sm:mb-16" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.25em] text-[#FD5528] rounded-full bg-orange-50 px-4 py-1.5 border border-orange-200/80 shadow-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528] animate-pulse"></span>
                    Executive Leadership
                </span>
                
                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 leading-tight">
                    Visionary Guidance, <span class="text-[#FD5528]">Proven Execution</span>
                </h2>
                
                <p class="mt-3 text-sm sm:text-base text-slate-600 max-w-2xl mx-auto">
                    Leading our team with clear plans, strong tech skills, and a true drive for great work.
                </p>
            </div>

            <!-- Dual Executive Cards Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">

                <!-- =============================================
                     EXECUTIVE 01: RAVINDRA VERMA (FOUNDER & CEO)
                ============================================== -->
                <article
                    class="group relative flex flex-col justify-between overflow-hidden rounded-[28px] border border-slate-200/90 bg-white p-6 sm:p-8 shadow-[0_10px_35px_rgba(0,0,0,0.04)] transition-all duration-300 hover:border-[#FD5528]/40 hover:shadow-[0_20px_45px_rgba(253,85,40,0.12)] hover:-translate-y-1.5"
                    data-aos="fade-right"
                    data-aos-duration="850"
                >
                    <!-- Top Accent Border Line -->
                    <div class="absolute left-8 right-8 top-0 h-[2px] bg-gradient-to-r from-transparent via-[#FD5528] to-transparent opacity-90"></div>

                    <div>
                        <!-- Header & Portrait Layout -->
                        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
                            
                            <!-- Framed Portrait with fixed height -->
                            <div class="relative h-44 w-44 sm:h-48 sm:w-48 flex-shrink-0 rounded-2xl overflow-hidden border border-slate-200 bg-slate-100 shadow-sm group-hover:border-[#FD5528]/50 transition-colors duration-300">
                                <a href="{{ route('frontend.owner') }}" class="block h-full w-full relative" aria-label="Ravindra Verma Founder & CEO Profile">
                                    <img
                                        src="{{ asset('assets/images/ceo.webp') }}"
                                        alt="Ravindra Verma - Founder & CEO"
                                        loading="lazy"
                                        decoding="async"
                                        class="h-full w-full object-cover object-top transition-transform duration-700 ease-out group-hover:scale-105"
                                    />
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                                    <span class="absolute bottom-2 left-2 right-2 text-center text-[10px] font-extrabold uppercase tracking-widest text-white bg-slate-900/80 backdrop-blur-md py-1 rounded-lg border border-white/10">
                                        Founder &amp; CEO
                                    </span>
                                </a>
                            </div>

                            <!-- Name, Title & Bio Intro -->
                            <div class="flex-1 text-center sm:text-left">
                                <div class="inline-flex items-center gap-1.5 rounded-full bg-orange-50 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-[#FD5528] border border-orange-200/80">
                                    Chief Executive
                                </div>
                                <h3 class="mt-2 text-2xl sm:text-3xl font-black tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-300">
                                    <a href="{{ route('frontend.owner') }}" class="hover:underline">Ravindra Verma</a>
                                </h3>
                                <p class="mt-1 text-xs sm:text-sm font-semibold uppercase tracking-wider text-slate-500">
                                    Founder &amp; Chief Executive Officer
                                </p>
                                
                                <p class="mt-3 text-xs sm:text-sm leading-relaxed text-slate-600">
                                    Ravindra leads our work on software and AI tools. He helps businesses choose clear goals and build systems that can grow with them.
                                </p>
                                <a href="{{ route('frontend.owner') }}" class="inline-flex items-center gap-1.5 mt-3 text-xs sm:text-sm font-bold text-[#FD5528] hover:text-[#e0451b] transition-colors">
                                    Read Founder &amp; CEO Profile &rarr;
                                </a>
                            </div>
                        </div>

                        <!-- Philosophy Quote Card -->
                        <div class="mt-6 rounded-2xl border border-slate-200/70 bg-slate-50/80 p-4 sm:p-5 relative">
                            <span class="text-xs font-bold uppercase tracking-widest text-[#FD5528] block mb-1.5">Leadership Philosophy</span>
                            <p class="text-xs sm:text-sm leading-relaxed text-slate-700 italic">
                                "We build tools to solve real problems. Good software should work well today and keep working as a business grows."
                            </p>
                        </div>

                        <!-- Core Competency Tags -->
                        <div class="mt-5 flex flex-wrap gap-2">
                            <span class="inline-flex items-center rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 border border-slate-200/80">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528] mr-2"></span>Scalable Architecture
                            </span>
                            <span class="inline-flex items-center rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 border border-slate-200/80">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528] mr-2"></span>Strategic Vision
                            </span>
                            <span class="inline-flex items-center rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 border border-slate-200/80">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528] mr-2"></span>AI &amp; Cloud Innovation
                            </span>
                        </div>
                    </div>
                </article>

                <!-- =============================================
                     EXECUTIVE 02: SWATI VERMA (DIRECTOR)
                ============================================== -->
                <article
                    class="group relative flex flex-col justify-between overflow-hidden rounded-[28px] border border-slate-200/90 bg-white p-6 sm:p-8 shadow-[0_10px_35px_rgba(0,0,0,0.04)] transition-all duration-300 hover:border-[#FD5528]/40 hover:shadow-[0_20px_45px_rgba(253,85,40,0.12)] hover:-translate-y-1.5"
                    data-aos="fade-left"
                    data-aos-duration="850"
                >
                    <div class="absolute left-8 right-8 top-0 h-[2px] bg-gradient-to-r from-transparent via-[#FD5528] to-transparent opacity-90"></div>

                    <div>
                        <!-- Header & Portrait Layout -->
                        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
                            
                            <!-- Framed Portrait with fixed height -->
                            <div class="relative h-44 w-44 sm:h-48 sm:w-48 flex-shrink-0 rounded-2xl overflow-hidden border border-slate-200 bg-slate-100 shadow-sm group-hover:border-[#FD5528]/50 transition-colors duration-300">
                                <div class="block h-full w-full relative">
                                    <img
                                        src="{{ asset('assets/images/director.webp') }}"
                                        alt="Swati Verma - Director & Operations Head"
                                        loading="lazy"
                                        decoding="async"
                                        class="h-full w-full object-cover object-top transition-transform duration-700 ease-out group-hover:scale-105"
                                    />
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                                    <span class="absolute bottom-2 left-2 right-2 text-center text-[10px] font-extrabold uppercase tracking-widest text-white bg-slate-900/80 backdrop-blur-md py-1 rounded-lg border border-white/10">
                                        Director
                                    </span>
                                </div>
                            </div>

                            <!-- Name, Title & Bio Intro -->
                            <div class="flex-1 text-center sm:text-left">
                                <div class="inline-flex items-center gap-1.5 rounded-full bg-orange-50 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-[#FD5528] border border-orange-200/80">
                                    Operations &amp; Strategy
                                </div>
                                <h3 class="mt-2 text-2xl sm:text-3xl font-black tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-300">
                                    Swati Verma
                                </h3>
                                <p class="mt-1 text-xs sm:text-sm font-semibold uppercase tracking-wider text-slate-500">
                                    Director &amp; Operations Head
                                </p>
                                
                                <p class="mt-3 text-xs sm:text-sm leading-relaxed text-slate-600">
                                    Swati leads our daily work and client support. She helps our team work well together and deliver projects on time.
                                </p>
                                <span class="inline-flex items-center gap-1.5 mt-3 text-xs sm:text-sm font-bold text-slate-700">
                                    Operations Leadership &amp; Growth &rarr;
                                </span>
                            </div>
                        </div>

                        <!-- Philosophy Quote Card -->
                        <div class="mt-6 rounded-2xl border border-slate-200/70 bg-slate-50/80 p-4 sm:p-5 relative">
                            <span class="text-xs font-bold uppercase tracking-widest text-[#FD5528] block mb-1.5">Leadership Focus</span>
                            <p class="text-xs sm:text-sm leading-relaxed text-slate-700 italic">
                                "We help our clients grow through clear plans, good teamwork, and strong partnerships."
                            </p>
                        </div>

                        <!-- Core Competency Tags -->
                        <div class="mt-5 flex flex-wrap gap-2">
                            <span class="inline-flex items-center rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 border border-slate-200/80">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528] mr-2"></span>Operational Growth
                            </span>
                            <span class="inline-flex items-center rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 border border-slate-200/80">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528] mr-2"></span>Global Partnerships
                            </span>
                            <span class="inline-flex items-center rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 border border-slate-200/80">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528] mr-2"></span>Talent &amp; Teams
                            </span>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </section>


    <!-- =========================================================
         3. "MEET THE TEAM" — THE TALENT BEHIND YOUR SUCCESS
         (Symmetrical 3x2 Grid with Fixed Portrait Framing & Filter Pills)
    ========================================================= -->
    <section id="team-showcase" class="relative overflow-hidden bg-white py-20 sm:py-24 border-b border-slate-200">
        
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <!-- SECTION HEADER -->
            <div class="mx-auto max-w-3xl text-center mb-12 sm:mb-14" data-aos="fade-up">
                
                <!-- Eyebrow Tag -->
                <p class="text-xs sm:text-sm font-extrabold uppercase tracking-[0.25em] text-slate-700 mb-2">
                    MEET THE TEAM
                </p>

                <!-- Main Punchy Heading -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 leading-tight">
                    The Talent Behind <span class="text-[#FD5528]">Your Success</span>
                </h2>

                <!-- Subtitle / Intro Copy -->
                <p class="mt-3 text-slate-600 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed font-normal">
                        Our team includes data experts, software engineers, and designers. We work together to solve problems and get useful results. Meet the people who may work on your project.
                </p>

                <!-- Filter Categories -->
                <div class="mt-7 flex flex-wrap items-center justify-center gap-2">
                    <button type="button" onclick="filterTeam('all', this)" class="team-filter-btn active-filter rounded-full px-5 py-2 text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-[#FD5528] text-white shadow-md shadow-[#FD5528]/25 cursor-pointer">
                        ALL SPECIALISTS
                    </button>
                    <button type="button" onclick="filterTeam('ai', this)" class="team-filter-btn rounded-full px-5 py-2 text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-white text-slate-700 border border-slate-200 hover:border-[#FD5528] hover:text-[#FD5528] cursor-pointer">
                        AI &amp; DATA
                    </button>
                    <button type="button" onclick="filterTeam('backend', this)" class="team-filter-btn rounded-full px-5 py-2 text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-white text-slate-700 border border-slate-200 hover:border-[#FD5528] hover:text-[#FD5528] cursor-pointer">
                        BACKEND &amp; FULLSTACK
                    </button>
                    <button type="button" onclick="filterTeam('design', this)" class="team-filter-btn rounded-full px-5 py-2 text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-white text-slate-700 border border-slate-200 hover:border-[#FD5528] hover:text-[#FD5528] cursor-pointer">
                        DESIGN &amp; GROWTH
                    </button>
                </div>
            </div>


            <!-- TEAM CARDS: BALANCED & CENTERED SPECIALISTS GRID -->
            <div
                id="teamCardsContainer"
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8"
            >

                <!-- =============================================
                     MEMBER 01: NUPUR
                ============================================== -->
                <div
                    class="team-card group relative flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-white p-5 sm:p-6 shadow-sm hover:shadow-xl hover:border-[#FD5528]/40 hover:-translate-y-1.5 transition-all duration-300 w-full"
                    data-category="backend design"
                    data-aos="fade-up"
                    data-aos-delay="0"
                >
                    <div>
                        <!-- Portrait Photo Frame: 4:3 with floating category badge -->
                        <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-slate-100 shadow-inner group">
                            <img
                                src="{{ asset('assets/images/nupur.webp') }}"
                                alt="Nupur - Tech Lead & Sr. PHP Developer"
                                width="400"
                                height="300"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-cover object-[center_15%] transition-transform duration-700 ease-out group-hover:scale-105"
                            />
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-3 left-3 z-10">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/95 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-slate-800 shadow-sm backdrop-blur-md border border-white/80">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>
                                    Tech Lead
                                </span>
                            </div>
                        </div>

                        <!-- Member Meta Details -->
                        <div class="mt-5 text-center">
                            <h3 class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Nupur
                            </h3>
                            <p class="mt-1 text-sm font-medium text-slate-600">
                                Tech Lead &amp; Sr. PHP Developer
                            </p>

                            <!-- Micro Skill Badges -->
                            <div class="mt-3.5 flex flex-wrap items-center justify-center gap-1.5">
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">PHP 8+</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">Laravel</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">System Design</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Centered Action Button -->
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <button
                            type="button"
                            onclick="openMemberModal('nupur')"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 py-2.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm hover:bg-[#FD5528] hover:shadow-md hover:shadow-[#FD5528]/25 transition-all duration-200 cursor-pointer group-hover:bg-[#FD5528]"
                        >
                            <span>MEET NUPUR</span>
                            <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- =============================================
                     MEMBER 02: UTKARSH SONKAR
                ============================================== -->
                <div
                    class="team-card group relative flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-white p-5 sm:p-6 shadow-sm hover:shadow-xl hover:border-[#FD5528]/40 hover:-translate-y-1.5 transition-all duration-300 w-full"
                    data-category="backend"
                    data-aos="fade-up"
                    data-aos-delay="50"
                >
                    <div>
                        <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-slate-100 shadow-inner group">
                            <img
                                src="{{ asset('assets/images/utkarsh.webp') }}"
                                alt="Utkarsh Sonkar - Project Coordinator & Dotnet Dev"
                                width="400"
                                height="300"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-cover object-[center_15%] transition-transform duration-700 ease-out group-hover:scale-105"
                            />
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-3 left-3 z-10">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/95 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-slate-800 shadow-sm backdrop-blur-md border border-white/80">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>
                                    Project Coordinator
                                </span>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <h3 class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Utkarsh Sonkar
                            </h3>
                            <p class="mt-1 text-sm font-medium text-slate-600">
                                Project Coordinator &amp; Dotnet Dev
                            </p>

                            <div class="mt-3.5 flex flex-wrap items-center justify-center gap-1.5">
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">.NET Core</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">C#</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">React</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <button
                            type="button"
                            onclick="openMemberModal('utkarsh')"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 py-2.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm hover:bg-[#FD5528] hover:shadow-md hover:shadow-[#FD5528]/25 transition-all duration-200 cursor-pointer group-hover:bg-[#FD5528]"
                        >
                            <span>MEET UTKARSH</span>
                            <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- =============================================
                     MEMBER 03: ARVIND VERMA
                ============================================== -->
                <div
                    class="team-card group relative flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-white p-5 sm:p-6 shadow-sm hover:shadow-xl hover:border-[#FD5528]/40 hover:-translate-y-1.5 transition-all duration-300 w-full"
                    data-category="ai backend"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <div>
                        <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-slate-100 shadow-inner group">
                            <img
                                src="{{ asset('assets/images/arvind.webp') }}"
                                alt="Arvind Verma - AI Development Head & Backend Lead"
                                width="400"
                                height="300"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-cover object-[center_15%] transition-transform duration-700 ease-out group-hover:scale-105"
                            />
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-3 left-3 z-10">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/95 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-slate-800 shadow-sm backdrop-blur-md border border-white/80">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>
                                    AI Development Head
                                </span>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <h3 class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Arvind Verma
                            </h3>
                            <p class="mt-1 text-sm font-medium text-slate-600">
                                AI Development Head &amp; Backend Lead
                            </p>

                            <div class="mt-3.5 flex flex-wrap items-center justify-center gap-1.5">
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">Python</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">AI / LLMs</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">Redis</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <button
                            type="button"
                            onclick="openMemberModal('arvind')"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 py-2.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm hover:bg-[#FD5528] hover:shadow-md hover:shadow-[#FD5528]/25 transition-all duration-200 cursor-pointer group-hover:bg-[#FD5528]"
                        >
                            <span>MEET ARVIND</span>
                            <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- =============================================
                     MEMBER 04: ADARSH SINGH
                ============================================== -->
                <div
                    class="team-card group relative flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-white p-5 sm:p-6 shadow-sm hover:shadow-xl hover:border-[#FD5528]/40 hover:-translate-y-1.5 transition-all duration-300 w-full"
                    data-category="ai"
                    data-aos="fade-up"
                    data-aos-delay="150"
                >
                    <div>
                        <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-slate-100 shadow-inner group">
                            <img
                                src="{{ asset('assets/images/adarsh.webp') }}"
                                alt="Adarsh Singh - AI Developer & Data Science Associate"
                                width="400"
                                height="300"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-cover object-[center_15%] transition-transform duration-700 ease-out group-hover:scale-105"
                            />
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-3 left-3 z-10">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/95 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-slate-800 shadow-sm backdrop-blur-md border border-white/80">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>
                                    AI Developer
                                </span>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <h3 class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Adarsh Singh
                            </h3>
                            <p class="mt-1 text-sm font-medium text-slate-600">
                                AI Developer &amp; Data Science
                            </p>

                            <div class="mt-3.5 flex flex-wrap items-center justify-center gap-1.5">
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">PyTorch</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">FastAPI</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">TailwindCSS</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <button
                            type="button"
                            onclick="openMemberModal('adarsh')"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 py-2.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm hover:bg-[#FD5528] hover:shadow-md hover:shadow-[#FD5528]/25 transition-all duration-200 cursor-pointer group-hover:bg-[#FD5528]"
                        >
                            <span>MEET ADARSH</span>
                            <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- =============================================
                     MEMBER 05: KAJAL KUMARI
                ============================================== -->
                <div
                    class="team-card group relative flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-white p-5 sm:p-6 shadow-sm hover:shadow-xl hover:border-[#FD5528]/40 hover:-translate-y-1.5 transition-all duration-300 w-full"
                    data-category="backend ai"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div>
                        <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-slate-100 shadow-inner group">
                            <img
                                src="{{ asset('assets/images/kajal.webp') }}"
                                alt="Kajal Kumari - AI Coordinator & PHP Developer"
                                width="400"
                                height="300"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-cover object-[center_15%] transition-transform duration-700 ease-out group-hover:scale-105"
                            />
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-3 left-3 z-10">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/95 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-slate-800 shadow-sm backdrop-blur-md border border-white/80">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>
                                    AI Coordinator
                                </span>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <h3 class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Kajal Kumari
                            </h3>
                            <p class="mt-1 text-sm font-medium text-slate-600">
                                AI Coordinator &amp; PHP Developer
                            </p>

                            <div class="mt-3.5 flex flex-wrap items-center justify-center gap-1.5">
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">PHP</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">Laravel</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">CI/CD</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <button
                            type="button"
                            onclick="openMemberModal('kajal')"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 py-2.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm hover:bg-[#FD5528] hover:shadow-md hover:shadow-[#FD5528]/25 transition-all duration-200 cursor-pointer group-hover:bg-[#FD5528]"
                        >
                            <span>MEET KAJAL</span>
                            <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- =============================================
                     MEMBER 06: ARAMBHI MISHRA
                ============================================== -->
                <div
                    class="team-card group relative flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-white p-5 sm:p-6 shadow-sm hover:shadow-xl hover:border-[#FD5528]/40 hover:-translate-y-1.5 transition-all duration-300 w-full"
                    data-category="design"
                    data-aos="fade-up"
                    data-aos-delay="250"
                >
                    <div>
                        <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-slate-100 shadow-inner group">
                            <img
                                src="{{ asset('assets/images/arambhi(1).webp') }}"
                                alt="Arambhi Mishra - Marketing Associate & Designer"
                                width="400"
                                height="300"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-cover object-[center_15%] transition-transform duration-700 ease-out group-hover:scale-105"
                            />
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-3 left-3 z-10">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/95 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-slate-800 shadow-sm backdrop-blur-md border border-white/80">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>
                                    Marketing &amp; Design
                                </span>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <h3 class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Arambhi Mishra
                            </h3>
                            <p class="mt-1 text-sm font-medium text-slate-600">
                                Marketing Associate &amp; Designer
                            </p>

                            <div class="mt-3.5 flex flex-wrap items-center justify-center gap-1.5">
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">Figma</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">UI/UX</span>
                                <span class="inline-block rounded-lg bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600">Creative Strategy</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <button
                            type="button"
                            onclick="openMemberModal('arambhi')"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 py-2.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm hover:bg-[#FD5528] hover:shadow-md hover:shadow-[#FD5528]/25 transition-all duration-200 cursor-pointer group-hover:bg-[#FD5528]"
                        >
                            <span>MEET ARAMBHI</span>
                            <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>

            <!-- CORE SPECIALISTS COUNTER -->
            <div class="mt-12 flex items-center justify-center">
                <p class="text-xs sm:text-sm font-bold tracking-[0.2em] text-slate-500 uppercase">
                    <span id="activeCountBadge" class="font-black text-slate-900">6</span> / 6 CORE SPECIALISTS
                </p>
            </div>

        </div>
    </section>


    <!-- =========================================================
         4. OFFICE CULTURE & EVENTS ALBUM SECTION
         (Fixed 190px Landscape Image Cards with High Legibility)
    ========================================================= -->
    <section id="culture-albums" class="relative overflow-hidden bg-slate-50 py-16 sm:py-24 border-t border-slate-200">

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- SECTION HEADER -->
            <div class="mx-auto max-w-3xl text-center mb-10 sm:mb-14" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.25em] text-[#FD5528] rounded-full bg-[#FD5528]/10 px-4 py-1.5 border border-[#FD5528]/25 shadow-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#FD5528]"></span>
                    Life At Backend Coders
                </span>
                
                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 leading-tight">
                    Culture, Moments &amp; <span class="text-[#FD5528]">Event Albums</span>
                </h2>

                <p class="mt-3 text-slate-600 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
                    See our daily work, fun events, big wins, and active team sprints.
                </p>

                <!-- Album Category Filter Pills -->
                <div class="mt-7 flex flex-wrap items-center justify-center gap-2">
                    <button type="button" onclick="filterAlbums('all', this)" class="album-filter-btn active-album-filter rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-[#FD5528] text-white shadow-md shadow-[#FD5528]/25">
                        All Moments
                    </button>
                    <button type="button" onclick="filterAlbums('celebration', this)" class="album-filter-btn rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-white text-slate-600 border border-slate-200 hover:border-[#FD5528] hover:text-[#FD5528]">
                        Festivals &amp; Wins
                    </button>
                    <button type="button" onclick="filterAlbums('sprint', this)" class="album-filter-btn rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-white text-slate-600 border border-slate-200 hover:border-[#FD5528] hover:text-[#FD5528]">
                        Tech Sprints
                    </button>
                    <button type="button" onclick="filterAlbums('workplace', this)" class="album-filter-btn rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-white text-slate-600 border border-slate-200 hover:border-[#FD5528] hover:text-[#FD5528]">
                        Workplace &amp; Team
                    </button>
                </div>
            </div>

            <!-- ALBUM GRID: 6 UNIFORM 190px HORIZONTAL CARDS -->
            <div id="albumsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">

                <!-- ALBUM ITEM 01: SPRINT COLLABORATION -->
                <article
                    class="album-card group flex flex-col justify-between overflow-hidden rounded-[22px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-[#FD5528]/40 hover:shadow-xl cursor-pointer"
                    data-album-category="sprint"
                    data-aos="fade-up"
                    data-aos-delay="0"
                    onclick="openAlbumLightboxIndex(0)"
                >
                    <!-- Exact fixed 190px landscape container -->
                    <div class="relative h-[190px] w-full overflow-hidden bg-slate-900">
                        <img
                            src="{{ asset('assets/Office/649709421_1304707445044901_7896336242621366096_n.jpg') }}"
                            alt="Sprint Architecture & Collaboration"
                            loading="lazy"
                            class="h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                        <div class="absolute left-3.5 top-3.5">
                            <span class="inline-flex items-center rounded-full bg-black/60 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-white backdrop-blur-md border border-white/15">
                                Tech Sprint
                            </span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[11px] text-slate-400 mb-1">
                                <span class="font-bold text-[#FD5528] uppercase tracking-wider">Engineering Bay</span>
                                <span>Kanpur HQ</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Sprint Architecture &amp; Planning
                            </h3>
                            <p class="mt-1.5 text-xs text-slate-600 leading-relaxed">
                                Our tech team plans and solves hard coding tasks together.
                            </p>
                        </div>
                    </div>
                </article>


                <!-- ALBUM ITEM 02: FESTIVAL CELEBRATIONS -->
                <article
                    class="album-card group flex flex-col justify-between overflow-hidden rounded-[22px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-[#FD5528]/40 hover:shadow-xl cursor-pointer"
                    data-album-category="celebration"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    onclick="openAlbumLightboxIndex(1)"
                >
                    <div class="relative h-[190px] w-full overflow-hidden bg-slate-900">
                        <img
                            src="{{ asset('assets/Office/649519728_1304707361711576_8038595386224399026_n.jpg') }}"
                            alt="Festival of Lights & Traditional Day"
                            loading="lazy"
                            class="h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                        <div class="absolute left-3.5 top-3.5">
                            <span class="inline-flex items-center rounded-full bg-black/60 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-amber-300 backdrop-blur-md border border-white/15">
                                Cultural Festival
                            </span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[11px] text-slate-400 mb-1">
                                <span class="font-bold text-[#FD5528] uppercase tracking-wider">Festival Album</span>
                                <span>Office Fest</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Festival of Lights &amp; Traditions
                            </h3>
                            <p class="mt-1.5 text-xs text-slate-600 leading-relaxed">
                                Traditional festivities, office decor, lights, sweets, and celebration rituals.
                            </p>
                        </div>
                    </div>
                </article>


                <!-- ALBUM ITEM 03: MILESTONE CELEBRATIONS -->
                <article
                    class="album-card group flex flex-col justify-between overflow-hidden rounded-[22px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-[#FD5528]/40 hover:shadow-xl cursor-pointer"
                    data-album-category="celebration"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    onclick="openAlbumLightboxIndex(2)"
                >
                    <div class="relative h-[190px] w-full overflow-hidden bg-slate-900">
                        <img
                            src="{{ asset('assets/Office/650055736_1304707068378272_8027700641331239382_n.jpg') }}"
                            alt="Team Wins & Milestone Celebration"
                            loading="lazy"
                            class="h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                        <div class="absolute left-3.5 top-3.5">
                            <span class="inline-flex items-center rounded-full bg-black/60 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-orange-300 backdrop-blur-md border border-white/15">
                                Milestone Win
                            </span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[11px] text-slate-400 mb-1">
                                <span class="font-bold text-[#FD5528] uppercase tracking-wider">Celebration</span>
                                <span>Team Wins</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Milestone Victory &amp; Cake Cutting
                            </h3>
                            <p class="mt-1.5 text-xs text-slate-600 leading-relaxed">
                                Celebrating client delivery milestones, product releases, and team birthdays together.
                            </p>
                        </div>
                    </div>
                </article>


                <!-- ALBUM ITEM 04: DEEP WORK & WORKSTATIONS -->
                <article
                    class="album-card group flex flex-col justify-between overflow-hidden rounded-[22px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-[#FD5528]/40 hover:shadow-xl cursor-pointer"
                    data-album-category="workplace"
                    data-aos="fade-up"
                    data-aos-delay="0"
                    onclick="openAlbumLightboxIndex(3)"
                >
                    <div class="relative h-[190px] w-full overflow-hidden bg-slate-900">
                        <img
                            src="{{ asset('assets/Office/649426716_1304707918378187_6839822695956954278_n.jpg') }}"
                            alt="Deep Focus Engineering Hub"
                            loading="lazy"
                            class="h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                        <div class="absolute left-3.5 top-3.5">
                            <span class="inline-flex items-center rounded-full bg-black/60 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-teal-300 backdrop-blur-md border border-white/15">
                                Workstation
                            </span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[11px] text-slate-400 mb-1">
                                <span class="font-bold text-[#FD5528] uppercase tracking-wider">Daily Workflow</span>
                                <span>Kanpur HQ</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Deep Focus Engineering Bay
                            </h3>
                            <p class="mt-1.5 text-xs text-slate-600 leading-relaxed">
                                Clean desks with dual screens give our coders the space to focus and write great code.
                            </p>
                        </div>
                    </div>
                </article>


                <!-- ALBUM ITEM 05: TECH BRAINSTORMING & MENTORSHIP -->
                <article
                    class="album-card group flex flex-col justify-between overflow-hidden rounded-[22px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-[#FD5528]/40 hover:shadow-xl cursor-pointer"
                    data-album-category="sprint"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    onclick="openAlbumLightboxIndex(4)"
                >
                    <div class="relative h-[190px] w-full overflow-hidden bg-slate-900">
                        <img
                            src="{{ asset('assets/Office/650253160_1304708771711435_1524565240088187399_n.jpg') }}"
                            alt="Tech Brainstorming & Knowledge Sharing"
                            loading="lazy"
                            class="h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                        <div class="absolute left-3.5 top-3.5">
                            <span class="inline-flex items-center rounded-full bg-black/60 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-sky-300 backdrop-blur-md border border-white/15">
                                Knowledge Share
                            </span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[11px] text-slate-400 mb-1">
                                <span class="font-bold text-[#FD5528] uppercase tracking-wider">Mentorship</span>
                                <span>Learning Culture</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Knowledge Sharing &amp; Peer Reviews
                            </h3>
                            <p class="mt-1.5 text-xs text-slate-600 leading-relaxed">
                                We review code together, share tips, and hold team workshops to keep learning.
                            </p>
                        </div>
                    </div>
                </article>


                <!-- ALBUM ITEM 06: MODERN WORKPLACE & INFRASTRUCTURE -->
                <article
                    class="album-card group flex flex-col justify-between overflow-hidden rounded-[22px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-[#FD5528]/40 hover:shadow-xl cursor-pointer"
                    data-album-category="workplace"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    onclick="openAlbumLightboxIndex(5)"
                >
                    <div class="relative h-[190px] w-full overflow-hidden bg-slate-900">
                        <img
                            src="{{ asset('assets/Office/650656692_1304708898378089_3171840685580638541_n.jpg') }}"
                            alt="Modern Development Infrastructure"
                            loading="lazy"
                            class="h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                        <div class="absolute left-3.5 top-3.5">
                            <span class="inline-flex items-center rounded-full bg-black/60 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-pink-300 backdrop-blur-md border border-white/15">
                                Infrastructure
                            </span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[11px] text-slate-400 mb-1">
                                <span class="font-bold text-[#FD5528] uppercase tracking-wider">HQ Setup</span>
                                <span>Modern Desks</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold tracking-tight text-slate-900 group-hover:text-[#FD5528] transition-colors duration-200">
                                Modern Development Bay
                            </h3>
                            <p class="mt-1.5 text-xs text-slate-600 leading-relaxed">
                                Ergonomic workstations, high-speed networks, and dedicated focus bays.
                            </p>
                        </div>
                    </div>
                </article>

            </div>

            <!-- Bottom Approach Statement -->
            <div
                class="mt-10 flex flex-col gap-4 rounded-[20px] border border-slate-200 bg-white p-6 sm:p-7 lg:flex-row lg:items-center lg:justify-between shadow-sm"
                data-aos="fade-up"
            >
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-[#FD5528]">
                        Our Culture Promise
                    </p>
                    <h3 class="mt-1 text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                        A place where great developers do their best work.
                    </h3>
                </div>

                <a
                    href="{{ route('frontend.career') }}"
                    class="group inline-flex w-fit items-center gap-2 rounded-full bg-slate-900 px-5 py-2.5 text-xs font-bold uppercase tracking-wider text-white transition-all duration-300 hover:bg-[#FD5528] hover:shadow-lg hover:shadow-[#FD5528]/25"
                >
                    <span>Join Our Workspace</span>
                    <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

        </div>
    </section>


    <!-- =========================================================
         5. JOIN OUR TEAM CTA
         (Rich Dark Solid Gradient with 100% Guaranteed High Contrast)
    ========================================================= -->
    <section class="relative overflow-hidden bg-white py-16 sm:py-20 border-t border-slate-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <div 
                class="relative overflow-hidden rounded-[30px] p-8 sm:p-12 lg:p-14 text-center shadow-2xl border border-white/10"
                style="background: linear-gradient(135deg, #111216 0%, #161820 50%, #0d0e12 100%) !important; color: #ffffff !important;"
                data-aos="zoom-in"
                data-aos-duration="850"
            >
                <div class="pointer-events-none absolute left-1/2 top-0 h-64 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#FD5528]/20 blur-[100px]"></div>

                <div class="relative z-10 mx-auto max-w-3xl space-y-5">
                    <span 
                        class="inline-flex items-center gap-2 rounded-full px-4 py-1 text-xs font-bold uppercase tracking-wider"
                        style="background: rgba(253, 85, 40, 0.15) !important; color: #FD5528 !important; border: 1px solid rgba(253, 85, 40, 0.35) !important;"
                    >
                        Careers at Backend Coders
                    </span>

                    <h2 class="text-3xl font-black tracking-tight sm:text-4xl lg:text-5xl leading-tight" style="color: #ffffff !important;">
                        Ready to Build the Future with <span style="color: #FD5528 !important;">Backend Coders?</span>
                    </h2>

                    <p class="text-sm sm:text-base leading-relaxed max-w-2xl mx-auto" style="color: #d1d5db !important;">
                        We are constantly looking for talented developers, AI practitioners, and designers who want to solve high-impact problems.
                    </p>

                    <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                        <a
                            href="{{ route('frontend.career') }}"
                            class="group inline-flex min-h-[46px] items-center justify-center gap-2.5 rounded-xl px-7 py-3 text-sm font-bold shadow-xl transition-all duration-300 hover:-translate-y-0.5"
                            style="background-color: #FD5528 !important; color: #ffffff !important;"
                        >
                            <span>Explore Careers</span>
                            <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>

                        <a
                            href="{{ route('frontend.contact') }}"
                            class="inline-flex min-h-[46px] items-center justify-center rounded-xl px-7 py-3 text-sm font-bold backdrop-blur-md transition-all duration-300 hover:-translate-y-0.5"
                            style="background-color: rgba(255, 255, 255, 0.08) !important; color: #ffffff !important; border: 1px solid rgba(255, 255, 255, 0.25) !important;"
                        >
                            Contact Our Team
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>


<!-- =========================================================
     INTERACTIVE ALBUM LIGHTBOX MODAL WITH PREV/NEXT
========================================================= -->
<div id="albumLightbox" class="fixed inset-0 z-50 hidden items-center justify-center p-3 sm:p-6 bg-black/92 backdrop-blur-xl opacity-0 transition-opacity duration-300" aria-modal="true" role="dialog" aria-labelledby="lightboxTitle">
    <div class="relative w-full max-w-4xl overflow-hidden rounded-3xl border border-white/15 bg-[#111215] text-white shadow-2xl transition-all transform scale-95 duration-300" id="lightboxContainer">
        
        <!-- Close Button -->
        <button type="button" onclick="closeAlbumLightbox()" class="absolute top-4 right-4 z-30 flex h-10 w-10 items-center justify-center rounded-full bg-black/75 text-white hover:bg-[#FD5528] transition-colors focus:outline-none cursor-pointer shadow-lg" aria-label="Close lightbox">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Previous Button -->
        <button type="button" onclick="prevAlbum(event)" class="absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 z-30 flex h-11 w-11 items-center justify-center rounded-full bg-black/60 text-white backdrop-blur-md border border-white/20 hover:bg-[#FD5528] hover:border-[#FD5528] transition-all cursor-pointer focus:outline-none shadow-lg" aria-label="Previous photo">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </button>

        <!-- Next Button -->
        <button type="button" onclick="nextAlbum(event)" class="absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 z-30 flex h-11 w-11 items-center justify-center rounded-full bg-black/60 text-white backdrop-blur-md border border-white/20 hover:bg-[#FD5528] hover:border-[#FD5528] transition-all cursor-pointer focus:outline-none shadow-lg" aria-label="Next photo">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>

        <!-- Responsive Image Display Viewport -->
        <div class="relative max-h-[68vh] sm:max-h-[74vh] w-full flex items-center justify-center bg-black overflow-hidden py-2">
            <img id="lightboxImage" src="" alt="" class="max-h-[68vh] sm:max-h-[74vh] w-auto max-w-full object-contain mx-auto transition-opacity duration-200">
        </div>

        <!-- Lightbox Caption and Navigation Metadata -->
        <div class="p-5 sm:p-6 bg-[#14161b] border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <div class="flex items-center gap-2.5 mb-1.5">
                    <span id="lightboxBadge" class="text-[10px] font-bold uppercase tracking-widest text-[#FD5528] bg-[#FD5528]/15 px-2.5 py-0.5 rounded-full border border-[#FD5528]/30"></span>
                    <span id="lightboxCounter" class="text-xs text-zinc-400 font-medium"></span>
                </div>
                <h3 id="lightboxTitle" class="text-lg sm:text-xl font-bold text-white tracking-tight"></h3>
                <p id="lightboxDescription" class="mt-1 text-xs text-zinc-300 leading-relaxed max-w-xl"></p>
            </div>
            <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400 bg-white/5 px-3.5 py-1.5 rounded-full border border-white/10 w-fit shrink-0">
                Backend Coders HQ
            </span>
        </div>
    </div>
</div>


<!-- =========================================================
     COMPACT PROFESSIONAL MEMBER MODAL (Guaranteed 380px Max Width)
========================================================= -->
<div id="memberModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 transition-all duration-200 opacity-0" style="background-color: rgba(15, 23, 42, 0.45); backdrop-filter: blur(4px);" aria-modal="true" role="dialog" aria-labelledby="modalName">
    <div id="modalContainer" class="relative overflow-hidden rounded-[26px] bg-white text-slate-900 shadow-2xl transition-all duration-200" style="max-width: 380px; width: 100%; padding: 24px; border: 1px solid #e2e8f0; transform: scale(0.95);">
        
        <!-- Top Accent Gradient -->
        <div class="absolute inset-x-0 top-0 h-[3px] bg-gradient-to-r from-[#FD5528] via-orange-400 to-[#FD5528]"></div>

        <!-- Close Button -->
        <button type="button" onclick="closeMemberModal()" class="absolute top-4 right-4 flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-500 hover:bg-[#FD5528] hover:text-white transition-all focus:outline-none cursor-pointer" aria-label="Close modal">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Profile Header: Avatar + Meta -->
        <div class="flex items-center gap-4 p-4">
            <div class="relative h-16 w-16 flex-shrink-0 rounded-2xl overflow-hidden border border-slate-200 bg-slate-100 shadow-sm">
                <img id="modalImage" src="" alt="" class="h-full w-full object-cover object-top">
            </div>

            <div class="min-w-0 flex-1">
                <span id="modalRoleBadge" class="inline-block rounded-full bg-orange-50 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#FD5528] border border-orange-200/80"></span>
                <h3 id="modalName" class="mt-1 text-lg font-bold text-slate-900 truncate"></h3>
                <p id="modalPosition" class="text-xs text-slate-500 font-medium truncate"></p>
            </div>
        </div>

        <!-- Bio Details Inset -->
        <div class="mt-3.5 rounded-xl border border-slate-100 bg-slate-50/80 p-3">
            <p id="modalBio" class="text-xs leading-relaxed text-slate-600"></p>
        </div>

        <!-- Key Skills -->
        <div class="mt-3.5">
            <span class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Core Technical Stack</span>
            <div id="modalSkills" class="flex flex-wrap gap-1.5"></div>
        </div>

        <!-- Connect Action CTA -->
        <div class="mt-4 pt-3 border-t border-slate-100">
            <a
                id="modalLinkedin"
                href="https://www.linkedin.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="group flex w-full items-center justify-center gap-2 rounded-xl bg-[#FD5528] px-4 py-2.5 text-xs font-bold uppercase tracking-wider text-white shadow-md shadow-[#FD5528]/25 transition-all hover:bg-[#E0451A]"
            >
                <span>Connect on LinkedIn</span>
                <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

    </div>
</div>


<!-- =========================================================
     JAVASCRIPT FOR FILTERING, ALBUMS & MODALS
========================================================= -->
<script>
    const teamMembersData = {
        nupur: {
            name: "Nupur",
            roleBadge: "Tech Lead",
            position: "Sr. PHP Developer & Marketing Head",
            image: "{{ asset('assets/images/nupur.webp') }}",
            bio: "Leads our backend teams. She focuses on building strong PHP and Laravel systems, databases, and microservices.",
            skills: ["PHP 8+", "Laravel", "MySQL", "System Design", "Marketing Strategy"],
            linkedin: "https://www.linkedin.com/in/nupur-singh-50a257217?utm_source=share_via&utm_content=profile&utm_medium=member_android"
        },
        utkarsh: {
            name: "Utkarsh Sonkar",
            roleBadge: "Project Coordinator",
            position: "Dotnet Developer & Project Coordinator",
            image: "{{ asset('assets/images/utkarsh.webp') }}",
            bio: "Turns big ideas into clear tasks for the team. He builds fast backends with .NET Core and sites with React.",
            skills: [".NET Core", "C#", "React", "TypeScript", "Agile / Scrum"],
            linkedin: "https://www.linkedin.com/in/utkarsh-sonker-2b530421a?utm_source=share_via&utm_content=profile&utm_medium=member_android"
        },
        arvind: {
            name: "Arvind Verma",
            roleBadge: "AI Development Head",
            position: "Sr. PHP Developer & AI Development Head",
            image: "{{ asset('assets/images/arvind.webp') }}",
            bio: "Leads our AI work. He builds data systems in Python, smart APIs, and fast caches with Redis.",
            skills: ["Python", "AI / LLMs", "PostgreSQL", "Redis", "Cloud APIs"],
            linkedin: "https://www.linkedin.com/in/arvind-verma-381290292/"
        },
        adarsh: {
            name: "Adarsh Singh",
            roleBadge: "AI Developer",
            position: "AI Developer & Data Science Associate",
            image: "{{ asset('assets/images/adarsh.webp') }}",
            bio: "Loves working on computer vision and PyTorch models. He also uses data math to build smart and responsive web sites.",
            skills: ["PyTorch", "FastAPI", "Data Science", "TailwindCSS", "Next.js"],
            linkedin: "https://www.linkedin.com/in/adarsh-py/"
        },
        kajal: {
            name: "Kajal Kumari",
            roleBadge: "AI Coordinator",
            position: "PHP Developer & AI Development Coordinator",
            image: "{{ asset('assets/images/kajal.webp') }}",
            bio: "A hardworking coder who builds PHP apps. She connects systems, tunes databases, and manages how code is deployed.",
            skills: ["PHP", "Laravel", "MySQL", "Docker", "CI/CD"],
            linkedin: "https://www.linkedin.com/in/kajal-kumari-668240240"
        },
        arambhi: {
            name: "Arambhi Mishra",
            roleBadge: "Marketing Associate",
            position: "Designing & Marketing Associate",
            image: "{{ asset('assets/images/arambhi(1).webp') }}",
            bio: "Creates beautiful brand styles and app designs in Figma. She also plans and runs our global marketing work.",
            skills: ["Figma", "UI/UX Design", "Branding", "Social Media", "Creative Strategy"],
            linkedin: "https://www.linkedin.com/in/arambhi-mishra-11b1b743b/"
        }
    };

    /* Culture Album Data */
    const albumItems = [
        {
            src: "{{ asset('assets/Office/649709421_1304707445044901_7896336242621366096_n.jpg') }}",
            title: "Sprint Architecture & Planning",
            category: "Tech Sprint",
            desc: "Our tech team plans and solves hard coding tasks together in intensive collaborative sprints."
        },
        {
            src: "{{ asset('assets/Office/649519728_1304707361711576_8038595386224399026_n.jpg') }}",
            title: "Festival of Lights & Traditions",
            category: "Cultural Festival",
            desc: "Traditional festivities, office decor, lights, sweets, and celebration rituals with the whole team."
        },
        {
            src: "{{ asset('assets/Office/650055736_1304707068378272_8027700641331239382_n.jpg') }}",
            title: "Milestone Victory & Cake Cutting",
            category: "Milestone Win",
            desc: "Celebrating client delivery milestones, product releases, and team birthdays together."
        },
        {
            src: "{{ asset('assets/Office/649426716_1304707918378187_6839822695956954278_n.jpg') }}",
            title: "Deep Focus Engineering Bay",
            category: "Workstation",
            desc: "Clean desks with dual screens give our coders the space to focus and write great code."
        },
        {
            src: "{{ asset('assets/Office/650253160_1304708771711435_1524565240088187399_n.jpg') }}",
            title: "Knowledge Sharing & Peer Reviews",
            category: "Knowledge Share",
            desc: "We review code together, share tips, and hold team workshops to keep learning."
        },
        {
            src: "{{ asset('assets/Office/650656692_1304708898378089_3171840685580638541_n.jpg') }}",
            title: "Modern Development Bay",
            category: "Infrastructure",
            desc: "Ergonomic workstations, high-speed networks, and dedicated focus bays."
        }
    ];

    let currentAlbumIndex = 0;

    function openMemberModal(key) {
        const member = teamMembersData[key];
        if (!member) return;

        document.getElementById('modalImage').src = member.image;
        document.getElementById('modalImage').alt = member.name;
        document.getElementById('modalName').textContent = member.name;
        document.getElementById('modalRoleBadge').textContent = member.roleBadge;
        document.getElementById('modalPosition').textContent = member.position;
        document.getElementById('modalBio').textContent = member.bio;
        document.getElementById('modalLinkedin').href = member.linkedin;

        const skillsContainer = document.getElementById('modalSkills');
        skillsContainer.innerHTML = '';
        member.skills.forEach(skill => {
            const pill = document.createElement('span');
            pill.className = 'inline-flex items-center rounded-md bg-white px-2 py-0.5 text-[11px] font-medium text-slate-700 border border-slate-200/80 shadow-xs';
            pill.textContent = skill;
            skillsContainer.appendChild(pill);
        });

        const modal = document.getElementById('memberModal');
        const container = document.getElementById('modalContainer');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            container.style.transform = 'scale(1)';
        }, 10);
    }

    function closeMemberModal() {
        const modal = document.getElementById('memberModal');
        const container = document.getElementById('modalContainer');
        modal.classList.add('opacity-0');
        container.style.transform = 'scale(0.95)';
        document.body.classList.remove('overflow-hidden');
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 200);
    }

    /* Team Multi-Category Filtering */
    function filterTeam(category, btn) {
        const buttons = document.querySelectorAll('.team-filter-btn');
        buttons.forEach(b => {
            b.classList.remove('active-filter', 'bg-[#FD5528]', 'text-white', 'shadow-md', 'shadow-[#FD5528]/25');
            b.classList.add('bg-white', 'text-slate-600', 'border', 'border-slate-200');
        });

        btn.classList.add('active-filter', 'bg-[#FD5528]', 'text-white', 'shadow-md', 'shadow-[#FD5528]/25');
        btn.classList.remove('bg-white', 'text-slate-600', 'border', 'border-slate-200');

        const cards = document.querySelectorAll('.team-card');
        let count = 0;
        cards.forEach(card => {
            const categories = (card.dataset.category || '').toLowerCase().split(/\s+/);
            const matches = (category === 'all') || categories.includes(category.toLowerCase());
            
            if (matches) {
                card.style.display = 'flex';
                card.style.opacity = '0';
                card.style.transform = 'translateY(8px) scale(0.98)';
                setTimeout(() => {
                    card.style.transition = 'all 0.3s cubic-bezier(0.16, 1, 0.3, 1)';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0) scale(1)';
                }, 20);
                count++;
            } else {
                card.style.display = 'none';
            }
        });

        const badge = document.getElementById('activeCountBadge');
        if (badge) badge.textContent = count;
    }

    /* Album Filtering */
    function filterAlbums(category, btn) {
        const buttons = document.querySelectorAll('.album-filter-btn');
        buttons.forEach(b => {
            b.classList.remove('active-album-filter', 'bg-[#FD5528]', 'text-white', 'shadow-md', 'shadow-[#FD5528]/25');
            b.classList.add('bg-white', 'text-slate-600', 'border', 'border-slate-200');
        });

        btn.classList.add('active-album-filter', 'bg-[#FD5528]', 'text-white', 'shadow-md', 'shadow-[#FD5528]/25');
        btn.classList.remove('bg-white', 'text-slate-600', 'border', 'border-slate-200');

        const cards = document.querySelectorAll('.album-card');
        cards.forEach(card => {
            const matches = (category === 'all') || (card.dataset.albumCategory === category);
            if (matches) {
                card.style.display = 'flex';
                card.style.opacity = '0';
                card.style.transform = 'translateY(8px) scale(0.98)';
                setTimeout(() => {
                    card.style.transition = 'all 0.3s cubic-bezier(0.16, 1, 0.3, 1)';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0) scale(1)';
                }, 20);
            } else {
                card.style.display = 'none';
            }
        });
    }

    /* Lightbox Modal with Carousel Nav */
    function showAlbum(index) {
        if (index < 0) index = albumItems.length - 1;
        if (index >= albumItems.length) index = 0;
        currentAlbumIndex = index;

        const item = albumItems[currentAlbumIndex];
        const img = document.getElementById('lightboxImage');
        img.style.opacity = '0';
        setTimeout(() => {
            img.src = item.src;
            img.alt = item.title;
            document.getElementById('lightboxTitle').textContent = item.title;
            document.getElementById('lightboxDescription').textContent = item.desc;
            const badge = document.getElementById('lightboxBadge');
            if (badge) badge.textContent = item.category || 'Culture Album';
            const counter = document.getElementById('lightboxCounter');
            if (counter) counter.textContent = `(${currentAlbumIndex + 1} of ${albumItems.length})`;
            img.style.opacity = '1';
        }, 150);
    }

    function openAlbumLightboxIndex(index) {
        showAlbum(index);
        const lightbox = document.getElementById('albumLightbox');
        const container = document.getElementById('lightboxContainer');
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        document.body.classList.add('overflow-hidden');
        setTimeout(() => {
            lightbox.classList.remove('opacity-0');
            container.classList.remove('scale-95');
            container.classList.add('scale-100');
        }, 10);
    }

    function openAlbumLightbox(imgSrc, title, desc) {
        const idx = albumItems.findIndex(item => item.src === imgSrc);
        if (idx !== -1) {
            openAlbumLightboxIndex(idx);
        } else {
            document.getElementById('lightboxImage').src = imgSrc;
            document.getElementById('lightboxImage').alt = title;
            document.getElementById('lightboxTitle').textContent = title;
            document.getElementById('lightboxDescription').textContent = desc;
            const badge = document.getElementById('lightboxBadge');
            if (badge) badge.textContent = 'Culture Album';
            const counter = document.getElementById('lightboxCounter');
            if (counter) counter.textContent = '';
            
            const lightbox = document.getElementById('albumLightbox');
            const container = document.getElementById('lightboxContainer');
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            document.body.classList.add('overflow-hidden');
            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
                container.classList.remove('scale-95');
                container.classList.add('scale-100');
            }, 10);
        }
    }

    function prevAlbum(e) {
        if (e) e.stopPropagation();
        showAlbum(currentAlbumIndex - 1);
    }

    function nextAlbum(e) {
        if (e) e.stopPropagation();
        showAlbum(currentAlbumIndex + 1);
    }

    function closeAlbumLightbox() {
        const lightbox = document.getElementById('albumLightbox');
        const container = document.getElementById('lightboxContainer');
        lightbox.classList.add('opacity-0');
        container.classList.remove('scale-100');
        container.classList.add('scale-95');
        document.body.classList.remove('overflow-hidden');
        setTimeout(() => {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
        }, 300);
    }

    // Close on backdrop click
    document.getElementById('memberModal').addEventListener('click', function (e) {
        if (e.target === this) closeMemberModal();
    });

    document.getElementById('albumLightbox').addEventListener('click', function (e) {
        if (e.target === this) closeAlbumLightbox();
    });

    // Keyboard navigation (ESC + Left/Right arrows)
    document.addEventListener('keydown', function (e) {
        const lightbox = document.getElementById('albumLightbox');
        const isLightboxOpen = lightbox && !lightbox.classList.contains('hidden');

        if (e.key === 'Escape') {
            closeMemberModal();
            closeAlbumLightbox();
        } else if (isLightboxOpen) {
            if (e.key === 'ArrowLeft') {
                prevAlbum();
            } else if (e.key === 'ArrowRight') {
                nextAlbum();
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 50
            });
        }
    });
</script>

@endsection
