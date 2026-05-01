@extends('layout.main')

@section('content')
<div class="relative mx-auto max-w-5xl space-y-6 overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-20 -z-10 h-64 w-64 rounded-full bg-orange-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-28 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl lg:flex-row lg:items-center lg:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Service Library</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Add service</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Create a service card with all UI fields, supporting copy, and a clean call to action.</p>
            </div>
        </div>

        <div class="grid gap-3 sm:grid-cols-3">
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 1</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Basics</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 2</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Content</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 3</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Publish</p>
            </div>
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-1 px-4">
        <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
            <form action="{{ route('services.store') }}" method="POST" class="grid gap-5">
                @csrf

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Badge text</label>
                        <input type="text" name="badge_text" value="{{ old('badge_text') }}" placeholder="Bespoke Web" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Subtitle</label>
                        <input type="text" name="subtitle" value="{{ old('subtitle') }}" placeholder="Short supporting line" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Icon label</label>
                        <input type="text" name="icon" value="{{ old('icon') }}" placeholder="S" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Icon image URL</label>
                        <input type="url" name="icon_image" value="{{ old('icon_image') }}" placeholder="https://..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Priority</label>
                        <input type="number" name="priority" value="{{ old('priority', 50) }}" min="1" max="100" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Call to action label</label>
                        <input type="text" name="cta_label" value="{{ old('cta_label') }}" placeholder="View details" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Call to action URL</label>
                        <input type="url" name="cta_url" value="{{ old('cta_url') }}" placeholder="https://..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Summary</label>
                    <textarea name="summary" rows="3" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('summary') }}</textarea>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Details</label>
                    <textarea name="details" rows="6" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('details') }}</textarea>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Highlights, one per line</label>
                    <textarea name="highlights" rows="4" placeholder="Iterative&#10;Performance" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('highlights', $highlightsText) }}</textarea>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Technologies, one per line</label>
                    <textarea name="technologies" rows="4" placeholder="Laravel&#10;Tailwind&#10;MySQL" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('technologies', $technologiesText) }}</textarea>
                </div>

                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 shadow-sm">
                    <input id="status" type="checkbox" name="status" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('status', true))>
                    <label for="status" class="text-sm font-medium text-slate-700">Active service</label>
                </div>

                <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                    <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">Cancel</a>
                    <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">Save Service</button>
                </div>
            </form>
        </div>

        
    </div>
</div>
@endsection
