<?php

namespace App\Controller;

//use App\Controller\GameController;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class GameController.
 */
class GameControllerTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testGameController(): void
    {

        $gameController = new GameController();
        $this->assertTrue(
            method_exists($gameController, 'game'),
        );
    }
}