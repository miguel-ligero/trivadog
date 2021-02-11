<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Geoname extends \App\Entity\Geoname implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'geonameid', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'asciiname', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'alternatenames', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'altitude', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'featureclass', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'featurecode', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'countrycode', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'cc2', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'admin1code', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'admin2code', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'admin3code', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'admin4code', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'population', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'elevation', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'dem', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'timezone', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'modificationdate'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'geonameid', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'asciiname', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'alternatenames', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'altitude', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'featureclass', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'featurecode', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'countrycode', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'cc2', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'admin1code', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'admin2code', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'admin3code', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'admin4code', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'population', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'elevation', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'dem', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'timezone', '' . "\0" . 'App\\Entity\\Geoname' . "\0" . 'modificationdate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Geoname $proxy) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getGeonameid(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getGeonameid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeonameid', []);

        return parent::getGeonameid();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $name): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsciiname(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsciiname', []);

        return parent::getAsciiname();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsciiname(?string $asciiname): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsciiname', [$asciiname]);

        return parent::setAsciiname($asciiname);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlternatenames(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlternatenames', []);

        return parent::getAlternatenames();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlternatenames(?string $alternatenames): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlternatenames', [$alternatenames]);

        return parent::setAlternatenames($alternatenames);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude(?string $latitude): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getAltitude(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAltitude', []);

        return parent::getAltitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setAltitude(?string $altitude): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAltitude', [$altitude]);

        return parent::setAltitude($altitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeatureclass(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeatureclass', []);

        return parent::getFeatureclass();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeatureclass(?string $featureclass): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeatureclass', [$featureclass]);

        return parent::setFeatureclass($featureclass);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeaturecode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeaturecode', []);

        return parent::getFeaturecode();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeaturecode(?string $featurecode): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeaturecode', [$featurecode]);

        return parent::setFeaturecode($featurecode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountrycode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountrycode', []);

        return parent::getCountrycode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountrycode(?string $countrycode): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountrycode', [$countrycode]);

        return parent::setCountrycode($countrycode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCc2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCc2', []);

        return parent::getCc2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCc2(?string $cc2): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCc2', [$cc2]);

        return parent::setCc2($cc2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdmin1code(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmin1code', []);

        return parent::getAdmin1code();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdmin1code(?string $admin1code): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdmin1code', [$admin1code]);

        return parent::setAdmin1code($admin1code);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdmin2code(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmin2code', []);

        return parent::getAdmin2code();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdmin2code(?string $admin2code): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdmin2code', [$admin2code]);

        return parent::setAdmin2code($admin2code);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdmin3code(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmin3code', []);

        return parent::getAdmin3code();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdmin3code(?string $admin3code): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdmin3code', [$admin3code]);

        return parent::setAdmin3code($admin3code);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdmin4code(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmin4code', []);

        return parent::getAdmin4code();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdmin4code(?string $admin4code): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdmin4code', [$admin4code]);

        return parent::setAdmin4code($admin4code);
    }

    /**
     * {@inheritDoc}
     */
    public function getPopulation(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPopulation', []);

        return parent::getPopulation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPopulation(?int $population): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPopulation', [$population]);

        return parent::setPopulation($population);
    }

    /**
     * {@inheritDoc}
     */
    public function getElevation(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getElevation', []);

        return parent::getElevation();
    }

    /**
     * {@inheritDoc}
     */
    public function setElevation(?int $elevation): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setElevation', [$elevation]);

        return parent::setElevation($elevation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDem(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDem', []);

        return parent::getDem();
    }

    /**
     * {@inheritDoc}
     */
    public function setDem(?int $dem): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDem', [$dem]);

        return parent::setDem($dem);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimezone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimezone', []);

        return parent::getTimezone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimezone(?string $timezone): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimezone', [$timezone]);

        return parent::setTimezone($timezone);
    }

    /**
     * {@inheritDoc}
     */
    public function getModificationdate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModificationdate', []);

        return parent::getModificationdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setModificationdate(?\DateTimeInterface $modificationdate): \App\Entity\Geoname
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModificationdate', [$modificationdate]);

        return parent::setModificationdate($modificationdate);
    }

}