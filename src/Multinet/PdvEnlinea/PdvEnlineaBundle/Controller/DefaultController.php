<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PdvBundle:Default:index.html.twig');
    }
}
