<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TwigTestController extends AbstractController
{
    #[Route('/twig/test', name: 'app_twig_test')]
    public function index(): Response
    {
        return $this->render('twig_test/index.html.twig', [
            'controller_name' => 'TwigTestController',
            'bulletPoints' => ['Point1', 'Point2','Point3','Point4',]
        ]);
    }
}
