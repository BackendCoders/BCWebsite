@extends('layout.main')

@section('content')
@php
    $types = ['hero', 'content', 'text', 'image', 'gallery', 'cards', 'faq', 'stats', 'timeline', 'cta', 'footer'];
@endphp

<div class="max-w-7xl mx-auto space-y-6">
    <section class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Manage Sections</p>
                <h1 class="mt-2 text-3xl font-bold text-slate-900">All sections across your pages</h1>
                <p class="mt-3 text-sm text-slate-500">
                    Open any section to edit its details and its nested section items.
                </p>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="{{ route('pages.index') }}" class="inline-flex items-center rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                    View Pages
                </a>
                <a href="{{ route('pages.index') }}" class="inline-flex items-center rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-orange-600">
                    Create Section
                </a>
            </div>
        </div>
    </section>

    <section class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/80 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b border-slate-200/70 bg-slate-50 text-xs uppercase tracking-[0.35em] text-slate-400">
                    <tr>
                        <th class="px-6 py-4">Page</th>
                        <th class="px-6 py-4">Section</th>
                        <th class="px-6 py-4">Type</th>
                        <th class="px-6 py-4">Items</th>
                        <th class="px-6 py-4">Order</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/70">
                    @forelse($sections as $section)
                        <tr class="hover:bg-slate-50">
                            <td class="px-6 py-4 text-slate-600">{{ $section->page?->title ?? 'No page' }}</td>
                            <td class="px-6 py-4 font-semibold text-slate-900">{{ $section->title ?: 'Untitled section' }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $section->type }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $section->items_count ?? $section->items->count() }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $section->order }}</td>
                            <td class="px-6 py-4 text-right">
                                @if($section->page_id)
                                    <a href="{{ route('pages.sections.edit', [$section->page_id, $section->id]) }}" class="inline-flex rounded-lg border border-slate-200 bg-white px-3 py-2 font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                                        Edit
                                    </a>
                                @else
                                    <span class="inline-flex rounded-lg border border-slate-200 bg-white px-3 py-2 font-semibold text-slate-400">No page</span>
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
