<?php

namespace Vagrant\Lesson9\Controllers;

use Vagrant\Lesson9\Models\Category;
use Vagrant\Lesson9\Models\Post;
use Illuminate\Http\RedirectResponse;
use Vagrant\Lesson9\Models\Tag;
use Illuminate\Validation\Rule;


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
        $post = new Post();
        return view('posts/create', compact('post'));
    }

    public function store()
    {
        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => ['required', 'min:2'],
            'slug' => ['required', 'min:2'],
            'body' => ['required', 'min:2'],
            'categoryId' => ['required'],
            'tagId' => ['required'],
        ]);

        if (!is_array($data)) {
            return $data;
        }

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $post = new Post();
        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->body = $data['body'];
        $post->category_id = $data['category_id'];
        $post->save();

        if (!empty($data['tagId'])) {
            $post->tags()->sync($data['tagId']);
        }

        $_SESSION['success'] = 'Запис успішно добавлений';
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
        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:5'],
            'body' => ['required', 'min:3'],
            'categoryId' => ['required'],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        if (!is_array($data)) {
            return $data;
        }

        $post = Post::find($data['id']);
        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->body = $data['body'];
        $post->category_id = $data['category_id'];
        $post->save();

        if (!empty($data['tagId'])) {
            $post->tags()->sync($data['tagId']);
        }

        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return new RedirectResponse('/posts');
    }
}
