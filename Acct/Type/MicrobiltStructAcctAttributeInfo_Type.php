<?php
/**
 * File for class MicrobiltStructAcctAttributeInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAcctAttributeInfo_Type originally named AcctAttributeInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAcctAttributeInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The AttribName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AttribName;
    /**
     * The AttribAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $AttribAmt;
    /**
     * The AttribDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $AttribDt;
    /**
     * Constructor method for AcctAttributeInfo_Type
     * @see parent::__construct()
     * @param string $_attribName
     * @param MicrobiltStructCurrencyAmount $_attribAmt
     * @param date $_attribDt
     * @return MicrobiltStructAcctAttributeInfo_Type
     */
    public function __construct($_attribName = NULL,$_attribAmt = NULL,$_attribDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AttribName'=>$_attribName,'AttribAmt'=>$_attribAmt,'AttribDt'=>$_attribDt),false);
    }
    /**
     * Get AttribName value
     * @return string|null
     */
    public function getAttribName()
    {
        return $this->AttribName;
    }
    /**
     * Set AttribName value
     * @param string $_attribName the AttribName
     * @return string
     */
    public function setAttribName($_attribName)
    {
        return ($this->AttribName = $_attribName);
    }
    /**
     * Get AttribAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getAttribAmt()
    {
        return $this->AttribAmt;
    }
    /**
     * Set AttribAmt value
     * @param MicrobiltStructCurrencyAmount $_attribAmt the AttribAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setAttribAmt($_attribAmt)
    {
        return ($this->AttribAmt = $_attribAmt);
    }
    /**
     * Get AttribDt value
     * @return date|null
     */
    public function getAttribDt()
    {
        return $this->AttribDt;
    }
    /**
     * Set AttribDt value
     * @param date $_attribDt the AttribDt
     * @return date
     */
    public function setAttribDt($_attribDt)
    {
        return ($this->AttribDt = $_attribDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAcctAttributeInfo_Type
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
