<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResolucionSat
 *
 * @ORM\Table(name="resolucion_sat")
 * @ORM\Entity
 */
class ResolucionSat
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
     * @var string
     *
     * @ORM\Column(name="resolucionSat", type="string", length=255, nullable=false)
     */
    private $resolucionsat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEmision", type="datetime", nullable=false)
     */
    private $fechaemision;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

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
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=5, nullable=true)
     */
    private $serie;

    /**
     * @var integer
     *
     * @ORM\Column(name="correlativo_desde", type="integer", nullable=true)
     */
    private $correlativoDesde;

    /**
     * @var integer
     *
     * @ORM\Column(name="correlativo_hasta", type="integer", nullable=true)
     */
    private $correlativoHasta;

    /**
     * @var integer
     *
     * @ORM\Column(name="correlativo_factura", type="integer", nullable=true)
     */
    private $correlativoFactura;



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
     * Set resolucionsat
     *
     * @param string $resolucionsat
     * @return ResolucionSat
     */
    public function setResolucionsat($resolucionsat)
    {
        $this->resolucionsat = $resolucionsat;

        return $this;
    }

    /**
     * Get resolucionsat
     *
     * @return string 
     */
    public function getResolucionsat()
    {
        return $this->resolucionsat;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     * @return ResolucionSat
     */
    public function setFechaemision($fechaemision)
    {
        $this->fechaemision = $fechaemision;

        return $this;
    }

    /**
     * Get fechaemision
     *
     * @return \DateTime 
     */
    public function getFechaemision()
    {
        return $this->fechaemision;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return ResolucionSat
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ResolucionSat
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
     * @return ResolucionSat
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
     * Set serie
     *
     * @param string $serie
     * @return ResolucionSat
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set correlativoDesde
     *
     * @param integer $correlativoDesde
     * @return ResolucionSat
     */
    public function setCorrelativoDesde($correlativoDesde)
    {
        $this->correlativoDesde = $correlativoDesde;

        return $this;
    }

    /**
     * Get correlativoDesde
     *
     * @return integer 
     */
    public function getCorrelativoDesde()
    {
        return $this->correlativoDesde;
    }

    /**
     * Set correlativoHasta
     *
     * @param integer $correlativoHasta
     * @return ResolucionSat
     */
    public function setCorrelativoHasta($correlativoHasta)
    {
        $this->correlativoHasta = $correlativoHasta;

        return $this;
    }

    /**
     * Get correlativoHasta
     *
     * @return integer 
     */
    public function getCorrelativoHasta()
    {
        return $this->correlativoHasta;
    }

    /**
     * Set correlativoFactura
     *
     * @param integer $correlativoFactura
     * @return ResolucionSat
     */
    public function setCorrelativoFactura($correlativoFactura)
    {
        $this->correlativoFactura = $correlativoFactura;

        return $this;
    }

    /**
     * Get correlativoFactura
     *
     * @return integer 
     */
    public function getCorrelativoFactura()
    {
        return $this->correlativoFactura;
    }
}
