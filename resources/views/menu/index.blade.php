@extends('layout.main')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Menu Items</h2>
        <a href="{{ route('menu-items.create') }}"
           class="bg-orange-500 text-white px-4 py-2 rounded">
           + Add Menu
        </a>
    </div>

    <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="p-3">Title</th>
                <th class="p-3">Parent</th>
                <th class="p-3">Order</th>
                <th class="p-3">Status</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($menus as $menu)
                <tr class="border-t">
                    <td class="p-3">{{ $menu->title }}</td>

                    <td class="p-3">
                        {{ $menu->parent?->title ?? 'Main Menu' }}
                    </td>

                    <td class="p-3">{{ $menu->order }}</td>

                    <td class="p-3">
                        @if($menu->is_active)
                            <span class="text-green-600">Active</span>
                        @else
                            <span class="text-red-500">Inactive</span>
                        @endif
                    </td>

                    <td class="p-3 flex gap-2">
                        <a href="{{ route('menu-items.edit', $menu->id) }}"
                           class="px-3 py-1 bg-blue-500 text-white rounded">
                           Edit
                        </a>

                        <form action="{{ route('menu-items.destroy', $menu->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="px-3 py-1 bg-red-500 text-white rounded"
                                    onclick="return confirm('Delete this menu?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
