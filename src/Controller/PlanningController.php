<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlanningController extends AbstractController
{
    #[Route('/addPlanning', name: 'addPlanning')]
    public function index(): Response
    {
        return $this->render('planning/add.html.twig');
    }

    #[Route('/viewPlanning', name: 'viewPlanning')]
    public function viewPlanning(): Response
    {
        return $this->render('planning/view.html.twig');
    }
    
}
