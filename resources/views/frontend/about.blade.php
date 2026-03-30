@extends('component.main')
@section('content')
{{--  --}}
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <!-- LEFT CONTENT -->
      <div data-aos="fade-right">

        <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
          About <span class="text-primary">Backend Coders India</span>
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
            <h5 class="text-3xl font-bold text-primary">17+</h5>
            <p class="text-sm text-gray-500 mt-1">Years Experience</p>
          </div>

          <div data-aos="zoom-in" data-aos-delay="200"
               class="bg-white p-6 rounded-2xl shadow-md text-center hover:shadow-xl hover:-translate-y-1 transition duration-300">
            <h5 class="text-3xl font-bold text-primary">500+</h5>
            <p class="text-sm text-gray-500 mt-1">Projects Delivered</p>
          </div>

        </div>

        <!-- Button -->
        <a href="#"
           data-aos="fade-up"
           class="inline-flex items-center gap-2 bg-primary text-white px-7 py-3 rounded-xl font-semibold shadow-lg hover:primary hover:scale-105 transition duration-300">

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


{{--  --}}
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Heading -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900">
        Our <span class="text-primary">Mission & Vision</span>
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
        <div class="w-14 h-14 flex items-center justify-center bg-primary text-white rounded-xl mb-6 shadow-md">
          <img src="https://img.icons8.com/?size=100&id=lEDHtWo9fVxM&format=png&color=FFFFFF" alt="">
        </div>

        <p class="text-xs uppercase tracking-[0.4em] text-[#F44918]">
          Mission
        </p>

        <h3 class="mt-3 text-2xl md:text-3xl font-bold text-gray-900 group-hover:text-primary transition">
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

        <h3 class="mt-3 text-2xl md:text-3xl font-bold text-gray-900 group-hover:text-primary transition">
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


      <!-- <section class="px-4 py-16 md:py-20 bg-slate-50" data-aos="fade-up">
        <div class="max-w-6xl mx-auto grid gap-10 md:grid-cols-2">
          <div>
            <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Engineering mindset</p>
            <h2 class="mt-3 text-3xl font-semibold text-slate-900">Engineering culture meets product thinking</h2>
            <p class="mt-3 text-sm text-slate-600 leading-relaxed">Pods blend architectural rigor, experimentation, and transparent reporting so teams can iterate confidently.</p>
            <ul class="mt-4 space-y-2 text-sm text-slate-600 list-disc pl-5">
              <li>Daily syncs with product, design, and QA.</li>
              <li>Architecture reviews with shared ownership.</li>
              <li>Cross-team learning sessions every sprint.</li>
              <li>Blameless post-mortems and safe experiments.</li>
            </ul>
          </div>
          <div>
            <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Collaboration culture</p>
            <h3 class="mt-3 text-2xl font-semibold text-slate-900">We ship in close partnership</h3>
            <p class="mt-3 text-sm text-slate-600 leading-relaxed">Engineers, architects, and delivery leads embed with product teams, pairing constantly and sharing progress in transparent dashboards.</p>
            <div class="mt-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm relative overflow-hidden">
              <div class="absolute -right-6 -top-6 h-20 w-20 rounded-3xl bg-gradient-to-br from-primary to-[#182663] opacity-60 blur-2xl"></div>
              <p class="relative text-sm text-slate-600">Embedded rituals include co-planning, architecture guilds, and shared accountability for metrics.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="px-4 py-16 md:py-20" data-aos="fade-up">
        <div class="max-w-6xl mx-auto">
          <div class="flex items-center justify-between">
            <p class="text-[0.7rem] uppercase tracking-[0.4em] text-primary font-semibold">Timeline</p>
            <span class="text-xs text-slate-500">Seventeen years of backend focus</span>
          </div>
          <div class="mt-8 glow-slab p-10 shadow-lg">
            <div class="timeline-line">
              
              <div class="timeline-entry" data-aos="fade-right" data-aos-delay="0">
                <div class="flex items-start gap-4">
                  <span class="timeline-icon">1</span>
                  <div>
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Year 1</p>
                    <p class="text-lg font-semibold text-slate-900">Company founded</p>
                    <p class="text-sm text-slate-500">Backend Coders India began as a backend consultancy guiding manufacturing ERP and integration work.</p>
                  </div>
                </div>
              </div>
            
              <div class="timeline-entry" data-aos="fade-right" data-aos-delay="80">
                <div class="flex items-start gap-4">
                  <span class="timeline-icon">2</span>
                  <div>
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Year 3</p>
                    <p class="text-lg font-semibold text-slate-900">First enterprise platform</p>
                    <p class="text-sm text-slate-500">Delivered a multi-country ERP stack with finance and logistics automation across eight sites.</p>
                  </div>
                </div>
              </div>
            
              <div class="timeline-entry" data-aos="fade-right" data-aos-delay="160">
                <div class="flex items-start gap-4">
                  <span class="timeline-icon">3</span>
                  <div>
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Year 5</p>
                    <p class="text-lg font-semibold text-slate-900">International clients</p>
                    <p class="text-sm text-slate-500">Started advising product and cloud leaders in the US, Middle East, and Europe.</p>
                  </div>
                </div>
              </div>
            
              <div class="timeline-entry" data-aos="fade-right" data-aos-delay="240">
                <div class="flex items-start gap-4">
                  <span class="timeline-icon">4</span>
                  <div>
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Year 10</p>
                    <p class="text-lg font-semibold text-slate-900">Scaling engineering teams</p>
                    <p class="text-sm text-slate-500">Expanded into pods pairing architects, backend engineers, and DevOps specialists.</p>
                  </div>
                </div>
              </div>
            
              <div class="timeline-entry" data-aos="fade-right" data-aos-delay="320">
                <div class="flex items-start gap-4">
                  <span class="timeline-icon">5</span>
                  <div>
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Year 17+</p>
                    <p class="text-lg font-semibold text-slate-900">Trusted development partner</p>
                    <p class="text-sm text-slate-500">Today we co-engineer platforms, APIs, and infrastructure for ambitious product teams.</p>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </section>
      <section class="px-4 py-12 md:py-16" data-aos="fade-up">
        <div class="max-w-6xl mx-auto">
          <div class="rounded-[2rem] border border-slate-100 bg-gradient-to-r from-primary via-indigo-900 to-[#1f3273] p-10 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_top,_rgba(255,106,40,0.6),_transparent_55%)]"></div>
            <div class="relative space-y-4">
              <p class="text-[0.7rem] uppercase tracking-[0.4em] text-white/80">Next step</p>
              <h2 class="text-3xl font-semibold">Bring us into your backend conversations</h2>
              <p class="text-sm text-white/90 leading-relaxed">Share your architecture sketch, backlog, or sprint plan and we will map an engineering partnership with clarity.</p>
              <div class="flex flex-wrap gap-3 pt-4">
                <a href="contact.html" class="inline-flex items-center gap-2 rounded-full bg-white px-5 py-3 text-sm font-semibold text-primary">Schedule a discovery</a>
                <a href="services.html" class="inline-flex items-center gap-2 rounded-full border border-white/70 px-5 py-3 text-sm font-semibold text-white hover:bg-white/10">Review services</a>
              </div>
            </div>
          </div>
        </div>
      </section>  -->

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
{{--  --}}

