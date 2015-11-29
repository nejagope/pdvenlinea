<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmpresaResolucion
 *
 * @ORM\Table(name="empresa_resolucion", indexes={@ORM\Index(name="fk_empresaresolucion_empresa_idx", columns={"id_empresa"}), @ORM\Index(name="fk_empresaresolucion_resolucion_idx", columns={"id_resolucion"})})
 * @ORM\Entity
 */
class EmpresaResolucion
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
     * @var \ResolucionSat
     *
     * @ORM\ManyToOne(targetEntity="ResolucionSat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_resolucion", referencedColumnName="id")
     * })
     */
    private $idResolucion;



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
     * @return EmpresaResolucion
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
     * @return EmpresaResolucion
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
     * @return EmpresaResolucion
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
     * @return EmpresaResolucion
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
     * Set idResolucion
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\ResolucionSat $idResolucion
     * @return EmpresaResolucion
     */
    public function setIdResolucion(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\ResolucionSat $idResolucion = null)
    {
        $this->idResolucion = $idResolucion;

        return $this;
    }

    /**
     * Get idResolucion
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\ResolucionSat 
     */
    public function getIdResolucion()
    {
        return $this->idResolucion;
    }
}
