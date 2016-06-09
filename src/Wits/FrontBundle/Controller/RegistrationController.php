<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller
{
    public function registrationAction()
    {
        return $this->render('WitsFrontBundle:Registration:registration.html.twig', array(
            'registration' => $this->getRepo()
        ));
    }

    private function getRepo(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Registration');
        $registration = $repo->findBy(
            array('online' => true)
        );

        if (!$registration) {
            $registration = null;
        }

        return $registration;
    }

}
