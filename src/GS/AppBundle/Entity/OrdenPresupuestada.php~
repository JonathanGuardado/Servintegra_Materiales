<?php

namespace GS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenPresupuestada
 *
 * @ORM\Table(name="orden_presupuestada", indexes={@ORM\Index(name="FK_MATERIAL_ORDEN_PRESUPUESTADA", columns={"MATERIAL"}), @ORM\Index(name="FK_PRESUPUESTO_MENSUAL_ORDEN_PRESUPUESTADA", columns={"PRESUPUESTO_MENSUAL"})})
 * @ORM\Entity
 */
class OrdenPresupuestada
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ORDEN_PRESUPUESTADA", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdenPresupuestada;

    /**
     * @var string
     *
     * @ORM\Column(name="PRECIO_PRESUPUESTO", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $precioPresupuesto;

    /**
     * @var float
     *
     * @ORM\Column(name="CANTIDAD_PRESUPUESTO", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidadPresupuesto;

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
     * @var \PresupuestoMensual
     *
     * @ORM\ManyToOne(targetEntity="PresupuestoMensual")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PRESUPUESTO_MENSUAL", referencedColumnName="ID_PRESUPUESTO_MENSUAL")
     * })
     */
    private $presupuestoMensual;

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
     * Get idOrdenPresupuestada
     *
     * @return string 
     */
    public function getIdOrdenPresupuestada()
    {
        return $this->idOrdenPresupuestada;
    }

    /**
     * Set precioPresupuesto
     *
     * @param string $precioPresupuesto
     * @return OrdenPresupuestada
     */
    public function setPrecioPresupuesto($precioPresupuesto)
    {
        $this->precioPresupuesto = $precioPresupuesto;

        return $this;
    }

    /**
     * Get precioPresupuesto
     *
     * @return string 
     */
    public function getPrecioPresupuesto()
    {
        return $this->precioPresupuesto;
    }

    /**
     * Set cantidadPresupuesto
     *
     * @param float $cantidadPresupuesto
     * @return OrdenPresupuestada
     */
    public function setCantidadPresupuesto($cantidadPresupuesto)
    {
        $this->cantidadPresupuesto = $cantidadPresupuesto;

        return $this;
    }

    /**
     * Get cantidadPresupuesto
     *
     * @return float 
     */
    public function getCantidadPresupuesto()
    {
        return $this->cantidadPresupuesto;
    }

    /**
     * Set usuarioCreacion
     *
     * @param string $usuarioCreacion
     * @return OrdenPresupuestada
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
     * @return OrdenPresupuestada
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
     * @return OrdenPresupuestada
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
     * @return OrdenPresupuestada
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
     * Set presupuestoMensual
     *
     * @param \GS\AppBundle\Entity\PresupuestoMensual $presupuestoMensual
     * @return OrdenPresupuestada
     */
    public function setPresupuestoMensual(\GS\AppBundle\Entity\PresupuestoMensual $presupuestoMensual = null)
    {
        $this->presupuestoMensual = $presupuestoMensual;

        return $this;
    }

    /**
     * Get presupuestoMensual
     *
     * @return \GS\AppBundle\Entity\PresupuestoMensual 
     */
    public function getPresupuestoMensual()
    {
        return $this->presupuestoMensual;
    }

    /**
     * Set material
     *
     * @param \GS\AppBundle\Entity\Material $material
     * @return OrdenPresupuestada
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
