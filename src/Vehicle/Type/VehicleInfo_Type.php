<?php

namespace Zakriyarahman\Microbilt\Vehicle\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class VehicleInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for VehicleInfo_Type originally named VehicleInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class VehicleInfo_Type extends Aggregate
{
    /**
     * The AutomobileInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var AutomobileInfo_Type
     */
    public $AutomobileInfo;
    /**
     * The VesselInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var VesselInfo_Type
     */
    public $VesselInfo;
    /**
     * The AircraftInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var AircraftInfo_Type
     */
    public $AircraftInfo;
    /**
     * Constructor method for VehicleInfo_Type
     * @see parent::__construct()
     * @param AutomobileInfo_Type $_automobileInfo
     * @param VesselInfo_Type $_vesselInfo
     * @param AircraftInfo_Type $_aircraftInfo
     * @return VehicleInfo_Type
     */
    public function __construct($_automobileInfo = NULL,$_vesselInfo = NULL,$_aircraftInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AutomobileInfo'=>$_automobileInfo,'VesselInfo'=>$_vesselInfo,'AircraftInfo'=>$_aircraftInfo),false);
    }
    /**
     * Get AutomobileInfo value
     * @return AutomobileInfo_Type|null
     */
    public function getAutomobileInfo()
    {
        return $this->AutomobileInfo;
    }
    /**
     * Set AutomobileInfo value
     * @param AutomobileInfo_Type $_automobileInfo the AutomobileInfo
     * @return AutomobileInfo_Type
     */
    public function setAutomobileInfo($_automobileInfo)
    {
        return ($this->AutomobileInfo = $_automobileInfo);
    }
    /**
     * Get VesselInfo value
     * @return VesselInfo_Type|null
     */
    public function getVesselInfo()
    {
        return $this->VesselInfo;
    }
    /**
     * Set VesselInfo value
     * @param VesselInfo_Type $_vesselInfo the VesselInfo
     * @return VesselInfo_Type
     */
    public function setVesselInfo($_vesselInfo)
    {
        return ($this->VesselInfo = $_vesselInfo);
    }
    /**
     * Get AircraftInfo value
     * @return AircraftInfo_Type|null
     */
    public function getAircraftInfo()
    {
        return $this->AircraftInfo;
    }
    /**
     * Set AircraftInfo value
     * @param AircraftInfo_Type $_aircraftInfo the AircraftInfo
     * @return AircraftInfo_Type
     */
    public function setAircraftInfo($_aircraftInfo)
    {
        return ($this->AircraftInfo = $_aircraftInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return VehicleInfo_Type
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
