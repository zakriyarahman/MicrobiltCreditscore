<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructWeaponPermit_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructWeaponPermit_Type originally named WeaponPermit_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructWeaponPermit_Type extends MicrobiltStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The WeaponType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $WeaponType;
    /**
     * The LicenseNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LicenseNum;
    /**
     * The LicenseType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LicenseType;
    /**
     * The RegDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RegDt;
    /**
     * The DtExpires
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtExpires;
    /**
     * Constructor method for WeaponPermit_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param string $_weaponType
     * @param string $_licenseNum
     * @param string $_licenseType
     * @param string $_regDt
     * @param string $_dtExpires
     * @return MicrobiltStructWeaponPermit_Type
     */
    public function __construct($_personInfo = NULL,$_weaponType = NULL,$_licenseNum = NULL,$_licenseType = NULL,$_regDt = NULL,$_dtExpires = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'WeaponType'=>$_weaponType,'LicenseNum'=>$_licenseNum,'LicenseType'=>$_licenseType,'RegDt'=>$_regDt,'DtExpires'=>$_dtExpires),false);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
    }
    /**
     * Get WeaponType value
     * @return string|null
     */
    public function getWeaponType()
    {
        return $this->WeaponType;
    }
    /**
     * Set WeaponType value
     * @param string $_weaponType the WeaponType
     * @return string
     */
    public function setWeaponType($_weaponType)
    {
        return ($this->WeaponType = $_weaponType);
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
     * Get LicenseType value
     * @return string|null
     */
    public function getLicenseType()
    {
        return $this->LicenseType;
    }
    /**
     * Set LicenseType value
     * @param string $_licenseType the LicenseType
     * @return string
     */
    public function setLicenseType($_licenseType)
    {
        return ($this->LicenseType = $_licenseType);
    }
    /**
     * Get RegDt value
     * @return string|null
     */
    public function getRegDt()
    {
        return $this->RegDt;
    }
    /**
     * Set RegDt value
     * @param string $_regDt the RegDt
     * @return string
     */
    public function setRegDt($_regDt)
    {
        return ($this->RegDt = $_regDt);
    }
    /**
     * Get DtExpires value
     * @return string|null
     */
    public function getDtExpires()
    {
        return $this->DtExpires;
    }
    /**
     * Set DtExpires value
     * @param string $_dtExpires the DtExpires
     * @return string
     */
    public function setDtExpires($_dtExpires)
    {
        return ($this->DtExpires = $_dtExpires);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructWeaponPermit_Type
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
