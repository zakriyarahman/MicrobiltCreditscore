<?php

namespace Zakriyarahman\Microbilt\Other\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructOtherAmounts_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructOtherAmounts_Type originally named OtherAmounts_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructOtherAmounts_Type extends MicrobiltStructAggregate
{
    /**
     * The AmtType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AmtType;
    /**
     * The OtherAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $OtherAmt;
    /**
     * Constructor method for OtherAmounts_Type
     * @see parent::__construct()
     * @param string $_amtType
     * @param MicrobiltStructCurrencyAmount $_otherAmt
     * @return MicrobiltStructOtherAmounts_Type
     */
    public function __construct($_amtType = NULL,$_otherAmt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AmtType'=>$_amtType,'OtherAmt'=>$_otherAmt),false);
    }
    /**
     * Get AmtType value
     * @return string|null
     */
    public function getAmtType()
    {
        return $this->AmtType;
    }
    /**
     * Set AmtType value
     * @param string $_amtType the AmtType
     * @return string
     */
    public function setAmtType($_amtType)
    {
        return ($this->AmtType = $_amtType);
    }
    /**
     * Get OtherAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getOtherAmt()
    {
        return $this->OtherAmt;
    }
    /**
     * Set OtherAmt value
     * @param MicrobiltStructCurrencyAmount $_otherAmt the OtherAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setOtherAmt($_otherAmt)
    {
        return ($this->OtherAmt = $_otherAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructOtherAmounts_Type
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
