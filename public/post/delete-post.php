<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

if (empty($_GET['id'])) {
    throw new InvalidArgumentException('Error get id value');
}

$category = \Vagrant\Lesson8\Models\Post::find($_GET['id']);
$category->delete();
header('Location:list-posts.php');
