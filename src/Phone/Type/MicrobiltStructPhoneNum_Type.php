<?php

namespace Zakriyarahman\Microbilt\Phone\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\MicrobiltEnumBoolean;

/**
 * File for class MicrobiltStructPhoneNum_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPhoneNum_Type originally named PhoneNum_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPhoneNum_Type extends MicrobiltStructAggregate
{
    /**
     * The PhoneType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PhoneType;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Phone;
    /**
     * The Published
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $Published;
    /**
     * Constructor method for PhoneNum_Type
     * @see parent::__construct()
     * @param string $_phoneType
     * @param string $_phone
     * @param MicrobiltEnumBoolean $_published
     * @return MicrobiltStructPhoneNum_Type
     */
    public function __construct($_phoneType = NULL,$_phone = NULL,$_published = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PhoneType'=>$_phoneType,'Phone'=>$_phone,'Published'=>$_published),false);
    }
    /**
     * Get PhoneType value
     * @return string|null
     */
    public function getPhoneType()
    {
        return $this->PhoneType;
    }
    /**
     * Set PhoneType value
     * @param string $_phoneType the PhoneType
     * @return string
     */
    public function setPhoneType($_phoneType)
    {
        return ($this->PhoneType = $_phoneType);
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $_phone the Phone
     * @return string
     */
    public function setPhone($_phone)
    {
        return ($this->Phone = $_phone);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructPhoneNum_Type
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
