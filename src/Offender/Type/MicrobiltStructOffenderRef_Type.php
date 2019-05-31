<?php

namespace Zakriyarahman\Microbilt\Offender\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructOffenderRef_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructOffenderRef_Type originally named OffenderRef_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructOffenderRef_Type extends MicrobiltStructAggregate
{
    /**
     * The OffenderID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OffenderID;
    /**
     * The DOCNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DOCNum;
    /**
     * The SORNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SORNum;
    /**
     * The StateIDNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StateIDNum;
    /**
     * The FBINum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FBINum;
    /**
     * The NCICNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NCICNum;
    /**
     * The FingerprintOnFile
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FingerprintOnFile;
    /**
     * Constructor method for OffenderRef_Type
     * @see parent::__construct()
     * @param string $_offenderID
     * @param string $_dOCNum
     * @param string $_sORNum
     * @param string $_stateIDNum
     * @param string $_fBINum
     * @param string $_nCICNum
     * @param string $_fingerprintOnFile
     * @return MicrobiltStructOffenderRef_Type
     */
    public function __construct($_offenderID = NULL,$_dOCNum = NULL,$_sORNum = NULL,$_stateIDNum = NULL,$_fBINum = NULL,$_nCICNum = NULL,$_fingerprintOnFile = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OffenderID'=>$_offenderID,'DOCNum'=>$_dOCNum,'SORNum'=>$_sORNum,'StateIDNum'=>$_stateIDNum,'FBINum'=>$_fBINum,'NCICNum'=>$_nCICNum,'FingerprintOnFile'=>$_fingerprintOnFile),false);
    }
    /**
     * Get OffenderID value
     * @return string|null
     */
    public function getOffenderID()
    {
        return $this->OffenderID;
    }
    /**
     * Set OffenderID value
     * @param string $_offenderID the OffenderID
     * @return string
     */
    public function setOffenderID($_offenderID)
    {
        return ($this->OffenderID = $_offenderID);
    }
    /**
     * Get DOCNum value
     * @return string|null
     */
    public function getDOCNum()
    {
        return $this->DOCNum;
    }
    /**
     * Set DOCNum value
     * @param string $_dOCNum the DOCNum
     * @return string
     */
    public function setDOCNum($_dOCNum)
    {
        return ($this->DOCNum = $_dOCNum);
    }
    /**
     * Get SORNum value
     * @return string|null
     */
    public function getSORNum()
    {
        return $this->SORNum;
    }
    /**
     * Set SORNum value
     * @param string $_sORNum the SORNum
     * @return string
     */
    public function setSORNum($_sORNum)
    {
        return ($this->SORNum = $_sORNum);
    }
    /**
     * Get StateIDNum value
     * @return string|null
     */
    public function getStateIDNum()
    {
        return $this->StateIDNum;
    }
    /**
     * Set StateIDNum value
     * @param string $_stateIDNum the StateIDNum
     * @return string
     */
    public function setStateIDNum($_stateIDNum)
    {
        return ($this->StateIDNum = $_stateIDNum);
    }
    /**
     * Get FBINum value
     * @return string|null
     */
    public function getFBINum()
    {
        return $this->FBINum;
    }
    /**
     * Set FBINum value
     * @param string $_fBINum the FBINum
     * @return string
     */
    public function setFBINum($_fBINum)
    {
        return ($this->FBINum = $_fBINum);
    }
    /**
     * Get NCICNum value
     * @return string|null
     */
    public function getNCICNum()
    {
        return $this->NCICNum;
    }
    /**
     * Set NCICNum value
     * @param string $_nCICNum the NCICNum
     * @return string
     */
    public function setNCICNum($_nCICNum)
    {
        return ($this->NCICNum = $_nCICNum);
    }
    /**
     * Get FingerprintOnFile value
     * @return string|null
     */
    public function getFingerprintOnFile()
    {
        return $this->FingerprintOnFile;
    }
    /**
     * Set FingerprintOnFile value
     * @param string $_fingerprintOnFile the FingerprintOnFile
     * @return string
     */
    public function setFingerprintOnFile($_fingerprintOnFile)
    {
        return ($this->FingerprintOnFile = $_fingerprintOnFile);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructOffenderRef_Type
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
