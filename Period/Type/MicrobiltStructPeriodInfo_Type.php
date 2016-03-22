<?php
/**
 * File for class MicrobiltStructPeriodInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPeriodInfo_Type originally named PeriodInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPeriodInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The PeriodIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $PeriodIndicator;
    /**
     * The PeriodDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $PeriodDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for PeriodInfo_Type
     * @see parent::__construct()
     * @param long $_periodIndicator
     * @param date $_periodDt
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructPeriodInfo_Type
     */
    public function __construct($_periodIndicator = NULL,$_periodDt = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PeriodIndicator'=>$_periodIndicator,'PeriodDt'=>$_periodDt,'Message'=>$_message),false);
    }
    /**
     * Get PeriodIndicator value
     * @return long|null
     */
    public function getPeriodIndicator()
    {
        return $this->PeriodIndicator;
    }
    /**
     * Set PeriodIndicator value
     * @param long $_periodIndicator the PeriodIndicator
     * @return long
     */
    public function setPeriodIndicator($_periodIndicator)
    {
        return ($this->PeriodIndicator = $_periodIndicator);
    }
    /**
     * Get PeriodDt value
     * @return date|null
     */
    public function getPeriodDt()
    {
        return $this->PeriodDt;
    }
    /**
     * Set PeriodDt value
     * @param date $_periodDt the PeriodDt
     * @return date
     */
    public function setPeriodDt($_periodDt)
    {
        return ($this->PeriodDt = $_periodDt);
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
     * @return MicrobiltStructPeriodInfo_Type
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
