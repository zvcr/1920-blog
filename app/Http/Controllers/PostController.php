<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        // dd($posts);
        return view("post.index")->withPosts($posts);
    }
    
    public function show($slug){
        $post = Post::where('slug',$slug)->firstOrFail();
        // dd($post);
        return view("post.single")->withPost($post);
    }

    public function create(){
        return view("post.create");
    }

    public function store(){
        // dd(request()->all());
        //dd(request('txtTitle'));
        $post = new Post();
        $post->title = request('txtTitle');
        $post->slug = request('txtSlug');
        $post->content = request('txtContent');
        $post->author = 1;
        $post->save();

        return redirect('/posts');
    }
}
