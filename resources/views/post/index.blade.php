@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="title">Lees hier al onze berichten</h1>
                <div class="posts">
                @foreach($posts as $post)
                <div class="post">
                    <p class="post-title">Title: <a href="/post/{{ $post->slug }}">{{ $post->title }}</a></p><br/>
                    <i>Geplaatst op: {{ $post->published_at ?? "Nog niet gepubliseerd" }}</i>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
