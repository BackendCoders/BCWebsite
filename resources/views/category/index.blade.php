@extends('layout.main')

@section('content')

<div class="space-y-6">

    <!-- 🔷 HEADER -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Categories</h2>
            <p class="text-sm text-gray-500">Manage your blog categories</p>
        </div>
        

        <a href="{{ route('dashboard.category.create') }}"
           class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg shadow transition">
           + Add Category
        </a>
    </div>


    <!-- 🔷 SUCCESS MESSAGE -->
    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg">
            {{ session('success') }}
        </div>
    @endif


    <!-- 🔷 TABLE -->
    <div class="bg-white rounded-xl shadow border border-gray-100 overflow-x-auto">

        <table class="w-full text-sm text-left">

            <!-- HEADER -->
            <thead class="bg-gray-50 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Color</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>

            <!-- BODY -->
            <tbody>

            @forelse($categories as $category)

                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- NAME -->
                    <td class="px-4 py-3 font-medium text-gray-800">
                        {{ $category->name }}
                    </td>

                    <!-- COLOR BADGE -->
                    <td class="px-4 py-3">
                        @php
                            $colors = [
                                'orange' => 'bg-orange-100 text-orange-600',
                                'blue' => 'bg-blue-100 text-blue-600',
                                'green' => 'bg-green-100 text-green-600',
                                'red' => 'bg-red-100 text-red-600',
                                'purple' => 'bg-purple-100 text-purple-600',
                                'slate' => 'bg-slate-100 text-slate-600',
                            ];
                        @endphp

                        <span class="px-2 py-1 text-xs rounded 
                            {{ $colors[$category->color] ?? 'bg-gray-100 text-gray-600' }}">
                            {{ ucfirst($category->color ?? 'N/A') }}
                        </span>
                    </td>

                    <!-- STATUS -->
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs rounded 
                            {{ $category->status ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                            {{ $category->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td>

                    <!-- ACTIONS -->
                    <td class="px-4 py-3 text-center">
                        <div class="flex justify-center gap-4">

                            <a href="{{ route('dashboard.category.edit', $category) }}"
                               class="text-blue-500 hover:text-blue-700 font-medium">
                                Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('dashboard.category.destroy', $category) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        onclick="return confirm('Delete this category?')"
                                        class="text-red-500 hover:text-red-700 font-medium">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>

            @empty

                <!-- EMPTY STATE -->
                <tr>
                    <td colspan="4" class="text-center py-6 text-gray-500">
                        No categories found
                    </td>
                </tr>

            @endforelse

            </tbody>
        </table>

    </div>

</div>

@endsection
