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
        $reporte = $qb->select('f.id,sum(df.cantidad * p.precioventa) as total,f.createdat')
                     ->from('PdvBundle:Factura','f')
                     ->join("PdvBundle:DetalleFactura",'df',\Doctrine\ORM\Query\Expr\Join::WITH,"f.id = df.idfactura")
                     ->join("PdvBundle:Producto",'p',\Doctrine\ORM\Query\Expr\Join::WITH,"df.idproducto = p.id")
                     ->where('f.createdat = :fecha')
                     ->setParameter('fecha',$today->format('Y-m-d'))
                     ->groupBy('f.id')
                     ->getQuery()->getResult();
        return $this->render('PdvBundle:Reportes:ventasdiarias.html.twig',array(
            'reporte' => $reporte
        ));
    }
    public function ventasporvendedorAction(){
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $reporte = $qb->select('e.id,e.nombres,e.apellidos,sum(df.cantidad * p.precioventa) as total')
                     ->from('PdvBundle:Factura','f')
                     ->join("PdvBundle:DetalleFactura",'df',\Doctrine\ORM\Query\Expr\Join::WITH,"f.id = df.idfactura")
                     ->join("PdvBundle:Producto",'p',\Doctrine\ORM\Query\Expr\Join::WITH,"df.idproducto = p.id")
                     ->join("PdvBundle:Empleado",'e',\Doctrine\ORM\Query\Expr\Join::WITH,"f.idempleado = e.id")
                     ->groupBy('e.id')
                     ->getQuery()->getResult();
        return $this->render('PdvBundle:Reportes:ventasporvendedor.html.twig',array(
            'reporte' => $reporte
        ));
    }
    public function productosmasvendidosAction(){
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $reporte = $qb->select('p.id,p.nombre,p.precioventa,sum(df.cantidad) totalcantidad,sum(df.cantidad * p.precioventa) as total,f.createdat')
                     ->from('PdvBundle:Factura','f')
                     ->join("PdvBundle:DetalleFactura",'df',\Doctrine\ORM\Query\Expr\Join::WITH,"f.id = df.idfactura")
                     ->join("PdvBundle:Producto",'p',\Doctrine\ORM\Query\Expr\Join::WITH,"df.idproducto = p.id")
                     ->groupBy('p.id')
                     ->getQuery()->getResult();
        return $this->render('PdvBundle:Reportes:productosmasvendidos.html.twig',array(
            'reporte' => $reporte
        ));
    }
    public function clientescomprasAction(){
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $reporte = $qb->select('c.id,c.nombrecliente,c.nitcliente,sum(df.cantidad * p.precioventa) as total,f.createdat')
                     ->from('PdvBundle:Factura','f')
                     ->join("PdvBundle:DetalleFactura",'df',\Doctrine\ORM\Query\Expr\Join::WITH,"f.id = df.idfactura")
                     ->join("PdvBundle:Producto",'p',\Doctrine\ORM\Query\Expr\Join::WITH,"df.idproducto = p.id")
                     ->join("PdvBundle:Cliente",'c',\Doctrine\ORM\Query\Expr\Join::WITH,"f.idCliente= c.id")
                     ->groupBy('c.id')
                     ->getQuery()->getResult();
        return $this->render('PdvBundle:Reportes:clientescompras.html.twig',array(
            'reporte' => $reporte
        ));
    }
    

}
