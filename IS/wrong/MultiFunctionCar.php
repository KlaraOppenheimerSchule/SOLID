<?php

namespace IS\wrong;

require_once 'IVehicle.php';

class MultiFunctionCar implements IVehicle
{

    function fly()
    {
        echo "The multifunctioncar flies\r\n";
    }

    function drive()
    {
        echo "The multifunctioncar drives\r\n";
    }
}