<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/blade.php';

/* @var $blade */
echo $blade->make('layout')->render();
