<?php

namespace GS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Material
 *
 * @ORM\Table(name="material", indexes={@ORM\Index(name="FK_CATEGORIA_MATERIAL", columns={"CATEGORIA"}), @ORM\Index(name="FK_UNIDAD_MEDIDA_MATERIAL", columns={"UNIDAD_MEDIDA"})})
 * @ORM\Entity(repositoryClass="GS\AppBundle\Repository\MaterialRepository")
 */
class Material
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MATERIAL", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_MATERIAL", type="text", nullable=false)
     */
    private $nombreMaterial;

    /**
     * @var string
     *
     * @ORM\Column(name="PRECIO_MATERIAL", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $precioMaterial;

    /**
     * @var string
     *
     * @ORM\Column(name="COSTO_MATERIAL", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $costoMaterial;

    /**
     * @var float
     *
     * @ORM\Column(name="EXISTENCIA_ACTUAL", type="float", precision=10, scale=0, nullable=false)
     */
    private $existenciaActual;

    /**
     * @var float
     *
     * @ORM\Column(name="CANTIDAD_REORDEN", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidadReorden;

    /**
     * @var string
     *
     * @ORM\Column(name="UBICACION", type="text", nullable=false)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_UNIDAD", type="text", nullable=false)
     */
    private $descripcionMaterial;

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
     * @var \UnidadMedida
     *
     * @ORM\ManyToOne(targetEntity="UnidadMedida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UNIDAD_MEDIDA", referencedColumnName="ID_UNIDAD")
     * })
     */
    private $unidadMedida;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CATEGORIA", referencedColumnName="ID_CATEGORIA")
     * })
     */
    private $categoria;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;


    /**
     * Get idMaterial
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
   
    /**
     * set idMaterial
     *
     * @return string 
     */
    public function setId($id)
    {
         $this->id=$id;
         return $this;
    }
    
    /**
     * Set nombreMaterial
     *
     * @param string $nombreMaterial
     * @return Material
     */
    public function setNombreMaterial($nombreMaterial)
    {
        $this->nombreMaterial = $nombreMaterial;

        return $this;
    }

    /**
     * Get nombreMaterial
     *
     * @return string 
     */
    public function getNombreMaterial()
    {
        return $this->nombreMaterial;
    }

    /**
     * Set precioMaterial
     *
     * @param string $precioMaterial
     * @return Material
     */
    public function setPrecioMaterial($precioMaterial)
    {
        $this->precioMaterial = $precioMaterial;

        return $this;
    }

    /**
     * Get precioMaterial
     *
     * @return string 
     */
    public function getPrecioMaterial()
    {
        return $this->precioMaterial;
    }

    /**
     * Set costoMaterial
     *
     * @param string $costoMaterial
     * @return Material
     */
    public function setCostoMaterial($costoMaterial)
    {
        $this->costoMaterial = $costoMaterial;

        return $this;
    }

    /**
     * Get costoMaterial
     *
     * @return string 
     */
    public function getCostoMaterial()
    {
        return $this->costoMaterial;
    }

    /**
     * Set existenciaActual
     *
     * @param float $existenciaActual
     * @return Material
     */
    public function setExistenciaActual($existenciaActual)
    {
        $this->existenciaActual = $existenciaActual;

        return $this;
    }

    /**
     * Get existenciaActual
     *
     * @return float 
     */
    public function getExistenciaActual()
    {
        return $this->existenciaActual;
    }

    /**
     * Set cantidadReorden
     *
     * @param float $cantidadReorden
     * @return Material
     */
    public function setCantidadReorden($cantidadReorden)
    {
        $this->cantidadReorden = $cantidadReorden;

        return $this;
    }

    /**
     * Get cantidadReorden
     *
     * @return float 
     */
    public function getCantidadReorden()
    {
        return $this->cantidadReorden;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Material
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set descripcionUnidad
     *
     * @param string $descripcionMaterial
     * @return Material
     */
    public function setDescripcionMaterial($descripcionMaterial)
    {
        $this->descripcionMaterial = $descripcionMaterial;

        return $this;
    }

    /**
     * Get descripcionUnidad
     *
     * @return string 
     */
    public function getDescripcionMaterial()
    {
        return $this->descripcionMaterial;
    }

    /**
     * Set usuarioCreacion
     *
     * @param string $usuarioCreacion
     * @return Material
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
     * @return Material
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
     * @return Material
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
     * @return Material
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
     * Set unidadMedida
     *
     * @param \GS\AppBundle\Entity\UnidadMedida $unidadMedida
     * @return Material
     */
    public function setUnidadMedida(\GS\AppBundle\Entity\UnidadMedida $unidadMedida = null)
    {
        $this->unidadMedida = $unidadMedida;

        return $this;
    }

    /**
     * Get unidadMedida
     *
     * @return \GS\AppBundle\Entity\UnidadMedida 
     */
    public function getUnidadMedida()
    {
        return $this->unidadMedida;
    }

    /**
     * Set categoria
     *
     * @param \GS\AppBundle\Entity\Categoria $categoria
     * @return Material
     */
    public function setCategoria(\GS\AppBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \GS\AppBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    
    /**
     * Set estado
     *
     * @param boolean $estado
     * @return Materiales
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }
      public function __toString()
    {
        return $this->getNombreMaterial();
    }
}
