<?php

namespace Zakriyarahman\Microbilt\High\Type;

/**
 * File for class MicrobiltStructHighLowAmtRange_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructHighLowAmtRange_Type originally named HighLowAmtRange_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructHighLowAmtRange_Type extends MicrobiltStructAggregate
{
    /**
     * The LowRangeAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $LowRangeAmt;
    /**
     * The LowRangeModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $LowRangeModifier;
    /**
     * The HighRangeAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $HighRangeAmt;
    /**
     * The HighRangeModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $HighRangeModifier;
    /**
     * Constructor method for HighLowAmtRange_Type
     * @see parent::__construct()
     * @param MicrobiltStructCurrencyAmount $_lowRangeAmt
     * @param MicrobiltStructCodeDescription_Type $_lowRangeModifier
     * @param MicrobiltStructCurrencyAmount $_highRangeAmt
     * @param MicrobiltStructCodeDescription_Type $_highRangeModifier
     * @return MicrobiltStructHighLowAmtRange_Type
     */
    public function __construct($_lowRangeAmt = NULL,$_lowRangeModifier = NULL,$_highRangeAmt = NULL,$_highRangeModifier = NULL)
    {
        MicrobiltWsdlClass::__construct(array('LowRangeAmt'=>$_lowRangeAmt,'LowRangeModifier'=>$_lowRangeModifier,'HighRangeAmt'=>$_highRangeAmt,'HighRangeModifier'=>$_highRangeModifier),false);
    }
    /**
     * Get LowRangeAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getLowRangeAmt()
    {
        return $this->LowRangeAmt;
    }
    /**
     * Set LowRangeAmt value
     * @param MicrobiltStructCurrencyAmount $_lowRangeAmt the LowRangeAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setLowRangeAmt($_lowRangeAmt)
    {
        return ($this->LowRangeAmt = $_lowRangeAmt);
    }
    /**
     * Get LowRangeModifier value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getLowRangeModifier()
    {
        return $this->LowRangeModifier;
    }
    /**
     * Set LowRangeModifier value
     * @param MicrobiltStructCodeDescription_Type $_lowRangeModifier the LowRangeModifier
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setLowRangeModifier($_lowRangeModifier)
    {
        return ($this->LowRangeModifier = $_lowRangeModifier);
    }
    /**
     * Get HighRangeAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getHighRangeAmt()
    {
        return $this->HighRangeAmt;
    }
    /**
     * Set HighRangeAmt value
     * @param MicrobiltStructCurrencyAmount $_highRangeAmt the HighRangeAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setHighRangeAmt($_highRangeAmt)
    {
        return ($this->HighRangeAmt = $_highRangeAmt);
    }
    /**
     * Get HighRangeModifier value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getHighRangeModifier()
    {
        return $this->HighRangeModifier;
    }
    /**
     * Set HighRangeModifier value
     * @param MicrobiltStructCodeDescription_Type $_highRangeModifier the HighRangeModifier
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setHighRangeModifier($_highRangeModifier)
    {
        return ($this->HighRangeModifier = $_highRangeModifier);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructHighLowAmtRange_Type
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
