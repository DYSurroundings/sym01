<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

class AccueilController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction(Request $request)
    {
        // on récupère Doctrine qui gère mysql
        $em = $this->getDoctrine()->getManager();
        // on récupère tous les champs depuis l'entité User
        $users = $em->getRepository('AppBundle:User')->findAll();
        // on passe la variable contenant les utilisateurs à la vue perso/index.html.twig
        return $this->render('perso/index.html.twig',["users"=>$users]);
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
