<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructSummaryCharacteristics
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSummaryCharacteristics originally named SummaryCharacteristics
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSummaryCharacteristics extends MicrobiltStructSummaryCharacteristics_Type
{
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $Quantity;
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The Characteristics
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $Characteristics;
    /**
     * Constructor method for SummaryCharacteristics
     * @see parent::__construct()
     * @param int $_quantity
     * @param string $_msgClass
     * @param MicrobiltStructCodeDescription_Type $_characteristics
     * @return MicrobiltStructSummaryCharacteristics
     */
    public function __construct($_quantity,$_msgClass = NULL,$_characteristics = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Quantity'=>$_quantity,'MsgClass'=>$_msgClass,'Characteristics'=>$_characteristics),false);
    }
    /**
     * Get Quantity value
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $_quantity the Quantity
     * @return int
     */
    public function setQuantity($_quantity)
    {
        return ($this->Quantity = $_quantity);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get Characteristics value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getCharacteristics()
    {
        return $this->Characteristics;
    }
    /**
     * Set Characteristics value
     * @param MicrobiltStructCodeDescription_Type $_characteristics the Characteristics
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setCharacteristics($_characteristics)
    {
        return ($this->Characteristics = $_characteristics);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructSummaryCharacteristics
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
