<?php

namespace Zakriyarahman\Microbilt\Collection_\Type;

/**
 * File for class MicrobiltStructCollection_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCollection_Type originally named Collection_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCollection_Type extends MicrobiltStructAggregate
{
    /**
     * The OrigCreditor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigCreditor;
    /**
     * The OriginalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $OriginalAmt;
    /**
     * The AcctType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctType;
    /**
     * The OwnershipType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipType;
    /**
     * The OrigAcctNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigAcctNumber;
    /**
     * The LastActivityDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastActivityDt;
    /**
     * The CollectionAgency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $CollectionAgency;
    /**
     * The AssignedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AssignedDt;
    /**
     * The CurrentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $CurrentAmt;
    /**
     * The BalanceDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BalanceDt;
    /**
     * The CollectionStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $CollectionStatus;
    /**
     * The StatusDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatusDt;
    /**
     * The ReportedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReportedDt;
    /**
     * The ClosedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ClosedDt;
    /**
     * The ClosureReason
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $ClosureReason;
    /**
     * The PaidDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PaidDt;
    /**
     * The PmtType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $PmtType;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The VerifiedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VerifiedDt;
    /**
     * Constructor method for Collection_Type
     * @see parent::__construct()
     * @param string $_origCreditor
     * @param MicrobiltStructCurrencyAmount $_originalAmt
     * @param string $_acctType
     * @param string $_ownershipType
     * @param string $_origAcctNumber
     * @param string $_lastActivityDt
     * @param MicrobiltStructOrgInfo_Type $_collectionAgency
     * @param string $_assignedDt
     * @param MicrobiltStructCurrencyAmount $_currentAmt
     * @param string $_balanceDt
     * @param MicrobiltStructCodeDescription_Type $_collectionStatus
     * @param string $_statusDt
     * @param string $_reportedDt
     * @param string $_closedDt
     * @param MicrobiltStructMessage_Type $_closureReason
     * @param string $_paidDt
     * @param MicrobiltStructCodeDescription_Type $_pmtType
     * @param MicrobiltStructMessage_Type $_message
     * @param string $_verifiedDt
     * @return MicrobiltStructCollection_Type
     */
    public function __construct($_origCreditor = NULL,$_originalAmt = NULL,$_acctType = NULL,$_ownershipType = NULL,$_origAcctNumber = NULL,$_lastActivityDt = NULL,$_collectionAgency = NULL,$_assignedDt = NULL,$_currentAmt = NULL,$_balanceDt = NULL,$_collectionStatus = NULL,$_statusDt = NULL,$_reportedDt = NULL,$_closedDt = NULL,$_closureReason = NULL,$_paidDt = NULL,$_pmtType = NULL,$_message = NULL,$_verifiedDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OrigCreditor'=>$_origCreditor,'OriginalAmt'=>$_originalAmt,'AcctType'=>$_acctType,'OwnershipType'=>$_ownershipType,'OrigAcctNumber'=>$_origAcctNumber,'LastActivityDt'=>$_lastActivityDt,'CollectionAgency'=>$_collectionAgency,'AssignedDt'=>$_assignedDt,'CurrentAmt'=>$_currentAmt,'BalanceDt'=>$_balanceDt,'CollectionStatus'=>$_collectionStatus,'StatusDt'=>$_statusDt,'ReportedDt'=>$_reportedDt,'ClosedDt'=>$_closedDt,'ClosureReason'=>$_closureReason,'PaidDt'=>$_paidDt,'PmtType'=>$_pmtType,'Message'=>$_message,'VerifiedDt'=>$_verifiedDt),false);
    }
    /**
     * Get OrigCreditor value
     * @return string|null
     */
    public function getOrigCreditor()
    {
        return $this->OrigCreditor;
    }
    /**
     * Set OrigCreditor value
     * @param string $_origCreditor the OrigCreditor
     * @return string
     */
    public function setOrigCreditor($_origCreditor)
    {
        return ($this->OrigCreditor = $_origCreditor);
    }
    /**
     * Get OriginalAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getOriginalAmt()
    {
        return $this->OriginalAmt;
    }
    /**
     * Set OriginalAmt value
     * @param MicrobiltStructCurrencyAmount $_originalAmt the OriginalAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setOriginalAmt($_originalAmt)
    {
        return ($this->OriginalAmt = $_originalAmt);
    }
    /**
     * Get AcctType value
     * @return string|null
     */
    public function getAcctType()
    {
        return $this->AcctType;
    }
    /**
     * Set AcctType value
     * @param string $_acctType the AcctType
     * @return string
     */
    public function setAcctType($_acctType)
    {
        return ($this->AcctType = $_acctType);
    }
    /**
     * Get OwnershipType value
     * @return string|null
     */
    public function getOwnershipType()
    {
        return $this->OwnershipType;
    }
    /**
     * Set OwnershipType value
     * @param string $_ownershipType the OwnershipType
     * @return string
     */
    public function setOwnershipType($_ownershipType)
    {
        return ($this->OwnershipType = $_ownershipType);
    }
    /**
     * Get OrigAcctNumber value
     * @return string|null
     */
    public function getOrigAcctNumber()
    {
        return $this->OrigAcctNumber;
    }
    /**
     * Set OrigAcctNumber value
     * @param string $_origAcctNumber the OrigAcctNumber
     * @return string
     */
    public function setOrigAcctNumber($_origAcctNumber)
    {
        return ($this->OrigAcctNumber = $_origAcctNumber);
    }
    /**
     * Get LastActivityDt value
     * @return string|null
     */
    public function getLastActivityDt()
    {
        return $this->LastActivityDt;
    }
    /**
     * Set LastActivityDt value
     * @param string $_lastActivityDt the LastActivityDt
     * @return string
     */
    public function setLastActivityDt($_lastActivityDt)
    {
        return ($this->LastActivityDt = $_lastActivityDt);
    }
    /**
     * Get CollectionAgency value
     * @return MicrobiltStructOrgInfo_Type|null
     */
    public function getCollectionAgency()
    {
        return $this->CollectionAgency;
    }
    /**
     * Set CollectionAgency value
     * @param MicrobiltStructOrgInfo_Type $_collectionAgency the CollectionAgency
     * @return MicrobiltStructOrgInfo_Type
     */
    public function setCollectionAgency($_collectionAgency)
    {
        return ($this->CollectionAgency = $_collectionAgency);
    }
    /**
     * Get AssignedDt value
     * @return string|null
     */
    public function getAssignedDt()
    {
        return $this->AssignedDt;
    }
    /**
     * Set AssignedDt value
     * @param string $_assignedDt the AssignedDt
     * @return string
     */
    public function setAssignedDt($_assignedDt)
    {
        return ($this->AssignedDt = $_assignedDt);
    }
    /**
     * Get CurrentAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getCurrentAmt()
    {
        return $this->CurrentAmt;
    }
    /**
     * Set CurrentAmt value
     * @param MicrobiltStructCurrencyAmount $_currentAmt the CurrentAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setCurrentAmt($_currentAmt)
    {
        return ($this->CurrentAmt = $_currentAmt);
    }
    /**
     * Get BalanceDt value
     * @return string|null
     */
    public function getBalanceDt()
    {
        return $this->BalanceDt;
    }
    /**
     * Set BalanceDt value
     * @param string $_balanceDt the BalanceDt
     * @return string
     */
    public function setBalanceDt($_balanceDt)
    {
        return ($this->BalanceDt = $_balanceDt);
    }
    /**
     * Get CollectionStatus value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getCollectionStatus()
    {
        return $this->CollectionStatus;
    }
    /**
     * Set CollectionStatus value
     * @param MicrobiltStructCodeDescription_Type $_collectionStatus the CollectionStatus
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setCollectionStatus($_collectionStatus)
    {
        return ($this->CollectionStatus = $_collectionStatus);
    }
    /**
     * Get StatusDt value
     * @return string|null
     */
    public function getStatusDt()
    {
        return $this->StatusDt;
    }
    /**
     * Set StatusDt value
     * @param string $_statusDt the StatusDt
     * @return string
     */
    public function setStatusDt($_statusDt)
    {
        return ($this->StatusDt = $_statusDt);
    }
    /**
     * Get ReportedDt value
     * @return string|null
     */
    public function getReportedDt()
    {
        return $this->ReportedDt;
    }
    /**
     * Set ReportedDt value
     * @param string $_reportedDt the ReportedDt
     * @return string
     */
    public function setReportedDt($_reportedDt)
    {
        return ($this->ReportedDt = $_reportedDt);
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
     * Get ClosureReason value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getClosureReason()
    {
        return $this->ClosureReason;
    }
    /**
     * Set ClosureReason value
     * @param MicrobiltStructMessage_Type $_closureReason the ClosureReason
     * @return MicrobiltStructMessage_Type
     */
    public function setClosureReason($_closureReason)
    {
        return ($this->ClosureReason = $_closureReason);
    }
    /**
     * Get PaidDt value
     * @return string|null
     */
    public function getPaidDt()
    {
        return $this->PaidDt;
    }
    /**
     * Set PaidDt value
     * @param string $_paidDt the PaidDt
     * @return string
     */
    public function setPaidDt($_paidDt)
    {
        return ($this->PaidDt = $_paidDt);
    }
    /**
     * Get PmtType value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getPmtType()
    {
        return $this->PmtType;
    }
    /**
     * Set PmtType value
     * @param MicrobiltStructCodeDescription_Type $_pmtType the PmtType
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setPmtType($_pmtType)
    {
        return ($this->PmtType = $_pmtType);
    }
    /**
     * Get Message value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltStructMessage_Type $_message the Message
     * @return MicrobiltStructMessage_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Get VerifiedDt value
     * @return string|null
     */
    public function getVerifiedDt()
    {
        return $this->VerifiedDt;
    }
    /**
     * Set VerifiedDt value
     * @param string $_verifiedDt the VerifiedDt
     * @return string
     */
    public function setVerifiedDt($_verifiedDt)
    {
        return ($this->VerifiedDt = $_verifiedDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCollection_Type
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
