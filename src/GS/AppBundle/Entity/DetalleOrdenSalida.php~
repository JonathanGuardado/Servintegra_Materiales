<?php

namespace GS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleOrdenSalida
 *
 * @ORM\Table(name="detalle_orden_salida", indexes={@ORM\Index(name="FK_MATERIAL_DETALLE_ORDEN_SALIDA", columns={"MATERIAL"}), @ORM\Index(name="FK_ORDEN_SALIDA_DETALLE", columns={"ORDEN"})})
 * @ORM\Entity
 */
class DetalleOrdenSalida
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DETALLE_ORDEN", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetalleOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="PRECIO_ORDEN", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $precioOrden;

    /**
     * @var float
     *
     * @ORM\Column(name="CANTIDAD_ORDEN", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidadOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="COSTO_ORDEN", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $costoOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO_CREACION", type="string", length=50, nullable=false)
     */
    private $usuarioCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="datetime", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO_MODIFICACION", type="string", length=50, nullable=true)
     */
    private $usuarioModificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_MODIFICACION", type="datetime", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @var \OrdenSalida
     *
     * @ORM\ManyToOne(targetEntity="OrdenSalida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ORDEN", referencedColumnName="ID_ORDEN")
     * })
     */
    private $orden;

    /**
     * @var \Material
     *
     * @ORM\ManyToOne(targetEntity="Material")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MATERIAL", referencedColumnName="ID_MATERIAL")
     * })
     */
    private $material;
 

    /**
     * Get idDetalleOrden
     *
     * @return string 
     */
    public function getIdDetalleOrden()
    {
        return $this->idDetalleOrden;
    }

    /**
     * Set precioOrden
     *
     * @param string $precioOrden
     * @return DetalleOrdenSalida
     */
    public function setPrecioOrden($precioOrden)
    {
        $this->precioOrden = $precioOrden;

        return $this;
    }

    /**
     * Get precioOrden
     *
     * @return string 
     */
    public function getPrecioOrden()
    {
        return $this->precioOrden;
    }

    /**
     * Set cantidadOrden
     *
     * @param float $cantidadOrden
     * @return DetalleOrdenSalida
     */
    public function setCantidadOrden($cantidadOrden)
    {
        $this->cantidadOrden = $cantidadOrden;

        return $this;
    }

    /**
     * Get cantidadOrden
     *
     * @return float 
     */
    public function getCantidadOrden()
    {
        return $this->cantidadOrden;
    }

    /**
     * Set costoOrden
     *
     * @param string $costoOrden
     * @return DetalleOrdenSalida
     */
    public function setCostoOrden($costoOrden)
    {
        $this->costoOrden = $costoOrden;

        return $this;
    }

    /**
     * Get costoOrden
     *
     * @return string 
     */
    public function getCostoOrden()
    {
        return $this->costoOrden;
    }

    /**
     * Set usuarioCreacion
     *
     * @param string $usuarioCreacion
     * @return DetalleOrdenSalida
     */
    public function setUsuarioCreacion($usuarioCreacion)
    {
        $this->usuarioCreacion = $usuarioCreacion;

        return $this;
    }

    /**
     * Get usuarioCreacion
     *
     * @return string 
     */
    public function getUsuarioCreacion()
    {
        return $this->usuarioCreacion;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return DetalleOrdenSalida
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set usuarioModificacion
     *
     * @param string $usuarioModificacion
     * @return DetalleOrdenSalida
     */
    public function setUsuarioModificacion($usuarioModificacion)
    {
        $this->usuarioModificacion = $usuarioModificacion;

        return $this;
    }

    /**
     * Get usuarioModificacion
     *
     * @return string 
     */
    public function getUsuarioModificacion()
    {
        return $this->usuarioModificacion;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return DetalleOrdenSalida
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set orden
     *
     * @param \GS\AppBundle\Entity\OrdenSalida $orden
     * @return DetalleOrdenSalida
     */
    public function setOrden(\GS\AppBundle\Entity\OrdenSalida $orden = null)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return \GS\AppBundle\Entity\OrdenSalida 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set material
     *
     * @param \GS\AppBundle\Entity\Material $material
     * @return DetalleOrdenSalida
     */
    public function setMaterial(\GS\AppBundle\Entity\Material $material = null)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return \GS\AppBundle\Entity\Material 
     */
    public function getMaterial()
    {
        return $this->material;
    }
}
