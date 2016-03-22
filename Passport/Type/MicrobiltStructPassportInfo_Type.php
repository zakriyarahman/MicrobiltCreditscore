<?php
/**
 * File for class MicrobiltStructPassportInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPassportInfo_Type originally named PassportInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPassportInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Country;
    /**
     * The PassportNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PassportNum;
    /**
     * The IssuedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $IssuedDt;
    /**
     * The ExpirationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $ExpirationDt;
    /**
     * Constructor method for PassportInfo_Type
     * @see parent::__construct()
     * @param string $_country
     * @param string $_passportNum
     * @param date $_issuedDt
     * @param date $_expirationDt
     * @return MicrobiltStructPassportInfo_Type
     */
    public function __construct($_country = NULL,$_passportNum = NULL,$_issuedDt = NULL,$_expirationDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Country'=>$_country,'PassportNum'=>$_passportNum,'IssuedDt'=>$_issuedDt,'ExpirationDt'=>$_expirationDt),false);
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
     * Get PassportNum value
     * @return string|null
     */
    public function getPassportNum()
    {
        return $this->PassportNum;
    }
    /**
     * Set PassportNum value
     * @param string $_passportNum the PassportNum
     * @return string
     */
    public function setPassportNum($_passportNum)
    {
        return ($this->PassportNum = $_passportNum);
    }
    /**
     * Get IssuedDt value
     * @return date|null
     */
    public function getIssuedDt()
    {
        return $this->IssuedDt;
    }
    /**
     * Set IssuedDt value
     * @param date $_issuedDt the IssuedDt
     * @return date
     */
    public function setIssuedDt($_issuedDt)
    {
        return ($this->IssuedDt = $_issuedDt);
    }
    /**
     * Get ExpirationDt value
     * @return date|null
     */
    public function getExpirationDt()
    {
        return $this->ExpirationDt;
    }
    /**
     * Set ExpirationDt value
     * @param date $_expirationDt the ExpirationDt
     * @return date
     */
    public function setExpirationDt($_expirationDt)
    {
        return ($this->ExpirationDt = $_expirationDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructPassportInfo_Type
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
