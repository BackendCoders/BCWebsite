@extends('layout.main')

@section('content')
@php($technologyValues = old('technologies', ['']))
<div class="relative mx-auto max-w-5xl space-y-6 overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 top-20 -z-10 h-64 w-64 rounded-full bg-sky-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-32 -z-10 h-56 w-56 rounded-full bg-[#FD5528]/10 blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl lg:flex-row lg:items-center lg:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Projects</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Add project</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Create a new portfolio item with project details, technologies, completion date, and a featured highlight.</p>
            </div>
        </div>

        <div class="grid gap-3 sm:grid-cols-3">
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 1</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Basics</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 2</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Media</p>
            </div>
            <div class="rounded-2xl border border-slate-200/70 bg-white px-4 py-3 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Step 3</p>
                <p class="mt-1 text-sm font-semibold text-slate-700">Publish</p>
            </div>
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-[1.25fr_0.75fr]">
        <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="grid gap-5">
            @csrf

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Client name</label>
                        <input type="text" name="client_name" value="{{ old('client_name') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Category</label>
                        <input type="text" name="category" value="{{ old('category') }}" placeholder="Web, SaaS, CRM..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                        <input type="text" name="status" value="{{ old('status', 'LIVE') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                </div>

                <div class="rounded-[1.5rem] border border-slate-200/70 bg-slate-50/80 p-4">
                    <div class="flex items-center justify-between gap-3">
                        <label class="block text-sm font-medium text-slate-700">Technologies</label>
                        <button type="button" id="addTechnology" class="text-sm font-semibold text-[#FD5528] transition hover:text-[#e94c20]">+ Add more</button>
                    </div>
                    <div id="technologyList" class="mt-3 space-y-3">
                        <div class="flex items-center gap-3">
                            <input type="text" name="technologies[]" value="{{ $technologyValues[0] ?? '' }}" placeholder="Laravel" class="technology-input w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                            <button type="button" class="removeTechnology rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600 hover:shadow-sm">Remove</button>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-slate-400">Add one technology per field, like Laravel, Tailwind, MySQL.</p>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Live URL</label>
                        <input type="url" name="live_url" value="{{ old('live_url') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Completed at</label>
                        <input type="date" name="completed_at" value="{{ old('completed_at') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    </div>
                    <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 shadow-sm">
                        <input id="is_featured" type="checkbox" name="is_featured" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('is_featured'))>
                        <label for="is_featured" class="text-sm font-medium text-slate-700">Mark as featured</label>
                    </div>
                </div>

                <div class="rounded-[1.5rem] border border-dashed border-slate-300 bg-white px-4 py-4 shadow-sm">
                    <label class="mb-2 block text-sm font-medium text-slate-700">Image</label>
                    <input type="file" name="image" accept="image/*" class="w-full rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none transition file:mr-4 file:rounded-xl file:border-0 file:bg-[#FD5528] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Description</label>
                    <textarea name="description" rows="7" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('description') }}</textarea>
                </div>

                <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                    <a href="{{ route('projects.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">Cancel</a>
                    <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">Save Project</button>
                </div>
            </form>
        </div>

        <div class="space-y-4">
            <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Tips</p>
                <h3 class="mt-2 text-xl font-bold text-slate-900">Make the card shine</h3>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-slate-500">
                    <li class="flex gap-3">
                        <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                        Use a short, clear title that reads well in the card grid.
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                        Keep the description concise so the layout stays balanced.
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                        Add 2 to 4 technologies for a cleaner visual rhythm.
                    </li>
                </ul>
            </div>

            <div class="rounded-[2rem] border border-slate-200/70 bg-gradient-to-br from-[#FD5528] to-[#e94c20] p-6 text-white shadow-xl shadow-[#FD5528]/25">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-white/70">Featured</p>
                <h3 class="mt-2 text-xl font-bold">Highlight your best work</h3>
                <p class="mt-3 text-sm leading-6 text-white/85">Featured projects stand out at the top of the portfolio and help visitors focus on your strongest examples first.</p>
            </div>
        </div>
    </div>
</div>

<template id="technologyTemplate">
    <div class="flex items-center gap-3">
        <input type="text" name="technologies[]" placeholder="Laravel" class="technology-input w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
        <button type="button" class="removeTechnology rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600 hover:shadow-sm">Remove</button>
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
