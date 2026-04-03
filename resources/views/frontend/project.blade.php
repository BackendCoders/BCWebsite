
@extends('component.main')

@section('content')

<!-- HERO BANNER -->
<section class="bg-gradient-to-r from-[#FC5124] to-orange-600 text-white py-20">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">
      Our Projects
    </h1>
    <p class="text-lg text-white/90 max-w-2xl mx-auto">
      Delivering scalable, high-performance backend solutions for real-world applications.
    </p>
  </div>
</section>

<!-- FILTER BAR -->
<!-- <section class="bg-white py-6 shadow-sm sticky top-0 z-20">
  <div class="max-w-7xl mx-auto px-6 flex flex-wrap gap-3 justify-center">
    <button class="px-5 py-2 rounded-full bg-[#FC5124] text-white text-sm">All</button>
    <button class="px-5 py-2 rounded-full bg-gray-100 text-gray-700 text-sm hover:bg-[#FC5124] hover:text-white">Web Apps</button>
    <button class="px-5 py-2 rounded-full bg-gray-100 text-gray-700 text-sm hover:bg-[#FC5124] hover:text-white">API</button>
    <button class="px-5 py-2 rounded-full bg-gray-100 text-gray-700 text-sm hover:bg-[#FC5124] hover:text-white">Mobile</button>
  </div>
</section> -->

<!-- PROJECT GRID -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-4xl font-bold text-center mb-12 py-4">
      Featured <span class="text-[#F44918]"> Work</span>
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- CARD -->

      <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/company-icons/page1.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
           Ace Taxis UK
          </h3>

          <p class="text-gray-600 text-sm mb-4">
            Ace Taxis is U.K based cab booking and dispatch system. Performming for multiple drivers and users.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>
       <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/company-icons/1.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
           Tanning Salon Management System
          </h3>

          <p class="text-gray-600 text-sm mb-4">
           Sunkissed Tanning Salon is a UK-based tanning salon that offers both tanning bed and spray tan services. Known for providing a safe and effective way to achieve a sun-kissed glow, the salon uses top-of-the-line equipment and premium tanning products to deliver a natural-looking tan.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>
    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/testemonials/skydatech.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
          Skydatech Technology
          </h3>

          <p class="text-gray-600 text-sm mb-4">
            Skydatech is a customer-focused and technology-driven consulting firm providing IT Consulting, staffing, product engineering, and enterprise application development services that help our customers craft value for their software development results.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>
    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/company-icons/childcare.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
           Alberta ChildCare
          </h3>

          <p class="text-gray-600 text-sm mb-4">
            Alberta ChildCare Venture providing a nurturing environment where children can learn, play, and grow. We are committed to fostering the intellectual, social, emotional, and physical development of each child in our care.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>
    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/testemonials/marley.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
            Marley Moves
          </h3>

          <p class="text-gray-600 text-sm mb-4">
            At Marley Moves, they are providing seamless, reliable, and stress-free relocation services for families, businesses, and individuals.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
      </div>

    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/testemonials/er.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
          ER Data Solutionsm
          </h3>

          <p class="text-gray-600 text-sm mb-4">
         This is a small CRM system where user maintaining his profile with multiple Power BI dashboards and creating query system for end users.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">

        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="https://backendcodersindia.com/assets/images/company-icons/demo.png"
               class="w-full h-52 object-cover group-hover:scale-110 transition duration-500">

          <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full">
            Live
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-5">

          <h3 class="text-lg font-bold mb-2 text-gray-800">
          Demo Cycle
          </h3>

          <p class="text-gray-600 text-sm mb-4">
     This is E-Commerce Sample website for our U.K based client for their undergoing E-POS project.
          </p>

          <!-- TECH -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">Node.js</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">MongoDB</span>
            <span class="bg-orange-100 text-[#FC5124] text-xs px-3 py-1 rounded-full">REST API</span>
          </div>

          <!-- FOOTER -->
          <div class="flex justify-between items-center">
            <span class="text-xs text-gray-400">Jan 2025</span>
            <a href="#" class="text-[#FC5124] font-semibold text-sm hover:underline">
              View
            </a>
          </div>

        </div>
    </div>

</section>

