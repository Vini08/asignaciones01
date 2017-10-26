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
        
        $res = 'Lista de usuarios <br />';
        
        foreach ($users as $user) {
            
            $res .= 'Usuario: ' .$user->getNombre().'<br />';
            
        }
        
        return new Response($res);
    }
    
    public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('ARUserBundle:User');
        
        $user = $repository->find($id);
         
        return new Response('Usuario: '.$user->getNombre(). ' Contraseña: '.$user->getPassword()); 
    }
}
