<?php

namespace Zakriyarahman\Microbilt\Inq\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class InqCountInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for InqCountInfo_Type originally named InqCountInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class InqCountInfo_Type extends Aggregate
{
    /**
     * The InqDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InqDt;
    /**
     * The InqCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $InqCount;
    /**
     * Constructor method for InqCountInfo_Type
     * @see parent::__construct()
     * @param string $_inqDt
     * @param int $_inqCount
     * @return InqCountInfo_Type
     */
    public function __construct($_inqDt = NULL,$_inqCount = NULL)
    {
        MicrobiltWsdlClass::__construct(array('InqDt'=>$_inqDt,'InqCount'=>$_inqCount),false);
    }
    /**
     * Get InqDt value
     * @return string|null
     */
    public function getInqDt()
    {
        return $this->InqDt;
    }
    /**
     * Set InqDt value
     * @param string $_inqDt the InqDt
     * @return string
     */
    public function setInqDt($_inqDt)
    {
        return ($this->InqDt = $_inqDt);
    }
    /**
     * Get InqCount value
     * @return int|null
     */
    public function getInqCount()
    {
        return $this->InqCount;
    }
    /**
     * Set InqCount value
     * @param int $_inqCount the InqCount
     * @return int
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
     * @return InqCountInfo_Type
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
