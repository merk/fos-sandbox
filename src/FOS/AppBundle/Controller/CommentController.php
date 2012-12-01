<?php

namespace FOS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentController extends Controller
{
    public function blogAction()
    {
        return $this->render('FOSAppBundle:Comment:blog.html.twig');
    }
}