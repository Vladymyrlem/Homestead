@extends('layout')


@section('title')
    Creating post
@endsection
@section('content')

    <form action="/posts/store" method="post">
        <div class="form-group">
            <label for="post-name">Post name</label>
            <input id="post-name" type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="Post Name"/>
        </div>
        <div class="form-group">
            <label for="post-slug">Post slug</label>
            <input id="post-slug" type="text" class="form-control" name="slug" value="{{$post->slug}}" placeholder="Post Slug"/>
        </div>
        <div class="form-group">
            <label for="post-slug">Post Body</label>
            <input id="post-slug" type="text" class="form-control" name="body" value="{{$post->body}}" placeholder="post Body"/>
        </div>
        <div class="form-group">
            <label for="post-slug">Category Id</label>
            <input id="post-slug" type="text" class="form-control" name="id" value="{{$post->category_id}}" placeholder="Category Id"/>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-5">Добавить</button>
    </form>
@endsection
