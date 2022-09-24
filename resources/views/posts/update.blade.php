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
            <th scope="col">body</th>
            <th scope="col">category</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col">{{ $posts->id }}</th>
            <th scope="col">{{ $posts->title }}</th>
            <th scope="col">{{ $posts->slug }}</th>
            <th scope="col">{{ $posts->body }}</th>
            <th scope="col">{{ $posts->category_id }}</th>
            <th scope="col">{{ $posts->created_at }}</th>
            <th scope="col">{{ $posts->updated_at }}</th>
        </tr>
        </tbody>
    </table>
    <div class="container mt-4">
        <form action="" method="POST">
            <input type="hidden" id="id" name="id" value="{{ $posts->id }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $posts->title }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $posts->slug }}">
            </div>
            <div class="form-group">
                <label for="slug">Body</label>
                <input type="text" class="form-control" id="slug" name="body" value="{{ $posts->body }}">
            </div>
            <div class="form-group">
                <label for="slug">Category</label>
                <input type="text" class="form-control" id="slug" name="category" value="{{ $posts->category_id }}">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Update post</button>
        </form>
    </div>
@endsection
