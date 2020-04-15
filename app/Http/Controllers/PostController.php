<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view("post.index")->withPosts($posts);
    }
    
    public function show($slug){
        $post = Post::where('slug',$slug)->firstOrFail();
        return view("post.single")->withPost($post);
    }

    public function create(){
        return view("post.create");
    }

    public function store(){
        $post = new Post();
        $post->title = request('txtTitle');
        $post->slug = request('txtSlug');
        $post->content = request('txtContent');
        $post->author = Auth::user()->id;
        $post->save();

        return redirect('/posts');
    }

    public function edit($id){
        $post = Post::findOrFail($id);

        return view('post.edit')->withPost($post);
    }

    public function update($id){
        $post = Post::findOrFail($id);

        $post->title = request('txtTitle');
        $post->slug = request('txtSlug');
        $post->content = request('txtContent');
        $post->save();
        
        return redirect()->route('post.show', $post->slug);
    }

    public function destroy($id){
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('post.index');
    }

    public function publish($id){
        $post = Post::findOrFail($id);

        $post->published_at = now();
        $post->save();

        return redirect()->route('post.show', $post->slug);
    }
}
