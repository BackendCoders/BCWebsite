@extends('layout.main')

@section('content')
<div class="mx-auto max-w-4xl px-4 pb-12 pt-28 sm:px-6 lg:px-8">
    <div class="relative overflow-hidden rounded-[2.25rem] border border-slate-200/70 bg-white/95 p-6 shadow-[0_24px_80px_rgba(15,23,42,0.08)] backdrop-blur-xl sm:p-8">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(253,85,40,0.15),_transparent_28%),radial-gradient(circle_at_bottom_left,_rgba(14,165,233,0.10),_transparent_24%)]"></div>

        <div class="relative mb-8 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <div class="inline-flex items-center gap-2 rounded-full border border-[#FD5528]/20 bg-[#FD5528]/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.32em] text-[#FD5528]">
                    Menu Builder
                </div>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-slate-900">Edit Menu</h2>
                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
                    Update the menu title, page assignment, parent structure, order, and type in a clean visual workspace.
                </p>
            </div>

            <a href="{{ route('menu-items.index') }}"
               class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-[#FD5528] hover:text-[#FD5528]">
                Back to Menu
            </a>
        </div>

        @if($errors->any())
            <div class="relative mb-6 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-4 text-rose-700">
                <p class="font-semibold">Please fix the following issues:</p>
                <ul class="mt-2 list-disc space-y-1 pl-5 text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="relative overflow-hidden rounded-[1.75rem] border border-slate-200/70 bg-white shadow-xl shadow-slate-200/40">
            <form method="POST" action="{{ route('menu-items.update', $menu_item) }}" class="p-6 sm:p-8">
                @csrf
                @method('PUT')

                <div class="grid gap-6 lg:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Title</label>
                        <input
                            type="text"
                            name="title"
                            value="{{ old('title', $menu_item->title) }}"
                            class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                            placeholder="Menu title"
                        >
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Page</label>
                        <select
                            name="page_id"
                            class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                        >
                            <option value="">No page</option>
                            @foreach($pages as $id => $title)
                                <option value="{{ $id }}" @selected(old('page_id', $menu_item->page_id) == $id)>{{ $title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Parent Menu</label>
                        <select
                            name="parent_id"
                            class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                        >
                            <option value="">No parent</option>
                            @foreach($parents as $id => $title)
                                <option value="{{ $id }}" @selected(old('parent_id', $menu_item->parent_id) == $id)>{{ $title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Order</label>
                        <input
                            type="number"
                            name="order"
                            value="{{ old('order', $menu_item->order) }}"
                            min="0"
                            class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                        >
                    </div>

                    <div class="lg:col-span-2">
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Type</label>
                        @php
                            $selectedType = \App\Models\MenuItem::normalizeType(old('type', $menu_item->type ?? ''));
                        @endphp

                        <select
                            name="type"
                            class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:bg-white focus:ring-4 focus:ring-[#FD5528]/10"
                        >
                            <option value="" {{ blank($selectedType) ? 'selected' : '' }}>
                                No Type Selection
                            </option>

                            @foreach(\App\Models\MenuItem::getTypes() as $value => $label)
                                <option value="{{ $value }}" {{ $selectedType === $value ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>

                        @error('type')
                            <p class="mt-2 text-sm font-medium text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-8 flex flex-col gap-4 border-t border-slate-200 pt-6 sm:flex-row sm:items-center sm:justify-between">
                    <p class="text-sm text-slate-500">
                        Tip: make sure parent menus and ordering stay consistent with your navigation hierarchy.
                    </p>

                    <button
                        type="submit"
                        class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20]"
                    >
                        Update Menu
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
