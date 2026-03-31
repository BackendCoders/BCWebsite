@extends('component.main')
@section('content')
{{--  --}}
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <!-- LEFT CONTENT -->
      <div data-aos="fade-right">

        <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
          About <span class="text-[#EA580C]">Backend Coders India</span>
        </h2>

        <p class="text-gray-600 mb-4 leading-relaxed">
          Backend Coders India started as a small development team in 2008 with a simple mission: help businesses leverage technology to grow.
        </p>

        <p class="text-gray-600 mb-4 leading-relaxed">
          Over 17+ years, we've evolved into a full-service software development company serving clients globally.
        </p>

        <p class="text-gray-600 mb-8 leading-relaxed">
          From enterprise ERP systems to startup MVPs, we empower businesses with scalable and reliable digital solutions.
        </p>

        <!-- Highlights -->
        <div class="grid grid-cols-2 gap-6 mb-8">

          <div data-aos="zoom-in" data-aos-delay="100"
               class="bg-white p-6 rounded-2xl shadow-md text-center hover:shadow-xl hover:-translate-y-1 transition duration-300">
            <h5 class="text-3xl font-bold text-[#EA580C]">17+</h5>
            <p class="text-sm text-gray-500 mt-1">Years Experience</p>
          </div>

          <div data-aos="zoom-in" data-aos-delay="200"
               class="bg-white p-6 rounded-2xl shadow-md text-center hover:shadow-xl hover:-translate-y-1 transition duration-300">
            <h5 class="text-3xl font-bold text-[#EA580C]">500+</h5>
            <p class="text-sm text-gray-500 mt-1">Projects Delivered</p>
          </div>

        </div>

        <!-- Button -->
        <a href="#"
           data-aos="fade-up"
           class="inline-flex items-center gap-2 bg-[#EA580C] text-white px-7 py-3 rounded-xl font-semibold shadow-lg hover:bg-[#D97706] hover:scale-105 transition duration-300">

          Learn More
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
               fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>

        </a>

      </div>

      <!-- RIGHT IMAGE -->
      <div class="relative" data-aos="fade-left">

        <!-- Decorative background -->
        <div class="absolute -top-6 -left-6 w-72 h-72 rounded-full blur-3xl opacity-40"></div>

        <img src="{{asset('assets/images/about.png')}}"
             alt="Development Workspace"
             class="relative w-full  hover:scale-105 transition duration-500">

      </div>

    </div>

  </div>
</section>
{{--  --}}


<!-- WHO WE ARE-->
<section id="who-we-are" class="bg-[#F9FAFB] px-6 py-24">

    <div class="max-w-6xl mx-auto text-center">

        <p 
        class="text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528] "
        data-aos="fade-up">
        Who We Are
        </p>

        <h2 
        class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl"
        data-aos="fade-up"
        data-aos-delay="100">
        Backend Coders India
        </h2>

        <p 
        class="mx-auto mt-6 max-w-3xl text-lg leading-relaxed text-gray-600"
        data-aos="fade-up"
        data-aos-delay="200">
        Backend Coders India is a boutique technology studio crafting high-performance
        web, mobile, and SaaS platforms for startups and enterprises that demand
        scalability, security, and modern digital experiences.
        </p>

        <!-- Services -->
        <div class="mt-12 grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-5">

            <span 
            data-aos="zoom-in"
            class="rounded-xl border border-gray-200 bg-[#ffe6d7] px-5 py-4 text-sm font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
            SaaS Platforms
            </span>

            <span 
            data-aos="zoom-in"
            data-aos-delay="100"
            class="rounded-xl border border-gray-200 bg-[#ffe6d7] px-5 py-4 text-sm font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
            ERP Systems
            </span>

            <span 
            data-aos="zoom-in"
            data-aos-delay="200"
            class="rounded-xl border border-gray-200 bg-[#ffe6d7] px-5 py-4 text-sm font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
            POS Systems
            </span>

            <span 
            data-aos="zoom-in"
            data-aos-delay="300"
            class="rounded-xl border border-gray-200 bg-[#ffe6d7] px-5 py-4 text-sm font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
            E-commerce
            </span>

            <span 
            data-aos="zoom-in"
            data-aos-delay="400"
            class="rounded-xl border border-gray-200 bg-[#ffe6d7] px-5 py-4 text-sm font-medium text-gray-700 transition hover:border-[#FD5528]  hover:text-[#FD5528]  hover:shadow-md">
            Custom Web Apps
            </span>

        </div>

    </div>

