<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config/database.php';
use Vagrant\Lesson6\User;
$model = User::all();
print_r($model);
