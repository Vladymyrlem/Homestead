<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

$app = new \Vagrant\Lesson8\Base\Application();
echo $app->run();
?>
