<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 10/06/2016
 * Time: 13:46
 */

namespace Wits\FrontBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class ConferenceController extends Controller
{

    public function headerConferenceAction(){

        $last = $this->getDoctrine()->getManager()->getRepository('WitsFrontBundle:Conference')->getLasteConference();

        dump($last);

        return $this->render(':Includes:header.html.twig', array(
            'conference' => $this->getRepo(),
        ));
    }

    public function footerConferenceAction(){
        return $this->render(':Includes:footer.html.twig', array(
            'conference' => $this->getRepo(),
        ));
    }
    
    public function showAllConferenceAction(){
        return $this->render(':Includes:allConferenes.html.twig', array(
            'allConferences' => $this->getAllConferences(),
        ));
    }
    
    public function menuRenderAction(){
        return $this->render(':Includes:menu.html.twig', array(
            'conferenceMenu' => $this->getRepo(),
        ));
    }

    private function getRepo(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Conference');
        $edition = $this->container->getParameter('edition');
        //$edition = $this->container->setParameter('edition', 4);
        $conference = $repo->findOneBy(
            array('edition' => $edition)
        );

        if (!$conference) {
            $conference = null;
        }

        return $conference;
    }
    
    private function getAllConferences(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Conference');
        $conferences = $repo->getAllConferences();

        if (!$conferences) {
            $conferences = null;
        }

        return $conferences;
    }
    
}