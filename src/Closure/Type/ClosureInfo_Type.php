<?php

namespace Zakriyarahman\Microbilt\Closure\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class ClosureInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for ClosureInfo_Type originally named ClosureInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class ClosureInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The ClosureStats
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $ClosureStats;
    /**
     * The CollectionAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $CollectionAmt;
    /**
     * The ChargeOffAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $ChargeOffAmt;
    /**
     * The ClosureReason
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $ClosureReason;
    /**
     * The ClosureData
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $ClosureData;
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Event_Type
     */
    public $Event;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The ReportedOrg
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var OrgInfo_Type
     */
    public $ReportedOrg;
    /**
     * The ReportingOrg
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var OrgInfo_Type
     */
    public $ReportingOrg;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for ClosureInfo_Type
     * @see parent::__construct()
     * @param Message_Type $_closureStats
     * @param CurrencyAmount $_collectionAmt
     * @param CurrencyAmount $_chargeOffAmt
     * @param Message_Type $_closureReason
     * @param Message_Type $_closureData
     * @param Event_Type $_event
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param OrgInfo_Type $_reportedOrg
     * @param OrgInfo_Type $_reportingOrg
     * @param Message_Type $_message
     * @return ClosureInfo_Type
     */
    public function __construct($_closureStats = NULL,$_collectionAmt = NULL,$_chargeOffAmt = NULL,$_closureReason = NULL,$_closureData = NULL,$_event = NULL,$_personInfo = NULL,$_reportedOrg = NULL,$_reportingOrg = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ClosureStats'=>$_closureStats,'CollectionAmt'=>$_collectionAmt,'ChargeOffAmt'=>$_chargeOffAmt,'ClosureReason'=>$_closureReason,'ClosureData'=>$_closureData,'Event'=>$_event,'PersonInfo'=>$_personInfo,'ReportedOrg'=>$_reportedOrg,'ReportingOrg'=>$_reportingOrg,'Message'=>$_message),false);
    }
    /**
     * Get ClosureStats value
     * @return Message_Type|null
     */
    public function getClosureStats()
    {
        return $this->ClosureStats;
    }
    /**
     * Set ClosureStats value
     * @param Message_Type $_closureStats the ClosureStats
     * @return Message_Type
     */
    public function setClosureStats($_closureStats)
    {
        return ($this->ClosureStats = $_closureStats);
    }
    /**
     * Get CollectionAmt value
     * @return CurrencyAmount|null
     */
    public function getCollectionAmt()
    {
        return $this->CollectionAmt;
    }
    /**
     * Set CollectionAmt value
     * @param CurrencyAmount $_collectionAmt the CollectionAmt
     * @return CurrencyAmount
     */
    public function setCollectionAmt($_collectionAmt)
    {
        return ($this->CollectionAmt = $_collectionAmt);
    }
    /**
     * Get ChargeOffAmt value
     * @return CurrencyAmount|null
     */
    public function getChargeOffAmt()
    {
        return $this->ChargeOffAmt;
    }
    /**
     * Set ChargeOffAmt value
     * @param CurrencyAmount $_chargeOffAmt the ChargeOffAmt
     * @return CurrencyAmount
     */
    public function setChargeOffAmt($_chargeOffAmt)
    {
        return ($this->ChargeOffAmt = $_chargeOffAmt);
    }
    /**
     * Get ClosureReason value
     * @return Message_Type|null
     */
    public function getClosureReason()
    {
        return $this->ClosureReason;
    }
    /**
     * Set ClosureReason value
     * @param Message_Type $_closureReason the ClosureReason
     * @return Message_Type
     */
    public function setClosureReason($_closureReason)
    {
        return ($this->ClosureReason = $_closureReason);
    }
    /**
     * Get ClosureData value
     * @return Message_Type|null
     */
    public function getClosureData()
    {
        return $this->ClosureData;
    }
    /**
     * Set ClosureData value
     * @param Message_Type $_closureData the ClosureData
     * @return Message_Type
     */
    public function setClosureData($_closureData)
    {
        return ($this->ClosureData = $_closureData);
    }
    /**
     * Get Event value
     * @return Event_Type|null
     */
    public function getEvent()
    {
        return $this->Event;
    }
    /**
     * Set Event value
     * @param Event_Type $_event the Event
     * @return Event_Type
     */
    public function setEvent($_event)
    {
        return ($this->Event = $_event);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
    }
    /**
     * Get ReportedOrg value
     * @return OrgInfo_Type|null
     */
    public function getReportedOrg()
    {
        return $this->ReportedOrg;
    }
    /**
     * Set ReportedOrg value
     * @param OrgInfo_Type $_reportedOrg the ReportedOrg
     * @return OrgInfo_Type
     */
    public function setReportedOrg($_reportedOrg)
    {
        return ($this->ReportedOrg = $_reportedOrg);
    }
    /**
     * Get ReportingOrg value
     * @return OrgInfo_Type|null
     */
    public function getReportingOrg()
    {
        return $this->ReportingOrg;
    }
    /**
     * Set ReportingOrg value
     * @param OrgInfo_Type $_reportingOrg the ReportingOrg
     * @return OrgInfo_Type
     */
    public function setReportingOrg($_reportingOrg)
    {
        return ($this->ReportingOrg = $_reportingOrg);
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
     * @return ClosureInfo_Type
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
