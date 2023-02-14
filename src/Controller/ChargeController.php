<?php

namespace App\Controller;

use App\Entity\Charge;
use App\Form\ChargeType;
use App\Repository\ChargeRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/charge')]
class ChargeController extends AbstractController
{
    #[Route('/', name: 'app_charge_index', methods: ['GET'])]
    public function index(ChargeRepository $chargeRepository): Response
    {
        return $this->render('charge/index.html.twig', [
            'charges' => $chargeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_charge_new', methods: ['GET', 'POST'])]
    public function new(Request $request,EntityManagerInterface $em, ChargeRepository $chargeRepository): Response
    {
        $charge = new Charge();
        $form = $this->createForm(ChargeType::class, $charge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chargeRepository->save($charge, true);
            $materiel = $charge->getMateriel();
            $materiel->setQuantiteMateriel($materiel->getQuantiteMateriel()+$charge->getQuantiteCharge());
            $em->persist($materiel);
            $em->flush();

            return $this->redirectToRoute('app_charge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('charge/new.html.twig', [
            'charge' => $charge,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_charge_show', methods: ['GET'])]
    public function show(Charge $charge): Response
    {
        return $this->render('charge/show.html.twig', [
            'charge' => $charge,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_charge_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Charge $charge, EntityManagerInterface $em,ChargeRepository $chargeRepository): Response
    {
        $form = $this->createForm(ChargeType::class, $charge);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $chargeRepository->save($charge, true);
            //get materiel de this charge
            $materiel = $charge->getMateriel();
            //get les charges   affecté a ce materiel
            $charges = $materiel->getCharges();
            //à stocker
            $qtt = 0;
            foreach($charges as $charge){
                // parcourir la liste des charges pour ce materiel en ajoutant leurs valeur de qtt et les stocker dans la variable qtt
                $qtt+= $charge->getQuantiteCharge();
            }
            //affecter la noyuvelle valeur du qtt
            $materiel->setQuantiteMateriel($qtt);
            //stocké le infos dans le EntityManager
            $em->persist($materiel);
            //abaath le DB
            $em->flush();
            return $this->redirectToRoute('app_charge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('charge/edit.html.twig', [
            'charge' => $charge,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_charge_delete', methods: ['POST'])]
    public function delete(Request $request, Charge $charge, EntityManagerInterface $em, ChargeRepository $chargeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$charge->getId(), $request->request->get('_token'))) {
            $materiel = $charge->getMateriel();
            $materiel->setQuantiteMateriel($materiel->getQuantiteMateriel()-$charge->getQuantiteCharge());
            $em->persist($materiel);
            $chargeRepository->remove($charge, true);

            $em->flush();
        }

        return $this->redirectToRoute('app_charge_index', [], Response::HTTP_SEE_OTHER);
    }
}
