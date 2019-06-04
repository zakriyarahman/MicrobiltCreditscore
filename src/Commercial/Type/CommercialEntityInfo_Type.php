<?php

namespace Zakriyarahman\Microbilt\Commercial\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class CommercialEntityInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CommercialEntityInfo_Type originally named CommercialEntityInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CommercialEntityInfo_Type extends Aggregate
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
     * The RelationshipType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RelationshipType;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var OrgInfo_Type
     */
    public $OrgInfo;
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
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $DisputeInd;
    /**
     * The CommercialCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $CommercialCodes;
    /**
     * Constructor method for CommercialEntityInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param string $_relationshipType
     * @param OrgInfo_Type $_orgInfo
     * @param CommercialAmounts_Type $_commercialAmounts
     * @param CommercialDates_Type $_commercialDates
     * @param Boolean $_disputeInd
     * @param Message_Type $_commercialCodes
     * @return CommercialEntityInfo_Type
     */
    public function __construct($_msgClass = NULL,$_relationshipType = NULL,$_orgInfo = NULL,$_commercialAmounts = NULL,$_commercialDates = NULL,$_disputeInd = NULL,$_commercialCodes = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'RelationshipType'=>$_relationshipType,'OrgInfo'=>$_orgInfo,'CommercialAmounts'=>$_commercialAmounts,'CommercialDates'=>$_commercialDates,'DisputeInd'=>$_disputeInd,'CommercialCodes'=>$_commercialCodes),false);
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
     * Get RelationshipType value
     * @return string|null
     */
    public function getRelationshipType()
    {
        return $this->RelationshipType;
    }
    /**
     * Set RelationshipType value
     * @param string $_relationshipType the RelationshipType
     * @return string
     */
    public function setRelationshipType($_relationshipType)
    {
        return ($this->RelationshipType = $_relationshipType);
    }
    /**
     * Get OrgInfo value
     * @return OrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param OrgInfo_Type $_orgInfo the OrgInfo
     * @return OrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
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
     * Get CommercialCodes value
     * @return Message_Type|null
     */
    public function getCommercialCodes()
    {
        return $this->CommercialCodes;
    }
    /**
     * Set CommercialCodes value
     * @param Message_Type $_commercialCodes the CommercialCodes
     * @return Message_Type
     */
    public function setCommercialCodes($_commercialCodes)
    {
        return ($this->CommercialCodes = $_commercialCodes);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CommercialEntityInfo_Type
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
