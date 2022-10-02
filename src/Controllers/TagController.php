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
        $tags = Category::find($id);
        $post = Post::all();
        return view('tags/show', ['tags' => $tags, 'posts' => $post]);
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
        $posts = Post::all();
        return view('tags/update', compact('tag','posts'));
    }

    public function update()
    {
        $data = request()->all();

        $tag = Tag::find($data['id']);
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'unique:tags,title',
                'min:5'
            ],
            'slug' => [
                'required',
                'unique:tags,slug',
                'min:5'
            ]
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }
        $tag->save();

        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/categories');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return new RedirectResponse('/tags');
    }
}
