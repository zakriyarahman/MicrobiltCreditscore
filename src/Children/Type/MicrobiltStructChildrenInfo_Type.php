<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructChildrenInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructChildrenInfo_Type originally named ChildrenInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructChildrenInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The NumOfChildren
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOfChildren;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ChildrenInfo_Type
     * @see parent::__construct()
     * @param int $_numOfChildren
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructChildrenInfo_Type
     */
    public function __construct($_numOfChildren = NULL,$_personInfo = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('NumOfChildren'=>$_numOfChildren,'PersonInfo'=>$_personInfo,'Message'=>$_message),false);
    }
    /**
     * Get NumOfChildren value
     * @return int|null
     */
    public function getNumOfChildren()
    {
        return $this->NumOfChildren;
    }
    /**
     * Set NumOfChildren value
     * @param int $_numOfChildren the NumOfChildren
     * @return int
     */
    public function setNumOfChildren($_numOfChildren)
    {
        return ($this->NumOfChildren = $_numOfChildren);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
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
     * @return MicrobiltStructChildrenInfo_Type
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
