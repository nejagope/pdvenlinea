<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PdvBundle:Default:index.html.twig');
    }
    public function principalAction(){
    	return $this->render('PdvBundle:Default:principal.html.twig');
    }
    public function searchAction($tabla,$objeto){
    	$em = $this->getDoctrine()->getManager();
    	$arreglo = array();
    	if ($tabla == 'Cliente') {
    		$table = 'Cliente';
    		$datos = $em->getRepository("PdvBundle:".$table)->findBy(array(
	    		'status' => 1
	    	));
    		foreach ($datos as $dato) {
	    		array_push($arreglo, array(
	    			'no' => $dato->getId(),
	    			'id' => $dato->getNitcliente(),
	    			'descripcion' =>$dato->getNombrecliente()
	    		));
	    	}
    	}
    	if ($tabla == 'Sucursal') {
    		$table = 'Empresa';
    		$datos = $em->getRepository("PdvBundle:".$table)->findBy(array(
	    		'status' => 1
	    	));
    		foreach ($datos as $dato) {
	    		array_push($arreglo, array(
	    			'no' => $dato->getId(),
	    			'id' => $dato->getId(),
	    			'descripcion' => $dato->getNombreempresa()
	    		));
	    	}
     	}
    	return $this->render('PdvBundle:Default:search.html.twig',array(
    		'datos' => $arreglo,
    		'objeto' => $objeto
    	));
    }
}
