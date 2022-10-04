<?php
require_once '../vendor/autoload.php';

use Vagrant\Lesson11\Models\PizzaMexico;
use Vagrant\Lesson11\Models\PizzaChickenGrill;
use Vagrant\Lesson11\Models\PizzanMunhenska;
use Vagrant\Lesson11\Models\PizzaCalculate;

$pizza_chicken = new PizzaChickenGrill();
$pizza_mexico = new PizzaMexico();
$pizza_munhenskaya = new PizzanMunhenska();
$calculate = new PizzaCalculate();

$calculate->add($pizza_mexico);
$calculate->add($pizza_munhenskaya);
$calculate->add($pizza_chicken);
echo '<pre>';
print_r($calculate->getPannier());
echo '</pre>';

var_dump($calculate->ingredients());
echo '<br>';
echo '<br><b>Price</b><br>';
var_dump($calculate->price());
