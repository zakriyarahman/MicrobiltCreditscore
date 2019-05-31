<?php

namespace Zakriyarahman\Microbilt\Quarterly\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructQuarterlyTrends_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructQuarterlyTrends_Type originally named QuarterlyTrends_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructQuarterlyTrends_Type extends MicrobiltStructAggregate
{
    /**
     * The YearOfQuarter
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $YearOfQuarter;
    /**
     * The Quarter
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Quarter;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The PastDuePeriods
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPastDuePeriods_Type
     */
    public $PastDuePeriods;
    /**
     * The NumSuppliers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumSuppliers;
    /**
     * Constructor method for QuarterlyTrends_Type
     * @see parent::__construct()
     * @param string $_yearOfQuarter
     * @param string $_quarter
     * @param MicrobiltStructCompAmt_Type $_balanceAmt
     * @param MicrobiltStructPastDuePeriods_Type $_pastDuePeriods
     * @param string $_numSuppliers
     * @return MicrobiltStructQuarterlyTrends_Type
     */
    public function __construct($_yearOfQuarter = NULL,$_quarter = NULL,$_balanceAmt = NULL,$_pastDuePeriods = NULL,$_numSuppliers = NULL)
    {
        MicrobiltWsdlClass::__construct(array('YearOfQuarter'=>$_yearOfQuarter,'Quarter'=>$_quarter,'BalanceAmt'=>$_balanceAmt,'PastDuePeriods'=>$_pastDuePeriods,'NumSuppliers'=>$_numSuppliers),false);
    }
    /**
     * Get YearOfQuarter value
     * @return string|null
     */
    public function getYearOfQuarter()
    {
        return $this->YearOfQuarter;
    }
    /**
     * Set YearOfQuarter value
     * @param string $_yearOfQuarter the YearOfQuarter
     * @return string
     */
    public function setYearOfQuarter($_yearOfQuarter)
    {
        return ($this->YearOfQuarter = $_yearOfQuarter);
    }
    /**
     * Get Quarter value
     * @return string|null
     */
    public function getQuarter()
    {
        return $this->Quarter;
    }
    /**
     * Set Quarter value
     * @param string $_quarter the Quarter
     * @return string
     */
    public function setQuarter($_quarter)
    {
        return ($this->Quarter = $_quarter);
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
     * Get PastDuePeriods value
     * @return MicrobiltStructPastDuePeriods_Type|null
     */
    public function getPastDuePeriods()
    {
        return $this->PastDuePeriods;
    }
    /**
     * Set PastDuePeriods value
     * @param MicrobiltStructPastDuePeriods_Type $_pastDuePeriods the PastDuePeriods
     * @return MicrobiltStructPastDuePeriods_Type
     */
    public function setPastDuePeriods($_pastDuePeriods)
    {
        return ($this->PastDuePeriods = $_pastDuePeriods);
    }
    /**
     * Get NumSuppliers value
     * @return string|null
     */
    public function getNumSuppliers()
    {
        return $this->NumSuppliers;
    }
    /**
     * Set NumSuppliers value
     * @param string $_numSuppliers the NumSuppliers
     * @return string
     */
    public function setNumSuppliers($_numSuppliers)
    {
        return ($this->NumSuppliers = $_numSuppliers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructQuarterlyTrends_Type
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
