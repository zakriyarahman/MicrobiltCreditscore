<?php
/**
 * File for class MicrobiltStructBankStatement_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructBankStatement_Type originally named BankStatement_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructBankStatement_Type extends MicrobiltStructAggregate
{
    /**
     * The StatementDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $StatementDt;
    /**
     * The NumberOfTransactions
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $NumberOfTransactions;
    /**
     * The NumberOfNSFs
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $NumberOfNSFs;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The VerifiedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $VerifiedDt;
    /**
     * The StatementBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $StatementBalAmt;
    /**
     * Constructor method for BankStatement_Type
     * @see parent::__construct()
     * @param date $_statementDt
     * @param long $_numberOfTransactions
     * @param long $_numberOfNSFs
     * @param MicrobiltStructCompAmt_Type $_balanceAmt
     * @param date $_verifiedDt
     * @param MicrobiltStructCurrencyAmount $_statementBalAmt
     * @return MicrobiltStructBankStatement_Type
     */
    public function __construct($_statementDt = NULL,$_numberOfTransactions = NULL,$_numberOfNSFs = NULL,$_balanceAmt = NULL,$_verifiedDt = NULL,$_statementBalAmt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('StatementDt'=>$_statementDt,'NumberOfTransactions'=>$_numberOfTransactions,'NumberOfNSFs'=>$_numberOfNSFs,'BalanceAmt'=>$_balanceAmt,'VerifiedDt'=>$_verifiedDt,'StatementBalAmt'=>$_statementBalAmt),false);
    }
    /**
     * Get StatementDt value
     * @return date|null
     */
    public function getStatementDt()
    {
        return $this->StatementDt;
    }
    /**
     * Set StatementDt value
     * @param date $_statementDt the StatementDt
     * @return date
     */
    public function setStatementDt($_statementDt)
    {
        return ($this->StatementDt = $_statementDt);
    }
    /**
     * Get NumberOfTransactions value
     * @return long|null
     */
    public function getNumberOfTransactions()
    {
        return $this->NumberOfTransactions;
    }
    /**
     * Set NumberOfTransactions value
     * @param long $_numberOfTransactions the NumberOfTransactions
     * @return long
     */
    public function setNumberOfTransactions($_numberOfTransactions)
    {
        return ($this->NumberOfTransactions = $_numberOfTransactions);
    }
    /**
     * Get NumberOfNSFs value
     * @return long|null
     */
    public function getNumberOfNSFs()
    {
        return $this->NumberOfNSFs;
    }
    /**
     * Set NumberOfNSFs value
     * @param long $_numberOfNSFs the NumberOfNSFs
     * @return long
     */
    public function setNumberOfNSFs($_numberOfNSFs)
    {
        return ($this->NumberOfNSFs = $_numberOfNSFs);
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
     * Get VerifiedDt value
     * @return date|null
     */
    public function getVerifiedDt()
    {
        return $this->VerifiedDt;
    }
    /**
     * Set VerifiedDt value
     * @param date $_verifiedDt the VerifiedDt
     * @return date
     */
    public function setVerifiedDt($_verifiedDt)
    {
        return ($this->VerifiedDt = $_verifiedDt);
    }
    /**
     * Get StatementBalAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getStatementBalAmt()
    {
        return $this->StatementBalAmt;
    }
    /**
     * Set StatementBalAmt value
     * @param MicrobiltStructCurrencyAmount $_statementBalAmt the StatementBalAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setStatementBalAmt($_statementBalAmt)
    {
        return ($this->StatementBalAmt = $_statementBalAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructBankStatement_Type
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
