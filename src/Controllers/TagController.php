<?php

namespace Vagrant\Lesson9\Controllers;

use Vagrant\Lesson9\Model\Post;
use Vagrant\Lesson9\Model\Tag;
use Illuminate\Http\RedirectResponse;


class TagController
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags/index', compact('tags'));
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tags/show', compact('tag'));
    }

    public function create()
    {
        $tag = new Tag();
        $posts = Post::all();
        return view('tags/form', compact('tag', 'posts'));
    }

<<<<<<< HEAD
    public function trash()
    {
        $tags = Tag::onlyTrashed()->get();
        return view('tags/trash', compact('tags'));
    }

=======
>>>>>>> 5f35dec (Init Project)
    public function store()
    {
        $data = request()->all();

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
            ],
            'post' => [
                'exists:tags,id'
            ]
        ]);
        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $tag = new Tag();
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];
        $tag->save();
        $tag->posts()->attach($data['posts']);
        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/tags');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        $posts = Post::all();
        return view('tags/form-edit', compact('tag', 'posts'));
    }

    public function update()
    {
        $data = request()->all();
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
            ],
            'post' => [
                'exists:posts,id'
            ]
        ]);
        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }
        $tag = Tag::find($data['id']);
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];

        $tag->save();
        $tag->post()->sync($data['posts']);
        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/tags');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return new RedirectResponse('/tags');
    }
<<<<<<< HEAD

    public function restore($id)
    {
        $tag = Tag::withTrashed()
            ->where('id', $id)
            ->restore();
        return new RedirectResponse('/tags');
    }
=======
>>>>>>> 5f35dec (Init Project)
}
