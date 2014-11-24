<?php

namespace GS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnidadNegocio
 *
 * @ORM\Table(name="unidad_negocio")
 * @ORM\Entity
 */
class UnidadNegocio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_UNIDAD_NEGOCIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUnidadNegocio;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_UNIDAD_NEGOCIO", type="text", nullable=false)
     */
    private $nombreUnidadNegocio;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_UNIDAD_NEGOCIO", type="text", nullable=false)
     */
    private $descripcionUnidadNegocio;
    



    /**
     * Get idUnidadNegocio
     *
     * @return string 
     */
    public function getIdUnidadNegocio()
    {
        return $this->idUnidadNegocio;
    }

    /**
     * Set nombreUnidadNegocio
     *
     * @param string $nombreUnidadNegocio
     * @return UnidadNegocio
     */
    public function setNombreUnidadNegocio($nombreUnidadNegocio)
    {
        $this->nombreUnidadNegocio = $nombreUnidadNegocio;

        return $this;
    }

    /**
     * Get nombreUnidadNegocio
     *
     * @return string 
     */
    public function getNombreUnidadNegocio()
    {
        return $this->nombreUnidadNegocio;
    }

    /**
     * Set descripcionUnidadNegocio
     *
     * @param string $descripcionUnidadNegocio
     * @return UnidadNegocio
     */
    public function setDescripcionUnidadNegocio($descripcionUnidadNegocio)
    {
        $this->descripcionUnidadNegocio = $descripcionUnidadNegocio;

        return $this;
    }

    /**
     * Get descripcionUnidadNegocio
     *
     * @return string 
     */
    public function getDescripcionUnidadNegocio()
    {
        return $this->descripcionUnidadNegocio;
    }
      public function __toString()
    {
        return $this->getNombreUnidadNegocio();
    }
}
