<?php

namespace Zakriyarahman\Microbilt\Consumer\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class ConsumerStatement_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for ConsumerStatement_Type originally named ConsumerStatement_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class ConsumerStatement_Type extends Aggregate
{
    /**
     * The StatementType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatementType;
    /**
     * The StatementDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatementDt;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $Text;
    /**
     * Constructor method for ConsumerStatement_Type
     * @see parent::__construct()
     * @param string $_statementType
     * @param string $_statementDt
     * @param string $_text
     * @return ConsumerStatement_Type
     */
    public function __construct($_statementType = NULL,$_statementDt = NULL,$_text = NULL)
    {
        MicrobiltWsdlClass::__construct(array('StatementType'=>$_statementType,'StatementDt'=>$_statementDt,'Text'=>$_text),false);
    }
    /**
     * Get StatementType value
     * @return string|null
     */
    public function getStatementType()
    {
        return $this->StatementType;
    }
    /**
     * Set StatementType value
     * @param string $_statementType the StatementType
     * @return string
     */
    public function setStatementType($_statementType)
    {
        return ($this->StatementType = $_statementType);
    }
    /**
     * Get StatementDt value
     * @return string|null
     */
    public function getStatementDt()
    {
        return $this->StatementDt;
    }
    /**
     * Set StatementDt value
     * @param string $_statementDt the StatementDt
     * @return string
     */
    public function setStatementDt($_statementDt)
    {
        return ($this->StatementDt = $_statementDt);
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $_text the Text
     * @return string
     */
    public function setText($_text)
    {
        return ($this->Text = $_text);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ConsumerStatement_Type
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
