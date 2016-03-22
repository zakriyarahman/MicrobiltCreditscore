<?php
/**
 * File for class MicrobiltStructEvictionsCase_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructEvictionsCase_Type originally named EvictionsCase_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructEvictionsCase_Type extends MicrobiltStructAggregate
{
    /**
     * The CaseId
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $CaseId;
    /**
     * The FileDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $FileDt;
    /**
     * The CourtName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtName;
    /**
     * The CountyCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CountyCode;
    /**
     * The CourtState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtState;
    /**
     * The Book
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Book;
    /**
     * The Page
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Page;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FileName;
    /**
     * The FilingState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingState;
    /**
     * The FilingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingType;
    /**
     * The AssetAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $AssetAmt;
    /**
     * The LiabilityAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $LiabilityAmt;
    /**
     * The JudgmentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $JudgmentAmt;
    /**
     * The Sch341DtTime
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Sch341DtTime;
    /**
     * The EvictionsData
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $EvictionsData;
    /**
     * The RecordID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecordID;
    /**
     * The IRSSerialNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IRSSerialNum;
    /**
     * The OrigFilingNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigFilingNum;
    /**
     * The OrigFilingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigFilingType;
    /**
     * The FilingAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $FilingAmt;
    /**
     * The FilingJurisdiction
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingJurisdiction;
    /**
     * The FilingLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingLocation;
    /**
     * The FilingStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingStatus;
    /**
     * Constructor method for EvictionsCase_Type
     * @see parent::__construct()
     * @param string $_caseId
     * @param date $_fileDt
     * @param string $_courtName
     * @param string $_countyCode
     * @param string $_courtState
     * @param string $_book
     * @param string $_page
     * @param string $_fileName
     * @param string $_filingState
     * @param string $_filingType
     * @param MicrobiltStructCurrencyAmount $_assetAmt
     * @param MicrobiltStructCurrencyAmount $_liabilityAmt
     * @param MicrobiltStructCurrencyAmount $_judgmentAmt
     * @param string $_sch341DtTime
     * @param MicrobiltStructMessage_Type $_evictionsData
     * @param string $_recordID
     * @param string $_iRSSerialNum
     * @param string $_origFilingNum
     * @param string $_origFilingType
     * @param MicrobiltStructCurrencyAmount $_filingAmt
     * @param string $_filingJurisdiction
     * @param string $_filingLocation
     * @param string $_filingStatus
     * @return MicrobiltStructEvictionsCase_Type
     */
    public function __construct($_caseId = NULL,$_fileDt = NULL,$_courtName = NULL,$_countyCode = NULL,$_courtState = NULL,$_book = NULL,$_page = NULL,$_fileName = NULL,$_filingState = NULL,$_filingType = NULL,$_assetAmt = NULL,$_liabilityAmt = NULL,$_judgmentAmt = NULL,$_sch341DtTime = NULL,$_evictionsData = NULL,$_recordID = NULL,$_iRSSerialNum = NULL,$_origFilingNum = NULL,$_origFilingType = NULL,$_filingAmt = NULL,$_filingJurisdiction = NULL,$_filingLocation = NULL,$_filingStatus = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CaseId'=>$_caseId,'FileDt'=>$_fileDt,'CourtName'=>$_courtName,'CountyCode'=>$_countyCode,'CourtState'=>$_courtState,'Book'=>$_book,'Page'=>$_page,'FileName'=>$_fileName,'FilingState'=>$_filingState,'FilingType'=>$_filingType,'AssetAmt'=>$_assetAmt,'LiabilityAmt'=>$_liabilityAmt,'JudgmentAmt'=>$_judgmentAmt,'Sch341DtTime'=>$_sch341DtTime,'EvictionsData'=>$_evictionsData,'RecordID'=>$_recordID,'IRSSerialNum'=>$_iRSSerialNum,'OrigFilingNum'=>$_origFilingNum,'OrigFilingType'=>$_origFilingType,'FilingAmt'=>$_filingAmt,'FilingJurisdiction'=>$_filingJurisdiction,'FilingLocation'=>$_filingLocation,'FilingStatus'=>$_filingStatus),false);
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
     * Get FileDt value
     * @return date|null
     */
    public function getFileDt()
    {
        return $this->FileDt;
    }
    /**
     * Set FileDt value
     * @param date $_fileDt the FileDt
     * @return date
     */
    public function setFileDt($_fileDt)
    {
        return ($this->FileDt = $_fileDt);
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
     * Get CountyCode value
     * @return string|null
     */
    public function getCountyCode()
    {
        return $this->CountyCode;
    }
    /**
     * Set CountyCode value
     * @param string $_countyCode the CountyCode
     * @return string
     */
    public function setCountyCode($_countyCode)
    {
        return ($this->CountyCode = $_countyCode);
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
     * Get Book value
     * @return string|null
     */
    public function getBook()
    {
        return $this->Book;
    }
    /**
     * Set Book value
     * @param string $_book the Book
     * @return string
     */
    public function setBook($_book)
    {
        return ($this->Book = $_book);
    }
    /**
     * Get Page value
     * @return string|null
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param string $_page the Page
     * @return string
     */
    public function setPage($_page)
    {
        return ($this->Page = $_page);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $_fileName the FileName
     * @return string
     */
    public function setFileName($_fileName)
    {
        return ($this->FileName = $_fileName);
    }
    /**
     * Get FilingState value
     * @return string|null
     */
    public function getFilingState()
    {
        return $this->FilingState;
    }
    /**
     * Set FilingState value
     * @param string $_filingState the FilingState
     * @return string
     */
    public function setFilingState($_filingState)
    {
        return ($this->FilingState = $_filingState);
    }
    /**
     * Get FilingType value
     * @return string|null
     */
    public function getFilingType()
    {
        return $this->FilingType;
    }
    /**
     * Set FilingType value
     * @param string $_filingType the FilingType
     * @return string
     */
    public function setFilingType($_filingType)
    {
        return ($this->FilingType = $_filingType);
    }
    /**
     * Get AssetAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getAssetAmt()
    {
        return $this->AssetAmt;
    }
    /**
     * Set AssetAmt value
     * @param MicrobiltStructCurrencyAmount $_assetAmt the AssetAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setAssetAmt($_assetAmt)
    {
        return ($this->AssetAmt = $_assetAmt);
    }
    /**
     * Get LiabilityAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getLiabilityAmt()
    {
        return $this->LiabilityAmt;
    }
    /**
     * Set LiabilityAmt value
     * @param MicrobiltStructCurrencyAmount $_liabilityAmt the LiabilityAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setLiabilityAmt($_liabilityAmt)
    {
        return ($this->LiabilityAmt = $_liabilityAmt);
    }
    /**
     * Get JudgmentAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getJudgmentAmt()
    {
        return $this->JudgmentAmt;
    }
    /**
     * Set JudgmentAmt value
     * @param MicrobiltStructCurrencyAmount $_judgmentAmt the JudgmentAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setJudgmentAmt($_judgmentAmt)
    {
        return ($this->JudgmentAmt = $_judgmentAmt);
    }
    /**
     * Get Sch341DtTime value
     * @return string|null
     */
    public function getSch341DtTime()
    {
        return $this->Sch341DtTime;
    }
    /**
     * Set Sch341DtTime value
     * @param string $_sch341DtTime the Sch341DtTime
     * @return string
     */
    public function setSch341DtTime($_sch341DtTime)
    {
        return ($this->Sch341DtTime = $_sch341DtTime);
    }
    /**
     * Get EvictionsData value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getEvictionsData()
    {
        return $this->EvictionsData;
    }
    /**
     * Set EvictionsData value
     * @param MicrobiltStructMessage_Type $_evictionsData the EvictionsData
     * @return MicrobiltStructMessage_Type
     */
    public function setEvictionsData($_evictionsData)
    {
        return ($this->EvictionsData = $_evictionsData);
    }
    /**
     * Get RecordID value
     * @return string|null
     */
    public function getRecordID()
    {
        return $this->RecordID;
    }
    /**
     * Set RecordID value
     * @param string $_recordID the RecordID
     * @return string
     */
    public function setRecordID($_recordID)
    {
        return ($this->RecordID = $_recordID);
    }
    /**
     * Get IRSSerialNum value
     * @return string|null
     */
    public function getIRSSerialNum()
    {
        return $this->IRSSerialNum;
    }
    /**
     * Set IRSSerialNum value
     * @param string $_iRSSerialNum the IRSSerialNum
     * @return string
     */
    public function setIRSSerialNum($_iRSSerialNum)
    {
        return ($this->IRSSerialNum = $_iRSSerialNum);
    }
    /**
     * Get OrigFilingNum value
     * @return string|null
     */
    public function getOrigFilingNum()
    {
        return $this->OrigFilingNum;
    }
    /**
     * Set OrigFilingNum value
     * @param string $_origFilingNum the OrigFilingNum
     * @return string
     */
    public function setOrigFilingNum($_origFilingNum)
    {
        return ($this->OrigFilingNum = $_origFilingNum);
    }
    /**
     * Get OrigFilingType value
     * @return string|null
     */
    public function getOrigFilingType()
    {
        return $this->OrigFilingType;
    }
    /**
     * Set OrigFilingType value
     * @param string $_origFilingType the OrigFilingType
     * @return string
     */
    public function setOrigFilingType($_origFilingType)
    {
        return ($this->OrigFilingType = $_origFilingType);
    }
    /**
     * Get FilingAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getFilingAmt()
    {
        return $this->FilingAmt;
    }
    /**
     * Set FilingAmt value
     * @param MicrobiltStructCurrencyAmount $_filingAmt the FilingAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setFilingAmt($_filingAmt)
    {
        return ($this->FilingAmt = $_filingAmt);
    }
    /**
     * Get FilingJurisdiction value
     * @return string|null
     */
    public function getFilingJurisdiction()
    {
        return $this->FilingJurisdiction;
    }
    /**
     * Set FilingJurisdiction value
     * @param string $_filingJurisdiction the FilingJurisdiction
     * @return string
     */
    public function setFilingJurisdiction($_filingJurisdiction)
    {
        return ($this->FilingJurisdiction = $_filingJurisdiction);
    }
    /**
     * Get FilingLocation value
     * @return string|null
     */
    public function getFilingLocation()
    {
        return $this->FilingLocation;
    }
    /**
     * Set FilingLocation value
     * @param string $_filingLocation the FilingLocation
     * @return string
     */
    public function setFilingLocation($_filingLocation)
    {
        return ($this->FilingLocation = $_filingLocation);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructEvictionsCase_Type
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
