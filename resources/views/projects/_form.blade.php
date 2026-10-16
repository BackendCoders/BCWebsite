@php
    $projectModel = $project ?? null;
    $technologyValues = old(
        'technologies',
        $projectModel?->technologies ? array_values(array_filter(array_map('trim', explode(',', $projectModel->technologies)))) : ['']
    );
    $faqValues = old('faqs', $projectModel?->faqs ?? [['question' => '', 'answer' => '']]);
@endphp

<div class="grid gap-6 lg:grid-cols-[1.15fr_0.85fr]">
    <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="grid gap-5 md:grid-cols-2">
            <div class="space-y-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                <input type="text" name="title" value="{{ old('title', $projectModel?->title ?? '') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                @error('title')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
            </div>

            <div class="space-y-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Client name</label>
                <input type="text" name="client_name" value="{{ old('client_name', $projectModel?->client_name ?? '') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                @error('client_name')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="mt-5 grid gap-5 md:grid-cols-2">
            <div class="space-y-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Category</label>
                <input type="text" name="category" value="{{ old('category', $projectModel?->category ?? '') }}" placeholder="Web, SaaS, CRM..." class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                @error('category')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
            </div>

            <div class="space-y-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                <input type="text" name="status" value="{{ old('status', $projectModel?->status ?? 'LIVE') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                @error('status')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="mt-5 rounded-[1.5rem] border border-slate-200/70 bg-slate-50/80 p-4">
            <div class="flex items-center justify-between gap-3">
                <label class="block text-sm font-medium text-slate-700">Technologies</label>
                <button type="button" id="addTechnology" class="text-sm font-semibold text-[#FD5528] transition hover:text-[#e94c20]">+ Add more</button>
            </div>
            <div id="technologyList" class="mt-3 space-y-3">
                @foreach($technologyValues as $technology)
                    <div class="technology-row flex items-center gap-3">
                        <input type="text" name="technologies[]" value="{{ $technology }}" placeholder="Laravel" class="technology-input w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        <button type="button" class="removeTechnology rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600 hover:shadow-sm">Remove</button>
                    </div>
                @endforeach
            </div>
            @error('technologies')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
        </div>

        <div class="mt-5 grid gap-5 md:grid-cols-2">
            <div class="space-y-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Live URL</label>
                <input type="url" name="live_url" value="{{ old('live_url', $projectModel?->live_url ?? '') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                @error('live_url')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
            </div>

            <div class="space-y-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Completed at</label>
                <input type="date" name="completed_at" value="{{ old('completed_at', optional($projectModel?->completed_at)->format('Y-m-d')) }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                @error('completed_at')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="mt-5 grid gap-5 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 shadow-sm">
                <label for="is_featured" class="flex cursor-pointer items-center gap-3">
                    <input id="is_featured" type="checkbox" name="is_featured" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked(old('is_featured', $projectModel?->is_featured ?? false))>
                    <span class="text-sm font-medium text-slate-700">Mark as featured</span>
                </label>
            </div>

            <div class="rounded-2xl border border-dashed border-slate-300 bg-white px-4 py-4 shadow-sm">
                <label class="mb-2 block text-sm font-medium text-slate-700">Image</label>
                <input type="file" name="image" accept="image/*" class="w-full rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none transition file:mr-4 file:rounded-xl file:border-0 file:bg-[#FD5528] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                @error('image')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
                @if($projectModel?->image)
                    <div class="mt-3 overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
                        <img alt="" src="{{ $projectModel->getImageUrl() }}" alt="{{ $projectModel->title }}" class="h-44 w-full object-cover">
                    </div>
                @endif
            </div>
        </div>

        <div class="mt-5">
            <label class="mb-2 block text-sm font-medium text-slate-700">Description</label>
            <textarea name="description" rows="7" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('description', $projectModel?->description ?? '') }}</textarea>
            @error('description')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
        </div>

        <div class="mt-5 grid gap-5 md:grid-cols-2">
            <div class="space-y-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Meta title</label>
                <input type="text" name="meta_title" value="{{ old('meta_title', $projectModel?->meta_title ?? '') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                @error('meta_title')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
            </div>

            <div class="space-y-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Meta keywords</label>
                <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $projectModel?->meta_keywords ?? '') }}" placeholder="web app, saas, portfolio" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                @error('meta_keywords')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="mt-5">
            <label class="mb-2 block text-sm font-medium text-slate-700">Meta description</label>
            <textarea name="meta_description" rows="4" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('meta_description', $projectModel?->meta_description ?? '') }}</textarea>
            @error('meta_description')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
        </div>

        <div class="mt-5 rounded-[1.5rem] border border-slate-200/70 bg-slate-50/70 p-4">
            <div class="flex items-center justify-between gap-3">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">FAQs</p>
                    <p class="mt-2 text-sm text-slate-500">Add repeatable project FAQs for the public detail page.</p>
                </div>
                <button type="button" id="addFaq" class="text-sm font-semibold text-[#FD5528] transition hover:text-[#e94c20]">+ Add FAQ</button>
            </div>

            <div id="faqList" class="mt-4 space-y-4">
                @foreach($faqValues as $index => $faq)
                    <div class="faq-row rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="flex items-center justify-between gap-3">
                            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">FAQ {{ $index + 1 }}</p>
                            <button type="button" class="removeFaq text-sm font-semibold text-rose-500 transition hover:text-rose-600">Remove</button>
                        </div>
                        <div class="mt-3 space-y-3">
                            <input type="text" name="faqs[{{ $index }}][question]" value="{{ $faq['question'] ?? '' }}" placeholder="Enter FAQ question" class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                            <textarea name="faqs[{{ $index }}][answer]" rows="4" placeholder="Enter FAQ answer" class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ $faq['answer'] ?? '' }}</textarea>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-6 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">Cancel</a>
            <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">{{ $buttonText ?? 'Save Project' }}</button>
        </div>
    </div>

    <div class="space-y-4">
        <div class="rounded-[2rem] border border-slate-200/70 bg-white/85 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">Tips</p>
            <h3 class="mt-2 text-xl font-bold text-slate-900">Keep the page premium</h3>
            <ul class="mt-4 space-y-3 text-sm leading-6 text-slate-500">
                <li class="flex gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    Use a concise title and strong hero image.
                </li>
                <li class="flex gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    Add 2 to 4 technologies for a cleaner display.
                </li>
                <li class="flex gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    Add FAQs that answer pre-sales questions.
                </li>
            </ul>
        </div>

        <div class="rounded-[2rem] border border-slate-200/70 bg-gradient-to-br from-[#FD5528] to-[#e94c20] p-6 text-white shadow-xl shadow-[#FD5528]/25">
            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-white/70">Featured</p>
            <h3 class="mt-2 text-xl font-bold">Showcase your best work</h3>
            <p class="mt-3 text-sm leading-6 text-white/85">Featured projects stand out in the portfolio and on the public detail page.</p>
        </div>
    </div>
