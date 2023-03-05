<?php

namespace App\Controller;

use App\Entity\Plat;
use App\Form\PlatType;
use App\Repository\PlatRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    #[Route('/back', name: 'app_back')]
    public function index(): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    #[Route('/ListPlatBack', name: 'app_ListPlatBack')]
    public function ListPlat(PlatRepository $repository)
    {
        $plat = $repository->findAll();
        return $this->render("back/ListBack.html.twig", array("tabplat" => $plat));
    }

    #[Route('/updateplatBack/{id}', name: 'app_updateplatBack')]
    public function updateplatBack(\Doctrine\Persistence\ManagerRegistry $doctrine, Request $request, PlatRepository $repository, $id)
    {

        $plat = $repository->find($id);
        $form = $this->createForm(PlatType::class, $plat);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute('app_ListPlatBack');
        }
        return $this->renderForm("back/updateplattest.html.twig",array("formPlat"=>$form));
    }


    #[Route('/removePlatBack/{id}', name: 'app_removePlatBack')]
    public function removeplatback(ManagerRegistry $mg,PlatRepository $repository,$id)
    {
        $plat=$repository->find($id);
        $em = $mg->getManager();
        $em->remove($plat);
        $em->flush();
        return $this->redirectToRoute('app_ListPlatBack');
    }

    #[Route('/addplatBack', name: 'app_addplatback')]
    public function addplatBack(\Doctrine\Persistence\ManagerRegistry $doctrine, Request $request)
    {

        $plat = new Plat();
        $form = $this->createForm(PlatType::class, $plat);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->persist($plat);
            $em->flush();
            return $this->redirectToRoute('app_ListPlatBack');
        }
        return $this->renderForm("back/addplattest.html.twig",
            array("formPlat" => $form));
    }


}
