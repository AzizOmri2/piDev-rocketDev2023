<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActiviteController extends AbstractController
{
    #[Route('/addActivite', name: 'addActivite')]
    public function addActivite(): Response
    {
        return $this->render('activite/add.html.twig');
    }

    #[Route('/viewActivite', name: 'viewActivite')]
    public function viewActivite(): Response
    {
        return $this->render('activite/view.html.twig');
    }
}
