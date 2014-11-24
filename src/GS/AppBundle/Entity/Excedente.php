<?php

namespace GS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Excedente
 *
 * @ORM\Table(name="excedente", indexes={@ORM\Index(name="FK_PRESUPUESTO_MENSUAL_EXCEDENTE", columns={"PRESUPUESTO_MENSUAL"})})
 * @ORM\Entity
 */
class Excedente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EXCEDENTE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExcedente;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="AUTORIZO_EXCEDENTE", type="string", length=50, nullable=false)
     */
    private $autorizoExcedente;

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
     * Get idExcedente
     *
     * @return string 
     */
    public function getIdExcedente()
    {
        return $this->idExcedente;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Excedente
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set autorizoExcedente
     *
     * @param string $autorizoExcedente
     * @return Excedente
     */
    public function setAutorizoExcedente($autorizoExcedente)
    {
        $this->autorizoExcedente = $autorizoExcedente;

        return $this;
    }

    /**
     * Get autorizoExcedente
     *
     * @return string 
     */
    public function getAutorizoExcedente()
    {
        return $this->autorizoExcedente;
    }

    /**
     * Set usuarioCreacion
     *
     * @param string $usuarioCreacion
     * @return Excedente
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
     * @return Excedente
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
     * @return Excedente
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
     * @return Excedente
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
     * @return Excedente
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
}
