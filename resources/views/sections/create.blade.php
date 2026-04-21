@extends('layout.main')

@section('content')
@php
    $sectionTypes = ['hero', 'content', 'text', 'image', 'gallery', 'cards', 'faq', 'stats', 'timeline', 'cta', 'footer'];

    $jsonValue = old('content', json_encode([
        'eyebrow' => '',
        'subtitle' => '',
        'button_text' => '',
        'button_url' => '',
        'secondary_button' => '',
        'secondary_button_url' => '',
        'image_alt' => '',
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

    $pageTitle = $page->title ?? 'Select a page';
    $pageSlug = $page->slug ?? '';
@endphp

<div class="mx-auto max-w-7xl space-y-6">
    <section class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white shadow-2xl shadow-slate-200/50">
        <div class="relative bg-gradient-to-br from-slate-950 via-slate-900 to-[#FD5528] px-6 py-8 text-white sm:px-8">
            <div class="pointer-events-none absolute inset-0 opacity-40">
                <div class="absolute -top-20 right-0 h-64 w-64 rounded-full bg-white/10 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 h-64 w-64 rounded-full bg-[#FD5528]/25 blur-3xl"></div>
            </div>

            <div class="relative flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                <div class="max-w-3xl">
                    <p class="text-xs font-semibold uppercase tracking-[0.4em] text-white/70">Section Builder</p>
                    <h1 class="mt-3 text-3xl font-bold sm:text-4xl">Create a new section</h1>
                    <p class="mt-4 max-w-2xl text-sm leading-7 text-white/75 sm:text-base">
                        Build a reusable block for your page. Choose the section type, add the core content, and publish it instantly.
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('pages.index') }}" class="rounded-xl border border-white/15 bg-white/10 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white/15">
                        All Pages
                    </a>
                    <a href="{{ route('sections.index') }}" class="rounded-xl border border-white/15 bg-white/10 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white/15">
                        Manage Sections
                    </a>
                    @if(! empty($pageSlug))
                        <a href="{{ route('frontend.page', $pageSlug) }}" target="_blank" class="rounded-xl bg-white px-4 py-2 text-sm font-semibold text-[#FD5528] transition hover:bg-slate-100">
                            Preview Frontend
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="grid gap-4 border-t border-slate-200/70 bg-slate-50 px-6 py-5 sm:grid-cols-3 sm:px-8">
            <div class="rounded-2xl bg-white p-4 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Page</p>
                <p class="mt-2 text-lg font-semibold text-slate-900">{{ $pageTitle }}</p>
                <p class="text-sm text-slate-500">{{ $pageSlug ?: 'No slug loaded' }}</p>
            </div>
            <div class="rounded-2xl bg-white p-4 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Status</p>
                <p class="mt-2 text-lg font-semibold text-slate-900">Draft section</p>
                <p class="text-sm text-slate-500">You can edit all fields before saving.</p>
            </div>
            <div class="rounded-2xl bg-white p-4 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Type</p>
                <p class="mt-2 text-lg font-semibold text-slate-900">Reusable CMS block</p>
                <p class="text-sm text-slate-500">Hero, content, cards, FAQ, CTA, and more.</p>
            </div>
        </div>
    </section>

    @if(session('success'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
            <ul class="list-disc space-y-1 pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(! isset($page) || ! $page)
        <section class="rounded-[2rem] border border-dashed border-slate-300 bg-white px-6 py-10 text-center text-slate-500">
            No page is attached to this view yet. Open this screen from a page editor so the section can be created under the correct page.
        </section>
    @else
        <div class="grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-5">
                <section class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-xl shadow-slate-200/40">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <h2 class="text-xl font-semibold text-slate-900">Create section</h2>
                            <p class="mt-1 text-sm text-slate-500">Save a clean content structure that your frontend can render.</p>
                        </div>
                    </div>

                    <form id="sectionCreateForm" method="POST" action="{{ route('pages.sections.store', $page->id) }}" enctype="multipart/form-data" class="mt-6 space-y-5">
                        @csrf

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Type</label>
                                <select name="type" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                                    @foreach($sectionTypes as $type)
                                        <option value="{{ $type }}" @selected(old('type') === $type)>
                                            {{ ucfirst($type) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700">Order</label>
                                <input type="number" name="order" value="{{ old('order', 0) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Section title">
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Eyebrow</label>
                                <input type="text" id="section_eyebrow" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Small label above the section">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Subtitle</label>
                                <input type="text" id="section_subtitle" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Supporting line">
                            </div>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Button Text</label>
                                <input type="text" id="section_button_text" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Get Started">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Button URL</label>
                                <input type="text" id="section_button_url" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="/contact">
                            </div>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Secondary Button</label>
                                <input type="text" id="section_secondary_button" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Learn More">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Secondary Button URL</label>
                                <input type="text" id="section_secondary_button_url" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="/services">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Image Alt Text</label>
                            <input type="text" id="section_image_alt" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Describe the image">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Section Image</label>
                            <input type="file" name="image" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                        </div>

                        <div>
                            <div class="flex items-center justify-between gap-3">
                                <label class="block text-sm font-medium text-slate-700">Content JSON</label>
                                <span class="text-xs font-medium text-slate-400">Saved to the section content column</span>
                            </div>
                            <textarea id="section_content_raw" name="content" rows="10" class="mt-1 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 font-mono text-sm focus:border-[#FD5528] focus:ring-[#FD5528]">{{ $jsonValue }}</textarea>
                            <p class="mt-2 text-xs leading-6 text-slate-500">
                                Fill the structured fields above and the JSON will be synced automatically before save.
                            </p>
                        </div>

                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-orange-600">
                            Save Section
                        </button>
                    </form>
                </section>
            </div>

            <div class="space-y-6 xl:col-span-7">
                <section class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white shadow-xl shadow-slate-200/40">
                    <div class="border-b border-slate-200/70 px-6 py-5">
                        <h2 class="text-xl font-semibold text-slate-900">Preview</h2>
                        <p class="mt-1 text-sm text-slate-500">This reflects the section structure you are building.</p>
                    </div>

                    <div class="grid gap-6 p-6 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">New section</p>
                            <h3 class="mt-3 text-2xl font-bold leading-tight text-slate-900" id="preview_title">Section title will appear here</h3>
                            <p class="mt-4 text-base leading-8 text-slate-600" id="preview_subtitle">
                                Add an eyebrow, subtitle, and supporting content to build a polished section.
                            </p>

                            <div class="mt-6 flex flex-wrap gap-3">
                                <span id="preview_button" class="inline-flex rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white">Button preview</span>
                                <span id="preview_secondary_button" class="inline-flex rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700">Secondary button</span>
                            </div>
                        </div>

                        <div class="rounded-[1.75rem] border border-slate-200 bg-slate-50 p-4">
                            <div class="flex h-64 items-center justify-center rounded-[1.5rem] border border-dashed border-slate-300 bg-white text-center text-slate-500">
                                Section image preview will appear here after upload on save.
                            </div>
                        </div>
                    </div>
                </section>

                <section class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-xl shadow-slate-200/40">
                    <h2 class="text-xl font-semibold text-slate-900">Best for</h2>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach($sectionTypes as $type)
                            <span class="rounded-full border border-slate-200 bg-slate-50 px-3 py-1 text-xs font-semibold text-slate-600">{{ ucfirst($type) }}</span>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const fields = {
        eyebrow: document.getElementById('section_eyebrow'),
        subtitle: document.getElementById('section_subtitle'),
        button_text: document.getElementById('section_button_text'),
        button_url: document.getElementById('section_button_url'),
        secondary_button: document.getElementById('section_secondary_button'),
        secondary_button_url: document.getElementById('section_secondary_button_url'),
        image_alt: document.getElementById('section_image_alt'),
    };

    const raw = document.getElementById('section_content_raw');
    const previewTitle = document.getElementById('preview_title');
    const previewSubtitle = document.getElementById('preview_subtitle');
    const previewButton = document.getElementById('preview_button');
    const previewSecondaryButton = document.getElementById('preview_secondary_button');
    const form = document.getElementById('sectionCreateForm');

    const syncJson = () => {
        if (!raw) {
            return;
        }

        const payload = {};

        Object.entries(fields).forEach(([key, field]) => {
            const value = field?.value?.trim();
            if (value) {
                payload[key] = value;
            }
        });

        raw.value = JSON.stringify(payload, null, 2);

        if (previewTitle) {
            previewTitle.textContent = fields.eyebrow?.value?.trim() || 'Section title will appear here';
        }

        if (previewSubtitle) {
            previewSubtitle.textContent = fields.subtitle?.value?.trim() || 'Add an eyebrow, subtitle, and supporting content to build a polished section.';
        }

        if (previewButton) {
            previewButton.textContent = fields.button_text?.value?.trim() || 'Button preview';
        }

        if (previewSecondaryButton) {
            previewSecondaryButton.textContent = fields.secondary_button?.value?.trim() || 'Secondary button';
        }
    };

    Object.values(fields).forEach((field) => {
        field?.addEventListener('input', syncJson);
    });

    form?.addEventListener('submit', syncJson);
    syncJson();
});
</script>
@endsection
