<label for="">Статус</label>

<select class="form-control" name="published">
	@if (isset($category->id))
		<option value="0" @if ($category->published == 0) selected="" @endif>Не опубліковане</option>
		<option value="0" @if ($category->published == 1) selected="" @endif>Опубліковане</option>
	@else
		<option value="0">Не опубліковане</option>
		<option value="1">Опубліковане</option>
	@endif
</select>

<label form="">Найменування</label>
<input type="text" name="title" type = "text" class = "form-control" name = "title" placeholder = "Заголовок" value="{{$category->title or ""}}" required>

<label for = "">Slug</label>
<input class = "form-control" type = "text" name = "slug" placeholder="Автоматична генерація" value = "{{$category->slug or ''}}">

<label for = "">Батьківська категорія</label>
<select class = "form-control" name = "parent_id">
	<option value="0">-- Без категорії --</option>
	@include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Зберегти">
