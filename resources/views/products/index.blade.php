<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop page</title>
</head>
<body>
<h1>Products List</h1>
<ul>
    <li>
        <a href="{{route('products.show',['product' => 1])}}">
            <h2>Product 1</h2>
        </a>
        <a href="{{route('products.edit',['product' => 1])}}">
            <h2>Edit</h2>
        </a>
        <form action="{{ route('products.destroy', ['product' => 1]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    <li>
        <a href="{{route('products.show',['product' => 2])}}">
            <h2>Product 2</h2>
        </a>
        <a href="{{route('products.edit',['product' => 2])}}">
            <h2>Edit</h2>
        </a>
        <form action="{{ route('products.destroy', ['product' => 2]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    <li>
        <a href="{{route('products.show',['product' => 3])}}">
        <h2>Product 3</h2>
        </a>
        <a href="{{route('products.edit',['product' => 3])}}">
        <h2>Edit</h2>
        </a>
        <form action="{{ route('products.destroy', ['product' => 3]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
</ul>
</body>
</html>
