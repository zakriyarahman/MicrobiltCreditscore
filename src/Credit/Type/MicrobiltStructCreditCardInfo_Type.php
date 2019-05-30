<?php

namespace Zakriyarahman\Microbilt\Credit\Type;

/**
 * File for class MicrobiltStructCreditCardInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCreditCardInfo_Type originally named CreditCardInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCreditCardInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The ExpirationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $ExpirationDt;
    /**
     * The CreditCardNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CreditCardNum;
    /**
     * The SecurityDigits
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SecurityDigits;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * Constructor method for CreditCardInfo_Type
     * @see parent::__construct()
     * @param string $_expirationDt
     * @param string $_creditCardNum
     * @param string $_securityDigits
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @return MicrobiltStructCreditCardInfo_Type
     */
    public function __construct($_expirationDt,$_creditCardNum = NULL,$_securityDigits = NULL,$_personInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ExpirationDt'=>$_expirationDt,'CreditCardNum'=>$_creditCardNum,'SecurityDigits'=>$_securityDigits,'PersonInfo'=>$_personInfo),false);
    }
    /**
     * Get ExpirationDt value
     * @return string
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
     * Get CreditCardNum value
     * @return string|null
     */
    public function getCreditCardNum()
    {
        return $this->CreditCardNum;
    }
    /**
     * Set CreditCardNum value
     * @param string $_creditCardNum the CreditCardNum
     * @return string
     */
    public function setCreditCardNum($_creditCardNum)
    {
        return ($this->CreditCardNum = $_creditCardNum);
    }
    /**
     * Get SecurityDigits value
     * @return string|null
     */
    public function getSecurityDigits()
    {
        return $this->SecurityDigits;
    }
    /**
     * Set SecurityDigits value
     * @param string $_securityDigits the SecurityDigits
     * @return string
     */
    public function setSecurityDigits($_securityDigits)
    {
        return ($this->SecurityDigits = $_securityDigits);
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
     * @return MicrobiltStructCreditCardInfo_Type
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
