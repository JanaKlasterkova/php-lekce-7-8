<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FierceKangarooController extends AbstractController
{
    /**
     * @Route("/fierce/kangaroo", name="fierce_kangaroo")
     */
    public function index()
    {
        return $this->render('fierce_kangaroo/index.html.twig', [
            'controller_name' => 'FierceKangarooController',
        ]);
    }
}
