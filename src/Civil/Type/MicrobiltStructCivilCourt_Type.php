<?php

namespace Zakriyarahman\Microbilt\Civil\Type;

/**
 * File for class MicrobiltStructCivilCourt_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCivilCourt_Type originally named CivilCourt_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCivilCourt_Type extends MicrobiltStructAggregate
{
    /**
     * The Parties
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructParties_Type
     */
    public $Parties;
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructEvent_Type
     */
    public $Event;
    /**
     * The CriminalCase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCriminalCase_Type
     */
    public $CriminalCase;
    /**
     * The VehicleInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructVehicleInfo_Type
     */
    public $VehicleInfo;
    /**
     * Constructor method for CivilCourt_Type
     * @see parent::__construct()
     * @param MicrobiltStructParties_Type $_parties
     * @param MicrobiltStructEvent_Type $_event
     * @param MicrobiltStructCriminalCase_Type $_criminalCase
     * @param MicrobiltStructVehicleInfo_Type $_vehicleInfo
     * @return MicrobiltStructCivilCourt_Type
     */
    public function __construct($_parties = NULL,$_event = NULL,$_criminalCase = NULL,$_vehicleInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Parties'=>$_parties,'Event'=>$_event,'CriminalCase'=>$_criminalCase,'VehicleInfo'=>$_vehicleInfo),false);
    }
    /**
     * Get Parties value
     * @return MicrobiltStructParties_Type|null
     */
    public function getParties()
    {
        return $this->Parties;
    }
    /**
     * Set Parties value
     * @param MicrobiltStructParties_Type $_parties the Parties
     * @return MicrobiltStructParties_Type
     */
    public function setParties($_parties)
    {
        return ($this->Parties = $_parties);
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
     * Get CriminalCase value
     * @return MicrobiltStructCriminalCase_Type|null
     */
    public function getCriminalCase()
    {
        return $this->CriminalCase;
    }
    /**
     * Set CriminalCase value
     * @param MicrobiltStructCriminalCase_Type $_criminalCase the CriminalCase
     * @return MicrobiltStructCriminalCase_Type
     */
    public function setCriminalCase($_criminalCase)
    {
        return ($this->CriminalCase = $_criminalCase);
    }
    /**
     * Get VehicleInfo value
     * @return MicrobiltStructVehicleInfo_Type|null
     */
    public function getVehicleInfo()
    {
        return $this->VehicleInfo;
    }
    /**
     * Set VehicleInfo value
     * @param MicrobiltStructVehicleInfo_Type $_vehicleInfo the VehicleInfo
     * @return MicrobiltStructVehicleInfo_Type
     */
    public function setVehicleInfo($_vehicleInfo)
    {
        return ($this->VehicleInfo = $_vehicleInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCivilCourt_Type
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
