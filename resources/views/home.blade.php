@extends('indexTemplate')

@section('links')
    <li><a href="{{ url('/home') }}">Home</a></li>
    <li><a href="{{ url('/home/create') }}">Create an Article</a></li>
    <li><a href="{{ url('/logout') }}">Logout</a></li>
@stop

@section('body')
<div class="container" style="margin-top: 70px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
