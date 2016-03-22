<?php
/**
 * File for class MicrobiltStructSpouseInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSpouseInfo_Type originally named SpouseInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSpouseInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPersonName_Type
     */
    public $PersonName;
    /**
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructContactInfo_Type
     */
    public $ContactInfo;
    /**
     * The TINInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructTINInfo_Type
     */
    public $TINInfo;
    /**
     * The BirthDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $BirthDt;
    /**
     * The DeathDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DeathDt;
    /**
     * The DriversLicense
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructDriversLicense_Type
     */
    public $DriversLicense;
    /**
     * The MothersMaidenName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MothersMaidenName;
    /**
     * The EmploymentHistory
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructEmploymentHistory_Type
     */
    public $EmploymentHistory;
    /**
     * Constructor method for SpouseInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonName_Type $_personName
     * @param MicrobiltStructContactInfo_Type $_contactInfo
     * @param MicrobiltStructTINInfo_Type $_tINInfo
     * @param date $_birthDt
     * @param date $_deathDt
     * @param MicrobiltStructDriversLicense_Type $_driversLicense
     * @param string $_mothersMaidenName
     * @param MicrobiltStructEmploymentHistory_Type $_employmentHistory
     * @return MicrobiltStructSpouseInfo_Type
     */
    public function __construct($_personName = NULL,$_contactInfo = NULL,$_tINInfo = NULL,$_birthDt = NULL,$_deathDt = NULL,$_driversLicense = NULL,$_mothersMaidenName = NULL,$_employmentHistory = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonName'=>$_personName,'ContactInfo'=>$_contactInfo,'TINInfo'=>$_tINInfo,'BirthDt'=>$_birthDt,'DeathDt'=>$_deathDt,'DriversLicense'=>$_driversLicense,'MothersMaidenName'=>$_mothersMaidenName,'EmploymentHistory'=>$_employmentHistory),false);
    }
    /**
     * Get PersonName value
     * @return MicrobiltStructPersonName_Type|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param MicrobiltStructPersonName_Type $_personName the PersonName
     * @return MicrobiltStructPersonName_Type
     */
    public function setPersonName($_personName)
    {
        return ($this->PersonName = $_personName);
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
     * Get TINInfo value
     * @return MicrobiltStructTINInfo_Type|null
     */
    public function getTINInfo()
    {
        return $this->TINInfo;
    }
    /**
     * Set TINInfo value
     * @param MicrobiltStructTINInfo_Type $_tINInfo the TINInfo
     * @return MicrobiltStructTINInfo_Type
     */
    public function setTINInfo($_tINInfo)
    {
        return ($this->TINInfo = $_tINInfo);
    }
    /**
     * Get BirthDt value
     * @return date|null
     */
    public function getBirthDt()
    {
        return $this->BirthDt;
    }
    /**
     * Set BirthDt value
     * @param date $_birthDt the BirthDt
     * @return date
     */
    public function setBirthDt($_birthDt)
    {
        return ($this->BirthDt = $_birthDt);
    }
    /**
     * Get DeathDt value
     * @return date|null
     */
    public function getDeathDt()
    {
        return $this->DeathDt;
    }
    /**
     * Set DeathDt value
     * @param date $_deathDt the DeathDt
     * @return date
     */
    public function setDeathDt($_deathDt)
    {
        return ($this->DeathDt = $_deathDt);
    }
    /**
     * Get DriversLicense value
     * @return MicrobiltStructDriversLicense_Type|null
     */
    public function getDriversLicense()
    {
        return $this->DriversLicense;
    }
    /**
     * Set DriversLicense value
     * @param MicrobiltStructDriversLicense_Type $_driversLicense the DriversLicense
     * @return MicrobiltStructDriversLicense_Type
     */
    public function setDriversLicense($_driversLicense)
    {
        return ($this->DriversLicense = $_driversLicense);
    }
    /**
     * Get MothersMaidenName value
     * @return string|null
     */
    public function getMothersMaidenName()
    {
        return $this->MothersMaidenName;
    }
    /**
     * Set MothersMaidenName value
     * @param string $_mothersMaidenName the MothersMaidenName
     * @return string
     */
    public function setMothersMaidenName($_mothersMaidenName)
    {
        return ($this->MothersMaidenName = $_mothersMaidenName);
    }
    /**
     * Get EmploymentHistory value
     * @return MicrobiltStructEmploymentHistory_Type|null
     */
    public function getEmploymentHistory()
    {
        return $this->EmploymentHistory;
    }
    /**
     * Set EmploymentHistory value
     * @param MicrobiltStructEmploymentHistory_Type $_employmentHistory the EmploymentHistory
     * @return MicrobiltStructEmploymentHistory_Type
     */
    public function setEmploymentHistory($_employmentHistory)
    {
        return ($this->EmploymentHistory = $_employmentHistory);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructSpouseInfo_Type
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
