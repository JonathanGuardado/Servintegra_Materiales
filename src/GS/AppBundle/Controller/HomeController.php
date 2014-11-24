<?php

namespace GS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Home:index.html.twig');
    }
     public function proximamenteAction()
    {
        return $this->render('AppBundle:Home:mantenimiento.html.twig');
    }
}
