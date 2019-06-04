<?php

namespace Zakriyarahman\Microbilt\Charge\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class ChargeOff_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for ChargeOff_Type originally named ChargeOff_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class ChargeOff_Type extends Aggregate
{
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var OrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The RecoveryType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecoveryType;
    /**
     * The RecoveryDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecoveryDt;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The RefNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RefNum;
    /**
     * The PmtAgreement
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PmtAgreement_Type
     */
    public $PmtAgreement;
    /**
     * Constructor method for ChargeOff_Type
     * @see parent::__construct()
     * @param OrgInfo_Type $_orgInfo
     * @param string $_recoveryType
     * @param string $_recoveryDt
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param string $_refNum
     * @param PmtAgreement_Type $_pmtAgreement
     * @return ChargeOff_Type
     */
    public function __construct($_orgInfo = NULL,$_recoveryType = NULL,$_recoveryDt = NULL,$_personInfo = NULL,$_refNum = NULL,$_pmtAgreement = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'RecoveryType'=>$_recoveryType,'RecoveryDt'=>$_recoveryDt,'PersonInfo'=>$_personInfo,'RefNum'=>$_refNum,'PmtAgreement'=>$_pmtAgreement),false);
    }
    /**
     * Get OrgInfo value
     * @return OrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param OrgInfo_Type $_orgInfo the OrgInfo
     * @return OrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get RecoveryType value
     * @return string|null
     */
    public function getRecoveryType()
    {
        return $this->RecoveryType;
    }
    /**
     * Set RecoveryType value
     * @param string $_recoveryType the RecoveryType
     * @return string
     */
    public function setRecoveryType($_recoveryType)
    {
        return ($this->RecoveryType = $_recoveryType);
    }
    /**
     * Get RecoveryDt value
     * @return string|null
     */
    public function getRecoveryDt()
    {
        return $this->RecoveryDt;
    }
    /**
     * Set RecoveryDt value
     * @param string $_recoveryDt the RecoveryDt
     * @return string
     */
    public function setRecoveryDt($_recoveryDt)
    {
        return ($this->RecoveryDt = $_recoveryDt);
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
     * Get RefNum value
     * @return string|null
     */
    public function getRefNum()
    {
        return $this->RefNum;
    }
    /**
     * Set RefNum value
     * @param string $_refNum the RefNum
     * @return string
     */
    public function setRefNum($_refNum)
    {
        return ($this->RefNum = $_refNum);
    }
    /**
     * Get PmtAgreement value
     * @return PmtAgreement_Type|null
     */
    public function getPmtAgreement()
    {
        return $this->PmtAgreement;
    }
    /**
     * Set PmtAgreement value
     * @param PmtAgreement_Type $_pmtAgreement the PmtAgreement
     * @return PmtAgreement_Type
     */
    public function setPmtAgreement($_pmtAgreement)
    {
        return ($this->PmtAgreement = $_pmtAgreement);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ChargeOff_Type
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
