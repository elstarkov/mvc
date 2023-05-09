<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class BookController extends AbstractController
{
    #[Route('/library', name: 'library', methods: ['GET'])]
    public function index(
        SessionInterface $session,
    ): Response
    {
        $title = $session->get('title');

        if ($title === null) {
            $title = '';
        }

        $data = [
            'title' => $title,
        ];

        return $this->render('book/index.html.twig', $data);
    }

    #[Route('/library/create', name: 'book_create', methods: ['GET'])]
    public function createBook(
    ): Response {

        return $this->render('book/create.html.twig');
    }

    #[Route('/library/create', name: 'post_create', methods: ['POST'])]
    public function PostCreateBook(
        SessionInterface $session,
        Request $request
    ): Response {

        $session->set("title", $request->get('title'));

        return $this->redirectToRoute('library');
    }
}
