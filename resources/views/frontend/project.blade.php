
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

<section class="py-16">
<div class="max-w-7xl mx-auto px-6">

<!-- TABS -->
<div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-10">
  <button class="tab active bg-orange-500 text-white border border-orange-500 px-4 py-2 rounded-full" data-tab="all">All</button>
  <button class="tab border border-orange-500 text-orange-600 px-4 py-2 rounded-full" data-tab="web">Web Apps</button>
  <button class="tab border border-orange-500 text-orange-600 px-4 py-2 rounded-full" data-tab="saas">SaaS</button>
  <button class="tab border border-orange-500 text-orange-600 px-4 py-2 rounded-full" data-tab="ecommerce">E-commerce</button>
  <button class="tab border border-orange-500 text-orange-600 px-4 py-2 rounded-full" data-tab="crm">CRM</button>
</div>

<!-- GRID -->
<div id="projects" class="grid gap-6 sm:gap-8 md:grid-cols-2 lg:grid-cols-3">

<!-- CARD 1 -->
<div class="project web bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="https://backendcodersindia.com/assets/images/company-icons/page1.png" class="w-full h-full object-cover group-hover:scale-105 transition">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
  <div class="p-5 space-y-3">
    <div class="flex justify-between text-xs text-gray-500 uppercase">
      <span>Web</span><span class="text-orange-500 font-semibold">Jan 2025</span>
    </div>
    <h3 class="text-xl font-semibold">Ace Taxis UK</h3>
    <p class="text-sm text-gray-600">Cab booking & dispatch system.</p>
    <div class="flex gap-2 flex-wrap">
      <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node</span>
      <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Mongo</span>
    </div>
    <div class="flex justify-between text-xs text-gray-500">
      <span>+650 drivers</span>
      <a href="#" class="text-orange-500 font-semibold">View</a>
    </div>
  </div>

</div>

<!-- CARD 2 -->
<div class="project saas bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="https://backendcodersindia.com/assets/images/company-icons/1.png" class="w-full h-full object-cover">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
   <div class="flex justify-between text-[10px] text-gray-400 mb-2">
    <span>SAAS</span>
    <span class="text-orange-500">JAN 2025</span>
  </div>

  <h3 class="text-lg font-semibold mb-2">Tanning Salon System</h3>
  <p class="text-sm text-gray-500 mb-4">Salon booking & automation system.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node.js</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">MongoDB</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">REST API</span>
  </div>

  <div class="flex justify-between text-xs text-gray-400">
    <span>+28% bookings</span>
    <a href="#" class="text-orange-500">View</a>
  </div>

</div>

<!-- CARD 3 -->
<div class="project web bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="https://backendcodersindia.com/assets/images/testemonials/skydatech.png" class="w-full h-full object-cover">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
  <div class="flex justify-between text-[10px] text-gray-400 mb-2">
    <span>WEB</span>
    <span class="text-orange-500">JAN 2025</span>
  </div>

  <h3 class="text-lg font-semibold mb-2">Skydatech Technology</h3>
  <p class="text-sm text-gray-500 mb-4">IT consulting & tracking platform.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node.js</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">MongoDB</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">REST API</span>
  </div>

  <div class="flex justify-between text-xs text-gray-400">
    <span>47ms response</span>
    <a href="#" class="text-orange-500">View</a>
  </div>

</div>

<!-- CARD 4 -->
<div class="project ecommerce bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="https://backendcodersindia.com/assets/images/company-icons/childcare.png" class="w-full h-full object-cover">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
  <div class="flex justify-between text-[10px] text-gray-400 mb-2">
    <span>WEB</span>
    <span class="text-orange-500">JAN 2025</span>
  </div>

  <h3 class="text-lg font-semibold mb-2">Alberta ChildCare</h3>
  <p class="text-sm text-gray-500 mb-4">Education portal system.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node.js</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">MongoDB</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">REST API</span>
  </div>

  <div class="flex justify-between text-xs text-gray-400">
    <span>24x7 monitoring</span>
    <a href="#" class="text-orange-500">View</a>
  </div>

</div>

<!-- CARD 5 -->
<div class="project web bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="https://backendcodersindia.com/assets/images/testemonials/marley.png" class="w-full h-full object-cover">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
   <div class="flex justify-between text-[10px] text-gray-400 mb-2">
    <span>WEB</span>
    <span class="text-orange-500">JAN 2025</span>
  </div>

  <h3 class="text-lg font-semibold mb-2">Marley Moves</h3>
  <p class="text-sm text-gray-500 mb-4">Logistics control system.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node.js</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">MongoDB</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">REST API</span>
  </div>

  <div class="flex justify-between text-xs text-gray-400">
    <span>+41% throughput</span>
    <a href="#" class="text-orange-500">View</a>
  </div>

