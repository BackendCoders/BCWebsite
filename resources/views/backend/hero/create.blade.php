<h2>Create Hero</h2>

<form method="POST" action="{{ route('hero.store') }}" enctype="multipart/form-data">
@csrf

<input type="text" name="title" placeholder="Title"><br><br>

<textarea name="description" placeholder="Description"></textarea><br><br>

<input type="file" name="image"><br><br>

<input type="text" name="button_text" placeholder="Button Text"><br><br>

<input type="text" name="button_url" placeholder="Button URL"><br><br>

<select name="button_target">
    <option value="_self">Same Tab</option>
    <option value="_blank">New Tab</option>
</select><br><br>

<button type="submit">Save</button>

</form>