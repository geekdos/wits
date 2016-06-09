<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function contactAction()
    {
        return $this->render('WitsFrontBundle:Contact:contact.html.twig', array(
            // ...
        ));
    }

}
