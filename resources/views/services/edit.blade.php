@extends('layout.main')

@section('content')
<div class="mx-auto max-w-4xl space-y-6">
    <div>
        <h2 class="text-3xl font-bold text-slate-900">Edit service</h2>
        <p class="mt-1 text-sm text-slate-500">Update the service details.</p>
    </div>

    <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <form action="{{ route('services.update', $service) }}" method="POST" class="grid gap-5">
            @csrf
            @method('PUT')

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                    <input type="text" name="title" value="{{ old('title', $service->title) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Badge text</label>
                    <input type="text" name="badge_text" value="{{ old('badge_text', $service->badge_text) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Subtitle</label>
                    <input type="text" name="subtitle" value="{{ old('subtitle', $service->subtitle) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Icon label</label>
                    <input type="text" name="icon" value="{{ old('icon', $service->icon) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Icon image URL</label>
                    <input type="url" name="icon_image" value="{{ old('icon_image', $service->icon_image) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Priority</label>
                    <input type="number" name="priority" value="{{ old('priority', $service->priority) }}" min="1" max="100" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Call to action label</label>
                    <input type="text" name="cta_label" value="{{ old('cta_label', $service->cta_label) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Call to action URL</label>
                    <input type="url" name="cta_url" value="{{ old('cta_url', $service->cta_url) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Summary</label>
                <textarea name="summary" rows="3" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('summary', $service->summary) }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Details</label>
                <textarea name="details" rows="6" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('details', $service->details) }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Highlights, one per line</label>
                <textarea name="highlights" rows="4" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('highlights', $highlightsText) }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Technologies, one per line</label>
                <textarea name="technologies" rows="4" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('technologies', $technologiesText) }}</textarea>
            </div>

            <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">
                <input id="status" type="checkbox" name="status" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('status', $service->status))>
                <label for="status" class="text-sm font-medium text-slate-700">Active service</label>
            </div>

            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">Update Service</button>
            </div>
        </form>
    </div>
</div>
@endsection
