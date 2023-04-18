<?php

namespace App\Controller;

use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardsController extends AbstractController
{
    #[Route("/card", name: "card")]
    public function card(): Response
    {

        return $this->render('card/card.html.twig');
    }

    #[Route("/card/deck", name: "deck")]
    public function deck(): Response
    {

        $card = new CardGraphic();

        $data = [
            "spades" => $card->getSpades(),
            "clubs" => $card->getClubs(),
            "hearts" => $card->getHearts(),
            "diamonds" => $card->getDiamonds(),
        ];
        return $this->render('card/deck.html.twig', $data);
    }


    #[Route("/card/deck/shuffle", name: "shuffle")]
    public function randomizedDeck(
        SessionInterface $session
    ): Response {
        if ($session->has("deck")) {
            $session->remove("deck");
        }

        if ($session->has("hand")) {
            $session->remove("hand");
        }

        $deck = new DeckOfCards();
        $hand = new CardHand();

        $session->set("deck", $deck);
        $session->set("hand", $hand);

        $data = [
            "newDeck" => $deck->shuffleDeck(),
        ];
        return $this->render('card/shuffle.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "draw")]
    public function deckDraw(
        SessionInterface $session
    ): Response {
        if ($session->has("deck")) {
            $deck = $session->get("deck"); //new DeckOfCards();
        } else {
            $deck = new DeckOfCards();
            $session->set("deck", $deck);
        }

        if ($session->has("hand")) {
            $hand = $session->get("hand"); //new CardHand();
        } else {
            $hand = new CardHand();
            $session->set("hand", $hand);
        }

        while (true) {
            $card = new CardGraphic();
            $card->getRandCard();
            $val = $card->getAsString();

            if (in_array($val, $hand->getHand())) {
                continue;
            //$remain = $deck->getRemain();
            } else {
                $deck->modifyDeck($val);
                $hand->add($val);
                break;
            }
        }
        //var_dump($hand->getHand());

        $remain = $deck->getRemain();

        if ($remain == 0) {
            $session->remove("deck");
            $session->remove("hand");
        }

        $data = [
            "cards" => $hand->printHand(),
            "count" => $remain,
        ];

        return $this->render('card/draw.html.twig', $data);
    }

    #[Route("/card/deck/draw/{num<\d+>}", name: "draw_number")]
    public function drawDeckNumbers(
        int $num,
        SessionInterface $session
    ): Response {
        if ($num > 52) {
            throw new \Exception("Can draw more than 52 cards!");
        }

        if ($session->has("deck")) {
            $deck = $session->get("deck"); //new DeckOfCards();
        } else {
            $deck = new DeckOfCards();
            $session->set("deck", $deck);
        }

        if ($session->has("hand")) {
            $hand = $session->get("hand"); //new CardHand();
        } else {
            $hand = new CardHand();
            $session->set("hand", $hand);
        }

        $getCards = [];
        $remain = $deck->getRemain();

        while (count($getCards) < $num) {
            $card = new CardGraphic();
            $card->getRandCard();
            $val = $card->getAsString();
            $remain = $deck->getRemain();
            //var_dump($val);

            if (in_array($val, $hand->getHand()) || in_array($val, $getCards)) {
                continue;
            } else {
                $deck->modifyDeck($val);
                $getCards[] = $val;
                $hand->add($val);
                $remain = $deck->getRemain();
                if ($remain == 0) {
                    $session->remove("deck");
                    $session->remove("hand");
                    $this->addFlash(
                        'notice',
                        'All cards have been drawn from the deck!'
                    );
                    return $this->redirectToRoute('draw_number', ['num' => 0]);
                }
            }
        }

        $data = [
            "recently" => $getCards,
            "cards" => $hand->printHand(),
            "numCards" => $remain,
        ];

        return $this->render('card/draw_number.html.twig', $data);
    }
}
