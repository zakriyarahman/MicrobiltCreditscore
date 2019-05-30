<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructSexualOffense_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSexualOffense_Type originally named SexualOffense_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSexualOffense_Type extends MicrobiltStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The CriminalCase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCriminalCase_Type
     */
    public $CriminalCase;
    /**
     * The RegistrationDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructRegistrationDetails_Type
     */
    public $RegistrationDetails;
    /**
     * The VehicleInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructVehicleInfo_Type
     */
    public $VehicleInfo;
    /**
     * The OffenderRef
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOffenderRef_Type
     */
    public $OffenderRef;
    /**
     * Constructor method for SexualOffense_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructCriminalCase_Type $_criminalCase
     * @param MicrobiltStructRegistrationDetails_Type $_registrationDetails
     * @param MicrobiltStructVehicleInfo_Type $_vehicleInfo
     * @param MicrobiltStructOffenderRef_Type $_offenderRef
     * @return MicrobiltStructSexualOffense_Type
     */
    public function __construct($_personInfo = NULL,$_criminalCase = NULL,$_registrationDetails = NULL,$_vehicleInfo = NULL,$_offenderRef = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'CriminalCase'=>$_criminalCase,'RegistrationDetails'=>$_registrationDetails,'VehicleInfo'=>$_vehicleInfo,'OffenderRef'=>$_offenderRef),false);
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
     * Get RegistrationDetails value
     * @return MicrobiltStructRegistrationDetails_Type|null
     */
    public function getRegistrationDetails()
    {
        return $this->RegistrationDetails;
    }
    /**
     * Set RegistrationDetails value
     * @param MicrobiltStructRegistrationDetails_Type $_registrationDetails the RegistrationDetails
     * @return MicrobiltStructRegistrationDetails_Type
     */
    public function setRegistrationDetails($_registrationDetails)
    {
        return ($this->RegistrationDetails = $_registrationDetails);
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
     * Get OffenderRef value
     * @return MicrobiltStructOffenderRef_Type|null
     */
    public function getOffenderRef()
    {
        return $this->OffenderRef;
    }
    /**
     * Set OffenderRef value
     * @param MicrobiltStructOffenderRef_Type $_offenderRef the OffenderRef
     * @return MicrobiltStructOffenderRef_Type
     */
    public function setOffenderRef($_offenderRef)
    {
        return ($this->OffenderRef = $_offenderRef);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructSexualOffense_Type
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
