<?php
/**
 * File for class MicrobiltStructParoleSentenceInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructParoleSentenceInfo_Type originally named ParoleSentenceInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructParoleSentenceInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The ActualEndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ActualEndDt;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $County;
    /**
     * The ProbationStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProbationStatus;
    /**
     * The SentenceLength
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructSentenceLength_Type
     */
    public $SentenceLength;
    /**
     * The ScheduledEndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ScheduledEndDt;
    /**
     * The StartDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $StartDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ParoleSentenceInfo_Type
     * @see parent::__construct()
     * @param date $_actualEndDt
     * @param string $_county
     * @param string $_probationStatus
     * @param MicrobiltStructSentenceLength_Type $_sentenceLength
     * @param date $_scheduledEndDt
     * @param date $_startDt
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructParoleSentenceInfo_Type
     */
    public function __construct($_actualEndDt = NULL,$_county = NULL,$_probationStatus = NULL,$_sentenceLength = NULL,$_scheduledEndDt = NULL,$_startDt = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ActualEndDt'=>$_actualEndDt,'County'=>$_county,'ProbationStatus'=>$_probationStatus,'SentenceLength'=>$_sentenceLength,'ScheduledEndDt'=>$_scheduledEndDt,'StartDt'=>$_startDt,'Message'=>$_message),false);
    }
    /**
     * Get ActualEndDt value
     * @return date|null
     */
    public function getActualEndDt()
    {
        return $this->ActualEndDt;
    }
    /**
     * Set ActualEndDt value
     * @param date $_actualEndDt the ActualEndDt
     * @return date
     */
    public function setActualEndDt($_actualEndDt)
    {
        return ($this->ActualEndDt = $_actualEndDt);
    }
    /**
     * Get County value
     * @return string|null
     */
    public function getCounty()
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param string $_county the County
     * @return string
     */
    public function setCounty($_county)
    {
        return ($this->County = $_county);
    }
    /**
     * Get ProbationStatus value
     * @return string|null
     */
    public function getProbationStatus()
    {
        return $this->ProbationStatus;
    }
    /**
     * Set ProbationStatus value
     * @param string $_probationStatus the ProbationStatus
     * @return string
     */
    public function setProbationStatus($_probationStatus)
    {
        return ($this->ProbationStatus = $_probationStatus);
    }
    /**
     * Get SentenceLength value
     * @return MicrobiltStructSentenceLength_Type|null
     */
    public function getSentenceLength()
    {
        return $this->SentenceLength;
    }
    /**
     * Set SentenceLength value
     * @param MicrobiltStructSentenceLength_Type $_sentenceLength the SentenceLength
     * @return MicrobiltStructSentenceLength_Type
     */
    public function setSentenceLength($_sentenceLength)
    {
        return ($this->SentenceLength = $_sentenceLength);
    }
    /**
     * Get ScheduledEndDt value
     * @return date|null
     */
    public function getScheduledEndDt()
    {
        return $this->ScheduledEndDt;
    }
    /**
     * Set ScheduledEndDt value
     * @param date $_scheduledEndDt the ScheduledEndDt
     * @return date
     */
    public function setScheduledEndDt($_scheduledEndDt)
    {
        return ($this->ScheduledEndDt = $_scheduledEndDt);
    }
    /**
     * Get StartDt value
     * @return date|null
     */
    public function getStartDt()
    {
        return $this->StartDt;
    }
    /**
     * Set StartDt value
     * @param date $_startDt the StartDt
     * @return date
     */
    public function setStartDt($_startDt)
    {
        return ($this->StartDt = $_startDt);
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
     * @return MicrobiltStructParoleSentenceInfo_Type
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
