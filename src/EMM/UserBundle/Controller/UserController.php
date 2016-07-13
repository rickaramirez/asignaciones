<?php

namespace EMM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        return new Response('Bienvenido a mi módulo de usuarios');
    }
 
    public function addAction()
    {
        return new Response('Agregar usuarios');
    }
    
    public function editAction($id)
    {
        return new Response('Editar usuarios '.$id);
    }
    
    public function viewAction($id)
    {
        return new Response('Ver usuarios '.$id);
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
