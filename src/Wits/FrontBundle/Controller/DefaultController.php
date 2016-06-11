<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $edition = $em->getRepository('WitsFrontBundle:Conference')->find();

        return $this->render('WitsFrontBundle:Default:index.html.twig', array(
            'conference' => $this->getRepo()
        ));
    }

}
