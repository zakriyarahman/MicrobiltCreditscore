<?php

namespace Zakriyarahman\Microbilt\Summary_\Type;

/**
 * File for class MicrobiltStructSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSummary_Type originally named Summary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSummary_Type extends MicrobiltStructAggregate
{
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The ClosedAccts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $ClosedAccts;
    /**
     * The CollCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $CollCount;
    /**
     * The CollTransferred
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $CollTransferred;
    /**
     * The InqCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $InqCount;
    /**
     * The EmpInqCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $EmpInqCount;
    /**
     * The HighCreditAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $HighCreditAmt;
    /**
     * The InstAccts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $InstAccts;
    /**
     * The MortgageAccts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $MortgageAccts;
    /**
     * The OpenAccts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $OpenAccts;
    /**
     * The PaidAccts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $PaidAccts;
    /**
     * The RevAccts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $RevAccts;
    /**
     * The RevAvailPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $RevAvailPercent;
    /**
     * The PublicRecs
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $PublicRecs;
    /**
     * The OtherTrades
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $OtherTrades;
    /**
     * The NowDelinqDerog
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NowDelinqDerog;
    /**
     * The WasDelinqDerog
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $WasDelinqDerog;
    /**
     * The MostRecentTradeDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MostRecentTradeDt;
    /**
     * The OldestTradeDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OldestTradeDt;
    /**
     * The PastDueBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $PastDueBalAmt;
    /**
     * The PaymentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $PaymentAmt;
    /**
     * The RealEstateBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $RealEstateBalAmt;
    /**
     * The RealEstatePmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $RealEstatePmtAmt;
    /**
     * The TotalCreditLimitAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $TotalCreditLimitAmt;
    /**
     * The DisputedTrades
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $DisputedTrades;
    /**
     * The TotalTrades
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $TotalTrades;
    /**
     * The CurrentTrades
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $CurrentTrades;
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
     * The InqWithin6Months
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $InqWithin6Months;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The PastDueCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $PastDueCount;
    /**
     * The UnratedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $UnratedCount;
    /**
     * The AverageMonthlyPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $AverageMonthlyPmtAmt;
    /**
     * The DerogCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $DerogCount;
    /**
     * The OtherAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructOtherAmounts_Type
     */
    public $OtherAmounts;
    /**
     * The OtherPercentages
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructOtherPercentages_Type
     */
    public $OtherPercentages;
    /**
     * Constructor method for Summary_Type
     * @see parent::__construct()
     * @param MicrobiltStructCompAmt_Type $_balanceAmt
     * @param int $_closedAccts
     * @param int $_collCount
     * @param int $_collTransferred
     * @param int $_inqCount
     * @param int $_empInqCount
     * @param MicrobiltStructCompAmt_Type $_highCreditAmt
     * @param int $_instAccts
     * @param int $_mortgageAccts
     * @param int $_openAccts
     * @param int $_paidAccts
     * @param int $_revAccts
     * @param int $_revAvailPercent
     * @param int $_publicRecs
     * @param int $_otherTrades
     * @param int $_nowDelinqDerog
     * @param int $_wasDelinqDerog
     * @param string $_mostRecentTradeDt
     * @param string $_oldestTradeDt
     * @param MicrobiltStructCompAmt_Type $_pastDueBalAmt
     * @param MicrobiltStructCompAmt_Type $_paymentAmt
     * @param MicrobiltStructCompAmt_Type $_realEstateBalAmt
     * @param MicrobiltStructCompAmt_Type $_realEstatePmtAmt
     * @param MicrobiltStructCompAmt_Type $_totalCreditLimitAmt
     * @param int $_disputedTrades
     * @param int $_totalTrades
     * @param int $_currentTrades
     * @param int $_lateCount30
     * @param int $_lateCount60
     * @param int $_lateCount90
     * @param int $_inqWithin6Months
     * @param MicrobiltStructMessage_Type $_message
     * @param int $_pastDueCount
     * @param int $_unratedCount
     * @param MicrobiltStructCurrencyAmount $_averageMonthlyPmtAmt
     * @param int $_derogCount
     * @param MicrobiltStructOtherAmounts_Type $_otherAmounts
     * @param MicrobiltStructOtherPercentages_Type $_otherPercentages
     * @return MicrobiltStructSummary_Type
     */
    public function __construct($_balanceAmt = NULL,$_closedAccts = NULL,$_collCount = NULL,$_collTransferred = NULL,$_inqCount = NULL,$_empInqCount = NULL,$_highCreditAmt = NULL,$_instAccts = NULL,$_mortgageAccts = NULL,$_openAccts = NULL,$_paidAccts = NULL,$_revAccts = NULL,$_revAvailPercent = NULL,$_publicRecs = NULL,$_otherTrades = NULL,$_nowDelinqDerog = NULL,$_wasDelinqDerog = NULL,$_mostRecentTradeDt = NULL,$_oldestTradeDt = NULL,$_pastDueBalAmt = NULL,$_paymentAmt = NULL,$_realEstateBalAmt = NULL,$_realEstatePmtAmt = NULL,$_totalCreditLimitAmt = NULL,$_disputedTrades = NULL,$_totalTrades = NULL,$_currentTrades = NULL,$_lateCount30 = NULL,$_lateCount60 = NULL,$_lateCount90 = NULL,$_inqWithin6Months = NULL,$_message = NULL,$_pastDueCount = NULL,$_unratedCount = NULL,$_averageMonthlyPmtAmt = NULL,$_derogCount = NULL,$_otherAmounts = NULL,$_otherPercentages = NULL)
    {
        MicrobiltWsdlClass::__construct(array('BalanceAmt'=>$_balanceAmt,'ClosedAccts'=>$_closedAccts,'CollCount'=>$_collCount,'CollTransferred'=>$_collTransferred,'InqCount'=>$_inqCount,'EmpInqCount'=>$_empInqCount,'HighCreditAmt'=>$_highCreditAmt,'InstAccts'=>$_instAccts,'MortgageAccts'=>$_mortgageAccts,'OpenAccts'=>$_openAccts,'PaidAccts'=>$_paidAccts,'RevAccts'=>$_revAccts,'RevAvailPercent'=>$_revAvailPercent,'PublicRecs'=>$_publicRecs,'OtherTrades'=>$_otherTrades,'NowDelinqDerog'=>$_nowDelinqDerog,'WasDelinqDerog'=>$_wasDelinqDerog,'MostRecentTradeDt'=>$_mostRecentTradeDt,'OldestTradeDt'=>$_oldestTradeDt,'PastDueBalAmt'=>$_pastDueBalAmt,'PaymentAmt'=>$_paymentAmt,'RealEstateBalAmt'=>$_realEstateBalAmt,'RealEstatePmtAmt'=>$_realEstatePmtAmt,'TotalCreditLimitAmt'=>$_totalCreditLimitAmt,'DisputedTrades'=>$_disputedTrades,'TotalTrades'=>$_totalTrades,'CurrentTrades'=>$_currentTrades,'LateCount30'=>$_lateCount30,'LateCount60'=>$_lateCount60,'LateCount90'=>$_lateCount90,'InqWithin6Months'=>$_inqWithin6Months,'Message'=>$_message,'PastDueCount'=>$_pastDueCount,'UnratedCount'=>$_unratedCount,'AverageMonthlyPmtAmt'=>$_averageMonthlyPmtAmt,'DerogCount'=>$_derogCount,'OtherAmounts'=>$_otherAmounts,'OtherPercentages'=>$_otherPercentages),false);
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
     * Get ClosedAccts value
     * @return int|null
     */
    public function getClosedAccts()
    {
        return $this->ClosedAccts;
    }
    /**
     * Set ClosedAccts value
     * @param int $_closedAccts the ClosedAccts
     * @return int
     */
    public function setClosedAccts($_closedAccts)
    {
        return ($this->ClosedAccts = $_closedAccts);
    }
    /**
     * Get CollCount value
     * @return int|null
     */
    public function getCollCount()
    {
        return $this->CollCount;
    }
    /**
     * Set CollCount value
     * @param int $_collCount the CollCount
     * @return int
     */
    public function setCollCount($_collCount)
    {
        return ($this->CollCount = $_collCount);
    }
    /**
     * Get CollTransferred value
     * @return int|null
     */
    public function getCollTransferred()
    {
        return $this->CollTransferred;
    }
    /**
     * Set CollTransferred value
     * @param int $_collTransferred the CollTransferred
     * @return int
     */
    public function setCollTransferred($_collTransferred)
    {
        return ($this->CollTransferred = $_collTransferred);
    }
    /**
     * Get InqCount value
     * @return int|null
     */
    public function getInqCount()
    {
        return $this->InqCount;
    }
    /**
     * Set InqCount value
     * @param int $_inqCount the InqCount
     * @return int
     */
    public function setInqCount($_inqCount)
    {
        return ($this->InqCount = $_inqCount);
    }
    /**
     * Get EmpInqCount value
     * @return int|null
     */
    public function getEmpInqCount()
    {
        return $this->EmpInqCount;
    }
    /**
     * Set EmpInqCount value
     * @param int $_empInqCount the EmpInqCount
     * @return int
     */
    public function setEmpInqCount($_empInqCount)
    {
        return ($this->EmpInqCount = $_empInqCount);
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
     * Get InstAccts value
     * @return int|null
     */
    public function getInstAccts()
    {
        return $this->InstAccts;
    }
    /**
     * Set InstAccts value
     * @param int $_instAccts the InstAccts
     * @return int
     */
    public function setInstAccts($_instAccts)
    {
        return ($this->InstAccts = $_instAccts);
    }
    /**
     * Get MortgageAccts value
     * @return int|null
     */
    public function getMortgageAccts()
    {
        return $this->MortgageAccts;
    }
    /**
     * Set MortgageAccts value
     * @param int $_mortgageAccts the MortgageAccts
     * @return int
     */
    public function setMortgageAccts($_mortgageAccts)
    {
        return ($this->MortgageAccts = $_mortgageAccts);
    }
    /**
     * Get OpenAccts value
     * @return int|null
     */
    public function getOpenAccts()
    {
        return $this->OpenAccts;
    }
    /**
     * Set OpenAccts value
     * @param int $_openAccts the OpenAccts
     * @return int
     */
    public function setOpenAccts($_openAccts)
    {
        return ($this->OpenAccts = $_openAccts);
    }
    /**
     * Get PaidAccts value
     * @return int|null
     */
    public function getPaidAccts()
    {
        return $this->PaidAccts;
    }
    /**
     * Set PaidAccts value
     * @param int $_paidAccts the PaidAccts
     * @return int
     */
    public function setPaidAccts($_paidAccts)
    {
        return ($this->PaidAccts = $_paidAccts);
    }
    /**
     * Get RevAccts value
     * @return int|null
     */
    public function getRevAccts()
    {
        return $this->RevAccts;
    }
    /**
     * Set RevAccts value
     * @param int $_revAccts the RevAccts
     * @return int
     */
    public function setRevAccts($_revAccts)
    {
        return ($this->RevAccts = $_revAccts);
    }
    /**
     * Get RevAvailPercent value
     * @return int|null
     */
    public function getRevAvailPercent()
    {
        return $this->RevAvailPercent;
    }
    /**
     * Set RevAvailPercent value
     * @param int $_revAvailPercent the RevAvailPercent
     * @return int
     */
    public function setRevAvailPercent($_revAvailPercent)
    {
        return ($this->RevAvailPercent = $_revAvailPercent);
    }
    /**
     * Get PublicRecs value
     * @return int|null
     */
    public function getPublicRecs()
    {
        return $this->PublicRecs;
    }
    /**
     * Set PublicRecs value
     * @param int $_publicRecs the PublicRecs
     * @return int
     */
    public function setPublicRecs($_publicRecs)
    {
        return ($this->PublicRecs = $_publicRecs);
    }
    /**
     * Get OtherTrades value
     * @return int|null
     */
    public function getOtherTrades()
    {
        return $this->OtherTrades;
    }
    /**
     * Set OtherTrades value
     * @param int $_otherTrades the OtherTrades
     * @return int
     */
    public function setOtherTrades($_otherTrades)
    {
        return ($this->OtherTrades = $_otherTrades);
    }
    /**
     * Get NowDelinqDerog value
     * @return int|null
     */
    public function getNowDelinqDerog()
    {
        return $this->NowDelinqDerog;
    }
    /**
     * Set NowDelinqDerog value
     * @param int $_nowDelinqDerog the NowDelinqDerog
     * @return int
     */
    public function setNowDelinqDerog($_nowDelinqDerog)
    {
        return ($this->NowDelinqDerog = $_nowDelinqDerog);
    }
    /**
     * Get WasDelinqDerog value
     * @return int|null
     */
    public function getWasDelinqDerog()
    {
        return $this->WasDelinqDerog;
    }
    /**
     * Set WasDelinqDerog value
     * @param int $_wasDelinqDerog the WasDelinqDerog
     * @return int
     */
    public function setWasDelinqDerog($_wasDelinqDerog)
    {
        return ($this->WasDelinqDerog = $_wasDelinqDerog);
    }
    /**
     * Get MostRecentTradeDt value
     * @return string|null
     */
    public function getMostRecentTradeDt()
    {
        return $this->MostRecentTradeDt;
    }
    /**
     * Set MostRecentTradeDt value
     * @param string $_mostRecentTradeDt the MostRecentTradeDt
     * @return string
     */
    public function setMostRecentTradeDt($_mostRecentTradeDt)
    {
        return ($this->MostRecentTradeDt = $_mostRecentTradeDt);
    }
    /**
     * Get OldestTradeDt value
     * @return string|null
     */
    public function getOldestTradeDt()
    {
        return $this->OldestTradeDt;
    }
    /**
     * Set OldestTradeDt value
     * @param string $_oldestTradeDt the OldestTradeDt
     * @return string
     */
    public function setOldestTradeDt($_oldestTradeDt)
    {
        return ($this->OldestTradeDt = $_oldestTradeDt);
    }
    /**
     * Get PastDueBalAmt value
     * @return MicrobiltStructCompAmt_Type|null
     */
    public function getPastDueBalAmt()
    {
        return $this->PastDueBalAmt;
    }
    /**
     * Set PastDueBalAmt value
     * @param MicrobiltStructCompAmt_Type $_pastDueBalAmt the PastDueBalAmt
     * @return MicrobiltStructCompAmt_Type
     */
    public function setPastDueBalAmt($_pastDueBalAmt)
    {
        return ($this->PastDueBalAmt = $_pastDueBalAmt);
    }
    /**
     * Get PaymentAmt value
     * @return MicrobiltStructCompAmt_Type|null
     */
    public function getPaymentAmt()
    {
        return $this->PaymentAmt;
    }
    /**
     * Set PaymentAmt value
     * @param MicrobiltStructCompAmt_Type $_paymentAmt the PaymentAmt
     * @return MicrobiltStructCompAmt_Type
     */
    public function setPaymentAmt($_paymentAmt)
    {
        return ($this->PaymentAmt = $_paymentAmt);
    }
    /**
     * Get RealEstateBalAmt value
     * @return MicrobiltStructCompAmt_Type|null
     */
    public function getRealEstateBalAmt()
    {
        return $this->RealEstateBalAmt;
    }
    /**
     * Set RealEstateBalAmt value
     * @param MicrobiltStructCompAmt_Type $_realEstateBalAmt the RealEstateBalAmt
     * @return MicrobiltStructCompAmt_Type
     */
    public function setRealEstateBalAmt($_realEstateBalAmt)
    {
        return ($this->RealEstateBalAmt = $_realEstateBalAmt);
    }
    /**
     * Get RealEstatePmtAmt value
     * @return MicrobiltStructCompAmt_Type|null
     */
    public function getRealEstatePmtAmt()
    {
        return $this->RealEstatePmtAmt;
    }
    /**
     * Set RealEstatePmtAmt value
     * @param MicrobiltStructCompAmt_Type $_realEstatePmtAmt the RealEstatePmtAmt
     * @return MicrobiltStructCompAmt_Type
     */
    public function setRealEstatePmtAmt($_realEstatePmtAmt)
    {
        return ($this->RealEstatePmtAmt = $_realEstatePmtAmt);
    }
    /**
     * Get TotalCreditLimitAmt value
     * @return MicrobiltStructCompAmt_Type|null
     */
    public function getTotalCreditLimitAmt()
    {
        return $this->TotalCreditLimitAmt;
    }
    /**
     * Set TotalCreditLimitAmt value
     * @param MicrobiltStructCompAmt_Type $_totalCreditLimitAmt the TotalCreditLimitAmt
     * @return MicrobiltStructCompAmt_Type
     */
    public function setTotalCreditLimitAmt($_totalCreditLimitAmt)
    {
        return ($this->TotalCreditLimitAmt = $_totalCreditLimitAmt);
    }
    /**
     * Get DisputedTrades value
     * @return int|null
     */
    public function getDisputedTrades()
    {
        return $this->DisputedTrades;
    }
    /**
     * Set DisputedTrades value
     * @param int $_disputedTrades the DisputedTrades
     * @return int
     */
    public function setDisputedTrades($_disputedTrades)
    {
        return ($this->DisputedTrades = $_disputedTrades);
    }
    /**
     * Get TotalTrades value
     * @return int|null
     */
    public function getTotalTrades()
    {
        return $this->TotalTrades;
    }
    /**
     * Set TotalTrades value
     * @param int $_totalTrades the TotalTrades
     * @return int
     */
    public function setTotalTrades($_totalTrades)
    {
        return ($this->TotalTrades = $_totalTrades);
    }
    /**
     * Get CurrentTrades value
     * @return int|null
     */
    public function getCurrentTrades()
    {
        return $this->CurrentTrades;
    }
    /**
     * Set CurrentTrades value
     * @param int $_currentTrades the CurrentTrades
     * @return int
     */
    public function setCurrentTrades($_currentTrades)
    {
        return ($this->CurrentTrades = $_currentTrades);
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
     * Get InqWithin6Months value
     * @return int|null
     */
    public function getInqWithin6Months()
    {
        return $this->InqWithin6Months;
    }
    /**
     * Set InqWithin6Months value
     * @param int $_inqWithin6Months the InqWithin6Months
     * @return int
     */
    public function setInqWithin6Months($_inqWithin6Months)
    {
        return ($this->InqWithin6Months = $_inqWithin6Months);
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
     * Get PastDueCount value
     * @return int|null
     */
    public function getPastDueCount()
    {
        return $this->PastDueCount;
    }
    /**
     * Set PastDueCount value
     * @param int $_pastDueCount the PastDueCount
     * @return int
     */
    public function setPastDueCount($_pastDueCount)
    {
        return ($this->PastDueCount = $_pastDueCount);
    }
    /**
     * Get UnratedCount value
     * @return int|null
     */
    public function getUnratedCount()
    {
        return $this->UnratedCount;
    }
    /**
     * Set UnratedCount value
     * @param int $_unratedCount the UnratedCount
     * @return int
     */
    public function setUnratedCount($_unratedCount)
    {
        return ($this->UnratedCount = $_unratedCount);
    }
    /**
     * Get AverageMonthlyPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getAverageMonthlyPmtAmt()
    {
        return $this->AverageMonthlyPmtAmt;
    }
    /**
     * Set AverageMonthlyPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_averageMonthlyPmtAmt the AverageMonthlyPmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setAverageMonthlyPmtAmt($_averageMonthlyPmtAmt)
    {
        return ($this->AverageMonthlyPmtAmt = $_averageMonthlyPmtAmt);
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
     * Get OtherAmounts value
     * @return MicrobiltStructOtherAmounts_Type|null
     */
    public function getOtherAmounts()
    {
        return $this->OtherAmounts;
    }
    /**
     * Set OtherAmounts value
     * @param MicrobiltStructOtherAmounts_Type $_otherAmounts the OtherAmounts
     * @return MicrobiltStructOtherAmounts_Type
     */
    public function setOtherAmounts($_otherAmounts)
    {
        return ($this->OtherAmounts = $_otherAmounts);
    }
    /**
     * Get OtherPercentages value
     * @return MicrobiltStructOtherPercentages_Type|null
     */
    public function getOtherPercentages()
    {
        return $this->OtherPercentages;
    }
    /**
     * Set OtherPercentages value
     * @param MicrobiltStructOtherPercentages_Type $_otherPercentages the OtherPercentages
     * @return MicrobiltStructOtherPercentages_Type
     */
    public function setOtherPercentages($_otherPercentages)
    {
        return ($this->OtherPercentages = $_otherPercentages);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructSummary_Type
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
