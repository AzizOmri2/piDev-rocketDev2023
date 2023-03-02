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
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use DateTime;




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

    ////////////////////Json/////////////////////
    #[Route('/CompetitionsJson', name: 'app_competition_json')]
    public function getCompetitions(CompetitionRepository $repo, NormalizerInterface $normalizer)
    { 
            $competitions = $repo->findAll();
            $competitionNormalises = $normalizer->normalize($competitions,'json', ['groups' => "competitions"]);
            $json=json_encode($competitionNormalises);
            return new Response($json);
    }

        // route pour front 
    #[Route('/viewFront', name: 'app_competition_showFront', methods: ['GET'])]
    public function FrontView(CompetitionRepository $competitionRepository, EntityManagerInterface $entityManager): Response
    {
        $now= new \DateTime();
        $competitions=$competitionRepository->findAll();
        foreach($competitions as $competition)
        {
            if($competition->getDateCompetition()<$now)
            {
                $competition->setEtatCompetition("non disponible");
            }
            else
            {
                $competition->setEtatCompetition("disponible");
            }
        }

        $entityManager->persist($competition);
        $entityManager->flush();

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

    ////////////////////////json////////////////////////
    #[Route('/newJson', name: 'app_competition_newJson')]
    public function newJson(Request $request, NormalizerInterface $normalizer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $competition = new Competition();
        $dateString=$request->get('dateCompetition');
        $compDate=new DateTime($dateString);
        $competition->setNomCompetition($request->get('nomCompetition'));
        $competition->setFraisCompetition($request->get('fraisCompetition'));
        $competition->setDateCompetition($compDate);
        $competition->setNbrMaxInscrit($request->get('nbrMaxInscrit'));
        $competition->setNbrParticipant($request->get('nbrParticipant'));
        $competition->setEtatCompetition($request->get('etatCompetition'));

        $em->persist($competition);
        $em->flush();

        $jsonContent = $normalizer->normalize($competition,'json',['groups'=>'competitions']);
        return new Response(json_encode($jsonContent));
    }
    

    #[Route('/{id}/reserver', name: 'app_competition_reserver', methods: ['POST','GET'])]
    public function reserver(request $request,CompetitionRepository $competitionRepository, EntityManagerInterface $entityManager ,Competition $competition): Response
    { 
        $now= new \DateTime();  
    
        if(($competition->getNbrMaxInscrit() > 0)||($competition->getDateCompetition()>$now))
        {
            $competition->setEtatCompetition("disponible");
            $competition->setNbrMaxInscrit($competition->getNbrMaxInscrit()-1);
            $competition->setNbrParticipant($competition->getNbrParticipant()+1);
            $entityManager->persist($competition);
            $entityManager->flush();
        }
        else      
            $competition->setEtatCompetition("non disponible");
        if (($competition->getEtatCompetition() == 'non disponible')||($competition->getNbrMaxInscrit() == 0)||($competition->getDateCompetition()<$now)) 
        {
            return $this->render('competition/notAvailable.html.twig');
        }
        else
        return $this->redirectToRoute('app_competition_Front', ['id' => $competition->getId()]);
    }


    #[Route('/{id}', name: 'app_competition_show', methods: ['GET'])]
    public function show(Competition $competition): Response
    {
        return $this->render('competition/show.html.twig', [
            'competition' => $competition,
        ]);
    }

    ////////////////////////json////////////////////////
    #[Route('/{id}/json', name: 'app_competition_showJson')]
    public function showJson($id, NormalizerInterface $normalizer, CompetitionRepository $competitionRepository)
    {
        $competition = $competitionRepository->find($id);
        $competitionNormalises = $normalizer->normalize($competition,'json', ['groups' => "competitions"]);
        return new Response(json_encode($competitionNormalises));
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

    ////////////////////////json////////////////////////
    #[Route('/{id}/editJson', name: 'app_competition_editJson')]
    public function editJson(Request $request,$id, NormalizerInterface $normalizer)
    {
        $em= $this->getDoctrine()->getManager();	
        $competition = $em->getRepository(Competition::class)->find($id);
        $nomCompetition = $request->get('nomCompetition');
            if ($nomCompetition !== null) {
                $competition->setNomCompetition($nomCompetition);
            } else {
                    throw new \Exception('Le nom de la compétition ne peut pas être vide.');
            }
        $etatCompetition= $request->get('etatCompetition');
            if ($etatCompetition !== null) {
                $competition->setEtatCompetition($etatCompetition);
            } else {
                    throw new \Exception('L\'état de la compétition ne peut pas être vide.');
            }
        $nbrMaxInscrit = $request->get('nbrMaxInscrit');
            if ($nbrMaxInscrit !== null) {
                $competition->setNbrMaxInscrit((int)$nbrMaxInscrit);
                }
        $em->flush();
        $jsonContent=$normalizer->normalize($competition,'json', ['groups' => "competitions"]);
        return new Response("competition modifiée avec succée" . json_encode($jsonContent));
    
        
    }

    #[Route('/{id}', name: 'app_competition_delete', methods: ['POST'])]
    public function delete(Request $request, Competition $competition, CompetitionRepository $competitionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competition->getId(), $request->request->get('_token'))) {
            $competitionRepository->remove($competition, true);
        }

        return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
    }
    
    ////////////////////////json////////////////////////
    #[Route('/{id}/DeleteJson', name: 'app_competition_deleteJson')]
    public function deleteJson(Request $request,$id,NormalizerInterface $normalizer)
    {
        $em= $this->getDoctrine()->getManager();	
        $competition = $em->getRepository(Competition::class)->find($id);
        $em->remove($competition);
        $em->flush();
        $jsonContent=$normalizer->normalize($competition,'json', ['groups' => "competitions"]);
        return new Response("competition supprimée avec succée" . json_encode($jsonContent));
    }
    

}





