<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

use Vagrant\Lesson6\Models\Category;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = Category::find($_POST['id']);
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location:list-categories.php');

} else if (empty($_GET['id'])) {
    throw new InvalidArgumentException('Error get id value');
}

/* @var $blade */
echo $blade->make('categories/update', [
    'title' => 'Update Category'
])->render();
