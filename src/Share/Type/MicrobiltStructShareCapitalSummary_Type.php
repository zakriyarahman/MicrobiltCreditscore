<?php

namespace Zakriyarahman\Microbilt\Share\Type;

/**
 * File for class MicrobiltStructShareCapitalSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructShareCapitalSummary_Type originally named ShareCapitalSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructShareCapitalSummary_Type extends MicrobiltStructAggregate
{
    /**
     * The ShareCapital
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructShareCapital_Type
     */
    public $ShareCapital;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ShareCapitalSummary_Type
     * @see parent::__construct()
     * @param MicrobiltStructShareCapital_Type $_shareCapital
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructShareCapitalSummary_Type
     */
    public function __construct($_shareCapital = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ShareCapital'=>$_shareCapital,'Message'=>$_message),false);
    }
    /**
     * Get ShareCapital value
     * @return MicrobiltStructShareCapital_Type|null
     */
    public function getShareCapital()
    {
        return $this->ShareCapital;
    }
    /**
     * Set ShareCapital value
     * @param MicrobiltStructShareCapital_Type $_shareCapital the ShareCapital
     * @return MicrobiltStructShareCapital_Type
     */
    public function setShareCapital($_shareCapital)
    {
        return ($this->ShareCapital = $_shareCapital);
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
     * @return MicrobiltStructShareCapitalSummary_Type
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
