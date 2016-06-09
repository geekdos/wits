<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WitsFrontBundle:Default:index.html.twig', array(
            'conference' => $this->getRepo()
        ));
    }

    private function getRepo(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Conference');
        $edition = $this->container->getParameter("edition");
        $conference = $repo->findOneBy(
            array('edition' => $edition)
        );

        if (!$conference) {
            $conference = null;
        }

        return $conference;
    }

}
