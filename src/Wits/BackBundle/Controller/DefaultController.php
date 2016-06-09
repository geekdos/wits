<?php

namespace Wits\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WitsBackBundle:Default:index.html.twig');
    }
}
