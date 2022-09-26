<?php

namespace Vagrant\Lesson8\Controllers;

use Vagrant\Lesson8\Models\Post;
use Illuminate\Http\RedirectResponse;

class PostController
{
    public function index()
    {
        $posts = Post::all();
        return view('post/index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post/show', compact('post'));
    }

    public function create()
    {
        $post = new Post();
        return view('post/form', compact('post'));
    }

    public function store()
    {
        $request = request();

        $post = new Post();
        $post->title = $request->input('title');
        $post->price = $request->input('price');
        $post->user_id = 1;
        $post->save();
        return new RedirectResponse('/post');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post/form-edit', compact('post'));
    }

    public function update()
    {
        $request = request();

        $post = Post::find($request->input('id'));
        $post->title = $request->input('title');
        $post->price = $request->input('price');
        $post->user_id = 1;
        $post->save();
        return new RedirectResponse('/post');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return new RedirectResponse('/post');
    }
}
