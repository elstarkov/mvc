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
        // $title = $session->get('title');
        // $isbn = $session->get('isbn');
        // $author = $session->get('author');
        // $image = $session->get('image');

        // if ($title === null) {
        //     $title = '';
        // }

        // if ($isbn === null) {
        //     $isbn = '';
        // }

        // if ($author === null) {
        //     $author = '';
        // }

        // if ($image === null) {
        //     $image = '';
        // }

        // $data = [
        //     'title' => $title,
        //     'isbn' => $isbn,
        //     'author' => $author,
        //     'image' => $image,
        // ];

        return $this->render('book/index.html.twig');
    }

    #[Route('/library/create', name: 'book_create', methods: ['GET'])]
    public function createBook(
    ): Response {

        return $this->render('book/create.html.twig');
    }

    #[Route('/library/create', name: 'post_create', methods: ['POST'])]
    public function PostCreateBook(
        SessionInterface $session,
        Request $request,
        ManagerRegistry $doctrine
    ): Response {

        // $session->set("title", $request->get('title'));
        // $session->set("isbn", $request->get('isbn'));
        // $session->set("author", $request->get('author'));
        // $session->set("image", $request->get('image'));

        $entityManager = $doctrine->getManager();

        $book = new Book();
        $book->setTitle($request->get('title'));
        $book->setIsbn($request->get('isbn'));
        $book->setAuthor($request->get('author'));
        //$book->setImage($request->get('image'));
    
        $entityManager->persist($book);
    
        $entityManager->flush();

        return $this->redirectToRoute('library');
    }

    #[Route('/library/show', name: 'book_show_all')]
    public function showAllBooks(
        bookRepository $bookRepository
    ): Response {

        $books = $bookRepository->findAll();

        $data = [
            'books' => $books,
        ];

        return $this->render('book/show_all.html.twig', $data);
    }

    #[Route('/library/api', name: 'api_books')]
    public function apiBooks(
        bookRepository $bookRepository
    ): Response {
        $books = $bookRepository
            ->findAll();

        //return $this->json($books);
        $response = $this->json($books);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
