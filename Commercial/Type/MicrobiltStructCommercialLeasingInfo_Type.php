<?php
/**
 * File for class MicrobiltStructCommercialLeasingInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCommercialLeasingInfo_Type originally named CommercialLeasingInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCommercialLeasingInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The LeasingCompany
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $LeasingCompany;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCommercialDates_Type
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
     * @var MicrobiltStructCodeDescription_Type
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
     * @var MicrobiltEnumBoolean
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
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for CommercialLeasingInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructOrgInfo_Type $_leasingCompany
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltStructCommercialDates_Type $_commercialDates
     * @param string $_terms
     * @param string $_pmtFreq
     * @param MicrobiltStructCodeDescription_Type $_pmtType
     * @param string $_productType
     * @param string $_leaseType
     * @param MicrobiltEnumBoolean $_disputeInd
     * @param string $_comments
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructCommercialLeasingInfo_Type
     */
    public function __construct($_leasingCompany = NULL,$_commercialAmounts = NULL,$_commercialDates = NULL,$_terms = NULL,$_pmtFreq = NULL,$_pmtType = NULL,$_productType = NULL,$_leaseType = NULL,$_disputeInd = NULL,$_comments = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('LeasingCompany'=>$_leasingCompany,'CommercialAmounts'=>$_commercialAmounts,'CommercialDates'=>$_commercialDates,'Terms'=>$_terms,'PmtFreq'=>$_pmtFreq,'PmtType'=>$_pmtType,'ProductType'=>$_productType,'LeaseType'=>$_leaseType,'DisputeInd'=>$_disputeInd,'Comments'=>$_comments,'Message'=>$_message),false);
    }
    /**
     * Get LeasingCompany value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getLeasingCompany()
    {
        return $this->LeasingCompany;
    }
    /**
     * Set LeasingCompany value
     * @param MicrobiltStructOrgInfo_Type $_leasingCompany the LeasingCompany
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setLeasingCompany($_leasingCompany)
    {
        return ($this->LeasingCompany = $_leasingCompany);
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
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getPmtType()
    {
        return $this->PmtType;
    }
    /**
     * Set PmtType value
     * @param MicrobiltStructCodeDescription_Type $_pmtType the PmtType
     * @return MicrobiltStructCodeDescription_Type
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
     * @return MicrobiltEnumBoolean|null
     */
    public function getDisputeInd()
    {
        return $this->DisputeInd;
    }
    /**
     * Set DisputeInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_disputeInd the DisputeInd
     * @return MicrobiltEnumBoolean
     */
    public function setDisputeInd($_disputeInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_disputeInd))
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
     * @return MicrobiltStructCommercialLeasingInfo_Type
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
