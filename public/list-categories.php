<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

use Vagrant\Lesson6\Models\Category;

$categories = Category::all();

/* @var $blade */
echo $blade->make('categories/list', [
    'categories' => $categories
])->render();