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
        $posts = new Post();
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts/form', compact('posts','categories', 'tags'));
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
        $post->category()->attach($data['category_id']);
        $post->tag()->attach($data['tag_id']);
        $post->save();

        if (!empty($data['tagId'])) {
            $post->tag()->sync($data['tagId']);
        }

        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/posts');
    }

    public function edit($id)
    {
        $posts = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts/form-edit', compact('posts', 'categories', 'tags'));
    }

    public function update()
    {
        $data = request()->all();
        $post = Post::find($data['id']);

        $validator = validator()->make($data, [
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:5'],
            'body' => ['required', 'min:3'],
            Rule::unique('posts','id')->ignore($post->id),
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
        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->body = $data['body'];
        $post->category_id = $data['category_id'];
        $post->tag()->attach($data['tag_id']);
        $post->category()->attach($data['category_id']);
        $post->save();

        if (!empty($data['tag_id'])) {
            $post->tags()->sync($data['tag_id']);
        }
        if (!empty($data['category_id'])) {
            $post->tags()->sync($data['category_id']);
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
