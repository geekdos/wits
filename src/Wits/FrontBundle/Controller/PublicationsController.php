<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicationsController extends Controller
{
    public function showAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Publications:show.html.twig', array(
            'publications' => $this->getRepo($edition),
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Publication');
        $publications = $repo->getPulictionsByConferenceEdition($edition);

        if (!$publications) {
            $publications = null;
        }

        return $publications;
    }
}
