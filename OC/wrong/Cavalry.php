<?php

namespace OC\wrong;
require_once "Character.php";

class Cavalry extends Character
{
    public function __construct()
    {
        echo "Cavalry\r\n";
    }

    function fight()
    {
        echo "Cavalry fight...\r\n swings his lance...\r\n";
    }
}