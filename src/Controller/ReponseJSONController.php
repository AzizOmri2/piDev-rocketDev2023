<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;

class ReponseJSONController extends AbstractController
{
    /* JSON View Back */
    /* ReponseController.php */
    
    /* JSON Show */
    #[Route('/reponse/showJSON/{id}', name: 'showJSONReponse')]
    public function showJSON($id,ReponseRepository $repo,NormalizerInterface $normalizer)
    {
        $reponse=$repo->find($id);
        $reponseNormalises=$normalizer->normalize($reponse,'json',['groups'=>"reponse"]);
        return new Response(json_encode($reponseNormalises));
    }

    /* JSON Delete */
    #[Route('/reponse/deleteJSON/{id}', name: 'deleteJSONReponse')]
    public function deleteJSON(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $reponse=$em->getRepository(Reponse::class)->find($id);
        $em->remove($reponse);
        $em->flush();
        $jsonContent=$Normalizer->normalize($reponse,'json',['groups'=>'reponse']);

        return new Response("Reponse supprimée avec succés".json_encode($jsonContent));
    }

    
    /* JSON Edit */
    #[Route('/reponse/editJSON/{id}', name: 'editJSONReponse')]
    public function editJSON($id,Request $request, Reponse $reponse, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();

        $reponse=$em->getRepository(Reponse::class)->find($id);
        $reponse->setObjetReponse($request->get('objetReponse'));
        $reponse->setDateReponse($request->get('dateReponse'));
        $reponse->setPieceJointe($request->get('pieceJointe'));
        $reponse->setContenuReponse($request->get('contenuReponse'));

        $em->flush();

        $jsonContent = $Normalizer->normalize($reponse,'json',['groups'=>'reponse']);

        return new Response("Reponse est mise à jour".json_encode($jsonContent));
    }
}
