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
  <div class="relative z-10 max-w-9xl px-6">

  

    <!-- HEADING -->
<h1 class="mt-6 text-3xl xs:text-4xl sm:text-5xl md:text-5xl lg:text-6xl xl:text-7xl font-black leading-[1.1] tracking-tight text-white max-w-6xl mx-auto whitespace-nowrap">

    About Backend
    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-orange-500">
        Coders India
    </span>

</h1>

    <!-- SUBTEXT -->
    <p class="mt-4 sm:mt-4 lg:mt-4 text-gray-100 text-xs xs:text-sm sm:text-base md:text-lg lg:text-md max-w-7xl mx-auto leading-relaxed mb-2">
    Backend Coders India is a best software company in Kanpur helping startups, small businesses, and growing brands with website development, custom software, SEO, and digital marketing built for growth.

We deliver SEO-ready websites, ecommerce solutions, ERP and CRM systems, mobile apps, and scalable digital products that help businesses grow with confidence.
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
      class="mx-auto mt-4 sm:mt-6 max-w-6xl 
      text-xs xs:text-sm sm:text-base md:text-lg 
      leading-relaxed text-gray-600"
      data-aos="fade-up"
      data-aos-delay="200">
Backend Coders India is a modern web development agency and digital marketing company in Kanpur helping startups, founders, ecommerce brands, and growing businesses build powerful digital foundations. We create scalable websites, custom web applications, ERP solutions, SEO strategies, and performance-driven marketing systems designed to improve visibility, customer engagement, and business growth. By combining technology, design, and business strategy, our team delivers practical, conversion-focused digital solutions that are aligned with long-term goals, user experience, and real business results.
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
       What started as a vision to build meaningful digital products has grown into a result-driven IT solutions company serving clients across industries. Backend Coders India has evolved by staying focused on what businesses actually need: reliable execution, clear communication, affordable international quality IT services, and systems that support long-term growth.
      </p>

      <p class="mt-4 text-gray-600 leading-relaxed">
      Over time, we have expanded our expertise across website development services in Kanpur, scalable software solutions, UI UX focused web development, cloud-based software development, custom business software solutions, and SEO and digital marketing services. Today, we help businesses launch faster, operate smarter, and compete more effectively in digital markets.
      </p>

      <!-- HIGHLIGHTS -->
      <div class="mt-8 grid grid-cols-2 gap-6">

        <div class="bg-[#F9FAFB] p-6 rounded-xl text-center">
          <h3 class="text-2xl font-bold text-[#FD5528]">50+</h3>
          <p class="text-sm text-gray-500">Projects Delivered</p>
        </div>

        <div class="bg-[#F9FAFB] p-6 rounded-xl text-center">
          <h3 class="text-2xl font-bold text-[#FD5528]">40+</h3>
          <p class="text-sm text-gray-500">Happy Clients</p>
        </div>

        <div class="bg-[#F9FAFB] p-6 rounded-xl text-center">
          <h3 class="text-2xl font-bold text-[#FD5528]">3+</h3>
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
         Our mission is to help businesses transform ideas into powerful digital products and growth systems through smart technology, creative execution, and business-driven strategy.
          We aim to be the software company in Kanpur that businesses trust not only for development, but for long-term digital growth. From SEO-ready websites to SaaS platforms, mobile applications, and full-stack business systems, our mission is to build solutions that create measurable value.

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
            Our vision is to become a trusted technology and digital growth partner for businesses in India and international markets by delivering scalable, user-friendly, and performance-driven solutions.
            We want Backend Coders India to be known as a startup-friendly IT company and a globally capable local partner that helps businesses innovate, modernize operations, and grow online with confidence.

        </p>

      </div>

    </div>

  </div>
</section>
<!-- end mission & vision -->

