<?php

namespace Zakriyarahman\Microbilt\Corporate\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class CorporateLinkageInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CorporateLinkageInfo_Type originally named CorporateLinkageInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CorporateLinkageInfo_Type extends Aggregate
{
    /**
     * The CorpLinkageSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CorpLinkageSummary_Type
     */
    public $CorpLinkageSummary;
    /**
     * The CorpLinkageListing
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var OrgInfo_Type
     */
    public $CorpLinkageListing;
    /**
     * Constructor method for CorporateLinkageInfo_Type
     * @see parent::__construct()
     * @param CorpLinkageSummary_Type $_corpLinkageSummary
     * @param OrgInfo_Type $_corpLinkageListing
     * @return CorporateLinkageInfo_Type
     */
    public function __construct($_corpLinkageSummary = NULL,$_corpLinkageListing = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CorpLinkageSummary'=>$_corpLinkageSummary,'CorpLinkageListing'=>$_corpLinkageListing),false);
    }
    /**
     * Get CorpLinkageSummary value
     * @return CorpLinkageSummary_Type|null
     */
    public function getCorpLinkageSummary()
    {
        return $this->CorpLinkageSummary;
    }
    /**
     * Set CorpLinkageSummary value
     * @param CorpLinkageSummary_Type $_corpLinkageSummary the CorpLinkageSummary
     * @return CorpLinkageSummary_Type
     */
    public function setCorpLinkageSummary($_corpLinkageSummary)
    {
        return ($this->CorpLinkageSummary = $_corpLinkageSummary);
    }
    /**
     * Get CorpLinkageListing value
     * @return OrgInfo_Type|null
     */
    public function getCorpLinkageListing()
    {
        return $this->CorpLinkageListing;
    }
    /**
     * Set CorpLinkageListing value
     * @param OrgInfo_Type $_corpLinkageListing the CorpLinkageListing
     * @return OrgInfo_Type
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
     * @return CorporateLinkageInfo_Type
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
