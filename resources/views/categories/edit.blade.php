@extends('layout.main')
@section('content')


<h2>Edit Category</h2>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}">
    <textarea name="description">{{ $category->description }}</textarea>

    <button type="submit">Update</button>
</form>

@endsection