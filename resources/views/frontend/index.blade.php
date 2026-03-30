@extends('component.main')
@section('content')

    <main class="flex-1">
      <!-- HERO SECTION -->

<section id="hero" class="relative overflow-hidden bg-white px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">

  <div class="max-w-7xl mx-auto grid items-center gap-12 lg:gap-16 lg:grid-cols-2">

    <!-- LEFT CONTENT -->
    <div class="max-w-xl mx-auto lg:mx-0 text-center lg:text-left">

      <!-- BADGE -->
      <span 
        data-aos="fade-down"
        data-aos-delay="100"
        class="inline-flex items-center justify-center lg:justify-start 
               gap-2 rounded-full border border-[#FD5528] bg-white 
               px-4 py-1 text-[10px] sm:text-xs font-semibold tracking-wider text-[#FD5528]">
        17+ Years Building Software
      </span>

      <!-- HEADING -->
      <h1 
        data-aos="fade-up"
        data-aos-delay="200"
        class="mt-5 sm:mt-6 text-3xl sm:text-4xl md:text-5xl lg:text-6xl 
               font-bold leading-tight text-gray-900">

        Building Powerful <br class="hidden sm:block">

        <span class="text-[#FD5528]">
          Software & Digital Platforms
        </span>
      </h1>

      <!-- DESCRIPTION -->
      <p 
        data-aos="fade-up"
        data-aos-delay="300"
        class="mt-4 sm:mt-6 text-sm sm:text-base md:text-lg leading-relaxed text-gray-600">

        We are a multidisciplinary team of developers, designers, and strategists 
        crafting scalable technology solutions for startups and enterprises worldwide.
      </p>

      <!-- BUTTONS -->
      <div 
        data-aos="fade-up"
        data-aos-delay="400"
        class="mt-6 sm:mt-8 flex flex-col sm:flex-row gap-3 sm:gap-4 
               justify-center lg:justify-start">

        <a href="#contact"
           class="inline-flex items-center justify-center gap-2 
                  rounded-lg bg-[#FD5528] px-6 py-3 text-sm font-semibold text-white 
                  shadow-md transition hover:bg-orange-600 hover:shadow-lg">
          Start Your Project →
        </a>

        <a href="#portfolio"
           class="inline-flex items-center justify-center gap-2 
                  rounded-lg border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700 
                  transition hover:border-[#FD5528] hover:text-[#FD5528]">
          View Our Work
        </a>

      </div>

    </div>

    <!-- RIGHT IMAGE -->
    <div 
      data-aos="zoom-in"
      data-aos-delay="300"
      class="relative mx-auto w-full max-w-md sm:max-w-lg lg:max-w-full">

      <!-- <img 
        src="{{asset('assets/images/img2.png')}}" 
        alt="Software development illustration"
        class="w-full h-auto object-contain"
      > -->
      <div class="grid grid-cols-2 gap-1 ">
        <div class="overflow-hidden rounded-xl group">
        <img src="{{asset('assets/images/backend_coders_split_1.png')}}"
         class="w-full transition duration-500 transform group-hover:scale-105"
         alt="">
        </div>
        <div class="overflow-hidden rounded-xl group">
        <img src="{{asset('assets/images/backend_coders_split_2.png')}}"
         class="w-full transition duration-500 transform group-hover:scale-105"
         alt="">
        </div>
        <div class="overflow-hidden rounded-xl group">
        <img src="{{asset('assets/images/backend_coders_split_3.png')}}"
         class="w-full transition duration-500 transform group-hover:scale-105"
         alt="">
        </div>
        <div class="overflow-hidden rounded-xl group">
        <img src="{{asset('assets/images/backend_coders_split_4.png')}}"
         class="w-full transition duration-500 transform group-hover:scale-105"
         alt="">
        </div>
      </div>


    </div>

  </div>

</section>


<!-- END HERO SECTIOPN -->

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

<!-- SERVICE -->
<section id="services" class="bg-white px-6 py-24">

    <div class="max-w-7xl mx-auto">

        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto">

            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528] "
            data-aos="fade-up">
                Services
            </p>

            <h2 class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl"
            data-aos="fade-up" data-aos-delay="100">
                End-to-end Software Development
            </h2>

            <p class="mt-4 text-gray-600"
            data-aos="fade-up" data-aos-delay="200">
                We take your idea from discovery through delivery with a transparent,
                milestone-driven approach.
            </p>

        </div>

        <!-- Services Grid -->
        <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Card 1 -->
            <article data-aos="fade-up"
            class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0]  hover:-translate-y-2">

                <div class="mb-4 text-[#FD5528]  text-2xl flex justify-center">
                  <img src="https://img.icons8.com/?size=100&id=DCkAZ79sIYhT&format=png&color=FD5528" alt="" class="h-16 w-16">
                </div>

                <h3 class="text-lg font-semibold text-center text-gray-900">
                    Custom Web Applications
                </h3>

                <p class="mt-2 text-sm text-center text-gray-600">
                    Scalable web applications built with modern technologies and performance in mind.
                </p>

            </article>

            <!-- card 2 -->
            <article data-aos="fade-up" data-aos-delay="100"
            class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0]  hover:-translate-y-2">

               <div class="mb-4 text-[#FD5528]  text-2xl flex justify-center">
                  <img src="https://img.icons8.com/?size=100&id=8Y6ohiJ337rc&format=png&color=FD5528" alt="" class="h-16 w-16">
                </div>


                <h3 class="text-lg font-semibold text-center text-gray-900">
                    Website Design & Development
                </h3>

                <p class="mt-2 text-sm text-gray-600 text-center">
                    Beautiful, responsive, and SEO-optimized websites designed for performance.
                </p>

            </article>

            <!-- card 3 -->
            <article data-aos="fade-up" data-aos-delay="200"
            class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0]  hover:-translate-y-2">

                <div class="mb-4 text-[#FD5528]  text-2xl flex justify-center">
                  <img src="https://img.icons8.com/?size=100&id=k8TSihyFk2cJ&format=png&color=FD5528" alt="" class="h-16 w-16">
                </div>

                <h3 class="text-lg font-semibold text-gray-900 text-center">
                    SaaS Development
                </h3>

                <p class="mt-2 text-sm text-gray-600 text-center">
                    Multi-tenant SaaS platforms engineered for reliability and scalability.
                </p>

            </article>

            <!-- card 4 -->
            <article data-aos="fade-up" data-aos-delay="300"
            class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0]  hover:-translate-y-2">

                <div class="mb-4 text-[#FD5528]  text-2xl flex justify-center">
                  <img src="https://img.icons8.com/?size=100&id=Rk5rrSlqrNZO&format=png&color=FD5528" alt="" class="h-16 w-16">
                </div>

                <h3 class="text-lg font-semibold text-gray-900 text-center">
                    ERP & POS Software
                </h3>

                <p class="mt-2 text-sm text-gray-600 text-center">
                    Enterprise resource planning and POS systems tailored to your operations.
                </p>

            </article>

            <!-- card 5 -->
            <article data-aos="fade-up" data-aos-delay="400"
            class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0]  hover:-translate-y-2">

                <div class="mb-4 text-[#FD5528]  text-2xl flex justify-center">
                  <img src="https://img.icons8.com/?size=100&id=8OxFnElAJgpE&format=png&color=FD5528" alt="" class="h-16 w-16">
                </div>

                <h3 class="text-lg font-semibold text-gray-900 text-center">
                    E-commerce Development
                </h3>

                <p class="mt-2 text-sm text-gray-600 text-center">
                    Conversion-focused online stores with secure payments and fast performance.
                </p>

            </article>

            <!-- card 6 -->
            <article data-aos="fade-up" data-aos-delay="500"
            class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0]  hover:-translate-y-2">

                <div class="mb-4 text-[#FD5528]  text-2xl flex justify-center">
                  <img src="https://img.icons8.com/?size=100&id=67475&format=png&color=FD5528" alt="" class="h-16 w-16">
                </div>

                <h3 class="text-lg font-semibold text-gray-900 text-center">
                    Mobile App Development
                </h3>

                <p class="mt-2 text-sm text-gray-600 text-center">
                    Cross-platform mobile apps delivering smooth and engaging experiences.
                </p>

            </article>

            <!-- card 7 -->
            <article data-aos="fade-up" data-aos-delay="600"
            class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0]  hover:-translate-y-2">

                <div class="mb-4 text-[#FD5528]  text-2xl flex justify-center">
                  <img src="https://img.icons8.com/?size=100&id=6kPR2dlup5KK&format=png&color=FD5528" alt="" class="h-16 w-16">
                </div>

                <h3 class="text-lg font-semibold text-gray-900 text-center">
                    API Development
                </h3>

                <p class="mt-2 text-sm text-gray-600 text-center">
                    Secure REST APIs and seamless third-party integrations.
                </p>

            </article>

            <!-- card 8  -->
            <article data-aos="fade-up" data-aos-delay="700"
            class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0]  hover:-translate-y-2">

                <div class="mb-4 text-[#FD5528]  text-2xl flex justify-center">
                  <img src="https://img.icons8.com/?size=100&id=103102&format=png&color=FD5528" alt="" class="h-16 w-16">
                </div>

                <h3 class="text-lg font-semibold text-gray-900 text-center">
                    Digital Marketing & SEO
                </h3>

                <p class="mt-2 text-sm text-gray-600 text-center">
                    Data-driven marketing strategies that boost traffic and conversions.
                </p>

            </article>

            <!-- card 9 -->
            <article data-aos="fade-up" data-aos-delay="800"
            class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0]  hover:-translate-y-2">

                <div class="mb-4 text-[#FD5528]  text-2xl flex justify-center">
                  <img src="https://img.icons8.com/?size=100&id=KR7IxBJfODTv&format=png&color=FD5528" alt="" class="h-16 w-16">
                </div>

                <h3 class="text-lg font-semibold text-gray-900 text-center">
                    Startup MVP Development
                </h3>

                <p class="mt-2 text-sm text-gray-600 text-center">
                    Rapid MVP development to help startups launch and validate ideas faster.
                </p>

            </article>

        </div>

    </div>

