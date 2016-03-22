<?php
/**
 * File for class MicrobiltStructCategoryInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCategoryInfo_Type originally named CategoryInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCategoryInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The CategoryIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $CategoryIndicator;
    /**
     * The CategoryDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $CategoryDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for CategoryInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param long $_categoryIndicator
     * @param date $_categoryDt
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructCategoryInfo_Type
     */
    public function __construct($_msgClass = NULL,$_categoryIndicator = NULL,$_categoryDt = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'CategoryIndicator'=>$_categoryIndicator,'CategoryDt'=>$_categoryDt,'Message'=>$_message),false);
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
     * Get CategoryIndicator value
     * @return long|null
     */
    public function getCategoryIndicator()
    {
        return $this->CategoryIndicator;
    }
    /**
     * Set CategoryIndicator value
     * @param long $_categoryIndicator the CategoryIndicator
     * @return long
     */
    public function setCategoryIndicator($_categoryIndicator)
    {
        return ($this->CategoryIndicator = $_categoryIndicator);
    }
    /**
     * Get CategoryDt value
     * @return date|null
     */
    public function getCategoryDt()
    {
        return $this->CategoryDt;
    }
    /**
     * Set CategoryDt value
     * @param date $_categoryDt the CategoryDt
     * @return date
     */
    public function setCategoryDt($_categoryDt)
    {
        return ($this->CategoryDt = $_categoryDt);
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
     * @return MicrobiltStructCategoryInfo_Type
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
