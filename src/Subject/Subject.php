<?php

namespace Zakriyarahman\Microbilt\Subject;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class Subject
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for Subject originally named Subject
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd1}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class Subject extends MicrobiltWsdlClass
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
     * @var OrgInfo_Type
     */
    public $ConsumerReferral;
    /**
     * The Score
     * @var Score_Type
     */
    public $Score;
    /**
     * The Summary
     * @var Summary_Type
     */
    public $Summary;
    /**
     * The Liability
     * @var Liability_Type
     */
    public $Liability;
    /**
     * The Collection
     * @var Collection_Type
     */
    public $Collection;
    /**
     * The PublicRecord
     * @var PublicRecord_Type
     */
    public $PublicRecord;
    /**
     * The Inquiry
     * @var Inquiry_Type
     */
    public $Inquiry;
    /**
     * The Fraud
     * @var Fraud_Type
     */
    public $Fraud;
    /**
     * The ConsumerStatement
     * @var ConsumerStatement_Type
     */
    public $ConsumerStatement;
    /**
     * The Directory
     * @var OrgInfo_Type
     */
    public $Directory;
    /**
     * The Decision
     * @var Decision_Type
     */
    public $Decision;
    /**
     * The Message
     * @var Message_Type
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
     * @param OrgInfo_Type $_consumerReferral
     * @param Score_Type $_score
     * @param Summary_Type $_summary
     * @param Liability_Type $_liability
     * @param Collection_Type $_collection
     * @param PublicRecord_Type $_publicRecord
     * @param Inquiry_Type $_inquiry
     * @param Fraud_Type $_fraud
     * @param ConsumerStatement_Type $_consumerStatement
     * @param OrgInfo_Type $_directory
     * @param Decision_Type $_decision
     * @param Message_Type $_message
     * @return Subject
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
     * @return OrgInfo_Type|null
     */
    public function getConsumerReferral()
    {
        return $this->ConsumerReferral;
    }
    /**
     * Set ConsumerReferral value
     * @param OrgInfo_Type $_consumerReferral the ConsumerReferral
     * @return OrgInfo_Type
     */
    public function setConsumerReferral($_consumerReferral)
    {
        return ($this->ConsumerReferral = $_consumerReferral);
    }
    /**
     * Get Score value
     * @return Score_Type|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param Score_Type $_score the Score
     * @return Score_Type
     */
    public function setScore($_score)
    {
        return ($this->Score = $_score);
    }
    /**
     * Get Summary value
     * @return Summary_Type|null
     */
    public function getSummary()
    {
        return $this->Summary;
    }
    /**
     * Set Summary value
     * @param Summary_Type $_summary the Summary
     * @return Summary_Type
     */
    public function setSummary($_summary)
    {
        return ($this->Summary = $_summary);
    }
    /**
     * Get Liability value
     * @return Liability_Type|null
     */
    public function getLiability()
    {
        return $this->Liability;
    }
    /**
     * Set Liability value
     * @param Liability_Type $_liability the Liability
     * @return Liability_Type
     */
    public function setLiability($_liability)
    {
        return ($this->Liability = $_liability);
    }
    /**
     * Get Collection value
     * @return Collection_Type|null
     */
    public function getCollection()
    {
        return $this->Collection;
    }
    /**
     * Set Collection value
     * @param Collection_Type $_collection the Collection
     * @return Collection_Type
     */
    public function setCollection($_collection)
    {
        return ($this->Collection = $_collection);
    }
    /**
     * Get PublicRecord value
     * @return PublicRecord_Type|null
     */
    public function getPublicRecord()
    {
        return $this->PublicRecord;
    }
    /**
     * Set PublicRecord value
     * @param PublicRecord_Type $_publicRecord the PublicRecord
     * @return PublicRecord_Type
     */
    public function setPublicRecord($_publicRecord)
    {
        return ($this->PublicRecord = $_publicRecord);
    }
    /**
     * Get Inquiry value
     * @return Inquiry_Type|null
     */
    public function getInquiry()
    {
        return $this->Inquiry;
    }
    /**
     * Set Inquiry value
     * @param Inquiry_Type $_inquiry the Inquiry
     * @return Inquiry_Type
     */
    public function setInquiry($_inquiry)
    {
        return ($this->Inquiry = $_inquiry);
    }
    /**
     * Get Fraud value
     * @return Fraud_Type|null
     */
    public function getFraud()
    {
        return $this->Fraud;
    }
    /**
     * Set Fraud value
     * @param Fraud_Type $_fraud the Fraud
     * @return Fraud_Type
     */
    public function setFraud($_fraud)
    {
        return ($this->Fraud = $_fraud);
    }
    /**
     * Get ConsumerStatement value
     * @return ConsumerStatement_Type|null
     */
    public function getConsumerStatement()
    {
        return $this->ConsumerStatement;
    }
    /**
     * Set ConsumerStatement value
     * @param ConsumerStatement_Type $_consumerStatement the ConsumerStatement
     * @return ConsumerStatement_Type
     */
    public function setConsumerStatement($_consumerStatement)
    {
        return ($this->ConsumerStatement = $_consumerStatement);
    }
    /**
     * Get Directory value
     * @return OrgInfo_Type|null
     */
    public function getDirectory()
    {
        return $this->Directory;
    }
    /**
     * Set Directory value
     * @param OrgInfo_Type $_directory the Directory
     * @return OrgInfo_Type
     */
    public function setDirectory($_directory)
    {
        return ($this->Directory = $_directory);
    }
    /**
     * Get Decision value
     * @return Decision_Type|null
     */
    public function getDecision()
    {
        return $this->Decision;
    }
    /**
     * Set Decision value
     * @param Decision_Type $_decision the Decision
     * @return Decision_Type
     */
    public function setDecision($_decision)
    {
        return ($this->Decision = $_decision);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return Subject
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
