{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
</head>
<body>
  <div id="summernote"><p>Hello Summernote</p></div>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
</body>
</html> --}}

@extends('layouts.app')

@section('head-scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    
@endsection

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
                {{-- <div class="form-group">
                    <label for="txtContent">Content</label>
                    <textarea name="txtContent" id="summernote" rows="10"></textarea>
                  </div> --}}
                <button type="submit" class="btn btn-primary full-width">Save post</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
</script>
@endsection