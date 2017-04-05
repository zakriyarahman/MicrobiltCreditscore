<?php
/**
 * File for class MicrobiltStructPersonName_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPersonName_Type originally named PersonName_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPersonName_Type extends MicrobiltStructAggregate
{
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FirstName;
    /**
     * The FullName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FullName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MiddleName;
    /**
     * The TitlePrefix
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TitlePrefix;
    /**
     * The NameSuffix
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NameSuffix;
    /**
     * The Nickname
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Nickname;
    /**
     * The LegalName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LegalName;
    /**
     * The MaidenName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MaidenName;
    /**
     * The OfficialTitle
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OfficialTitle;
    /**
     * The Initials
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Initials;
    /**
     * The FirstSeenDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FirstSeenDt;
    /**
     * The DtLastSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtLastSeen;
    /**
     * Constructor method for PersonName_Type
     * @see parent::__construct()
     * @param string $_firstName
     * @param string $_fullName
     * @param string $_lastName
     * @param string $_middleName
     * @param string $_titlePrefix
     * @param string $_nameSuffix
     * @param string $_nickname
     * @param string $_legalName
     * @param string $_maidenName
     * @param string $_officialTitle
     * @param string $_initials
     * @param string $_firstSeenDt
     * @param string $_dtLastSeen
     * @return MicrobiltStructPersonName_Type
     */
    public function __construct($_firstName = NULL,$_fullName = NULL,$_lastName = NULL,$_middleName = NULL,$_titlePrefix = NULL,$_nameSuffix = NULL,$_nickname = NULL,$_legalName = NULL,$_maidenName = NULL,$_officialTitle = NULL,$_initials = NULL,$_firstSeenDt = NULL,$_dtLastSeen = NULL)
    {
        MicrobiltWsdlClass::__construct(array('FirstName'=>$_firstName,'FullName'=>$_fullName,'LastName'=>$_lastName,'MiddleName'=>$_middleName,'TitlePrefix'=>$_titlePrefix,'NameSuffix'=>$_nameSuffix,'Nickname'=>$_nickname,'LegalName'=>$_legalName,'MaidenName'=>$_maidenName,'OfficialTitle'=>$_officialTitle,'Initials'=>$_initials,'FirstSeenDt'=>$_firstSeenDt,'DtLastSeen'=>$_dtLastSeen),false);
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $_firstName the FirstName
     * @return string
     */
    public function setFirstName($_firstName)
    {
        return ($this->FirstName = $_firstName);
    }
    /**
     * Get FullName value
     * @return string|null
     */
    public function getFullName()
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $_fullName the FullName
     * @return string
     */
    public function setFullName($_fullName)
    {
        return ($this->FullName = $_fullName);
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $_lastName the LastName
     * @return string
     */
    public function setLastName($_lastName)
    {
        return ($this->LastName = $_lastName);
    }
    /**
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $_middleName the MiddleName
     * @return string
     */
    public function setMiddleName($_middleName)
    {
        return ($this->MiddleName = $_middleName);
    }
    /**
     * Get TitlePrefix value
     * @return string|null
     */
    public function getTitlePrefix()
    {
        return $this->TitlePrefix;
    }
    /**
     * Set TitlePrefix value
     * @param string $_titlePrefix the TitlePrefix
     * @return string
     */
    public function setTitlePrefix($_titlePrefix)
    {
        return ($this->TitlePrefix = $_titlePrefix);
    }
    /**
     * Get NameSuffix value
     * @return string|null
     */
    public function getNameSuffix()
    {
        return $this->NameSuffix;
    }
    /**
     * Set NameSuffix value
     * @param string $_nameSuffix the NameSuffix
     * @return string
     */
    public function setNameSuffix($_nameSuffix)
    {
        return ($this->NameSuffix = $_nameSuffix);
    }
    /**
     * Get Nickname value
     * @return string|null
     */
    public function getNickname()
    {
        return $this->Nickname;
    }
    /**
     * Set Nickname value
     * @param string $_nickname the Nickname
     * @return string
     */
    public function setNickname($_nickname)
    {
        return ($this->Nickname = $_nickname);
    }
    /**
     * Get LegalName value
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->LegalName;
    }
    /**
     * Set LegalName value
     * @param string $_legalName the LegalName
     * @return string
     */
    public function setLegalName($_legalName)
    {
        return ($this->LegalName = $_legalName);
    }
    /**
     * Get MaidenName value
     * @return string|null
     */
    public function getMaidenName()
    {
        return $this->MaidenName;
    }
    /**
     * Set MaidenName value
     * @param string $_maidenName the MaidenName
     * @return string
     */
    public function setMaidenName($_maidenName)
    {
        return ($this->MaidenName = $_maidenName);
    }
    /**
     * Get OfficialTitle value
     * @return string|null
     */
    public function getOfficialTitle()
    {
        return $this->OfficialTitle;
    }
    /**
     * Set OfficialTitle value
     * @param string $_officialTitle the OfficialTitle
     * @return string
     */
    public function setOfficialTitle($_officialTitle)
    {
        return ($this->OfficialTitle = $_officialTitle);
    }
    /**
     * Get Initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->Initials;
    }
    /**
     * Set Initials value
     * @param string $_initials the Initials
     * @return string
     */
    public function setInitials($_initials)
    {
        return ($this->Initials = $_initials);
    }
    /**
     * Get FirstSeenDt value
     * @return string|null
     */
    public function getFirstSeenDt()
    {
        return $this->FirstSeenDt;
    }
    /**
     * Set FirstSeenDt value
     * @param string $_firstSeenDt the FirstSeenDt
     * @return string
     */
    public function setFirstSeenDt($_firstSeenDt)
    {
        return ($this->FirstSeenDt = $_firstSeenDt);
    }
    /**
     * Get DtLastSeen value
     * @return string|null
     */
    public function getDtLastSeen()
    {
        return $this->DtLastSeen;
    }
    /**
     * Set DtLastSeen value
     * @param string $_dtLastSeen the DtLastSeen
     * @return string
     */
    public function setDtLastSeen($_dtLastSeen)
    {
        return ($this->DtLastSeen = $_dtLastSeen);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructPersonName_Type
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
