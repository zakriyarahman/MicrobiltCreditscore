<?php
/**
 * File for class MicrobiltStructVehicleInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructVehicleInfo_Type originally named VehicleInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructVehicleInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The AutomobileInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructAutomobileInfo_Type
     */
    public $AutomobileInfo;
    /**
     * The VesselInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructVesselInfo_Type
     */
    public $VesselInfo;
    /**
     * The AircraftInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructAircraftInfo_Type
     */
    public $AircraftInfo;
    /**
     * Constructor method for VehicleInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructAutomobileInfo_Type $_automobileInfo
     * @param MicrobiltStructVesselInfo_Type $_vesselInfo
     * @param MicrobiltStructAircraftInfo_Type $_aircraftInfo
     * @return MicrobiltStructVehicleInfo_Type
     */
    public function __construct($_automobileInfo = NULL,$_vesselInfo = NULL,$_aircraftInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AutomobileInfo'=>$_automobileInfo,'VesselInfo'=>$_vesselInfo,'AircraftInfo'=>$_aircraftInfo),false);
    }
    /**
     * Get AutomobileInfo value
     * @return MicrobiltStructAutomobileInfo_Type|null
     */
    public function getAutomobileInfo()
    {
        return $this->AutomobileInfo;
    }
    /**
     * Set AutomobileInfo value
     * @param MicrobiltStructAutomobileInfo_Type $_automobileInfo the AutomobileInfo
     * @return MicrobiltStructAutomobileInfo_Type
     */
    public function setAutomobileInfo($_automobileInfo)
    {
        return ($this->AutomobileInfo = $_automobileInfo);
    }
    /**
     * Get VesselInfo value
     * @return MicrobiltStructVesselInfo_Type|null
     */
    public function getVesselInfo()
    {
        return $this->VesselInfo;
    }
    /**
     * Set VesselInfo value
     * @param MicrobiltStructVesselInfo_Type $_vesselInfo the VesselInfo
     * @return MicrobiltStructVesselInfo_Type
     */
    public function setVesselInfo($_vesselInfo)
    {
        return ($this->VesselInfo = $_vesselInfo);
    }
    /**
     * Get AircraftInfo value
     * @return MicrobiltStructAircraftInfo_Type|null
     */
    public function getAircraftInfo()
    {
        return $this->AircraftInfo;
    }
    /**
     * Set AircraftInfo value
     * @param MicrobiltStructAircraftInfo_Type $_aircraftInfo the AircraftInfo
     * @return MicrobiltStructAircraftInfo_Type
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
     * @return MicrobiltStructVehicleInfo_Type
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
