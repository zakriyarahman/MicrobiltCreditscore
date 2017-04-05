<?php
/**
 * File for class MicrobiltStructCharge_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCharge_Type originally named Charge_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCharge_Type extends MicrobiltStructAggregate
{
    /**
     * The ChargeId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ChargeId;
    /**
     * The ChargeDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ChargeDesc;
    /**
     * The ChargeType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ChargeType;
    /**
     * The ChargeClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ChargeClass;
    /**
     * The ChargeDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ChargeDt;
    /**
     * The ArrestDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ArrestDt;
    /**
     * The OffenseDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OffenseDt;
    /**
     * The Plea
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Plea;
    /**
     * The Sentence
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Sentence;
    /**
     * The SentenceDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SentenceDt;
    /**
     * The DispositionDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DispositionDt;
    /**
     * The DispositionType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DispositionType;
    /**
     * The ProbationStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProbationStatus;
    /**
     * The DefendantName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DefendantName;
    /**
     * The Plaintiff
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $Plaintiff;
    /**
     * The OriginationState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OriginationState;
    /**
     * The OriginationCounty
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OriginationCounty;
    /**
     * The OffenderStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OffenderStatus;
    /**
     * The OffenderCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OffenderCategory;
    /**
     * The Judgment
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Judgment;
    /**
     * The RiskLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $RiskLevel;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The AdjudicationWithheld
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AdjudicationWithheld;
    /**
     * The CaseId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CaseId;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Count;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $County;
    /**
     * The OffenseDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OffenseDesc;
    /**
     * The MaxTerm
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MaxTerm;
    /**
     * The MinTerm
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MinTerm;
    /**
     * The NumOfCounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOfCounts;
    /**
     * The AppealDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AppealDt;
    /**
     * The Statute
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Statute;
    /**
     * The ArrestType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ArrestType;
    /**
     * The FinalDesposition
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FinalDesposition;
    /**
     * The ChargeDesc2
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ChargeDesc2;
    /**
     * The OriginationName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OriginationName;
    /**
     * The CaseType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CaseType;
    /**
     * Constructor method for Charge_Type
     * @see parent::__construct()
     * @param string $_chargeId
     * @param string $_chargeDesc
     * @param string $_chargeType
     * @param string $_chargeClass
     * @param string $_chargeDt
     * @param string $_arrestDt
     * @param string $_offenseDt
     * @param string $_plea
     * @param string $_sentence
     * @param string $_sentenceDt
     * @param string $_dispositionDt
     * @param string $_dispositionType
     * @param string $_probationStatus
     * @param string $_defendantName
     * @param string $_plaintiff
     * @param string $_originationState
     * @param string $_originationCounty
     * @param string $_offenderStatus
     * @param string $_offenderCategory
     * @param string $_judgment
     * @param MicrobiltStructCodeDescription_Type $_riskLevel
     * @param MicrobiltStructMessage_Type $_message
     * @param string $_adjudicationWithheld
     * @param string $_caseId
     * @param string $_count
     * @param string $_county
     * @param string $_offenseDesc
     * @param string $_maxTerm
     * @param string $_minTerm
     * @param int $_numOfCounts
     * @param string $_appealDt
     * @param string $_statute
     * @param string $_arrestType
     * @param string $_finalDesposition
     * @param string $_chargeDesc2
     * @param string $_originationName
     * @param string $_caseType
     * @return MicrobiltStructCharge_Type
     */
    public function __construct($_chargeId = NULL,$_chargeDesc = NULL,$_chargeType = NULL,$_chargeClass = NULL,$_chargeDt = NULL,$_arrestDt = NULL,$_offenseDt = NULL,$_plea = NULL,$_sentence = NULL,$_sentenceDt = NULL,$_dispositionDt = NULL,$_dispositionType = NULL,$_probationStatus = NULL,$_defendantName = NULL,$_plaintiff = NULL,$_originationState = NULL,$_originationCounty = NULL,$_offenderStatus = NULL,$_offenderCategory = NULL,$_judgment = NULL,$_riskLevel = NULL,$_message = NULL,$_adjudicationWithheld = NULL,$_caseId = NULL,$_count = NULL,$_county = NULL,$_offenseDesc = NULL,$_maxTerm = NULL,$_minTerm = NULL,$_numOfCounts = NULL,$_appealDt = NULL,$_statute = NULL,$_arrestType = NULL,$_finalDesposition = NULL,$_chargeDesc2 = NULL,$_originationName = NULL,$_caseType = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ChargeId'=>$_chargeId,'ChargeDesc'=>$_chargeDesc,'ChargeType'=>$_chargeType,'ChargeClass'=>$_chargeClass,'ChargeDt'=>$_chargeDt,'ArrestDt'=>$_arrestDt,'OffenseDt'=>$_offenseDt,'Plea'=>$_plea,'Sentence'=>$_sentence,'SentenceDt'=>$_sentenceDt,'DispositionDt'=>$_dispositionDt,'DispositionType'=>$_dispositionType,'ProbationStatus'=>$_probationStatus,'DefendantName'=>$_defendantName,'Plaintiff'=>$_plaintiff,'OriginationState'=>$_originationState,'OriginationCounty'=>$_originationCounty,'OffenderStatus'=>$_offenderStatus,'OffenderCategory'=>$_offenderCategory,'Judgment'=>$_judgment,'RiskLevel'=>$_riskLevel,'Message'=>$_message,'AdjudicationWithheld'=>$_adjudicationWithheld,'CaseId'=>$_caseId,'Count'=>$_count,'County'=>$_county,'OffenseDesc'=>$_offenseDesc,'MaxTerm'=>$_maxTerm,'MinTerm'=>$_minTerm,'NumOfCounts'=>$_numOfCounts,'AppealDt'=>$_appealDt,'Statute'=>$_statute,'ArrestType'=>$_arrestType,'FinalDesposition'=>$_finalDesposition,'ChargeDesc2'=>$_chargeDesc2,'OriginationName'=>$_originationName,'CaseType'=>$_caseType),false);
    }
    /**
     * Get ChargeId value
     * @return string|null
     */
    public function getChargeId()
    {
        return $this->ChargeId;
    }
    /**
     * Set ChargeId value
     * @param string $_chargeId the ChargeId
     * @return string
     */
    public function setChargeId($_chargeId)
    {
        return ($this->ChargeId = $_chargeId);
    }
    /**
     * Get ChargeDesc value
     * @return string|null
     */
    public function getChargeDesc()
    {
        return $this->ChargeDesc;
    }
    /**
     * Set ChargeDesc value
     * @param string $_chargeDesc the ChargeDesc
     * @return string
     */
    public function setChargeDesc($_chargeDesc)
    {
        return ($this->ChargeDesc = $_chargeDesc);
    }
    /**
     * Get ChargeType value
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @param string $_chargeType the ChargeType
     * @return string
     */
    public function setChargeType($_chargeType)
    {
        return ($this->ChargeType = $_chargeType);
    }
    /**
     * Get ChargeClass value
     * @return string|null
     */
    public function getChargeClass()
    {
        return $this->ChargeClass;
    }
    /**
     * Set ChargeClass value
     * @param string $_chargeClass the ChargeClass
     * @return string
     */
    public function setChargeClass($_chargeClass)
    {
        return ($this->ChargeClass = $_chargeClass);
    }
    /**
     * Get ChargeDt value
     * @return string|null
     */
    public function getChargeDt()
    {
        return $this->ChargeDt;
    }
    /**
     * Set ChargeDt value
     * @param string $_chargeDt the ChargeDt
     * @return string
     */
    public function setChargeDt($_chargeDt)
    {
        return ($this->ChargeDt = $_chargeDt);
    }
    /**
     * Get ArrestDt value
     * @return string|null
     */
    public function getArrestDt()
    {
        return $this->ArrestDt;
    }
    /**
     * Set ArrestDt value
     * @param string $_arrestDt the ArrestDt
     * @return string
     */
    public function setArrestDt($_arrestDt)
    {
        return ($this->ArrestDt = $_arrestDt);
    }
    /**
     * Get OffenseDt value
     * @return string|null
     */
    public function getOffenseDt()
    {
        return $this->OffenseDt;
    }
    /**
     * Set OffenseDt value
     * @param string $_offenseDt the OffenseDt
     * @return string
     */
    public function setOffenseDt($_offenseDt)
    {
        return ($this->OffenseDt = $_offenseDt);
    }
    /**
     * Get Plea value
     * @return string|null
     */
    public function getPlea()
    {
        return $this->Plea;
    }
    /**
     * Set Plea value
     * @param string $_plea the Plea
     * @return string
     */
    public function setPlea($_plea)
    {
        return ($this->Plea = $_plea);
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
     * Get SentenceDt value
     * @return string|null
     */
    public function getSentenceDt()
    {
        return $this->SentenceDt;
    }
    /**
     * Set SentenceDt value
     * @param string $_sentenceDt the SentenceDt
     * @return string
     */
    public function setSentenceDt($_sentenceDt)
    {
        return ($this->SentenceDt = $_sentenceDt);
    }
    /**
     * Get DispositionDt value
     * @return string|null
     */
    public function getDispositionDt()
    {
        return $this->DispositionDt;
    }
    /**
     * Set DispositionDt value
     * @param string $_dispositionDt the DispositionDt
     * @return string
     */
    public function setDispositionDt($_dispositionDt)
    {
        return ($this->DispositionDt = $_dispositionDt);
    }
    /**
     * Get DispositionType value
     * @return string|null
     */
    public function getDispositionType()
    {
        return $this->DispositionType;
    }
    /**
     * Set DispositionType value
     * @param string $_dispositionType the DispositionType
     * @return string
     */
    public function setDispositionType($_dispositionType)
    {
        return ($this->DispositionType = $_dispositionType);
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
     * Get DefendantName value
     * @return string|null
     */
    public function getDefendantName()
    {
        return $this->DefendantName;
    }
    /**
     * Set DefendantName value
     * @param string $_defendantName the DefendantName
     * @return string
     */
    public function setDefendantName($_defendantName)
    {
        return ($this->DefendantName = $_defendantName);
    }
    /**
     * Get Plaintiff value
     * @return string|null
     */
    public function getPlaintiff()
    {
        return $this->Plaintiff;
    }
    /**
     * Set Plaintiff value
     * @param string $_plaintiff the Plaintiff
     * @return string
     */
    public function setPlaintiff($_plaintiff)
    {
        return ($this->Plaintiff = $_plaintiff);
    }
    /**
     * Get OriginationState value
     * @return string|null
     */
    public function getOriginationState()
    {
        return $this->OriginationState;
    }
    /**
     * Set OriginationState value
     * @param string $_originationState the OriginationState
     * @return string
     */
    public function setOriginationState($_originationState)
    {
        return ($this->OriginationState = $_originationState);
    }
    /**
     * Get OriginationCounty value
     * @return string|null
     */
    public function getOriginationCounty()
    {
        return $this->OriginationCounty;
    }
    /**
     * Set OriginationCounty value
     * @param string $_originationCounty the OriginationCounty
     * @return string
     */
    public function setOriginationCounty($_originationCounty)
    {
        return ($this->OriginationCounty = $_originationCounty);
    }
    /**
     * Get OffenderStatus value
     * @return string|null
     */
    public function getOffenderStatus()
    {
        return $this->OffenderStatus;
    }
    /**
     * Set OffenderStatus value
     * @param string $_offenderStatus the OffenderStatus
     * @return string
     */
    public function setOffenderStatus($_offenderStatus)
    {
        return ($this->OffenderStatus = $_offenderStatus);
    }
    /**
     * Get OffenderCategory value
     * @return string|null
     */
    public function getOffenderCategory()
    {
        return $this->OffenderCategory;
    }
    /**
     * Set OffenderCategory value
     * @param string $_offenderCategory the OffenderCategory
     * @return string
     */
    public function setOffenderCategory($_offenderCategory)
    {
        return ($this->OffenderCategory = $_offenderCategory);
    }
    /**
     * Get Judgment value
     * @return string|null
     */
    public function getJudgment()
    {
        return $this->Judgment;
    }
    /**
     * Set Judgment value
     * @param string $_judgment the Judgment
     * @return string
     */
    public function setJudgment($_judgment)
    {
        return ($this->Judgment = $_judgment);
    }
    /**
     * Get RiskLevel value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getRiskLevel()
    {
        return $this->RiskLevel;
    }
    /**
     * Set RiskLevel value
     * @param MicrobiltStructCodeDescription_Type $_riskLevel the RiskLevel
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setRiskLevel($_riskLevel)
    {
        return ($this->RiskLevel = $_riskLevel);
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
     * Get AdjudicationWithheld value
     * @return string|null
     */
    public function getAdjudicationWithheld()
    {
        return $this->AdjudicationWithheld;
    }
    /**
     * Set AdjudicationWithheld value
     * @param string $_adjudicationWithheld the AdjudicationWithheld
     * @return string
     */
    public function setAdjudicationWithheld($_adjudicationWithheld)
    {
        return ($this->AdjudicationWithheld = $_adjudicationWithheld);
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
     * Get Count value
     * @return string|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param string $_count the Count
     * @return string
     */
    public function setCount($_count)
    {
        return ($this->Count = $_count);
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
     * Get OffenseDesc value
     * @return string|null
     */
    public function getOffenseDesc()
    {
        return $this->OffenseDesc;
    }
    /**
     * Set OffenseDesc value
     * @param string $_offenseDesc the OffenseDesc
     * @return string
     */
    public function setOffenseDesc($_offenseDesc)
    {
        return ($this->OffenseDesc = $_offenseDesc);
    }
    /**
     * Get MaxTerm value
     * @return string|null
     */
    public function getMaxTerm()
    {
        return $this->MaxTerm;
    }
    /**
     * Set MaxTerm value
     * @param string $_maxTerm the MaxTerm
     * @return string
     */
    public function setMaxTerm($_maxTerm)
    {
        return ($this->MaxTerm = $_maxTerm);
    }
    /**
     * Get MinTerm value
     * @return string|null
     */
    public function getMinTerm()
    {
        return $this->MinTerm;
    }
    /**
     * Set MinTerm value
     * @param string $_minTerm the MinTerm
     * @return string
     */
    public function setMinTerm($_minTerm)
    {
        return ($this->MinTerm = $_minTerm);
    }
    /**
     * Get NumOfCounts value
     * @return int|null
     */
    public function getNumOfCounts()
    {
        return $this->NumOfCounts;
    }
    /**
     * Set NumOfCounts value
     * @param int $_numOfCounts the NumOfCounts
     * @return int
     */
    public function setNumOfCounts($_numOfCounts)
    {
        return ($this->NumOfCounts = $_numOfCounts);
    }
    /**
     * Get AppealDt value
     * @return string|null
     */
    public function getAppealDt()
    {
        return $this->AppealDt;
    }
    /**
     * Set AppealDt value
     * @param string $_appealDt the AppealDt
     * @return string
     */
    public function setAppealDt($_appealDt)
    {
        return ($this->AppealDt = $_appealDt);
    }
    /**
     * Get Statute value
     * @return string|null
     */
    public function getStatute()
    {
        return $this->Statute;
    }
    /**
     * Set Statute value
     * @param string $_statute the Statute
     * @return string
     */
    public function setStatute($_statute)
    {
        return ($this->Statute = $_statute);
    }
    /**
     * Get ArrestType value
     * @return string|null
     */
    public function getArrestType()
    {
        return $this->ArrestType;
    }
    /**
     * Set ArrestType value
     * @param string $_arrestType the ArrestType
     * @return string
     */
    public function setArrestType($_arrestType)
    {
        return ($this->ArrestType = $_arrestType);
    }
    /**
     * Get FinalDesposition value
     * @return string|null
     */
    public function getFinalDesposition()
    {
        return $this->FinalDesposition;
    }
    /**
     * Set FinalDesposition value
     * @param string $_finalDesposition the FinalDesposition
     * @return string
     */
    public function setFinalDesposition($_finalDesposition)
    {
        return ($this->FinalDesposition = $_finalDesposition);
    }
    /**
     * Get ChargeDesc2 value
     * @return string|null
     */
    public function getChargeDesc2()
    {
        return $this->ChargeDesc2;
    }
    /**
     * Set ChargeDesc2 value
     * @param string $_chargeDesc2 the ChargeDesc2
     * @return string
     */
    public function setChargeDesc2($_chargeDesc2)
    {
        return ($this->ChargeDesc2 = $_chargeDesc2);
    }
    /**
     * Get OriginationName value
     * @return string|null
     */
    public function getOriginationName()
    {
        return $this->OriginationName;
    }
    /**
     * Set OriginationName value
     * @param string $_originationName the OriginationName
     * @return string
     */
    public function setOriginationName($_originationName)
    {
        return ($this->OriginationName = $_originationName);
    }
    /**
     * Get CaseType value
     * @return string|null
     */
    public function getCaseType()
    {
        return $this->CaseType;
    }
    /**
     * Set CaseType value
     * @param string $_caseType the CaseType
     * @return string
     */
    public function setCaseType($_caseType)
    {
        return ($this->CaseType = $_caseType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCharge_Type
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
