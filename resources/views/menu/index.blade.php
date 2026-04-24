@extends('layout.main')

@section('content')


<a href="{{ route('menu-items.create') }}" class="bg-blue-500 text-white px-3 py-2">Add Menu</a>

<table class="w-full mt-4 border">
    <tr>
        <th>Title</th>
        <th>Type</th>
        <th>Action</th>
    </tr>

    @foreach($menus as $menu)
    <tr>
        <td>{{ $menu->title }}</td>
        <td>{{ $menu->type }}</td>
        <td>
            <a href="{{ route('menu-items.edit', $menu) }}">Edit</a>

            <form action="{{ route('menu-items.destroy', $menu) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>


@endsection
