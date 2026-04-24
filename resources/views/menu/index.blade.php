@extends('layout.main')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Menu Management</h2>

        <a href="{{ route('menu-items.create') }}"
           class="bg-[#FD5528] hover:bg-orange-600 text-white px-5 py-2 rounded-lg shadow-md transition">
            + Add Menu
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
        <table class="w-full text-sm text-left">
            <thead class="bg-gradient-to-r from-[#FD5528] to-orange-400 text-white">
                <tr>
                    <th class="px-6 py-3">Title</th>
                    <th class="px-6 py-3">Type</th>
                    <th class="px-6 py-3">Page</th>
                    <th class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y">
                @forelse($menus as $menu)
                    <tr class="hover:bg-orange-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $menu->title }}
                        </td>

                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs rounded-full
                                {{ \App\Models\MenuItem::normalizeType($menu->type) === \App\Models\MenuItem::TYPE_DIGITAL ? 'bg-orange-100 text-orange-600' : 'bg-gray-100 text-gray-700' }}">
                                {{ $menu->type_label }}
                            </span>
                        </td>

                        <td class="px-6 py-4 text-gray-600">
                            {{ $menu->page?->title ?? 'No page' }}
                        </td>

                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center gap-3">
                                <a href="{{ route('menu-items.edit', $menu) }}"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-xs transition">
                                    Edit
                                </a>

                                <form action="{{ route('menu-items.destroy', $menu) }}" method="POST"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-xs transition">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-6 text-gray-500">
                            No menu items found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
