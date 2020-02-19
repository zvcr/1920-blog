@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 post-create">
            <h1>Create a new post</h1>
            <hr/>
            <form action="/posts" method="post">
                @csrf
                <div class="form-group">
                  <label for="txtTitle">Title</label>
                  <input type="text" class="form-control" name="txtTitle" id="txtTitle">
                </div>
                <div class="form-group">
                    <label for="txtSlug">Slug</label>
                    <input type="text" class="form-control" name="txtSlug" id="txtSlug">
                </div>
                <div class="form-group">
                  <label for="txtContent">Content</label>
                  <textarea class="form-control" name="txtContent" id="txtContent" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save post</button>
            </form>
        </div>
    </div>
</div>
@endsection