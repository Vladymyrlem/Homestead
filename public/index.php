<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
<<<<<<< HEAD
require_once __DIR__ . '/../config/dotenv.php';
=======
>>>>>>> 5f35dec (Init Project)
require_once __DIR__ . '/../config/blade.php';
require_once __DIR__ . '/../config/router.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/validator.php';


/**
 * @var Illuminate\Routing\Router $router
 */
/**
 * @var Illuminate\Http\Request $request
 */
$responce = $router->dispatch($request);
echo $responce->getContent();
