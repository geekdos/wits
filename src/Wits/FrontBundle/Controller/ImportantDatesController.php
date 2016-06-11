<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImportantDatesController extends Controller
{
    public function showImportantDatesAction()
    {
        dump($this->getRepo());

        return $this->render('WitsFrontBundle:ImportantDates:show_important_dates.html.twig', array(
            'importantDates' => $this->getRepo(),
        ));
    }

    private function getRepo(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:ImportantDates');
        $edition = $this->container->getParameter("edition");
        $importdates = $repo->getImportanteDateByConferenceEdition($edition);

        if (!$importdates) {
            $importdates = null;
        }

        return $importdates;
    }

}
