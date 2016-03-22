<?php
/**
 * File for class MicrobiltStructIncomeInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructIncomeInfo_Type originally named IncomeInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructIncomeInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Source;
    /**
     * The MonthlyIncome
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $MonthlyIncome;
    /**
     * The PmtFreq
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtFreq;
    /**
     * The PayPerPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $PayPerPeriod;
    /**
     * The DirectDepositInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $DirectDepositInd;
    /**
     * The DtOfNextPaycheck
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtOfNextPaycheck;
    /**
     * The DtOfSecondPaycheck
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtOfSecondPaycheck;
    /**
     * Constructor method for IncomeInfo_Type
     * @see parent::__construct()
     * @param string $_source
     * @param MicrobiltStructCurrencyAmount $_monthlyIncome
     * @param string $_pmtFreq
     * @param MicrobiltStructCurrencyAmount $_payPerPeriod
     * @param MicrobiltEnumBoolean $_directDepositInd
     * @param date $_dtOfNextPaycheck
     * @param date $_dtOfSecondPaycheck
     * @return MicrobiltStructIncomeInfo_Type
     */
    public function __construct($_source = NULL,$_monthlyIncome = NULL,$_pmtFreq = NULL,$_payPerPeriod = NULL,$_directDepositInd = NULL,$_dtOfNextPaycheck = NULL,$_dtOfSecondPaycheck = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Source'=>$_source,'MonthlyIncome'=>$_monthlyIncome,'PmtFreq'=>$_pmtFreq,'PayPerPeriod'=>$_payPerPeriod,'DirectDepositInd'=>$_directDepositInd,'DtOfNextPaycheck'=>$_dtOfNextPaycheck,'DtOfSecondPaycheck'=>$_dtOfSecondPaycheck),false);
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $_source the Source
     * @return string
     */
    public function setSource($_source)
    {
        return ($this->Source = $_source);
    }
    /**
     * Get MonthlyIncome value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getMonthlyIncome()
    {
        return $this->MonthlyIncome;
    }
    /**
     * Set MonthlyIncome value
     * @param MicrobiltStructCurrencyAmount $_monthlyIncome the MonthlyIncome
     * @return MicrobiltStructCurrencyAmount
     */
    public function setMonthlyIncome($_monthlyIncome)
    {
        return ($this->MonthlyIncome = $_monthlyIncome);
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
     * Get PayPerPeriod value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getPayPerPeriod()
    {
        return $this->PayPerPeriod;
    }
    /**
     * Set PayPerPeriod value
     * @param MicrobiltStructCurrencyAmount $_payPerPeriod the PayPerPeriod
     * @return MicrobiltStructCurrencyAmount
     */
    public function setPayPerPeriod($_payPerPeriod)
    {
        return ($this->PayPerPeriod = $_payPerPeriod);
    }
    /**
     * Get DirectDepositInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getDirectDepositInd()
    {
        return $this->DirectDepositInd;
    }
    /**
     * Set DirectDepositInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_directDepositInd the DirectDepositInd
     * @return MicrobiltEnumBoolean
     */
    public function setDirectDepositInd($_directDepositInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_directDepositInd))
        {
            return false;
        }
        return ($this->DirectDepositInd = $_directDepositInd);
    }
    /**
     * Get DtOfNextPaycheck value
     * @return date|null
     */
    public function getDtOfNextPaycheck()
    {
        return $this->DtOfNextPaycheck;
    }
    /**
     * Set DtOfNextPaycheck value
     * @param date $_dtOfNextPaycheck the DtOfNextPaycheck
     * @return date
     */
    public function setDtOfNextPaycheck($_dtOfNextPaycheck)
    {
        return ($this->DtOfNextPaycheck = $_dtOfNextPaycheck);
    }
    /**
     * Get DtOfSecondPaycheck value
     * @return date|null
     */
    public function getDtOfSecondPaycheck()
    {
        return $this->DtOfSecondPaycheck;
    }
    /**
     * Set DtOfSecondPaycheck value
     * @param date $_dtOfSecondPaycheck the DtOfSecondPaycheck
     * @return date
     */
    public function setDtOfSecondPaycheck($_dtOfSecondPaycheck)
    {
        return ($this->DtOfSecondPaycheck = $_dtOfSecondPaycheck);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructIncomeInfo_Type
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
