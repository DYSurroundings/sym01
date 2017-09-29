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
        return $this->render('perso/index.html.twig');
    }
}
