<?php
/**
 * File for class MicrobiltStructExchangeRateInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructExchangeRateInfo_Type originally named ExchangeRateInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructExchangeRateInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The ResearchDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ResearchDt;
    /**
     * The CurCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CurCode;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ExchangeRateInfo_Type
     * @see parent::__construct()
     * @param string $_researchDt
     * @param string $_curCode
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructExchangeRateInfo_Type
     */
    public function __construct($_researchDt = NULL,$_curCode = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ResearchDt'=>$_researchDt,'CurCode'=>$_curCode,'Message'=>$_message),false);
    }
    /**
     * Get ResearchDt value
     * @return string|null
     */
    public function getResearchDt()
    {
        return $this->ResearchDt;
    }
    /**
     * Set ResearchDt value
     * @param string $_researchDt the ResearchDt
     * @return string
     */
    public function setResearchDt($_researchDt)
    {
        return ($this->ResearchDt = $_researchDt);
    }
    /**
     * Get CurCode value
     * @return string|null
     */
    public function getCurCode()
    {
        return $this->CurCode;
    }
    /**
     * Set CurCode value
     * @param string $_curCode the CurCode
     * @return string
     */
    public function setCurCode($_curCode)
    {
        return ($this->CurCode = $_curCode);
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
     * @return MicrobiltStructExchangeRateInfo_Type
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
