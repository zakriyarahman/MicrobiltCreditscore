<?php
/**
 * File for class MicrobiltStructOfficersDirectors_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructOfficersDirectors_Type originally named OfficersDirectors_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructOfficersDirectors_Type extends MicrobiltStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The AsOfDate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $AsOfDate;
    /**
     * The DtFirstSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtFirstSeen;
    /**
     * The DtLastSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtLastSeen;
    /**
     * The RecordID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecordID;
    /**
     * The HistoricalInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $HistoricalInd;
    /**
     * Constructor method for OfficersDirectors_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructOrgInfo_Type $_orgInfo
     * @param MicrobiltStructMessage_Type $_message
     * @param date $_asOfDate
     * @param date $_dtFirstSeen
     * @param date $_dtLastSeen
     * @param string $_recordID
     * @param MicrobiltEnumBoolean $_historicalInd
     * @return MicrobiltStructOfficersDirectors_Type
     */
    public function __construct($_personInfo = NULL,$_orgInfo = NULL,$_message = NULL,$_asOfDate = NULL,$_dtFirstSeen = NULL,$_dtLastSeen = NULL,$_recordID = NULL,$_historicalInd = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'OrgInfo'=>$_orgInfo,'Message'=>$_message,'AsOfDate'=>$_asOfDate,'DtFirstSeen'=>$_dtFirstSeen,'DtLastSeen'=>$_dtLastSeen,'RecordID'=>$_recordID,'HistoricalInd'=>$_historicalInd),false);
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
     * Get AsOfDate value
     * @return date|null
     */
    public function getAsOfDate()
    {
        return $this->AsOfDate;
    }
    /**
     * Set AsOfDate value
     * @param date $_asOfDate the AsOfDate
     * @return date
     */
    public function setAsOfDate($_asOfDate)
    {
        return ($this->AsOfDate = $_asOfDate);
    }
    /**
     * Get DtFirstSeen value
     * @return date|null
     */
    public function getDtFirstSeen()
    {
        return $this->DtFirstSeen;
    }
    /**
     * Set DtFirstSeen value
     * @param date $_dtFirstSeen the DtFirstSeen
     * @return date
     */
    public function setDtFirstSeen($_dtFirstSeen)
    {
        return ($this->DtFirstSeen = $_dtFirstSeen);
    }
    /**
     * Get DtLastSeen value
     * @return date|null
     */
    public function getDtLastSeen()
    {
        return $this->DtLastSeen;
    }
    /**
     * Set DtLastSeen value
     * @param date $_dtLastSeen the DtLastSeen
     * @return date
     */
    public function setDtLastSeen($_dtLastSeen)
    {
        return ($this->DtLastSeen = $_dtLastSeen);
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
     * Get HistoricalInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getHistoricalInd()
    {
        return $this->HistoricalInd;
    }
    /**
     * Set HistoricalInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_historicalInd the HistoricalInd
     * @return MicrobiltEnumBoolean
     */
    public function setHistoricalInd($_historicalInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_historicalInd))
        {
            return false;
        }
        return ($this->HistoricalInd = $_historicalInd);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructOfficersDirectors_Type
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
