@extends('layout.main')

@section('content')

<div class="flex justify-between mb-6">
    <h2 class="text-xl font-bold">Blogs</h2>

    <a href="{{route('dashboard.blog.create')}}"
       class="bg-orange-500 text-white px-4 py-2 rounded">
       + New Blog
    </a>
</div>

@if(session('success'))
<div class="bg-green-100 text-green-700 p-2 mb-4 rounded">
    {{ session('success') }}
</div>
@endif

<table class="w-full bg-white shadow rounded">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-2">Title</th>
            <th class="p-2">Category</th>
            <th class="p-2">Status</th>
            <th class="p-2">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($blogs as $blog)
        <tr class="border-t">
            <td class="p-2">{{ $blog->title }}</td>
            <td class="p-2">{{ $blog->category->name }}</td>
            <td class="p-2">
                {{ $blog->status ? 'Active' : 'Inactive' }}
            </td>
            <td class="p-2 flex gap-2">

                <a href=""
                   class="text-blue-500">Edit</a>

                <form method="POST" 
                      action="">
                    @csrf
                    @method('DELETE')

                    <button class="text-red-500">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection