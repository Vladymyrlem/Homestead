@extends('layout')

@section('title', 'Categories')

@section('breadcrumbs')
    @include('particials.breadcrumbs', [
        'links'=> [
            [
                'link' => '/',
                'name' => 'Category List'
            ], [
<<<<<<< HEAD
                'link' => '/tags',
                'name' => 'Tag List'
            ], [
                'link' => '/posts',
=======
                'link' => '/tag',
                'name' => 'Tag List'
            ], [
                'link' => '/post',
>>>>>>> 5f35dec (Init Project)
                'name' => 'Post List'
            ]
        ]
    ])
@endsection

@section('content')
    @isset($_SESSION['success'])
<<<<<<< HEAD
        <div class="alert alert-success" role="alert">
            {{ $_SESSION['success'] }}
        </div>
=======
            <div class="alert alert-success" role="alert">
                {{ $_SESSION['success'] }}
            </div>
>>>>>>> 5f35dec (Init Project)
    @endisset
    @php
        unset($_SESSION['success']);
    @endphp
    <h1>Category List</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
<<<<<<< HEAD
            <th scope="col">Posts</th>
=======
            <th scope="col">Actions</th>
>>>>>>> 5f35dec (Init Project)
        </tr>
        </thead>
        <tbody>
        @forelse ($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
<<<<<<< HEAD
                <td>{{ $category->post->pluck('title')->join(', ') }}</td>
                <td><a href="/categories/{{ $category->id }}/restore">RESTORE</a></td>
=======
                <td><a href="/category/{{ $category->id }}/restore">RESTORE</a></td>
>>>>>>> 5f35dec (Init Project)

            </tr>
        @empty
            <p>Empty</p>
        @endforelse
        </tbody>
    </table>
<<<<<<< HEAD
    <a class="btn btn-secondary mt-3" href="/categories"> Back </a>
@endsection
=======
    <a class="btn btn-secondary mt-3" href="/category"> Back </a>
@endsection
>>>>>>> 5f35dec (Init Project)
