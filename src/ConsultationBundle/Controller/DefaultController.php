<?php

namespace ConsultationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ConsultationBundle:Default:index.html.twig');
    }
}
