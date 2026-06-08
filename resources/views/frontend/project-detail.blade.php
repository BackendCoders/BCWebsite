@extends('component.main')

@section('content')

<main class="overflow-hidden bg-[#f6f8fb] text-slate-950">
    <section class="relative isolate overflow-hidden bg-white">
        <div class="pointer-events-none absolute inset-0">
            <div class="absolute -left-24 top-10 h-80 w-80 rounded-full bg-[#FD5528]/10 blur-3xl"></div>
            <div class="absolute right-0 top-0 h-96 w-96 rounded-full bg-orange-200/30 blur-3xl"></div>
            <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-orange-50 to-transparent"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">
            <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr]">
                <div class="max-w-3xl">
                    <div class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-slate-700 shadow-sm">
                        Project Detail
                    </div>

                    <p class="mt-6 text-sm font-medium uppercase tracking-[0.35em] text-slate-500">
                        {{ $project->category }}
                    </p>

                    <h1 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl lg:text-6xl">
                        {{ $project->title }}
                    </h1>

                    <p class="mt-6 max-w-2xl text-base leading-8 text-slate-700 sm:text-lg">
                        {{ $project->description }}
                    </p>

                    <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                        <a href="{{ route('frontend.contact') }}" class="inline-flex items-center justify-center rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-semibold text-slate-950 shadow-[0_20px_50px_rgba(253,85,40,0.22)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]">
                            Start a Similar Project
                        </a>
                        <a href="{{ route('frontend.project') }}" class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-800 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                            Back to Projects
                        </a>
                    </div>

                    <div class="mt-10 grid gap-4 sm:grid-cols-3">
                        @foreach ($project->metrics as $metric)
                            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-[0_20px_50px_rgba(15,23,42,0.06)]">
                                <div class="text-3xl font-black text-slate-950">{{ $metric['value'] }}</div>
                                <p class="mt-2 text-sm leading-6 text-slate-600">{{ $metric['label'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -inset-4 rounded-[2rem] bg-gradient-to-br from-[#FD5528]/10 to-transparent blur-2xl"></div>
                    <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-[0_35px_90px_rgba(15,23,42,0.10)]">
                        <img
                            src="{{ $project->image }}"
                            alt="{{ $project->title }}"
                            class="h-[28rem] w-full object-cover sm:h-[34rem]"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-white/80 via-white/20 to-transparent"></div>

                        <div class="absolute inset-x-0 bottom-0 p-6">
                            <div class="flex flex-wrap items-center gap-3">
                                <span class="inline-flex rounded-full bg-[#FD5528] px-4 py-2 text-xs font-bold uppercase tracking-[0.35em] text-slate-950 shadow-lg">
                                    Case Study
                                </span>
                                <span class="inline-flex rounded-full border border-slate-200 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm">
                                    UI / UX Focus
                                </span>
                            </div>

                            <div class="mt-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                                <p class="text-sm leading-7 text-slate-700 sm:text-base">
                                    {{ $project->summary }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20">
        <div class="pointer-events-none absolute inset-0">
            <div class="absolute left-0 top-16 h-72 w-72 rounded-full bg-[#FD5528]/8 blur-3xl"></div>
            <div class="absolute right-0 bottom-0 h-80 w-80 rounded-full bg-slate-200/40 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-[1.05fr_0.95fr]">
                <div class="space-y-8">
                    <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-[0_18px_50px_rgba(15,23,42,0.06)]">
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-[#FD5528]/10 text-lg font-black text-[#FD5528]">01</span>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.35em] text-slate-500">Challenge</p>
                                <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                                    What needed to be solved
                                </h2>
                            </div>
                        </div>

                        <p class="mt-6 text-sm leading-8 text-slate-600 sm:text-base">
                            {{ $project->challenge }}
                        </p>
                    </article>

                    <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-[0_18px_50px_rgba(15,23,42,0.06)]">
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-[#FD5528] text-lg font-black text-slate-950 shadow-lg">02</span>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.35em] text-slate-500">Solution</p>
                                <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                                    How we designed the experience
                                </h2>
                            </div>
                        </div>

                        <p class="mt-6 text-sm leading-8 text-slate-600 sm:text-base">
                            {{ $project->solution }}
                        </p>

                        <div class="mt-8 grid gap-3 sm:grid-cols-2">
                            @foreach ($project->highlights as $highlight)
                                <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-slate-50 p-4 transition hover:border-[#FD5528]/30 hover:bg-white">
                                    <span class="mt-1 h-2.5 w-2.5 rounded-full bg-[#FD5528]"></span>
                                    <span class="text-sm leading-6 text-slate-700">{{ $highlight }}</span>
                                </div>
                            @endforeach
                        </div>
                    </article>
                </div>

                <div class="space-y-8">
                    <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-[0_18px_50px_rgba(15,23,42,0.06)]">
                        <p class="text-xs font-bold uppercase tracking-[0.35em] text-slate-500">Technology Stack</p>
                        <h3 class="mt-3 text-xl font-black tracking-tight text-slate-950">Built with modern UI fundamentals</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600">
                            A focused stack keeps the interface clean, responsive, and easy to scale for future product updates.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-3">
                            @foreach ($project->stack as $stackItem)
                                <span class="rounded-full border border-[#FD5528]/20 bg-[#FD5528]/6 px-4 py-2 text-sm font-semibold text-[#C2410C]">
                                    {{ $stackItem }}
                                </span>
                            @endforeach
                        </div>
                    </article>

                    <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-[0_18px_50px_rgba(15,23,42,0.06)]">
                        <p class="text-xs font-bold uppercase tracking-[0.35em] text-slate-500">Delivery Timeline</p>
                        <h3 class="mt-3 text-xl font-black tracking-tight text-slate-950">How the work moved forward</h3>

                        <div class="mt-6 space-y-5">
                            @foreach ($project->timeline as $timelineItem)
                                <div class="flex gap-4">
                                    <div class="mt-1 h-3.5 w-3.5 rounded-full bg-[#FD5528] ring-8 ring-[#FD5528]/10"></div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-950">{{ $timelineItem['step'] }}</h4>
                                        <p class="mt-1 text-sm leading-6 text-slate-600">{{ $timelineItem['text'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-20">
        <div class="pointer-events-none absolute inset-0">
            <div class="absolute -left-10 top-0 h-72 w-72 rounded-full bg-[#FD5528]/10 blur-3xl"></div>
            <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-orange-200/30 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-slate-500">Related Work</p>
                <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl">
                    More product concepts with the same polished feel
                </h2>
                <p class="mt-4 max-w-2xl text-base leading-8 text-slate-600">
                    These examples keep the same premium layout direction, balanced rhythm, and conversion-focused structure.
                </p>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @foreach ($relatedProjects as $relatedProject)
                    <article class="group overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-[0_18px_50px_rgba(15,23,42,0.06)] transition duration-300 hover:-translate-y-1 hover:border-[#FD5528]/40">
                        <div class="relative h-56 overflow-hidden">
                            <img
                                src="{{ $relatedProject->image }}"
                                alt="{{ $relatedProject->title }}"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-white/80 via-white/20 to-transparent"></div>
                            <div class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-xs font-semibold text-[#FD5528] shadow-sm">
                                {{ $relatedProject->category }}
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-slate-950">{{ $relatedProject->title }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">
                                {{ $relatedProject->summary }}
                            </p>
                            <div class="mt-6">
                                <a href="{{ route('frontend.project-detail', ['slug' => $relatedProject->slug]) }}" class="inline-flex items-center rounded-xl bg-[#FD5528] px-4 py-2.5 text-sm font-semibold text-slate-950 transition hover:bg-[#e94c20]">
                                    View Detail
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="mx-auto flex max-w-5xl flex-col items-center px-6 text-center lg:px-8">
            <div class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-5 py-2 text-xs font-bold uppercase tracking-[0.35em] text-[#FD5528]">
                Ready to Build
            </div>
            <h2 class="mt-6 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                Want a project page like this for your own brand?
            </h2>
            <p class="mt-5 max-w-3xl text-base leading-8 text-slate-600 sm:text-lg">
                We can shape your product story into a clean, high-end case study page with strong hierarchy and modern visual flow.
            </p>

            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <a href="{{ route('frontend.contact') }}" class="inline-flex items-center justify-center rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-[#e94c20]">
                    Contact Us
                </a>
                <a href="{{ route('frontend.project') }}" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-800 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                    Back to Projects
                </a>
            </div>
        </div>
    </section>
</main>

@endsection
