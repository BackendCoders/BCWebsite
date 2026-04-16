@extends('layout.main')

@section('content')
<div class="mx-auto max-w-4xl space-y-6">
    <div>
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Add service</h2>
        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Create a service card with all UI fields.</p>
    </div>

    <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
        <form action="{{ route('services.store') }}" method="POST" class="grid gap-5">
            @csrf

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Badge text</label>
                    <input type="text" name="badge_text" value="{{ old('badge_text') }}" placeholder="Bespoke Web" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Subtitle</label>
                    <input type="text" name="subtitle" value="{{ old('subtitle') }}" placeholder="Short supporting line" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Icon label</label>
                    <input type="text" name="icon" value="{{ old('icon') }}" placeholder="S" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Icon image URL</label>
                    <input type="url" name="icon_image" value="{{ old('icon_image') }}" placeholder="https://..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Priority</label>
                    <input type="number" name="priority" value="{{ old('priority', 50) }}" min="1" max="100" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Call to action label</label>
                    <input type="text" name="cta_label" value="{{ old('cta_label') }}" placeholder="View details" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Call to action URL</label>
                    <input type="url" name="cta_url" value="{{ old('cta_url') }}" placeholder="https://..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Summary</label>
                <textarea name="summary" rows="3" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">{{ old('summary') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Details</label>
                <textarea name="details" rows="6" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">{{ old('details') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Highlights, one per line</label>
                <textarea name="highlights" rows="4" placeholder="Iterative&#10;Performance" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">{{ old('highlights', $highlightsText) }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Technologies, one per line</label>
                <textarea name="technologies" rows="4" placeholder="Laravel&#10;Tailwind&#10;MySQL" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">{{ old('technologies', $technologiesText) }}</textarea>
            </div>

            <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 dark:border-white/10 dark:bg-slate-950/40">
                <input id="status" type="checkbox" name="status" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('status', true))>
                <label for="status" class="text-sm font-medium text-slate-700 dark:text-slate-200">Active service</label>
            </div>

            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528] dark:border-white/10 dark:bg-slate-950/40 dark:text-slate-200">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">Save Service</button>
            </div>
        </form>
    </div>
</div>
@endsection
