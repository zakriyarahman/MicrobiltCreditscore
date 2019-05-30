<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructAvailableProducts_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAvailableProducts_Type originally named AvailableProducts_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAvailableProducts_Type extends MicrobiltStructAggregate
{
    /**
     * The ServiceSpeed
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $ServiceSpeed;
    /**
     * The DaysFrom
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $DaysFrom;
    /**
     * The DaysTo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $DaysTo;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrderID;
    /**
     * The MimeType
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $MimeType;
    /**
     * Constructor method for AvailableProducts_Type
     * @see parent::__construct()
     * @param int $_serviceSpeed
     * @param int $_daysFrom
     * @param int $_daysTo
     * @param string $_orderID
     * @param string $_mimeType
     * @return MicrobiltStructAvailableProducts_Type
     */
    public function __construct($_serviceSpeed = NULL,$_daysFrom = NULL,$_daysTo = NULL,$_orderID = NULL,$_mimeType = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ServiceSpeed'=>$_serviceSpeed,'DaysFrom'=>$_daysFrom,'DaysTo'=>$_daysTo,'OrderID'=>$_orderID,'MimeType'=>$_mimeType),false);
    }
    /**
     * Get ServiceSpeed value
     * @return int|null
     */
    public function getServiceSpeed()
    {
        return $this->ServiceSpeed;
    }
    /**
     * Set ServiceSpeed value
     * @param int $_serviceSpeed the ServiceSpeed
     * @return int
     */
    public function setServiceSpeed($_serviceSpeed)
    {
        return ($this->ServiceSpeed = $_serviceSpeed);
    }
    /**
     * Get DaysFrom value
     * @return int|null
     */
    public function getDaysFrom()
    {
        return $this->DaysFrom;
    }
    /**
     * Set DaysFrom value
     * @param int $_daysFrom the DaysFrom
     * @return int
     */
    public function setDaysFrom($_daysFrom)
    {
        return ($this->DaysFrom = $_daysFrom);
    }
    /**
     * Get DaysTo value
     * @return int|null
     */
    public function getDaysTo()
    {
        return $this->DaysTo;
    }
    /**
     * Set DaysTo value
     * @param int $_daysTo the DaysTo
     * @return int
     */
    public function setDaysTo($_daysTo)
    {
        return ($this->DaysTo = $_daysTo);
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $_orderID the OrderID
     * @return string
     */
    public function setOrderID($_orderID)
    {
        return ($this->OrderID = $_orderID);
    }
    /**
     * Get MimeType value
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->MimeType;
    }
    /**
     * Set MimeType value
     * @param string $_mimeType the MimeType
     * @return string
     */
    public function setMimeType($_mimeType)
    {
        return ($this->MimeType = $_mimeType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAvailableProducts_Type
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
