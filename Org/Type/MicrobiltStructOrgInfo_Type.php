<?php
/**
 * File for class MicrobiltStructOrgInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructOrgInfo_Type originally named OrgInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructOrgInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The IndustId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructIndustId_Type
     */
    public $IndustId;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Name;
    /**
     * The LegalName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LegalName;
    /**
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructContactInfo_Type
     */
    public $ContactInfo;
    /**
     * The DeptDivGrp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DeptDivGrp;
    /**
     * The TINInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructTINInfo_Type
     */
    public $TINInfo;
    /**
     * The EstablishDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $EstablishDt;
    /**
     * The NumEmployees
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $NumEmployees;
    /**
     * The OrgId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgId_Type
     */
    public $OrgId;
    /**
     * The CorpType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $CorpType;
    /**
     * The CorpStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CorpStatus;
    /**
     * The CorpStatusDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $CorpStatusDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The IncorporationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $IncorporationDt;
    /**
     * The CharterInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCharterInfo_Type
     */
    public $CharterInfo;
    /**
     * The AgentInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $AgentInfo;
    /**
     * The MergedName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MergedName;
    /**
     * The DBAName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DBAName;
    /**
     * The PriorName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PriorName;
    /**
     * The OrigDtFiled
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $OrigDtFiled;
    /**
     * The RecentFilingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $RecentFilingDt;
    /**
     * The BusType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusType;
    /**
     * The ActiveStatusInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ActiveStatusInd;
    /**
     * The BusStatusDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusStatusDesc;
    /**
     * The ForProfitInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ForProfitInd;
    /**
     * The OwnerRegistrantInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $OwnerRegistrantInfo;
    /**
     * The OrgType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrgType;
    /**
     * The RecordID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecordID;
    /**
     * The PRInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $PRInd;
    /**
     * The FileNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FileNumber;
    /**
     * The BIN
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BIN;
    /**
     * The IncorporationState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IncorporationState;
    /**
     * The SignificantPRInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $SignificantPRInd;
    /**
     * The BusLicense
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusLicense;
    /**
     * The RegistrationDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructRegistrationDetails_Type
     */
    public $RegistrationDetails;
    /**
     * Constructor method for OrgInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructIndustId_Type $_industId
     * @param string $_name
     * @param string $_legalName
     * @param MicrobiltStructContactInfo_Type $_contactInfo
     * @param string $_deptDivGrp
     * @param MicrobiltStructTINInfo_Type $_tINInfo
     * @param date $_establishDt
     * @param long $_numEmployees
     * @param MicrobiltStructOrgId_Type $_orgId
     * @param MicrobiltStructCodeDescription_Type $_corpType
     * @param string $_corpStatus
     * @param date $_corpStatusDt
     * @param MicrobiltStructMessage_Type $_message
     * @param date $_incorporationDt
     * @param MicrobiltStructCharterInfo_Type $_charterInfo
     * @param MicrobiltStructPersonInfo_Type $_agentInfo
     * @param string $_mergedName
     * @param string $_dBAName
     * @param string $_priorName
     * @param date $_origDtFiled
     * @param date $_recentFilingDt
     * @param string $_busType
     * @param MicrobiltEnumBoolean $_activeStatusInd
     * @param string $_busStatusDesc
     * @param MicrobiltEnumBoolean $_forProfitInd
     * @param MicrobiltStructPersonInfo_Type $_ownerRegistrantInfo
     * @param string $_orgType
     * @param string $_recordID
     * @param MicrobiltEnumBoolean $_pRInd
     * @param string $_fileNumber
     * @param string $_bIN
     * @param string $_incorporationState
     * @param MicrobiltEnumBoolean $_significantPRInd
     * @param string $_busLicense
     * @param MicrobiltStructRegistrationDetails_Type $_registrationDetails
     * @return MicrobiltStructOrgInfo_Type
     */
    public function __construct($_industId = NULL,$_name = NULL,$_legalName = NULL,$_contactInfo = NULL,$_deptDivGrp = NULL,$_tINInfo = NULL,$_establishDt = NULL,$_numEmployees = NULL,$_orgId = NULL,$_corpType = NULL,$_corpStatus = NULL,$_corpStatusDt = NULL,$_message = NULL,$_incorporationDt = NULL,$_charterInfo = NULL,$_agentInfo = NULL,$_mergedName = NULL,$_dBAName = NULL,$_priorName = NULL,$_origDtFiled = NULL,$_recentFilingDt = NULL,$_busType = NULL,$_activeStatusInd = NULL,$_busStatusDesc = NULL,$_forProfitInd = NULL,$_ownerRegistrantInfo = NULL,$_orgType = NULL,$_recordID = NULL,$_pRInd = NULL,$_fileNumber = NULL,$_bIN = NULL,$_incorporationState = NULL,$_significantPRInd = NULL,$_busLicense = NULL,$_registrationDetails = NULL)
    {
        MicrobiltWsdlClass::__construct(array('IndustId'=>$_industId,'Name'=>$_name,'LegalName'=>$_legalName,'ContactInfo'=>$_contactInfo,'DeptDivGrp'=>$_deptDivGrp,'TINInfo'=>$_tINInfo,'EstablishDt'=>$_establishDt,'NumEmployees'=>$_numEmployees,'OrgId'=>$_orgId,'CorpType'=>$_corpType,'CorpStatus'=>$_corpStatus,'CorpStatusDt'=>$_corpStatusDt,'Message'=>$_message,'IncorporationDt'=>$_incorporationDt,'CharterInfo'=>$_charterInfo,'AgentInfo'=>$_agentInfo,'MergedName'=>$_mergedName,'DBAName'=>$_dBAName,'PriorName'=>$_priorName,'OrigDtFiled'=>$_origDtFiled,'RecentFilingDt'=>$_recentFilingDt,'BusType'=>$_busType,'ActiveStatusInd'=>$_activeStatusInd,'BusStatusDesc'=>$_busStatusDesc,'ForProfitInd'=>$_forProfitInd,'OwnerRegistrantInfo'=>$_ownerRegistrantInfo,'OrgType'=>$_orgType,'RecordID'=>$_recordID,'PRInd'=>$_pRInd,'FileNumber'=>$_fileNumber,'BIN'=>$_bIN,'IncorporationState'=>$_incorporationState,'SignificantPRInd'=>$_significantPRInd,'BusLicense'=>$_busLicense,'RegistrationDetails'=>$_registrationDetails),false);
    }
    /**
     * Get IndustId value
     * @return MicrobiltStructIndustId_Type|null
     */
    public function getIndustId()
    {
        return $this->IndustId;
    }
    /**
     * Set IndustId value
     * @param MicrobiltStructIndustId_Type $_industId the IndustId
     * @return MicrobiltStructIndustId_Type
     */
    public function setIndustId($_industId)
    {
        return ($this->IndustId = $_industId);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $_name the Name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
    }
    /**
     * Get LegalName value
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->LegalName;
    }
    /**
     * Set LegalName value
     * @param string $_legalName the LegalName
     * @return string
     */
    public function setLegalName($_legalName)
    {
        return ($this->LegalName = $_legalName);
    }
    /**
     * Get ContactInfo value
     * @return MicrobiltStructContactInfo_Type|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @param MicrobiltStructContactInfo_Type $_contactInfo the ContactInfo
     * @return MicrobiltStructContactInfo_Type
     */
    public function setContactInfo($_contactInfo)
    {
        return ($this->ContactInfo = $_contactInfo);
    }
    /**
     * Get DeptDivGrp value
     * @return string|null
     */
    public function getDeptDivGrp()
    {
        return $this->DeptDivGrp;
    }
    /**
     * Set DeptDivGrp value
     * @param string $_deptDivGrp the DeptDivGrp
     * @return string
     */
    public function setDeptDivGrp($_deptDivGrp)
    {
        return ($this->DeptDivGrp = $_deptDivGrp);
    }
    /**
     * Get TINInfo value
     * @return MicrobiltStructTINInfo_Type|null
     */
    public function getTINInfo()
    {
        return $this->TINInfo;
    }
    /**
     * Set TINInfo value
     * @param MicrobiltStructTINInfo_Type $_tINInfo the TINInfo
     * @return MicrobiltStructTINInfo_Type
     */
    public function setTINInfo($_tINInfo)
    {
        return ($this->TINInfo = $_tINInfo);
    }
    /**
     * Get EstablishDt value
     * @return date|null
     */
    public function getEstablishDt()
    {
        return $this->EstablishDt;
    }
    /**
     * Set EstablishDt value
     * @param date $_establishDt the EstablishDt
     * @return date
     */
    public function setEstablishDt($_establishDt)
    {
        return ($this->EstablishDt = $_establishDt);
    }
    /**
     * Get NumEmployees value
     * @return long|null
     */
    public function getNumEmployees()
    {
        return $this->NumEmployees;
    }
    /**
     * Set NumEmployees value
     * @param long $_numEmployees the NumEmployees
     * @return long
     */
    public function setNumEmployees($_numEmployees)
    {
        return ($this->NumEmployees = $_numEmployees);
    }
    /**
     * Get OrgId value
     * @return MicrobiltStructOrgId_Type|null
     */
    public function getOrgId()
    {
        return $this->OrgId;
    }
    /**
     * Set OrgId value
     * @param MicrobiltStructOrgId_Type $_orgId the OrgId
     * @return MicrobiltStructOrgId_Type
     */
    public function setOrgId($_orgId)
    {
        return ($this->OrgId = $_orgId);
    }
    /**
     * Get CorpType value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getCorpType()
    {
        return $this->CorpType;
    }
    /**
     * Set CorpType value
     * @param MicrobiltStructCodeDescription_Type $_corpType the CorpType
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setCorpType($_corpType)
    {
        return ($this->CorpType = $_corpType);
    }
    /**
     * Get CorpStatus value
     * @return string|null
     */
    public function getCorpStatus()
    {
        return $this->CorpStatus;
    }
    /**
     * Set CorpStatus value
     * @param string $_corpStatus the CorpStatus
     * @return string
     */
    public function setCorpStatus($_corpStatus)
    {
        return ($this->CorpStatus = $_corpStatus);
    }
    /**
     * Get CorpStatusDt value
     * @return date|null
     */
    public function getCorpStatusDt()
    {
        return $this->CorpStatusDt;
    }
    /**
     * Set CorpStatusDt value
     * @param date $_corpStatusDt the CorpStatusDt
     * @return date
     */
    public function setCorpStatusDt($_corpStatusDt)
    {
        return ($this->CorpStatusDt = $_corpStatusDt);
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
     * Get IncorporationDt value
     * @return date|null
     */
    public function getIncorporationDt()
    {
        return $this->IncorporationDt;
    }
    /**
     * Set IncorporationDt value
     * @param date $_incorporationDt the IncorporationDt
     * @return date
     */
    public function setIncorporationDt($_incorporationDt)
    {
        return ($this->IncorporationDt = $_incorporationDt);
    }
    /**
     * Get CharterInfo value
     * @return MicrobiltStructCharterInfo_Type|null
     */
    public function getCharterInfo()
    {
        return $this->CharterInfo;
    }
    /**
     * Set CharterInfo value
     * @param MicrobiltStructCharterInfo_Type $_charterInfo the CharterInfo
     * @return MicrobiltStructCharterInfo_Type
     */
    public function setCharterInfo($_charterInfo)
    {
        return ($this->CharterInfo = $_charterInfo);
    }
    /**
     * Get AgentInfo value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getAgentInfo()
    {
        return $this->AgentInfo;
    }
    /**
     * Set AgentInfo value
     * @param MicrobiltStructPersonInfo_Type $_agentInfo the AgentInfo
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setAgentInfo($_agentInfo)
    {
        return ($this->AgentInfo = $_agentInfo);
    }
    /**
     * Get MergedName value
     * @return string|null
     */
    public function getMergedName()
    {
        return $this->MergedName;
    }
    /**
     * Set MergedName value
     * @param string $_mergedName the MergedName
     * @return string
     */
    public function setMergedName($_mergedName)
    {
        return ($this->MergedName = $_mergedName);
    }
    /**
     * Get DBAName value
     * @return string|null
     */
    public function getDBAName()
    {
        return $this->DBAName;
    }
    /**
     * Set DBAName value
     * @param string $_dBAName the DBAName
     * @return string
     */
    public function setDBAName($_dBAName)
    {
        return ($this->DBAName = $_dBAName);
    }
    /**
     * Get PriorName value
     * @return string|null
     */
    public function getPriorName()
    {
        return $this->PriorName;
    }
    /**
     * Set PriorName value
     * @param string $_priorName the PriorName
     * @return string
     */
    public function setPriorName($_priorName)
    {
        return ($this->PriorName = $_priorName);
    }
    /**
     * Get OrigDtFiled value
     * @return date|null
     */
    public function getOrigDtFiled()
    {
        return $this->OrigDtFiled;
    }
    /**
     * Set OrigDtFiled value
     * @param date $_origDtFiled the OrigDtFiled
     * @return date
     */
    public function setOrigDtFiled($_origDtFiled)
    {
        return ($this->OrigDtFiled = $_origDtFiled);
    }
    /**
     * Get RecentFilingDt value
     * @return date|null
     */
    public function getRecentFilingDt()
    {
        return $this->RecentFilingDt;
    }
    /**
     * Set RecentFilingDt value
     * @param date $_recentFilingDt the RecentFilingDt
     * @return date
     */
    public function setRecentFilingDt($_recentFilingDt)
    {
        return ($this->RecentFilingDt = $_recentFilingDt);
    }
    /**
     * Get BusType value
     * @return string|null
     */
    public function getBusType()
    {
        return $this->BusType;
    }
    /**
     * Set BusType value
     * @param string $_busType the BusType
     * @return string
     */
    public function setBusType($_busType)
    {
        return ($this->BusType = $_busType);
    }
    /**
     * Get ActiveStatusInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getActiveStatusInd()
    {
        return $this->ActiveStatusInd;
    }
    /**
     * Set ActiveStatusInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_activeStatusInd the ActiveStatusInd
     * @return MicrobiltEnumBoolean
     */
    public function setActiveStatusInd($_activeStatusInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_activeStatusInd))
        {
            return false;
        }
        return ($this->ActiveStatusInd = $_activeStatusInd);
    }
    /**
     * Get BusStatusDesc value
     * @return string|null
     */
    public function getBusStatusDesc()
    {
        return $this->BusStatusDesc;
    }
    /**
     * Set BusStatusDesc value
     * @param string $_busStatusDesc the BusStatusDesc
     * @return string
     */
    public function setBusStatusDesc($_busStatusDesc)
    {
        return ($this->BusStatusDesc = $_busStatusDesc);
    }
    /**
     * Get ForProfitInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getForProfitInd()
    {
        return $this->ForProfitInd;
    }
    /**
     * Set ForProfitInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_forProfitInd the ForProfitInd
     * @return MicrobiltEnumBoolean
     */
    public function setForProfitInd($_forProfitInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_forProfitInd))
        {
            return false;
        }
        return ($this->ForProfitInd = $_forProfitInd);
    }
    /**
     * Get OwnerRegistrantInfo value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getOwnerRegistrantInfo()
    {
        return $this->OwnerRegistrantInfo;
    }
    /**
     * Set OwnerRegistrantInfo value
     * @param MicrobiltStructPersonInfo_Type $_ownerRegistrantInfo the OwnerRegistrantInfo
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setOwnerRegistrantInfo($_ownerRegistrantInfo)
    {
        return ($this->OwnerRegistrantInfo = $_ownerRegistrantInfo);
    }
    /**
     * Get OrgType value
     * @return string|null
     */
    public function getOrgType()
    {
        return $this->OrgType;
    }
    /**
     * Set OrgType value
     * @param string $_orgType the OrgType
     * @return string
     */
    public function setOrgType($_orgType)
    {
        return ($this->OrgType = $_orgType);
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
     * Get PRInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getPRInd()
    {
        return $this->PRInd;
    }
    /**
     * Set PRInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_pRInd the PRInd
     * @return MicrobiltEnumBoolean
     */
    public function setPRInd($_pRInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_pRInd))
        {
            return false;
        }
        return ($this->PRInd = $_pRInd);
    }
    /**
     * Get FileNumber value
     * @return string|null
     */
    public function getFileNumber()
    {
        return $this->FileNumber;
    }
    /**
     * Set FileNumber value
     * @param string $_fileNumber the FileNumber
     * @return string
     */
    public function setFileNumber($_fileNumber)
    {
        return ($this->FileNumber = $_fileNumber);
    }
    /**
     * Get BIN value
     * @return string|null
     */
    public function getBIN()
    {
        return $this->BIN;
    }
    /**
     * Set BIN value
     * @param string $_bIN the BIN
     * @return string
     */
    public function setBIN($_bIN)
    {
        return ($this->BIN = $_bIN);
    }
    /**
     * Get IncorporationState value
     * @return string|null
     */
    public function getIncorporationState()
    {
        return $this->IncorporationState;
    }
    /**
     * Set IncorporationState value
     * @param string $_incorporationState the IncorporationState
     * @return string
     */
    public function setIncorporationState($_incorporationState)
    {
        return ($this->IncorporationState = $_incorporationState);
    }
    /**
     * Get SignificantPRInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getSignificantPRInd()
    {
        return $this->SignificantPRInd;
    }
    /**
     * Set SignificantPRInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_significantPRInd the SignificantPRInd
     * @return MicrobiltEnumBoolean
     */
    public function setSignificantPRInd($_significantPRInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_significantPRInd))
        {
            return false;
        }
        return ($this->SignificantPRInd = $_significantPRInd);
    }
    /**
     * Get BusLicense value
     * @return string|null
     */
    public function getBusLicense()
    {
        return $this->BusLicense;
    }
    /**
     * Set BusLicense value
     * @param string $_busLicense the BusLicense
     * @return string
     */
    public function setBusLicense($_busLicense)
    {
        return ($this->BusLicense = $_busLicense);
    }
    /**
     * Get RegistrationDetails value
     * @return MicrobiltStructRegistrationDetails_Type|null
     */
    public function getRegistrationDetails()
    {
        return $this->RegistrationDetails;
    }
    /**
     * Set RegistrationDetails value
     * @param MicrobiltStructRegistrationDetails_Type $_registrationDetails the RegistrationDetails
     * @return MicrobiltStructRegistrationDetails_Type
     */
    public function setRegistrationDetails($_registrationDetails)
    {
        return ($this->RegistrationDetails = $_registrationDetails);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructOrgInfo_Type
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
