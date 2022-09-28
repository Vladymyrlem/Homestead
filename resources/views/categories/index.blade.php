@extends('layout')

@section('title')
    list categories
@endsection
@section('content')
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="3" style="text-align: center;"><a href="../" style="font-size: 20px; color: #ffc107">&#11152;
                    back</a></td>
            <td colspan="7" style="text-align: center;"><a href="/categories/create"
                                                           style="font-size: 20px; color: #ffc107"> Create Category</a>
            </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">posts</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
            <th scope="col">show</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td>
                    @foreach($category->posts as $post)
                            <?php  ?>
                    @endforeach
                </td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td><a class="btn btn-success btn-sm" href="categories/{{ $category->id }}/edit">&#9999;<i
                                class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="categories/{{ $category->id }}/delete">&#10060;<i
                                class="fa fa-trash"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="categories/{{ $category->id }}">&#10060;<i
                                class="fa fa-eye"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
