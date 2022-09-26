<?php

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Vagrant\Lesson8\Controllers\CategoryController;
use Vagrant\Lesson8\Controllers\TagController;
use Vagrant\Lesson8\Controllers\PostController;

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

//  Category
$router->get('/categories', [CategoryController::class, 'index']);
$router->get('/categories/create', [CategoryController::class, 'create']);
$router->post('/categories/store', [CategoryController::class, 'store']);
$router->get('/categories/{id}/edit', [CategoryController::class, 'edit']);
$router->post('/categories/update', [CategoryController::class, 'update']);
$router->get('/categories/{id}/delete', [CategoryController::class, 'destroy']);

//  Category
$router->get('/tags', [TagController::class, 'index']);
$router->get('/tags/create', [TagController::class, 'create']);
$router->post('/tags/store', [TagController::class, 'store']);
$router->get('/tags/{id}/edit', [TagController::class, 'edit']);
$router->post('/tags/update', [TagController::class, 'update']);
$router->get('/tags/{id}/delete', [TagController::class, 'destroy']);

// Post
$router->get('/post', [PostController::class, 'index']);
$router->get('/post/{id}/show', [PostController::class, 'show']);
$router->get('/post/create', [PostController::class, 'create']);
$router->post('/post/store', [PostController::class, 'store']);
$router->get('/post/{id}/edit', [PostController::class, 'edit']);
$router->post('/post/update', [PostController::class, 'update']);
$router->get('/post/{id}/delete', [PostController::class, 'destroy']);
