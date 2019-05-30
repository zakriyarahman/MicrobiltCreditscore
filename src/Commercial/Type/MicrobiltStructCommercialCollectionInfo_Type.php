<?php

namespace Zakriyarahman\Microbilt\Commercial\Type;

/**
 * File for class MicrobiltStructCommercialCollectionInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCommercialCollectionInfo_Type originally named CommercialCollectionInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCommercialCollectionInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The AcctStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctStatus;
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
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The ConsumerStatementPresent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ConsumerStatementPresent;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $DisputeInd;
    /**
     * Constructor method for CommercialCollectionInfo_Type
     * @see parent::__construct()
     * @param string $_acctStatus
     * @param MicrobiltStructCommercialDates_Type $_commercialDates
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltStructOrgInfo_Type $_orgInfo
     * @param MicrobiltEnumBoolean $_consumerStatementPresent
     * @param MicrobiltStructMessage_Type $_message
     * @param MicrobiltEnumBoolean $_disputeInd
     * @return MicrobiltStructCommercialCollectionInfo_Type
     */
    public function __construct($_acctStatus = NULL,$_commercialDates = NULL,$_commercialAmounts = NULL,$_orgInfo = NULL,$_consumerStatementPresent = NULL,$_message = NULL,$_disputeInd = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AcctStatus'=>$_acctStatus,'CommercialDates'=>$_commercialDates,'CommercialAmounts'=>$_commercialAmounts,'OrgInfo'=>$_orgInfo,'ConsumerStatementPresent'=>$_consumerStatementPresent,'Message'=>$_message,'DisputeInd'=>$_disputeInd),false);
    }
    /**
     * Get AcctStatus value
     * @return string|null
     */
    public function getAcctStatus()
    {
        return $this->AcctStatus;
    }
    /**
     * Set AcctStatus value
     * @param string $_acctStatus the AcctStatus
     * @return string
     */
    public function setAcctStatus($_acctStatus)
    {
        return ($this->AcctStatus = $_acctStatus);
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
     * Get OrgInfo value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param MicrobiltStructOrgInfo_Type $_orgInfo the OrgInfo
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get ConsumerStatementPresent value
     * @return MicrobiltEnumBoolean|null
     */
    public function getConsumerStatementPresent()
    {
        return $this->ConsumerStatementPresent;
    }
    /**
     * Set ConsumerStatementPresent value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_consumerStatementPresent the ConsumerStatementPresent
     * @return MicrobiltEnumBoolean
     */
    public function setConsumerStatementPresent($_consumerStatementPresent)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_consumerStatementPresent))
        {
            return false;
        }
        return ($this->ConsumerStatementPresent = $_consumerStatementPresent);
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
     * @return MicrobiltStructCommercialCollectionInfo_Type
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
