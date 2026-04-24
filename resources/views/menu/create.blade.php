@extends('layout.main')

@section('content')




<form method="POST" action="{{ route('menu-items.store') }}">
@csrf

<input type="text" name="title" placeholder="Title" class="border p-2">

<select name="page_id" class="border p-2">
    <option value="">Select Page</option>
    @foreach($pages as $id => $title)
        <option value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>

<select name="parent_id" class="border p-2">
    <option value="">Parent Menu</option>
    @foreach($parents as $id => $title)
        <option value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>

<select name="type" class="border p-2">
    <option value="">Select Type</option>
    <option value="Digital Marketing">Digital Marketing</option>
    <option value="Software Development">Software Development</option>
</select>

<button class="bg-green-500 text-white px-4 py-2">Save</button>

</form>



@endsection
