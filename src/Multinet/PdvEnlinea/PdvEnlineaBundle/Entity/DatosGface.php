<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatosGface
 *
 * @ORM\Table(name="datos_gface", indexes={@ORM\Index(name="fk_datosgface_empresa_idx", columns={"id_empresa"})})
 * @ORM\Entity
 */
class DatosGface
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
     * @ORM\Column(name="Nitgface", type="string", length=255, nullable=false)
     */
    private $nitgface;

    /**
     * @var string
     *
     * @ORM\Column(name="direcciongface", type="string", length=255, nullable=false)
     */
    private $direcciongface;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estadogface", type="boolean", nullable=true)
     */
    private $estadogface;

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
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;



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
     * Set nitgface
     *
     * @param string $nitgface
     * @return DatosGface
     */
    public function setNitgface($nitgface)
    {
        $this->nitgface = $nitgface;

        return $this;
    }

    /**
     * Get nitgface
     *
     * @return string 
     */
    public function getNitgface()
    {
        return $this->nitgface;
    }

    /**
     * Set direcciongface
     *
     * @param string $direcciongface
     * @return DatosGface
     */
    public function setDirecciongface($direcciongface)
    {
        $this->direcciongface = $direcciongface;

        return $this;
    }

    /**
     * Get direcciongface
     *
     * @return string 
     */
    public function getDirecciongface()
    {
        return $this->direcciongface;
    }

    /**
     * Set estadogface
     *
     * @param boolean $estadogface
     * @return DatosGface
     */
    public function setEstadogface($estadogface)
    {
        $this->estadogface = $estadogface;

        return $this;
    }

    /**
     * Get estadogface
     *
     * @return boolean 
     */
    public function getEstadogface()
    {
        return $this->estadogface;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return DatosGface
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
     * @return DatosGface
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
     * @return DatosGface
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
}
