<?php

namespace IS\wrong;

require_once 'IVehicle.php';

class Car implements IVehicle
{
    function drive()
    {
        echo "the car drives\r\n";
    }

    function fly()
    {
        echo "the car can't fly\r\n";
    }
}