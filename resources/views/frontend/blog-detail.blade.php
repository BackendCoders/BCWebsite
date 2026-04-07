@extends('component.main')
@section('content')

<!-- HERO -->
<section class="max-w-6xl mx-auto px-6 py-16 space-y-6">
  <p class="text-xs uppercase tracking-[0.5em] text-[#FD5528]">In-depth story</p>
  <h1 class="text-4xl md:text-5xl font-bold text-gray-900">How we built a resilient platform for a global retail SaaS</h1>
  <div class="w-full h-64 relative rounded-3xl overflow-hidden shadow-lg">
    <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=2000&q=80" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent"></div>
    <div class="absolute bottom-5 left-6 text-white">
      <p class="text-xs uppercase tracking-[0.4em]">Case Study</p>
      <p class="text-sm">March 22, 2026 · 8 min read</p>
    </div>
  </div>
</section>

<!-- ARTICLE -->
<section class="max-w-7xl mx-auto px-6 pb-20 grid gap-10 lg:grid-cols-[1fr_320px]">
  <article class="space-y-8">
    <div class="bg-white rounded-3xl shadow-lg p-8 space-y-6">
      <p class="text-sm text-gray-500 uppercase tracking-[0.4em]">IT Transformation · SaaS</p>
      <p class="text-lg text-gray-700 leading-relaxed">
        The client needed a global booking platform that could handle spikes without breaking SLA and still allow product teams to ship quickly.
        We orchestrated a phased delivery that combined multi-region infrastructure, event-driven APIs, and automated testing to keep the pipeline fast.
      </p>

      <div class="grid gap-6 md:grid-cols-3">
        <div class="space-y-2">
          <p class="text-xs uppercase tracking-[0.4em] text-gray-500">Outcome</p>
          <p class="text-2xl font-semibold text-gray-900">99.99% uptime</p>
        </div>
        <div class="space-y-2">
          <p class="text-xs uppercase tracking-[0.4em] text-gray-500">Scale</p>
          <p class="text-2xl font-semibold text-gray-900">350K daily bookings</p>
        </div>
        <div class="space-y-2">
          <p class="text-xs uppercase tracking-[0.4em] text-gray-500">Velocity</p>
          <p class="text-2xl font-semibold text-gray-900">4 weekly releases</p>
        </div>
      </div>

      <div class="space-y-4 text-gray-600 leading-relaxed">
        <p>
          We started with a discovery sprint to map dependencies and failure points. That informed a multi-cloud architecture built around managed services,
          resilient queues, and service mesh hooks that let the operations team catch anomalies before customers saw them.
        </p>
        <p>
          Each microservice deployed to a regional cluster with automated health checks. We streamed events into a central data lake so analytics could
          surface loyalty opportunities within minutes instead of hours.
        </p>
      </div>
    </div>

    <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
      <div class="p-8 space-y-4">
        <h3 class="text-xl font-semibold text-gray-900">Key pillars</h3>
        <div class="space-y-3 text-sm text-gray-600">
          <p><strong class="text-gray-900">Automation-first delivery</strong> removed manual approvals from the release path, enabling the team to ship daily if needed.</p>
          <p><strong class="text-gray-900">Observability</strong> with open telemetry gave the service desk real-time dashboards while AI guards flagged anomalies immediately.</p>
          <p><strong class="text-gray-900">Customer experience</strong> redesigned the booking flow with empathy testing, reducing drop-offs by 18%.</p>
        </div>
        <a href="/blog" class="inline-flex items-center gap-2 text-sm font-semibold text-[#FD5528]">
          ← Back to insights
        </a>
      </div>
    </div>
  </article>

  <aside class="space-y-6">
    <div class="bg-white rounded-3xl shadow-lg p-6 space-y-4">
      <h4 class="text-lg font-semibold text-gray-900">Additional resources</h4>
      <ul class="space-y-3 text-sm text-gray-600">
        <li>Downloadable architecture blueprint</li>
        <li>Regional readiness checklist</li>
        <li>Executive summary PDF</li>
      </ul>
      <button class="w-full rounded-full bg-[#FD5528] text-white py-2 text-sm font-semibold">Request consultation</button>
    </div>

    <div class="bg-white rounded-3xl shadow-lg p-6 space-y-4">
      <h4 class="text-lg font-semibold text-gray-900">Follow-up stories</h4>
      <div class="space-y-3 text-sm text-gray-600">
        <a href="/blog_detail" class="font-semibold text-gray-900 block">Accelerating compliance for health tech</a>
        <a href="/blog_detail" class="font-semibold text-gray-900 block">Design thinking with engineering rigor</a>
        <a href="/blog_detail" class="font-semibold text-gray-900 block">Global launch playbook for SaaS</a>
      </div>
    </div>
  </aside>
</section>

@endsection
