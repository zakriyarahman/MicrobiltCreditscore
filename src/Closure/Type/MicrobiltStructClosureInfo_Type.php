<?php

namespace Zakriyarahman\Microbilt\Closure\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructClosureInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructClosureInfo_Type originally named ClosureInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructClosureInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The ClosureStats
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $ClosureStats;
    /**
     * The CollectionAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $CollectionAmt;
    /**
     * The ChargeOffAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $ChargeOffAmt;
    /**
     * The ClosureReason
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $ClosureReason;
    /**
     * The ClosureData
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $ClosureData;
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructEvent_Type
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
     * @var MicrobiltStructOrgInfo_Type
     */
    public $ReportedOrg;
    /**
     * The ReportingOrg
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $ReportingOrg;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for ClosureInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructMessage_Type $_closureStats
     * @param MicrobiltStructCurrencyAmount $_collectionAmt
     * @param MicrobiltStructCurrencyAmount $_chargeOffAmt
     * @param MicrobiltStructMessage_Type $_closureReason
     * @param MicrobiltStructMessage_Type $_closureData
     * @param MicrobiltStructEvent_Type $_event
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructOrgInfo_Type $_reportedOrg
     * @param MicrobiltStructOrgInfo_Type $_reportingOrg
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructClosureInfo_Type
     */
    public function __construct($_closureStats = NULL,$_collectionAmt = NULL,$_chargeOffAmt = NULL,$_closureReason = NULL,$_closureData = NULL,$_event = NULL,$_personInfo = NULL,$_reportedOrg = NULL,$_reportingOrg = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ClosureStats'=>$_closureStats,'CollectionAmt'=>$_collectionAmt,'ChargeOffAmt'=>$_chargeOffAmt,'ClosureReason'=>$_closureReason,'ClosureData'=>$_closureData,'Event'=>$_event,'PersonInfo'=>$_personInfo,'ReportedOrg'=>$_reportedOrg,'ReportingOrg'=>$_reportingOrg,'Message'=>$_message),false);
    }
    /**
     * Get ClosureStats value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getClosureStats()
    {
        return $this->ClosureStats;
    }
    /**
     * Set ClosureStats value
     * @param MicrobiltStructMessage_Type $_closureStats the ClosureStats
     * @return MicrobiltStructMessage_Type
     */
    public function setClosureStats($_closureStats)
    {
        return ($this->ClosureStats = $_closureStats);
    }
    /**
     * Get CollectionAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getCollectionAmt()
    {
        return $this->CollectionAmt;
    }
    /**
     * Set CollectionAmt value
     * @param MicrobiltStructCurrencyAmount $_collectionAmt the CollectionAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setCollectionAmt($_collectionAmt)
    {
        return ($this->CollectionAmt = $_collectionAmt);
    }
    /**
     * Get ChargeOffAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getChargeOffAmt()
    {
        return $this->ChargeOffAmt;
    }
    /**
     * Set ChargeOffAmt value
     * @param MicrobiltStructCurrencyAmount $_chargeOffAmt the ChargeOffAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setChargeOffAmt($_chargeOffAmt)
    {
        return ($this->ChargeOffAmt = $_chargeOffAmt);
    }
    /**
     * Get ClosureReason value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getClosureReason()
    {
        return $this->ClosureReason;
    }
    /**
     * Set ClosureReason value
     * @param MicrobiltStructMessage_Type $_closureReason the ClosureReason
     * @return MicrobiltStructMessage_Type
     */
    public function setClosureReason($_closureReason)
    {
        return ($this->ClosureReason = $_closureReason);
    }
    /**
     * Get ClosureData value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getClosureData()
    {
        return $this->ClosureData;
    }
    /**
     * Set ClosureData value
     * @param MicrobiltStructMessage_Type $_closureData the ClosureData
     * @return MicrobiltStructMessage_Type
     */
    public function setClosureData($_closureData)
    {
        return ($this->ClosureData = $_closureData);
    }
    /**
     * Get Event value
     * @return MicrobiltStructEvent_Type|null
     */
    public function getEvent()
    {
        return $this->Event;
    }
    /**
     * Set Event value
     * @param MicrobiltStructEvent_Type $_event the Event
     * @return MicrobiltStructEvent_Type
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
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getReportedOrg()
    {
        return $this->ReportedOrg;
    }
    /**
     * Set ReportedOrg value
     * @param MicrobiltStructOrgInfo_Type $_reportedOrg the ReportedOrg
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setReportedOrg($_reportedOrg)
    {
        return ($this->ReportedOrg = $_reportedOrg);
    }
    /**
     * Get ReportingOrg value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getReportingOrg()
    {
        return $this->ReportingOrg;
    }
    /**
     * Set ReportingOrg value
     * @param MicrobiltStructOrgInfo_Type $_reportingOrg the ReportingOrg
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setReportingOrg($_reportingOrg)
    {
        return ($this->ReportingOrg = $_reportingOrg);
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
     * @return MicrobiltStructClosureInfo_Type
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
