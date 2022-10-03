<?php

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Vagrant\Lesson9\Controllers\CategoryController;
use Vagrant\Lesson9\Controllers\TagController;
use Vagrant\Lesson9\Controllers\PostController;


$request = Request::createFromGlobals();

function request()
{
    global $request;

    return $request;
}

$router = new Router(new Dispatcher(), (new Container()));

function router()
{
    global $router;

    return $router;
}

$router->get('/categories', [CategoryController::class, 'index']);
$router->get('/categories/{id}/show', [CategoryController::class, 'show']);
$router->get('/categories/create', [CategoryController::class, 'create']);
$router->post('/categories/store', [CategoryController::class, 'store']);
$router->get('/categories/{id}/edit', [CategoryController::class, 'edit']);
$router->post('/categories/update', [CategoryController::class, 'update']);
$router->get('/categories/{id}/delete', [CategoryController::class, 'destroy']);


$router->get('/tags', [TagController::class, 'index']);
$router->get('/tags/{id}/show', [TagController::class, 'show']);
$router->get('/tags/create', [TagController::class, 'create']);
$router->post('/tags/store', [TagController::class, 'store']);
$router->get('/tags/{id}/edit', [TagController::class, 'edit']);
$router->post('/tags/update', [TagController::class, 'update']);
$router->get('/tags/{id}/delete', [TagController::class, 'destroy']);

$router->get('/', [PostController::class, 'index']);
$router->get('/posts', [PostController::class, 'index']);
$router->get('/posts/{id}/show', [PostController::class, 'show']);
$router->get('/posts/create', [PostController::class, 'create']);
$router->post('/posts/store', [PostController::class, 'store']);
$router->get('/posts/{id}/edit', [PostController::class, 'edit']);
$router->post('/posts/update', [PostController::class, 'update']);
$router->get('/posts/{id}/delete', [PostController::class, 'destroy']);
