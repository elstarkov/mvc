<?php

namespace App\Card;

//use App\Card\CardGraphic;

/**
 * Class represents a hand of cards
 */
class CardHand
{
    /**
     * @var array<mixed>
     */
    private $hand = [];


    /**
     * Add a card to a card hand
     * @param string $cardValue - Card to add
     */
    public function add(string $cardValue): void
    {
        $this->hand[] = $cardValue;
    }

    /**
     * Get the cards from the hand
     * @return mixed[]
    */
    public function getHand(): array
    {
        return $this->hand;
    }

    /**
     * Print the cards the hand is holding
     */
    public function printHand(): string
    {
        return implode(', ', $this->hand);
    }
}
