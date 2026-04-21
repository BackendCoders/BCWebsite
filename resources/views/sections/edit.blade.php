@extends('layout.main')

@section('content')
@php
    $sectionTypes = ['hero', 'content', 'text', 'image', 'gallery', 'cards', 'faq', 'stats', 'timeline', 'cta', 'footer'];

    $decodeJsonField = function ($value) {
        if (! is_string($value) || trim($value) === '') {
            return [];
        }

        $decoded = json_decode($value, true);

        return is_array($decoded) ? $decoded : [];
    };

    $sectionContent = old('content') ? $decodeJsonField(old('content')) : ($section->content ?? []);
    $firstItem = $section->items->first();
    $contentKeys = collect($sectionContent)->keys()->values();
    $itemCount = $section->items->count();

    $fieldValue = function (string $key, $fallback = '') use ($sectionContent) {
        return old($key, data_get($sectionContent, $key, $fallback));
    };

    $mediaUrl = function ($path) {
        if (! $path) {
            return null;
        }

        if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://', '//'])) {
            return $path;
        }

        if (\Illuminate\Support\Str::startsWith($path, 'storage/')) {
            return asset($path);
        }

        return asset('storage/' . ltrim($path, '/'));
    };
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
                    <h1 class="mt-3 text-3xl font-bold sm:text-4xl">
                        {{ $section->title ?: ucfirst($section->type) }}
                    </h1>
                    <p class="mt-4 max-w-2xl text-sm leading-7 text-white/75 sm:text-base">
                        Edit the section content, keep the structure clean, and manage the items that power this page.
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('pages.index') }}" class="rounded-xl border border-white/15 bg-white/10 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white/15">
                        All Pages
                    </a>
                    <a href="{{ route('sections.index') }}" class="rounded-xl border border-white/15 bg-white/10 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white/15">
                        Manage Sections
                    </a>
                    <a href="{{ route('frontend.page', $page->slug) }}" target="_blank" class="rounded-xl bg-white px-4 py-2 text-sm font-semibold text-[#FD5528] transition hover:bg-slate-100">
                        Preview Frontend
                    </a>
                </div>
            </div>
        </div>

        <div class="grid gap-4 border-t border-slate-200/70 bg-slate-50 px-6 py-5 sm:grid-cols-3 sm:px-8">
            <div class="rounded-2xl bg-white p-4 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Page</p>
                <p class="mt-2 text-lg font-semibold text-slate-900">{{ $page->title }}</p>
                <p class="text-sm text-slate-500">{{ $page->slug }}</p>
            </div>
            <div class="rounded-2xl bg-white p-4 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Type</p>
                <p class="mt-2 text-lg font-semibold text-slate-900">{{ ucfirst($section->type) }}</p>
                <p class="text-sm text-slate-500">Order: {{ $section->order }}</p>
            </div>
            <div class="rounded-2xl bg-white p-4 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Content</p>
                <p class="mt-2 text-lg font-semibold text-slate-900">{{ $contentKeys->count() }} keys</p>
                <p class="text-sm text-slate-500">{{ $itemCount }} items attached</p>
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

    <div class="grid gap-6 xl:grid-cols-12">
        <div class="space-y-6 xl:col-span-5">
            <section class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-xl shadow-slate-200/40">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <h2 class="text-xl font-semibold text-slate-900">Edit section</h2>
                        <p class="mt-1 text-sm text-slate-500">Keep the content structured and publish-ready.</p>
                    </div>
                    @if($section->image)
                        <img src="{{ $mediaUrl($section->image) }}" alt="" class="h-16 w-16 rounded-2xl object-cover ring-4 ring-[#FD5528]/10">
                    @endif
                </div>

                <form id="sectionForm" method="POST" action="{{ route('pages.sections.update', [$page->id, $section->id]) }}" enctype="multipart/form-data" class="mt-6 space-y-5">
                    @csrf
                    @method('PUT')

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Type</label>
                            <select name="type" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                                @foreach($sectionTypes as $type)
                                    <option value="{{ $type }}" @selected(old('type', $section->type) === $type)>
                                        {{ ucfirst($type) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Order</label>
                            <input type="number" name="order" value="{{ old('order', $section->order) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Title</label>
                        <input type="text" name="title" value="{{ old('title', $section->title) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Eyebrow</label>
                            <input type="text" id="section_eyebrow" value="{{ $fieldValue('eyebrow') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Section badge text">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Subtitle</label>
                            <input type="text" id="section_subtitle" value="{{ $fieldValue('subtitle') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Short supporting line">
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Button Text</label>
                            <input type="text" id="section_button_text" value="{{ $fieldValue('button_text') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Get Started">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Button URL</label>
                            <input type="text" id="section_button_url" value="{{ $fieldValue('button_url') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="/contact">
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Secondary Button</label>
                            <input type="text" id="section_secondary_button" value="{{ $fieldValue('secondary_button') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Learn More">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Secondary Button URL</label>
                            <input type="text" id="section_secondary_button_url" value="{{ $fieldValue('secondary_button_url') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="/services">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Image Alt Text</label>
                        <input type="text" id="section_image_alt" value="{{ $fieldValue('image_alt') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Describe the image">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Section Image</label>
                        <input type="file" name="image" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                        @if($section->image)
                            <img src="{{ $mediaUrl($section->image) }}" alt="" class="mt-3 h-36 w-full rounded-2xl object-cover">
                        @endif
                    </div>

                    <div>
                        <div class="flex items-center justify-between gap-3">
                            <label class="block text-sm font-medium text-slate-700">Content JSON</label>
                            <span class="text-xs font-medium text-slate-400">Saved to the section content column</span>
                        </div>
                        <textarea id="section_content_raw" name="content" rows="10" class="mt-1 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 font-mono text-sm focus:border-[#FD5528] focus:ring-[#FD5528]">{{ old('content', json_encode($sectionContent, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                        <p class="mt-2 text-xs leading-6 text-slate-500">
                            The structured fields above will sync into this JSON automatically when you save.
                        </p>
                    </div>

                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-orange-600">
                        Update Section
                    </button>
                </form>

                <form action="{{ route('pages.sections.destroy', [$page->id, $section->id]) }}" method="POST" class="mt-3" onsubmit="return confirm('Delete this section?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-xl border border-red-200 bg-white px-4 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-50">
                        Delete Section
                    </button>
                </form>
            </section>
        </div>

        <div class="space-y-6 xl:col-span-7">
            <section class="overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white shadow-xl shadow-slate-200/40">
                <div class="border-b border-slate-200/70 px-6 py-5">
                    <h2 class="text-xl font-semibold text-slate-900">Section preview</h2>
                    <p class="mt-1 text-sm text-slate-500">A quick visual reference of the current content.</p>
                </div>

                <div class="grid gap-6 p-6 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $section->type }}</p>
                        <h3 class="mt-3 text-2xl font-bold leading-tight text-slate-900">
                            {{ $section->title ?: 'Untitled section' }}
                        </h3>
                        @if(data_get($sectionContent, 'subtitle'))
                            <p class="mt-4 text-base leading-8 text-slate-600">{{ data_get($sectionContent, 'subtitle') }}</p>
                        @elseif($firstItem?->description)
                            <p class="mt-4 text-base leading-8 text-slate-600">{{ $firstItem->description }}</p>
                        @endif

                        @if(data_get($sectionContent, 'button_text') || data_get($sectionContent, 'button'))
                            <div class="mt-6 flex flex-wrap gap-3">
                                <span class="inline-flex rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white">
                                    {{ data_get($sectionContent, 'button_text', data_get($sectionContent, 'button')) }}
                                </span>
                                @if(data_get($sectionContent, 'secondary_button'))
                                    <span class="inline-flex rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700">
                                        {{ data_get($sectionContent, 'secondary_button') }}
                                    </span>
                                @endif
                            </div>
                        @endif
                    </div>

                    <div class="rounded-[1.75rem] border border-slate-200 bg-slate-50 p-4">
                        @if($section->image)
                            <img src="{{ $mediaUrl($section->image) }}" alt="" class="h-64 w-full rounded-[1.5rem] object-cover shadow-lg">
                        @else
                            <div class="flex h-64 items-center justify-center rounded-[1.5rem] border border-dashed border-slate-300 bg-white text-center text-slate-500">
                                Add a section image to make this block feel premium.
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            <section class="rounded-[2rem] border border-slate-200/70 bg-white p-6 shadow-xl shadow-slate-200/40">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-slate-900">Add section item</h2>
                        <p class="mt-1 text-sm text-slate-500">Use items for cards, FAQs, galleries, timelines, and repeatable content.</p>
                    </div>
                    <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">
                        New item
                    </span>
                </div>

                <form id="newItemForm" method="POST" action="{{ route('pages.section-items.store', [$page->id, $section->id]) }}" enctype="multipart/form-data" class="mt-6 grid gap-4 md:grid-cols-2">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Title</label>
                        <input type="text" name="title" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Item title">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Order</label>
                        <input type="number" name="order" value="0" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-slate-700">Description</label>
                        <textarea name="description" rows="4" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Short supporting copy"></textarea>
                    </div>

                    <div class="grid gap-4 md:col-span-2 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Label</label>
                            <input type="text" id="new_item_label" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Card label or badge">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Tags</label>
                            <input type="text" id="new_item_tags" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="SEO, Growth, Leads">
                        </div>
                    </div>

                    <div class="grid gap-4 md:col-span-2 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Button Text</label>
                            <input type="text" id="new_item_button_text" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Read More">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Button URL</label>
                            <input type="text" id="new_item_button_url" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="/contact">
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-slate-700">Extra JSON</label>
                        <textarea id="new_item_extra_raw" name="extra" rows="6" class="mt-1 w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 font-mono text-sm focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder='{"button_text":"Read More","button_url":"/contact"}'></textarea>
                        <p class="mt-2 text-xs leading-6 text-slate-500">
                            Structured fields above will be merged into this JSON automatically.
                        </p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Image</label>
                        <input type="file" name="image" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                    </div>

                    <div class="flex items-end">
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-orange-600">
                            Add Item
                        </button>
                    </div>
                </form>
            </section>

            <section class="space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-slate-900">Current items</h2>
                    <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">
                        {{ $itemCount }} items
                    </span>
                </div>

                @forelse($section->items as $item)
                    @php $itemExtra = $item->extra ?? []; @endphp
                    <div class="overflow-hidden rounded-[1.75rem] border border-slate-200/70 bg-white shadow-lg shadow-slate-200/40">
                        <div class="border-b border-slate-200/70 px-6 py-4">
                            <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">{{ $item->title ?: 'Untitled item' }}</h3>
                                    <p class="text-sm text-slate-500">Item order: {{ $item->order }}</p>
                                </div>
                                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                                    Item #{{ $item->id }}
                                </span>
                            </div>
                        </div>

                        <div class="grid gap-6 px-6 py-6 lg:grid-cols-[1.05fr_0.95fr]">
                            <form id="itemForm-{{ $item->id }}" method="POST" action="{{ route('pages.section-items.update', [$page->id, $section->id, $item->id]) }}" enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                @method('PUT')

                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700">Title</label>
                                        <input type="text" name="title" value="{{ old('title', $item->title) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-slate-700">Order</label>
                                        <input type="number" name="order" value="{{ old('order', $item->order) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700">Description</label>
                                    <textarea name="description" rows="4" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">{{ old('description', $item->description) }}</textarea>
                                </div>

                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700">Label</label>
                                        <input type="text" id="item_label_{{ $item->id }}" value="{{ data_get($itemExtra, 'label') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700">Tags</label>
                                        <input type="text" id="item_tags_{{ $item->id }}" value="{{ is_array(data_get($itemExtra, 'tags')) ? implode(', ', data_get($itemExtra, 'tags')) : '' }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Tag 1, Tag 2">
                                    </div>
                                </div>

                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700">Button Text</label>
                                        <input type="text" id="item_button_text_{{ $item->id }}" value="{{ data_get($itemExtra, 'button_text', data_get($itemExtra, 'button')) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="Read More">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700">Button URL</label>
                                        <input type="text" id="item_button_url_{{ $item->id }}" value="{{ data_get($itemExtra, 'button_url') }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]" placeholder="/contact">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700">Extra JSON</label>
                                    <textarea id="item_extra_raw_{{ $item->id }}" name="extra" rows="5" class="mt-1 w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 font-mono text-sm focus:border-[#FD5528] focus:ring-[#FD5528]">{{ old('extra', json_encode($itemExtra, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                                </div>

                                <div class="flex flex-col gap-3 sm:flex-row sm:items-end">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium text-slate-700">Image</label>
                                        <input type="file" name="image" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-[#FD5528] focus:ring-[#FD5528]">
                                    </div>
                                    <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-orange-600">
                                        Update Item
                                    </button>
                                </div>
                            </form>

                            <div class="space-y-4">
                                <div class="rounded-[1.5rem] border border-slate-200 bg-slate-50 p-4">
                                    @if($item->image)
                                        <img src="{{ $mediaUrl($item->image) }}" alt="{{ $item->title }}" class="h-40 w-full rounded-[1.25rem] object-cover">
                                    @else
                                        <div class="flex h-40 items-center justify-center rounded-[1.25rem] border border-dashed border-slate-300 bg-white text-sm text-slate-500">
                                            No image for this item.
                                        </div>
                                    @endif

                                    <div class="mt-4 space-y-2">
                                        @if(data_get($itemExtra, 'label'))
                                            <span class="inline-flex rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">
                                                {{ data_get($itemExtra, 'label') }}
                                            </span>
                                        @endif

                                        <p class="text-sm leading-7 text-slate-600">
                                            {{ $item->description ?: 'No description added yet.' }}
                                        </p>

                                        @php $itemTags = data_get($itemExtra, 'tags', []); @endphp
                                        @if(is_array($itemTags) && count($itemTags))
                                            <div class="flex flex-wrap gap-2 pt-2">
                                                @foreach($itemTags as $tag)
                                                    <span class="rounded-full border border-slate-300 bg-white px-3 py-1 text-xs font-semibold text-slate-600">{{ $tag }}</span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <form method="POST" action="{{ route('pages.section-items.destroy', [$page->id, $section->id, $item->id]) }}" onsubmit="return confirm('Delete this item?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-xl border border-red-200 bg-white px-4 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-50">
                                        Delete Item
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-10 text-center text-slate-500">
                        No items added yet.
                    </div>
                @endforelse
            </section>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const sectionFields = {
        eyebrow: document.getElementById('section_eyebrow'),
        subtitle: document.getElementById('section_subtitle'),
        button_text: document.getElementById('section_button_text'),
        button_url: document.getElementById('section_button_url'),
        secondary_button: document.getElementById('section_secondary_button'),
        secondary_button_url: document.getElementById('section_secondary_button_url'),
        image_alt: document.getElementById('section_image_alt'),
    };

    const sectionRaw = document.getElementById('section_content_raw');
    const sectionForm = document.getElementById('sectionForm');

    const parseJson = (value) => {
        if (!value || !value.trim()) {
            return {};
        }

        try {
            const parsed = JSON.parse(value);
            return parsed && typeof parsed === 'object' && !Array.isArray(parsed) ? parsed : {};
        } catch (error) {
            return {};
        }
    };

    const syncSectionJson = () => {
        const current = parseJson(sectionRaw?.value || '');
        const payload = {
            ...current,
            eyebrow: sectionFields.eyebrow?.value || '',
            subtitle: sectionFields.subtitle?.value || '',
            button_text: sectionFields.button_text?.value || '',
            button_url: sectionFields.button_url?.value || '',
            secondary_button: sectionFields.secondary_button?.value || '',
            secondary_button_url: sectionFields.secondary_button_url?.value || '',
            image_alt: sectionFields.image_alt?.value || '',
        };

        Object.keys(payload).forEach((key) => {
            if (payload[key] === '') {
                delete payload[key];
            }
        });

        if (sectionRaw) {
            sectionRaw.value = JSON.stringify(payload, null, 2);
        }
    };

    Object.values(sectionFields).forEach((field) => {
        field?.addEventListener('input', syncSectionJson);
    });

    sectionForm?.addEventListener('submit', syncSectionJson);

    const syncItemJson = (itemId) => {
        const raw = document.getElementById(`item_extra_raw_${itemId}`);
        const label = document.getElementById(`item_label_${itemId}`);
        const tags = document.getElementById(`item_tags_${itemId}`);
        const buttonText = document.getElementById(`item_button_text_${itemId}`);
        const buttonUrl = document.getElementById(`item_button_url_${itemId}`);

        if (!raw) {
            return;
        }

        let payload = {};

        try {
            payload = raw.value && raw.value.trim() ? JSON.parse(raw.value) : {};
            if (!payload || typeof payload !== 'object' || Array.isArray(payload)) {
                payload = {};
            }
        } catch (error) {
            payload = {};
        }

        const tagList = (tags?.value || '')
            .split(',')
            .map((tag) => tag.trim())
            .filter(Boolean);

        const next = {
            ...payload,
            label: label?.value || '',
            button_text: buttonText?.value || '',
            button_url: buttonUrl?.value || '',
            tags: tagList,
        };

        Object.keys(next).forEach((key) => {
            if (
                next[key] === '' ||
                (Array.isArray(next[key]) && next[key].length === 0)
            ) {
                delete next[key];
            }
        });

        raw.value = JSON.stringify(next, null, 2);
    };

    document.querySelectorAll('form[id^="itemForm-"]').forEach((form) => {
        const itemId = form.id.replace('itemForm-', '');

        const label = document.getElementById(`item_label_${itemId}`);
        const tags = document.getElementById(`item_tags_${itemId}`);
        const buttonText = document.getElementById(`item_button_text_${itemId}`);
        const buttonUrl = document.getElementById(`item_button_url_${itemId}`);
        const raw = document.getElementById(`item_extra_raw_${itemId}`);

        [label, tags, buttonText, buttonUrl].forEach((field) => {
            field?.addEventListener('input', () => syncItemJson(itemId));
        });

        form.addEventListener('submit', () => syncItemJson(itemId));

        // Keep the JSON textarea aligned on first load if the structured fields are edited.
        if (raw) {
            syncItemJson(itemId);
        }
    });

    const newItemForm = document.getElementById('newItemForm');
    const newLabel = document.getElementById('new_item_label');
    const newTags = document.getElementById('new_item_tags');
    const newButtonText = document.getElementById('new_item_button_text');
    const newButtonUrl = document.getElementById('new_item_button_url');
    const newExtra = document.getElementById('new_item_extra_raw');

    const syncNewItemJson = () => {
        if (!newExtra) {
            return;
        }

        let payload = {};

        try {
            payload = newExtra.value && newExtra.value.trim() ? JSON.parse(newExtra.value) : {};
            if (!payload || typeof payload !== 'object' || Array.isArray(payload)) {
                payload = {};
            }
        } catch (error) {
            payload = {};
        }

        const tagList = (newTags?.value || '')
            .split(',')
            .map((tag) => tag.trim())
            .filter(Boolean);

        const next = {
            ...payload,
            label: newLabel?.value || '',
            button_text: newButtonText?.value || '',
            button_url: newButtonUrl?.value || '',
            tags: tagList,
        };

        Object.keys(next).forEach((key) => {
            if (
                next[key] === '' ||
                (Array.isArray(next[key]) && next[key].length === 0)
            ) {
                delete next[key];
            }
        });

        newExtra.value = JSON.stringify(next, null, 2);
    };

    [newLabel, newTags, newButtonText, newButtonUrl].forEach((field) => {
        field?.addEventListener('input', syncNewItemJson);
    });

    newItemForm?.addEventListener('submit', syncNewItemJson);
});
</script>
@endsection
