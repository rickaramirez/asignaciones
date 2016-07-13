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
    
    public function articleAction($page)
    {
        return new Response('este es mi articulo '. $page);
    }
}
