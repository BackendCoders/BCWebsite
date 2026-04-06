@extends("component.main")
@section("content")

<main class="flex-1 bg-[#f5f5f5]">
  <section class="relative bg-gradient-to-br from-[#0F172A] to-[#0F172A]/90 text-white px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-5xl mx-auto text-center space-y-6">
      <p class="text-xs uppercase tracking-[0.4em] text-[#FDBA74]">Project Journal</p>
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold">How we rebuilt an enterprise SaaS platform for frictionless scale</h1>
      <p class="text-gray-200 max-w-3xl mx-auto">A detailed look at the architecture, creative systems, and go-to-market rituals we used to relaunch the product with 99.99% uptime.</p>
    </div>
  </section>

  <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid gap-10 lg:grid-cols-[minmax(0,1fr)_300px]">
    <article class="space-y-8">
      <div class="rounded-3xl bg-white shadow-lg border border-white overflow-hidden">
        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=80" alt="" class="w-full h-72 object-cover">
      </div>
      <div class="space-y-4 text-gray-700">
        <p class="text-sm uppercase tracking-[0.4em] text-gray-400">April 1, 2026 · Case Study</p>
        <p class="leading-relaxed text-lg">We replaced the monolithic backend with a modular API layer, paired design systems with experimentation hooks, and rewired observability so each release could be shipped with confidence.</p>
        <h2 class="text-2xl font-semibold text-gray-900">The engineering foundation</h2>
        <ul class="space-y-2 text-sm text-gray-600">
          <li>• Domain-driven event sourcing surfaced product boundaries and made teams autonomous.</li>
          <li>• A service mesh layer kept traffic healthy while we migrated from combinatorial feature flags.</li>
          <li>• Daily incident reviews tightened the feedback loop between engineering and operations.</li>
        </ul>
        <h2 class="text-2xl font-semibold text-gray-900">Creative + marketing sync</h2>
        <p class="text-sm text-gray-600 leading-relaxed">Marketing creatives reused the new design tokens to publish coherent landing pages while we instrumented the entire buyer journey—not just the UI.</p>
        <div class="flex flex-wrap gap-3">
          <span class="rounded-full border border-gray-200 px-3 py-1 text-xs font-semibold text-gray-500">Engineering</span>
          <span class="rounded-full border border-gray-200 px-3 py-1 text-xs font-semibold text-gray-500">Design Systems</span>
          <span class="rounded-full border border-gray-200 px-3 py-1 text-xs font-semibold text-gray-500">Data</span>
        </div>
      </div>
      <div class="rounded-3xl bg-white border border-gray-100 p-6 shadow-sm space-y-4">
        <h3 class="text-lg font-semibold text-gray-900">Showcase metrics</h3>
        <div class="grid gap-6 md:grid-cols-3 text-center">
          <div>
            <p class="text-3xl font-bold text-[#FD5528]">12x</p>
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400">deployments/mo</p>
          </div>
          <div>
            <p class="text-3xl font-bold text-[#FD5528]">99.99%</p>
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400">uptime</p>
          </div>
          <div>
            <p class="text-3xl font-bold text-[#FD5528]">3h</p>
            <p class="text-xs uppercase tracking-[0.4em] text-gray-400">mean recovery</p>
          </div>
        </div>
      </div>
    </article>

    <aside class="space-y-6">
      <div class="rounded-3xl bg-white border border-gray-100 shadow-sm p-6 space-y-4">
        <h3 class="text-lg font-semibold text-gray-900">Project quick stats</h3>
        <p class="text-sm text-gray-600">Stack: Laravel + Tailwind + React · Cloud: Azure + GCP · Analytics: Datadog + Looker</p>
        <button class="w-full rounded-2xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-[#f0622d]">Schedule a walkthrough</button>
      </div>
      <div class="rounded-3xl bg-white border border-gray-100 shadow-sm p-6 space-y-3">
        <h3 class="text-lg font-semibold text-gray-900">Related entries</h3>
        <ul class="space-y-2 text-sm text-gray-600">
          <li class="hover:text-[#FD5528] cursor-pointer">Designing resilient APIs for unpredictable loads</li>
          <li class="hover:text-[#FD5528] cursor-pointer">Zero-trust logging for remote-first squads</li>
          <li class="hover:text-[#FD5528] cursor-pointer">Feature flag riot recovery</li>
        </ul>
      </div>
    </aside>
  </section>
</main>

@endsection
