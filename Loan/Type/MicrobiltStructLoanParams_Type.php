<?php
/**
 * File for class MicrobiltStructLoanParams_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructLoanParams_Type originally named LoanParams_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructLoanParams_Type extends MicrobiltStructAggregate
{
    /**
     * The RequestedAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $RequestedAmt;
    /**
     * The FeeAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $FeeAmt;
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DueDate;
    /**
     * The Renewal
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $Renewal;
    /**
     * The Rollover
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $Rollover;
    /**
     * The RolloverNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $RolloverNumber;
    /**
     * The ConsecutiveLoanNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $ConsecutiveLoanNumber;
    /**
     * The LastLoanEndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $LastLoanEndDt;
    /**
     * The LoanAmountFlag
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LoanAmountFlag;
    /**
     * The LoanDuration
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $LoanDuration;
    /**
     * The GenericRequestField
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GenericRequestField;
    /**
     * The DaysOpen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $DaysOpen;
    /**
     * The LoanType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LoanType;
    /**
     * The AlternativeLoanAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $AlternativeLoanAmt;
    /**
     * The ApprovalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $ApprovalAmt;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Name;
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Error;
    /**
     * The DebtToIncome
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DebtToIncome;
    /**
     * The LoansRemaining
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $LoansRemaining;
    /**
     * The CoolOffDaysRemaining
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $CoolOffDaysRemaining;
    /**
     * The CoolOffPeriodRemaining
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CoolOffPeriodRemaining;
    /**
     * The DaysBeforeCoolingOffPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $DaysBeforeCoolingOffPeriod;
    /**
     * The DaysBefore90DayLimit
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $DaysBefore90DayLimit;
    /**
     * The EligibleDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $EligibleDt;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StateProv;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for LoanParams_Type
     * @see parent::__construct()
     * @param MicrobiltStructCurrencyAmount $_requestedAmt
     * @param MicrobiltStructCurrencyAmount $_feeAmt
     * @param date $_dueDate
     * @param MicrobiltEnumBoolean $_renewal
     * @param MicrobiltEnumBoolean $_rollover
     * @param long $_rolloverNumber
     * @param long $_consecutiveLoanNumber
     * @param date $_lastLoanEndDt
     * @param string $_loanAmountFlag
     * @param long $_loanDuration
     * @param string $_genericRequestField
     * @param long $_daysOpen
     * @param string $_loanType
     * @param MicrobiltStructCurrencyAmount $_alternativeLoanAmt
     * @param MicrobiltStructCurrencyAmount $_approvalAmt
     * @param string $_name
     * @param string $_error
     * @param string $_debtToIncome
     * @param long $_loansRemaining
     * @param long $_coolOffDaysRemaining
     * @param string $_coolOffPeriodRemaining
     * @param long $_daysBeforeCoolingOffPeriod
     * @param long $_daysBefore90DayLimit
     * @param date $_eligibleDt
     * @param string $_stateProv
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructLoanParams_Type
     */
    public function __construct($_requestedAmt = NULL,$_feeAmt = NULL,$_dueDate = NULL,$_renewal = NULL,$_rollover = NULL,$_rolloverNumber = NULL,$_consecutiveLoanNumber = NULL,$_lastLoanEndDt = NULL,$_loanAmountFlag = NULL,$_loanDuration = NULL,$_genericRequestField = NULL,$_daysOpen = NULL,$_loanType = NULL,$_alternativeLoanAmt = NULL,$_approvalAmt = NULL,$_name = NULL,$_error = NULL,$_debtToIncome = NULL,$_loansRemaining = NULL,$_coolOffDaysRemaining = NULL,$_coolOffPeriodRemaining = NULL,$_daysBeforeCoolingOffPeriod = NULL,$_daysBefore90DayLimit = NULL,$_eligibleDt = NULL,$_stateProv = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('RequestedAmt'=>$_requestedAmt,'FeeAmt'=>$_feeAmt,'DueDate'=>$_dueDate,'Renewal'=>$_renewal,'Rollover'=>$_rollover,'RolloverNumber'=>$_rolloverNumber,'ConsecutiveLoanNumber'=>$_consecutiveLoanNumber,'LastLoanEndDt'=>$_lastLoanEndDt,'LoanAmountFlag'=>$_loanAmountFlag,'LoanDuration'=>$_loanDuration,'GenericRequestField'=>$_genericRequestField,'DaysOpen'=>$_daysOpen,'LoanType'=>$_loanType,'AlternativeLoanAmt'=>$_alternativeLoanAmt,'ApprovalAmt'=>$_approvalAmt,'Name'=>$_name,'Error'=>$_error,'DebtToIncome'=>$_debtToIncome,'LoansRemaining'=>$_loansRemaining,'CoolOffDaysRemaining'=>$_coolOffDaysRemaining,'CoolOffPeriodRemaining'=>$_coolOffPeriodRemaining,'DaysBeforeCoolingOffPeriod'=>$_daysBeforeCoolingOffPeriod,'DaysBefore90DayLimit'=>$_daysBefore90DayLimit,'EligibleDt'=>$_eligibleDt,'StateProv'=>$_stateProv,'Message'=>$_message),false);
    }
    /**
     * Get RequestedAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getRequestedAmt()
    {
        return $this->RequestedAmt;
    }
    /**
     * Set RequestedAmt value
     * @param MicrobiltStructCurrencyAmount $_requestedAmt the RequestedAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setRequestedAmt($_requestedAmt)
    {
        return ($this->RequestedAmt = $_requestedAmt);
    }
    /**
     * Get FeeAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getFeeAmt()
    {
        return $this->FeeAmt;
    }
    /**
     * Set FeeAmt value
     * @param MicrobiltStructCurrencyAmount $_feeAmt the FeeAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setFeeAmt($_feeAmt)
    {
        return ($this->FeeAmt = $_feeAmt);
    }
    /**
     * Get DueDate value
     * @return date|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param date $_dueDate the DueDate
     * @return date
     */
    public function setDueDate($_dueDate)
    {
        return ($this->DueDate = $_dueDate);
    }
    /**
     * Get Renewal value
     * @return MicrobiltEnumBoolean|null
     */
    public function getRenewal()
    {
        return $this->Renewal;
    }
    /**
     * Set Renewal value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_renewal the Renewal
     * @return MicrobiltEnumBoolean
     */
    public function setRenewal($_renewal)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_renewal))
        {
            return false;
        }
        return ($this->Renewal = $_renewal);
    }
    /**
     * Get Rollover value
     * @return MicrobiltEnumBoolean|null
     */
    public function getRollover()
    {
        return $this->Rollover;
    }
    /**
     * Set Rollover value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_rollover the Rollover
     * @return MicrobiltEnumBoolean
     */
    public function setRollover($_rollover)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_rollover))
        {
            return false;
        }
        return ($this->Rollover = $_rollover);
    }
    /**
     * Get RolloverNumber value
     * @return long|null
     */
    public function getRolloverNumber()
    {
        return $this->RolloverNumber;
    }
    /**
     * Set RolloverNumber value
     * @param long $_rolloverNumber the RolloverNumber
     * @return long
     */
    public function setRolloverNumber($_rolloverNumber)
    {
        return ($this->RolloverNumber = $_rolloverNumber);
    }
    /**
     * Get ConsecutiveLoanNumber value
     * @return long|null
     */
    public function getConsecutiveLoanNumber()
    {
        return $this->ConsecutiveLoanNumber;
    }
    /**
     * Set ConsecutiveLoanNumber value
     * @param long $_consecutiveLoanNumber the ConsecutiveLoanNumber
     * @return long
     */
    public function setConsecutiveLoanNumber($_consecutiveLoanNumber)
    {
        return ($this->ConsecutiveLoanNumber = $_consecutiveLoanNumber);
    }
    /**
     * Get LastLoanEndDt value
     * @return date|null
     */
    public function getLastLoanEndDt()
    {
        return $this->LastLoanEndDt;
    }
    /**
     * Set LastLoanEndDt value
     * @param date $_lastLoanEndDt the LastLoanEndDt
     * @return date
     */
    public function setLastLoanEndDt($_lastLoanEndDt)
    {
        return ($this->LastLoanEndDt = $_lastLoanEndDt);
    }
    /**
     * Get LoanAmountFlag value
     * @return string|null
     */
    public function getLoanAmountFlag()
    {
        return $this->LoanAmountFlag;
    }
    /**
     * Set LoanAmountFlag value
     * @param string $_loanAmountFlag the LoanAmountFlag
     * @return string
     */
    public function setLoanAmountFlag($_loanAmountFlag)
    {
        return ($this->LoanAmountFlag = $_loanAmountFlag);
    }
    /**
     * Get LoanDuration value
     * @return long|null
     */
    public function getLoanDuration()
    {
        return $this->LoanDuration;
    }
    /**
     * Set LoanDuration value
     * @param long $_loanDuration the LoanDuration
     * @return long
     */
    public function setLoanDuration($_loanDuration)
    {
        return ($this->LoanDuration = $_loanDuration);
    }
    /**
     * Get GenericRequestField value
     * @return string|null
     */
    public function getGenericRequestField()
    {
        return $this->GenericRequestField;
    }
    /**
     * Set GenericRequestField value
     * @param string $_genericRequestField the GenericRequestField
     * @return string
     */
    public function setGenericRequestField($_genericRequestField)
    {
        return ($this->GenericRequestField = $_genericRequestField);
    }
    /**
     * Get DaysOpen value
     * @return long|null
     */
    public function getDaysOpen()
    {
        return $this->DaysOpen;
    }
    /**
     * Set DaysOpen value
     * @param long $_daysOpen the DaysOpen
     * @return long
     */
    public function setDaysOpen($_daysOpen)
    {
        return ($this->DaysOpen = $_daysOpen);
    }
    /**
     * Get LoanType value
     * @return string|null
     */
    public function getLoanType()
    {
        return $this->LoanType;
    }
    /**
     * Set LoanType value
     * @param string $_loanType the LoanType
     * @return string
     */
    public function setLoanType($_loanType)
    {
        return ($this->LoanType = $_loanType);
    }
    /**
     * Get AlternativeLoanAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getAlternativeLoanAmt()
    {
        return $this->AlternativeLoanAmt;
    }
    /**
     * Set AlternativeLoanAmt value
     * @param MicrobiltStructCurrencyAmount $_alternativeLoanAmt the AlternativeLoanAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setAlternativeLoanAmt($_alternativeLoanAmt)
    {
        return ($this->AlternativeLoanAmt = $_alternativeLoanAmt);
    }
    /**
     * Get ApprovalAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getApprovalAmt()
    {
        return $this->ApprovalAmt;
    }
    /**
     * Set ApprovalAmt value
     * @param MicrobiltStructCurrencyAmount $_approvalAmt the ApprovalAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setApprovalAmt($_approvalAmt)
    {
        return ($this->ApprovalAmt = $_approvalAmt);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $_name the Name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
    }
    /**
     * Get Error value
     * @return string|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param string $_error the Error
     * @return string
     */
    public function setError($_error)
    {
        return ($this->Error = $_error);
    }
    /**
     * Get DebtToIncome value
     * @return string|null
     */
    public function getDebtToIncome()
    {
        return $this->DebtToIncome;
    }
    /**
     * Set DebtToIncome value
     * @param string $_debtToIncome the DebtToIncome
     * @return string
     */
    public function setDebtToIncome($_debtToIncome)
    {
        return ($this->DebtToIncome = $_debtToIncome);
    }
    /**
     * Get LoansRemaining value
     * @return long|null
     */
    public function getLoansRemaining()
    {
        return $this->LoansRemaining;
    }
    /**
     * Set LoansRemaining value
     * @param long $_loansRemaining the LoansRemaining
     * @return long
     */
    public function setLoansRemaining($_loansRemaining)
    {
        return ($this->LoansRemaining = $_loansRemaining);
    }
    /**
     * Get CoolOffDaysRemaining value
     * @return long|null
     */
    public function getCoolOffDaysRemaining()
    {
        return $this->CoolOffDaysRemaining;
    }
    /**
     * Set CoolOffDaysRemaining value
     * @param long $_coolOffDaysRemaining the CoolOffDaysRemaining
     * @return long
     */
    public function setCoolOffDaysRemaining($_coolOffDaysRemaining)
    {
        return ($this->CoolOffDaysRemaining = $_coolOffDaysRemaining);
    }
    /**
     * Get CoolOffPeriodRemaining value
     * @return string|null
     */
    public function getCoolOffPeriodRemaining()
    {
        return $this->CoolOffPeriodRemaining;
    }
    /**
     * Set CoolOffPeriodRemaining value
     * @param string $_coolOffPeriodRemaining the CoolOffPeriodRemaining
     * @return string
     */
    public function setCoolOffPeriodRemaining($_coolOffPeriodRemaining)
    {
        return ($this->CoolOffPeriodRemaining = $_coolOffPeriodRemaining);
    }
    /**
     * Get DaysBeforeCoolingOffPeriod value
     * @return long|null
     */
    public function getDaysBeforeCoolingOffPeriod()
    {
        return $this->DaysBeforeCoolingOffPeriod;
    }
    /**
     * Set DaysBeforeCoolingOffPeriod value
     * @param long $_daysBeforeCoolingOffPeriod the DaysBeforeCoolingOffPeriod
     * @return long
     */
    public function setDaysBeforeCoolingOffPeriod($_daysBeforeCoolingOffPeriod)
    {
        return ($this->DaysBeforeCoolingOffPeriod = $_daysBeforeCoolingOffPeriod);
    }
    /**
     * Get DaysBefore90DayLimit value
     * @return long|null
     */
    public function getDaysBefore90DayLimit()
    {
        return $this->DaysBefore90DayLimit;
    }
    /**
     * Set DaysBefore90DayLimit value
     * @param long $_daysBefore90DayLimit the DaysBefore90DayLimit
     * @return long
     */
    public function setDaysBefore90DayLimit($_daysBefore90DayLimit)
    {
        return ($this->DaysBefore90DayLimit = $_daysBefore90DayLimit);
    }
    /**
     * Get EligibleDt value
     * @return date|null
     */
    public function getEligibleDt()
    {
        return $this->EligibleDt;
    }
    /**
     * Set EligibleDt value
     * @param date $_eligibleDt the EligibleDt
     * @return date
     */
    public function setEligibleDt($_eligibleDt)
    {
        return ($this->EligibleDt = $_eligibleDt);
    }
    /**
     * Get StateProv value
     * @return string|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param string $_stateProv the StateProv
     * @return string
     */
    public function setStateProv($_stateProv)
    {
        return ($this->StateProv = $_stateProv);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructLoanParams_Type
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
