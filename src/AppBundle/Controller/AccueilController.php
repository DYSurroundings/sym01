<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccueilController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('perso/index.html.twig');
    }
    /**
     * @Route("/page2", name="pg2")
     */
    public function pg2Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('perso/pg2.html.twig');
    }
    /**
     * @Route("/page3", name="pg3")
     */
    public function pg3Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('perso/pg3.html.twig');
    }
    /**
     * lorsque on clique sur hello/ on passe une variable qui a comme valeur par défaut: anonyme
     * @Route("/hello/{qui}", name="bonjour", defaults={"qui" = "anonyme"})
     */
    public function helloAction($qui)
    {
        // replace this example code with whatever you need
        return $this->render('perso/hello.html.twig',["nom"=>$qui]);
    }
}
