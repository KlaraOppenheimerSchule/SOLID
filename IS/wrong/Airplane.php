<?php

namespace IS\wrong;

require_once 'IVehicle.php';

class Airplane implements IVehicle
{
    function drive()
    {
        echo "the airplane can't drive in this scenario.\r\n";
    }

    function fly()
    {
        echo "the airplane flies\r\n";
    }
}