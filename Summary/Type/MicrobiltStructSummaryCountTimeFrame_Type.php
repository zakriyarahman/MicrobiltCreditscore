<?php
/**
 * File for class MicrobiltStructSummaryCountTimeFrame_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSummaryCountTimeFrame_Type originally named SummaryCountTimeFrame_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSummaryCountTimeFrame_Type extends MicrobiltStructAggregate
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
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCommercialDates_Type
     */
    public $CommercialDates;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The FilingCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingCount;
    /**
     * The TotalDerogatoryCollateralFilings
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $TotalDerogatoryCollateralFilings;
    /**
     * The TotalReleasesTerminations
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $TotalReleasesTerminations;
    /**
     * The TotalContinuations
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $TotalContinuations;
    /**
     * The TotalAmendedAssigned
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $TotalAmendedAssigned;
    /**
     * Constructor method for SummaryCountTimeFrame_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltStructCommercialDates_Type $_commercialDates
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts
     * @param string $_filingCount
     * @param int $_totalDerogatoryCollateralFilings
     * @param int $_totalReleasesTerminations
     * @param int $_totalContinuations
     * @param int $_totalAmendedAssigned
     * @return MicrobiltStructSummaryCountTimeFrame_Type
     */
    public function __construct($_msgClass = NULL,$_commercialDates = NULL,$_commercialAmounts = NULL,$_filingCount = NULL,$_totalDerogatoryCollateralFilings = NULL,$_totalReleasesTerminations = NULL,$_totalContinuations = NULL,$_totalAmendedAssigned = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'CommercialDates'=>$_commercialDates,'CommercialAmounts'=>$_commercialAmounts,'FilingCount'=>$_filingCount,'TotalDerogatoryCollateralFilings'=>$_totalDerogatoryCollateralFilings,'TotalReleasesTerminations'=>$_totalReleasesTerminations,'TotalContinuations'=>$_totalContinuations,'TotalAmendedAssigned'=>$_totalAmendedAssigned),false);
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
     * Get CommercialDates value
     * @return MicrobiltStructCommercialDates_Type|null
     */
    public function getCommercialDates()
    {
        return $this->CommercialDates;
    }
    /**
     * Set CommercialDates value
     * @param MicrobiltStructCommercialDates_Type $_commercialDates the CommercialDates
     * @return MicrobiltStructCommercialDates_Type
     */
    public function setCommercialDates($_commercialDates)
    {
        return ($this->CommercialDates = $_commercialDates);
    }
    /**
     * Get CommercialAmounts value
     * @return MicrobiltStructCommercialAmounts_Type|null
     */
    public function getCommercialAmounts()
    {
        return $this->CommercialAmounts;
    }
    /**
     * Set CommercialAmounts value
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts the CommercialAmounts
     * @return MicrobiltStructCommercialAmounts_Type
     */
    public function setCommercialAmounts($_commercialAmounts)
    {
        return ($this->CommercialAmounts = $_commercialAmounts);
    }
    /**
     * Get FilingCount value
     * @return string|null
     */
    public function getFilingCount()
    {
        return $this->FilingCount;
    }
    /**
     * Set FilingCount value
     * @param string $_filingCount the FilingCount
     * @return string
     */
    public function setFilingCount($_filingCount)
    {
        return ($this->FilingCount = $_filingCount);
    }
    /**
     * Get TotalDerogatoryCollateralFilings value
     * @return int|null
     */
    public function getTotalDerogatoryCollateralFilings()
    {
        return $this->TotalDerogatoryCollateralFilings;
    }
    /**
     * Set TotalDerogatoryCollateralFilings value
     * @param int $_totalDerogatoryCollateralFilings the TotalDerogatoryCollateralFilings
     * @return int
     */
    public function setTotalDerogatoryCollateralFilings($_totalDerogatoryCollateralFilings)
    {
        return ($this->TotalDerogatoryCollateralFilings = $_totalDerogatoryCollateralFilings);
    }
    /**
     * Get TotalReleasesTerminations value
     * @return int|null
     */
    public function getTotalReleasesTerminations()
    {
        return $this->TotalReleasesTerminations;
    }
    /**
     * Set TotalReleasesTerminations value
     * @param int $_totalReleasesTerminations the TotalReleasesTerminations
     * @return int
     */
    public function setTotalReleasesTerminations($_totalReleasesTerminations)
    {
        return ($this->TotalReleasesTerminations = $_totalReleasesTerminations);
    }
    /**
     * Get TotalContinuations value
     * @return int|null
     */
    public function getTotalContinuations()
    {
        return $this->TotalContinuations;
    }
    /**
     * Set TotalContinuations value
     * @param int $_totalContinuations the TotalContinuations
     * @return int
     */
    public function setTotalContinuations($_totalContinuations)
    {
        return ($this->TotalContinuations = $_totalContinuations);
    }
    /**
     * Get TotalAmendedAssigned value
     * @return int|null
     */
    public function getTotalAmendedAssigned()
    {
        return $this->TotalAmendedAssigned;
    }
    /**
     * Set TotalAmendedAssigned value
     * @param int $_totalAmendedAssigned the TotalAmendedAssigned
     * @return int
     */
    public function setTotalAmendedAssigned($_totalAmendedAssigned)
    {
        return ($this->TotalAmendedAssigned = $_totalAmendedAssigned);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructSummaryCountTimeFrame_Type
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
