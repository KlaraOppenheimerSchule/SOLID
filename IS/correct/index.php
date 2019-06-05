<?php

namespace IS\correct;

require_once "Car.php";
require_once "Airplane.php";
require_once "MultiFunctionVehicle.php";

$car = new Car();
$car->drive();

$airplane = new Airplane();
$airplane->fly();

$multifunctioncar = new MultiFunctionVehicle();
$multifunctioncar->drive();
$multifunctioncar->fly();
