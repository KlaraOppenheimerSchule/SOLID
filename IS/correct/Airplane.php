<?php

namespace IS\correct;

require_once 'IAirplane.php';

class Airplane implements IAirplane
{
    function fly()
    {
        echo "the airplane flies\r\n";
    }
}