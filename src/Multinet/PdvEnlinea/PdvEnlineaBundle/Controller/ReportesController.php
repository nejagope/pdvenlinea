<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReportesController extends Controller
{
    public function ventasdiariasAction(){
        $today = new \DateTime();
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $reporte = $qb->select('f.id,(df.cantidad * p.precioventa) total')
                     ->from('PdvBundle:Factura','f')
                     ->join("PdvBundle:DetalleFactura",'df',\Doctrine\ORM\Query\Expr\Join::WITH,"f.id = df.idfactura")
                     ->join("PdvBundle:Producto",'p',\Doctrine\ORM\Query\Expr\Join::WITH,"df.idproducto = p.id")
                     ->where('f.createdat = :fecha')
                     ->setParameter('fecha',$today->format('yyyy-mm-dd'))
                     ->groupBy('f.id')
                     ->getQuery()->getResult();
                     var_dump($reporte);
        return $this->render('PdvBundle:Reportes:ventasdiarias.html.twig');
    }
    public function ventasporvendedorAction(){
        return $this->render('PdvBundle:Reportes:ventasporvendedor.html.twig');
    }
    public function productosmasvendidosAction(){
        return $this->render('PdvBundle:Reportes:productosmasvendidos.html.twig');
    }
    public function clientescomprasAction(){
        return $this->render('PdvBundle:Reportes:clientescompras.html.twig');
    }
    

}
