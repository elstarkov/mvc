<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;

class ControllerJson extends AbstractController
{
    #[Route("/api", name: "api")]
    public function api(): Response
    {
        return $this->render('api/api.html.twig');
    }

    #[Route("/api/deck", name: "a_deck", methods: ['GET'])]
    public function apiDeck(): Response
    {

        $card = new CardGraphic();

        $data = [
            "spades" => $card->getSpades(),
            "clubs" => $card->getClubs(),
            "hearts" => $card->getHearts(),
            "diamonds" => $card->getDiamonds(),
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/deck/shuffle", name: "api_shuffle", methods: ['GET'])]
    public function getApiShuffle(
    ): Response {
        return $this->render('api/api.shuffle.html.twig');
    }

    #[Route("/api/deck/shuffle", name: "a_shuffle", methods: ['POST'])]
    public function postApiShuffle(
        SessionInterface $session
    ): Response {
        if ($session->has("apiDeck")) {
            $session->remove("apiDeck");
        }

        if ($session->has("apiHand")) {
            $session->remove("apiHand");
        }

        $deck = new DeckOfCards();
        $hand = new CardHand();

        $session->set("apiDeck", $deck);
        $session->set("apiHand", $hand);

        $data = [
            "newDeck" => $deck->shuffleDeck(),
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/deck/draw/{num<\d+>}", name: "a_draw_number", methods: ['POST'])]
    public function postApiDrawNumber(
        int $num,
        SessionInterface $session
    ): Response {
        if ($num > 52) {
            throw new \Exception("Can draw more than 52 cards!");
        }

        if ($session->has("apiDeck")) {
            $deck = $session->get("apiDeck"); //new DeckOfCards();
        } else {
            $deck = new DeckOfCards();
            $session->set("apiDeck", $deck);
        }

        if ($session->has("apiHand")) {
            $hand = $session->get("apiHand"); //new CardHand();
        } else {
            $hand = new CardHand();
            $session->set("apiHand", $hand);
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
                    $session->remove("apiDeck");
                    $session->remove("apiHand");
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

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/deck/draw", name: "a_draw", methods: ['POST'])]
    public function postApiDraw(
        SessionInterface $session
    ): Response {
        if ($session->has("apiDeck")) {
            $deck = $session->get("apiDeck"); //new DeckOfCards();
        } else {
            $deck = new DeckOfCards();
            $session->set("apiDeck", $deck);
        }

        if ($session->has("apiHand")) {
            $hand = $session->get("apiHand"); //new CardHand();
        } else {
            $hand = new CardHand();
            $session->set("apiHand", $hand);
        }

        while (true) {
            $card = new CardGraphic();
            $card->getRandCard();
            $val = $card->getAsString();

            if (in_array($val, $hand->getHand())) {
                continue;
            } else {
                $deck->modifyDeck($val);
                $hand->add($val);
                break;
            }
        }

        $remain = $deck->getRemain();

        if ($remain == 0) {
            $session->remove("apiDeck");
            $session->remove("apiHand");
        }

        $data = [
            "cards" => $hand->printHand(),
            "count" => $remain,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/quote", name: "quote")]
    public function jsonNumber(): Response
    {
        $number = random_int(0, 3);
        date_default_timezone_set('Europe/Stockholm');

        $today = date('Y-m-d H:i');

        if ($number == 0) {
            $message = "The only true wisdom is knowing that you know nothing.";
        } elseif ($number == 1) {
            $message = "The road to success and the road to failure are almost exactly the same.";
        } elseif ($number == 2) {
            $message = "Do what you can, with what you have, where you are.";
        } else {
            $message = "Either you run the day, or the day runs you.";
        }

        $data = [
            'today' => $today,
            'quote' => $message,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
        //return new JsonResponse($data);
    }

    #[Route("/game/api", name: "api_game", methods: ['GET'])]
    public function gameApiPlay(
        SessionInterface $session
    ): Response {

        $playerHand = $session->get("playerHand");
        $bankHand = $session->get("bankHand");

        $data = [
            "bankPoints" => $session->get("bankPoints"),
            "bankCards" => $bankHand->printHand(),
            "playerPoints" => $session->get("playerPoints"),
            "playerCards" => $playerHand->printHand(),
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
