<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ .'/../config/database.php';
require_once __DIR__ . '/../config/blade.php';
use Vagrant\Lesson6\Models\Post;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$category = new Post();
$category->title = $_POST['title'];
$category->slug = $_POST['slug'];
$category->slug = $_POST['body'];
$category->save();
header('Location:list-posts.php');

}
/* @var $blade */

echo $blade->make('posts/create')->render();
