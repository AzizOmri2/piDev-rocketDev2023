<?php

namespace App\Controller;

use App\Entity\Competition;
use App\Form\CompetitionType;
use App\Repository\CompetitionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/competition')]
class CompetitionController extends AbstractController
{

    #[Route('/', name: 'app_competition_index', methods: ['GET'])]
    public function index(CompetitionRepository $competitionRepository): Response
    {
        return $this->render('competition/index.html.twig', [
            'competitions' => $competitionRepository->findAll(),
        ]);
    }

        // route pour front 
    #[Route('/viewFront', name: 'app_competition_showFront', methods: ['GET'])]
    public function FrontView(CompetitionRepository $competitionRepository): Response
    {
        return $this->render('competition/viewFront.html.twig', [
            'competitions' => $competitionRepository->findAll(),
        ]);
    }

    #[Route('/viewFront/{id}', name: 'app_competition_Front', methods: ['GET'])]
    public function showFront(Competition $competition): Response
    {
        return $this->render('competition/showFront.html.twig', [
            'competition' => $competition,
        ]);
    }

    // End route Front
    

    #[Route('/new', name: 'app_competition_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CompetitionRepository $competitionRepository): Response
    {
        $competition = new Competition();
        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $competitionRepository->save($competition, true);

            return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('competition/new.html.twig', [
            'competition' => $competition,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/reserver', name: 'app_competition_reserver', methods: ['POST','GET'])]
    public function reserver(request $request,CompetitionRepository $competitionRepository, EntityManagerInterface $entityManager ,Competition $competition): Response
    {   
        if($competition->getNbrMaxInscrit() > 0)
        {
            $competition->setEtatCompetition("disponible");
            $competition->setNbrMaxInscrit($competition->getNbrMaxInscrit()-1);
            $competition->setNbrParticipant($competition->getNbrParticipant()+1);
        }
        else
        {
            $competition->setEtatCompetition("non disponible");
        }
       
        $entityManager->persist($competition);
        $entityManager->flush();
        
        return $this->render('competition/showFront.html.twig', [
            'competition' => $competition,
        ]);
    }


    #[Route('/{id}', name: 'app_competition_show', methods: ['GET'])]
    public function show(Competition $competition): Response
    {
        return $this->render('competition/show.html.twig', [
            'competition' => $competition,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_competition_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Competition $competition, CompetitionRepository $competitionRepository): Response
    {
        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $competitionRepository->save($competition, true);

            return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('competition/edit.html.twig', [
            'competition' => $competition,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_competition_delete', methods: ['POST'])]
    public function delete(Request $request, Competition $competition, CompetitionRepository $competitionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competition->getId(), $request->request->get('_token'))) {
            $competitionRepository->remove($competition, true);
        }

        return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
    }

}





