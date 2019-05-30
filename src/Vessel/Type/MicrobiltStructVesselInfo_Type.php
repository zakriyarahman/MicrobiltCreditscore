<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructVesselInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructVesselInfo_Type originally named VesselInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructVesselInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The OwnerRegistrantInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $OwnerRegistrantInfo;
    /**
     * The HullId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HullId;
    /**
     * The VesselPropulsionType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $VesselPropulsionType;
    /**
     * The BoatDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BoatDescription;
    /**
     * The HullMaterialType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $HullMaterialType;
    /**
     * The LengthFeet
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LengthFeet;
    /**
     * The VesselType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $VesselType;
    /**
     * The ModelYear
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ModelYear;
    /**
     * Constructor method for VesselInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_ownerRegistrantInfo
     * @param string $_hullId
     * @param MicrobiltStructCodeDescription_Type $_vesselPropulsionType
     * @param string $_boatDescription
     * @param MicrobiltStructCodeDescription_Type $_hullMaterialType
     * @param int $_lengthFeet
     * @param MicrobiltStructCodeDescription_Type $_vesselType
     * @param string $_modelYear
     * @return MicrobiltStructVesselInfo_Type
     */
    public function __construct($_ownerRegistrantInfo = NULL,$_hullId = NULL,$_vesselPropulsionType = NULL,$_boatDescription = NULL,$_hullMaterialType = NULL,$_lengthFeet = NULL,$_vesselType = NULL,$_modelYear = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OwnerRegistrantInfo'=>$_ownerRegistrantInfo,'HullId'=>$_hullId,'VesselPropulsionType'=>$_vesselPropulsionType,'BoatDescription'=>$_boatDescription,'HullMaterialType'=>$_hullMaterialType,'LengthFeet'=>$_lengthFeet,'VesselType'=>$_vesselType,'ModelYear'=>$_modelYear),false);
    }
    /**
     * Get OwnerRegistrantInfo value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getOwnerRegistrantInfo()
    {
        return $this->OwnerRegistrantInfo;
    }
    /**
     * Set OwnerRegistrantInfo value
     * @param MicrobiltStructPersonInfo_Type $_ownerRegistrantInfo the OwnerRegistrantInfo
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setOwnerRegistrantInfo($_ownerRegistrantInfo)
    {
        return ($this->OwnerRegistrantInfo = $_ownerRegistrantInfo);
    }
    /**
     * Get HullId value
     * @return string|null
     */
    public function getHullId()
    {
        return $this->HullId;
    }
    /**
     * Set HullId value
     * @param string $_hullId the HullId
     * @return string
     */
    public function setHullId($_hullId)
    {
        return ($this->HullId = $_hullId);
    }
    /**
     * Get VesselPropulsionType value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getVesselPropulsionType()
    {
        return $this->VesselPropulsionType;
    }
    /**
     * Set VesselPropulsionType value
     * @param MicrobiltStructCodeDescription_Type $_vesselPropulsionType the VesselPropulsionType
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setVesselPropulsionType($_vesselPropulsionType)
    {
        return ($this->VesselPropulsionType = $_vesselPropulsionType);
    }
    /**
     * Get BoatDescription value
     * @return string|null
     */
    public function getBoatDescription()
    {
        return $this->BoatDescription;
    }
    /**
     * Set BoatDescription value
     * @param string $_boatDescription the BoatDescription
     * @return string
     */
    public function setBoatDescription($_boatDescription)
    {
        return ($this->BoatDescription = $_boatDescription);
    }
    /**
     * Get HullMaterialType value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getHullMaterialType()
    {
        return $this->HullMaterialType;
    }
    /**
     * Set HullMaterialType value
     * @param MicrobiltStructCodeDescription_Type $_hullMaterialType the HullMaterialType
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setHullMaterialType($_hullMaterialType)
    {
        return ($this->HullMaterialType = $_hullMaterialType);
    }
    /**
     * Get LengthFeet value
     * @return int|null
     */
    public function getLengthFeet()
    {
        return $this->LengthFeet;
    }
    /**
     * Set LengthFeet value
     * @param int $_lengthFeet the LengthFeet
     * @return int
     */
    public function setLengthFeet($_lengthFeet)
    {
        return ($this->LengthFeet = $_lengthFeet);
    }
    /**
     * Get VesselType value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getVesselType()
    {
        return $this->VesselType;
    }
    /**
     * Set VesselType value
     * @param MicrobiltStructCodeDescription_Type $_vesselType the VesselType
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setVesselType($_vesselType)
    {
        return ($this->VesselType = $_vesselType);
    }
    /**
     * Get ModelYear value
     * @return string|null
     */
    public function getModelYear()
    {
        return $this->ModelYear;
    }
    /**
     * Set ModelYear value
     * @param string $_modelYear the ModelYear
     * @return string
     */
    public function setModelYear($_modelYear)
    {
        return ($this->ModelYear = $_modelYear);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructVesselInfo_Type
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
