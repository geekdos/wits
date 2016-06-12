<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubmissionsController extends Controller
{
    public function callForSubmissionsAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Submissions:call_for_submissions.html.twig', array(
            'submissions' => $this->getRepo($edition),
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Submissions');
        $submissions = $repo->getSumitionsByConferenceEdition($edition);

        if (!$submissions) {
            $submissions = null;
        }

        return $submissions;
    }
}
