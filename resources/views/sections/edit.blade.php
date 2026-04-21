@extends('layout.main')

@section('content')
@php
    $sectionTypes = ['hero', 'content', 'text', 'image', 'gallery', 'cards', 'faq', 'stats', 'timeline', 'cta', 'footer'];
@endphp

<div class="max-w-7xl mx-auto space-y-6">
    <section class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Section Builder</p>
                <h1 class="mt-2 text-3xl font-bold text-slate-900">{{ $section->title ?: ucfirst($section->type) }}</h1>
                <p class="mt-2 text-sm text-slate-500">
                    Page: <span class="font-semibold text-slate-700">{{ $page->title }}</span>
                </p>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="{{ route('pages.index') }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                    All Pages
                </a>
                <a href="{{ route('sections.index') }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                    Manage Sections
                </a>
                <a href="{{ route('frontend.page', $page->slug) }}" target="_blank" class="rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-orange-600">
                    Preview Frontend
                </a>
            </div>
        </div>
    </section>

    @if(session('success'))
        <div class="rounded-2xl bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="rounded-2xl bg-red-50 px-4 py-3 text-sm text-red-700">
            <ul class="list-disc pl-5 space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid gap-6 xl:grid-cols-12">
        <div class="xl:col-span-4 space-y-6">
            <section class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <h2 class="text-xl font-semibold text-slate-900">Edit section</h2>

                <form method="POST" action="{{ route('pages.sections.update', [$page->id, $section->id]) }}" enctype="multipart/form-data" class="mt-6 space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Type</label>
                        <select name="type" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                            @foreach($sectionTypes as $type)
                                <option value="{{ $type }}" @selected(old('type', $section->type) === $type)>
                                    {{ ucfirst($type) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Title</label>
                        <input type="text" name="title" value="{{ old('title', $section->title) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Order</label>
                        <input type="number" name="order" value="{{ old('order', $section->order) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Section Content JSON</label>
                        <textarea name="content" rows="8" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 font-mono text-sm">{{ old('content', json_encode($section->content ?? [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Section Image</label>
                        <input type="file" name="image" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                        @if($section->image)
                            <img src="{{ asset('storage/'.$section->image) }}" alt="" class="mt-3 h-28 w-full rounded-xl object-cover">
                        @endif
                    </div>

                    <button type="submit" class="rounded-xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-orange-600">
                        Update Section
                    </button>
                </form>

                <form action="{{ route('pages.sections.destroy', [$page->id, $section->id]) }}" method="POST" class="mt-3" onsubmit="return confirm('Delete this section?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="rounded-xl border border-red-200 bg-white px-4 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-50">
                        Delete Section
                    </button>
                </form>
            </section>
        </div>

        <div class="xl:col-span-8 space-y-6">
            <section class="rounded-[2rem] border border-slate-200/70 bg-white/80 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
                <h2 class="text-xl font-semibold text-slate-900">Add section item</h2>
                <p class="mt-2 text-sm text-slate-500">Use items for cards, FAQs, gallery entries, text blocks, and any repeatable content inside this section.</p>

                <form method="POST" action="{{ route('pages.section-items.store', [$page->id, $section->id]) }}" enctype="multipart/form-data" class="mt-6 grid gap-4 md:grid-cols-2">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Title</label>
                        <input type="text" name="title" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Order</label>
                        <input type="number" name="order" value="0" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-slate-700">Description</label>
                        <textarea name="description" rows="4" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3"></textarea>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-slate-700">Extra JSON</label>
                        <textarea name="extra" rows="6" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 font-mono text-sm" placeholder='{"button_text":"Read More","button_url":"/page/about"}'></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Image</label>
                        <input type="file" name="image" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                    </div>

                    <div class="flex items-end">
                        <button type="submit" class="rounded-xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-orange-600">
                            Add Item
                        </button>
                    </div>
                </form>
            </section>

            <section class="space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-slate-900">Current items</h2>
                    <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold text-[#FD5528]">
                        {{ $section->items->count() }} items
                    </span>
                </div>

                @forelse($section->items as $item)
                    <div class="rounded-[1.75rem] border border-slate-200/70 bg-white p-6 shadow-lg shadow-slate-200/40">
                        <form method="POST" action="{{ route('pages.section-items.update', [$page->id, $section->id, $item->id]) }}" enctype="multipart/form-data" class="grid gap-4 md:grid-cols-2">
                            @csrf
                            @method('PUT')

                            <div>
                                <label class="block text-sm font-medium text-slate-700">Title</label>
                                <input type="text" name="title" value="{{ old('title', $item->title) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700">Order</label>
                                <input type="number" name="order" value="{{ old('order', $item->order) }}" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-slate-700">Description</label>
                                <textarea name="description" rows="4" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">{{ old('description', $item->description) }}</textarea>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-slate-700">Extra JSON</label>
                                <textarea name="extra" rows="6" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3 font-mono text-sm">{{ old('extra', json_encode($item->extra ?? [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700">Image</label>
                                <input type="file" name="image" class="mt-1 w-full rounded-xl border border-slate-300 px-4 py-3">
                                @if($item->image)
                                    <img src="{{ asset('storage/'.$item->image) }}" alt="" class="mt-3 h-24 w-full rounded-xl object-cover">
                                @endif
                            </div>

                            <div class="flex flex-col justify-end gap-3">
                                <button type="submit" class="rounded-xl bg-[#FD5528] px-4 py-3 text-sm font-semibold text-white transition hover:bg-orange-600">
                                    Update Item
                                </button>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('pages.section-items.destroy', [$page->id, $section->id, $item->id]) }}" class="mt-4" onsubmit="return confirm('Delete this item?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-xl border border-red-200 bg-white px-4 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-50">
                                Delete Item
                            </button>
                        </form>
                    </div>
                @empty
                    <div class="rounded-2xl border border-dashed border-slate-300 px-4 py-8 text-center text-slate-500">
                        No items added yet.
                    </div>
                @endforelse
            </section>
        </div>
    </div>
</div>
@endsection
