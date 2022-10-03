<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
<<<<<<< HEAD
    'driver' => getenv('DATABASE_DRIVER'),
    'host' => getenv('DATABASE_HOST'),
    'database' => getenv('DATABASE_NAME'),
    'username' => getenv('DATABASE_USERNAME'),
    'password' => getenv('DATABASE_PASSWORD'),
    'charset' => getenv('DATABASE_CHARSET'),
    'collation' => getenv('DATABASE_COLLATION'),
    'prefix' => getenv('DATABASE_PREFIX'),
=======
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'testdb',
    'username' => 'root',
    'password' => 'secret',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
>>>>>>> 5f35dec (Init Project)
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
