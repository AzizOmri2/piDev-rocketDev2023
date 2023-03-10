<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Pack;


class SearchController extends AbstractController
{
    public function index(Request $request): JsonResponse
    {
        $searchTerm = $request->query->get('searchTerm');

        // Effectuer la recherche avec le terme de recherche

        // Retourner les résultats au format JSON
        return $this->json($results);
    }
    public function search(Request $request)
{
    $searchTerm = $request->query->get('searchTerm');
    $entityManager = $this->getDoctrine()->getManager();
    $packs = $entityManager->getRepository(Pack::class)->createQueryBuilder('p')
        ->where('p.typePack LIKE :searchTerm')
        ->setParameter('searchTerm', '%'.$searchTerm.'%')
        ->getQuery()
        ->getResult();

    $results = array_map(function($pack) {
        return [
            'label' => $pack->getTypePack(),
            'url' => $this->generateUrl('app_pack_show', ['id' => $pack->getId()])
        ];
    }, $packs);

    return new JsonResponse($results);
}
}