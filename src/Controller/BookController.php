<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/library', name: 'library', methods: ['GET'])]
    public function index(
    ): Response
    {
        return $this->render('book/index.html.twig');
    }

    #[Route('/library/create', name: 'book_create', methods: ['GET'])]
    public function createBook(
    ): Response {

        return $this->render('book/create.html.twig');
    }

    #[Route('/library/create', name: 'post_create', methods: ['POST'])]
    public function PostCreateBook(
        Request $request,
        ManagerRegistry $doctrine
    ): Response {

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

    #[Route('/library/show', name: 'book_show_all', methods: ['GET'])]
    public function showAllBooks(
        BookRepository $bookRepository
    ): Response {

        $books = $bookRepository->findAll();

        $data = [
            'books' => $books,
        ];

        return $this->render('book/show_all.html.twig', $data);
    }

    #[Route('/library/show/{id}', name: 'book_id', methods: ['GET'])]
    public function showBookById(
        BookRepository $bookRepository,
        int $id
    ): Response {

        $book = $bookRepository->find($id);

        $data = [
            'book' => $book,
        ];

        return $this->render('book/show_one.html.twig', $data);
    }

    #[Route('/library/update/{id}', name: 'book_update', methods: ['GET'])]
    public function updateBook(
        BookRepository $bookRepository,
        int $id
    ): Response {

        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $data = [
            'book' => $book,
        ];

        return $this->render('book/update.html.twig', $data);
    }

    #[Route('/library/update/post/{id}', name: 'post_book_update', methods: ['POST'])]
    public function postUpdateBook(
        BookRepository $bookRepository,
        Request $request,
        int $id
    ): Response {

        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book$book found for id '.$id
            );
        }

        $book->setTitle($request->get('title'));
        $book->setIsbn($request->get('isbn'));
        $book->setAuthor($request->get('author'));

        $bookRepository->save($book, true);

        return $this->redirectToRoute('book_show_all');
    }

    #[Route('/library/delete/{id}', name: 'book_delete', methods: ['GET'])]
    public function deleteBook(
        BookRepository $bookRepository,
        int $id
    ): Response {

        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book$book found for id '.$id
            );
        }

        $data = [
            'book' => $book,
        ];

        return $this->render('book/delete.html.twig', $data);
    }

    #[Route('/library/delete/post/{id}', name: 'post_book_delete', methods: ['POST'])]
    public function postDeleteBook(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $bookRepository->remove($book, true);

        return $this->redirectToRoute('book_show_all');
    }
}
