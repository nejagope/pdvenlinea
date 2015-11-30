<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura", indexes={@ORM\Index(name="idEmpleado", columns={"idEmpleado"}), @ORM\Index(name="fk_factura_sucursal_idx", columns={"id_sucursal"}), @ORM\Index(name="fk_factura_cliente_idx", columns={"id_cliente"})})
 * @ORM\Entity
 */
class Factura
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
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=false)
     */
    private $updatedat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_factura", type="date", nullable=true)
     */
    private $fechaFactura;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_cierre", type="boolean", nullable=true)
     */
    private $estadoCierre;

    /**
     * @var \Empleado
     *
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEmpleado", referencedColumnName="id")
     * })
     */
    private $idempleado;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sucursal", referencedColumnName="id")
     * })
     */
    private $idSucursal;

    /**
     * @var \Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     * })
     */
    private $idCliente;



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
     * Set status
     *
     * @param boolean $status
     * @return Factura
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
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Factura
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime 
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     * @return Factura
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get updatedat
     *
     * @return \DateTime 
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set fechaFactura
     *
     * @param \DateTime $fechaFactura
     * @return Factura
     */
    public function setFechaFactura($fechaFactura)
    {
        $this->fechaFactura = $fechaFactura;

        return $this;
    }

    /**
     * Get fechaFactura
     *
     * @return \DateTime 
     */
    public function getFechaFactura()
    {
        return $this->fechaFactura;
    }

    /**
     * Set estadoCierre
     *
     * @param boolean $estadoCierre
     * @return Factura
     */
    public function setEstadoCierre($estadoCierre)
    {
        $this->estadoCierre = $estadoCierre;

        return $this;
    }

    /**
     * Get estadoCierre
     *
     * @return boolean 
     */
    public function getEstadoCierre()
    {
        return $this->estadoCierre;
    }

    /**
     * Set idempleado
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empleado $idempleado
     * @return Factura
     */
    public function setIdempleado(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empleado $idempleado = null)
    {
        $this->idempleado = $idempleado;

        return $this;
    }

    /**
     * Get idempleado
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empleado 
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }

    /**
     * Set idSucursal
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empresa $idSucursal
     * @return Factura
     */
    public function setIdSucursal(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empresa $idSucursal = null)
    {
        $this->idSucursal = $idSucursal;

        return $this;
    }

    /**
     * Get idSucursal
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empresa 
     */
    public function getIdSucursal()
    {
        return $this->idSucursal;
    }

    /**
     * Set idCliente
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Cliente $idCliente
     * @return Factura
     */
    public function setIdCliente(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Cliente $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Cliente 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }
}