<!-- WHY CHOOSE BACKEND CODERS INDIA -->
<section class="relative overflow-hidden bg-white py-16 lg:py-14">

    <!-- Background Glow -->
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-72 h-72 bg-orange-100 blur-3xl rounded-full opacity-70"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-50 blur-3xl rounded-full opacity-75"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="max-w-3xl mx-auto text-center">

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

        Why Choose us
    </span>
            <!-- <span class="inline-flex items-center justify-center gap-2 px-5 py-2 rounded-full bg-orange-50 border border-orange-100 text-orange-600 text-sm font-semibold shadow-sm">
                Why Choose Backend Coders India
            </span> -->

            
            <h2 class="mt-6 text-[38px] sm:text-[48px] lg:text-[60px] font-black leading-[1.05] tracking-tight text-[#0f172a]">
                Why Choose
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">
                    Backend Coders India
                </span>
            </h2>

            <p class="mt-6 text-gray-600 text-base sm:text-lg leading-8">
                Businesses choose Backend Coders India because we understand that digital success is not just about launching a website or developing an app. It is about building something that helps a company grow, convert, and operate better.
            </p>

        </div>

       <!-- WHY CHOOSE POINTS -->
<div class="mt-16 grid lg:grid-cols-2 gap-x-14 gap-y-8">

    <!-- ITEM -->
    <div class="flex items-start gap-5">

        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center flex-shrink-0">

            <img src="https://img.icons8.com/?size=100&id=18902&format=png&color=ea580c"
                 class="w-8 h-8"
                 alt="">

        </div>

        <div>

            <h3 class="text-2xl font-bold text-[#0f172a]">
                Business-First Thinking
            </h3>

            <p class="mt-3 text-gray-600 leading-8 text-sm sm:text-base">

                We do not just write code. We solve business problems with practical digital solutions that support sales, operations, visibility, and customer experience.

            </p>

        </div>

    </div>

    <!-- ITEM -->
    <div class="flex items-start gap-5">

        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center flex-shrink-0">

            <img src="https://img.icons8.com/?size=100&id=0wUGo16jNLh8&format=png&color=ea580c"
                 class="w-8 h-8"
                 alt="">

        </div>

        <div>

            <h3 class="text-2xl font-bold text-[#0f172a]">
                SEO-Ready Development
            </h3>

            <p class="mt-3 text-gray-600 leading-8 text-sm sm:text-base">

                As an SEO-ready website company, we build websites with structure, speed, responsiveness, and search visibility in mind from day one.

            </p>

        </div>

    </div>

    <!-- ITEM -->
    <div class="flex items-start gap-5">

        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center flex-shrink-0">

            <img src="https://img.icons8.com/?size=100&id=AV-5aAJqrST6&format=png&color=ea580c"
                 class="w-8 h-8"
                 alt="">

        </div>

        <div>

            <h3 class="text-2xl font-bold text-[#0f172a]">
                Affordable International Quality
            </h3>

            <p class="mt-3 text-gray-600 leading-8 text-sm sm:text-base">

                We deliver affordable international quality IT services without compromising on design standards, technical quality, or support.

            </p>

        </div>

    </div>

    <!-- ITEM -->
    <div class="flex items-start gap-5">

        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center flex-shrink-0">

            <img src="https://img.icons8.com/?size=100&id=IUTNvue1VdDB&format=png&color=ea580c"
                 class="w-8 h-8"
                 alt="">

        </div>

        <div>

            <h3 class="text-2xl font-bold text-[#0f172a]">
                Startup-Friendly Execution
            </h3>

            <p class="mt-3 text-gray-600 leading-8 text-sm sm:text-base">

                We are a startup-friendly IT company that understands speed, flexibility, budget sensitivity, and MVP-focused delivery.

            </p>

        </div>

    </div>

    <!-- ITEM -->
    <div class="flex items-start gap-5">

        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center flex-shrink-0">

            <img src="https://img.icons8.com/?size=100&id=11218&format=png&color=ea580c"
                 class="w-8 h-8"
                 alt="">

        </div>

        <div>

            <h3 class="text-2xl font-bold text-[#0f172a]">
                Same-Day Support Mindset
            </h3>

            <p class="mt-3 text-gray-600 leading-8 text-sm sm:text-base">

                We value fast communication and dependable support so our clients always feel informed and supported.

            </p>

        </div>

    </div>

    <!-- ITEM -->
    <div class="flex items-start gap-5">

        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center flex-shrink-0">

            <img src="https://img.icons8.com/?size=100&id=4NqPX7BpGawp&format=png&color=ea580c"
                 class="w-8 h-8"
                 alt="">

        </div>

        <div>

            <h3 class="text-2xl font-bold text-[#0f172a]">
                Full-Service Capability
            </h3>

            <p class="mt-3 text-gray-600 leading-8 text-sm sm:text-base">

                From SEO and digital marketing services to custom software development, we provide complete execution across the full digital growth journey.

            </p>

        </div>

    </div>

