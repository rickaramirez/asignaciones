<?php

namespace EMM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('EMMUserBundle:User')->findAll();
        
        $res = 'Lista de usuarios: <br />';
        
        foreach($users as $user)
        {
            $res .= 'Usuario: ' . $user->getUsername() . ' - Email: ' . $user->getEmail() . '<br />';
        }
        
        return new Response($res);
    }

    public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('EMMUserBundle:User');
        
        $user = $repository->find($id);
        //$user = $repository->findOneByUsername($id);
        
        return new Response ('Usuario: ' . $user->getUsername() . ' - Con Email: ' . $user->getEmail());
        
    }


    public function addAction()
    {
        return new Response('Agregar usuarios');
    }
    
    public function editAction($id)
    {
        return new Response('Editar usuarios '.$id);
    }
    
    public function deleteAction($id)
    {
        return new Response('Eliminar usuarios '.$id);
    }
    
/*   
    public function articleAction($page)
    {
        return new Response('este es mi articulo '. $page);
        
    }
*/
}
