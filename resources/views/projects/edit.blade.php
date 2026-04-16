@extends('layout.main')

@section('content')
@php($technologyValues = old('technologies', $project->technologies ? array_values(array_filter(array_map('trim', explode(',', $project->technologies)))) : ['']))
<div class="mx-auto max-w-4xl space-y-6">
    <div>
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Edit project</h2>
        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Update the portfolio item details.</p>
    </div>

    <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl dark:border-white/10 dark:bg-white/5 dark:shadow-black/20">
        <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="grid gap-5">
            @csrf
            @method('PUT')

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Title</label>
                    <input type="text" name="title" value="{{ old('title', $project->title) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Client name</label>
                    <input type="text" name="client_name" value="{{ old('client_name', $project->client_name) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Category</label>
                    <input type="text" name="category" value="{{ old('category', $project->category) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Status</label>
                    <input type="text" name="status" value="{{ old('status', $project->status) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between gap-3">
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-200">Technologies</label>
                    <button type="button" id="addTechnology" class="text-sm font-semibold text-[#FD5528]">+ Add more</button>
                </div>
                <div id="technologyList" class="mt-3 space-y-3">
                    @foreach($technologyValues as $technology)
                        <div class="flex items-center gap-3">
                            <input type="text" name="technologies[]" value="{{ $technology }}" placeholder="Laravel" class="technology-input w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                            <button type="button" class="removeTechnology rounded-2xl border border-slate-200 px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600 dark:border-white/10">Remove</button>
                        </div>
                    @endforeach
                </div>
                <p class="mt-2 text-xs text-slate-400">Add one technology per field, like Laravel, Tailwind, MySQL.</p>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Live URL</label>
                    <input type="url" name="live_url" value="{{ old('live_url', $project->live_url) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Completed at</label>
                    <input type="date" name="completed_at" value="{{ old('completed_at', optional($project->completed_at)->format('Y-m-d')) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
                </div>
                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 dark:border-white/10 dark:bg-slate-950/40">
                    <input id="is_featured" type="checkbox" name="is_featured" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('is_featured', $project->is_featured))>
                    <label for="is_featured" class="text-sm font-medium text-slate-700 dark:text-slate-200">Mark as featured</label>
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Image</label>
                <input type="file" name="image" accept="image/*" class="w-full rounded-2xl border border-dashed border-slate-300 bg-white px-4 py-3 text-sm text-slate-600 outline-none transition file:mr-4 file:rounded-xl file:border-0 file:bg-[#FD5528] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-slate-300">
                @if($project->image)
                    <div class="mt-3 overflow-hidden rounded-2xl border border-slate-200 dark:border-white/10">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="h-44 w-full object-cover">
                    </div>
                @endif
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Description</label>
                <textarea name="description" rows="6" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">{{ old('description', $project->description) }}</textarea>
            </div>

            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528] dark:border-white/10 dark:bg-slate-950/40 dark:text-slate-200">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">Update Project</button>
            </div>
        </form>
    </div>
</div>

<template id="technologyTemplate">
    <div class="flex items-center gap-3">
        <input type="text" name="technologies[]" placeholder="Laravel" class="technology-input w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 dark:border-white/10 dark:bg-slate-950/40 dark:text-white">
        <button type="button" class="removeTechnology rounded-2xl border border-slate-200 px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600 dark:border-white/10">Remove</button>
    </div>
</template>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const list = document.getElementById('technologyList');
        const addButton = document.getElementById('addTechnology');
        const template = document.getElementById('technologyTemplate');

        addButton?.addEventListener('click', function () {
            const node = template.content.cloneNode(true);
            list.appendChild(node);
        });

        list?.addEventListener('click', function (event) {
            if (!event.target.classList.contains('removeTechnology')) {
                return;
            }

            const row = event.target.closest('.flex.items-center.gap-3');
            if (!row) {
                return;
            }

            if (list.querySelectorAll('.flex.items-center.gap-3').length > 1) {
                row.remove();
            } else {
                row.querySelector('input').value = '';
            }
        });
    });
</script>
@endsection
