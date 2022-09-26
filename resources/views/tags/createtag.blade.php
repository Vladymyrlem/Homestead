@extends('layout')


@section('title')
    Creating tag
@endsection
@section('content')

    <div class="container mt-4">

        <form action="/tags/store" method="post">
            <div class="form-group">
                <label for="tag-name">Tag name</label>
                <input id="tag-name" type="text" class="form-control" name="title" value="" placeholder="Tag Name"/>
            </div>
            <div class="form-group">
                <label for="tag-slug">Tag slug</label>
                <input id="tag-slug" type="text" class="form-control" name="slug" value="" placeholder="Tag Slug"/>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-5">Add Tag</button>
        </form>
    </div>
@endsection
