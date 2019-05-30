<?php

namespace Zakriyarahman\Microbilt\Loan\Type;

/**
 * File for class MicrobiltStructLoanRequestInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructLoanRequestInfo_Type originally named LoanRequestInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructLoanRequestInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The RequestedCreditAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $RequestedCreditAmt;
    /**
     * The DownPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $DownPmtAmt;
    /**
     * The MonthlyPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $MonthlyPmtAmt;
    /**
     * The Terms
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Terms;
    /**
     * The RefinanceCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RefinanceCode;
    /**
     * The BookValueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $BookValueAmt;
    /**
     * The CostOfGoodsAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $CostOfGoodsAmt;
    /**
     * The TotalLiquidAssetsAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $TotalLiquidAssetsAmt;
    /**
     * The HousingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HousingType;
    /**
     * The DwellingStructureType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DwellingStructureType;
    /**
     * The MortgageRentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $MortgageRentAmt;
    /**
     * The MortgageAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $MortgageAmt;
    /**
     * The MortgageBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $MortgageBalAmt;
    /**
     * The LoanType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LoanType;
    /**
     * The MonthlyDebtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $MonthlyDebtAmt;
    /**
     * The BankruptcyOnApp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $BankruptcyOnApp;
    /**
     * The RepossessionOnApp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $RepossessionOnApp;
    /**
     * The ForeclosureOnApp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ForeclosureOnApp;
    /**
     * Constructor method for LoanRequestInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructCurrencyAmount $_requestedCreditAmt
     * @param MicrobiltStructCurrencyAmount $_downPmtAmt
     * @param MicrobiltStructCurrencyAmount $_monthlyPmtAmt
     * @param string $_terms
     * @param string $_refinanceCode
     * @param MicrobiltStructCurrencyAmount $_bookValueAmt
     * @param MicrobiltStructCurrencyAmount $_costOfGoodsAmt
     * @param MicrobiltStructCurrencyAmount $_totalLiquidAssetsAmt
     * @param string $_housingType
     * @param string $_dwellingStructureType
     * @param MicrobiltStructCurrencyAmount $_mortgageRentAmt
     * @param MicrobiltStructCurrencyAmount $_mortgageAmt
     * @param MicrobiltStructCurrencyAmount $_mortgageBalAmt
     * @param string $_loanType
     * @param MicrobiltStructCurrencyAmount $_monthlyDebtAmt
     * @param MicrobiltEnumBoolean $_bankruptcyOnApp
     * @param MicrobiltEnumBoolean $_repossessionOnApp
     * @param MicrobiltEnumBoolean $_foreclosureOnApp
     * @return MicrobiltStructLoanRequestInfo_Type
     */
    public function __construct($_requestedCreditAmt = NULL,$_downPmtAmt = NULL,$_monthlyPmtAmt = NULL,$_terms = NULL,$_refinanceCode = NULL,$_bookValueAmt = NULL,$_costOfGoodsAmt = NULL,$_totalLiquidAssetsAmt = NULL,$_housingType = NULL,$_dwellingStructureType = NULL,$_mortgageRentAmt = NULL,$_mortgageAmt = NULL,$_mortgageBalAmt = NULL,$_loanType = NULL,$_monthlyDebtAmt = NULL,$_bankruptcyOnApp = NULL,$_repossessionOnApp = NULL,$_foreclosureOnApp = NULL)
    {
        MicrobiltWsdlClass::__construct(array('RequestedCreditAmt'=>$_requestedCreditAmt,'DownPmtAmt'=>$_downPmtAmt,'MonthlyPmtAmt'=>$_monthlyPmtAmt,'Terms'=>$_terms,'RefinanceCode'=>$_refinanceCode,'BookValueAmt'=>$_bookValueAmt,'CostOfGoodsAmt'=>$_costOfGoodsAmt,'TotalLiquidAssetsAmt'=>$_totalLiquidAssetsAmt,'HousingType'=>$_housingType,'DwellingStructureType'=>$_dwellingStructureType,'MortgageRentAmt'=>$_mortgageRentAmt,'MortgageAmt'=>$_mortgageAmt,'MortgageBalAmt'=>$_mortgageBalAmt,'LoanType'=>$_loanType,'MonthlyDebtAmt'=>$_monthlyDebtAmt,'BankruptcyOnApp'=>$_bankruptcyOnApp,'RepossessionOnApp'=>$_repossessionOnApp,'ForeclosureOnApp'=>$_foreclosureOnApp),false);
    }
    /**
     * Get RequestedCreditAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getRequestedCreditAmt()
    {
        return $this->RequestedCreditAmt;
    }
    /**
     * Set RequestedCreditAmt value
     * @param MicrobiltStructCurrencyAmount $_requestedCreditAmt the RequestedCreditAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setRequestedCreditAmt($_requestedCreditAmt)
    {
        return ($this->RequestedCreditAmt = $_requestedCreditAmt);
    }
    /**
     * Get DownPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getDownPmtAmt()
    {
        return $this->DownPmtAmt;
    }
    /**
     * Set DownPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_downPmtAmt the DownPmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setDownPmtAmt($_downPmtAmt)
    {
        return ($this->DownPmtAmt = $_downPmtAmt);
    }
    /**
     * Get MonthlyPmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getMonthlyPmtAmt()
    {
        return $this->MonthlyPmtAmt;
    }
    /**
     * Set MonthlyPmtAmt value
     * @param MicrobiltStructCurrencyAmount $_monthlyPmtAmt the MonthlyPmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setMonthlyPmtAmt($_monthlyPmtAmt)
    {
        return ($this->MonthlyPmtAmt = $_monthlyPmtAmt);
    }
    /**
     * Get Terms value
     * @return string|null
     */
    public function getTerms()
    {
        return $this->Terms;
    }
    /**
     * Set Terms value
     * @param string $_terms the Terms
     * @return string
     */
    public function setTerms($_terms)
    {
        return ($this->Terms = $_terms);
    }
    /**
     * Get RefinanceCode value
     * @return string|null
     */
    public function getRefinanceCode()
    {
        return $this->RefinanceCode;
    }
    /**
     * Set RefinanceCode value
     * @param string $_refinanceCode the RefinanceCode
     * @return string
     */
    public function setRefinanceCode($_refinanceCode)
    {
        return ($this->RefinanceCode = $_refinanceCode);
    }
    /**
     * Get BookValueAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getBookValueAmt()
    {
        return $this->BookValueAmt;
    }
    /**
     * Set BookValueAmt value
     * @param MicrobiltStructCurrencyAmount $_bookValueAmt the BookValueAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setBookValueAmt($_bookValueAmt)
    {
        return ($this->BookValueAmt = $_bookValueAmt);
    }
    /**
     * Get CostOfGoodsAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getCostOfGoodsAmt()
    {
        return $this->CostOfGoodsAmt;
    }
    /**
     * Set CostOfGoodsAmt value
     * @param MicrobiltStructCurrencyAmount $_costOfGoodsAmt the CostOfGoodsAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setCostOfGoodsAmt($_costOfGoodsAmt)
    {
        return ($this->CostOfGoodsAmt = $_costOfGoodsAmt);
    }
    /**
     * Get TotalLiquidAssetsAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getTotalLiquidAssetsAmt()
    {
        return $this->TotalLiquidAssetsAmt;
    }
    /**
     * Set TotalLiquidAssetsAmt value
     * @param MicrobiltStructCurrencyAmount $_totalLiquidAssetsAmt the TotalLiquidAssetsAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setTotalLiquidAssetsAmt($_totalLiquidAssetsAmt)
    {
        return ($this->TotalLiquidAssetsAmt = $_totalLiquidAssetsAmt);
    }
    /**
     * Get HousingType value
     * @return string|null
     */
    public function getHousingType()
    {
        return $this->HousingType;
    }
    /**
     * Set HousingType value
     * @param string $_housingType the HousingType
     * @return string
     */
    public function setHousingType($_housingType)
    {
        return ($this->HousingType = $_housingType);
    }
    /**
     * Get DwellingStructureType value
     * @return string|null
     */
    public function getDwellingStructureType()
    {
        return $this->DwellingStructureType;
    }
    /**
     * Set DwellingStructureType value
     * @param string $_dwellingStructureType the DwellingStructureType
     * @return string
     */
    public function setDwellingStructureType($_dwellingStructureType)
    {
        return ($this->DwellingStructureType = $_dwellingStructureType);
    }
    /**
     * Get MortgageRentAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getMortgageRentAmt()
    {
        return $this->MortgageRentAmt;
    }
    /**
     * Set MortgageRentAmt value
     * @param MicrobiltStructCurrencyAmount $_mortgageRentAmt the MortgageRentAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setMortgageRentAmt($_mortgageRentAmt)
    {
        return ($this->MortgageRentAmt = $_mortgageRentAmt);
    }
    /**
     * Get MortgageAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getMortgageAmt()
    {
        return $this->MortgageAmt;
    }
    /**
     * Set MortgageAmt value
     * @param MicrobiltStructCurrencyAmount $_mortgageAmt the MortgageAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setMortgageAmt($_mortgageAmt)
    {
        return ($this->MortgageAmt = $_mortgageAmt);
    }
    /**
     * Get MortgageBalAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getMortgageBalAmt()
    {
        return $this->MortgageBalAmt;
    }
    /**
     * Set MortgageBalAmt value
     * @param MicrobiltStructCurrencyAmount $_mortgageBalAmt the MortgageBalAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setMortgageBalAmt($_mortgageBalAmt)
    {
        return ($this->MortgageBalAmt = $_mortgageBalAmt);
    }
    /**
     * Get LoanType value
     * @return string|null
     */
    public function getLoanType()
    {
        return $this->LoanType;
    }
    /**
     * Set LoanType value
     * @param string $_loanType the LoanType
     * @return string
     */
    public function setLoanType($_loanType)
    {
        return ($this->LoanType = $_loanType);
    }
    /**
     * Get MonthlyDebtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getMonthlyDebtAmt()
    {
        return $this->MonthlyDebtAmt;
    }
    /**
     * Set MonthlyDebtAmt value
     * @param MicrobiltStructCurrencyAmount $_monthlyDebtAmt the MonthlyDebtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setMonthlyDebtAmt($_monthlyDebtAmt)
    {
        return ($this->MonthlyDebtAmt = $_monthlyDebtAmt);
    }
    /**
     * Get BankruptcyOnApp value
     * @return MicrobiltEnumBoolean|null
     */
    public function getBankruptcyOnApp()
    {
        return $this->BankruptcyOnApp;
    }
    /**
     * Set BankruptcyOnApp value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_bankruptcyOnApp the BankruptcyOnApp
     * @return MicrobiltEnumBoolean
     */
    public function setBankruptcyOnApp($_bankruptcyOnApp)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_bankruptcyOnApp))
        {
            return false;
        }
        return ($this->BankruptcyOnApp = $_bankruptcyOnApp);
    }
    /**
     * Get RepossessionOnApp value
     * @return MicrobiltEnumBoolean|null
     */
    public function getRepossessionOnApp()
    {
        return $this->RepossessionOnApp;
    }
    /**
     * Set RepossessionOnApp value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_repossessionOnApp the RepossessionOnApp
     * @return MicrobiltEnumBoolean
     */
    public function setRepossessionOnApp($_repossessionOnApp)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_repossessionOnApp))
        {
            return false;
        }
        return ($this->RepossessionOnApp = $_repossessionOnApp);
    }
    /**
     * Get ForeclosureOnApp value
     * @return MicrobiltEnumBoolean|null
     */
    public function getForeclosureOnApp()
    {
        return $this->ForeclosureOnApp;
    }
    /**
     * Set ForeclosureOnApp value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_foreclosureOnApp the ForeclosureOnApp
     * @return MicrobiltEnumBoolean
     */
    public function setForeclosureOnApp($_foreclosureOnApp)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_foreclosureOnApp))
        {
            return false;
        }
        return ($this->ForeclosureOnApp = $_foreclosureOnApp);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructLoanRequestInfo_Type
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
