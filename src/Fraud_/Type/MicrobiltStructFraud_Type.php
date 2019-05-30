<?php

namespace Zakriyarahman\Microbilt\Fraud_\Type;

/**
 * File for class MicrobiltStructFraud_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructFraud_Type originally named Fraud_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructFraud_Type extends MicrobiltStructAggregate
{
    /**
     * The FraudWarnings
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $FraudWarnings;
    /**
     * The FraudCounters
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $FraudCounters;
    /**
     * The FraudValidations
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructFraudValidations_Type
     */
    public $FraudValidations;
    /**
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructContactInfo_Type
     */
    public $ContactInfo;
    /**
     * Constructor method for Fraud_Type
     * @see parent::__construct()
     * @param MicrobiltStructMessage_Type $_fraudWarnings
     * @param MicrobiltStructMessage_Type $_fraudCounters
     * @param MicrobiltStructFraudValidations_Type $_fraudValidations
     * @param MicrobiltStructContactInfo_Type $_contactInfo
     * @return MicrobiltStructFraud_Type
     */
    public function __construct($_fraudWarnings = NULL,$_fraudCounters = NULL,$_fraudValidations = NULL,$_contactInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('FraudWarnings'=>$_fraudWarnings,'FraudCounters'=>$_fraudCounters,'FraudValidations'=>$_fraudValidations,'ContactInfo'=>$_contactInfo),false);
    }
    /**
     * Get FraudWarnings value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getFraudWarnings()
    {
        return $this->FraudWarnings;
    }
    /**
     * Set FraudWarnings value
     * @param MicrobiltStructMessage_Type $_fraudWarnings the FraudWarnings
     * @return MicrobiltStructMessage_Type
     */
    public function setFraudWarnings($_fraudWarnings)
    {
        return ($this->FraudWarnings = $_fraudWarnings);
    }
    /**
     * Get FraudCounters value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getFraudCounters()
    {
        return $this->FraudCounters;
    }
    /**
     * Set FraudCounters value
     * @param MicrobiltStructMessage_Type $_fraudCounters the FraudCounters
     * @return MicrobiltStructMessage_Type
     */
    public function setFraudCounters($_fraudCounters)
    {
        return ($this->FraudCounters = $_fraudCounters);
    }
    /**
     * Get FraudValidations value
     * @return MicrobiltStructFraudValidations_Type|null
     */
    public function getFraudValidations()
    {
        return $this->FraudValidations;
    }
    /**
     * Set FraudValidations value
     * @param MicrobiltStructFraudValidations_Type $_fraudValidations the FraudValidations
     * @return MicrobiltStructFraudValidations_Type
     */
    public function setFraudValidations($_fraudValidations)
    {
        return ($this->FraudValidations = $_fraudValidations);
    }
    /**
     * Get ContactInfo value
     * @return MicrobiltStructContactInfo_Type|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @param MicrobiltStructContactInfo_Type $_contactInfo the ContactInfo
     * @return MicrobiltStructContactInfo_Type
     */
    public function setContactInfo($_contactInfo)
    {
        return ($this->ContactInfo = $_contactInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructFraud_Type
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
