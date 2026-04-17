@extends('layout.main')

@section('content')
@php($technologyValues = old('technologies', ['']))
<div class="mx-auto max-w-4xl space-y-6">
    <div>
        <h2 class="text-3xl font-bold text-slate-900">Add project</h2>
        <p class="mt-1 text-sm text-slate-500">Create a new portfolio item.</p>
    </div>

    <div class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="grid gap-5">
            @csrf

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Client name</label>
                    <input type="text" name="client_name" value="{{ old('client_name') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Category</label>
                    <input type="text" name="category" value="{{ old('category') }}" placeholder="Web, SaaS, CRM..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                    <input type="text" name="status" value="{{ old('status', 'LIVE') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between gap-3">
                    <label class="block text-sm font-medium text-slate-700">Technologies</label>
                    <button type="button" id="addTechnology" class="text-sm font-semibold text-[#FD5528]">+ Add more</button>
                </div>
                <div id="technologyList" class="mt-3 space-y-3">
                    <div class="flex items-center gap-3">
                        <input type="text" name="technologies[]" value="{{ $technologyValues[0] ?? '' }}" placeholder="Laravel" class="technology-input w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        <button type="button" class="removeTechnology rounded-2xl border border-slate-200 px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600">Remove</button>
                    </div>
                </div>
                <p class="mt-2 text-xs text-slate-400">Add one technology per field, like Laravel, Tailwind, MySQL.</p>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Live URL</label>
                    <input type="url" name="live_url" value="{{ old('live_url') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Completed at</label>
                    <input type="date" name="completed_at" value="{{ old('completed_at') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>
                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">
                    <input id="is_featured" type="checkbox" name="is_featured" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('is_featured'))>
                    <label for="is_featured" class="text-sm font-medium text-slate-700">Mark as featured</label>
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Image</label>
                <input type="file" name="image" accept="image/*" class="w-full rounded-2xl border border-dashed border-slate-300 bg-white px-4 py-3 text-sm text-slate-600 outline-none transition file:mr-4 file:rounded-xl file:border-0 file:bg-[#FD5528] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Description</label>
                <textarea name="description" rows="6" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('description') }}</textarea>
            </div>

            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]">Save Project</button>
            </div>
        </form>
    </div>
</div>

<template id="technologyTemplate">
    <div class="flex items-center gap-3">
        <input type="text" name="technologies[]" placeholder="Laravel" class="technology-input w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
        <button type="button" class="removeTechnology rounded-2xl border border-slate-200 px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600">Remove</button>
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
