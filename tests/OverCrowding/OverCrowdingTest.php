<?php

namespace App\Entity;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardGraphic.
 */
class OvercrowdingTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testOvercrowding(): void
    {
        $overcrowd = new Overcrowding();
        $this->assertInstanceOf("\App\Entity\Overcrowding", $overcrowd);

        $overcrowd->setCountry("TestGhana");
        $res = $overcrowd->getCountry();

        $overcrowd->setCategory("TestCategory");
        $category = $overcrowd->getCategory();

        $overcrowd->setAmount(1337);
        $amount = $overcrowd->getAmount();

        $id = $overcrowd->getId();

        $this->assertEquals($res, "TestGhana");
        $this->assertEquals($category, "TestCategory");
        $this->assertEquals($amount, 1337);
        $this->assertEquals($id, Null);
    }
}