<?php

namespace Zakriyarahman\Microbilt\Corp\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class CorpLinkageSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CorpLinkageSummary_Type originally named CorpLinkageSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CorpLinkageSummary_Type extends Aggregate
{
    /**
     * The BusType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusType;
    /**
     * The NumOfSubsidiaries
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumOfSubsidiaries;
    /**
     * The NumOfBranches
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumOfBranches;
    /**
     * The BranchesInMidW
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $BranchesInMidW;
    /**
     * The BranchesInNE
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $BranchesInNE;
    /**
     * The BranchesInNW
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $BranchesInNW;
    /**
     * The BranchesInS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $BranchesInS;
    /**
     * The BranchesInCentral
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $BranchesInCentral;
    /**
     * The BranchesInSW
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $BranchesInSW;
    /**
     * Constructor method for CorpLinkageSummary_Type
     * @see parent::__construct()
     * @param string $_busType
     * @param string $_numOfSubsidiaries
     * @param string $_numOfBranches
     * @param Boolean $_branchesInMidW
     * @param Boolean $_branchesInNE
     * @param Boolean $_branchesInNW
     * @param Boolean $_branchesInS
     * @param Boolean $_branchesInCentral
     * @param Boolean $_branchesInSW
     * @return CorpLinkageSummary_Type
     */
    public function __construct($_busType = NULL,$_numOfSubsidiaries = NULL,$_numOfBranches = NULL,$_branchesInMidW = NULL,$_branchesInNE = NULL,$_branchesInNW = NULL,$_branchesInS = NULL,$_branchesInCentral = NULL,$_branchesInSW = NULL)
    {
        MicrobiltWsdlClass::__construct(array('BusType'=>$_busType,'NumOfSubsidiaries'=>$_numOfSubsidiaries,'NumOfBranches'=>$_numOfBranches,'BranchesInMidW'=>$_branchesInMidW,'BranchesInNE'=>$_branchesInNE,'BranchesInNW'=>$_branchesInNW,'BranchesInS'=>$_branchesInS,'BranchesInCentral'=>$_branchesInCentral,'BranchesInSW'=>$_branchesInSW),false);
    }
    /**
     * Get BusType value
     * @return string|null
     */
    public function getBusType()
    {
        return $this->BusType;
    }
    /**
     * Set BusType value
     * @param string $_busType the BusType
     * @return string
     */
    public function setBusType($_busType)
    {
        return ($this->BusType = $_busType);
    }
    /**
     * Get NumOfSubsidiaries value
     * @return string|null
     */
    public function getNumOfSubsidiaries()
    {
        return $this->NumOfSubsidiaries;
    }
    /**
     * Set NumOfSubsidiaries value
     * @param string $_numOfSubsidiaries the NumOfSubsidiaries
     * @return string
     */
    public function setNumOfSubsidiaries($_numOfSubsidiaries)
    {
        return ($this->NumOfSubsidiaries = $_numOfSubsidiaries);
    }
    /**
     * Get NumOfBranches value
     * @return string|null
     */
    public function getNumOfBranches()
    {
        return $this->NumOfBranches;
    }
    /**
     * Set NumOfBranches value
     * @param string $_numOfBranches the NumOfBranches
     * @return string
     */
    public function setNumOfBranches($_numOfBranches)
    {
        return ($this->NumOfBranches = $_numOfBranches);
    }
    /**
     * Get BranchesInMidW value
     * @return Boolean|null
     */
    public function getBranchesInMidW()
    {
        return $this->BranchesInMidW;
    }
    /**
     * Set BranchesInMidW value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_branchesInMidW the BranchesInMidW
     * @return Boolean
     */
    public function setBranchesInMidW($_branchesInMidW)
    {
        if(!Boolean::valueIsValid($_branchesInMidW))
        {
            return false;
        }
        return ($this->BranchesInMidW = $_branchesInMidW);
    }
    /**
     * Get BranchesInNE value
     * @return Boolean|null
     */
    public function getBranchesInNE()
    {
        return $this->BranchesInNE;
    }
    /**
     * Set BranchesInNE value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_branchesInNE the BranchesInNE
     * @return Boolean
     */
    public function setBranchesInNE($_branchesInNE)
    {
        if(!Boolean::valueIsValid($_branchesInNE))
        {
            return false;
        }
        return ($this->BranchesInNE = $_branchesInNE);
    }
    /**
     * Get BranchesInNW value
     * @return Boolean|null
     */
    public function getBranchesInNW()
    {
        return $this->BranchesInNW;
    }
    /**
     * Set BranchesInNW value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_branchesInNW the BranchesInNW
     * @return Boolean
     */
    public function setBranchesInNW($_branchesInNW)
    {
        if(!Boolean::valueIsValid($_branchesInNW))
        {
            return false;
        }
        return ($this->BranchesInNW = $_branchesInNW);
    }
    /**
     * Get BranchesInS value
     * @return Boolean|null
     */
    public function getBranchesInS()
    {
        return $this->BranchesInS;
    }
    /**
     * Set BranchesInS value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_branchesInS the BranchesInS
     * @return Boolean
     */
    public function setBranchesInS($_branchesInS)
    {
        if(!Boolean::valueIsValid($_branchesInS))
        {
            return false;
        }
        return ($this->BranchesInS = $_branchesInS);
    }
    /**
     * Get BranchesInCentral value
     * @return Boolean|null
     */
    public function getBranchesInCentral()
    {
        return $this->BranchesInCentral;
    }
    /**
     * Set BranchesInCentral value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_branchesInCentral the BranchesInCentral
     * @return Boolean
     */
    public function setBranchesInCentral($_branchesInCentral)
    {
        if(!Boolean::valueIsValid($_branchesInCentral))
        {
            return false;
        }
        return ($this->BranchesInCentral = $_branchesInCentral);
    }
    /**
     * Get BranchesInSW value
     * @return Boolean|null
     */
    public function getBranchesInSW()
    {
        return $this->BranchesInSW;
    }
    /**
     * Set BranchesInSW value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_branchesInSW the BranchesInSW
     * @return Boolean
     */
    public function setBranchesInSW($_branchesInSW)
    {
        if(!Boolean::valueIsValid($_branchesInSW))
        {
            return false;
        }
        return ($this->BranchesInSW = $_branchesInSW);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CorpLinkageSummary_Type
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
