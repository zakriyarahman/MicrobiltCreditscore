<?php

namespace Zakriyarahman\Microbilt\Other\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class OtherPercentages_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for OtherPercentages_Type originally named OtherPercentages_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class OtherPercentages_Type extends Aggregate
{
    /**
     * The PercentageType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PercentageType;
    /**
     * The OtherPercentage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $OtherPercentage;
    /**
     * Constructor method for OtherPercentages_Type
     * @see parent::__construct()
     * @param string $_percentageType
     * @param float $_otherPercentage
     * @return OtherPercentages_Type
     */
    public function __construct($_percentageType = NULL,$_otherPercentage = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PercentageType'=>$_percentageType,'OtherPercentage'=>$_otherPercentage),false);
    }
    /**
     * Get PercentageType value
     * @return string|null
     */
    public function getPercentageType()
    {
        return $this->PercentageType;
    }
    /**
     * Set PercentageType value
     * @param string $_percentageType the PercentageType
     * @return string
     */
    public function setPercentageType($_percentageType)
    {
        return ($this->PercentageType = $_percentageType);
    }
    /**
     * Get OtherPercentage value
     * @return float|null
     */
    public function getOtherPercentage()
    {
        return $this->OtherPercentage;
    }
    /**
     * Set OtherPercentage value
     * @param float $_otherPercentage the OtherPercentage
     * @return float
     */
    public function setOtherPercentage($_otherPercentage)
    {
        return ($this->OtherPercentage = $_otherPercentage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return OtherPercentages_Type
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
