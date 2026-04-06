@extends('component.main')
@section('content')
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
  <div class="relative z-10 max-w-4xl px-6">

  

    <!-- HEADING -->
    <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
     About Backend 
      <span class="text-orange-600">Coders India</span>
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
      We are a passionate team of developers and designers helping businesses 
      transform ideas into scalable, high-performance digital products.
    </p>

 

  </div>

</section>
<!-- end hero section  -->




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

<!-- our story -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <!-- IMAGE -->
    <div class="relative">
      <img 
        src="{{asset('assets/images/about.png')}}"
        class="rounded-2xl  w-full h-full object-cover"
      />

      <!-- FLOATING CARD -->
      <!-- <div class="absolute bottom-6 left-6 bg-white p-4 rounded-xl shadow-lg">
        <p class="text-sm text-gray-500">Since</p>
        <h4 class="text-xl font-bold text-[#FD5528]">2023</h4>
      </div> -->
    </div>

    <!-- CONTENT -->
    <div>

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

         Our Story
    </span>
      <!-- BADGE -->
      <!-- <span class="inline-block text-xs font-semibold uppercase tracking-[0.35em] 
        text-[#FD5528] px-5 py-2 rounded-full bg-orange-50">
        Our Story
      </span> -->

      <!-- HEADING -->
      <h2 class="mt-6 text-3xl md:text-4xl font-bold text-gray-900 leading-snug">
        From Idea to Innovation —  
        <span class="text-[#FD5528]">Our Journey</span>
      </h2>

      <!-- TEXT -->
      <p class="mt-6 text-gray-600 leading-relaxed">
        We started with a simple goal — to help businesses turn their ideas into powerful digital solutions. 
        What began as a small team of passionate developers has grown into a full-scale software development company 
        delivering high-performance web applications and SaaS platforms.
      </p>

      <p class="mt-4 text-gray-600 leading-relaxed">
        Over the years, we’ve worked with startups and enterprises across industries, building scalable, reliable, 
        and user-focused products. Our commitment to quality, innovation, and client success continues to drive everything we do.
      </p>

      <!-- HIGHLIGHTS -->
      <div class="mt-8 grid grid-cols-2 gap-6">

        <div class="bg-[#F9FAFB] p-6 rounded-xl text-center">
          <h3 class="text-2xl font-bold text-[#FD5528]">50+</h3>
          <p class="text-sm text-gray-500">Projects Delivered</p>
        </div>

        <div class="bg-[#F9FAFB] p-6 rounded-xl text-center">
          <h3 class="text-2xl font-bold text-[#FD5528]">20+</h3>
          <p class="text-sm text-gray-500">Happy Clients</p>
        </div>

        <div class="bg-[#F9FAFB] p-6 rounded-xl text-center">
          <h3 class="text-2xl font-bold text-[#FD5528]">5+</h3>
          <p class="text-sm text-gray-500">Countries Served</p>
        </div>

        <div class="bg-[#F9FAFB] p-6 rounded-xl text-center">
          <h3 class="text-2xl font-bold text-[#FD5528]">100%</h3>
          <p class="text-sm text-gray-500">Client Satisfaction</p>
        </div>

      </div>

    </div>

  </div>
</section>
<!-- end our story -->


<!-- mission & vision -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Heading -->
    <div class="text-center mb-16" data-aos="fade-up">
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

         Mission & Vision

    </p>
      <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 py-4">
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
<!-- end mission & vision -->


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
        Predictable <span class="text-[#FD5528]">Delivery</span>
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


   <!-- STATS SECTION -->
<section id="stats-section-pro" class="relative py-12 bg-gradient-to-br from-[#FD5528] to-orange-500 text-white overflow-hidden">

  <!-- BACKGROUND EFFECT -->
  <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white,_transparent_70%)]"></div>

  <div class="relative max-w-7xl mx-auto px-6 text-center">

    <!-- HEADER -->
    <h2 class="text-3xl md:text-5xl font-bold tracking-tight">
      Our Impact 
    </h2>

    <p class="mt-4 text-white/80 max-w-2xl mx-auto text-sm md:text-base">
      We deliver scalable solutions and build long-term partnerships across industries worldwide.
    </p>

    <!-- STATS GRID -->
    <div class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-10">

      <!-- CARD -->
      <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 hover:scale-105 transition duration-300 shadow-lg">
        <h3 class="counter text-4xl md:text-5xl font-bold" data-target="50">0</h3>
        <p class="mt-2 text-white/80 text-sm">Projects Delivered</p>
      </div>

      <!-- CARD -->
      <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 hover:scale-105 transition duration-300 shadow-lg">
        <h3 class="counter text-4xl md:text-5xl font-bold" data-target="40">0</h3>
        <p class="mt-2 text-white/80 text-sm">Happy Clients</p>
      </div>

      <!-- CARD -->
      <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 hover:scale-105 transition duration-300 shadow-lg">
        <h3 class="counter text-4xl md:text-5xl font-bold" data-target="15">0</h3>
        <p class="mt-2 text-white/80 text-sm">Countries Served</p>
      </div>

      <!-- CARD -->
      <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 hover:scale-105 transition duration-300 shadow-lg">
        <h3 class="counter text-4xl md:text-5xl font-bold" data-target="100">0</h3>
        <p class="mt-2 text-white/80 text-sm">Client Satisfaction %</p>
      </div>

    </div>

  </div>

</section>





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
      <a href="#contact"
         class="group inline-flex items-center justify-center bg-white text-[#FC5124] px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

        Contact Us

        <!-- ARROW -->
        <span class="ml-2 transition group-hover:translate-x-1">→</span>
      </a>

      <!-- WHATSAPP BUTTON -->
      <a href="#contact"
         class="group inline-flex items-center justify-center border border-white/40 px-6 py-3 rounded-xl font-semibold backdrop-blur-md hover:bg-white/10 hover:scale-105 transition duration-300">

       
        Let's Chat on WhatsApp
      </a>

    </div>

  </div>

</section>






  @endsection