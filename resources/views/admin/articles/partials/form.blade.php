<label for="status">Статус</label>
<select id="status" name="published" class="form-control">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="title">Заголовок</label>
<input type="text" class="form-control" id="title" name="title" placeholder="Заголовок новости" value="{{$article->title ?? ""}}" required>

<label for="slug">Slug</label>
<input type="text" id="slug" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$article->slug ?? ""}}" readonly="">

<label for="parent-category">Родительская категория</label>
<select name="categories[]" multiple id="parent-category" class="form-control">
    <option value="0">-- без родительской категории --</option>
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<div class="image-block">
    <img src="{{ url($article->image) }}" alt="">
    <label>Картинка</label>
    <input type="file" class="form-control" id="image" name="image" >
    <input type="text" placeholder="Загрузить изображение" disabled>
</div>

<label for="description-short">Краткое описание</label>
<textarea class="form-control" name="description_short" id="description-short">{{$article->description_short ?? ''}}</textarea>

<label for="description">Описание</label>
<textarea class="form-control" name="description" id="description">{{$article->description ?? ''}}</textarea>
<hr>

<label for="meta-title">Мета заголовок</label>
<input type="text" class="form-control" id="meta-title" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title ?? ""}}" >

<label for="meta-description">Мета описание</label>
<input type="text" class="form-control" id="meta-description" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description ?? ""}}" >

<label for="keyword">Ключевые слова</label>
<input type="text" class="form-control" id="keyword" name="meta_keyword" placeholder="Ключевые слова" value="{{$article->meta_keyword ?? ""}}" >

<hr>

<input type="submit" class="btn btn-primary" value="Сохранить">
