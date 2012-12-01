<?php

namespace FOS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function frontAction()
    {
        return $this->render('FOSAppBundle:Front:front.html.twig');
    }
}