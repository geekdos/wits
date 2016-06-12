<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SpeakersController extends Controller
{
    public function speakersAction()
    {
        return $this->render('WitsFrontBundle:Speakers:speakers.html.twig', array(
            // ...
        ));
    }

}
