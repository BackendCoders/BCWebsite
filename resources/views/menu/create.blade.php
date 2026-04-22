@extends('layout.main')

@section('content')
<form method="POST" action="{{ route('menu-items.store') }}" class="space-y-4">
    @csrf

    <!-- Title -->
    <input type="text" name="title" placeholder="Menu Title"
        class="w-full border p-2 rounded" required>

    <!-- Slug -->
    <input type="text" name="slug" placeholder="URL (e.g. seo-services)"
        class="w-full border p-2 rounded">

    <!-- Route -->
    <input type="text" name="route" placeholder="Route Name (optional)"
        class="w-full border p-2 rounded">

    <!-- Parent Menu -->
    <select name="parent_id" class="w-full border p-2 rounded">
        <option value="">Main Menu</option>
        @foreach($parents as $id => $title)
            <option value="{{ $id }}">{{ $title }}</option>
        @endforeach
    </select>

    <!-- Order -->
    <input type="number" name="order" placeholder="Order"
        class="w-full border p-2 rounded">

    <!-- Submit -->
    <button class="bg-orange-500 text-white px-4 py-2 rounded">
        Save Menu
    </button>
</form>

@endsection
