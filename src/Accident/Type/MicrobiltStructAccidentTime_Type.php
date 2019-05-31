<?php

namespace Zakriyarahman\Microbilt\Accident\Type;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructAccidentTime_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAccidentTime_Type originally named AccidentTime_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAccidentTime_Type extends MicrobiltWsdlClass
{
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DayOfWeek;
    /**
     * The HourOfAccident
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HourOfAccident;
    /**
     * The MinuteOfAccident
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MinuteOfAccident;
    /**
     * The HourOffNotified
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HourOffNotified;
    /**
     * The MinuteOffNotified
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MinuteOffNotified;
    /**
     * The HourOffArrived
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HourOffArrived;
    /**
     * The MinuteOffArrived
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MinuteOffArrived;
    /**
     * Constructor method for AccidentTime_Type
     * @see parent::__construct()
     * @param string $_dayOfWeek
     * @param string $_hourOfAccident
     * @param string $_minuteOfAccident
     * @param string $_hourOffNotified
     * @param string $_minuteOffNotified
     * @param string $_hourOffArrived
     * @param string $_minuteOffArrived
     * @return MicrobiltStructAccidentTime_Type
     */
    public function __construct($_dayOfWeek = NULL,$_hourOfAccident = NULL,$_minuteOfAccident = NULL,$_hourOffNotified = NULL,$_minuteOffNotified = NULL,$_hourOffArrived = NULL,$_minuteOffArrived = NULL)
    {
        parent::__construct(array('DayOfWeek'=>$_dayOfWeek,'HourOfAccident'=>$_hourOfAccident,'MinuteOfAccident'=>$_minuteOfAccident,'HourOffNotified'=>$_hourOffNotified,'MinuteOffNotified'=>$_minuteOffNotified,'HourOffArrived'=>$_hourOffArrived,'MinuteOffArrived'=>$_minuteOffArrived),false);
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @param string $_dayOfWeek the DayOfWeek
     * @return string
     */
    public function setDayOfWeek($_dayOfWeek)
    {
        return ($this->DayOfWeek = $_dayOfWeek);
    }
    /**
     * Get HourOfAccident value
     * @return string|null
     */
    public function getHourOfAccident()
    {
        return $this->HourOfAccident;
    }
    /**
     * Set HourOfAccident value
     * @param string $_hourOfAccident the HourOfAccident
     * @return string
     */
    public function setHourOfAccident($_hourOfAccident)
    {
        return ($this->HourOfAccident = $_hourOfAccident);
    }
    /**
     * Get MinuteOfAccident value
     * @return string|null
     */
    public function getMinuteOfAccident()
    {
        return $this->MinuteOfAccident;
    }
    /**
     * Set MinuteOfAccident value
     * @param string $_minuteOfAccident the MinuteOfAccident
     * @return string
     */
    public function setMinuteOfAccident($_minuteOfAccident)
    {
        return ($this->MinuteOfAccident = $_minuteOfAccident);
    }
    /**
     * Get HourOffNotified value
     * @return string|null
     */
    public function getHourOffNotified()
    {
        return $this->HourOffNotified;
    }
    /**
     * Set HourOffNotified value
     * @param string $_hourOffNotified the HourOffNotified
     * @return string
     */
    public function setHourOffNotified($_hourOffNotified)
    {
        return ($this->HourOffNotified = $_hourOffNotified);
    }
    /**
     * Get MinuteOffNotified value
     * @return string|null
     */
    public function getMinuteOffNotified()
    {
        return $this->MinuteOffNotified;
    }
    /**
     * Set MinuteOffNotified value
     * @param string $_minuteOffNotified the MinuteOffNotified
     * @return string
     */
    public function setMinuteOffNotified($_minuteOffNotified)
    {
        return ($this->MinuteOffNotified = $_minuteOffNotified);
    }
    /**
     * Get HourOffArrived value
     * @return string|null
     */
    public function getHourOffArrived()
    {
        return $this->HourOffArrived;
    }
    /**
     * Set HourOffArrived value
     * @param string $_hourOffArrived the HourOffArrived
     * @return string
     */
    public function setHourOffArrived($_hourOffArrived)
    {
        return ($this->HourOffArrived = $_hourOffArrived);
    }
    /**
     * Get MinuteOffArrived value
     * @return string|null
     */
    public function getMinuteOffArrived()
    {
        return $this->MinuteOffArrived;
    }
    /**
     * Set MinuteOffArrived value
     * @param string $_minuteOffArrived the MinuteOffArrived
     * @return string
     */
    public function setMinuteOffArrived($_minuteOffArrived)
    {
        return ($this->MinuteOffArrived = $_minuteOffArrived);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAccidentTime_Type
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
