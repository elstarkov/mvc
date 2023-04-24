<?php

namespace App\Controller;

use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    #[Route("/game", name: "game", methods: ['GET'])]
    public function game(): Response
    {
        return $this->render('game/game.html.twig');
    }

    #[Route("/game/new", name: "new_game", methods: ['GET'])]
    public function NewGame(): Response
    {
        return $this->render('game/new.html.twig');
    }

    #[Route("/game", name: "game_post", methods: ['POST'])]
    public function gamePost(
        SessionInterface $session
    ): Response
    {

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
    ): Response
    {

        $deck = $session->get("deck");
        $playerHand = $session->get("playerHand");
        $bankHand = $session->get("bankHand");

        if ($deck->getRemain() == 0) {
            $session->remove("deck");
            $session->remove("playerHand");
            $session->remove("bankHand");
            $session->remove("playerPoints");
            $session->remove("bankPoints");
            return $this->redirectToRoute('new_game');
        } else {
            $data = [
                "playerP" => $session->get("playerPoints"),
                "bankP" => $session->get("bankPoints"),
                "remain" => $deck->getRemain(),
                "print" => $playerHand->printHand(),
                "playerHand" =>$playerHand->getHand(),
                "printBank" => $bankHand->printHand(),
            ];

            return $this->render('game/play.html.twig', $data);
        }
    }

    #[Route("/game/play/draw", name: "draw_card", methods: ['POST'])]
    public function drawCard(
        SessionInterface $session
    ): Response
    {
        $deck = $session->get("deck");
        $playerHand = $session->get("playerHand");
        $bankHand = $session->get("bankHand");
        $playerPoints = $session->get("playerPoints");

        while (true) {
            $playerCard = new CardGraphic();
            $playerCard->getRandCard();
            $val = $playerCard->getAsString();

            if (in_array($val, $playerHand->getHand())) {
                continue;
            } elseif (in_array($val, $bankHand->getHand())) {
                continue;
            } else {
                $deck->modifyDeck($val);
                $playerHand->add($val);
                $pointsToAdd = $playerCard->convertToPoints($val);
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
    ): Response
    {
        $deck = $session->get("deck");
        $bankHand = $session->get("bankHand");
        $playerHand = $session->get("playerHand");
        $bankPoints = $session->get("bankPoints");

        while (true) {
            $bankCard = new CardGraphic();
            $bankCard->getRandCard();
            $val = $bankCard->getAsString();

            if (in_array($val, $bankHand->getHand())) {
                continue;
            } elseif (in_array($val, $playerHand->getHand())) {
                continue;
            } else {
                $deck->modifyDeck($val);
                $bankHand->add($val);
                $pointsToAdd = $bankCard->convertToPoints($val);
                $bankPoints += $pointsToAdd;
                $session->set("bankPoints", $bankPoints);
                break;
            }
        }

        return $this->redirectToRoute('game_play');
    }

    #[Route("/game/doc", name: "doc")]
    public function doc(): Response
    {
        return $this->render('game/doc.html.twig');
    }

}