</div>

    </div>

</section>



<!-- OUR CORE SERVICES -->
<section class="relative overflow-hidden bg-white py-16 lg:py-14">

    <!-- Background Glow -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-orange-100 blur-3xl rounded-full"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-orange-50 blur-3xl rounded-full"></div>

    <div class="relative max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

        <!-- SECTION HEADER -->
        <div class="max-w-3xl mx-auto text-center">

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

        Our Core Services
    </span>

            

            <h2 class="mt-6 text-[34px] sm:text-[48px] lg:text-[60px] font-black leading-[1.05] tracking-tight text-[#0f172a]">

                Digital Solutions Built
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">
                    For Business Growth
                </span>

            </h2>

            <p class="mt-6 text-gray-600 text-base sm:text-lg leading-8">

              Backend Coders India provides a broad range of digital and technology solutions for businesses that want growth, efficiency, and stronger online performance.

            </p>

        </div>

        <!-- SERVICES GRID -->
        <div class="mt-8 grid lg:grid-cols-2 gap-8">

            <!-- DIGITAL MARKETING -->
            <div class="rounded-[32px] border border-gray-100 bg-white p-8 sm:p-10 shadow-[0_10px_40px_rgba(15,23,42,0.06)]">

             <div class="flex items-center gap-5">

    <div class="w-16 h-16 rounded-2xl bg-orange-50 flex items-center justify-center flex-shrink-0">

        <img 
            src="https://img.icons8.com/?size=100&id=JvGW4sbJLEKN&format=png&color=ea580c" 
            class="w-9 h-9" 
            alt=""
        >

    </div>

    <h3 class="text-2xl sm:text-3xl font-black text-[#0f172a] leading-tight">
        Digital Marketing Services
    </h3>

</div>

                <p class="mt-4 text-gray-600 leading-8">

                    Performance-driven marketing solutions designed to improve rankings, visibility, lead generation, and brand growth.

                </p>

               <div class="mt-8 grid sm:grid-cols-2 gap-4">

    <a href="{{ url('/page/seo-services') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            SEO services in Kanpur
        </span>

    </a>

    <a href="{{ url('/page/seo-services') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            Local SEO
        </span>

    </a>

    <a href="{{ url('/service') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            Social Media Management
        </span>

    </a>

    <a href="{{ url('/service') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            Google Ads & PPC
        </span>

    </a>

    <a href="{{ url('/service') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            Meta Ads
        </span>

    </a>

    <a href="{{ url('/service') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            Content Marketing
        </span>

    </a>

</div>

            </div>

            <!-- SOFTWARE DEVELOPMENT -->
            <div class="rounded-[32px] border border-gray-100 bg-white p-8 sm:p-10 shadow-[0_10px_40px_rgba(15,23,42,0.06)]">

            <div class="flex items-center gap-5">

    <div class="w-16 h-16 rounded-2xl bg-orange-50 flex items-center justify-center flex-shrink-0">

        <img 
            src="https://img.icons8.com/?size=100&id=W2e4CgbFTSVY&format=png&color=ea580c" 
            class="w-9 h-9" 
            alt=""
        >

    </div>

    <h3 class="text-2xl sm:text-3xl font-black text-[#0f172a] leading-tight">
        Software Development Services
    </h3>

</div>
               

                <p class="mt-4 text-gray-600 leading-8">

                    Scalable software systems and modern applications built to improve operations, customer experience, and business efficiency.

                </p>

            <div class="mt-8 grid sm:grid-cols-2 gap-4">

    <a href="{{ url('/page/custom-web-applications') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            Custom web application development

        </span>

    </a>

    <a href="{{ url('/page/website-design-development') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            Website design and development
        </span>

    </a>

    <a href="{{ url('/service') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            SaaS Development
        </span>

    </a>

    <a href="{{ url('/service') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            ERP & POS Software
        </span>

    </a>

    <a href="{{ url('/page/ecommerce-development') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            Ecommerce website development
        </span>

    </a>

    <a href="{{ url('/page/mobile-app-development') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            Mobile app development
        </span>

    </a>

    <a href="{{ url('/service') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
            API Development
        </span>

    </a>

    <a href="{{ url('/page/startup-mvp-development') }}"
       class="flex items-center gap-3 group">

        <img src="https://img.icons8.com/?size=100&id=W9RS5YNuHAdG&format=png&color=ea580c"
             class="w-5 h-5"
             alt="">

        <span class="text-gray-700 group-hover:text-orange-600 transition font-medium">
          Startup MVP development
        </span>

    </a>

