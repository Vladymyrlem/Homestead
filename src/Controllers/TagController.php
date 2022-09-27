<?php

namespace Vagrant\Lesson8\Controllers;

use Vagrant\Lesson8\Models\Category;
use Vagrant\Lesson8\Models\Post;
use Vagrant\Lesson8\Models\Tag;
use Illuminate\Http\RedirectResponse;

class TagController
{
    public function index()
    {
        $tags = Tag::all();
        $posts = Post::all();
        return view('tags/index', compact('tags','posts'));
    }

    public function show($id)
    {
        $tag = Category::find($id);
        $post = Post::all();
        return view('tags/show', ['tag' => $tag,'post'=> $post]);
    }

    public function create()
    {
        $tag = new Tag();
        return view('tags/create', compact('tag'));
    }

    public function store()
    {
        $request = request();
        $tag = new Tag();

        $tag->title = $request->input('title');
        $tag->slug = $request->input('slug');
        $tag->save();
        return new RedirectResponse('/tags');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tags/update', compact('tag'));
    }

    public function update()
    {
        $request = request();
        $tag = Tag::find($request->input('id'));
        $tag->title = $request->input('title');
        $tag->slug = $request->input('slug');
        $tag->save();
        return new RedirectResponse('/tags');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return new RedirectResponse('/tags');
    }
}
