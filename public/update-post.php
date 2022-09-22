<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag = \Vagrant\Lesson6\Models\Post::find($_POST['id']);
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->slug = $_POST['body'];
    $tag->slug = $_POST['category_id'];
    $tag->save();
    header('Location:list-posts.php');

} else if (empty($_GET['id'])) {
    throw new InvalidArgumentException('Error get id value');
}
$posts = \Vagrant\Lesson6\Models\Post::find($_GET['id']);

/* @var $blade */
echo $blade->make('posts/update', [
    'title' => 'Update Post',
    'posts' => $posts
])->render();
