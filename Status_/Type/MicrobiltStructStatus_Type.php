<?php
/**
 * File for class MicrobiltStructStatus_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructStatus_Type originally named Status_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructStatus_Type extends MicrobiltWsdlClass
{
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $StatusCode;
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var MicrobiltEnumSeverity_Type
     */
    public $Severity;
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
     * The AdditionalStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructAdditionalStatus_Type
     */
    public $AdditionalStatus;
    /**
     * Constructor method for Status_Type
     * @see parent::__construct()
     * @param int $_statusCode
     * @param MicrobiltEnumSeverity_Type $_severity
     * @param string $_serverStatusCode
     * @param string $_statusDesc
     * @param MicrobiltStructAdditionalStatus_Type $_additionalStatus
     * @return MicrobiltStructStatus_Type
     */
    public function __construct($_statusCode,$_severity,$_serverStatusCode = NULL,$_statusDesc = NULL,$_additionalStatus = NULL)
    {
        parent::__construct(array('StatusCode'=>$_statusCode,'Severity'=>$_severity,'ServerStatusCode'=>$_serverStatusCode,'StatusDesc'=>$_statusDesc,'AdditionalStatus'=>$_additionalStatus),false);
    }
    /**
     * Get StatusCode value
     * @return int
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
     * Get AdditionalStatus value
     * @return MicrobiltStructAdditionalStatus_Type|null
     */
    public function getAdditionalStatus()
    {
        return $this->AdditionalStatus;
    }
    /**
     * Set AdditionalStatus value
     * @param MicrobiltStructAdditionalStatus_Type $_additionalStatus the AdditionalStatus
     * @return MicrobiltStructAdditionalStatus_Type
     */
    public function setAdditionalStatus($_additionalStatus)
    {
        return ($this->AdditionalStatus = $_additionalStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructStatus_Type
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
