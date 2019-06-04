<?php

namespace Zakriyarahman\Microbilt\Commercial\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class CommercialLeasingInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CommercialLeasingInfo_Type originally named CommercialLeasingInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CommercialLeasingInfo_Type extends Aggregate
{
    /**
     * The LeasingCompany
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var OrgInfo_Type
     */
    public $LeasingCompany;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CommercialDates_Type
     */
    public $CommercialDates;
    /**
     * The Terms
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Terms;
    /**
     * The PmtFreq
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtFreq;
    /**
     * The PmtType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodeDescription_Type
     */
    public $PmtType;
    /**
     * The ProductType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProductType;
    /**
     * The LeaseType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LeaseType;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $DisputeInd;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Comments;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for CommercialLeasingInfo_Type
     * @see parent::__construct()
     * @param OrgInfo_Type $_leasingCompany
     * @param CommercialAmounts_Type $_commercialAmounts
     * @param CommercialDates_Type $_commercialDates
     * @param string $_terms
     * @param string $_pmtFreq
     * @param CodeDescription_Type $_pmtType
     * @param string $_productType
     * @param string $_leaseType
     * @param Boolean $_disputeInd
     * @param string $_comments
     * @param Message_Type $_message
     * @return CommercialLeasingInfo_Type
     */
    public function __construct($_leasingCompany = NULL,$_commercialAmounts = NULL,$_commercialDates = NULL,$_terms = NULL,$_pmtFreq = NULL,$_pmtType = NULL,$_productType = NULL,$_leaseType = NULL,$_disputeInd = NULL,$_comments = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('LeasingCompany'=>$_leasingCompany,'CommercialAmounts'=>$_commercialAmounts,'CommercialDates'=>$_commercialDates,'Terms'=>$_terms,'PmtFreq'=>$_pmtFreq,'PmtType'=>$_pmtType,'ProductType'=>$_productType,'LeaseType'=>$_leaseType,'DisputeInd'=>$_disputeInd,'Comments'=>$_comments,'Message'=>$_message),false);
    }
    /**
     * Get LeasingCompany value
     * @return OrgInfo_Type|null
     */
    public function getLeasingCompany()
    {
        return $this->LeasingCompany;
    }
    /**
     * Set LeasingCompany value
     * @param OrgInfo_Type $_leasingCompany the LeasingCompany
     * @return OrgInfo_Type
     */
    public function setLeasingCompany($_leasingCompany)
    {
        return ($this->LeasingCompany = $_leasingCompany);
    }
    /**
     * Get CommercialAmounts value
     * @return CommercialAmounts_Type|null
     */
    public function getCommercialAmounts()
    {
        return $this->CommercialAmounts;
    }
    /**
     * Set CommercialAmounts value
     * @param CommercialAmounts_Type $_commercialAmounts the CommercialAmounts
     * @return CommercialAmounts_Type
     */
    public function setCommercialAmounts($_commercialAmounts)
    {
        return ($this->CommercialAmounts = $_commercialAmounts);
    }
    /**
     * Get CommercialDates value
     * @return CommercialDates_Type|null
     */
    public function getCommercialDates()
    {
        return $this->CommercialDates;
    }
    /**
     * Set CommercialDates value
     * @param CommercialDates_Type $_commercialDates the CommercialDates
     * @return CommercialDates_Type
     */
    public function setCommercialDates($_commercialDates)
    {
        return ($this->CommercialDates = $_commercialDates);
    }
    /**
     * Get Terms value
     * @return string|null
     */
    public function getTerms()
    {
        return $this->Terms;
    }
    /**
     * Set Terms value
     * @param string $_terms the Terms
     * @return string
     */
    public function setTerms($_terms)
    {
        return ($this->Terms = $_terms);
    }
    /**
     * Get PmtFreq value
     * @return string|null
     */
    public function getPmtFreq()
    {
        return $this->PmtFreq;
    }
    /**
     * Set PmtFreq value
     * @param string $_pmtFreq the PmtFreq
     * @return string
     */
    public function setPmtFreq($_pmtFreq)
    {
        return ($this->PmtFreq = $_pmtFreq);
    }
    /**
     * Get PmtType value
     * @return CodeDescription_Type|null
     */
    public function getPmtType()
    {
        return $this->PmtType;
    }
    /**
     * Set PmtType value
     * @param CodeDescription_Type $_pmtType the PmtType
     * @return CodeDescription_Type
     */
    public function setPmtType($_pmtType)
    {
        return ($this->PmtType = $_pmtType);
    }
    /**
     * Get ProductType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param string $_productType the ProductType
     * @return string
     */
    public function setProductType($_productType)
    {
        return ($this->ProductType = $_productType);
    }
    /**
     * Get LeaseType value
     * @return string|null
     */
    public function getLeaseType()
    {
        return $this->LeaseType;
    }
    /**
     * Set LeaseType value
     * @param string $_leaseType the LeaseType
     * @return string
     */
    public function setLeaseType($_leaseType)
    {
        return ($this->LeaseType = $_leaseType);
    }
    /**
     * Get DisputeInd value
     * @return Boolean|null
     */
    public function getDisputeInd()
    {
        return $this->DisputeInd;
    }
    /**
     * Set DisputeInd value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_disputeInd the DisputeInd
     * @return Boolean
     */
    public function setDisputeInd($_disputeInd)
    {
        if(!Boolean::valueIsValid($_disputeInd))
        {
            return false;
        }
        return ($this->DisputeInd = $_disputeInd);
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $_comments the Comments
     * @return string
     */
    public function setComments($_comments)
    {
        return ($this->Comments = $_comments);
    }
    /**
     * Get Message value
     * @return Message_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param Message_Type $_message the Message
     * @return Message_Type
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
     * @return CommercialLeasingInfo_Type
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
