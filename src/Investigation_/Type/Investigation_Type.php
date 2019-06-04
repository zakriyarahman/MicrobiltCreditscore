<?php

namespace Zakriyarahman\Microbilt\Investigation_\Type;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class Investigation_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for Investigation_Type originally named Investigation_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class Investigation_Type extends MicrobiltWsdlClass
{
    /**
     * The AgentReportNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AgentReportNum;
    /**
     * The AgentName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AgentName;
    /**
     * The AgentRank
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AgentRank;
    /**
     * The AgentIdBadgeNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AgentIdBadgeNum;
    /**
     * The AgentDepartmentName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AgentDepartmentName;
    /**
     * The InvestComplete
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InvestComplete;
    /**
     * The SearchDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SearchDt;
    /**
     * The PhotosTaken
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PhotosTaken;
    /**
     * The PhotosTakenWhom
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PhotosTakenWhom;
    /**
     * The FirstAidName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FirstAidName;
    /**
     * The FirstAidPersonType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FirstAidPersonType;
    /**
     * The InjuredTakenTo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InjuredTakenTo;
    /**
     * The InjuredTakenBy
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InjuredTakenBy;
    /**
     * The TypeDriverAccident
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TypeDriverAccident;
    /**
     * The HourOfEMSNotified
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HourOfEMSNotified;
    /**
     * The MinuteOfEMSNotified
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MinuteOfEMSNotified;
    /**
     * The HourOfEMSArrived
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HourOfEMSArrived;
    /**
     * The MinuteOfEMSArrived
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MinuteOfEMSArrived;
    /**
     * Constructor method for Investigation_Type
     * @see parent::__construct()
     * @param string $_agentReportNum
     * @param string $_agentName
     * @param string $_agentRank
     * @param string $_agentIdBadgeNum
     * @param string $_agentDepartmentName
     * @param string $_investComplete
     * @param string $_searchDt
     * @param string $_photosTaken
     * @param string $_photosTakenWhom
     * @param string $_firstAidName
     * @param string $_firstAidPersonType
     * @param string $_injuredTakenTo
     * @param string $_injuredTakenBy
     * @param string $_typeDriverAccident
     * @param string $_hourOfEMSNotified
     * @param string $_minuteOfEMSNotified
     * @param string $_hourOfEMSArrived
     * @param string $_minuteOfEMSArrived
     * @return Investigation_Type
     */
    public function __construct($_agentReportNum = NULL,$_agentName = NULL,$_agentRank = NULL,$_agentIdBadgeNum = NULL,$_agentDepartmentName = NULL,$_investComplete = NULL,$_searchDt = NULL,$_photosTaken = NULL,$_photosTakenWhom = NULL,$_firstAidName = NULL,$_firstAidPersonType = NULL,$_injuredTakenTo = NULL,$_injuredTakenBy = NULL,$_typeDriverAccident = NULL,$_hourOfEMSNotified = NULL,$_minuteOfEMSNotified = NULL,$_hourOfEMSArrived = NULL,$_minuteOfEMSArrived = NULL)
    {
        parent::__construct(array('AgentReportNum'=>$_agentReportNum,'AgentName'=>$_agentName,'AgentRank'=>$_agentRank,'AgentIdBadgeNum'=>$_agentIdBadgeNum,'AgentDepartmentName'=>$_agentDepartmentName,'InvestComplete'=>$_investComplete,'SearchDt'=>$_searchDt,'PhotosTaken'=>$_photosTaken,'PhotosTakenWhom'=>$_photosTakenWhom,'FirstAidName'=>$_firstAidName,'FirstAidPersonType'=>$_firstAidPersonType,'InjuredTakenTo'=>$_injuredTakenTo,'InjuredTakenBy'=>$_injuredTakenBy,'TypeDriverAccident'=>$_typeDriverAccident,'HourOfEMSNotified'=>$_hourOfEMSNotified,'MinuteOfEMSNotified'=>$_minuteOfEMSNotified,'HourOfEMSArrived'=>$_hourOfEMSArrived,'MinuteOfEMSArrived'=>$_minuteOfEMSArrived),false);
    }
    /**
     * Get AgentReportNum value
     * @return string|null
     */
    public function getAgentReportNum()
    {
        return $this->AgentReportNum;
    }
    /**
     * Set AgentReportNum value
     * @param string $_agentReportNum the AgentReportNum
     * @return string
     */
    public function setAgentReportNum($_agentReportNum)
    {
        return ($this->AgentReportNum = $_agentReportNum);
    }
    /**
     * Get AgentName value
     * @return string|null
     */
    public function getAgentName()
    {
        return $this->AgentName;
    }
    /**
     * Set AgentName value
     * @param string $_agentName the AgentName
     * @return string
     */
    public function setAgentName($_agentName)
    {
        return ($this->AgentName = $_agentName);
    }
    /**
     * Get AgentRank value
     * @return string|null
     */
    public function getAgentRank()
    {
        return $this->AgentRank;
    }
    /**
     * Set AgentRank value
     * @param string $_agentRank the AgentRank
     * @return string
     */
    public function setAgentRank($_agentRank)
    {
        return ($this->AgentRank = $_agentRank);
    }
    /**
     * Get AgentIdBadgeNum value
     * @return string|null
     */
    public function getAgentIdBadgeNum()
    {
        return $this->AgentIdBadgeNum;
    }
    /**
     * Set AgentIdBadgeNum value
     * @param string $_agentIdBadgeNum the AgentIdBadgeNum
     * @return string
     */
    public function setAgentIdBadgeNum($_agentIdBadgeNum)
    {
        return ($this->AgentIdBadgeNum = $_agentIdBadgeNum);
    }
    /**
     * Get AgentDepartmentName value
     * @return string|null
     */
    public function getAgentDepartmentName()
    {
        return $this->AgentDepartmentName;
    }
    /**
     * Set AgentDepartmentName value
     * @param string $_agentDepartmentName the AgentDepartmentName
     * @return string
     */
    public function setAgentDepartmentName($_agentDepartmentName)
    {
        return ($this->AgentDepartmentName = $_agentDepartmentName);
    }
    /**
     * Get InvestComplete value
     * @return string|null
     */
    public function getInvestComplete()
    {
        return $this->InvestComplete;
    }
    /**
     * Set InvestComplete value
     * @param string $_investComplete the InvestComplete
     * @return string
     */
    public function setInvestComplete($_investComplete)
    {
        return ($this->InvestComplete = $_investComplete);
    }
    /**
     * Get SearchDt value
     * @return string|null
     */
    public function getSearchDt()
    {
        return $this->SearchDt;
    }
    /**
     * Set SearchDt value
     * @param string $_searchDt the SearchDt
     * @return string
     */
    public function setSearchDt($_searchDt)
    {
        return ($this->SearchDt = $_searchDt);
    }
    /**
     * Get PhotosTaken value
     * @return string|null
     */
    public function getPhotosTaken()
    {
        return $this->PhotosTaken;
    }
    /**
     * Set PhotosTaken value
     * @param string $_photosTaken the PhotosTaken
     * @return string
     */
    public function setPhotosTaken($_photosTaken)
    {
        return ($this->PhotosTaken = $_photosTaken);
    }
    /**
     * Get PhotosTakenWhom value
     * @return string|null
     */
    public function getPhotosTakenWhom()
    {
        return $this->PhotosTakenWhom;
    }
    /**
     * Set PhotosTakenWhom value
     * @param string $_photosTakenWhom the PhotosTakenWhom
     * @return string
     */
    public function setPhotosTakenWhom($_photosTakenWhom)
    {
        return ($this->PhotosTakenWhom = $_photosTakenWhom);
    }
    /**
     * Get FirstAidName value
     * @return string|null
     */
    public function getFirstAidName()
    {
        return $this->FirstAidName;
    }
    /**
     * Set FirstAidName value
     * @param string $_firstAidName the FirstAidName
     * @return string
     */
    public function setFirstAidName($_firstAidName)
    {
        return ($this->FirstAidName = $_firstAidName);
    }
    /**
     * Get FirstAidPersonType value
     * @return string|null
     */
    public function getFirstAidPersonType()
    {
        return $this->FirstAidPersonType;
    }
    /**
     * Set FirstAidPersonType value
     * @param string $_firstAidPersonType the FirstAidPersonType
     * @return string
     */
    public function setFirstAidPersonType($_firstAidPersonType)
    {
        return ($this->FirstAidPersonType = $_firstAidPersonType);
    }
    /**
     * Get InjuredTakenTo value
     * @return string|null
     */
    public function getInjuredTakenTo()
    {
        return $this->InjuredTakenTo;
    }
    /**
     * Set InjuredTakenTo value
     * @param string $_injuredTakenTo the InjuredTakenTo
     * @return string
     */
    public function setInjuredTakenTo($_injuredTakenTo)
    {
        return ($this->InjuredTakenTo = $_injuredTakenTo);
    }
    /**
     * Get InjuredTakenBy value
     * @return string|null
     */
    public function getInjuredTakenBy()
    {
        return $this->InjuredTakenBy;
    }
    /**
     * Set InjuredTakenBy value
     * @param string $_injuredTakenBy the InjuredTakenBy
     * @return string
     */
    public function setInjuredTakenBy($_injuredTakenBy)
    {
        return ($this->InjuredTakenBy = $_injuredTakenBy);
    }
    /**
     * Get TypeDriverAccident value
     * @return string|null
     */
    public function getTypeDriverAccident()
    {
        return $this->TypeDriverAccident;
    }
    /**
     * Set TypeDriverAccident value
     * @param string $_typeDriverAccident the TypeDriverAccident
     * @return string
     */
    public function setTypeDriverAccident($_typeDriverAccident)
    {
        return ($this->TypeDriverAccident = $_typeDriverAccident);
    }
    /**
     * Get HourOfEMSNotified value
     * @return string|null
     */
    public function getHourOfEMSNotified()
    {
        return $this->HourOfEMSNotified;
    }
    /**
     * Set HourOfEMSNotified value
     * @param string $_hourOfEMSNotified the HourOfEMSNotified
     * @return string
     */
    public function setHourOfEMSNotified($_hourOfEMSNotified)
    {
        return ($this->HourOfEMSNotified = $_hourOfEMSNotified);
    }
    /**
     * Get MinuteOfEMSNotified value
     * @return string|null
     */
    public function getMinuteOfEMSNotified()
    {
        return $this->MinuteOfEMSNotified;
    }
    /**
     * Set MinuteOfEMSNotified value
     * @param string $_minuteOfEMSNotified the MinuteOfEMSNotified
     * @return string
     */
    public function setMinuteOfEMSNotified($_minuteOfEMSNotified)
    {
        return ($this->MinuteOfEMSNotified = $_minuteOfEMSNotified);
    }
    /**
     * Get HourOfEMSArrived value
     * @return string|null
     */
    public function getHourOfEMSArrived()
    {
        return $this->HourOfEMSArrived;
    }
    /**
     * Set HourOfEMSArrived value
     * @param string $_hourOfEMSArrived the HourOfEMSArrived
     * @return string
     */
    public function setHourOfEMSArrived($_hourOfEMSArrived)
    {
        return ($this->HourOfEMSArrived = $_hourOfEMSArrived);
    }
    /**
     * Get MinuteOfEMSArrived value
     * @return string|null
     */
    public function getMinuteOfEMSArrived()
    {
        return $this->MinuteOfEMSArrived;
    }
    /**
     * Set MinuteOfEMSArrived value
     * @param string $_minuteOfEMSArrived the MinuteOfEMSArrived
     * @return string
     */
    public function setMinuteOfEMSArrived($_minuteOfEMSArrived)
    {
        return ($this->MinuteOfEMSArrived = $_minuteOfEMSArrived);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return Investigation_Type
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
