<?php

namespace Zakriyarahman\Microbilt\Business\Type;

/**
 * File for class MicrobiltStructBusinessInquiry_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructBusinessInquiry_Type originally named BusinessInquiry_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructBusinessInquiry_Type extends MicrobiltStructAggregate
{
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The Inquiry
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructInquiry_Type
     */
    public $Inquiry;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for BusinessInquiry_Type
     * @see parent::__construct()
     * @param MicrobiltStructOrgInfo_Type $_orgInfo
     * @param MicrobiltStructInquiry_Type $_inquiry
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructBusinessInquiry_Type
     */
    public function __construct($_orgInfo = NULL,$_inquiry = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'Inquiry'=>$_inquiry,'Message'=>$_message),false);
    }
    /**
     * Get OrgInfo value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param MicrobiltStructOrgInfo_Type $_orgInfo the OrgInfo
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get Inquiry value
     * @return MicrobiltStructInquiry_Type|null
     */
    public function getInquiry()
    {
        return $this->Inquiry;
    }
    /**
     * Set Inquiry value
     * @param MicrobiltStructInquiry_Type $_inquiry the Inquiry
     * @return MicrobiltStructInquiry_Type
     */
    public function setInquiry($_inquiry)
    {
        return ($this->Inquiry = $_inquiry);
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
     * @return MicrobiltStructBusinessInquiry_Type
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
