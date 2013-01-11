<?php

namespace FOS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function demoAction()
    {
        return $this->render('FOSAppBundle:User:demo.html.twig');
    }
}