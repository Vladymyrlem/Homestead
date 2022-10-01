<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

use Vagrant\Lesson7\Models\Tag;

if (empty($_GET['id'])) {
    throw new InvalidArgumentException('Error get id value');
}

$category = Tag::find($_GET['id']);
$category->delete();
header('Location:list-tags.php');
