<?php

namespace Zakriyarahman\Microbilt\Criminal\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructCriminalCase_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCriminalCase_Type originally named CriminalCase_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCriminalCase_Type extends MicrobiltStructAggregate
{
    /**
     * The CaseId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CaseId;
    /**
     * The ArrestingAgency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $ArrestingAgency;
    /**
     * The CourtName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtName;
    /**
     * The CourtNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtNum;
    /**
     * The CourtJurisdiction
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtJurisdiction;
    /**
     * The FileDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FileDt;
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
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructCharge_Type
     */
    public $Charge;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The PrisonSentenceInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPrisonSentenceInfo_Type
     */
    public $PrisonSentenceInfo;
    /**
     * The ParoleSentenceInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructParoleSentenceInfo_Type
     */
    public $ParoleSentenceInfo;
    /**
     * The AACaseId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AACaseId;
    /**
     * The Probation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructRelease_Type
     */
    public $Probation;
    /**
     * The FineAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $FineAmt;
    /**
     * The CourtCostsAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $CourtCostsAmt;
    /**
     * Constructor method for CriminalCase_Type
     * @see parent::__construct()
     * @param string $_caseId
     * @param MicrobiltStructOrgInfo_Type $_arrestingAgency
     * @param string $_courtName
     * @param string $_courtNum
     * @param string $_courtJurisdiction
     * @param string $_fileDt
     * @param string $_startDt
     * @param string $_endDt
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructCharge_Type $_charge
     * @param MicrobiltStructMessage_Type $_message
     * @param MicrobiltStructPrisonSentenceInfo_Type $_prisonSentenceInfo
     * @param MicrobiltStructParoleSentenceInfo_Type $_paroleSentenceInfo
     * @param string $_aACaseId
     * @param MicrobiltStructRelease_Type $_probation
     * @param MicrobiltStructCurrencyAmount $_fineAmt
     * @param MicrobiltStructCurrencyAmount $_courtCostsAmt
     * @return MicrobiltStructCriminalCase_Type
     */
    public function __construct($_caseId = NULL,$_arrestingAgency = NULL,$_courtName = NULL,$_courtNum = NULL,$_courtJurisdiction = NULL,$_fileDt = NULL,$_startDt = NULL,$_endDt = NULL,$_personInfo = NULL,$_charge = NULL,$_message = NULL,$_prisonSentenceInfo = NULL,$_paroleSentenceInfo = NULL,$_aACaseId = NULL,$_probation = NULL,$_fineAmt = NULL,$_courtCostsAmt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CaseId'=>$_caseId,'ArrestingAgency'=>$_arrestingAgency,'CourtName'=>$_courtName,'CourtNum'=>$_courtNum,'CourtJurisdiction'=>$_courtJurisdiction,'FileDt'=>$_fileDt,'StartDt'=>$_startDt,'EndDt'=>$_endDt,'PersonInfo'=>$_personInfo,'Charge'=>$_charge,'Message'=>$_message,'PrisonSentenceInfo'=>$_prisonSentenceInfo,'ParoleSentenceInfo'=>$_paroleSentenceInfo,'AACaseId'=>$_aACaseId,'Probation'=>$_probation,'FineAmt'=>$_fineAmt,'CourtCostsAmt'=>$_courtCostsAmt),false);
    }
    /**
     * Get CaseId value
     * @return string|null
     */
    public function getCaseId()
    {
        return $this->CaseId;
    }
    /**
     * Set CaseId value
     * @param string $_caseId the CaseId
     * @return string
     */
    public function setCaseId($_caseId)
    {
        return ($this->CaseId = $_caseId);
    }
    /**
     * Get ArrestingAgency value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getArrestingAgency()
    {
        return $this->ArrestingAgency;
    }
    /**
     * Set ArrestingAgency value
     * @param MicrobiltStructOrgInfo_Type $_arrestingAgency the ArrestingAgency
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setArrestingAgency($_arrestingAgency)
    {
        return ($this->ArrestingAgency = $_arrestingAgency);
    }
    /**
     * Get CourtName value
     * @return string|null
     */
    public function getCourtName()
    {
        return $this->CourtName;
    }
    /**
     * Set CourtName value
     * @param string $_courtName the CourtName
     * @return string
     */
    public function setCourtName($_courtName)
    {
        return ($this->CourtName = $_courtName);
    }
    /**
     * Get CourtNum value
     * @return string|null
     */
    public function getCourtNum()
    {
        return $this->CourtNum;
    }
    /**
     * Set CourtNum value
     * @param string $_courtNum the CourtNum
     * @return string
     */
    public function setCourtNum($_courtNum)
    {
        return ($this->CourtNum = $_courtNum);
    }
    /**
     * Get CourtJurisdiction value
     * @return string|null
     */
    public function getCourtJurisdiction()
    {
        return $this->CourtJurisdiction;
    }
    /**
     * Set CourtJurisdiction value
     * @param string $_courtJurisdiction the CourtJurisdiction
     * @return string
     */
    public function setCourtJurisdiction($_courtJurisdiction)
    {
        return ($this->CourtJurisdiction = $_courtJurisdiction);
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
     * Get Charge value
     * @return MicrobiltStructCharge_Type|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param MicrobiltStructCharge_Type $_charge the Charge
     * @return MicrobiltStructCharge_Type
     */
    public function setCharge($_charge)
    {
        return ($this->Charge = $_charge);
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
     * Get PrisonSentenceInfo value
     * @return MicrobiltStructPrisonSentenceInfo_Type|null
     */
    public function getPrisonSentenceInfo()
    {
        return $this->PrisonSentenceInfo;
    }
    /**
     * Set PrisonSentenceInfo value
     * @param MicrobiltStructPrisonSentenceInfo_Type $_prisonSentenceInfo the PrisonSentenceInfo
     * @return MicrobiltStructPrisonSentenceInfo_Type
     */
    public function setPrisonSentenceInfo($_prisonSentenceInfo)
    {
        return ($this->PrisonSentenceInfo = $_prisonSentenceInfo);
    }
    /**
     * Get ParoleSentenceInfo value
     * @return MicrobiltStructParoleSentenceInfo_Type|null
     */
    public function getParoleSentenceInfo()
    {
        return $this->ParoleSentenceInfo;
    }
    /**
     * Set ParoleSentenceInfo value
     * @param MicrobiltStructParoleSentenceInfo_Type $_paroleSentenceInfo the ParoleSentenceInfo
     * @return MicrobiltStructParoleSentenceInfo_Type
     */
    public function setParoleSentenceInfo($_paroleSentenceInfo)
    {
        return ($this->ParoleSentenceInfo = $_paroleSentenceInfo);
    }
    /**
     * Get AACaseId value
     * @return string|null
     */
    public function getAACaseId()
    {
        return $this->AACaseId;
    }
    /**
     * Set AACaseId value
     * @param string $_aACaseId the AACaseId
     * @return string
     */
    public function setAACaseId($_aACaseId)
    {
        return ($this->AACaseId = $_aACaseId);
    }
    /**
     * Get Probation value
     * @return MicrobiltStructRelease_Type|null
     */
    public function getProbation()
    {
        return $this->Probation;
    }
    /**
     * Set Probation value
     * @param MicrobiltStructRelease_Type $_probation the Probation
     * @return MicrobiltStructRelease_Type
     */
    public function setProbation($_probation)
    {
        return ($this->Probation = $_probation);
    }
    /**
     * Get FineAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getFineAmt()
    {
        return $this->FineAmt;
    }
    /**
     * Set FineAmt value
     * @param MicrobiltStructCurrencyAmount $_fineAmt the FineAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setFineAmt($_fineAmt)
    {
        return ($this->FineAmt = $_fineAmt);
    }
    /**
     * Get CourtCostsAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getCourtCostsAmt()
    {
        return $this->CourtCostsAmt;
    }
    /**
     * Set CourtCostsAmt value
     * @param MicrobiltStructCurrencyAmount $_courtCostsAmt the CourtCostsAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setCourtCostsAmt($_courtCostsAmt)
    {
        return ($this->CourtCostsAmt = $_courtCostsAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCriminalCase_Type
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
