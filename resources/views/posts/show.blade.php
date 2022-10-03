@extends('layout')

@section('content')
    <table class="table table-bordered table-hover table-dark" id="post-content-table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">body</th>
            <th scope="col">category</th>
            <th scope="col">tags</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td scope="col">{{ $post->id }}</td>
            <td scope="col">{{ $post->title }}</td>
            <td scope="col">{{ $post->slug }}</td>
            <td scope="col">{{ $post->body }}</td>
            <td scope="col">
                    <?php echo $post->category->title.'<br>'; ?>
            </td>
            <td scope="col">@foreach ($post->tags as $tag)
                        <?php echo $tag->title . '<br>'; ?>
                @endforeach
            </td>
            <td scope="col">{{ $post->created_at }}</td>
            <td scope="col">{{ $post->updated_at }}</td>
        </tr>
        </tbody>
    </table>
@endsection()
