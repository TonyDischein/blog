@extends('layouts.app')

@section('title', $category->title)

@section('content')
    <div class="container container-content">
        @forelse($articles as $article)
        <div class="article">
            <div class="atricle__top-content">
                <div class="article__top-title">{{$article->title}}</div>
                <div class="article__published-date">{{$article->created_at}}</div>
            </div>
            <div class="article__body">
                <div class="article__main-content">
                    <div class="atricle__title">
                        <h2><a href="{{route('article', $article->slug)}}">{{$article->title}}</a></h2>
                    </div>
                    <div class="article__content">
                        <div class="article__image">
                            <img  src="@if($article->image){{ asset('/storage/' . $article->image) }}@else https://via.placeholder.com/150 @endif" alt="{{$article->title}}">
                            <p>test</p>
                        </div>
                        <div class="article__description">
                            {!!$article->description_short!!}
                        </div>
                        <div class="article__author">{{$article->user->name}}</div>
                    </div>

                </div>
            </div>
        </div>
        @empty
            <h2 class="text-center">В данном разделе ещё нет статей</h2>
        @endforelse


        {{$articles->links()}}
    </div>
@endsection
