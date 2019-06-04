<?php

namespace Zakriyarahman\Microbilt\Commercial\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class CommercialUCC_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CommercialUCC_Type originally named CommercialUCC_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CommercialUCC_Type extends Aggregate
{
    /**
     * The PRType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PRType;
    /**
     * The PRStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PRStatus;
    /**
     * The CommercialDates
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CommercialDates_Type
     */
    public $CommercialDates;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The FilingState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingState;
    /**
     * The FilingLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingLocation;
    /**
     * The Parties
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Parties_Type
     */
    public $Parties;
    /**
     * The CollateralInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var CollateralInfo_Type
     */
    public $CollateralInfo;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $DisputeInd;
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Event_Type
     */
    public $Event;
    /**
     * The OfficersDirectors
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var OfficersDirectors_Type
     */
    public $OfficersDirectors;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * The LegalActionCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodeDescription_Type
     */
    public $LegalActionCode;
    /**
     * The OriginalUCCInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var OriginalUCCInfo_Type
     */
    public $OriginalUCCInfo;
    /**
     * Constructor method for CommercialUCC_Type
     * @see parent::__construct()
     * @param string $_pRType
     * @param string $_pRStatus
     * @param CommercialDates_Type $_commercialDates
     * @param string $_documentNumber
     * @param string $_filingState
     * @param string $_filingLocation
     * @param Parties_Type $_parties
     * @param CollateralInfo_Type $_collateralInfo
     * @param Boolean $_disputeInd
     * @param Event_Type $_event
     * @param OfficersDirectors_Type $_officersDirectors
     * @param Message_Type $_message
     * @param CodeDescription_Type $_legalActionCode
     * @param OriginalUCCInfo_Type $_originalUCCInfo
     * @return CommercialUCC_Type
     */
    public function __construct($_pRType = NULL,$_pRStatus = NULL,$_commercialDates = NULL,$_documentNumber = NULL,$_filingState = NULL,$_filingLocation = NULL,$_parties = NULL,$_collateralInfo = NULL,$_disputeInd = NULL,$_event = NULL,$_officersDirectors = NULL,$_message = NULL,$_legalActionCode = NULL,$_originalUCCInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PRType'=>$_pRType,'PRStatus'=>$_pRStatus,'CommercialDates'=>$_commercialDates,'DocumentNumber'=>$_documentNumber,'FilingState'=>$_filingState,'FilingLocation'=>$_filingLocation,'Parties'=>$_parties,'CollateralInfo'=>$_collateralInfo,'DisputeInd'=>$_disputeInd,'Event'=>$_event,'OfficersDirectors'=>$_officersDirectors,'Message'=>$_message,'LegalActionCode'=>$_legalActionCode,'OriginalUCCInfo'=>$_originalUCCInfo),false);
    }
    /**
     * Get PRType value
     * @return string|null
     */
    public function getPRType()
    {
        return $this->PRType;
    }
    /**
     * Set PRType value
     * @param string $_pRType the PRType
     * @return string
     */
    public function setPRType($_pRType)
    {
        return ($this->PRType = $_pRType);
    }
    /**
     * Get PRStatus value
     * @return string|null
     */
    public function getPRStatus()
    {
        return $this->PRStatus;
    }
    /**
     * Set PRStatus value
     * @param string $_pRStatus the PRStatus
     * @return string
     */
    public function setPRStatus($_pRStatus)
    {
        return ($this->PRStatus = $_pRStatus);
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
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $_documentNumber the DocumentNumber
     * @return string
     */
    public function setDocumentNumber($_documentNumber)
    {
        return ($this->DocumentNumber = $_documentNumber);
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
     * Get FilingLocation value
     * @return string|null
     */
    public function getFilingLocation()
    {
        return $this->FilingLocation;
    }
    /**
     * Set FilingLocation value
     * @param string $_filingLocation the FilingLocation
     * @return string
     */
    public function setFilingLocation($_filingLocation)
    {
        return ($this->FilingLocation = $_filingLocation);
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
     * Get CollateralInfo value
     * @return CollateralInfo_Type|null
     */
    public function getCollateralInfo()
    {
        return $this->CollateralInfo;
    }
    /**
     * Set CollateralInfo value
     * @param CollateralInfo_Type $_collateralInfo the CollateralInfo
     * @return CollateralInfo_Type
     */
    public function setCollateralInfo($_collateralInfo)
    {
        return ($this->CollateralInfo = $_collateralInfo);
    }
    /**
     * Get DisputeInd value
     * @return Boolean|null
     */
    public function getDisputeInd()
    {
        return $this->DisputeInd;
    }
    /**
     * Set DisputeInd value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_disputeInd the DisputeInd
     * @return Boolean
     */
    public function setDisputeInd($_disputeInd)
    {
        if(!Boolean::valueIsValid($_disputeInd))
        {
            return false;
        }
        return ($this->DisputeInd = $_disputeInd);
    }
    /**
     * Get Event value
     * @return Event_Type|null
     */
    public function getEvent()
    {
        return $this->Event;
    }
    /**
     * Set Event value
     * @param Event_Type $_event the Event
     * @return Event_Type
     */
    public function setEvent($_event)
    {
        return ($this->Event = $_event);
    }
    /**
     * Get OfficersDirectors value
     * @return OfficersDirectors_Type|null
     */
    public function getOfficersDirectors()
    {
        return $this->OfficersDirectors;
    }
    /**
     * Set OfficersDirectors value
     * @param OfficersDirectors_Type $_officersDirectors the OfficersDirectors
     * @return OfficersDirectors_Type
     */
    public function setOfficersDirectors($_officersDirectors)
    {
        return ($this->OfficersDirectors = $_officersDirectors);
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
     * Get LegalActionCode value
     * @return CodeDescription_Type|null
     */
    public function getLegalActionCode()
    {
        return $this->LegalActionCode;
    }
    /**
     * Set LegalActionCode value
     * @param CodeDescription_Type $_legalActionCode the LegalActionCode
     * @return CodeDescription_Type
     */
    public function setLegalActionCode($_legalActionCode)
    {
        return ($this->LegalActionCode = $_legalActionCode);
    }
    /**
     * Get OriginalUCCInfo value
     * @return OriginalUCCInfo_Type|null
     */
    public function getOriginalUCCInfo()
    {
        return $this->OriginalUCCInfo;
    }
    /**
     * Set OriginalUCCInfo value
     * @param OriginalUCCInfo_Type $_originalUCCInfo the OriginalUCCInfo
     * @return OriginalUCCInfo_Type
     */
    public function setOriginalUCCInfo($_originalUCCInfo)
    {
        return ($this->OriginalUCCInfo = $_originalUCCInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CommercialUCC_Type
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
