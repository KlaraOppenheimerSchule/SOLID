<?php

namespace DI\correct;

require_once "IPowerSupply.php";

class Lamp
{
    private $powerSupplier;

    public function __construct(IPowerSupply $powerSupplier)
    {
        $this->powerSupplier = $powerSupplier;
    }

    function turnOn()
    {
        $this->powerSupplier->ConsumeEnergy();

        echo "the lamp turned on cause we got some energy\r\n";
    }
}