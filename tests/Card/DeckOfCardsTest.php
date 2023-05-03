<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DeckOfCards.
 */
class DeckOfCardsTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateDeckOfCardsPart1(): void
    {
        $deck = new DeckOfCards();
        $deck2 = new DeckOfCards();
        $this->assertEquals($deck, $deck2);

        $value = $deck->getCardFromVal(2);
        $this->assertEquals($value, "[2 \xE2\x99\xA0]");

        $this->assertEquals($deck->getRemain(), 52);
        $deck->modifyDeck($value);
        $this->assertEquals($deck->getRemain(), 51);

        $deck->shuffleNoPrint();
        $this->assertNotEquals($deck, $deck2);

    }

    /**
     * Create two new decks to prove that they are the same at first,
     * after method is called, they are not.
     */
    public function testCreateDeckOfCardsPart2(): void
    {
        $deck = new DeckOfCards();
        $deck2 = new DeckOfCards();
        $this->assertEquals($deck, $deck2);

        $this->assertNotEquals($deck->shuffleDeck(), $deck2);
    }
}