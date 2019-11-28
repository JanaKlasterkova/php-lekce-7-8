<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeworkController extends AbstractController
{
    /**
     * @Route("/homework", name="index")
     */
    public function index()
    {
        return $this->render('homework/index.html.twig', [
            'lekce' => 8,
            'datum' => "21/11/2019" ,
        ]);
    }

    /**
     * @Route("/homework/remember", name="remember")
     */
    public function remember()
    {
        return $this->render('homework/remember.html.twig', [

        ]);
    }
    /**
     * @Route("/homework/pupils", name="pupils")
     */
    public function list()
    {
        return $this->render('homework/pupils.html.twig',
            ['pupils' => [['name' => 'Josef', 'subject'=>'zeměpis',  'grade' => 1], ['name' => 'Adam', 'subject'=>'matematika','grade' => 2],['name' => 'Eva', 'subject'=>'angličtina','grade' => 3], ['name' => 'Radka', 'subject'=>'matematika','grade' => 2]]]


        );
    }
    /**
     * @Route("/homework/pythagoras", name="pythagoras")
     */
    public function phytagoras()
    {
        return $this->render('homework/Pythagoras.html.twig',
            ['obdelnik' => ['a' => 5, 'b'=>4],
                'trojuhelnik'=> ['strana' => 6, 'uhel'=>60,'vyska'=>6*sin(deg2rad(60)) ]
                ]);

    }
}
