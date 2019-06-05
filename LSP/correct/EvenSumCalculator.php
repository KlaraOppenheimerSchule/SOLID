<?php

namespace LSP\correct;
class EvenSumCalculator extends Calculator
{
    function calculate(): int
    {
        echo "EvenSumCalculator: calculate called.\r\n";
        $result = 0;
        foreach ($this->numbers as $n) {
            if (($n & 1) === 0)
                $result += $n;
        }
        return $result;
    }
}