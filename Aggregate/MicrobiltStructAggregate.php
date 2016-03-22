<?php
/**
 * File for class MicrobiltStructAggregate
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAggregate originally named Aggregate
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
abstract class MicrobiltStructAggregate extends MicrobiltWsdlClass
{
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The EffDt
     * @var date
     */
    public $EffDt;
    /**
     * Constructor method for Aggregate
     * @see parent::__construct()
     * @param string $_source
     * @param date $_effDt
     * @return MicrobiltStructAggregate
     */
    public function __construct($_source = NULL,$_effDt = NULL)
    {
        parent::__construct(array('Source'=>$_source,'EffDt'=>$_effDt),false);
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $_source the Source
     * @return string
     */
    public function setSource($_source)
    {
        return ($this->Source = $_source);
    }
    /**
     * Get EffDt value
     * @return date|null
     */
    public function getEffDt()
    {
        return $this->EffDt;
    }
    /**
     * Set EffDt value
     * @param date $_effDt the EffDt
     * @return date
     */
    public function setEffDt($_effDt)
    {
        return ($this->EffDt = $_effDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAggregate
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
