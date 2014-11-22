<?php

namespace GS\AppBundle\Entity;
use GS\AppBundle\Entity\Orden;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * OrdenSalida
 *
 * @ORM\Table(name="orden_salida", indexes={@ORM\Index(name="FK_PROYECTO_ORDEN_SALIDA", columns={"PROYECTO"})})
 * @ORM\Entity
 */
class OrdenSalida
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ORDEN", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrden;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANIO_ORDEN", type="integer", nullable=false)
     */
    private $anioOrden;

    /**
     * @var integer
     *
     * @ORM\Column(name="MES_ORDEN", type="integer", nullable=false)
     */
    private $mesOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="TOTAL_ORDEN", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $totalOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="RECIBIO_ORDEN", type="string", length=50, nullable=false)
     */
    private $recibioOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTREGO_ORDEN", type="string", length=50, nullable=false)
     */
    private $entregoOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="AUTORIZO_ORDEN", type="string", length=50, nullable=false)
     */
    private $autorizoOrden;

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
     * @var \Proyecto
     *
     * @ORM\ManyToOne(targetEntity="Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PROYECTO", referencedColumnName="ID_PROYECTO")
     * })
     */
    private $proyecto;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    private $detalles;


    public function __construct()
    {
        $this->detalles = new ArrayCollection();
    }
    public function addDetalle(\GS\AppBundle\Entity\DetalleOrdenSalida $detalle)
    {

        $detalle->setOrden($this);
        
        $this->detalles->add($detalle);
    }
    
    public function getDetalles(){
        return $this->detalles;
    }

    public function removeDetalle(\GS\AppBundle\Entity\DetalleOrdenSalida $detalle)
    {
        $this->detalles->removeElement($detalle);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /**
     * Get idOrden
     *
     * @return string 
     */
    public function getIdOrden()
    {
        return $this->idOrden;
    }

    /**
     * Set anioOrden
     *
     * @param integer $anioOrden
     * @return OrdenSalida
     */
    public function setAnioOrden($anioOrden)
    {
        $this->anioOrden = $anioOrden;

        return $this;
    }

    /**
     * Get anioOrden
     *
     * @return integer 
     */
    public function getAnioOrden()
    {
        return $this->anioOrden;
    }

    /**
     * Set mesOrden
     *
     * @param integer $mesOrden
     * @return OrdenSalida
     */
    public function setMesOrden($mesOrden)
    {
        $this->mesOrden = $mesOrden;

        return $this;
    }

    /**
     * Get mesOrden
     *
     * @return integer 
     */
    public function getMesOrden()
    {
        return $this->mesOrden;
    }

    /**
     * Set totalOrden
     *
     * @param string $totalOrden
     * @return OrdenSalida
     */
    public function setTotalOrden($totalOrden)
    {
        $this->totalOrden = $totalOrden;

        return $this;
    }

    /**
     * Get totalOrden
     *
     * @return string 
     */
    public function getTotalOrden()
    {
        return $this->totalOrden;
    }

    /**
     * Set recibioOrden
     *
     * @param string $recibioOrden
     * @return OrdenSalida
     */
    public function setRecibioOrden($recibioOrden)
    {
        $this->recibioOrden = $recibioOrden;

        return $this;
    }

    /**
     * Get recibioOrden
     *
     * @return string 
     */
    public function getRecibioOrden()
    {
        return $this->recibioOrden;
    }

    /**
     * Set entregoOrden
     *
     * @param string $entregoOrden
     * @return OrdenSalida
     */
    public function setEntregoOrden($entregoOrden)
    {
        $this->entregoOrden = $entregoOrden;

        return $this;
    }

    /**
     * Get entregoOrden
     *
     * @return string 
     */
    public function getEntregoOrden()
    {
        return $this->entregoOrden;
    }

    /**
     * Set autorizoOrden
     *
     * @param string $autorizoOrden
     * @return OrdenSalida
     */
    public function setAutorizoOrden($autorizoOrden)
    {
        $this->autorizoOrden = $autorizoOrden;

        return $this;
    }

    /**
     * Get autorizoOrden
     *
     * @return string 
     */
    public function getAutorizoOrden()
    {
        return $this->autorizoOrden;
    }

    /**
     * Set usuarioCreacion
     *
     * @param string $usuarioCreacion
     * @return OrdenSalida
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
     * @return OrdenSalida
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
     * @return OrdenSalida
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
     * @return OrdenSalida
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
     * Set proyecto
     *
     * @param \GS\AppBundle\Entity\Proyecto $proyecto
     * @return OrdenSalida
     */
    public function setProyecto(\GS\AppBundle\Entity\Proyecto $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \GS\AppBundle\Entity\Proyecto 
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }
}
