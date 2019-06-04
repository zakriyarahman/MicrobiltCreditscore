<?php

namespace Zakriyarahman\Microbilt\Social\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class SocialNetworkProfileInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for SocialNetworkProfileInfo_Type originally named SocialNetworkProfileInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class SocialNetworkProfileInfo_Type extends Aggregate
{
    /**
     * The ProfileSite
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProfileSite;
    /**
     * The ProfileURL
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProfileURL;
    /**
     * The PublicURL
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PublicURL;
    /**
     * The ProfileRegion
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProfileRegion;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UserID;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UserName;
    /**
     * The MembershipDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MembershipDt;
    /**
     * The LastActivityDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastActivityDt;
    /**
     * Constructor method for SocialNetworkProfileInfo_Type
     * @see parent::__construct()
     * @param string $_profileSite
     * @param string $_profileURL
     * @param string $_publicURL
     * @param string $_profileRegion
     * @param string $_userID
     * @param string $_userName
     * @param string $_membershipDt
     * @param string $_lastActivityDt
     * @return SocialNetworkProfileInfo_Type
     */
    public function __construct($_profileSite = NULL,$_profileURL = NULL,$_publicURL = NULL,$_profileRegion = NULL,$_userID = NULL,$_userName = NULL,$_membershipDt = NULL,$_lastActivityDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ProfileSite'=>$_profileSite,'ProfileURL'=>$_profileURL,'PublicURL'=>$_publicURL,'ProfileRegion'=>$_profileRegion,'UserID'=>$_userID,'UserName'=>$_userName,'MembershipDt'=>$_membershipDt,'LastActivityDt'=>$_lastActivityDt),false);
    }
    /**
     * Get ProfileSite value
     * @return string|null
     */
    public function getProfileSite()
    {
        return $this->ProfileSite;
    }
    /**
     * Set ProfileSite value
     * @param string $_profileSite the ProfileSite
     * @return string
     */
    public function setProfileSite($_profileSite)
    {
        return ($this->ProfileSite = $_profileSite);
    }
    /**
     * Get ProfileURL value
     * @return string|null
     */
    public function getProfileURL()
    {
        return $this->ProfileURL;
    }
    /**
     * Set ProfileURL value
     * @param string $_profileURL the ProfileURL
     * @return string
     */
    public function setProfileURL($_profileURL)
    {
        return ($this->ProfileURL = $_profileURL);
    }
    /**
     * Get PublicURL value
     * @return string|null
     */
    public function getPublicURL()
    {
        return $this->PublicURL;
    }
    /**
     * Set PublicURL value
     * @param string $_publicURL the PublicURL
     * @return string
     */
    public function setPublicURL($_publicURL)
    {
        return ($this->PublicURL = $_publicURL);
    }
    /**
     * Get ProfileRegion value
     * @return string|null
     */
    public function getProfileRegion()
    {
        return $this->ProfileRegion;
    }
    /**
     * Set ProfileRegion value
     * @param string $_profileRegion the ProfileRegion
     * @return string
     */
    public function setProfileRegion($_profileRegion)
    {
        return ($this->ProfileRegion = $_profileRegion);
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $_userID the UserID
     * @return string
     */
    public function setUserID($_userID)
    {
        return ($this->UserID = $_userID);
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $_userName the UserName
     * @return string
     */
    public function setUserName($_userName)
    {
        return ($this->UserName = $_userName);
    }
    /**
     * Get MembershipDt value
     * @return string|null
     */
    public function getMembershipDt()
    {
        return $this->MembershipDt;
    }
    /**
     * Set MembershipDt value
     * @param string $_membershipDt the MembershipDt
     * @return string
     */
    public function setMembershipDt($_membershipDt)
    {
        return ($this->MembershipDt = $_membershipDt);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SocialNetworkProfileInfo_Type
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
