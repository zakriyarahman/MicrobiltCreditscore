<?php
/**
 * File for class MicrobiltStructDecision_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructDecision_Type originally named Decision_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructDecision_Type extends MicrobiltStructAggregate
{
    /**
     * The DecisionCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DecisionCode;
    /**
     * The ReturnValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $ReturnValue;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Text;
    /**
     * The DecisionTable
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructDecisionTable_Type
     */
    public $DecisionTable;
    /**
     * The DTApplicationVariables
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructDTApplicationVariables_Type
     */
    public $DTApplicationVariables;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Decision_Type
     * @see parent::__construct()
     * @param string $_decisionCode
     * @param MicrobiltStructCodeDescription_Type $_returnValue
     * @param string $_text
     * @param MicrobiltStructDecisionTable_Type $_decisionTable
     * @param MicrobiltStructDTApplicationVariables_Type $_dTApplicationVariables
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructDecision_Type
     */
    public function __construct($_decisionCode = NULL,$_returnValue = NULL,$_text = NULL,$_decisionTable = NULL,$_dTApplicationVariables = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('DecisionCode'=>$_decisionCode,'ReturnValue'=>$_returnValue,'Text'=>$_text,'DecisionTable'=>$_decisionTable,'DTApplicationVariables'=>$_dTApplicationVariables,'Message'=>$_message),false);
    }
    /**
     * Get DecisionCode value
     * @return string|null
     */
    public function getDecisionCode()
    {
        return $this->DecisionCode;
    }
    /**
     * Set DecisionCode value
     * @param string $_decisionCode the DecisionCode
     * @return string
     */
    public function setDecisionCode($_decisionCode)
    {
        return ($this->DecisionCode = $_decisionCode);
    }
    /**
     * Get ReturnValue value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getReturnValue()
    {
        return $this->ReturnValue;
    }
    /**
     * Set ReturnValue value
     * @param MicrobiltStructCodeDescription_Type $_returnValue the ReturnValue
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setReturnValue($_returnValue)
    {
        return ($this->ReturnValue = $_returnValue);
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
     * Get DecisionTable value
     * @return MicrobiltStructDecisionTable_Type|null
     */
    public function getDecisionTable()
    {
        return $this->DecisionTable;
    }
    /**
     * Set DecisionTable value
     * @param MicrobiltStructDecisionTable_Type $_decisionTable the DecisionTable
     * @return MicrobiltStructDecisionTable_Type
     */
    public function setDecisionTable($_decisionTable)
    {
        return ($this->DecisionTable = $_decisionTable);
    }
    /**
     * Get DTApplicationVariables value
     * @return MicrobiltStructDTApplicationVariables_Type|null
     */
    public function getDTApplicationVariables()
    {
        return $this->DTApplicationVariables;
    }
    /**
     * Set DTApplicationVariables value
     * @param MicrobiltStructDTApplicationVariables_Type $_dTApplicationVariables the DTApplicationVariables
     * @return MicrobiltStructDTApplicationVariables_Type
     */
    public function setDTApplicationVariables($_dTApplicationVariables)
    {
        return ($this->DTApplicationVariables = $_dTApplicationVariables);
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
     * @return MicrobiltStructDecision_Type
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
