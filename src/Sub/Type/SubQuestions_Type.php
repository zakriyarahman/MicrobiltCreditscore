<?php

namespace Zakriyarahman\Microbilt\Sub\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class SubQuestions_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for SubQuestions_Type originally named SubQuestions_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class SubQuestions_Type extends Aggregate
{
    /**
     * The QuestionText
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionText;
    /**
     * The AnswerValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AnswerValue;
    /**
     * Constructor method for SubQuestions_Type
     * @see parent::__construct()
     * @param string $_questionText
     * @param string $_answerValue
     * @return SubQuestions_Type
     */
    public function __construct($_questionText = NULL,$_answerValue = NULL)
    {
        MicrobiltWsdlClass::__construct(array('QuestionText'=>$_questionText,'AnswerValue'=>$_answerValue),false);
    }
    /**
     * Get QuestionText value
     * @return string|null
     */
    public function getQuestionText()
    {
        return $this->QuestionText;
    }
    /**
     * Set QuestionText value
     * @param string $_questionText the QuestionText
     * @return string
     */
    public function setQuestionText($_questionText)
    {
        return ($this->QuestionText = $_questionText);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SubQuestions_Type
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
