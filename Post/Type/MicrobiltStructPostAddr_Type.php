<?php
/**
 * File for class MicrobiltStructPostAddr_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPostAddr_Type originally named PostAddr_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPostAddr_Type extends MicrobiltStructAggregate
{
    /**
     * The StreetName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StreetName;
    /**
     * The Apt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Apt;
    /**
     * The UnitType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UnitType;
    /**
     * The Addr2
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Addr2;
    /**
     * The StreetNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StreetNum;
    /**
     * The StreetType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StreetType;
    /**
     * The Addr3
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Addr3;
    /**
     * The Addr1
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Addr1;
    /**
     * The PostDirection
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PostDirection;
    /**
     * The Addr4
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Addr4;
    /**
     * The PreDirection
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PreDirection;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $City;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StateProv;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PostalCode;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $County;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Country;
    /**
     * The AddrType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AddrType;
    /**
     * The StartDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StartDt;
    /**
     * The EndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EndDt;
    /**
     * The OwnershipCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipCode;
    /**
     * The ReportedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReportedDt;
    /**
     * The AddrSource
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AddrSource;
    /**
     * The GEOCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructGEOCode_Type
     */
    public $GEOCode;
    /**
     * The AddrCreatedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AddrCreatedDt;
    /**
     * The LengthOfResidence
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LengthOfResidence;
    /**
     * The DropPointInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DropPointInd;
    /**
     * The DwellingUnitSize
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DwellingUnitSize;
    /**
     * The Urbanization
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Urbanization;
    /**
     * The Building
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Building;
    /**
     * Constructor method for PostAddr_Type
     * @see parent::__construct()
     * @param string $_streetName
     * @param string $_apt
     * @param string $_unitType
     * @param string $_addr2
     * @param string $_streetNum
     * @param string $_streetType
     * @param string $_addr3
     * @param string $_addr1
     * @param string $_postDirection
     * @param string $_addr4
     * @param string $_preDirection
     * @param string $_city
     * @param string $_stateProv
     * @param string $_postalCode
     * @param string $_county
     * @param string $_country
     * @param string $_addrType
     * @param string $_startDt
     * @param string $_endDt
     * @param string $_ownershipCode
     * @param string $_reportedDt
     * @param string $_addrSource
     * @param MicrobiltStructGEOCode_Type $_gEOCode
     * @param string $_addrCreatedDt
     * @param string $_lengthOfResidence
     * @param string $_dropPointInd
     * @param string $_dwellingUnitSize
     * @param string $_urbanization
     * @param string $_building
     * @return MicrobiltStructPostAddr_Type
     */
    public function __construct($_streetName = NULL,$_apt = NULL,$_unitType = NULL,$_addr2 = NULL,$_streetNum = NULL,$_streetType = NULL,$_addr3 = NULL,$_addr1 = NULL,$_postDirection = NULL,$_addr4 = NULL,$_preDirection = NULL,$_city = NULL,$_stateProv = NULL,$_postalCode = NULL,$_county = NULL,$_country = NULL,$_addrType = NULL,$_startDt = NULL,$_endDt = NULL,$_ownershipCode = NULL,$_reportedDt = NULL,$_addrSource = NULL,$_gEOCode = NULL,$_addrCreatedDt = NULL,$_lengthOfResidence = NULL,$_dropPointInd = NULL,$_dwellingUnitSize = NULL,$_urbanization = NULL,$_building = NULL)
    {
        MicrobiltWsdlClass::__construct(array('StreetName'=>$_streetName,'Apt'=>$_apt,'UnitType'=>$_unitType,'Addr2'=>$_addr2,'StreetNum'=>$_streetNum,'StreetType'=>$_streetType,'Addr3'=>$_addr3,'Addr1'=>$_addr1,'PostDirection'=>$_postDirection,'Addr4'=>$_addr4,'PreDirection'=>$_preDirection,'City'=>$_city,'StateProv'=>$_stateProv,'PostalCode'=>$_postalCode,'County'=>$_county,'Country'=>$_country,'AddrType'=>$_addrType,'StartDt'=>$_startDt,'EndDt'=>$_endDt,'OwnershipCode'=>$_ownershipCode,'ReportedDt'=>$_reportedDt,'AddrSource'=>$_addrSource,'GEOCode'=>$_gEOCode,'AddrCreatedDt'=>$_addrCreatedDt,'LengthOfResidence'=>$_lengthOfResidence,'DropPointInd'=>$_dropPointInd,'DwellingUnitSize'=>$_dwellingUnitSize,'Urbanization'=>$_urbanization,'Building'=>$_building),false);
    }
    /**
     * Get StreetName value
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }
    /**
     * Set StreetName value
     * @param string $_streetName the StreetName
     * @return string
     */
    public function setStreetName($_streetName)
    {
        return ($this->StreetName = $_streetName);
    }
    /**
     * Get Apt value
     * @return string|null
     */
    public function getApt()
    {
        return $this->Apt;
    }
    /**
     * Set Apt value
     * @param string $_apt the Apt
     * @return string
     */
    public function setApt($_apt)
    {
        return ($this->Apt = $_apt);
    }
    /**
     * Get UnitType value
     * @return string|null
     */
    public function getUnitType()
    {
        return $this->UnitType;
    }
    /**
     * Set UnitType value
     * @param string $_unitType the UnitType
     * @return string
     */
    public function setUnitType($_unitType)
    {
        return ($this->UnitType = $_unitType);
    }
    /**
     * Get Addr2 value
     * @return string|null
     */
    public function getAddr2()
    {
        return $this->Addr2;
    }
    /**
     * Set Addr2 value
     * @param string $_addr2 the Addr2
     * @return string
     */
    public function setAddr2($_addr2)
    {
        return ($this->Addr2 = $_addr2);
    }
    /**
     * Get StreetNum value
     * @return string|null
     */
    public function getStreetNum()
    {
        return $this->StreetNum;
    }
    /**
     * Set StreetNum value
     * @param string $_streetNum the StreetNum
     * @return string
     */
    public function setStreetNum($_streetNum)
    {
        return ($this->StreetNum = $_streetNum);
    }
    /**
     * Get StreetType value
     * @return string|null
     */
    public function getStreetType()
    {
        return $this->StreetType;
    }
    /**
     * Set StreetType value
     * @param string $_streetType the StreetType
     * @return string
     */
    public function setStreetType($_streetType)
    {
        return ($this->StreetType = $_streetType);
    }
    /**
     * Get Addr3 value
     * @return string|null
     */
    public function getAddr3()
    {
        return $this->Addr3;
    }
    /**
     * Set Addr3 value
     * @param string $_addr3 the Addr3
     * @return string
     */
    public function setAddr3($_addr3)
    {
        return ($this->Addr3 = $_addr3);
    }
    /**
     * Get Addr1 value
     * @return string|null
     */
    public function getAddr1()
    {
        return $this->Addr1;
    }
    /**
     * Set Addr1 value
     * @param string $_addr1 the Addr1
     * @return string
     */
    public function setAddr1($_addr1)
    {
        return ($this->Addr1 = $_addr1);
    }
    /**
     * Get PostDirection value
     * @return string|null
     */
    public function getPostDirection()
    {
        return $this->PostDirection;
    }
    /**
     * Set PostDirection value
     * @param string $_postDirection the PostDirection
     * @return string
     */
    public function setPostDirection($_postDirection)
    {
        return ($this->PostDirection = $_postDirection);
    }
    /**
     * Get Addr4 value
     * @return string|null
     */
    public function getAddr4()
    {
        return $this->Addr4;
    }
    /**
     * Set Addr4 value
     * @param string $_addr4 the Addr4
     * @return string
     */
    public function setAddr4($_addr4)
    {
        return ($this->Addr4 = $_addr4);
    }
    /**
     * Get PreDirection value
     * @return string|null
     */
    public function getPreDirection()
    {
        return $this->PreDirection;
    }
    /**
     * Set PreDirection value
     * @param string $_preDirection the PreDirection
     * @return string
     */
    public function setPreDirection($_preDirection)
    {
        return ($this->PreDirection = $_preDirection);
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $_city the City
     * @return string
     */
    public function setCity($_city)
    {
        return ($this->City = $_city);
    }
    /**
     * Get StateProv value
     * @return string|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param string $_stateProv the StateProv
     * @return string
     */
    public function setStateProv($_stateProv)
    {
        return ($this->StateProv = $_stateProv);
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $_postalCode the PostalCode
     * @return string
     */
    public function setPostalCode($_postalCode)
    {
        return ($this->PostalCode = $_postalCode);
    }
    /**
     * Get County value
     * @return string|null
     */
    public function getCounty()
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param string $_county the County
     * @return string
     */
    public function setCounty($_county)
    {
        return ($this->County = $_county);
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $_country the Country
     * @return string
     */
    public function setCountry($_country)
    {
        return ($this->Country = $_country);
    }
    /**
     * Get AddrType value
     * @return string|null
     */
    public function getAddrType()
    {
        return $this->AddrType;
    }
    /**
     * Set AddrType value
     * @param string $_addrType the AddrType
     * @return string
     */
    public function setAddrType($_addrType)
    {
        return ($this->AddrType = $_addrType);
    }
    /**
     * Get StartDt value
     * @return string|null
     */
    public function getStartDt()
    {
        return $this->StartDt;
    }
    /**
     * Set StartDt value
     * @param string $_startDt the StartDt
     * @return string
     */
    public function setStartDt($_startDt)
    {
        return ($this->StartDt = $_startDt);
    }
    /**
     * Get EndDt value
     * @return string|null
     */
    public function getEndDt()
    {
        return $this->EndDt;
    }
    /**
     * Set EndDt value
     * @param string $_endDt the EndDt
     * @return string
     */
    public function setEndDt($_endDt)
    {
        return ($this->EndDt = $_endDt);
    }
    /**
     * Get OwnershipCode value
     * @return string|null
     */
    public function getOwnershipCode()
    {
        return $this->OwnershipCode;
    }
    /**
     * Set OwnershipCode value
     * @param string $_ownershipCode the OwnershipCode
     * @return string
     */
    public function setOwnershipCode($_ownershipCode)
    {
        return ($this->OwnershipCode = $_ownershipCode);
    }
    /**
     * Get ReportedDt value
     * @return string|null
     */
    public function getReportedDt()
    {
        return $this->ReportedDt;
    }
    /**
     * Set ReportedDt value
     * @param string $_reportedDt the ReportedDt
     * @return string
     */
    public function setReportedDt($_reportedDt)
    {
        return ($this->ReportedDt = $_reportedDt);
    }
    /**
     * Get AddrSource value
     * @return string|null
     */
    public function getAddrSource()
    {
        return $this->AddrSource;
    }
    /**
     * Set AddrSource value
     * @param string $_addrSource the AddrSource
     * @return string
     */
    public function setAddrSource($_addrSource)
    {
        return ($this->AddrSource = $_addrSource);
    }
    /**
     * Get GEOCode value
     * @return MicrobiltStructGEOCode_Type|null
     */
    public function getGEOCode()
    {
        return $this->GEOCode;
    }
    /**
     * Set GEOCode value
     * @param MicrobiltStructGEOCode_Type $_gEOCode the GEOCode
     * @return MicrobiltStructGEOCode_Type
     */
    public function setGEOCode($_gEOCode)
    {
        return ($this->GEOCode = $_gEOCode);
    }
    /**
     * Get AddrCreatedDt value
     * @return string|null
     */
    public function getAddrCreatedDt()
    {
        return $this->AddrCreatedDt;
    }
    /**
     * Set AddrCreatedDt value
     * @param string $_addrCreatedDt the AddrCreatedDt
     * @return string
     */
    public function setAddrCreatedDt($_addrCreatedDt)
    {
        return ($this->AddrCreatedDt = $_addrCreatedDt);
    }
    /**
     * Get LengthOfResidence value
     * @return string|null
     */
    public function getLengthOfResidence()
    {
        return $this->LengthOfResidence;
    }
    /**
     * Set LengthOfResidence value
     * @param string $_lengthOfResidence the LengthOfResidence
     * @return string
     */
    public function setLengthOfResidence($_lengthOfResidence)
    {
        return ($this->LengthOfResidence = $_lengthOfResidence);
    }
    /**
     * Get DropPointInd value
     * @return string|null
     */
    public function getDropPointInd()
    {
        return $this->DropPointInd;
    }
    /**
     * Set DropPointInd value
     * @param string $_dropPointInd the DropPointInd
     * @return string
     */
    public function setDropPointInd($_dropPointInd)
    {
        return ($this->DropPointInd = $_dropPointInd);
    }
    /**
     * Get DwellingUnitSize value
     * @return string|null
     */
    public function getDwellingUnitSize()
    {
        return $this->DwellingUnitSize;
    }
    /**
     * Set DwellingUnitSize value
     * @param string $_dwellingUnitSize the DwellingUnitSize
     * @return string
     */
    public function setDwellingUnitSize($_dwellingUnitSize)
    {
        return ($this->DwellingUnitSize = $_dwellingUnitSize);
    }
    /**
     * Get Urbanization value
     * @return string|null
     */
    public function getUrbanization()
    {
        return $this->Urbanization;
    }
    /**
     * Set Urbanization value
     * @param string $_urbanization the Urbanization
     * @return string
     */
    public function setUrbanization($_urbanization)
    {
        return ($this->Urbanization = $_urbanization);
    }
    /**
     * Get Building value
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->Building;
    }
    /**
     * Set Building value
     * @param string $_building the Building
     * @return string
     */
    public function setBuilding($_building)
    {
        return ($this->Building = $_building);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructPostAddr_Type
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
