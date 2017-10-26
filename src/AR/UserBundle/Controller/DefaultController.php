<?php

namespace AR\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ARUserBundle:Default:index.html.twig');
    }
}
