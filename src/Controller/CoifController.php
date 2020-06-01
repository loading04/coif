<?php

namespace App\Controller;

use App\Entity\Coif;
use App\Form\CoifType;
use App\Repository\CoifRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/coif")
 */
class CoifController extends AbstractController
{
    /**
     * @Route("/", name="coif_index", methods={"GET"})
     */
    public function index(CoifRepository $coifRepository): Response
    {
        return $this->render('coif/index.html.twig', [
            'coifs' => $coifRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="coif_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $coif = new Coif();
        $form = $this->createForm(CoifType::class, $coif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($coif);
            $entityManager->flush();

            return $this->redirectToRoute('coif_index');
        }

        return $this->render('coif/new.html.twig', [
            'coif' => $coif,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="coif_show", methods={"GET"})
     */
    public function show(Coif $coif): Response
    {
        return $this->render('coif/show.html.twig', [
            'coif' => $coif,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="coif_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Coif $coif): Response
    {
        $form = $this->createForm(CoifType::class, $coif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('coif_index');
        }

        return $this->render('coif/edit.html.twig', [
            'coif' => $coif,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="coif_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Coif $coif): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coif->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($coif);
            $entityManager->flush();
        }

        return $this->redirectToRoute('coif_index');
    }
}
