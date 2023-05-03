<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardHandTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateHand()
    {
        $hand = new CardHand();

        $card = '[Q ♦]';

        $hand->add($card);
        $res = $hand->getHand();

        $this->assertNotEmpty($res);
        $this->assertSame('[Q ♦]', $hand->printHand());
    }
}