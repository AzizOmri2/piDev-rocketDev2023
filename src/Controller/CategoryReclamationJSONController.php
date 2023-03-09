<?php

namespace App\Controller;

use App\Entity\CategoryReclamation;
use App\Repository\CategoryReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;

class CategoryReclamationJSONController extends AbstractController
{
    /* JSON Edit */
    #[Route('/categoryreclamation/editJSON/{id}', name: 'editJSONCategoryReclamation')]
    public function editJSON($id,Request $request, CategoryReclamation $categoryreclamation, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();

        $categoryreclamation=$em->getRepository(CategoryReclamation::class)->find($id);
        $categoryreclamation->setNomCategory($request->get('nomCategory'));
        $categoryreclamation->setDescriptionCategory($request->get('descriptionCategory'));
        $categoryreclamation->setPrioriteCategory($request->get('prioriteCategory'));

        $em->flush();

        $jsonContent = $Normalizer->normalize($categoryreclamation,'json',['groups'=>'categoryreclamation']);

        return new Response("CategoryReclamation est mise à jour".json_encode($jsonContent));
    }

    /* JSON Show */
    #[Route('/categoryreclamation/showJSON/{id}', name: 'showJSONCategoryReclamation')]
    public function showJSON($id,CategoryReclamationRepository $repo,NormalizerInterface $normalizer)
    {
        $categoryreclamation=$repo->find($id);
        $categoryreclamationNormalises=$normalizer->normalize($categoryreclamation,'json',['groups'=>"categoryreclamation"]);
        return new Response(json_encode($categoryreclamationNormalises));
    }

    /* JSON Delete */
    #[Route('/categoryreclamation/deleteJSON/{id}', name: 'deleteJSONCategoryReclamation')]
    public function deleteJSON(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $categoryreclamation=$em->getRepository(CategoryReclamation::class)->find($id);
        $em->remove($categoryreclamation);
        $em->flush();
        $jsonContent=$Normalizer->normalize($categoryreclamation,'json',['groups'=>'categoryreclamation']);

        return new Response("CategoryReclamation supprimée avec succés".json_encode($jsonContent));
    }

    /* JSON View Back */
    #[Route('/categoryreclamation/viewJSON', name: 'viewJSONCategoryReclamation')]
    public function viewJSON(NormalizerInterface $Normalizer, CategoryReclamationRepository $categoryreclamationRepository)
    {
        $categoryreclamation = $categoryreclamationRepository->findAll();

        $categoryReclamationNormalises = $Normalizer->normalize($categoryreclamation,'json',['groups'=>'categoryreclamation']);

        $json = json_encode($categoryReclamationNormalises);
        
        return new Response($json);
    }

    /* JSON Add */
    #[Route('/categoryreclamation/newJSON', name: 'addJSONCategoryReclamation')]
    public function newJSON(Request $request, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em =$this->getDoctrine()->getManager();
        $categoryreclamation = new CategoryReclamation();
        $categoryreclamation->setNomCategory($request->get('nomCategory'));
        $categoryreclamation->setDescriptionCategory($request->get('descriptionCategory'));
        $categoryreclamation->setPrioriteCategory($request->get('prioriteCategory'));

        $em->persist($categoryreclamation);
        $em->flush();

        $jsonContent = $Normalizer->normalize($categoryreclamation,'json',['groups'=>'categoryreclamation']);

        return new Response("CategoryReclamation ajouté avec succés".json_encode($jsonContent));
    }
    
}