</section>
<!-- END WHO WE ARE -->
{{--  --}}
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Heading -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900">
        Our <span class="text-[#EA580C]">Mission & Vision</span>
      </h2>
      <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
        We focus on delivering scalable solutions and building long-term value for businesses worldwide.
      </p>
    </div>

    <!-- Cards -->
    <div class="grid md:grid-cols-2 gap-10">

      <!-- Mission Card -->
      <div data-aos="fade-right"
           class="relative bg-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

        <!-- Glow -->
        <div class="absolute -top-8 -right-8 w-56 h-56 bg-orange-100 rounded-full blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <!-- Icon -->
        <div class="w-14 h-14 flex items-center justify-center bg-[#EA580C] text-white rounded-xl mb-6 shadow-md">
          <img src="https://img.icons8.com/?size=100&id=lEDHtWo9fVxM&format=png&color=FFFFFF" alt="">
        </div>

        <p class="text-xs uppercase tracking-[0.4em] text-[#F44918]">
          Mission
        </p>

        <h3 class="mt-3 text-2xl md:text-3xl font-bold text-gray-900 group-hover:text-[#EA580C] transition">
          Transform Ideas Into Powerful Products
        </h3>

        <p class="mt-4 text-gray-600 leading-relaxed">
          To help companies transform ideas into powerful software products by providing world-class development services at accessible pricing.
        </p>

      </div>

      <!-- Vision Card -->
      <div data-aos="fade-left"
           class="relative bg-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">

        <!-- Glow -->
        <div class="absolute -bottom-8 -left-8 w-56 h-56 bg-orange-100 rounded-full blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <!-- Icon -->
        <div class="w-14 h-14 flex items-center justify-center bg-[#F44918] text-white rounded-xl mb-6 shadow-md">
          <img src="https://img.icons8.com/?size=100&id=cEcenq1dEbND&format=png&color=FFFFFF" alt="">
        </div>

        <p class="text-xs uppercase tracking-[0.4em] text-[#F44918]">
          Vision
        </p>

        <h3 class="mt-3 text-2xl md:text-3xl font-bold text-gray-900 group-hover:text-[#F44918] transition">
          Build the Future of Scalable Technology
        </h3>

        <p class="mt-4 text-gray-600 leading-relaxed">
          Our vision is to become a globally trusted technology partner, empowering businesses with scalable, reliable, and innovative digital solutions.
        </p>

      </div>

    </div>

  </div>
</section>
{{--  --}}

