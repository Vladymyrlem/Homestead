<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = \Vagrant\Lesson6\Models\Post::find($_POST['id']);
    $post->title = $_POST['title'];
    $post->slug = $_POST['slug'];
    $post->body = $_POST['body'];
    $post->category_id = $_POST['category_id'];
    $post->save();
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
