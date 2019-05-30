<?php

namespace Zakriyarahman\Microbilt\Profile\Type;

/**
 * File for class MicrobiltStructProfileStatusInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructProfileStatusInfo_Type originally named ProfileStatusInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructProfileStatusInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The ProfileStatusDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProfileStatusDt;
    /**
     * The StatusHTML
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatusHTML;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ProfileStatusInfo_Type
     * @see parent::__construct()
     * @param string $_profileStatusDt
     * @param string $_statusHTML
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructProfileStatusInfo_Type
     */
    public function __construct($_profileStatusDt = NULL,$_statusHTML = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ProfileStatusDt'=>$_profileStatusDt,'StatusHTML'=>$_statusHTML,'Message'=>$_message),false);
    }
    /**
     * Get ProfileStatusDt value
     * @return string|null
     */
    public function getProfileStatusDt()
    {
        return $this->ProfileStatusDt;
    }
    /**
     * Set ProfileStatusDt value
     * @param string $_profileStatusDt the ProfileStatusDt
     * @return string
     */
    public function setProfileStatusDt($_profileStatusDt)
    {
        return ($this->ProfileStatusDt = $_profileStatusDt);
    }
    /**
     * Get StatusHTML value
     * @return string|null
     */
    public function getStatusHTML()
    {
        return $this->StatusHTML;
    }
    /**
     * Set StatusHTML value
     * @param string $_statusHTML the StatusHTML
     * @return string
     */
    public function setStatusHTML($_statusHTML)
    {
        return ($this->StatusHTML = $_statusHTML);
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
     * @return MicrobiltStructProfileStatusInfo_Type
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
