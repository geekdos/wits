<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubmissionsController extends Controller
{
    public function callForSubmissionsAction()
    {
        return $this->render('WitsFrontBundle:Submissions:call_for_submissions.html.twig', array(
            'submissions' => $this->getRepo()
        ));
    }

    private function getRepo(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Submissions');
        $submissions = $repo->findBy(
            array('online' => true)
        );

        if (!$submissions) {
            $submissions = null;
        }

        return $submissions;
    }
}
