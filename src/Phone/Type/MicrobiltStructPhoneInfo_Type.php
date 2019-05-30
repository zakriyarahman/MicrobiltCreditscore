<?php

namespace Zakriyarahman\Microbilt\Phone\Type;

/**
 * File for class MicrobiltStructPhoneInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPhoneInfo_Type originally named PhoneInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPhoneInfo_Type extends MicrobiltStructAggregate
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
     * The PhoneNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPhoneNum_Type
     */
    public $PhoneNum;
    /**
     * The Published
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $Published;
    /**
     * The PhoneTypeIndicators
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructDataIndicators_Type
     */
    public $PhoneTypeIndicators;
    /**
     * Constructor method for PhoneInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonName_Type $_personName
     * @param MicrobiltStructPhoneNum_Type $_phoneNum
     * @param MicrobiltEnumBoolean $_published
     * @param MicrobiltStructDataIndicators_Type $_phoneTypeIndicators
     * @return MicrobiltStructPhoneInfo_Type
     */
    public function __construct($_personName = NULL,$_phoneNum = NULL,$_published = NULL,$_phoneTypeIndicators = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonName'=>$_personName,'PhoneNum'=>$_phoneNum,'Published'=>$_published,'PhoneTypeIndicators'=>$_phoneTypeIndicators),false);
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
     * Get PhoneNum value
     * @return MicrobiltStructPhoneNum_Type|null
     */
    public function getPhoneNum()
    {
        return $this->PhoneNum;
    }
    /**
     * Set PhoneNum value
     * @param MicrobiltStructPhoneNum_Type $_phoneNum the PhoneNum
     * @return MicrobiltStructPhoneNum_Type
     */
    public function setPhoneNum($_phoneNum)
    {
        return ($this->PhoneNum = $_phoneNum);
    }
    /**
     * Get Published value
     * @return MicrobiltEnumBoolean|null
     */
    public function getPublished()
    {
        return $this->Published;
    }
    /**
     * Set Published value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_published the Published
     * @return MicrobiltEnumBoolean
     */
    public function setPublished($_published)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_published))
        {
            return false;
        }
        return ($this->Published = $_published);
    }
    /**
     * Get PhoneTypeIndicators value
     * @return MicrobiltStructDataIndicators_Type|null
     */
    public function getPhoneTypeIndicators()
    {
        return $this->PhoneTypeIndicators;
    }
    /**
     * Set PhoneTypeIndicators value
     * @param MicrobiltStructDataIndicators_Type $_phoneTypeIndicators the PhoneTypeIndicators
     * @return MicrobiltStructDataIndicators_Type
     */
    public function setPhoneTypeIndicators($_phoneTypeIndicators)
    {
        return ($this->PhoneTypeIndicators = $_phoneTypeIndicators);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructPhoneInfo_Type
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
