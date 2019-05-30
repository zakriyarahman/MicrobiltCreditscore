<?php

namespace Zakriyarahman\Microbilt\Govt\Type;

/**
 * File for class MicrobiltStructGovtFinancialExperiences_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructGovtFinancialExperiences_Type originally named GovtFinancialExperiences_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructGovtFinancialExperiences_Type extends MicrobiltStructAggregate
{
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The TypeOfBankAcct
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TypeOfBankAcct;
    /**
     * The OpenedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OpenedDt;
    /**
     * The ClosedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ClosedDt;
    /**
     * The AccountRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $AccountRating;
    /**
     * The BalanceRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $BalanceRange;
    /**
     * The FiguresInBalance
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $FiguresInBalance;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The ProfileDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProfileDt;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $DisputeInd;
    /**
     * Constructor method for GovtFinancialExperiences_Type
     * @see parent::__construct()
     * @param MicrobiltStructOrgInfo_Type $_orgInfo
     * @param string $_typeOfBankAcct
     * @param string $_openedDt
     * @param string $_closedDt
     * @param MicrobiltStructCodeDescription_Type $_accountRating
     * @param MicrobiltStructCodeDescription_Type $_balanceRange
     * @param MicrobiltStructCodeDescription_Type $_figuresInBalance
     * @param MicrobiltStructCompAmt_Type $_balanceAmt
     * @param string $_profileDt
     * @param MicrobiltEnumBoolean $_disputeInd
     * @return MicrobiltStructGovtFinancialExperiences_Type
     */
    public function __construct($_orgInfo = NULL,$_typeOfBankAcct = NULL,$_openedDt = NULL,$_closedDt = NULL,$_accountRating = NULL,$_balanceRange = NULL,$_figuresInBalance = NULL,$_balanceAmt = NULL,$_profileDt = NULL,$_disputeInd = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'TypeOfBankAcct'=>$_typeOfBankAcct,'OpenedDt'=>$_openedDt,'ClosedDt'=>$_closedDt,'AccountRating'=>$_accountRating,'BalanceRange'=>$_balanceRange,'FiguresInBalance'=>$_figuresInBalance,'BalanceAmt'=>$_balanceAmt,'ProfileDt'=>$_profileDt,'DisputeInd'=>$_disputeInd),false);
    }
    /**
     * Get OrgInfo value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param MicrobiltStructOrgInfo_Type $_orgInfo the OrgInfo
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get TypeOfBankAcct value
     * @return string|null
     */
    public function getTypeOfBankAcct()
    {
        return $this->TypeOfBankAcct;
    }
    /**
     * Set TypeOfBankAcct value
     * @param string $_typeOfBankAcct the TypeOfBankAcct
     * @return string
     */
    public function setTypeOfBankAcct($_typeOfBankAcct)
    {
        return ($this->TypeOfBankAcct = $_typeOfBankAcct);
    }
    /**
     * Get OpenedDt value
     * @return string|null
     */
    public function getOpenedDt()
    {
        return $this->OpenedDt;
    }
    /**
     * Set OpenedDt value
     * @param string $_openedDt the OpenedDt
     * @return string
     */
    public function setOpenedDt($_openedDt)
    {
        return ($this->OpenedDt = $_openedDt);
    }
    /**
     * Get ClosedDt value
     * @return string|null
     */
    public function getClosedDt()
    {
        return $this->ClosedDt;
    }
    /**
     * Set ClosedDt value
     * @param string $_closedDt the ClosedDt
     * @return string
     */
    public function setClosedDt($_closedDt)
    {
        return ($this->ClosedDt = $_closedDt);
    }
    /**
     * Get AccountRating value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getAccountRating()
    {
        return $this->AccountRating;
    }
    /**
     * Set AccountRating value
     * @param MicrobiltStructCodeDescription_Type $_accountRating the AccountRating
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setAccountRating($_accountRating)
    {
        return ($this->AccountRating = $_accountRating);
    }
    /**
     * Get BalanceRange value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getBalanceRange()
    {
        return $this->BalanceRange;
    }
    /**
     * Set BalanceRange value
     * @param MicrobiltStructCodeDescription_Type $_balanceRange the BalanceRange
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setBalanceRange($_balanceRange)
    {
        return ($this->BalanceRange = $_balanceRange);
    }
    /**
     * Get FiguresInBalance value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getFiguresInBalance()
    {
        return $this->FiguresInBalance;
    }
    /**
     * Set FiguresInBalance value
     * @param MicrobiltStructCodeDescription_Type $_figuresInBalance the FiguresInBalance
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setFiguresInBalance($_figuresInBalance)
    {
        return ($this->FiguresInBalance = $_figuresInBalance);
    }
    /**
     * Get BalanceAmt value
     * @return MicrobiltStructCompAmt_Type|null
     */
    public function getBalanceAmt()
    {
        return $this->BalanceAmt;
    }
    /**
     * Set BalanceAmt value
     * @param MicrobiltStructCompAmt_Type $_balanceAmt the BalanceAmt
     * @return MicrobiltStructCompAmt_Type
     */
    public function setBalanceAmt($_balanceAmt)
    {
        return ($this->BalanceAmt = $_balanceAmt);
    }
    /**
     * Get ProfileDt value
     * @return string|null
     */
    public function getProfileDt()
    {
        return $this->ProfileDt;
    }
    /**
     * Set ProfileDt value
     * @param string $_profileDt the ProfileDt
     * @return string
     */
    public function setProfileDt($_profileDt)
    {
        return ($this->ProfileDt = $_profileDt);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructGovtFinancialExperiences_Type
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
