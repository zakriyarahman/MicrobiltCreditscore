<?php
/**
 * File for class MicrobiltStructAccountingInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAccountingInfo_Type originally named AccountingInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAccountingInfo_Type extends MicrobiltStructAggregate
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
     * The AccountingPeriodInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPeriodInfo_Type
     */
    public $AccountingPeriodInfo;
    /**
     * The AccountingElementsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructElementsInfo_Type
     */
    public $AccountingElementsInfo;
    /**
     * The FilingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $FilingDt;
    /**
     * The FilingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingType;
    /**
     * Constructor method for AccountingInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltStructPeriodInfo_Type $_accountingPeriodInfo
     * @param MicrobiltStructElementsInfo_Type $_accountingElementsInfo
     * @param date $_filingDt
     * @param string $_filingType
     * @return MicrobiltStructAccountingInfo_Type
     */
    public function __construct($_msgClass = NULL,$_accountingPeriodInfo = NULL,$_accountingElementsInfo = NULL,$_filingDt = NULL,$_filingType = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'AccountingPeriodInfo'=>$_accountingPeriodInfo,'AccountingElementsInfo'=>$_accountingElementsInfo,'FilingDt'=>$_filingDt,'FilingType'=>$_filingType),false);
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
     * Get AccountingPeriodInfo value
     * @return MicrobiltStructPeriodInfo_Type|null
     */
    public function getAccountingPeriodInfo()
    {
        return $this->AccountingPeriodInfo;
    }
    /**
     * Set AccountingPeriodInfo value
     * @param MicrobiltStructPeriodInfo_Type $_accountingPeriodInfo the AccountingPeriodInfo
     * @return MicrobiltStructPeriodInfo_Type
     */
    public function setAccountingPeriodInfo($_accountingPeriodInfo)
    {
        return ($this->AccountingPeriodInfo = $_accountingPeriodInfo);
    }
    /**
     * Get AccountingElementsInfo value
     * @return MicrobiltStructElementsInfo_Type|null
     */
    public function getAccountingElementsInfo()
    {
        return $this->AccountingElementsInfo;
    }
    /**
     * Set AccountingElementsInfo value
     * @param MicrobiltStructElementsInfo_Type $_accountingElementsInfo the AccountingElementsInfo
     * @return MicrobiltStructElementsInfo_Type
     */
    public function setAccountingElementsInfo($_accountingElementsInfo)
    {
        return ($this->AccountingElementsInfo = $_accountingElementsInfo);
    }
    /**
     * Get FilingDt value
     * @return date|null
     */
    public function getFilingDt()
    {
        return $this->FilingDt;
    }
    /**
     * Set FilingDt value
     * @param date $_filingDt the FilingDt
     * @return date
     */
    public function setFilingDt($_filingDt)
    {
        return ($this->FilingDt = $_filingDt);
    }
    /**
     * Get FilingType value
     * @return string|null
     */
    public function getFilingType()
    {
        return $this->FilingType;
    }
    /**
     * Set FilingType value
     * @param string $_filingType the FilingType
     * @return string
     */
    public function setFilingType($_filingType)
    {
        return ($this->FilingType = $_filingType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAccountingInfo_Type
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
