@extends('indexTemplate')


@section('title')
{{ $article->title }}@stop

@section('description')
{{ \Illuminate\Support\Str::limit($article->body, 50) }}@stop

@section('body')
    <div class="container" id="main_body" style="margin-top: 70px;">
        <div class="row">
            <div class="col-md-8">
                <div class="articles">
                    <h3 class="article_header text-center">{{ $article->title }}</h3>
                    <span class="article_date">Date: {{ $article->datePublished }}</span>
                    <img class="article_image" src="{{ url('/blog_images/' . $article->id . '.' . 'jpg') }}">
                    <p class="article_body">{!! $article->body !!}</p>
                </div>
            </div>
            <div id="main_about" class="col-md-4">
               @foreach($articles as $article)
                    <div class="articles">
                        <img class="article_image" style="padding-top: 10px;" src="{{ url('/blog_images/' . $article->id . '.' . 'jpg') }}">
                        <h5 class=" text-center">{{ $article->title }}</h5>
                    </div>
               @endforeach
            </div>
        </div>
    </div>
@stop