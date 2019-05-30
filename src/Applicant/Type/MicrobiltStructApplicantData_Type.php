<?php

namespace Zakriyarahman\Microbilt\Applicant\Type;

/**
 * File for class MicrobiltStructApplicantData_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructApplicantData_Type originally named ApplicantData_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructApplicantData_Type extends MicrobiltStructAggregate
{
    /**
     * The RentPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
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
     * @var MicrobiltEnumBoolean
     */
    public $PreviousCustomer;
    /**
     * The PayrollGarnishment
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $PayrollGarnishment;
    /**
     * The CurrentBankruptcy
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $CurrentBankruptcy;
    /**
     * The CurrentWriteOff
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $CurrentWriteOff;
    /**
     * Constructor method for ApplicantData_Type
     * @see parent::__construct()
     * @param MicrobiltStructCurrencyAmount $_rentPmtAmt
     * @param int $_numberOfCurrentLoans
     * @param MicrobiltEnumBoolean $_previousCustomer
     * @param MicrobiltEnumBoolean $_payrollGarnishment
     * @param MicrobiltEnumBoolean $_currentBankruptcy
     * @param MicrobiltEnumBoolean $_currentWriteOff
     * @return MicrobiltStructApplicantData_Type
     */
    public function __construct($_rentPmtAmt = NULL,$_numberOfCurrentLoans = NULL,$_previousCustomer = NULL,$_payrollGarnishment = NULL,$_currentBankruptcy = NULL,$_currentWriteOff = NULL)
    {
        MicrobiltWsdlClass::__construct(array('RentPmtAmt'=>$_rentPmtAmt,'NumberOfCurrentLoans'=>$_numberOfCurrentLoans,'PreviousCustomer'=>$_previousCustomer,'PayrollGarnishment'=>$_payrollGarnishment,'CurrentBankruptcy'=>$_currentBankruptcy,'CurrentWriteOff'=>$_currentWriteOff),false);
    }
    /**
     * Get RentPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getRentPmtAmt()
    {
        return $this->RentPmtAmt;
    }
    /**
     * Set RentPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_rentPmtAmt the RentPmtAmt
     * @return MicrobiltStructCurrencyAmount
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
     * @return MicrobiltEnumBoolean|null
     */
    public function getPreviousCustomer()
    {
        return $this->PreviousCustomer;
    }
    /**
     * Set PreviousCustomer value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_previousCustomer the PreviousCustomer
     * @return MicrobiltEnumBoolean
     */
    public function setPreviousCustomer($_previousCustomer)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_previousCustomer))
        {
            return false;
        }
        return ($this->PreviousCustomer = $_previousCustomer);
    }
    /**
     * Get PayrollGarnishment value
     * @return MicrobiltEnumBoolean|null
     */
    public function getPayrollGarnishment()
    {
        return $this->PayrollGarnishment;
    }
    /**
     * Set PayrollGarnishment value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_payrollGarnishment the PayrollGarnishment
     * @return MicrobiltEnumBoolean
     */
    public function setPayrollGarnishment($_payrollGarnishment)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_payrollGarnishment))
        {
            return false;
        }
        return ($this->PayrollGarnishment = $_payrollGarnishment);
    }
    /**
     * Get CurrentBankruptcy value
     * @return MicrobiltEnumBoolean|null
     */
    public function getCurrentBankruptcy()
    {
        return $this->CurrentBankruptcy;
    }
    /**
     * Set CurrentBankruptcy value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_currentBankruptcy the CurrentBankruptcy
     * @return MicrobiltEnumBoolean
     */
    public function setCurrentBankruptcy($_currentBankruptcy)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_currentBankruptcy))
        {
            return false;
        }
        return ($this->CurrentBankruptcy = $_currentBankruptcy);
    }
    /**
     * Get CurrentWriteOff value
     * @return MicrobiltEnumBoolean|null
     */
    public function getCurrentWriteOff()
    {
        return $this->CurrentWriteOff;
    }
    /**
     * Set CurrentWriteOff value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_currentWriteOff the CurrentWriteOff
     * @return MicrobiltEnumBoolean
     */
    public function setCurrentWriteOff($_currentWriteOff)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_currentWriteOff))
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
     * @return MicrobiltStructApplicantData_Type
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
