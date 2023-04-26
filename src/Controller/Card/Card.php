<?php

namespace App\Card;

class Card
{
    protected int $value;

    /** @var array<mixed> */
    public array $numbers;

    public function __construct()
    {
        $this->value = 0;
        $this->numbers = range(0, 51);
    }

    public function getRandCard(): int
    {
        $this->value = array_rand($this->numbers);
        unset($this->numbers[$this->value]);

        return $this->value;
    }

    public function getNumbers(): string
    {
        return implode(", ", $this->numbers);
    }

    public function getCount(): int
    {
        return count($this->numbers);
    }
}
