<?php

namespace App\Controller;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/customer", name="index",methods="GET")
     */
    public function index()
    {
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }

    /**
     * @Route("/customer/detail/{id}", name="detail",methods="GET")
     */
    public function detail($id)
    {if (ctype_digit($id))
    {
        return $this->render('customer/detail.html.twig', [
            'id' => $id,
        ]);
    }
    else
        {
            return $this->render('customer/chyba.html.twig', [
                'id' => $id,
            ]);
        }
    }
}
