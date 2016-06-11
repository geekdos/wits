<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 10/06/2016
 * Time: 13:46
 */

namespace Wits\FrontBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConferenceController extends Controller
{

    public function headerConferenceAction(){
        return $this->render(':Includes:header.html.twig', array(
            'conference' => $this->getRepo(),
        ));
    }

    public function footerConferenceAction(){
        return $this->render(':Includes:footer.html.twig', array(
            'conference' => $this->getRepo(),
        ));
    }


    public function allConferenceAction(){

        dump($this->allConferences());

        return $this->render(':Includes:allConferenes.html.twig', array(
            'conference' => $this->allConferences(),
        ));
    }

    private function getRepo(){

        $repo = $this->getManager();

        $edition = $this->container->getParameter("edition");
        $conference = $repo->findOneBy(
            array('edition' => $edition)
        );

        if (!$conference) {
            $conference = null;
        }

        return $conference;
    }

    private function allConferences(){
        return $this->getManager()->getAllConferences();
    }

    private function getManager(){
        $em = $this->getManager();

        return $em->getRepository('WitsFrontBundle:Conference');
    }

}