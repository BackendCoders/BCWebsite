@extends('layout.main')

@section('content')
@php
    $technologies = $project->technologies_array;
    $faqItems = $project->faq_items;
@endphp

<div class="space-y-8 relative overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl lg:flex-row lg:items-center lg:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Projects</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">{{ $project->title }}</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Preview the public-facing project data, FAQs, and SEO content from the dashboard.</p>
            </div>
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="{{ route('projects.edit', $project) }}" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">Edit Project</a>
            <a href="{{ route('projects.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">Back</a>
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
        <div class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white shadow-xl shadow-slate-200/40">
            <div class="relative h-72 sm:h-96">
                <img src="{{ $project->getImageUrl() }}" alt="{{ $project->title }}" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-6 sm:p-8">
                    <div class="mb-4 flex flex-wrap gap-2">
                        <span class="rounded-full bg-[#FD5528] px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white">{{ $project->category ?? 'General' }}</span>
                        <span class="rounded-full bg-white/15 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white backdrop-blur">{{ $project->status ?? 'LIVE' }}</span>
                        @if($project->is_featured)
                            <span class="rounded-full bg-white/15 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-white backdrop-blur">Featured</span>
                        @endif
                    </div>
                    <h1 class="max-w-4xl text-3xl font-black leading-tight text-white md:text-4xl">{{ $project->title }}</h1>
                    <p class="mt-4 max-w-3xl text-base leading-8 text-slate-100">{{ $project->description ?: 'No description yet.' }}</p>
                </div>
            </div>

            <div class="grid gap-4 border-t border-slate-100 p-6 sm:grid-cols-2 xl:grid-cols-4">
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Client</p>
                    <p class="mt-2 text-sm font-bold text-slate-900">{{ $project->client_name ?: 'Not specified' }}</p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Industry</p>
                    <p class="mt-2 text-sm font-bold text-slate-900">{{ $project->category ?? 'General' }}</p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Status</p>
                    <p class="mt-2 text-sm font-bold text-slate-900">{{ $project->status ?? 'LIVE' }}</p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Completed</p>
                    <p class="mt-2 text-sm font-bold text-slate-900">{{ $project->completed_at?->format('M Y') ?? 'In progress' }}</p>
                </div>
            </div>

            <div class="border-t border-slate-100 p-6">
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">SEO</p>
                <div class="mt-4 grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Meta title</p>
                        <p class="mt-1 text-sm font-semibold text-slate-900">{{ $project->meta_title ?: $project->title }}</p>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Keywords</p>
                        <p class="mt-1 text-sm text-slate-600">{{ $project->meta_keywords ?: 'No keywords provided.' }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Meta description</p>
                        <p class="mt-1 text-sm leading-7 text-slate-600">{{ $project->meta_description ?: 'No meta description provided.' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-xl shadow-slate-200/40">
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Technologies</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    @forelse($technologies as $technology)
                        <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">{{ $technology }}</span>
                    @empty
                        <span class="text-sm text-slate-500">No technologies listed yet.</span>
                    @endforelse
                </div>
            </div>

            <div class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-xl shadow-slate-200/40">
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Live Link</p>
                @if($project->live_url)
                    <a href="{{ $project->live_url }}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-[#e94c20]">
                        Open Project
                    </a>
                @else
                    <p class="mt-4 text-sm text-slate-500">No live URL provided.</p>
                @endif
            </div>

            <div class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-xl shadow-slate-200/40">
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">FAQs</p>
                <div class="mt-4 space-y-3">
                    @forelse($faqItems as $faq)
                        <details class="group rounded-2xl border border-slate-200 bg-slate-50 p-4">
                            <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                                <span class="font-semibold text-slate-900">{{ $faq['question'] }}</span>
                                <span class="text-2xl text-[#FD5528] transition-transform group-open:rotate-45">+</span>
                            </summary>
                            <div class="mt-3 border-t border-slate-100 pt-3 text-sm leading-7 text-slate-600">
                                {{ $faq['answer'] }}
                            </div>
                        </details>
                    @empty
                        <p class="text-sm text-slate-500">No FAQs added yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
