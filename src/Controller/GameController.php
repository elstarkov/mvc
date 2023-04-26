<?php

namespace App\Controller;

use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    #[Route("/game", name: "game", methods: ['GET'])]
    public function game(): Response
    {
        return $this->render('game/game.html.twig');
    }

    #[Route("/game/ace", name: "ace", methods: ['GET'])]
    public function acePoints(
        SessionInterface $session,
    ): Response {
        $data = [
            "playerP" => $session->get("playerPoints"),
        ];

        return $this->render('game/ace.html.twig', $data);
    }

    #[Route("/game/ace/post", name: "post_ace", methods: ['POST'])]
    public function postAcePoints(
        SessionInterface $session,
        Request $request
    ): Response {
        $playerPoints = $session->get("playerPoints");
        $ace = $request->request->get('points');

        $session->set("playerPoints", $playerPoints + intval($ace));

        if ($playerPoints + intval($ace) > 21) {
            return $this->redirectToRoute('new_game');
        }

        return $this->redirectToRoute('game_play');
    }

    #[Route("/game/new", name: "new_game", methods: ['GET'])]
    public function newGame(
        SessionInterface $session
    ): Response {

        $playerPoints = $session->get("playerPoints");
        $bankPoints = $session->get("bankPoints");
        $bankHand = $session->get("bankHand");
        $playerHand = $session->get("playerHand");

        $winner = "BANK";

        if ($playerPoints > 21) {
            $winner = "BANK";
        } elseif ($bankPoints > 21) {
            $winner = "SPELARE";
        } elseif (abs(21 - $playerPoints) < abs(21 - $bankPoints)) {
            $winner = "SPELARE";
        }

        $data = [
            "playerP" => $playerPoints,
            "bankP" => $bankPoints,
            "winner" => $winner,
            "bankHand" => $bankHand->printHand(),
            "playerHand" => $playerHand->printHand(),
        ];

        return $this->render('game/new.html.twig', $data);
    }

    #[Route("/game/new", name: "post_new_game", methods: ['POST'])]
    public function postNewGame(): Response
    {
        return $this->redirectToRoute('new_game');
    }

    #[Route("/game", name: "game_post", methods: ['POST'])]
    public function gamePost(
        SessionInterface $session
    ): Response {

        $deck = new DeckOfCards();

        $bankHand = new CardHand();
        $playerHand = new CardHand();

        $session->set("playerPoints", 0);
        $session->set("bankPoints", 0);

        $session->set("playerHand", $playerHand);
        $session->set("bankHand", $bankHand);

        $session->set("deck", $deck);

        return $this->redirectToRoute('game_play');
    }

    #[Route("/game/play", name: "game_play", methods: ['GET'])]
    public function gamePlay(
        SessionInterface $session
    ): Response {

        $deck = $session->get("deck");
        $playerHand = $session->get("playerHand");
        $bankHand = $session->get("bankHand");
        $playerPoints = $session->get("playerPoints");
        $bankPoints = $session->get("bankPoints");

        if ($playerPoints > 21 || $bankPoints > 21) {
            return $this->redirectToRoute('new_game');
        }

        $data = [
            "playerP" => $session->get("playerPoints"),
            "bankP" => $session->get("bankPoints"),
            "remain" => $deck->getRemain(),
            "print" => $playerHand->printHand(),
            "playerHand" =>$playerHand->getHand(),
            "printBank" => $bankHand->printHand(),
            "playerCard" => $session->get("drawnCard"),
        ];

        return $this->render('game/play.html.twig', $data);
    }

    #[Route("/game/play/draw", name: "draw_card", methods: ['POST'])]
    public function drawCard(
        SessionInterface $session
    ): Response {
        $deck = $session->get("deck");
        $playerHand = $session->get("playerHand");
        $bankHand = $session->get("bankHand");
        $playerPoints = $session->get("playerPoints");

        while (true) {
            $playerCard = new CardGraphic();
            $playerCard->getRandCard();
            $val = $playerCard->getAsString();

            if (!in_array($val, $playerHand->getHand()) && !in_array($val, $bankHand->getHand())) {
                $deck->modifyDeck($val);
                $playerHand->add($val);
                $pointsToAdd = $playerCard->convertToPoints($val);
                if ($pointsToAdd === 0) {
                    return $this->redirectToRoute('ace');
                }
                $playerPoints += $pointsToAdd;
                $session->set("playerPoints", $playerPoints);
                break;
            }
        }
        return $this->redirectToRoute('game_play');
    }

    #[Route("/game/play/stay", name: "stay", methods: ['POST'])]
    public function stay(
        SessionInterface $session
    ): Response {
        $deck = $session->get("deck");
        $bankHand = $session->get("bankHand");
        $playerHand = $session->get("playerHand");
        $bankPoints = $session->get("bankPoints");

        while ($bankPoints <= 17) {
            $bankCard = new CardGraphic();
            $bankCard->getRandCard();
            $val = $bankCard->getAsString();

            if (!in_array($val, $bankHand->getHand()) && !in_array($val, $playerHand->getHand())) {
                $deck->modifyDeck($val);
                $bankHand->add($val);
                $pointsToAdd = $bankCard->convertToPoints($val);
                if (($pointsToAdd === 0) && ($bankPoints <= 7)) {
                    $pointsToAdd = 14;
                } elseif (($pointsToAdd === 0) && ($bankPoints > 7)) {
                    $pointsToAdd = 1;
                }
                $bankPoints += $pointsToAdd;
                $session->set("bankPoints", $bankPoints);
            }
        }
        return $this->redirectToRoute('new_game');
    }

    #[Route("/game/doc", name: "doc")]
    public function doc(): Response
    {
        return $this->render('game/doc.html.twig');
    }

}
