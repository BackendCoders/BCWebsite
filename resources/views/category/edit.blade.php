@extends('layout.main')

@section('content')

<h2 class="text-xl font-bold mb-4">Edit Category</h2>

<form method="POST" action="{{ route('dashboard.category.update', $category) }}"
      class="bg-white p-6 rounded shadow space-y-4">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}"
        class="w-full border p-2 rounded">

    <select name="color" class="w-full border p-2 rounded">
        <option value="orange" {{ $category->color=='orange'?'selected':'' }}>Orange</option>
        <option value="blue" {{ $category->color=='blue'?'selected':'' }}>Blue</option>
    </select>

    <label>
        <input type="checkbox" name="status"
            {{ $category->status ? 'checked' : '' }}> Active
    </label>

    <button class="bg-orange-500 text-white px-4 py-2 rounded">
        Update
    </button>

</form>

@endsection