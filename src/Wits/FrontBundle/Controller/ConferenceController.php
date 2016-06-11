<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 10/06/2016
 * Time: 13:46
 */

namespace Wits\FrontBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ConferenceController extends Controller
{

    private $edition;

    public function headerConferenceAction(Request $originalRequest){

        $this->edition = $originalRequest->get('edition');

        return $this->render(':Includes:header.html.twig', array(
            'conference' => $this->getRepo($this->edition),
        ));
    }

    public function footerConferenceAction(Request $originalRequest){
        $this->edition = $originalRequest->get('edition');
        return $this->render(':Includes:footer.html.twig', array(
            'conference' => $this->getRepo($this->edition),
        ));
    }
    
    public function showAllConferenceAction(Request $originalRequest){
        $this->edition = $originalRequest->get('edition');
        return $this->render(':Includes:allConferenes.html.twig', array(
            'allConferences' => $this->getAllConferences(),
        ));
    }
    
    public function menuRenderAction(Request $originalRequest){

        $this->edition = $originalRequest->get('edition');

        return $this->render(':Includes:menu.html.twig', array(
            'conferenceMenu' => $this->getRepo($this->edition),
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Conference');

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