<?php

namespace IS\wrong;

require_once "Car.php";
require_once "Airplane.php";
require_once "MultiFunctionCar.php";

$car = new Car();
$car->drive();
$car->fly();

$airplane = new Airplane();
$airplane->drive();
$airplane->fly();

$multifunctioncar = new MultiFunctionCar();
$multifunctioncar->drive();
$multifunctioncar->fly();
