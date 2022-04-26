<?php

namespace App\Controller;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Environment $environment): Response
    {
        $html = $environment->render('homepage/index.html.twig');
        return new Response($html);
        
        //return $this->render('homepage/index.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="questions_show")
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
