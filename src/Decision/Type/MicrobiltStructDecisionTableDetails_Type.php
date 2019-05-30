<?php

namespace Zakriyarahman\Microbilt\Decision\Type;

/**
 * File for class MicrobiltStructDecisionTableDetails_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructDecisionTableDetails_Type originally named DecisionTableDetails_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructDecisionTableDetails_Type extends MicrobiltStructAggregate
{
    /**
     * The Function
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Function;
    /**
     * The Result
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Result;
    /**
     * The Passed
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $Passed;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for DecisionTableDetails_Type
     * @see parent::__construct()
     * @param string $_function
     * @param string $_result
     * @param MicrobiltEnumBoolean $_passed
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructDecisionTableDetails_Type
     */
    public function __construct($_function = NULL,$_result = NULL,$_passed = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Function'=>$_function,'Result'=>$_result,'Passed'=>$_passed,'Message'=>$_message),false);
    }
    /**
     * Get Function value
     * @return string|null
     */
    public function getFunction()
    {
        return $this->Function;
    }
    /**
     * Set Function value
     * @param string $_function the Function
     * @return string
     */
    public function setFunction($_function)
    {
        return ($this->Function = $_function);
    }
    /**
     * Get Result value
     * @return string|null
     */
    public function getResult()
    {
        return $this->Result;
    }
    /**
     * Set Result value
     * @param string $_result the Result
     * @return string
     */
    public function setResult($_result)
    {
        return ($this->Result = $_result);
    }
    /**
     * Get Passed value
     * @return MicrobiltEnumBoolean|null
     */
    public function getPassed()
    {
        return $this->Passed;
    }
    /**
     * Set Passed value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_passed the Passed
     * @return MicrobiltEnumBoolean
     */
    public function setPassed($_passed)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_passed))
        {
            return false;
        }
        return ($this->Passed = $_passed);
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
     * @return MicrobiltStructDecisionTableDetails_Type
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
