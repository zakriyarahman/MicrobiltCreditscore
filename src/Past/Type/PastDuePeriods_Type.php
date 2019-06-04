<?php

namespace Zakriyarahman\Microbilt\Past\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class PastDuePeriods_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for PastDuePeriods_Type originally named PastDuePeriods_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class PastDuePeriods_Type extends Aggregate
{
    /**
     * The Period
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Period;
    /**
     * The PeriodDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PeriodDt;
    /**
     * The PastDueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $PastDueAmt;
    /**
     * Constructor method for PastDuePeriods_Type
     * @see parent::__construct()
     * @param string $_period
     * @param string $_periodDt
     * @param CurrencyAmount $_pastDueAmt
     * @return PastDuePeriods_Type
     */
    public function __construct($_period = NULL,$_periodDt = NULL,$_pastDueAmt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Period'=>$_period,'PeriodDt'=>$_periodDt,'PastDueAmt'=>$_pastDueAmt),false);
    }
    /**
     * Get Period value
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @param string $_period the Period
     * @return string
     */
    public function setPeriod($_period)
    {
        return ($this->Period = $_period);
    }
    /**
     * Get PeriodDt value
     * @return string|null
     */
    public function getPeriodDt()
    {
        return $this->PeriodDt;
    }
    /**
     * Set PeriodDt value
     * @param string $_periodDt the PeriodDt
     * @return string
     */
    public function setPeriodDt($_periodDt)
    {
        return ($this->PeriodDt = $_periodDt);
    }
    /**
     * Get PastDueAmt value
     * @return CurrencyAmount|null
     */
    public function getPastDueAmt()
    {
        return $this->PastDueAmt;
    }
    /**
     * Set PastDueAmt value
     * @param CurrencyAmount $_pastDueAmt the PastDueAmt
     * @return CurrencyAmount
     */
    public function setPastDueAmt($_pastDueAmt)
    {
        return ($this->PastDueAmt = $_pastDueAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PastDuePeriods_Type
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
