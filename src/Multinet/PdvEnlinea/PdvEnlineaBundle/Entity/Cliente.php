<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente
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
     * @ORM\Column(name="nombreCliente", type="string", length=255, nullable=false)
     */
    private $nombrecliente;

    /**
     * @var string
     *
     * @ORM\Column(name="NitCliente", type="string", length=255, nullable=false)
     */
    private $nitcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionCliente", type="string", length=255, nullable=false)
     */
    private $direccioncliente;

    /**
     * @var string
     *
     * @ORM\Column(name="mailCliente", type="string", length=255, nullable=false)
     */
    private $mailcliente;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombrecliente
     *
     * @param string $nombrecliente
     * @return Cliente
     */
    public function setNombrecliente($nombrecliente)
    {
        $this->nombrecliente = $nombrecliente;

        return $this;
    }

    /**
     * Get nombrecliente
     *
     * @return string 
     */
    public function getNombrecliente()
    {
        return $this->nombrecliente;
    }

    /**
     * Set nitcliente
     *
     * @param string $nitcliente
     * @return Cliente
     */
    public function setNitcliente($nitcliente)
    {
        $this->nitcliente = $nitcliente;

        return $this;
    }

    /**
     * Get nitcliente
     *
     * @return string 
     */
    public function getNitcliente()
    {
        return $this->nitcliente;
    }

    /**
     * Set direccioncliente
     *
     * @param string $direccioncliente
     * @return Cliente
     */
    public function setDireccioncliente($direccioncliente)
    {
        $this->direccioncliente = $direccioncliente;

        return $this;
    }

    /**
     * Get direccioncliente
     *
     * @return string 
     */
    public function getDireccioncliente()
    {
        return $this->direccioncliente;
    }

    /**
     * Set mailcliente
     *
     * @param string $mailcliente
     * @return Cliente
     */
    public function setMailcliente($mailcliente)
    {
        $this->mailcliente = $mailcliente;

        return $this;
    }

    /**
     * Get mailcliente
     *
     * @return string 
     */
    public function getMailcliente()
    {
        return $this->mailcliente;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
    public function __toString(){
        return (string) $this->getNitcliente()." | ".$this->getNombrecliente();
    }
}
