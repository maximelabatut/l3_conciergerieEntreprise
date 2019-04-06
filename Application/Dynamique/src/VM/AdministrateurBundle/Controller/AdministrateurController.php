<?php

namespace VM\AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrateurController extends Controller
{
    public function indexAction()
    {
        return $this->render('VMAdministrateurBundle:Default:administrateur.html.twig');
    }
}
