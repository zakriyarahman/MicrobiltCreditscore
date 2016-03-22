<?php
/**
 * File for class MicrobiltStructQuestionsAnswers_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructQuestionsAnswers_Type originally named QuestionsAnswers_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructQuestionsAnswers_Type extends MicrobiltStructAggregate
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
     * The MultipleCorrectAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $MultipleCorrectAnswers;
    /**
     * The QuestionText
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionText;
    /**
     * The QuestionInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionInfo;
    /**
     * The Answers
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructAnswers_Type
     */
    public $Answers;
    /**
     * The SubQuestions
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructSubQuestions_Type
     */
    public $SubQuestions;
    /**
     * The InvalidAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructInvalidAnswers_Type
     */
    public $InvalidAnswers;
    /**
     * Constructor method for QuestionsAnswers_Type
     * @see parent::__construct()
     * @param string $_questionID
     * @param MicrobiltEnumBoolean $_multipleCorrectAnswers
     * @param string $_questionText
     * @param string $_questionInfo
     * @param MicrobiltStructAnswers_Type $_answers
     * @param MicrobiltStructSubQuestions_Type $_subQuestions
     * @param MicrobiltStructInvalidAnswers_Type $_invalidAnswers
     * @return MicrobiltStructQuestionsAnswers_Type
     */
    public function __construct($_questionID = NULL,$_multipleCorrectAnswers = NULL,$_questionText = NULL,$_questionInfo = NULL,$_answers = NULL,$_subQuestions = NULL,$_invalidAnswers = NULL)
    {
        MicrobiltWsdlClass::__construct(array('QuestionID'=>$_questionID,'MultipleCorrectAnswers'=>$_multipleCorrectAnswers,'QuestionText'=>$_questionText,'QuestionInfo'=>$_questionInfo,'Answers'=>$_answers,'SubQuestions'=>$_subQuestions,'InvalidAnswers'=>$_invalidAnswers),false);
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
     * Get MultipleCorrectAnswers value
     * @return MicrobiltEnumBoolean|null
     */
    public function getMultipleCorrectAnswers()
    {
        return $this->MultipleCorrectAnswers;
    }
    /**
     * Set MultipleCorrectAnswers value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_multipleCorrectAnswers the MultipleCorrectAnswers
     * @return MicrobiltEnumBoolean
     */
    public function setMultipleCorrectAnswers($_multipleCorrectAnswers)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_multipleCorrectAnswers))
        {
            return false;
        }
        return ($this->MultipleCorrectAnswers = $_multipleCorrectAnswers);
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
     * Get QuestionInfo value
     * @return string|null
     */
    public function getQuestionInfo()
    {
        return $this->QuestionInfo;
    }
    /**
     * Set QuestionInfo value
     * @param string $_questionInfo the QuestionInfo
     * @return string
     */
    public function setQuestionInfo($_questionInfo)
    {
        return ($this->QuestionInfo = $_questionInfo);
    }
    /**
     * Get Answers value
     * @return MicrobiltStructAnswers_Type|null
     */
    public function getAnswers()
    {
        return $this->Answers;
    }
    /**
     * Set Answers value
     * @param MicrobiltStructAnswers_Type $_answers the Answers
     * @return MicrobiltStructAnswers_Type
     */
    public function setAnswers($_answers)
    {
        return ($this->Answers = $_answers);
    }
    /**
     * Get SubQuestions value
     * @return MicrobiltStructSubQuestions_Type|null
     */
    public function getSubQuestions()
    {
        return $this->SubQuestions;
    }
    /**
     * Set SubQuestions value
     * @param MicrobiltStructSubQuestions_Type $_subQuestions the SubQuestions
     * @return MicrobiltStructSubQuestions_Type
     */
    public function setSubQuestions($_subQuestions)
    {
        return ($this->SubQuestions = $_subQuestions);
    }
    /**
     * Get InvalidAnswers value
     * @return MicrobiltStructInvalidAnswers_Type|null
     */
    public function getInvalidAnswers()
    {
        return $this->InvalidAnswers;
    }
    /**
     * Set InvalidAnswers value
     * @param MicrobiltStructInvalidAnswers_Type $_invalidAnswers the InvalidAnswers
     * @return MicrobiltStructInvalidAnswers_Type
     */
    public function setInvalidAnswers($_invalidAnswers)
    {
        return ($this->InvalidAnswers = $_invalidAnswers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructQuestionsAnswers_Type
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
