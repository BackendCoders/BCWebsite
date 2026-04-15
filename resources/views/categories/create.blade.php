@extends('layout.main')

@section('content')

<div class="p-6 max-w-3xl mx-auto">

    <!-- 🔥 Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Add Category</h2>
        <p class="text-gray-500 text-sm">Create a new category</p>
    </div>

    <!-- 🔥 Card -->
    <div class="bg-white shadow rounded-xl p-6">

        <form action="{{ route('categories.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- 📌 Category Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">
                    Category Name
                </label>
                <input type="text"
                       name="name"
                       placeholder="Enter category name"
                       class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FD5528]">
            </div>

            <!-- 📌 Description -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">
                    Description
                </label>
                <textarea name="description"
                          rows="4"
                          placeholder="Enter description"
                          class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FD5528]"></textarea>
            </div>

            <!-- 🔥 Buttons -->
            <div class="flex justify-end gap-3">

                <a href="{{ route('categories.index') }}"
                   class="px-4 py-2 rounded-lg border text-gray-600 hover:bg-gray-100 transition">
                    Cancel
                </a>

                <button type="submit"
                        class="px-5 py-2 bg-[#FD5528] text-white rounded-lg shadow hover:bg-orange-600 transition">
                    Save Category
                </button>

            </div>

        </form>

    </div>

</div>

@endsection