<?php

namespace Zakriyarahman\Microbilt\Corporate\Type;

/**
 * File for class MicrobiltStructCorporateLinkageInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCorporateLinkageInfo_Type originally named CorporateLinkageInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCorporateLinkageInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The CorpLinkageSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCorpLinkageSummary_Type
     */
    public $CorpLinkageSummary;
    /**
     * The CorpLinkageListing
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $CorpLinkageListing;
    /**
     * Constructor method for CorporateLinkageInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructCorpLinkageSummary_Type $_corpLinkageSummary
     * @param MicrobiltStructOrgInfo_Type $_corpLinkageListing
     * @return MicrobiltStructCorporateLinkageInfo_Type
     */
    public function __construct($_corpLinkageSummary = NULL,$_corpLinkageListing = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CorpLinkageSummary'=>$_corpLinkageSummary,'CorpLinkageListing'=>$_corpLinkageListing),false);
    }
    /**
     * Get CorpLinkageSummary value
     * @return MicrobiltStructCorpLinkageSummary_Type|null
     */
    public function getCorpLinkageSummary()
    {
        return $this->CorpLinkageSummary;
    }
    /**
     * Set CorpLinkageSummary value
     * @param MicrobiltStructCorpLinkageSummary_Type $_corpLinkageSummary the CorpLinkageSummary
     * @return MicrobiltStructCorpLinkageSummary_Type
     */
    public function setCorpLinkageSummary($_corpLinkageSummary)
    {
        return ($this->CorpLinkageSummary = $_corpLinkageSummary);
    }
    /**
     * Get CorpLinkageListing value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getCorpLinkageListing()
    {
        return $this->CorpLinkageListing;
    }
    /**
     * Set CorpLinkageListing value
     * @param MicrobiltStructOrgInfo_Type $_corpLinkageListing the CorpLinkageListing
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setCorpLinkageListing($_corpLinkageListing)
    {
        return ($this->CorpLinkageListing = $_corpLinkageListing);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCorporateLinkageInfo_Type
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
