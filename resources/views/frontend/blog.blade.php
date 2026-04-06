@extends("component.main")
@section("content")

<main class="flex-1 bg-gradient-to-b from-white to-gray-100">
  <section class="bg-gradient-to-br from-[#0F172A] to-[#111827] text-white px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-7xl mx-auto grid gap-10 lg:grid-cols-2 lg:items-center">
      <div class="space-y-6">
        <p class="text-xs uppercase tracking-[0.4em] text-[#FDBA74]">Insights & Stories</p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">
          Deep dives for founders and product teams who think about platforms<br>
          <span class="text-[#FD5528]">built for scale, resilience, and measurable outcomes.</span>
        </h1>
        <p class="text-base sm:text-lg text-gray-100 max-w-xl">
          Browse the Backend Coders journal for engineering critiques, launch notes, design systems, and infrastructure experiments we ship every month. Every snippet is tested at real scale—we publish what matters.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="#latest" class="inline-flex items-center justify-center rounded-full bg-white/10 px-6 py-3 text-sm font-semibold text-white hover:bg-white/20 transition">
            Explore latest article
          </a>
          <a href="#newsletter" class="inline-flex items-center justify-center rounded-full border border-white/40 px-6 py-3 text-sm font-semibold text-white hover:border-[#FD5528] hover:text-[#FD5528] transition">
            Subscribe for alerts
          </a>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4 text-sm">
        <div class="rounded-2xl border border-white/20 bg-white/5 p-4 backdrop-blur">
          <p class="text-xs uppercase tracking-[0.3em] text-white/60">weekly reads</p>
          <p class="mt-3 text-3xl font-bold">14</p>
          <p class="text-white/70">stories we shipped in the last 30 days.</p>
        </div>
        <div class="rounded-2xl border border-white/20 bg-white/5 p-4 backdrop-blur">
          <p class="text-xs uppercase tracking-[0.3em] text-white/60">average read</p>
          <p class="mt-3 text-3xl font-bold">8 min</p>
          <p class="text-white/70">deep insights you can scan or savor.</p>
        </div>
      </div>
    </div>
  </section>

  @php
    $posts = [
      [
        "category" => "Architecture",
        "date" => "Apr 4, 2026",
        "readTime" => "6 min read",
        "title" => "Designing resilient APIs for unpredictable loads",
        "summary" => "How we instrument four cold path services to auto-scale without losing transactional context or observability.",
        "tag" => "Platform Design"
      ],
      [
        "category" => "Cloud",
        "date" => "Mar 28, 2026",
        "readTime" => "7 min read",
        "title" => "Terraform modules that stay sane when the org grows",
        "summary" => "The module architecture that keeps infra drift-free even across five teams running parallel pipelines.",
        "tag" => "Infrastructure"
      ],
      [
        "category" => "Product",
        "date" => "Mar 20, 2026",
        "readTime" => "5 min read",
        "title" => "How feature flags became a team ritual",
        "summary" => "One page playbook we use to make risky launches rehearsed, visible, and reversible before midnight deployments.",
        "tag" => "Release Ops"
      ],
      [
        "category" => "Security",
        "date" => "Mar 12, 2026",
        "readTime" => "8 min read",
        "title" => "Zero-trust logging for remote-first squads",
        "summary" => "Building a telemetry mesh that lets us trace every request across pods without leaking credentials.",
        "tag" => "Trust"
      ]
    ];

    $topics = ["All", "Architecture", "Cloud", "Product", "Security", "Case Studies"];
    $trending = [
      ["title" => "Multi-tenant APIs vs. Org-specific services", "date" => "Apr 2, 2026"],
      ["title" => "Telemetry governance in regulated industries", "date" => "Mar 30, 2026"],
      ["title" => "The team rituals we keep after 5 years together", "date" => "Mar 18, 2026"],
    ];
  @endphp

  <section id="latest" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="mb-10 flex flex-wrap items-center justify-between gap-4">
      <div>
        <p class="text-sm uppercase tracking-[0.4em] text-gray-500">Latest Dispatches</p>
        <h2 class="text-3xl font-bold text-gray-900">Stories from the build floor</h2>
      </div>
      <div class="flex flex-wrap gap-3">
        @foreach ($topics as $topic)
          <button class="rounded-full border px-4 py-2 text-xs font-semibold transition {{ $loop->first ? 'border-[#FD5528] bg-[#FD5528]/10 text-[#FD5528]' : 'border-gray-200 text-gray-600 hover:border-[#FD5528] hover:text-[#FD5528]' }}">
            {{ $topic }}
          </button>
        @endforeach
      </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-3 lg:grid-rows-[auto_1fr]">
      <div class="lg:row-span-2">
        <article class="h-full rounded-3xl border border-gray-200 bg-white p-6 shadow-[0_15px_50px_rgba(15,23,42,0.08)]">
          <div class="flex items-center justify-between text-xs font-semibold text-gray-500">
            <span>{{ $posts[0]["category"] }}</span>
            <span>{{ $posts[0]["date"] }}</span>
          </div>
          <h3 class="mt-4 text-2xl font-bold text-gray-900">{{ $posts[0]["title"] }}</h3>
          <p class="mt-4 text-gray-600">{{ $posts[0]["summary"] }}</p>
          <div class="mt-8 flex items-center justify-between text-xs font-semibold text-gray-500">
            <span>{{ $posts[0]["readTime"] }}</span>
            <span class="rounded-full bg-[#FD5528] text-white px-3 py-1 text-[11px]">{{ $posts[0]["tag"] }}</span>
          </div>
        </article>
      </div>

      <div class="space-y-4">
        @for ($i = 1; $i < 3; $i++)
          <article class="rounded-2xl border border-gray-200 bg-white p-5 shadow-[0_15px_30px_rgba(15,23,42,0.06)] transition hover:-translate-y-1">
            <div class="flex items-center justify-between text-[11px] font-semibold text-gray-500">
              <span>{{ $posts[$i]["category"] }}</span>
              <span>{{ $posts[$i]["date"] }}</span>
            </div>
            <h3 class="mt-3 text-xl font-semibold text-gray-900">{{ $posts[$i]["title"] }}</h3>
            <p class="mt-3 text-sm leading-relaxed text-gray-600">{{ $posts[$i]["summary"] }}</p>
            <div class="mt-4 flex items-center justify-between text-[11px] font-semibold text-gray-500">
              <span>{{ $posts[$i]["readTime"] }}</span>
              <span class="rounded-full bg-[#FEF3C7] px-3 py-1 text-[#92400E]">{{ $posts[$i]["tag"] }}</span>
            </div>
          </article>
        @endfor
      </div>

      <div class="space-y-4">
        @for ($i = 3; $i < count($posts); $i++)
          <article class="rounded-2xl border border-gray-200 bg-white p-5 shadow-[0_15px_30px_rgba(15,23,42,0.06)] transition hover:-translate-y-1">
            <div class="flex items-center justify-between text-[11px] font-semibold text-gray-500">
              <span>{{ $posts[$i]["category"] }}</span>
              <span>{{ $posts[$i]["date"] }}</span>
            </div>
            <h3 class="mt-3 text-xl font-semibold text-gray-900">{{ $posts[$i]["title"] }}</h3>
            <p class="mt-3 text-sm leading-relaxed text-gray-600">{{ $posts[$i]["summary"] }}</p>
            <div class="mt-4 flex items-center justify-between text-[11px] font-semibold text-gray-500">
              <span>{{ $posts[$i]["readTime"] }}</span>
              <span class="rounded-full bg-[#ECFDF3] px-3 py-1 text-[#047857]">{{ $posts[$i]["tag"] }}</span>
            </div>
          </article>
        @endfor
      </div>
    </div>
  </section>

  <section class="bg-white border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid gap-10 lg:grid-cols-3">
      <div class="lg:col-span-2 space-y-8">
        <div class="flex items-center gap-4">
          <div class="h-10 w-10 rounded-2xl bg-[#FD5528]/20 text-[#FD5528] flex items-center justify-center font-semibold">01</div>
          <div>
            <p class="text-xs uppercase tracking-[0.4em] text-gray-500">Design Notes</p>
            <h3 class="text-2xl font-bold text-gray-900">Micro-moments that moved products forward</h3>
          </div>
        </div>
        <div class="rounded-3xl border border-gray-200 bg-gradient-to-br from-[#FDF2F8] to-white p-8 space-y-6">
          <p class="text-gray-600">Each week we gather in person with engineers and founders to review experiments. The notes below are raw transcripts with visuals, so you can remix them for your own sprints.</p>
          <div class="grid gap-6 md:grid-cols-3">
            <div class="rounded-2xl bg-white p-4 shadow-sm">
              <p class="text-xs uppercase tracking-[0.3em] text-gray-500">Session length</p>
              <p class="mt-2 text-lg font-semibold text-gray-900">90 min</p>
            </div>
            <div class="rounded-2xl bg-white p-4 shadow-sm">
              <p class="text-xs uppercase tracking-[0.3em] text-gray-500">Context</p>
              <p class="mt-2 text-lg font-semibold text-gray-900">Real-time payments</p>
            </div>
            <div class="rounded-2xl bg-white p-4 shadow-sm">
              <p class="text-xs uppercase tracking-[0.3em] text-gray-500">Next step</p>
              <p class="mt-2 text-lg font-semibold text-gray-900">Automate chaos</p>
            </div>
          </div>
        </div>
      </div>
      <aside class="space-y-6">
        <div class="rounded-3xl border border-gray-200 bg-gray-50 p-6 space-y-4">
          <h4 class="text-sm font-semibold uppercase tracking-[0.3em] text-gray-500">Trending</h4>
          <div class="space-y-3">
            @foreach ($trending as $item)
              <div class="rounded-2xl bg-white p-4 shadow-sm">
                <p class="text-sm font-semibold text-gray-900">{{ $item["title"] }}</p>
                <p class="text-xs text-gray-500">{{ $item["date"] }}</p>
              </div>
            @endforeach
          </div>
        </div>
        <div class="rounded-3xl border border-gray-200 p-6 space-y-4">
          <h4 class="text-sm font-semibold uppercase tracking-[0.3em] text-gray-500">Stay in the loop</h4>
          <p class="text-sm text-gray-600">A single email each Friday with the coolest failures, recoveries, and launches.</p>
          <form class="space-y-4">
            <input type="email" placeholder="Email" class="w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:border-[#FD5528] focus:outline-none">
            <button type="submit" class="w-full rounded-2xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-[#e94528]">
              Subscribe
            </button>
          </form>
        </div>
      </aside>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" id="newsletter">
    <div class="rounded-[40px] bg-gradient-to-r from-[#0f172a] to-[#111827] text-white p-10 md:p-14 grid gap-8 md:grid-cols-2 items-center">
      <div>
        <p class="text-xs uppercase tracking-[0.4em] text-[#FDBA74]">Director’s Notes</p>
        <h3 class="mt-4 text-3xl font-bold">Behind every release note is a story about people.</h3>
        <p class="mt-4 text-sm sm:text-base text-white/80">We send a backstage pass to systems thinking, product experiments, and launch postmortems—zero fluff, all context.</p>
      </div>
      <form class="space-y-4">
        <input type="text" placeholder="Your name" class="w-full rounded-2xl border border-white/30 bg-white/10 px-4 py-3 text-sm text-white placeholder:text-white/70 focus:border-white focus:outline-none">
        <input type="email" placeholder="Work email" class="w-full rounded-2xl border border-white/30 bg-white/10 px-4 py-3 text-sm text-white placeholder:text-white/70 focus:border-white focus:outline-none">
        <button type="submit" class="w-full rounded-2xl bg-[#FDBA74] px-4 py-3 text-sm font-semibold text-[#0F172A] transition hover:bg-[#FACC15]">
          Get the journal
        </button>
      </form>
    </div>
  </section>
</main>

@endsection
