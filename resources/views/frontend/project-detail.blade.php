@extends('component.main')
@section('content')
@php
    $technologies = $project->technologies_array;
    $completedAt = $project->completed_at;
    $liveUrl = $project->live_url;
@endphp

<main class="overflow-hidden bg-slate-50 text-slate-900 antialiased selection:bg-[#FD5528]/20 selection:text-slate-900">
    
<section class="relative isolate overflow-hidden bg-slate-950 text-white border-b border-slate-900">
        <div class="absolute inset-0 z-0 h-full w-full opacity-10 mix-blend-luminosity pointer-events-none filter saturate-100 scale-105">
            <img alt="" src="{{ $project->getImageUrl() }}" alt="{{ $project->title }}" class="h-full w-full object-cover object-center">
        </div>
        
        <div class="absolute inset-0 z-10 bg-[radial-gradient(circle_at_85%_15%,_rgba(253,85,40,0.2)_0%,_transparent_50%),linear-gradient(to_right,_rgba(2,6,23,1)_40%,_rgba(2,6,23,0.85)_70%,_rgba(2,6,23,0.6)_100%),linear-gradient(to_bottom,_transparent,_rgba(2,6,23,0.95))]"></div>

   
            <div class="flex flex-col items-start w-full order-first">
                <span class="inline-flex items-center rounded bg-slate-900/80 border border-slate-800 px-3 py-1 text-xs font-bold uppercase tracking-[0.2em] text-orange-400">
                    Project Detail
                </span>
                
                <p class="mt-5 text-xs font-extrabold uppercase tracking-[0.25em] text-[#FD5528] drop-shadow-[0_2px_8px_rgba(253,85,40,0.2)]">
                    UI / UX DESIGN & WEB DEVELOPMENT
                </p>

                <h1 class="mt-3 max-w-2xl text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl lg:leading-[1.1] text-balance">
                    {{ $project->title }}
                </h1>

                <p class="mt-6 max-w-xl text-base leading-relaxed text-slate-300 sm:text-lg font-normal">
                    {{ $project->description ?: 'A polished showcase layout engineered to present performance statistics, architectural layouts, and strategic execution scopes.' }}
                </p>

                <div class="mt-10 flex flex-wrap gap-4 w-full sm:w-auto">
                    @if($liveUrl)
                        <a href="{{ $liveUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center rounded-lg bg-[#FD5528] px-6 py-3.5 text-sm font-bold text-white shadow-xl shadow-[#FD5528]/20 transition-all duration-200 hover:bg-[#e94c20] hover:-translate-y-0.5">
                            Visit Live Project
                        </a>
                    @endif
                    <a href="{{ route('frontend.project') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-800 bg-slate-900/40 px-6 py-3.5 text-sm font-bold text-slate-200 transition-all duration-200 hover:border-slate-700 hover:bg-slate-900 hover:text-white hover:-translate-y-0.5">
                        View All Projects
                    </a>
                </div>

                <div class="mt-16 w-full grid gap-6 grid-cols-3 border-t border-slate-800/80 pt-10">
                    <div>
                        <div class="text-3xl sm:text-4xl font-black text-white tracking-tight">42%</div>
                        <div class="mt-1.5 text-xs font-semibold uppercase tracking-wider text-slate-400 leading-tight">Improved UX conversion</div>
                    </div>
                    <div>
                        <div class="text-3xl sm:text-4xl font-black text-white tracking-tight">8 wk</div>
                        <div class="mt-1.5 text-xs font-semibold uppercase tracking-wider text-slate-400 leading-tight">Design to launch turnaround</div>
                    </div>
                    <div>
                        <div class="text-3xl sm:text-4xl font-black text-[#FD5528] tracking-tight drop-shadow-[0_2px_8px_rgba(253,85,40,0.2)]">3.8x</div>
                        <div class="mt-1.5 text-xs font-semibold uppercase tracking-wider text-slate-400 leading-tight">Faster rendering pipeline</div>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="relative z-20 mx-auto grid max-w-7xl items-center gap-16 px-6 py-20 lg:grid-cols-2 lg:px-8 lg:py-28">

    <!-- LEFT CONTENT -->
    <div class="flex flex-col items-start">

        <span class="inline-flex items-center rounded-full border border-[#FD5528]/30 bg-[#FD5528]/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-[#FD5528]">
            Project Detail
        </span>

        <p class="mt-6 text-xs font-extrabold uppercase tracking-[0.3em] text-[#FD5528]">
            UI / UX DESIGN • WEB DEVELOPMENT
        </p>

        <h2 class="mt-4 max-w-3xl text-5xl font-black leading-tight text-white lg:text-6xl">
            {{ $project->title }}
        </h2>

        <p class="mt-6 max-w-2xl text-lg leading-relaxed text-slate-300">
            {{ $project->description ?: 'A polished showcase layout engineered to present performance statistics, architectural layouts, and strategic execution scopes.' }}
        </p>

        <div class="mt-10 flex flex-wrap gap-4">

            @if($liveUrl)
            <a href="{{ $liveUrl }}"
               target="_blank"
               class="inline-flex items-center rounded-xl bg-[#FD5528] px-7 py-4 text-sm font-bold text-white shadow-xl shadow-[#FD5528]/30 transition hover:-translate-y-1 hover:bg-[#e94c20]">
                Visit Live Project
            </a>
            @endif

            <a href="{{ route('frontend.project') }}"
               class="inline-flex items-center rounded-xl border border-slate-700 bg-slate-900/40 px-7 py-4 text-sm font-bold text-white backdrop-blur-sm transition hover:border-[#FD5528]">
                View All Projects
            </a>

        </div>

        <!-- STATS -->
        <!-- <div class="mt-16 grid w-full grid-cols-3 gap-8 border-t border-slate-800 pt-10">

            <div>
                <div class="text-4xl font-black text-white">
                    42%
                </div>
                <div class="mt-2 text-xs uppercase tracking-wider text-slate-400">
                    Improved UX Conversion
                </div>
            </div>

            <div>
                <div class="text-4xl font-black text-white">
                    8 WK
                </div>
                <div class="mt-2 text-xs uppercase tracking-wider text-slate-400">
                    Launch Timeline
                </div>
            </div>

            <div>
                <div class="text-4xl font-black text-[#FD5528]">
                    3.8X
                </div>
                <div class="mt-2 text-xs uppercase tracking-wider text-slate-400">
                    Performance Gain
                </div>
            </div>

        </div> -->

    </div>

    <!-- RIGHT IMAGE -->
   <div class="relative">

    <!-- Glow Effect -->
    <div
        class="absolute -inset-6 rounded-[0px]
        bg-gradient-to-r
        from-[#FD5528]/20
        via-orange-300/10
        to-transparent
        blur-3xl">
    </div>

   <div
    class="relative overflow-hidden rounded-[32px]
    max-h-[900px]">
    <img alt=""
        src="{{ $project->getImageUrl() }}"
        alt="{{ $project->title }}"
        class="w-full h-auto">

</div>

</div>
</div>
</section>

    <!-- <section class="bg-white py-8 border-b border-slate-200/60 shadow-sm relative z-30">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                <div class="rounded-xl border border-slate-200 bg-slate-50/50 px-5 py-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Website Audit and SEO Analysis</span>
                    <span class="text-sm sm:text-base font-bold text-slate-800 truncate block mt-1">{{ $project->client_name ?: 'SEO Rocket Pro' }}</span>
                </div>
                <div class="rounded-xl border border-slate-200 bg-slate-50/50 px-5 py-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Industry</span>
                    <span class="text-sm sm:text-base font-bold text-slate-800 truncate block mt-1">{{ $project->category ?? 'Digital Marketing' }}</span>
                </div>
                <div class="rounded-xl border border-slate-200 bg-slate-50/50 px-5 py-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Services</span>
                    <span class="text-sm sm:text-base font-bold text-slate-800 truncate block mt-1">UX, UI, Frontend</span>
                </div>
                <div class="rounded-xl border border-slate-200 bg-slate-50/50 px-5 py-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Status</span>
                    <span class="text-sm sm:text-base font-bold text-[#FD5528] block mt-1">{{ $project->status ?? 'Delivered' }}</span>
                </div>
                 <div class="rounded-xl border border-slate-200 bg-slate-50/50 px-5 py-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Services</span>
                    <span class="text-sm sm:text-base font-bold text-slate-800 truncate block mt-1">UX, UI, Frontend</span>
                </div>
                <div class="rounded-xl border border-slate-200 bg-slate-50/50 px-5 py-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Status</span>
                    <span class="text-sm sm:text-base font-bold text-[#FD5528] block mt-1">{{ $project->status ?? 'Delivered' }}</span>
                </div>
            </div>
        </div>
    </section> -->
<section class="bg-white py-10 border-b border-slate-200/60 shadow-sm relative z-30">

<div class="mx-auto max-w-7xl px-6 lg:px-8">

    <div class="mb-10 text-center">

        <span class="inline-flex rounded-full bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">
            Core Product Capabilities
        </span>

        <h2 class="mt-4 text-3xl lg:text-4xl font-bold text-slate-900">
            Everything Agencies Need In One Platform
        </h2>

        <p class="mt-4 max-w-3xl mx-auto text-slate-600">
            Streamline SEO audits, lead generation, reporting, and CRM workflows with a centralized platform designed for digital agencies and growth teams.
        </p>

    </div>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">

        <!-- Card 1 -->
        <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition-all duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">

          

            <h3 class="text-lg font-bold text-slate-900">
                Website Audit & SEO Analysis
            </h3>

            <p class="mt-3 text-sm leading-7 text-slate-600">
                Run technical SEO audits, website health checks, and performance reviews to identify issues, opportunities, and optimization areas.
            </p>

        </div>

        <!-- Card 2 -->
        <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition-all duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">


            <h3 class="text-lg font-bold text-slate-900">
                Lead Generation & Scraping
            </h3>

            <p class="mt-3 text-sm leading-7 text-slate-600">
                Discover new business opportunities, collect prospect data, and build targeted outreach lists faster.
            </p>

        </div>

        <!-- Card 3 -->
        <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition-all duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">

            <h3 class="text-lg font-bold text-slate-900">
                Prospect Qualification
            </h3>

            <p class="mt-3 text-sm leading-7 text-slate-600">
                Analyze website quality, SEO condition, and digital gaps before outreach to focus on qualified prospects.
            </p>

        </div>

        <!-- Card 4 -->
        <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition-all duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">

            <h3 class="text-lg font-bold text-slate-900">
                SEO Reporting Dashboard
            </h3>

            <p class="mt-3 text-sm leading-7 text-slate-600">
                Present performance summaries, audit insights, and actionable recommendations through clear reports.
            </p>

        </div>

        <!-- Card 5 -->
        <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition-all duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">

            <h3 class="text-lg font-bold text-slate-900">
                CRM Lead Management
            </h3>

            <p class="mt-3 text-sm leading-7 text-slate-600">
                Organize leads, manage sales pipelines, track outreach activities, and monitor conversion stages.
            </p>

        </div>

        <!-- Card 6 -->
        <div class="group rounded-2xl border border-slate-200 bg-slate-50/50 p-6 transition-all duration-300 hover:border-[#FD5528]/30 hover:shadow-xl">

            <h3 class="text-lg font-bold text-slate-900">
                Agency Workflow Efficiency
            </h3>

            <p class="mt-3 text-sm leading-7 text-slate-600">
                Reduce tool switching and improve productivity by managing audits, reporting, prospecting, and CRM workflows in one place.
            </p>

        </div>

    </div>

</div>


</section>

<section class="py-24 bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.25em] text-[#FD5528]">Project Story</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl">
                    From scattered marketing data to a clean decision platform.
                </h2>
                <p class="mt-5 text-base sm:text-lg leading-relaxed text-slate-500">
                    The platform was designed for users that need to understand user behaviour quickly, act on relevant files, and connect protocols with workflows.
                </p>
            </div>

            <div class="mt-16 max-w-4xl space-y-6">
                <div class="rounded-xl border border-slate-200 bg-slate-50/40 p-6 sm:p-8 flex gap-5 items-start">
                    <!-- <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-orange-100 text-sm font-bold text-[#FD5528]">01</span> -->
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Product Value for Growth and Client Acquisition</span>
                        <h3 class="text-lg font-bold text-slate-900 mt-1">Product Value for Growth and Client Acquisition</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-500">
                            SEO Rocket Pro is built to support business growth, not just technical reporting. The platform helps users identify potential leads, evaluate websites quickly, build structured outreach lists, and manage follow-up with more consistency.
                            For agencies and consultants, that means better prospect visibility, more efficient lead qualification, and a stronger workflow from audit to conversion.
                        </p>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-slate-50/40 p-6 sm:p-8 flex gap-5 items-start">
                    <!-- <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#FD5528] text-sm font-bold text-white shadow-md shadow-[#FD5528]/20">02</span> -->
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400"> Why SEO Rocket Pro Creates Better Workflow Efficiency</span>
                        <h3 class="text-lg font-bold text-slate-900 mt-1"> Why SEO Rocket Pro Creates Better Workflow Efficiency</h3>
                        <p class="mt-3 text-sm sm:text-base leading-relaxed text-slate-500">                         
                            Most teams lose time moving between separate tools for audits, scraping, reporting, and lead tracking. SEO Rocket Pro brings those workflows into one connected platform so agencies and consultants can work faster and stay more organized.
                            <br>
                            This helps improve prospect handling, sales follow-up, client acquisition processes, and day-to-day productivity without adding more operational complexity.

                        </p>
                        
                        <!-- <div class="mt-6 grid gap-4 grid-cols-1 sm:grid-cols-2">
                            <div class="bg-white border border-slate-200 p-4 rounded-xl">
                                <h4 class="text-sm font-bold text-slate-900">Insight-driven layouts</h4>
                                <p class="text-xs sm:text-sm text-slate-500 mt-1.5">Conveys dynamic variants metrics directly over the user grid.</p>
                            </div>
                            <div class="bg-white border border-slate-200 p-4 rounded-xl">
                                <h4 class="text-sm font-bold text-slate-900">Conversion path</h4>
                                <p class="text-xs sm:text-sm text-slate-500 mt-1.5">CTAs strategically placed across context layout points.</p>
                            </div>
                            <div class="bg-white border border-slate-200 p-4 rounded-xl">
                                <h4 class="text-sm font-bold text-slate-900">Reusable sections</h4>
                                <p class="text-xs sm:text-sm text-slate-500 mt-1.5">The structural support architecture performs without backend load.</p>
                            </div>
                            <div class="bg-white border border-slate-200 p-4 rounded-xl">
                                <h4 class="text-sm font-bold text-slate-900">Responsive policy</h4>
                                <p class="text-xs sm:text-sm text-slate-500 mt-1.5">Spacing adjustments render precisely across multiple platforms.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-24 bg-gradient-to-b from-white to-slate-50">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-16">

            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">
                Why SEO Rocket Pro
            </span>

            <h2 class="mt-5 text-4xl max-w-7xl lg:text-5xl font-black text-slate-900">
             Smarter SEO Audits and Lead Generation for Growth-Focused Teams

            </h2>

            <p class="mt-5 max-w-5xl mx-auto text-lg text-slate-600">               
                SEO Rocket Pro helps agencies, consultants, freelancers, and growth teams do more than run website audits. It combines website analysis, lead generation, reporting, and prospect management in one platform to create a more organized and efficient workflow.
                The platform helps teams discover prospects, analyze website health, organize lead data, and turn technical insights into real business opportunities. Whether you are focused on local outreach, agency prospecting, or SEO client acquisition, SEO Rocket Pro improves lead quality, visibility, and follow-up efficiency across your pipeline.
            </p>

        </div>



    </div>

</section>

    <!-- <section class="bg-slate-950 py-24 text-white relative isolate overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.25em] text-[#FD5528]">Visual System</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-white sm:text-5xl">
                    Designed to feel premium, direct, and business-ready.
                </h2>
                <p class="mt-4 text-base text-slate-300">
                    The code layouts build content layers based on entry hierarchy, creating screens that move smoothly into modern framework configurations.
                </p>
            </div>

            <div class="mt-16 grid gap-8 lg:grid-cols-[1.3fr_0.7fr]">
                <div class="overflow-hidden rounded-xl border border-slate-800 bg-slate-900/50 p-2 shadow-inner">
                    <img alt="" src="{{ $project->getImageUrl() }}" alt="{{ $project->title }}" class="h-[24rem] w-full rounded-lg object-cover sm:h-[32rem] opacity-90">
                </div>
                
                <div class="flex flex-col gap-6 justify-between">
                    <div class="rounded-xl border border-slate-800 bg-slate-900/30 p-6 sm:p-8 flex flex-col justify-center h-full">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Stack Architecture</span>
                        
                        <div class="mt-5 flex flex-wrap gap-2.5">
                            @forelse($technologies as $technology)
                                <span class="rounded-md bg-slate-900 border border-slate-800 px-3.5 py-2 text-sm font-semibold text-slate-300">
                                    {{ $technology }}
                                </span>
                            @empty
                                <span class="rounded-md bg-slate-900 border border-slate-800 px-3.5 py-2 text-sm font-semibold text-slate-300">TailwindCSS</span>
                                <span class="rounded-md bg-slate-900 border border-slate-800 px-3.5 py-2 text-sm font-semibold text-slate-300">Laravel Blade</span>
                                <span class="rounded-md bg-slate-900 border border-slate-800 px-3.5 py-2 text-sm font-semibold text-slate-300">AlpineJS</span>
                            @endforelse
                        </div>
                    </div>

                    <div class="rounded-xl bg-gradient-to-br from-[#FD5528] to-[#df4319] p-6 sm:p-8 text-white shadow-xl flex flex-col justify-center h-full">
                        <span class="text-xs font-bold uppercase tracking-wider text-white/80 block">Result Impact</span>
                        <h3 class="mt-2.5 text-xl sm:text-2xl font-black leading-snug tracking-tight">A sharper case-study page ready for presentation.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- 
    <section class="py-24 bg-white border-b border-slate-200">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.25em] text-[#FD5528]">Delivery Blueprint</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">A focused process from discovery to launch.</h2>
            </div>

            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-6 rounded-xl border border-slate-200 bg-slate-50/50">
                    <span class="text-sm font-extrabold text-[#FD5528]">01</span>
                    <h4 class="text-base font-bold text-slate-900 mt-2">Discovery</h4>
                    <p class="text-sm text-slate-500 mt-2 leading-relaxed">Mapping layout paths, user structures, and brand positions.</p>
                </div>
                <div class="p-6 rounded-xl border border-slate-200 bg-slate-50/50">
                    <span class="text-sm font-extrabold text-[#FD5528]">02</span>
                    <h4 class="text-base font-bold text-slate-900 mt-2">Wireframe</h4>
                    <p class="text-sm text-slate-500 mt-2 leading-relaxed">Building outline structures and text relationships.</p>
                </div>
                <div class="p-6 rounded-xl border border-slate-200 bg-slate-50/50">
                    <span class="text-sm font-extrabold text-[#FD5528]">03</span>
                    <h4 class="text-base font-bold text-slate-900 mt-2">UI Design</h4>
                    <p class="text-sm text-slate-500 mt-2 leading-relaxed">Applying style metrics, layout accents, and components.</p>
                </div>
                <div class="p-6 rounded-xl border border-slate-200 bg-slate-50/50">
                    <span class="text-sm font-extrabold text-[#FD5528]">04</span>
                    <h4 class="text-base font-bold text-slate-900 mt-2">Launch</h4>
                    <p class="text-sm text-slate-500 mt-2 leading-relaxed">Deploying optimized build loops to production hosts.</p>
                </div>
            </div>
        </div>
    </section> -->

    @if($relatedProjects->isNotEmpty())
        <section class="bg-slate-50 py-24 border-b border-slate-200/60">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-6 mb-16">
                    <div>
                        <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.25em] text-[#FD5528]">Related Work</p>
                        <h2 class="mt-2 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">More static project concepts with a polished feel.</h2>
                    </div>
                    <a href="{{ route('frontend.project') }}" class="shrink-0 text-sm font-bold text-slate-600 hover:text-[#FD5528] border border-slate-200 bg-white rounded-lg px-5 py-2.5 transition-colors shadow-sm">
                        Browse Projects
                    </a>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($relatedProjects as $relatedProject)
                        <article class="group flex flex-col overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                            <div class="relative h-56 overflow-hidden bg-slate-100">
                                <img alt="" src="{{ $relatedProject->getImageUrl() }}" alt="{{ $relatedProject->title }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-102">
                                <div class="absolute left-4 top-4 rounded-md bg-white/95 px-2.5 py-1 text-xs font-bold text-[#FD5528] uppercase shadow-sm border border-slate-100">
                                    {{ $relatedProject->category ?? 'General' }}
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 p-6">
                                <h3 class="text-lg font-bold text-slate-900 tracking-tight line-clamp-1 group-hover:text-[#FD5528] transition-colors">
                                    {{ $relatedProject->title }}
                                </h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-500 line-clamp-2">
                                    {{ $relatedProject->description ? \Illuminate\Support\Str::limit($relatedProject->description, 120) : 'A crisp, presentation-ready portfolio implementation showcase entry.' }}
                                </p>
                                <div class="mt-6 pt-4 border-t border-slate-100">
                                    <a href="{{ route('frontend.project-detail', ['slug' => $relatedProject->slug]) }}" class="inline-flex items-center justify-center w-full rounded-lg bg-slate-900 py-3 text-sm font-bold text-white transition-colors hover:bg-[#FD5528]">
                                        View Detail
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

<section class="relative overflow-hidden bg-gradient-to-r from-[#FD5528] via-[#ff6a3d] to-[#FD5528] py-12">


<!-- Background Decorations -->
<div class="absolute inset-0">
    <div class="absolute -top-20 -left-20 h-72 w-72 rounded-full bg-white/10 blur-3xl"></div>
    <div class="absolute -bottom-20 -right-20 h-72 w-72 rounded-full bg-black/10 blur-3xl"></div>
</div>

<div class="relative mx-auto max-w-5xl px-4 text-center lg:px-6">

    <!-- <span
        class="inline-flex rounded-full bg-white/15 px-5 py-2 text-xs font-bold uppercase tracking-[0.25em] text-white backdrop-blur">

        SEO Rocket Pro

    </span> -->

    <h2
        class="mt-6 text-4xl font-black leading-tight text-white sm:text-5xl lg:text-6xl">

         Ready to Explore SEO Rocket Pro?

    </h2>

    <p
        class="mx-auto mt-6 max-w-3xl text-lg leading-8 text-white/90">

    
        If you need SEO software that combines website audits, lead generation, reporting, and prospect management in one platform, SEO Rocket Pro is ready to help.
        Start the conversation, request a demo, or explore how the platform can support your agency workflow, SEO outreach, and lead generation process.


    </p>

  
    <!-- CTA Buttons -->
    <div
        class="mt-12 flex flex-col items-center justify-center gap-4 sm:flex-row">

        <a
            href="{{ route('frontend.contact') }}"
            class="inline-flex items-center justify-center rounded-2xl bg-white px-8 py-4 text-sm font-bold text-[#FD5528] shadow-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">

            Request A Demo

        </a>

        <a
            href="{{ route('frontend.project') }}"
            class="inline-flex items-center justify-center rounded-2xl border border-white/30 bg-white/10 px-8 py-4 text-sm font-bold text-white backdrop-blur transition-all duration-300 hover:bg-white/20">

            View More Projects

        </a>

    </div>

</div>


</section>

</main>
@endsection