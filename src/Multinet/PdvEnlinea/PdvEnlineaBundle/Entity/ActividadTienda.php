<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadTienda
 *
 * @ORM\Table(name="actividad_tienda", indexes={@ORM\Index(name="idTipoActividad", columns={"idTipoActividad"}), @ORM\Index(name="idProducto", columns={"idProducto"})})
 * @ORM\Entity
 */
class ActividadTienda
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
     * @ORM\Column(name="idTienda", type="integer", nullable=false)
     */
    private $idtienda;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidadProducto", type="integer", nullable=false)
     */
    private $cantidadproducto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaActividad", type="datetime", nullable=false)
     */
    private $fechaactividad;

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
     * @var \TipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TipoActividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTipoActividad", referencedColumnName="id")
     * })
     */
    private $idtipoactividad;

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
     * Set idtienda
     *
     * @param integer $idtienda
     * @return ActividadTienda
     */
    public function setIdtienda($idtienda)
    {
        $this->idtienda = $idtienda;

        return $this;
    }

    /**
     * Get idtienda
     *
     * @return integer 
     */
    public function getIdtienda()
    {
        return $this->idtienda;
    }

    /**
     * Set cantidadproducto
     *
     * @param integer $cantidadproducto
     * @return ActividadTienda
     */
    public function setCantidadproducto($cantidadproducto)
    {
        $this->cantidadproducto = $cantidadproducto;

        return $this;
    }

    /**
     * Get cantidadproducto
     *
     * @return integer 
     */
    public function getCantidadproducto()
    {
        return $this->cantidadproducto;
    }

    /**
     * Set fechaactividad
     *
     * @param \DateTime $fechaactividad
     * @return ActividadTienda
     */
    public function setFechaactividad($fechaactividad)
    {
        $this->fechaactividad = $fechaactividad;

        return $this;
    }

    /**
     * Get fechaactividad
     *
     * @return \DateTime 
     */
    public function getFechaactividad()
    {
        return $this->fechaactividad;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ActividadTienda
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
     * @return ActividadTienda
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
     * Set idtipoactividad
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoActividad $idtipoactividad
     * @return ActividadTienda
     */
    public function setIdtipoactividad(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoActividad $idtipoactividad = null)
    {
        $this->idtipoactividad = $idtipoactividad;

        return $this;
    }

    /**
     * Get idtipoactividad
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoActividad 
     */
    public function getIdtipoactividad()
    {
        return $this->idtipoactividad;
    }

    /**
     * Set idproducto
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Producto $idproducto
     * @return ActividadTienda
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
