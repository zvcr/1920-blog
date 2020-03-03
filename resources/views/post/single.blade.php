@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 post-single">
                <h1 class="title">{{$post->title}}</h1>
                <hr/>
                <div class="single-post">
                    <p class="post-content">{{$post->content}}</p>
                    <hr/>
                    <i>Geplaatst op: {{ $post->published_at ?? "Not yet published" }}</i>
                    @auth()
                    <a href="#" class="btn btn-success">Publish post</a>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit post</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
