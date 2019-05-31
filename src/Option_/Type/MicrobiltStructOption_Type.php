<?php

namespace Zakriyarahman\Microbilt\Option_\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\MicrobiltEnumBoolean;

/**
 * File for class MicrobiltStructOption_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructOption_Type originally named Option_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructOption_Type extends MicrobiltStructAggregate
{
    /**
     * The OptionValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var MicrobiltEnumBoolean
     */
    public $OptionValue;
    /**
     * The OptionName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OptionName;
    /**
     * Constructor method for Option_Type
     * @see parent::__construct()
     * @param MicrobiltEnumBoolean $_optionValue
     * @param string $_optionName
     * @return MicrobiltStructOption_Type
     */
    public function __construct($_optionValue,$_optionName = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OptionValue'=>$_optionValue,'OptionName'=>$_optionName),false);
    }
    /**
     * Get OptionValue value
     * @return MicrobiltEnumBoolean
     */
    public function getOptionValue()
    {
        return $this->OptionValue;
    }
    /**
     * Set OptionValue value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_optionValue the OptionValue
     * @return MicrobiltEnumBoolean
     */
    public function setOptionValue($_optionValue)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_optionValue))
        {
            return false;
        }
        return ($this->OptionValue = $_optionValue);
    }
    /**
     * Get OptionName value
     * @return string|null
     */
    public function getOptionName()
    {
        return $this->OptionName;
    }
    /**
     * Set OptionName value
     * @param string $_optionName the OptionName
     * @return string
     */
    public function setOptionName($_optionName)
    {
        return ($this->OptionName = $_optionName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructOption_Type
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
