@extends('layout.main')

@section('content')

<div class="max-w-3xl mx-auto px-4 py-8">

    <!-- Heading -->
    <h2 class="text-2xl font-bold text-gray-800 mb-6">
        Edit Menu Item
    </h2>

    <!-- Card -->
    <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-100">

        <form method="POST" action="{{ route('menu-items.update', $menu_item) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" name="title"
                       value="{{ $menu_item->title }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#FD5528] focus:border-[#FD5528] outline-none">

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Type -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                <select name="type"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#FD5528] focus:border-[#FD5528] outline-none">

                    <option value="Digital Marketing"
                        {{ $menu_item->type == 'Digital Marketing' ? 'selected' : '' }}>
                        Digital Marketing
                    </option>

                    <option value="Software Development"
                        {{ $menu_item->type == 'Software Development' ? 'selected' : '' }}>
                        Software Development
                    </option>

                </select>

                @error('type')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center pt-4">

                <a href="{{ route('menu-items.index') }}"
                   class="text-gray-500 hover:text-gray-700 text-sm">
                    ← Back
                </a>

                <button type="submit"
                        class="bg-gradient-to-r from-[#FD5528] to-orange-400 hover:from-orange-400 hover:to-[#FD5528] text-white px-6 py-2 rounded-lg shadow-md transition">
                    Update Menu
                </button>
            </div>

        </form>

    </div>

</div>

@endsection