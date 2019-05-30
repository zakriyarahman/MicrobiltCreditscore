<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructMilitaryIdInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructMilitaryIdInfo_Type originally named MilitaryIdInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructMilitaryIdInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The MilitaryIdNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MilitaryIdNum;
    /**
     * The IssuedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IssuedDt;
    /**
     * The ExpirationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ExpirationDt;
    /**
     * Constructor method for MilitaryIdInfo_Type
     * @see parent::__construct()
     * @param string $_militaryIdNum
     * @param string $_issuedDt
     * @param string $_expirationDt
     * @return MicrobiltStructMilitaryIdInfo_Type
     */
    public function __construct($_militaryIdNum = NULL,$_issuedDt = NULL,$_expirationDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MilitaryIdNum'=>$_militaryIdNum,'IssuedDt'=>$_issuedDt,'ExpirationDt'=>$_expirationDt),false);
    }
    /**
     * Get MilitaryIdNum value
     * @return string|null
     */
    public function getMilitaryIdNum()
    {
        return $this->MilitaryIdNum;
    }
    /**
     * Set MilitaryIdNum value
     * @param string $_militaryIdNum the MilitaryIdNum
     * @return string
     */
    public function setMilitaryIdNum($_militaryIdNum)
    {
        return ($this->MilitaryIdNum = $_militaryIdNum);
    }
    /**
     * Get IssuedDt value
     * @return string|null
     */
    public function getIssuedDt()
    {
        return $this->IssuedDt;
    }
    /**
     * Set IssuedDt value
     * @param string $_issuedDt the IssuedDt
     * @return string
     */
    public function setIssuedDt($_issuedDt)
    {
        return ($this->IssuedDt = $_issuedDt);
    }
    /**
     * Get ExpirationDt value
     * @return string|null
     */
    public function getExpirationDt()
    {
        return $this->ExpirationDt;
    }
    /**
     * Set ExpirationDt value
     * @param string $_expirationDt the ExpirationDt
     * @return string
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
     * @return MicrobiltStructMilitaryIdInfo_Type
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
