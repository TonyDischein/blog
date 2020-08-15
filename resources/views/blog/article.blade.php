@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_keyword', $article->keyword)
@section('meta_description', $article->meta_description)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$article->title}}</h1>
                <p>{!!$article->description!!}</p>
                <img style="width: 200px; height: 200px" src="@if($article->image){{ asset('/storage/' . $article->image) }}@else https://via.placeholder.com/150 @endif" alt="{{$article->title}}">
            </div>
        </div>
    </div>
@endsection
