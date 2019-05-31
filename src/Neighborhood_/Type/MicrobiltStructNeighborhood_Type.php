<?php

namespace Zakriyarahman\Microbilt\Neighborhood_\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructNeighborhood_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructNeighborhood_Type originally named Neighborhood_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructNeighborhood_Type extends MicrobiltStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The NeighborhoodResident
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructNeighborhoodResident_Type
     */
    public $NeighborhoodResident;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Neighborhood_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructNeighborhoodResident_Type $_neighborhoodResident
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructNeighborhood_Type
     */
    public function __construct($_personInfo = NULL,$_neighborhoodResident = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'NeighborhoodResident'=>$_neighborhoodResident,'Message'=>$_message),false);
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
     * Get NeighborhoodResident value
     * @return MicrobiltStructNeighborhoodResident_Type|null
     */
    public function getNeighborhoodResident()
    {
        return $this->NeighborhoodResident;
    }
    /**
     * Set NeighborhoodResident value
     * @param MicrobiltStructNeighborhoodResident_Type $_neighborhoodResident the NeighborhoodResident
     * @return MicrobiltStructNeighborhoodResident_Type
     */
    public function setNeighborhoodResident($_neighborhoodResident)
    {
        return ($this->NeighborhoodResident = $_neighborhoodResident);
    }
    /**
     * Get Message value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltStructMessage_Type $_message the Message
     * @return MicrobiltStructMessage_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructNeighborhood_Type
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
