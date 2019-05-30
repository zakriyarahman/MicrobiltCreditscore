<?php

namespace Zakriyarahman\Microbilt\Question\Type;

/**
 * File for class MicrobiltStructQuestionConfig_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructQuestionConfig_Type originally named QuestionConfig_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructQuestionConfig_Type extends MicrobiltStructAggregate
{
    /**
     * The QuestionID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionID;
    /**
     * The NumOfAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOfAnswers;
    /**
     * The NumOfCorrectAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOfCorrectAnswers;
    /**
     * Constructor method for QuestionConfig_Type
     * @see parent::__construct()
     * @param string $_questionID
     * @param int $_numOfAnswers
     * @param int $_numOfCorrectAnswers
     * @return MicrobiltStructQuestionConfig_Type
     */
    public function __construct($_questionID = NULL,$_numOfAnswers = NULL,$_numOfCorrectAnswers = NULL)
    {
        MicrobiltWsdlClass::__construct(array('QuestionID'=>$_questionID,'NumOfAnswers'=>$_numOfAnswers,'NumOfCorrectAnswers'=>$_numOfCorrectAnswers),false);
    }
    /**
     * Get QuestionID value
     * @return string|null
     */
    public function getQuestionID()
    {
        return $this->QuestionID;
    }
    /**
     * Set QuestionID value
     * @param string $_questionID the QuestionID
     * @return string
     */
    public function setQuestionID($_questionID)
    {
        return ($this->QuestionID = $_questionID);
    }
    /**
     * Get NumOfAnswers value
     * @return int|null
     */
    public function getNumOfAnswers()
    {
        return $this->NumOfAnswers;
    }
    /**
     * Set NumOfAnswers value
     * @param int $_numOfAnswers the NumOfAnswers
     * @return int
     */
    public function setNumOfAnswers($_numOfAnswers)
    {
        return ($this->NumOfAnswers = $_numOfAnswers);
    }
    /**
     * Get NumOfCorrectAnswers value
     * @return int|null
     */
    public function getNumOfCorrectAnswers()
    {
        return $this->NumOfCorrectAnswers;
    }
    /**
     * Set NumOfCorrectAnswers value
     * @param int $_numOfCorrectAnswers the NumOfCorrectAnswers
     * @return int
     */
    public function setNumOfCorrectAnswers($_numOfCorrectAnswers)
    {
        return ($this->NumOfCorrectAnswers = $_numOfCorrectAnswers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructQuestionConfig_Type
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
