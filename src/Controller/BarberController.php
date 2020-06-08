<?php

namespace App\Controller;

use App\Repository\CoifRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BarberController extends AbstractController
{
    /**
     * @Route("/barber", name="barber" ,  methods={"GET"})
     */
    public function index(CoifRepository $coifRepository): Response
    {
        return $this->render('coif/index.html.twig', [
            'coifs' => $coifRepository->findByExampleField("Femme"),
        ]);
    }
}
