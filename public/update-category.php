<?php
require_once '../vendor/autoload.php';
require_once '../config/database.php';
require_once '../config/blade.php';

use Vagrant\Lesson6\Models\Category;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $update_category = Category::find($_POST['id']);
    $update_category->title = $_POST['title'];
    $update_category->slug = $_POST['slug'];
    $update_category->save();
    header('Location:list-categories.php');

} else if (empty($_GET['id'])) {
    throw new InvalidArgumentException('Error get id value');
}
$category = Category::find($_GET['id']);
/* @var $blade */
echo $blade->make('categories/update', [
    'category' => $category
])->render();
