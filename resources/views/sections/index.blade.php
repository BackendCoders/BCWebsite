@extends('layout.main')

@section('content')
@php
    $types = ['hero', 'content', 'text', 'image', 'gallery', 'cards', 'faq', 'stats', 'timeline', 'cta', 'footer'];
@endphp

<div class="mx-auto max-w-7xl px-4 pb-12 pt-28 sm:px-6 lg:px-8">
    <div class="relative overflow-hidden rounded-[2.25rem] border border-slate-200/70 bg-white/95 p-6 shadow-[0_24px_80px_rgba(15,23,42,0.08)] backdrop-blur-xl">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(253,85,40,0.15),_transparent_28%),radial-gradient(circle_at_bottom_left,_rgba(14,165,233,0.10),_transparent_24%)]"></div>

        <div class="relative flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <div class="inline-flex items-center gap-2 rounded-full border border-[#FD5528]/20 bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                    Manage Sections
                </div>
                <h1 class="mt-4 text-3xl font-bold tracking-tight text-slate-900">All sections across your pages</h1>
                <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-500">
                    Open any section to edit its details and its nested section items.
                </p>
            </div>

            <div class="grid gap-3 sm:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Types</p>
                    <p class="mt-1 text-sm font-semibold text-slate-900">{{ count($types) }} layouts</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Scope</p>
                    <p class="mt-1 text-sm font-semibold text-slate-900">Page sections</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-400">Actions</p>
                    <p class="mt-1 text-sm font-semibold text-slate-900">Edit fast</p>
                </div>
            </div>
        </div>

        <div class="relative mt-6 flex flex-wrap gap-3">
            <a href="{{ route('pages.index') }}" class="inline-flex items-center rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                View Pages
            </a>
            <a href="{{ route('pages.index') }}" class="inline-flex items-center rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-orange-600">
                Create Section
            </a>
        </div>
    </div>

    <section class="mt-6 overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/90 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b border-slate-200/70 bg-gradient-to-r from-[#FD5528] via-orange-500 to-amber-400 text-xs uppercase tracking-[0.35em] text-white">
                    <tr>
                        <th class="px-6 py-4">Page</th>
                        <th class="px-6 py-4">Section</th>
                        <th class="px-6 py-4">Type</th>
                        <th class="px-6 py-4">Items</th>
                        <th class="px-6 py-4">Order</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70 bg-white">
                    @forelse($sections as $section)
                        <tr class="transition hover:bg-slate-50/80">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-sky-500/10 text-sky-600">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 5.5A1.5 1.5 0 0 1 6 4h9l4.5 4.5V19A1.5 1.5 0 0 1 18 20.5H6A1.5 1.5 0 0 1 4.5 19V5.5Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 4v4.5h4.5" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-600">{{ $section->page?->title ?? 'No page' }}</span>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div>
                                    <p class="font-semibold text-slate-900">{{ $section->title ?: 'Untitled section' }}</p>
                                    <p class="mt-1 text-xs text-slate-400">Section content and nested items</p>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold capitalize
                                    @if($section->type === 'hero') bg-[#FD5528]/10 text-[#FD5528]
                                    @elseif($section->type === 'content') bg-sky-500/10 text-sky-600
                                    @elseif($section->type === 'image') bg-violet-500/10 text-violet-600
                                    @elseif($section->type === 'gallery') bg-emerald-500/10 text-emerald-600
                                    @elseif($section->type === 'cta') bg-amber-500/10 text-amber-600
                                    @else bg-slate-100 text-slate-700
                                    @endif">
                                    {{ $section->type }}
                                </span>
                            </td>

                            <td class="px-6 py-4 text-slate-600">{{ $section->items_count ?? $section->items->count() }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $section->order }}</td>

                            <td class="px-6 py-4 text-right">
                                @if($section->page_id)
                                    <a href="{{ route('pages.sections.edit', [$section->page_id, $section->id]) }}"
                                       class="inline-flex items-center rounded-xl bg-sky-500 px-4 py-2 font-semibold text-white shadow-sm transition hover:bg-sky-600">
                                        Edit
                                    </a>
                                @else
                                    <span class="inline-flex items-center rounded-xl border border-slate-200 bg-white px-3 py-2 font-semibold text-slate-400">
                                        No page
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center text-slate-500">No sections found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
