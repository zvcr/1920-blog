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
    
    public function single($slug){
        $post = Post::where('slug',$slug)->firstOrFail();
        // dd($post);
        return view("post.single")->withPost($post);
    }
}
