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
            <td scope="col">{{ $posts->id }}</td>
            <td scope="col">{{ $posts->title }}</td>
            <td scope="col">{{ $posts->slug }}</td>
            <td scope="col">{{ $posts->body }}</td>
            <td scope="col">@foreach ($posts->category as $cat)
                        <?php echo $cat->title.'<br>'; ?>
                @endforeach
            </td>
            <td scope="col">@foreach ($posts->tag as $tag)
                        <?php echo $tag->title . '<br>'; ?>
                @endforeach
            </td>
            <td scope="col">{{ $posts->created_at }}</td>
            <td scope="col">{{ $posts->updated_at }}</td>
        </tr>
        </tbody>
    </table>
@endsection()
