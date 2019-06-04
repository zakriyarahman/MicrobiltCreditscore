<?php

namespace Zakriyarahman\Microbilt\Contact\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class ContactInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for ContactInfo_Type originally named ContactInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class ContactInfo_Type extends Aggregate
{
    /**
     * The ContactPref
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContactPref;
    /**
     * The PhoneNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PhoneNum_Type
     */
    public $PhoneNum;
    /**
     * The ContactName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContactName;
    /**
     * The EmailAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EmailAddr;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $URL;
    /**
     * The PostAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PostAddr_Type
     */
    public $PostAddr;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * The ContactType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContactType;
    /**
     * The ValidationInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var ValidationInfo_Type
     */
    public $ValidationInfo;
    /**
     * The InstantMessagingInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var InstantMessagingInfo_Type
     */
    public $InstantMessagingInfo;
    /**
     * Constructor method for ContactInfo_Type
     * @see parent::__construct()
     * @param string $_contactPref
     * @param PhoneNum_Type $_phoneNum
     * @param string $_contactName
     * @param string $_emailAddr
     * @param string $_uRL
     * @param PostAddr_Type $_postAddr
     * @param Message_Type $_message
     * @param string $_contactType
     * @param ValidationInfo_Type $_validationInfo
     * @param InstantMessagingInfo_Type $_instantMessagingInfo
     * @return ContactInfo_Type
     */
    public function __construct($_contactPref = NULL,$_phoneNum = NULL,$_contactName = NULL,$_emailAddr = NULL,$_uRL = NULL,$_postAddr = NULL,$_message = NULL,$_contactType = NULL,$_validationInfo = NULL,$_instantMessagingInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ContactPref'=>$_contactPref,'PhoneNum'=>$_phoneNum,'ContactName'=>$_contactName,'EmailAddr'=>$_emailAddr,'URL'=>$_uRL,'PostAddr'=>$_postAddr,'Message'=>$_message,'ContactType'=>$_contactType,'ValidationInfo'=>$_validationInfo,'InstantMessagingInfo'=>$_instantMessagingInfo),false);
    }
    /**
     * Get ContactPref value
     * @return string|null
     */
    public function getContactPref()
    {
        return $this->ContactPref;
    }
    /**
     * Set ContactPref value
     * @param string $_contactPref the ContactPref
     * @return string
     */
    public function setContactPref($_contactPref)
    {
        return ($this->ContactPref = $_contactPref);
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
     * Get ContactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param string $_contactName the ContactName
     * @return string
     */
    public function setContactName($_contactName)
    {
        return ($this->ContactName = $_contactName);
    }
    /**
     * Get EmailAddr value
     * @return string|null
     */
    public function getEmailAddr()
    {
        return $this->EmailAddr;
    }
    /**
     * Set EmailAddr value
     * @param string $_emailAddr the EmailAddr
     * @return string
     */
    public function setEmailAddr($_emailAddr)
    {
        return ($this->EmailAddr = $_emailAddr);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $_uRL the URL
     * @return string
     */
    public function setURL($_uRL)
    {
        return ($this->URL = $_uRL);
    }
    /**
     * Get PostAddr value
     * @return PostAddr_Type|null
     */
    public function getPostAddr()
    {
        return $this->PostAddr;
    }
    /**
     * Set PostAddr value
     * @param PostAddr_Type $_postAddr the PostAddr
     * @return PostAddr_Type
     */
    public function setPostAddr($_postAddr)
    {
        return ($this->PostAddr = $_postAddr);
    }
    /**
     * Get Message value
     * @return Message_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param Message_Type $_message the Message
     * @return Message_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Get ContactType value
     * @return string|null
     */
    public function getContactType()
    {
        return $this->ContactType;
    }
    /**
     * Set ContactType value
     * @param string $_contactType the ContactType
     * @return string
     */
    public function setContactType($_contactType)
    {
        return ($this->ContactType = $_contactType);
    }
    /**
     * Get ValidationInfo value
     * @return ValidationInfo_Type|null
     */
    public function getValidationInfo()
    {
        return $this->ValidationInfo;
    }
    /**
     * Set ValidationInfo value
     * @param ValidationInfo_Type $_validationInfo the ValidationInfo
     * @return ValidationInfo_Type
     */
    public function setValidationInfo($_validationInfo)
    {
        return ($this->ValidationInfo = $_validationInfo);
    }
    /**
     * Get InstantMessagingInfo value
     * @return InstantMessagingInfo_Type|null
     */
    public function getInstantMessagingInfo()
    {
        return $this->InstantMessagingInfo;
    }
    /**
     * Set InstantMessagingInfo value
     * @param InstantMessagingInfo_Type $_instantMessagingInfo the InstantMessagingInfo
     * @return InstantMessagingInfo_Type
     */
    public function setInstantMessagingInfo($_instantMessagingInfo)
    {
        return ($this->InstantMessagingInfo = $_instantMessagingInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ContactInfo_Type
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