</div>

<!-- CARD 6 -->
<div class="project crm bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="https://backendcodersindia.com/assets/images/testemonials/er.png" class="w-full h-full object-cover">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
  <div class="flex justify-between text-[10px] text-gray-400 mb-2">
    <span>CRM</span>
    <span class="text-orange-500">JAN 2025</span>
  </div>

  <h3 class="text-lg font-semibold mb-2">ER Data Solutions</h3>
  <p class="text-sm text-gray-500 mb-4">CRM dashboard & analytics.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node.js</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">MongoDB</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">REST API</span>
  </div>

  <div class="flex justify-between text-xs text-gray-400">
    <span>+31% accuracy</span>
    <a href="#" class="text-orange-500">View</a>
  </div>
</div>

<!-- more -->
  <!-- CARD 1 -->
<div class="project web bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="{{asset('assets/ai_demo/dental_clinic/1.png')}}" class="w-full h-full object-cover group-hover:scale-105 transition">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
  <div class="p-5 space-y-3">
    <div class="flex justify-between text-xs text-gray-500 uppercase">
      <span>Web</span><span class="text-orange-500 font-semibold">Jan 2025</span>
    </div>
    <h3 class="text-xl font-semibold">Bright Smile</h3>
    <p class="text-sm text-gray-600">Dental clinic management system.</p>
    <div class="flex gap-2 flex-wrap">
      <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node</span>
      <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Mongo</span>
    </div>
    <div class="flex justify-between text-xs text-gray-500">
      <span>+650 drivers</span>
      <a href="#" class="text-orange-500 font-semibold">View</a>
    </div>
  </div>

</div>

<!-- CARD 2 -->
<div class="project saas bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="{{asset('assets/ai_demo/gym/1.png')}}" class="w-full h-full object-cover">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
   <div class="flex justify-between text-[10px] text-gray-400 mb-2">
    <span>SAAS</span>
    <span class="text-orange-500">JAN 2025</span>
  </div>

  <h3 class="text-lg font-semibold mb-2">Fitness Club</h3>
  <p class="text-sm text-gray-500 mb-4">Gym management & fitness tracking system.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node.js</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">MongoDB</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">REST API</span>
  </div>

  <div class="flex justify-between text-xs text-gray-400">
    <span>+28% bookings</span>
    <a href="#" class="text-orange-500">View</a>
  </div>

</div>

<!-- CARD 3 -->
<div class="project web bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="{{asset('assets/ai_demo/incredible_india/1.png')}}" class="w-full h-full object-cover">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
  <div class="flex justify-between text-[10px] text-gray-400 mb-2">
    <span>WEB</span>
    <span class="text-orange-500">JAN 2025</span>
  </div>

  <h3 class="text-lg font-semibold mb-2">Incredible India</h3>
  <p class="text-sm text-gray-500 mb-4">Tourism & travel platform.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node.js</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">MongoDB</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">REST API</span>
  </div>

  <div class="flex justify-between text-xs text-gray-400">
    <span>47ms response</span>
    <a href="#" class="text-orange-500">View</a>
  </div>

</div>

<!-- CARD 4 -->
<div class="project ecommerce bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="{{asset('assets/ai_demo/plumber/1.png')}}" class="w-full h-full object-cover">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
  <div class="flex justify-between text-[10px] text-gray-400 mb-2">
    <span>WEB</span>
    <span class="text-orange-500">JAN 2025</span>
  </div>

  <h3 class="text-lg font-semibold mb-2">Quick Fix</h3>
  <p class="text-sm text-gray-500 mb-4">Plumbing service booking system.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node.js</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">MongoDB</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">REST API</span>
  </div>

  <div class="flex justify-between text-xs text-gray-400">
    <span>24x7 monitoring</span>
    <a href="#" class="text-orange-500">View</a>
  </div>

</div>

