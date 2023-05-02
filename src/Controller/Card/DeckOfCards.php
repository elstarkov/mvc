<?php

namespace App\Card;

/**
 * Class represents a deck of cards
 */
class DeckOfCards
{
    /**
     * @var array<mixed>
    */
    private $deck = [
            "[A \xE2\x99\xA0]",
            "[2 \xE2\x99\xA0]", "[3 \xE2\x99\xA0]",
            "[4 \xE2\x99\xA0]", "[5 \xE2\x99\xA0]",
            "[6 \xE2\x99\xA0]", "[7 \xE2\x99\xA0]",
            "[8 \xE2\x99\xA0]", "[9 \xE2\x99\xA0]",
            "[10 \xE2\x99\xA0]", "[J \xE2\x99\xA0]",
            "[Q \xE2\x99\xA0]", "[K \xE2\x99\xA0]",

            "[A \xE2\x99\xA3]",
            "[2 \xE2\x99\xA3]", "[3 \xE2\x99\xA3]",
            "[4 \xE2\x99\xA3]", "[5 \xE2\x99\xA3]",
            "[6 \xE2\x99\xA3]", "[7 \xE2\x99\xA3]",
            "[8 \xE2\x99\xA3]", "[9 \xE2\x99\xA3]",
            "[10 \xE2\x99\xA3]", "[J \xE2\x99\xA3]",
            "[Q \xE2\x99\xA3]", "[K \xE2\x99\xA3]",

            "[A \xE2\x99\xA5]",
            "[2 \xE2\x99\xA5]", "[3 \xE2\x99\xA5]",
            "[4 \xE2\x99\xA5]", "[5 \xE2\x99\xA5]",
            "[6 \xE2\x99\xA5]", "[7 \xE2\x99\xA5]",
            "[8 \xE2\x99\xA5]", "[9 \xE2\x99\xA5]",
            "[10 \xE2\x99\xA5]", "[J \xE2\x99\xA5]",
            "[Q \xE2\x99\xA5]", "[K \xE2\x99\xA5]",

            "[A \xE2\x99\xA6]",
            "[2 \xE2\x99\xA6]", "[3 \xE2\x99\xA6]",
            "[4 \xE2\x99\xA6]", "[5 \xE2\x99\xA6]",
            "[6 \xE2\x99\xA6]", "[7 \xE2\x99\xA6]",
            "[8 \xE2\x99\xA6]", "[9 \xE2\x99\xA6]",
            "[10 \xE2\x99\xA6]", "[J \xE2\x99\xA6]",
            "[Q \xE2\x99\xA6]", "[K \xE2\x99\xA6]",
        ];

    /**
     * Shuffles the deck and prints it
     */
    public function shuffleDeck(): string
    {
        $newDeck = $this->deck;
        shuffle($newDeck);
        return implode(", ", $newDeck);
    }

    /**
     * Shuffles the deck
     */
    public function shuffleNoPrint(): void
    {
        shuffle($this->deck);
    }

    /**
     * Get a card with a specific index
     * @param int $val - Index value used to get a card
     * @return string $res - The card with index value of $val
     */
    public function getCardFromVal(int $val): string
    {
        $res = $this->deck[$val - 1];
        return $res;
    }

    /**
     * Remove a card from the deck so it can't be drawn again
     * @param string $remove - Card to remove
     */
    public function modifyDeck(string $remove): void
    {
        if (in_array($remove, $this->deck)) {
            $key = array_search($remove, $this->deck);
            unset($this->deck[$key]);
        }
    }

    /**
     * Count the cards remaining in deck
     */
    public function getRemain(): int
    {
        return count($this->deck);
    }
}
