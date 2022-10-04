<?php
require_once '../vendor/autoload.php';
require_once '../config/dotenv.php';
require_once '../config/database.php';
require_once '../config/blade.php';
require_once '../config/validator.php';
require_once '../config/router.php';

use Vagrant\Lesson11\Models\PizzaMexico;
use Vagrant\Lesson11\Models\PizzaChickenGrill;
use Vagrant\Lesson11\Models\PizzanMunhenska;
use Vagrant\Lesson11\Models\PizzaCalculate;

$pizza_chicken = new PizzaChickenGrill();
$pizza_mexico = new PizzaMexico();
$pizza_munhenskaya = new PizzanMunhenska();
$calculate = new PizzaCalculate();
