<?php

namespace App\Card;

/**
 * Class represents a numeric card(index value) in a deck.
 */
class Card
{
    /**
     * @var int
     */
    protected int $value;

    /**
     * @var array<mixed>
    */
    public array $numbers;

    public function __construct()
    {
        $this->value = 0;
        $this->numbers = range(0, 51);
    }

    /**
     * Gets a random card from the deck
     * @return int The value of the card
     */
    public function getRandCard(): int
    {
        $this->value = array_rand($this->numbers);
        unset($this->numbers[$this->value]);

        return $this->value;
    }

    /**
     * Prints out the number of each card, if no cards
     * are drawn the numbers should be 0 to 51
     */
    public function getNumbers(): string
    {
        return implode(", ", $this->numbers);
    }

    /**
     * Count how many cards there are left in the deck
     */
    public function getCount(): int
    {
        return count($this->numbers);
    }
}
