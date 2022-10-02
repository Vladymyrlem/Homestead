<?php

namespace Vagrant\Lesson9\Controllers;

use Vagrant\Lesson9\Models\Category;
use Vagrant\Lesson9\Models\Post;
use Vagrant\Lesson9\Models\Tag;
use Illuminate\Http\RedirectResponse;

class TagController
{
    public function index()
    {
        $tags = Tag::all();
        $posts = Post::all();
        return view('tags/index', compact('tags', 'posts'));
    }

    public function show($id)
    {
        $tag = Category::find($id);
        $post = Post::all();
        return view('tags/show', ['tag' => $tag, 'post' => $post]);
    }

    public function create()
    {
        $tag = new Tag();
        return view('tags/create', compact('tag'));
    }

    public function store()
    {
        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => ['required', 'min:5'],
            'slug' => ['required', 'min:4'],
        ]);

        if (!is_array($data)) {
            return $data;
        }

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $tag = new Tag();
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];
        $tag->save();

        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/tags');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tags/update', compact('tag'));
    }

    public function update()
    {
        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => ['required', 'min:2'],
            'slug' => ['required', 'min:2'],
        ]);

        if (!is_array($data)) {
            return $data;
        }

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $tag = new Tag();
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];
        $tag->save();

        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/tags');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return new RedirectResponse('/tags');
    }
}
