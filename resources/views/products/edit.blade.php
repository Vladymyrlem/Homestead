<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
<form action="{{ route('products.update', ['product' => $id]) }}" method="post">
    @csrf
    @method('PUT');
    <div class="d-flex flex-column">
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
    </div>
    <button type="submit">Update Product</button>
</form>
</body>
</html>
