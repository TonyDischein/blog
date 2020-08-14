<label for="status">Статус</label>
<select id="status" name="published" class="form-control">
    @if (isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($category->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="title">Наименование</label>
<input type="text" class="form-control" id="title" name="title" placeholder="Заголовок категории" value="{{$category->title ?? ""}}" required>

<label for="slug">Slug</label>
<input type="text" id="slug" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$category->slug ?? ""}}" readonly="">

<label for="parent-category">Родительская категория</label>
<select name="parent_id" id="parent-category" class="form-control">
    <option value="0">-- без родительской категории --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr>

<input type="submit" class="btn btn-primary" value="Сохранить">
