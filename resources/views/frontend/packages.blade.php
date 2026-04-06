@extends("component.main")
@section("content")
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
      Our Packages
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
      Explore our transparent packages across IT services, digital marketing, graphic design, and SEO. Each lane is designed to meet your product ambition with real commitments and predictable delivery.
    </p>

 

  </div>

</section>
<!-- end hero section  -->




<section class="py-28 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">

  <!-- BACKGROUND GLOW -->
  <div class="absolute top-[-100px] left-[-100px] w-[250px] h-[250px] bg-[#FD5528]/20 blur-[120px] rounded-full"></div>
  <div class="absolute bottom-[-100px] right-[-100px] w-[250px] h-[250px] bg-orange-300/20 blur-[120px] rounded-full"></div>

  <div class="max-w-7xl mx-auto px-6 text-center relative">

    <!-- HEADER -->
    <h2 class="text-3xl md:text-5xl font-bold">
      Our <span class="text-[#FD5528]">Pricing Plans</span>
    </h2>
    <p class="mt-4 text-gray-600 max-w-xl mx-auto">
      Choose the perfect service package tailored for your business growth.
    </p>

    <!-- TABS -->
    <div class="flex flex-wrap justify-center gap-3 mt-10">
      <button class="tab active px-5 py-2 rounded-full border border-[#FD5528] text-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="it">IT Services</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="seo">SEO</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="marketing">Digital Marketing</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="saas">CRM / SaaS</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="app">App Dev</button>
      <button class="tab px-5 py-2 rounded-full border border-[#FD5528] transition hover:bg-[#FD5528] hover:text-white" data-tab="design">Graphic Design</button>
    </div>

    <!-- CONTENT -->
    <div class="mt-16">

      <!-- IT SERVICES -->
        <!-- CARDS -->
    <div class="tab-content active mt-16 grid md:grid-cols-3 gap-8" data-content="it">

      <!-- STARTER -->
      <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 hover:scale-105 transition duration-500 shadow-xl">

        <h3 class="text-xl font-semibold text-orange-400">Starter</h3>
        <p class="text-4xl font-bold mt-4">₹9,999<span class="text-sm text-gray-400">+</span></p>

        <ul class="mt-6 space-y-3 text-sm text-black">
          <li>✔ Web Design (UI/UX)</li>
          <li>✔ Basic Website Development</li>
          <li>✔ SEO Setup</li>
          <li>✔ Responsive Design</li>
        </ul>

        <a href="#" class="mt-8 block text-center border border-orange-400 text-orange-400 py-3 rounded-xl font-semibold hover:bg-orange-500 hover:text-white transition">
          Get Started →
        </a>

      </div>

      <!-- GROWTH (HIGHLIGHTED) -->
      <div class="relative bg-gradient-to-b from-[#FD5528] to-orange-600 rounded-3xl p-8 scale-105 shadow-2xl">

        <!-- BADGE -->
        <span class="absolute top-4 right-4 bg-white text-[#FD5528] text-xs px-3 py-1 rounded-full font-semibold">
          Most Popular
        </span>

        <h3 class="text-xl text-white font-semibold">Growth</h3>
        <p class="text-4xl font-bold mt-4">₹24,999<span class="text-sm opacity-80">+</span></p>

        <ul class="mt-6 space-y-3 text-sm text-white/90">
          <li>✔ Full Web Development</li>
          <li>✔ SEO Optimization</li>
          <li>✔ API Integration</li>
          <li>✔ Performance Optimization</li>
          <li>✔ Digital Marketing</li>
        </ul>

        <a href="#" class="mt-8 block text-center bg-white text-[#FD5528] py-3 rounded-xl font-semibold hover:scale-105 transition">
          Get Started →
        </a>

      </div>

      <!-- ENTERPRISE -->
      <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 hover:scale-105 transition duration-500 shadow-xl">

        <h3 class="text-xl font-semibold text-orange-400">Enterprise</h3>
        <p class="text-4xl font-bold mt-4">Custom</p>

        <ul class="mt-6 space-y-3 text-sm text-black">
          <li>✔ Custom Software Development</li>
          <li>✔ SaaS / App Development</li>
          <li>✔ Advanced Marketing</li>
          <li>✔ Dedicated Team</li>
          <li>✔ Priority Support</li>
        </ul>

        <a href="#" class="mt-8 block text-center border border-orange-400 text-orange-400 py-3 rounded-xl font-semibold hover:bg-orange-500 hover:text-white transition">
          Contact Us →
        </a>

      </div>

    </div>


      <!-- SEO -->
      <div class="tab-content hidden grid md:grid-cols-3 gap-8" data-content="seo">

      <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 hover:scale-105 transition duration-500 shadow-xl">

        <h3 class="text-xl font-semibold text-orange-400">Starter SEO</h3>
        <p class="text-4xl font-bold mt-4">₹9,999<span class="text-sm text-gray-400">+</span></p>

        <ul class="mt-6 space-y-3 text-sm text-black">
          <li>✔ Keyword Research</li>
          <li>✔ On-page SEO</li>
          <li>✔ SEO Setup</li>
          <li>✔ Responsive Design</li>
        </ul>

        <a href="#" class="mt-8 block text-center border border-orange-400 text-orange-400 py-3 rounded-xl font-semibold hover:bg-orange-500 hover:text-white transition">
          Get Started →
        </a>

      </div>
       

        <div class="bg-[#FD5528] rounded-3xl p-8 shadow border-2 border-[#FD5528] scale-105">
          <!-- BADGE -->
        <span class="absolute top-4 right-4 bg-white text-[#FD5528] text-xs px-3 py-1 rounded-full font-semibold">
          Most Popular
        </span>

        <h3 class="text-xl text-white font-semibold">Growth SEO</h3>
        <p class="text-4xl font-bold mt-4">₹12,000/mo<span class="text-sm opacity-80">+</span></p>

        <ul class="mt-6 space-y-3 text-sm text-white/90">
          <li>✔ Technical SEO</li>
          <li>✔ Backlinks</li>
          <li>✔ Reporting & Analytics</li>
          <li>✔ Performance Optimization</li>
          <li>✔ Digital Marketing</li>
        </ul>

        <a href="#" class="mt-8 block text-center bg-white text-[#FD5528] py-3 rounded-xl font-semibold hover:scale-105 transition">
          Get Started →
        </a>
         
        </div>

        <div class="bg-white rounded-3xl p-8 shadow">
          <h3 class="text-xl font-semibold text-orange-400">Advanced SEO</h3>
        <p class="text-4xl font-bold mt-4">Custom</p>

        <ul class="mt-6 space-y-3 text-sm text-black">
          <li>✔ Custom Software Development</li>
          <li>✔ SaaS / App Development</li>
          <li>✔ Advanced Marketing</li>
          <li>✔ Dedicated Team</li>
          <li>✔ Priority Support</li>
        </ul>

        <a href="#" class="mt-8 block text-center border border-orange-400 text-orange-400 py-3 rounded-xl font-semibold hover:bg-orange-500 hover:text-white transition">
          Contact Us →
        </a>

        </div>

      </div>

      <!-- MARKETING -->
      <div class="tab-content hidden grid md:grid-cols-3 gap-8" data-content="marketing">

        <div class="bg-white rounded-3xl p-8 shadow">
          <h3>Basic Marketing</h3>
          <p class="text-3xl font-bold mt-4">₹8,000/mo</p>
        
        <ul class="mt-6 space-y-3 text-sm text-black">
          <li>✔ Keyword Research</li>
          <li>✔ On-page SEO</li>
          <li>✔ SEO Setup</li>
          <li>✔ Responsive Design</li>
        </ul>

        <a href="#" class="mt-8 block text-center border border-orange-400 text-orange-400 py-3 rounded-xl font-semibold hover:bg-orange-500 hover:text-white transition">
          Get Started →
        </a>
        </div>

        <div class="bg-[#FD5528] rounded-3xl p-8 shadow border-2 border-[#FD5528] scale-105">
          <h3>Pro Marketing</h3>
          <p class="text-3xl font-bold mt-4">₹18,000/mo</p>
          <ul class="mt-6 space-y-3 text-sm text-white/90">
          <li>✔ Technical SEO</li>
          <li>✔ Backlinks</li>
          <li>✔ Reporting & Analytics</li>
          <li>✔ Performance Optimization</li>
          <li>✔ Digital Marketing</li>
        </ul>

        <a href="#" class="mt-8 block text-center bg-white text-[#FD5528] py-3 rounded-xl font-semibold hover:scale-105 transition">
          Get Started →
        </a>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow">
          <h3>Advanced Marketing</h3>
          <p class="text-3xl font-bold mt-4">₹35,000/mo</p>
          <p class="text-4xl font-bold mt-4">Custom</p>

        <ul class="mt-6 space-y-3 text-sm text-black">
          <li>✔ Custom Software Development</li>
          <li>✔ SaaS / App Development</li>
          <li>✔ Advanced Marketing</li>
          <li>✔ Dedicated Team</li>
          <li>✔ Priority Support</li>
        </ul>

        <a href="#" class="mt-8 block text-center border border-orange-400 text-orange-400 py-3 rounded-xl font-semibold hover:bg-orange-500 hover:text-white transition">
          Contact Us →
        </a>

        </div>

      </div>

    </div>

  </div>