</div>

<template id="technologyTemplate">
    <div class="technology-row flex items-center gap-3">
        <input type="text" name="technologies[]" placeholder="Laravel" class="technology-input w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
        <button type="button" class="removeTechnology rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600 hover:shadow-sm">Remove</button>
    </div>
</template>

<template id="faqTemplate">
    <div class="faq-row rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
        <div class="flex items-center justify-between gap-3">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">FAQ</p>
            <button type="button" class="removeFaq text-sm font-semibold text-rose-500 transition hover:text-rose-600">Remove</button>
        </div>
        <div class="mt-3 space-y-3">
            <input type="text" name="faqs[__INDEX__][question]" placeholder="Enter FAQ question" class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
            <textarea name="faqs[__INDEX__][answer]" rows="4" placeholder="Enter FAQ answer" class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10"></textarea>
        </div>
    </div>
</template>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const techList = document.getElementById('technologyList');
        const addTechnology = document.getElementById('addTechnology');
        const techTemplate = document.getElementById('technologyTemplate');
        const faqList = document.getElementById('faqList');
        const addFaq = document.getElementById('addFaq');
        const faqTemplate = document.getElementById('faqTemplate');

        let faqIndex = faqList ? faqList.querySelectorAll('.faq-row').length : 0;

        addTechnology?.addEventListener('click', function () {
            techList.appendChild(techTemplate.content.cloneNode(true));
        });

        addFaq?.addEventListener('click', function () {
            const html = faqTemplate.innerHTML.replaceAll('__INDEX__', faqIndex++);
            const wrapper = document.createElement('div');
            wrapper.innerHTML = html.trim();
            faqList.appendChild(wrapper.firstElementChild);
        });

        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('removeTechnology')) {
                const row = event.target.closest('.technology-row');
                const rows = techList.querySelectorAll('.technology-row');

                if (rows.length > 1) {
                    row.remove();
                } else {
                    row.querySelector('input').value = '';
                }
            }

            if (event.target.classList.contains('removeFaq')) {
                const row = event.target.closest('.faq-row');
                if (faqList.querySelectorAll('.faq-row').length > 1) {
                    row.remove();
                } else {
                    row.querySelectorAll('input, textarea').forEach(field => field.value = '');
                }
            }
        });
    });
</script>
