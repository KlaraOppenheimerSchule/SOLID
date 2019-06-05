<?php

namespace OC\correct;
require_once "Character.php";
require_once "KnifeBehavior.php";

class Fighter extends Character
{
    public function __construct()
    {
        echo "Fighter\r\n";
        $this->setWeaponBehavior(new KnifeBehavior());
    }

    function fight()
    {
        echo "Fighter fight...\r\n";
        $this->weaponBehavior->useWeapon();
    }
}