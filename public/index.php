<?php
require_once '../vendor/autoload.php';
require_once '../config/database.php';
require_once '../config/blade.php';
require_once '../config/router.php';

/**
 * @var \Illuminate\Routing\Router $router
 * @var \Illuminate\Http\Request $request
 * **/
$response = $router->dispatch($request);
echo $response->getContent();
