@extends('layout.main')

@section('content')

<div class="max-w-3xl mx-auto px-4 py-8">

    <h2 class="text-2xl font-bold text-gray-800 mb-6">
        Edit Menu Item
    </h2>

    <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-100">

        <form method="POST" action="{{ route('menu-items.update', $menu_item) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" name="title"
                       value="{{ old('title', $menu_item->title) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <!-- Page -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Select Page</label>
                <select name="page_id"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    <option value="">Select Page</option>
                    @foreach($pages as $id => $title)
                        <option value="{{ $id }}"
                            @selected(old('page_id', $menu_item->page_id) == $id)>
                            {{ $title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Parent -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Parent Menu</label>
                <select name="parent_id"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    <option value="">Parent Menu</option>
                    @foreach($parents as $id => $title)
                        <option value="{{ $id }}"
                            @selected(old('parent_id', $menu_item->parent_id) == $id)>
                            {{ $title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Type -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>

                @php
                    $selectedType = old('type', $menu_item->type);
                @endphp

                <select name="type" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">

                    @foreach(\App\Models\MenuItem::getTypes() as $value => $label)
                        <option value="{{ $value }}" {{ $selectedType === $value ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach

                </select>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="bg-gradient-to-r from-[#FD5528] to-orange-400 text-white px-6 py-2 rounded-lg">
                Update Menu
            </button>

        </form>

    </div>

</div>

@endsection