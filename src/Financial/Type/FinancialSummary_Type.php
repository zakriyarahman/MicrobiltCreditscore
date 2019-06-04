<?php

namespace Zakriyarahman\Microbilt\Financial\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class FinancialSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for FinancialSummary_Type originally named FinancialSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class FinancialSummary_Type extends Aggregate
{
    /**
     * The SalesAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $SalesAmt;
    /**
     * The NetIncomeAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
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
     * @var Message_Type
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
     * @var SummaryItem
     */
    public $SummaryItem;
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var DateRange_Type
     */
    public $DateRange;
    /**
     * The SummaryCharacteristics
     * @var SummaryCharacteristics
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
     * @param CurrencyAmount $_salesAmt
     * @param CurrencyAmount $_netIncomeAmt
     * @param string $_summaryDt
     * @param Message_Type $_message
     * @param string $_dtLastUpdated
     * @param SummaryItem $_summaryItem
     * @param DateRange_Type $_dateRange
     * @param SummaryCharacteristics $_summaryCharacteristics
     * @param string $_lastTrendedYr
     * @param string $_lastTrendedQtr
     * @return FinancialSummary_Type
     */
    public function __construct($_salesAmt = NULL,$_netIncomeAmt = NULL,$_summaryDt = NULL,$_message = NULL,$_dtLastUpdated = NULL,$_summaryItem = NULL,$_dateRange = NULL,$_summaryCharacteristics = NULL,$_lastTrendedYr = NULL,$_lastTrendedQtr = NULL)
    {
        MicrobiltWsdlClass::__construct(array('SalesAmt'=>$_salesAmt,'NetIncomeAmt'=>$_netIncomeAmt,'SummaryDt'=>$_summaryDt,'Message'=>$_message,'DtLastUpdated'=>$_dtLastUpdated,'SummaryItem'=>$_summaryItem,'DateRange'=>$_dateRange,'SummaryCharacteristics'=>$_summaryCharacteristics,'LastTrendedYr'=>$_lastTrendedYr,'LastTrendedQtr'=>$_lastTrendedQtr),false);
    }
    /**
     * Get SalesAmt value
     * @return CurrencyAmount|null
     */
    public function getSalesAmt()
    {
        return $this->SalesAmt;
    }
    /**
     * Set SalesAmt value
     * @param CurrencyAmount $_salesAmt the SalesAmt
     * @return CurrencyAmount
     */
    public function setSalesAmt($_salesAmt)
    {
        return ($this->SalesAmt = $_salesAmt);
    }
    /**
     * Get NetIncomeAmt value
     * @return CurrencyAmount|null
     */
    public function getNetIncomeAmt()
    {
        return $this->NetIncomeAmt;
    }
    /**
     * Set NetIncomeAmt value
     * @param CurrencyAmount $_netIncomeAmt the NetIncomeAmt
     * @return CurrencyAmount
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
     * @return Message_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param Message_Type $_message the Message
     * @return Message_Type
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
     * @return SummaryItem|null
     */
    public function getSummaryItem()
    {
        return $this->SummaryItem;
    }
    /**
     * Set SummaryItem value
     * @param SummaryItem $_summaryItem the SummaryItem
     * @return SummaryItem
     */
    public function setSummaryItem($_summaryItem)
    {
        return ($this->SummaryItem = $_summaryItem);
    }
    /**
     * Get DateRange value
     * @return DateRange_Type|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param DateRange_Type $_dateRange the DateRange
     * @return DateRange_Type
     */
    public function setDateRange($_dateRange)
    {
        return ($this->DateRange = $_dateRange);
    }
    /**
     * Get SummaryCharacteristics value
     * @return SummaryCharacteristics|null
     */
    public function getSummaryCharacteristics()
    {
        return $this->SummaryCharacteristics;
    }
    /**
     * Set SummaryCharacteristics value
     * @param SummaryCharacteristics $_summaryCharacteristics the SummaryCharacteristics
     * @return SummaryCharacteristics
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
     * @return FinancialSummary_Type
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
