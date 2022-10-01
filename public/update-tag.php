<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

use Vagrant\Lesson7\Models\Tag;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag = Tag::find($_POST['id']);
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('Location:list-tags.php');

} else if (empty($_GET['id'])) {
    throw new InvalidArgumentException('Error get id value');
}
$tag = Tag::find($_GET['id']);

/* @var $blade */
echo $blade->make('tags/update', [
    'title' => 'Update Tag',
    'tag' => $tag
])->render();
