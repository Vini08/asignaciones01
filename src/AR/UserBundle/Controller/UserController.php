<?php

namespace AR\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('ARUserBundle:User')->findAll();
        
        /*Muestra tdos los datos de usaurio sin formato 
        $res = 'Lista de usuarios <br />';
        foreach ($users as $user) {
        $res .= 'Usuario: ' .$user->getNombre().'<br />';
        }
        return new Response($res);
        ------------------------------------------------*/
        
        return $this->render('ARUserBundle:User:index.html.twig', array('users' => $users));
        
    }
    
    public function viewAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('ARUserBundle:User')->findAll();
        
         $res = 'Lista de usuarios <br />';
        foreach ($users as $user) {
        $res .= 'Usuario: ' .$user->getNombre().'<br />';
        }
        return new Response($res);
    }
}
