@extends('layout')

@section('title')
    list categories
@endsection
@section('content')
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="1"  style="text-align: center;"><a href="../" style="font-size: 20px; color: #ffc107">&#11152; back</a></td>
            <td colspan="6"  style="text-align: center;"><a href="create-category.php" style="font-size: 20px; color: #ffc107"> Create Category</a></td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td><a class="btn btn-success btn-sm" href="update-category.php?id={{ $category->id }}">&#9999;<i class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-light btn-sm" href="delete-category.php?id={{ $category->id }}">&#10060;<i class="fa fa-trash"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
