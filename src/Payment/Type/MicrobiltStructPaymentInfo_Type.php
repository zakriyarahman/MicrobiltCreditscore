<?php

namespace Zakriyarahman\Microbilt\Payment\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructPaymentInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPaymentInfo_Type originally named PaymentInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPaymentInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The CategoryInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructCategoryInfo_Type
     */
    public $CategoryInfo;
    /**
     * The PaymentElementsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructElementsInfo_Type
     */
    public $PaymentElementsInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for PaymentInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltStructCategoryInfo_Type $_categoryInfo
     * @param MicrobiltStructElementsInfo_Type $_paymentElementsInfo
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructPaymentInfo_Type
     */
    public function __construct($_msgClass = NULL,$_categoryInfo = NULL,$_paymentElementsInfo = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'CategoryInfo'=>$_categoryInfo,'PaymentElementsInfo'=>$_paymentElementsInfo,'Message'=>$_message),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get CategoryInfo value
     * @return MicrobiltStructCategoryInfo_Type|null
     */
    public function getCategoryInfo()
    {
        return $this->CategoryInfo;
    }
    /**
     * Set CategoryInfo value
     * @param MicrobiltStructCategoryInfo_Type $_categoryInfo the CategoryInfo
     * @return MicrobiltStructCategoryInfo_Type
     */
    public function setCategoryInfo($_categoryInfo)
    {
        return ($this->CategoryInfo = $_categoryInfo);
    }
    /**
     * Get PaymentElementsInfo value
     * @return MicrobiltStructElementsInfo_Type|null
     */
    public function getPaymentElementsInfo()
    {
        return $this->PaymentElementsInfo;
    }
    /**
     * Set PaymentElementsInfo value
     * @param MicrobiltStructElementsInfo_Type $_paymentElementsInfo the PaymentElementsInfo
     * @return MicrobiltStructElementsInfo_Type
     */
    public function setPaymentElementsInfo($_paymentElementsInfo)
    {
        return ($this->PaymentElementsInfo = $_paymentElementsInfo);
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
     * @return MicrobiltStructPaymentInfo_Type
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
