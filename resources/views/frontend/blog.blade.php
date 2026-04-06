@extends('component.main')
@section('content')

<!-- HERO -->
<section class="max-w-6xl mx-auto px-6 py-14 text-center space-y-5">
  <p class="text-xs uppercase tracking-[0.5em] text-[#FD5528]">Blog Showcase</p>
  <h1 class="text-4xl font-bold text-gray-900">A simple view of our featured projects</h1>
  <p class="text-gray-600 max-w-3xl mx-auto">
    Each card highlights the project, service category, and key outcomes.
  </p>
</section>

<!-- MAIN -->
<section class="max-w-7xl mx-auto px-6 pb-16 grid gap-10 lg:grid-cols-[1fr_320px]">

  <!-- LEFT -->
  <div class="space-y-6">

    <!-- PROJECT CARDS -->
    <div class="grid gap-6 lg:grid-cols-2">

      <!-- CARD -->
      <div class="project IT bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition hover:-translate-y-1">
        <div class="relative h-60">
          <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&w=1600&q=80" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
          <div class="absolute bottom-5 left-6 text-white">
            <p class="text-xs uppercase tracking-[0.4em]">IT Services</p>
            <h2 class="text-xl font-semibold">Travel SaaS Platform</h2>
          </div>
        </div>
        <div class="p-6">
          <p class="text-sm text-gray-600">
            Modern booking infrastructure with scalable APIs.
          </p>
        </div>
      </div>

      <!-- CARD -->
      <div class="project marketing bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition hover:-translate-y-1">
        <div class="relative h-60">
          <img src="https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=1600&q=80" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
          <div class="absolute bottom-5 left-6 text-white">
            <p class="text-xs uppercase tracking-[0.4em]">Marketing</p>
            <h2 class="text-xl font-semibold">Fintech Campaign</h2>
          </div>
        </div>
        <div class="p-6">
          <p class="text-sm text-gray-600">
            SEO + Paid ads delivering strong conversions.
          </p>
        </div>
      </div>

    </div>

    <!-- FILTER SECTION -->
    <div class="bg-white rounded-3xl p-6 shadow">

      <div class="flex justify-between items-center">
        <h3 class="text-lg font-semibold">Latest Insights</h3>

        <div class="flex gap-2">
          <button class="tab active px-4 py-1 border rounded-full text-sm text-[#FD5528]" data-tab="all">All</button>
          <button class="tab px-4 py-1 border rounded-full text-sm" data-tab="IT">IT</button>
          <button class="tab px-4 py-1 border rounded-full text-sm" data-tab="marketing">Marketing</button>
        </div>
      </div>

    </div>

  </div>

  <!-- SIDEBAR -->
  <aside class="space-y-6">

    <div class="bg-white p-6 rounded-3xl shadow">
      <input type="text" placeholder="Search..." class="w-full border p-3 rounded-full focus:outline-none focus:border-[#FD5528]">
    </div>

    <div class="bg-white p-6 rounded-3xl shadow">
      <h4 class="font-semibold mb-3">Recent Posts</h4>
      <ul class="space-y-2 text-sm text-gray-600">
        <li>Corporate Event Planning</li>
        <li>Full Event Services</li>
        <li>Kids Party Ideas</li>
      </ul>
    </div>

  </aside>

</section>

<!-- JS -->
<script>
const tabs = document.querySelectorAll(".tab");
const projects = document.querySelectorAll(".project");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {

    // RESET
    tabs.forEach(t => {
      t.classList.remove("bg-[#FD5528]", "text-white");
      t.classList.add("text-[#FD5528]");
    });

    // ACTIVE
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

// DEFAULT ACTIVE
tabs[0].click();
</script>

@endsection
