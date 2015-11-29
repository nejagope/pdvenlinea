<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PdvBundle:Default:index.html.twig', array('name' => $name));
    }
}
