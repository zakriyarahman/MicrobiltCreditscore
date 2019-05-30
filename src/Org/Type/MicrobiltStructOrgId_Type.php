<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructOrgId_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructOrgId_Type originally named OrgId_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructOrgId_Type extends MicrobiltStructAggregate
{
    /**
     * The KOB
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $KOB;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Description;
    /**
     * The SubscriberNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SubscriberNum;
    /**
     * The BurMarket
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BurMarket;
    /**
     * The BurSubMarket
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BurSubMarket;
    /**
     * The CorpID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CorpID;
    /**
     * Constructor method for OrgId_Type
     * @see parent::__construct()
     * @param string $_kOB
     * @param string $_description
     * @param string $_subscriberNum
     * @param string $_burMarket
     * @param string $_burSubMarket
     * @param string $_corpID
     * @return MicrobiltStructOrgId_Type
     */
    public function __construct($_kOB = NULL,$_description = NULL,$_subscriberNum = NULL,$_burMarket = NULL,$_burSubMarket = NULL,$_corpID = NULL)
    {
        MicrobiltWsdlClass::__construct(array('KOB'=>$_kOB,'Description'=>$_description,'SubscriberNum'=>$_subscriberNum,'BurMarket'=>$_burMarket,'BurSubMarket'=>$_burSubMarket,'CorpID'=>$_corpID),false);
    }
    /**
     * Get KOB value
     * @return string|null
     */
    public function getKOB()
    {
        return $this->KOB;
    }
    /**
     * Set KOB value
     * @param string $_kOB the KOB
     * @return string
     */
    public function setKOB($_kOB)
    {
        return ($this->KOB = $_kOB);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $_description the Description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->Description = $_description);
    }
    /**
     * Get SubscriberNum value
     * @return string|null
     */
    public function getSubscriberNum()
    {
        return $this->SubscriberNum;
    }
    /**
     * Set SubscriberNum value
     * @param string $_subscriberNum the SubscriberNum
     * @return string
     */
    public function setSubscriberNum($_subscriberNum)
    {
        return ($this->SubscriberNum = $_subscriberNum);
    }
    /**
     * Get BurMarket value
     * @return string|null
     */
    public function getBurMarket()
    {
        return $this->BurMarket;
    }
    /**
     * Set BurMarket value
     * @param string $_burMarket the BurMarket
     * @return string
     */
    public function setBurMarket($_burMarket)
    {
        return ($this->BurMarket = $_burMarket);
    }
    /**
     * Get BurSubMarket value
     * @return string|null
     */
    public function getBurSubMarket()
    {
        return $this->BurSubMarket;
    }
    /**
     * Set BurSubMarket value
     * @param string $_burSubMarket the BurSubMarket
     * @return string
     */
    public function setBurSubMarket($_burSubMarket)
    {
        return ($this->BurSubMarket = $_burSubMarket);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructOrgId_Type
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
