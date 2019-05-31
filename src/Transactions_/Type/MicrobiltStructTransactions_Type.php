<?php

namespace Zakriyarahman\Microbilt\Transactions_\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructTransactions_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructTransactions_Type originally named Transactions_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructTransactions_Type extends MicrobiltStructAggregate
{
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructTransaction_Type
     */
    public $Transaction;
    /**
     * Constructor method for Transactions_Type
     * @see parent::__construct()
     * @param MicrobiltStructTransaction_Type $_transaction
     * @return MicrobiltStructTransactions_Type
     */
    public function __construct($_transaction = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Transaction'=>$_transaction),false);
    }
    /**
     * Get Transaction value
     * @return MicrobiltStructTransaction_Type|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param MicrobiltStructTransaction_Type $_transaction the Transaction
     * @return MicrobiltStructTransaction_Type
     */
    public function setTransaction($_transaction)
    {
        return ($this->Transaction = $_transaction);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructTransactions_Type
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
