<?php

namespace Zakriyarahman\Microbilt\Corp\Type;

/**
 * File for class MicrobiltStructCorpInquiry_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCorpInquiry_Type originally named CorpInquiry_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCorpInquiry_Type extends MicrobiltStructAggregate
{
    /**
     * The BusCatagory
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusCatagory;
    /**
     * The InqCountInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructInqCountInfo_Type
     */
    public $InqCountInfo;
    /**
     * Constructor method for CorpInquiry_Type
     * @see parent::__construct()
     * @param string $_busCatagory
     * @param MicrobiltStructInqCountInfo_Type $_inqCountInfo
     * @return MicrobiltStructCorpInquiry_Type
     */
    public function __construct($_busCatagory = NULL,$_inqCountInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('BusCatagory'=>$_busCatagory,'InqCountInfo'=>$_inqCountInfo),false);
    }
    /**
     * Get BusCatagory value
     * @return string|null
     */
    public function getBusCatagory()
    {
        return $this->BusCatagory;
    }
    /**
     * Set BusCatagory value
     * @param string $_busCatagory the BusCatagory
     * @return string
     */
    public function setBusCatagory($_busCatagory)
    {
        return ($this->BusCatagory = $_busCatagory);
    }
    /**
     * Get InqCountInfo value
     * @return MicrobiltStructInqCountInfo_Type|null
     */
    public function getInqCountInfo()
    {
        return $this->InqCountInfo;
    }
    /**
     * Set InqCountInfo value
     * @param MicrobiltStructInqCountInfo_Type $_inqCountInfo the InqCountInfo
     * @return MicrobiltStructInqCountInfo_Type
     */
    public function setInqCountInfo($_inqCountInfo)
    {
        return ($this->InqCountInfo = $_inqCountInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCorpInquiry_Type
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
