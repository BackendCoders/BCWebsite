@extends('layout.main')

@section('content')

<div class="p-6">
    <h2 class="text-xl font-bold mb-4">Edit Menu</h2>

    <form method="POST" action="{{ route('menu-items.update', $menu->id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Title -->
        <input type="text" name="title"
               value="{{ $menu->title }}"
               class="w-full border p-2 rounded"
               required>

        <!-- Slug -->
        <input type="text" name="slug"
               value="{{ $menu->slug }}"
               class="w-full border p-2 rounded">

        <!-- Route -->
        <input type="text" name="route"
               value="{{ $menu->route }}"
               class="w-full border p-2 rounded">

        <!-- Parent -->
        <select name="parent_id" class="w-full border p-2 rounded">
            <option value="">Main Menu</option>
            @foreach($parents as $id => $title)
                <option value="{{ $id }}" {{ $menu->parent_id == $id ? 'selected' : '' }}>
                    {{ $title }}
                </option>
            @endforeach
        </select>

        <!-- Order -->
        <input type="number" name="order"
               value="{{ $menu->order }}"
               class="w-full border p-2 rounded">

        <!-- Status -->
        <select name="is_active" class="w-full border p-2 rounded">
            <option value="1" {{ $menu->is_active ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$menu->is_active ? 'selected' : '' }}>Inactive</option>
        </select>

        <!-- Submit -->
        <button class="bg-orange-500 text-white px-4 py-2 rounded">
            Update Menu
        </button>
    </form>
</div>

@endsection
