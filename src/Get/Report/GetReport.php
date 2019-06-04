<?php

namespace Zakriyarahman\Microbilt\Get\Report;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class GetReport
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for GetReport originally named GetReport
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd0}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class GetReport extends MicrobiltWsdlClass
{
    /**
     * The inquiry
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var ExStdRq_Type
     */
    public $inquiry;
    /**
     * Constructor method for GetReport
     * @see parent::__construct()
     * @param ExStdRq_Type $_inquiry
     * @return GetReport
     */
    public function __construct($_inquiry = NULL)
    {
        parent::__construct(array('inquiry'=>$_inquiry),false);
    }
    /**
     * Get inquiry value
     * @return ExStdRq_Type|null
     */
    public function getInquiry()
    {
        return $this->inquiry;
    }
    /**
     * Set inquiry value
     * @param ExStdRq_Type $_inquiry the inquiry
     * @return ExStdRq_Type
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
     * @return GetReport
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
