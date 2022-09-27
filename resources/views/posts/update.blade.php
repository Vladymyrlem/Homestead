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
            <th scope="col">{{ $post->id }}</th>
            <th scope="col">{{ $post->title }}</th>
            <th scope="col">{{ $post->slug }}</th>
            <th scope="col">{{ $post->body }}</th>
            <th scope="col">@foreach ($post->category as $cat)
                        <?php echo $cat->title; ?>
                @endforeach</th>
            <th scope="col">{{ $post->created_at }}</th>
            <th scope="col">{{ $post->updated_at }}</th>
        </tr>
        </tbody>
    </table>
    <div class="container mt-4">
        <form action="/posts/update" method="POST">
            <input type="hidden" id="id" name="id" value="{{ $post->id }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}">
            </div>
            <div class="form-group">
                <label for="slug">Body</label>
                <input type="text" class="form-control" id="slug" name="body" value="{{ $post->body }}">
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <input type="text" class="form-control" id="category_id" name="category_id"
                       value="{{ $post->category_id }}">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Update post</button>
        </form>
    </div>
@endsection
