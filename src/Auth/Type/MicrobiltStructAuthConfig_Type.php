<?php

namespace Zakriyarahman\Microbilt\Auth\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructAuthConfig_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAuthConfig_Type originally named AuthConfig_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAuthConfig_Type extends MicrobiltStructAggregate
{
    /**
     * The NumOfQuestions
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOfQuestions;
    /**
     * The QuestionConfig
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructQuestionConfig_Type
     */
    public $QuestionConfig;
    /**
     * Constructor method for AuthConfig_Type
     * @see parent::__construct()
     * @param int $_numOfQuestions
     * @param MicrobiltStructQuestionConfig_Type $_questionConfig
     * @return MicrobiltStructAuthConfig_Type
     */
    public function __construct($_numOfQuestions = NULL,$_questionConfig = NULL)
    {
        MicrobiltWsdlClass::__construct(array('NumOfQuestions'=>$_numOfQuestions,'QuestionConfig'=>$_questionConfig),false);
    }
    /**
     * Get NumOfQuestions value
     * @return int|null
     */
    public function getNumOfQuestions()
    {
        return $this->NumOfQuestions;
    }
    /**
     * Set NumOfQuestions value
     * @param int $_numOfQuestions the NumOfQuestions
     * @return int
     */
    public function setNumOfQuestions($_numOfQuestions)
    {
        return ($this->NumOfQuestions = $_numOfQuestions);
    }
    /**
     * Get QuestionConfig value
     * @return MicrobiltStructQuestionConfig_Type|null
     */
    public function getQuestionConfig()
    {
        return $this->QuestionConfig;
    }
    /**
     * Set QuestionConfig value
     * @param MicrobiltStructQuestionConfig_Type $_questionConfig the QuestionConfig
     * @return MicrobiltStructQuestionConfig_Type
     */
    public function setQuestionConfig($_questionConfig)
    {
        return ($this->QuestionConfig = $_questionConfig);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAuthConfig_Type
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
