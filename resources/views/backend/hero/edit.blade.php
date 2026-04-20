<h2>Edit Hero</h2>

<form method="POST" action="{{ route('hero.update', $hero->id) }}" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="title" value="{{ $hero->title }}"><br><br>

<textarea name="description">{{ $hero->description }}</textarea><br><br>

<input type="file" name="image"><br><br>

<input type="text" name="button_text" value="{{ $hero->button_text }}"><br><br>

<input type="text" name="button_url" value="{{ $hero->button_url }}"><br><br>

<button type="submit">Update</button>

</form>