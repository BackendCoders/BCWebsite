@extends('component.main')
@section('content')

<!-- HERO -->
<section class="max-w-6xl mx-auto px-6 py-16 text-center space-y-6">
  <p class="text-xs uppercase tracking-[0.5em] text-[#FD5528]">Blog Showcase</p>
  <h1 class="text-4xl md:text-5xl font-bold text-gray-900">Intelligent stories from a trusted IT partner</h1>
  <p class="text-gray-600 max-w-3xl mx-auto text-lg">
    Insights, playbooks, and case highlights that show how our team builds resilient platforms for ambitious businesses.
  </p>
</section>

<!-- MAIN -->
<section class="max-w-7xl mx-auto px-6 pb-20 grid gap-10 lg:grid-cols-[1fr_320px]">
  <!-- CONTENT -->
  <div class="space-y-8">
    <!-- FILTER & CTA -->
    <div class="bg-white rounded-3xl p-6 shadow">
      <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h3 class="text-lg font-semibold">Latest insights</h3>
          <p class="text-sm text-gray-500">Tap a view to narrow the showcased stories.</p>
        </div>
        <div class="flex flex-wrap gap-2">
          <button class="tab active px-4 py-1 border rounded-full text-sm font-semibold text-[#FD5528]" data-tab="all">All</button>
          <button class="tab px-4 py-1 border rounded-full text-sm font-semibold" data-tab="IT">IT</button>
          <button class="tab px-4 py-1 border rounded-full text-sm font-semibold" data-tab="cloud">Cloud</button>
          <button class="tab px-4 py-1 border rounded-full text-sm font-semibold" data-tab="marketing">Marketing</button>
        </div>
      </div>
    </div>

    <!-- GRID -->
    <div class="grid gap-6 lg:grid-cols-2" id="project-grid">
      <!-- CARD -->
      <a href="/blog_detail" class="project IT bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition hover:-translate-y-1 block">
        <div class="relative h-60">
          <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&w=1600&q=80" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
          <div class="absolute bottom-5 left-6 text-white">
            <p class="text-xs uppercase tracking-[0.4em]">IT Services</p>
            <h2 class="text-xl font-semibold">Travel SaaS Platform</h2>
          </div>
        </div>
        <div class="p-6 space-y-3">
          <p class="text-sm text-gray-600">Modern booking infrastructure with scalable APIs.</p>
          <div class="flex items-center justify-between text-xs uppercase tracking-[0.3em] text-gray-500">
            <span>March 22, 2026</span>
            <span>4 min read</span>
          </div>
        </div>
      </a>

      <!-- CARD -->
      <a href="/_detail" class="project marketing bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition hover:-translate-y-1 block">
        <div class="relative h-60">
          <img src="https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=1600&q=80" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
          <div class="absolute bottom-5 left-6 text-white">
            <p class="text-xs uppercase tracking-[0.4em]">Marketing</p>
            <h2 class="text-xl font-semibold">FinTech Campaign</h2>
          </div>
        </div>
        <div class="p-6 space-y-3">
          <p class="text-sm text-gray-600">SEO + paid ads that unlocked 3x the conversion goal.</p>
          <div class="flex items-center justify-between text-xs uppercase tracking-[0.3em] text-gray-500">
            <span>February 07, 2026</span>
            <span>5 min read</span>
          </div>
        </div>
      </a>

      <!-- CARD -->
      <a href="/blog_detail" class="project cloud bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition hover:-translate-y-1 block">
        <div class="relative h-60">
          <img src="https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=1600&q=80" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
          <div class="absolute bottom-5 left-6 text-white">
            <p class="text-xs uppercase tracking-[0.4em]">Cloud</p>
            <h2 class="text-xl font-semibold">Zero-downtime Migration</h2>
          </div>
        </div>
        <div class="p-6 space-y-3">
          <p class="text-sm text-gray-600">Lift-and-shift, refactor, and automation for a legacy ERP.</p>
          <div class="flex items-center justify-between text-xs uppercase tracking-[0.3em] text-gray-500">
            <span>January 14, 2026</span>
            <span>6 min read</span>
          </div>
        </div>
      </a>

      <!-- CARD -->
      <a href="/blog_detail" class="project IT bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition hover:-translate-y-1 block">
        <div class="relative h-60">
          <img src="https://images.unsplash.com/photo-1664355680555-12687f77e0d3?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
          <div class="absolute bottom-5 left-6 text-white">
            <p class="text-xs uppercase tracking-[0.4em]">IT Services</p>
            <h2 class="text-xl font-semibold">Digital Workplace</h2>
          </div>
        </div>
        <div class="p-6 space-y-3">
          <p class="text-sm text-gray-600">Hybrid work stack with unified collaboration and governance.</p>
          <div class="flex items-center justify-between text-xs uppercase tracking-[0.3em] text-gray-500">
            <span>December 09, 2025</span>
            <span>4 min read</span>
          </div>
        </div>
      </a>
    </div>

    <!-- LATEST STORIES -->
    <div class="bg-white rounded-3xl p-6 shadow space-y-5">
      <div class="flex items-center justify-between">
        <div>
          <h3 class="text-lg font-semibold">Latest posts</h3>
          <p class="text-sm text-gray-500">Fresh briefs from the leadership desk.</p>
        </div>
        <a href="/blog_detail" class="text-sm font-semibold text-[#FD5528]">View all →</a>
      </div>
      <div class="space-y-4">
        <article class="border-b border-gray-100 pb-4">
          <a href="/blog_detail" class="text-base font-semibold text-gray-900 block mb-1">Securing DevOps pipelines for a global retailer</a>
          <p class="text-sm text-gray-500">Security-first automation that let the engineering team ship twice a week.</p>
        </article>
        <article class="border-b border-gray-100 pb-4">
          <a href="/blog_detail" class="text-base font-semibold text-gray-900 block mb-1">AI copilots in customer success</a>
          <p class="text-sm text-gray-500">We paired LLMs with structured data to trim response time by 60%.</p>
        </article>
        <article>
          <a href="/blog_detail" class="text-base font-semibold text-gray-900 block mb-1">Greenfield data platform for finance</a>
          <p class="text-sm text-gray-500">Batch and real-time feeds centralized in a single analytics fabric.</p>
        </article>
      </div>
    </div>
  </div>

  <!-- SIDEBAR -->
  <aside class="space-y-6">
    <div class="bg-white p-6 rounded-3xl shadow space-y-4">
      <input type="search" placeholder="Search insights" class="w-full border border-gray-200 p-3 rounded-full focus:outline-none focus:border-[#FD5528]">
      <button class="w-full rounded-full bg-[#FD5528] text-white py-2 text-sm font-semibold">Search</button>
    </div>

    <div class="bg-white p-6 rounded-3xl shadow">
      <h4 class="font-semibold text-lg mb-4">Categories</h4>
      <div class="flex flex-wrap gap-3">
        <span class="px-3 py-1 rounded-full border text-xs font-semibold text-gray-600">IT Services</span>
        <span class="px-3 py-1 rounded-full border text-xs font-semibold text-gray-600">Digital Transformation</span>
        <span class="px-3 py-1 rounded-full border text-xs font-semibold text-gray-600">Industry Intelligence</span>
        <span class="px-3 py-1 rounded-full border text-xs font-semibold text-gray-600">Cloud Ops</span>
        <span class="px-3 py-1 rounded-full border text-xs font-semibold text-gray-600">Marketing</span>
        <span class="px-3 py-1 rounded-full border text-xs font-semibold text-gray-600">Culture &amp; Talent</span>
      </div>
    </div>

    <div class="bg-gradient-to-b from-[#FD5528] to-[#f97316] text-white p-6 rounded-3xl shadow space-y-4">
      <h4 class="text-lg font-semibold">Featured story</h4>
      <p class="text-sm">Download the executive summary on our AI-driven modernization journey.</p>
      <a href="/blog_detail" class="text-sm font-semibold underline">Read the playbook →</a>
    </div>

    <div class="bg-white p-6 rounded-3xl shadow space-y-4">
      <h4 class="font-semibold text-lg">Newsletter</h4>
      <p class="text-sm text-gray-500">Monthly briefs on how we deliver predictable results.</p>
      <input type="email" placeholder="you@company.com" class="w-full border border-gray-200 p-3 rounded-full focus:outline-none focus:border-[#FD5528]">
      <button class="w-full rounded-full bg-gray-900 text-white py-2 text-sm font-semibold">Subscribe</button>
    </div>
  </aside>
</section>

<!-- JS -->
<script>
  const tabs = document.querySelectorAll(".tab");
  const projects = document.querySelectorAll(".project");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => {
        t.classList.remove("bg-[#FD5528]", "text-white");
        t.classList.add("text-[#FD5528]");
      });

      tab.classList.remove("text-[#FD5528]");
      tab.classList.add("bg-[#FD5528]", "text-white");

      const type = tab.dataset.tab;

      projects.forEach(p => {
        if (type === "all" || p.classList.contains(type)) {
          p.classList.remove("hidden");
        } else {
          p.classList.add("hidden");
        }
      });
    });
  });

  if (tabs.length) {
    tabs[0].click();
  }
</script>

@endsection
