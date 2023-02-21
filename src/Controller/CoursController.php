<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursController extends AbstractController
{
    #[Route('/addCours', name: 'addCours')]
    public function addCours(): Response
    {
        return $this->render('cours/add.html.twig');
    }

    #[Route('/viewCours', name: 'viewCours')]
    public function viewCours(): Response
    {
        return $this->render('cours/view.html.twig');
    }
}
