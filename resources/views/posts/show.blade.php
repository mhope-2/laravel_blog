@extends('layouts.layout')


@section('content')

    @include('layouts.header')

    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>

        {{$post->body}}
    </div>
@endsection
