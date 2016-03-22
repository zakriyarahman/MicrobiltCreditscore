<?php
/**
 * File for class MicrobiltStructGetArchiveReportResponse
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructGetArchiveReportResponse originally named GetArchiveReportResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd0}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructGetArchiveReportResponse extends MicrobiltWsdlClass
{
    /**
     * The GetArchiveReportResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructExStdRs_Type
     */
    public $GetArchiveReportResult;
    /**
     * Constructor method for GetArchiveReportResponse
     * @see parent::__construct()
     * @param MicrobiltStructExStdRs_Type $_getArchiveReportResult
     * @return MicrobiltStructGetArchiveReportResponse
     */
    public function __construct($_getArchiveReportResult = NULL)
    {
        parent::__construct(array('GetArchiveReportResult'=>$_getArchiveReportResult),false);
    }
    /**
     * Get GetArchiveReportResult value
     * @return MicrobiltStructExStdRs_Type|null
     */
    public function getGetArchiveReportResult()
    {
        return $this->GetArchiveReportResult;
    }
    /**
     * Set GetArchiveReportResult value
     * @param MicrobiltStructExStdRs_Type $_getArchiveReportResult the GetArchiveReportResult
     * @return MicrobiltStructExStdRs_Type
     */
    public function setGetArchiveReportResult($_getArchiveReportResult)
    {
        return ($this->GetArchiveReportResult = $_getArchiveReportResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructGetArchiveReportResponse
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
