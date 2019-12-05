<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookListingController extends AbstractController
{

    /**
     * @Route("/book/listing/new", name="century",methods="GET")
     */
    public function listNewBooks(BookRepository $repository)
    {
        return $this->render('book_listing/new.html.twig', [
            'books' => $repository->findNewBooks(),
        ]);
    }
}