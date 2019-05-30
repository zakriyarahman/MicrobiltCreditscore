<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructFinancialSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructFinancialSummary_Type originally named FinancialSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructFinancialSummary_Type extends MicrobiltStructAggregate
{
    /**
     * The SalesAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $SalesAmt;
    /**
     * The NetIncomeAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $NetIncomeAmt;
    /**
     * The SummaryDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SummaryDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The DtLastUpdated
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $DtLastUpdated;
    /**
     * The SummaryItem
     * @var MicrobiltStructSummaryItem
     */
    public $SummaryItem;
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructDateRange_Type
     */
    public $DateRange;
    /**
     * The SummaryCharacteristics
     * @var MicrobiltStructSummaryCharacteristics
     */
    public $SummaryCharacteristics;
    /**
     * The LastTrendedYr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastTrendedYr;
    /**
     * The LastTrendedQtr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastTrendedQtr;
    /**
     * Constructor method for FinancialSummary_Type
     * @see parent::__construct()
     * @param MicrobiltStructCurrencyAmount $_salesAmt
     * @param MicrobiltStructCurrencyAmount $_netIncomeAmt
     * @param string $_summaryDt
     * @param MicrobiltStructMessage_Type $_message
     * @param string $_dtLastUpdated
     * @param MicrobiltStructSummaryItem $_summaryItem
     * @param MicrobiltStructDateRange_Type $_dateRange
     * @param MicrobiltStructSummaryCharacteristics $_summaryCharacteristics
     * @param string $_lastTrendedYr
     * @param string $_lastTrendedQtr
     * @return MicrobiltStructFinancialSummary_Type
     */
    public function __construct($_salesAmt = NULL,$_netIncomeAmt = NULL,$_summaryDt = NULL,$_message = NULL,$_dtLastUpdated = NULL,$_summaryItem = NULL,$_dateRange = NULL,$_summaryCharacteristics = NULL,$_lastTrendedYr = NULL,$_lastTrendedQtr = NULL)
    {
        MicrobiltWsdlClass::__construct(array('SalesAmt'=>$_salesAmt,'NetIncomeAmt'=>$_netIncomeAmt,'SummaryDt'=>$_summaryDt,'Message'=>$_message,'DtLastUpdated'=>$_dtLastUpdated,'SummaryItem'=>$_summaryItem,'DateRange'=>$_dateRange,'SummaryCharacteristics'=>$_summaryCharacteristics,'LastTrendedYr'=>$_lastTrendedYr,'LastTrendedQtr'=>$_lastTrendedQtr),false);
    }
    /**
     * Get SalesAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getSalesAmt()
    {
        return $this->SalesAmt;
    }
    /**
     * Set SalesAmt value
     * @param MicrobiltStructCurrencyAmount $_salesAmt the SalesAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setSalesAmt($_salesAmt)
    {
        return ($this->SalesAmt = $_salesAmt);
    }
    /**
     * Get NetIncomeAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getNetIncomeAmt()
    {
        return $this->NetIncomeAmt;
    }
    /**
     * Set NetIncomeAmt value
     * @param MicrobiltStructCurrencyAmount $_netIncomeAmt the NetIncomeAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setNetIncomeAmt($_netIncomeAmt)
    {
        return ($this->NetIncomeAmt = $_netIncomeAmt);
    }
    /**
     * Get SummaryDt value
     * @return string|null
     */
    public function getSummaryDt()
    {
        return $this->SummaryDt;
    }
    /**
     * Set SummaryDt value
     * @param string $_summaryDt the SummaryDt
     * @return string
     */
    public function setSummaryDt($_summaryDt)
    {
        return ($this->SummaryDt = $_summaryDt);
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
     * Get DtLastUpdated value
     * @return string|null
     */
    public function getDtLastUpdated()
    {
        return $this->DtLastUpdated;
    }
    /**
     * Set DtLastUpdated value
     * @param string $_dtLastUpdated the DtLastUpdated
     * @return string
     */
    public function setDtLastUpdated($_dtLastUpdated)
    {
        return ($this->DtLastUpdated = $_dtLastUpdated);
    }
    /**
     * Get SummaryItem value
     * @return MicrobiltStructSummaryItem|null
     */
    public function getSummaryItem()
    {
        return $this->SummaryItem;
    }
    /**
     * Set SummaryItem value
     * @param MicrobiltStructSummaryItem $_summaryItem the SummaryItem
     * @return MicrobiltStructSummaryItem
     */
    public function setSummaryItem($_summaryItem)
    {
        return ($this->SummaryItem = $_summaryItem);
    }
    /**
     * Get DateRange value
     * @return MicrobiltStructDateRange_Type|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param MicrobiltStructDateRange_Type $_dateRange the DateRange
     * @return MicrobiltStructDateRange_Type
     */
    public function setDateRange($_dateRange)
    {
        return ($this->DateRange = $_dateRange);
    }
    /**
     * Get SummaryCharacteristics value
     * @return MicrobiltStructSummaryCharacteristics|null
     */
    public function getSummaryCharacteristics()
    {
        return $this->SummaryCharacteristics;
    }
    /**
     * Set SummaryCharacteristics value
     * @param MicrobiltStructSummaryCharacteristics $_summaryCharacteristics the SummaryCharacteristics
     * @return MicrobiltStructSummaryCharacteristics
     */
    public function setSummaryCharacteristics($_summaryCharacteristics)
    {
        return ($this->SummaryCharacteristics = $_summaryCharacteristics);
    }
    /**
     * Get LastTrendedYr value
     * @return string|null
     */
    public function getLastTrendedYr()
    {
        return $this->LastTrendedYr;
    }
    /**
     * Set LastTrendedYr value
     * @param string $_lastTrendedYr the LastTrendedYr
     * @return string
     */
    public function setLastTrendedYr($_lastTrendedYr)
    {
        return ($this->LastTrendedYr = $_lastTrendedYr);
    }
    /**
     * Get LastTrendedQtr value
     * @return string|null
     */
    public function getLastTrendedQtr()
    {
        return $this->LastTrendedQtr;
    }
    /**
     * Set LastTrendedQtr value
     * @param string $_lastTrendedQtr the LastTrendedQtr
     * @return string
     */
    public function setLastTrendedQtr($_lastTrendedQtr)
    {
        return ($this->LastTrendedQtr = $_lastTrendedQtr);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructFinancialSummary_Type
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
