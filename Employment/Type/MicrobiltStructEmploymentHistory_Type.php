<?php
/**
 * File for class MicrobiltStructEmploymentHistory_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructEmploymentHistory_Type originally named EmploymentHistory_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructEmploymentHistory_Type extends MicrobiltStructAggregate
{
    /**
     * The EmploymentStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EmploymentStatus;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The Occupation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Occupation;
    /**
     * The Income
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $Income;
    /**
     * The PmtFreq
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtFreq;
    /**
     * The JobTitle
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $JobTitle;
    /**
     * The StartDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StartDt;
    /**
     * The EndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EndDt;
    /**
     * The VerifiedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VerifiedDt;
    /**
     * The VerificationCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VerificationCode;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for EmploymentHistory_Type
     * @see parent::__construct()
     * @param string $_employmentStatus
     * @param MicrobiltStructOrgInfo_Type $_orgInfo
     * @param string $_occupation
     * @param MicrobiltStructCurrencyAmount $_income
     * @param string $_pmtFreq
     * @param string $_jobTitle
     * @param string $_startDt
     * @param string $_endDt
     * @param string $_verifiedDt
     * @param string $_verificationCode
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructEmploymentHistory_Type
     */
    public function __construct($_employmentStatus = NULL,$_orgInfo = NULL,$_occupation = NULL,$_income = NULL,$_pmtFreq = NULL,$_jobTitle = NULL,$_startDt = NULL,$_endDt = NULL,$_verifiedDt = NULL,$_verificationCode = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('EmploymentStatus'=>$_employmentStatus,'OrgInfo'=>$_orgInfo,'Occupation'=>$_occupation,'Income'=>$_income,'PmtFreq'=>$_pmtFreq,'JobTitle'=>$_jobTitle,'StartDt'=>$_startDt,'EndDt'=>$_endDt,'VerifiedDt'=>$_verifiedDt,'VerificationCode'=>$_verificationCode,'Message'=>$_message),false);
    }
    /**
     * Get EmploymentStatus value
     * @return string|null
     */
    public function getEmploymentStatus()
    {
        return $this->EmploymentStatus;
    }
    /**
     * Set EmploymentStatus value
     * @param string $_employmentStatus the EmploymentStatus
     * @return string
     */
    public function setEmploymentStatus($_employmentStatus)
    {
        return ($this->EmploymentStatus = $_employmentStatus);
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
     * Get Occupation value
     * @return string|null
     */
    public function getOccupation()
    {
        return $this->Occupation;
    }
    /**
     * Set Occupation value
     * @param string $_occupation the Occupation
     * @return string
     */
    public function setOccupation($_occupation)
    {
        return ($this->Occupation = $_occupation);
    }
    /**
     * Get Income value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getIncome()
    {
        return $this->Income;
    }
    /**
     * Set Income value
     * @param MicrobiltStructCurrencyAmount $_income the Income
     * @return MicrobiltStructCurrencyAmount
     */
    public function setIncome($_income)
    {
        return ($this->Income = $_income);
    }
    /**
     * Get PmtFreq value
     * @return string|null
     */
    public function getPmtFreq()
    {
        return $this->PmtFreq;
    }
    /**
     * Set PmtFreq value
     * @param string $_pmtFreq the PmtFreq
     * @return string
     */
    public function setPmtFreq($_pmtFreq)
    {
        return ($this->PmtFreq = $_pmtFreq);
    }
    /**
     * Get JobTitle value
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }
    /**
     * Set JobTitle value
     * @param string $_jobTitle the JobTitle
     * @return string
     */
    public function setJobTitle($_jobTitle)
    {
        return ($this->JobTitle = $_jobTitle);
    }
    /**
     * Get StartDt value
     * @return string|null
     */
    public function getStartDt()
    {
        return $this->StartDt;
    }
    /**
     * Set StartDt value
     * @param string $_startDt the StartDt
     * @return string
     */
    public function setStartDt($_startDt)
    {
        return ($this->StartDt = $_startDt);
    }
    /**
     * Get EndDt value
     * @return string|null
     */
    public function getEndDt()
    {
        return $this->EndDt;
    }
    /**
     * Set EndDt value
     * @param string $_endDt the EndDt
     * @return string
     */
    public function setEndDt($_endDt)
    {
        return ($this->EndDt = $_endDt);
    }
    /**
     * Get VerifiedDt value
     * @return string|null
     */
    public function getVerifiedDt()
    {
        return $this->VerifiedDt;
    }
    /**
     * Set VerifiedDt value
     * @param string $_verifiedDt the VerifiedDt
     * @return string
     */
    public function setVerifiedDt($_verifiedDt)
    {
        return ($this->VerifiedDt = $_verifiedDt);
    }
    /**
     * Get VerificationCode value
     * @return string|null
     */
    public function getVerificationCode()
    {
        return $this->VerificationCode;
    }
    /**
     * Set VerificationCode value
     * @param string $_verificationCode the VerificationCode
     * @return string
     */
    public function setVerificationCode($_verificationCode)
    {
        return ($this->VerificationCode = $_verificationCode);
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
     * @return MicrobiltStructEmploymentHistory_Type
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
