<?php

namespace Proxies\__CG__\Akeneo\Tool\Bundle\ApiBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \Akeneo\Tool\Bundle\ApiBundle\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', 'label', 'marketplacePublicAppId', 'id', 'randomId', 'secret', 'redirectUris', 'allowedGrantTypes'];
        }

        return ['__isInitialized__', 'label', 'marketplacePublicAppId', 'id', 'randomId', 'secret', 'redirectUris', 'allowedGrantTypes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', [$label]);

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', []);

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function getMarketplacePublicAppId(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarketplacePublicAppId', []);

        return parent::getMarketplacePublicAppId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarketplacePublicAppId(string $marketplacePublicAppId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarketplacePublicAppId', [$marketplacePublicAppId]);

        parent::setMarketplacePublicAppId($marketplacePublicAppId);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function setRandomId($random)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRandomId', [$random]);

        return parent::setRandomId($random);
    }

    /**
     * {@inheritDoc}
     */
    public function getRandomId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRandomId', []);

        return parent::getRandomId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicId', []);

        return parent::getPublicId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecret($secret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecret', [$secret]);

        return parent::setSecret($secret);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecret', []);

        return parent::getSecret();
    }

    /**
     * {@inheritDoc}
     */
    public function checkSecret($secret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkSecret', [$secret]);

        return parent::checkSecret($secret);
    }

    /**
     * {@inheritDoc}
     */
    public function setRedirectUris(array $redirectUris)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRedirectUris', [$redirectUris]);

        return parent::setRedirectUris($redirectUris);
    }

    /**
     * {@inheritDoc}
     */
    public function getRedirectUris()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRedirectUris', []);

        return parent::getRedirectUris();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllowedGrantTypes(array $grantTypes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllowedGrantTypes', [$grantTypes]);

        return parent::setAllowedGrantTypes($grantTypes);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllowedGrantTypes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllowedGrantTypes', []);

        return parent::getAllowedGrantTypes();
    }

}
