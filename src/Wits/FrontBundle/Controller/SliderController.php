<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SliderController extends Controller
{
    public function showSliderAction(Request $originalRequest)
    {
        $edition = $originalRequest->get('edition');

        return $this->render(':Includes:slider.html.twig', array(
            'conferenceSlider' => $this->getRepo($edition),
        ));
    }

    private function getRepo($edition){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('WitsFrontBundle:Slider');

        $conference = $repo->getSliderByConferenceEdition($edition);

        return $conference;
    }
}
