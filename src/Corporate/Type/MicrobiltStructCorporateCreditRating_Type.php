<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructCorporateCreditRating_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCorporateCreditRating_Type originally named CorporateCreditRating_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCorporateCreditRating_Type extends MicrobiltStructAggregate
{
    /**
     * The CreditRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructCreditRating_Type
     */
    public $CreditRating;
    /**
     * The HistoricalCreditRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructCreditRating_Type
     */
    public $HistoricalCreditRating;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for CorporateCreditRating_Type
     * @see parent::__construct()
     * @param MicrobiltStructCreditRating_Type $_creditRating
     * @param MicrobiltStructCreditRating_Type $_historicalCreditRating
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructCorporateCreditRating_Type
     */
    public function __construct($_creditRating = NULL,$_historicalCreditRating = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CreditRating'=>$_creditRating,'HistoricalCreditRating'=>$_historicalCreditRating,'Message'=>$_message),false);
    }
    /**
     * Get CreditRating value
     * @return MicrobiltStructCreditRating_Type|null
     */
    public function getCreditRating()
    {
        return $this->CreditRating;
    }
    /**
     * Set CreditRating value
     * @param MicrobiltStructCreditRating_Type $_creditRating the CreditRating
     * @return MicrobiltStructCreditRating_Type
     */
    public function setCreditRating($_creditRating)
    {
        return ($this->CreditRating = $_creditRating);
    }
    /**
     * Get HistoricalCreditRating value
     * @return MicrobiltStructCreditRating_Type|null
     */
    public function getHistoricalCreditRating()
    {
        return $this->HistoricalCreditRating;
    }
    /**
     * Set HistoricalCreditRating value
     * @param MicrobiltStructCreditRating_Type $_historicalCreditRating the HistoricalCreditRating
     * @return MicrobiltStructCreditRating_Type
     */
    public function setHistoricalCreditRating($_historicalCreditRating)
    {
        return ($this->HistoricalCreditRating = $_historicalCreditRating);
    }
    /**
     * Get Message value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltStructMessage_Type $_message the Message
     * @return MicrobiltStructMessage_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCorporateCreditRating_Type
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
