@extends('layout.main')

@section('content')

<div class="max-w-6xl mx-auto px-4 py-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Menu Management</h2>

        <a href="{{ route('menu-items.create') }}"
           class="bg-[#FD5528] hover:bg-orange-600 text-white px-5 py-2 rounded-lg shadow-md transition">
            + Add Menu
        </a>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">

        <table class="w-full text-sm text-left">
            
            <!-- Table Head -->
            <thead class="bg-gradient-to-r from-[#FD5528] to-orange-400 text-white">
                <tr>
                    <th class="px-6 py-3">Title</th>
                    <th class="px-6 py-3">Type</th>
                    <th class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="divide-y">

                @forelse($menus as $menu)
                <tr class="hover:bg-orange-50 transition">

                    <td class="px-6 py-4 font-medium text-gray-800">
                        {{ $menu->title }}
                    </td>

                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs rounded-full 
                            {{ $menu->type == 'Digital Marketing' ? 'bg-orange-100 text-orange-600' : 'bg-gray-100 text-gray-700' }}">
                            {{ $menu->type == 'software development' ? 'bg-orange-100 text-orange-600' : 'bg-gray-100 text-gray-700' }}"
                        </span>
                    </td>

                    <td class="px-6 py-4 text-center flex justify-center gap-3">

                        <!-- Edit -->
                        <a href="{{ route('menu-items.edit', $menu) }}"
                           class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-xs transition">
                            Edit
                        </a>

                        <!-- Delete -->
                        <form action="{{ route('menu-items.destroy', $menu) }}" method="POST"
                              onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')

                            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-xs transition">
                                Delete
                            </button>
                        </form>

                    </td>

                </tr>

                @empty
                <tr>
                    <td colspan="3" class="text-center py-6 text-gray-500">
                        No menu items found 🚫
                    </td>
                </tr>
                @endforelse

            </tbody>

        </table>
    </div>

</div>

@endsection