<?php

namespace Zakriyarahman\Microbilt\Transactions_\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class Transactions_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for Transactions_Type originally named Transactions_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class Transactions_Type extends Aggregate
{
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Transaction_Type
     */
    public $Transaction;
    /**
     * Constructor method for Transactions_Type
     * @see parent::__construct()
     * @param Transaction_Type $_transaction
     * @return Transactions_Type
     */
    public function __construct($_transaction = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Transaction'=>$_transaction),false);
    }
    /**
     * Get Transaction value
     * @return Transaction_Type|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param Transaction_Type $_transaction the Transaction
     * @return Transaction_Type
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
     * @return Transactions_Type
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
