<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\Persistence\ManagerRegistry;

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
        $isbn = $session->get('isbn');
        $author = $session->get('author');

        if ($title === null) {
            $title = '';
        }

        if ($isbn === null) {
            $isbn = '';
        }

        if ($author === null) {
            $author = '';
        }

        $data = [
            'title' => $title,
            'isbn' => $isbn,
            'author' => $author,
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
        $session->set("isbn", $request->get('isbn'));
        $session->set("author", $request->get('author'));

        return $this->redirectToRoute('library');
    }
}
