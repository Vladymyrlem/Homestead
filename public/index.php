<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

/* @var $blade */
echo $blade->make('layout')->render();
use Vagrant\Lesson6\Models\Post;
$posts = Post::all();

foreach ($posts as $post) {
    echo '<h1>' . $post->id . ' - ' . $post->title . '</h1>';
}
