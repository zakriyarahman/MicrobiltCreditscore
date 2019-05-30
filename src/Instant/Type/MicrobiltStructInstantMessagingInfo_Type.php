<?php

namespace Zakriyarahman\Microbilt\Instant\Type;

/**
 * File for class MicrobiltStructInstantMessagingInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructInstantMessagingInfo_Type originally named InstantMessagingInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructInstantMessagingInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The IMNetwork
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IMNetwork;
    /**
     * The IMType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IMType;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UserName;
    /**
     * Constructor method for InstantMessagingInfo_Type
     * @see parent::__construct()
     * @param string $_iMNetwork
     * @param string $_iMType
     * @param string $_userName
     * @return MicrobiltStructInstantMessagingInfo_Type
     */
    public function __construct($_iMNetwork = NULL,$_iMType = NULL,$_userName = NULL)
    {
        MicrobiltWsdlClass::__construct(array('IMNetwork'=>$_iMNetwork,'IMType'=>$_iMType,'UserName'=>$_userName),false);
    }
    /**
     * Get IMNetwork value
     * @return string|null
     */
    public function getIMNetwork()
    {
        return $this->IMNetwork;
    }
    /**
     * Set IMNetwork value
     * @param string $_iMNetwork the IMNetwork
     * @return string
     */
    public function setIMNetwork($_iMNetwork)
    {
        return ($this->IMNetwork = $_iMNetwork);
    }
    /**
     * Get IMType value
     * @return string|null
     */
    public function getIMType()
    {
        return $this->IMType;
    }
    /**
     * Set IMType value
     * @param string $_iMType the IMType
     * @return string
     */
    public function setIMType($_iMType)
    {
        return ($this->IMType = $_iMType);
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $_userName the UserName
     * @return string
     */
    public function setUserName($_userName)
    {
        return ($this->UserName = $_userName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructInstantMessagingInfo_Type
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
