<?php

namespace Zakriyarahman\Microbilt\Transaction\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class TransactionFee_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for TransactionFee_Type originally named TransactionFee_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class TransactionFee_Type extends Aggregate
{
    /**
     * The BaseFee
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $BaseFee;
    /**
     * The JurisdictionFee
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $JurisdictionFee;
    /**
     * The AdditionalFee
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $AdditionalFee;
    /**
     * Constructor method for TransactionFee_Type
     * @see parent::__construct()
     * @param CurrencyAmount $_baseFee
     * @param CurrencyAmount $_jurisdictionFee
     * @param CurrencyAmount $_additionalFee
     * @return TransactionFee_Type
     */
    public function __construct($_baseFee = NULL,$_jurisdictionFee = NULL,$_additionalFee = NULL)
    {
        MicrobiltWsdlClass::__construct(array('BaseFee'=>$_baseFee,'JurisdictionFee'=>$_jurisdictionFee,'AdditionalFee'=>$_additionalFee),false);
    }
    /**
     * Get BaseFee value
     * @return CurrencyAmount|null
     */
    public function getBaseFee()
    {
        return $this->BaseFee;
    }
    /**
     * Set BaseFee value
     * @param CurrencyAmount $_baseFee the BaseFee
     * @return CurrencyAmount
     */
    public function setBaseFee($_baseFee)
    {
        return ($this->BaseFee = $_baseFee);
    }
    /**
     * Get JurisdictionFee value
     * @return CurrencyAmount|null
     */
    public function getJurisdictionFee()
    {
        return $this->JurisdictionFee;
    }
    /**
     * Set JurisdictionFee value
     * @param CurrencyAmount $_jurisdictionFee the JurisdictionFee
     * @return CurrencyAmount
     */
    public function setJurisdictionFee($_jurisdictionFee)
    {
        return ($this->JurisdictionFee = $_jurisdictionFee);
    }
    /**
     * Get AdditionalFee value
     * @return CurrencyAmount|null
     */
    public function getAdditionalFee()
    {
        return $this->AdditionalFee;
    }
    /**
     * Set AdditionalFee value
     * @param CurrencyAmount $_additionalFee the AdditionalFee
     * @return CurrencyAmount
     */
    public function setAdditionalFee($_additionalFee)
    {
        return ($this->AdditionalFee = $_additionalFee);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TransactionFee_Type
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
