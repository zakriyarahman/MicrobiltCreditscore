<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructInternationalCourtInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructInternationalCourtInfo_Type originally named InternationalCourtInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructInternationalCourtInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The IntlCourtDetailsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructIntlCourtDetailsInfo_Type
     */
    public $IntlCourtDetailsInfo;
    /**
     * The IntlCourtPeriodInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructIntlCourtPeriodInfo_Type
     */
    public $IntlCourtPeriodInfo;
    /**
     * The IntlCourtElementsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructIntlCourtElementsInfo_Type
     */
    public $IntlCourtElementsInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for InternationalCourtInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructIntlCourtDetailsInfo_Type $_intlCourtDetailsInfo
     * @param MicrobiltStructIntlCourtPeriodInfo_Type $_intlCourtPeriodInfo
     * @param MicrobiltStructIntlCourtElementsInfo_Type $_intlCourtElementsInfo
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructInternationalCourtInfo_Type
     */
    public function __construct($_intlCourtDetailsInfo = NULL,$_intlCourtPeriodInfo = NULL,$_intlCourtElementsInfo = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('IntlCourtDetailsInfo'=>$_intlCourtDetailsInfo,'IntlCourtPeriodInfo'=>$_intlCourtPeriodInfo,'IntlCourtElementsInfo'=>$_intlCourtElementsInfo,'Message'=>$_message),false);
    }
    /**
     * Get IntlCourtDetailsInfo value
     * @return MicrobiltStructIntlCourtDetailsInfo_Type|null
     */
    public function getIntlCourtDetailsInfo()
    {
        return $this->IntlCourtDetailsInfo;
    }
    /**
     * Set IntlCourtDetailsInfo value
     * @param MicrobiltStructIntlCourtDetailsInfo_Type $_intlCourtDetailsInfo the IntlCourtDetailsInfo
     * @return MicrobiltStructIntlCourtDetailsInfo_Type
     */
    public function setIntlCourtDetailsInfo($_intlCourtDetailsInfo)
    {
        return ($this->IntlCourtDetailsInfo = $_intlCourtDetailsInfo);
    }
    /**
     * Get IntlCourtPeriodInfo value
     * @return MicrobiltStructIntlCourtPeriodInfo_Type|null
     */
    public function getIntlCourtPeriodInfo()
    {
        return $this->IntlCourtPeriodInfo;
    }
    /**
     * Set IntlCourtPeriodInfo value
     * @param MicrobiltStructIntlCourtPeriodInfo_Type $_intlCourtPeriodInfo the IntlCourtPeriodInfo
     * @return MicrobiltStructIntlCourtPeriodInfo_Type
     */
    public function setIntlCourtPeriodInfo($_intlCourtPeriodInfo)
    {
        return ($this->IntlCourtPeriodInfo = $_intlCourtPeriodInfo);
    }
    /**
     * Get IntlCourtElementsInfo value
     * @return MicrobiltStructIntlCourtElementsInfo_Type|null
     */
    public function getIntlCourtElementsInfo()
    {
        return $this->IntlCourtElementsInfo;
    }
    /**
     * Set IntlCourtElementsInfo value
     * @param MicrobiltStructIntlCourtElementsInfo_Type $_intlCourtElementsInfo the IntlCourtElementsInfo
     * @return MicrobiltStructIntlCourtElementsInfo_Type
     */
    public function setIntlCourtElementsInfo($_intlCourtElementsInfo)
    {
        return ($this->IntlCourtElementsInfo = $_intlCourtElementsInfo);
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
     * @return MicrobiltStructInternationalCourtInfo_Type
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