<!-- CLIENTS SHOWCASE -->
<section class="relative overflow-hidden bg-white py-20 text-[#0D0D0D]">
  <div class="pointer-events-none absolute inset-0 opacity-70">
    <div class="absolute -top-12 -left-6 h-40 w-40 rounded-full bg-[#FD5528]/20 blur-3xl"></div>
    <div class="absolute bottom-10 right-10 h-56 w-56 rounded-full bg-[#0D0D0D]/10 blur-[140px]"></div>
    <div class="absolute top-12 right-2 h-32 w-32 rounded-full bg-[#FD5528]/10 blur-2xl"></div>
  </div>

  <div class="relative max-w-7xl mx-auto px-6 space-y-10">
    <div class="flex flex-col gap-3 text-center md:text-left md:flex-row md:items-end md:justify-between">
      <div>
        <p class="text-xs font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
          Our Clients
        </p>
        <h2 class="mt-2 text-3xl md:text-4xl font-bold text-[#0D0D0D]">
          Partners who trust Backend Coders India for bold product builds
        </h2>
      </div>
      <div class="text-xs uppercase text-gray-500 tracking-[0.4em]">
        Since 2007 &middot; Global HQ in India
      </div>
    </div>

    <div class="grid gap-8 lg:grid-cols-3">
      <article class="relative overflow-hidden rounded-3xl border border-[#e5e5e5] bg-white p-6 shadow-[0_20px_70px_rgba(15,23,42,0.12)] transition duration-500 hover:-translate-y-1">
        <div class="absolute inset-0 opacity-0 transition duration-500 hover:opacity-60">
          <div class="absolute -top-6 -right-10 h-32 w-32 rounded-full bg-gradient-to-br from-[#FD5528]/40 to-transparent blur-3xl"></div>
        </div>
        <div class="flex items-center gap-3">
          <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-[#FD5528] to-[#fbbc04] flex items-center justify-center text-lg text-black shadow-lg animate-pulse">
            ★
          </div>
          <div>
            <p class="text-sm uppercase tracking-[0.4em] text-gray-400">Impact</p>
            <p class="text-3xl font-bold text-[#0D0D0D]">96%</p>
          </div>
        </div>
        <p class="mt-4 text-sm text-gray-600">
          Satisfaction measured across responsiveness, delivery quality, and proactive post-launch care over the last 12 months.
        </p>
        <div class="mt-6 flex flex-wrap gap-2 text-[0.65rem] font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
          <span class="rounded-full border border-[#FD5528]/30 px-3 py-1 bg-white">Dedicated teams</span>
          <span class="rounded-full border border-[#FD5528]/30 px-3 py-1 bg-white">SLA-driven</span>
          <span class="rounded-full border border-[#FD5528]/30 px-3 py-1 bg-white">Cohesive squads</span>
        </div>
        <div class="mt-6 space-y-2">
          <div class="h-2 rounded-full bg-[#f2f2f2]">
            <div class="h-full w-3/4 rounded-full bg-gradient-to-r from-[#FD5528] to-[#fbbc04]"></div>
          </div>
          <p class="text-xs text-gray-400">Delivery health score</p>
        </div>
      </article>

      <article class="rounded-3xl border border-[#e5e5e5] bg-white p-6 shadow-[0_20px_70px_rgba(15,23,42,0.12)] relative">
        <div class="flex flex-wrap items-center gap-4">
          <span class="text-xs font-semibold tracking-[0.4em] text-gray-500">Logos</span>
          <span class="flex-1 border-t border-gray-200"></span>
        </div>
        <div class="mt-6 overflow-hidden rounded-2xl border border-[#f2f2f2] bg-[#fafafa]">
          <div class="animate-logoribbon flex min-w-full gap-8 px-6 py-6">
            <div class="flex flex-col items-center gap-2 text-[#0D0D0D]">
              <img src="https://backendcodersindia.com/assets/images/company-icons/page1.png" alt="Ace Taxis" class="h-10">
              <span class="text-[0.65rem] uppercase tracking-[0.35em]">Ace Taxis</span>
            </div>
            <div class="flex flex-col items-center gap-2 text-[#0D0D0D]">
              <img src="https://backendcodersindia.com/assets/images/company-icons/demo.png" alt="Demo Cycle" class="h-10">
              <span class="text-[0.65rem] uppercase tracking-[0.35em]">Demo Cycle</span>
            </div>
            <div class="flex flex-col items-center gap-2 text-[#0D0D0D]">
              <img src="https://backendcodersindia.com/assets/images/testemonials/marley.png" alt="Marley Moves" class="h-10">
              <span class="text-[0.65rem] uppercase tracking-[0.35em]">Marley Moves</span>
            </div>
            <div class="flex flex-col items-center gap-2 text-[#0D0D0D]">
              <img src="https://backendcodersindia.com/assets/images/testemonials/skydatech.png" alt="Skydatech" class="h-10">
              <span class="text-[0.65rem] uppercase tracking-[0.35em]">Skydatech</span>
            </div>
            <div class="flex flex-col items-center gap-2 text-[#0D0D0D]">
              <img src="https://backendcodersindia.com/assets/images/company-icons/childcare.png" alt="Alberta" class="h-10">
              <span class="text-[0.65rem] uppercase tracking-[0.35em]">Alberta</span>
            </div>
            <div class="flex flex-col items-center gap-2 text-[#0D0D0D]">
              <img src="https://backendcodersindia.com/assets/images/testemonials/er.png" alt="ER Data" class="h-10">
              <span class="text-[0.65rem] uppercase tracking-[0.35em]">ER Data</span>
            </div>
            <div class="flex flex-col items-center gap-2 text-[#0D0D0D]">
              <img src="https://backendcodersindia.com/assets/images/company-icons/page1.png" alt="Ace Taxis" class="h-10">
              <span class="text-[0.65rem] uppercase tracking-[0.35em]">Ace Taxis</span>
            </div>
          </div>
        </div>
        <p class="mt-4 text-sm text-gray-600">
          The ribbon keeps scrolling to build motion while spotlighting live partners relying on Backend Coders India squads.
        </p>
      </article>

      <article class="rounded-3xl border border-[#e5e5e5] bg-white p-6 shadow-[0_20px_70px_rgba(15,23,42,0.12)]">
        <div class="flex items-center gap-3">
          <div class="text-3xl font-bold text-[#0D0D0D]">12+</div>
          <div>
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400">Markets</p>
            <p class="text-sm text-gray-500">United States, UK, Canada, and UAE</p>
          </div>
        </div>
        <p class="mt-4 text-sm text-gray-600">
          From compliance-heavy finance teams to hyper-growth ecommerce squads, we deliver backend pods that plug straight into your roadmap.
        </p>
        <div class="mt-6 grid grid-cols-2 gap-4">
          <div class="rounded-2xl border border-[#f2f2f2] bg-gradient-to-br from-white to-[#fff3f0] p-4 text-center shadow-inner">
            <p class="text-xs uppercase tracking-[0.35em] text-gray-400">On-demand squads</p>
            <p class="mt-1 text-lg font-semibold text-[#0D0D0D]">3 active</p>
          </div>
          <div class="rounded-2xl border border-[#f2f2f2] bg-gradient-to-br from-white to-[#fff3f0] p-4 text-center shadow-inner">
            <p class="text-xs uppercase tracking-[0.35em] text-gray-400">Average RTT</p>
            <p class="mt-1 text-lg font-semibold text-[#0D0D0D]">2h</p>
          </div>
        </div>
        <div class="mt-6 flex items-center justify-between text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
          <span>Book a partnership call</span>
          <span aria-hidden="true" class="text-lg">→</span>
        </div>
      </article>
    </div>
  </div>

  <style>
    @keyframes ribbon-scroll {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    .animate-logoribbon {
      animation: ribbon-scroll 28s linear infinite;
    }
  </style>
</section>

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


<!-- CTA SECTION -->
<section class="bg-[#FC5124] text-white py-16 text-center">
  <h2 class="text-3xl font-bold mb-4">
    Have a Project in Mind?
  </h2>
  <p class="text-gray-300 mb-6">
    Let’s build scalable and powerful backend systems together.
  </p>

  <a href="#contact"
     class="bg-white text-[#FC5124] px-6 py-3 rounded-lg font-semibold hover:bg-orange-600">
    Contact Us
  </a>
</section>

@endsection

