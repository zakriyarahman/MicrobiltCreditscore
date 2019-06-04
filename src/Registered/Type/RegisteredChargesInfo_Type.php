<?php

namespace Zakriyarahman\Microbilt\Registered\Type;

/**
 * File for class RegisteredChargesInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for RegisteredChargesInfo_Type originally named RegisteredChargesInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class RegisteredChargesInfo_Type extends Aggregate
{
    /**
     * The RegisteredChargesSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var RegisteredChargesSummary_Type
     */
    public $RegisteredChargesSummary;
    /**
     * The RegisteredChargesDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var RegisteredChargesDetails_Type
     */
    public $RegisteredChargesDetails;
    /**
     * The RegisteredCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var RegisteredCharge_Type
     */
    public $RegisteredCharge;
    /**
     * Constructor method for RegisteredChargesInfo_Type
     * @see parent::__construct()
     * @param RegisteredChargesSummary_Type $_registeredChargesSummary
     * @param RegisteredChargesDetails_Type $_registeredChargesDetails
     * @param RegisteredCharge_Type $_registeredCharge
     * @return RegisteredChargesInfo_Type
     */
    public function __construct($_registeredChargesSummary = NULL,$_registeredChargesDetails = NULL,$_registeredCharge = NULL)
    {
        MicrobiltWsdlClass::__construct(array('RegisteredChargesSummary'=>$_registeredChargesSummary,'RegisteredChargesDetails'=>$_registeredChargesDetails,'RegisteredCharge'=>$_registeredCharge),false);
    }
    /**
     * Get RegisteredChargesSummary value
     * @return RegisteredChargesSummary_Type|null
     */
    public function getRegisteredChargesSummary()
    {
        return $this->RegisteredChargesSummary;
    }
    /**
     * Set RegisteredChargesSummary value
     * @param RegisteredChargesSummary_Type $_registeredChargesSummary the RegisteredChargesSummary
     * @return RegisteredChargesSummary_Type
     */
    public function setRegisteredChargesSummary($_registeredChargesSummary)
    {
        return ($this->RegisteredChargesSummary = $_registeredChargesSummary);
    }
    /**
     * Get RegisteredChargesDetails value
     * @return RegisteredChargesDetails_Type|null
     */
    public function getRegisteredChargesDetails()
    {
        return $this->RegisteredChargesDetails;
    }
    /**
     * Set RegisteredChargesDetails value
     * @param RegisteredChargesDetails_Type $_registeredChargesDetails the RegisteredChargesDetails
     * @return RegisteredChargesDetails_Type
     */
    public function setRegisteredChargesDetails($_registeredChargesDetails)
    {
        return ($this->RegisteredChargesDetails = $_registeredChargesDetails);
    }
    /**
     * Get RegisteredCharge value
     * @return RegisteredCharge_Type|null
     */
    public function getRegisteredCharge()
    {
        return $this->RegisteredCharge;
    }
    /**
     * Set RegisteredCharge value
     * @param RegisteredCharge_Type $_registeredCharge the RegisteredCharge
     * @return RegisteredCharge_Type
     */
    public function setRegisteredCharge($_registeredCharge)
    {
        return ($this->RegisteredCharge = $_registeredCharge);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return RegisteredChargesInfo_Type
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
