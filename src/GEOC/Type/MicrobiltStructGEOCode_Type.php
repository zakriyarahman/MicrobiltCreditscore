<?php

namespace Zakriyarahman\Microbilt\GEOC\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructGEOCode_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructGEOCode_Type originally named GEOCode_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructGEOCode_Type extends MicrobiltStructAggregate
{
    /**
     * The MSACode4
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MSACode4;
    /**
     * The MSACode5
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MSACode5;
    /**
     * The StateCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StateCode;
    /**
     * The CountyCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CountyCode;
    /**
     * The CensusTrackCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CensusTrackCode;
    /**
     * The BlockCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BlockCode;
    /**
     * The Latitude
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $Latitude;
    /**
     * The Longitude
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $Longitude;
    /**
     * The GEOCreatedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GEOCreatedDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for GEOCode_Type
     * @see parent::__construct()
     * @param string $_mSACode4
     * @param string $_mSACode5
     * @param string $_stateCode
     * @param string $_countyCode
     * @param string $_censusTrackCode
     * @param string $_blockCode
     * @param float $_latitude
     * @param float $_longitude
     * @param string $_gEOCreatedDt
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructGEOCode_Type
     */
    public function __construct($_mSACode4 = NULL,$_mSACode5 = NULL,$_stateCode = NULL,$_countyCode = NULL,$_censusTrackCode = NULL,$_blockCode = NULL,$_latitude = NULL,$_longitude = NULL,$_gEOCreatedDt = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MSACode4'=>$_mSACode4,'MSACode5'=>$_mSACode5,'StateCode'=>$_stateCode,'CountyCode'=>$_countyCode,'CensusTrackCode'=>$_censusTrackCode,'BlockCode'=>$_blockCode,'Latitude'=>$_latitude,'Longitude'=>$_longitude,'GEOCreatedDt'=>$_gEOCreatedDt,'Message'=>$_message),false);
    }
    /**
     * Get MSACode4 value
     * @return string|null
     */
    public function getMSACode4()
    {
        return $this->MSACode4;
    }
    /**
     * Set MSACode4 value
     * @param string $_mSACode4 the MSACode4
     * @return string
     */
    public function setMSACode4($_mSACode4)
    {
        return ($this->MSACode4 = $_mSACode4);
    }
    /**
     * Get MSACode5 value
     * @return string|null
     */
    public function getMSACode5()
    {
        return $this->MSACode5;
    }
    /**
     * Set MSACode5 value
     * @param string $_mSACode5 the MSACode5
     * @return string
     */
    public function setMSACode5($_mSACode5)
    {
        return ($this->MSACode5 = $_mSACode5);
    }
    /**
     * Get StateCode value
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->StateCode;
    }
    /**
     * Set StateCode value
     * @param string $_stateCode the StateCode
     * @return string
     */
    public function setStateCode($_stateCode)
    {
        return ($this->StateCode = $_stateCode);
    }
    /**
     * Get CountyCode value
     * @return string|null
     */
    public function getCountyCode()
    {
        return $this->CountyCode;
    }
    /**
     * Set CountyCode value
     * @param string $_countyCode the CountyCode
     * @return string
     */
    public function setCountyCode($_countyCode)
    {
        return ($this->CountyCode = $_countyCode);
    }
    /**
     * Get CensusTrackCode value
     * @return string|null
     */
    public function getCensusTrackCode()
    {
        return $this->CensusTrackCode;
    }
    /**
     * Set CensusTrackCode value
     * @param string $_censusTrackCode the CensusTrackCode
     * @return string
     */
    public function setCensusTrackCode($_censusTrackCode)
    {
        return ($this->CensusTrackCode = $_censusTrackCode);
    }
    /**
     * Get BlockCode value
     * @return string|null
     */
    public function getBlockCode()
    {
        return $this->BlockCode;
    }
    /**
     * Set BlockCode value
     * @param string $_blockCode the BlockCode
     * @return string
     */
    public function setBlockCode($_blockCode)
    {
        return ($this->BlockCode = $_blockCode);
    }
    /**
     * Get Latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param float $_latitude the Latitude
     * @return float
     */
    public function setLatitude($_latitude)
    {
        return ($this->Latitude = $_latitude);
    }
    /**
     * Get Longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param float $_longitude the Longitude
     * @return float
     */
    public function setLongitude($_longitude)
    {
        return ($this->Longitude = $_longitude);
    }
    /**
     * Get GEOCreatedDt value
     * @return string|null
     */
    public function getGEOCreatedDt()
    {
        return $this->GEOCreatedDt;
    }
    /**
     * Set GEOCreatedDt value
     * @param string $_gEOCreatedDt the GEOCreatedDt
     * @return string
     */
    public function setGEOCreatedDt($_gEOCreatedDt)
    {
        return ($this->GEOCreatedDt = $_gEOCreatedDt);
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
     * @return MicrobiltStructGEOCode_Type
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
