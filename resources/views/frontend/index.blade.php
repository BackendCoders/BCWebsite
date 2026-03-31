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
          Start Your Project
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

 <div class="grid grid-cols-2 gap-4">

  <!-- Top Left -->
  <div class="relative overflow-hidden rounded-xl group translate-y-6">
    
    <!-- IMAGE -->
    <img src="{{asset('assets/images/backend_coders_split_1.png')}}"
      class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105"
      alt="">

    <!-- VIDEO -->
    <video autoplay muted loop playsinline
      class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
      <source src="{{asset('assets/images/1.mp4')}}" type="video/mp4">
    </video>

  </div>

  <!-- Top Right -->
  <div class="relative overflow-hidden rounded-xl group -translate-y-6">

    <img src="{{asset('assets/images/backend_coders_split_2.png')}}"
      class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105"
      alt="">

    <video autoplay muted loop playsinline
      class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
      <source src="{{asset('assets/images/2.mp4')}}" type="video/mp4">
    </video>

  </div>

  <!-- Bottom Left -->
  <div class="relative overflow-hidden rounded-xl group translate-y-6">

    <img src="{{asset('assets/images/backend_coders_split_3.png')}}"
      class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105"
      alt="">

    <video autoplay muted loop playsinline
      class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition duration-500">
      <source src="{{asset('assets/images/3.mp4')}}" type="video/mp4">
    </video>

  </div>

  <!-- Bottom Right -->
  <div class="relative overflow-hidden rounded-xl group -translate-y-6">

    <img src="{{asset('assets/images/backend_coders_split_4.png')}}"
      class="w-full h-full object-cover transition duration-500 group-hover:opacity-0 group-hover:scale-105"
      alt="">

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

  <div class="max-w-7xl mx-auto">

    <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
        Development Expertise
      </p>

      <h2 class="mt-4 text-3xl font-bold text-gray-900 md:text-4xl">
        Technologies We Love
      </h2>
    </div>

    <!-- MARQUEE -->
    <div class="overflow-hidden relative">

      <!-- Track -->
      <div 
        class="flex w-max gap-6"
        style="animation: marquee 25s linear infinite;"
      >

        <!-- Content (Repeat Twice) -->
        <div class="flex gap-6">

       <!-- ORIGINAL -->
          <div class="marquee-content my-12">
            
            <!-- Cards -->
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=14462&format=png&color=fd5528"><span>.NET Core</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=047WZAFDnkVp&format=png&color=fd5528"><span>React</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=FQlr_bFSqEdG&format=png&color=fd5528"><span>Node.js</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=OdTjgPoHJeaK&format=png&color=fd5528"><span>MERN</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=12472&format=png&color=fd5528"><span>WordPress</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=PIkrB3sbBDNs&format=png&color=fd5528"><span>Shopify</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=114956&format=png&color=fd5528"><span>Laravel</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=wDKHrGlFU936&format=png&color=fd5528"><span>SQL</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=5pr1cz6sq9qI&format=png&color=fd5528"><span>Firebase</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=BiW0cKUWFuoO&format=png&color=fd5528"><span>Cloud</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=vMqgHSToxrJR&format=png&color=fd5528"><span>TS</span></div>
            <div class="tech-card "><img src="https://img.icons8.com/?size=100&id=r2OarXWQc7B6&format=png&color=fd5528"><span>Next.js</span></div>

          </div>

          <!-- DUPLICATE -->
          <div class="marquee-content pl-6 py-12">
             <div class="tech-card "><img src="https://img.icons8.com/?size=100&id=14462&format=png&color=fd5528"><span>.NET Core</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=047WZAFDnkVp&format=png&color=fd5528"><span>React</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=FQlr_bFSqEdG&format=png&color=fd5528"><span>Node.js</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=OdTjgPoHJeaK&format=png&color=fd5528"><span>MERN</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=12472&format=png&color=fd5528"><span>WordPress</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=PIkrB3sbBDNs&format=png&color=fd5528"><span>Shopify</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=114956&format=png&color=fd5528"><span>Laravel</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=wDKHrGlFU936&format=png&color=fd5528"><span>SQL</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=5pr1cz6sq9qI&format=png&color=fd5528"><span>Firebase</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=BiW0cKUWFuoO&format=png&color=fd5528"><span>Cloud</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=vMqgHSToxrJR&format=png&color=fd5528"><span>TS</span></div>
            <div class="tech-card"><img src="https://img.icons8.com/?size=100&id=r2OarXWQc7B6&format=png&color=fd5528"><span>Next.js</span></div>
            <!-- EXACT SAME CONTENT COPY -->
          </div>

      

      </div>

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

