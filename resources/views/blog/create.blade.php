@extends('layout.main')

@section('content')

<h2 class="text-xl font-bold mb-4">Create Blog</h2>

<form method="POST" action="{{ route('dashboard.blog.store') }}" 
      class="bg-white p-6 rounded shadow space-y-4">
    @csrf

    <!-- CATEGORY -->
    <select name="category_id" class="w-full border p-2 rounded">
        <option value="">Select Category</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>

    <!-- TITLE -->
    <input type="text" name="title" placeholder="Title"
        class="w-full border p-2 rounded">

    <!-- EXCERPT -->
    <textarea name="excerpt" placeholder="Short Description"
        class="w-full border p-2 rounded"></textarea>

    <!-- CONTENT -->
    <textarea name="content" placeholder="Content"
        class="w-full border p-2 rounded"></textarea>

    <!-- READ TIME -->
    <input type="number" name="read_time" placeholder="Read Time"
        class="w-full border p-2 rounded">

    <!-- DATE -->
    <input type="date" name="published_at"
        class="w-full border p-2 rounded">

    <!-- FLAGS -->
    <label><input type="checkbox" name="is_featured"> Featured</label>
    <label><input type="checkbox" name="status" checked> Active</label>

    <button class="bg-orange-500 text-white px-4 py-2 rounded">
        Save
    </button>

</form>

@endsection