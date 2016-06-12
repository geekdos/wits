<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller
{
    public function registrationAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Registration:registration.html.twig', array(
            'registration' => $this->getRepo($edition),
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Registration');
        $registration = $repo->getRegistrationByConferenceEdition($edition);

        if (!$registration) {
            $registration = null;
        }

        return $registration;
    }

}
