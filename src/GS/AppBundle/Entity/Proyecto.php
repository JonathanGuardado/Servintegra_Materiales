<?php

namespace GS\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto", indexes={@ORM\Index(name="FK_UNIDAD_NEGOCIO_PROYECTO", columns={"UNIDAD_NEGOCIO"})})
 * @ORM\Entity
 */
class Proyecto {

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PROYECTO", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="N_PERSONAS", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $nPersonas;
    
     /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_PROYECTO", nullable=false)
     */
    private $nombreProyecto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="F_INICIO", type="date", nullable=false)
     */
    private $fInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESUPUESTO", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $presupuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPONSABLE", type="text", nullable=false)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="EXCEDENTE_PROYECTO", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $excedenteProyecto;

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
     * @var \UnidadNegocio
     *
     * @ORM\ManyToOne(targetEntity="UnidadNegocio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UNIDAD_NEGOCIO", referencedColumnName="ID_UNIDAD_NEGOCIO")
     * })
     */
    private $unidadNegocio;

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * @ORM\OneToMany(targetEntity="OrdenSalida", mappedBy="Proyecto")
     */
    private $ordenes;

    /**
     * @ORM\OneToMany(targetEntity="PresupuestoMensual", mappedBy="Proyecto")
     */
    private $presupuestos;

    public function __construct() {
        $this->ordenes = new ArrayCollection();
        $this->presupuestos = new ArrayCollection();
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * Get idProyecto
     *
     * @return string 
     */
    public function getIdProyecto() {
        return $this->idProyecto;
    }
    
    public function setIdProyecto($idProyecto) {
         $this->idProyecto=$idProyecto;
         return $this;
    }
    
    
    
     public function getNombreProyecto() {
        return $this->nombreProyecto;
    }
    
    public function setNombreProyecto($nombreProyecto) {
         $this->nombreProyecto=$nombreProyecto;
         return $this;
    }
    
    /**
     * Set nPersonas
     *
     * @param string $nPersonas
     * @return Proyecto
     */
    public function setNPersonas($nPersonas) {
        $this->nPersonas = $nPersonas;

        return $this;
    }

    /**
     * Get nPersonas
     *
     * @return string 
     */
    public function getNPersonas() {
        return $this->nPersonas;
    }

    /**
     * Set fInicio
     *
     * @param \DateTime $fInicio
     * @return Proyecto
     */
    public function setFInicio($fInicio) {
        $this->fInicio = $fInicio;

        return $this;
    }

    /**
     * Get fInicio
     *
     * @return \DateTime 
     */
    public function getFInicio() {
        return $this->fInicio;
    }

    /**
     * Set presupuesto
     *
     * @param string $presupuesto
     * @return Proyecto
     */
    public function setPresupuesto($presupuesto) {
        $this->presupuesto = $presupuesto;

        return $this;
    }

    /**
     * Get presupuesto
     *
     * @return string 
     */
    public function getPresupuesto() {
        return $this->presupuesto;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Proyecto
     */
    public function setResponsable($responsable) {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable() {
        return $this->responsable;
    }

    /**
     * Set excedenteProyecto
     *
     * @param string $excedenteProyecto
     * @return Proyecto
     */
    public function setExcedenteProyecto($excedenteProyecto) {
        $this->excedenteProyecto = $excedenteProyecto;

        return $this;
    }

    /**
     * Get excedenteProyecto
     *
     * @return string 
     */
    public function getExcedenteProyecto() {
        return $this->excedenteProyecto;
    }

    /**
     * Set usuarioCreacion
     *
     * @param string $usuarioCreacion
     * @return Proyecto
     */
    public function setUsuarioCreacion($usuarioCreacion) {
        $this->usuarioCreacion = $usuarioCreacion;

        return $this;
    }

    /**
     * Get usuarioCreacion
     *
     * @return string 
     */
    public function getUsuarioCreacion() {
        return $this->usuarioCreacion;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Proyecto
     */
    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    /**
     * Set usuarioModificacion
     *
     * @param string $usuarioModificacion
     * @return Proyecto
     */
    public function setUsuarioModificacion($usuarioModificacion) {
        $this->usuarioModificacion = $usuarioModificacion;

        return $this;
    }

    /**
     * Get usuarioModificacion
     *
     * @return string 
     */
    public function getUsuarioModificacion() {
        return $this->usuarioModificacion;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return Proyecto
     */
    public function setFechaModificacion($fechaModificacion) {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion() {
        return $this->fechaModificacion;
    }

    /**
     * Set unidadNegocio
     *
     * @param \GS\AppBundle\Entity\UnidadNegocio $unidadNegocio
     * @return Proyecto
     */
    public function setUnidadNegocio(\GS\AppBundle\Entity\UnidadNegocio $unidadNegocio = null) {
        $this->unidadNegocio = $unidadNegocio;

        return $this;
    }

    /**
     * Get unidadNegocio
     *
     * @return \GS\AppBundle\Entity\UnidadNegocio 
     */
    public function getUnidadNegocio() {
        return $this->unidadNegocio;
    }


    /**
     * Add ordenes
     *
     * @param \GS\AppBundle\Entity\OrdenSalida $ordenes
     * @return Proyecto
     */
    public function addOrdene(\GS\AppBundle\Entity\OrdenSalida $ordenes)
    {
        $this->ordenes[] = $ordenes;

        return $this;
    }

    /**
     * Remove ordenes
     *
     * @param \GS\AppBundle\Entity\OrdenSalida $ordenes
     */
    public function removeOrdene(\GS\AppBundle\Entity\OrdenSalida $ordenes)
    {
        $this->ordenes->removeElement($ordenes);
    }

    /**
     * Add presupuestos
     *
     * @param \GS\AppBundle\Entity\PresupuestoMensual $presupuestos
     * @return Proyecto
     */
    public function addPresupuesto(\GS\AppBundle\Entity\PresupuestoMensual $presupuestos)
    {
        $this->presupuestos[] = $presupuestos;

        return $this;
    }

    /**
     * Remove presupuestos
     *
     * @param \GS\AppBundle\Entity\PresupuestoMensual $presupuestos
     */
    public function removePresupuesto(\GS\AppBundle\Entity\PresupuestoMensual $presupuestos)
    {
        $this->presupuestos->removeElement($presupuestos);
    }

    /**
     * Get presupuestos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPresupuestos()
    {
        return $this->presupuestos;
    }

    /**
     * Get ordenes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdenes()
    {
        return $this->ordenes;
    }
      public function __toString()
    {
        return $this->getNombreProyecto();
    }
}
