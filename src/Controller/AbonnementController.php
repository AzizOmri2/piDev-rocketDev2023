<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Entity\Pack;
use App\Repository\PackRepository;
use App\Form\AbonnementType;
use App\Form\AbonnementExtraType;
use App\Form\AbonnementModifType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AbonnementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;

#[Route('/abonnement')]
class AbonnementController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/', name: 'app_abonnement_index', methods: ['GET'])]
    public function index(AbonnementRepository $abonnementRepository): Response
    {
        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
        ]);
    }
    #[Route('/c', name: 'app_abonnement_indexClient', methods: ['GET'])]
    public function indexClient(AbonnementRepository $abonnementRepository): Response
    {
        return $this->render('abonnement/indexClient.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
        ]);
    }
    #[Route('/choisirAbonnement', name: 'app_abonnement_choisirAbonnement', methods: ['GET'])]
    public function choisirAbonnement(AbonnementRepository $abonnementRepository): Response
    {
        return $this->render('abonnement/choisirAbonnement.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
        ]);
    }
    public function isValid(string $CodePromotion)
    {
        $promotion = $this->entityManager->getRepository(Promotion::class)->findOneBy(['codePromotion' => $CodePromotion]);
      
        if ($promotion->getCodePromotion() != $CodePromotion) {
            return false;
        }

        return true;
    }
    public function applyDiscount($CodePromotion)
    {
        $promotion = $this->entityManager->getRepository(Promotion::class)->findOneBy(['code' => $CodePromotion]);

        // Appliquez la réduction associée au code promotionnel ici
    }
    
    #[Route('/new', name: 'app_abonnement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AbonnementRepository $abonnementRepository,EntityManagerInterface $em): Response
    
 {  $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery('SELECT p FROM App\Entity\Promotion p');
    $promotions = $query->getResult();
    $currentDate = new \DateTime();
    $cr = new \DateTime();
    $formattedDate = $currentDate->format('Y-m-d');
    $abonnement = new Abonnement();
    $dateFin = $abonnement->getDateFin();
    $etatAbonnement = $abonnement->getEtatAbonnement();
    $abonnement->setDateAchat ($currentDate);
    $dateAchat = $abonnement->getDateAchat();
    $form = $this->createForm(AbonnementType::class, $abonnement);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid() ) {
        
        $pack = $abonnement->getPack();
        $packduree = $pack->getDureePack();
        $packdisponibilite = $pack->getDisponibilitePack();
        $packplaces = $pack->getPlacesPack();

        if ($packdisponibilite > $packplaces){
            $packajout = $packplaces + 1;
            $pack->setPlacesPack($packajout);
            $montantpack = $pack->getMontantPack() ;
            $abonnement->setMontantAbonnement($montantpack);
           $abonnement->setDateFin( $cr->modify(sprintf('+%d month', $packduree )));
    
        $dateFin = $abonnement->getDateFin();
        $formatFin= $dateFin->format('Y-m-d');
        $ff = strtotime($formattedDate);
        $dtt = strtotime($formatFin);
        if ( $ff <= $dtt) { $abonnement->setEtatAbonnement(" actif"); }
        if ( $ff > $dtt) { $abonnement->setEtatAbonnement("non actif");}
    
        $codepromo= $abonnement->getCodePromo();

        if ($codepromo!=null){
        foreach ($promotions as $promotion){
            if ($this->isValid($codepromo)) {
               $p = $promotion->getReductionPromotion();
               $m = $pack->getMontantPack() ;
               $promotion1 = $pack->getMontantPack() * $p ;
               $new = $m - $promotion1;
              
            }}}
           
        else{ $new = $pack->getMontantPack() ;}
            $abonnement->setMontantAbonnement($new); 
        
        $abonnementRepository->save($abonnement, true);
        $em->persist($abonnement);
        $em->flush();}
        return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }
  
    return $this->renderForm('abonnement/new.html.twig', [
        'abonnement' => $abonnement,
        'form' => $form,
    ]);
    }
    

      
    #[Route('/newExtra', name: 'app_abonnement_newExtra', methods: ['GET', 'POST'])]
    public function newExtra(Request $request, AbonnementRepository $abonnementRepository,EntityManagerInterface $em): Response
    {   $currentDate = new \DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementExtraType::class, $abonnement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            $pack = $abonnement->getPack();
            $packduree = $pack->getDureePack();
            $packdisponibilite = $pack->getDisponibilitePack();
            $packplaces = $pack->getPlacesPack();
            if ($packdisponibilite > $packplaces){

                $packajout = $packplaces + 1;
                $pack->setPlacesPack($packajout);
               $da = $abonnement->getDateAchat();
               $abonnement->setDateFin( $da );
                $abonnement->setDateFin( $abonnement->getDateFin()->modify(sprintf('+%d month', 4 )));
            $dateFin = $abonnement->getDateFin();
            $formatFin= $dateFin->format('Y-m-d');
            $ff = strtotime($formattedDate);
            $dtt = strtotime($formatFin);
            if ( $ff <= $dtt) { $abonnement->setEtatAbonnement(" actif"); }
            if ( $ff > $dtt) { $abonnement->setEtatAbonnement("non actif");}
            $abonnementRepository->save($abonnement, true);
            $em->persist($abonnement);
            $em->flush();}
            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('abonnement/newExtra.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }
    #[Route('/newExtraClient', name: 'app_abonnement_newExtraClient', methods: ['GET', 'POST'])]
    public function newExtraClient(Request $request, AbonnementRepository $abonnementRepository,EntityManagerInterface $em): Response
    {   $currentDate = new \DateTime();
        $cr = new \DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        $otherDate = new \DateTime('2016-01-01');
        $abonnement = new Abonnement();
        $dateFin = $abonnement->getDateFin();
        $etatAbonnement = $abonnement->getEtatAbonnement();
        $dateAchat = $abonnement->getDateAchat();

        $form = $this->createForm(AbonnementExtraType::class, $abonnement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            $da = $abonnement->getDateAchat();
            $pack = $abonnement->getPack();
            $packduree = $pack->getDureePack();
            // NEKSA
            $abonnement->setDateFin( $da->modify(sprintf('+%d month', $packduree )));
            $dateFin = $abonnement->getDateFin();
            $formatFin= $dateFin->format('Y-m-d');
            $ff = strtotime($formattedDate);
            $dtt = strtotime($formatFin);
            if ( $ff <= $dtt) { $abonnement->setEtatAbonnement(" actif"); }
            if ( $ff > $dtt) { $abonnement->setEtatAbonnement("non actif");}
            $abonnementRepository->save($abonnement, true);
            $em->persist($abonnement);
            $em->flush();
            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('abonnement/newExtraClient.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }


    #[Route('/newClient', name: 'app_abonnement_newClient', methods: ['GET', 'POST'])]
    public function newClient(Request $request, AbonnementRepository $abonnementRepository,EntityManagerInterface $em): Response
    {  $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM App\Entity\Promotion p');
        $promotions = $query->getResult();
        $currentDate = new \DateTime();
        $cr = new \DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        $abonnement = new Abonnement();
        $dateFin = $abonnement->getDateFin();
        $etatAbonnement = $abonnement->getEtatAbonnement();
        $abonnement->setDateAchat ($currentDate);
        $dateAchat = $abonnement->getDateAchat();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid() ) {
            
            $pack = $abonnement->getPack();
            $packduree = $pack->getDureePack();
            $packdisponibilite = $pack->getDisponibilitePack();
            $packplaces = $pack->getPlacesPack();
    
            if ($packdisponibilite > $packplaces){
                $packajout = $packplaces + 1;
                $pack->setPlacesPack($packajout);
                $montantpack = $pack->getMontantPack() ;
                $abonnement->setMontantAbonnement($montantpack);
               $abonnement->setDateFin( $cr->modify(sprintf('+%d month', $packduree )));
        
            $dateFin = $abonnement->getDateFin();
            $formatFin= $dateFin->format('Y-m-d');
            $ff = strtotime($formattedDate);
            $dtt = strtotime($formatFin);
            if ( $ff <= $dtt) { $abonnement->setEtatAbonnement(" actif"); }
            if ( $ff > $dtt) { $abonnement->setEtatAbonnement("non actif");}
        
            $codepromo= $abonnement->getCodePromo();
    
            if ($codepromo!=null){
            foreach ($promotions as $promotion){
                if ($this->isValid($codepromo)) {
                   $p = $promotion->getReductionPromotion();
                   $m = $pack->getMontantPack() ;
                   $promotion1 = $pack->getMontantPack() * $p ;
                   $new = $m - $promotion1;
                  
                }}}
               
            else{ $new = $pack->getMontantPack() ;}
                $abonnement->setMontantAbonnement($new); 
            
            $abonnementRepository->save($abonnement, true);
            $em->persist($abonnement);
            $em->flush();}
            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
            }
      
        return $this->renderForm('abonnement/newClient.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
        }
    #[Route('/{id}', name: 'app_abonnement_show', methods: ['GET'])]
    public function show(Abonnement $abonnement): Response
    {
        return $this->render('pack/tryindex.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }
    #[Route('/c/{id}', name: 'app_abonnement_showClient', methods: ['GET'])]
    public function showClient(Abonnement $abonnement): Response
    {
        return $this->render('abonnement/showClient.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }
   
    
    #[Route('/{id}/edit', name: 'app_abonnement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {   $currentDate = new \DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        $form = $this->createForm(AbonnementModifType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dateFin = $abonnement->getDateFin();
            $formatFin= $dateFin->format('Y-m-d');
            $ff = strtotime($formattedDate);
            $dtt = strtotime($formatFin);
            if ( $ff <= $dtt) { $abonnement->setEtatAbonnement(" actif"); }
            if ( $ff > $dtt) { $abonnement->setEtatAbonnement("non actif");}
          
            $abonnementRepository->save($abonnement, true);
            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('abonnement/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_abonnement_delete', methods: ['POST'])]
    public function delete(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnement->getId(), $request->request->get('_token'))) {

            $pack = $abonnement->getPack();
            $packplaces = $pack->getPlacesPack();
            $packajout = $packplaces - 1;
            $pack->setPlacesPack($packajout);
            $abonnementRepository->remove($abonnement, true);
        }

        return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }
    

    #[Route('/ajouter/{id}', name: 'app_abonnement_ajouter')]
    #[ParamConverter('pack', class:'App\Entity\Pack')]
    public function ajouter( Pack $pack,AbonnementRepository $abonnementRepository,EntityManagerInterface $em
    ): Response {
        $currentDate = new \DateTime();
        $cr = new \DateTime();
        $formattedDate = $currentDate->format('Y-m-d');
        $abonnement = new Abonnement();
        $abonnement->setPack($pack);
        $etatAbonnement = $abonnement->getEtatAbonnement();
        $abonnement->setDateAchat ($currentDate);
       
        $pack = $abonnement->getPack();
        $packduree = $pack->getDureePack();
        $packdisponibilite = $pack->getDisponibilitePack();
        $packplaces = $pack->getPlacesPack();
       
        if ($packdisponibilite > $packplaces){
            $packajout = $packplaces + 1;
            $pack->setPlacesPack($packajout);
        $abonnement->setDateFin( $cr->modify(sprintf('+%d month', $packduree )));
        #$p=$abonnement->getPack();
        #$pm = $p->getMontantPack();
       # if ( $pm >= 100 ) { $abonnement->setEtatAbonnement(" actif");}
        #else { $abonnement->setEtatAbonnement("non actif");}
        $dateFin = $abonnement->getDateFin();
        $formatFin= $dateFin->format('Y-m-d');
        $ff = strtotime($formattedDate);
        $dtt = strtotime($formatFin);
        if ( $ff <= $dtt) { $abonnement->setEtatAbonnement(" actif"); }
        if ( $ff > $dtt) { $abonnement->setEtatAbonnement("non actif");}
        $montantabonnement = $pack->getMontantPack() ;
        $abonnement->setMontantAbonnement($montantabonnement );
        $em->persist($abonnement);
        $em->flush();
        return $this->redirectToRoute('app_pack_indexc', [], Response::HTTP_SEE_OTHER);
        }
        return new JsonResponse([
            'success' => true,
            'message' => sprintf('Abonnement for pack "%s" added successfully.', $pack),
            'abonnement' => $abonnement,
        ]);
    }
}
