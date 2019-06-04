<?php

namespace Zakriyarahman\Microbilt\TINI\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class TINInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for TINInfo_Type originally named TINInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class TINInfo_Type extends Aggregate
{
    /**
     * The TINType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TINType;
    /**
     * The TaxId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TaxId;
    /**
     * The CertCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CertCode;
    /**
     * The IssuedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IssuedDt;
    /**
     * The IssuedState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IssuedState;
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var DateRange_Type
     */
    public $DateRange;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Country;
    /**
     * The OtherTaxId
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var OtherTaxId_Type
     */
    public $OtherTaxId;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for TINInfo_Type
     * @see parent::__construct()
     * @param string $_tINType
     * @param string $_taxId
     * @param string $_certCode
     * @param string $_issuedDt
     * @param string $_issuedState
     * @param DateRange_Type $_dateRange
     * @param string $_country
     * @param OtherTaxId_Type $_otherTaxId
     * @param Message_Type $_message
     * @return TINInfo_Type
     */
    public function __construct($_tINType = NULL,$_taxId = NULL,$_certCode = NULL,$_issuedDt = NULL,$_issuedState = NULL,$_dateRange = NULL,$_country = NULL,$_otherTaxId = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('TINType'=>$_tINType,'TaxId'=>$_taxId,'CertCode'=>$_certCode,'IssuedDt'=>$_issuedDt,'IssuedState'=>$_issuedState,'DateRange'=>$_dateRange,'Country'=>$_country,'OtherTaxId'=>$_otherTaxId,'Message'=>$_message),false);
    }
    /**
     * Get TINType value
     * @return string|null
     */
    public function getTINType()
    {
        return $this->TINType;
    }
    /**
     * Set TINType value
     * @param string $_tINType the TINType
     * @return string
     */
    public function setTINType($_tINType)
    {
        return ($this->TINType = $_tINType);
    }
    /**
     * Get TaxId value
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->TaxId;
    }
    /**
     * Set TaxId value
     * @param string $_taxId the TaxId
     * @return string
     */
    public function setTaxId($_taxId)
    {
        return ($this->TaxId = $_taxId);
    }
    /**
     * Get CertCode value
     * @return string|null
     */
    public function getCertCode()
    {
        return $this->CertCode;
    }
    /**
     * Set CertCode value
     * @param string $_certCode the CertCode
     * @return string
     */
    public function setCertCode($_certCode)
    {
        return ($this->CertCode = $_certCode);
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
     * Get IssuedState value
     * @return string|null
     */
    public function getIssuedState()
    {
        return $this->IssuedState;
    }
    /**
     * Set IssuedState value
     * @param string $_issuedState the IssuedState
     * @return string
     */
    public function setIssuedState($_issuedState)
    {
        return ($this->IssuedState = $_issuedState);
    }
    /**
     * Get DateRange value
     * @return DateRange_Type|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param DateRange_Type $_dateRange the DateRange
     * @return DateRange_Type
     */
    public function setDateRange($_dateRange)
    {
        return ($this->DateRange = $_dateRange);
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
     * Get OtherTaxId value
     * @return OtherTaxId_Type|null
     */
    public function getOtherTaxId()
    {
        return $this->OtherTaxId;
    }
    /**
     * Set OtherTaxId value
     * @param OtherTaxId_Type $_otherTaxId the OtherTaxId
     * @return OtherTaxId_Type
     */
    public function setOtherTaxId($_otherTaxId)
    {
        return ($this->OtherTaxId = $_otherTaxId);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TINInfo_Type
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
