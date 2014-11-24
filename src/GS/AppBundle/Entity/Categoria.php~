<?php

namespace GS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CATEGORIA", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_CATEGORIA", type="text", nullable=false)
     */
    private $nombreCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_UNIDAD", type="text", nullable=false)
     */
    private $descripcionUnidad;



    /**
     * Get idCategoria
     *
     * @return string 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     * @return Categoria
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string 
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }

    /**
     * Set descripcionUnidad
     *
     * @param string $descripcionUnidad
     * @return Categoria
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
        return $this->getNombreCategoria();
    }
}
