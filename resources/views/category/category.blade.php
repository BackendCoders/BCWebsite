@extends('layout.main')
@section

<form method="POST">
    @csrf

    <input name="name" placeholder="Category Name" class="border p-2 w-full">
    
    <select name="color" class="border p-2 w-full mt-2">
        <option value="orange">Orange</option>
        <option value="blue">Blue</option>
    </select>

    <button class="bg-orange-500 text-white px-4 py-2 mt-3">Save</button>
</form>

@endsection