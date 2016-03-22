<?php
/**
 * File for class MicrobiltStructInqCountInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructInqCountInfo_Type originally named InqCountInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructInqCountInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The InqDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $InqDt;
    /**
     * The InqCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $InqCount;
    /**
     * Constructor method for InqCountInfo_Type
     * @see parent::__construct()
     * @param date $_inqDt
     * @param long $_inqCount
     * @return MicrobiltStructInqCountInfo_Type
     */
    public function __construct($_inqDt = NULL,$_inqCount = NULL)
    {
        MicrobiltWsdlClass::__construct(array('InqDt'=>$_inqDt,'InqCount'=>$_inqCount),false);
    }
    /**
     * Get InqDt value
     * @return date|null
     */
    public function getInqDt()
    {
        return $this->InqDt;
    }
    /**
     * Set InqDt value
     * @param date $_inqDt the InqDt
     * @return date
     */
    public function setInqDt($_inqDt)
    {
        return ($this->InqDt = $_inqDt);
    }
    /**
     * Get InqCount value
     * @return long|null
     */
    public function getInqCount()
    {
        return $this->InqCount;
    }
    /**
     * Set InqCount value
     * @param long $_inqCount the InqCount
     * @return long
     */
    public function setInqCount($_inqCount)
    {
        return ($this->InqCount = $_inqCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructInqCountInfo_Type
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
