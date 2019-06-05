<?php

namespace OC\correct;
require_once "Character.php";
require_once "LanceBehavior.php";

class Cavalry extends Character
{
    public function __construct()
    {
        echo "Cavalry\r\n";
        $this->setWeaponBehavior(new LanceBehavior());
    }

    function fight()
    {
        echo "Cavalry fight...\r\n";
        $this->weaponBehavior->useWeapon();
    }
}