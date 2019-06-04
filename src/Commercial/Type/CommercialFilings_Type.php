<?php

namespace Zakriyarahman\Microbilt\Commercial\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class CommercialFilings_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CommercialFilings_Type originally named CommercialFilings_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CommercialFilings_Type extends Aggregate
{
    /**
     * The OriginationState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OriginationState;
    /**
     * The CorpID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CorpID;
    /**
     * The FilingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingType;
    /**
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CommercialDates_Type
     */
    public $CommercialDates;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var OrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The IncorporationState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IncorporationState;
    /**
     * The FilingState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingState;
    /**
     * The CorpStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CorpStatus;
    /**
     * The TermType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TermType;
    /**
     * The ForProfitInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ForProfitInd;
    /**
     * The Parties
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Parties_Type
     */
    public $Parties;
    /**
     * The FilingStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingStatus;
    /**
     * The FilingNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingNum;
    /**
     * The SerialNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SerialNum;
    /**
     * The Page
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Page;
    /**
     * Constructor method for CommercialFilings_Type
     * @see parent::__construct()
     * @param string $_originationState
     * @param string $_corpID
     * @param string $_filingType
     * @param CommercialDates_Type $_commercialDates
     * @param OrgInfo_Type $_orgInfo
     * @param string $_incorporationState
     * @param string $_filingState
     * @param string $_corpStatus
     * @param string $_termType
     * @param Boolean $_forProfitInd
     * @param Parties_Type $_parties
     * @param string $_filingStatus
     * @param string $_filingNum
     * @param string $_serialNum
     * @param string $_page
     * @return CommercialFilings_Type
     */
    public function __construct($_originationState = NULL,$_corpID = NULL,$_filingType = NULL,$_commercialDates = NULL,$_orgInfo = NULL,$_incorporationState = NULL,$_filingState = NULL,$_corpStatus = NULL,$_termType = NULL,$_forProfitInd = NULL,$_parties = NULL,$_filingStatus = NULL,$_filingNum = NULL,$_serialNum = NULL,$_page = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OriginationState'=>$_originationState,'CorpID'=>$_corpID,'FilingType'=>$_filingType,'CommercialDates'=>$_commercialDates,'OrgInfo'=>$_orgInfo,'IncorporationState'=>$_incorporationState,'FilingState'=>$_filingState,'CorpStatus'=>$_corpStatus,'TermType'=>$_termType,'ForProfitInd'=>$_forProfitInd,'Parties'=>$_parties,'FilingStatus'=>$_filingStatus,'FilingNum'=>$_filingNum,'SerialNum'=>$_serialNum,'Page'=>$_page),false);
    }
    /**
     * Get OriginationState value
     * @return string|null
     */
    public function getOriginationState()
    {
        return $this->OriginationState;
    }
    /**
     * Set OriginationState value
     * @param string $_originationState the OriginationState
     * @return string
     */
    public function setOriginationState($_originationState)
    {
        return ($this->OriginationState = $_originationState);
    }
    /**
     * Get CorpID value
     * @return string|null
     */
    public function getCorpID()
    {
        return $this->CorpID;
    }
    /**
     * Set CorpID value
     * @param string $_corpID the CorpID
     * @return string
     */
    public function setCorpID($_corpID)
    {
        return ($this->CorpID = $_corpID);
    }
    /**
     * Get FilingType value
     * @return string|null
     */
    public function getFilingType()
    {
        return $this->FilingType;
    }
    /**
     * Set FilingType value
     * @param string $_filingType the FilingType
     * @return string
     */
    public function setFilingType($_filingType)
    {
        return ($this->FilingType = $_filingType);
    }
    /**
     * Get CommercialDates value
     * @return CommercialDates_Type|null
     */
    public function getCommercialDates()
    {
        return $this->CommercialDates;
    }
    /**
     * Set CommercialDates value
     * @param CommercialDates_Type $_commercialDates the CommercialDates
     * @return CommercialDates_Type
     */
    public function setCommercialDates($_commercialDates)
    {
        return ($this->CommercialDates = $_commercialDates);
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
     * Get IncorporationState value
     * @return string|null
     */
    public function getIncorporationState()
    {
        return $this->IncorporationState;
    }
    /**
     * Set IncorporationState value
     * @param string $_incorporationState the IncorporationState
     * @return string
     */
    public function setIncorporationState($_incorporationState)
    {
        return ($this->IncorporationState = $_incorporationState);
    }
    /**
     * Get FilingState value
     * @return string|null
     */
    public function getFilingState()
    {
        return $this->FilingState;
    }
    /**
     * Set FilingState value
     * @param string $_filingState the FilingState
     * @return string
     */
    public function setFilingState($_filingState)
    {
        return ($this->FilingState = $_filingState);
    }
    /**
     * Get CorpStatus value
     * @return string|null
     */
    public function getCorpStatus()
    {
        return $this->CorpStatus;
    }
    /**
     * Set CorpStatus value
     * @param string $_corpStatus the CorpStatus
     * @return string
     */
    public function setCorpStatus($_corpStatus)
    {
        return ($this->CorpStatus = $_corpStatus);
    }
    /**
     * Get TermType value
     * @return string|null
     */
    public function getTermType()
    {
        return $this->TermType;
    }
    /**
     * Set TermType value
     * @param string $_termType the TermType
     * @return string
     */
    public function setTermType($_termType)
    {
        return ($this->TermType = $_termType);
    }
    /**
     * Get ForProfitInd value
     * @return Boolean|null
     */
    public function getForProfitInd()
    {
        return $this->ForProfitInd;
    }
    /**
     * Set ForProfitInd value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_forProfitInd the ForProfitInd
     * @return Boolean
     */
    public function setForProfitInd($_forProfitInd)
    {
        if(!Boolean::valueIsValid($_forProfitInd))
        {
            return false;
        }
        return ($this->ForProfitInd = $_forProfitInd);
    }
    /**
     * Get Parties value
     * @return Parties_Type|null
     */
    public function getParties()
    {
        return $this->Parties;
    }
    /**
     * Set Parties value
     * @param Parties_Type $_parties the Parties
     * @return Parties_Type
     */
    public function setParties($_parties)
    {
        return ($this->Parties = $_parties);
    }
    /**
     * Get FilingStatus value
     * @return string|null
     */
    public function getFilingStatus()
    {
        return $this->FilingStatus;
    }
    /**
     * Set FilingStatus value
     * @param string $_filingStatus the FilingStatus
     * @return string
     */
    public function setFilingStatus($_filingStatus)
    {
        return ($this->FilingStatus = $_filingStatus);
    }
    /**
     * Get FilingNum value
     * @return string|null
     */
    public function getFilingNum()
    {
        return $this->FilingNum;
    }
    /**
     * Set FilingNum value
     * @param string $_filingNum the FilingNum
     * @return string
     */
    public function setFilingNum($_filingNum)
    {
        return ($this->FilingNum = $_filingNum);
    }
    /**
     * Get SerialNum value
     * @return string|null
     */
    public function getSerialNum()
    {
        return $this->SerialNum;
    }
    /**
     * Set SerialNum value
     * @param string $_serialNum the SerialNum
     * @return string
     */
    public function setSerialNum($_serialNum)
    {
        return ($this->SerialNum = $_serialNum);
    }
    /**
     * Get Page value
     * @return string|null
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param string $_page the Page
     * @return string
     */
    public function setPage($_page)
    {
        return ($this->Page = $_page);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CommercialFilings_Type
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
