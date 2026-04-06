
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
     Processes & Technologies at <span class="text-[#FC5124] font-semibold">Backend</span> <span class="text-[#FD5528] font-semibold">
     
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
      We are a passionate team of developers and designers helping businesses 
      transform ideas into scalable, high-performance digital products.
    </p>

 

  </div>

</section>
<!-- end hero section  -->



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


<section class="bg-gray-50 py-16">

  <div class="max-w-7xl mx-auto px-6">
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

         Service we offer

    </p>
    
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">
          What We Do
      </h2>
      <p class="text-gray-500 mt-3 max-w-xl mx-auto">
          From custom backend development to full-stack solutions, we offer a range of services to bring your digital vision to life.
      </p>
    </div>

    <!-- GRID -->
    <div class=" grid md:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- CARD -->
  <!-- GLASS CARD -->
    <div class="relative backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 shadow-xl hover:scale-105 transition duration-500">

      <!-- TITLE -->
      <h3 class="text-2xl font-bold text-[#FC5124] mb-4 flex items-center gap-2">
        <i class='bx bx-code-alt text-[#FC5124] text-3xl'></i>
        Application Development
      </h3>

      <!-- STEPS -->
      <div class="space-y-4 text-black">

        <div class="flex items-center gap-3">
          <i class='bx bx-search-alt-2 text-[#FC5124] text-xl'></i>
          <span>Requirement Analysis</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-palette text-[#FC5124] text-xl'></i>
          <span>UI/UX Planning</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-server text-[#FC5124] text-xl'></i>
          <span>Backend Architecture</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-check-shield text-[#FC5124] text-xl'></i>
          <span>Testing & Deployment</span>
        </div>

      </div>

      <!-- CTA -->
      <div class="mt-6">
        <button class="w-full bg-gray-200 text-[#FC5124] py-2 rounded-lg font-semibold">
          Learn More →
        </button>
      </div>

    </div>




      <!-- CARD -->

    <div class="relative backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 shadow-xl hover:scale-105 transition duration-500">

      <!-- TITLE -->
      <h3 class="text-2xl font-bold text-[#FC5124] mb-4 flex items-center gap-2">
        <i class='bx bx-code-alt text-[#FC5124] text-3xl'></i>
       Web Development
      </h3>

      <!-- STEPS -->
      <div class="space-y-4 text-black">

        <div class="flex items-center gap-3">
          <i class='bx bx-search-alt-2 text-[#FC5124] text-xl'></i>
          <span>Wireframing & Design</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-palette text-[#FC5124] text-xl'></i>
          <span>Frontend Development</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-server text-[#FC5124] text-xl'></i>
          <span>Backend Integration</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-check-shield text-[#FC5124] text-xl'></i>
          <span> Performance Optimization</span>
        </div>

      </div>

      <!-- CTA -->
      <div class="mt-6">
        <button class="w-full bg-gray-200 text-[#FC5124] py-2 rounded-lg font-semibold">
          Learn More →
        </button>
      </div>

    </div>


      <!-- CARD -->
    <div class="relative backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 shadow-xl hover:scale-105 transition duration-500">

      <!-- TITLE -->
      <h3 class="text-2xl font-bold text-[#FC5124] mb-4 flex items-center gap-2">
        <i class='bx bx-code-alt text-[#FC5124] text-3xl'></i>
        SEO
      </h3>

      <!-- STEPS -->
      <div class="space-y-4 text-black">

        <div class="flex items-center gap-3">
          <i class='bx bx-search-alt-2 text-[#FC5124] text-xl'></i>
          <span>Keyword Research</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-palette text-[#FC5124] text-xl'></i>
          <span>On-page Optimization</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-server text-[#FC5124] text-xl'></i>
          <span>Technical SEO</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-check-shield text-[#FC5124] text-xl'></i>
          <span>Reporting & Analytics</span>
        </div>

      </div>

      <!-- CTA -->
      <div class="mt-6">
        <button class="w-full bg-gray-200 text-[#FC5124] py-2 rounded-lg font-semibold">
          Learn More →
        </button>
      </div>

    </div>   
     

      <!-- CARD -->
    <div class="relative backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 shadow-xl hover:scale-105 transition duration-500">

      <!-- TITLE -->
      <h3 class="text-2xl font-bold text-[#FC5124] mb-4 flex items-center gap-2">
        <i class='bx bx-code-alt text-[#FC5124] text-3xl'></i>
        Digital Marketing
      </h3>

      <!-- STEPS -->
      <div class="space-y-4 text-black">

        <div class="flex items-center gap-3">
          <i class='bx bx-search-alt-2 text-[#FC5124] text-xl'></i>
          <span>Keyword Research</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-palette text-[#FC5124] text-xl'></i>
          <span>On-page Optimization</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-server text-[#FC5124] text-xl'></i>
          <span>Technical SEO</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-check-shield text-[#FC5124] text-xl'></i>
          <span>Reporting & Analytics</span>
        </div>

      </div>

      <!-- CTA -->
      <div class="mt-6">
        <button class="w-full bg-gray-200 text-[#FC5124] py-2 rounded-lg font-semibold">
          Learn More →
        </button>
      </div>

    </div>  
     

      <!-- CARD -->
    <div class="relative backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 shadow-xl hover:scale-105 transition duration-500">

      <!-- TITLE -->
      <h3 class="text-2xl font-bold text-[#FC5124] mb-4 flex items-center gap-2">
        <i class='bx bx-code-alt text-[#FC5124] text-3xl'></i>
        Digital Marketing
      </h3>

      <!-- STEPS -->
      <div class="space-y-4 text-black">

        <div class="flex items-center gap-3">
          <i class='bx bx-search-alt-2 text-[#FC5124] text-xl'></i>
          <span>Strategy Planning</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-palette text-[#FC5124] text-xl'></i>
          <span>Social Media Campaigns</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-server text-[#FC5124] text-xl'></i>
          <span>Paid Ads (PPC)</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-check-shield text-[#FC5124] text-xl'></i>
          <span>Performance Tracking</span>
        </div>

      </div>

      <!-- CTA -->
      <div class="mt-6">
        <button class="w-full bg-gray-200 text-[#FC5124] py-2 rounded-lg font-semibold">
          Learn More →
        </button>
      </div>

    </div>  
   

      <!-- CARD -->
    <div class="relative backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 shadow-xl hover:scale-105 transition duration-500">

      <!-- TITLE -->
      <h3 class="text-2xl font-bold text-[#FC5124] mb-4 flex items-center gap-2">
        <i class='bx bx-code-alt text-[#FC5124] text-3xl'></i>
        Software Development
      </h3>

      <!-- STEPS -->
      <div class="space-y-4 text-black">

        <div class="flex items-center gap-3">
          <i class='bx bx-search-alt-2 text-[#FC5124] text-xl'></i>
          <span>System Design</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-palette text-[#FC5124] text-xl'></i>
          <span>Development & Integration</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-server text-[#FC5124] text-xl'></i>
          <span>QA Testing</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-check-shield text-[#FC5124] text-xl'></i>
          <span>Maintenance & Support</span>
        </div>

      </div>

      <!-- CTA -->
      <div class="mt-6">
        <button class="w-full bg-gray-200 text-[#FC5124] py-2 rounded-lg font-semibold">
          Learn More →
        </button>
      </div>

    </div>
      

      <!-- CARD -->
    <div class="relative backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 shadow-xl hover:scale-105 transition duration-500">

      <!-- TITLE -->
      <h3 class="text-2xl font-bold text-[#FC5124] mb-4 flex items-center gap-2">
        <i class='bx bx-code-alt text-[#FC5124] text-3xl'></i>
        App Development
      </h3>

      <!-- STEPS -->
      <div class="space-y-4 text-black">

        <div class="flex items-center gap-3">
          <i class='bx bx-search-alt-2 text-[#FC5124] text-xl'></i>
          <span>UI/UX Design</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-palette text-[#FC5124] text-xl'></i>
          <span>Android/iOS Development</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-server text-[#FC5124] text-xl'></i>
          <span>API Integration</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-check-shield text-[#FC5124] text-xl'></i>
          <span> App Store Deployment</span>
        </div>

      </div>

      <!-- CTA -->
      <div class="mt-6">
        <button class="w-full bg-gray-200 text-[#FC5124] py-2 rounded-lg font-semibold">
          Learn More →
        </button>
      </div>

    </div>
    

      <!-- CARD -->
    <div class="relative backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 shadow-xl hover:scale-105 transition duration-500">

      <!-- TITLE -->
      <h3 class="text-2xl font-bold text-[#FC5124] mb-4 flex items-center gap-2">
        <i class='bx bx-code-alt text-[#FC5124] text-3xl'></i>
       Graphic Design
      </h3>

      <!-- STEPS -->
      <div class="space-y-4 text-black">

        <div class="flex items-center gap-3">
          <i class='bx bx-search-alt-2 text-[#FC5124] text-xl'></i>
          <span>Branding & Identity</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-palette text-[#FC5124] text-xl'></i>
          <span>UI/UX Design</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-server text-[#FC5124] text-xl'></i>
          <span>Social Media Creatives</span>
        </div>

        <div class="flex items-center gap-3">
          <i class='bx bx-check-shield text-[#FC5124] text-xl'></i>
          <span>Marketing Materials</span>
        </div>

      </div>

      <!-- CTA -->
      <div class="mt-6">
        <button class="w-full bg-gray-200 text-[#FC5124] py-2 rounded-lg font-semibold">
          Learn More →
        </button>
      </div>

    </div>

    </div>

  </div>

</section>




@endsection