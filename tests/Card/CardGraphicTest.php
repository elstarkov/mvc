<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardGraphicTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateCard(): void
    {
        $card = new CardGraphic();
        $this->assertInstanceOf("\App\Card\CardGraphic", $card);

        $res = $card->getSpades();
        $this->assertIsString($res);

        $res = $card->getClubs();
        $this->assertIsString($res);

        $res = $card->getHearts();
        $this->assertIsString($res);

        $res = $card->getDiamonds();
        $this->assertIsString($res);

        $res = $card->getAsString();
        $this->assertEquals("[A ♠]", $res);

        $res = $card->convertToPoints("[A ♠]");
        $this->assertEquals(0, $res);
    }
}