{{--  --}}
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Heading -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900">
        Our <span class="text-[#F44918]">Journey</span>
      </h2>
      <p class="text-gray-500 mt-4">
        17+ years of building scalable backend systems
      </p>
    </div>

    <!-- Timeline -->
    <div class="space-y-10">

      <!-- Item -->
      <div class="flex gap-6 items-start" data-aos="fade-right">
        <div class="w-12 h-12 flex items-center justify-center bg-[#F44918] text-white rounded-full font-bold shadow-lg">1</div>
        <div>
          <h4 class="text-lg font-semibold text-gray-900">Company Founded</h4>
          <p class="text-gray-600 text-sm mt-1">Started as backend consultancy.</p>
        </div>
      </div>

      <div class="flex gap-6 items-start" data-aos="fade-right" data-aos-delay="100">
        <div class="w-12 h-12 flex items-center justify-center bg-[#F44918] text-white rounded-full font-bold shadow-lg">2</div>
        <div>
          <h4 class="text-lg font-semibold text-gray-900">Enterprise Platform</h4>
          <p class="text-gray-600 text-sm mt-1">Delivered multi-country ERP.</p>
        </div>
      </div>

      <div class="flex gap-6 items-start" data-aos="fade-right" data-aos-delay="200">
        <div class="w-12 h-12 flex items-center justify-center bg-[#F44918] text-white rounded-full font-bold shadow-lg">3</div>
        <div>
          <h4 class="text-lg font-semibold text-gray-900">Global Clients</h4>
          <p class="text-gray-600 text-sm mt-1">Expanded internationally.</p>
        </div>
      </div>

      <div class="flex gap-6 items-start" data-aos="fade-right" data-aos-delay="300">
        <div class="w-12 h-12 flex items-center justify-center bg-[#F44918] text-white rounded-full font-bold shadow-lg">4</div>
        <div>
          <h4 class="text-lg font-semibold text-gray-900">Scaling Teams</h4>
          <p class="text-gray-600 text-sm mt-1">Built engineering pods.</p>
        </div>
      </div>

      <div class="flex gap-6 items-start" data-aos="fade-right" data-aos-delay="400">
        <div class="w-12 h-12 flex items-center justify-center bg-[#F44918] text-white rounded-full font-bold shadow-lg">5</div>
        <div>
          <h4 class="text-lg font-semibold text-gray-900">Trusted Partner</h4>
          <p class="text-gray-600 text-sm mt-1">Co-engineering platforms globally.</p>
        </div>
      </div>

    </div>

  </div>
</section>
{{--  --}}

{{--  --}}
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





  @endsection