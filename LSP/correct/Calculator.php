<?php

namespace LSP\correct;
abstract class Calculator
{
    protected $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public abstract function calculate(): int;
}