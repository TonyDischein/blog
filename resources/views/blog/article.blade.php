@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_keyword', $article->keyword)
@section('meta_description', $article->meta_description)

@section('content')
    <div class="container container-content">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="content__img">
                        <img src="@if($article->image){{ asset('/storage/' . $article->image) }}@else https://via.placeholder.com/150 @endif" alt="{{$article->title}}">
                    </div>
                    <div class="content__title">
                        <h1>{{$article->title}}</h1>
                    </div>
                    <div class="content__description">
                        <p>{!!$article->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
