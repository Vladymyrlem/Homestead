<?php

namespace Vagrant\Lesson8\Controllers;

use Vagrant\Lesson8\Models\Category;
use Vagrant\Lesson8\Models\Post;
use Illuminate\Http\RedirectResponse;
use Vagrant\Lesson8\Models\Tag;


class PostController
{
    public function index()
    {
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }

    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts/show', compact('posts'));
    }

    public function create()
    {
        $posts = new Post();
        return view('posts/create', compact('posts'));
    }

    public function store()
    {
        $request = request();

        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        $post->save();
        return new RedirectResponse('/posts');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $category = Category::all();
        $tag = Tag::all();
        return view('posts/update', compact('post', 'category', 'tag'));
    }

    public function update()
    {
        $request = request();
        $post = Post::find($request->input('id'));
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        $post->save();
        return new RedirectResponse('/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return new RedirectResponse('/posts');
    }
}
