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
                    @if(!$post->published_at)
                    <button class="btn btn-success" onclick="event.preventDefault(); document.getElementById('publish-post-form').submit();">
                        Publish post
                    </button>
                    <form id="publish-post-form" action="/posts/{{$post->id}}/publish" method="POST" style="display:none;">
                        @csrf;
                    </form>
                    @endif
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit post</a>
                    @endauth
                    <hr/>
                    <div class="comments">
                        @foreach($post->comments as $comment)
                            {{$comment->content}}<br/>
                        @endforeach
                    </div>
                </div>
                @auth()
                <hr>
                    <div class="single-post-comment">
                        <p class="comment-title">Any comments?</p>
                        <form action="/posts/{{$post->id}}/comment" method="post">
                            @csrf
                            <div class="form-group">
                            <label for="txtComment">Comment</label>
                            <textarea class="form-control" name="txtComment" id="txtComment" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save comment</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </div>
@endsection