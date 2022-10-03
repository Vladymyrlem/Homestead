@extends('layout')

@section('title', 'Tags')

@section('breadcrumbs')
    @include('particials.breadcrumbs', [
        'links'=> [
            [
<<<<<<< HEAD
                'link' => '/categories',
=======
                'link' => '/category',
>>>>>>> 5f35dec (Init Project)
                'name' => 'Category List'
            ], [
                'link' => '/',
                'name' => 'Tag List'
            ],[
<<<<<<< HEAD
                'link' => '/posts',
=======
                'link' => '/post',
>>>>>>> 5f35dec (Init Project)
                'name' => 'Post List'
            ]
        ]
    ])
@endsection

@section('content')
    @isset($_SESSION['success'])
        <div class="alert alert-success" role="alert">
            {{ $_SESSION['success'] }}
        </div>
    @endisset
    @php
        unset($_SESSION['success']);
    @endphp
    <h1>Tag List</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Posts</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($tags as $tag)
            <tr>
                <th scope="row">{{ $tag->id }}</th>
                <td>{{ $tag->title }}</td>
                <td>{{ $tag->slug }}</td>
<<<<<<< HEAD
                <td>{{ $tag->post->pluck('title')->join(', ') }}</td>
                <td><a href="/tags/{{ $tag->id }}/restore">RESTORE</a></td>
=======
                <td>{{ $tag->posts->pluck('title')->join(', ') }}</td>
                <td><a href="/tag/{{ $tag->id }}/restore">RESTORE</a></td>
>>>>>>> 5f35dec (Init Project)
            </tr>
        @empty
            <p>Empty</p>
        @endforelse
        </tbody>
    </table>
<<<<<<< HEAD
    <a class="btn btn-secondary mt-3" href="/tags"> Back </a>
@endsection
=======
    <a class="btn btn-secondary mt-3" href="/tag"> Back </a>
@endsection
>>>>>>> 5f35dec (Init Project)
