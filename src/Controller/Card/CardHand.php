<?php

namespace App\Card;

//use App\Card\CardGraphic;

class CardHand
{
    /** @var array<mixed> */
    private $hand = [];

    public function add(string $cardValue): void
    {
        $this->hand[] = $cardValue;
    }

    /** @return mixed[] */
    public function getHand(): array
    {
        return $this->hand;
    }

    public function printHand(): string
    {
        return implode(', ', $this->hand);
    }
}
