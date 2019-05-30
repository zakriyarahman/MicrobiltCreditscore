<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructParties_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructParties_Type originally named Parties_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructParties_Type extends MicrobiltStructAggregate
{
    /**
     * The Ruling
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Ruling;
    /**
     * The PartyType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PartyType;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The RecordID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecordID;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * Constructor method for Parties_Type
     * @see parent::__construct()
     * @param string $_ruling
     * @param string $_partyType
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param string $_recordID
     * @param MicrobiltStructMessage_Type $_message
     * @param MicrobiltStructOrgInfo_Type $_orgInfo
     * @return MicrobiltStructParties_Type
     */
    public function __construct($_ruling = NULL,$_partyType = NULL,$_personInfo = NULL,$_recordID = NULL,$_message = NULL,$_orgInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Ruling'=>$_ruling,'PartyType'=>$_partyType,'PersonInfo'=>$_personInfo,'RecordID'=>$_recordID,'Message'=>$_message,'OrgInfo'=>$_orgInfo),false);
    }
    /**
     * Get Ruling value
     * @return string|null
     */
    public function getRuling()
    {
        return $this->Ruling;
    }
    /**
     * Set Ruling value
     * @param string $_ruling the Ruling
     * @return string
     */
    public function setRuling($_ruling)
    {
        return ($this->Ruling = $_ruling);
    }
    /**
     * Get PartyType value
     * @return string|null
     */
    public function getPartyType()
    {
        return $this->PartyType;
    }
    /**
     * Set PartyType value
     * @param string $_partyType the PartyType
     * @return string
     */
    public function setPartyType($_partyType)
    {
        return ($this->PartyType = $_partyType);
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
     * Get RecordID value
     * @return string|null
     */
    public function getRecordID()
    {
        return $this->RecordID;
    }
    /**
     * Set RecordID value
     * @param string $_recordID the RecordID
     * @return string
     */
    public function setRecordID($_recordID)
    {
        return ($this->RecordID = $_recordID);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructParties_Type
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
