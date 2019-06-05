<?php

namespace LSP\wrong;
require_once 'SumCalculator.php';
require_once 'EvenSumCalculator.php';

function calc(SumCalculator $calculator)
{
    echo $calculator->calculate() . "\r\n";
}

calc(new SumCalculator([4, 3, 2, 1]));
calc(new EvenSumCalculator([4, 3, 2, 1]));