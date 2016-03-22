<?php
/**
 * File for class MicrobiltStructSentenceLength_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSentenceLength_Type originally named SentenceLength_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSentenceLength_Type extends MicrobiltStructAggregate
{
    /**
     * The Years
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $Years;
    /**
     * The Months
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $Months;
    /**
     * The Days
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $Days;
    /**
     * Constructor method for SentenceLength_Type
     * @see parent::__construct()
     * @param long $_years
     * @param long $_months
     * @param long $_days
     * @return MicrobiltStructSentenceLength_Type
     */
    public function __construct($_years = NULL,$_months = NULL,$_days = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Years'=>$_years,'Months'=>$_months,'Days'=>$_days),false);
    }
    /**
     * Get Years value
     * @return long|null
     */
    public function getYears()
    {
        return $this->Years;
    }
    /**
     * Set Years value
     * @param long $_years the Years
     * @return long
     */
    public function setYears($_years)
    {
        return ($this->Years = $_years);
    }
    /**
     * Get Months value
     * @return long|null
     */
    public function getMonths()
    {
        return $this->Months;
    }
    /**
     * Set Months value
     * @param long $_months the Months
     * @return long
     */
    public function setMonths($_months)
    {
        return ($this->Months = $_months);
    }
    /**
     * Get Days value
     * @return long|null
     */
    public function getDays()
    {
        return $this->Days;
    }
    /**
     * Set Days value
     * @param long $_days the Days
     * @return long
     */
    public function setDays($_days)
    {
        return ($this->Days = $_days);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructSentenceLength_Type
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
