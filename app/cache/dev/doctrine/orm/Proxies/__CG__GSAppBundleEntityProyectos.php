<?php

namespace Proxies\__CG__\GS\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proyectos extends \GS\AppBundle\Entity\Proyectos implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'id', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'nombre', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'personas', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'fechaInicio', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'presupuesto', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'unidadNegocio', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'fase', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'usuario', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'createdAt', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'updateAt');
        }

        return array('__isInitialized__', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'id', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'nombre', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'personas', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'fechaInicio', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'presupuesto', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'unidadNegocio', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'fase', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'usuario', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'createdAt', '' . "\0" . 'GS\\AppBundle\\Entity\\Proyectos' . "\0" . 'updateAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proyectos $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersonas($personas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersonas', array($personas));

        return parent::setPersonas($personas);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersonas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersonas', array());

        return parent::getPersonas();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInicio($fechaInicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInicio', array($fechaInicio));

        return parent::setFechaInicio($fechaInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInicio', array());

        return parent::getFechaInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresupuesto($presupuesto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresupuesto', array($presupuesto));

        return parent::setPresupuesto($presupuesto);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresupuesto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresupuesto', array());

        return parent::getPresupuesto();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnidadNegocio($unidadNegocio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnidadNegocio', array($unidadNegocio));

        return parent::setUnidadNegocio($unidadNegocio);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnidadNegocio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnidadNegocio', array());

        return parent::getUnidadNegocio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFase($fase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFase', array($fase));

        return parent::setFase($fase);
    }

    /**
     * {@inheritDoc}
     */
    public function getFase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFase', array());

        return parent::getFase();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario($usuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', array($usuario));

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', array());

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateAt($updateAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateAt', array($updateAt));

        return parent::setUpdateAt($updateAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateAt', array());

        return parent::getUpdateAt();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
