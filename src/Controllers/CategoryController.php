<?php

namespace Vagrant\Lesson9\Controllers;

use Vagrant\Lesson9\Models\Category;
use Illuminate\Http\RedirectResponse;
use Vagrant\Lesson9\Models\Post;

class CategoryController
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();

        return view('categories/index', compact('categories', 'posts'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        $posts = Post::all();
        return view('categories/show', compact('category', 'posts'));
    }

    public function create()
    {
        $category = new Category();
        $posts = Post::all();
        return view('categories/create', compact('category','posts'));
    }

    public function store()
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

        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->save();

        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $postsCheck = $category->post()->where('category_id', $category->id)->get();
        $posts = Post::all();
        return view('categories/update', compact('category','posts', 'postsCheck'));
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

        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->save();

        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return new RedirectResponse('/categories');
    }
}
