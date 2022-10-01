<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

$posts = \Vagrant\Lesson7\Models\Post::all();

/* @var $blade */
echo $blade->make('posts/list', [
    'posts' => $posts
])->render();
