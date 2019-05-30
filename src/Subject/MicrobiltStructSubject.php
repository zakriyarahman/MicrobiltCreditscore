<?php

namespace Zakriyarahman\Microbilt\Subject;

/**
 * File for class MicrobiltStructSubject
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSubject originally named Subject
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd1}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSubject extends MicrobiltWsdlClass
{
    /**
     * The RefNum
     * @var string
     */
    public $RefNum;
    /**
     * The FileDt
     * @var string
     */
    public $FileDt;
    /**
     * The LastActivityDt
     * @var string
     */
    public $LastActivityDt;
    /**
     * The PersonInfo
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The Alias
     * @var MicrobiltStructPersonInfo_Type
     */
    public $Alias;
    /**
     * The ConsumerReferral
     * @var MicrobiltStructOrgInfo_Type
     */
    public $ConsumerReferral;
    /**
     * The Score
     * @var MicrobiltStructScore_Type
     */
    public $Score;
    /**
     * The Summary
     * @var MicrobiltStructSummary_Type
     */
    public $Summary;
    /**
     * The Liability
     * @var MicrobiltStructLiability_Type
     */
    public $Liability;
    /**
     * The Collection
     * @var MicrobiltStructCollection_Type
     */
    public $Collection;
    /**
     * The PublicRecord
     * @var MicrobiltStructPublicRecord_Type
     */
    public $PublicRecord;
    /**
     * The Inquiry
     * @var MicrobiltStructInquiry_Type
     */
    public $Inquiry;
    /**
     * The Fraud
     * @var MicrobiltStructFraud_Type
     */
    public $Fraud;
    /**
     * The ConsumerStatement
     * @var MicrobiltStructConsumerStatement_Type
     */
    public $ConsumerStatement;
    /**
     * The Directory
     * @var MicrobiltStructOrgInfo_Type
     */
    public $Directory;
    /**
     * The Decision
     * @var MicrobiltStructDecision_Type
     */
    public $Decision;
    /**
     * The Message
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Subject
     * @see parent::__construct()
     * @param string $_refNum
     * @param string $_fileDt
     * @param string $_lastActivityDt
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructPersonInfo_Type $_alias
     * @param MicrobiltStructOrgInfo_Type $_consumerReferral
     * @param MicrobiltStructScore_Type $_score
     * @param MicrobiltStructSummary_Type $_summary
     * @param MicrobiltStructLiability_Type $_liability
     * @param MicrobiltStructCollection_Type $_collection
     * @param MicrobiltStructPublicRecord_Type $_publicRecord
     * @param MicrobiltStructInquiry_Type $_inquiry
     * @param MicrobiltStructFraud_Type $_fraud
     * @param MicrobiltStructConsumerStatement_Type $_consumerStatement
     * @param MicrobiltStructOrgInfo_Type $_directory
     * @param MicrobiltStructDecision_Type $_decision
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructSubject
     */
    public function __construct($_refNum = NULL,$_fileDt = NULL,$_lastActivityDt = NULL,$_personInfo = NULL,$_alias = NULL,$_consumerReferral = NULL,$_score = NULL,$_summary = NULL,$_liability = NULL,$_collection = NULL,$_publicRecord = NULL,$_inquiry = NULL,$_fraud = NULL,$_consumerStatement = NULL,$_directory = NULL,$_decision = NULL,$_message = NULL)
    {
        parent::__construct(array('RefNum'=>$_refNum,'FileDt'=>$_fileDt,'LastActivityDt'=>$_lastActivityDt,'PersonInfo'=>$_personInfo,'Alias'=>$_alias,'ConsumerReferral'=>$_consumerReferral,'Score'=>$_score,'Summary'=>$_summary,'Liability'=>$_liability,'Collection'=>$_collection,'PublicRecord'=>$_publicRecord,'Inquiry'=>$_inquiry,'Fraud'=>$_fraud,'ConsumerStatement'=>$_consumerStatement,'Directory'=>$_directory,'Decision'=>$_decision,'Message'=>$_message),false);
    }
    /**
     * Get RefNum value
     * @return string|null
     */
    public function getRefNum()
    {
        return $this->RefNum;
    }
    /**
     * Set RefNum value
     * @param string $_refNum the RefNum
     * @return string
     */
    public function setRefNum($_refNum)
    {
        return ($this->RefNum = $_refNum);
    }
    /**
     * Get FileDt value
     * @return string|null
     */
    public function getFileDt()
    {
        return $this->FileDt;
    }
    /**
     * Set FileDt value
     * @param string $_fileDt the FileDt
     * @return string
     */
    public function setFileDt($_fileDt)
    {
        return ($this->FileDt = $_fileDt);
    }
    /**
     * Get LastActivityDt value
     * @return string|null
     */
    public function getLastActivityDt()
    {
        return $this->LastActivityDt;
    }
    /**
     * Set LastActivityDt value
     * @param string $_lastActivityDt the LastActivityDt
     * @return string
     */
    public function setLastActivityDt($_lastActivityDt)
    {
        return ($this->LastActivityDt = $_lastActivityDt);
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
     * Get Alias value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param MicrobiltStructPersonInfo_Type $_alias the Alias
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setAlias($_alias)
    {
        return ($this->Alias = $_alias);
    }
    /**
     * Get ConsumerReferral value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getConsumerReferral()
    {
        return $this->ConsumerReferral;
    }
    /**
     * Set ConsumerReferral value
     * @param MicrobiltStructOrgInfo_Type $_consumerReferral the ConsumerReferral
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setConsumerReferral($_consumerReferral)
    {
        return ($this->ConsumerReferral = $_consumerReferral);
    }
    /**
     * Get Score value
     * @return MicrobiltStructScore_Type|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param MicrobiltStructScore_Type $_score the Score
     * @return MicrobiltStructScore_Type
     */
    public function setScore($_score)
    {
        return ($this->Score = $_score);
    }
    /**
     * Get Summary value
     * @return MicrobiltStructSummary_Type|null
     */
    public function getSummary()
    {
        return $this->Summary;
    }
    /**
     * Set Summary value
     * @param MicrobiltStructSummary_Type $_summary the Summary
     * @return MicrobiltStructSummary_Type
     */
    public function setSummary($_summary)
    {
        return ($this->Summary = $_summary);
    }
    /**
     * Get Liability value
     * @return MicrobiltStructLiability_Type|null
     */
    public function getLiability()
    {
        return $this->Liability;
    }
    /**
     * Set Liability value
     * @param MicrobiltStructLiability_Type $_liability the Liability
     * @return MicrobiltStructLiability_Type
     */
    public function setLiability($_liability)
    {
        return ($this->Liability = $_liability);
    }
    /**
     * Get Collection value
     * @return MicrobiltStructCollection_Type|null
     */
    public function getCollection()
    {
        return $this->Collection;
    }
    /**
     * Set Collection value
     * @param MicrobiltStructCollection_Type $_collection the Collection
     * @return MicrobiltStructCollection_Type
     */
    public function setCollection($_collection)
    {
        return ($this->Collection = $_collection);
    }
    /**
     * Get PublicRecord value
     * @return MicrobiltStructPublicRecord_Type|null
     */
    public function getPublicRecord()
    {
        return $this->PublicRecord;
    }
    /**
     * Set PublicRecord value
     * @param MicrobiltStructPublicRecord_Type $_publicRecord the PublicRecord
     * @return MicrobiltStructPublicRecord_Type
     */
    public function setPublicRecord($_publicRecord)
    {
        return ($this->PublicRecord = $_publicRecord);
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
     * Get Fraud value
     * @return MicrobiltStructFraud_Type|null
     */
    public function getFraud()
    {
        return $this->Fraud;
    }
    /**
     * Set Fraud value
     * @param MicrobiltStructFraud_Type $_fraud the Fraud
     * @return MicrobiltStructFraud_Type
     */
    public function setFraud($_fraud)
    {
        return ($this->Fraud = $_fraud);
    }
    /**
     * Get ConsumerStatement value
     * @return MicrobiltStructConsumerStatement_Type|null
     */
    public function getConsumerStatement()
    {
        return $this->ConsumerStatement;
    }
    /**
     * Set ConsumerStatement value
     * @param MicrobiltStructConsumerStatement_Type $_consumerStatement the ConsumerStatement
     * @return MicrobiltStructConsumerStatement_Type
     */
    public function setConsumerStatement($_consumerStatement)
    {
        return ($this->ConsumerStatement = $_consumerStatement);
    }
    /**
     * Get Directory value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getDirectory()
    {
        return $this->Directory;
    }
    /**
     * Set Directory value
     * @param MicrobiltStructOrgInfo_Type $_directory the Directory
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setDirectory($_directory)
    {
        return ($this->Directory = $_directory);
    }
    /**
     * Get Decision value
     * @return MicrobiltStructDecision_Type|null
     */
    public function getDecision()
    {
        return $this->Decision;
    }
    /**
     * Set Decision value
     * @param MicrobiltStructDecision_Type $_decision the Decision
     * @return MicrobiltStructDecision_Type
     */
    public function setDecision($_decision)
    {
        return ($this->Decision = $_decision);
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
     * @return MicrobiltStructSubject
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