</section>
<!-- END SERVICE SECTION -->

<!-- TECHNOLOGIES -->
<section id="technologies" class="bg-[#F9FAFB] px-6 py-24">

    <div class="max-w-7xl mx-auto text-center">

        <!-- Heading -->
        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528] "
        data-aos="fade-up">
            Development Expertise
        </p>

        <h2 class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl"
        data-aos="fade-up" data-aos-delay="100">
            Technologies We Love
        </h2>

        <!-- Tech Grid -->
        <div class="mt-14 grid gap-6 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">

           <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

    <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=14462&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
        .NET Core
    </div>

</span>

                  <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

              <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=047WZAFDnkVp&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
        React
    </div>

            </span>

                  <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">
                       <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=FQlr_bFSqEdG&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
        Node.js 
    </div>
           
            </span>

                 <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">
      <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=OdTjgPoHJeaK&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
        MERN Stack 
    </div>
            
            </span>

              <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

                      <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=12472&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
       WordPress
    </div>
          
            </span>

                 <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

                         <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=PIkrB3sbBDNs&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
       Shopify
    </div>
            </span>

                <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

            
                         <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=114956&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
        Laravel 
    </div>

          
            </span>

                <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

              
                         <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=wDKHrGlFU936&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
        SQL Server
    </div>
           
            </span>

               <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

                <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=5pr1cz6sq9qI&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
        Firebase 
    </div>
           
            </span>

                 <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

                <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=BiW0cKUWFuoO&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
       Cloud Infra
    </div>
           
            </span>

                <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

             <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=vMqgHSToxrJR&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
       TypeScript
    </div>

           
            </span>

                <span data-aos="zoom-in"
      class="flex flex-col items-center justify-center text-center rounded-2xl border border-gray-200 bg-white px-6 py-5 text-sm font-semibold text-gray-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#FD5528] hover:text-[#FD5528] hover:shadow-lg group">

             <!-- Icon Circle -->
    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-orange-50 text-[#FD5528] mb-3 transition group-hover:scale-110">
        <img src="https://img.icons8.com/?size=100&id=r2OarXWQc7B6&format=png&color=fd5528" alt="">
    </div>

    <!-- Text -->
    <div class="text-base text-[#FD5528] font-semibold">
       Next.js
    </div>
            </span>

        </div>

    </div>

</section>
<!-- END TECHNOLOGIES -->

<!-- FEATURES PROJECTS -->
<section id="portfolio" class="bg-white px-6 py-24">

  <div class="max-w-7xl mx-auto">

    <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto">

      <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528] "
      data-aos="fade-up">
        Work
      </p>

      <h2 class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl"
      data-aos="fade-up" data-aos-delay="100">
        Featured Projects
      </h2>

      <p class="mt-4 text-gray-600"
      data-aos="fade-up" data-aos-delay="200">
        Real products delivered for fast-paced teams.
      </p>

    </div>

    <!-- Portfolio Grid -->
    <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">

      <!-- Project -->
      <article data-aos="fade-up"
      class="group rounded-2xl border  border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <p class="text-xs text-center font-semibold uppercase tracking-[0.25em] text-[#FD5528] ">
          ERP Systems
        </p>

        <h3 class="mt-4 text-center text-xl font-semibold text-gray-900">
          Enterprise ERP System
        </h3>

        <p class="mt-3 text-center text-sm text-gray-600">
          Complete business management solution for manufacturing clients.
        </p>

        <p class="mt-4 text-center text-xs font-mono text-gray-500">
          .NET Core • SQL Server • React
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="100"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <p class="text-xs text-center font-semibold uppercase tracking-[0.25em] text-[#FD5528] ">
          POS Systems
        </p>

        <h3 class="mt-4 text-center text-xl font-semibold text-gray-900">
          Multi-Store POS Platform
        </h3>

        <p class="mt-3 text-center text-sm text-gray-600">
          Cloud-native point-of-sale system for retail and hospitality chains.
        </p>

        <p class="mt-4 text-center text-xs font-mono text-gray-500">
          Node.js • React • Firebase
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="200"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <p class="text-xs text-center font-semibold uppercase tracking-[0.25em] text-[#FD5528] ">
          Web Applications
        </p>

        <h3 class="mt-4 text-center text-xl font-semibold text-gray-900">
          SaaS Analytics Dashboard
        </h3>

        <p class="mt-3 text-center text-sm text-gray-600">
          Real-time insights and reporting tools for data-driven product teams.
        </p>

        <p class="mt-4 text-center text-xs font-mono text-gray-500">
          React • TypeScript • PostgreSQL
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="300"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <p class="text-xs text-center font-semibold uppercase tracking-[0.25em] text-[#FD5528] ">
          Ecommerce Platforms
        </p>

        <h3 class="mt-4 text-center text-xl font-semibold text-gray-900">
          E-commerce Marketplace
        </h3>

        <p class="mt-3 text-center text-sm text-gray-600">
          Multi-vendor marketplace with secure payments and messaging.
        </p>

        <p class="mt-4 text-center text-xs font-mono text-gray-500">
          Next.js • Stripe • MongoDB
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="400"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <p class="text-xs text-center font-semibold uppercase tracking-[0.25em] text-[#FD5528] ">
          Startup MVPs
        </p>

        <h3 class="mt-4 text-center text-xl font-semibold text-gray-900">
          HealthTech MVP
        </h3>

        <p class="mt-3 text-center text-sm text-gray-600">
          Patient management system with telemedicine workflows.
        </p>

        <p class="mt-4 text-center text-xs font-mono text-gray-500">
          React Native • Node.js • AWS
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="500"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <p class="text-xs text-center font-semibold uppercase tracking-[0.25em] text-[#FD5528] ">
          Web Applications
        </p>

        <h3 class="mt-4 text-center text-xl font-semibold text-gray-900">
          Logistics Management Suite
        </h3>

        <p class="mt-3 text-cecnter text-sm text-gray-600">
          Fleet tracking and route optimization platform for logistics companies.
        </p>

        <p class="mt-4 text-center text-xs font-mono text-gray-500">
          .NET Core • React • Azure
        </p>

      </article>

    </div>

  </div>

</section>


<!-- PROCESS SECTION -->
<section id="process" class="bg-[#F9FAFB] px-6 py-24">

  <div class="max-w-7xl mx-auto">

    <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto">

      <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528] "
      data-aos="fade-up">
        Process
      </p>

      <h2 class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl"
      data-aos="fade-up" data-aos-delay="100">
        Predictable Delivery
      </h2>

      <p class="mt-4 text-gray-600"
      data-aos="fade-up" data-aos-delay="200">
        Structured milestones that keep your project moving forward.
      </p>

    </div>


    <!-- Process Grid -->
    <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

      <!-- Step -->
      <article data-aos="fade-up"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <span class="text-3xl font-bold text-[#FD5528] ">01</span>

        <h3 class="mt-4 text-xl font-semibold text-gray-900">
          Discovery & Planning
        </h3>

        <p class="mt-2 text-sm text-gray-600">
          Understanding your goals and defining a clear, pragmatic project scope.
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="100"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <span class="text-3xl font-bold text-[#FD5528] ">02</span>

        <h3 class="mt-4 text-xl font-semibold text-gray-900">
          UI / UX Design
        </h3>

        <p class="mt-2 text-sm text-gray-600">
          Crafting intuitive interfaces that enhance user engagement and experience.
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="200"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <span class="text-3xl font-bold text-[#FD5528] ">03</span>

        <h3 class="mt-4 text-xl font-semibold text-gray-900">
          Development
        </h3>

        <p class="mt-2 text-sm text-gray-600">
          Clean, scalable code built with modern frameworks and best practices.
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="300"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <span class="text-3xl font-bold text-[#FD5528] ">04</span>

        <h3 class="mt-4 text-xl font-semibold text-gray-900">
          Testing & QA
        </h3>

        <p class="mt-2 text-sm text-gray-600">
          Rigorous testing ensuring reliability, performance, and security.
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="400"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <span class="text-3xl font-bold text-[#FD5528] ">05</span>

        <h3 class="mt-4 text-xl font-semibold text-gray-900">
          Deployment
        </h3>

        <p class="mt-2 text-sm text-gray-600">
          Production-ready deployment with monitoring and optimization.
        </p>

      </article>


      <article data-aos="fade-up" data-aos-delay="500"
      class="group rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:shadow-xl shadow-[#FD5528]  hover:shadow-[#f9b5a0] ">

        <span class="text-3xl font-bold text-[#FD5528] ">06</span>

        <h3 class="mt-4 text-xl font-semibold text-gray-900">
          Continuous Support
        </h3>

        <p class="mt-2 text-sm text-gray-600">
          Ongoing improvements, security updates, and feature enhancements.
        </p>

      </article>

    </div>

  </div>

