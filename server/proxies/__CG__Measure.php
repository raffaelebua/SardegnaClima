<?php

namespace DoctrineProxies\__CG__;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Measure extends \Measure implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Measure' . "\0" . 'logger', 'id', 'date', 'temp', 'tempmax', 'tempmin', 'hum', 'dp', 'wchill', 'hindex', 'wspeed', 'dir', 'bar', 'rain', 'rr', 'rainmt', 'rainyr', 'station');
        }

        return array('__isInitialized__', '' . "\0" . 'Measure' . "\0" . 'logger', 'id', 'date', 'temp', 'tempmax', 'tempmin', 'hum', 'dp', 'wchill', 'hindex', 'wspeed', 'dir', 'bar', 'rain', 'rr', 'rainmt', 'rainyr', 'station');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Measure $proxy) {
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
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemp($temp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemp', array($temp));

        return parent::setTemp($temp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemp', array());

        return parent::getTemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setTempmax($tempmax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTempmax', array($tempmax));

        return parent::setTempmax($tempmax);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempmax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempmax', array());

        return parent::getTempmax();
    }

    /**
     * {@inheritDoc}
     */
    public function setTempmin($tempmin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTempmin', array($tempmin));

        return parent::setTempmin($tempmin);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempmin', array());

        return parent::getTempmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setHum($hum)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHum', array($hum));

        return parent::setHum($hum);
    }

    /**
     * {@inheritDoc}
     */
    public function getHum()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHum', array());

        return parent::getHum();
    }

    /**
     * {@inheritDoc}
     */
    public function setDp($dp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDp', array($dp));

        return parent::setDp($dp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDp', array());

        return parent::getDp();
    }

    /**
     * {@inheritDoc}
     */
    public function setWchill($wchill)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWchill', array($wchill));

        return parent::setWchill($wchill);
    }

    /**
     * {@inheritDoc}
     */
    public function getWchill()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWchill', array());

        return parent::getWchill();
    }

    /**
     * {@inheritDoc}
     */
    public function setHindex($hindex)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHindex', array($hindex));

        return parent::setHindex($hindex);
    }

    /**
     * {@inheritDoc}
     */
    public function getHindex()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHindex', array());

        return parent::getHindex();
    }

    /**
     * {@inheritDoc}
     */
    public function setWspeed($wspeed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWspeed', array($wspeed));

        return parent::setWspeed($wspeed);
    }

    /**
     * {@inheritDoc}
     */
    public function getWspeed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWspeed', array());

        return parent::getWspeed();
    }

    /**
     * {@inheritDoc}
     */
    public function setDir($dir)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDir', array($dir));

        return parent::setDir($dir);
    }

    /**
     * {@inheritDoc}
     */
    public function getDir()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDir', array());

        return parent::getDir();
    }

    /**
     * {@inheritDoc}
     */
    public function setBar($bar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBar', array($bar));

        return parent::setBar($bar);
    }

    /**
     * {@inheritDoc}
     */
    public function getBar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBar', array());

        return parent::getBar();
    }

    /**
     * {@inheritDoc}
     */
    public function setRain($rain)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRain', array($rain));

        return parent::setRain($rain);
    }

    /**
     * {@inheritDoc}
     */
    public function getRain()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRain', array());

        return parent::getRain();
    }

    /**
     * {@inheritDoc}
     */
    public function setRr($rr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRr', array($rr));

        return parent::setRr($rr);
    }

    /**
     * {@inheritDoc}
     */
    public function getRr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRr', array());

        return parent::getRr();
    }

    /**
     * {@inheritDoc}
     */
    public function setRainmt($rainmt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRainmt', array($rainmt));

        return parent::setRainmt($rainmt);
    }

    /**
     * {@inheritDoc}
     */
    public function getRainmt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRainmt', array());

        return parent::getRainmt();
    }

    /**
     * {@inheritDoc}
     */
    public function setRainyr($rainyr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRainyr', array($rainyr));

        return parent::setRainyr($rainyr);
    }

    /**
     * {@inheritDoc}
     */
    public function getRainyr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRainyr', array());

        return parent::getRainyr();
    }

    /**
     * {@inheritDoc}
     */
    public function setStation(\Station $station = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStation', array($station));

        return parent::setStation($station);
    }

    /**
     * {@inheritDoc}
     */
    public function getStation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStation', array());

        return parent::getStation();
    }

}