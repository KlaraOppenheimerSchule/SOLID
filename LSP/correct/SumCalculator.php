<?php

namespace LSP\correct;
class SumCalculator extends Calculator
{
    function calculate(): int
    {
        echo "SumCalculator: calculate called.\r\n";
        $result = 0;
        foreach ($this->numbers as $n) {
            $result += $n;
        }
        return $result;
    }
}