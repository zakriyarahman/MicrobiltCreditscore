<?php
/**
 * File for class MicrobiltStructCommercialPmtInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCommercialPmtInfo_Type originally named CommercialPmtInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCommercialPmtInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The IndustryPmtIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IndustryPmtIndicator;
    /**
     * The OrgId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgId_Type
     */
    public $OrgId;
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
     * The Option
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructOption_Type
     */
    public $Option;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $DisputeInd;
    /**
     * Constructor method for CommercialPmtInfo_Type
     * @see parent::__construct()
     * @param string $_industryPmtIndicator
     * @param MicrobiltStructOrgId_Type $_orgId
     * @param MicrobiltStructCommercialDates_Type $_commercialDates
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltStructMessage_Type $_message
     * @param MicrobiltStructOption_Type $_option
     * @param MicrobiltEnumBoolean $_disputeInd
     * @return MicrobiltStructCommercialPmtInfo_Type
     */
    public function __construct($_industryPmtIndicator = NULL,$_orgId = NULL,$_commercialDates = NULL,$_commercialAmounts = NULL,$_message = NULL,$_option = NULL,$_disputeInd = NULL)
    {
        MicrobiltWsdlClass::__construct(array('IndustryPmtIndicator'=>$_industryPmtIndicator,'OrgId'=>$_orgId,'CommercialDates'=>$_commercialDates,'CommercialAmounts'=>$_commercialAmounts,'Message'=>$_message,'Option'=>$_option,'DisputeInd'=>$_disputeInd),false);
    }
    /**
     * Get IndustryPmtIndicator value
     * @return string|null
     */
    public function getIndustryPmtIndicator()
    {
        return $this->IndustryPmtIndicator;
    }
    /**
     * Set IndustryPmtIndicator value
     * @param string $_industryPmtIndicator the IndustryPmtIndicator
     * @return string
     */
    public function setIndustryPmtIndicator($_industryPmtIndicator)
    {
        return ($this->IndustryPmtIndicator = $_industryPmtIndicator);
    }
    /**
     * Get OrgId value
     * @return MicrobiltStructOrgId_Type|null
     */
    public function getOrgId()
    {
        return $this->OrgId;
    }
    /**
     * Set OrgId value
     * @param MicrobiltStructOrgId_Type $_orgId the OrgId
     * @return MicrobiltStructOrgId_Type
     */
    public function setOrgId($_orgId)
    {
        return ($this->OrgId = $_orgId);
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
     * Get Option value
     * @return MicrobiltStructOption_Type|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @param MicrobiltStructOption_Type $_option the Option
     * @return MicrobiltStructOption_Type
     */
    public function setOption($_option)
    {
        return ($this->Option = $_option);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCommercialPmtInfo_Type
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
