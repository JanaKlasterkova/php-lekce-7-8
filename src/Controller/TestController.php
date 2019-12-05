<?php

namespace App\Controller;

use App\Repository\ProgrammingLanguageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/test/detail", name="detail")
     */
    public function detail()
    {
        return $this->render('test/detail.html.twig', [
            'username' => 'andrejmaly',
            'password' => 'velicesložitéheslo',
            'name' => 'Andrej Malý',
            'age' => 20,
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/test/list", name="list")
     */
    public function findAll(ProgrammingLanguageRepository $repository)
    {
        return $this->render('test/list.html.twig', [
            'languages' => $repository->findAll(),
        ]);
    }
    /**
     * @Route("/test/known", name="know",methods="GET")
     */
    public function listKnown(ProgrammingLanguageRepository $repository)
    {
        return $this->render('test/known.html.twig', [
            'languages' => $repository->findKnown(),
        ]);
    }
    /**
     * @Route("/test/{name}", name="hello")
     */
    public function hello($name)
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => $name,
        ]);
    }



}
