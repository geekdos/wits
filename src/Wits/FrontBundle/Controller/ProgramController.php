<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProgramController extends Controller
{
    public function programAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Program:program.html.twig', array(
            'program' => $this->getRepo($edition),
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Program');
        $program = $repo->getProgramByConferenceEdition($edition);

        if (!$program) {
            $program = null;
        }

        return $program;
    }
    
}
