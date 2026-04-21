@extends('layout.main')

@section('content')
<div class="max-w-7xl mx-auto space-y-6">
    <section class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Page Preview</p>
                <h1 class="mt-2 text-3xl font-bold text-slate-900">{{ $page->title }}</h1>
                <p class="mt-2 text-sm text-slate-500">{{ $page->slug }}</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('pages.edit', $page->id) }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                    Edit Page
                </a>
                <a href="{{ route('frontend.page', $page->slug) }}" target="_blank" class="rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-orange-600">
                    Open Frontend
                </a>
            </div>
        </div>
    </section>

    <section class="grid gap-6 xl:grid-cols-2">
        @forelse($page->sections as $section)
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $section->type }}</p>
                        <h2 class="mt-2 text-xl font-semibold text-slate-900">{{ $section->title ?: 'Untitled section' }}</h2>
                    </div>
                    <a href="{{ route('pages.sections.edit', [$page->id, $section->id]) }}" class="text-sm font-semibold text-[#FD5528]">Edit</a>
                </div>

                <div class="mt-4 space-y-3">
                    @if($section->content)
                        <pre class="overflow-x-auto rounded-2xl bg-slate-950 p-4 text-xs text-slate-100">{{ json_encode($section->content, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) }}</pre>
                    @endif

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-900">Items: {{ $section->items->count() }}</p>
                        <p class="mt-1 text-sm text-slate-500">Order: {{ $section->order }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="rounded-[2rem] border border-dashed border-slate-300 bg-white p-10 text-center text-slate-500 xl:col-span-2">
                No sections on this page yet.
            </div>
        @endforelse
    </section>
</div>
@endsection
