<?php
namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Activite;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface; 


#[Route('/cours')]
class CoursJSONController extends AbstractController
{
    /* JSON Edit */
    #[Route('/cours/editJSON/{id}', name: 'editJSONCours')]
    public function editJSON($id,Request $request, Cours $cours, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();

        $cours=$em->getRepository(Cours::class)->find($id);
        $cours->setNomCours($request->get('nomCours'));
        $cours->setPrixCours($request->get('prixCours'));
        $cours->setNomCoach($request->get('nomCoach'));
        $cours->setAgeMinCours($request->get('ageMinCours'));
        $cours->setDescriptionCours($request->get('descriptionCours'));

        $em->flush();

        $jsonContent = $Normalizer->normalize($cours,'json',['groups'=>'cours']);

        return new Response("Cours est mise à jour".json_encode($jsonContent));
    }

    /* JSON Show */
    #[Route('/cours/showJSON/{id}', name: 'showJSONCours')]
    public function showJSON($id,CoursRepository $repo,NormalizerInterface $normalizer)
    {
        $cours=$repo->find($id);
        $coursNormalises=$normalizer->normalize($cours,'json',['groups'=>"cours"]);
        return new Response(json_encode($coursNormalises));
    }

    /* JSON Delete */
    #[Route('/cours/deleteJSON/{id}', name: 'deleteJSONCours')]
    public function deleteJSON(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $cours=$em->getRepository(Cours::class)->find($id);
        $em->remove($cours);
        $em->flush();
        $jsonContent=$Normalizer->normalize($cours,'json',['groups'=>'cours']);

        return new Response("Cours supprimée avec succés".json_encode($jsonContent));
    }

    /* JSON View Back */
    #[Route('/cours/viewJSON', name: 'listJSONCours', methods: ['GET'])]
    public function getCours(SerializerInterface $serializer, CoursRepository $repo):JsonResponse
    {
        $cours = $repo->findAll();

        $coursSerialized = $serializer->serialize($cours,'json',['groups'=>'cours']);

        
        return new JSONResponse($coursSerialized);
    }

    /* JSON Add */
    #[Route('/cours/newJSON', name: 'addJSONCours')]
    public function newJSON(Request $request, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em =$this->getDoctrine()->getManager();
        $cours = new Cours();
        $cours->setNomCours($request->get('nomCours'));
        $cours->setPrixCours($request->get('prixCours'));
        $cours->setNomCoach($request->get('nomCoach'));
        $cours->setAgeMinCours($request->get('ageMinCours'));
        $cours->setDescriptionCours($request->get('descriptionCours'));

        $em->persist($cours);
        $em->flush();

        $jsonContent = $Normalizer->normalize($cours,'json',['groups'=>'cours']);

        return new Response("Cours ajouté avec succés".json_encode($jsonContent));
    }

}
