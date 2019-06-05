<?php

namespace OC\correct;
require_once "Fighter.php";
require_once "Cavalry.php";
require_once "LanceBehavior.php";

$cavalry = new Cavalry();
$cavalry->fight();

$fighter = new Fighter();
$fighter->fight();

$fighter->setWeaponBehavior(new LanceBehavior());
$fighter->fight();