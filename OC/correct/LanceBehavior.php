<?php

namespace OC\correct;
require_once "IWeaponBehavior.php";

class LanceBehavior implements IWeaponBehavior
{
    function useWeapon()
    {
        echo "the lance sting.\r\n";
    }
}