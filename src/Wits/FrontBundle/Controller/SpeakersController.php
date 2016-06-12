<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SpeakersController extends Controller
{
    public function speakersAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Speakers:speakers.html.twig', array(
            'speakers' => $this->getRepo($edition),
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Speakers');
        $speakers = $repo->getSpeakersByConferenceEdition($edition);

        if (!$speakers) {
            $speakers = null;
        }

        return $speakers;
    }
}
