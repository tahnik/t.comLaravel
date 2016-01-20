@extends('indexTemplate')


@section('title')
    Tahnik's Blog @stop

@section('description')
    This is a blog created and maintained by Tahnik Mustasin @stop

@section('links')
    <li><a href="{{ url('/home') }}">Home</a></li>
    <li><a href="{{ url('/home/create') }}">Create an Article</a></li>
    <li><a href="{{ url('/logout') }}">Logout</a></li>
    <style>
        .col-xs-12{
            margin-bottom: 10px;
        }
    </style>
@stop

@section('body')
    <div class="container" style="margin-top: 70px">
        <div class="col-xs-12">
            <h1>Create an Article</h1>
        </div>
        {{ Form::model($article, ['url' => '/home/' . $article->id, 'class' => 'form', 'files' => 'true', 'method' => 'put']) }}
        <div class="col-xs-12">
            {{ Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) }}
        </div>
        <div class="col-xs-12">
            {{ Form::textarea('body', null, ['placeholder' => 'Body', 'class' => 'form-control']) }}
        </div>
        <div class="col-xs-12">
            {{ Form::date('datePublished', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
        </div>
        <div class="col-xs-12">
            {{ Form::file('image') }}
        </div>
        <div class="col-xs-12">
            {{ Form::submit('Submit', ['class' => 'btn btn-default']) }}
        </div>
        {{ Form::close() }}
    </div>
@stop