</section>

<!-- END PROCESS SECTION -->

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


<!-- serve industry -->
<section id="industries" class="bg-white px-6 py-24">

  <div class="max-w-6xl mx-auto text-center">

    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528] "
    data-aos="fade-up">
      Industries
    </p>

    <h2 class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl"
    data-aos="fade-up" data-aos-delay="100">
      Industries We Serve
    </h2>

    <div class="mt-16 grid gap-6 sm:grid-cols-2 md:grid-cols-4">

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

</section>
<!-- END SERVE INDUSTRY -->

<!-- DEVELOPER CODE -->
<section class="bg-[#1F1F1F] px-6 py-24">

  <div class="max-w-4xl mx-auto text-center">

    <!-- Tag -->
    <div class="inline-flex items-center gap-2 bg-[#FD5528]/10 text-[#FD5528] px-4 py-1 rounded-md text-xs tracking-widest">
      >_ developer_mode
    </div>

    <!-- Heading -->
    <h2 class="text-4xl font-heading text-white mt-4">
      Under the Hood
    </h2>

    <!-- Code Box -->
    <div class="mt-12 bg-black rounded-lg border border-gray-700 overflow-hidden text-left shadow-xl">

      <!-- Header -->
      <div class="flex items-center gap-2 px-4 py-2 border-b border-gray-700 bg-[#111]">
        <span class="w-3 h-3 bg-red-500 rounded-full"></span>
        <span class="w-3 h-3 bg-yellow-400 rounded-full"></span>
        <span class="w-3 h-3 bg-green-500 rounded-full"></span>

        <span class="ml-4 text-gray-400 text-xs">
          project.config.json
        </span>
      </div>

      <!-- Typing Content -->
      <pre id="typing-code" class="p-6 text-sm font-mono text-gray-300 whitespace-pre-wrap"></pre>

    </div>

  </div>

</section>


<!-- END DEVELOPER CODE -->

<!-- BLOG -->

<section id="blog" class="bg-white px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">

  <div class="max-w-7xl mx-auto">

    <!-- HEADER -->
    <div class="text-center max-w-2xl mx-auto">

      <p class="text-[10px] sm:text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
        Blog
      </p>

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

<!-- CTA BTN -->
<section class="bg-[#F44918] px-6 py-20 text-center">

    <div class="max-w-3xl mx-auto">

      <h2 class="text-3xl md:text-4xl font-bold text-white">
        Let’s Build Your Next Digital Product
      </h2>

      <p class="mt-4 text-blue-200">
        Ready to transform your ideas into powerful software? Let's talk.
      </p>

      <a href="#contact"
        class="inline-flex items-center gap-2 mt-8 bg-white   text-[#FD5528] px-8 py-3 rounded-md font-semibold transition">

        Start Your Project →
      </a>

    </div>

</section>

</main>



@endsection