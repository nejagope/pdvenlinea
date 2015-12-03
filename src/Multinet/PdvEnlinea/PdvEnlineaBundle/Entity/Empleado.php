<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Empleado
 *
 * @ORM\Table(name="empleado", indexes={@ORM\Index(name="idTipoEmpleado", columns={"idTipoEmpleado"}), @ORM\Index(name="idPuesto", columns={"idPuesto"}), @ORM\Index(name="idAreaEmpresa", columns={"idAreaEmpresa"})})
 * @ORM\Entity
 */
class Empleado implements UserInterface, \Serializable
{
    public function getUserName()
    {
        return $this->getUsuariosistema();
    }
    public function getPassword()
    {
        return $this->getPasswordsistema();
    }
    public function getSalt()
    {
        return '';
    }
    public function getRoles()
    {
        return array($this->getRol());
    }
     public function eraseCredentials()
    {
    }
         public function serialize()
         {
                return serialize(array(
                    $this->id,
                    $this->passwordsistema,
                    // see section on salt below
                    // $this->salt,
                ));
         }

         public function unserialize($serialized)
         {
                list (
                    $this->id,
                    $this->passwordsistema,
                    // see section on salt below
                    // $this->salt
                ) = unserialize($serialized);
         }
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
     * @ORM\Column(name="idTienda", type="integer", nullable=true)
     */
    private $idtienda;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=255, nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="usuarioSistema", type="string", length=255, nullable=false)
     */
    private $usuariosistema;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordSistema", type="string", length=255, nullable=false)
     */
    private $passwordsistema;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaContratado", type="datetime", nullable=false)
     */
    private $fechacontratado;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=20, nullable=true)
     */
    private $rol;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaDespido", type="datetime", nullable=true)
     */
    private $fechadespido;

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
     * @var \TipoEmpleado
     *
     * @ORM\ManyToOne(targetEntity="TipoEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTipoEmpleado", referencedColumnName="id")
     * })
     */
    private $idtipoempleado;

    /**
     * @var \Puesto
     *
     * @ORM\ManyToOne(targetEntity="Puesto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPuesto", referencedColumnName="id")
     * })
     */
    private $idpuesto;

    /**
     * @var \AreaEmpresa
     *
     * @ORM\ManyToOne(targetEntity="AreaEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAreaEmpresa", referencedColumnName="id")
     * })
     */
    private $idareaempresa;



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
     * @return Empleado
     */
    public function setIdtienda($idtienda)
    {
        $this->idtienda = $idtienda;

        return $this;
    }

    /**
     * Set rol
     *
     * @param string $rol
     * @return Dxtabase
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    
        return $this;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
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
     * Set nombres
     *
     * @param string $nombres
     * @return Empleado
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Empleado
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Empleado
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Empleado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Empleado
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set usuariosistema
     *
     * @param string $usuariosistema
     * @return Empleado
     */
    public function setUsuariosistema($usuariosistema)
    {
        $this->usuariosistema = $usuariosistema;

        return $this;
    }

    /**
     * Get usuariosistema
     *
     * @return string 
     */
    public function getUsuariosistema()
    {
        return $this->usuariosistema;
    }

    /**
     * Set passwordsistema
     *
     * @param string $passwordsistema
     * @return Empleado
     */
    public function setPasswordsistema($passwordsistema)
    {
        $this->passwordsistema = $passwordsistema;

        return $this;
    }

    /**
     * Get passwordsistema
     *
     * @return string 
     */
    public function getPasswordsistema()
    {
        return $this->passwordsistema;
    }

    /**
     * Set fechacontratado
     *
     * @param \DateTime $fechacontratado
     * @return Empleado
     */
    public function setFechacontratado($fechacontratado)
    {
        $this->fechacontratado = $fechacontratado;

        return $this;
    }

    /**
     * Get fechacontratado
     *
     * @return \DateTime 
     */
    public function getFechacontratado()
    {
        return $this->fechacontratado;
    }

    /**
     * Set fechadespido
     *
     * @param \DateTime $fechadespido
     * @return Empleado
     */
    public function setFechadespido($fechadespido)
    {
        $this->fechadespido = $fechadespido;

        return $this;
    }

    /**
     * Get fechadespido
     *
     * @return \DateTime 
     */
    public function getFechadespido()
    {
        return $this->fechadespido;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Empleado
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
     * @return Empleado
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
     * @return Empleado
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
     * Set idtipoempleado
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoEmpleado $idtipoempleado
     * @return Empleado
     */
    public function setIdtipoempleado(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoEmpleado $idtipoempleado = null)
    {
        $this->idtipoempleado = $idtipoempleado;

        return $this;
    }

    /**
     * Get idtipoempleado
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoEmpleado 
     */
    public function getIdtipoempleado()
    {
        return $this->idtipoempleado;
    }

    /**
     * Set idpuesto
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Puesto $idpuesto
     * @return Empleado
     */
    public function setIdpuesto(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Puesto $idpuesto = null)
    {
        $this->idpuesto = $idpuesto;

        return $this;
    }

    /**
     * Get idpuesto
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Puesto 
     */
    public function getIdpuesto()
    {
        return $this->idpuesto;
    }

    /**
     * Set idareaempresa
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\AreaEmpresa $idareaempresa
     * @return Empleado
     */
    public function setIdareaempresa(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\AreaEmpresa $idareaempresa = null)
    {
        $this->idareaempresa = $idareaempresa;

        return $this;
    }

    /**
     * Get idareaempresa
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\AreaEmpresa 
     */
    public function getIdareaempresa()
    {
        return $this->idareaempresa;
    }
    public function __toString(){
        return (string) $this->getNombres()." ".$this->getApellidos();
    }
}
