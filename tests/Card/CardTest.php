<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateCard()
    {
        $card = new Card();
        $this->assertInstanceOf("\App\Card\Card", $card);

        $res = $card->getRandCard();
        $this->assertNotEmpty($res);

        $res2 = $card->getNumbers();
        $this->assertIsString($res2);

        $res3 = $card->getCount();
        $this->assertIsInt($res3);
    }
}