<?php

namespace WCS\AtelierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSAtelierBundle:Default:index.html.twig');
    }
}
