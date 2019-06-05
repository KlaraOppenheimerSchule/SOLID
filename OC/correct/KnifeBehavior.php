<?php

namespace OC\correct;
require_once "IWeaponBehavior.php";

class KnifeBehavior implements IWeaponBehavior
{
    function useWeapon()
    {
        echo "the knife knives.\r\n";
    }
}