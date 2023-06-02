<?php

namespace App\Entity;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardGraphic.
 */
class MaternalMortalityTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testMaternalMortality(): void
    {
        $mortality = new MaternalMortality();
        $this->assertInstanceOf("\App\Entity\MaternalMortality", $mortality);

        $mortality->setYear(2055);
        $year = $mortality->getYear();

        $mortality->setRate(17);
        $rate = $mortality->getRate();

        $id = $mortality->getId();

        $this->assertEquals($year, 2055);
        $this->assertEquals($rate, 17);
        $this->assertEquals($id, Null);
    }
}