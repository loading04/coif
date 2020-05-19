<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BarberController extends AbstractController
{
    /**
     * @Route("/barber", name="barber")
     */
    public function index()
    {
        return $this->render('barber/index.html.twig', [
            'controller_name' => 'BarberController',
        ]);
    }
}
