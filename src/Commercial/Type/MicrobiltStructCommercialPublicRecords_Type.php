<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructCommercialPublicRecords_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCommercialPublicRecords_Type originally named CommercialPublicRecords_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCommercialPublicRecords_Type extends MicrobiltStructAggregate
{
    /**
     * The PRType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PRType;
    /**
     * The PRStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PRStatus;
    /**
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCommercialDates_Type
     */
    public $CommercialDates;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The TaxLienCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $TaxLienCode;
    /**
     * The Parties
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructParties_Type
     */
    public $Parties;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $DisputeInd;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
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
     * The CaseId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CaseId;
    /**
     * The OrigCase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigCase;
    /**
     * The Chapter
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Chapter;
    /**
     * The OrigChapter
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigChapter;
    /**
     * The FilingStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingStatus;
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructEvent_Type
     */
    public $Event;
    /**
     * The SelfRepresentedInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $SelfRepresentedInd;
    /**
     * The AssetsAvailForUnsecuredInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $AssetsAvailForUnsecuredInd;
    /**
     * The LegalActionCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $LegalActionCode;
    /**
     * Constructor method for CommercialPublicRecords_Type
     * @see parent::__construct()
     * @param string $_pRType
     * @param string $_pRStatus
     * @param MicrobiltStructCommercialDates_Type $_commercialDates
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltStructCodeDescription_Type $_taxLienCode
     * @param MicrobiltStructParties_Type $_parties
     * @param MicrobiltEnumBoolean $_disputeInd
     * @param MicrobiltStructMessage_Type $_message
     * @param string $_courtName
     * @param string $_courtNum
     * @param string $_caseId
     * @param string $_origCase
     * @param string $_chapter
     * @param string $_origChapter
     * @param string $_filingStatus
     * @param MicrobiltStructEvent_Type $_event
     * @param MicrobiltEnumBoolean $_selfRepresentedInd
     * @param MicrobiltEnumBoolean $_assetsAvailForUnsecuredInd
     * @param MicrobiltStructCodeDescription_Type $_legalActionCode
     * @return MicrobiltStructCommercialPublicRecords_Type
     */
    public function __construct($_pRType = NULL,$_pRStatus = NULL,$_commercialDates = NULL,$_commercialAmounts = NULL,$_taxLienCode = NULL,$_parties = NULL,$_disputeInd = NULL,$_message = NULL,$_courtName = NULL,$_courtNum = NULL,$_caseId = NULL,$_origCase = NULL,$_chapter = NULL,$_origChapter = NULL,$_filingStatus = NULL,$_event = NULL,$_selfRepresentedInd = NULL,$_assetsAvailForUnsecuredInd = NULL,$_legalActionCode = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PRType'=>$_pRType,'PRStatus'=>$_pRStatus,'CommercialDates'=>$_commercialDates,'CommercialAmounts'=>$_commercialAmounts,'TaxLienCode'=>$_taxLienCode,'Parties'=>$_parties,'DisputeInd'=>$_disputeInd,'Message'=>$_message,'CourtName'=>$_courtName,'CourtNum'=>$_courtNum,'CaseId'=>$_caseId,'OrigCase'=>$_origCase,'Chapter'=>$_chapter,'OrigChapter'=>$_origChapter,'FilingStatus'=>$_filingStatus,'Event'=>$_event,'SelfRepresentedInd'=>$_selfRepresentedInd,'AssetsAvailForUnsecuredInd'=>$_assetsAvailForUnsecuredInd,'LegalActionCode'=>$_legalActionCode),false);
    }
    /**
     * Get PRType value
     * @return string|null
     */
    public function getPRType()
    {
        return $this->PRType;
    }
    /**
     * Set PRType value
     * @param string $_pRType the PRType
     * @return string
     */
    public function setPRType($_pRType)
    {
        return ($this->PRType = $_pRType);
    }
    /**
     * Get PRStatus value
     * @return string|null
     */
    public function getPRStatus()
    {
        return $this->PRStatus;
    }
    /**
     * Set PRStatus value
     * @param string $_pRStatus the PRStatus
     * @return string
     */
    public function setPRStatus($_pRStatus)
    {
        return ($this->PRStatus = $_pRStatus);
    }
    /**
     * Get CommercialDates value
     * @return MicrobiltStructCommercialDates_Type|null
     */
    public function getCommercialDates()
    {
        return $this->CommercialDates;
    }
    /**
     * Set CommercialDates value
     * @param MicrobiltStructCommercialDates_Type $_commercialDates the CommercialDates
     * @return MicrobiltStructCommercialDates_Type
     */
    public function setCommercialDates($_commercialDates)
    {
        return ($this->CommercialDates = $_commercialDates);
    }
    /**
     * Get CommercialAmounts value
     * @return MicrobiltStructCommercialAmounts_Type|null
     */
    public function getCommercialAmounts()
    {
        return $this->CommercialAmounts;
    }
    /**
     * Set CommercialAmounts value
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts the CommercialAmounts
     * @return MicrobiltStructCommercialAmounts_Type
     */
    public function setCommercialAmounts($_commercialAmounts)
    {
        return ($this->CommercialAmounts = $_commercialAmounts);
    }
    /**
     * Get TaxLienCode value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getTaxLienCode()
    {
        return $this->TaxLienCode;
    }
    /**
     * Set TaxLienCode value
     * @param MicrobiltStructCodeDescription_Type $_taxLienCode the TaxLienCode
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setTaxLienCode($_taxLienCode)
    {
        return ($this->TaxLienCode = $_taxLienCode);
    }
    /**
     * Get Parties value
     * @return MicrobiltStructParties_Type|null
     */
    public function getParties()
    {
        return $this->Parties;
    }
    /**
     * Set Parties value
     * @param MicrobiltStructParties_Type $_parties the Parties
     * @return MicrobiltStructParties_Type
     */
    public function setParties($_parties)
    {
        return ($this->Parties = $_parties);
    }
    /**
     * Get DisputeInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getDisputeInd()
    {
        return $this->DisputeInd;
    }
    /**
     * Set DisputeInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_disputeInd the DisputeInd
     * @return MicrobiltEnumBoolean
     */
    public function setDisputeInd($_disputeInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_disputeInd))
        {
            return false;
        }
        return ($this->DisputeInd = $_disputeInd);
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
     * Get OrigCase value
     * @return string|null
     */
    public function getOrigCase()
    {
        return $this->OrigCase;
    }
    /**
     * Set OrigCase value
     * @param string $_origCase the OrigCase
     * @return string
     */
    public function setOrigCase($_origCase)
    {
        return ($this->OrigCase = $_origCase);
    }
    /**
     * Get Chapter value
     * @return string|null
     */
    public function getChapter()
    {
        return $this->Chapter;
    }
    /**
     * Set Chapter value
     * @param string $_chapter the Chapter
     * @return string
     */
    public function setChapter($_chapter)
    {
        return ($this->Chapter = $_chapter);
    }
    /**
     * Get OrigChapter value
     * @return string|null
     */
    public function getOrigChapter()
    {
        return $this->OrigChapter;
    }
    /**
     * Set OrigChapter value
     * @param string $_origChapter the OrigChapter
     * @return string
     */
    public function setOrigChapter($_origChapter)
    {
        return ($this->OrigChapter = $_origChapter);
    }
    /**
     * Get FilingStatus value
     * @return string|null
     */
    public function getFilingStatus()
    {
        return $this->FilingStatus;
    }
    /**
     * Set FilingStatus value
     * @param string $_filingStatus the FilingStatus
     * @return string
     */
    public function setFilingStatus($_filingStatus)
    {
        return ($this->FilingStatus = $_filingStatus);
    }
    /**
     * Get Event value
     * @return MicrobiltStructEvent_Type|null
     */
    public function getEvent()
    {
        return $this->Event;
    }
    /**
     * Set Event value
     * @param MicrobiltStructEvent_Type $_event the Event
     * @return MicrobiltStructEvent_Type
     */
    public function setEvent($_event)
    {
        return ($this->Event = $_event);
    }
    /**
     * Get SelfRepresentedInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getSelfRepresentedInd()
    {
        return $this->SelfRepresentedInd;
    }
    /**
     * Set SelfRepresentedInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_selfRepresentedInd the SelfRepresentedInd
     * @return MicrobiltEnumBoolean
     */
    public function setSelfRepresentedInd($_selfRepresentedInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_selfRepresentedInd))
        {
            return false;
        }
        return ($this->SelfRepresentedInd = $_selfRepresentedInd);
    }
    /**
     * Get AssetsAvailForUnsecuredInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getAssetsAvailForUnsecuredInd()
    {
        return $this->AssetsAvailForUnsecuredInd;
    }
    /**
     * Set AssetsAvailForUnsecuredInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_assetsAvailForUnsecuredInd the AssetsAvailForUnsecuredInd
     * @return MicrobiltEnumBoolean
     */
    public function setAssetsAvailForUnsecuredInd($_assetsAvailForUnsecuredInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_assetsAvailForUnsecuredInd))
        {
            return false;
        }
        return ($this->AssetsAvailForUnsecuredInd = $_assetsAvailForUnsecuredInd);
    }
    /**
     * Get LegalActionCode value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getLegalActionCode()
    {
        return $this->LegalActionCode;
    }
    /**
     * Set LegalActionCode value
     * @param MicrobiltStructCodeDescription_Type $_legalActionCode the LegalActionCode
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setLegalActionCode($_legalActionCode)
    {
        return ($this->LegalActionCode = $_legalActionCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCommercialPublicRecords_Type
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