<!-- process-directions -->
<section class="process-section relative overflow-hidden py-20">

  <div class=" max-w-7xl mx-auto px-6 relative">

    <!-- Heading -->
    <div class="text-center mb-16">
      <p class="text-sm uppercase tracking-widest text-[#FD5528] font-semibold">
        Process
      </p>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">
        Predictable Delivery
      </h2>
      <p class="text-gray-500 mt-3 max-w-xl mx-auto">
        Structured milestones that keep your project moving forward.
      </p>
    </div>


    <!-- STEPS -->
  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-y-16 text-center relative items-start">

  <div class="process-step group">
    <div class="step-circle">01</div>
    <h3 class="step-title">Discovery</h3>
    <p class="step-desc">Understanding goals & defining scope</p>
  </div>

  <div class="process-step group">
    <div class="step-circle">02</div>
    <h3 class="step-title">UI / UX</h3>
    <p class="step-desc">Designing intuitive experiences</p>
  </div>

  <div class="process-step group">
    <div class="step-circle">03</div>
    <h3 class="step-title">Development</h3>
    <p class="step-desc">Building scalable applications</p>
  </div>

  <div class="process-step group">
    <div class="step-circle">04</div>
    <h3 class="step-title">Testing</h3>
    <p class="step-desc">Ensuring quality & performance</p>
  </div>

  <div class="process-step group">
    <div class="step-circle">05</div>
    <h3 class="step-title">Deployment</h3>
    <p class="step-desc">Launching production-ready apps</p>
  </div>

  <div class="process-step group">
    <div class="step-circle">06</div>
    <h3 class="step-title">Support</h3>
    <p class="step-desc">Continuous improvements</p>
  </div>

</div>

  </div>

</section>

<!-- pr -->


<section class="bg-[#F9FAFB] py-24 px-6">
  <div class="max-w-7xl mx-auto text-center mb-16 items-center">
        <!-- Heading -->
      <p class="text-sm uppercase tracking-widest text-[#FD5528] font-semibold">
        Why Choose Us
      </p>

      <h2 class="mt-4 text-3xl md:text-4xl font-bold text-gray-900">
        Built for long-term partnerships
      </h2>
      
      <span class="mt-4 my-2 text-gray-600 max-w-lg text-center">
        We deliver scalable, reliable, and future-ready solutions tailored to your business growth.
      </span>


    </div>
  <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
  
 <!-- LEFT CONTENT -->
    <div class="relative">

      <img 
        src="{{asset('assets/images/choose-us.png')}}"
        alt="Team working"
        class="rounded-2xl shadow-xl w-full h-full object-cover"
      >

   
    </div>

       <!-- RIGHT IMAGE -->
    <div>

    

      <!-- FEATURES GRID -->
      <div class="mt-10 grid sm:grid-cols-2 gap-6">

    
        <!-- ITEM -->
        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
                  <img src="https://img.icons8.com/?size=100&id=DCkAZ79sIYhT&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">17+ Years Experience</h3>
            <p class="text-xs text-gray-600 mt-1">Reliable, high-quality solutions across industries.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
             <img src="https://img.icons8.com/?size=100&id=124222&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Dedicated Teams</h3>
            <p class="text-xs text-gray-600 mt-1">Experts focused exclusively on your project.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
             <img src="https://img.icons8.com/?size=100&id=5TJlel7-79RU&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Scalable Architecture</h3>
            <p class="text-xs text-gray-600 mt-1">Systems built to grow with your business.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
            <img src="https://img.icons8.com/?size=100&id=68443&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Agile & Transparent</h3>
            <p class="text-xs text-gray-600 mt-1">Clear communication and faster delivery.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
               <img src="https://img.icons8.com/?size=100&id=117533&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Startup-Friendly Pricing</h3>
            <p class="text-xs text-gray-600 mt-1">Flexible pricing for growing businesses.</p>
          </div>
        </div>

        <div class="flex gap-3 p-4 bg-white border border-gray-200 rounded-xl transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-[#FD5528]/20">
          <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#FFF1EC] text-[#FD5528] text-lg">
             <img src="https://img.icons8.com/?size=100&id=neBRkBaejCVJ&format=png&color=FD5528" class="w-12 h-12">
          </div>
          <div>
            <h3 class="text-sm font-semibold text-gray-900">Long-Term Support</h3>
            <p class="text-xs text-gray-600 mt-1">Continuous maintenance and updates.</p>
          </div>
        </div>

      </div>

    </div>


   

  </div>

</section>




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