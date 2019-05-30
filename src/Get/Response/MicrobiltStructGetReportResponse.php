<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructGetReportResponse
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructGetReportResponse originally named GetReportResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd0}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructGetReportResponse extends MicrobiltWsdlClass
{
    /**
     * The GetReportResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructExStdRs_Type
     */
    public $GetReportResult;
    /**
     * Constructor method for GetReportResponse
     * @see parent::__construct()
     * @param MicrobiltStructExStdRs_Type $_getReportResult
     * @return MicrobiltStructGetReportResponse
     */
    public function __construct($_getReportResult = NULL)
    {
        parent::__construct(array('GetReportResult'=>$_getReportResult),false);
    }
    /**
     * Get GetReportResult value
     * @return MicrobiltStructExStdRs_Type|null
     */
    public function getGetReportResult()
    {
        return $this->GetReportResult;
    }
    /**
     * Set GetReportResult value
     * @param MicrobiltStructExStdRs_Type $_getReportResult the GetReportResult
     * @return MicrobiltStructExStdRs_Type
     */
    public function setGetReportResult($_getReportResult)
    {
        return ($this->GetReportResult = $_getReportResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructGetReportResponse
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
