<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InformationsController extends Controller
{
    public function informationsAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Informations:informations.html.twig', array(
            'informations' => $this->getRepo($edition),
        ));
    }

    public function venueAction()
    {
        return $this->render('WitsFrontBundle:Informations:venue.html.twig', array(
            // ...
        ));
    }

    public function travelingToAvenusAction()
    {
        return $this->render('WitsFrontBundle:Informations:traveling_to_avenus.html.twig', array(
            // ...
        ));
    }

    public function hotelsAction()
    {
        return $this->render('WitsFrontBundle:Informations:hotels.html.twig', array(
            // ...
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Informations');
        $informations = $repo->getVenusByConferenceEdition($edition);

        if (!$informations) {
            $informations = null;
        }

        return $informations;
    }
}
