<?php

namespace Zakriyarahman\Microbilt\Public\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\MicrobiltEnumBoolean;

/**
 * File for class MicrobiltStructPublicRecord_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPublicRecord_Type originally named PublicRecord_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPublicRecord_Type extends MicrobiltStructAggregate
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
     * The PRType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PRType;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The ReviewReq
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReviewReq;
    /**
     * The OwnershipType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipType;
    /**
     * The AttorneyName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AttorneyName;
    /**
     * The BankruptcyAssetsAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $BankruptcyAssetsAmt;
    /**
     * The BankruptcyLiabilitiesAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $BankruptcyLiabilitiesAmt;
    /**
     * The BankruptcyType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BankruptcyType;
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
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $DisputeInd;
    /**
     * The DerogInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $DerogInd;
    /**
     * The FilingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingDt;
    /**
     * The DefendantName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DefendantName;
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
     * The LegalObligationAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $LegalObligationAmt;
    /**
     * The ManualUpdInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ManualUpdInd;
    /**
     * The MaturityDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MaturityDt;
    /**
     * The PaidDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PaidDt;
    /**
     * The PmtFreq
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtFreq;
    /**
     * The ReportedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReportedDt;
    /**
     * The SettledDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SettledDt;
    /**
     * The VerifiedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VerifiedDt;
    /**
     * The LastActivityDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastActivityDt;
    /**
     * The StatusDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatusDt;
    /**
     * The Plaintiff
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Plaintiff;
    /**
     * The VoluntaryInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $VoluntaryInd;
    /**
     * The PRStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PRStatus;
    /**
     * The BalanceDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BalanceDt;
    /**
     * The ClaimAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $ClaimAmt;
    /**
     * The RentPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $RentPmtAmt;
    /**
     * The JudgeTrustee
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $JudgeTrustee;
    /**
     * The DismissedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DismissedDt;
    /**
     * The DischargedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DischargedDt;
    /**
     * The CourtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructCourtInfo_Type
     */
    public $CourtInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The FilingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingType;
    /**
     * The FilerType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilerType;
    /**
     * The FilingLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingLocation;
    /**
     * The OrigDtFiled
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigDtFiled;
    /**
     * The ClosedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ClosedDt;
    /**
     * The ReOpenedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReOpenedDt;
    /**
     * The ConvertedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ConvertedDt;
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
     * The ClaimsDeadlineDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ClaimsDeadlineDt;
    /**
     * The ComplaintDeadlineDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ComplaintDeadlineDt;
    /**
     * The TransferredDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TransferredDt;
    /**
     * The WithdrawnDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $WithdrawnDt;
    /**
     * The ClaimDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ClaimDt;
    /**
     * The ObjectionDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ObjectionDt;
    /**
     * The Entity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Entity;
    /**
     * The NoticeType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NoticeType;
    /**
     * The Division
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Division;
    /**
     * The CaseNum2
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CaseNum2;
    /**
     * The OrigDept
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigDept;
    /**
     * The OrigCase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigCase;
    /**
     * The OrigBook
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigBook;
    /**
     * The OrigPage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigPage;
    /**
     * The Sch341DtTime
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Sch341DtTime;
    /**
     * The UnpaidBalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $UnpaidBalanceAmt;
    /**
     * The OriginalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $OriginalAmt;
    /**
     * The ReleaseDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReleaseDt;
    /**
     * The AssetsAvailForUnsecuredInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $AssetsAvailForUnsecuredInd;
    /**
     * The BankrRepmtPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $BankrRepmtPercent;
    /**
     * The BankrAdjPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $BankrAdjPercent;
    /**
     * The ConsumerStatement
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructConsumerStatement_Type
     */
    public $ConsumerStatement;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $Comments;
    /**
     * The SatisfiedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SatisfiedDt;
    /**
     * The Classification
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Classification;
    /**
     * Constructor method for PublicRecord_Type
     * @see parent::__construct()
     * @param string $_caseId
     * @param string $_pRType
     * @param MicrobiltStructOrgInfo_Type $_orgInfo
     * @param MicrobiltEnumBoolean $_reviewReq
     * @param string $_ownershipType
     * @param string $_attorneyName
     * @param MicrobiltStructCurrencyAmount $_bankruptcyAssetsAmt
     * @param MicrobiltStructCurrencyAmount $_bankruptcyLiabilitiesAmt
     * @param string $_bankruptcyType
     * @param string $_courtName
     * @param string $_courtNum
     * @param MicrobiltEnumBoolean $_disputeInd
     * @param MicrobiltEnumBoolean $_derogInd
     * @param string $_filingDt
     * @param string $_defendantName
     * @param string $_dispositionDt
     * @param string $_dispositionType
     * @param MicrobiltStructCurrencyAmount $_legalObligationAmt
     * @param MicrobiltEnumBoolean $_manualUpdInd
     * @param string $_maturityDt
     * @param string $_paidDt
     * @param string $_pmtFreq
     * @param string $_reportedDt
     * @param string $_settledDt
     * @param string $_verifiedDt
     * @param string $_lastActivityDt
     * @param string $_statusDt
     * @param string $_plaintiff
     * @param MicrobiltEnumBoolean $_voluntaryInd
     * @param string $_pRStatus
     * @param string $_balanceDt
     * @param MicrobiltStructCurrencyAmount $_claimAmt
     * @param MicrobiltStructCurrencyAmount $_rentPmtAmt
     * @param string $_judgeTrustee
     * @param string $_dismissedDt
     * @param string $_dischargedDt
     * @param MicrobiltStructCourtInfo_Type $_courtInfo
     * @param MicrobiltStructMessage_Type $_message
     * @param string $_filingType
     * @param string $_filerType
     * @param string $_filingLocation
     * @param string $_origDtFiled
     * @param string $_closedDt
     * @param string $_reOpenedDt
     * @param string $_convertedDt
     * @param string $_chapter
     * @param string $_origChapter
     * @param string $_filingStatus
     * @param string $_claimsDeadlineDt
     * @param string $_complaintDeadlineDt
     * @param string $_transferredDt
     * @param string $_withdrawnDt
     * @param string $_claimDt
     * @param string $_objectionDt
     * @param string $_entity
     * @param string $_noticeType
     * @param string $_division
     * @param string $_caseNum2
     * @param string $_origDept
     * @param string $_origCase
     * @param string $_origBook
     * @param string $_origPage
     * @param string $_sch341DtTime
     * @param MicrobiltStructCurrencyAmount $_unpaidBalanceAmt
     * @param MicrobiltStructCurrencyAmount $_originalAmt
     * @param string $_releaseDt
     * @param MicrobiltEnumBoolean $_assetsAvailForUnsecuredInd
     * @param float $_bankrRepmtPercent
     * @param float $_bankrAdjPercent
     * @param MicrobiltStructConsumerStatement_Type $_consumerStatement
     * @param string $_comments
     * @param string $_satisfiedDt
     * @param string $_classification
     * @return MicrobiltStructPublicRecord_Type
     */
    public function __construct($_caseId = NULL,$_pRType = NULL,$_orgInfo = NULL,$_reviewReq = NULL,$_ownershipType = NULL,$_attorneyName = NULL,$_bankruptcyAssetsAmt = NULL,$_bankruptcyLiabilitiesAmt = NULL,$_bankruptcyType = NULL,$_courtName = NULL,$_courtNum = NULL,$_disputeInd = NULL,$_derogInd = NULL,$_filingDt = NULL,$_defendantName = NULL,$_dispositionDt = NULL,$_dispositionType = NULL,$_legalObligationAmt = NULL,$_manualUpdInd = NULL,$_maturityDt = NULL,$_paidDt = NULL,$_pmtFreq = NULL,$_reportedDt = NULL,$_settledDt = NULL,$_verifiedDt = NULL,$_lastActivityDt = NULL,$_statusDt = NULL,$_plaintiff = NULL,$_voluntaryInd = NULL,$_pRStatus = NULL,$_balanceDt = NULL,$_claimAmt = NULL,$_rentPmtAmt = NULL,$_judgeTrustee = NULL,$_dismissedDt = NULL,$_dischargedDt = NULL,$_courtInfo = NULL,$_message = NULL,$_filingType = NULL,$_filerType = NULL,$_filingLocation = NULL,$_origDtFiled = NULL,$_closedDt = NULL,$_reOpenedDt = NULL,$_convertedDt = NULL,$_chapter = NULL,$_origChapter = NULL,$_filingStatus = NULL,$_claimsDeadlineDt = NULL,$_complaintDeadlineDt = NULL,$_transferredDt = NULL,$_withdrawnDt = NULL,$_claimDt = NULL,$_objectionDt = NULL,$_entity = NULL,$_noticeType = NULL,$_division = NULL,$_caseNum2 = NULL,$_origDept = NULL,$_origCase = NULL,$_origBook = NULL,$_origPage = NULL,$_sch341DtTime = NULL,$_unpaidBalanceAmt = NULL,$_originalAmt = NULL,$_releaseDt = NULL,$_assetsAvailForUnsecuredInd = NULL,$_bankrRepmtPercent = NULL,$_bankrAdjPercent = NULL,$_consumerStatement = NULL,$_comments = NULL,$_satisfiedDt = NULL,$_classification = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CaseId'=>$_caseId,'PRType'=>$_pRType,'OrgInfo'=>$_orgInfo,'ReviewReq'=>$_reviewReq,'OwnershipType'=>$_ownershipType,'AttorneyName'=>$_attorneyName,'BankruptcyAssetsAmt'=>$_bankruptcyAssetsAmt,'BankruptcyLiabilitiesAmt'=>$_bankruptcyLiabilitiesAmt,'BankruptcyType'=>$_bankruptcyType,'CourtName'=>$_courtName,'CourtNum'=>$_courtNum,'DisputeInd'=>$_disputeInd,'DerogInd'=>$_derogInd,'FilingDt'=>$_filingDt,'DefendantName'=>$_defendantName,'DispositionDt'=>$_dispositionDt,'DispositionType'=>$_dispositionType,'LegalObligationAmt'=>$_legalObligationAmt,'ManualUpdInd'=>$_manualUpdInd,'MaturityDt'=>$_maturityDt,'PaidDt'=>$_paidDt,'PmtFreq'=>$_pmtFreq,'ReportedDt'=>$_reportedDt,'SettledDt'=>$_settledDt,'VerifiedDt'=>$_verifiedDt,'LastActivityDt'=>$_lastActivityDt,'StatusDt'=>$_statusDt,'Plaintiff'=>$_plaintiff,'VoluntaryInd'=>$_voluntaryInd,'PRStatus'=>$_pRStatus,'BalanceDt'=>$_balanceDt,'ClaimAmt'=>$_claimAmt,'RentPmtAmt'=>$_rentPmtAmt,'JudgeTrustee'=>$_judgeTrustee,'DismissedDt'=>$_dismissedDt,'DischargedDt'=>$_dischargedDt,'CourtInfo'=>$_courtInfo,'Message'=>$_message,'FilingType'=>$_filingType,'FilerType'=>$_filerType,'FilingLocation'=>$_filingLocation,'OrigDtFiled'=>$_origDtFiled,'ClosedDt'=>$_closedDt,'ReOpenedDt'=>$_reOpenedDt,'ConvertedDt'=>$_convertedDt,'Chapter'=>$_chapter,'OrigChapter'=>$_origChapter,'FilingStatus'=>$_filingStatus,'ClaimsDeadlineDt'=>$_claimsDeadlineDt,'ComplaintDeadlineDt'=>$_complaintDeadlineDt,'TransferredDt'=>$_transferredDt,'WithdrawnDt'=>$_withdrawnDt,'ClaimDt'=>$_claimDt,'ObjectionDt'=>$_objectionDt,'Entity'=>$_entity,'NoticeType'=>$_noticeType,'Division'=>$_division,'CaseNum2'=>$_caseNum2,'OrigDept'=>$_origDept,'OrigCase'=>$_origCase,'OrigBook'=>$_origBook,'OrigPage'=>$_origPage,'Sch341DtTime'=>$_sch341DtTime,'UnpaidBalanceAmt'=>$_unpaidBalanceAmt,'OriginalAmt'=>$_originalAmt,'ReleaseDt'=>$_releaseDt,'AssetsAvailForUnsecuredInd'=>$_assetsAvailForUnsecuredInd,'BankrRepmtPercent'=>$_bankrRepmtPercent,'BankrAdjPercent'=>$_bankrAdjPercent,'ConsumerStatement'=>$_consumerStatement,'Comments'=>$_comments,'SatisfiedDt'=>$_satisfiedDt,'Classification'=>$_classification),false);
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
     * Get OrgInfo value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param MicrobiltStructOrgInfo_Type $_orgInfo the OrgInfo
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get ReviewReq value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReviewReq()
    {
        return $this->ReviewReq;
    }
    /**
     * Set ReviewReq value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reviewReq the ReviewReq
     * @return MicrobiltEnumBoolean
     */
    public function setReviewReq($_reviewReq)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reviewReq))
        {
            return false;
        }
        return ($this->ReviewReq = $_reviewReq);
    }
    /**
     * Get OwnershipType value
     * @return string|null
     */
    public function getOwnershipType()
    {
        return $this->OwnershipType;
    }
    /**
     * Set OwnershipType value
     * @param string $_ownershipType the OwnershipType
     * @return string
     */
    public function setOwnershipType($_ownershipType)
    {
        return ($this->OwnershipType = $_ownershipType);
    }
    /**
     * Get AttorneyName value
     * @return string|null
     */
    public function getAttorneyName()
    {
        return $this->AttorneyName;
    }
    /**
     * Set AttorneyName value
     * @param string $_attorneyName the AttorneyName
     * @return string
     */
    public function setAttorneyName($_attorneyName)
    {
        return ($this->AttorneyName = $_attorneyName);
    }
    /**
     * Get BankruptcyAssetsAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getBankruptcyAssetsAmt()
    {
        return $this->BankruptcyAssetsAmt;
    }
    /**
     * Set BankruptcyAssetsAmt value
     * @param MicrobiltStructCurrencyAmount $_bankruptcyAssetsAmt the BankruptcyAssetsAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setBankruptcyAssetsAmt($_bankruptcyAssetsAmt)
    {
        return ($this->BankruptcyAssetsAmt = $_bankruptcyAssetsAmt);
    }
    /**
     * Get BankruptcyLiabilitiesAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getBankruptcyLiabilitiesAmt()
    {
        return $this->BankruptcyLiabilitiesAmt;
    }
    /**
     * Set BankruptcyLiabilitiesAmt value
     * @param MicrobiltStructCurrencyAmount $_bankruptcyLiabilitiesAmt the BankruptcyLiabilitiesAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setBankruptcyLiabilitiesAmt($_bankruptcyLiabilitiesAmt)
    {
        return ($this->BankruptcyLiabilitiesAmt = $_bankruptcyLiabilitiesAmt);
    }
    /**
     * Get BankruptcyType value
     * @return string|null
     */
    public function getBankruptcyType()
    {
        return $this->BankruptcyType;
    }
    /**
     * Set BankruptcyType value
     * @param string $_bankruptcyType the BankruptcyType
     * @return string
     */
    public function setBankruptcyType($_bankruptcyType)
    {
        return ($this->BankruptcyType = $_bankruptcyType);
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
     * Get DerogInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getDerogInd()
    {
        return $this->DerogInd;
    }
    /**
     * Set DerogInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_derogInd the DerogInd
     * @return MicrobiltEnumBoolean
     */
    public function setDerogInd($_derogInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_derogInd))
        {
            return false;
        }
        return ($this->DerogInd = $_derogInd);
    }
    /**
     * Get FilingDt value
     * @return string|null
     */
    public function getFilingDt()
    {
        return $this->FilingDt;
    }
    /**
     * Set FilingDt value
     * @param string $_filingDt the FilingDt
     * @return string
     */
    public function setFilingDt($_filingDt)
    {
        return ($this->FilingDt = $_filingDt);
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
     * Get LegalObligationAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getLegalObligationAmt()
    {
        return $this->LegalObligationAmt;
    }
    /**
     * Set LegalObligationAmt value
     * @param MicrobiltStructCurrencyAmount $_legalObligationAmt the LegalObligationAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setLegalObligationAmt($_legalObligationAmt)
    {
        return ($this->LegalObligationAmt = $_legalObligationAmt);
    }
    /**
     * Get ManualUpdInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getManualUpdInd()
    {
        return $this->ManualUpdInd;
    }
    /**
     * Set ManualUpdInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_manualUpdInd the ManualUpdInd
     * @return MicrobiltEnumBoolean
     */
    public function setManualUpdInd($_manualUpdInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_manualUpdInd))
        {
            return false;
        }
        return ($this->ManualUpdInd = $_manualUpdInd);
    }
    /**
     * Get MaturityDt value
     * @return string|null
     */
    public function getMaturityDt()
    {
        return $this->MaturityDt;
    }
    /**
     * Set MaturityDt value
     * @param string $_maturityDt the MaturityDt
     * @return string
     */
    public function setMaturityDt($_maturityDt)
    {
        return ($this->MaturityDt = $_maturityDt);
    }
    /**
     * Get PaidDt value
     * @return string|null
     */
    public function getPaidDt()
    {
        return $this->PaidDt;
    }
    /**
     * Set PaidDt value
     * @param string $_paidDt the PaidDt
     * @return string
     */
    public function setPaidDt($_paidDt)
    {
        return ($this->PaidDt = $_paidDt);
    }
    /**
     * Get PmtFreq value
     * @return string|null
     */
    public function getPmtFreq()
    {
        return $this->PmtFreq;
    }
    /**
     * Set PmtFreq value
     * @param string $_pmtFreq the PmtFreq
     * @return string
     */
    public function setPmtFreq($_pmtFreq)
    {
        return ($this->PmtFreq = $_pmtFreq);
    }
    /**
     * Get ReportedDt value
     * @return string|null
     */
    public function getReportedDt()
    {
        return $this->ReportedDt;
    }
    /**
     * Set ReportedDt value
     * @param string $_reportedDt the ReportedDt
     * @return string
     */
    public function setReportedDt($_reportedDt)
    {
        return ($this->ReportedDt = $_reportedDt);
    }
    /**
     * Get SettledDt value
     * @return string|null
     */
    public function getSettledDt()
    {
        return $this->SettledDt;
    }
    /**
     * Set SettledDt value
     * @param string $_settledDt the SettledDt
     * @return string
     */
    public function setSettledDt($_settledDt)
    {
        return ($this->SettledDt = $_settledDt);
    }
    /**
     * Get VerifiedDt value
     * @return string|null
     */
    public function getVerifiedDt()
    {
        return $this->VerifiedDt;
    }
    /**
     * Set VerifiedDt value
     * @param string $_verifiedDt the VerifiedDt
     * @return string
     */
    public function setVerifiedDt($_verifiedDt)
    {
        return ($this->VerifiedDt = $_verifiedDt);
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
     * Get StatusDt value
     * @return string|null
     */
    public function getStatusDt()
    {
        return $this->StatusDt;
    }
    /**
     * Set StatusDt value
     * @param string $_statusDt the StatusDt
     * @return string
     */
    public function setStatusDt($_statusDt)
    {
        return ($this->StatusDt = $_statusDt);
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
     * Get VoluntaryInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getVoluntaryInd()
    {
        return $this->VoluntaryInd;
    }
    /**
     * Set VoluntaryInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_voluntaryInd the VoluntaryInd
     * @return MicrobiltEnumBoolean
     */
    public function setVoluntaryInd($_voluntaryInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_voluntaryInd))
        {
            return false;
        }
        return ($this->VoluntaryInd = $_voluntaryInd);
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
     * Get BalanceDt value
     * @return string|null
     */
    public function getBalanceDt()
    {
        return $this->BalanceDt;
    }
    /**
     * Set BalanceDt value
     * @param string $_balanceDt the BalanceDt
     * @return string
     */
    public function setBalanceDt($_balanceDt)
    {
        return ($this->BalanceDt = $_balanceDt);
    }
    /**
     * Get ClaimAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getClaimAmt()
    {
        return $this->ClaimAmt;
    }
    /**
     * Set ClaimAmt value
     * @param MicrobiltStructCurrencyAmount $_claimAmt the ClaimAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setClaimAmt($_claimAmt)
    {
        return ($this->ClaimAmt = $_claimAmt);
    }
    /**
     * Get RentPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getRentPmtAmt()
    {
        return $this->RentPmtAmt;
    }
    /**
     * Set RentPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_rentPmtAmt the RentPmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setRentPmtAmt($_rentPmtAmt)
    {
        return ($this->RentPmtAmt = $_rentPmtAmt);
    }
    /**
     * Get JudgeTrustee value
     * @return string|null
     */
    public function getJudgeTrustee()
    {
        return $this->JudgeTrustee;
    }
    /**
     * Set JudgeTrustee value
     * @param string $_judgeTrustee the JudgeTrustee
     * @return string
     */
    public function setJudgeTrustee($_judgeTrustee)
    {
        return ($this->JudgeTrustee = $_judgeTrustee);
    }
    /**
     * Get DismissedDt value
     * @return string|null
     */
    public function getDismissedDt()
    {
        return $this->DismissedDt;
    }
    /**
     * Set DismissedDt value
     * @param string $_dismissedDt the DismissedDt
     * @return string
     */
    public function setDismissedDt($_dismissedDt)
    {
        return ($this->DismissedDt = $_dismissedDt);
    }
    /**
     * Get DischargedDt value
     * @return string|null
     */
    public function getDischargedDt()
    {
        return $this->DischargedDt;
    }
    /**
     * Set DischargedDt value
     * @param string $_dischargedDt the DischargedDt
     * @return string
     */
    public function setDischargedDt($_dischargedDt)
    {
        return ($this->DischargedDt = $_dischargedDt);
    }
    /**
     * Get CourtInfo value
     * @return MicrobiltStructCourtInfo_Type|null
     */
    public function getCourtInfo()
    {
        return $this->CourtInfo;
    }
    /**
     * Set CourtInfo value
     * @param MicrobiltStructCourtInfo_Type $_courtInfo the CourtInfo
     * @return MicrobiltStructCourtInfo_Type
     */
    public function setCourtInfo($_courtInfo)
    {
        return ($this->CourtInfo = $_courtInfo);
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
     * Get FilerType value
     * @return string|null
     */
    public function getFilerType()
    {
        return $this->FilerType;
    }
    /**
     * Set FilerType value
     * @param string $_filerType the FilerType
     * @return string
     */
    public function setFilerType($_filerType)
    {
        return ($this->FilerType = $_filerType);
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
     * Get OrigDtFiled value
     * @return string|null
     */
    public function getOrigDtFiled()
    {
        return $this->OrigDtFiled;
    }
    /**
     * Set OrigDtFiled value
     * @param string $_origDtFiled the OrigDtFiled
     * @return string
     */
    public function setOrigDtFiled($_origDtFiled)
    {
        return ($this->OrigDtFiled = $_origDtFiled);
    }
    /**
     * Get ClosedDt value
     * @return string|null
     */
    public function getClosedDt()
    {
        return $this->ClosedDt;
    }
    /**
     * Set ClosedDt value
     * @param string $_closedDt the ClosedDt
     * @return string
     */
    public function setClosedDt($_closedDt)
    {
        return ($this->ClosedDt = $_closedDt);
    }
    /**
     * Get ReOpenedDt value
     * @return string|null
     */
    public function getReOpenedDt()
    {
        return $this->ReOpenedDt;
    }
    /**
     * Set ReOpenedDt value
     * @param string $_reOpenedDt the ReOpenedDt
     * @return string
     */
    public function setReOpenedDt($_reOpenedDt)
    {
        return ($this->ReOpenedDt = $_reOpenedDt);
    }
    /**
     * Get ConvertedDt value
     * @return string|null
     */
    public function getConvertedDt()
    {
        return $this->ConvertedDt;
    }
    /**
     * Set ConvertedDt value
     * @param string $_convertedDt the ConvertedDt
     * @return string
     */
    public function setConvertedDt($_convertedDt)
    {
        return ($this->ConvertedDt = $_convertedDt);
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
     * Get ClaimsDeadlineDt value
     * @return string|null
     */
    public function getClaimsDeadlineDt()
    {
        return $this->ClaimsDeadlineDt;
    }
    /**
     * Set ClaimsDeadlineDt value
     * @param string $_claimsDeadlineDt the ClaimsDeadlineDt
     * @return string
     */
    public function setClaimsDeadlineDt($_claimsDeadlineDt)
    {
        return ($this->ClaimsDeadlineDt = $_claimsDeadlineDt);
    }
    /**
     * Get ComplaintDeadlineDt value
     * @return string|null
     */
    public function getComplaintDeadlineDt()
    {
        return $this->ComplaintDeadlineDt;
    }
    /**
     * Set ComplaintDeadlineDt value
     * @param string $_complaintDeadlineDt the ComplaintDeadlineDt
     * @return string
     */
    public function setComplaintDeadlineDt($_complaintDeadlineDt)
    {
        return ($this->ComplaintDeadlineDt = $_complaintDeadlineDt);
    }
    /**
     * Get TransferredDt value
     * @return string|null
     */
    public function getTransferredDt()
    {
        return $this->TransferredDt;
    }
    /**
     * Set TransferredDt value
     * @param string $_transferredDt the TransferredDt
     * @return string
     */
    public function setTransferredDt($_transferredDt)
    {
        return ($this->TransferredDt = $_transferredDt);
    }
    /**
     * Get WithdrawnDt value
     * @return string|null
     */
    public function getWithdrawnDt()
    {
        return $this->WithdrawnDt;
    }
    /**
     * Set WithdrawnDt value
     * @param string $_withdrawnDt the WithdrawnDt
     * @return string
     */
    public function setWithdrawnDt($_withdrawnDt)
    {
        return ($this->WithdrawnDt = $_withdrawnDt);
    }
    /**
     * Get ClaimDt value
     * @return string|null
     */
    public function getClaimDt()
    {
        return $this->ClaimDt;
    }
    /**
     * Set ClaimDt value
     * @param string $_claimDt the ClaimDt
     * @return string
     */
    public function setClaimDt($_claimDt)
    {
        return ($this->ClaimDt = $_claimDt);
    }
    /**
     * Get ObjectionDt value
     * @return string|null
     */
    public function getObjectionDt()
    {
        return $this->ObjectionDt;
    }
    /**
     * Set ObjectionDt value
     * @param string $_objectionDt the ObjectionDt
     * @return string
     */
    public function setObjectionDt($_objectionDt)
    {
        return ($this->ObjectionDt = $_objectionDt);
    }
    /**
     * Get Entity value
     * @return string|null
     */
    public function getEntity()
    {
        return $this->Entity;
    }
    /**
     * Set Entity value
     * @param string $_entity the Entity
     * @return string
     */
    public function setEntity($_entity)
    {
        return ($this->Entity = $_entity);
    }
    /**
     * Get NoticeType value
     * @return string|null
     */
    public function getNoticeType()
    {
        return $this->NoticeType;
    }
    /**
     * Set NoticeType value
     * @param string $_noticeType the NoticeType
     * @return string
     */
    public function setNoticeType($_noticeType)
    {
        return ($this->NoticeType = $_noticeType);
    }
    /**
     * Get Division value
     * @return string|null
     */
    public function getDivision()
    {
        return $this->Division;
    }
    /**
     * Set Division value
     * @param string $_division the Division
     * @return string
     */
    public function setDivision($_division)
    {
        return ($this->Division = $_division);
    }
    /**
     * Get CaseNum2 value
     * @return string|null
     */
    public function getCaseNum2()
    {
        return $this->CaseNum2;
    }
    /**
     * Set CaseNum2 value
     * @param string $_caseNum2 the CaseNum2
     * @return string
     */
    public function setCaseNum2($_caseNum2)
    {
        return ($this->CaseNum2 = $_caseNum2);
    }
    /**
     * Get OrigDept value
     * @return string|null
     */
    public function getOrigDept()
    {
        return $this->OrigDept;
    }
    /**
     * Set OrigDept value
     * @param string $_origDept the OrigDept
     * @return string
     */
    public function setOrigDept($_origDept)
    {
        return ($this->OrigDept = $_origDept);
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
     * Get OrigBook value
     * @return string|null
     */
    public function getOrigBook()
    {
        return $this->OrigBook;
    }
    /**
     * Set OrigBook value
     * @param string $_origBook the OrigBook
     * @return string
     */
    public function setOrigBook($_origBook)
    {
        return ($this->OrigBook = $_origBook);
    }
    /**
     * Get OrigPage value
     * @return string|null
     */
    public function getOrigPage()
    {
        return $this->OrigPage;
    }
    /**
     * Set OrigPage value
     * @param string $_origPage the OrigPage
     * @return string
     */
    public function setOrigPage($_origPage)
    {
        return ($this->OrigPage = $_origPage);
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
     * Get UnpaidBalanceAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getUnpaidBalanceAmt()
    {
        return $this->UnpaidBalanceAmt;
    }
    /**
     * Set UnpaidBalanceAmt value
     * @param MicrobiltStructCurrencyAmount $_unpaidBalanceAmt the UnpaidBalanceAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setUnpaidBalanceAmt($_unpaidBalanceAmt)
    {
        return ($this->UnpaidBalanceAmt = $_unpaidBalanceAmt);
    }
    /**
     * Get OriginalAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getOriginalAmt()
    {
        return $this->OriginalAmt;
    }
    /**
     * Set OriginalAmt value
     * @param MicrobiltStructCurrencyAmount $_originalAmt the OriginalAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setOriginalAmt($_originalAmt)
    {
        return ($this->OriginalAmt = $_originalAmt);
    }
    /**
     * Get ReleaseDt value
     * @return string|null
     */
    public function getReleaseDt()
    {
        return $this->ReleaseDt;
    }
    /**
     * Set ReleaseDt value
     * @param string $_releaseDt the ReleaseDt
     * @return string
     */
    public function setReleaseDt($_releaseDt)
    {
        return ($this->ReleaseDt = $_releaseDt);
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
     * Get BankrRepmtPercent value
     * @return float|null
     */
    public function getBankrRepmtPercent()
    {
        return $this->BankrRepmtPercent;
    }
    /**
     * Set BankrRepmtPercent value
     * @param float $_bankrRepmtPercent the BankrRepmtPercent
     * @return float
     */
    public function setBankrRepmtPercent($_bankrRepmtPercent)
    {
        return ($this->BankrRepmtPercent = $_bankrRepmtPercent);
    }
    /**
     * Get BankrAdjPercent value
     * @return float|null
     */
    public function getBankrAdjPercent()
    {
        return $this->BankrAdjPercent;
    }
    /**
     * Set BankrAdjPercent value
     * @param float $_bankrAdjPercent the BankrAdjPercent
     * @return float
     */
    public function setBankrAdjPercent($_bankrAdjPercent)
    {
        return ($this->BankrAdjPercent = $_bankrAdjPercent);
    }
    /**
     * Get ConsumerStatement value
     * @return MicrobiltStructConsumerStatement_Type|null
     */
    public function getConsumerStatement()
    {
        return $this->ConsumerStatement;
    }
    /**
     * Set ConsumerStatement value
     * @param MicrobiltStructConsumerStatement_Type $_consumerStatement the ConsumerStatement
     * @return MicrobiltStructConsumerStatement_Type
     */
    public function setConsumerStatement($_consumerStatement)
    {
        return ($this->ConsumerStatement = $_consumerStatement);
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $_comments the Comments
     * @return string
     */
    public function setComments($_comments)
    {
        return ($this->Comments = $_comments);
    }
    /**
     * Get SatisfiedDt value
     * @return string|null
     */
    public function getSatisfiedDt()
    {
        return $this->SatisfiedDt;
    }
    /**
     * Set SatisfiedDt value
     * @param string $_satisfiedDt the SatisfiedDt
     * @return string
     */
    public function setSatisfiedDt($_satisfiedDt)
    {
        return ($this->SatisfiedDt = $_satisfiedDt);
    }
    /**
     * Get Classification value
     * @return string|null
     */
    public function getClassification()
    {
        return $this->Classification;
    }
    /**
     * Set Classification value
     * @param string $_classification the Classification
     * @return string
     */
    public function setClassification($_classification)
    {
        return ($this->Classification = $_classification);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructPublicRecord_Type
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
