@extends('layout')


@section('title')
    Creating post
@endsection
@section('content')

    <form action="/posts/store" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   value="{{  $_SESSION['data']['title'] ?? '' }}" placeholder="Enter title">
            @isset($_SESSION['errors']['title'])
                @foreach($_SESSION['errors']['title'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{   $error  }}
                    </div>
                @endforeach
            @endisset
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"
                   value="{{  $_SESSION['data']['slug'] ?? '' }}" placeholder="Enter slug">
            @isset($_SESSION['errors']['slug'])
                @foreach($_SESSION['errors']['slug'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{   $error  }}
                    </div>
                @endforeach
            @endisset
        </div>
        <div class="form-group">
            <label for="post-slug">Post Body</label>
            <textarea class="form-control" id="post-body" name="body"
                      placeholder="Enter body">{{  $_SESSION['data']['body'] ?? '' }}</textarea>
            @isset($_SESSION['errors']['body'])
                @foreach($_SESSION['errors']['body'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{   $error  }}
                    </div>
                @endforeach
            @endisset        </div>
        <div class="form-group">
            <label for="post-slug">Category Id</label>
            {{--            <input id="post-slug" type="text" class="form-control" name="id" value="" placeholder="Category Id"/>--}}
            <select class="form-select" id="floatingSelect" style="height: 80px;" name="category">
                @foreach($post->category as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <label for="floatingSelect">Select category</label>
        </div>
        <div class="mt-4 form-floating">
            <select class="form-select" id="floatingSelect" style="height: 80px;" name="tagId[]" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
            <label for="floatingSelect">Select tag(s) + ctrl</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-5">Добавить</button>
    </form>
    @php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    @endphp
@endsection