{{--  --}}
     <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Heading -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900">
        Our <span class="text-[#F44918]">Values</span>
      </h2>
      <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
        The principles that drive everything we do and shape how we build impactful technology.
      </p>
    </div>

    <!-- Cards -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Card 1 -->
      <div data-aos="fade-up" data-aos-delay="0"
           class="relative bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 group overflow-hidden">

        <div class="absolute -top-6 -right-6 w-40 h-40 bg-orange-100 rounded-full blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white text-[#F44918] p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=7761&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918] transition">
          Collaboration
        </h3>

        <p class="mt-3 text-gray-600 text-sm leading-relaxed">
          We work as one team with our clients, building and growing together through transparency.
        </p>
      </div>

      <!-- Card 2 -->
      <div data-aos="fade-up" data-aos-delay="100"
           class="relative bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 group overflow-hidden">

        <div class="absolute -bottom-6 -left-6 w-40 h-40 bg-orange-100 rounded-full blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white text-[#F44918] p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=7254&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918] transition">
          Innovation
        </h3>

        <p class="mt-3 text-gray-600 text-sm leading-relaxed">
          We constantly explore new technologies and creative approaches to stay ahead.
        </p>
      </div>

      <!-- Card 3 -->
      <div data-aos="fade-up" data-aos-delay="200"
           class="relative bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 group overflow-hidden">

        <div class="absolute -top-6 -left-6 w-40 h-40 bg-orange-100 rounded-full blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white text-[#F44918] p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=F3LB4iv8tzA5&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918] transition">
          Engineering Mindset
        </h3>

        <p class="mt-3 text-gray-600 text-sm leading-relaxed">
          Clean code, scalable architecture, and best practices are at our core.
        </p>
      </div>

      <!-- Card 4 -->
      <div data-aos="fade-up" data-aos-delay="300"
           class="relative bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 group overflow-hidden">

        <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-orange-100 rounded-full blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white text-[#F44918] p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=58586&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918] transition">
          Continuous Learning
        </h3>

        <p class="mt-3 text-gray-600 text-sm leading-relaxed">
          Our team constantly upgrades skills and stays aligned with the latest tech trends.
        </p>
      </div>

      <!-- Card 5 -->
      <div data-aos="fade-up" data-aos-delay="400"
           class="relative bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 group overflow-hidden">

        <div class="absolute -top-6 -right-6 w-40 h-40 bg-orange-100 rounded-full blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white text-[#F44918] p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=48420&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918] transition">
          Growth Driven
        </h3>

        <p class="mt-3 text-gray-600 text-sm leading-relaxed">
          We focus on delivering measurable growth and long-term value to businesses.
        </p>
      </div>

      <!-- Card 6 -->
      <div data-aos="fade-up" data-aos-delay="500"
           class="relative bg-white p-8 rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition duration-300 group overflow-hidden">

        <div class="absolute -bottom-6 -left-6 w-40 h-40 bg-orange-100 rounded-full blur-3xl opacity-40 group-hover:scale-110 transition"></div>

        <div class="w-12 h-12 flex items-center justify-center bg-white text-[#F44918] p-2 rounded-xl mb-5 shadow">
          <img src="https://img.icons8.com/?size=100&id=ILBgHeuGop5l&format=png&color=f44918" alt="">
        </div>

        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#F44918] transition">
          Reliability
        </h3>

        <p class="mt-3 text-gray-600 text-sm leading-relaxed">
          We build systems that are stable, secure, and ready for real-world challenges.
        </p>
      </div>

    </div>

  </div>
</section>


   

<!-- Collaboration Culture -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <!-- LEFT -->
    <div data-aos="fade-right">
      <p class="text-xs uppercase tracking-[0.4em] text-[#F44918]">
        Engineering Mindset
      </p>

      <h2 class="mt-4 text-3xl md:text-4xl font-extrabold text-gray-900">
        Engineering culture meets <span class="text-[#F44918]">product thinking</span>
      </h2>

      <p class="mt-4 text-gray-600 leading-relaxed">
        Pods blend architectural rigor, experimentation, and transparent reporting.
      </p>

      <ul class="mt-6 space-y-3 text-gray-600">
        <li class="flex items-start gap-2">✅ Daily syncs with product & QA</li>
        <li class="flex items-start gap-2">✅ Architecture reviews</li>
        <li class="flex items-start gap-2">✅ Cross-team learning</li>
        <li class="flex items-start gap-2">✅ Safe experiments</li>
      </ul>
    </div>

    <!-- RIGHT CARD -->
    <div data-aos="fade-left"
         class="relative bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition group overflow-hidden">

      <!-- Glow -->
      <div class="absolute -top-8 -right-8 w-60 h-60 bg-orange-100 blur-3xl opacity-40 group-hover:scale-110 transition"></div>

      <p class="text-xs uppercase tracking-[0.4em] text-[#F44918]">
        Collaboration Culture
      </p>

      <h3 class="mt-3 text-2xl font-bold text-gray-900 group-hover:text-[#F44918] transition">
        We ship in close partnership
      </h3>

      <p class="mt-4 text-gray-600 leading-relaxed">
        Engineers and product teams work together with transparency and shared ownership.
      </p>

      <div class="mt-6 bg-gray-50 p-5 rounded-xl border border-gray-200">
        <p class="text-sm text-gray-600">
          Co-planning, architecture guilds, and shared accountability for metrics.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- OUR JOURNEY SECTION -->

<section class="bg-white text-black py-16 sm:py-20">
  <div class="max-w-5xl mx-auto px-4 text-center mb-10 sm:mb-16">
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#FD5528]">
      Our Journey
    </h1>
  </div>

  <div class="relative max-w-4xl mx-auto px-4">

    <!-- Vertical Line -->
    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-black h-full hidden md:block"></div>

    <!-- Timeline Items -->
    <div class="space-y-12 sm:space-y-16">

      <!-- ITEM -->
      <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700 flex flex-col md:flex-row items-center justify-between">
        
        <div class="w-full md:w-1/2 md:pr-8 text-center md:text-right">
          <div class="bg-[#FD5528] text-white p-4 sm:p-5 rounded-xl shadow-lg inline-block">
            <time class="font-bold text-base sm:text-lg block">2008</time>
            <p class="text-sm sm:text-base">Backend Coders India began its journey with a passion for building innovative digital solutions.</p>
          </div>
        </div>

        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-[#FD5528] rounded-full border-4 border-black  hidden md:block z-10 my-4 md:my-0"></div>

        <div class="w-full md:w-1/2 md:pl-8"></div>
      </div>

      <!-- ITEM -->
      <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700 flex flex-col md:flex-row items-center justify-between">
        
        <div class="w-full md:w-1/2 md:pr-8"></div>

        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-[#FD5528] rounded-full border-4 border-black  hidden md:block z-10 my-4 md:my-0"></div>

        <div class="w-full md:w-1/2 md:pl-8 text-center md:text-left">
          <div class="bg-[#FD5528] text-white p-4 sm:p-5 rounded-xl shadow-lg inline-block">
            <time class="font-bold text-base sm:text-lg block">2012</time>
            <p class="text-sm sm:text-base">Successfully delivered our first enterprise-grade software.</p>
          </div>
        </div>
      </div>

      <!-- ITEM -->
      <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700 flex flex-col md:flex-row items-center justify-between">
        
        <div class="w-full md:w-1/2 md:pr-8 text-center md:text-right">
          <div class="bg-[#FD5528] text-white p-4 sm:p-5 rounded-xl shadow-lg inline-block">
            <time class="font-bold text-base sm:text-lg block">2016</time>
            <p class="text-sm sm:text-base">Developed ERP and POS systems for multiple industries.</p>
          </div>
        </div>

        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-[#FD5528] rounded-full border-4 border-black  hidden md:block z-10 my-4 md:my-0"></div>

        <div class="w-full md:w-1/2 md:pl-8"></div>
      </div>

      <!-- ITEM -->
      <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700 flex flex-col md:flex-row items-center justify-between">
        
        <div class="w-full md:w-1/2 md:pr-8"></div>

        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-[#FD5528] rounded-full border-4 border-black  hidden md:block z-10 my-4 md:my-0"></div>

        <div class="w-full md:w-1/2 md:pl-8 text-center md:text-left">
          <div class="bg-[#FD5528] text-white p-4 sm:p-5 rounded-xl shadow-lg inline-block">
            <time class="font-bold text-base sm:text-lg block">2020</time>
            <p class="text-sm sm:text-base">Expanded into web, mobile, and SaaS platforms.</p>
          </div>
        </div>
      </div>

      <!-- ITEM -->
      <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700 flex flex-col md:flex-row items-center justify-between">
        
        <div class="w-full md:w-1/2 md:pr-8 text-center md:text-right">
          <div class="bg-[#FD5528] text-white p-4 sm:p-5 rounded-xl shadow-lg inline-block">
            <time class="font-bold text-base sm:text-lg block">2024</time>
            <p class="text-sm sm:text-base">Partnered with global clients delivering scalable solutions.</p>
          </div>
        </div>

        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-[#FD5528] rounded-full border-4 border-black  hidden md:block z-10 my-4 md:my-0"></div>

        <div class="w-full md:w-1/2 md:pl-8"></div>
      </div>

      <!-- ITEM -->
      <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700 flex flex-col md:flex-row items-center justify-between">
        
        <div class="w-full md:w-1/2 md:pr-8"></div>

        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-[#FD5528] rounded-full border-4 border-black  hidden md:block z-10 my-4 md:my-0"></div>

        <div class="w-full md:w-1/2 md:pl-8 text-center md:text-left">
          <div class="bg-[#FD5528] text-white p-4 sm:p-5 rounded-xl shadow-lg inline-block">
            <time class="font-bold text-base sm:text-lg block">2026</time>
            <p class="text-sm sm:text-base">Driving innovation globally with cutting-edge technology.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- END OUR JOURNEY SECTION -->
<section class="py-20 bg-[#F44918] text-white relative overflow-hidden">

  <!-- Glow -->
  <div class="absolute -top-20 -left-20 w-96 h-96 bg-white/20 rounded-full blur-3xl"></div>

  <div class="max-w-7xl mx-auto px-6 text-center relative">

    <h2 class="text-3xl md:text-5xl font-extrabold mb-4">
      Let’s Build Something Amazing
    </h2>

    <p class="text-white/90 max-w-2xl mx-auto mb-8">
      Share your idea, architecture, or roadmap — we’ll help you scale it.
    </p>

    <div class="flex flex-wrap justify-center gap-4">

      <a href="#"
         class="bg-white text-[#F44918] px-6 py-3 rounded-xl font-semibold shadow-lg hover:scale-105 transition">
        Schedule a Call
      </a>

      <a href="#"
         class="border border-white px-6 py-3 rounded-xl font-semibold hover:bg-white/10 transition">
        View Services
      </a>

    </div>

  </div>
</section>
{{--  --}}

<!-- why choose us -->
<section class="bg-[#F9FAFB] text-black py-20">
  <div class="max-w-6xl mx-auto px-6 text-center">

    <!-- Heading -->
    <h2 
      data-aos="fade-up"
      class="text-4xl md:text-5xl font-heading text-[#FD5528] mb-4">
      Why Choose Us
    </h2>

    <p 
      data-aos="fade-up"
      data-aos-delay="100"
      class="text-gray-400 max-w-2xl mx-auto mb-12">
      Built for long-term partnerships, we deliver scalable, reliable, and future-ready solutions.
    </p>

    <!-- Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Card 1 -->
      <div data-aos="fade-up" data-aos-delay="100"
        class="group bg-white border border-gray-300 p-6 rounded-2xl hover:border-[#FD5528] hover:-translate-y-2 transition duration-300">
        <div class="flex justify-center mb-4">
          <img src="https://img.icons8.com/?size=100&id=DCkAZ79sIYhT&format=png&color=FD5528" class="w-12 h-12">
        </div>
        <h3 class="font-heading text-xl mb-2">17+ Years Experience</h3>
        <p class="text-gray-400 text-sm">
          Delivering reliable and high-quality software solutions across industries.
        </p>
      </div>

      <!-- Card 2 -->
      <div data-aos="fade-up" data-aos-delay="200"
        class="group bg-white border border-gray-300 p-6 rounded-2xl hover:border-[#FD5528] hover:-translate-y-2 transition duration-300">
        <div class="flex justify-center mb-4">
          <img src="https://img.icons8.com/?size=100&id=124222&format=png&color=FD5528" class="w-12 h-12">
        </div>
        <h3 class="font-heading text-xl mb-2">Dedicated Teams</h3>
        <p class="text-gray-400 text-sm">
          Expert developers assigned exclusively to your project for focused execution.
        </p>
      </div>

      <!-- Card 3 -->
      <div data-aos="fade-up" data-aos-delay="300"
        class="group bg-white border border-gray-300 p-6 rounded-2xl hover:border-[#FD5528] hover:-translate-y-2 transition duration-300">
        <div class="flex justify-center mb-4">
          <img src="https://img.icons8.com/?size=100&id=5TJlel7-79RU&format=png&color=FD5528" class="w-12 h-12">
        </div>
        <h3 class="font-heading text-xl mb-2">Scalable Architecture</h3>
        <p class="text-gray-400 text-sm">
          Future-ready systems designed to grow seamlessly with your business.
        </p>
      </div>

      <!-- Card 4 -->
      <div data-aos="fade-up" data-aos-delay="400"
        class="group bg-white border border-gray-300 p-6 rounded-2xl hover:border-[#FD5528] hover:-translate-y-2 transition duration-300">
        <div class="flex justify-center mb-4">
          <img src="https://img.icons8.com/?size=100&id=68443&format=png&color=FD5528" class="w-12 h-12">
        </div>
        <h3 class="font-heading text-xl mb-2">Agile & Transparent</h3>
        <p class="text-gray-400 text-sm">
          Clear communication and agile workflows ensure faster and better results.
        </p>
      </div>

      <!-- Card 5 -->
      <div data-aos="fade-up" data-aos-delay="500"
        class="group bg-white border border-gray-300 p-6 rounded-2xl hover:border-[#FD5528] hover:-translate-y-2 transition duration-300">
        <div class="flex justify-center mb-4">
          <img src="https://img.icons8.com/?size=100&id=117533&format=png&color=FD5528" class="w-12 h-12">
        </div>
        <h3 class="font-heading text-xl mb-2">Startup-Friendly Pricing</h3>
        <p class="text-gray-400 text-sm">
          Flexible and affordable pricing models tailored for growing startups.
        </p>
      </div>

      <!-- Card 6 -->
      <div data-aos="fade-up" data-aos-delay="600"
        class="group bg-white border border-gray-300 p-6 rounded-2xl hover:border-[#FD5528] hover:-translate-y-2 transition duration-300">
        <div class="flex justify-center mb-4">
          <img src="https://img.icons8.com/?size=100&id=neBRkBaejCVJ&format=png&color=FD5528" class="w-12 h-12">
        </div>
        <h3 class="font-heading text-xl mb-2">Long-Term Support</h3>
        <p class="text-gray-400 text-sm">
          Continuous maintenance and technical support to keep your systems running smoothly.
        </p>
      </div>

    </div>

  </div>
</section>
<!-- END WHY CHOOSE US -->




  @endsection