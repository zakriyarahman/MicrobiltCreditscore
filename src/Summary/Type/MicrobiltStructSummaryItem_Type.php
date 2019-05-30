<?php

namespace Zakriyarahman\Microbilt\Summary\Type;

/**
 * File for class MicrobiltStructSummaryItem_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSummaryItem_Type originally named SummaryItem_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSummaryItem_Type extends MicrobiltStructAggregate
{
    /**
     * The SummaryType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SummaryType;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Count;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The LastActivityDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastActivityDt;
    /**
     * Constructor method for SummaryItem_Type
     * @see parent::__construct()
     * @param string $_summaryType
     * @param string $_count
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts
     * @param string $_lastActivityDt
     * @return MicrobiltStructSummaryItem_Type
     */
    public function __construct($_summaryType = NULL,$_count = NULL,$_commercialAmounts = NULL,$_lastActivityDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('SummaryType'=>$_summaryType,'Count'=>$_count,'CommercialAmounts'=>$_commercialAmounts,'LastActivityDt'=>$_lastActivityDt),false);
    }
    /**
     * Get SummaryType value
     * @return string|null
     */
    public function getSummaryType()
    {
        return $this->SummaryType;
    }
    /**
     * Set SummaryType value
     * @param string $_summaryType the SummaryType
     * @return string
     */
    public function setSummaryType($_summaryType)
    {
        return ($this->SummaryType = $_summaryType);
    }
    /**
     * Get Count value
     * @return string|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param string $_count the Count
     * @return string
     */
    public function setCount($_count)
    {
        return ($this->Count = $_count);
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
     * Get LastActivityDt value
     * @return string|null
     */
    public function getLastActivityDt()
    {
        return $this->LastActivityDt;
    }
    /**
     * Set LastActivityDt value
     * @param string $_lastActivityDt the LastActivityDt
     * @return string
     */
    public function setLastActivityDt($_lastActivityDt)
    {
        return ($this->LastActivityDt = $_lastActivityDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructSummaryItem_Type
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
