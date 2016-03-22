<?php
/**
 * File for class MicrobiltStructInternetDomain_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructInternetDomain_Type originally named InternetDomain_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructInternetDomain_Type extends MicrobiltStructAggregate
{
    /**
     * The DomainName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DomainName;
    /**
     * The DtLastSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtLastSeen;
    /**
     * The DtLastUpdated
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtLastUpdated;
    /**
     * The DtExpires
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtExpires;
    /**
     * The DtCreated
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtCreated;
    /**
     * The DtDatabase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DtDatabase;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * Constructor method for InternetDomain_Type
     * @see parent::__construct()
     * @param string $_domainName
     * @param date $_dtLastSeen
     * @param date $_dtLastUpdated
     * @param date $_dtExpires
     * @param date $_dtCreated
     * @param date $_dtDatabase
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @return MicrobiltStructInternetDomain_Type
     */
    public function __construct($_domainName = NULL,$_dtLastSeen = NULL,$_dtLastUpdated = NULL,$_dtExpires = NULL,$_dtCreated = NULL,$_dtDatabase = NULL,$_personInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('DomainName'=>$_domainName,'DtLastSeen'=>$_dtLastSeen,'DtLastUpdated'=>$_dtLastUpdated,'DtExpires'=>$_dtExpires,'DtCreated'=>$_dtCreated,'DtDatabase'=>$_dtDatabase,'PersonInfo'=>$_personInfo),false);
    }
    /**
     * Get DomainName value
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->DomainName;
    }
    /**
     * Set DomainName value
     * @param string $_domainName the DomainName
     * @return string
     */
    public function setDomainName($_domainName)
    {
        return ($this->DomainName = $_domainName);
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
     * Get DtLastUpdated value
     * @return date|null
     */
    public function getDtLastUpdated()
    {
        return $this->DtLastUpdated;
    }
    /**
     * Set DtLastUpdated value
     * @param date $_dtLastUpdated the DtLastUpdated
     * @return date
     */
    public function setDtLastUpdated($_dtLastUpdated)
    {
        return ($this->DtLastUpdated = $_dtLastUpdated);
    }
    /**
     * Get DtExpires value
     * @return date|null
     */
    public function getDtExpires()
    {
        return $this->DtExpires;
    }
    /**
     * Set DtExpires value
     * @param date $_dtExpires the DtExpires
     * @return date
     */
    public function setDtExpires($_dtExpires)
    {
        return ($this->DtExpires = $_dtExpires);
    }
    /**
     * Get DtCreated value
     * @return date|null
     */
    public function getDtCreated()
    {
        return $this->DtCreated;
    }
    /**
     * Set DtCreated value
     * @param date $_dtCreated the DtCreated
     * @return date
     */
    public function setDtCreated($_dtCreated)
    {
        return ($this->DtCreated = $_dtCreated);
    }
    /**
     * Get DtDatabase value
     * @return date|null
     */
    public function getDtDatabase()
    {
        return $this->DtDatabase;
    }
    /**
     * Set DtDatabase value
     * @param date $_dtDatabase the DtDatabase
     * @return date
     */
    public function setDtDatabase($_dtDatabase)
    {
        return ($this->DtDatabase = $_dtDatabase);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructInternetDomain_Type
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
