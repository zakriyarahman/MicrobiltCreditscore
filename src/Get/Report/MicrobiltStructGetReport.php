<?php

namespace Zakriyarahman\Microbilt\Get\Report;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructGetReport
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructGetReport originally named GetReport
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd0}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructGetReport extends MicrobiltWsdlClass
{
    /**
     * The inquiry
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructExStdRq_Type
     */
    public $inquiry;
    /**
     * Constructor method for GetReport
     * @see parent::__construct()
     * @param MicrobiltStructExStdRq_Type $_inquiry
     * @return MicrobiltStructGetReport
     */
    public function __construct($_inquiry = NULL)
    {
        parent::__construct(array('inquiry'=>$_inquiry),false);
    }
    /**
     * Get inquiry value
     * @return MicrobiltStructExStdRq_Type|null
     */
    public function getInquiry()
    {
        return $this->inquiry;
    }
    /**
     * Set inquiry value
     * @param MicrobiltStructExStdRq_Type $_inquiry the inquiry
     * @return MicrobiltStructExStdRq_Type
     */
    public function setInquiry($_inquiry)
    {
        return ($this->inquiry = $_inquiry);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructGetReport
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
