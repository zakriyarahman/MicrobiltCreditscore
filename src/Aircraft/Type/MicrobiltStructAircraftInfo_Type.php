<?php

namespace Zakriyarahman\Microbilt\Aircraft\Type;

/**
 * File for class MicrobiltStructAircraftInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAircraftInfo_Type originally named AircraftInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAircraftInfo_Type extends MicrobiltStructAggregate
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
     * The DtFirstSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtFirstSeen;
    /**
     * The DtLastSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtLastSeen;
    /**
     * The LastActionDate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastActionDate;
    /**
     * The AircraftNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AircraftNumber;
    /**
     * The CertificationDate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CertificationDate;
    /**
     * The ManufacturerName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ManufacturerName;
    /**
     * The Model
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Model;
    /**
     * The AircraftType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AircraftType;
    /**
     * The EngineType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EngineType;
    /**
     * The Engines
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Engines;
    /**
     * The Seats
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Seats;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Category;
    /**
     * The Certification
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Certification;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Weight;
    /**
     * The CruisingSpeed
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CruisingSpeed;
    /**
     * The EngManufacturerName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EngManufacturerName;
    /**
     * The EngHorsepower
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EngHorsepower;
    /**
     * The EngModelName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EngModelName;
    /**
     * The EngFuelConsumption
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EngFuelConsumption;
    /**
     * The ModelYear
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ModelYear;
    /**
     * Constructor method for AircraftInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_ownerRegistrantInfo
     * @param string $_dtFirstSeen
     * @param string $_dtLastSeen
     * @param string $_lastActionDate
     * @param string $_aircraftNumber
     * @param string $_certificationDate
     * @param string $_manufacturerName
     * @param string $_model
     * @param string $_aircraftType
     * @param string $_engineType
     * @param string $_engines
     * @param string $_seats
     * @param string $_category
     * @param string $_certification
     * @param string $_weight
     * @param string $_cruisingSpeed
     * @param string $_engManufacturerName
     * @param string $_engHorsepower
     * @param string $_engModelName
     * @param string $_engFuelConsumption
     * @param string $_modelYear
     * @return MicrobiltStructAircraftInfo_Type
     */
    public function __construct($_ownerRegistrantInfo = NULL,$_dtFirstSeen = NULL,$_dtLastSeen = NULL,$_lastActionDate = NULL,$_aircraftNumber = NULL,$_certificationDate = NULL,$_manufacturerName = NULL,$_model = NULL,$_aircraftType = NULL,$_engineType = NULL,$_engines = NULL,$_seats = NULL,$_category = NULL,$_certification = NULL,$_weight = NULL,$_cruisingSpeed = NULL,$_engManufacturerName = NULL,$_engHorsepower = NULL,$_engModelName = NULL,$_engFuelConsumption = NULL,$_modelYear = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OwnerRegistrantInfo'=>$_ownerRegistrantInfo,'DtFirstSeen'=>$_dtFirstSeen,'DtLastSeen'=>$_dtLastSeen,'LastActionDate'=>$_lastActionDate,'AircraftNumber'=>$_aircraftNumber,'CertificationDate'=>$_certificationDate,'ManufacturerName'=>$_manufacturerName,'Model'=>$_model,'AircraftType'=>$_aircraftType,'EngineType'=>$_engineType,'Engines'=>$_engines,'Seats'=>$_seats,'Category'=>$_category,'Certification'=>$_certification,'Weight'=>$_weight,'CruisingSpeed'=>$_cruisingSpeed,'EngManufacturerName'=>$_engManufacturerName,'EngHorsepower'=>$_engHorsepower,'EngModelName'=>$_engModelName,'EngFuelConsumption'=>$_engFuelConsumption,'ModelYear'=>$_modelYear),false);
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
     * Get DtFirstSeen value
     * @return string|null
     */
    public function getDtFirstSeen()
    {
        return $this->DtFirstSeen;
    }
    /**
     * Set DtFirstSeen value
     * @param string $_dtFirstSeen the DtFirstSeen
     * @return string
     */
    public function setDtFirstSeen($_dtFirstSeen)
    {
        return ($this->DtFirstSeen = $_dtFirstSeen);
    }
    /**
     * Get DtLastSeen value
     * @return string|null
     */
    public function getDtLastSeen()
    {
        return $this->DtLastSeen;
    }
    /**
     * Set DtLastSeen value
     * @param string $_dtLastSeen the DtLastSeen
     * @return string
     */
    public function setDtLastSeen($_dtLastSeen)
    {
        return ($this->DtLastSeen = $_dtLastSeen);
    }
    /**
     * Get LastActionDate value
     * @return string|null
     */
    public function getLastActionDate()
    {
        return $this->LastActionDate;
    }
    /**
     * Set LastActionDate value
     * @param string $_lastActionDate the LastActionDate
     * @return string
     */
    public function setLastActionDate($_lastActionDate)
    {
        return ($this->LastActionDate = $_lastActionDate);
    }
    /**
     * Get AircraftNumber value
     * @return string|null
     */
    public function getAircraftNumber()
    {
        return $this->AircraftNumber;
    }
    /**
     * Set AircraftNumber value
     * @param string $_aircraftNumber the AircraftNumber
     * @return string
     */
    public function setAircraftNumber($_aircraftNumber)
    {
        return ($this->AircraftNumber = $_aircraftNumber);
    }
    /**
     * Get CertificationDate value
     * @return string|null
     */
    public function getCertificationDate()
    {
        return $this->CertificationDate;
    }
    /**
     * Set CertificationDate value
     * @param string $_certificationDate the CertificationDate
     * @return string
     */
    public function setCertificationDate($_certificationDate)
    {
        return ($this->CertificationDate = $_certificationDate);
    }
    /**
     * Get ManufacturerName value
     * @return string|null
     */
    public function getManufacturerName()
    {
        return $this->ManufacturerName;
    }
    /**
     * Set ManufacturerName value
     * @param string $_manufacturerName the ManufacturerName
     * @return string
     */
    public function setManufacturerName($_manufacturerName)
    {
        return ($this->ManufacturerName = $_manufacturerName);
    }
    /**
     * Get Model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->Model;
    }
    /**
     * Set Model value
     * @param string $_model the Model
     * @return string
     */
    public function setModel($_model)
    {
        return ($this->Model = $_model);
    }
    /**
     * Get AircraftType value
     * @return string|null
     */
    public function getAircraftType()
    {
        return $this->AircraftType;
    }
    /**
     * Set AircraftType value
     * @param string $_aircraftType the AircraftType
     * @return string
     */
    public function setAircraftType($_aircraftType)
    {
        return ($this->AircraftType = $_aircraftType);
    }
    /**
     * Get EngineType value
     * @return string|null
     */
    public function getEngineType()
    {
        return $this->EngineType;
    }
    /**
     * Set EngineType value
     * @param string $_engineType the EngineType
     * @return string
     */
    public function setEngineType($_engineType)
    {
        return ($this->EngineType = $_engineType);
    }
    /**
     * Get Engines value
     * @return string|null
     */
    public function getEngines()
    {
        return $this->Engines;
    }
    /**
     * Set Engines value
     * @param string $_engines the Engines
     * @return string
     */
    public function setEngines($_engines)
    {
        return ($this->Engines = $_engines);
    }
    /**
     * Get Seats value
     * @return string|null
     */
    public function getSeats()
    {
        return $this->Seats;
    }
    /**
     * Set Seats value
     * @param string $_seats the Seats
     * @return string
     */
    public function setSeats($_seats)
    {
        return ($this->Seats = $_seats);
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $_category the Category
     * @return string
     */
    public function setCategory($_category)
    {
        return ($this->Category = $_category);
    }
    /**
     * Get Certification value
     * @return string|null
     */
    public function getCertification()
    {
        return $this->Certification;
    }
    /**
     * Set Certification value
     * @param string $_certification the Certification
     * @return string
     */
    public function setCertification($_certification)
    {
        return ($this->Certification = $_certification);
    }
    /**
     * Get Weight value
     * @return string|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param string $_weight the Weight
     * @return string
     */
    public function setWeight($_weight)
    {
        return ($this->Weight = $_weight);
    }
    /**
     * Get CruisingSpeed value
     * @return string|null
     */
    public function getCruisingSpeed()
    {
        return $this->CruisingSpeed;
    }
    /**
     * Set CruisingSpeed value
     * @param string $_cruisingSpeed the CruisingSpeed
     * @return string
     */
    public function setCruisingSpeed($_cruisingSpeed)
    {
        return ($this->CruisingSpeed = $_cruisingSpeed);
    }
    /**
     * Get EngManufacturerName value
     * @return string|null
     */
    public function getEngManufacturerName()
    {
        return $this->EngManufacturerName;
    }
    /**
     * Set EngManufacturerName value
     * @param string $_engManufacturerName the EngManufacturerName
     * @return string
     */
    public function setEngManufacturerName($_engManufacturerName)
    {
        return ($this->EngManufacturerName = $_engManufacturerName);
    }
    /**
     * Get EngHorsepower value
     * @return string|null
     */
    public function getEngHorsepower()
    {
        return $this->EngHorsepower;
    }
    /**
     * Set EngHorsepower value
     * @param string $_engHorsepower the EngHorsepower
     * @return string
     */
    public function setEngHorsepower($_engHorsepower)
    {
        return ($this->EngHorsepower = $_engHorsepower);
    }
    /**
     * Get EngModelName value
     * @return string|null
     */
    public function getEngModelName()
    {
        return $this->EngModelName;
    }
    /**
     * Set EngModelName value
     * @param string $_engModelName the EngModelName
     * @return string
     */
    public function setEngModelName($_engModelName)
    {
        return ($this->EngModelName = $_engModelName);
    }
    /**
     * Get EngFuelConsumption value
     * @return string|null
     */
    public function getEngFuelConsumption()
    {
        return $this->EngFuelConsumption;
    }
    /**
     * Set EngFuelConsumption value
     * @param string $_engFuelConsumption the EngFuelConsumption
     * @return string
     */
    public function setEngFuelConsumption($_engFuelConsumption)
    {
        return ($this->EngFuelConsumption = $_engFuelConsumption);
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
     * @return MicrobiltStructAircraftInfo_Type
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
