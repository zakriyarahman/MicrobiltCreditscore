<?php

namespace Zakriyarahman\Microbilt\Validation\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class ValidationInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for ValidationInfo_Type originally named ValidationInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class ValidationInfo_Type extends Aggregate
{
    /**
     * The NameValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $NameValidation;
    /**
     * The SSNValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $SSNValidation;
    /**
     * The DOBValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $DOBValidation;
    /**
     * The DLValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $DLValidation;
    /**
     * The DeceasedValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $DeceasedValidation;
    /**
     * The AddressValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $AddressValidation;
    /**
     * The PhoneValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $PhoneValidation;
    /**
     * The OtherValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $OtherValidation;
    /**
     * Constructor method for ValidationInfo_Type
     * @see parent::__construct()
     * @param Message_Type $_nameValidation
     * @param Message_Type $_sSNValidation
     * @param Message_Type $_dOBValidation
     * @param Message_Type $_dLValidation
     * @param Message_Type $_deceasedValidation
     * @param Message_Type $_addressValidation
     * @param Message_Type $_phoneValidation
     * @param Message_Type $_otherValidation
     * @return ValidationInfo_Type
     */
    public function __construct($_nameValidation = NULL,$_sSNValidation = NULL,$_dOBValidation = NULL,$_dLValidation = NULL,$_deceasedValidation = NULL,$_addressValidation = NULL,$_phoneValidation = NULL,$_otherValidation = NULL)
    {
        MicrobiltWsdlClass::__construct(array('NameValidation'=>$_nameValidation,'SSNValidation'=>$_sSNValidation,'DOBValidation'=>$_dOBValidation,'DLValidation'=>$_dLValidation,'DeceasedValidation'=>$_deceasedValidation,'AddressValidation'=>$_addressValidation,'PhoneValidation'=>$_phoneValidation,'OtherValidation'=>$_otherValidation),false);
    }
    /**
     * Get NameValidation value
     * @return Message_Type|null
     */
    public function getNameValidation()
    {
        return $this->NameValidation;
    }
    /**
     * Set NameValidation value
     * @param Message_Type $_nameValidation the NameValidation
     * @return Message_Type
     */
    public function setNameValidation($_nameValidation)
    {
        return ($this->NameValidation = $_nameValidation);
    }
    /**
     * Get SSNValidation value
     * @return Message_Type|null
     */
    public function getSSNValidation()
    {
        return $this->SSNValidation;
    }
    /**
     * Set SSNValidation value
     * @param Message_Type $_sSNValidation the SSNValidation
     * @return Message_Type
     */
    public function setSSNValidation($_sSNValidation)
    {
        return ($this->SSNValidation = $_sSNValidation);
    }
    /**
     * Get DOBValidation value
     * @return Message_Type|null
     */
    public function getDOBValidation()
    {
        return $this->DOBValidation;
    }
    /**
     * Set DOBValidation value
     * @param Message_Type $_dOBValidation the DOBValidation
     * @return Message_Type
     */
    public function setDOBValidation($_dOBValidation)
    {
        return ($this->DOBValidation = $_dOBValidation);
    }
    /**
     * Get DLValidation value
     * @return Message_Type|null
     */
    public function getDLValidation()
    {
        return $this->DLValidation;
    }
    /**
     * Set DLValidation value
     * @param Message_Type $_dLValidation the DLValidation
     * @return Message_Type
     */
    public function setDLValidation($_dLValidation)
    {
        return ($this->DLValidation = $_dLValidation);
    }
    /**
     * Get DeceasedValidation value
     * @return Message_Type|null
     */
    public function getDeceasedValidation()
    {
        return $this->DeceasedValidation;
    }
    /**
     * Set DeceasedValidation value
     * @param Message_Type $_deceasedValidation the DeceasedValidation
     * @return Message_Type
     */
    public function setDeceasedValidation($_deceasedValidation)
    {
        return ($this->DeceasedValidation = $_deceasedValidation);
    }
    /**
     * Get AddressValidation value
     * @return Message_Type|null
     */
    public function getAddressValidation()
    {
        return $this->AddressValidation;
    }
    /**
     * Set AddressValidation value
     * @param Message_Type $_addressValidation the AddressValidation
     * @return Message_Type
     */
    public function setAddressValidation($_addressValidation)
    {
        return ($this->AddressValidation = $_addressValidation);
    }
    /**
     * Get PhoneValidation value
     * @return Message_Type|null
     */
    public function getPhoneValidation()
    {
        return $this->PhoneValidation;
    }
    /**
     * Set PhoneValidation value
     * @param Message_Type $_phoneValidation the PhoneValidation
     * @return Message_Type
     */
    public function setPhoneValidation($_phoneValidation)
    {
        return ($this->PhoneValidation = $_phoneValidation);
    }
    /**
     * Get OtherValidation value
     * @return Message_Type|null
     */
    public function getOtherValidation()
    {
        return $this->OtherValidation;
    }
    /**
     * Set OtherValidation value
     * @param Message_Type $_otherValidation the OtherValidation
     * @return Message_Type
     */
    public function setOtherValidation($_otherValidation)
    {
        return ($this->OtherValidation = $_otherValidation);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ValidationInfo_Type
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
