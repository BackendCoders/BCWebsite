@extends('layout.main')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">✏️ Edit Menu</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('menu-items.update', $menu_item) }}">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-sm font-medium">Title</label>
                <input type="text" name="title" value="{{ old('title', $menu_item->title) }}"
                       class="w-full border p-2 rounded mt-1">
            </div>

            <div>
                <label class="block text-sm font-medium">Page</label>
                <select name="page_id" class="w-full border p-2 rounded mt-1">
                    <option value="">No page</option>
                    @foreach($pages as $id => $title)
                        <option value="{{ $id }}" @selected(old('page_id', $menu_item->page_id) == $id)>{{ $title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-sm font-medium">Parent Menu</label>
                <select name="parent_id" class="w-full border p-2 rounded mt-1">
                    <option value="">No parent</option>
                    @foreach($parents as $id => $title)
                        <option value="{{ $id }}" @selected(old('parent_id', $menu_item->parent_id) == $id)>{{ $title }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium">Order</label>
                <input type="number" name="order"
                       value="{{ old('order', $menu_item->order) }}"
                       class="w-full border p-2 rounded mt-1"
                       min="0">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                @php
                    $selectedType = \App\Models\MenuItem::normalizeType(old('type', $menu_item->type ?? ''));
                @endphp

                <select name="type"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
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
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <button type="submit"
                class="bg-[#FD5528] text-white px-6 py-2 rounded-lg hover:bg-orange-600">
            Update Menu
        </button>
    </form>
</div>
@endsection