</div>

            </div>

        </div>

    </div>

</section>



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
       Our Development Process
      </h2>
      <p class="text-gray-500 mt-3 max-w-xl mx-auto">
       We follow a structured and transparent process that keeps projects efficient, scalable, and aligned with business goals.
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
             We start by understanding your business model, users, goals, pain points, competitors, and opportunities.
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
              UI / UX Planning
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              We create user-focused structures and interfaces that improve usability, engagement, and conversion performance.
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
              Our team builds high-performance websites, software systems, and applications using modern full-stack development practices.
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
              Every solution is checked for performance, usability, responsiveness, and reliability before launch.
            </p>
          </div>
        </div>

        <!-- STEP -->
        <div class="flex items-start gap-4 lg:flex-col lg:items-center text-left lg:text-center group">
          <div class="min-w-[48px] h-12 flex items-center justify-center rounded-full border-2 border-[#FD5528] bg-white text-[#FD5528] font-semibold transition  ">
            05
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 group-hover:text-[#FD5528]">
              Deployment
            </h3>
            <p class="text-sm text-gray-500 mt-1">
              We launch cleanly, carefully, and with the right technical setup to reduce friction and downtime.
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
             We continue to support clients after launch with improvements, updates, and same-day communication whenever possible.
            </p>
          </div>
        </div>

      </div>

    </div>

  </div>

</section>
<!-- pr -->


   <!-- STATS SECTION -->
<section id="stats-section-pro" class="relative py-12 bg-gradient-to-br from-[#FD5528] to-[#FD5528] text-white overflow-hidden">

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
        <h3 class="counter text-4xl md:text-5xl font-bold" data-target="3">0</h3>
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
       Technologies We Work With
      </h2>

      <p class="mt-4 text-sm sm:text-base text-gray-600" data-aos="fade-up" data-aos-delay="200">
       We use modern tools and frameworks to build secure, scalable, and future-ready digital products.
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



<!-- {{-- faq --}} -->

<section class="relative overflow-hidden bg-gradient-to-br from-white via-slate-50 to-slate-100 py-16 sm:py-20 lg:py-24 px-4 sm:px-6">

  <div class="max-w-6xl lg:max-w-4xl mx-auto relative z-10">

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
    <div class="grid lg:grid-cols-1 gap-10 lg:gap-16 items-center">

      <!-- LEFT IMAGE
      <div class="order-1 lg:order-2 relative rounded-[32px] bg-gradient-to-br from-[#FFEDD5] via-white to-[#FEE2E2] p-6 shadow-[0_25px_60px_rgba(253,85,40,0.25)]">
        <div class="absolute inset-x-4 top-4 h-2 rounded-full bg-gradient-to-r from-[#FD5528]/60 to-orange-200/70 blur-3xl opacity-70"></div>
        <img 
          src="{{asset('assets/images/faq.png')}}"
          alt="FAQ Illustration"
          class="rounded-2xl shadow-2xl w-full h-[360px] object-cover relative z-10"
        >
      </div> -->

      <!-- FAQ LIST -->
      <div class="order-2 lg:order-1 space-y-4">

        <div class="max-w-6xl mx-auto px-4 grid gap-6 lg:grid-cols-1">

    <!-- COLUMN -->
    <div class="space-y-4">

      <!-- ITEM -->
      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-1" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
             What does Backend Coders India do?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-1" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
   
Backend Coders India provides software development, website development, SEO, Google Ads, Meta Ads, social media management, content marketing, ecommerce development, mobile app development, API development, and startup MVP services.

        </div>
      </div>

      <!-- ITEM -->
      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-2" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
                  Is Backend Coders India a software company in Kanpur?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-2" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
     
Yes. Backend Coders India is a software company in Kanpur offering custom software development, web applications, ERP and POS software, SaaS development, and digital growth services.

        </div>
      </div>

    </div>

    <!-- COLUMN -->
    <div class="space-y-4">

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-3" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
               Do you only work with Kanpur businesses?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-3" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
      
No. While we are a trusted IT company in Kanpur, we also work with businesses across India and selected international markets.

        </div>
      </div>

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-4" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
                Are your websites SEO-friendly?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-4" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">
    
Yes. We position ourselves as an SEO ready website company and build websites with responsive layouts, clean structure, fast-loading pages, and search-friendly foundations.

        </div>
      </div>

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-4" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
                Do you work with startups?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-4" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">

Yes. We are a startup-friendly IT company and support founders with MVP development, SaaS products, websites, digital marketing, and growth-focused strategy.

        </div>
      </div>

      <div class="faq-item bg-gray-50 p-5 rounded-2xl transition shadow-md hover:shadow-lg">
        <button data-faq-trigger type="button" aria-expanded="false" aria-controls="faq-answer-4" class="flex w-full items-center justify-between gap-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#FD5528]/60 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
          <span class="text-left text-base font-medium tracking-tight text-slate-900">
               Why should I choose Backend Coders India?
          </span>
          <span class="faq-icon inline-flex h-10 w-10 items-center justify-center text-[#FD5528]  transition duration-300">
            <span class="faq-icon-text text-3xl leading-none">+</span>
          </span>
        </button>
        <div id="faq-answer-4" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 text-sm text-gray-600 mt-3" aria-hidden="true">

Businesses choose us for business-focused development, affordable international quality IT services, same-day support mindset, SEO-aware execution, and scalable digital solutions.

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

@verbatim
<!-- FAQ SCHEMA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [

    {
      "@type": "Question",
      "name": "What does Backend Coders India do?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Backend Coders India provides software development, website development, SEO, Google Ads, Meta Ads, social media management, content marketing, ecommerce development, mobile app development, API development, and startup MVP services."
      }
    },

    {
      "@type": "Question",
      "name": "Is Backend Coders India a software company in Kanpur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Backend Coders India is a software company in Kanpur offering custom software development, web applications, ERP and POS software, SaaS development, and digital growth services."
      }
    },

    {
      "@type": "Question",
      "name": "Do you only work with Kanpur businesses?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. While we are a trusted IT company in Kanpur, we also work with businesses across India and selected international markets."
      }
    },

    {
      "@type": "Question",
      "name": "Are your websites SEO-friendly?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We position ourselves as an SEO ready website company and build websites with responsive layouts, clean structure, fast-loading pages, and search-friendly foundations."
      }
    },

    {
      "@type": "Question",
      "name": "Do you work with startups?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We are a startup-friendly IT company and support founders with MVP development, SaaS products, websites, digital marketing, and growth-focused strategy."
      }
    },

    {
      "@type": "Question",
      "name": "Why should I choose Backend Coders India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Businesses choose us for business-focused development, affordable international quality IT services, same-day support mindset, SEO-aware execution, and scalable digital solutions."
      }
    }

  ]
}
</script>
@endverbatim


<!-- CTA SECTION -->
<section class="relative overflow-hidden py-20 bg-gradient-to-r from-[#FC5124] via-orange-500 to-orange-400 text-white">

  <!-- BACKGROUND GLOW -->
  <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]"></div>

  <div class="relative max-w-5xl mx-auto px-6 text-center">

    <!-- HEADING -->
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 leading-tight">
      Let’s Build What’s Next
    </h2>

    <!-- SUBTEXT -->
<div class="max-w-4xl mx-auto space-y-5">

    <p class="text-white/80 text-sm sm:text-base md:text-lg leading-7 sm:leading-8 text-center">

        Need a trusted software company, a results-driven web development agency, or a digital marketing partner focused on real business growth?  Backend Coders India helps startups and growing businesses with websites, custom software, SEO, ecommerce platforms, and scalable digital solutions built for growth and performance.

    </p>

    <p class="text-white/80 text-sm sm:text-base md:text-lg leading-7 sm:leading-8 text-center ">

        Get in touch with our team today and let’s build something that moves your business forward with confidence.

    </p>

</div>

    <!-- BUTTONS -->
    <div class="flex flex-col sm:flex-row justify-center gap-4 lg:mt-6">

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
