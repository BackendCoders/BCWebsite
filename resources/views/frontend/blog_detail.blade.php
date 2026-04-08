@extends("component.main")
@section("content")

<section class="bg-slate-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 py-12 space-y-10">
    <header class="bg-white rounded-[40px] shadow-2xl overflow-hidden grid lg:grid-cols-2 gap-0 border border-slate-100">
      <div class="relative h-96 lg:h-auto">
        <img
          src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d"
          alt="Business central AI"
          class="w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-6 left-6 text-white space-y-1">
          <p class="text-xs uppercase tracking-[0.4em] text-white/70">Published</p>
          <p class="text-lg font-semibold">April 01, 2026</p>
        </div>
      </div>
      <div class="p-10 space-y-6">
        <p class="text-xs uppercase tracking-[0.4em] text-[#FD5528]">Insight Brief</p>
        <h1 class="text-3xl md:text-4xl font-bold leading-tight text-slate-900">
          From Fragmented Systems to Control: How Business Central Solves Enterprise Challenges
        </h1>
        <p class="text-slate-500 text-lg">
          Explore how a unified ERP platform enables enterprises to orchestrate finance, sales, and operations with real-time clarity and governance.
        </p>
        <div class="flex flex-wrap gap-3">
          <span class="bg-[#FD5528] text-white px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-[0.3em] shadow">
            Dynamics 365
          </span>
          <span class="bg-slate-900 text-white px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-[0.3em] shadow">
            Business Central
          </span>
        </div>
        <div class="flex flex-wrap gap-3 text-sm text-slate-500">
          <span class="flex items-center gap-2">
            <span class="h-2 w-2 rounded-full bg-[#FD5528]"></span>
            teaminteleqain
          </span>
          <span class="flex items-center gap-2">
            <span class="h-2 w-2 rounded-full bg-[#10B981]"></span>
            Read time: 6 min
          </span>
        </div>
      </div>
    </header>

    <div class="grid lg:grid-cols-[260px_1fr] gap-10">
      <aside class="space-y-6">
        <div class="bg-white rounded-3xl shadow border border-slate-100 p-6 space-y-5">
          <h2 class="text-lg font-semibold text-slate-900">Table of Contents</h2>
          <ul class="space-y-3 text-sm text-slate-600">
            <li class="border-l-4 border-[#FD5528] pl-3">Understanding Multimodal AI Models</li>
            <li class="border-l-4 border-transparent pl-3">Why Business Leaders Cannot Ignore Multimodal AI</li>
            <li class="border-l-4 border-transparent pl-3">Multimodal AI Examples Across Industries</li>
            <li class="border-l-4 border-transparent pl-3">From Multimodal AI to Agentic AI</li>
            <li class="border-l-4 border-transparent pl-3">What Should Business Leaders Do Next?</li>
            <li class="border-l-4 border-transparent pl-3">Why Choose Intelegain as Your Agentic AI Partner?</li>
            <li class="border-l-4 border-transparent pl-3">Frequently Asked Questions</li>
          </ul>
          <button class="w-full bg-[#FD5528] text-white py-3 rounded-full text-sm font-semibold uppercase tracking-[0.3em] shadow-lg">
            Explore all blogs
          </button>
        </div>

        <div class="bg-white rounded-3xl shadow border border-slate-100 p-6 space-y-4">
          <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Share this article</p>
          <div class="grid grid-cols-4 gap-3">
            <button class="p-3 bg-blue-600 rounded-xl text-white shadow flex items-center justify-center">f</button>
            <button class="p-3 bg-black rounded-xl text-white shadow flex items-center justify-center">X</button>
            <button class="p-3 bg-blue-500 rounded-xl text-white shadow flex items-center justify-center">in</button>
            <button class="p-3 bg-gradient-to-r from-yellow-400 to-pink-500 rounded-xl text-white shadow flex items-center justify-center">ig</button>
          </div>
        </div>

        <div class="bg-gradient-to-br from-[#FD5528]/10 via-white to-[#fbb03b]/10 rounded-3xl p-6 shadow-lg border border-[#FD5528]/20 space-y-3">
          <p class="text-xs uppercase tracking-[0.4em] text-[#FD5528]">Supercharge Your Business</p>
          <h3 class="text-lg font-semibold text-slate-900">with Multimodal AI</h3>
          <form class="space-y-3">
            <input class="w-full px-4 py-2 rounded-2xl border border-white/40 bg-white/60 text-sm placeholder:text-slate-400 focus:outline-none" placeholder="Name" />
            <input class="w-full px-4 py-2 rounded-2xl border border-white/40 bg-white/60 text-sm placeholder:text-slate-400 focus:outline-none" placeholder="Email Address" />
            <input class="w-full px-4 py-2 rounded-2xl border border-white/40 bg-white/60 text-sm placeholder:text-slate-400 focus:outline-none" placeholder="Phone Number" />
            <textarea class="w-full px-4 py-2 rounded-2xl border border-white/40 bg-white/60 text-sm placeholder:text-slate-400 focus:outline-none" rows="3" placeholder="Your Message"></textarea>
            <button class="w-full bg-[#FD5528] text-white rounded-2xl py-3 font-semibold shadow-lg hover:bg-[#fbb03b] transition">
              Book a FREE consultation
            </button>
          </form>
        </div>

        <button class="w-full bg-white rounded-3xl border border-slate-300 shadow py-3 font-semibold text-center text-slate-900 hover:border-[#FD5528]">
          Add as preferred source on Google
        </button>
      </aside>

      <article class="space-y-10">
        <div class="bg-white rounded-[40px] border border-slate-100 shadow-2xl p-10 space-y-6">
          <p class="text-slate-500">According to Gartner, by 2030, the majority of enterprise software will run as multimodal systems capable of handling text, visuals, sound, video, and structured data simultaneously. This article covers why multimodal AI is a strategic imperative.</p>
          <div class="space-y-6">
            <h3 class="text-2xl font-bold text-slate-900">Understanding Multimodal AI Models and What Makes Them Think Differently</h3>
            <p class="text-slate-600 leading-relaxed">
              Most AI systems today are unimodal, trained on only one input type. While that works, it produces fragmented intelligence. Multimodal AI unifies vision, language, and sensor data to unlock richer context, enabling more confident decision-making across teams.
            </p>
            <p class="text-slate-600 leading-relaxed">
              By piecing together customer interactions, supply-chain signals, and financial context, leaders can operate from one central dashboard with precise insights.
            </p>
          </div>
          <div class="grid sm:grid-cols-2 gap-6">
            <div class="space-y-3">
              <p class="text-sm uppercase tracking-[0.4em] text-slate-400">Multimodal Advantage</p>
              <p class="text-slate-600 leading-relaxed">
                Visual recognition, text understanding, and audio interpretation converge to deliver advanced analytics and proactive decision-making.
              </p>
            </div>
            <div class="bg-slate-950 text-white rounded-3xl p-6 relative overflow-hidden">
              <div class="absolute inset-0 opacity-20">
                <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61" class="w-full h-full object-cover" />
              </div>
              <div class="relative space-y-3">
                <h4 class="text-lg font-semibold">Enhanced Decision-Making</h4>
                <p class="text-sm text-white/80">
                  Multimodal models chart customer intent, operational risk, and revenue opportunities within one intelligent interface.
                </p>
              </div>
            </div>
          </div>
        </div>

        <section class="bg-white rounded-[40px] border border-slate-100 shadow-2xl p-10 space-y-6">
          <h3 class="text-2xl font-bold text-slate-900">Case Studies & Examples</h3>
          <div class="grid lg:grid-cols-3 gap-6">
            @foreach ([
              'Inventory optimization across retail + ERP',
              'Field service automation with visual support',
              'Financial planning powered by real-time analytics'
            ] as $item)
              <div class="rounded-3xl border border-dashed border-slate-200 p-6 text-slate-600">
                <p class="text-sm font-semibold text-slate-900 mb-2">{{ $item }}</p>
                <p class="text-sm">Learn how multimodal workflows break silos between teams.</p>
              </div>
            @endforeach
          </div>
        </section>

        <section class="bg-white rounded-[40px] border border-slate-100 shadow-2xl p-10 space-y-6">
          <div class="flex flex-wrap gap-4 justify-between items-center">
            <h3 class="text-2xl font-bold text-slate-900">Related Blogs</h3>
            <button class="text-sm font-semibold text-[#FD5528] uppercase tracking-[0.3em]">View archive</button>
          </div>
          <div class="grid sm:grid-cols-3 gap-6">
            @foreach ([
              ['title' => 'SLMs vs LLMs in 2026', 'tag' => 'Artificial Intelligence', 'date' => 'March 25, 2026', 'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475'],
              ['title' => 'How Multimodal AI Is Transforming Industries', 'tag' => 'Artificial Intelligence', 'date' => 'March 18, 2026', 'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f'],
              ['title' => 'Reactive Monitoring for Product Teams', 'tag' => 'DevOps', 'date' => 'March 03, 2026', 'image' => 'https://images.unsplash.com/photo-1517430816045-df4b7de11d1d']
            ] as $blog)
              <article class="bg-white rounded-3xl border border-slate-100 shadow-lg overflow-hidden">
                <img src="{{ $blog['image'] }}" class="h-40 w-full object-cover" loading="lazy" />
                <div class="p-5 space-y-3">
                  <p class="text-xs uppercase tracking-[0.4em] text-slate-400">{{ $blog['date'] }}</p>
                  <h4 class="text-lg font-semibold text-slate-900">{{ $blog['title'] }}</h4>
                  <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#FD5528]/10 text-[#FD5528] text-xs font-semibold">
                    {{ $blog['tag'] }}
                  </span>
                </div>
              </article>
            @endforeach
          </div>
        </section>
      </article>
    </div>
  </div>
</section>

<style>
  form textarea {
    resize: none;
  }
</style>

@endsection
