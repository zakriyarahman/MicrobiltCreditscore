<?php
/**
 * File for class MicrobiltStructInquiry_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructInquiry_Type originally named Inquiry_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructInquiry_Type extends MicrobiltStructAggregate
{
    /**
     * The InqDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InqDt;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The CreditLoanType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CreditLoanType;
    /**
     * The Terms
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Terms;
    /**
     * The InqResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InqResult;
    /**
     * The AcctId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctId;
    /**
     * The InquiryAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $InquiryAmt;
    /**
     * The InquiryType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InquiryType;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Inquiry_Type
     * @see parent::__construct()
     * @param string $_inqDt
     * @param MicrobiltStructOrgInfo_Type $_orgInfo
     * @param string $_creditLoanType
     * @param string $_terms
     * @param string $_inqResult
     * @param string $_acctId
     * @param MicrobiltStructCurrencyAmount $_inquiryAmt
     * @param string $_inquiryType
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructInquiry_Type
     */
    public function __construct($_inqDt = NULL,$_orgInfo = NULL,$_creditLoanType = NULL,$_terms = NULL,$_inqResult = NULL,$_acctId = NULL,$_inquiryAmt = NULL,$_inquiryType = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('InqDt'=>$_inqDt,'OrgInfo'=>$_orgInfo,'CreditLoanType'=>$_creditLoanType,'Terms'=>$_terms,'InqResult'=>$_inqResult,'AcctId'=>$_acctId,'InquiryAmt'=>$_inquiryAmt,'InquiryType'=>$_inquiryType,'Message'=>$_message),false);
    }
    /**
     * Get InqDt value
     * @return string|null
     */
    public function getInqDt()
    {
        return $this->InqDt;
    }
    /**
     * Set InqDt value
     * @param string $_inqDt the InqDt
     * @return string
     */
    public function setInqDt($_inqDt)
    {
        return ($this->InqDt = $_inqDt);
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
     * Get CreditLoanType value
     * @return string|null
     */
    public function getCreditLoanType()
    {
        return $this->CreditLoanType;
    }
    /**
     * Set CreditLoanType value
     * @param string $_creditLoanType the CreditLoanType
     * @return string
     */
    public function setCreditLoanType($_creditLoanType)
    {
        return ($this->CreditLoanType = $_creditLoanType);
    }
    /**
     * Get Terms value
     * @return string|null
     */
    public function getTerms()
    {
        return $this->Terms;
    }
    /**
     * Set Terms value
     * @param string $_terms the Terms
     * @return string
     */
    public function setTerms($_terms)
    {
        return ($this->Terms = $_terms);
    }
    /**
     * Get InqResult value
     * @return string|null
     */
    public function getInqResult()
    {
        return $this->InqResult;
    }
    /**
     * Set InqResult value
     * @param string $_inqResult the InqResult
     * @return string
     */
    public function setInqResult($_inqResult)
    {
        return ($this->InqResult = $_inqResult);
    }
    /**
     * Get AcctId value
     * @return string|null
     */
    public function getAcctId()
    {
        return $this->AcctId;
    }
    /**
     * Set AcctId value
     * @param string $_acctId the AcctId
     * @return string
     */
    public function setAcctId($_acctId)
    {
        return ($this->AcctId = $_acctId);
    }
    /**
     * Get InquiryAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getInquiryAmt()
    {
        return $this->InquiryAmt;
    }
    /**
     * Set InquiryAmt value
     * @param MicrobiltStructCurrencyAmount $_inquiryAmt the InquiryAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setInquiryAmt($_inquiryAmt)
    {
        return ($this->InquiryAmt = $_inquiryAmt);
    }
    /**
     * Get InquiryType value
     * @return string|null
     */
    public function getInquiryType()
    {
        return $this->InquiryType;
    }
    /**
     * Set InquiryType value
     * @param string $_inquiryType the InquiryType
     * @return string
     */
    public function setInquiryType($_inquiryType)
    {
        return ($this->InquiryType = $_inquiryType);
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
     * @return MicrobiltStructInquiry_Type
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
