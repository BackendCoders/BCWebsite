<h2>All Heroes</h2>

<a href="{{ route('hero.create') }}">Add New</a>

<table border="1">
<tr>
    <th>Title</th>
    <th>Action</th>
</tr>

@foreach($heroes as $hero)
<tr>
    <td>{{ $hero->title }}</td>

    <td>
        <a href="{{ route('hero.edit', $hero->id) }}">Edit</a>

        <form method="POST" action="{{ route('hero.destroy', $hero->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>