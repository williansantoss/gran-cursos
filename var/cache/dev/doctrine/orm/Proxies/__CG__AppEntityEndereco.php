<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Endereco extends \App\Entity\Endereco implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'quadra', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'numero', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'observacao', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'contato'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'quadra', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'numero', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'observacao', '' . "\0" . 'App\\Entity\\Endereco' . "\0" . 'contato'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Endereco $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuadra(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuadra', []);

        return parent::getQuadra();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuadra(int $quadra): \App\Entity\Endereco
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuadra', [$quadra]);

        return parent::setQuadra($quadra);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumero(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumero', []);

        return parent::getNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumero(int $numero): \App\Entity\Endereco
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumero', [$numero]);

        return parent::setNumero($numero);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservacao(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservacao', []);

        return parent::getObservacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservacao(?string $observacao): \App\Entity\Endereco
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservacao', [$observacao]);

        return parent::setObservacao($observacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getContato(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContato', []);

        return parent::getContato();
    }

    /**
     * {@inheritDoc}
     */
    public function addContato(\App\Entity\Contatos $contato): \App\Entity\Endereco
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContato', [$contato]);

        return parent::addContato($contato);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContato(\App\Entity\Contatos $contato): \App\Entity\Endereco
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContato', [$contato]);

        return parent::removeContato($contato);
    }

}
