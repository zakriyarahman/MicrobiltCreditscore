<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructLienHolderInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructLienHolderInfo_Type originally named LienHolderInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructLienHolderInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The LienHolderType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LienHolderType;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The DealerLicNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DealerLicNum;
    /**
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCommercialDates_Type
     */
    public $CommercialDates;
    /**
     * The LienDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LienDt;
    /**
     * Constructor method for LienHolderInfo_Type
     * @see parent::__construct()
     * @param string $_lienHolderType
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param string $_dealerLicNum
     * @param MicrobiltStructCommercialDates_Type $_commercialDates
     * @param string $_lienDt
     * @return MicrobiltStructLienHolderInfo_Type
     */
    public function __construct($_lienHolderType = NULL,$_personInfo = NULL,$_dealerLicNum = NULL,$_commercialDates = NULL,$_lienDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('LienHolderType'=>$_lienHolderType,'PersonInfo'=>$_personInfo,'DealerLicNum'=>$_dealerLicNum,'CommercialDates'=>$_commercialDates,'LienDt'=>$_lienDt),false);
    }
    /**
     * Get LienHolderType value
     * @return string|null
     */
    public function getLienHolderType()
    {
        return $this->LienHolderType;
    }
    /**
     * Set LienHolderType value
     * @param string $_lienHolderType the LienHolderType
     * @return string
     */
    public function setLienHolderType($_lienHolderType)
    {
        return ($this->LienHolderType = $_lienHolderType);
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
     * Get DealerLicNum value
     * @return string|null
     */
    public function getDealerLicNum()
    {
        return $this->DealerLicNum;
    }
    /**
     * Set DealerLicNum value
     * @param string $_dealerLicNum the DealerLicNum
     * @return string
     */
    public function setDealerLicNum($_dealerLicNum)
    {
        return ($this->DealerLicNum = $_dealerLicNum);
    }
    /**
     * Get CommercialDates value
     * @return MicrobiltStructCommercialDates_Type|null
     */
    public function getCommercialDates()
    {
        return $this->CommercialDates;
    }
    /**
     * Set CommercialDates value
     * @param MicrobiltStructCommercialDates_Type $_commercialDates the CommercialDates
     * @return MicrobiltStructCommercialDates_Type
     */
    public function setCommercialDates($_commercialDates)
    {
        return ($this->CommercialDates = $_commercialDates);
    }
    /**
     * Get LienDt value
     * @return string|null
     */
    public function getLienDt()
    {
        return $this->LienDt;
    }
    /**
     * Set LienDt value
     * @param string $_lienDt the LienDt
     * @return string
     */
    public function setLienDt($_lienDt)
    {
        return ($this->LienDt = $_lienDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructLienHolderInfo_Type
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
