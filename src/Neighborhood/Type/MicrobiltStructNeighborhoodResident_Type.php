<?php

namespace Zakriyarahman\Microbilt\Neighborhood\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructNeighborhoodResident_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructNeighborhoodResident_Type originally named NeighborhoodResident_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructNeighborhoodResident_Type extends MicrobiltStructAggregate
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
     * Constructor method for NeighborhoodResident_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @return MicrobiltStructNeighborhoodResident_Type
     */
    public function __construct($_personInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonInfo'=>$_personInfo),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructNeighborhoodResident_Type
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
