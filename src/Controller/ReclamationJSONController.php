<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;

class ReclamationJSONController extends AbstractController
{
    /* JSON View Back */
    /* ReclamationController.php */

    /* JSON Show */
    #[Route('/reclamation/showJSON/{id}', name: 'showJSONReclamation')]
    public function showJSON($id,ReclamationRepository $repo,NormalizerInterface $normalizer)
    {
        $reclamation=$repo->find($id);
        $reclamationNormalises=$normalizer->normalize($reclamation,'json',['groups'=>"reclamation"]);
        return new Response(json_encode($reclamationNormalises));
    }

    /* JSON Delete */
    #[Route('/reclamation/deleteJSON/{id}', name: 'deleteJSONReclamation')]
    public function deleteJSON(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository(Reclamation::class)->find($id);
        $em->remove($reclamation);
        $em->flush();
        $jsonContent=$Normalizer->normalize($reclamation,'json',['groups'=>'reclamation']);

        return new Response("Reclamation supprimée avec succés".json_encode($jsonContent));
    }

    
    /* JSON Edit */
    #[Route('/reclamation/editJSON/{id}', name: 'editJSONReclamation')]
    public function editJSON($id,Request $request, Reclamation $reclamation, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();

        $reclamation=$em->getRepository(Reclamation::class)->find($id);
        $reclamation->setNomUserReclamation($request->get('nomUserReclamation'));
        $reclamation->setEmailUserReclamation($request->get('emailUserReclamation'));
        $reclamation->setObjetReclamation($request->get('objetReclamation'));
        $reclamation->setTexteReclamation($request->get('texteReclamation'));
        $reclamation->setDateReclamation($request->get('dateReclamation'));

        $em->flush();

        $jsonContent = $Normalizer->normalize($reclamation,'json',['groups'=>'reclamation']);

        return new Response("Reclamation est mise à jour".json_encode($jsonContent));
    }
}
