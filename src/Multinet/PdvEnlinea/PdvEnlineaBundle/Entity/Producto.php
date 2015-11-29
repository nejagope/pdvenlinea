<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto", indexes={@ORM\Index(name="idDistribuidor", columns={"idDistribuidor"}), @ORM\Index(name="idCategoriaProducto", columns={"idCategoriaProducto"}), @ORM\Index(name="fk_producto_empresa_idx", columns={"id_empresa"}), @ORM\Index(name="fk_producto_unidadmedida_idx", columns={"id_unidad_medida"}), @ORM\Index(name="fk_producto_tipomoneda_idx", columns={"id_tipo_moneda"})})
 * @ORM\Entity
 */
class Producto
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="precioCosto", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $preciocosto;

    /**
     * @var string
     *
     * @ORM\Column(name="precioVenta", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $precioventa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaVencimiento", type="datetime", nullable=false)
     */
    private $fechavencimiento;

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
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var \Fabricante
     *
     * @ORM\ManyToOne(targetEntity="Fabricante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDistribuidor", referencedColumnName="id")
     * })
     */
    private $iddistribuidor;

    /**
     * @var \CategoriaProducto
     *
     * @ORM\ManyToOne(targetEntity="CategoriaProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategoriaProducto", referencedColumnName="id")
     * })
     */
    private $idcategoriaproducto;

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
     * @var \UnidadesMedida
     *
     * @ORM\ManyToOne(targetEntity="UnidadesMedida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unidad_medida", referencedColumnName="id")
     * })
     */
    private $idUnidadMedida;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set preciocosto
     *
     * @param string $preciocosto
     * @return Producto
     */
    public function setPreciocosto($preciocosto)
    {
        $this->preciocosto = $preciocosto;

        return $this;
    }

    /**
     * Get preciocosto
     *
     * @return string 
     */
    public function getPreciocosto()
    {
        return $this->preciocosto;
    }

    /**
     * Set precioventa
     *
     * @param string $precioventa
     * @return Producto
     */
    public function setPrecioventa($precioventa)
    {
        $this->precioventa = $precioventa;

        return $this;
    }

    /**
     * Get precioventa
     *
     * @return string 
     */
    public function getPrecioventa()
    {
        return $this->precioventa;
    }

    /**
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     * @return Producto
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime 
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Producto
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
     * @return Producto
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
     * Set status
     *
     * @param boolean $status
     * @return Producto
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
     * Set stock
     *
     * @param integer $stock
     * @return Producto
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set iddistribuidor
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Fabricante $iddistribuidor
     * @return Producto
     */
    public function setIddistribuidor(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Fabricante $iddistribuidor = null)
    {
        $this->iddistribuidor = $iddistribuidor;

        return $this;
    }

    /**
     * Get iddistribuidor
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Fabricante 
     */
    public function getIddistribuidor()
    {
        return $this->iddistribuidor;
    }

    /**
     * Set idcategoriaproducto
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\CategoriaProducto $idcategoriaproducto
     * @return Producto
     */
    public function setIdcategoriaproducto(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\CategoriaProducto $idcategoriaproducto = null)
    {
        $this->idcategoriaproducto = $idcategoriaproducto;

        return $this;
    }

    /**
     * Get idcategoriaproducto
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\CategoriaProducto 
     */
    public function getIdcategoriaproducto()
    {
        return $this->idcategoriaproducto;
    }

    /**
     * Set idEmpresa
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empresa $idEmpresa
     * @return Producto
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
     * Set idUnidadMedida
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\UnidadesMedida $idUnidadMedida
     * @return Producto
     */
    public function setIdUnidadMedida(\Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\UnidadesMedida $idUnidadMedida = null)
    {
        $this->idUnidadMedida = $idUnidadMedida;

        return $this;
    }

    /**
     * Get idUnidadMedida
     *
     * @return \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\UnidadesMedida 
     */
    public function getIdUnidadMedida()
    {
        return $this->idUnidadMedida;
    }

    /**
     * Set idTipoMoneda
     *
     * @param \Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoMoneda $idTipoMoneda
     * @return Producto
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
