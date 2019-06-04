<?php

namespace Zakriyarahman\Microbilt\Sexual\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class SexualOffense_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for SexualOffense_Type originally named SexualOffense_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class SexualOffense_Type extends Aggregate
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
     * @var CriminalCase_Type
     */
    public $CriminalCase;
    /**
     * The RegistrationDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var RegistrationDetails_Type
     */
    public $RegistrationDetails;
    /**
     * The VehicleInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var VehicleInfo_Type
     */
    public $VehicleInfo;
    /**
     * The OffenderRef
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var OffenderRef_Type
     */
    public $OffenderRef;
    /**
     * Constructor method for SexualOffense_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param CriminalCase_Type $_criminalCase
     * @param RegistrationDetails_Type $_registrationDetails
     * @param VehicleInfo_Type $_vehicleInfo
     * @param OffenderRef_Type $_offenderRef
     * @return SexualOffense_Type
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
     * @return CriminalCase_Type|null
     */
    public function getCriminalCase()
    {
        return $this->CriminalCase;
    }
    /**
     * Set CriminalCase value
     * @param CriminalCase_Type $_criminalCase the CriminalCase
     * @return CriminalCase_Type
     */
    public function setCriminalCase($_criminalCase)
    {
        return ($this->CriminalCase = $_criminalCase);
    }
    /**
     * Get RegistrationDetails value
     * @return RegistrationDetails_Type|null
     */
    public function getRegistrationDetails()
    {
        return $this->RegistrationDetails;
    }
    /**
     * Set RegistrationDetails value
     * @param RegistrationDetails_Type $_registrationDetails the RegistrationDetails
     * @return RegistrationDetails_Type
     */
    public function setRegistrationDetails($_registrationDetails)
    {
        return ($this->RegistrationDetails = $_registrationDetails);
    }
    /**
     * Get VehicleInfo value
     * @return VehicleInfo_Type|null
     */
    public function getVehicleInfo()
    {
        return $this->VehicleInfo;
    }
    /**
     * Set VehicleInfo value
     * @param VehicleInfo_Type $_vehicleInfo the VehicleInfo
     * @return VehicleInfo_Type
     */
    public function setVehicleInfo($_vehicleInfo)
    {
        return ($this->VehicleInfo = $_vehicleInfo);
    }
    /**
     * Get OffenderRef value
     * @return OffenderRef_Type|null
     */
    public function getOffenderRef()
    {
        return $this->OffenderRef;
    }
    /**
     * Set OffenderRef value
     * @param OffenderRef_Type $_offenderRef the OffenderRef
     * @return OffenderRef_Type
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
     * @return SexualOffense_Type
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
