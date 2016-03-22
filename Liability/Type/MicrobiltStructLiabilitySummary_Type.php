<?php
/**
 * File for class MicrobiltStructLiabilitySummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructLiabilitySummary_Type originally named LiabilitySummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructLiabilitySummary_Type extends MicrobiltStructAggregate
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
     * The TotalNumTrades
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $TotalNumTrades;
    /**
     * The TotalNumTradesWithBalance
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $TotalNumTradesWithBalance;
    /**
     * The TotalBalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $TotalBalanceAmt;
    /**
     * The TotalScheduledMoPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $TotalScheduledMoPmtAmt;
    /**
     * The TotalHC_CLAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $TotalHC_CLAmt;
    /**
     * The LateCount30
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $LateCount30;
    /**
     * The LateCount60
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $LateCount60;
    /**
     * The LateCount90
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $LateCount90;
    /**
     * The AvailablePercentage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var decimal
     */
    public $AvailablePercentage;
    /**
     * Constructor method for LiabilitySummary_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param long $_totalNumTrades
     * @param long $_totalNumTradesWithBalance
     * @param MicrobiltStructCurrencyAmount $_totalBalanceAmt
     * @param MicrobiltStructCurrencyAmount $_totalScheduledMoPmtAmt
     * @param MicrobiltStructCurrencyAmount $_totalHC_CLAmt
     * @param long $_lateCount30
     * @param long $_lateCount60
     * @param long $_lateCount90
     * @param decimal $_availablePercentage
     * @return MicrobiltStructLiabilitySummary_Type
     */
    public function __construct($_msgClass = NULL,$_totalNumTrades = NULL,$_totalNumTradesWithBalance = NULL,$_totalBalanceAmt = NULL,$_totalScheduledMoPmtAmt = NULL,$_totalHC_CLAmt = NULL,$_lateCount30 = NULL,$_lateCount60 = NULL,$_lateCount90 = NULL,$_availablePercentage = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'TotalNumTrades'=>$_totalNumTrades,'TotalNumTradesWithBalance'=>$_totalNumTradesWithBalance,'TotalBalanceAmt'=>$_totalBalanceAmt,'TotalScheduledMoPmtAmt'=>$_totalScheduledMoPmtAmt,'TotalHC_CLAmt'=>$_totalHC_CLAmt,'LateCount30'=>$_lateCount30,'LateCount60'=>$_lateCount60,'LateCount90'=>$_lateCount90,'AvailablePercentage'=>$_availablePercentage),false);
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
     * Get TotalNumTrades value
     * @return long|null
     */
    public function getTotalNumTrades()
    {
        return $this->TotalNumTrades;
    }
    /**
     * Set TotalNumTrades value
     * @param long $_totalNumTrades the TotalNumTrades
     * @return long
     */
    public function setTotalNumTrades($_totalNumTrades)
    {
        return ($this->TotalNumTrades = $_totalNumTrades);
    }
    /**
     * Get TotalNumTradesWithBalance value
     * @return long|null
     */
    public function getTotalNumTradesWithBalance()
    {
        return $this->TotalNumTradesWithBalance;
    }
    /**
     * Set TotalNumTradesWithBalance value
     * @param long $_totalNumTradesWithBalance the TotalNumTradesWithBalance
     * @return long
     */
    public function setTotalNumTradesWithBalance($_totalNumTradesWithBalance)
    {
        return ($this->TotalNumTradesWithBalance = $_totalNumTradesWithBalance);
    }
    /**
     * Get TotalBalanceAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getTotalBalanceAmt()
    {
        return $this->TotalBalanceAmt;
    }
    /**
     * Set TotalBalanceAmt value
     * @param MicrobiltStructCurrencyAmount $_totalBalanceAmt the TotalBalanceAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setTotalBalanceAmt($_totalBalanceAmt)
    {
        return ($this->TotalBalanceAmt = $_totalBalanceAmt);
    }
    /**
     * Get TotalScheduledMoPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getTotalScheduledMoPmtAmt()
    {
        return $this->TotalScheduledMoPmtAmt;
    }
    /**
     * Set TotalScheduledMoPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_totalScheduledMoPmtAmt the TotalScheduledMoPmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setTotalScheduledMoPmtAmt($_totalScheduledMoPmtAmt)
    {
        return ($this->TotalScheduledMoPmtAmt = $_totalScheduledMoPmtAmt);
    }
    /**
     * Get TotalHC_CLAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getTotalHC_CLAmt()
    {
        return $this->TotalHC_CLAmt;
    }
    /**
     * Set TotalHC_CLAmt value
     * @param MicrobiltStructCurrencyAmount $_totalHC_CLAmt the TotalHC_CLAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setTotalHC_CLAmt($_totalHC_CLAmt)
    {
        return ($this->TotalHC_CLAmt = $_totalHC_CLAmt);
    }
    /**
     * Get LateCount30 value
     * @return long|null
     */
    public function getLateCount30()
    {
        return $this->LateCount30;
    }
    /**
     * Set LateCount30 value
     * @param long $_lateCount30 the LateCount30
     * @return long
     */
    public function setLateCount30($_lateCount30)
    {
        return ($this->LateCount30 = $_lateCount30);
    }
    /**
     * Get LateCount60 value
     * @return long|null
     */
    public function getLateCount60()
    {
        return $this->LateCount60;
    }
    /**
     * Set LateCount60 value
     * @param long $_lateCount60 the LateCount60
     * @return long
     */
    public function setLateCount60($_lateCount60)
    {
        return ($this->LateCount60 = $_lateCount60);
    }
    /**
     * Get LateCount90 value
     * @return long|null
     */
    public function getLateCount90()
    {
        return $this->LateCount90;
    }
    /**
     * Set LateCount90 value
     * @param long $_lateCount90 the LateCount90
     * @return long
     */
    public function setLateCount90($_lateCount90)
    {
        return ($this->LateCount90 = $_lateCount90);
    }
    /**
     * Get AvailablePercentage value
     * @return decimal|null
     */
    public function getAvailablePercentage()
    {
        return $this->AvailablePercentage;
    }
    /**
     * Set AvailablePercentage value
     * @param decimal $_availablePercentage the AvailablePercentage
     * @return decimal
     */
    public function setAvailablePercentage($_availablePercentage)
    {
        return ($this->AvailablePercentage = $_availablePercentage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructLiabilitySummary_Type
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
