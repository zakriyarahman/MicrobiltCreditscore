<?php

namespace Zakriyarahman\Microbilt\ACHI\Type;

/**
 * File for class MicrobiltStructACHInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructACHInfo_Type originally named ACHInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructACHInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The CheckRoutingNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CheckRoutingNum;
    /**
     * The CheckAcctNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CheckAcctNum;
    /**
     * The CheckAcctType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CheckAcctType;
    /**
     * The CheckNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CheckNum;
    /**
     * The CheckEntryClassCd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CheckEntryClassCd;
    /**
     * The CheckDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CheckDt;
    /**
     * The ACHPaymentType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ACHPaymentType;
    /**
     * Constructor method for ACHInfo_Type
     * @see parent::__construct()
     * @param string $_checkRoutingNum
     * @param string $_checkAcctNum
     * @param string $_checkAcctType
     * @param string $_checkNum
     * @param string $_checkEntryClassCd
     * @param string $_checkDt
     * @param string $_aCHPaymentType
     * @return MicrobiltStructACHInfo_Type
     */
    public function __construct($_checkRoutingNum = NULL,$_checkAcctNum = NULL,$_checkAcctType = NULL,$_checkNum = NULL,$_checkEntryClassCd = NULL,$_checkDt = NULL,$_aCHPaymentType = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CheckRoutingNum'=>$_checkRoutingNum,'CheckAcctNum'=>$_checkAcctNum,'CheckAcctType'=>$_checkAcctType,'CheckNum'=>$_checkNum,'CheckEntryClassCd'=>$_checkEntryClassCd,'CheckDt'=>$_checkDt,'ACHPaymentType'=>$_aCHPaymentType),false);
    }
    /**
     * Get CheckRoutingNum value
     * @return string|null
     */
    public function getCheckRoutingNum()
    {
        return $this->CheckRoutingNum;
    }
    /**
     * Set CheckRoutingNum value
     * @param string $_checkRoutingNum the CheckRoutingNum
     * @return string
     */
    public function setCheckRoutingNum($_checkRoutingNum)
    {
        return ($this->CheckRoutingNum = $_checkRoutingNum);
    }
    /**
     * Get CheckAcctNum value
     * @return string|null
     */
    public function getCheckAcctNum()
    {
        return $this->CheckAcctNum;
    }
    /**
     * Set CheckAcctNum value
     * @param string $_checkAcctNum the CheckAcctNum
     * @return string
     */
    public function setCheckAcctNum($_checkAcctNum)
    {
        return ($this->CheckAcctNum = $_checkAcctNum);
    }
    /**
     * Get CheckAcctType value
     * @return string|null
     */
    public function getCheckAcctType()
    {
        return $this->CheckAcctType;
    }
    /**
     * Set CheckAcctType value
     * @param string $_checkAcctType the CheckAcctType
     * @return string
     */
    public function setCheckAcctType($_checkAcctType)
    {
        return ($this->CheckAcctType = $_checkAcctType);
    }
    /**
     * Get CheckNum value
     * @return string|null
     */
    public function getCheckNum()
    {
        return $this->CheckNum;
    }
    /**
     * Set CheckNum value
     * @param string $_checkNum the CheckNum
     * @return string
     */
    public function setCheckNum($_checkNum)
    {
        return ($this->CheckNum = $_checkNum);
    }
    /**
     * Get CheckEntryClassCd value
     * @return string|null
     */
    public function getCheckEntryClassCd()
    {
        return $this->CheckEntryClassCd;
    }
    /**
     * Set CheckEntryClassCd value
     * @param string $_checkEntryClassCd the CheckEntryClassCd
     * @return string
     */
    public function setCheckEntryClassCd($_checkEntryClassCd)
    {
        return ($this->CheckEntryClassCd = $_checkEntryClassCd);
    }
    /**
     * Get CheckDt value
     * @return string|null
     */
    public function getCheckDt()
    {
        return $this->CheckDt;
    }
    /**
     * Set CheckDt value
     * @param string $_checkDt the CheckDt
     * @return string
     */
    public function setCheckDt($_checkDt)
    {
        return ($this->CheckDt = $_checkDt);
    }
    /**
     * Get ACHPaymentType value
     * @return string|null
     */
    public function getACHPaymentType()
    {
        return $this->ACHPaymentType;
    }
    /**
     * Set ACHPaymentType value
     * @param string $_aCHPaymentType the ACHPaymentType
     * @return string
     */
    public function setACHPaymentType($_aCHPaymentType)
    {
        return ($this->ACHPaymentType = $_aCHPaymentType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructACHInfo_Type
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
