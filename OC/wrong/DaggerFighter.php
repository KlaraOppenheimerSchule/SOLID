<?php

namespace OC\wrong;
require_once "Character.php";

class DaggerFighter extends Character
{
    public function __construct()
    {
        echo "DaggerFighter\r\n";
    }

    function fight()
    {
        echo "DaggerFighter fight...\r\n swings his dagger...\r\n";
    }
}