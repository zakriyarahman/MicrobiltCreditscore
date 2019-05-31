<?php

namespace Zakriyarahman\Microbilt\Drivers\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructDriversLicense_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructDriversLicense_Type originally named DriversLicense_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructDriversLicense_Type extends MicrobiltStructAggregate
{
    /**
     * The LicenseNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LicenseNum;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StateProv;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Country;
    /**
     * The DriverOption
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $DriverOption;
    /**
     * The DLClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DLClass;
    /**
     * The DLType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DLType;
    /**
     * The DLStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DLStatus;
    /**
     * The CDLStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CDLStatus;
    /**
     * The Endorsements
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructOption_Type
     */
    public $Endorsements;
    /**
     * The Restrictions
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOption_Type
     */
    public $Restrictions;
    /**
     * The IssuedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IssuedDt;
    /**
     * The ExpirationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ExpirationDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for DriversLicense_Type
     * @see parent::__construct()
     * @param string $_licenseNum
     * @param string $_stateProv
     * @param string $_country
     * @param MicrobiltStructCodeDescription_Type $_driverOption
     * @param string $_dLClass
     * @param string $_dLType
     * @param string $_dLStatus
     * @param string $_cDLStatus
     * @param MicrobiltStructOption_Type $_endorsements
     * @param MicrobiltStructOption_Type $_restrictions
     * @param string $_issuedDt
     * @param string $_expirationDt
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructDriversLicense_Type
     */
    public function __construct($_licenseNum = NULL,$_stateProv = NULL,$_country = NULL,$_driverOption = NULL,$_dLClass = NULL,$_dLType = NULL,$_dLStatus = NULL,$_cDLStatus = NULL,$_endorsements = NULL,$_restrictions = NULL,$_issuedDt = NULL,$_expirationDt = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('LicenseNum'=>$_licenseNum,'StateProv'=>$_stateProv,'Country'=>$_country,'DriverOption'=>$_driverOption,'DLClass'=>$_dLClass,'DLType'=>$_dLType,'DLStatus'=>$_dLStatus,'CDLStatus'=>$_cDLStatus,'Endorsements'=>$_endorsements,'Restrictions'=>$_restrictions,'IssuedDt'=>$_issuedDt,'ExpirationDt'=>$_expirationDt,'Message'=>$_message),false);
    }
    /**
     * Get LicenseNum value
     * @return string|null
     */
    public function getLicenseNum()
    {
        return $this->LicenseNum;
    }
    /**
     * Set LicenseNum value
     * @param string $_licenseNum the LicenseNum
     * @return string
     */
    public function setLicenseNum($_licenseNum)
    {
        return ($this->LicenseNum = $_licenseNum);
    }
    /**
     * Get StateProv value
     * @return string|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param string $_stateProv the StateProv
     * @return string
     */
    public function setStateProv($_stateProv)
    {
        return ($this->StateProv = $_stateProv);
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $_country the Country
     * @return string
     */
    public function setCountry($_country)
    {
        return ($this->Country = $_country);
    }
    /**
     * Get DriverOption value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getDriverOption()
    {
        return $this->DriverOption;
    }
    /**
     * Set DriverOption value
     * @param MicrobiltStructCodeDescription_Type $_driverOption the DriverOption
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setDriverOption($_driverOption)
    {
        return ($this->DriverOption = $_driverOption);
    }
    /**
     * Get DLClass value
     * @return string|null
     */
    public function getDLClass()
    {
        return $this->DLClass;
    }
    /**
     * Set DLClass value
     * @param string $_dLClass the DLClass
     * @return string
     */
    public function setDLClass($_dLClass)
    {
        return ($this->DLClass = $_dLClass);
    }
    /**
     * Get DLType value
     * @return string|null
     */
    public function getDLType()
    {
        return $this->DLType;
    }
    /**
     * Set DLType value
     * @param string $_dLType the DLType
     * @return string
     */
    public function setDLType($_dLType)
    {
        return ($this->DLType = $_dLType);
    }
    /**
     * Get DLStatus value
     * @return string|null
     */
    public function getDLStatus()
    {
        return $this->DLStatus;
    }
    /**
     * Set DLStatus value
     * @param string $_dLStatus the DLStatus
     * @return string
     */
    public function setDLStatus($_dLStatus)
    {
        return ($this->DLStatus = $_dLStatus);
    }
    /**
     * Get CDLStatus value
     * @return string|null
     */
    public function getCDLStatus()
    {
        return $this->CDLStatus;
    }
    /**
     * Set CDLStatus value
     * @param string $_cDLStatus the CDLStatus
     * @return string
     */
    public function setCDLStatus($_cDLStatus)
    {
        return ($this->CDLStatus = $_cDLStatus);
    }
    /**
     * Get Endorsements value
     * @return MicrobiltStructOption_Type|null
     */
    public function getEndorsements()
    {
        return $this->Endorsements;
    }
    /**
     * Set Endorsements value
     * @param MicrobiltStructOption_Type $_endorsements the Endorsements
     * @return MicrobiltStructOption_Type
     */
    public function setEndorsements($_endorsements)
    {
        return ($this->Endorsements = $_endorsements);
    }
    /**
     * Get Restrictions value
     * @return MicrobiltStructOption_Type|null
     */
    public function getRestrictions()
    {
        return $this->Restrictions;
    }
    /**
     * Set Restrictions value
     * @param MicrobiltStructOption_Type $_restrictions the Restrictions
     * @return MicrobiltStructOption_Type
     */
    public function setRestrictions($_restrictions)
    {
        return ($this->Restrictions = $_restrictions);
    }
    /**
     * Get IssuedDt value
     * @return string|null
     */
    public function getIssuedDt()
    {
        return $this->IssuedDt;
    }
    /**
     * Set IssuedDt value
     * @param string $_issuedDt the IssuedDt
     * @return string
     */
    public function setIssuedDt($_issuedDt)
    {
        return ($this->IssuedDt = $_issuedDt);
    }
    /**
     * Get ExpirationDt value
     * @return string|null
     */
    public function getExpirationDt()
    {
        return $this->ExpirationDt;
    }
    /**
     * Set ExpirationDt value
     * @param string $_expirationDt the ExpirationDt
     * @return string
     */
    public function setExpirationDt($_expirationDt)
    {
        return ($this->ExpirationDt = $_expirationDt);
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
     * @return MicrobiltStructDriversLicense_Type
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
