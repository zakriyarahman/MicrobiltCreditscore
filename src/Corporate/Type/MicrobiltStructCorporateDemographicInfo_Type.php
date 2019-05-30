<?php

namespace Zakriyarahman\Microbilt\Corporate\Type;

/**
 * File for class MicrobiltStructCorporateDemographicInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCorporateDemographicInfo_Type originally named CorporateDemographicInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCorporateDemographicInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The IndustId
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructIndustId_Type
     */
    public $IndustId;
    /**
     * The YearsInBusiness
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $YearsInBusiness;
    /**
     * The YearsInBusinessRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMinMaxRange_Type
     */
    public $YearsInBusinessRange;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The NumEmployeesRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMinMaxRange_Type
     */
    public $NumEmployeesRange;
    /**
     * The InBuildingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InBuildingDt;
    /**
     * The BuildingSize
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BuildingSize;
    /**
     * The OwnershipCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipCode;
    /**
     * The OwnershipEntity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipEntity;
    /**
     * The BusinessLocationType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusinessLocationType;
    /**
     * The NumCustomers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumCustomers;
    /**
     * The FiscalYrStartMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FiscalYrStartMonth;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $DisputeInd;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for CorporateDemographicInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructIndustId_Type $_industId
     * @param int $_yearsInBusiness
     * @param MicrobiltStructMinMaxRange_Type $_yearsInBusinessRange
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltStructMinMaxRange_Type $_numEmployeesRange
     * @param string $_inBuildingDt
     * @param string $_buildingSize
     * @param string $_ownershipCode
     * @param string $_ownershipEntity
     * @param string $_businessLocationType
     * @param int $_numCustomers
     * @param string $_fiscalYrStartMonth
     * @param MicrobiltEnumBoolean $_disputeInd
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructCorporateDemographicInfo_Type
     */
    public function __construct($_industId = NULL,$_yearsInBusiness = NULL,$_yearsInBusinessRange = NULL,$_commercialAmounts = NULL,$_numEmployeesRange = NULL,$_inBuildingDt = NULL,$_buildingSize = NULL,$_ownershipCode = NULL,$_ownershipEntity = NULL,$_businessLocationType = NULL,$_numCustomers = NULL,$_fiscalYrStartMonth = NULL,$_disputeInd = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('IndustId'=>$_industId,'YearsInBusiness'=>$_yearsInBusiness,'YearsInBusinessRange'=>$_yearsInBusinessRange,'CommercialAmounts'=>$_commercialAmounts,'NumEmployeesRange'=>$_numEmployeesRange,'InBuildingDt'=>$_inBuildingDt,'BuildingSize'=>$_buildingSize,'OwnershipCode'=>$_ownershipCode,'OwnershipEntity'=>$_ownershipEntity,'BusinessLocationType'=>$_businessLocationType,'NumCustomers'=>$_numCustomers,'FiscalYrStartMonth'=>$_fiscalYrStartMonth,'DisputeInd'=>$_disputeInd,'Message'=>$_message),false);
    }
    /**
     * Get IndustId value
     * @return MicrobiltStructIndustId_Type|null
     */
    public function getIndustId()
    {
        return $this->IndustId;
    }
    /**
     * Set IndustId value
     * @param MicrobiltStructIndustId_Type $_industId the IndustId
     * @return MicrobiltStructIndustId_Type
     */
    public function setIndustId($_industId)
    {
        return ($this->IndustId = $_industId);
    }
    /**
     * Get YearsInBusiness value
     * @return int|null
     */
    public function getYearsInBusiness()
    {
        return $this->YearsInBusiness;
    }
    /**
     * Set YearsInBusiness value
     * @param int $_yearsInBusiness the YearsInBusiness
     * @return int
     */
    public function setYearsInBusiness($_yearsInBusiness)
    {
        return ($this->YearsInBusiness = $_yearsInBusiness);
    }
    /**
     * Get YearsInBusinessRange value
     * @return MicrobiltStructMinMaxRange_Type|null
     */
    public function getYearsInBusinessRange()
    {
        return $this->YearsInBusinessRange;
    }
    /**
     * Set YearsInBusinessRange value
     * @param MicrobiltStructMinMaxRange_Type $_yearsInBusinessRange the YearsInBusinessRange
     * @return MicrobiltStructMinMaxRange_Type
     */
    public function setYearsInBusinessRange($_yearsInBusinessRange)
    {
        return ($this->YearsInBusinessRange = $_yearsInBusinessRange);
    }
    /**
     * Get CommercialAmounts value
     * @return MicrobiltStructCommercialAmounts_Type|null
     */
    public function getCommercialAmounts()
    {
        return $this->CommercialAmounts;
    }
    /**
     * Set CommercialAmounts value
     * @param MicrobiltStructCommercialAmounts_Type $_commercialAmounts the CommercialAmounts
     * @return MicrobiltStructCommercialAmounts_Type
     */
    public function setCommercialAmounts($_commercialAmounts)
    {
        return ($this->CommercialAmounts = $_commercialAmounts);
    }
    /**
     * Get NumEmployeesRange value
     * @return MicrobiltStructMinMaxRange_Type|null
     */
    public function getNumEmployeesRange()
    {
        return $this->NumEmployeesRange;
    }
    /**
     * Set NumEmployeesRange value
     * @param MicrobiltStructMinMaxRange_Type $_numEmployeesRange the NumEmployeesRange
     * @return MicrobiltStructMinMaxRange_Type
     */
    public function setNumEmployeesRange($_numEmployeesRange)
    {
        return ($this->NumEmployeesRange = $_numEmployeesRange);
    }
    /**
     * Get InBuildingDt value
     * @return string|null
     */
    public function getInBuildingDt()
    {
        return $this->InBuildingDt;
    }
    /**
     * Set InBuildingDt value
     * @param string $_inBuildingDt the InBuildingDt
     * @return string
     */
    public function setInBuildingDt($_inBuildingDt)
    {
        return ($this->InBuildingDt = $_inBuildingDt);
    }
    /**
     * Get BuildingSize value
     * @return string|null
     */
    public function getBuildingSize()
    {
        return $this->BuildingSize;
    }
    /**
     * Set BuildingSize value
     * @param string $_buildingSize the BuildingSize
     * @return string
     */
    public function setBuildingSize($_buildingSize)
    {
        return ($this->BuildingSize = $_buildingSize);
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
     * Get OwnershipEntity value
     * @return string|null
     */
    public function getOwnershipEntity()
    {
        return $this->OwnershipEntity;
    }
    /**
     * Set OwnershipEntity value
     * @param string $_ownershipEntity the OwnershipEntity
     * @return string
     */
    public function setOwnershipEntity($_ownershipEntity)
    {
        return ($this->OwnershipEntity = $_ownershipEntity);
    }
    /**
     * Get BusinessLocationType value
     * @return string|null
     */
    public function getBusinessLocationType()
    {
        return $this->BusinessLocationType;
    }
    /**
     * Set BusinessLocationType value
     * @param string $_businessLocationType the BusinessLocationType
     * @return string
     */
    public function setBusinessLocationType($_businessLocationType)
    {
        return ($this->BusinessLocationType = $_businessLocationType);
    }
    /**
     * Get NumCustomers value
     * @return int|null
     */
    public function getNumCustomers()
    {
        return $this->NumCustomers;
    }
    /**
     * Set NumCustomers value
     * @param int $_numCustomers the NumCustomers
     * @return int
     */
    public function setNumCustomers($_numCustomers)
    {
        return ($this->NumCustomers = $_numCustomers);
    }
    /**
     * Get FiscalYrStartMonth value
     * @return string|null
     */
    public function getFiscalYrStartMonth()
    {
        return $this->FiscalYrStartMonth;
    }
    /**
     * Set FiscalYrStartMonth value
     * @param string $_fiscalYrStartMonth the FiscalYrStartMonth
     * @return string
     */
    public function setFiscalYrStartMonth($_fiscalYrStartMonth)
    {
        return ($this->FiscalYrStartMonth = $_fiscalYrStartMonth);
    }
    /**
     * Get DisputeInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getDisputeInd()
    {
        return $this->DisputeInd;
    }
    /**
     * Set DisputeInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_disputeInd the DisputeInd
     * @return MicrobiltEnumBoolean
     */
    public function setDisputeInd($_disputeInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_disputeInd))
        {
            return false;
        }
        return ($this->DisputeInd = $_disputeInd);
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
     * @return MicrobiltStructCorporateDemographicInfo_Type
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
