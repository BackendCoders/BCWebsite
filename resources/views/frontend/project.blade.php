
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
        Our Projects at <span class="text-orange-600">Backend</span><span class="text-[#FC5124] font-semibold">
     
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
      We are a passionate team of developers and designers helping businesses 
      transform ideas into scalable, high-performance digital products.
    </p>

 

  </div>

</section>
<!-- end hero section  -->

<!-- WORLD MAP VISUAL -->



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
          src="{{ asset('assets/images/map.jpeg') }}"
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

 



<!-- 📊 STATS -->
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
    <div class="text-2xl mb-2">🌍</div>
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
    <div class="text-2xl mb-2">⭐</div>
    <h3 class="text-3xl font-bold text-orange-500 counter" data-target="100">100%</h3>
    <p class="text-sm text-slate-600 mt-1">Client Satisfaction</p>
  </div> -->

</div>


<!-- 🚀 CTA -->
<div class="text-center my-6">

  <a href="/contact"
     class="relative inline-flex items-center gap-2 px-8 py-3 font-semibold text-white rounded-xl 
            bg-gradient-to-r from-orange-500 to-orange-600 
            shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300">

    Work With Us

  </a>



</div>
</section>




<!-- CASE STUDY -->
<section class="py-24 bg-white">

  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

    <!-- IMAGE -->
    <div class="relative group">
      <img 
        src="{{asset('assets/images/backend_coders_split_1.png')}}"
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
        Scaling a SaaS Platform for  
        <span class="text-[#FD5528]">High Performance</span>
      </h2>

      <!-- DESCRIPTION -->
      <p class="mt-6 text-gray-600 leading-relaxed">
        We helped a growing startup transform their SaaS platform into a high-performance, 
        scalable solution. By optimizing architecture and improving UI/UX, we delivered 
        faster load times and better user engagement.
      </p>

      <!-- RESULTS -->
      <div class="mt-8 grid grid-cols-2 gap-6">

        <div class="bg-orange-50 p-4 rounded-xl text-center">
          <h3 class="text-2xl font-bold text-[#FD5528]">40%</h3>
          <p class="text-sm text-gray-600 mt-1">Faster Load Time</p>
        </div>

        <div class="bg-orange-50 p-4 rounded-xl text-center">
          <h3 class="text-2xl font-bold text-[#FD5528]">2x</h3>
          <p class="text-sm text-gray-600 mt-1">User Engagement</p>
        </div>

        <div class="bg-orange-50 p-4 rounded-xl text-center col-span-2">
          <h3 class="text-2xl font-bold text-[#FD5528]">Scalable</h3>
          <p class="text-sm text-gray-600 mt-1">Architecture Built for Growth</p>
        </div>

      </div>

      <!-- CTA -->
      <div class="mt-8 flex gap-4 flex-wrap">
        <a href="#" class="bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:from-[#fbb03b] hover:to-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:scale-105 transition">
          View Full Case Study
        </a>

        <a href="#" class="border border-[#FD5528] text-[#FD5528] px-6 py-3 rounded-xl font-semibold hover:bg-orange-50 transition">
          Start Your Project
        </a>
      </div>

    </div>

  </div>

</section>

<!-- TECHNOLOGIES -->

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

<!-- RESULTS -->
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


<!-- TESTIMONIAL -->
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
                  <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
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
              <span class="text-yellow-400 text-lg">★★★★★</span>
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
                  <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
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
              <span class="text-yellow-400 text-lg">★★★★★</span>
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
                        <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
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
                    <span class="text-yellow-400 text-lg">★★★★★</span>
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
                        <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
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
                    <span class="text-yellow-400 text-lg">★★★★★</span>
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

