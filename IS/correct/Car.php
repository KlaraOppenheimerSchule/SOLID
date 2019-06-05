<?php

namespace IS\correct;

require_once 'ICar.php';

class Car implements ICar
{
    function drive()
    {
        echo "the car drives\r\n";
    }
}