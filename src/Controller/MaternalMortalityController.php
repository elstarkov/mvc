<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaternalMortalityController extends AbstractController
{
    #[Route('/maternal/mortality', name: 'app_maternal_mortality')]
    public function index(): Response
    {
        return $this->render('maternal_mortality/index.html.twig', [
            'controller_name' => 'MaternalMortalityController',
        ]);
    }
}
