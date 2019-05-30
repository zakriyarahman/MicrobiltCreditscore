<?php

namespace Zakriyarahman\Microbilt\Address\Type;

/**
 * File for class MicrobiltStructAddressInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAddressInfo_Type originally named AddressInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAddressInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The PostAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPostAddr_Type
     */
    public $PostAddr;
    /**
     * The Verified
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $Verified;
    /**
     * The Shared
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $Shared;
    /**
     * The PhoneInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPhoneInfo_Type
     */
    public $PhoneInfo;
    /**
     * Constructor method for AddressInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructPostAddr_Type $_postAddr
     * @param MicrobiltEnumBoolean $_verified
     * @param MicrobiltEnumBoolean $_shared
     * @param MicrobiltStructPhoneInfo_Type $_phoneInfo
     * @return MicrobiltStructAddressInfo_Type
     */
    public function __construct($_personInfo = NULL,$_postAddr = NULL,$_verified = NULL,$_shared = NULL,$_phoneInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'PostAddr'=>$_postAddr,'Verified'=>$_verified,'Shared'=>$_shared,'PhoneInfo'=>$_phoneInfo),false);
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
     * Get PostAddr value
     * @return MicrobiltStructPostAddr_Type|null
     */
    public function getPostAddr()
    {
        return $this->PostAddr;
    }
    /**
     * Set PostAddr value
     * @param MicrobiltStructPostAddr_Type $_postAddr the PostAddr
     * @return MicrobiltStructPostAddr_Type
     */
    public function setPostAddr($_postAddr)
    {
        return ($this->PostAddr = $_postAddr);
    }
    /**
     * Get Verified value
     * @return MicrobiltEnumBoolean|null
     */
    public function getVerified()
    {
        return $this->Verified;
    }
    /**
     * Set Verified value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_verified the Verified
     * @return MicrobiltEnumBoolean
     */
    public function setVerified($_verified)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_verified))
        {
            return false;
        }
        return ($this->Verified = $_verified);
    }
    /**
     * Get Shared value
     * @return MicrobiltEnumBoolean|null
     */
    public function getShared()
    {
        return $this->Shared;
    }
    /**
     * Set Shared value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_shared the Shared
     * @return MicrobiltEnumBoolean
     */
    public function setShared($_shared)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_shared))
        {
            return false;
        }
        return ($this->Shared = $_shared);
    }
    /**
     * Get PhoneInfo value
     * @return MicrobiltStructPhoneInfo_Type|null
     */
    public function getPhoneInfo()
    {
        return $this->PhoneInfo;
    }
    /**
     * Set PhoneInfo value
     * @param MicrobiltStructPhoneInfo_Type $_phoneInfo the PhoneInfo
     * @return MicrobiltStructPhoneInfo_Type
     */
    public function setPhoneInfo($_phoneInfo)
    {
        return ($this->PhoneInfo = $_phoneInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAddressInfo_Type
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
