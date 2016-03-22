<?php
/**
 * File for class MicrobiltStructCommercialUCCSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCommercialUCCSummary_Type originally named CommercialUCCSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCommercialUCCSummary_Type extends MicrobiltStructAggregate
{
    /**
     * The TotalUCCFilingCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $TotalUCCFilingCount;
    /**
     * The SummaryCountTimeFrame
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructSummaryCountTimeFrame_Type
     */
    public $SummaryCountTimeFrame;
    /**
     * Constructor method for CommercialUCCSummary_Type
     * @see parent::__construct()
     * @param long $_totalUCCFilingCount
     * @param MicrobiltStructSummaryCountTimeFrame_Type $_summaryCountTimeFrame
     * @return MicrobiltStructCommercialUCCSummary_Type
     */
    public function __construct($_totalUCCFilingCount = NULL,$_summaryCountTimeFrame = NULL)
    {
        MicrobiltWsdlClass::__construct(array('TotalUCCFilingCount'=>$_totalUCCFilingCount,'SummaryCountTimeFrame'=>$_summaryCountTimeFrame),false);
    }
    /**
     * Get TotalUCCFilingCount value
     * @return long|null
     */
    public function getTotalUCCFilingCount()
    {
        return $this->TotalUCCFilingCount;
    }
    /**
     * Set TotalUCCFilingCount value
     * @param long $_totalUCCFilingCount the TotalUCCFilingCount
     * @return long
     */
    public function setTotalUCCFilingCount($_totalUCCFilingCount)
    {
        return ($this->TotalUCCFilingCount = $_totalUCCFilingCount);
    }
    /**
     * Get SummaryCountTimeFrame value
     * @return MicrobiltStructSummaryCountTimeFrame_Type|null
     */
    public function getSummaryCountTimeFrame()
    {
        return $this->SummaryCountTimeFrame;
    }
    /**
     * Set SummaryCountTimeFrame value
     * @param MicrobiltStructSummaryCountTimeFrame_Type $_summaryCountTimeFrame the SummaryCountTimeFrame
     * @return MicrobiltStructSummaryCountTimeFrame_Type
     */
    public function setSummaryCountTimeFrame($_summaryCountTimeFrame)
    {
        return ($this->SummaryCountTimeFrame = $_summaryCountTimeFrame);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCommercialUCCSummary_Type
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
