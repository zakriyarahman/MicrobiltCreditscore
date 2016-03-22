<?php
/**
 * File for class MicrobiltStructRelease_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructRelease_Type originally named Release_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructRelease_Type extends MicrobiltStructAggregate
{
    /**
     * The StartDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $StartDt;
    /**
     * The Agency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $Agency;
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
     * The ActualEndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ActualEndDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Release_Type
     * @see parent::__construct()
     * @param date $_startDt
     * @param MicrobiltStructOrgInfo_Type $_agency
     * @param MicrobiltStructSentenceLength_Type $_sentenceLength
     * @param date $_scheduledEndDt
     * @param date $_actualEndDt
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructRelease_Type
     */
    public function __construct($_startDt = NULL,$_agency = NULL,$_sentenceLength = NULL,$_scheduledEndDt = NULL,$_actualEndDt = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('StartDt'=>$_startDt,'Agency'=>$_agency,'SentenceLength'=>$_sentenceLength,'ScheduledEndDt'=>$_scheduledEndDt,'ActualEndDt'=>$_actualEndDt,'Message'=>$_message),false);
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
     * Get Agency value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param MicrobiltStructOrgInfo_Type $_agency the Agency
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setAgency($_agency)
    {
        return ($this->Agency = $_agency);
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
     * @return MicrobiltStructRelease_Type
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
