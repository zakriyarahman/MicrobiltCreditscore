<?php

namespace Zakriyarahman\Microbilt\Collateral\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class CollateralInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CollateralInfo_Type originally named CollateralInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CollateralInfo_Type extends Aggregate
{
    /**
     * The CollateralDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CollateralDesc;
    /**
     * The CollateralCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $CollateralCount;
    /**
     * The PropertyDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PropertyDesc;
    /**
     * The PropertyAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PostAddr_Type
     */
    public $PropertyAddress;
    /**
     * The SerialNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SerialNum;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * The PrimaryMachine
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PrimaryMachine;
    /**
     * The SecondMachine
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SecondMachine;
    /**
     * The ManufacturerName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ManufacturerName;
    /**
     * The Year
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Year;
    /**
     * The Model
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Model;
    /**
     * The ManufacturedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ManufacturedDt;
    /**
     * The Borough
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Borough;
    /**
     * The Lot
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Lot;
    /**
     * The AirRights
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AirRights;
    /**
     * The SubterraneanRights
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SubterraneanRights;
    /**
     * The Easement
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Easement;
    /**
     * The NewUsed
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NewUsed;
    /**
     * Constructor method for CollateralInfo_Type
     * @see parent::__construct()
     * @param string $_collateralDesc
     * @param int $_collateralCount
     * @param string $_propertyDesc
     * @param PostAddr_Type $_propertyAddress
     * @param string $_serialNum
     * @param Message_Type $_message
     * @param string $_primaryMachine
     * @param string $_secondMachine
     * @param string $_manufacturerName
     * @param string $_year
     * @param string $_model
     * @param string $_manufacturedDt
     * @param string $_borough
     * @param string $_lot
     * @param string $_airRights
     * @param string $_subterraneanRights
     * @param string $_easement
     * @param string $_newUsed
     * @return CollateralInfo_Type
     */
    public function __construct($_collateralDesc = NULL,$_collateralCount = NULL,$_propertyDesc = NULL,$_propertyAddress = NULL,$_serialNum = NULL,$_message = NULL,$_primaryMachine = NULL,$_secondMachine = NULL,$_manufacturerName = NULL,$_year = NULL,$_model = NULL,$_manufacturedDt = NULL,$_borough = NULL,$_lot = NULL,$_airRights = NULL,$_subterraneanRights = NULL,$_easement = NULL,$_newUsed = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CollateralDesc'=>$_collateralDesc,'CollateralCount'=>$_collateralCount,'PropertyDesc'=>$_propertyDesc,'PropertyAddress'=>$_propertyAddress,'SerialNum'=>$_serialNum,'Message'=>$_message,'PrimaryMachine'=>$_primaryMachine,'SecondMachine'=>$_secondMachine,'ManufacturerName'=>$_manufacturerName,'Year'=>$_year,'Model'=>$_model,'ManufacturedDt'=>$_manufacturedDt,'Borough'=>$_borough,'Lot'=>$_lot,'AirRights'=>$_airRights,'SubterraneanRights'=>$_subterraneanRights,'Easement'=>$_easement,'NewUsed'=>$_newUsed),false);
    }
    /**
     * Get CollateralDesc value
     * @return string|null
     */
    public function getCollateralDesc()
    {
        return $this->CollateralDesc;
    }
    /**
     * Set CollateralDesc value
     * @param string $_collateralDesc the CollateralDesc
     * @return string
     */
    public function setCollateralDesc($_collateralDesc)
    {
        return ($this->CollateralDesc = $_collateralDesc);
    }
    /**
     * Get CollateralCount value
     * @return int|null
     */
    public function getCollateralCount()
    {
        return $this->CollateralCount;
    }
    /**
     * Set CollateralCount value
     * @param int $_collateralCount the CollateralCount
     * @return int
     */
    public function setCollateralCount($_collateralCount)
    {
        return ($this->CollateralCount = $_collateralCount);
    }
    /**
     * Get PropertyDesc value
     * @return string|null
     */
    public function getPropertyDesc()
    {
        return $this->PropertyDesc;
    }
    /**
     * Set PropertyDesc value
     * @param string $_propertyDesc the PropertyDesc
     * @return string
     */
    public function setPropertyDesc($_propertyDesc)
    {
        return ($this->PropertyDesc = $_propertyDesc);
    }
    /**
     * Get PropertyAddress value
     * @return PostAddr_Type|null
     */
    public function getPropertyAddress()
    {
        return $this->PropertyAddress;
    }
    /**
     * Set PropertyAddress value
     * @param PostAddr_Type $_propertyAddress the PropertyAddress
     * @return PostAddr_Type
     */
    public function setPropertyAddress($_propertyAddress)
    {
        return ($this->PropertyAddress = $_propertyAddress);
    }
    /**
     * Get SerialNum value
     * @return string|null
     */
    public function getSerialNum()
    {
        return $this->SerialNum;
    }
    /**
     * Set SerialNum value
     * @param string $_serialNum the SerialNum
     * @return string
     */
    public function setSerialNum($_serialNum)
    {
        return ($this->SerialNum = $_serialNum);
    }
    /**
     * Get Message value
     * @return Message_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param Message_Type $_message the Message
     * @return Message_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Get PrimaryMachine value
     * @return string|null
     */
    public function getPrimaryMachine()
    {
        return $this->PrimaryMachine;
    }
    /**
     * Set PrimaryMachine value
     * @param string $_primaryMachine the PrimaryMachine
     * @return string
     */
    public function setPrimaryMachine($_primaryMachine)
    {
        return ($this->PrimaryMachine = $_primaryMachine);
    }
    /**
     * Get SecondMachine value
     * @return string|null
     */
    public function getSecondMachine()
    {
        return $this->SecondMachine;
    }
    /**
     * Set SecondMachine value
     * @param string $_secondMachine the SecondMachine
     * @return string
     */
    public function setSecondMachine($_secondMachine)
    {
        return ($this->SecondMachine = $_secondMachine);
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
     * Get Year value
     * @return string|null
     */
    public function getYear()
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param string $_year the Year
     * @return string
     */
    public function setYear($_year)
    {
        return ($this->Year = $_year);
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
     * Get ManufacturedDt value
     * @return string|null
     */
    public function getManufacturedDt()
    {
        return $this->ManufacturedDt;
    }
    /**
     * Set ManufacturedDt value
     * @param string $_manufacturedDt the ManufacturedDt
     * @return string
     */
    public function setManufacturedDt($_manufacturedDt)
    {
        return ($this->ManufacturedDt = $_manufacturedDt);
    }
    /**
     * Get Borough value
     * @return string|null
     */
    public function getBorough()
    {
        return $this->Borough;
    }
    /**
     * Set Borough value
     * @param string $_borough the Borough
     * @return string
     */
    public function setBorough($_borough)
    {
        return ($this->Borough = $_borough);
    }
    /**
     * Get Lot value
     * @return string|null
     */
    public function getLot()
    {
        return $this->Lot;
    }
    /**
     * Set Lot value
     * @param string $_lot the Lot
     * @return string
     */
    public function setLot($_lot)
    {
        return ($this->Lot = $_lot);
    }
    /**
     * Get AirRights value
     * @return string|null
     */
    public function getAirRights()
    {
        return $this->AirRights;
    }
    /**
     * Set AirRights value
     * @param string $_airRights the AirRights
     * @return string
     */
    public function setAirRights($_airRights)
    {
        return ($this->AirRights = $_airRights);
    }
    /**
     * Get SubterraneanRights value
     * @return string|null
     */
    public function getSubterraneanRights()
    {
        return $this->SubterraneanRights;
    }
    /**
     * Set SubterraneanRights value
     * @param string $_subterraneanRights the SubterraneanRights
     * @return string
     */
    public function setSubterraneanRights($_subterraneanRights)
    {
        return ($this->SubterraneanRights = $_subterraneanRights);
    }
    /**
     * Get Easement value
     * @return string|null
     */
    public function getEasement()
    {
        return $this->Easement;
    }
    /**
     * Set Easement value
     * @param string $_easement the Easement
     * @return string
     */
    public function setEasement($_easement)
    {
        return ($this->Easement = $_easement);
    }
    /**
     * Get NewUsed value
     * @return string|null
     */
    public function getNewUsed()
    {
        return $this->NewUsed;
    }
    /**
     * Set NewUsed value
     * @param string $_newUsed the NewUsed
     * @return string
     */
    public function setNewUsed($_newUsed)
    {
        return ($this->NewUsed = $_newUsed);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CollateralInfo_Type
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