<!-- CARD 5 -->
<div class="project web bg-white rounded-3xl shadow-lg overflow-hidden p-5 group hover:-translate-y-1 hover:shadow-2xl transition">
  <div class="relative h-44 overflow-hidden mb-4">
    <img src="{{asset('assets/ai_demo/restaurant/1.png')}}" class="w-full h-full object-cover">
    <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full">LIVE</span>
  </div>
   <div class="flex justify-between text-[10px] text-gray-400 mb-2">
    <span>WEB</span>
    <span class="text-orange-500">JAN 2025</span>
  </div>

  <h3 class="text-lg font-semibold mb-2">Savory Bites</h3>
  <p class="text-sm text-gray-500 mb-4">Restaurant management & ordering system.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">Node.js</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">MongoDB</span>
    <span class="bg-orange-100 text-orange-500 text-xs px-3 py-1 rounded-full">REST API</span>
  </div>

  <div class="flex justify-between text-xs text-gray-400">
    <span>+41% throughput</span>
    <a href="#" class="text-orange-500">View</a>
  </div>

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
        <a href="#" class="bg-[#FD5528] text-white px-6 py-3 rounded-xl font-semibold shadow hover:scale-105 transition">
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
   

    <!-- TITLE -->
    <h2 class="mt-6 text-3xl md:text-5xl font-bold text-black">
      What Our <span class="text-[#FD5528]">Clients Say</span>
    </h2>

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
        <img src="https://randomuser.me/api/portraits/women/68.jpg"
             class="w-12 h-12 rounded-full object-cover">

        <!-- VERIFIED BADGE -->
        <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
      </div>

      <div>
        <h4 class="font-semibold text-gray-900 text-sm">Aimee H</h4>
        <p class="text-xs text-gray-500">1 January 2026</p>
      </div>
    </div>

    <!-- GOOGLE LOGO -->
    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
         class="w-12 opacity-80">
  </div>

  <!-- STARS -->
  <div class="flex items-center gap-1 mb-3">
    <span class="text-yellow-400 text-lg">★★★★★</span>
  </div>

  <!-- REVIEW TEXT -->
  <p class="text-gray-700 text-start text-sm leading-relaxed mb-4">
    This is a really wonderful experience on all counts. The food was lovely, traditional, and of excellent quality with very polite and attentive service.
  </p>

  <!-- FOOTER -->
  <div class="flex items-center justify-between text-xs text-gray-400">

    <!-- CATEGORY -->
    <span class="bg-gray-100 px-2 py-1 rounded-full text-gray-500">
      Verified Review
    </span>

    <!-- ACTION -->
    <button class="flex items-center gap-1 hover:text-[#FD5528] transition">
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
        <img src="https://randomuser.me/api/portraits/women/44.jpg"
             class="w-12 h-12 rounded-full object-cover">

        <!-- VERIFIED BADGE -->
        <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
      </div>

      <div>
        <h4 class="font-semibold text-gray-900 text-sm">Sophia Green</h4>
        <p class="text-xs text-gray-500">1 January 2026</p>
      </div>
    </div>

    <!-- GOOGLE LOGO -->
    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
         class="w-12 opacity-80">
  </div>

  <!-- STARS -->
  <div class="flex items-center gap-1 mb-3">
    <span class="text-yellow-400 text-lg">★★★★★</span>
  </div>

  <!-- REVIEW TEXT -->
  <p class="text-gray-700 text-start text-sm leading-relaxed mb-4">
    This is a really wonderful experience on all counts.  Outstanding UI and backend performance. Our bookings increased significantly.
  </p>

  <!-- FOOTER -->
  <div class="flex items-center justify-between text-xs text-gray-400">

    <!-- CATEGORY -->
    <span class="bg-gray-100 px-2 py-1 rounded-full text-gray-500">
      Verified Review
    </span>

    <!-- ACTION -->
    <button class="flex items-center gap-1 hover:text-[#FD5528] transition">
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
        <img src="https://randomuser.me/api/portraits/women/44.jpg"
             class="w-12 h-12 rounded-full object-cover">

        <!-- VERIFIED BADGE -->
        <span class="absolute -bottom-1 -right-1 bg-green-500 text-white text-[10px] px-1 rounded-full">✔</span>
      </div>

      <div>
        <h4 class="font-semibold text-gray-900 text-sm">Daniel Smith</h4>
        <p class="text-xs text-gray-500">1 January 2026</p>
      </div>
    </div>

    <!-- GOOGLE LOGO -->
    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
         class="w-12 opacity-80">
  </div>

  <!-- STARS -->
  <div class="flex items-center gap-1 mb-3">
    <span class="text-yellow-400 text-lg">★★★★★</span>
  </div>

  <!-- REVIEW TEXT -->
  <p class="text-gray-700 text-start text-sm leading-relaxed mb-4">
    This is a really wonderful experience on all counts.   Professional team with strong technical expertise. They understand business needs..
  </p>

  <!-- FOOTER -->
  <div class="flex items-center justify-between text-xs text-gray-400">

    <!-- CATEGORY -->
    <span class="bg-gray-100 px-2 py-1 rounded-full text-gray-500">
      Verified Review
    </span>

    <!-- ACTION -->
    <button class="flex items-center gap-1 hover:text-[#FD5528] transition">
      Director
    </button>

  </div>

</div>


         
        </div>

      </div>

    
    </div>

  </div>

</section>


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

