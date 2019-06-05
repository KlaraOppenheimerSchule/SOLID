<?php

namespace OC\wrong;
require_once "SwordFighter.php";
require_once "DaggerFighter.php";
require_once "Cavalry.php";

$cavalry = new Cavalry();
$cavalry->fight();

$sFighter = new SwordFighter();
$sFighter->fight();

$dFighter = new DaggerFighter();
$dFighter->fight();
