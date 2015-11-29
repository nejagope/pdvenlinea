<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa", indexes={@ORM\Index(name="fk_empresa_tipoempresa_idx", columns={"id_tipo_empresa"}), @ORM\Index(name="fk_empresa_empresa_idx", columns={"id_sucursal"})})
 * @ORM\Entity
 */
class Empresa
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
     * @ORM\Column(name="nitEmpresa", type="string", length=255, nullable=false)
     */
    private $nitempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreEmpresa", type="string", length=255, nullable=false)
     */
    private $nombreempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionEmpresa", type="string", length=255, nullable=false)
     */
    private $direccionempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="mailEmpresa", type="string", length=255, nullable=false)
     */
    private $mailempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="contactoEmpresa", type="string", length=255, nullable=false)
     */
    private $contactoempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonoEmpresa", type="string", length=255, nullable=false)
     */
    private $telefonoempresa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

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
     * @var string
     *
     * @ORM\Column(name="nombre_certificado", type="string", length=200, nullable=true)
     */
    private $nombreCertificado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_sucursal", type="boolean", nullable=true)
     */
    private $estadoSucursal;

    /**
     * @var \TipoEmpresa
     *
     * @ORM\ManyToOne(targetEntity="TipoEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_empresa", referencedColumnName="id")
     * })
     */
    private $idTipoEmpresa;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nitempresa
     *
     * @param string $nitempresa
     * @return Empresa
     */
    public function setNitempresa($nitempresa)
    {
        $this->nitempresa = $nitempresa;

        return $this;
    }

    /**
     * Get nitempresa
     *
     * @return string 
     */
    public function getNitempresa()
    {
        return $this->nitempresa;
    }

    /**
     * Set nombreempresa
     *
     * @param string $nombreempresa
     * @return Empresa
     */
    public function setNombreempresa($nombreempresa)
    {
        $this->nombreempresa = $nombreempresa;

        return $this;
    }

    /**
     * Get nombreempresa
     *
     * @return string 
     */
    public function getNombreempresa()
    {
        return $this->nombreempresa;
    }

    /**
     * Set direccionempresa
     *
     * @param string $direccionempresa
     * @return Empresa
     */
    public function setDireccionempresa($direccionempresa)
    {
        $this->direccionempresa = $direccionempresa;

        return $this;
    }

    /**
     * Get direccionempresa
     *
     * @return string 
     */
    public function getDireccionempresa()
    {
        return $this->direccionempresa;
    }

    /**
     * Set mailempresa
     *
     * @param string $mailempresa
     * @return Empresa
     */
    public function setMailempresa($mailempresa)
    {
        $this->mailempresa = $mailempresa;

        return $this;
    }

    /**
     * Get mailempresa
     *
     * @return string 
     */
    public function getMailempresa()
    {
        return $this->mailempresa;
    }

    /**
     * Set contactoempresa
     *
     * @param string $contactoempresa
     * @return Empresa
     */
    public function setContactoempresa($contactoempresa)
    {
        $this->contactoempresa = $contactoempresa;

        return $this;
    }

    /**
     * Get contactoempresa
     *
     * @return string 
     */
    public function getContactoempresa()
    {
        return $this->contactoempresa;
    }

    /**
     * Set telefonoempresa
     *
     * @param string $telefonoempresa
     * @return Empresa
     */
    public function setTelefonoempresa($telefonoempresa)
    {
        $this->telefonoempresa = $telefonoempresa;

        return $this;
    }

    /**
     * Get telefonoempresa
     *
     * @return string 
     */
    public function getTelefonoempresa()
    {
        return $this->telefonoempresa;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * Set nombreCertificado
     *
     * @param string $nombreCertificado
     * @return Empresa
     */
    public function setNombreCertificado($nombreCertificado)
    {
        $this->nombreCertificado = $nombreCertificado;

        return $this;
    }

    /**
     * Get nombreCertificado
     *
     * @return string 
     */
    public function getNombreCertificado()
    {
        return $this->nombreCertificado;
    }

    /**
     * Set estadoSucursal
     *
     * @param boolean $estadoSucursal
     * @return Empresa
     */
    public function setEstadoSucursal($estadoSucursal)
    {
        $this->estadoSucursal = $estadoSucursal;

        return $this;
    }

    /**
     * Get estadoSucursal
     *
     * @return boolean 
     */
    public function getEstadoSucursal()
    {
        return $this->estadoSucursal;
    }

    /**
     * Set idTipoEmpresa
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoEmpresa $idTipoEmpresa
     * @return Empresa
     */
    public function setIdTipoEmpresa(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoEmpresa $idTipoEmpresa = null)
    {
        $this->idTipoEmpresa = $idTipoEmpresa;

        return $this;
    }

    /**
     * Get idTipoEmpresa
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoEmpresa 
     */
    public function getIdTipoEmpresa()
    {
        return $this->idTipoEmpresa;
    }

    /**
     * Set idSucursal
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empresa $idSucursal
     * @return Empresa
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
}
