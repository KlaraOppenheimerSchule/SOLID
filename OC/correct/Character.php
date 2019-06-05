<?php

namespace OC\correct;
require_once "IWeaponBehavior.php";

abstract class Character
{
    protected $weaponBehavior;

    abstract function fight();

    public function setWeaponBehavior(IWeaponBehavior $behavior)
    {
        echo "change weapon behavior\r\n";
        $this->weaponBehavior = $behavior;
    }
}