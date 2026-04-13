@extends('layout.main')

@section('content')

<h2 class="text-xl font-bold mb-4">Create Category</h2>

<form method="POST" action="{{ route('dashboard.category.store') }}"
      class="bg-white p-6 rounded shadow space-y-4">
    @csrf

    <input type="text" name="name" placeholder="Category Name"
        class="w-full border p-2 rounded">

    <select name="color" class="w-full border p-2 rounded">
        <option value="orange">Orange</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
    </select>

    <label class="flex items-center gap-2">
        <input type="checkbox" name="status" checked> Active
    </label>

    <button class="bg-orange-500 text-white px-4 py-2 rounded">
        Save
    </button>

</form>

@endsection