<?php

namespace Vagrant\Lesson8\Controllers;

use Vagrant\Lesson8\Models\Category;
use Illuminate\Http\RedirectResponse;
use Vagrant\Lesson8\Models\Post;
use Vagrant\Lesson8\Models\Tag;

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
        return view('categories/show', ['category' => $category]);
    }

    public function create()
    {
        $category = new Category();
        return view('categories/create', compact('category'));
    }

    public function store()
    {
        $request = request();
        $category = new Category();

        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->save();
        return new RedirectResponse('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories/update', compact('category'));
    }

    public function update()
    {
        $request = request();
        $category = Category::find($request->input('id'));
        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->save();
        return new RedirectResponse('/categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return new RedirectResponse('/categories');
    }
}
