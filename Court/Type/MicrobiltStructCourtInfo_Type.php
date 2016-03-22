<?php
/**
 * File for class MicrobiltStructCourtInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCourtInfo_Type originally named CourtInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCourtInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The CourtType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtType;
    /**
     * The CourtCity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtCity;
    /**
     * The CourtState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtState;
    /**
     * The BookPage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BookPage;
    /**
     * The ExemptAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $ExemptAmt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The CourtJurisdiction
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtJurisdiction;
    /**
     * The CourtNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtNum;
    /**
     * The CourtName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtName;
    /**
     * The CourtCaseId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtCaseId;
    /**
     * The CourtCostsAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $CourtCostsAmt;
    /**
     * The DispositionDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
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
     * The Fine
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Fine;
    /**
     * The RiskLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $RiskLevel;
    /**
     * The Plea
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Plea;
    /**
     * The Statute
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Statute;
    /**
     * The SuspendedFine
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SuspendedFine;
    /**
     * The Jail
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Jail;
    /**
     * The Probation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructRelease_Type
     */
    public $Probation;
    /**
     * The Suspended
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Suspended;
    /**
     * Constructor method for CourtInfo_Type
     * @see parent::__construct()
     * @param string $_courtType
     * @param string $_courtCity
     * @param string $_courtState
     * @param string $_bookPage
     * @param MicrobiltStructCurrencyAmount $_exemptAmt
     * @param MicrobiltStructMessage_Type $_message
     * @param string $_courtJurisdiction
     * @param string $_courtNum
     * @param string $_courtName
     * @param string $_courtCaseId
     * @param MicrobiltStructCurrencyAmount $_courtCostsAmt
     * @param date $_dispositionDt
     * @param string $_dispositionType
     * @param string $_fine
     * @param MicrobiltStructCodeDescription_Type $_riskLevel
     * @param string $_plea
     * @param string $_statute
     * @param string $_suspendedFine
     * @param string $_jail
     * @param MicrobiltStructRelease_Type $_probation
     * @param string $_suspended
     * @return MicrobiltStructCourtInfo_Type
     */
    public function __construct($_courtType = NULL,$_courtCity = NULL,$_courtState = NULL,$_bookPage = NULL,$_exemptAmt = NULL,$_message = NULL,$_courtJurisdiction = NULL,$_courtNum = NULL,$_courtName = NULL,$_courtCaseId = NULL,$_courtCostsAmt = NULL,$_dispositionDt = NULL,$_dispositionType = NULL,$_fine = NULL,$_riskLevel = NULL,$_plea = NULL,$_statute = NULL,$_suspendedFine = NULL,$_jail = NULL,$_probation = NULL,$_suspended = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CourtType'=>$_courtType,'CourtCity'=>$_courtCity,'CourtState'=>$_courtState,'BookPage'=>$_bookPage,'ExemptAmt'=>$_exemptAmt,'Message'=>$_message,'CourtJurisdiction'=>$_courtJurisdiction,'CourtNum'=>$_courtNum,'CourtName'=>$_courtName,'CourtCaseId'=>$_courtCaseId,'CourtCostsAmt'=>$_courtCostsAmt,'DispositionDt'=>$_dispositionDt,'DispositionType'=>$_dispositionType,'Fine'=>$_fine,'RiskLevel'=>$_riskLevel,'Plea'=>$_plea,'Statute'=>$_statute,'SuspendedFine'=>$_suspendedFine,'Jail'=>$_jail,'Probation'=>$_probation,'Suspended'=>$_suspended),false);
    }
    /**
     * Get CourtType value
     * @return string|null
     */
    public function getCourtType()
    {
        return $this->CourtType;
    }
    /**
     * Set CourtType value
     * @param string $_courtType the CourtType
     * @return string
     */
    public function setCourtType($_courtType)
    {
        return ($this->CourtType = $_courtType);
    }
    /**
     * Get CourtCity value
     * @return string|null
     */
    public function getCourtCity()
    {
        return $this->CourtCity;
    }
    /**
     * Set CourtCity value
     * @param string $_courtCity the CourtCity
     * @return string
     */
    public function setCourtCity($_courtCity)
    {
        return ($this->CourtCity = $_courtCity);
    }
    /**
     * Get CourtState value
     * @return string|null
     */
    public function getCourtState()
    {
        return $this->CourtState;
    }
    /**
     * Set CourtState value
     * @param string $_courtState the CourtState
     * @return string
     */
    public function setCourtState($_courtState)
    {
        return ($this->CourtState = $_courtState);
    }
    /**
     * Get BookPage value
     * @return string|null
     */
    public function getBookPage()
    {
        return $this->BookPage;
    }
    /**
     * Set BookPage value
     * @param string $_bookPage the BookPage
     * @return string
     */
    public function setBookPage($_bookPage)
    {
        return ($this->BookPage = $_bookPage);
    }
    /**
     * Get ExemptAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getExemptAmt()
    {
        return $this->ExemptAmt;
    }
    /**
     * Set ExemptAmt value
     * @param MicrobiltStructCurrencyAmount $_exemptAmt the ExemptAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setExemptAmt($_exemptAmt)
    {
        return ($this->ExemptAmt = $_exemptAmt);
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
     * Get CourtCaseId value
     * @return string|null
     */
    public function getCourtCaseId()
    {
        return $this->CourtCaseId;
    }
    /**
     * Set CourtCaseId value
     * @param string $_courtCaseId the CourtCaseId
     * @return string
     */
    public function setCourtCaseId($_courtCaseId)
    {
        return ($this->CourtCaseId = $_courtCaseId);
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
     * Get DispositionDt value
     * @return date|null
     */
    public function getDispositionDt()
    {
        return $this->DispositionDt;
    }
    /**
     * Set DispositionDt value
     * @param date $_dispositionDt the DispositionDt
     * @return date
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
     * Get Fine value
     * @return string|null
     */
    public function getFine()
    {
        return $this->Fine;
    }
    /**
     * Set Fine value
     * @param string $_fine the Fine
     * @return string
     */
    public function setFine($_fine)
    {
        return ($this->Fine = $_fine);
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
     * Get SuspendedFine value
     * @return string|null
     */
    public function getSuspendedFine()
    {
        return $this->SuspendedFine;
    }
    /**
     * Set SuspendedFine value
     * @param string $_suspendedFine the SuspendedFine
     * @return string
     */
    public function setSuspendedFine($_suspendedFine)
    {
        return ($this->SuspendedFine = $_suspendedFine);
    }
    /**
     * Get Jail value
     * @return string|null
     */
    public function getJail()
    {
        return $this->Jail;
    }
    /**
     * Set Jail value
     * @param string $_jail the Jail
     * @return string
     */
    public function setJail($_jail)
    {
        return ($this->Jail = $_jail);
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
     * Get Suspended value
     * @return string|null
     */
    public function getSuspended()
    {
        return $this->Suspended;
    }
    /**
     * Set Suspended value
     * @param string $_suspended the Suspended
     * @return string
     */
    public function setSuspended($_suspended)
    {
        return ($this->Suspended = $_suspended);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCourtInfo_Type
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
