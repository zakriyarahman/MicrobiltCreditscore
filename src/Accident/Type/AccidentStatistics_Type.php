<?php

namespace Zakriyarahman\Microbilt\Accident\Type;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class AccidentStatistics_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class AccidentStatistics_Type extends MicrobiltWsdlClass
{
    /**
     * The TotalTarDamage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalTarDamage;
    /**
     * The TotalVehicleDamage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalVehicleDamage;
    /**
     * The TotalPropertyDamage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalPropertyDamage;
    /**
     * The TotalNumOfPersons
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalNumOfPersons;
    /**
     * The TotalNumOfDrivers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalNumOfDrivers;
    /**
     * The TotalNumOfVehicles
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalNumOfVehicles;
    /**
     * The TotalNumOfFatalities
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalNumOfFatalities;
    /**
     * The TotalNumOfNonTrafficFatal
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalNumOfNonTrafficFatal;
    /**
     * The TotalNumOfInjuries
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalNumOfInjuries;
    /**
     * The TotalNumOfPedestrians
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalNumOfPedestrians;
    /**
     * The TotalNumOfPedalcyclists
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalNumOfPedalcyclists;
    /**
     * Constructor method for AccidentStatistics_Type
     * @see parent::__construct()
     * @param string $_totalTarDamage
     * @param string $_totalVehicleDamage
     * @param string $_totalPropertyDamage
     * @param string $_totalNumOfPersons
     * @param string $_totalNumOfDrivers
     * @param string $_totalNumOfVehicles
     * @param string $_totalNumOfFatalities
     * @param string $_totalNumOfNonTrafficFatal
     * @param string $_totalNumOfInjuries
     * @param string $_totalNumOfPedestrians
     * @param string $_totalNumOfPedalcyclists
     * @return AccidentStatistics_Type
     */
    public function __construct($_totalTarDamage = NULL,$_totalVehicleDamage = NULL,$_totalPropertyDamage = NULL,$_totalNumOfPersons = NULL,$_totalNumOfDrivers = NULL,$_totalNumOfVehicles = NULL,$_totalNumOfFatalities = NULL,$_totalNumOfNonTrafficFatal = NULL,$_totalNumOfInjuries = NULL,$_totalNumOfPedestrians = NULL,$_totalNumOfPedalcyclists = NULL)
    {
        parent::__construct(array('TotalTarDamage'=>$_totalTarDamage,'TotalVehicleDamage'=>$_totalVehicleDamage,'TotalPropertyDamage'=>$_totalPropertyDamage,'TotalNumOfPersons'=>$_totalNumOfPersons,'TotalNumOfDrivers'=>$_totalNumOfDrivers,'TotalNumOfVehicles'=>$_totalNumOfVehicles,'TotalNumOfFatalities'=>$_totalNumOfFatalities,'TotalNumOfNonTrafficFatal'=>$_totalNumOfNonTrafficFatal,'TotalNumOfInjuries'=>$_totalNumOfInjuries,'TotalNumOfPedestrians'=>$_totalNumOfPedestrians,'TotalNumOfPedalcyclists'=>$_totalNumOfPedalcyclists),false);
    }
    /**
     * Get TotalTarDamage value
     * @return string|null
     */
    public function getTotalTarDamage()
    {
        return $this->TotalTarDamage;
    }
    /**
     * Set TotalTarDamage value
     * @param string $_totalTarDamage the TotalTarDamage
     * @return string
     */
    public function setTotalTarDamage($_totalTarDamage)
    {
        return ($this->TotalTarDamage = $_totalTarDamage);
    }
    /**
     * Get TotalVehicleDamage value
     * @return string|null
     */
    public function getTotalVehicleDamage()
    {
        return $this->TotalVehicleDamage;
    }
    /**
     * Set TotalVehicleDamage value
     * @param string $_totalVehicleDamage the TotalVehicleDamage
     * @return string
     */
    public function setTotalVehicleDamage($_totalVehicleDamage)
    {
        return ($this->TotalVehicleDamage = $_totalVehicleDamage);
    }
    /**
     * Get TotalPropertyDamage value
     * @return string|null
     */
    public function getTotalPropertyDamage()
    {
        return $this->TotalPropertyDamage;
    }
    /**
     * Set TotalPropertyDamage value
     * @param string $_totalPropertyDamage the TotalPropertyDamage
     * @return string
     */
    public function setTotalPropertyDamage($_totalPropertyDamage)
    {
        return ($this->TotalPropertyDamage = $_totalPropertyDamage);
    }
    /**
     * Get TotalNumOfPersons value
     * @return string|null
     */
    public function getTotalNumOfPersons()
    {
        return $this->TotalNumOfPersons;
    }
    /**
     * Set TotalNumOfPersons value
     * @param string $_totalNumOfPersons the TotalNumOfPersons
     * @return string
     */
    public function setTotalNumOfPersons($_totalNumOfPersons)
    {
        return ($this->TotalNumOfPersons = $_totalNumOfPersons);
    }
    /**
     * Get TotalNumOfDrivers value
     * @return string|null
     */
    public function getTotalNumOfDrivers()
    {
        return $this->TotalNumOfDrivers;
    }
    /**
     * Set TotalNumOfDrivers value
     * @param string $_totalNumOfDrivers the TotalNumOfDrivers
     * @return string
     */
    public function setTotalNumOfDrivers($_totalNumOfDrivers)
    {
        return ($this->TotalNumOfDrivers = $_totalNumOfDrivers);
    }
    /**
     * Get TotalNumOfVehicles value
     * @return string|null
     */
    public function getTotalNumOfVehicles()
    {
        return $this->TotalNumOfVehicles;
    }
    /**
     * Set TotalNumOfVehicles value
     * @param string $_totalNumOfVehicles the TotalNumOfVehicles
     * @return string
     */
    public function setTotalNumOfVehicles($_totalNumOfVehicles)
    {
        return ($this->TotalNumOfVehicles = $_totalNumOfVehicles);
    }
    /**
     * Get TotalNumOfFatalities value
     * @return string|null
     */
    public function getTotalNumOfFatalities()
    {
        return $this->TotalNumOfFatalities;
    }
    /**
     * Set TotalNumOfFatalities value
     * @param string $_totalNumOfFatalities the TotalNumOfFatalities
     * @return string
     */
    public function setTotalNumOfFatalities($_totalNumOfFatalities)
    {
        return ($this->TotalNumOfFatalities = $_totalNumOfFatalities);
    }
    /**
     * Get TotalNumOfNonTrafficFatal value
     * @return string|null
     */
    public function getTotalNumOfNonTrafficFatal()
    {
        return $this->TotalNumOfNonTrafficFatal;
    }
    /**
     * Set TotalNumOfNonTrafficFatal value
     * @param string $_totalNumOfNonTrafficFatal the TotalNumOfNonTrafficFatal
     * @return string
     */
    public function setTotalNumOfNonTrafficFatal($_totalNumOfNonTrafficFatal)
    {
        return ($this->TotalNumOfNonTrafficFatal = $_totalNumOfNonTrafficFatal);
    }
    /**
     * Get TotalNumOfInjuries value
     * @return string|null
     */
    public function getTotalNumOfInjuries()
    {
        return $this->TotalNumOfInjuries;
    }
    /**
     * Set TotalNumOfInjuries value
     * @param string $_totalNumOfInjuries the TotalNumOfInjuries
     * @return string
     */
    public function setTotalNumOfInjuries($_totalNumOfInjuries)
    {
        return ($this->TotalNumOfInjuries = $_totalNumOfInjuries);
    }
    /**
     * Get TotalNumOfPedestrians value
     * @return string|null
     */
    public function getTotalNumOfPedestrians()
    {
        return $this->TotalNumOfPedestrians;
    }
    /**
     * Set TotalNumOfPedestrians value
     * @param string $_totalNumOfPedestrians the TotalNumOfPedestrians
     * @return string
     */
    public function setTotalNumOfPedestrians($_totalNumOfPedestrians)
    {
        return ($this->TotalNumOfPedestrians = $_totalNumOfPedestrians);
    }
    /**
     * Get TotalNumOfPedalcyclists value
     * @return string|null
     */
    public function getTotalNumOfPedalcyclists()
    {
        return $this->TotalNumOfPedalcyclists;
    }
    /**
     * Set TotalNumOfPedalcyclists value
     * @param string $_totalNumOfPedalcyclists the TotalNumOfPedalcyclists
     * @return string
     */
    public function setTotalNumOfPedalcyclists($_totalNumOfPedalcyclists)
    {
        return ($this->TotalNumOfPedalcyclists = $_totalNumOfPedalcyclists);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccidentStatistics_Type
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
