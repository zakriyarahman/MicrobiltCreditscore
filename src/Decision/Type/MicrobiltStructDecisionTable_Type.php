<?php

namespace Zakriyarahman\Microbilt\Decision\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructDecisionTable_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructDecisionTable_Type originally named DecisionTable_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructDecisionTable_Type extends MicrobiltStructAggregate
{
    /**
     * The DecisionTableSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructDecisionTableSummary_Type
     */
    public $DecisionTableSummary;
    /**
     * The DecisionTableDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructDecisionTableDetails_Type
     */
    public $DecisionTableDetails;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for DecisionTable_Type
     * @see parent::__construct()
     * @param MicrobiltStructDecisionTableSummary_Type $_decisionTableSummary
     * @param MicrobiltStructDecisionTableDetails_Type $_decisionTableDetails
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructDecisionTable_Type
     */
    public function __construct($_decisionTableSummary = NULL,$_decisionTableDetails = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('DecisionTableSummary'=>$_decisionTableSummary,'DecisionTableDetails'=>$_decisionTableDetails,'Message'=>$_message),false);
    }
    /**
     * Get DecisionTableSummary value
     * @return MicrobiltStructDecisionTableSummary_Type|null
     */
    public function getDecisionTableSummary()
    {
        return $this->DecisionTableSummary;
    }
    /**
     * Set DecisionTableSummary value
     * @param MicrobiltStructDecisionTableSummary_Type $_decisionTableSummary the DecisionTableSummary
     * @return MicrobiltStructDecisionTableSummary_Type
     */
    public function setDecisionTableSummary($_decisionTableSummary)
    {
        return ($this->DecisionTableSummary = $_decisionTableSummary);
    }
    /**
     * Get DecisionTableDetails value
     * @return MicrobiltStructDecisionTableDetails_Type|null
     */
    public function getDecisionTableDetails()
    {
        return $this->DecisionTableDetails;
    }
    /**
     * Set DecisionTableDetails value
     * @param MicrobiltStructDecisionTableDetails_Type $_decisionTableDetails the DecisionTableDetails
     * @return MicrobiltStructDecisionTableDetails_Type
     */
    public function setDecisionTableDetails($_decisionTableDetails)
    {
        return ($this->DecisionTableDetails = $_decisionTableDetails);
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
     * @return MicrobiltStructDecisionTable_Type
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
