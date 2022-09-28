@extends('layout')

@section('title')
    list posts
@endsection
@section('content')
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="2" style="text-align: center;"><a href="../" style="font-size: 20px; color: #ffc107">&#11152;
                    back</a></td>
            <td colspan="9" style="text-align: center;"><a href="posts/create"
                                                           style="font-size: 20px; color: #ffc107"> Create Post</a></td>
        </tr>
        </thead>
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
            <th scope="col">update</th>
            <th scope="col">delete</th>
            <th scope="col">show</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->body}}</td>
                <td> @foreach ($post->category as $cat)
                            <?php echo $cat->title; ?>
                    @endforeach
                </td>
                <td scope="col">@foreach ($post->tag as $tag)
                            <?php echo $tag->title . ''; ?>
                    @endforeach
                </td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td><a class="btn btn-success btn-sm" href="posts/{{ $post->id }}/edit">&#9999;<i
                                class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="posts/{{ $post->id }}/delete">&#10060;<i
                                class="fa fa-trash"></i></a></td>

                <td><a class="btn btn-light btn-sm" href="posts/{{ $post->id }}">Show</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