</section>

<script>
const tabs = document.querySelectorAll(".tab");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {

    tabs.forEach(t => t.classList.remove("bg-[#FD5528]","text-white"));
    tab.classList.add("bg-[#FD5528]","text-white");

    const target = tab.dataset.tab;

    contents.forEach(c => {
      c.classList.add("hidden");
      if (c.dataset.content === target) {
        c.classList.remove("hidden");
      }
    });

  });
});
</script>

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



{{-- faq --}}
<section class="relative overflow-hidden bg-gradient-to-br from-white via-slate-50 to-slate-100 py-16 sm:py-20 lg:py-24 px-4 sm:px-6">

  <div class="max-w-6xl lg:max-w-7xl mx-auto relative z-10">

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
        Everything you need to know about partnering with Backend Coders — transparency, headcount, and support wrapped in a confident delivery process.
      </p>
    </div>

    <!-- Stats -->
    {{-- <div class="mb-10 grid sm:grid-cols-3 gap-4">
      <div class="bg-white/90 border border-white shadow-lg rounded-2xl px-6 py-4 text-center backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Teams</p>
        <p class="mt-2 text-2xl font-semibold text-slate-900">40+</p>
        <p class="text-xs text-slate-500">Dedicated squads on standby</p>
      </div>
      <div class="bg-white/90 border border-white shadow-lg rounded-2xl px-6 py-4 text-center backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Projects</p>
        <p class="mt-2 text-2xl font-semibold text-slate-900">200+</p>
        <p class="text-xs text-slate-500">Enterprise-grade rollouts</p>
      </div>
      <div class="bg-white/90 border border-white shadow-lg rounded-2xl px-6 py-4 text-center backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Coverage</p>
        <p class="mt-2 text-2xl font-semibold text-slate-900">24/7</p>
        <p class="text-xs text-slate-500">Monitoring + support windows</p>
      </div>
    </div> --}}

    <!-- GRID -->
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start">

      <!-- LEFT IMAGE -->
      <div class="order-1 lg:order-2 relative rounded-[32px] bg-gradient-to-br from-[#FFEDD5] via-white to-[#FEE2E2] p-6 shadow-[0_25px_60px_rgba(253,85,40,0.25)]">
        <div class="absolute inset-x-4 top-4 h-2 rounded-full bg-gradient-to-r from-[#FD5528]/60 to-orange-200/70 blur-3xl opacity-70"></div>
        <img 
          src="{{asset('assets/images/faq.png')}}"
          alt="FAQ Illustration"
          class="rounded-2xl shadow-2xl w-full h-[360px] object-cover relative z-10"
        >
      </div>

      <!-- FAQ LIST -->
      <div class="order-2 lg:order-1 space-y-4">

        @php
          $faqs = [
            ['title' => 'What services do you offer?', 'description' => 'Backend engineering, API design, cloud architecture, automation, and enterprise-grade solutions that keep scaling teams aligned.'],
            ['title' => 'Which technologies do you work with?', 'description' => '.NET Core, Node.js, Laravel, Go, SQL Server, PostgreSQL, Redis, Kafka, Azure, AWS, and modern DevOps pipelines.'],
            ['title' => 'Do you provide dedicated development teams?', 'description' => 'Yes, our specialists embed within your product organization with dedicated project leads and sprint reporting.'],
            ['title' => 'How do you ensure scalability and performance?', 'description' => 'We architect microservices, apply caching strategies, optimize storage, and add observability to catch regressions early.'],
            ['title' => 'What is your development process?', 'description' => 'We follow a structured agile cadence: discovery, roadmap, sprint-based delivery, QA, deployment, and post-launch retrospectives.'],
            ['title' => 'Do you provide post-launch support?', 'description' => 'Long-term maintenance, 24/7 monitoring, release planning, and scaling support are included in every retainer plan.'],
          ];
        @endphp

        @foreach ($faqs as $faq)
          <details class="group bg-white border border-gray-200 rounded-2xl p-5 shadow-sm open:shadow-md transition duration-300">
            <summary class="flex justify-between items-center cursor-pointer list-none">
              <span class="font-medium text-slate-900 text-base md:text-lg">
                {{ $faq['title'] }}
              </span>
              <span class="text-[#FD5528] text-2xl transition-transform duration-300 group-open:rotate-45">
                +
              </span>
            </summary>
            <p class="mt-3 text-sm text-slate-500 leading-relaxed">
              {{ $faq['description'] }}
            </p>
          </details>
        @endforeach

       

      </div>

    </div>

  </div>

  <div class="pointer-events-none absolute inset-0 opacity-50">
    <div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-[#FD5528]/5 to-transparent"></div>
    <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-[#0F172A]/5 to-transparent"></div>
  </div>

</section>



<!-- CTA -->
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
