<?php
/**
 * File for class MicrobiltStructPrisonSentenceInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPrisonSentenceInfo_Type originally named PrisonSentenceInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPrisonSentenceInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The AdmittedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AdmittedDt;
    /**
     * The SentenceStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SentenceStatus;
    /**
     * The CustodyType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CustodyType;
    /**
     * The CustodyTypeChangeDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CustodyTypeChangeDt;
    /**
     * The GainTimeGranted
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GainTimeGranted;
    /**
     * The LastGainTimeDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastGainTimeDt;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPostAddr_Type
     */
    public $Location;
    /**
     * The ScheduledReleaseDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ScheduledReleaseDt;
    /**
     * The Sentence
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Sentence;
    /**
     * Constructor method for PrisonSentenceInfo_Type
     * @see parent::__construct()
     * @param string $_admittedDt
     * @param string $_sentenceStatus
     * @param string $_custodyType
     * @param string $_custodyTypeChangeDt
     * @param string $_gainTimeGranted
     * @param string $_lastGainTimeDt
     * @param MicrobiltStructPostAddr_Type $_location
     * @param string $_scheduledReleaseDt
     * @param string $_sentence
     * @return MicrobiltStructPrisonSentenceInfo_Type
     */
    public function __construct($_admittedDt = NULL,$_sentenceStatus = NULL,$_custodyType = NULL,$_custodyTypeChangeDt = NULL,$_gainTimeGranted = NULL,$_lastGainTimeDt = NULL,$_location = NULL,$_scheduledReleaseDt = NULL,$_sentence = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AdmittedDt'=>$_admittedDt,'SentenceStatus'=>$_sentenceStatus,'CustodyType'=>$_custodyType,'CustodyTypeChangeDt'=>$_custodyTypeChangeDt,'GainTimeGranted'=>$_gainTimeGranted,'LastGainTimeDt'=>$_lastGainTimeDt,'Location'=>$_location,'ScheduledReleaseDt'=>$_scheduledReleaseDt,'Sentence'=>$_sentence),false);
    }
    /**
     * Get AdmittedDt value
     * @return string|null
     */
    public function getAdmittedDt()
    {
        return $this->AdmittedDt;
    }
    /**
     * Set AdmittedDt value
     * @param string $_admittedDt the AdmittedDt
     * @return string
     */
    public function setAdmittedDt($_admittedDt)
    {
        return ($this->AdmittedDt = $_admittedDt);
    }
    /**
     * Get SentenceStatus value
     * @return string|null
     */
    public function getSentenceStatus()
    {
        return $this->SentenceStatus;
    }
    /**
     * Set SentenceStatus value
     * @param string $_sentenceStatus the SentenceStatus
     * @return string
     */
    public function setSentenceStatus($_sentenceStatus)
    {
        return ($this->SentenceStatus = $_sentenceStatus);
    }
    /**
     * Get CustodyType value
     * @return string|null
     */
    public function getCustodyType()
    {
        return $this->CustodyType;
    }
    /**
     * Set CustodyType value
     * @param string $_custodyType the CustodyType
     * @return string
     */
    public function setCustodyType($_custodyType)
    {
        return ($this->CustodyType = $_custodyType);
    }
    /**
     * Get CustodyTypeChangeDt value
     * @return string|null
     */
    public function getCustodyTypeChangeDt()
    {
        return $this->CustodyTypeChangeDt;
    }
    /**
     * Set CustodyTypeChangeDt value
     * @param string $_custodyTypeChangeDt the CustodyTypeChangeDt
     * @return string
     */
    public function setCustodyTypeChangeDt($_custodyTypeChangeDt)
    {
        return ($this->CustodyTypeChangeDt = $_custodyTypeChangeDt);
    }
    /**
     * Get GainTimeGranted value
     * @return string|null
     */
    public function getGainTimeGranted()
    {
        return $this->GainTimeGranted;
    }
    /**
     * Set GainTimeGranted value
     * @param string $_gainTimeGranted the GainTimeGranted
     * @return string
     */
    public function setGainTimeGranted($_gainTimeGranted)
    {
        return ($this->GainTimeGranted = $_gainTimeGranted);
    }
    /**
     * Get LastGainTimeDt value
     * @return string|null
     */
    public function getLastGainTimeDt()
    {
        return $this->LastGainTimeDt;
    }
    /**
     * Set LastGainTimeDt value
     * @param string $_lastGainTimeDt the LastGainTimeDt
     * @return string
     */
    public function setLastGainTimeDt($_lastGainTimeDt)
    {
        return ($this->LastGainTimeDt = $_lastGainTimeDt);
    }
    /**
     * Get Location value
     * @return MicrobiltStructPostAddr_Type|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param MicrobiltStructPostAddr_Type $_location the Location
     * @return MicrobiltStructPostAddr_Type
     */
    public function setLocation($_location)
    {
        return ($this->Location = $_location);
    }
    /**
     * Get ScheduledReleaseDt value
     * @return string|null
     */
    public function getScheduledReleaseDt()
    {
        return $this->ScheduledReleaseDt;
    }
    /**
     * Set ScheduledReleaseDt value
     * @param string $_scheduledReleaseDt the ScheduledReleaseDt
     * @return string
     */
    public function setScheduledReleaseDt($_scheduledReleaseDt)
    {
        return ($this->ScheduledReleaseDt = $_scheduledReleaseDt);
    }
    /**
     * Get Sentence value
     * @return string|null
     */
    public function getSentence()
    {
        return $this->Sentence;
    }
    /**
     * Set Sentence value
     * @param string $_sentence the Sentence
     * @return string
     */
    public function setSentence($_sentence)
    {
        return ($this->Sentence = $_sentence);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructPrisonSentenceInfo_Type
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
