@extends('layout')


@section('title')
    update category
@endsection

@section('content')
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">post name</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col">{{ $category->id }}</th>
            <th scope="col">{{ $category->title }}</th>
            <th scope="col">{{ $category->slug }}</th>
            <td>@foreach($category->post as $post)
                    {{$post->title.','}}
                @endforeach</td>
            <th scope="col">{{ $category->created_at }}</th>
            <th scope="col">{{ $category->updated_at }}</th>
        </tr>
        </tbody>
    </table>
    <div class="container mt-4">
        <form action="/categories/update" method="POST">
            <input type="hidden" value="{{ $category->id }}" name="id">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">
                @isset($_SESSION['errors']['title'])
                    @foreach($_SESSION['errors']['title'] as $title)
                        <div class="alert alert-danger" role="alert">
                            {{ $title }}
                        </div>
                    @endforeach
                @endisset
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}">
                @isset($_SESSION['errors']['slug'])
                    @foreach($_SESSION['errors']['slug'] as $slug)
                        <div class="alert alert-danger" role="alert">
                            {{ $slug }}
                        </div>
                    @endforeach
                @endisset
            </div>
            <div class="mb-3">
                <label for="posts" class="form-label">Post</label>
                <select multiple aria-label="multiple select example" name="posts[]" id="posts">
                    @foreach($posts as $post)
                        <option @if(in_array($post->id, $category->post->pluck('id')->toArray())) selected @endif value="{{ $post->id }}">{{ $post->title }}</option>
                    @endforeach
                </select>

                @isset($_SESSION['errors']['$post'])
                    @foreach($_SESSION['errors']['$post'] as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endisset
            </div>
            <button type="submit" class="btn btn-primary mt-4">Update category</button>
        </form>
    </div>
    @php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    @endphp
@endsection
