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
        <form action="/tags/update" method="post">
            <input type="hidden" value="{{ $tag->id }}" name="id">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $tag->title }}">
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
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $tag->slug }}">
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
                        <option @if(in_array($post->id, $tag->post->pluck('id')->toArray())) selected @endif value="{{ $post->id }}">{{ $post->title }}</option>
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
            <button type="submit" class="btn btn-primary mt-4">Update Tag</button>
        </form>
    </div>
    @php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    @endphp
@endsection
