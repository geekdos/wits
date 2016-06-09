<?php

namespace Wits\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WitsUserBundle:Default:index.html.twig');
    }
}
