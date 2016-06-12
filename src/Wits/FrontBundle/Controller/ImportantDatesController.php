<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ImportantDatesController extends Controller
{
    public function showImportantDatesAction(Request $originalRequest)
    {
        $edition = $originalRequest->get('edition');
        return $this->render('WitsFrontBundle:ImportantDates:show_important_dates.html.twig', array(
            'importantDates' => $this->getRepo($edition),
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:ImportantDates');
        
        $importdates = $repo->getImportanteDateByConferenceEdition($edition);

        if (!$importdates) {
            $importdates = null;
        }

        return $importdates;
    }

}
