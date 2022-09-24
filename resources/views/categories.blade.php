@extends('layout')


@section('title')
    Creating category
@endsection
<form action="" method="post">
    <div class="form-group">
        <label for="category-name">Category name</label>
        <input id="category-name" type="text" class="form-control" name="title" value="" placeholder="Category Name"/>
    </div>
    <div class="form-group">
        <label for="category-slug">Category slug</label>
        <input id="category-slug" type="text" class="form-control" name="slug" value="" placeholder="Category Slug"/>
    </div>
    <button type="submit" name="submit" class="btn btn-primary mt-5">Add Category</button>
</form>
