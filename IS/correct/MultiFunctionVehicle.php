<?php

namespace IS\correct;

require_once 'ICar.php';
require_once 'IAirplane.php';

class MultiFunctionVehicle implements IAirplane, ICar
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