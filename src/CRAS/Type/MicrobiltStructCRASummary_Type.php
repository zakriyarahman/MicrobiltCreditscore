<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructCRASummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCRASummary_Type originally named CRASummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCRASummary_Type extends MicrobiltStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The CRACode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CRACode;
    /**
     * The CreditObligationsReportedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $CreditObligationsReportedCount;
    /**
     * The InqCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $InqCount;
    /**
     * The MonthsSinceMostRecentInquiry
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MonthsSinceMostRecentInquiry;
    /**
     * The MonthsSinceMostRecentAdversePR
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MonthsSinceMostRecentAdversePR;
    /**
     * The MonthsSinceMostRecentCollectionAssigned
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MonthsSinceMostRecentCollectionAssigned;
    /**
     * The MonthsSinceOldestTradelineOpened
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MonthsSinceOldestTradelineOpened;
    /**
     * The MaxDelinquencyEver
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $MaxDelinquencyEver;
    /**
     * The MonthsSinceMostRecentDelinquency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MonthsSinceMostRecentDelinquency;
    /**
     * The CreditObligationsWithBalanceCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $CreditObligationsWithBalanceCount;
    /**
     * The TotalBalancesOnCRAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $TotalBalancesOnCRAmt;
    /**
     * Constructor method for CRASummary_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param string $_cRACode
     * @param int $_creditObligationsReportedCount
     * @param int $_inqCount
     * @param string $_monthsSinceMostRecentInquiry
     * @param string $_monthsSinceMostRecentAdversePR
     * @param string $_monthsSinceMostRecentCollectionAssigned
     * @param string $_monthsSinceOldestTradelineOpened
     * @param MicrobiltStructCodeDescription_Type $_maxDelinquencyEver
     * @param string $_monthsSinceMostRecentDelinquency
     * @param int $_creditObligationsWithBalanceCount
     * @param MicrobiltStructCurrencyAmount $_totalBalancesOnCRAmt
     * @return MicrobiltStructCRASummary_Type
     */
    public function __construct($_msgClass = NULL,$_cRACode = NULL,$_creditObligationsReportedCount = NULL,$_inqCount = NULL,$_monthsSinceMostRecentInquiry = NULL,$_monthsSinceMostRecentAdversePR = NULL,$_monthsSinceMostRecentCollectionAssigned = NULL,$_monthsSinceOldestTradelineOpened = NULL,$_maxDelinquencyEver = NULL,$_monthsSinceMostRecentDelinquency = NULL,$_creditObligationsWithBalanceCount = NULL,$_totalBalancesOnCRAmt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'CRACode'=>$_cRACode,'CreditObligationsReportedCount'=>$_creditObligationsReportedCount,'InqCount'=>$_inqCount,'MonthsSinceMostRecentInquiry'=>$_monthsSinceMostRecentInquiry,'MonthsSinceMostRecentAdversePR'=>$_monthsSinceMostRecentAdversePR,'MonthsSinceMostRecentCollectionAssigned'=>$_monthsSinceMostRecentCollectionAssigned,'MonthsSinceOldestTradelineOpened'=>$_monthsSinceOldestTradelineOpened,'MaxDelinquencyEver'=>$_maxDelinquencyEver,'MonthsSinceMostRecentDelinquency'=>$_monthsSinceMostRecentDelinquency,'CreditObligationsWithBalanceCount'=>$_creditObligationsWithBalanceCount,'TotalBalancesOnCRAmt'=>$_totalBalancesOnCRAmt),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get CRACode value
     * @return string|null
     */
    public function getCRACode()
    {
        return $this->CRACode;
    }
    /**
     * Set CRACode value
     * @param string $_cRACode the CRACode
     * @return string
     */
    public function setCRACode($_cRACode)
    {
        return ($this->CRACode = $_cRACode);
    }
    /**
     * Get CreditObligationsReportedCount value
     * @return int|null
     */
    public function getCreditObligationsReportedCount()
    {
        return $this->CreditObligationsReportedCount;
    }
    /**
     * Set CreditObligationsReportedCount value
     * @param int $_creditObligationsReportedCount the CreditObligationsReportedCount
     * @return int
     */
    public function setCreditObligationsReportedCount($_creditObligationsReportedCount)
    {
        return ($this->CreditObligationsReportedCount = $_creditObligationsReportedCount);
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
     * Get MonthsSinceMostRecentInquiry value
     * @return string|null
     */
    public function getMonthsSinceMostRecentInquiry()
    {
        return $this->MonthsSinceMostRecentInquiry;
    }
    /**
     * Set MonthsSinceMostRecentInquiry value
     * @param string $_monthsSinceMostRecentInquiry the MonthsSinceMostRecentInquiry
     * @return string
     */
    public function setMonthsSinceMostRecentInquiry($_monthsSinceMostRecentInquiry)
    {
        return ($this->MonthsSinceMostRecentInquiry = $_monthsSinceMostRecentInquiry);
    }
    /**
     * Get MonthsSinceMostRecentAdversePR value
     * @return string|null
     */
    public function getMonthsSinceMostRecentAdversePR()
    {
        return $this->MonthsSinceMostRecentAdversePR;
    }
    /**
     * Set MonthsSinceMostRecentAdversePR value
     * @param string $_monthsSinceMostRecentAdversePR the MonthsSinceMostRecentAdversePR
     * @return string
     */
    public function setMonthsSinceMostRecentAdversePR($_monthsSinceMostRecentAdversePR)
    {
        return ($this->MonthsSinceMostRecentAdversePR = $_monthsSinceMostRecentAdversePR);
    }
    /**
     * Get MonthsSinceMostRecentCollectionAssigned value
     * @return string|null
     */
    public function getMonthsSinceMostRecentCollectionAssigned()
    {
        return $this->MonthsSinceMostRecentCollectionAssigned;
    }
    /**
     * Set MonthsSinceMostRecentCollectionAssigned value
     * @param string $_monthsSinceMostRecentCollectionAssigned the MonthsSinceMostRecentCollectionAssigned
     * @return string
     */
    public function setMonthsSinceMostRecentCollectionAssigned($_monthsSinceMostRecentCollectionAssigned)
    {
        return ($this->MonthsSinceMostRecentCollectionAssigned = $_monthsSinceMostRecentCollectionAssigned);
    }
    /**
     * Get MonthsSinceOldestTradelineOpened value
     * @return string|null
     */
    public function getMonthsSinceOldestTradelineOpened()
    {
        return $this->MonthsSinceOldestTradelineOpened;
    }
    /**
     * Set MonthsSinceOldestTradelineOpened value
     * @param string $_monthsSinceOldestTradelineOpened the MonthsSinceOldestTradelineOpened
     * @return string
     */
    public function setMonthsSinceOldestTradelineOpened($_monthsSinceOldestTradelineOpened)
    {
        return ($this->MonthsSinceOldestTradelineOpened = $_monthsSinceOldestTradelineOpened);
    }
    /**
     * Get MaxDelinquencyEver value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getMaxDelinquencyEver()
    {
        return $this->MaxDelinquencyEver;
    }
    /**
     * Set MaxDelinquencyEver value
     * @param MicrobiltStructCodeDescription_Type $_maxDelinquencyEver the MaxDelinquencyEver
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setMaxDelinquencyEver($_maxDelinquencyEver)
    {
        return ($this->MaxDelinquencyEver = $_maxDelinquencyEver);
    }
    /**
     * Get MonthsSinceMostRecentDelinquency value
     * @return string|null
     */
    public function getMonthsSinceMostRecentDelinquency()
    {
        return $this->MonthsSinceMostRecentDelinquency;
    }
    /**
     * Set MonthsSinceMostRecentDelinquency value
     * @param string $_monthsSinceMostRecentDelinquency the MonthsSinceMostRecentDelinquency
     * @return string
     */
    public function setMonthsSinceMostRecentDelinquency($_monthsSinceMostRecentDelinquency)
    {
        return ($this->MonthsSinceMostRecentDelinquency = $_monthsSinceMostRecentDelinquency);
    }
    /**
     * Get CreditObligationsWithBalanceCount value
     * @return int|null
     */
    public function getCreditObligationsWithBalanceCount()
    {
        return $this->CreditObligationsWithBalanceCount;
    }
    /**
     * Set CreditObligationsWithBalanceCount value
     * @param int $_creditObligationsWithBalanceCount the CreditObligationsWithBalanceCount
     * @return int
     */
    public function setCreditObligationsWithBalanceCount($_creditObligationsWithBalanceCount)
    {
        return ($this->CreditObligationsWithBalanceCount = $_creditObligationsWithBalanceCount);
    }
    /**
     * Get TotalBalancesOnCRAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getTotalBalancesOnCRAmt()
    {
        return $this->TotalBalancesOnCRAmt;
    }
    /**
     * Set TotalBalancesOnCRAmt value
     * @param MicrobiltStructCurrencyAmount $_totalBalancesOnCRAmt the TotalBalancesOnCRAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setTotalBalancesOnCRAmt($_totalBalancesOnCRAmt)
    {
        return ($this->TotalBalancesOnCRAmt = $_totalBalancesOnCRAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCRASummary_Type
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
