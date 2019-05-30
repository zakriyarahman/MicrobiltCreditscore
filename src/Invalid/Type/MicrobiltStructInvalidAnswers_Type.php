<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructInvalidAnswers_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructInvalidAnswers_Type originally named InvalidAnswers_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructInvalidAnswers_Type extends MicrobiltStructAggregate
{
    /**
     * The InvalidAnswer
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $InvalidAnswer;
    /**
     * Constructor method for InvalidAnswers_Type
     * @see parent::__construct()
     * @param string $_invalidAnswer
     * @return MicrobiltStructInvalidAnswers_Type
     */
    public function __construct($_invalidAnswer = NULL)
    {
        MicrobiltWsdlClass::__construct(array('InvalidAnswer'=>$_invalidAnswer),false);
    }
    /**
     * Get InvalidAnswer value
     * @return string|null
     */
    public function getInvalidAnswer()
    {
        return $this->InvalidAnswer;
    }
    /**
     * Set InvalidAnswer value
     * @param string $_invalidAnswer the InvalidAnswer
     * @return string
     */
    public function setInvalidAnswer($_invalidAnswer)
    {
        return ($this->InvalidAnswer = $_invalidAnswer);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructInvalidAnswers_Type
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
