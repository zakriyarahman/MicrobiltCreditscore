<?php

namespace Zakriyarahman\Microbilt\Decision\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructDecisionTableSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructDecisionTableSummary_Type originally named DecisionTableSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructDecisionTableSummary_Type extends MicrobiltStructAggregate
{
    /**
     * The RuleSetID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RuleSetID;
    /**
     * The DecisionDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DecisionDescription;
    /**
     * The DecisionProduct
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $DecisionProduct;
    /**
     * Constructor method for DecisionTableSummary_Type
     * @see parent::__construct()
     * @param string $_ruleSetID
     * @param string $_decisionDescription
     * @param MicrobiltStructCodeDescription_Type $_decisionProduct
     * @return MicrobiltStructDecisionTableSummary_Type
     */
    public function __construct($_ruleSetID = NULL,$_decisionDescription = NULL,$_decisionProduct = NULL)
    {
        MicrobiltWsdlClass::__construct(array('RuleSetID'=>$_ruleSetID,'DecisionDescription'=>$_decisionDescription,'DecisionProduct'=>$_decisionProduct),false);
    }
    /**
     * Get RuleSetID value
     * @return string|null
     */
    public function getRuleSetID()
    {
        return $this->RuleSetID;
    }
    /**
     * Set RuleSetID value
     * @param string $_ruleSetID the RuleSetID
     * @return string
     */
    public function setRuleSetID($_ruleSetID)
    {
        return ($this->RuleSetID = $_ruleSetID);
    }
    /**
     * Get DecisionDescription value
     * @return string|null
     */
    public function getDecisionDescription()
    {
        return $this->DecisionDescription;
    }
    /**
     * Set DecisionDescription value
     * @param string $_decisionDescription the DecisionDescription
     * @return string
     */
    public function setDecisionDescription($_decisionDescription)
    {
        return ($this->DecisionDescription = $_decisionDescription);
    }
    /**
     * Get DecisionProduct value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getDecisionProduct()
    {
        return $this->DecisionProduct;
    }
    /**
     * Set DecisionProduct value
     * @param MicrobiltStructCodeDescription_Type $_decisionProduct the DecisionProduct
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setDecisionProduct($_decisionProduct)
    {
        return ($this->DecisionProduct = $_decisionProduct);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructDecisionTableSummary_Type
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
