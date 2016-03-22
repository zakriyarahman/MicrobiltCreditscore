<?php
/**
 * File for class MicrobiltStructRegisteredChargesSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructRegisteredChargesSummary_Type originally named RegisteredChargesSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructRegisteredChargesSummary_Type extends MicrobiltStructAggregate
{
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
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for RegisteredChargesSummary_Type
     * @see parent::__construct()
     * @param MicrobiltStructCommercialDates_Type $_commercialDates
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructRegisteredChargesSummary_Type
     */
    public function __construct($_commercialDates = NULL,$_commercialAmounts = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CommercialDates'=>$_commercialDates,'CommercialAmounts'=>$_commercialAmounts,'Message'=>$_message),false);
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
     * Get Message value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltStructMessage_Type $_message the Message
     * @return MicrobiltStructMessage_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructRegisteredChargesSummary_Type
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
