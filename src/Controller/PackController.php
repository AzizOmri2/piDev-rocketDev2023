<?php

namespace App\Controller;

use App\Entity\Pack;
use App\Form\PackType;
use App\Repository\PackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Promotion;
use App\Repository\PromotionRepository;
use function random ;
use function floor;
use Winwheel\Winwheel;

//require_once './Winwheel.js';

#[Route('/pack')]
class PackController extends AbstractController
{ private $myWheel;
    #[Route('/', name: 'app_pack_index', methods: ['GET'])]
    public function index(PackRepository $packRepository ): Response
    {
        return $this->render('pack/index.html.twig', [
            'packs' => $packRepository->findAll(),
        ]);
    }
    
    #[Route('/tryindex', name: 'app_pack_tryindex', methods: ['GET'])]
    public function indexClient(PackRepository $packRepository , PromotionRepository $promotionRepository): Response
    { 
        $participants = [
            'Participant 1',
            'Participant 2',
            'Participant 3',
            'Participant 4',
            'Participant 5',
        ];
      
    
        // Initialiser la roue de tirage au sort avec les participants
        //$this->myWheel = new Winwheel([
          //  'numSegments' => count($participants),
            //'segments' => array_map(function($participant) { 
              //  return [
                //    'fillStyle'=>'white', 
                  //  'text'=>$participant
                ///];
            //}, $participants)
        //]);
    
        return $this->render('pack/tryindex.html.twig', [
            'packs' => $packRepository->findAll(),
            'promotions' => $promotionRepository->findAll(),
            'participants' => $participants
        ]);
    }
    #[Route('/spin', name: 'spin', methods: ['GET'])]
    function spin() {
        // Récupérer un nombre aléatoire entre 1 et le nombre de segments de la roue
        $randomNumber = rand(1, myWheel.numSegments);
        
        // Tourner la roue jusqu'au segment aléatoire
        myWheel.animation.spins(8);
        myWheel.stopAnimation(false);
        myWheel.rotationAngle(0);
        myWheel.draw();
        myWheel.startAnimation();
      
        // Attendre la fin de l'animation de la roue, puis afficher le gagnant
        setTimeout(function() {
          alert("Le gagnant est : " + myWheel.segments[randomNumber-1].text);
        }, 6000);
      }

    #[Route('/new', name: 'app_pack_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PackRepository $packRepository): Response
    {
        $pack = new Pack();
        $form = $this->createForm(PackType::class, $pack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $packRepository->save($pack, true);

            return $this->redirectToRoute('app_pack_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pack/new.html.twig', [
            'pack' => $pack,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pack_show', methods: ['GET'])]
    public function show(Pack $pack): Response
    {
        return $this->render('pack/show.html.twig', [
            'pack' => $pack,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_pack_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pack $pack, PackRepository $packRepository): Response
    {
        $form = $this->createForm(PackType::class, $pack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $packRepository->save($pack, true);

            return $this->redirectToRoute('app_pack_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pack/edit.html.twig', [
            'pack' => $pack,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pack_delete', methods: ['POST'])]
    public function delete(Request $request, Pack $pack, PackRepository $packRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pack->getId(), $request->request->get('_token'))) {
            $packRepository->remove($pack, true);
        }

        return $this->redirectToRoute('app_pack_index', [], Response::HTTP_SEE_OTHER);
    }
}
