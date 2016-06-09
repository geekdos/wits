<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProgramController extends Controller
{
    public function programAction()
    {
        return $this->render('WitsFrontBundle:Program:program.html.twig', array(
            'program' => $this->getRepo()
        ));
    }

    private function getRepo(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Program');
        $committee = $repo->findOneBy(
            array('online' => true)
        );

        if (!$committee) {
            $committee = null;
            /*
            throw $this->createNotFoundException(
                'No committee found for '.$committeeName
            );
            */
        }

        return $committee;
    }
    
}
