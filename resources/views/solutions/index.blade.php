@extends('layout.main')

@section('content')

<div class="p-6">

    <!-- 🔥 Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Solution List</h2>
            <p class="text-gray-500 text-sm">Manage your Solutions</p>
        </div>

        <a href="{{ route('solutions.create') }}"
           class="bg-[#FD5528] text-white px-4 py-2 rounded-lg shadow hover:bg-orange-600 transition">
            + Add Category
        </a>
    </div>

    <!-- 🔥 Success Message -->
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <!-- 🔥 Card Container -->
    <div class="bg-white rounded-xl shadow overflow-hidden">

        <!-- 🔍 Search (UI only)
        <div class="p-4 border-b flex justify-between items-center">
            <input type="text" placeholder="Search solution.."
                   class="border rounded-lg px-4 py-2 w-1/3 focus:outline-none focus:ring-2 focus:ring-[#FD5528]">
        </div> -->

        <!-- 📊 Table -->
        <table class="w-full text-left">
            <thead class="bg-gray-100 text-gray-600 text-sm uppercase">
                <tr>
                    <th class="p-4">ID</th>
                    <th>Category Name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">

            @foreach($solutions as $solution)
                <tr class="border-t hover:bg-gray-50 transition">

                    <td class="p-4 font-medium">{{ $solution->id }}</td>

                    <td class="font-semibold">
                        {{ $solution->category }}
                    </td>

                    <td class="text-center space-x-2">

                        <!-- ✏️ Edit -->
                        <a href="{{ route('solutions.edit', $solution->id) }}"
                           class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition">
                            Edit
                        </a>

                        <!-- 🗑 Delete -->
                        <form action="{{ route('solutions.destroy', $solution->id) }}"
                              method="POST"
                              class="inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="px-3 py-1 text-sm bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition">
                                Delete
                            </button>
                        </form>

                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>

        <!-- 📉 Empty State -->
        @if($solutions->isEmpty())
            <div class="p-6 text-center text-gray-500">
                No solutions found.
            </div>
        @endif

    </div>

</div>

@endsection