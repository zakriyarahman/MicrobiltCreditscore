<?php
/**
 * File for class MicrobiltStructDataIndicators_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructDataIndicators_Type originally named DataIndicators_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructDataIndicators_Type extends MicrobiltStructAggregate
{
    /**
     * The IndValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var MicrobiltEnumBoolean
     */
    public $IndValue;
    /**
     * The IndName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IndName;
    /**
     * Constructor method for DataIndicators_Type
     * @see parent::__construct()
     * @param MicrobiltEnumBoolean $_indValue
     * @param string $_indName
     * @return MicrobiltStructDataIndicators_Type
     */
    public function __construct($_indValue,$_indName = NULL)
    {
        MicrobiltWsdlClass::__construct(array('IndValue'=>$_indValue,'IndName'=>$_indName),false);
    }
    /**
     * Get IndValue value
     * @return MicrobiltEnumBoolean
     */
    public function getIndValue()
    {
        return $this->IndValue;
    }
    /**
     * Set IndValue value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_indValue the IndValue
     * @return MicrobiltEnumBoolean
     */
    public function setIndValue($_indValue)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_indValue))
        {
            return false;
        }
        return ($this->IndValue = $_indValue);
    }
    /**
     * Get IndName value
     * @return string|null
     */
    public function getIndName()
    {
        return $this->IndName;
    }
    /**
     * Set IndName value
     * @param string $_indName the IndName
     * @return string
     */
    public function setIndName($_indName)
    {
        return ($this->IndName = $_indName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructDataIndicators_Type
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
