<?php

namespace Zakriyarahman\Microbilt\Other\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructOtherTaxId_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructOtherTaxId_Type originally named OtherTaxId_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructOtherTaxId_Type extends MicrobiltStructAggregate
{
    /**
     * The TINType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TINType;
    /**
     * The AltTaxId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AltTaxId;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for OtherTaxId_Type
     * @see parent::__construct()
     * @param string $_tINType
     * @param string $_altTaxId
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructOtherTaxId_Type
     */
    public function __construct($_tINType = NULL,$_altTaxId = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('TINType'=>$_tINType,'AltTaxId'=>$_altTaxId,'Message'=>$_message),false);
    }
    /**
     * Get TINType value
     * @return string|null
     */
    public function getTINType()
    {
        return $this->TINType;
    }
    /**
     * Set TINType value
     * @param string $_tINType the TINType
     * @return string
     */
    public function setTINType($_tINType)
    {
        return ($this->TINType = $_tINType);
    }
    /**
     * Get AltTaxId value
     * @return string|null
     */
    public function getAltTaxId()
    {
        return $this->AltTaxId;
    }
    /**
     * Set AltTaxId value
     * @param string $_altTaxId the AltTaxId
     * @return string
     */
    public function setAltTaxId($_altTaxId)
    {
        return ($this->AltTaxId = $_altTaxId);
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
     * @return MicrobiltStructOtherTaxId_Type
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
