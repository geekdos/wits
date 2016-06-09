<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommitteeController extends Controller
{

    public function generalChairsAction()
    {
        return $this->render('WitsFrontBundle:Committee:general_chairs.html.twig', array(
            'committee' => $this->getRepo('General Chairs')
        ));
    }

    public function honoraryCommitteeAction()
    {
        return $this->render('WitsFrontBundle:Committee:honorary_committee.html.twig', array(
            'committee' => $this->getRepo('Honorary Committee')
        ));
    }

    public function steeringCommitteeChairsAction()
    {
        return $this->render('WitsFrontBundle:Committee:steering_committee_chairs.html.twig', array(
            'committee' => $this->getRepo('Steering Committee')
        ));
    }

    public function programCommitteeChairsAction()
    {
        return $this->render('WitsFrontBundle:Committee:program_committee_chairs.html.twig', array(
            'committee' => $this->getRepo('Program Committee Chairs')
        ));
    }

    public function publicityAndCommunicationChairsAction()
    {
        return $this->render('WitsFrontBundle:Committee:publicity_and_communication_chairs.html.twig', array(
            'committee' => $this->getRepo('Publicity and Communication Chairs')
        ));
    }

    public function financeChairsAction()
    {
        return $this->render('WitsFrontBundle:Committee:financeChairs.html.twig', array(
            'committee' => $this->getRepo('Finance Chairs')
        ));
    }

    public function postersChairsAction()
    {
        return $this->render('WitsFrontBundle:Committee:posters_chairs.html.twig', array(
            'committee' => $this->getRepo('Posters Chairs')
        ));
    }

    public function organizingCommitteeAction()
    {
        return $this->render('WitsFrontBundle:Committee:organizing_committee.html.twig', array(
            'committee' => $this->getRepo('Organizing Committee')
        ));
    }

    public function technicalProgramCommitteeAction()
    {
        return $this->render('WitsFrontBundle:Committee:technical_program_committee.html.twig', array(
            'committee' => $this->getRepo('Technical Program Committee')
        ));
    }


    private function getRepo($committeeName){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Committee');
        $committee = $repo->findOneBy(
            array('name' => $committeeName),
            array('name' => 'ASC')
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
