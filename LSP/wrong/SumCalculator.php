<?php

namespace LSP\wrong;
class SumCalculator
{
    protected $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

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