<?php

namespace DI\wrong;

require_once "WaterPowerSupplier.php";


class Lamp
{
    private $powerSupplier;

    public function __construct()
    {
        $this->powerSupplier = new WaterPowerSupplier();
    }

    function turnOn()
    {
        $this->powerSupplier->ConsumeEnergy();

        echo "the lamp turned on cause we got some energy\r\n";
    }
}