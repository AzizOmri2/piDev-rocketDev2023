<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Like;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\PlatRepository;

class LikeController extends AbstractController
{
    #[Route('/like', name: 'app_like')]
    public function index(): Response
    {
        return $this->render('like/index.html.twig', [
            'controller_name' => 'LikeController',
        ]);
    }

    #[Route('/addlike', name: 'app_like')]
    public function addLike(Request $request): Response
    {
        $entityManager = $this->getManager();
        $like = new Like();
        $like->setUserId($request->get('user_id'));
        $like->setObjectId($request->get('object_id'));
        $like->setObjectType($request->get('object_type'));
        $like->setAction('like');
        $entityManager->persist($like);
        $entityManager->flush();
        return new Response('Like added');
    }
    #[Route('/removelike', name: 'app_remove_like')]
    public function removeLike(Request $request): Response
    {
        $entityManager = $this->getManager();
        $like = $entityManager->getRepository(Like::class)->findOneBy([
            'userId' => $request->get('user_id'),
            'objectId' => $request->get('object_id'),
            'objectType' => $request->get('object_type'),
            'action' => 'like',
        ]);
        $entityManager->remove($like);
        $entityManager->flush();

        return new Response('Like removed');
    }

    #[Route('/nbtotal', name: 'app_total_like')]
    public function getTotalLikes(Request $request): Response
    {
        $entityManager = $this->getManager();
        $totalLikes = $entityManager->getRepository(Like::class)->count([
            'objectId' => $request->get('object_id'),
            'objectType' => $request->get('object_type'),
            'action' => 'like',
        ]);

        return new Response($totalLikes);
    }
    #[Route('/getlikeby', name: 'app_getlikeby')]
    public function getLikedBy(Request $request): Response
    {
        $entityManager = $this->getManager();
        $likedBy = $entityManager->getRepository(Like::class)->findBy([
            'objectId' => $request->get('object_id'),
            'objectType' => $request->get('object_type'),
            'action' => 'like',
        ]);

        return $this->json($likedBy);
    }
    #[Route('/getlike', name: 'app_getlike')]
    public function getLikeButtons(Request $request): Response
    {
        $entityManager = $this->getManager();
        $userId = $request->get('user_id');
        $objectId = $request->get('object_id');
        $objectType = $request->get('object_type');

        // Vérifier si l'utilisateur a aimé cet objet
        $likedByUser = false;
        $like = $entityManager->getRepository(Like::class)->findOneBy([
            'userId' => $userId,
            'objectId' => $objectId,
            'objectType' => $objectType,
            'action' => 'like',
        ]);

        if ($like !== null) {
            $likedByUser = true;
        }

        // Obtenir le nombre total de likes pour cet objet
        $totalLikes = $entityManager->getRepository(Like::class)->count([
            'objectId' => $objectId,
            'objectType' => $objectType,
            'action' => 'like',
        ]);

        return $this->render('like/buttons.html.twig', [
            'likedByUser' => $likedByUser,
            'totalLikes' => $totalLikes,
            'objectType' => $objectType,
            'objectId' => $objectId,
        ]);
    }

}
