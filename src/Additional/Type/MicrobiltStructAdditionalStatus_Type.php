<?php

namespace Zakriyarahman\Microbilt\Additional\Type;

/**
 * File for class MicrobiltStructAdditionalStatus_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAdditionalStatus_Type originally named AdditionalStatus_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAdditionalStatus_Type extends MicrobiltWsdlClass
{
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var MicrobiltEnumSeverity_Type
     */
    public $Severity;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $StatusCode;
    /**
     * The ServerStatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ServerStatusCode;
    /**
     * The StatusDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatusDesc;
    /**
     * Constructor method for AdditionalStatus_Type
     * @see parent::__construct()
     * @param MicrobiltEnumSeverity_Type $_severity
     * @param int $_statusCode
     * @param string $_serverStatusCode
     * @param string $_statusDesc
     * @return MicrobiltStructAdditionalStatus_Type
     */
    public function __construct($_severity,$_statusCode = NULL,$_serverStatusCode = NULL,$_statusDesc = NULL)
    {
        parent::__construct(array('Severity'=>$_severity,'StatusCode'=>$_statusCode,'ServerStatusCode'=>$_serverStatusCode,'StatusDesc'=>$_statusDesc),false);
    }
    /**
     * Get Severity value
     * @return MicrobiltEnumSeverity_Type
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @uses MicrobiltEnumSeverity_Type::valueIsValid()
     * @param MicrobiltEnumSeverity_Type $_severity the Severity
     * @return MicrobiltEnumSeverity_Type
     */
    public function setSeverity($_severity)
    {
        if(!MicrobiltEnumSeverity_Type::valueIsValid($_severity))
        {
            return false;
        }
        return ($this->Severity = $_severity);
    }
    /**
     * Get StatusCode value
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param int $_statusCode the StatusCode
     * @return int
     */
    public function setStatusCode($_statusCode)
    {
        return ($this->StatusCode = $_statusCode);
    }
    /**
     * Get ServerStatusCode value
     * @return string|null
     */
    public function getServerStatusCode()
    {
        return $this->ServerStatusCode;
    }
    /**
     * Set ServerStatusCode value
     * @param string $_serverStatusCode the ServerStatusCode
     * @return string
     */
    public function setServerStatusCode($_serverStatusCode)
    {
        return ($this->ServerStatusCode = $_serverStatusCode);
    }
    /**
     * Get StatusDesc value
     * @return string|null
     */
    public function getStatusDesc()
    {
        return $this->StatusDesc;
    }
    /**
     * Set StatusDesc value
     * @param string $_statusDesc the StatusDesc
     * @return string
     */
    public function setStatusDesc($_statusDesc)
    {
        return ($this->StatusDesc = $_statusDesc);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAdditionalStatus_Type
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
