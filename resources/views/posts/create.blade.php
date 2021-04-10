@extends('layouts.layout')


@section('content')

    <h1 id="lk">Publish a Post</h1>

    <hr/>

    <div class="col-sm-8 blog-main">

        <form method="POST" action="/posts">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control" cols="30" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Publish</button>
            </div>

            @include('layouts.errors')
        </form>




    </div>
@endsection








