@extends('layout.main')

@section('content')

<div class="max-w-3xl mx-auto px-4 py-8">

    <!-- Heading -->
    <h2 class="text-2xl font-bold text-gray-800 mb-6">
        Create Menu Item
    </h2>

    <!-- Card -->
    <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-100">

        <form method="POST" action="{{ route('menu-items.store') }}" class="space-y-5">
            @csrf

            <!-- Title -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" name="title"
                       placeholder="Enter menu title"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#FD5528] focus:border-[#FD5528] outline-none">
            </div>

            <!-- Page -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Select Page</label>
                <select name="page_id"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#FD5528] focus:border-[#FD5528] outline-none">
                    <option value="">Select Page</option>
                    @foreach($pages as $id => $title)
                        <option value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Parent -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Parent Menu</label>
                <select name="parent_id"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#FD5528] focus:border-[#FD5528] outline-none">
                    <option value="">Parent Menu (optional)</option>
                    @foreach($parents as $id => $title)
                        <option value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Type -->
          <!-- Type -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>

    @php
        $selectedType = old('type', '');
    @endphp

    <select name="type" required
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#FD5528] focus:border-[#FD5528] outline-none">

        <!-- Default Placeholder -->
        <option value="" disabled {{ $selectedType === '' ? 'selected' : '' }}>
            Select Type
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

            <!-- Buttons -->
            <div class="flex justify-between items-center pt-4">

                <a href="{{ route('menu-items.index') }}"
                   class="text-gray-500 hover:text-gray-700 text-sm">
                    ← Back
                </a>

                <button type="submit"
                        class="bg-gradient-to-r from-[#FD5528] to-orange-400 hover:from-orange-400 hover:to-[#FD5528] text-white px-6 py-2 rounded-lg shadow-md transition">
                    Save Menu
                </button>
            </div>

        </form>

    </div>

</div>

@endsection
