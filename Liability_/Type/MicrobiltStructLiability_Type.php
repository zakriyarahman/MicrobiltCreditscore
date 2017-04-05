<?php
/**
 * File for class MicrobiltStructLiability_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructLiability_Type originally named Liability_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructLiability_Type extends MicrobiltStructAggregate
{
    /**
     * The AcctId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctId;
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
     * The OpenedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OpenedDt;
    /**
     * The Closed
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $Closed;
    /**
     * The ClosedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ClosedDt;
    /**
     * The PaidDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PaidDt;
    /**
     * The ReportedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReportedDt;
    /**
     * The OwnershipType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipType;
    /**
     * The AcctStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctStatus;
    /**
     * The StatusDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatusDt;
    /**
     * The AcctType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctType;
    /**
     * The BalanceDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BalanceDt;
    /**
     * The CreditLimitAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $CreditLimitAmt;
    /**
     * The BalloonPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $BalloonPmtAmt;
    /**
     * The ChargeOffAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $ChargeOffAmt;
    /**
     * The LoanType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LoanType;
    /**
     * The CollateralDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CollateralDesc;
    /**
     * The OrigLoanAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $OrigLoanAmt;
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
     * The CurrentRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructRating_Type
     */
    public $CurrentRating;
    /**
     * The MOP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MOP;
    /**
     * The LastActivityDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastActivityDt;
    /**
     * The HighBalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $HighBalanceAmt;
    /**
     * The HighCreditAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $HighCreditAmt;
    /**
     * The LateCount30
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount30;
    /**
     * The LateCount60
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount60;
    /**
     * The LateCount90
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount90;
    /**
     * The LateCount120
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount120;
    /**
     * The PmtPattern
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtPattern;
    /**
     * The PastDueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $PastDueAmt;
    /**
     * The UnpaidBalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $UnpaidBalanceAmt;
    /**
     * The ActualPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $ActualPmtAmt;
    /**
     * The EstimatedPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $EstimatedPmtAmt;
    /**
     * The ScheduledPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $ScheduledPmtAmt;
    /**
     * The MonthsReviewed
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $MonthsReviewed;
    /**
     * The PmtStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtStatus;
    /**
     * The Terms
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Terms;
    /**
     * The MaxDelinqRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructRating_Type
     */
    public $MaxDelinqRating;
    /**
     * The MostRecentRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructRating_Type
     */
    public $MostRecentRating;
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DueDate;
    /**
     * The PmtFreq
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtFreq;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The PaymentInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPaymentInfo_Type
     */
    public $PaymentInfo;
    /**
     * The MaxDelinqDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MaxDelinqDt;
    /**
     * The ConsumerStatement
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructConsumerStatement_Type
     */
    public $ConsumerStatement;
    /**
     * The DerogCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $DerogCount;
    /**
     * The OrigCreditor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigCreditor;
    /**
     * The SoldToCreditor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SoldToCreditor;
    /**
     * The RecentDelinqRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructRating_Type
     */
    public $RecentDelinqRating;
    /**
     * The AssociationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AssociationDt;
    /**
     * The OpenedInLast6Months
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $OpenedInLast6Months;
    /**
     * The AvailableAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $AvailableAmt;
    /**
     * The DebtCounselingInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $DebtCounselingInd;
    /**
     * The VerifiedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VerifiedDt;
    /**
     * The ClosureReason
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $ClosureReason;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * Constructor method for Liability_Type
     * @see parent::__construct()
     * @param string $_acctId
     * @param MicrobiltStructOrgInfo_Type $_orgInfo
     * @param MicrobiltEnumBoolean $_reviewReq
     * @param string $_openedDt
     * @param MicrobiltEnumBoolean $_closed
     * @param string $_closedDt
     * @param string $_paidDt
     * @param string $_reportedDt
     * @param string $_ownershipType
     * @param string $_acctStatus
     * @param string $_statusDt
     * @param string $_acctType
     * @param string $_balanceDt
     * @param MicrobiltStructCurrencyAmount $_creditLimitAmt
     * @param MicrobiltStructCurrencyAmount $_balloonPmtAmt
     * @param MicrobiltStructCurrencyAmount $_chargeOffAmt
     * @param string $_loanType
     * @param string $_collateralDesc
     * @param MicrobiltStructCurrencyAmount $_origLoanAmt
     * @param MicrobiltEnumBoolean $_disputeInd
     * @param MicrobiltEnumBoolean $_derogInd
     * @param MicrobiltStructRating_Type $_currentRating
     * @param string $_mOP
     * @param string $_lastActivityDt
     * @param MicrobiltStructCurrencyAmount $_highBalanceAmt
     * @param MicrobiltStructCompAmt_Type $_highCreditAmt
     * @param int $_lateCount30
     * @param int $_lateCount60
     * @param int $_lateCount90
     * @param int $_lateCount120
     * @param string $_pmtPattern
     * @param MicrobiltStructCurrencyAmount $_pastDueAmt
     * @param MicrobiltStructCurrencyAmount $_unpaidBalanceAmt
     * @param MicrobiltStructCurrencyAmount $_actualPmtAmt
     * @param MicrobiltStructCurrencyAmount $_estimatedPmtAmt
     * @param MicrobiltStructCurrencyAmount $_scheduledPmtAmt
     * @param int $_monthsReviewed
     * @param string $_pmtStatus
     * @param string $_terms
     * @param MicrobiltStructRating_Type $_maxDelinqRating
     * @param MicrobiltStructRating_Type $_mostRecentRating
     * @param string $_dueDate
     * @param string $_pmtFreq
     * @param MicrobiltStructMessage_Type $_message
     * @param MicrobiltStructPaymentInfo_Type $_paymentInfo
     * @param string $_maxDelinqDt
     * @param MicrobiltStructConsumerStatement_Type $_consumerStatement
     * @param int $_derogCount
     * @param string $_origCreditor
     * @param string $_soldToCreditor
     * @param MicrobiltStructRating_Type $_recentDelinqRating
     * @param string $_associationDt
     * @param MicrobiltEnumBoolean $_openedInLast6Months
     * @param MicrobiltStructCurrencyAmount $_availableAmt
     * @param MicrobiltEnumBoolean $_debtCounselingInd
     * @param string $_verifiedDt
     * @param MicrobiltStructMessage_Type $_closureReason
     * @param MicrobiltStructCompAmt_Type $_balanceAmt
     * @return MicrobiltStructLiability_Type
     */
    public function __construct($_acctId = NULL,$_orgInfo = NULL,$_reviewReq = NULL,$_openedDt = NULL,$_closed = NULL,$_closedDt = NULL,$_paidDt = NULL,$_reportedDt = NULL,$_ownershipType = NULL,$_acctStatus = NULL,$_statusDt = NULL,$_acctType = NULL,$_balanceDt = NULL,$_creditLimitAmt = NULL,$_balloonPmtAmt = NULL,$_chargeOffAmt = NULL,$_loanType = NULL,$_collateralDesc = NULL,$_origLoanAmt = NULL,$_disputeInd = NULL,$_derogInd = NULL,$_currentRating = NULL,$_mOP = NULL,$_lastActivityDt = NULL,$_highBalanceAmt = NULL,$_highCreditAmt = NULL,$_lateCount30 = NULL,$_lateCount60 = NULL,$_lateCount90 = NULL,$_lateCount120 = NULL,$_pmtPattern = NULL,$_pastDueAmt = NULL,$_unpaidBalanceAmt = NULL,$_actualPmtAmt = NULL,$_estimatedPmtAmt = NULL,$_scheduledPmtAmt = NULL,$_monthsReviewed = NULL,$_pmtStatus = NULL,$_terms = NULL,$_maxDelinqRating = NULL,$_mostRecentRating = NULL,$_dueDate = NULL,$_pmtFreq = NULL,$_message = NULL,$_paymentInfo = NULL,$_maxDelinqDt = NULL,$_consumerStatement = NULL,$_derogCount = NULL,$_origCreditor = NULL,$_soldToCreditor = NULL,$_recentDelinqRating = NULL,$_associationDt = NULL,$_openedInLast6Months = NULL,$_availableAmt = NULL,$_debtCounselingInd = NULL,$_verifiedDt = NULL,$_closureReason = NULL,$_balanceAmt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AcctId'=>$_acctId,'OrgInfo'=>$_orgInfo,'ReviewReq'=>$_reviewReq,'OpenedDt'=>$_openedDt,'Closed'=>$_closed,'ClosedDt'=>$_closedDt,'PaidDt'=>$_paidDt,'ReportedDt'=>$_reportedDt,'OwnershipType'=>$_ownershipType,'AcctStatus'=>$_acctStatus,'StatusDt'=>$_statusDt,'AcctType'=>$_acctType,'BalanceDt'=>$_balanceDt,'CreditLimitAmt'=>$_creditLimitAmt,'BalloonPmtAmt'=>$_balloonPmtAmt,'ChargeOffAmt'=>$_chargeOffAmt,'LoanType'=>$_loanType,'CollateralDesc'=>$_collateralDesc,'OrigLoanAmt'=>$_origLoanAmt,'DisputeInd'=>$_disputeInd,'DerogInd'=>$_derogInd,'CurrentRating'=>$_currentRating,'MOP'=>$_mOP,'LastActivityDt'=>$_lastActivityDt,'HighBalanceAmt'=>$_highBalanceAmt,'HighCreditAmt'=>$_highCreditAmt,'LateCount30'=>$_lateCount30,'LateCount60'=>$_lateCount60,'LateCount90'=>$_lateCount90,'LateCount120'=>$_lateCount120,'PmtPattern'=>$_pmtPattern,'PastDueAmt'=>$_pastDueAmt,'UnpaidBalanceAmt'=>$_unpaidBalanceAmt,'ActualPmtAmt'=>$_actualPmtAmt,'EstimatedPmtAmt'=>$_estimatedPmtAmt,'ScheduledPmtAmt'=>$_scheduledPmtAmt,'MonthsReviewed'=>$_monthsReviewed,'PmtStatus'=>$_pmtStatus,'Terms'=>$_terms,'MaxDelinqRating'=>$_maxDelinqRating,'MostRecentRating'=>$_mostRecentRating,'DueDate'=>$_dueDate,'PmtFreq'=>$_pmtFreq,'Message'=>$_message,'PaymentInfo'=>$_paymentInfo,'MaxDelinqDt'=>$_maxDelinqDt,'ConsumerStatement'=>$_consumerStatement,'DerogCount'=>$_derogCount,'OrigCreditor'=>$_origCreditor,'SoldToCreditor'=>$_soldToCreditor,'RecentDelinqRating'=>$_recentDelinqRating,'AssociationDt'=>$_associationDt,'OpenedInLast6Months'=>$_openedInLast6Months,'AvailableAmt'=>$_availableAmt,'DebtCounselingInd'=>$_debtCounselingInd,'VerifiedDt'=>$_verifiedDt,'ClosureReason'=>$_closureReason,'BalanceAmt'=>$_balanceAmt),false);
    }
    /**
     * Get AcctId value
     * @return string|null
     */
    public function getAcctId()
    {
        return $this->AcctId;
    }
    /**
     * Set AcctId value
     * @param string $_acctId the AcctId
     * @return string
     */
    public function setAcctId($_acctId)
    {
        return ($this->AcctId = $_acctId);
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
     * Get OpenedDt value
     * @return string|null
     */
    public function getOpenedDt()
    {
        return $this->OpenedDt;
    }
    /**
     * Set OpenedDt value
     * @param string $_openedDt the OpenedDt
     * @return string
     */
    public function setOpenedDt($_openedDt)
    {
        return ($this->OpenedDt = $_openedDt);
    }
    /**
     * Get Closed value
     * @return MicrobiltEnumBoolean|null
     */
    public function getClosed()
    {
        return $this->Closed;
    }
    /**
     * Set Closed value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_closed the Closed
     * @return MicrobiltEnumBoolean
     */
    public function setClosed($_closed)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_closed))
        {
            return false;
        }
        return ($this->Closed = $_closed);
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
     * Get AcctStatus value
     * @return string|null
     */
    public function getAcctStatus()
    {
        return $this->AcctStatus;
    }
    /**
     * Set AcctStatus value
     * @param string $_acctStatus the AcctStatus
     * @return string
     */
    public function setAcctStatus($_acctStatus)
    {
        return ($this->AcctStatus = $_acctStatus);
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
     * Get AcctType value
     * @return string|null
     */
    public function getAcctType()
    {
        return $this->AcctType;
    }
    /**
     * Set AcctType value
     * @param string $_acctType the AcctType
     * @return string
     */
    public function setAcctType($_acctType)
    {
        return ($this->AcctType = $_acctType);
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
     * Get CreditLimitAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getCreditLimitAmt()
    {
        return $this->CreditLimitAmt;
    }
    /**
     * Set CreditLimitAmt value
     * @param MicrobiltStructCurrencyAmount $_creditLimitAmt the CreditLimitAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setCreditLimitAmt($_creditLimitAmt)
    {
        return ($this->CreditLimitAmt = $_creditLimitAmt);
    }
    /**
     * Get BalloonPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getBalloonPmtAmt()
    {
        return $this->BalloonPmtAmt;
    }
    /**
     * Set BalloonPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_balloonPmtAmt the BalloonPmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setBalloonPmtAmt($_balloonPmtAmt)
    {
        return ($this->BalloonPmtAmt = $_balloonPmtAmt);
    }
    /**
     * Get ChargeOffAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getChargeOffAmt()
    {
        return $this->ChargeOffAmt;
    }
    /**
     * Set ChargeOffAmt value
     * @param MicrobiltStructCurrencyAmount $_chargeOffAmt the ChargeOffAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setChargeOffAmt($_chargeOffAmt)
    {
        return ($this->ChargeOffAmt = $_chargeOffAmt);
    }
    /**
     * Get LoanType value
     * @return string|null
     */
    public function getLoanType()
    {
        return $this->LoanType;
    }
    /**
     * Set LoanType value
     * @param string $_loanType the LoanType
     * @return string
     */
    public function setLoanType($_loanType)
    {
        return ($this->LoanType = $_loanType);
    }
    /**
     * Get CollateralDesc value
     * @return string|null
     */
    public function getCollateralDesc()
    {
        return $this->CollateralDesc;
    }
    /**
     * Set CollateralDesc value
     * @param string $_collateralDesc the CollateralDesc
     * @return string
     */
    public function setCollateralDesc($_collateralDesc)
    {
        return ($this->CollateralDesc = $_collateralDesc);
    }
    /**
     * Get OrigLoanAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getOrigLoanAmt()
    {
        return $this->OrigLoanAmt;
    }
    /**
     * Set OrigLoanAmt value
     * @param MicrobiltStructCurrencyAmount $_origLoanAmt the OrigLoanAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setOrigLoanAmt($_origLoanAmt)
    {
        return ($this->OrigLoanAmt = $_origLoanAmt);
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
     * Get CurrentRating value
     * @return MicrobiltStructRating_Type|null
     */
    public function getCurrentRating()
    {
        return $this->CurrentRating;
    }
    /**
     * Set CurrentRating value
     * @param MicrobiltStructRating_Type $_currentRating the CurrentRating
     * @return MicrobiltStructRating_Type
     */
    public function setCurrentRating($_currentRating)
    {
        return ($this->CurrentRating = $_currentRating);
    }
    /**
     * Get MOP value
     * @return string|null
     */
    public function getMOP()
    {
        return $this->MOP;
    }
    /**
     * Set MOP value
     * @param string $_mOP the MOP
     * @return string
     */
    public function setMOP($_mOP)
    {
        return ($this->MOP = $_mOP);
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
     * Get HighBalanceAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getHighBalanceAmt()
    {
        return $this->HighBalanceAmt;
    }
    /**
     * Set HighBalanceAmt value
     * @param MicrobiltStructCurrencyAmount $_highBalanceAmt the HighBalanceAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setHighBalanceAmt($_highBalanceAmt)
    {
        return ($this->HighBalanceAmt = $_highBalanceAmt);
    }
    /**
     * Get HighCreditAmt value
     * @return MicrobiltStructCompAmt_Type|null
     */
    public function getHighCreditAmt()
    {
        return $this->HighCreditAmt;
    }
    /**
     * Set HighCreditAmt value
     * @param MicrobiltStructCompAmt_Type $_highCreditAmt the HighCreditAmt
     * @return MicrobiltStructCompAmt_Type
     */
    public function setHighCreditAmt($_highCreditAmt)
    {
        return ($this->HighCreditAmt = $_highCreditAmt);
    }
    /**
     * Get LateCount30 value
     * @return int|null
     */
    public function getLateCount30()
    {
        return $this->LateCount30;
    }
    /**
     * Set LateCount30 value
     * @param int $_lateCount30 the LateCount30
     * @return int
     */
    public function setLateCount30($_lateCount30)
    {
        return ($this->LateCount30 = $_lateCount30);
    }
    /**
     * Get LateCount60 value
     * @return int|null
     */
    public function getLateCount60()
    {
        return $this->LateCount60;
    }
    /**
     * Set LateCount60 value
     * @param int $_lateCount60 the LateCount60
     * @return int
     */
    public function setLateCount60($_lateCount60)
    {
        return ($this->LateCount60 = $_lateCount60);
    }
    /**
     * Get LateCount90 value
     * @return int|null
     */
    public function getLateCount90()
    {
        return $this->LateCount90;
    }
    /**
     * Set LateCount90 value
     * @param int $_lateCount90 the LateCount90
     * @return int
     */
    public function setLateCount90($_lateCount90)
    {
        return ($this->LateCount90 = $_lateCount90);
    }
    /**
     * Get LateCount120 value
     * @return int|null
     */
    public function getLateCount120()
    {
        return $this->LateCount120;
    }
    /**
     * Set LateCount120 value
     * @param int $_lateCount120 the LateCount120
     * @return int
     */
    public function setLateCount120($_lateCount120)
    {
        return ($this->LateCount120 = $_lateCount120);
    }
    /**
     * Get PmtPattern value
     * @return string|null
     */
    public function getPmtPattern()
    {
        return $this->PmtPattern;
    }
    /**
     * Set PmtPattern value
     * @param string $_pmtPattern the PmtPattern
     * @return string
     */
    public function setPmtPattern($_pmtPattern)
    {
        return ($this->PmtPattern = $_pmtPattern);
    }
    /**
     * Get PastDueAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getPastDueAmt()
    {
        return $this->PastDueAmt;
    }
    /**
     * Set PastDueAmt value
     * @param MicrobiltStructCurrencyAmount $_pastDueAmt the PastDueAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setPastDueAmt($_pastDueAmt)
    {
        return ($this->PastDueAmt = $_pastDueAmt);
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
     * Get ActualPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getActualPmtAmt()
    {
        return $this->ActualPmtAmt;
    }
    /**
     * Set ActualPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_actualPmtAmt the ActualPmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setActualPmtAmt($_actualPmtAmt)
    {
        return ($this->ActualPmtAmt = $_actualPmtAmt);
    }
    /**
     * Get EstimatedPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getEstimatedPmtAmt()
    {
        return $this->EstimatedPmtAmt;
    }
    /**
     * Set EstimatedPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_estimatedPmtAmt the EstimatedPmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setEstimatedPmtAmt($_estimatedPmtAmt)
    {
        return ($this->EstimatedPmtAmt = $_estimatedPmtAmt);
    }
    /**
     * Get ScheduledPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getScheduledPmtAmt()
    {
        return $this->ScheduledPmtAmt;
    }
    /**
     * Set ScheduledPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_scheduledPmtAmt the ScheduledPmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setScheduledPmtAmt($_scheduledPmtAmt)
    {
        return ($this->ScheduledPmtAmt = $_scheduledPmtAmt);
    }
    /**
     * Get MonthsReviewed value
     * @return int|null
     */
    public function getMonthsReviewed()
    {
        return $this->MonthsReviewed;
    }
    /**
     * Set MonthsReviewed value
     * @param int $_monthsReviewed the MonthsReviewed
     * @return int
     */
    public function setMonthsReviewed($_monthsReviewed)
    {
        return ($this->MonthsReviewed = $_monthsReviewed);
    }
    /**
     * Get PmtStatus value
     * @return string|null
     */
    public function getPmtStatus()
    {
        return $this->PmtStatus;
    }
    /**
     * Set PmtStatus value
     * @param string $_pmtStatus the PmtStatus
     * @return string
     */
    public function setPmtStatus($_pmtStatus)
    {
        return ($this->PmtStatus = $_pmtStatus);
    }
    /**
     * Get Terms value
     * @return string|null
     */
    public function getTerms()
    {
        return $this->Terms;
    }
    /**
     * Set Terms value
     * @param string $_terms the Terms
     * @return string
     */
    public function setTerms($_terms)
    {
        return ($this->Terms = $_terms);
    }
    /**
     * Get MaxDelinqRating value
     * @return MicrobiltStructRating_Type|null
     */
    public function getMaxDelinqRating()
    {
        return $this->MaxDelinqRating;
    }
    /**
     * Set MaxDelinqRating value
     * @param MicrobiltStructRating_Type $_maxDelinqRating the MaxDelinqRating
     * @return MicrobiltStructRating_Type
     */
    public function setMaxDelinqRating($_maxDelinqRating)
    {
        return ($this->MaxDelinqRating = $_maxDelinqRating);
    }
    /**
     * Get MostRecentRating value
     * @return MicrobiltStructRating_Type|null
     */
    public function getMostRecentRating()
    {
        return $this->MostRecentRating;
    }
    /**
     * Set MostRecentRating value
     * @param MicrobiltStructRating_Type $_mostRecentRating the MostRecentRating
     * @return MicrobiltStructRating_Type
     */
    public function setMostRecentRating($_mostRecentRating)
    {
        return ($this->MostRecentRating = $_mostRecentRating);
    }
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $_dueDate the DueDate
     * @return string
     */
    public function setDueDate($_dueDate)
    {
        return ($this->DueDate = $_dueDate);
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
     * Get PaymentInfo value
     * @return MicrobiltStructPaymentInfo_Type|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @param MicrobiltStructPaymentInfo_Type $_paymentInfo the PaymentInfo
     * @return MicrobiltStructPaymentInfo_Type
     */
    public function setPaymentInfo($_paymentInfo)
    {
        return ($this->PaymentInfo = $_paymentInfo);
    }
    /**
     * Get MaxDelinqDt value
     * @return string|null
     */
    public function getMaxDelinqDt()
    {
        return $this->MaxDelinqDt;
    }
    /**
     * Set MaxDelinqDt value
     * @param string $_maxDelinqDt the MaxDelinqDt
     * @return string
     */
    public function setMaxDelinqDt($_maxDelinqDt)
    {
        return ($this->MaxDelinqDt = $_maxDelinqDt);
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
     * Get DerogCount value
     * @return int|null
     */
    public function getDerogCount()
    {
        return $this->DerogCount;
    }
    /**
     * Set DerogCount value
     * @param int $_derogCount the DerogCount
     * @return int
     */
    public function setDerogCount($_derogCount)
    {
        return ($this->DerogCount = $_derogCount);
    }
    /**
     * Get OrigCreditor value
     * @return string|null
     */
    public function getOrigCreditor()
    {
        return $this->OrigCreditor;
    }
    /**
     * Set OrigCreditor value
     * @param string $_origCreditor the OrigCreditor
     * @return string
     */
    public function setOrigCreditor($_origCreditor)
    {
        return ($this->OrigCreditor = $_origCreditor);
    }
    /**
     * Get SoldToCreditor value
     * @return string|null
     */
    public function getSoldToCreditor()
    {
        return $this->SoldToCreditor;
    }
    /**
     * Set SoldToCreditor value
     * @param string $_soldToCreditor the SoldToCreditor
     * @return string
     */
    public function setSoldToCreditor($_soldToCreditor)
    {
        return ($this->SoldToCreditor = $_soldToCreditor);
    }
    /**
     * Get RecentDelinqRating value
     * @return MicrobiltStructRating_Type|null
     */
    public function getRecentDelinqRating()
    {
        return $this->RecentDelinqRating;
    }
    /**
     * Set RecentDelinqRating value
     * @param MicrobiltStructRating_Type $_recentDelinqRating the RecentDelinqRating
     * @return MicrobiltStructRating_Type
     */
    public function setRecentDelinqRating($_recentDelinqRating)
    {
        return ($this->RecentDelinqRating = $_recentDelinqRating);
    }
    /**
     * Get AssociationDt value
     * @return string|null
     */
    public function getAssociationDt()
    {
        return $this->AssociationDt;
    }
    /**
     * Set AssociationDt value
     * @param string $_associationDt the AssociationDt
     * @return string
     */
    public function setAssociationDt($_associationDt)
    {
        return ($this->AssociationDt = $_associationDt);
    }
    /**
     * Get OpenedInLast6Months value
     * @return MicrobiltEnumBoolean|null
     */
    public function getOpenedInLast6Months()
    {
        return $this->OpenedInLast6Months;
    }
    /**
     * Set OpenedInLast6Months value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_openedInLast6Months the OpenedInLast6Months
     * @return MicrobiltEnumBoolean
     */
    public function setOpenedInLast6Months($_openedInLast6Months)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_openedInLast6Months))
        {
            return false;
        }
        return ($this->OpenedInLast6Months = $_openedInLast6Months);
    }
    /**
     * Get AvailableAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getAvailableAmt()
    {
        return $this->AvailableAmt;
    }
    /**
     * Set AvailableAmt value
     * @param MicrobiltStructCurrencyAmount $_availableAmt the AvailableAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setAvailableAmt($_availableAmt)
    {
        return ($this->AvailableAmt = $_availableAmt);
    }
    /**
     * Get DebtCounselingInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getDebtCounselingInd()
    {
        return $this->DebtCounselingInd;
    }
    /**
     * Set DebtCounselingInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_debtCounselingInd the DebtCounselingInd
     * @return MicrobiltEnumBoolean
     */
    public function setDebtCounselingInd($_debtCounselingInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_debtCounselingInd))
        {
            return false;
        }
        return ($this->DebtCounselingInd = $_debtCounselingInd);
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
     * Get ClosureReason value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getClosureReason()
    {
        return $this->ClosureReason;
    }
    /**
     * Set ClosureReason value
     * @param MicrobiltStructMessage_Type $_closureReason the ClosureReason
     * @return MicrobiltStructMessage_Type
     */
    public function setClosureReason($_closureReason)
    {
        return ($this->ClosureReason = $_closureReason);
    }
    /**
     * Get BalanceAmt value
     * @return MicrobiltStructCompAmt_Type|null
     */
    public function getBalanceAmt()
    {
        return $this->BalanceAmt;
    }
    /**
     * Set BalanceAmt value
     * @param MicrobiltStructCompAmt_Type $_balanceAmt the BalanceAmt
     * @return MicrobiltStructCompAmt_Type
     */
    public function setBalanceAmt($_balanceAmt)
    {
        return ($this->BalanceAmt = $_balanceAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructLiability_Type
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
