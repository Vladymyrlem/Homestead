<?php
namespace Vagrant\Lesson9\Controllers;

use Vagrant\Lesson9\Model\Category;
use Illuminate\Http\RedirectResponse;
use Vagrant\Lesson9\Model\Post;


class CategoryController
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view('categories/index', compact('categories','posts'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        $posts = Post::all();
        return view('categories/show', compact('category','posts'));
    }

    public function create()
    {
        $category = new Category();
        $posts = Post::all();
        return view('categories/form', compact('category','posts'));
    }

    public function store()
    {
        $data = request()->all();
        $validator = validator()->make($data, [
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => ['required', 'min:5', 'max:255', ]
        ]);
        if($validator->fails())
        {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }
        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->save();

        $_SESSION['success'] = 'Запис збережено';
        return new RedirectResponse('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories/form-edit', compact('category'));
    }

    public function update()
    {
        $data = request()->all();

        $category = Category::find($data['id']);
        $category->title = $data['title'];
        $category->slug = $data['slug'];

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'unique:categories,title',
                'min:5'
            ],
            'slug' => [
                'required',
                'unique:categories,slug',
                'min:5'
            ]
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }
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
