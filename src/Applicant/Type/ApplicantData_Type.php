<?php

namespace Zakriyarahman\Microbilt\Applicant\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class ApplicantData_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for ApplicantData_Type originally named ApplicantData_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class ApplicantData_Type extends Aggregate
{
    /**
     * The RentPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $RentPmtAmt;
    /**
     * The NumberOfCurrentLoans
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumberOfCurrentLoans;
    /**
     * The PreviousCustomer
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $PreviousCustomer;
    /**
     * The PayrollGarnishment
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $PayrollGarnishment;
    /**
     * The CurrentBankruptcy
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $CurrentBankruptcy;
    /**
     * The CurrentWriteOff
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $CurrentWriteOff;
    /**
     * Constructor method for ApplicantData_Type
     * @see parent::__construct()
     * @param CurrencyAmount $_rentPmtAmt
     * @param int $_numberOfCurrentLoans
     * @param Boolean $_previousCustomer
     * @param Boolean $_payrollGarnishment
     * @param Boolean $_currentBankruptcy
     * @param Boolean $_currentWriteOff
     * @return ApplicantData_Type
     */
    public function __construct($_rentPmtAmt = NULL,$_numberOfCurrentLoans = NULL,$_previousCustomer = NULL,$_payrollGarnishment = NULL,$_currentBankruptcy = NULL,$_currentWriteOff = NULL)
    {
        MicrobiltWsdlClass::__construct(array('RentPmtAmt'=>$_rentPmtAmt,'NumberOfCurrentLoans'=>$_numberOfCurrentLoans,'PreviousCustomer'=>$_previousCustomer,'PayrollGarnishment'=>$_payrollGarnishment,'CurrentBankruptcy'=>$_currentBankruptcy,'CurrentWriteOff'=>$_currentWriteOff),false);
    }
    /**
     * Get RentPmtAmt value
     * @return CurrencyAmount|null
     */
    public function getRentPmtAmt()
    {
        return $this->RentPmtAmt;
    }
    /**
     * Set RentPmtAmt value
     * @param CurrencyAmount $_rentPmtAmt the RentPmtAmt
     * @return CurrencyAmount
     */
    public function setRentPmtAmt($_rentPmtAmt)
    {
        return ($this->RentPmtAmt = $_rentPmtAmt);
    }
    /**
     * Get NumberOfCurrentLoans value
     * @return int|null
     */
    public function getNumberOfCurrentLoans()
    {
        return $this->NumberOfCurrentLoans;
    }
    /**
     * Set NumberOfCurrentLoans value
     * @param int $_numberOfCurrentLoans the NumberOfCurrentLoans
     * @return int
     */
    public function setNumberOfCurrentLoans($_numberOfCurrentLoans)
    {
        return ($this->NumberOfCurrentLoans = $_numberOfCurrentLoans);
    }
    /**
     * Get PreviousCustomer value
     * @return Boolean|null
     */
    public function getPreviousCustomer()
    {
        return $this->PreviousCustomer;
    }
    /**
     * Set PreviousCustomer value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_previousCustomer the PreviousCustomer
     * @return Boolean
     */
    public function setPreviousCustomer($_previousCustomer)
    {
        if(!Boolean::valueIsValid($_previousCustomer))
        {
            return false;
        }
        return ($this->PreviousCustomer = $_previousCustomer);
    }
    /**
     * Get PayrollGarnishment value
     * @return Boolean|null
     */
    public function getPayrollGarnishment()
    {
        return $this->PayrollGarnishment;
    }
    /**
     * Set PayrollGarnishment value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_payrollGarnishment the PayrollGarnishment
     * @return Boolean
     */
    public function setPayrollGarnishment($_payrollGarnishment)
    {
        if(!Boolean::valueIsValid($_payrollGarnishment))
        {
            return false;
        }
        return ($this->PayrollGarnishment = $_payrollGarnishment);
    }
    /**
     * Get CurrentBankruptcy value
     * @return Boolean|null
     */
    public function getCurrentBankruptcy()
    {
        return $this->CurrentBankruptcy;
    }
    /**
     * Set CurrentBankruptcy value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_currentBankruptcy the CurrentBankruptcy
     * @return Boolean
     */
    public function setCurrentBankruptcy($_currentBankruptcy)
    {
        if(!Boolean::valueIsValid($_currentBankruptcy))
        {
            return false;
        }
        return ($this->CurrentBankruptcy = $_currentBankruptcy);
    }
    /**
     * Get CurrentWriteOff value
     * @return Boolean|null
     */
    public function getCurrentWriteOff()
    {
        return $this->CurrentWriteOff;
    }
    /**
     * Set CurrentWriteOff value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_currentWriteOff the CurrentWriteOff
     * @return Boolean
     */
    public function setCurrentWriteOff($_currentWriteOff)
    {
        if(!Boolean::valueIsValid($_currentWriteOff))
        {
            return false;
        }
        return ($this->CurrentWriteOff = $_currentWriteOff);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ApplicantData_Type
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
