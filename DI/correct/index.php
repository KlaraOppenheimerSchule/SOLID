<?php

namespace DI\correct;

require_once "Lamp.php";
require_once "WaterPowerSupplier.php";
require_once "WindPowerSupplier.php";

$lamp = new Lamp(new WaterPowerSupplier());
$lamp->turnOn();

$lamp = new Lamp(new WindPowerSupplier());
$lamp->turnOn();