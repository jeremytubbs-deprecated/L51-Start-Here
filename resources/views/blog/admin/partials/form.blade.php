<div>
    Title
    <input type="text" name="title" value="{{ old('title') }}">
</div>

<textarea id="mirrormark1" name="markdown"></textarea>

<div class="custom-select">
<select name="category_id">
	<option selected disabled>Select a Category</option>
	@foreach ($categories as $category)
	<option value="{{ $category->id }}">{{ $category->name }}</option>
	@endforeach
</select>
</div>

<div>
	<button type="submit" name="published" value="0">Save Draft</button>
	<button type="submit" name="published" value="1">Publish</button>
</div>
