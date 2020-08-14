@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Категорий {{$count_categories}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Материалов {{$count_articles}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('admin.category.create')}}" class="btn btn-block btn-default">Создать категорию</a>
                @foreach($categories as $category)
                    <a class="list-group-item" href="{{route('admin.category.edit', $category)}}">
                        <h4 class="list-group-item-primary">{{$category->title}}</h4>
                        <p class="list-group-item-info">
                            {{$category->articles()->count()}}
                        </p>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-default">Создать материал</a>
                @foreach($articles as $article)
                    <a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
                        <h4 class="list-group-item-primary">{{$article->title}}</h4>
                        <p class="list-group-item-info">
                            {{$article->categories()->pluck('title')->implode(', ')}}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection()
