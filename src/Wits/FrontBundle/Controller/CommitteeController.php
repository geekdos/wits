<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommitteeController extends Controller
{

    public function generalChairsAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Committee:general_chairs.html.twig', array(
            'committee' => $this->getRepo('General Chairs', $edition)
        ));
    }

    public function honoraryCommitteeAction()
    {
        $edition = $this->getRequest()->get('edition');

        return $this->render('WitsFrontBundle:Committee:honorary_committee.html.twig', array(
            'committee' => $this->getRepo('Honorary Committee',$edition)
        ));
    }

    public function steeringCommitteeChairsAction()
    {
        $edition = $this->getRequest()->get('edition');

        return $this->render('WitsFrontBundle:Committee:steering_committee_chairs.html.twig', array(
            'committee' => $this->getRepo('Steering Committee', $edition)
        ));
    }

    public function programCommitteeChairsAction()
    {
        $edition = $this->getRequest()->get('edition');

        return $this->render('WitsFrontBundle:Committee:program_committee_chairs.html.twig', array(
            'committee' => $this->getRepo('Program Committee Chairs', $edition)
        ));
    }

    public function publicityAndCommunicationChairsAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Committee:publicity_and_communication_chairs.html.twig', array(
            'committee' => $this->getRepo('Publicity and Communication Chairs',$edition)
        ));
    }

    public function financeChairsAction()
    {
        $edition = $this->getRequest()->get('edition');

        return $this->render('WitsFrontBundle:Committee:financeChairs.html.twig', array(
            'committee' => $this->getRepo('Finance Chairs', $edition)
        ));
    }

    public function postersChairsAction()
    {
        $edition = $this->getRequest()->get('edition');

        return $this->render('WitsFrontBundle:Committee:posters_chairs.html.twig', array(
            'committee' => $this->getRepo('Posters Chairs', $edition)
        ));
    }

    public function organizingCommitteeAction()
    {
        $edition = $this->getRequest()->get('edition');
        return $this->render('WitsFrontBundle:Committee:organizing_committee.html.twig', array(
            'committee' => $this->getRepo('Organizing Committee', $edition)
        ));
    }

    public function technicalProgramCommitteeAction()
    {
        $edition = $this->getRequest()->get('edition');

        return $this->render('WitsFrontBundle:Committee:technical_program_committee.html.twig', array(
            'committee' => $this->getRepo('Technical Program Committee', $edition)
        ));
    }


    private function getRepo($committeeName, $edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Committee');
        $committee = $repo->getCommitteByNameAndConferenceEdition($committeeName,$edition);

        if (!$committee) {
            
            $committee = null;
        }

        return $committee;
    }

}
