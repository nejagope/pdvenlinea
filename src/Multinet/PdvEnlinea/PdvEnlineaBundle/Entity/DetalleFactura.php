<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleFactura
 *
 * @ORM\Table(name="detalle_factura", indexes={@ORM\Index(name="idFactura", columns={"idFactura"}), @ORM\Index(name="idProducto", columns={"idProducto"})})
 * @ORM\Entity
 */
class DetalleFactura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="subTotal", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $subtotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \Factura
     *
     * @ORM\ManyToOne(targetEntity="Factura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFactura", referencedColumnName="id")
     * })
     */
    private $idfactura;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProducto", referencedColumnName="id")
     * })
     */
    private $idproducto;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return DetalleFactura
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set subtotal
     *
     * @param string $subtotal
     * @return DetalleFactura
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return string 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return DetalleFactura
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return DetalleFactura
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set idfactura
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Factura $idfactura
     * @return DetalleFactura
     */
    public function setIdfactura(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Factura $idfactura = null)
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    /**
     * Get idfactura
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Factura 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }

    /**
     * Set idproducto
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Producto $idproducto
     * @return DetalleFactura
     */
    public function setIdproducto(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Producto $idproducto = null)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get idproducto
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Producto 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }
}
