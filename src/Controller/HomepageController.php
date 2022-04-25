<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return new Response('salut badr');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug): Response
    {
        return new Response(sprintf('salut c la deuxiement page est "%s"', ucwords(str_replace('-',' ', $slug))));
    }
}
