<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

use Vagrant\Lesson8\Models\Tag;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = new Tag();
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location:list-tags.php');

}
/* @var $blade */

echo $blade->make('tags/createtag')->render();
