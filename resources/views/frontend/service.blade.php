@extends('component.main')

@php
    $servicesBreadcrumb = [
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
                'name' => 'Services',
                'item' => 'https://backendcodersindia.com/service',
            ],
        ],
    ];

    $servicesWebPage = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        '@id' => 'https://backendcodersindia.com/service#webpage',
        'url' => 'https://backendcodersindia.com/service',
        'name' => 'Software & Digital Services | Backend Coders India',
        'description' => 'Custom software engineering, website development, mobile apps, and digital growth services in Kanpur.',
        'isPartOf' => [
            '@type' => 'WebSite',
            '@id' => 'https://backendcodersindia.com/#website',
        ],
    ];
@endphp

@push('head')
    <link rel="preload" as="image" href="{{ asset('assets/images/banner.png') }}" fetchpriority="high">
    <script type="application/ld+json">{!! json_encode($servicesBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    <script type="application/ld+json">{!! json_encode($servicesWebPage, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
@endpush

@section('content')


<!-- hero section  -->
<section class="relative h-[30vh] flex items-center justify-center text-center text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <img 
    src="{{asset('assets/images/banner.png')}}"
    width="1920"
    height="600"
    fetchpriority="high"
    loading="eager"
    decoding="async"
    alt="Professional Web and Custom Software Services - Backend Coders India"
    class="absolute inset-0 w-full h-full object-cover"
  />

  <!-- DARK OVERLAY -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- CONTENT -->
  <div class="relative z-10 max-w-4xl px-6">

  

    <!-- HEADING -->
    <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
      Professional Web &amp; Custom
      <span class="text-orange-600">Software Services</span>
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
      End-to-end custom software engineering, website development, mobile apps, and data-driven digital growth services designed to scale your business.
    </p>

    <div class="mt-6 flex flex-wrap justify-center gap-3 text-xs">
        <a href="{{ route('frontend.software_company_kanpur') }}" class="rounded-full bg-white/10 px-4 py-1.5 text-white backdrop-blur-md border border-white/20 hover:bg-[#FD5528] transition">Software Company in Kanpur &rarr;</a>
        <a href="{{ route('frontend.digital_marketing_kanpur') }}" class="rounded-full bg-white/10 px-4 py-1.5 text-white backdrop-blur-md border border-white/20 hover:bg-[#FD5528] transition">Digital Marketing Agency in Kanpur &rarr;</a>
    </div>

 

  </div>

</section>
<!-- end hero section  -->


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
                            <img src="{{ asset('assets/icons/home/custom-web-apps.png') }}" width="64" height="64" loading="lazy" decoding="async" alt="Custom web app" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Custom Web Applications</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Custom web apps built for your team and customers. Fast to load, easy to use, and ready to grow with your business.</p>
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
                            <img src="{{ asset('assets/icons/home/website-design.png') }}" width="64" height="64" loading="lazy" decoding="async" alt="Design icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Website Design & Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Clean websites designed for phones and computers. Built to look great, load fast, and bring you real business inquiries.</p>
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
                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">SaaS Platforms</span>
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] 
      hover:from-[#fb813b] hover:to-[#b00000] shadow-inner">
                            <img src="{{ asset('assets/icons/home/saas-product.png') }}" width="64" height="64" loading="lazy" decoding="async" alt="SaaS icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">SaaS Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Online software products that run smoothly for all your users. Built with secure accounts, reliable uptime, and simple billing.</p>
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
                            <img src="{{ asset('assets/icons/home/erp-crm.png') }}" width="64" height="64" loading="lazy" decoding="async" alt="ERP icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">ERP & POS Software</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Smart business systems to manage stock, sales, and billing in one place. Less manual paperwork and fewer mistakes for your staff.</p>
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
                            <img src="{{ asset('assets/icons/home/ecommerce.png') }}" width="64" height="64" loading="lazy" decoding="async" alt="Commerce icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">E-commerce Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Online stores that make buying easy. Fast checkouts, safe payment options, and simple product tracking to help you sell more.</p>
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
                            <img src="{{ asset('assets/icons/home/mobile-apps.png') }}" width="64" height="64" loading="lazy" decoding="async" alt="Mobile icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Mobile App Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Mobile apps for phones and tablets. Built to feel fast, look clean, and give your customers an easy way to use your services.</p>
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
                            <img src="{{ asset('assets/icons/home/cloud-devops.png') }}" width="64" height="64" loading="lazy" decoding="async" alt="API icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">API Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Simple APIs to connect your tools, apps, and services. Safe, fast, and easy to maintain as your systems grow.</p>
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
                            <img src="{{ asset('assets/icons/home/seo-marketing.png') }}" width="64" height="64" loading="lazy" decoding="async" alt="Marketing icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Digital Marketing & SEO</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Search optimization and marketing to help customers find your business on Google and get in touch with your team.</p>
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
                            <img src="{{ asset('assets/icons/home/mvp-startups.png') }}" width="64" height="64" loading="lazy" decoding="async" alt="MVP icon" class="h-16 w-16" />
                        </div>
                        <h3 class="text-xl font-semibold transition duration-500 group-hover:text-black">Startup MVP Development</h3>
                        <p class="text-sm text-gray-600 group-hover:text-gray-900">Build the first version of your product quickly. Test it with real users, gather feedback, and launch with confidence.</p>
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
          We build clean, fast, and secure software. From the database to the screen, each tool is made to help your business work better every day.
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

          <div class="mt-8 grid gap-3 sm:gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/dotnetcore.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="Dotnet Core">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">.NET Core</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/react.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="React">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">React</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/nodejs.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="Node.js">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">Node.js</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/mongodb.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="MongoDB">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">MERN</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/wordpress.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="WordPress">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">WordPress</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/shopify.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="Shopify">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">Shopify</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/laravel.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="Laravel">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">Laravel</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/mssql.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="SQL Server">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">SQL Server</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/firebase.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="Firebase">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">Firebase</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/aws.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="AWS">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">AWS</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/typescript.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="TypeScript">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">TypeScript</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 rounded-2xl border border-gray-200/80 bg-white/90 p-4 sm:p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/50 hover:bg-white hover:shadow-md">
              <img src="{{ asset('assets/icons/tech/nextjs.svg') }}" width="48" height="48" loading="lazy" decoding="async" class="w-12 h-12 object-contain" alt="Next.js">
              <span class="text-xs sm:text-sm font-semibold text-gray-900 whitespace-nowrap">Next.js</span>
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
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#C2410C] font-semibold transition     ">
            01
          </div>

          <!-- TEXT -->
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#C2410C]">
              Discovery
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Understanding goals & defining scope
            </p>
          </div>

        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#C2410C] font-semibold transition ] ">
            02
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#C2410C]">
              UI / UX
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Designing intuitive experiences
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#C2410C] font-semibold transition ] ">
            03
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#C2410C]">
              Development
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Building scalable applications
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#C2410C] font-semibold transition ] ">
            04
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#C2410C]">
              Testing
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Ensuring quality & performance
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#C2410C] font-semibold transition ">
            05
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#C2410C]">
              Deployment
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              Launching production-ready apps
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#C2410C] font-semibold transition ">
            06
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#C2410C]">
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

<!-- SECTION -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-4">

    <!-- HEADER -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
        Scalable <span class="text-orange-600">Technology</span> Solutions
      </h2>
      <p class="text-gray-500 mt-3 max-w-2xl mx-auto">
        Powerful backend, cloud, and API solutions designed for performance, scalability, and seamless integration.
      </p>
    </div>

    <!-- TABS -->
    <div class="flex justify-center mb-10 space-x-4">
      <button class="tab-btn px-6 py-2 rounded-full bg-orange-600 text-white" data-tab="backend">Backend</button>
      <button class="tab-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700" data-tab="cloud">Cloud</button>
      <button class="tab-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700" data-tab="api">API</button>
    </div>

    <!-- CONTENT -->
    <div id="tab-content">

      <!-- BACKEND -->
      <div class="tab-panel" data-content="backend">
        <div class="grid md:grid-cols-2 gap-8 items-center">

          <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">
              Dependable Backend Systems Built to Last
            </h3>
            <p class="text-gray-600 mb-5">
              A solid backend keeps your software running without delays. We build fast, reliable databases and server code using Node.js, Python, and modern PHP frameworks.
            </p>

            <ul class="space-y-3 text-gray-700">
              <li>Database Management & Optimization</li>
              <li> Microservices & Serverless Architectures</li>
              <li> Security and Compliance</li>
            </ul>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow-md">
            <h4 class="font-semibold mb-4 text-gray-800">Technologies</h4>
            <div class="flex flex-wrap gap-3">
              <span class="tag">Node.js</span>
              <span class="tag">Python</span>
              <span class="tag">Java</span>
              <span class="tag">PostgreSQL</span>
              <span class="tag">MongoDB</span>
            </div>
          </div>

        </div>
      </div>

      <!-- CLOUD -->
      <div class="tab-panel hidden" data-content="cloud">
        <div class="grid md:grid-cols-2 gap-8 items-center">

          <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">
              Safe and Scalable Cloud Hosting
            </h3>
            <p class="text-gray-600 mb-5">
              We help you host your tools safely on AWS, Google Cloud, or Azure. Your team gets reliable uptime, daily backups, and room to grow without paying for servers you do not need.
            </p>

            <ul class="space-y-3 text-gray-700">
              <li>Cloud Infrastructure Setup</li>
              <li>Migration & Deployment</li>
              <li>Cloud Security & Compliance</li>
            </ul>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow-md">
            <h4 class="font-semibold mb-4 text-gray-800">Platforms</h4>
            <div class="flex flex-wrap gap-3">
              <span class="tag">AWS</span>
              <span class="tag">Azure</span>
              <span class="tag">Google Cloud</span>
              <span class="tag">Docker</span>
              <span class="tag">Kubernetes</span>
            </div>
          </div>

        </div>
      </div>

      <!-- API -->
      <div class="tab-panel hidden" data-content="api">
        <div class="grid md:grid-cols-2 gap-8 items-center">

          <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">
              Simple API Connections for Your Software
            </h3>
            <p class="text-gray-600 mb-5">
              Connect your software with payment systems, email tools, or external services. We make sure data moves safely and instantly between your systems.
            </p>

            <ul class="space-y-3 text-gray-700">
              <li>Third-Party Service Integration</li>
              <li>Custom API Development</li>
              <li>API Security & Rate Limiting</li>
            </ul>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow-md">
            <h4 class="font-semibold mb-4 text-gray-800">Standards</h4>
            <div class="flex flex-wrap gap-3">
              <span class="tag">REST</span>
              <span class="tag">GraphQL</span>
              <span class="tag">OAuth</span>
              <span class="tag">JWT</span>
              <span class="tag">Webhooks</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


<!-- TAG STYLE -->
<style>
.tag {
  background: #FFF7ED;
  padding: 6px 12px;
  border-radius: 999px;
  font-size: 13px;
}
</style>

<!-- JS -->
<script>
const tabs = document.querySelectorAll(".tab-btn");
const panels = document.querySelectorAll(".tab-panel");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {

    // reset tabs
    tabs.forEach(t => {
      t.classList.remove("bg-orange-600","text-white");
      t.classList.add("bg-orange-50","text-gray-700");
    });

    // active tab
    tab.classList.add("bg-orange-600","text-white");
    tab.classList.remove("bg-orange-50","text-gray-700");

    const target = tab.dataset.tab;

    // switch panels
    panels.forEach(panel => {
      if (panel.dataset.content === target) {
        panel.classList.remove("hidden");
      } else {
        panel.classList.add("hidden");
      }
    });

  });
});
</script>

<!-- CTA SECTION -->
<section class="relative overflow-hidden py-20 bg-gradient-to-r from-[#FC5124] via-orange-500 to-orange-400 text-white">

  <!-- BACKGROUND GLOW -->
  <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>

  <div class="relative max-w-5xl mx-auto px-6 text-center">

    <!-- HEADING -->
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 leading-tight">
      Have a Project in Mind?
    </h2>

    <!-- SUBTEXT -->
    <p class="text-white/80 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-10">
      Let’s build something amazing together. Share your idea and we’ll turn it into a powerful digital product.
    </p>

    <!-- BUTTONS -->
    <div class="flex flex-col sm:flex-row justify-center gap-4">

      <!-- PRIMARY BUTTON -->
      <a href="{{ route('frontend.contact') }}"
         class="group inline-flex items-center justify-center bg-white text-[#C2410C] px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

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