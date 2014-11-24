<?php

namespace GS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnidadMedida
 *
 * @ORM\Table(name="unidad_medida")
 * @ORM\Entity
 */
class UnidadMedida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_UNIDAD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUnidad;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_UNIDAD", type="text", nullable=false)
     */
    private $nombreUnidad;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_UNIDAD", type="text", nullable=false)
     */
    private $descripcionUnidad;



    /**
     * Get idUnidad
     *
     * @return string 
     */
    public function getIdUnidad()
    {
        return $this->idUnidad;
    }

    /**
     * Set nombreUnidad
     *
     * @param string $nombreUnidad
     * @return UnidadMedida
     */
    public function setNombreUnidad($nombreUnidad)
    {
        $this->nombreUnidad = $nombreUnidad;

        return $this;
    }

    /**
     * Get nombreUnidad
     *
     * @return string 
     */
    public function getNombreUnidad()
    {
        return $this->nombreUnidad;
    }

    /**
     * Set descripcionUnidad
     *
     * @param string $descripcionUnidad
     * @return UnidadMedida
     */
    public function setDescripcionUnidad($descripcionUnidad)
    {
        $this->descripcionUnidad = $descripcionUnidad;

        return $this;
    }

    /**
     * Get descripcionUnidad
     *
     * @return string 
     */
    public function getDescripcionUnidad()
    {
        return $this->descripcionUnidad;
    }
      public function __toString()
    {
        return $this->getNombreUnidad();
    }
}
