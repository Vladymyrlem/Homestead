@extends('layout')

@section('title')
    Update Tag Value
@endsection

@section('content')
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col">{{ $tag->id }}</th>
            <th scope="col">{{ $tag->title }}</th>
            <th scope="col">{{ $tag->slug }}</th>
            <th scope="col">{{ $tag->created_at }}</th>
            <th scope="col">{{ $tag->updated_at }}</th>
        </tr>
        </tbody>
    </table>
    <div class="container-fluid mt-4">
        <form action="" method="POST">
            <input type="hidden" id="id" name="id" value="{{ $tag->id }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $tag->title }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $tag->slug }}">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Update Tag</button>
        </form>
    </div>
@endsection
