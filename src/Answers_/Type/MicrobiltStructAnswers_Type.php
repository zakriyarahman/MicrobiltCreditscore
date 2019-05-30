<?php

namespace Zakriyarahman\Microbilt\Answers_\Type;

/**
 * File for class MicrobiltStructAnswers_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAnswers_Type originally named Answers_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAnswers_Type extends MicrobiltStructAggregate
{
    /**
     * The AnswerValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AnswerValue;
    /**
     * The AnswerIsCorrect
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $AnswerIsCorrect;
    /**
     * Constructor method for Answers_Type
     * @see parent::__construct()
     * @param string $_answerValue
     * @param MicrobiltEnumBoolean $_answerIsCorrect
     * @return MicrobiltStructAnswers_Type
     */
    public function __construct($_answerValue = NULL,$_answerIsCorrect = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AnswerValue'=>$_answerValue,'AnswerIsCorrect'=>$_answerIsCorrect),false);
    }
    /**
     * Get AnswerValue value
     * @return string|null
     */
    public function getAnswerValue()
    {
        return $this->AnswerValue;
    }
    /**
     * Set AnswerValue value
     * @param string $_answerValue the AnswerValue
     * @return string
     */
    public function setAnswerValue($_answerValue)
    {
        return ($this->AnswerValue = $_answerValue);
    }
    /**
     * Get AnswerIsCorrect value
     * @return MicrobiltEnumBoolean|null
     */
    public function getAnswerIsCorrect()
    {
        return $this->AnswerIsCorrect;
    }
    /**
     * Set AnswerIsCorrect value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_answerIsCorrect the AnswerIsCorrect
     * @return MicrobiltEnumBoolean
     */
    public function setAnswerIsCorrect($_answerIsCorrect)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_answerIsCorrect))
        {
            return false;
        }
        return ($this->AnswerIsCorrect = $_answerIsCorrect);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAnswers_Type
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
