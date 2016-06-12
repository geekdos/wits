<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SponsorshipController extends Controller
{
    public function sponsorshipAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Sponsorship:sponsorship.html.twig', array(
            'sponsors' => $this->getRepo($edition),
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Sponsor');
        $result = $repo->getSponsorsByConferenceEdition($edition);

        if (!$result) {
            $result = null;
        }

        return $result;
    }

}
