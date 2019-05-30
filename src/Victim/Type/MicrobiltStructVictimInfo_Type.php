<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructVictimInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructVictimInfo_Type originally named VictimInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructVictimInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The VictimIsMinor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $VictimIsMinor;
    /**
     * The VictimAge
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VictimAge;
    /**
     * The VictimGender
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VictimGender;
    /**
     * The VictimRelationship
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VictimRelationship;
    /**
     * Constructor method for VictimInfo_Type
     * @see parent::__construct()
     * @param MicrobiltEnumBoolean $_victimIsMinor
     * @param string $_victimAge
     * @param string $_victimGender
     * @param string $_victimRelationship
     * @return MicrobiltStructVictimInfo_Type
     */
    public function __construct($_victimIsMinor = NULL,$_victimAge = NULL,$_victimGender = NULL,$_victimRelationship = NULL)
    {
        MicrobiltWsdlClass::__construct(array('VictimIsMinor'=>$_victimIsMinor,'VictimAge'=>$_victimAge,'VictimGender'=>$_victimGender,'VictimRelationship'=>$_victimRelationship),false);
    }
    /**
     * Get VictimIsMinor value
     * @return MicrobiltEnumBoolean|null
     */
    public function getVictimIsMinor()
    {
        return $this->VictimIsMinor;
    }
    /**
     * Set VictimIsMinor value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_victimIsMinor the VictimIsMinor
     * @return MicrobiltEnumBoolean
     */
    public function setVictimIsMinor($_victimIsMinor)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_victimIsMinor))
        {
            return false;
        }
        return ($this->VictimIsMinor = $_victimIsMinor);
    }
    /**
     * Get VictimAge value
     * @return string|null
     */
    public function getVictimAge()
    {
        return $this->VictimAge;
    }
    /**
     * Set VictimAge value
     * @param string $_victimAge the VictimAge
     * @return string
     */
    public function setVictimAge($_victimAge)
    {
        return ($this->VictimAge = $_victimAge);
    }
    /**
     * Get VictimGender value
     * @return string|null
     */
    public function getVictimGender()
    {
        return $this->VictimGender;
    }
    /**
     * Set VictimGender value
     * @param string $_victimGender the VictimGender
     * @return string
     */
    public function setVictimGender($_victimGender)
    {
        return ($this->VictimGender = $_victimGender);
    }
    /**
     * Get VictimRelationship value
     * @return string|null
     */
    public function getVictimRelationship()
    {
        return $this->VictimRelationship;
    }
    /**
     * Set VictimRelationship value
     * @param string $_victimRelationship the VictimRelationship
     * @return string
     */
    public function setVictimRelationship($_victimRelationship)
    {
        return ($this->VictimRelationship = $_victimRelationship);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructVictimInfo_Type
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
