<?php

namespace App\Card;

class CardGraphic extends Card
{
    /** @var array<mixed> */
    private array $deck = [
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

    /** @var array<mixed> */
    private array $cardValues = [
        "[A \xE2\x99\xA0]" => 0,
        "[2 \xE2\x99\xA0]" => 2, "[3 \xE2\x99\xA0]"  => 3,
        "[4 \xE2\x99\xA0]"  => 4, "[5 \xE2\x99\xA0]"  => 5,
        "[6 \xE2\x99\xA0]"  => 6, "[7 \xE2\x99\xA0]"  => 7,
        "[8 \xE2\x99\xA0]"  => 8, "[9 \xE2\x99\xA0]"  => 9,
        "[10 \xE2\x99\xA0]"  => 10, "[J \xE2\x99\xA0]"  => 11,
        "[Q \xE2\x99\xA0]" => 12, "[K \xE2\x99\xA0]"  => 13,

        "[A \xE2\x99\xA3]" => 0,
        "[2 \xE2\x99\xA3]"  => 2, "[3 \xE2\x99\xA3]" => 3,
        "[4 \xE2\x99\xA3]" => 4, "[5 \xE2\x99\xA3]" => 5,
        "[6 \xE2\x99\xA3]" => 6, "[7 \xE2\x99\xA3]" => 7,
        "[8 \xE2\x99\xA3]" => 8, "[9 \xE2\x99\xA3]" => 9,
        "[10 \xE2\x99\xA3]" => 10, "[J \xE2\x99\xA3]" => 11,
        "[Q \xE2\x99\xA3]" => 12, "[K \xE2\x99\xA3]" => 13,

        "[A \xE2\x99\xA5]" => 0,
        "[2 \xE2\x99\xA5]" => 2, "[3 \xE2\x99\xA5]" => 3,
        "[4 \xE2\x99\xA5]" => 4, "[5 \xE2\x99\xA5]" => 5,
        "[6 \xE2\x99\xA5]" => 6, "[7 \xE2\x99\xA5]" => 7,
        "[8 \xE2\x99\xA5]" => 8, "[9 \xE2\x99\xA5]" => 9,
        "[10 \xE2\x99\xA5]" => 11, "[J \xE2\x99\xA5]" => 11,
        "[Q \xE2\x99\xA5]" => 12, "[K \xE2\x99\xA5]" => 13,

        "[A \xE2\x99\xA6]" => 0,
        "[2 \xE2\x99\xA6]" => 2, "[3 \xE2\x99\xA6]" => 3,
        "[4 \xE2\x99\xA6]" => 4, "[5 \xE2\x99\xA6]" => 5,
        "[6 \xE2\x99\xA6]" => 6, "[7 \xE2\x99\xA6]" => 7,
        "[8 \xE2\x99\xA6]" => 8, "[9 \xE2\x99\xA6]" => 9,
        "[10 \xE2\x99\xA6]" => 10, "[J \xE2\x99\xA6]" => 11,
        "[Q \xE2\x99\xA6]" => 12, "[K \xE2\x99\xA6]" => 13,
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function getSpades(): string
    {
        $spades = array_slice($this->deck, 0, 13);
        return implode(' ', $spades);
    }

    public function getClubs(): string
    {
        $clubs = array_slice($this->deck, 13, 13);
        return implode(' ', $clubs);
    }

    public function getHearts(): string
    {
        $hearts = array_slice($this->deck, 26, 13);
        return implode(' ', $hearts);
    }

    public function getDiamonds(): string
    {
        $diamonds = array_slice($this->deck, 39, 13);
        return implode(' ', $diamonds);
    }

    public function getAsString(): string
    {
        return $this->deck[$this->value];
    }

    public function convertToPoints(string $card): int
    {
        foreach ($this->cardValues as $key => $value) {
            if ($key === $card) {
                return $value;
            }
        }
        return 0;
    }
}
