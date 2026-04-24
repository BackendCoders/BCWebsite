@extends('layout.main')

@section('content')



<form method="POST" action="{{ route('menu-items.update', $menu_item) }}">
@csrf
@method('PUT')

<input type="text" name="title" value="{{ $menu_item->title }}">

<select name="type">
    <option value="Digital Marketing" {{ $menu_item->type=='Digital Marketing'?'selected':'' }}>
        Digital Marketing
    </option>
    <option value="Software Development" {{ $menu_item->type=='Software Development'?'selected':'' }}>
        Software Development
    </option>
</select>

<button>Update</button>

</form>



@endsection
