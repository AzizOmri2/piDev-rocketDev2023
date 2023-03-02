<?php

namespace App\Controller;

use App\Entity\Pack;
use App\Form\PackType;
use App\Form\PackModifType;
use App\Repository\PackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Promotion;
use App\Repository\PromotionRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use function random ;
use function floor;
use Winwheel\Winwheel;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
//require_once './Winwheel.js';

#[Route('/pack')]
class PackController extends AbstractController
{ private $myWheel;
    #[Route('/pp', name: 'list')]
    public function getPacks(PackRepository $repo, NormalizerInterface $normalizer){
        $packs=$repo->findAll();
        $packNormalises= $normalizer->normalize($packs,'json',['groups' =>"packs"]);
        $json = json_encode($packNormalises);
        return new Response($json);  
    }

    #[Route('/pack/{id}', name: 'pack')]
    public function packId(PackRepository $repo, NormalizerInterface $normalizer,$id){
        $pack=$repo->find($id);
        $packNormalises= $normalizer->normalize($pack,'json',['groups' =>"packs"]);
        $json = json_encode($packNormalises);
        return new Response($json);
    }
   
    #[Route('/addPackJson/new', name: 'addPackJson')]
    public function addPackJson(Request $req, NormalizerInterface $normalizer){
        $em = $this->getDoctrine()->getManager();
        $pack = new Pack();
        $pack->setTypePack($req->get('typePack'));
        $pack->setMontantPack($req->get('montantPack'));
        $pack->setDureePack($req->get('DureePack'));
        $pack->setDescriptionPack($req->get('descriptionPack'));
        $pack->setPlacesPack($req->get('placesPack'));
        $pack->setDisponibilitePack($req->get('disponibilitePack'));
        $em->persist($pack);
        $em->flush();
        $packNormalises= $normalizer->normalize($pack,'json',['groups' =>"packs"]);
        $json = json_encode($packNormalises);
        return new Response($json);
        
    }
    #[Route('/updatePackJson/{id}', name: 'updatePackJson')]
    public function updatePackJson($id,Request $req, NormalizerInterface $normalizer){
        $em = $this->getDoctrine()->getManager();
        $pack = $em->getRepository(Pack::class)->find($id);
        $pack->setTypePack($req->get('typePack'));
        $pack->setMontantPack($req->get('montantPack'));
        $pack->setDureePack($req->get('DureePack'));
        $pack->setDescriptionPack($req->get('descriptionPack'));
        $pack->setPlacesPack($req->get('placesPack'));
        $pack->setDisponibilitePack($req->get('disponibilitePack'));
        $pack->setId($pack->getId());
        $em->flush();
        $packNormalises= $normalizer->normalize($pack,'json',['groups' =>"packs"]);
        $json = json_encode($packNormalises);
        return new Response($json);
        
    }
    #[Route('/deletePackJson/{id}', name: 'deletePackJson')]
    public function deletePackJson($id,Request $req, NormalizerInterface $normalizer){
        $em = $this->getDoctrine()->getManager();
        $pack = $em->getRepository(Pack::class)->find($id);
       $em->remove($pack);
        $em->flush();
        $packNormalises= $normalizer->normalize($pack,'json',['groups' =>"packs"]);
        $json = json_encode($packNormalises);
        return new Response("pack supprimé " . $json);
        
    }


    #[Route('/', name: 'app_pack_index', methods: ['GET'])]
    public function index(PackRepository $packRepository ): Response
    {  
        $packs = $packRepository->findBy([], ['placesPack' => 'DESC']);

        $totalPlaces = 0;
        foreach ($packs as $pack) {
            $totalPlaces += $pack->getPlacesPack();
        }
    
        $packsStats = [];
        $rank = 1;
        foreach ($packs as $pack) {
            $percentage = ($pack->getPlacesPack() / $totalPlaces) * 100;
    
            $packStats = new \stdClass();
            $packStats->pack = $pack;
            $packStats->rank = $rank;
            $packStats->percentage = round($percentage, 2);
            $packsStats[] = $packStats;
    
            $rank++;
        }
    
        return $this->render('pack/index.html.twig', [
            'packsStats' => $packsStats,
            'packs' => $packRepository->findAll(),
            'total' => $totalPlaces,
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
        $form = $this->createForm(PackModifType::class, $pack);
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
    #[Route('/action', name: 'app_pack_indexAction', methods: ['GET'])]
    public function myAction(EntityManagerInterface $entityManager, PackRepository $packRepository )
    {
        //$myData = $entityManager->getRepository(Pack::class)->findAll();
         $myData = $packRepository->findAll();
        $myValues = [];
        foreach ($myData as $data) {
            $myValues[] = $data->getValue();
        }
    
        $mean = array_sum($myValues) / count($myValues);
    
        return $this->render('pack/index.html.twig', [
            'mean' => $mean,
            'packs' => $packRepository->findAll(),
        ]);
    }
}







