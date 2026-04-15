@extends('layout.main')
@section('content')


<h2>Add Category</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Category Name">
    <textarea name="description" placeholder="Description"></textarea>

    <button type="submit">Save</button>
</form>

@endsection