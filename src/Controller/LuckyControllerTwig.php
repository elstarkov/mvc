<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller for lucky, home, report and about
 */
class LuckyControllerTwig extends AbstractController
{
    #[Route("/lucky", name: "lucky")]
    /**
     * Renders the lucky url. Returns a random background color
     */
    public function number(): Response
    {
        $number = random_int(0, 100);
        $red = random_int(0, 255);
        $green = random_int(0, 255);
        $blue = random_int(0, 255);
        $color = "rgb($red, $green, $blue)";

        $data = [
            'number' => $number,
            'color' => $color
        ];

        return $this->render('lucky_number.html.twig', $data);
    }

    #[Route("/", name: "home")]
    /**
     * Renders the home url
     */
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route("/report", name: "report")]
    /**
     * Renders the report url
     */
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/about", name: "about")]
    /**
     * Renders the about url
     */
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }
}
