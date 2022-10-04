<?php

namespace Vagrant\Lesson9\Controllers;

use Illuminate\Validation\Rule;
use Vagrant\Lesson9\Model\Category;
use Vagrant\Lesson9\Model\Post;
use Illuminate\Http\RedirectResponse;
use Vagrant\Lesson9\Model\Tag;


class PostController
{
//    public function index()
//    {
//        $posts = Post::all();
//        $tags = Tag::all();
//        return view('posts/index', compact('posts'));
//    }
//
//    public function show($id)
//    {
//        $post = Post::find($id);
//        return view('posts/show', compact('post'));
//    }
//
//    public function trash()
//    {
//        $posts = Post::onlyTrashed()->get();
//        return view('posts/trash', compact('posts'));
//    }
//
//    public function create()
//    {
//        $post = new Post();
//        $categories = Category::all();
//        $tags = Tag::all();
//        return view('posts/form', compact('post', 'categories', 'tags'));
//    }
//
//    public function store()
//    {
//        $data = request()->all();
//        $validator = validator()->make($data, [
//            'title' => ['required', 'min:5', 'max:255', 'unique:posts,title'],
//            'slug' => ['required', 'min:5', 'max:255', 'unique:posts,slug'],
//            'body' => ['required', 'min:10'],
//            'category_id' => ['exists:categories,id'],
//            'tags' => ['required', 'exists:tags,id']
//        ]);
//        if ($validator->fails()) {
//            $_SESSION['errors'] = $validator->errors()->toArray();
//            $_SESSION['data'] = $data;
//            return new RedirectResponse($_SERVER['HTTP_REFERER']);
//        }
//        $post = new Post();
//        $post->title = $data['title'];
//        $post->slug = $data['slug'];
//        $post->body = $data['body'];
//        $post->category_id = $data['category_id'];
//        $post->save();
//        $post->tags()->attach($data['tags']);
//        $_SESSION['success'] = 'Запис збережено';
//        return new RedirectResponse('/posts');
//    }
//
//    public function edit($id)
//    {
//        $post = Post::find($id);
//        $categories = Category::all();
//        $tags = Tag::all();
//        return view('posts/form-edit', compact('post', 'categories', 'tags'));
//    }
//
//    public function update()
//    {
//        $data = request()->all();
//        $post = Post::find($data['id']);
//
//        $validator = validator()->make($data, [
//            'title' => ['required', 'min:5', 'max:255', 'unique:posts,title'],
//            'slug' => ['required', 'min:5', 'max:255', 'unique:posts,slug'],
//            'body' => ['required', 'min:10'],
//            'category_id' => ['exists:categories,id', 'required'],
//            Rule::unique('posts', 'id')->ignore($post->id),
//            Rule::unique('posts', 'title')->ignore($post->title),
//            Rule::unique('posts', 'slug')->ignore($post->slug)
//        ]);
//        if ($validator->fails()) {
//            $_SESSION['errors'] = $validator->errors()->toArray();
//            $_SESSION['data'] = $data;
//            return new RedirectResponse($_SERVER['HTTP_REFERER']);
//        }
//        $post->title = $data['title'];
//        $post->slug = $data['slug'];
//        $post->body = $data['body'];
//        $post->category_id = $data['category_id'];
//        $post->save();
//        $post->tags()->sync($data['tags']);
//        $_SESSION['success'] = 'Запис збережено';
//        return new RedirectResponse('/posts');
//    }
//
//    public function destroy($id)
//    {
//        $post = Post::find($id);
//        $post->delete();
//        return new RedirectResponse('/posts');
//    }
//
//    public function restore($id)
//    {
//        $post = Post::withTrashed()
//            ->where('id', $id)
//            ->restore();
//        return new RedirectResponse('/posts');
//    }
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();
        return view('posts/index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts/show', compact('post'));
    }

    public function trash()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts/trash', compact('posts'));
    }

    public function create()
    {
        $post = new Post();
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts/form', compact('post', 'categories', 'tags'));
    }

    public function store()
    {
        $data = request()->all();
        $validator = validator()->make($data, [
            'title' => ['required', 'min:5', 'max:255', 'unique:posts,title'],
            'slug' => ['required', 'min:5', 'max:255', 'unique:posts,slug'],
            'body' => ['required', 'min:10'],
            'category_id' => ['exists:categories,id'],
            'tags' => ['required', 'exists:tags,id']
        ]);
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
        $post->tags()->attach($data['tags']);
        $_SESSION['success'] = 'Запис збережено';
        return new RedirectResponse('/posts');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts/form-edit', compact('post', 'categories', 'tags'));
    }

    public function update()
    {
        $data = request()->all();
        $post = Post::find($data['id']);

        $validator = validator()->make($data, [
            'title' => ['required', 'min:5', 'max:255', 'unique:posts,title'],
            'slug' => ['required', 'min:5', 'max:255', 'unique:posts,slug'],
            'body' => ['required', 'min:10'],
            'category_id' => ['exists:categories,id', 'required'],
            Rule::unique('posts', 'id')->ignore($post->id),
            Rule::unique('posts', 'title')->ignore($post->title),
            Rule::unique('posts', 'slug')->ignore($post->slug)
        ]);
        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }
        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->body = $data['body'];
        $post->category_id = $data['category_id'];
        $post->save();
        $post->tags()->sync($data['tags']);
        $_SESSION['success'] = 'Запис збережено';
        return new RedirectResponse('/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return new RedirectResponse('/posts');
    }

    public function restore($id)
    {
        $post = Post::withTrashed()
            ->where('id', $id)
            ->restore();
        return new RedirectResponse('/posts');
    }
}
