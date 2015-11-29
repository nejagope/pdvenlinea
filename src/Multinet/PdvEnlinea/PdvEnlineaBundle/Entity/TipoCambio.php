<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCambio
 *
 * @ORM\Table(name="tipo_cambio", indexes={@ORM\Index(name="fk_tipocambio_tipomoneda_idx", columns={"id_tipo_moneda"}), @ORM\Index(name="fk_tipocambio_empresa_idx", columns={"id_empresa"})})
 * @ORM\Entity
 */
class TipoCambio
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
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=true)
     */
    private $valor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;

    /**
     * @var \TipoMoneda
     *
     * @ORM\ManyToOne(targetEntity="TipoMoneda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_moneda", referencedColumnName="id")
     * })
     */
    private $idTipoMoneda;



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
     * Set valor
     *
     * @param float $valor
     * @return TipoCambio
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return TipoCambio
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
     * @return TipoCambio
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
     * @return TipoCambio
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
     * Set idEmpresa
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empresa $idEmpresa
     * @return TipoCambio
     */
    public function setIdEmpresa(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empresa $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empresa 
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set idTipoMoneda
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoMoneda $idTipoMoneda
     * @return TipoCambio
     */
    public function setIdTipoMoneda(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoMoneda $idTipoMoneda = null)
    {
        $this->idTipoMoneda = $idTipoMoneda;

        return $this;
    }

    /**
     * Get idTipoMoneda
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoMoneda 
     */
    public function getIdTipoMoneda()
    {
        return $this->idTipoMoneda;
    }
}
