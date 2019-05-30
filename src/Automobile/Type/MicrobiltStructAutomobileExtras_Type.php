<?php

namespace Zakriyarahman\Microbilt\Automobile\Type;

/**
 * File for class MicrobiltStructAutomobileExtras_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAutomobileExtras_Type originally named AutomobileExtras_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAutomobileExtras_Type extends MicrobiltStructAggregate
{
    /**
     * The AutoExtraType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AutoExtraType;
    /**
     * The AutoExtraDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AutoExtraDesc;
    /**
     * Constructor method for AutomobileExtras_Type
     * @see parent::__construct()
     * @param string $_autoExtraType
     * @param string $_autoExtraDesc
     * @return MicrobiltStructAutomobileExtras_Type
     */
    public function __construct($_autoExtraType = NULL,$_autoExtraDesc = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AutoExtraType'=>$_autoExtraType,'AutoExtraDesc'=>$_autoExtraDesc),false);
    }
    /**
     * Get AutoExtraType value
     * @return string|null
     */
    public function getAutoExtraType()
    {
        return $this->AutoExtraType;
    }
    /**
     * Set AutoExtraType value
     * @param string $_autoExtraType the AutoExtraType
     * @return string
     */
    public function setAutoExtraType($_autoExtraType)
    {
        return ($this->AutoExtraType = $_autoExtraType);
    }
    /**
     * Get AutoExtraDesc value
     * @return string|null
     */
    public function getAutoExtraDesc()
    {
        return $this->AutoExtraDesc;
    }
    /**
     * Set AutoExtraDesc value
     * @param string $_autoExtraDesc the AutoExtraDesc
     * @return string
     */
    public function setAutoExtraDesc($_autoExtraDesc)
    {
        return ($this->AutoExtraDesc = $_autoExtraDesc);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAutomobileExtras_Type
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
