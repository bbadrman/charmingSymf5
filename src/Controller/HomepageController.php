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
        return $this->render('homepage/index.html.twig');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug): Response
    {

         $answers =[
             'make sur your cat is awesome and you can enjoy ',
             'honestly awesome your cat is awesome and you can enjoy',
             'maybe awesome your cat is awesome and you can enjoy',
         ];         
        return $this->render(  'question/show.html.twig',
         [ 'question' =>  ucwords(str_replace('-',' ', $slug)),
        'answers' => $answers,]);
    }
}
