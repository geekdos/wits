<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SponsorshipController extends Controller
{
    public function sponsorshipAction()
    {
        return $this->render('WitsFrontBundle:Sponsorship:sponsorship.html.twig', array(
            'sponsors' => $this->getRepo()
        ));
    }

    private function getRepo(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Sponsor');
        $result = $repo->findAll();

        if (!$result) {
            $result = null;
        }

        return $result;
    }

}
