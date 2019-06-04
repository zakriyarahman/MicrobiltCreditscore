<?php

namespace Zakriyarahman\Microbilt\Phone\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class PhoneInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for PhoneInfo_Type originally named PhoneInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class PhoneInfo_Type extends Aggregate
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PersonName_Type
     */
    public $PersonName;
    /**
     * The PhoneNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var PhoneNum_Type
     */
    public $PhoneNum;
    /**
     * The Published
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $Published;
    /**
     * The PhoneTypeIndicators
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var DataIndicators_Type
     */
    public $PhoneTypeIndicators;
    /**
     * Constructor method for PhoneInfo_Type
     * @see parent::__construct()
     * @param PersonName_Type $_personName
     * @param PhoneNum_Type $_phoneNum
     * @param Boolean $_published
     * @param DataIndicators_Type $_phoneTypeIndicators
     * @return PhoneInfo_Type
     */
    public function __construct($_personName = NULL,$_phoneNum = NULL,$_published = NULL,$_phoneTypeIndicators = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonName'=>$_personName,'PhoneNum'=>$_phoneNum,'Published'=>$_published,'PhoneTypeIndicators'=>$_phoneTypeIndicators),false);
    }
    /**
     * Get PersonName value
     * @return PersonName_Type|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param PersonName_Type $_personName the PersonName
     * @return PersonName_Type
     */
    public function setPersonName($_personName)
    {
        return ($this->PersonName = $_personName);
    }
    /**
     * Get PhoneNum value
     * @return PhoneNum_Type|null
     */
    public function getPhoneNum()
    {
        return $this->PhoneNum;
    }
    /**
     * Set PhoneNum value
     * @param PhoneNum_Type $_phoneNum the PhoneNum
     * @return PhoneNum_Type
     */
    public function setPhoneNum($_phoneNum)
    {
        return ($this->PhoneNum = $_phoneNum);
    }
    /**
     * Get Published value
     * @return Boolean|null
     */
    public function getPublished()
    {
        return $this->Published;
    }
    /**
     * Set Published value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_published the Published
     * @return Boolean
     */
    public function setPublished($_published)
    {
        if(!Boolean::valueIsValid($_published))
        {
            return false;
        }
        return ($this->Published = $_published);
    }
    /**
     * Get PhoneTypeIndicators value
     * @return DataIndicators_Type|null
     */
    public function getPhoneTypeIndicators()
    {
        return $this->PhoneTypeIndicators;
    }
    /**
     * Set PhoneTypeIndicators value
     * @param DataIndicators_Type $_phoneTypeIndicators the PhoneTypeIndicators
     * @return DataIndicators_Type
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
     * @return PhoneInfo_Type
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
