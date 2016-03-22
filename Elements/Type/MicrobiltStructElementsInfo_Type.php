<?php
/**
 * File for class MicrobiltStructElementsInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructElementsInfo_Type originally named ElementsInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructElementsInfo_Type extends MicrobiltStructAggregate
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
     * The AccountingAmtItems
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructAmtItems_Type
     */
    public $AccountingAmtItems;
    /**
     * Constructor method for ElementsInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltStructAmtItems_Type $_accountingAmtItems
     * @return MicrobiltStructElementsInfo_Type
     */
    public function __construct($_msgClass = NULL,$_accountingAmtItems = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'AccountingAmtItems'=>$_accountingAmtItems),false);
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
     * Get AccountingAmtItems value
     * @return MicrobiltStructAmtItems_Type|null
     */
    public function getAccountingAmtItems()
    {
        return $this->AccountingAmtItems;
    }
    /**
     * Set AccountingAmtItems value
     * @param MicrobiltStructAmtItems_Type $_accountingAmtItems the AccountingAmtItems
     * @return MicrobiltStructAmtItems_Type
     */
    public function setAccountingAmtItems($_accountingAmtItems)
    {
        return ($this->AccountingAmtItems = $_accountingAmtItems);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructElementsInfo_Type
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
