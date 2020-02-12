@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="title">{{$post->title}}</h1>
                <div class="single-post">
                    <p class="post-content">{{$post->content}}</p><br/>
                    <i>Geplaatst op: {{ $post->published_at ?? "Not yet published" }}</i>
                </div>
            </div>
        </div>
    </div>
@endsection
