<?php

namespace OC\wrong;
require_once "Character.php";

class SwordFighter extends Character
{
    public function __construct()
    {
        echo "SwordFighter\r\n";
    }

    function fight()
    {
        echo "SwordFighter fight...\r\n swings his sword...\r\n";
    }
}