@extends('layout')


@section('title')
    Creating tag
@endsection
<form action="" method="post">
    <div class="form-group">
        <label for="tag-name">tag name</label>
        <input id="tag-name" type="text" class="form-control" name="title" value="" placeholder="tag Name"/>
    </div>
    <div class="form-group">
        <label for="tag-slug">tag slug</label>
        <input id="tag-slug" type="text" class="form-control" name="slug" value="" placeholder="tag Slug"/>
    </div>
    <button type="submit" name="submit" class="btn btn-primary mt-5">Add Tag</button>
</form>
